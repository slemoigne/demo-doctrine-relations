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
}
