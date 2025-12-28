<?php

namespace App\Repository;

use Exception;
use App\Entity\Structure;
use App\Service\LocationService;
use phpDocumentor\Reflection\Location;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Structure>
 */
class StructureRepository extends ServiceEntityRepository
{

    public function __construct(
        ManagerRegistry $registry,
        private EntityManagerInterface $em,
        private LocationService $locationService,
    ) {
        parent::__construct($registry, Structure::class);
    }




    public function getAllStructures(): array | string
    {

        return $this->createQueryBuilder('s')
            ->select('s.id', 's.name', 's.street', 's.city', 's.latitude', 's.longitude', 's.structureType', 's.email')
            ->where('s.isActive = :active')
            ->setParameter('active', 1)
            ->getQuery()
            ->getResult();
    }

    public function createStructure(Structure $structure): void
    {
        $structure->setCreatedAt(new \DateTimeImmutable());
        $structure->setUpdatedAt(new \DateTimeImmutable());
        $structure->setIsActive(false);
        $structure->setIsVerified(false);
        $structure->setPassword(password_hash($structure->getPassword(), PASSWORD_DEFAULT));
        $this->locationService->getCoordinates($structure);
        $this->em->persist($structure);
        $this->em->flush();
    }
}
