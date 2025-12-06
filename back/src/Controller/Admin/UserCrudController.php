<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Service\UserCrudService;
use App\Service\TimestampService;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use Symfony\Component\HttpFoundation\RedirectResponse;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('IS_AUTHENTICATED_FULLY')]
class UserCrudController extends AbstractCrudController
{
    public function __construct(
        private UserCrudService $userCrudService,
        private TimestampService $timestampService
    ) {}

    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            throw $this->createAccessDeniedException();
        }

        $isAdmin = in_array('ROLE_ADMIN', $currentUser->getRoles(), true);

        return $this->userCrudService->getFields($isAdmin, $currentUser);
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
        if (!$entityInstance instanceof User) {
            return;
        }

        $this->userCrudService->prepareUserForPersist($entityInstance);
        $this->timestampService->getCreatedAt($entityInstance);

        parent::persistEntity($entityManager, $entityInstance);

        $this->userCrudService->sendVerificationEmail($entityInstance);
    }

    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        $this->timestampService->getUpdatedAt($entityInstance);
        parent::updateEntity($entityManager, $entityInstance);
    }

    protected function getRedirectResponseAfterSave(AdminContext $context, string $action): RedirectResponse
    {
        $submitButtonName = $context->getRequest()->request->all()['ea']['newForm']['btn'] ?? null;

        if ('saveAndReturn' === $submitButtonName) {
            return $this->redirectToRoute('admin');
        }

        return parent::getRedirectResponseAfterSave($context, $action);
    }
}
