<?php

namespace App\Controller;

use App\Enum\Role;
use App\Entity\User;
use App\Form\UserType;
use App\Service\UserService;
use App\Service\EmailService;
use App\Security\EmailVerifier;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

final class UserController extends AbstractController
{
    private $emailService;
    private $userService;


    public function __construct(UserService $userService, private EmailVerifier $emailVerifier, private VerifyEmailHelperInterface $verifyEmailHelper, EmailService $emailService)
    {

        $this->emailService = $emailService;
        $this->userService = $userService;
    }




    #[Route('/inscription', name: 'app_register')]
    public function index(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userData = $form->getData();
            $this->userService->register($userData);
            return $this->redirectToRoute('app_login');
        }

        return $this->render('user/index.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $id = $request->query->get('id');

        if (null === $id) {
            return $this->redirectToRoute('app_login');
            $this->addFlash('error', 'une erreur est survenue lors de la vérification de votre compte.(id null)');
        }

        $user = $userRepository->find($id);

        if (null === $user) {
            return $this->redirectToRoute('app_login');
            $this->addFlash('error', 'une erreur est survenue lors de la vérification de votre compte.(user null)');
        }
        try {
            if (!$user->isVerified()) {
                $this->verifyEmailHelper->validateEmailConfirmationFromRequest($request, $user->getId(), $user->getEmail());
                $user->setIsVerified(true);
                $user->setIsActive(true);
                $user->setUpdatedAt(new \DateTimeImmutable());
                $entityManager->persist($user);
                $entityManager->flush();
                $this->emailService->displayMessage('success', 'Votre compte a été vérifié avec succès. Vous pouvez maintenant vous connecter.');
            } else {
                $this->emailService->displayMessage('info', 'Votre compte est déjà vérifié.');
            }
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_login');
        }


        return $this->redirectToRoute('app_login');
    }
}
