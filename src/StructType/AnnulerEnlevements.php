<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for annulerEnlevements StructType
 * Meta information extracted from the WSDL
 * - type: tns:annulerEnlevements
 * @subpackage Structs
 */
class AnnulerEnlevements extends AbstractStructBase
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
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $locale;
    /**
     * The esdNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $esdNumber;
    /**
     * Constructor method for annulerEnlevements
     * @uses AnnulerEnlevements::setAccountNumber()
     * @uses AnnulerEnlevements::setPassword()
     * @uses AnnulerEnlevements::setLocale()
     * @uses AnnulerEnlevements::setEsdNumber()
     * @param string $accountNumber
     * @param string $password
     * @param string $locale
     * @param string[] $esdNumber
     */
    public function __construct($accountNumber = null, $password = null, $locale = null, array $esdNumber = array())
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setLocale($locale)
            ->setEsdNumber($esdNumber);
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
     * @return \Chronopost\StructType\AnnulerEnlevements
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
     * @return \Chronopost\StructType\AnnulerEnlevements
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
     * Get locale value
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Chronopost\StructType\AnnulerEnlevements
     */
    public function setLocale($locale = null)
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        return $this;
    }
    /**
     * Get esdNumber value
     * @return string[]|null
     */
    public function getEsdNumber()
    {
        return $this->esdNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setEsdNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEsdNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEsdNumberForArrayConstraintsFromSetEsdNumber(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $annulerEnlevementsEsdNumberItem) {
            // validation for constraint: itemType
            if (!is_string($annulerEnlevementsEsdNumberItem)) {
                $invalidValues[] = is_object($annulerEnlevementsEsdNumberItem) ? get_class($annulerEnlevementsEsdNumberItem) : sprintf('%s(%s)', gettype($annulerEnlevementsEsdNumberItem), var_export($annulerEnlevementsEsdNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The esdNumber property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set esdNumber value
     * @throws \InvalidArgumentException
     * @param string[] $esdNumber
     * @return \Chronopost\StructType\AnnulerEnlevements
     */
    public function setEsdNumber(array $esdNumber = array())
    {
        // validation for constraint: array
        if ('' !== ($esdNumberArrayErrorMessage = self::validateEsdNumberForArrayConstraintsFromSetEsdNumber($esdNumber))) {
            throw new \InvalidArgumentException($esdNumberArrayErrorMessage, __LINE__);
        }
        $this->esdNumber = $esdNumber;
        return $this;
    }
    /**
     * Add item to esdNumber value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Chronopost\StructType\AnnulerEnlevements
     */
    public function addToEsdNumber($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The esdNumber property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->esdNumber[] = $item;
        return $this;
    }
}
