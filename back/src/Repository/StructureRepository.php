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




        public function findByFilters($params): array | string
        {
        if ((!is_numeric($params['region'] ?? null) && isset($params['region'])) || (!is_numeric($params['communes'] ?? null) && isset($params['communes']))) {
            return 'Les paramètres doivent être numériques';
        }


            $query = $this->createQueryBuilder('s')
                ->select('s.id', 's.name', 's.street', 's.city', 's.latitude', 's.longitude','s.structureType')
                ->where('s.isActive = :active')
                ->setParameter('active', 1);

                if(isset($params['region'])){

                    $this->locationService->getDepartement($params['region']);
                };

                if(isset($params['communes'])){
                    $this->locationService->getCity($params['communes']);
                };
                $query->getQuery()
                ->getResult();
        }
}
