<?php

namespace App\Repository;

use App\Entity\Achete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Achete>
 *
 * @method Achete|null find($id, $lockMode = null, $lockVersion = null)
 * @method Achete|null findOneBy(array $criteria, array $orderBy = null)
 * @method Achete[]    findAll()
 * @method Achete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AcheteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Achete::class);
    }

//    /**
//     * @return Achete[] Returns an array of Achete objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Achete
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
