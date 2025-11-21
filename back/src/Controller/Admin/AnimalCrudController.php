<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Asset;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use App\Service\TimestampService;
use App\Service\AnimalCrudService;
use Symfony\Component\Security\Http\Attribute\IsGranted;



#[IsGranted('IS_AUTHENTICATED_FULLY')]
class AnimalCrudController extends AbstractCrudController
{

    public function __construct(private TimestampService $timestampService, private AnimalCrudService $animalCrudService){}

    public static function getEntityFqcn(): string
    {
        return Animal::class;
    }


    public function configureFields(string $pageName): iterable
    {
      
        $require = $pageName != "edit";
        $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);
        $require = $pageName != "edit";
        $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);
        return $this->animalCrudService->getFields($isAdmin, $require);
        
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
