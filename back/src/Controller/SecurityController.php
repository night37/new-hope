<?php

namespace App\Controller;

use App\Service\EmailService;
use App\Repository\UserRepository;
use App\Service\FlashMessageService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

    public function __construct(
        private AuthenticationUtils $authenticationUtils,
        private EmailService $emailService,
        private FlashMessageService $flashMessageService,
    ) {}

    #[Route(path: '/')]
    public function index(): Response
    {

        return $this->redirectToRoute('app_login');
    }


    #[Route(path: '/connexion', name: 'app_login')]
    public function login(Request $request): Response | RedirectResponse
    {
        $user = $this->getUser();
        $baseUrl = $request->getSchemeAndHttpHost();
        $basePath = $request->getBasePath();

        if ($this->getUser()) {
            return $this->emailService->verifieEmail($user, $baseUrl, $basePath);
        }

        $error = $this->authenticationUtils->getLastAuthenticationError();
        $lastUsername = $this->authenticationUtils->getLastUsername();
        if ($error) {

            $this->flashMessageService->displayMessage('danger', 'Identifiants invalides.');
        }

        return $this->render('security/login.html.twig', [
            'email' => $lastUsername,
            'error' => $error,
            'target_path' => $request->getSession()->get('_security.main.target_path')
        ]);
    }


    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/resend-verification-email-link', name: 'app_resend_verification_email_link')]
    public function resendVerificationEmailLink(Request $request, UserRepository $userRepository): Response
    {
        return $this->emailService->resendVerificationEmail($request, $userRepository);
    }
}
