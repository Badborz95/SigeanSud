<?php

namespace App\Repository;

use App\Entity\Especepouvoirvivreenclos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Especepouvoirvivreenclos>
 *
 * @method Especepouvoirvivreenclos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Especepouvoirvivreenclos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Especepouvoirvivreenclos[]    findAll()
 * @method Especepouvoirvivreenclos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EspecepouvoirvivreenclosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Especepouvoirvivreenclos::class);
    }

//    /**
//     * @return Especepouvoirvivreenclos[] Returns an array of Especepouvoirvivreenclos objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Especepouvoirvivreenclos
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
