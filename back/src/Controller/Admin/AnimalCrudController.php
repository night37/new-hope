<?php

namespace App\Controller\Admin;


use App\Enum\Size;
use App\Enum\Type;
use App\Enum\Breed;
use App\Enum\Color;
use App\Enum\Gender;
use App\Entity\Animal;
use App\Enum\Affinity;
use App\Enum\DateField;
use App\Enum\AdoptionStatus;
use App\Service\EasyPhpFieldService as EasyPhpField;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Asset;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Service\TimestampService;




class AnimalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Animal::class;
    }


    public function configureFields(string $pageName): iterable
    {
      
        $require = $pageName != "edit";
   


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
        ];
       
        return $fields;
    }
    public function configureAssets(Assets $assets): Assets
    {
        return $assets
            ->addJsFile(Asset::new('js/animalForm/breed.js')->defer())
            ->addJsFile(Asset::new('js/animalForm/preview/preview.js')->defer()->htmlAttr('type', 'module'))
            ->addCssFile(Asset::new('css/animalForm/animalForm.css'));
    }


    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        $timestampService = new TimestampService($entityInstance);        
        if (method_exists($entityInstance, 'setCreatedAt')) {

            $timestampService->getCreatedAt();
        }
        
        parent::persistEntity($entityManager, $entityInstance);
    }

    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        $timestampService = new TimestampService($entityInstance);  
        if (method_exists($entityInstance, 'setUpdatedAt')) {
            $timestampService->getUpdatedAt();
        }
        parent::updateEntity($entityManager, $entityInstance);
    }


}
