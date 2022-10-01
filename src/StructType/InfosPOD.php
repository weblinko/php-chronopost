<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for infosPOD StructType
 * @subpackage Structs
 */
class InfosPOD extends AbstractStructBase
{
    /**
     * The dateDeposit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dateDeposit;
    /**
     * The depositCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $depositCountry;
    /**
     * The depositZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $depositZipCode;
    /**
     * The objectType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $objectType;
    /**
     * The recipientCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $recipientCity;
    /**
     * The recipientCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $recipientCountry;
    /**
     * The recipientName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $recipientName;
    /**
     * The recipientRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $recipientRef;
    /**
     * The recipientZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $recipientZipCode;
    /**
     * The shipperCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperCity;
    /**
     * The shipperRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperRef;
    /**
     * The shipperZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperZipCode;
    /**
     * The significantEvent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\Event
     */
    public $significantEvent;
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $skybillNumber;
    /**
     * Constructor method for infosPOD
     * @uses InfosPOD::setDateDeposit()
     * @uses InfosPOD::setDepositCountry()
     * @uses InfosPOD::setDepositZipCode()
     * @uses InfosPOD::setObjectType()
     * @uses InfosPOD::setRecipientCity()
     * @uses InfosPOD::setRecipientCountry()
     * @uses InfosPOD::setRecipientName()
     * @uses InfosPOD::setRecipientRef()
     * @uses InfosPOD::setRecipientZipCode()
     * @uses InfosPOD::setShipperCity()
     * @uses InfosPOD::setShipperRef()
     * @uses InfosPOD::setShipperZipCode()
     * @uses InfosPOD::setSignificantEvent()
     * @uses InfosPOD::setSkybillNumber()
     * @param string $dateDeposit
     * @param string $depositCountry
     * @param string $depositZipCode
     * @param string $objectType
     * @param string $recipientCity
     * @param string $recipientCountry
     * @param string $recipientName
     * @param string $recipientRef
     * @param string $recipientZipCode
     * @param string $shipperCity
     * @param string $shipperRef
     * @param string $shipperZipCode
     * @param \Chronopost\StructType\Event $significantEvent
     * @param string $skybillNumber
     */
    public function __construct($dateDeposit = null, $depositCountry = null, $depositZipCode = null, $objectType = null, $recipientCity = null, $recipientCountry = null, $recipientName = null, $recipientRef = null, $recipientZipCode = null, $shipperCity = null, $shipperRef = null, $shipperZipCode = null, \Chronopost\StructType\Event $significantEvent = null, $skybillNumber = null)
    {
        $this
            ->setDateDeposit($dateDeposit)
            ->setDepositCountry($depositCountry)
            ->setDepositZipCode($depositZipCode)
            ->setObjectType($objectType)
            ->setRecipientCity($recipientCity)
            ->setRecipientCountry($recipientCountry)
            ->setRecipientName($recipientName)
            ->setRecipientRef($recipientRef)
            ->setRecipientZipCode($recipientZipCode)
            ->setShipperCity($shipperCity)
            ->setShipperRef($shipperRef)
            ->setShipperZipCode($shipperZipCode)
            ->setSignificantEvent($significantEvent)
            ->setSkybillNumber($skybillNumber);
    }
    /**
     * Get dateDeposit value
     * @return string|null
     */
    public function getDateDeposit()
    {
        return $this->dateDeposit;
    }
    /**
     * Set dateDeposit value
     * @param string $dateDeposit
     * @return \Chronopost\StructType\InfosPOD
     */
    public function setDateDeposit($dateDeposit = null)
    {
        // validation for constraint: string
        if (!is_null($dateDeposit) && !is_string($dateDeposit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateDeposit, true), gettype($dateDeposit)), __LINE__);
        }
        $this->dateDeposit = $dateDeposit;
        return $this;
    }
    /**
     * Get depositCountry value
     * @return string|null
     */
    public function getDepositCountry()
    {
        return $this->depositCountry;
    }
    /**
     * Set depositCountry value
     * @param string $depositCountry
     * @return \Chronopost\StructType\InfosPOD
     */
    public function setDepositCountry($depositCountry = null)
    {
        // validation for constraint: string
        if (!is_null($depositCountry) && !is_string($depositCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositCountry, true), gettype($depositCountry)), __LINE__);
        }
        $this->depositCountry = $depositCountry;
        return $this;
    }
    /**
     * Get depositZipCode value
     * @return string|null
     */
    public function getDepositZipCode()
    {
        return $this->depositZipCode;
    }
    /**
     * Set depositZipCode value
     * @param string $depositZipCode
     * @return \Chronopost\StructType\InfosPOD
     */
    public function setDepositZipCode($depositZipCode = null)
    {
        // validation for constraint: string
        if (!is_null($depositZipCode) && !is_string($depositZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositZipCode, true), gettype($depositZipCode)), __LINE__);
        }
        $this->depositZipCode = $depositZipCode;
        return $this;
    }
    /**
     * Get objectType value
     * @return string|null
     */
    public function getObjectType()
    {
        return $this->objectType;
    }
    /**
     * Set objectType value
     * @param string $objectType
     * @return \Chronopost\StructType\InfosPOD
     */
    public function setObjectType($objectType = null)
    {
        // validation for constraint: string
        if (!is_null($objectType) && !is_string($objectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectType, true), gettype($objectType)), __LINE__);
        }
        $this->objectType = $objectType;
        return $this;
    }
    /**
     * Get recipientCity value
     * @return string|null
     */
    public function getRecipientCity()
    {
        return $this->recipientCity;
    }
    /**
     * Set recipientCity value
     * @param string $recipientCity
     * @return \Chronopost\StructType\InfosPOD
     */
    public function setRecipientCity($recipientCity = null)
    {
        // validation for constraint: string
        if (!is_null($recipientCity) && !is_string($recipientCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCity, true), gettype($recipientCity)), __LINE__);
        }
        $this->recipientCity = $recipientCity;
        return $this;
    }
    /**
     * Get recipientCountry value
     * @return string|null
     */
    public function getRecipientCountry()
    {
        return $this->recipientCountry;
    }
    /**
     * Set recipientCountry value
     * @param string $recipientCountry
     * @return \Chronopost\StructType\InfosPOD
     */
    public function setRecipientCountry($recipientCountry = null)
    {
        // validation for constraint: string
        if (!is_null($recipientCountry) && !is_string($recipientCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCountry, true), gettype($recipientCountry)), __LINE__);
        }
        $this->recipientCountry = $recipientCountry;
        return $this;
    }
    /**
     * Get recipientName value
     * @return string|null
     */
    public function getRecipientName()
    {
        return $this->recipientName;
    }
    /**
     * Set recipientName value
     * @param string $recipientName
     * @return \Chronopost\StructType\InfosPOD
     */
    public function setRecipientName($recipientName = null)
    {
        // validation for constraint: string
        if (!is_null($recipientName) && !is_string($recipientName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientName, true), gettype($recipientName)), __LINE__);
        }
        $this->recipientName = $recipientName;
        return $this;
    }
    /**
     * Get recipientRef value
     * @return string|null
     */
    public function getRecipientRef()
    {
        return $this->recipientRef;
    }
    /**
     * Set recipientRef value
     * @param string $recipientRef
     * @return \Chronopost\StructType\InfosPOD
     */
    public function setRecipientRef($recipientRef = null)
    {
        // validation for constraint: string
        if (!is_null($recipientRef) && !is_string($recipientRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientRef, true), gettype($recipientRef)), __LINE__);
        }
        $this->recipientRef = $recipientRef;
        return $this;
    }
    /**
     * Get recipientZipCode value
     * @return string|null
     */
    public function getRecipientZipCode()
    {
        return $this->recipientZipCode;
    }
    /**
     * Set recipientZipCode value
     * @param string $recipientZipCode
     * @return \Chronopost\StructType\InfosPOD
     */
    public function setRecipientZipCode($recipientZipCode = null)
    {
        // validation for constraint: string
        if (!is_null($recipientZipCode) && !is_string($recipientZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientZipCode, true), gettype($recipientZipCode)), __LINE__);
        }
        $this->recipientZipCode = $recipientZipCode;
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
     * @return \Chronopost\StructType\InfosPOD
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
     * Get shipperRef value
     * @return string|null
     */
    public function getShipperRef()
    {
        return $this->shipperRef;
    }
    /**
     * Set shipperRef value
     * @param string $shipperRef
     * @return \Chronopost\StructType\InfosPOD
     */
    public function setShipperRef($shipperRef = null)
    {
        // validation for constraint: string
        if (!is_null($shipperRef) && !is_string($shipperRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperRef, true), gettype($shipperRef)), __LINE__);
        }
        $this->shipperRef = $shipperRef;
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
     * @return \Chronopost\StructType\InfosPOD
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
    /**
     * Get significantEvent value
     * @return \Chronopost\StructType\Event|null
     */
    public function getSignificantEvent()
    {
        return $this->significantEvent;
    }
    /**
     * Set significantEvent value
     * @param \Chronopost\StructType\Event $significantEvent
     * @return \Chronopost\StructType\InfosPOD
     */
    public function setSignificantEvent(\Chronopost\StructType\Event $significantEvent = null)
    {
        $this->significantEvent = $significantEvent;
        return $this;
    }
    /**
     * Get skybillNumber value
     * @return string|null
     */
    public function getSkybillNumber()
    {
        return $this->skybillNumber;
    }
    /**
     * Set skybillNumber value
     * @param string $skybillNumber
     * @return \Chronopost\StructType\InfosPOD
     */
    public function setSkybillNumber($skybillNumber = null)
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;
        return $this;
    }
}
