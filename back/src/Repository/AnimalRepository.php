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
                ->where('animal.isActive = true')
                ->andWhere('animal.isVisible = true')
                ->select($this->fieldsList())
                ->getQuery()
                ->getResult();
        }

        public function getRandomLastAnimals($type) :array {
            $oneMonthAgo = new \DateTime('-3 month');


            return $this->createQueryBuilder('animal')
                ->select('animal.id,animal.name, structure.name as structureName, animal.thumbnail, animal.breed, animal.type')
                ->innerJoin('animal.structure', 'structure')
                ->where('animal.isActive = true')
                ->andWhere('animal.isVisible = true')
                ->andWhere('animal.type = :type')
                ->andWhere('animal.createdAt >= :oneMonthAgo')
                ->setParameter('type', $type)
                ->setParameter('oneMonthAgo', $oneMonthAgo)
                ->orderBy('animal.createdAt', 'DESC')
                ->setMaxResults(6)
                ->getQuery()
                ->getResult();
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
        public function findByFilters($data): array
        {
            $page = isset($data["page"]) ? $data["page"] : 1;
            $pageSize = 10;
            $firstResult = ($page - 1) * $pageSize;
            $allowedFields = [
                'gender',
                'out_department',
                'highlight',
                'size',
                'color',
                'affinity',
                'adoption_status',
                'breed',
                'type'
            ];

            $qb = $this->createQueryBuilder('animal')
                ->innerJoin('animal.structure', 'structure')
                ->orderBy('animal.id', 'ASC')
                ->where('animal.isActive = true')
                ->andWhere('animal.isVisible = true');

                foreach ($data as $key => $value) {
                    if (!empty($value) && in_array($key, $allowedFields)) {
                        switch ($key) {
                            case 'affinity':
                            case 'breed':
                                // Champs JSON
                                $values = is_array($value) ? $value : [$value];
                                $values = array_filter(array_map('trim', $values));

                                if (count($values) > 1) {
                                    $conditions = [];
                                    foreach ($values as $index => $val) {
                                        $paramName = $key . '_' . $index;
                                        $conditions[] = 'animal.' . $key . ' LIKE :' . $paramName;
                                        $qb->setParameter($paramName, '%"' . $val . '"%');
                                    }
                                    $qb->andWhere('(' . implode(' OR ', $conditions) . ')');
                                } else {
                                    $qb->andWhere('animal.' . $key . ' LIKE :' . $key);
                                    $qb->setParameter($key, '%"' . $values[0] . '"%');
                                }
                                break;

                            default:
                                if (is_string($value) && strpos($value, ',') !== false) {
                                    $values = array_filter(array_map('trim', explode(',', $value)));
                                    $conditions = [];
                                    foreach ($values as $index => $val) {
                                        $paramName = $key . '_' . $index;
                                        $conditions[] = 'animal.' . $key . ' = :' . $paramName;
                                        $qb->setParameter($paramName, $val);
                                    }
                                    $qb->andWhere('(' . implode(' OR ', $conditions) . ')');
                                } else {
                                    $qb->andWhere('animal.' . $key . ' = :' . $key);
                                    $qb->setParameter($key, $value);
                                }
                                break;
                        }
                    }
                }


                $countQb = clone $qb;
                $totalCount = $countQb->select('COUNT(animal.id)')
                    ->getQuery()
                    ->getSingleScalarResult();

                $data =  $qb->select($this->fieldsList())
                ->select('animal.id,animal.name, structure.name as structureName, animal.thumbnail, animal.breed, animal.type')
                ->setFirstResult($firstResult)
                ->setMaxResults($pageSize)
                ->getQuery()
                ->getResult();



            return[
                'data' => $data,
                'pageSize' => $pageSize,
                'currentPage' => $page,
                'count' => $totalCount,
                'totalPages' => ceil($totalCount / $pageSize)
            ];
 
        }

    public function findById($id): array {
        return  $this->createQueryBuilder('animal')
            ->select(
                'animal.id,
                animal.name,
                animal.gender,
                animal.age,
                animal.out_department,
                animal.size,
                animal.color,
                animal.affinity,
                animal.adoption_status,
                animal.breed,
                animal.type,
                animal.thumbnail,
                animal.images,
                animal.description,
                structure.name as structureName,
                structure.street as structureStreet,
                structure.zip_code as structureZipCode,
                structure.city as structureCity,
                structure.phone as structurePhone,
                structure.email as structureEmail'
                )
            ->innerJoin('animal.structure', 'structure')
            ->where("animal.id = :id")
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();

    }
}
