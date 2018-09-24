<?php

namespace App\Repository;

use App\Entity\CastingCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CastingCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method CastingCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method CastingCategory[]    findAll()
 * @method CastingCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CastingCategoryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CastingCategory::class);
    }

//    /**
//     * @return CastingCategory[] Returns an array of CastingCategory objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CastingCategory
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
