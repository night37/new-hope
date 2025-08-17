<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;

class EmailService {
    private $router;
    private $requestStack;
    private $tokenStorage;
    private $emailVerifier;
    
  
    public function __construct(
      
        UrlGeneratorInterface $router,
        RequestStack $requestStack,
        TokenStorageInterface $tokenStorage,
        EmailVerifier $emailVerifier
    ) {
        $this->router = $router;
        $this->requestStack = $requestStack;
        $this->tokenStorage = $tokenStorage;
        $this->emailVerifier = $emailVerifier;
    }

    public function verifyEmail($user, $email) 
    {
        if (!$user->isVerified()) {
          return $this->sendVerificationEmail( $email);
        }

        $id = $user->getId();
        return new RedirectResponse('/user/'.$id.'/edit');  
    }
      
    public function sendVerificationEmail($email) 
    {
        $request = $this->requestStack->getCurrentRequest();
        
        $this->tokenStorage->setToken(null);
        
        $resendLink = $this->router->generate('app_resend_verification_email_link', [
            'email' => $email
        ]);
        
        $request->getSession()->invalidate();
        
        $session = $this->requestStack->getSession();
        self::displayMessage('danger', 'Vous n\'avez pas encore confirmé votre adresse e-mail ! Veuillez cliquer sur le lien contenu dans l\'e-mail que nous vous avons envoyé.</br> Si vous ne l\'avez pas reçu ou si le lien a expiré, <a class="text-blue-600" href="' . $resendLink . '">cliquez ici</a> pour en recevoir un nouveau.');



        return new RedirectResponse($this->router->generate('app_login'));
    }

    public function resendVerificationEmail(Request $request, UserRepository $userRepository)
    {

        $email = $request->query->get('email');
      
        if (!$email) {
            self::displayMessage('danger', 'Aucune adresse email fournie.');
            return new RedirectResponse($this->router->generate('app_login'));
        }
        
        $user = $userRepository->findOneBy(['email' => $email]);       
        if (!$user) {
            self::displayMessage('danger', 'L\'adresse email n\'est pas associée à un compte.');
            return new RedirectResponse($this->router->generate('app_login'));
        }
        
        if ($user->isVerified()) {
            self::displayMessage('info', 'Votre compte est déjà vérifié. Vous pouvez vous connecter.');
            return new RedirectResponse($this->router->generate('app_login'));
        }
        
 
        $email = (new TemplatedEmail())
            ->from(new Address('no-reply@votre-site.com', 'Votre Site'))
            ->to($user->getEmail())
            ->subject('Confirmation de votre adresse email')
            ->htmlTemplate('registration/confirmation_email.html.twig');
        
        $this->emailVerifier->sendEmailConfirmation(
            'app_verify_email', 
            $user,
            $email,
            false
        );
        self::displayMessage('success', 'Un nouvel email de confirmation a été envoyé. Veuillez vérifier votre boîte de réception.');
        return new RedirectResponse($this->router->generate('app_login'));
    }

    public function sendEmailConfirmation($user, ?bool $sendResetPassword): void
    {
        $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
        (new TemplatedEmail())
            ->from(new Address('mailer@example.com', 'AcmeMailBot'))
            ->to($user->getEmail())
            ->subject('Please Confirm your Email')
            ->htmlTemplate('registration/confirmation_email.html.twig')
            ->context([
                'user' => $user,
            ]), $sendResetPassword);
    }


    public function displayMessage( string $type, string $message): void 
    {
        $session = $this->requestStack->getSession();
        $session->getFlashBag()->add( $type, $message);

    }

   
}
