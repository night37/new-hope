<?php

namespace App\Controller\Admin;

use App\Entity\Structure;
use App\Service\EasyPhpFieldService as EasyPhpField;
use App\Service\TimestampService;
use App\Service\LocationService;
use Doctrine\ORM\EntityManagerInterface;
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
        return [
            EasyPhpField::TextField('name', 'Nom de la structure'),
            EasyPhpField::ChoiceField('structureType', 'structureType', 'type de structure'),
            EasyPhpField::TextField('street', 'Rue'),
            EasyPhpField::IntegerField('zip_code', 'Code postal'),
            EasyPhpField::TextField('city', 'Ville'),
            EasyPhpField::TelephoneField('phone', 'Téléphone'),
            EasyPhpField::TextField('email', 'Email'),
            EasyPhpField::TextEditorField('description', 'Description'),       
        ];
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

    
}
