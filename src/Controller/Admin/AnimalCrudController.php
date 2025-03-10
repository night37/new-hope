<?php

namespace App\Controller\Admin;

use App\Enum\Race;
use App\Enum\Size;
use App\Enum\Color;
use App\Enum\Gender;
use App\Enum\Affinity;
use App\Enum\AdoptionStatus;

use App\Entity\Animal;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AnimalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Animal::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
    public function configureFields(string $pageName): iterable
{
    return [
        // Autres champs ici..
        TextField::new('name', 'Nom'),
        ChoiceField::new('race', 'Race')
            ->setChoices(
                array_combine(
                    array_map(fn($case) => $case->value, Race::cases()), // Labels visibles
                    array_map(fn($case) => $case->value, Race::cases())  // Valeurs sauvegardées
                )
            )->allowMultipleChoices() // Permet la sélection multiple
            ->renderExpanded(false),
        TextField::new('age', 'Age'),
        ChoiceField::new('size', 'Taille')
            ->setChoices(
            array_combine(
                array_map(fn($case) => $case->value, Size::cases()), // Labels visibles
                array_map(fn($case) => $case->value, Size::cases())  // Valeurs sauvegardées
            )
        )->allowMultipleChoices() // Permet la sélection multiple
        ->renderExpanded(false),
        // TextField::new('size'),
        ChoiceField::new('color', 'Couleur')
            ->setChoices(
                array_combine(
                    array_map(fn($case) => $case->value, Color::cases()), // Labels visibles
                    array_map(fn($case) => $case->value, Color::cases())  // Valeurs sauvegardées
                )
            )->setFormTypeOption('choice_label', fn(Color $enum) => $enum->name)
            ->setFormTypeOption('choice_value', fn(?Color $enum) => $enum?->value)
            ->renderExpanded(false),
        ChoiceField::new('gender')
            ->setChoices([
                'Male' => Gender::Male,
                'Female' => Gender::Female,
             
            ])
            ->allowMultipleChoices() // Permet la sélection multiple
            ->renderExpanded(false), // A
        ChoiceField::new('affinity', 'Affinité')
            ->setChoices(array_combine(
                array_map(fn($case) => $case->value, Affinity::cases()), // Labels visibles
                array_map(fn($case) => $case->value, Affinity::cases())  // Valeurs sauvegardées
            ))
            ->allowMultipleChoices() // Permet la sélection multiple
            ->renderExpanded(false),
            ChoiceField::new('AdoptionStatus', 'statut d\'adoption')
            ->setChoices(array_combine(
                array_map(fn($case) => $case->value, AdoptionStatus::cases()), // Labels visibles
                array_map(fn($case) => $case->value, AdoptionStatus::cases())  // Valeurs sauvegardées
            ))
            ->setFormTypeOption('choice_label', fn(Color $enum) => $enum->name)
            ->renderExpanded(false), // //ffiche comme dropdown ou `true` pour des cases à cocher
    ];
}
}
