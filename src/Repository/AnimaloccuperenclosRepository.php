<?php

namespace App\Repository;

use App\Entity\Animaloccuperenclos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Animaloccuperenclos>
 *
 * @method Animaloccuperenclos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Animaloccuperenclos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Animaloccuperenclos[]    findAll()
 * @method Animaloccuperenclos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnimaloccuperenclosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Animaloccuperenclos::class);
    }

//    /**
//     * @return Animaloccuperenclos[] Returns an array of Animaloccuperenclos objects
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

//    public function findOneBySomeField($value): ?Animaloccuperenclos
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
