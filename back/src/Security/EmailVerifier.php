<?php

namespace App\Security;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;

class EmailVerifier
{
    public function __construct(
        private VerifyEmailHelperInterface $verifyEmailHelper,
        private MailerInterface $mailer,
        private EntityManagerInterface $entityManager,
        private ResetPasswordHelperInterface $resetPasswordHelper,
    ) {
    }

    public function sendEmailConfirmation(string $verifyEmailRouteName, UserInterface $user, TemplatedEmail $email, bool $sendResetPassword ): void
    {
        
       
        $signatureComponents = $this->verifyEmailHelper->generateSignature(
            $verifyEmailRouteName,
            $user->getId(),
            $user->getEmail(),
            ['id' => $user->getId()] 
            
        );
        $context = $email->getContext();
        $context['signedUrl'] = $signatureComponents->getSignedUrl();
        $context['expiresAt'] = $signatureComponents->getExpiresAt();
        $context['user'] = $user;
        $context['sendResetPassword'] = $sendResetPassword;
        $context['sendResetPassword'] = $sendResetPassword;
        $context['user'] = $user;


        if($sendResetPassword) {
            $context['resetToken'] = $this->resetPasswordHelper->generateResetToken($user);
        }
        



        $email->context($context);

        $this->mailer->send($email);
    }


   
}