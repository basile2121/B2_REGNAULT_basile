<?php

namespace App\Repository;

use App\Entity\BandeDessinees;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BandeDessinees|null find($id, $lockMode = null, $lockVersion = null)
 * @method BandeDessinees|null findOneBy(array $criteria, array $orderBy = null)
 * @method BandeDessinees[]    findAll()
 * @method BandeDessinees[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BandeDessineesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BandeDessinees::class);
    }

    // /**
    //  * @return BandeDessinees[] Returns an array of BandeDessinees objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BandeDessinees
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
