<?php

namespace App\Entity;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): TCompanyCompany
    {
        $this->name = $name;
        return $this;
    }

    public function getTCompanyAddress(): ?TCompanyAddress
    {
        return $this->tCompanyAddress;
    }

    public function setTCompanyAddress(TCompanyAddress $tCompanyAddress): TCompanyCompany
    {
        $this->tCompanyAddress = $tCompanyAddress;
        return $this;
    }

    public function __toString()
    {
        return $this->getName();
    }

}
