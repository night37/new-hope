<?php

namespace App\Controller\Admin;
use App\Entity\User;
use App\Entity\Animal;
use App\Entity\Structure;
use App\Controller\Admin\AnimalCrudController;
use Symfony\Component\HttpFoundation\Response;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Attribute\AdminDashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

#[AdminDashboard(routePath: '/', routeName: 'admin')]
class DashboardController extends AbstractDashboardController
{
    public function index(): Response
    {
        
        if($this->getUser() === null) {
            return $this->redirectToRoute('app_login');
        }
        
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(AnimalCrudController::class)->generateUrl());
     
        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // 1.1) If you have enabled the "pretty URLs" feature:
        // return $this->redirectToRoute('admin_user_index');
        //
        // 1.2) Same example but using the "ugly URLs" that were used in previous EasyAdmin versions:
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirectToRoute('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Administration');
            
    }

    public function configureMenuItems(): iterable
    {

        $structureId = $this->getUser()->getStructureId();
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::subMenu('gestion de comptes', 'fas fa-list')->setSubItems([
            MenuItem::linkToCrud('liste des comptes', 'fas fa-list', User::class)->setAction('index'),
            MenuItem::linkToCrud('ajouter un compte', 'fas fa-plus', User::class)->setAction('new'),
            MenuItem::linkToCrud('gérer mon compte', 'fas fa-list', User::class)->setAction('edit')->setEntityId($this->getUser()->getId())

        ])->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('gérer mon compte', 'fas fa-list', User::class)->setAction('edit')->setEntityId($this->getUser()->getId())->setPermission('ROLE_USER');
        yield MenuItem::subMenu('gestion des animaux', 'fas fa-list')->setSubItems([
            MenuItem::linkToCrud('liste des animaux', 'fas fa-list', Animal::class)->setAction('index'),
            MenuItem::linkToCrud('ajouter un animal', 'fas fa-plus', Animal::class)->setAction('new'),
        ]);
        MenuItem::linkToCrud('liste des animaux', 'fas fa-list', Animal::class)->setAction('index')->setPermission('ROLE_USER');
        yield MenuItem::subMenu('gestion des structures', 'fas fa-list')->setSubItems([
            MenuItem::linkToCrud('liste des structures', 'fas fa-list', Structure::class)->setAction('index'),
            MenuItem::linkToCrud('ajouter une structure', 'fas fa-plus', Structure::class)->setAction('new'),
        ])->setPermission('ROLE_ADMIN');
        if(isset($structureId)) {
            yield MenuItem::linkToCrud('gérer ma structure', 'fas fa-list', Structure::class)->setAction('edit')->setEntityId($structureId)->setPermission('ROLE_USER');
        } 
        yield MenuItem::linkToLogout('Déconnexion', 'fa fa-sign-out'); 
    }

}
