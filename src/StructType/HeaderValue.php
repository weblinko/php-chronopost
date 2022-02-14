<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for headerValue StructType
 * @subpackage Structs
 */
class HeaderValue extends AbstractStructBase
{
    /**
     * The accountNumber
     * @var int
     */
    public $accountNumber;
    /**
     * The idEmit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $idEmit;
    /**
     * The identWebPro
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $identWebPro;
    /**
     * The subAccount
     * @var int
     */
    public $subAccount;
    /**
     * Constructor method for headerValue
     * @uses HeaderValue::setAccountNumber()
     * @uses HeaderValue::setIdEmit()
     * @uses HeaderValue::setIdentWebPro()
     * @uses HeaderValue::setSubAccount()
     * @param int $accountNumber
     * @param string $idEmit
     * @param string $identWebPro
     * @param int $subAccount
     */
    public function __construct($accountNumber = null, $idEmit = null, $identWebPro = null, $subAccount = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setIdEmit($idEmit)
            ->setIdentWebPro($identWebPro)
            ->setSubAccount($subAccount);
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
     * @return \Chronopost\StructType\HeaderValue
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
     * Get idEmit value
     * @return string|null
     */
    public function getIdEmit()
    {
        return $this->idEmit;
    }
    /**
     * Set idEmit value
     * @param string $idEmit
     * @return \Chronopost\StructType\HeaderValue
     */
    public function setIdEmit($idEmit = null)
    {
        // validation for constraint: string
        if (!is_null($idEmit) && !is_string($idEmit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idEmit, true), gettype($idEmit)), __LINE__);
        }
        $this->idEmit = $idEmit;
        return $this;
    }
    /**
     * Get identWebPro value
     * @return string|null
     */
    public function getIdentWebPro()
    {
        return $this->identWebPro;
    }
    /**
     * Set identWebPro value
     * @param string $identWebPro
     * @return \Chronopost\StructType\HeaderValue
     */
    public function setIdentWebPro($identWebPro = null)
    {
        // validation for constraint: string
        if (!is_null($identWebPro) && !is_string($identWebPro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identWebPro, true), gettype($identWebPro)), __LINE__);
        }
        $this->identWebPro = $identWebPro;
        return $this;
    }
    /**
     * Get subAccount value
     * @return int|null
     */
    public function getSubAccount()
    {
        return $this->subAccount;
    }
    /**
     * Set subAccount value
     * @param int $subAccount
     * @return \Chronopost\StructType\HeaderValue
     */
    public function setSubAccount($subAccount = null)
    {
        // validation for constraint: int
        if (!is_null($subAccount) && !(is_int($subAccount) || ctype_digit($subAccount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($subAccount, true), gettype($subAccount)), __LINE__);
        }
        $this->subAccount = $subAccount;
        return $this;
    }
}
