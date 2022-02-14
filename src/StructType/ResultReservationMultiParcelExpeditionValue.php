<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultReservationMultiParcelExpeditionValue StructType
 * @subpackage Structs
 */
class ResultReservationMultiParcelExpeditionValue extends AbstractStructBase
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
     * The reservationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reservationNumber;
    /**
     * The resultParcelValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Chronopost\StructType\ResultParcelValue[]
     */
    public $resultParcelValue;
    /**
     * Constructor method for resultReservationMultiParcelExpeditionValue
     * @uses ResultReservationMultiParcelExpeditionValue::setESDFullNumber()
     * @uses ResultReservationMultiParcelExpeditionValue::setESDNumber()
     * @uses ResultReservationMultiParcelExpeditionValue::setErrorCode()
     * @uses ResultReservationMultiParcelExpeditionValue::setErrorMessage()
     * @uses ResultReservationMultiParcelExpeditionValue::setPickupDate()
     * @uses ResultReservationMultiParcelExpeditionValue::setReservationNumber()
     * @uses ResultReservationMultiParcelExpeditionValue::setResultParcelValue()
     * @param string $eSDFullNumber
     * @param string $eSDNumber
     * @param int $errorCode
     * @param string $errorMessage
     * @param string $pickupDate
     * @param string $reservationNumber
     * @param \Chronopost\StructType\ResultParcelValue[] $resultParcelValue
     */
    public function __construct($eSDFullNumber = null, $eSDNumber = null, $errorCode = null, $errorMessage = null, $pickupDate = null, $reservationNumber = null, array $resultParcelValue = array())
    {
        $this
            ->setESDFullNumber($eSDFullNumber)
            ->setESDNumber($eSDNumber)
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setPickupDate($pickupDate)
            ->setReservationNumber($reservationNumber)
            ->setResultParcelValue($resultParcelValue);
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
     * @return \Chronopost\StructType\ResultReservationMultiParcelExpeditionValue
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
     * @return \Chronopost\StructType\ResultReservationMultiParcelExpeditionValue
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
     * @return \Chronopost\StructType\ResultReservationMultiParcelExpeditionValue
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
     * @return \Chronopost\StructType\ResultReservationMultiParcelExpeditionValue
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
     * @return \Chronopost\StructType\ResultReservationMultiParcelExpeditionValue
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
     * Get reservationNumber value
     * @return string|null
     */
    public function getReservationNumber()
    {
        return $this->reservationNumber;
    }
    /**
     * Set reservationNumber value
     * @param string $reservationNumber
     * @return \Chronopost\StructType\ResultReservationMultiParcelExpeditionValue
     */
    public function setReservationNumber($reservationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($reservationNumber) && !is_string($reservationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationNumber, true), gettype($reservationNumber)), __LINE__);
        }
        $this->reservationNumber = $reservationNumber;
        return $this;
    }
    /**
     * Get resultParcelValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Chronopost\StructType\ResultParcelValue[]|null
     */
    public function getResultParcelValue()
    {
        return isset($this->resultParcelValue) ? $this->resultParcelValue : null;
    }
    /**
     * This method is responsible for validating the values passed to the setResultParcelValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResultParcelValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResultParcelValueForArrayConstraintsFromSetResultParcelValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $resultReservationMultiParcelExpeditionValueResultParcelValueItem) {
            // validation for constraint: itemType
            if (!$resultReservationMultiParcelExpeditionValueResultParcelValueItem instanceof \Chronopost\StructType\ResultParcelValue) {
                $invalidValues[] = is_object($resultReservationMultiParcelExpeditionValueResultParcelValueItem) ? get_class($resultReservationMultiParcelExpeditionValueResultParcelValueItem) : sprintf('%s(%s)', gettype($resultReservationMultiParcelExpeditionValueResultParcelValueItem), var_export($resultReservationMultiParcelExpeditionValueResultParcelValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The resultParcelValue property can only contain items of type \Chronopost\StructType\ResultParcelValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set resultParcelValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\ResultParcelValue[] $resultParcelValue
     * @return \Chronopost\StructType\ResultReservationMultiParcelExpeditionValue
     */
    public function setResultParcelValue(array $resultParcelValue = array())
    {
        // validation for constraint: array
        if ('' !== ($resultParcelValueArrayErrorMessage = self::validateResultParcelValueForArrayConstraintsFromSetResultParcelValue($resultParcelValue))) {
            throw new \InvalidArgumentException($resultParcelValueArrayErrorMessage, __LINE__);
        }
        if (is_null($resultParcelValue) || (is_array($resultParcelValue) && empty($resultParcelValue))) {
            unset($this->resultParcelValue);
        } else {
            $this->resultParcelValue = $resultParcelValue;
        }
        return $this;
    }
    /**
     * Add item to resultParcelValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\ResultParcelValue $item
     * @return \Chronopost\StructType\ResultReservationMultiParcelExpeditionValue
     */
    public function addToResultParcelValue(\Chronopost\StructType\ResultParcelValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\ResultParcelValue) {
            throw new \InvalidArgumentException(sprintf('The resultParcelValue property can only contain items of type \Chronopost\StructType\ResultParcelValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->resultParcelValue[] = $item;
        return $this;
    }
}
