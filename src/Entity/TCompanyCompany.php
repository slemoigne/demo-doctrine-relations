<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class TCompanyCompany
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var TCompanyAddress
     */
    private $tCompanyAddress;

    /**
     * @var Collection
     */
    private $tCompanyVehicles;

    /**
     * @var Collection
     */
    private $deviceDevices;

    public function __construct()
    {
        $this->tCompanyVehicles = new ArrayCollection();
        $this->deviceDevices = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getTCompanyAddress(): ?TCompanyAddress
    {
        return $this->tCompanyAddress;
    }

    public function setTCompanyAddress(TCompanyAddress $tCompanyAddress): self
    {
        $this->tCompanyAddress = $tCompanyAddress;
        return $this;
    }

    // Return ArrayCollection or PersistentCollection
    public function getTCompanyVehicles(): ?Collection
    {
        return $this->tCompanyVehicles;
    }

    public function addTCompanyVehicle(TCompanyVehicle $tCompanyVehicle): self
    {
        $this->tCompanyVehicles[] = $tCompanyVehicle;
        //$tCompanyVehicle->setTCompanyCompany($this);
        return $this;
    }

    public function removeTCompanyVehicle(TCompanyVehicle $tCompanyVehicle): self
    {
        $this->tCompanyVehicles->removeElement($tCompanyVehicle);
        //$tCompanyVehicle->setTCompanyCompany(null);
        return $this;
    }

    public function getDeviceDevices(): ?Collection
    {
        return $this->deviceDevices;
    }

    public function addDeviceDevice(DeviceDevice $deviceDevice): self
    {
        $this->deviceDevices[] = $deviceDevice;
        return $this;
    }

    public function removeDeviceDevice(DeviceDevice $deviceDevice): self
    {
        $this->deviceDevices->removeElement($deviceDevice);
        return $this;
    }

    public function __toString()
    {
        return $this->getName();
    }

}
