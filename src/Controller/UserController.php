<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


final class UserController extends AbstractController
{
    #[Route('/inscription', name: 'app_register')]
    public function index(Request $request, EntityManagerInterface $entityManager ): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRoles(['ROLE_USER']);
            $user->setPassword(password_hash($user->getPassword(), PASSWORD_DEFAULT));
            $user = $form->getData();

            try {
            $entityManager->persist($user);             
            $entityManager->flush();
            $this->addFlash('success', 'Utilisateur enregistré avec succès.');

        } catch (UniqueConstraintViolationException $e) {
            $this->addFlash('error', 'Cet email existe déjà. Veuillez en choisir un autre.');
        }
            return $this->redirectToRoute('app_login');
        }
        return $this->render('user/index.html.twig', [
            'form' => $form
        ]);

    }
}
