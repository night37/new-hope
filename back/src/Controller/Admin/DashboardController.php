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
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;






#[AdminDashboard(routePath: 'backoffice', routeName: 'admin')]

class DashboardController extends AbstractDashboardController
{

    public function __construct(
        private ChartBuilderInterface $chartBuilder,
    ) {
    }

    public function index(): Response
    {
        
        
        if($this->getUser() === null) {
            return $this->redirectToRoute('app_login');
        }

        $chart = $this->chartBuilder->createChart(Chart::TYPE_LINE);
        // ...set chart data and options somehow

        return $this->render('admin/dashboard.html.twig', [
            'chart' => $chart,
        ]);
        
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Administration');

    }

    public function configureMenuItems(): iterable
    {

        /** @var \App\Entity\User|null $user */
        $user = $this->getUser();
        $structureId = $user->getStructure();

        /** @var \App\Entity\User|null $user */
        $user = $this->getUser();
        $structureId = $user->getStructure();
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::subMenu('gestion de comptes', 'fas fa-list')->setSubItems([
            MenuItem::linkToCrud('liste des comptes', 'fas fa-list', User::class)->setAction('index'),
            MenuItem::linkToCrud('ajouter un compte', 'fas fa-plus', User::class)->setAction('new'),
            MenuItem::linkToCrud('gérer mon compte', 'fas fa-list', User::class)->setAction('edit')->setEntityId($user->getId())
            MenuItem::linkToCrud('gérer mon compte', 'fas fa-list', User::class)->setAction('edit')->setEntityId($user->getId())

        ])->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('gérer mon compte', 'fas fa-list', User::class)->setAction('edit')->setEntityId($user->getId())->setPermission('ROLE_USER');
        if($user->getStructure() != null) {
        yield MenuItem::linkToCrud('gérer mon compte', 'fas fa-list', User::class)->setAction('edit')->setEntityId($user->getId())->setPermission('ROLE_USER');

  
        if($user->getStructure() != null) {
            yield MenuItem::subMenu('gestion des animaux', 'fas fa-list')->setSubItems([
                MenuItem::linkToCrud('liste des animaux', 'fas fa-list', Animal::class)->setAction('index'),
                MenuItem::linkToCrud('ajouter un animal', 'fas fa-plus', Animal::class)->setAction('new'),
            ]);
            MenuItem::linkToCrud('liste des animaux', 'fas fa-list', Animal::class)->setAction('index')->setPermission('ROLE_USER');
            yield MenuItem::subMenu('gestion des structures', 'fas fa-list')->setSubItems([
                MenuItem::linkToCrud('liste des structures', 'fas fa-list', Structure::class)->setAction('index'),
                MenuItem::linkToCrud('ajouter une structure', 'fas fa-plus', Structure::class)->setAction('new'),
            ])->setPermission('ROLE_ADMIN');
        }
        if(isset($structureId)) {
            yield MenuItem::linkToCrud('gérer ma structure', 'fas fa-list', Structure::class)->setAction('edit')->setEntityId($structureId)->setPermission('ROLE_USER');
        } 
        yield MenuItem::linkToLogout('Déconnexion', 'fa fa-sign-out'); 
    }

}
