<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSearch StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSearch
 * @subpackage Structs
 */
class TrackSearch extends AbstractStructBase
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
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $language;
    /**
     * The consigneesCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $consigneesCountry;
    /**
     * The consigneesRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $consigneesRef;
    /**
     * The consigneesZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $consigneesZipCode;
    /**
     * The dateDeposit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dateDeposit;
    /**
     * The dateEndDeposit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dateEndDeposit;
    /**
     * The parcelState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $parcelState;
    /**
     * The sendersRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sendersRef;
    /**
     * The serviceCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $serviceCode;
    /**
     * Constructor method for trackSearch
     * @uses TrackSearch::setAccountNumber()
     * @uses TrackSearch::setPassword()
     * @uses TrackSearch::setLanguage()
     * @uses TrackSearch::setConsigneesCountry()
     * @uses TrackSearch::setConsigneesRef()
     * @uses TrackSearch::setConsigneesZipCode()
     * @uses TrackSearch::setDateDeposit()
     * @uses TrackSearch::setDateEndDeposit()
     * @uses TrackSearch::setParcelState()
     * @uses TrackSearch::setSendersRef()
     * @uses TrackSearch::setServiceCode()
     * @param string $accountNumber
     * @param string $password
     * @param string $language
     * @param string $consigneesCountry
     * @param string $consigneesRef
     * @param string $consigneesZipCode
     * @param string $dateDeposit
     * @param string $dateEndDeposit
     * @param string $parcelState
     * @param string $sendersRef
     * @param string $serviceCode
     */
    public function __construct($accountNumber = null, $password = null, $language = null, $consigneesCountry = null, $consigneesRef = null, $consigneesZipCode = null, $dateDeposit = null, $dateEndDeposit = null, $parcelState = null, $sendersRef = null, $serviceCode = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setLanguage($language)
            ->setConsigneesCountry($consigneesCountry)
            ->setConsigneesRef($consigneesRef)
            ->setConsigneesZipCode($consigneesZipCode)
            ->setDateDeposit($dateDeposit)
            ->setDateEndDeposit($dateEndDeposit)
            ->setParcelState($parcelState)
            ->setSendersRef($sendersRef)
            ->setServiceCode($serviceCode);
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
     * @return \Chronopost\StructType\TrackSearch
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
     * @return \Chronopost\StructType\TrackSearch
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
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Get consigneesCountry value
     * @return string|null
     */
    public function getConsigneesCountry()
    {
        return $this->consigneesCountry;
    }
    /**
     * Set consigneesCountry value
     * @param string $consigneesCountry
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setConsigneesCountry($consigneesCountry = null)
    {
        // validation for constraint: string
        if (!is_null($consigneesCountry) && !is_string($consigneesCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consigneesCountry, true), gettype($consigneesCountry)), __LINE__);
        }
        $this->consigneesCountry = $consigneesCountry;
        return $this;
    }
    /**
     * Get consigneesRef value
     * @return string|null
     */
    public function getConsigneesRef()
    {
        return $this->consigneesRef;
    }
    /**
     * Set consigneesRef value
     * @param string $consigneesRef
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setConsigneesRef($consigneesRef = null)
    {
        // validation for constraint: string
        if (!is_null($consigneesRef) && !is_string($consigneesRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consigneesRef, true), gettype($consigneesRef)), __LINE__);
        }
        $this->consigneesRef = $consigneesRef;
        return $this;
    }
    /**
     * Get consigneesZipCode value
     * @return string|null
     */
    public function getConsigneesZipCode()
    {
        return $this->consigneesZipCode;
    }
    /**
     * Set consigneesZipCode value
     * @param string $consigneesZipCode
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setConsigneesZipCode($consigneesZipCode = null)
    {
        // validation for constraint: string
        if (!is_null($consigneesZipCode) && !is_string($consigneesZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consigneesZipCode, true), gettype($consigneesZipCode)), __LINE__);
        }
        $this->consigneesZipCode = $consigneesZipCode;
        return $this;
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
     * @return \Chronopost\StructType\TrackSearch
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
     * Get dateEndDeposit value
     * @return string|null
     */
    public function getDateEndDeposit()
    {
        return $this->dateEndDeposit;
    }
    /**
     * Set dateEndDeposit value
     * @param string $dateEndDeposit
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setDateEndDeposit($dateEndDeposit = null)
    {
        // validation for constraint: string
        if (!is_null($dateEndDeposit) && !is_string($dateEndDeposit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateEndDeposit, true), gettype($dateEndDeposit)), __LINE__);
        }
        $this->dateEndDeposit = $dateEndDeposit;
        return $this;
    }
    /**
     * Get parcelState value
     * @return string|null
     */
    public function getParcelState()
    {
        return $this->parcelState;
    }
    /**
     * Set parcelState value
     * @param string $parcelState
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setParcelState($parcelState = null)
    {
        // validation for constraint: string
        if (!is_null($parcelState) && !is_string($parcelState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelState, true), gettype($parcelState)), __LINE__);
        }
        $this->parcelState = $parcelState;
        return $this;
    }
    /**
     * Get sendersRef value
     * @return string|null
     */
    public function getSendersRef()
    {
        return $this->sendersRef;
    }
    /**
     * Set sendersRef value
     * @param string $sendersRef
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setSendersRef($sendersRef = null)
    {
        // validation for constraint: string
        if (!is_null($sendersRef) && !is_string($sendersRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sendersRef, true), gettype($sendersRef)), __LINE__);
        }
        $this->sendersRef = $sendersRef;
        return $this;
    }
    /**
     * Get serviceCode value
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }
    /**
     * Set serviceCode value
     * @param string $serviceCode
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setServiceCode($serviceCode = null)
    {
        // validation for constraint: string
        if (!is_null($serviceCode) && !is_string($serviceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceCode, true), gettype($serviceCode)), __LINE__);
        }
        $this->serviceCode = $serviceCode;
        return $this;
    }
}
