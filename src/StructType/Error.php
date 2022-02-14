<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for error StructType
 * @subpackage Structs
 */
class Error extends AbstractStructBase
{
    /**
     * The detail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\Detail
     */
    public $detail;
    /**
     * The errorCode
     * @var int
     */
    public $errorCode;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $errorMessage;
    /**
     * Constructor method for error
     * @uses Error::setDetail()
     * @uses Error::setErrorCode()
     * @uses Error::setErrorMessage()
     * @param \Chronopost\StructType\Detail $detail
     * @param int $errorCode
     * @param string $errorMessage
     */
    public function __construct(\Chronopost\StructType\Detail $detail = null, $errorCode = null, $errorMessage = null)
    {
        $this
            ->setDetail($detail)
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get detail value
     * @return \Chronopost\StructType\Detail|null
     */
    public function getDetail()
    {
        return $this->detail;
    }
    /**
     * Set detail value
     * @param \Chronopost\StructType\Detail $detail
     * @return \Chronopost\StructType\Error
     */
    public function setDetail(\Chronopost\StructType\Detail $detail = null)
    {
        $this->detail = $detail;
        return $this;
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \Chronopost\StructType\Error
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \Chronopost\StructType\Error
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        return $this;
    }
}
