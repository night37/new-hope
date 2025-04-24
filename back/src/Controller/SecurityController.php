<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/connexion', name: 'app_login')]  // The login route                                                                  
    public function login(AuthenticationUtils $authenticationUtils, Security $security): Response
    {
        if ($this->getUser()) {
            if($this->getUser()->isVerified() === false) {

                $this->container->get('security.token_storage')->setToken(null);
                $request = $this->container->get('request_stack')->getCurrentRequest();
                $request->getSession()->invalidate();
                $this->addFlash('danger', 'Pour confirmer votre adresse e-mail, veuillez cliquer sur le lien contenu dans l\'e-mail que nous vous avons envoyé. Si vous n\'avez pas reçu cet e-mail ou si le lien a expiré, cliquez ici pour demander l\'envoi d\'un nouvel e-mail de confirmation.');

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
}
