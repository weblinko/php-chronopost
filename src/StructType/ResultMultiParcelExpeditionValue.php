<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultMultiParcelExpeditionValue StructType
 * @subpackage Structs
 */
class ResultMultiParcelExpeditionValue extends ResultShippingValue
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
     * The resultMultiParcelValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Chronopost\StructType\ResultMultiParcelValue[]
     */
    public $resultMultiParcelValue;
    /**
     * Constructor method for resultMultiParcelExpeditionValue
     * @uses ResultMultiParcelExpeditionValue::setESDFullNumber()
     * @uses ResultMultiParcelExpeditionValue::setESDNumber()
     * @uses ResultMultiParcelExpeditionValue::setPickupDate()
     * @uses ResultMultiParcelExpeditionValue::setReservationNumber()
     * @uses ResultMultiParcelExpeditionValue::setResultMultiParcelValue()
     * @param string $eSDFullNumber
     * @param string $eSDNumber
     * @param string $pickupDate
     * @param string $reservationNumber
     * @param \Chronopost\StructType\ResultMultiParcelValue[] $resultMultiParcelValue
     */
    public function __construct($eSDFullNumber = null, $eSDNumber = null, $pickupDate = null, $reservationNumber = null, array $resultMultiParcelValue = array())
    {
        $this
            ->setESDFullNumber($eSDFullNumber)
            ->setESDNumber($eSDNumber)
            ->setPickupDate($pickupDate)
            ->setReservationNumber($reservationNumber)
            ->setResultMultiParcelValue($resultMultiParcelValue);
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
     * @return \Chronopost\StructType\ResultMultiParcelExpeditionValue
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
     * @return \Chronopost\StructType\ResultMultiParcelExpeditionValue
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
     * @return \Chronopost\StructType\ResultMultiParcelExpeditionValue
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
     * @return \Chronopost\StructType\ResultMultiParcelExpeditionValue
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
     * Get resultMultiParcelValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Chronopost\StructType\ResultMultiParcelValue[]|null
     */
    public function getResultMultiParcelValue()
    {
        return isset($this->resultMultiParcelValue) ? $this->resultMultiParcelValue : null;
    }
    /**
     * This method is responsible for validating the values passed to the setResultMultiParcelValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResultMultiParcelValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResultMultiParcelValueForArrayConstraintsFromSetResultMultiParcelValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $resultMultiParcelExpeditionValueResultMultiParcelValueItem) {
            // validation for constraint: itemType
            if (!$resultMultiParcelExpeditionValueResultMultiParcelValueItem instanceof \Chronopost\StructType\ResultMultiParcelValue) {
                $invalidValues[] = is_object($resultMultiParcelExpeditionValueResultMultiParcelValueItem) ? get_class($resultMultiParcelExpeditionValueResultMultiParcelValueItem) : sprintf('%s(%s)', gettype($resultMultiParcelExpeditionValueResultMultiParcelValueItem), var_export($resultMultiParcelExpeditionValueResultMultiParcelValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The resultMultiParcelValue property can only contain items of type \Chronopost\StructType\ResultMultiParcelValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set resultMultiParcelValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\ResultMultiParcelValue[] $resultMultiParcelValue
     * @return \Chronopost\StructType\ResultMultiParcelExpeditionValue
     */
    public function setResultMultiParcelValue(array $resultMultiParcelValue = array())
    {
        // validation for constraint: array
        if ('' !== ($resultMultiParcelValueArrayErrorMessage = self::validateResultMultiParcelValueForArrayConstraintsFromSetResultMultiParcelValue($resultMultiParcelValue))) {
            throw new \InvalidArgumentException($resultMultiParcelValueArrayErrorMessage, __LINE__);
        }
        if (is_null($resultMultiParcelValue) || (is_array($resultMultiParcelValue) && empty($resultMultiParcelValue))) {
            unset($this->resultMultiParcelValue);
        } else {
            $this->resultMultiParcelValue = $resultMultiParcelValue;
        }
        return $this;
    }
    /**
     * Add item to resultMultiParcelValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\ResultMultiParcelValue $item
     * @return \Chronopost\StructType\ResultMultiParcelExpeditionValue
     */
    public function addToResultMultiParcelValue(\Chronopost\StructType\ResultMultiParcelValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\ResultMultiParcelValue) {
            throw new \InvalidArgumentException(sprintf('The resultMultiParcelValue property can only contain items of type \Chronopost\StructType\ResultMultiParcelValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->resultMultiParcelValue[] = $item;
        return $this;
    }
}
