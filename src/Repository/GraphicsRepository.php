<?php

namespace App\Repository;

use App\Entity\Graphics;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Graphics|null find($id, $lockMode = null, $lockVersion = null)
 * @method Graphics|null findOneBy(array $criteria, array $orderBy = null)
 * @method Graphics[]    findAll()
 * @method Graphics[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GraphicsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Graphics::class);
    }

    // /**
    //  * @return Graphics[] Returns an array of Graphics objects
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
    public function findOneBySomeField($value): ?Graphics
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
