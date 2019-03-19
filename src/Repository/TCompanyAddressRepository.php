<?php

namespace App\Repository;

use App\Entity\TCompanyAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TCompanyAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method TCompanyAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method TCompanyAddress[]    findAll()
 * @method TCompanyAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TCompanyAddressRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TCompanyAddress::class);
    }
}
