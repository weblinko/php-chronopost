<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRouting StructType
 * Meta information extracted from the WSDL
 * - type: tns:getRouting
 * @subpackage Structs
 */
class GetRouting extends AbstractStructBase
{
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $accountNumber;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $password;
    /**
     * The shipperDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperDepot;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $countryCode;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $zipCode;
    /**
     * The socode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $socode;
    /**
     * The ascode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ascode;
    /**
     * Constructor method for getRouting
     * @uses GetRouting::setAccountNumber()
     * @uses GetRouting::setPassword()
     * @uses GetRouting::setShipperDepot()
     * @uses GetRouting::setCountryCode()
     * @uses GetRouting::setZipCode()
     * @uses GetRouting::setSocode()
     * @uses GetRouting::setAscode()
     * @param string $accountNumber
     * @param string $password
     * @param string $shipperDepot
     * @param string $countryCode
     * @param string $zipCode
     * @param string $socode
     * @param string $ascode
     */
    public function __construct($accountNumber = null, $password = null, $shipperDepot = null, $countryCode = null, $zipCode = null, $socode = null, $ascode = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setShipperDepot($shipperDepot)
            ->setCountryCode($countryCode)
            ->setZipCode($zipCode)
            ->setSocode($socode)
            ->setAscode($ascode);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \Chronopost\StructType\GetRouting
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Chronopost\StructType\GetRouting
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get shipperDepot value
     * @return string|null
     */
    public function getShipperDepot()
    {
        return $this->shipperDepot;
    }
    /**
     * Set shipperDepot value
     * @param string $shipperDepot
     * @return \Chronopost\StructType\GetRouting
     */
    public function setShipperDepot($shipperDepot = null)
    {
        // validation for constraint: string
        if (!is_null($shipperDepot) && !is_string($shipperDepot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperDepot, true), gettype($shipperDepot)), __LINE__);
        }
        $this->shipperDepot = $shipperDepot;
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Chronopost\StructType\GetRouting
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
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
     * @return \Chronopost\StructType\GetRouting
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
     * Get socode value
     * @return string|null
     */
    public function getSocode()
    {
        return $this->socode;
    }
    /**
     * Set socode value
     * @param string $socode
     * @return \Chronopost\StructType\GetRouting
     */
    public function setSocode($socode = null)
    {
        // validation for constraint: string
        if (!is_null($socode) && !is_string($socode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($socode, true), gettype($socode)), __LINE__);
        }
        $this->socode = $socode;
        return $this;
    }
    /**
     * Get ascode value
     * @return string|null
     */
    public function getAscode()
    {
        return $this->ascode;
    }
    /**
     * Set ascode value
     * @param string $ascode
     * @return \Chronopost\StructType\GetRouting
     */
    public function setAscode($ascode = null)
    {
        // validation for constraint: string
        if (!is_null($ascode) && !is_string($ascode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ascode, true), gettype($ascode)), __LINE__);
        }
        $this->ascode = $ascode;
        return $this;
    }
}
