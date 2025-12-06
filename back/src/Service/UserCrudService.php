<?php

namespace App\Service;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserCrudService
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher,
        private EmailService $emailService
    ) {}

    public function getFields(bool $isAdmin, User $selectedUser): array
    {
        $fields = [
            EasyPhpFieldService::EmailField('email', 'Email'),
            EasyPhpFieldService::TextField('name', 'Prénom'),
            EasyPhpFieldService::TextField('surname', 'Nom'),
            EasyPhpFieldService::BooleanField('isActive', 'Actif')
        ];

        if ($isAdmin) {
            $fields[] = EasyPhpFieldService::ChoiceField('role', 'roles', 'Rôle', false);
            $fields[] = EasyPhpFieldService::BooleanField('isVerified', 'Vérifié');
        }

        $fields[] = EasyPhpFieldService::PasswordField();

        if ($selectedUser?->getId() !== null && $isAdmin) {
            $role = $selectedUser->getRoles()[0];
            $roleEnum = constant("App\\Enum\\Role::$role");
            $fields[] = EasyPhpFieldService::ChoiceField('role', 'roles', 'Rôle', false, $roleEnum);
        }

        return $fields;
    }

    public function prepareNewUser(User $user): void
    {
        if ($user->getId() === null) {
            $randomPassword = bin2hex(random_bytes(10));
            $hashedPassword = $this->passwordHasher->hashPassword($user, $randomPassword);
            $user->setPassword($hashedPassword);
        }
    }

    public function prepareUserForPersist(User $user): void
    {
        $user->setIsVerified(true);

        // Hash password if it's not already hashed
        if (!$this->isPasswordHashed($user->getPassword())) {
            $hashedPassword = $this->passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
        }
    }

    public function sendVerificationEmail(User $user): void
    {
        $this->emailService->sendEmailConfirmation($user, true);
    }

    private function isPasswordHashed(string $password): bool
    {
        return str_starts_with($password, '$2y$') || str_starts_with($password, '$2a$');
    }
}
