<?php

namespace App\Service;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;

class UserCrudService
{



    public function __construct( private UserPasswordHasherInterface $passwordHasher){

  


    }

public function setFields(bool $isAdmin, User $selectedUser) {
    $fields = [
            EasyPhpFieldService::EmailField('email', 'Email'),
            EasyPhpFieldService::TextField('name', 'Prénom'),
            EasyPhpFieldService::TextField('surname', 'Nom'),
        ];

        if($isAdmin) {

            $fields[] = EasyPhpFieldService::ChoiceField('role', 'roles', 'Rôle',false);
            $fields[] = EasyPhpFieldService::TextField('structure', 'Structure', false);
            $fields[] = EasyPhpFieldService::BooleanField('isVerified', 'Vérifié');

            $fields[] = AssociationField::new('structure', 'Structure')
            ->setRequired(false)
            ->autocomplete();

        }
        if( $selectedUser && $selectedUser->getId() !== null && !$isAdmin) {
            $fields[] = EasyPhpFieldService::TextField('structure', 'Structure', true);
            $fields[] = EasyPhpFieldService::PasswordField();
        }

        if($selectedUser && $selectedUser->getId() !== null && $isAdmin) {
            $role = $selectedUser->getRoles()[0];
            $roleEnum = constant("App\\Enum\\Role::$role");
            $fields[] = EasyPhpFieldService::ChoiceField('role', 'roles', 'Rôle',false, $roleEnum);

        }

        if($selectedUser && $selectedUser->getId() === null) {
            $random = random_bytes(10);
            $hashedPassword = $this->passwordHasher->hashPassword($selectedUser, $random);
            $selectedUser->setPassword($hashedPassword);
        }

        return $fields;
  } 

}