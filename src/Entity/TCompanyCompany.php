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
}
