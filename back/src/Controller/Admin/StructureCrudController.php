<?php

namespace App\Controller\Admin;

use App\Entity\Structure;
use App\Service\LocationService;
use App\Service\TimestampService;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Asset;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use App\Service\EasyPhpFieldService as EasyPhpField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;





class StructureCrudController extends AbstractCrudController
{

   

    public function __construct(    
    private TimestampService $timestampService, 
    private LocationService $locationService
    )
    {}


    public static function getEntityFqcn(): string
    {
        return Structure::class;
    }

    
    public function configureFields(string $pageName): iterable
    {

        $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);
        $field =  [
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
            $field[] =  EasyPhpField::BooleanField('isActif', 'actif');
            
        } 

        return $field;
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
     
        if (method_exists($entityInstance, 'setCreatedAt')) {

            $this->timestampService->getCreatedAt($entityInstance);
        }
        if (method_exists($entityInstance, 'setStreet') && method_exists($entityInstance, 'setZipCode') && method_exists($entityInstance, 'setCity')) {
            $this->locationService->getCoordinates($entityInstance);
        }
        
        parent::persistEntity($entityManager, $entityInstance);

    }

    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
     
      
        if (method_exists($entityInstance, 'setUpdatedAt')) {
            $this->timestampService->getUpdatedAt($entityInstance);
            
        }

        if (method_exists($entityInstance, 'setStreet') && method_exists($entityInstance, 'setZipCode') && method_exists($entityInstance, 'setCity')) {
            $this->locationService->getCoordinates($entityInstance);
        }

        parent::updateEntity($entityManager, $entityInstance);
    }

    public function deleteEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if (!$entityInstance instanceof Structure) {
            return;
        }
      
        try {
            parent::deleteEntity($entityManager, $entityInstance);
        }
        catch (\Exception $e) {
            $this->addFlash('danger', 'Impossible de supprimer cette structure car des animaux lui sont associés.');
        }
    }
    public function configureAssets(Assets $assets): Assets
    {
        return $assets
            ->addCssFile(Asset::new('css/admin/fields/fields.css'));
    }


    

    
}
