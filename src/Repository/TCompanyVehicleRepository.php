<?php

namespace App\Repository;

use App\Entity\TCompanyVehicle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TCompanyVehicle|null find($id, $lockMode = null, $lockVersion = null)
 * @method TCompanyVehicle|null findOneBy(array $criteria, array $orderBy = null)
 * @method TCompanyVehicle[]    findAll()
 * @method TCompanyVehicle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TCompanyVehicleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TCompanyVehicle::class);
    }

    // /**
    //  * @return TCompanyVehicle[] Returns an array of TCompanyVehicle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TCompanyVehicle
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
