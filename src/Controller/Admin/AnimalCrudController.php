<?php

namespace App\Controller\Admin;

use App\Enum\Race;
use App\Enum\Type;
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
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

class AnimalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Animal::class;
    }

    public function configureFields(string $pageName): iterable
{
    return [
        ChoiceField::new('type', 'Type')
            ->setChoices(
                array_combine(
                    array_map(fn($case) => ucfirst($case->value), Type::cases()), // Labels affichés
                    array_map(fn($case) => $case, Type::cases()) 
                )
            ),
        // Autres champs ici..
        TextField::new('name', 'Nom'),
        ChoiceField::new('race', 'Race')
            ->setChoices(
                array_combine(
                    array_map(fn($case) => ucfirst($case->value), Race::cases()), // Labels affichés
                    array_map(fn($case) => $case, Race::cases())
                )
            )->allowMultipleChoices() // Permet la sélection multiple
            ->renderExpanded(false),
        TextField::new('age', 'Age'),
        ChoiceField::new('size', 'Taille')
            ->setChoices(
            array_combine(
                array_map(fn($case) => ucfirst($case->value), Size::cases()), // Labels affichés
                array_map(fn($case) => $case, Size::cases())  
            )
        )->renderExpanded(false),

        ChoiceField::new('color', 'Couleur')
            ->setChoices(
                array_combine(
                    array_map(fn($case) => ucfirst($case->value), Color::cases()), // Labels affichés
                    array_map(fn($case) => $case, Color::cases())  
                )
            )
            ->renderExpanded(false),
        ChoiceField::new('gender')
            ->setChoices([
                'Male' => Gender::Male,
                'Female' => Gender::Female,
             
            ])->renderExpanded(false),// A
        ChoiceField::new('affinity', 'Affinité')
            ->setChoices(array_combine(
                array_map(fn($case) => ucfirst($case->value), Affinity::cases()), // Labels affichés
                array_map(fn($case) => $case, Affinity::cases())  
            ))
            ->allowMultipleChoices() // Permet la sélection multiple
            ->renderExpanded(false),
            ChoiceField::new('AdoptionStatus', 'statut d\'adoption')
            ->setChoices(array_combine(
                array_map(fn($case) => ucfirst($case->value), AdoptionStatus::cases()), // Labels affichés
                array_map(fn($case) => $case, AdoptionStatus::cases())  // Valeurs sauvegardées
            ))->renderExpanded(false)
            ->setFormTypeOptions([
                'data' => AdoptionStatus::Available, // Set the default choice here
            ]),

        BooleanField::new('out_department', 'Adoptable en dehors du département'),
        BooleanField::new('highlight', 'Mettre en avant'),

            
    ];
}
}
