<?php

namespace App\Repository;

use App\Entity\DeviceDevice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DeviceDevice|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeviceDevice|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeviceDevice[]    findAll()
 * @method DeviceDevice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeviceDeviceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DeviceDevice::class);
    }
}
