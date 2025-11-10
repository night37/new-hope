<?php

namespace App\Controller\Admin;

use App\Enum\Role;
use App\Entity\User;

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
use App\Service\UserCrudService;
use Symfony\Component\Security\Http\Attribute\IsGranted;


use function PHPUnit\Framework\isEmpty;

#[IsGranted('IS_AUTHENTICATED_FULLY')]
class UserCrudController extends AbstractCrudController
{


    public function __construct(private EmailService $emailService, private TimestampService $timestampService, private UserCrudService $userCrudService)
    {
        $this->userCrudService = $userCrudService;
    }



    public static function getEntityFqcn(): string
    {
        return User::class;
    }



    public function configureFields(string $pageName): iterable
    {

        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException();
        }

        $isAdmin = in_array('ROLE_ADMIN', $this->getUser()->getRoles(), true);

        return $this->userCrudService->getFields($isAdmin, $user);
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
        $selectedUser->setPassword(password_hash($selectedUser->getPassword(), PASSWORD_DEFAULT));

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
        if ('saveAndReturn' === $submitButtonName) {
            return $this->redirectToRoute('admin');
            $url = $this->container->get(AdminUrlGenerator::class)
                ->setAction(Action::DETAIL)
                ->setEntityId($context->getEntity()->getPrimaryKeyValue())
                ->generateUrl();
            return $this->redirect($url);
        }

        return parent::getRedirectResponseAfterSave($context, $action);
    }
}
