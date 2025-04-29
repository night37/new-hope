<?php

namespace App\Controller\Admin;

use App\Entity\Structure;
use \App\Service\EasyPhpField;
use App\Service\TimestampService;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class StructureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Structure::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            EasyPhpField::TextField('name', 'Nom de la structure'),
            EasyPhpField::TextField('street', 'Rue'),
            EasyPhpField::IntegerField('zip_code', 'Code postal'),
            EasyPhpField::TextField('city', 'Ville'),
            EasyPhpField::TelephoneField('phone', 'Téléphone'),
            EasyPhpField::TextField('email', 'Email'),
            EasyPhpField::TextEditorField('description', 'Description'),
            EasyPhpField::IntegerField('latitude', 'Latitude'),
            EasyPhpField::IntegerField('longitude', 'Longitude'),


            
        ];
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
