<?php

namespace App\Service;

use App\Enum\AdoptionStatus;

use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use App\Service\EasyPhpFieldService as EasyPhpField;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class AnimalCrudService
{

    public function __construct(private UserPasswordHasherInterface $passwordHasher) {}

    public function getFields(bool $isAdmin, bool $require)
    {
        $fields = [
            EasyPhpField::ChoiceField('type', 'Type', 'type'),
            EasyPhpField::ChoiceField('breed', 'breed', 'Race', true),
            EasyPhpField::ImageField('thumbnail', 'Miniature', 'public/uploads/animals', 'uploads/animals', $require),
            EasyPhpField::ImageField('images', 'Photos', 'public/uploads/animals', 'uploads/animals',  $require, true),
            EasyPhpField::TextField('name', 'Nom'),
            EasyPhpField::IntegerField('age', 'Age'),
            EasyPhpField::ChoiceField('size', 'size', 'Taille'),
            EasyPhpField::TextEditorField('description', 'Description'),
            EasyPhpField::ChoiceField('color', 'color', 'Couleur'),
            EasyPhpField::ChoiceField('gender', 'gender', 'Sexe'),
            EasyPhpField::ChoiceField('affinity', 'affinity', 'Affinité',  true),
            EasyPhpField::ChoiceField('adoptionStatus', 'adoptionStatus', 'Statut d\'adoption', false, AdoptionStatus::Available),
            EasyPhpField::BooleanField('out_department', 'Adoptable en dehors du département'),
            EasyPhpField::BooleanField('highlight', 'Mettre en avant'),
            EasyPhpField::BooleanField('isVisible', 'Publier'),
            EasyPhpField::BooleanField('isActive', 'Actif'),
        ];
        if ($isAdmin) {
            $fields[] = EasyPhpField::AssociationField('structure', 'structure');
        }

        return $fields;
    }


    public function setCrudOptions(Crud $crud): Crud
    {

        return $crud
            ->setEntityLabelInPlural('Animaux')
            ->setEntityLabelInSingular('Animal')
            ->setPageTitle('index', 'Animaux')
            ->setPageTitle('new', 'Ajouter un animal')
            ->setPageTitle('edit', 'Modifier un animal');
    }
}
