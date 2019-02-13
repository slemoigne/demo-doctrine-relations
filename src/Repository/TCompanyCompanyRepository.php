<?php

namespace App\Repository;

use App\Entity\TCompanyCompany;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TCompanyCompany|null find($id, $lockMode = null, $lockVersion = null)
 * @method TCompanyCompany|null findOneBy(array $criteria, array $orderBy = null)
 * @method TCompanyCompany[]    findAll()
 * @method TCompanyCompany[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TCompanyCompanyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TCompanyCompany::class);
    }

    // /**
    //  * @return TCompanyCompany[] Returns an array of TCompanyCompany objects
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
    public function findOneBySomeField($value): ?TCompanyCompany
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
