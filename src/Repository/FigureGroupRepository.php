<?php

namespace App\Repository;

use App\Entity\FigureGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FigureGroup>
 *
 * @method FigureGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method FigureGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method FigureGroup[]    findAll()
 * @method FigureGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FigureGroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FigureGroup::class);
    }

    public function save(FigureGroup $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(FigureGroup $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
