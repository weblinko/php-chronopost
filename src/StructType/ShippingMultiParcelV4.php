<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV4 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV4
 * @subpackage Structs
 */
class ShippingMultiParcelV4 extends AbstractStructBase
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
     * @var \Chronopost\StructType\SkybillWithDimensionsValueV6[]
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
     * Constructor method for shippingMultiParcelV4
     * @uses ShippingMultiParcelV4::setEsdValue()
     * @uses ShippingMultiParcelV4::setHeaderValue()
     * @uses ShippingMultiParcelV4::setShipperValue()
     * @uses ShippingMultiParcelV4::setCustomerValue()
     * @uses ShippingMultiParcelV4::setRecipientValue()
     * @uses ShippingMultiParcelV4::setRefValue()
     * @uses ShippingMultiParcelV4::setSkybillValue()
     * @uses ShippingMultiParcelV4::setSkybillParamsValue()
     * @uses ShippingMultiParcelV4::setPassword()
     * @uses ShippingMultiParcelV4::setModeRetour()
     * @uses ShippingMultiParcelV4::setNumberOfParcel()
     * @uses ShippingMultiParcelV4::setVersion()
     * @uses ShippingMultiParcelV4::setMultiParcel()
     * @uses ShippingMultiParcelV4::setScheduledValue()
     * @uses ShippingMultiParcelV4::setRecipientLocalValue()
     * @uses ShippingMultiParcelV4::setCustomsValue()
     * @param \Chronopost\StructType\EsdValue3 $esdValue
     * @param \Chronopost\StructType\HeaderValue $headerValue
     * @param \Chronopost\StructType\ShipperValueV2[] $shipperValue
     * @param \Chronopost\StructType\CustomerValue $customerValue
     * @param \Chronopost\StructType\RecipientValueV2[] $recipientValue
     * @param \Chronopost\StructType\RefValueV2[] $refValue
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV6[] $skybillValue
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
        foreach ($values as $shippingMultiParcelV4ShipperValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV4ShipperValueItem instanceof \Chronopost\StructType\ShipperValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV4ShipperValueItem) ? get_class($shippingMultiParcelV4ShipperValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV4ShipperValueItem), var_export($shippingMultiParcelV4ShipperValueItem, true));
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
        foreach ($values as $shippingMultiParcelV4RecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV4RecipientValueItem instanceof \Chronopost\StructType\RecipientValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV4RecipientValueItem) ? get_class($shippingMultiParcelV4RecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV4RecipientValueItem), var_export($shippingMultiParcelV4RecipientValueItem, true));
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
        foreach ($values as $shippingMultiParcelV4RefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV4RefValueItem instanceof \Chronopost\StructType\RefValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV4RefValueItem) ? get_class($shippingMultiParcelV4RefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV4RefValueItem), var_export($shippingMultiParcelV4RefValueItem, true));
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
     * @return \Chronopost\StructType\SkybillWithDimensionsValueV6[]|null
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
        foreach ($values as $shippingMultiParcelV4SkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV4SkybillValueItem instanceof \Chronopost\StructType\SkybillWithDimensionsValueV6) {
                $invalidValues[] = is_object($shippingMultiParcelV4SkybillValueItem) ? get_class($shippingMultiParcelV4SkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV4SkybillValueItem), var_export($shippingMultiParcelV4SkybillValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \Chronopost\StructType\SkybillWithDimensionsValueV6, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set skybillValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV6[] $skybillValue
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV6 $item
     * @return \Chronopost\StructType\ShippingMultiParcelV4
     */
    public function addToSkybillValue(\Chronopost\StructType\SkybillWithDimensionsValueV6 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\SkybillWithDimensionsValueV6) {
            throw new \InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \Chronopost\StructType\SkybillWithDimensionsValueV6, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
        foreach ($values as $shippingMultiParcelV4ScheduledValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV4ScheduledValueItem instanceof \Chronopost\StructType\ScheduledValue) {
                $invalidValues[] = is_object($shippingMultiParcelV4ScheduledValueItem) ? get_class($shippingMultiParcelV4ScheduledValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV4ScheduledValueItem), var_export($shippingMultiParcelV4ScheduledValueItem, true));
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
        foreach ($values as $shippingMultiParcelV4RecipientLocalValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV4RecipientLocalValueItem instanceof \Chronopost\StructType\RecipientLocalValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelV4RecipientLocalValueItem) ? get_class($shippingMultiParcelV4RecipientLocalValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV4RecipientLocalValueItem), var_export($shippingMultiParcelV4RecipientLocalValueItem, true));
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
        foreach ($values as $shippingMultiParcelV4CustomsValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelV4CustomsValueItem instanceof \Chronopost\StructType\CustomsValue) {
                $invalidValues[] = is_object($shippingMultiParcelV4CustomsValueItem) ? get_class($shippingMultiParcelV4CustomsValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelV4CustomsValueItem), var_export($shippingMultiParcelV4CustomsValueItem, true));
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4
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
