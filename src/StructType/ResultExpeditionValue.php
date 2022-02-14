<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultExpeditionValue StructType
 * @subpackage Structs
 */
class ResultExpeditionValue extends AbstractStructBase
{
    /**
     * The ESDFullNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ESDFullNumber;
    /**
     * The ESDNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ESDNumber;
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
     * The pickupDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pickupDate;
    /**
     * The skybill
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $skybill;
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $skybillNumber;
    /**
     * Constructor method for resultExpeditionValue
     * @uses ResultExpeditionValue::setESDFullNumber()
     * @uses ResultExpeditionValue::setESDNumber()
     * @uses ResultExpeditionValue::setErrorCode()
     * @uses ResultExpeditionValue::setErrorMessage()
     * @uses ResultExpeditionValue::setPickupDate()
     * @uses ResultExpeditionValue::setSkybill()
     * @uses ResultExpeditionValue::setSkybillNumber()
     * @param string $eSDFullNumber
     * @param string $eSDNumber
     * @param int $errorCode
     * @param string $errorMessage
     * @param string $pickupDate
     * @param string $skybill
     * @param string $skybillNumber
     */
    public function __construct($eSDFullNumber = null, $eSDNumber = null, $errorCode = null, $errorMessage = null, $pickupDate = null, $skybill = null, $skybillNumber = null)
    {
        $this
            ->setESDFullNumber($eSDFullNumber)
            ->setESDNumber($eSDNumber)
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setPickupDate($pickupDate)
            ->setSkybill($skybill)
            ->setSkybillNumber($skybillNumber);
    }
    /**
     * Get ESDFullNumber value
     * @return string|null
     */
    public function getESDFullNumber()
    {
        return $this->ESDFullNumber;
    }
    /**
     * Set ESDFullNumber value
     * @param string $eSDFullNumber
     * @return \Chronopost\StructType\ResultExpeditionValue
     */
    public function setESDFullNumber($eSDFullNumber = null)
    {
        // validation for constraint: string
        if (!is_null($eSDFullNumber) && !is_string($eSDFullNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eSDFullNumber, true), gettype($eSDFullNumber)), __LINE__);
        }
        $this->ESDFullNumber = $eSDFullNumber;
        return $this;
    }
    /**
     * Get ESDNumber value
     * @return string|null
     */
    public function getESDNumber()
    {
        return $this->ESDNumber;
    }
    /**
     * Set ESDNumber value
     * @param string $eSDNumber
     * @return \Chronopost\StructType\ResultExpeditionValue
     */
    public function setESDNumber($eSDNumber = null)
    {
        // validation for constraint: string
        if (!is_null($eSDNumber) && !is_string($eSDNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eSDNumber, true), gettype($eSDNumber)), __LINE__);
        }
        $this->ESDNumber = $eSDNumber;
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
     * @return \Chronopost\StructType\ResultExpeditionValue
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
     * @return \Chronopost\StructType\ResultExpeditionValue
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
     * Get pickupDate value
     * @return string|null
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }
    /**
     * Set pickupDate value
     * @param string $pickupDate
     * @return \Chronopost\StructType\ResultExpeditionValue
     */
    public function setPickupDate($pickupDate = null)
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDate, true), gettype($pickupDate)), __LINE__);
        }
        $this->pickupDate = $pickupDate;
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
     * @return \Chronopost\StructType\ResultExpeditionValue
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
     * @return \Chronopost\StructType\ResultExpeditionValue
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
