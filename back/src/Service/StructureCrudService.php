<?php

namespace App\Service;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Service\EasyPhpFieldService as EasyPhpField;
use App\Enum\AdoptionStatus;





class StructureCrudService
{

    public function __construct( private UserPasswordHasherInterface $passwordHasher){}

    public function getFields(bool $isAdmin) {
        $fields =  [
            EasyPhpField::TextField('name', 'Nom de la structure'),
            EasyPhpField::ChoiceField('structureType', 'structureType', 'type de structure'),
            EasyPhpField::TextField('street', 'Rue'),
            EasyPhpField::IntegerField('zip_code', 'Code postal'),
            EasyPhpField::TextField('city', 'Ville'),
            EasyPhpField::TelephoneField('phone', 'Téléphone'),
            EasyPhpField::TextField('email', 'Email'),
            EasyPhpField::TextEditorField('description', 'Description'),
            EasyPhpField::AssociationField('users', 'membres', true),
            EasyPhpField::AssociationField('animal', 'animaux', true)
        ];

        if ($isAdmin) {
            $fields[] =  EasyPhpField::BooleanField('isActive', 'actif');
        }

        return $fields;
    }

}