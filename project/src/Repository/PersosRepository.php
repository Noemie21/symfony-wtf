<?php

namespace App\Repository;

use App\Entity\Persos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Persos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Persos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Persos[]    findAll()
 * @method Persos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Persos::class);
    }

    // /**
    //  * @return Persos[] Returns an array of Persos objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Persos
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
