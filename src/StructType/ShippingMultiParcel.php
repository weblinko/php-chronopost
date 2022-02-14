<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcel StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcel
 * @subpackage Structs
 */
class ShippingMultiParcel extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\EsdValue3
     */
    public $esdValue;
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\HeaderValue
     */
    public $headerValue;
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Chronopost\StructType\ShipperValue[]
     */
    public $shipperValue;
    /**
     * The customerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\CustomerValue
     */
    public $customerValue;
    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Chronopost\StructType\RecipientValue[]
     */
    public $recipientValue;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Chronopost\StructType\RefValue[]
     */
    public $refValue;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Chronopost\StructType\SkybillWithDimensionsValueV3[]
     */
    public $skybillValue;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\SkybillParamsValueV2
     */
    public $skybillParamsValue;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $password;
    /**
     * The modeRetour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $modeRetour;
    /**
     * The numberOfParcel
     * @var int
     */
    public $numberOfParcel;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $version;
    /**
     * The multiParcel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $multiParcel;
    /**
     * The scheduledValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Chronopost\StructType\ScheduledValue[]
     */
    public $scheduledValue;
    /**
     * Constructor method for shippingMultiParcel
     * @uses ShippingMultiParcel::setEsdValue()
     * @uses ShippingMultiParcel::setHeaderValue()
     * @uses ShippingMultiParcel::setShipperValue()
     * @uses ShippingMultiParcel::setCustomerValue()
     * @uses ShippingMultiParcel::setRecipientValue()
     * @uses ShippingMultiParcel::setRefValue()
     * @uses ShippingMultiParcel::setSkybillValue()
     * @uses ShippingMultiParcel::setSkybillParamsValue()
     * @uses ShippingMultiParcel::setPassword()
     * @uses ShippingMultiParcel::setModeRetour()
     * @uses ShippingMultiParcel::setNumberOfParcel()
     * @uses ShippingMultiParcel::setVersion()
     * @uses ShippingMultiParcel::setMultiParcel()
     * @uses ShippingMultiParcel::setScheduledValue()
     * @param \Chronopost\StructType\EsdValue3 $esdValue
     * @param \Chronopost\StructType\HeaderValue $headerValue
     * @param \Chronopost\StructType\ShipperValue[] $shipperValue
     * @param \Chronopost\StructType\CustomerValue $customerValue
     * @param \Chronopost\StructType\RecipientValue[] $recipientValue
     * @param \Chronopost\StructType\RefValue[] $refValue
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV3[] $skybillValue
     * @param \Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param int $numberOfParcel
     * @param string $version
     * @param string $multiParcel
     * @param \Chronopost\StructType\ScheduledValue[] $scheduledValue
     */
    public function __construct(\Chronopost\StructType\EsdValue3 $esdValue = null, \Chronopost\StructType\HeaderValue $headerValue = null, array $shipperValue = array(), \Chronopost\StructType\CustomerValue $customerValue = null, array $recipientValue = array(), array $refValue = array(), array $skybillValue = array(), \Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue = null, $password = null, $modeRetour = null, $numberOfParcel = null, $version = null, $multiParcel = null, array $scheduledValue = array())
    {
        $this
            ->setEsdValue($esdValue)
            ->setHeaderValue($headerValue)
            ->setShipperValue($shipperValue)
            ->setCustomerValue($customerValue)
            ->setRecipientValue($recipientValue)
            ->setRefValue($refValue)
            ->setSkybillValue($skybillValue)
            ->setSkybillParamsValue($skybillParamsValue)
            ->setPassword($password)
            ->setModeRetour($modeRetour)
            ->setNumberOfParcel($numberOfParcel)
            ->setVersion($version)
            ->setMultiParcel($multiParcel)
            ->setScheduledValue($scheduledValue);
    }
    /**
     * Get esdValue value
     * @return \Chronopost\StructType\EsdValue3|null
     */
    public function getEsdValue()
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \Chronopost\StructType\EsdValue3 $esdValue
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function setEsdValue(\Chronopost\StructType\EsdValue3 $esdValue = null)
    {
        $this->esdValue = $esdValue;
        return $this;
    }
    /**
     * Get headerValue value
     * @return \Chronopost\StructType\HeaderValue|null
     */
    public function getHeaderValue()
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \Chronopost\StructType\HeaderValue $headerValue
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function setHeaderValue(\Chronopost\StructType\HeaderValue $headerValue = null)
    {
        $this->headerValue = $headerValue;
        return $this;
    }
    /**
     * Get shipperValue value
     * @return \Chronopost\StructType\ShipperValue[]|null
     */
    public function getShipperValue()
    {
        return $this->shipperValue;
    }
    /**
     * This method is responsible for validating the values passed to the setShipperValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipperValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipperValueForArrayConstraintsFromSetShipperValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelShipperValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelShipperValueItem instanceof \Chronopost\StructType\ShipperValue) {
                $invalidValues[] = is_object($shippingMultiParcelShipperValueItem) ? get_class($shippingMultiParcelShipperValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelShipperValueItem), var_export($shippingMultiParcelShipperValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The shipperValue property can only contain items of type \Chronopost\StructType\ShipperValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set shipperValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\ShipperValue[] $shipperValue
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function setShipperValue(array $shipperValue = array())
    {
        // validation for constraint: array
        if ('' !== ($shipperValueArrayErrorMessage = self::validateShipperValueForArrayConstraintsFromSetShipperValue($shipperValue))) {
            throw new \InvalidArgumentException($shipperValueArrayErrorMessage, __LINE__);
        }
        $this->shipperValue = $shipperValue;
        return $this;
    }
    /**
     * Add item to shipperValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\ShipperValue $item
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function addToShipperValue(\Chronopost\StructType\ShipperValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\ShipperValue) {
            throw new \InvalidArgumentException(sprintf('The shipperValue property can only contain items of type \Chronopost\StructType\ShipperValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->shipperValue[] = $item;
        return $this;
    }
    /**
     * Get customerValue value
     * @return \Chronopost\StructType\CustomerValue|null
     */
    public function getCustomerValue()
    {
        return $this->customerValue;
    }
    /**
     * Set customerValue value
     * @param \Chronopost\StructType\CustomerValue $customerValue
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function setCustomerValue(\Chronopost\StructType\CustomerValue $customerValue = null)
    {
        $this->customerValue = $customerValue;
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \Chronopost\StructType\RecipientValue[]|null
     */
    public function getRecipientValue()
    {
        return $this->recipientValue;
    }
    /**
     * This method is responsible for validating the values passed to the setRecipientValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientValueForArrayConstraintsFromSetRecipientValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelRecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelRecipientValueItem instanceof \Chronopost\StructType\RecipientValue) {
                $invalidValues[] = is_object($shippingMultiParcelRecipientValueItem) ? get_class($shippingMultiParcelRecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelRecipientValueItem), var_export($shippingMultiParcelRecipientValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientValue property can only contain items of type \Chronopost\StructType\RecipientValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set recipientValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\RecipientValue[] $recipientValue
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function setRecipientValue(array $recipientValue = array())
    {
        // validation for constraint: array
        if ('' !== ($recipientValueArrayErrorMessage = self::validateRecipientValueForArrayConstraintsFromSetRecipientValue($recipientValue))) {
            throw new \InvalidArgumentException($recipientValueArrayErrorMessage, __LINE__);
        }
        $this->recipientValue = $recipientValue;
        return $this;
    }
    /**
     * Add item to recipientValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\RecipientValue $item
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function addToRecipientValue(\Chronopost\StructType\RecipientValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\RecipientValue) {
            throw new \InvalidArgumentException(sprintf('The recipientValue property can only contain items of type \Chronopost\StructType\RecipientValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientValue[] = $item;
        return $this;
    }
    /**
     * Get refValue value
     * @return \Chronopost\StructType\RefValue[]|null
     */
    public function getRefValue()
    {
        return $this->refValue;
    }
    /**
     * This method is responsible for validating the values passed to the setRefValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefValueForArrayConstraintsFromSetRefValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelRefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelRefValueItem instanceof \Chronopost\StructType\RefValue) {
                $invalidValues[] = is_object($shippingMultiParcelRefValueItem) ? get_class($shippingMultiParcelRefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelRefValueItem), var_export($shippingMultiParcelRefValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The refValue property can only contain items of type \Chronopost\StructType\RefValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set refValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\RefValue[] $refValue
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function setRefValue(array $refValue = array())
    {
        // validation for constraint: array
        if ('' !== ($refValueArrayErrorMessage = self::validateRefValueForArrayConstraintsFromSetRefValue($refValue))) {
            throw new \InvalidArgumentException($refValueArrayErrorMessage, __LINE__);
        }
        $this->refValue = $refValue;
        return $this;
    }
    /**
     * Add item to refValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\RefValue $item
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function addToRefValue(\Chronopost\StructType\RefValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\RefValue) {
            throw new \InvalidArgumentException(sprintf('The refValue property can only contain items of type \Chronopost\StructType\RefValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->refValue[] = $item;
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \Chronopost\StructType\SkybillWithDimensionsValueV3[]|null
     */
    public function getSkybillValue()
    {
        return $this->skybillValue;
    }
    /**
     * This method is responsible for validating the values passed to the setSkybillValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSkybillValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSkybillValueForArrayConstraintsFromSetSkybillValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelSkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelSkybillValueItem instanceof \Chronopost\StructType\SkybillWithDimensionsValueV3) {
                $invalidValues[] = is_object($shippingMultiParcelSkybillValueItem) ? get_class($shippingMultiParcelSkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelSkybillValueItem), var_export($shippingMultiParcelSkybillValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \Chronopost\StructType\SkybillWithDimensionsValueV3, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set skybillValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV3[] $skybillValue
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function setSkybillValue(array $skybillValue = array())
    {
        // validation for constraint: array
        if ('' !== ($skybillValueArrayErrorMessage = self::validateSkybillValueForArrayConstraintsFromSetSkybillValue($skybillValue))) {
            throw new \InvalidArgumentException($skybillValueArrayErrorMessage, __LINE__);
        }
        $this->skybillValue = $skybillValue;
        return $this;
    }
    /**
     * Add item to skybillValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV3 $item
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function addToSkybillValue(\Chronopost\StructType\SkybillWithDimensionsValueV3 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\SkybillWithDimensionsValueV3) {
            throw new \InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \Chronopost\StructType\SkybillWithDimensionsValueV3, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->skybillValue[] = $item;
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \Chronopost\StructType\SkybillParamsValueV2|null
     */
    public function getSkybillParamsValue()
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function setSkybillParamsValue(\Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue = null)
    {
        $this->skybillParamsValue = $skybillParamsValue;
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
     * @return \Chronopost\StructType\ShippingMultiParcel
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
     * Get modeRetour value
     * @return string|null
     */
    public function getModeRetour()
    {
        return $this->modeRetour;
    }
    /**
     * Set modeRetour value
     * @param string $modeRetour
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function setModeRetour($modeRetour = null)
    {
        // validation for constraint: string
        if (!is_null($modeRetour) && !is_string($modeRetour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modeRetour, true), gettype($modeRetour)), __LINE__);
        }
        $this->modeRetour = $modeRetour;
        return $this;
    }
    /**
     * Get numberOfParcel value
     * @return int|null
     */
    public function getNumberOfParcel()
    {
        return $this->numberOfParcel;
    }
    /**
     * Set numberOfParcel value
     * @param int $numberOfParcel
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function setNumberOfParcel($numberOfParcel = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfParcel) && !(is_int($numberOfParcel) || ctype_digit($numberOfParcel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfParcel, true), gettype($numberOfParcel)), __LINE__);
        }
        $this->numberOfParcel = $numberOfParcel;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Get multiParcel value
     * @return string|null
     */
    public function getMultiParcel()
    {
        return $this->multiParcel;
    }
    /**
     * Set multiParcel value
     * @param string $multiParcel
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function setMultiParcel($multiParcel = null)
    {
        // validation for constraint: string
        if (!is_null($multiParcel) && !is_string($multiParcel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($multiParcel, true), gettype($multiParcel)), __LINE__);
        }
        $this->multiParcel = $multiParcel;
        return $this;
    }
    /**
     * Get scheduledValue value
     * @return \Chronopost\StructType\ScheduledValue[]|null
     */
    public function getScheduledValue()
    {
        return $this->scheduledValue;
    }
    /**
     * This method is responsible for validating the values passed to the setScheduledValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setScheduledValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateScheduledValueForArrayConstraintsFromSetScheduledValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelScheduledValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelScheduledValueItem instanceof \Chronopost\StructType\ScheduledValue) {
                $invalidValues[] = is_object($shippingMultiParcelScheduledValueItem) ? get_class($shippingMultiParcelScheduledValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelScheduledValueItem), var_export($shippingMultiParcelScheduledValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The scheduledValue property can only contain items of type \Chronopost\StructType\ScheduledValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set scheduledValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\ScheduledValue[] $scheduledValue
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function setScheduledValue(array $scheduledValue = array())
    {
        // validation for constraint: array
        if ('' !== ($scheduledValueArrayErrorMessage = self::validateScheduledValueForArrayConstraintsFromSetScheduledValue($scheduledValue))) {
            throw new \InvalidArgumentException($scheduledValueArrayErrorMessage, __LINE__);
        }
        $this->scheduledValue = $scheduledValue;
        return $this;
    }
    /**
     * Add item to scheduledValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\ScheduledValue $item
     * @return \Chronopost\StructType\ShippingMultiParcel
     */
    public function addToScheduledValue(\Chronopost\StructType\ScheduledValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\ScheduledValue) {
            throw new \InvalidArgumentException(sprintf('The scheduledValue property can only contain items of type \Chronopost\StructType\ScheduledValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->scheduledValue[] = $item;
        return $this;
    }
}
