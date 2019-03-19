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

    public function findAllWithCompanyCompany()
    {
        return $this->createQueryBuilder('tcompanyVehicle')
            ->addSelect('tCompanyCompany', 'tCompanyAddress')
            ->innerJoin('tcompanyVehicle.tCompanyCompany', 'tCompanyCompany')
            ->innerJoin('tCompanyCompany.tCompanyAddress', 'tCompanyAddress')
            ->getQuery()
            ->getResult();
    }

}
