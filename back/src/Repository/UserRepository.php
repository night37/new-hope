<?php

namespace App\Repository;

use App\Enum\Role;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;


/**
 * @extends ServiceEntityRepository<User>
 */
class UserRepository extends ServiceEntityRepository
{
    private $entityManager;

    public function __construct(ManagerRegistry $registry, EntityManagerInterface $entityManager)
    {
        parent::__construct($registry, User::class);
        $this->entityManager = $entityManager;
    }

    public function createUser(User $user)
    {

        $user->setRoles(Role::ROLE_USER);
        $user->setIsVerified(false);
        $user->setIsActive(false);
        $user->setCreatedAt(new \DateTimeImmutable());
        $user->setUpdatedAt(new \DateTimeImmutable());
        $user->setPassword(password_hash($user->getPassword(), PASSWORD_DEFAULT));

        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }

    public function activeUser(User $user): void
    {
        $user->setIsVerified(true);
        $user->setIsActive(true);
        $user->setUpdatedAt(new \DateTimeImmutable());
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
}
