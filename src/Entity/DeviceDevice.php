<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class DeviceDevice
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
     * @var Collection
     */
    private $tCompanyCompanies;

    public function __construct()
    {
        $this->tCompanyCompanies = new ArrayCollection();
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

    public function getTCompanyCompanies(): Collection
    {
        return $this->tCompanyCompanies;
    }

    public function addTCompanyCompany(TCompanyCompany $tCompanyCompany): self
    {
        $this->tCompanyCompanies[] = $tCompanyCompany;
        return $this;
    }

    public function removeTCompanyCompany(TCompanyCompany $tCompanyCompany): self
    {
        $this->tCompanyCompanies->removeElement($tCompanyCompany);
        return $this;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
