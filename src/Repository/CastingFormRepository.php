<?php

namespace App\Repository;

use App\Entity\CastingForm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CastingForm|null find($id, $lockMode = null, $lockVersion = null)
 * @method CastingForm|null findOneBy(array $criteria, array $orderBy = null)
 * @method CastingForm[]    findAll()
 * @method CastingForm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CastingFormRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CastingForm::class);
    }

//    /**
//     * @return CastingForm[] Returns an array of CastingForm objects
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
    public function findOneBySomeField($value): ?CastingForm
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
