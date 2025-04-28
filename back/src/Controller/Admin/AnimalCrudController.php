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
use App\Service\EasyPhpField;
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
            easyPhpField::ChoiceField('type', 'Type', 'type'),
            easyPhpField::ChoiceField('breed', 'breed', 'Race', true),
            easyPhpField::ImageField('thumbnail', 'Miniature', 'public/uploads/animals', 'uploads/animals', $require),
            easyPhpField::ImageField('images', 'Photos', 'public/uploads/animals', 'uploads/animals',  $require, true),
            easyPhpField::TextField('name', 'Nom'),
            easyPhpField::IntegerField('age', 'Age'),
            easyPhpField::ChoiceField('size', 'size', 'Taille'),
            easyPhpField::TextEditorField('description', 'Description'),
            easyPhpField::ChoiceField('color', 'color', 'Couleur'),
            easyPhpField::ChoiceField('gender', 'gender', 'Sexe'),
            easyPhpField::ChoiceField('affinity', 'affinity', 'Affinité',  true),
            easyPhpField::ChoiceField('adoptionStatus', 'adoptionStatus', 'Statut d\'adoption', false, AdoptionStatus::Available),
            easyPhpField::BooleanField('out_department', 'Adoptable en dehors du département'),
            easyPhpField::BooleanField('highlight', 'Mettre en avant'),
            easyPhpField::BooleanField('isVisible', 'Publier'),
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
