<?php

namespace App\Repository;

use App\Entity\Graphdata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Graphdata|null find($id, $lockMode = null, $lockVersion = null)
 * @method Graphdata|null findOneBy(array $criteria, array $orderBy = null)
 * @method Graphdata[]    findAll()
 * @method Graphdata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GraphdataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Graphdata::class);
    }

    // /**
    //  * @return Graphdata[] Returns an array of Graphdata objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Graphdata
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
