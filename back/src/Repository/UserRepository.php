<?php

namespace App\Repository;

use App\Enum\Role;
use App\Entity\User;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use App\Service\EmailService;

/**
 * @extends ServiceEntityRepository<User>
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, private EntityManagerInterface $entityManager, private EmailService $emailService)
    {
        parent::__construct($registry, User::class);
    }

    public function saveUser(User $userData)
    {

        // $form = $this->createForm(UserType::class, $user);
        // $form->handleRequest($request);
        // if ($form->isSubmitted() && $form->isValid()) {
        $userData->setRoles(Role::ROLE_USER);
        $userData->setIsVerified(false);
        $userData->setIsActive(false);
        $userData->setCreatedAt(new \DateTimeImmutable());
        $userData->setUpdatedAt(new \DateTimeImmutable());
        $userData->setPassword(password_hash($userData->getPassword(), PASSWORD_DEFAULT));



        try {
            $this->entityManager->persist($userData);
            $this->entityManager->flush();

            $this->emailService->sendEmailConfirmation($userData, false);
            $this->emailService->displayMessage('success', 'Votre compte a été crée avec succès. Un email de confirmation vous a été envoyé. Veuillez vérifier votre boîte de réception.');
            return $this->redirectToRoute('app_login');
        } catch (UniqueConstraintViolationException $e) {
            $this->addFlash('error', 'Cet email existe déjà. Veuillez en choisir un autre.');
        }
        // }
    }
}
