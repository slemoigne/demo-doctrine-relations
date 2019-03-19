<?php

namespace App\Entity;

class TCompanyVehicle
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
     * @var TCompanyCompany
     */
    private $tCompanyCompany;

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

    public function getTCompanyCompany(): ?TCompanyCompany
    {
        return $this->tCompanyCompany;
    }

    public function setTCompanyCompany(TCompanyCompany $tCompanyCompany): self
    {
        /*if($this->tCompanyCompany) {
            $this->tCompanyCompany->removeTCompanyVehicle($this);
        }*/

        $this->tCompanyCompany = $tCompanyCompany;

        //$tCompanyCompany->addTCompanyVehicle($this);

        return $this;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
