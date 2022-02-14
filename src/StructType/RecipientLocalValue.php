<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recipientLocalValue StructType
 * @subpackage Structs
 */
class RecipientLocalValue extends RecipientValue
{
    /**
     * The identityCardNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identityCardNumber;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $language;
    /**
     * The province
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $province;
    /**
     * Constructor method for recipientLocalValue
     * @uses RecipientLocalValue::setIdentityCardNumber()
     * @uses RecipientLocalValue::setLanguage()
     * @uses RecipientLocalValue::setProvince()
     * @param string $identityCardNumber
     * @param string $language
     * @param string $province
     */
    public function __construct($identityCardNumber = null, $language = null, $province = null)
    {
        $this
            ->setIdentityCardNumber($identityCardNumber)
            ->setLanguage($language)
            ->setProvince($province);
    }
    /**
     * Get identityCardNumber value
     * @return string|null
     */
    public function getIdentityCardNumber()
    {
        return $this->identityCardNumber;
    }
    /**
     * Set identityCardNumber value
     * @param string $identityCardNumber
     * @return \Chronopost\StructType\RecipientLocalValue
     */
    public function setIdentityCardNumber($identityCardNumber = null)
    {
        // validation for constraint: string
        if (!is_null($identityCardNumber) && !is_string($identityCardNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identityCardNumber, true), gettype($identityCardNumber)), __LINE__);
        }
        $this->identityCardNumber = $identityCardNumber;
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
     * @return \Chronopost\StructType\RecipientLocalValue
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
     * Get province value
     * @return string|null
     */
    public function getProvince()
    {
        return $this->province;
    }
    /**
     * Set province value
     * @param string $province
     * @return \Chronopost\StructType\RecipientLocalValue
     */
    public function setProvince($province = null)
    {
        // validation for constraint: string
        if (!is_null($province) && !is_string($province)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($province, true), gettype($province)), __LINE__);
        }
        $this->province = $province;
        return $this;
    }
}
