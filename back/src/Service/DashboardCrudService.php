<?php

namespace App\Service;

use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use App\Entity\User;
use App\Entity\Animal;
use App\Entity\Structure;
use Symfony\Bundle\SecurityBundle\Security;

class DashboardCrudService
{
    public function __construct(private Security $security) {}

    public function getMenuItems()
    {
        $user = $this->security->getUser();
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::subMenu('gestion de comptes', 'fas fa-list')->setSubItems([
            MenuItem::linkToCrud('liste des comptes', 'fas fa-list', User::class)->setAction('index'),
            MenuItem::linkToCrud('ajouter un compte', 'fas fa-plus', User::class)->setAction('new'),
            MenuItem::linkToCrud('gérer mon compte', 'fas fa-list', User::class)->setAction('edit')->setEntityId($user->getId()),

        ])->setPermission('ROLE_ADMIN');
        yield MenuItem::linkToCrud('gérer mon compte', 'fas fa-list', User::class)->setAction('edit')->setEntityId($user->getId())->setPermission('ROLE_USER');
        if (in_array('ROLE_ADMIN', $user->getRoles(), true)) {
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
        if (isset($structureId)) {
            yield MenuItem::linkToCrud('gérer ma structure', 'fas fa-list', Structure::class)->setAction('edit')->setEntityId($structureId)->setPermission('ROLE_USER');
        }
        yield MenuItem::linkToLogout('Déconnexion', 'fa fa-sign-out');
    }
}
