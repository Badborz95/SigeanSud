<?php

namespace App\Repository;

use App\Entity\Prete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Prete>
 *
 * @method Prete|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prete|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prete[]    findAll()
 * @method Prete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PreteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prete::class);
    }

//    /**
//     * @return Prete[] Returns an array of Prete objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Prete
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
