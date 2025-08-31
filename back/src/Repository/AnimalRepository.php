<?php

namespace App\Repository;

use App\Entity\Animal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Animal>
 */
class AnimalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Animal::class);
    }

  /**
    * @return Animal[] Returns an array of Animal objects
 */
        public function findAll(): array
        {
            return $this->createQueryBuilder('animal')
                ->orderBy('animal.id', 'ASC')
                ->Where('animal.isActive = true')
                ->Where('animal.isVisible = true')
                ->select($this->fieldsList())
                ->getQuery()
                ->getResult()
            ;
        }

        private function fieldsList(): array
        {
            return [
                'animal.name',
                'animal.gender',
                'animal.age',
                'animal.out_department',
                'animal.id',
                'animal.highlight',
                'animal.createdAt',
                'animal.updatedAt',
                'animal.size',
                'animal.color',
                'animal.affinity',
                'animal.adoption_status',
                'animal.breed',
                'animal.type',
                'animal.thumbnail',
                'animal.images',
                'animal.description',
            ];
        }

//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Animal
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
