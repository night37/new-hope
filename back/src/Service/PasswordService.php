<?php

namespace App\Service;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class PasswordService
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher,
        private EntityManagerInterface $entityManager
    ) {}

    public function hashAndSetPassword(User $user, string $plainPassword): void
    {
        $hashedPassword = $this->passwordHasher->hashPassword($user, $plainPassword);
        $user->setPassword($hashedPassword);
    }

    public function updatePassword(User $user, string $plainPassword): void
    {
        $this->hashAndSetPassword($user, $plainPassword);
        $this->entityManager->flush();
    }

    public function isPasswordHashed(string $password): bool
    {
        return str_starts_with($password, '$2y$') || str_starts_with($password, '$2a$');
    }

    public function generateRandomPassword(int $length = 10): string
    {
        return bin2hex(random_bytes($length));
    }
}
