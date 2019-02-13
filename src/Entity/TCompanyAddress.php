<?php

namespace App\Entity;

class TCompanyAddress
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return TCompanyAddress
     */
    public function setAddress(string $address): TCompanyAddress
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return TCompanyAddress
     */
    public function setCity(string $city): TCompanyAddress
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return TCompanyAddress
     */
    public function setCountry(string $country): TCompanyAddress
    {
        $this->country = $country;
        return $this;
    }

}
