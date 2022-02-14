<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeAndModeAuth StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeAndModeAuth
 * @subpackage Structs
 */
class GetReservedSkybillWithTypeAndModeAuth extends AbstractStructBase
{
    /**
     * The numberSearch
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $numberSearch;
    /**
     * The mode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mode;
    /**
     * The accountNumber
     * @var int
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
     * Constructor method for getReservedSkybillWithTypeAndModeAuth
     * @uses GetReservedSkybillWithTypeAndModeAuth::setNumberSearch()
     * @uses GetReservedSkybillWithTypeAndModeAuth::setMode()
     * @uses GetReservedSkybillWithTypeAndModeAuth::setAccountNumber()
     * @uses GetReservedSkybillWithTypeAndModeAuth::setPassword()
     * @param string $numberSearch
     * @param string $mode
     * @param int $accountNumber
     * @param string $password
     */
    public function __construct($numberSearch = null, $mode = null, $accountNumber = null, $password = null)
    {
        $this
            ->setNumberSearch($numberSearch)
            ->setMode($mode)
            ->setAccountNumber($accountNumber)
            ->setPassword($password);
    }
    /**
     * Get numberSearch value
     * @return string|null
     */
    public function getNumberSearch()
    {
        return $this->numberSearch;
    }
    /**
     * Set numberSearch value
     * @param string $numberSearch
     * @return \Chronopost\StructType\GetReservedSkybillWithTypeAndModeAuth
     */
    public function setNumberSearch($numberSearch = null)
    {
        // validation for constraint: string
        if (!is_null($numberSearch) && !is_string($numberSearch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberSearch, true), gettype($numberSearch)), __LINE__);
        }
        $this->numberSearch = $numberSearch;
        return $this;
    }
    /**
     * Get mode value
     * @return string|null
     */
    public function getMode()
    {
        return $this->mode;
    }
    /**
     * Set mode value
     * @param string $mode
     * @return \Chronopost\StructType\GetReservedSkybillWithTypeAndModeAuth
     */
    public function setMode($mode = null)
    {
        // validation for constraint: string
        if (!is_null($mode) && !is_string($mode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mode, true), gettype($mode)), __LINE__);
        }
        $this->mode = $mode;
        return $this;
    }
    /**
     * Get accountNumber value
     * @return int|null
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param int $accountNumber
     * @return \Chronopost\StructType\GetReservedSkybillWithTypeAndModeAuth
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: int
        if (!is_null($accountNumber) && !(is_int($accountNumber) || ctype_digit($accountNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
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
     * @return \Chronopost\StructType\GetReservedSkybillWithTypeAndModeAuth
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
}
