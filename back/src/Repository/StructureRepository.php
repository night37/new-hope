<?php

namespace App\Repository;

use App\Entity\Structure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Contracts\HttpClient\HttpClientInterface;
/**
 * @extends ServiceEntityRepository<Structure>
 */
class StructureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Structure::class);
    }

    //    /**
    //     * @return Structure[] Returns an array of Structure objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Structure
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

        public function findByFilters($params): array
        {
            $query = $this->createQueryBuilder('s')
                ->select('s.id', 's.name', 's.street', 's.city', 's.latitude', 's.longitude','s.structureType')
                ->where('s.isActive = :active')
                ->setParameter('active', 1)
                ->getQuery()
                ->getResult();
            

            dd($query);
        }
}
