<?php

namespace App\Repository;

use App\Entity\PointReward;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PointReward|null find($id, $lockMode = null, $lockVersion = null)
 * @method PointReward|null findOneBy(array $criteria, array $orderBy = null)
 * @method PointReward[]    findAll()
 * @method PointReward[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PointRewardRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PointReward::class);
    }

//    /**
//     * @return PointReward[] Returns an array of PointReward objects
//     */
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
    public function findOneBySomeField($value): ?PointReward
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
