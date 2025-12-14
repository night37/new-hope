<?php

namespace App\Controller;

use App\Enum\Role;
use App\Entity\User;
use App\Form\UserType;
use App\Service\UserService;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


final class UserController extends AbstractController
{


    public function __construct(
        private UserService $userService,

    ) {}


    #[Route('/inscription', name: 'app_register')]
    public function index(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userData = $form->getData();
            $this->userService->register($userData);
            return $this->redirectToRoute('app_login');
        }

        return $this->render('user/index.html.twig', [
            'form' => $form
        ]);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        $this->userService->activateUser($request);

        return $this->redirectToRoute('app_login');
    }
}
