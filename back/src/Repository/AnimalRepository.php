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

    private $allowedFields = [
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
            ->select($this->fieldsList())
            ->where('animal.isActive = :active')
            ->andWhere('animal.isVisible = :visible')
            ->setParameter('active', true)
            ->setParameter('visible', true)
            ->orderBy('animal.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function getRandomLastAnimals($type): array
    {
        $oneMonthAgo = new \DateTime('-3 month');


        return $this->createQueryBuilder('animal')
            ->select('animal.id,animal.name, structure.name as structureName, animal.thumbnail, animal.breed, animal.type')
            ->innerJoin('animal.structure', 'structure')
            ->where('animal.isActive = :active')
            ->andWhere('animal.isVisible = :visible')
            ->andWhere('animal.type = :type')
            ->andWhere('animal.createdAt >= :oneMonthAgo')
            ->setParameter('active', true)
            ->setParameter('visible', true)
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

        $qb = $this->createQueryBuilder('animal')
            ->innerJoin('animal.structure', 'structure')
            ->orderBy('animal.id', 'ASC')
            ->where('animal.isActive = :active')
            ->andWhere('animal.isVisible = :visible')
            ->setParameter('active', true)
            ->setParameter('visible', true);


        foreach ($data as $key => $value) {
            if (!empty($value) && in_array($key, $this->allowedFields)) {
                $this->applyFilter($qb, $key, $value);
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

        return [
            'data' => $this->reformateData($data),
            'pageSize' => $pageSize,
            'currentPage' => $page,
            'count' => $totalCount,
            'totalPages' => ceil($totalCount / $pageSize)
        ];
    }

    private function reformateData(array $data): array
    {
        $newData = [];
        foreach ($data as $value) {
            $value['structure'] = [
                'name' => $value['structureName']
            ];
            unset($value['structureName']);
            $newData[] = $value;
        }
        return $newData;
    }

    private function applyFilter($qb, $key, $value): void
    {
        if (in_array($key, ['affinity', 'breed'])) {
            $this->applyJsonFieldFilter($qb, $key, $value);
        } else {
            $this->applyDefaultFieldFilter($qb, $key, $value);
        }
    }

    private function applyJsonFieldFilter($qb, $key, $value): void
    {
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
        } elseif (count($values) === 1) {
            $qb->andWhere('animal.' . $key . ' LIKE :' . $key);
            $qb->setParameter($key, '%"' . $values[0] . '"%');
        }
    }

    private function applyDefaultFieldFilter($qb, $key, $value): void
    {
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
    }



    public function findById($id): array
    {
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
                NEW App\DTO\StructureDTO(
                    s.name,
                    s.street,
                    s.city,
                    s.zip_code,
                    s.phone,
                    s.email
                ) as structure'
            )
            ->innerJoin('animal.structure', 's')
            ->where("animal.id = :id")
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }
}
