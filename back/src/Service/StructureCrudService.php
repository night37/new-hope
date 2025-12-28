<?php

namespace App\Service;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Service\EasyPhpFieldService as EasyPhpField;





class StructureCrudService
{

    public function __construct(private UserPasswordHasherInterface $passwordHasher) {}

    public function getFields(bool $isAdmin): array
    {
        $fields =  [
            EasyPhpField::TextField('name', 'Nom de la structure'),
            EasyPhpField::ChoiceField('structureType', 'structureType', 'type de structure'),
            EasyPhpField::TextField('street', 'Rue'),
            EasyPhpField::IntegerField('zipCode', 'Code postal'),
            EasyPhpField::TextField('city', 'Ville'),
            EasyPhpField::TelephoneField('phone', 'Téléphone'),
            EasyPhpField::TextField('email', 'Email'),
            EasyPhpField::TextEditorField('description', 'Description'),
            EasyPhpField::AssociationField('animal', 'animaux', true)
        ];

        if ($isAdmin) {
            $fields[] =  EasyPhpField::BooleanField('isActive', 'actif');
        }

        // $random = random_bytes(10);
        // $hashedPassword = $this->passwordHasher->hashPassword($selectedUser, $random);
        // $selectedUser->setPassword($hashedPassword);


        return $fields;
    }
}
