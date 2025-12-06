<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use App\Service\ResetPasswordService;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Parameter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\ResetPassword\Controller\ResetPasswordControllerTrait;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;


#[Route('/reset-password')]
class ResetPasswordController extends AbstractController
{
    use ResetPasswordControllerTrait;

    public function __construct(
        private ResetPasswordHelperInterface $resetPasswordHelper,
        private EntityManagerInterface $entityManager,
        private ResetPasswordService $resetPasswordService,
        private EmailService $emailService
    ) {}

    #[Route('', name: 'app_forgot_password_request')]
    public function request(Request $request, MailerInterface $mailer, TranslatorInterface $translator): Response
    {
        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var string $email */
            $email = $form->get('email')->getData();


            return $this->processSendingPasswordResetEmail(
                $email,
                $mailer,
                $translator
            );
        }

        return $this->render('reset_password/request.html.twig', [
            'requestForm' => $form,
        ]);
    }

    #[Route('/check-email', name: 'app_check_email')]
    public function checkEmail(Request $request): Response
    {
        $errorMessage = $request->query->get('errorMesage');

        if (null === ($resetToken = $this->getTokenObjectFromSession())) {
            $resetToken = $this->resetPasswordHelper->generateFakeResetToken();
        }

        return $this->render('reset_password/check_email.html.twig', [
            'resetToken' => $resetToken,
            'errorMessage' => $errorMessage,
        ]);
    }

    #[Route('/reset/{token}', name: 'app_reset_password')]
    public function reset(Request $request, string $token): Response
    {
        if (!$token) {
            $this->storeTokenInSession($token);
            return $this->redirectToRoute('app_reset_password');
        }


        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('success', "Votre mot de passe a été réinitialisé avec succès.");
            return $this->redirectToRoute('app_login',);
        }

        return $this->render('reset_password/reset.html.twig', [
            'resetForm' => $form,
        ]);
    }

    private function validateTokenAndGetUser(): User|RedirectResponse
    {
        $token = $this->getTokenFromSession();
        if (null === $token) {
            return $this->redirectToRoute('app_login');
        }

        try {
            return $this->resetPasswordHelper->validateTokenAndFetchUser($token);
        } catch (ResetPasswordExceptionInterface $e) {
            $this->addFlash('danger', "Une erreur est survenue lors de la modification de votre mot de passe. Veuillez réessayer.");
            return $this->redirectToRoute('app_login');
        }
    }

    private function handlePasswordReset(User $user, $form, string $token): RedirectResponse
    {
        $plainPassword = $form->get('plainPassword')->getData();
        $this->resetPasswordService->resetPassword($user, $plainPassword, $token);
        $this->cleanSessionAfterReset();
        $this->addFlash('success', "Votre mot de passe a été réinitialisé avec succès.");
        return $this->redirectToRoute('app_login');
    }

    private function processSendingPasswordResetEmail(string $emailFormData, MailerInterface $mailer, TranslatorInterface $translator): RedirectResponse
    {
        $user = $this->entityManager->getRepository(User::class)->findOneBy([
            'email' => $emailFormData,
        ]);


        if (!$user) {
            return $this->redirectToRoute('app_check_email');
        }

        try {
            $resetToken = $this->resetPasswordHelper->generateResetToken($user);
            $email = $this->emailService->sendResetPasswordEmail($user, $resetToken);
            $mailer->send($email);
            $this->setTokenObjectInSession($resetToken);
        } catch (ResetPasswordExceptionInterface $e) {

            return $this->redirectToRoute('app_check_email', [
                'errorMesage' => "Vous avez déjà demandé une réinitialisation de mot de passe récemment. Veuillez vérifier vos emails ou réessayer plus tard.",
            ]);
        }


        return $this->redirectToRoute('app_check_email');
    }
}
