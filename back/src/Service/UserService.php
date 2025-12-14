<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use App\Service\EmailService;

class UserService
{

    public function __construct(private UserRepository $userRepository, private EmailService $emailService) {}

    public function register(User $user): void
    {
        try {
            $this->userRepository->createUser($user);
            $this->emailService->sendEmailConfirmation($user, false);
            $this->emailService->displayMessage('success', 'Votre compte a été crée avec succès. Un email de confirmation vous a été envoyé. Veuillez vérifier votre boîte de réception.');
        } catch (UniqueConstraintViolationException $e) {
            $this->emailService->displayMessage('error', 'Cet email existe déjà. Veuillez en choisir un autre.');
        }
    }
}
