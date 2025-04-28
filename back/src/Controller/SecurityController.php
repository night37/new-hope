<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use Symfony\Component\HttpFoundation\Request;
use App\Service\EmailService;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SecurityController extends AbstractController
{
    private $authenticationUtils;
    private $security;
    private $emailService;


    public function __construct(
        AuthenticationUtils $authenticationUtils, 
        Security $security,
        EmailService $emailService  
    ) {

        $this->authenticationUtils = $authenticationUtils;
        $this->security = $security;
        $this->emailService = $emailService;
    }


    #[Route(path: '/connexion', name: 'app_login')]                                                             
    public function login(): Response
    {

        if ($this->getUser()) {
            $response = $this->emailService->verifyEmail($this->getUser(), $this->getUser()->getEmail());
            if ($response) {
                return $response;
            }
        }
    
        $error = $this->authenticationUtils->getLastAuthenticationError();
        $lastUsername = $this->authenticationUtils->getLastUsername();

        if($error){
            $this->addFlash('danger', 'Identifiants invalides.');
        }
        
        return $this->render('security/login.html.twig', ['email' => $lastUsername, 'error' => $error]);
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

