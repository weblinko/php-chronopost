<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultGetReservedSkybillWithTypeValue StructType
 * @subpackage Structs
 */
class ResultGetReservedSkybillWithTypeValue extends AbstractStructBase
{
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
     * The skybill
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $skybill;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type;
    /**
     * Constructor method for resultGetReservedSkybillWithTypeValue
     * @uses ResultGetReservedSkybillWithTypeValue::setErrorCode()
     * @uses ResultGetReservedSkybillWithTypeValue::setErrorMessage()
     * @uses ResultGetReservedSkybillWithTypeValue::setSkybill()
     * @uses ResultGetReservedSkybillWithTypeValue::setType()
     * @param int $errorCode
     * @param string $errorMessage
     * @param string $skybill
     * @param string $type
     */
    public function __construct($errorCode = null, $errorMessage = null, $skybill = null, $type = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setSkybill($skybill)
            ->setType($type);
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
     * @return \Chronopost\StructType\ResultGetReservedSkybillWithTypeValue
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
     * @return \Chronopost\StructType\ResultGetReservedSkybillWithTypeValue
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
    /**
     * Get skybill value
     * @return string|null
     */
    public function getSkybill()
    {
        return $this->skybill;
    }
    /**
     * Set skybill value
     * @param string $skybill
     * @return \Chronopost\StructType\ResultGetReservedSkybillWithTypeValue
     */
    public function setSkybill($skybill = null)
    {
        // validation for constraint: string
        if (!is_null($skybill) && !is_string($skybill)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybill, true), gettype($skybill)), __LINE__);
        }
        $this->skybill = $skybill;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Chronopost\StructType\ResultGetReservedSkybillWithTypeValue
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
