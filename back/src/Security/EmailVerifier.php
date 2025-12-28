<?php

namespace App\Security;

use App\Entity\User;
use App\Entity\Structure;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class EmailVerifier
{
    public function __construct(
        private VerifyEmailHelperInterface $verifyEmailHelper,
        private MailerInterface $mailer,
    ) {}

    public function sendEmailConfirmation(string $verifyEmailRouteName, User $user, TemplatedEmail $email, bool $sendResetPassword): void
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



        if ($sendResetPassword) {
            $context['resetToken'] = $this->resetPasswordHelper->generateResetToken($user);
        }




        $email->context($context);

        $this->mailer->send($email);
    }


    public function sendStructureEmailConfirmation(string $verifyEmailRouteName, Structure $structure, TemplatedEmail $email, bool $sendResetPassword): void
    {

        $signatureComponents = $this->verifyEmailHelper->generateSignature(
            $verifyEmailRouteName,
            $structure->getId(),
            $structure->getEmail(),
            ['id' => $structure->getId()]

        );

        $context = $email->getContext();
        $context['signedUrl'] = $signatureComponents->getSignedUrl();
        $context['expiresAt'] = $signatureComponents->getExpiresAt();
        $context['structure'] = $structure;
        $context['sendResetPassword'] = $sendResetPassword;



        if ($sendResetPassword) {
            $context['resetToken'] = $this->resetPasswordHelper->generateResetToken($user);
        }




        $email->context($context);

        $this->mailer->send($email);
    }
}
