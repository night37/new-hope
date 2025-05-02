<?php

namespace App\Controller\Admin;

use App\Enum\Role;
use App\Entity\User;
use App\Service\EasyPhpFieldService as EasyPhpField;
use App\Service\EmailService;
use App\Service\TimestampService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\HttpFoundation\RedirectResponse;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;



class UserCrudController extends AbstractCrudController
{

    private $emailService;
    private $passwordHasher;
    private $timestampService;

    public function __construct(EmailService $emailService, UserPasswordHasherInterface $passwordHasher,TimestampService $timestampService){

        $this->emailService = $emailService;
        $this->passwordHasher = $passwordHasher;
        $this->timestampService = $timestampService;

    }

    public static function getEntityFqcn(): string
    {

        return User::class;
    }

   
    public function configureFields(string $pageName): iterable
    {

        $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);
        $selectedUser = $this->getContext()->getEntity()->getInstance();
        
    
        $fields = [
            EasyPhpField::EmailField('email', 'Email'),
            EasyPhpField::TextField('name', 'Prénom'),
            EasyPhpField::TextField('surname', 'Nom'),
        ];
        
        if($isAdmin) {
            
            $fields[] = EasyPhpField::ChoiceField('role', 'roles', 'Rôle',false);
            $fields[] = EasyPhpField::TextField('structure_id', 'Structure', false);
            $fields[] = EasyPhpField::BooleanField('isVerified', 'Vérifié');
            
            $fields[] = AssociationField::new('structure_id', 'Structure')
            ->setRequired(false)
            ->autocomplete();
            
        }
        if( $selectedUser && $selectedUser->getId() !== null && !$isAdmin) {
            $fields[] = EasyPhpField::TextField('structure_id', 'Structure', true);
            $fields[] = EasyPhpField::PasswordField();
        }

        if($selectedUser && $selectedUser->getId() !== null && $isAdmin) {
            $role = $selectedUser->getRoles()[0];
            $roleEnum = constant("App\\Enum\\Role::$role");
            $fields[] = EasyPhpField::ChoiceField('role', 'roles', 'Rôle',false, $roleEnum);

        }

        if($selectedUser && $selectedUser->getId() === null) {
            $random = random_bytes(10);
            $hashedPassword = $this->passwordHasher->hashPassword($selectedUser, $random);
            $selectedUser->setPassword($hashedPassword);
        } 

        return $fields;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Liste des utilisateurs')
            ->setPageTitle('new', 'Créer un utilisateur')
            ->setPageTitle('edit', 'Modifier mon compte utilisateur');        
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        $selectedUser = $this->getContext()->getEntity()->getInstance();
        $selectedUser->setIsVerified(true);
          
        if (method_exists($entityInstance, 'setCreatedAt')) {

            $this->timestampService->getCreatedAt($entityInstance);
        }
        
        parent::persistEntity($entityManager, $entityInstance);

        if ($selectedUser->getId() !== null) {

            $this->emailService->sendEmailConfirmation($selectedUser, true);

        }
      


    }

    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if (method_exists($entityInstance, 'setUpdatedAt')) {
            $this->timestampService->getUpdatedAt($entityInstance);
        }
        parent::updateEntity($entityManager, $entityInstance);
    }

    protected function getRedirectResponseAfterSave(AdminContext $context, string $action): RedirectResponse
    {
        $submitButtonName = $context->getRequest()->request->all()['ea']['newForm']['btn'];
        
        // dd($submitButtonName);
        if ('saveAndReturn' === $submitButtonName) {
            // when using pretty admin URLs
            return $this->redirectToRoute('admin');
            
            // when using legacy admin URLs
            $url = $this->container->get(AdminUrlGenerator::class)
            ->setAction(Action::DETAIL)
            ->setEntityId($context->getEntity()->getPrimaryKeyValue())
            ->generateUrl();
            
            return $this->redirect($url);
        }

        return parent::getRedirectResponseAfterSave($context, $action);
    }

    

    


    
  
}
