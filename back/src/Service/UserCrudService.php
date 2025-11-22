<?php

namespace App\Service;

use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;

class UserCrudService
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher) {}

    public function getFields(bool $isAdmin, User $selectedUser)
    {
        $fields = [
            EasyPhpFieldService::EmailField('email', 'Email'),
            EasyPhpFieldService::TextField('name', 'Prénom'),
            EasyPhpFieldService::TextField('surname', 'Nom'),
            EasyPhpFieldService::BooleanField('isActive', 'false')
        ];

        if ($isAdmin) {

            $fields[] = EasyPhpFieldService::ChoiceField('role', 'roles', 'Rôle', false);
            $fields[] = EasyPhpFieldService::BooleanField('isVerified', 'Vérifié');
        }
        $fields[] = EasyPhpFieldService::PasswordField();

        if ($selectedUser && $selectedUser->getId() !== null && $isAdmin) {
            $role = $selectedUser->getRoles()[0];
            $roleEnum = constant("App\\Enum\\Role::$role");
            $fields[] = EasyPhpFieldService::ChoiceField('role', 'roles', 'Rôle', false, $roleEnum);
        }

        if ($selectedUser && $selectedUser->getId() === null) {
            $random = random_bytes(10);
            $hashedPassword = $this->passwordHasher->hashPassword($selectedUser, $random);
            $selectedUser->setPassword($hashedPassword);
        }

        return $fields;
    }
}
