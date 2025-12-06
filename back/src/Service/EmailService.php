<?php

namespace App\Service;

use App\Entity\User;
use App\Security\EmailVerifier;
use App\Service\RedirectService;
use App\Repository\UserRepository;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use SymfonyCasts\Bundle\ResetPassword\Model\ResetPasswordToken;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class EmailService
{




    public function __construct(

        private UrlGeneratorInterface $router,
        private RequestStack $requestStack,
        private TokenStorageInterface $tokenStorage,
        private EmailVerifier $emailVerifier,
        private RedirectService $redirectService,


    ) {}

    public function verifieEmail(User $user, string $baseUrl, $basePath): ?RedirectResponse
    {
        if (!$user->isVerified()) {
            return $this->sendVerificationEmail($user->getEmail());
        } elseif (!$user->isActive()) {
            $this->displayMessage('danger', "Votre compte n'est pas activé, veuillez contacter l'administrateur");
            return $this->redirectService->redirectToPath('/');
        } else {

            return  $this->redirectService->redirectToUserEditPage($user, $baseUrl, $basePath);
        }
    }



    public function sendVerificationEmail($email)
    {
        $request = $this->requestStack->getCurrentRequest();

        $this->tokenStorage->setToken(null);

        $resendLink = $this->router->generate('app_resend_verification_email_link', [
            'email' => $email
        ]);

        $request->getSession()->invalidate();
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

    public function sendEmailConfirmation(User $user, ?bool $sendResetPassword): void
    {
        $this->emailVerifier->sendEmailConfirmation(
            'app_verify_email',
            $user,
            (new TemplatedEmail())
                ->from(new Address('mailer@example.com', 'AcmeMailBot'))
                ->to($user->getEmail())
                ->subject('Please Confirm your Email')
                ->htmlTemplate('registration/confirmation_email.html.twig')
                ->context([
                    'user' => $user,
                ]),
            $sendResetPassword
        );
    }


    public function sendResetPasswordEmail(User $user, ResetPasswordToken $resetToken): TemplatedEmail
    {
        return (new TemplatedEmail())
            ->from(new Address('test@test.com', 'l\'equipe de new hope'))
            ->to((string) $user->getEmail())
            ->subject('Your password reset request')
            ->htmlTemplate('reset_password/email.html.twig')
            ->context([
                'resetToken' => $resetToken,
            ]);
    }




    public function displayMessage(string $type, string $message): void
    {
        $request = $this->requestStack->getCurrentRequest();
        if ($request && $request->hasSession()) {
            $request->getSession()->addFlash($type, $message);
        }
    }
}
