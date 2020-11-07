<?php

namespace App\Repository;

use App\Entity\Lul;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Lul|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lul|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lul[]    findAll()
 * @method Lul[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LulRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lul::class);
    }

    // /**
    //  * @return Lul[] Returns an array of Lul objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Lul
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
