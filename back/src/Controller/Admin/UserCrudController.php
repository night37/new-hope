<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Service\EasyPhpField;
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
        $user = $this->getUser();
        $isAdmin = in_array('ROLE_ADMIN', $user->getRoles(), true);
        $fields = [
            easyPhpField::EmailField('email', 'Email'),
            easyPhpField::TextField('name', 'Prénom'),
            easyPhpField::TextField('surname', 'Nom'),
            easyPhpField::PasswordField(),            
        ];

        if($isAdmin) {
            $fields[] = easyPhpField::TextField('structure_id', 'Structure');
            $fields[] = easyPhpField::BooleanField('isVerified', 'Vérifié') ;
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
  
}
