<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customerValue StructType
 * @subpackage Structs
 */
class CustomerValue extends AbstractStructBase
{
    /**
     * The customerAdress1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $customerAdress1;
    /**
     * The customerAdress2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $customerAdress2;
    /**
     * The customerCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $customerCity;
    /**
     * The customerCivility
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $customerCivility;
    /**
     * The customerContactName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $customerContactName;
    /**
     * The customerCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $customerCountry;
    /**
     * The customerCountryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $customerCountryName;
    /**
     * The customerEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $customerEmail;
    /**
     * The customerMobilePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $customerMobilePhone;
    /**
     * The customerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $customerName;
    /**
     * The customerName2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $customerName2;
    /**
     * The customerPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $customerPhone;
    /**
     * The customerPreAlert
     * @var int
     */
    public $customerPreAlert;
    /**
     * The customerZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $customerZipCode;
    /**
     * The printAsSender
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $printAsSender;
    /**
     * Constructor method for customerValue
     * @uses CustomerValue::setCustomerAdress1()
     * @uses CustomerValue::setCustomerAdress2()
     * @uses CustomerValue::setCustomerCity()
     * @uses CustomerValue::setCustomerCivility()
     * @uses CustomerValue::setCustomerContactName()
     * @uses CustomerValue::setCustomerCountry()
     * @uses CustomerValue::setCustomerCountryName()
     * @uses CustomerValue::setCustomerEmail()
     * @uses CustomerValue::setCustomerMobilePhone()
     * @uses CustomerValue::setCustomerName()
     * @uses CustomerValue::setCustomerName2()
     * @uses CustomerValue::setCustomerPhone()
     * @uses CustomerValue::setCustomerPreAlert()
     * @uses CustomerValue::setCustomerZipCode()
     * @uses CustomerValue::setPrintAsSender()
     * @param string $customerAdress1
     * @param string $customerAdress2
     * @param string $customerCity
     * @param string $customerCivility
     * @param string $customerContactName
     * @param string $customerCountry
     * @param string $customerCountryName
     * @param string $customerEmail
     * @param string $customerMobilePhone
     * @param string $customerName
     * @param string $customerName2
     * @param string $customerPhone
     * @param int $customerPreAlert
     * @param string $customerZipCode
     * @param string $printAsSender
     */
    public function __construct($customerAdress1 = null, $customerAdress2 = null, $customerCity = null, $customerCivility = null, $customerContactName = null, $customerCountry = null, $customerCountryName = null, $customerEmail = null, $customerMobilePhone = null, $customerName = null, $customerName2 = null, $customerPhone = null, $customerPreAlert = null, $customerZipCode = null, $printAsSender = null)
    {
        $this
            ->setCustomerAdress1($customerAdress1)
            ->setCustomerAdress2($customerAdress2)
            ->setCustomerCity($customerCity)
            ->setCustomerCivility($customerCivility)
            ->setCustomerContactName($customerContactName)
            ->setCustomerCountry($customerCountry)
            ->setCustomerCountryName($customerCountryName)
            ->setCustomerEmail($customerEmail)
            ->setCustomerMobilePhone($customerMobilePhone)
            ->setCustomerName($customerName)
            ->setCustomerName2($customerName2)
            ->setCustomerPhone($customerPhone)
            ->setCustomerPreAlert($customerPreAlert)
            ->setCustomerZipCode($customerZipCode)
            ->setPrintAsSender($printAsSender);
    }
    /**
     * Get customerAdress1 value
     * @return string|null
     */
    public function getCustomerAdress1()
    {
        return $this->customerAdress1;
    }
    /**
     * Set customerAdress1 value
     * @param string $customerAdress1
     * @return \Chronopost\StructType\CustomerValue
     */
    public function setCustomerAdress1($customerAdress1 = null)
    {
        // validation for constraint: string
        if (!is_null($customerAdress1) && !is_string($customerAdress1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAdress1, true), gettype($customerAdress1)), __LINE__);
        }
        $this->customerAdress1 = $customerAdress1;
        return $this;
    }
    /**
     * Get customerAdress2 value
     * @return string|null
     */
    public function getCustomerAdress2()
    {
        return $this->customerAdress2;
    }
    /**
     * Set customerAdress2 value
     * @param string $customerAdress2
     * @return \Chronopost\StructType\CustomerValue
     */
    public function setCustomerAdress2($customerAdress2 = null)
    {
        // validation for constraint: string
        if (!is_null($customerAdress2) && !is_string($customerAdress2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAdress2, true), gettype($customerAdress2)), __LINE__);
        }
        $this->customerAdress2 = $customerAdress2;
        return $this;
    }
    /**
     * Get customerCity value
     * @return string|null
     */
    public function getCustomerCity()
    {
        return $this->customerCity;
    }
    /**
     * Set customerCity value
     * @param string $customerCity
     * @return \Chronopost\StructType\CustomerValue
     */
    public function setCustomerCity($customerCity = null)
    {
        // validation for constraint: string
        if (!is_null($customerCity) && !is_string($customerCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCity, true), gettype($customerCity)), __LINE__);
        }
        $this->customerCity = $customerCity;
        return $this;
    }
    /**
     * Get customerCivility value
     * @return string|null
     */
    public function getCustomerCivility()
    {
        return $this->customerCivility;
    }
    /**
     * Set customerCivility value
     * @param string $customerCivility
     * @return \Chronopost\StructType\CustomerValue
     */
    public function setCustomerCivility($customerCivility = null)
    {
        // validation for constraint: string
        if (!is_null($customerCivility) && !is_string($customerCivility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCivility, true), gettype($customerCivility)), __LINE__);
        }
        $this->customerCivility = $customerCivility;
        return $this;
    }
    /**
     * Get customerContactName value
     * @return string|null
     */
    public function getCustomerContactName()
    {
        return $this->customerContactName;
    }
    /**
     * Set customerContactName value
     * @param string $customerContactName
     * @return \Chronopost\StructType\CustomerValue
     */
    public function setCustomerContactName($customerContactName = null)
    {
        // validation for constraint: string
        if (!is_null($customerContactName) && !is_string($customerContactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerContactName, true), gettype($customerContactName)), __LINE__);
        }
        $this->customerContactName = $customerContactName;
        return $this;
    }
    /**
     * Get customerCountry value
     * @return string|null
     */
    public function getCustomerCountry()
    {
        return $this->customerCountry;
    }
    /**
     * Set customerCountry value
     * @param string $customerCountry
     * @return \Chronopost\StructType\CustomerValue
     */
    public function setCustomerCountry($customerCountry = null)
    {
        // validation for constraint: string
        if (!is_null($customerCountry) && !is_string($customerCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCountry, true), gettype($customerCountry)), __LINE__);
        }
        $this->customerCountry = $customerCountry;
        return $this;
    }
    /**
     * Get customerCountryName value
     * @return string|null
     */
    public function getCustomerCountryName()
    {
        return $this->customerCountryName;
    }
    /**
     * Set customerCountryName value
     * @param string $customerCountryName
     * @return \Chronopost\StructType\CustomerValue
     */
    public function setCustomerCountryName($customerCountryName = null)
    {
        // validation for constraint: string
        if (!is_null($customerCountryName) && !is_string($customerCountryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCountryName, true), gettype($customerCountryName)), __LINE__);
        }
        $this->customerCountryName = $customerCountryName;
        return $this;
    }
    /**
     * Get customerEmail value
     * @return string|null
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }
    /**
     * Set customerEmail value
     * @param string $customerEmail
     * @return \Chronopost\StructType\CustomerValue
     */
    public function setCustomerEmail($customerEmail = null)
    {
        // validation for constraint: string
        if (!is_null($customerEmail) && !is_string($customerEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerEmail, true), gettype($customerEmail)), __LINE__);
        }
        $this->customerEmail = $customerEmail;
        return $this;
    }
    /**
     * Get customerMobilePhone value
     * @return string|null
     */
    public function getCustomerMobilePhone()
    {
        return $this->customerMobilePhone;
    }
    /**
     * Set customerMobilePhone value
     * @param string $customerMobilePhone
     * @return \Chronopost\StructType\CustomerValue
     */
    public function setCustomerMobilePhone($customerMobilePhone = null)
    {
        // validation for constraint: string
        if (!is_null($customerMobilePhone) && !is_string($customerMobilePhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerMobilePhone, true), gettype($customerMobilePhone)), __LINE__);
        }
        $this->customerMobilePhone = $customerMobilePhone;
        return $this;
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Chronopost\StructType\CustomerValue
     */
    public function setCustomerName($customerName = null)
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        return $this;
    }
    /**
     * Get customerName2 value
     * @return string|null
     */
    public function getCustomerName2()
    {
        return $this->customerName2;
    }
    /**
     * Set customerName2 value
     * @param string $customerName2
     * @return \Chronopost\StructType\CustomerValue
     */
    public function setCustomerName2($customerName2 = null)
    {
        // validation for constraint: string
        if (!is_null($customerName2) && !is_string($customerName2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName2, true), gettype($customerName2)), __LINE__);
        }
        $this->customerName2 = $customerName2;
        return $this;
    }
    /**
     * Get customerPhone value
     * @return string|null
     */
    public function getCustomerPhone()
    {
        return $this->customerPhone;
    }
    /**
     * Set customerPhone value
     * @param string $customerPhone
     * @return \Chronopost\StructType\CustomerValue
     */
    public function setCustomerPhone($customerPhone = null)
    {
        // validation for constraint: string
        if (!is_null($customerPhone) && !is_string($customerPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerPhone, true), gettype($customerPhone)), __LINE__);
        }
        $this->customerPhone = $customerPhone;
        return $this;
    }
    /**
     * Get customerPreAlert value
     * @return int|null
     */
    public function getCustomerPreAlert()
    {
        return $this->customerPreAlert;
    }
    /**
     * Set customerPreAlert value
     * @param int $customerPreAlert
     * @return \Chronopost\StructType\CustomerValue
     */
    public function setCustomerPreAlert($customerPreAlert = null)
    {
        // validation for constraint: int
        if (!is_null($customerPreAlert) && !(is_int($customerPreAlert) || ctype_digit($customerPreAlert))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerPreAlert, true), gettype($customerPreAlert)), __LINE__);
        }
        $this->customerPreAlert = $customerPreAlert;
        return $this;
    }
    /**
     * Get customerZipCode value
     * @return string|null
     */
    public function getCustomerZipCode()
    {
        return $this->customerZipCode;
    }
    /**
     * Set customerZipCode value
     * @param string $customerZipCode
     * @return \Chronopost\StructType\CustomerValue
     */
    public function setCustomerZipCode($customerZipCode = null)
    {
        // validation for constraint: string
        if (!is_null($customerZipCode) && !is_string($customerZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerZipCode, true), gettype($customerZipCode)), __LINE__);
        }
        $this->customerZipCode = $customerZipCode;
        return $this;
    }
    /**
     * Get printAsSender value
     * @return string|null
     */
    public function getPrintAsSender()
    {
        return $this->printAsSender;
    }
    /**
     * Set printAsSender value
     * @param string $printAsSender
     * @return \Chronopost\StructType\CustomerValue
     */
    public function setPrintAsSender($printAsSender = null)
    {
        // validation for constraint: string
        if (!is_null($printAsSender) && !is_string($printAsSender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printAsSender, true), gettype($printAsSender)), __LINE__);
        }
        $this->printAsSender = $printAsSender;
        return $this;
    }
}
