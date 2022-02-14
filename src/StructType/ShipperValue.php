<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shipperValue StructType
 * @subpackage Structs
 */
class ShipperValue extends AbstractStructBase
{
    /**
     * The shipperAdress1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperAdress1;
    /**
     * The shipperAdress2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperAdress2;
    /**
     * The shipperCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperCity;
    /**
     * The shipperCivility
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperCivility;
    /**
     * The shipperContactName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperContactName;
    /**
     * The shipperCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperCountry;
    /**
     * The shipperCountryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperCountryName;
    /**
     * The shipperEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperEmail;
    /**
     * The shipperMobilePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperMobilePhone;
    /**
     * The shipperName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperName;
    /**
     * The shipperName2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperName2;
    /**
     * The shipperPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperPhone;
    /**
     * The shipperPreAlert
     * @var int
     */
    public $shipperPreAlert;
    /**
     * The shipperZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperZipCode;
    /**
     * Constructor method for shipperValue
     * @uses ShipperValue::setShipperAdress1()
     * @uses ShipperValue::setShipperAdress2()
     * @uses ShipperValue::setShipperCity()
     * @uses ShipperValue::setShipperCivility()
     * @uses ShipperValue::setShipperContactName()
     * @uses ShipperValue::setShipperCountry()
     * @uses ShipperValue::setShipperCountryName()
     * @uses ShipperValue::setShipperEmail()
     * @uses ShipperValue::setShipperMobilePhone()
     * @uses ShipperValue::setShipperName()
     * @uses ShipperValue::setShipperName2()
     * @uses ShipperValue::setShipperPhone()
     * @uses ShipperValue::setShipperPreAlert()
     * @uses ShipperValue::setShipperZipCode()
     * @param string $shipperAdress1
     * @param string $shipperAdress2
     * @param string $shipperCity
     * @param string $shipperCivility
     * @param string $shipperContactName
     * @param string $shipperCountry
     * @param string $shipperCountryName
     * @param string $shipperEmail
     * @param string $shipperMobilePhone
     * @param string $shipperName
     * @param string $shipperName2
     * @param string $shipperPhone
     * @param int $shipperPreAlert
     * @param string $shipperZipCode
     */
    public function __construct($shipperAdress1 = null, $shipperAdress2 = null, $shipperCity = null, $shipperCivility = null, $shipperContactName = null, $shipperCountry = null, $shipperCountryName = null, $shipperEmail = null, $shipperMobilePhone = null, $shipperName = null, $shipperName2 = null, $shipperPhone = null, $shipperPreAlert = null, $shipperZipCode = null)
    {
        $this
            ->setShipperAdress1($shipperAdress1)
            ->setShipperAdress2($shipperAdress2)
            ->setShipperCity($shipperCity)
            ->setShipperCivility($shipperCivility)
            ->setShipperContactName($shipperContactName)
            ->setShipperCountry($shipperCountry)
            ->setShipperCountryName($shipperCountryName)
            ->setShipperEmail($shipperEmail)
            ->setShipperMobilePhone($shipperMobilePhone)
            ->setShipperName($shipperName)
            ->setShipperName2($shipperName2)
            ->setShipperPhone($shipperPhone)
            ->setShipperPreAlert($shipperPreAlert)
            ->setShipperZipCode($shipperZipCode);
    }
    /**
     * Get shipperAdress1 value
     * @return string|null
     */
    public function getShipperAdress1()
    {
        return $this->shipperAdress1;
    }
    /**
     * Set shipperAdress1 value
     * @param string $shipperAdress1
     * @return \Chronopost\StructType\ShipperValue
     */
    public function setShipperAdress1($shipperAdress1 = null)
    {
        // validation for constraint: string
        if (!is_null($shipperAdress1) && !is_string($shipperAdress1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperAdress1, true), gettype($shipperAdress1)), __LINE__);
        }
        $this->shipperAdress1 = $shipperAdress1;
        return $this;
    }
    /**
     * Get shipperAdress2 value
     * @return string|null
     */
    public function getShipperAdress2()
    {
        return $this->shipperAdress2;
    }
    /**
     * Set shipperAdress2 value
     * @param string $shipperAdress2
     * @return \Chronopost\StructType\ShipperValue
     */
    public function setShipperAdress2($shipperAdress2 = null)
    {
        // validation for constraint: string
        if (!is_null($shipperAdress2) && !is_string($shipperAdress2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperAdress2, true), gettype($shipperAdress2)), __LINE__);
        }
        $this->shipperAdress2 = $shipperAdress2;
        return $this;
    }
    /**
     * Get shipperCity value
     * @return string|null
     */
    public function getShipperCity()
    {
        return $this->shipperCity;
    }
    /**
     * Set shipperCity value
     * @param string $shipperCity
     * @return \Chronopost\StructType\ShipperValue
     */
    public function setShipperCity($shipperCity = null)
    {
        // validation for constraint: string
        if (!is_null($shipperCity) && !is_string($shipperCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCity, true), gettype($shipperCity)), __LINE__);
        }
        $this->shipperCity = $shipperCity;
        return $this;
    }
    /**
     * Get shipperCivility value
     * @return string|null
     */
    public function getShipperCivility()
    {
        return $this->shipperCivility;
    }
    /**
     * Set shipperCivility value
     * @param string $shipperCivility
     * @return \Chronopost\StructType\ShipperValue
     */
    public function setShipperCivility($shipperCivility = null)
    {
        // validation for constraint: string
        if (!is_null($shipperCivility) && !is_string($shipperCivility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCivility, true), gettype($shipperCivility)), __LINE__);
        }
        $this->shipperCivility = $shipperCivility;
        return $this;
    }
    /**
     * Get shipperContactName value
     * @return string|null
     */
    public function getShipperContactName()
    {
        return $this->shipperContactName;
    }
    /**
     * Set shipperContactName value
     * @param string $shipperContactName
     * @return \Chronopost\StructType\ShipperValue
     */
    public function setShipperContactName($shipperContactName = null)
    {
        // validation for constraint: string
        if (!is_null($shipperContactName) && !is_string($shipperContactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperContactName, true), gettype($shipperContactName)), __LINE__);
        }
        $this->shipperContactName = $shipperContactName;
        return $this;
    }
    /**
     * Get shipperCountry value
     * @return string|null
     */
    public function getShipperCountry()
    {
        return $this->shipperCountry;
    }
    /**
     * Set shipperCountry value
     * @param string $shipperCountry
     * @return \Chronopost\StructType\ShipperValue
     */
    public function setShipperCountry($shipperCountry = null)
    {
        // validation for constraint: string
        if (!is_null($shipperCountry) && !is_string($shipperCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCountry, true), gettype($shipperCountry)), __LINE__);
        }
        $this->shipperCountry = $shipperCountry;
        return $this;
    }
    /**
     * Get shipperCountryName value
     * @return string|null
     */
    public function getShipperCountryName()
    {
        return $this->shipperCountryName;
    }
    /**
     * Set shipperCountryName value
     * @param string $shipperCountryName
     * @return \Chronopost\StructType\ShipperValue
     */
    public function setShipperCountryName($shipperCountryName = null)
    {
        // validation for constraint: string
        if (!is_null($shipperCountryName) && !is_string($shipperCountryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCountryName, true), gettype($shipperCountryName)), __LINE__);
        }
        $this->shipperCountryName = $shipperCountryName;
        return $this;
    }
    /**
     * Get shipperEmail value
     * @return string|null
     */
    public function getShipperEmail()
    {
        return $this->shipperEmail;
    }
    /**
     * Set shipperEmail value
     * @param string $shipperEmail
     * @return \Chronopost\StructType\ShipperValue
     */
    public function setShipperEmail($shipperEmail = null)
    {
        // validation for constraint: string
        if (!is_null($shipperEmail) && !is_string($shipperEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperEmail, true), gettype($shipperEmail)), __LINE__);
        }
        $this->shipperEmail = $shipperEmail;
        return $this;
    }
    /**
     * Get shipperMobilePhone value
     * @return string|null
     */
    public function getShipperMobilePhone()
    {
        return $this->shipperMobilePhone;
    }
    /**
     * Set shipperMobilePhone value
     * @param string $shipperMobilePhone
     * @return \Chronopost\StructType\ShipperValue
     */
    public function setShipperMobilePhone($shipperMobilePhone = null)
    {
        // validation for constraint: string
        if (!is_null($shipperMobilePhone) && !is_string($shipperMobilePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperMobilePhone, true), gettype($shipperMobilePhone)), __LINE__);
        }
        $this->shipperMobilePhone = $shipperMobilePhone;
        return $this;
    }
    /**
     * Get shipperName value
     * @return string|null
     */
    public function getShipperName()
    {
        return $this->shipperName;
    }
    /**
     * Set shipperName value
     * @param string $shipperName
     * @return \Chronopost\StructType\ShipperValue
     */
    public function setShipperName($shipperName = null)
    {
        // validation for constraint: string
        if (!is_null($shipperName) && !is_string($shipperName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperName, true), gettype($shipperName)), __LINE__);
        }
        $this->shipperName = $shipperName;
        return $this;
    }
    /**
     * Get shipperName2 value
     * @return string|null
     */
    public function getShipperName2()
    {
        return $this->shipperName2;
    }
    /**
     * Set shipperName2 value
     * @param string $shipperName2
     * @return \Chronopost\StructType\ShipperValue
     */
    public function setShipperName2($shipperName2 = null)
    {
        // validation for constraint: string
        if (!is_null($shipperName2) && !is_string($shipperName2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperName2, true), gettype($shipperName2)), __LINE__);
        }
        $this->shipperName2 = $shipperName2;
        return $this;
    }
    /**
     * Get shipperPhone value
     * @return string|null
     */
    public function getShipperPhone()
    {
        return $this->shipperPhone;
    }
    /**
     * Set shipperPhone value
     * @param string $shipperPhone
     * @return \Chronopost\StructType\ShipperValue
     */
    public function setShipperPhone($shipperPhone = null)
    {
        // validation for constraint: string
        if (!is_null($shipperPhone) && !is_string($shipperPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperPhone, true), gettype($shipperPhone)), __LINE__);
        }
        $this->shipperPhone = $shipperPhone;
        return $this;
    }
    /**
     * Get shipperPreAlert value
     * @return int|null
     */
    public function getShipperPreAlert()
    {
        return $this->shipperPreAlert;
    }
    /**
     * Set shipperPreAlert value
     * @param int $shipperPreAlert
     * @return \Chronopost\StructType\ShipperValue
     */
    public function setShipperPreAlert($shipperPreAlert = null)
    {
        // validation for constraint: int
        if (!is_null($shipperPreAlert) && !(is_int($shipperPreAlert) || ctype_digit($shipperPreAlert))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shipperPreAlert, true), gettype($shipperPreAlert)), __LINE__);
        }
        $this->shipperPreAlert = $shipperPreAlert;
        return $this;
    }
    /**
     * Get shipperZipCode value
     * @return string|null
     */
    public function getShipperZipCode()
    {
        return $this->shipperZipCode;
    }
    /**
     * Set shipperZipCode value
     * @param string $shipperZipCode
     * @return \Chronopost\StructType\ShipperValue
     */
    public function setShipperZipCode($shipperZipCode = null)
    {
        // validation for constraint: string
        if (!is_null($shipperZipCode) && !is_string($shipperZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperZipCode, true), gettype($shipperZipCode)), __LINE__);
        }
        $this->shipperZipCode = $shipperZipCode;
        return $this;
    }
}
