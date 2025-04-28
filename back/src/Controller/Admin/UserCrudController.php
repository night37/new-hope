<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Enum\Role;
use App\Service\EasyPhpField;
use App\Service\TimestampService;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {

        return User::class;
    }

   
    public function configureFields(string $pageName): iterable
    {

        $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);
        $selectedUser = $this->getContext()->getEntity()->getInstance();
        // $password = $selectedUser->getPassword();
        
        
        
        
        $fields = [
            easyPhpField::EmailField('email', 'Email'),
            easyPhpField::TextField('name', 'Prénom'),
            easyPhpField::TextField('surname', 'Nom'),
        ];
        
        if($isAdmin) {
            $fields[] = easyPhpField::PasswordField();  
            $fields[] = easyPhpField::ChoiceField('role', 'roles', 'Rôle',false);
            $fields[] = easyPhpField::TextField('structure_id', 'Structure');
            $fields[] = easyPhpField::BooleanField('isVerified', 'Vérifié') ;
        }
        if($selectedUser){
            $role = $selectedUser->getRoles()[0];
            $roleEnum = constant("App\\Enum\\Role::$role");
          
            $fields[] = easyPhpField::ChoiceField('role', 'roles', 'Rôle',false, $roleEnum);
        }

        return $fields;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Liste des utilisateurs')
            ->setPageTitle('new', 'Créer un utilisateur')
            ->setPageTitle('edit', 'Modifier un utilisateur');        
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
