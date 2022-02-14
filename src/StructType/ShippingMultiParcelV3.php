<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV3 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV3
 * @subpackage Structs
 */
class ShippingMultiParcelV3 extends AbstractStructBase
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
     * @var \Chronopost\StructType\ShipperValueV2[]
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
     * @var \Chronopost\StructType\RecipientValueV2[]
     */
    public $recipientValue;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Chronopost\StructType\RefValueV2[]
     */
    public $refValue;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Chronopost\StructType\SkybillWithDimensionsValueV5[]
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
     * The recipientLocalValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Chronopost\StructType\RecipientLocalValueV2[]
     */
    public $recipientLocalValue;
    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Chronopost\StructType\CustomsValue[]
     */
    public $customsValue;
    /**
     * Constructor method for shippingMultiParcelV3
     * @uses ShippingMultiParcelV3::setEsdValue()
     * @uses ShippingMultiParcelV3::setHeaderValue()
     * @uses ShippingMultiParcelV3::setShipperValue()
     * @uses ShippingMultiParcelV3::setCustomerValue()
     * @uses ShippingMultiParcelV3::setRecipientValue()
     * @uses ShippingMultiParcelV3::setRefValue()
     * @uses ShippingMultiParcelV3::setSkybillValue()
     * @uses ShippingMultiParcelV3::setSkybillParamsValue()
     * @uses ShippingMultiParcelV3::setPassword()
     * @uses ShippingMultiParcelV3::setModeRetour()
     * @uses ShippingMultiParcelV3::setNumberOfParcel()
     * @uses ShippingMultiParcelV3::setVersion()
     * @uses ShippingMultiParcelV3::setMultiParcel()
     * @uses ShippingMultiParcelV3::setScheduledValue()
     * @uses ShippingMultiParcelV3::setRecipientLocalValue()
     * @uses ShippingMultiParcelV3::setCustomsValue()
     * @param \Chronopost\StructType\EsdValue3 $esdValue
     * @param \Chronopost\StructType\HeaderValue $headerValue
     * @param \Chronopost\StructType\ShipperValueV2[] $shipperValue
     * @param \Chronopost\StructType\CustomerValue $customerValue
     * @param \Chronopost\StructType\RecipientValueV2[] $recipientValue
     * @param \Chronopost\StructType\RefValueV2[] $refValue
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV5[] $skybillValue
     * @param \Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param int $numberOfParcel
     * @param string $version
     * @param string $multiParcel
     * @param \Chronopost\StructType\ScheduledValue[] $scheduledValue
     * @param \Chronopost\StructType\RecipientLocalValueV2[] $recipientLocalValue
     * @param \Chronopost\StructType\CustomsValue[] $customsValue
     */
    public function __construct(\Chronopost\StructType\EsdValue3 $esdValue = null, \Chronopost\StructType\HeaderValue $headerValue = null, array $shipperValue = array(), \Chronopost\StructType\CustomerValue $customerValue = null, array $recipientValue = array(), array $refValue = array(), array $skybillValue = array(), \Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue = null, $password = null, $modeRetour = null, $numberOfParcel = null, $version = null, $multiParcel = null, array $scheduledValue = array(), array $recipientLocalValue = array(), array $customsValue = array())
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
            ->setScheduledValue($scheduledValue)
            ->setRecipientLocalValue($recipientLocalValue)
            ->setCustomsValue($customsValue);
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
     * @return \Chronopost\StructType\ShippingMultiParcelV3
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
     * @return \Chronopost\StructType\ShippingMultiParcelV3
     */
    public function setHeaderValue(\Chronopost\StructType\HeaderValue $headerValue = null)
    {
        $this->headerValue = $headerValue;
        return $this;
    }
    /**
     * Get shipperValue value
     * @return \Chronopost\StructType\ShipperValueV2[]|null
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
        foreach ($values as $shippingMultiParcelV3ShipperValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV3ShipperValueItem instanceof \Chronopost\StructType\ShipperValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV3ShipperValueItem) ? get_class($shippingMultiParcelV3ShipperValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV3ShipperValueItem), var_export($shippingMultiParcelV3ShipperValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The shipperValue property can only contain items of type \Chronopost\StructType\ShipperValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set shipperValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\ShipperValueV2[] $shipperValue
     * @return \Chronopost\StructType\ShippingMultiParcelV3
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
     * @param \Chronopost\StructType\ShipperValueV2 $item
     * @return \Chronopost\StructType\ShippingMultiParcelV3
     */
    public function addToShipperValue(\Chronopost\StructType\ShipperValueV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\ShipperValueV2) {
            throw new \InvalidArgumentException(sprintf('The shipperValue property can only contain items of type \Chronopost\StructType\ShipperValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Chronopost\StructType\ShippingMultiParcelV3
     */
    public function setCustomerValue(\Chronopost\StructType\CustomerValue $customerValue = null)
    {
        $this->customerValue = $customerValue;
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \Chronopost\StructType\RecipientValueV2[]|null
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
        foreach ($values as $shippingMultiParcelV3RecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV3RecipientValueItem instanceof \Chronopost\StructType\RecipientValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV3RecipientValueItem) ? get_class($shippingMultiParcelV3RecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV3RecipientValueItem), var_export($shippingMultiParcelV3RecipientValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientValue property can only contain items of type \Chronopost\StructType\RecipientValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set recipientValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\RecipientValueV2[] $recipientValue
     * @return \Chronopost\StructType\ShippingMultiParcelV3
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
     * @param \Chronopost\StructType\RecipientValueV2 $item
     * @return \Chronopost\StructType\ShippingMultiParcelV3
     */
    public function addToRecipientValue(\Chronopost\StructType\RecipientValueV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\RecipientValueV2) {
            throw new \InvalidArgumentException(sprintf('The recipientValue property can only contain items of type \Chronopost\StructType\RecipientValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientValue[] = $item;
        return $this;
    }
    /**
     * Get refValue value
     * @return \Chronopost\StructType\RefValueV2[]|null
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
        foreach ($values as $shippingMultiParcelV3RefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV3RefValueItem instanceof \Chronopost\StructType\RefValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV3RefValueItem) ? get_class($shippingMultiParcelV3RefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV3RefValueItem), var_export($shippingMultiParcelV3RefValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The refValue property can only contain items of type \Chronopost\StructType\RefValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set refValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\RefValueV2[] $refValue
     * @return \Chronopost\StructType\ShippingMultiParcelV3
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
     * @param \Chronopost\StructType\RefValueV2 $item
     * @return \Chronopost\StructType\ShippingMultiParcelV3
     */
    public function addToRefValue(\Chronopost\StructType\RefValueV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\RefValueV2) {
            throw new \InvalidArgumentException(sprintf('The refValue property can only contain items of type \Chronopost\StructType\RefValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->refValue[] = $item;
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \Chronopost\StructType\SkybillWithDimensionsValueV5[]|null
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
        foreach ($values as $shippingMultiParcelV3SkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV3SkybillValueItem instanceof \Chronopost\StructType\SkybillWithDimensionsValueV5) {
                $invalidValues[] = is_object($shippingMultiParcelV3SkybillValueItem) ? get_class($shippingMultiParcelV3SkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV3SkybillValueItem), var_export($shippingMultiParcelV3SkybillValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \Chronopost\StructType\SkybillWithDimensionsValueV5, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set skybillValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV5[] $skybillValue
     * @return \Chronopost\StructType\ShippingMultiParcelV3
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
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV5 $item
     * @return \Chronopost\StructType\ShippingMultiParcelV3
     */
    public function addToSkybillValue(\Chronopost\StructType\SkybillWithDimensionsValueV5 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\SkybillWithDimensionsValueV5) {
            throw new \InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \Chronopost\StructType\SkybillWithDimensionsValueV5, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Chronopost\StructType\ShippingMultiParcelV3
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
     * @return \Chronopost\StructType\ShippingMultiParcelV3
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
     * @return \Chronopost\StructType\ShippingMultiParcelV3
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
     * @return \Chronopost\StructType\ShippingMultiParcelV3
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
     * @return \Chronopost\StructType\ShippingMultiParcelV3
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
     * @return \Chronopost\StructType\ShippingMultiParcelV3
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
        foreach ($values as $shippingMultiParcelV3ScheduledValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV3ScheduledValueItem instanceof \Chronopost\StructType\ScheduledValue) {
                $invalidValues[] = is_object($shippingMultiParcelV3ScheduledValueItem) ? get_class($shippingMultiParcelV3ScheduledValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV3ScheduledValueItem), var_export($shippingMultiParcelV3ScheduledValueItem, true));
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
     * @return \Chronopost\StructType\ShippingMultiParcelV3
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
     * @return \Chronopost\StructType\ShippingMultiParcelV3
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
    /**
     * Get recipientLocalValue value
     * @return \Chronopost\StructType\RecipientLocalValueV2[]|null
     */
    public function getRecipientLocalValue()
    {
        return $this->recipientLocalValue;
    }
    /**
     * This method is responsible for validating the values passed to the setRecipientLocalValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientLocalValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientLocalValueForArrayConstraintsFromSetRecipientLocalValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV3RecipientLocalValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV3RecipientLocalValueItem instanceof \Chronopost\StructType\RecipientLocalValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV3RecipientLocalValueItem) ? get_class($shippingMultiParcelV3RecipientLocalValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV3RecipientLocalValueItem), var_export($shippingMultiParcelV3RecipientLocalValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientLocalValue property can only contain items of type \Chronopost\StructType\RecipientLocalValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set recipientLocalValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\RecipientLocalValueV2[] $recipientLocalValue
     * @return \Chronopost\StructType\ShippingMultiParcelV3
     */
    public function setRecipientLocalValue(array $recipientLocalValue = array())
    {
        // validation for constraint: array
        if ('' !== ($recipientLocalValueArrayErrorMessage = self::validateRecipientLocalValueForArrayConstraintsFromSetRecipientLocalValue($recipientLocalValue))) {
            throw new \InvalidArgumentException($recipientLocalValueArrayErrorMessage, __LINE__);
        }
        $this->recipientLocalValue = $recipientLocalValue;
        return $this;
    }
    /**
     * Add item to recipientLocalValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\RecipientLocalValueV2 $item
     * @return \Chronopost\StructType\ShippingMultiParcelV3
     */
    public function addToRecipientLocalValue(\Chronopost\StructType\RecipientLocalValueV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\RecipientLocalValueV2) {
            throw new \InvalidArgumentException(sprintf('The recipientLocalValue property can only contain items of type \Chronopost\StructType\RecipientLocalValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientLocalValue[] = $item;
        return $this;
    }
    /**
     * Get customsValue value
     * @return \Chronopost\StructType\CustomsValue[]|null
     */
    public function getCustomsValue()
    {
        return $this->customsValue;
    }
    /**
     * This method is responsible for validating the values passed to the setCustomsValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomsValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomsValueForArrayConstraintsFromSetCustomsValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelV3CustomsValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV3CustomsValueItem instanceof \Chronopost\StructType\CustomsValue) {
                $invalidValues[] = is_object($shippingMultiParcelV3CustomsValueItem) ? get_class($shippingMultiParcelV3CustomsValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV3CustomsValueItem), var_export($shippingMultiParcelV3CustomsValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The customsValue property can only contain items of type \Chronopost\StructType\CustomsValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set customsValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\CustomsValue[] $customsValue
     * @return \Chronopost\StructType\ShippingMultiParcelV3
     */
    public function setCustomsValue(array $customsValue = array())
    {
        // validation for constraint: array
        if ('' !== ($customsValueArrayErrorMessage = self::validateCustomsValueForArrayConstraintsFromSetCustomsValue($customsValue))) {
            throw new \InvalidArgumentException($customsValueArrayErrorMessage, __LINE__);
        }
        $this->customsValue = $customsValue;
        return $this;
    }
    /**
     * Add item to customsValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\CustomsValue $item
     * @return \Chronopost\StructType\ShippingMultiParcelV3
     */
    public function addToCustomsValue(\Chronopost\StructType\CustomsValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\CustomsValue) {
            throw new \InvalidArgumentException(sprintf('The customsValue property can only contain items of type \Chronopost\StructType\CustomsValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->customsValue[] = $item;
        return $this;
    }
}
