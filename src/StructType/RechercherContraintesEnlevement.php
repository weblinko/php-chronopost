<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercherContraintesEnlevement StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercherContraintesEnlevement
 * @subpackage Structs
 */
class RechercherContraintesEnlevement extends AbstractStructBase
{
    /**
     * The country
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $country;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $zipCode;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $city;
    /**
     * Constructor method for rechercherContraintesEnlevement
     * @uses RechercherContraintesEnlevement::setCountry()
     * @uses RechercherContraintesEnlevement::setZipCode()
     * @uses RechercherContraintesEnlevement::setCity()
     * @param string $country
     * @param string $zipCode
     * @param string $city
     */
    public function __construct($country = null, $zipCode = null, $city = null)
    {
        $this
            ->setCountry($country)
            ->setZipCode($zipCode)
            ->setCity($city);
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Chronopost\StructType\RechercherContraintesEnlevement
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \Chronopost\StructType\RechercherContraintesEnlevement
     */
    public function setZipCode($zipCode = null)
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Chronopost\StructType\RechercherContraintesEnlevement
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        return $this;
    }
}
