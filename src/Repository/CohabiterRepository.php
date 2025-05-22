<?php

namespace App\Repository;

use App\Entity\Cohabiter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cohabiter>
 *
 * @method Cohabiter|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cohabiter|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cohabiter[]    findAll()
 * @method Cohabiter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CohabiterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cohabiter::class);
    }

//    /**
//     * @return Cohabiter[] Returns an array of Cohabiter objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Cohabiter
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
