<?php

namespace App\Repository;

use App\Entity\BackingTrack;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method BackingTrack|null find($id, $lockMode = null, $lockVersion = null)
 * @method BackingTrack|null findOneBy(array $criteria, array $orderBy = null)
 * @method BackingTrack[]    findAll()
 * @method BackingTrack[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BackingTrackRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, BackingTrack::class);
    }

//    /**
//     * @return BackingTrack[] Returns an array of BackingTrack objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BackingTrack
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
