<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Service\EmailService;
use App\Security\EmailVerifier;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

final class UserController extends AbstractController
{
    private $emailService;


    public function __construct(private EmailVerifier $emailVerifier,private VerifyEmailHelperInterface $verifyEmailHelper, EmailService $emailService)
    {

        $this->emailService = $emailService;
    }




    #[Route('/inscription', name: 'app_register')]
    public function index(Request $request, EntityManagerInterface $entityManager ): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRoles(['ROLE_USER']);
            $user->setIsVerified(false);
            $user->setCreatedAt(new \DateTimeImmutable());
            $user->setUpdatedAt(new \DateTimeImmutable());
            $user->setPassword(password_hash($user->getPassword(), PASSWORD_DEFAULT));
            $user = $form->getData();

            try {
            $entityManager->persist($user);             
            $entityManager->flush();
            
            $this->emailService->sendEmailConfirmation($user, false);
           
            $this->addFlash('success', 'Votre compte a été crée avec succès. Un email de confirmation vous a été envoyé. Veuillez vérifier votre boîte de réception.');

        } catch (UniqueConstraintViolationException $e) {
            $this->addFlash('error', 'Cet email existe déjà. Veuillez en choisir un autre.');
        }
            return $this->redirectToRoute('app_login');
        }
        return $this->render('user/index.html.twig', [
            'form' => $form
        ]);

    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $id = $request->query->get('id'); // retrieve the user id from the url  

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
            $this->verifyEmailHelper->validateEmailConfirmationFromRequest($request, $user->getId(), $user->getEmail());
            $user->setIsVerified(true);
            $user->setUpdatedAt(new \DateTimeImmutable());
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('success', 'Votre compte a été vérifié avec succès. Vous pouvez maintenant vous connecter.');


        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_login');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates

        return $this->redirectToRoute('app_login');
    }
}
