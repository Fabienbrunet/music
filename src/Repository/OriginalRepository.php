<?php

namespace App\Repository;

use App\Entity\Original;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Original|null find($id, $lockMode = null, $lockVersion = null)
 * @method Original|null findOneBy(array $criteria, array $orderBy = null)
 * @method Original[]    findAll()
 * @method Original[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OriginalRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Original::class);
    }

//    /**
//     * @return Original[] Returns an array of Original objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Original
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
