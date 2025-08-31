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

    public function __construct(
        private TimestampService $timestampService,
    )
    {
    }
    public static function getEntityFqcn(): string
    {
        return Animal::class;
    }


    public function configureFields(string $pageName): iterable
    {
      
        $require = $pageName != "edit";
        $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);


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
        if($isAdmin) {
            $fields[] = EasyPhpField::AssociationField('structure', 'structure');
        } 


        return $fields;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Animaux')
            ->setEntityLabelInSingular('Animal')
            ->setPageTitle('index', 'Animaux')
            ->setPageTitle('new', 'Ajouter un animal')
            ->setPageTitle('edit', 'Modifier un animal');

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
              
        if (method_exists($entityInstance, 'setCreatedAt')) {

            $this->timestampService->getCreatedAt($entityInstance);
        }
        
        parent::persistEntity($entityManager, $entityInstance);
    }

    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if (method_exists($entityInstance, 'setUpdatedAt')) {
            
            $this->timestampService->getUpdatedAt($entityInstance);
        }
        parent::updateEntity($entityManager, $entityInstance);
    }


}
