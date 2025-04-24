<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mime\Address;


class SecurityController extends AbstractController
{
    #[Route(path: '/connexion', name: 'app_login')]  // The login route                                                                  
    public function login(AuthenticationUtils $authenticationUtils, Security $security): Response
    {
        if ($this->getUser()) {
            if($this->getUser()->isVerified() === false) {
                // If the user is not verified, log them out and redirect to the login route
                
                $request = $this->container->get('request_stack')->getCurrentRequest();
                $email = $this->getUser()->getEmail();
                $this->container->get('security.token_storage')->setToken(null);
                $resendLink = $this->generateUrl('app_resend_verification', ['email' => $email]);
                $request->getSession()->invalidate();
                $this->addFlash('danger', 'Pour confirmer votre adresse e-mail, veuillez cliquer sur le lien contenu dans l\'e-mail que nous vous avons envoyé. Si vous n\'avez pas reçu cet e-mail ou si le lien a expiré,  <a href="' . $resendLink . '">cliquez ici</a> pour demander l\'envoi d\'un nouvel e-mail de confirmation.');

                return $this->redirectToRoute('app_login');          
                
            }else{

                $id = $this->getUser()->getId();
                return $this->redirect('/user/'.$id.'/edit');    
            }
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('security/login.html.twig', ['email' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/resend-verification', name: 'app_resend_verification')]
public function resendVerificationEmail(Request $request, UserRepository $userRepository, EmailVerifier $emailVerifier): Response
{
    $email = $request->query->get('email');
    
    if (!$email) {
        $this->addFlash('danger', 'Aucune adresse email fournie.');
        return $this->redirectToRoute('app_login');
    }
    
    $user = $userRepository->findOneBy(['email' => $email]);
    
    if (!$user) {
        $this->addFlash('danger', 'L\'adresse email n\'est pas associée à un compte.');
        return $this->redirectToRoute('app_login');
    }
    
    if ($user->isVerified()) {
        $this->addFlash('info', 'Votre compte est déjà vérifié. Vous pouvez vous connecter.');
        return $this->redirectToRoute('app_login');
    }
    
    // Création du nouvel email de vérification
    $email = (new TemplatedEmail())
        ->from(new Address('no-reply@votre-site.com', 'Votre Site'))
        ->to($user->getEmail())
        ->subject('Confirmation de votre adresse email')
        ->htmlTemplate('registration/confirmation_email.html.twig');
    
    // Utilisation de votre EmailVerifier
    $emailVerifier->sendEmailConfirmation(
        'app_verify_email', // le nom de la route de vérification
        $user,
        $email
    );
    
    $this->addFlash('success', 'Un nouvel email de confirmation a été envoyé. Veuillez vérifier votre boîte de réception.');
    return $this->redirectToRoute('app_login');
}
}

