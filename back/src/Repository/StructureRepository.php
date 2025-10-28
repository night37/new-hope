<?php

namespace App\Repository;

use App\Entity\Structure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Service\LocationService;
use Exception;
use phpDocumentor\Reflection\Location;

/**
 * @extends ServiceEntityRepository<Structure>
 */
class StructureRepository extends ServiceEntityRepository
{

    private $locationService;
    public function __construct(ManagerRegistry $registry, LocationService $locationService)
    {
        parent::__construct($registry, Structure::class);
        $this->locationService = $locationService;
    }




        public function getAllStructures(): array | string
        {
    
            return $this->createQueryBuilder('s')
                ->select('s.id', 's.name', 's.street', 's.city', 's.latitude', 's.longitude','s.structureType')
                ->where('s.isActive = :active')
                ->setParameter('active', 1)
                ->getQuery()
                ->getResult();
                
        }
}
