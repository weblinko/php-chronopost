<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationV3 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationV3
 * @subpackage Structs
 */
class ShippingMultiParcelWithReservationV3 extends AbstractStructBase
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
     * - minOccurs: 0
     * @var \Chronopost\StructType\ShipperValue
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
     * @var \Chronopost\StructType\SkybillWithDimensionsValueV2[]
     */
    public $skybillValue;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\SkybillParamsValue
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
     * - minOccurs: 0
     * @var \Chronopost\StructType\ScheduledValue
     */
    public $scheduledValue;
    /**
     * Constructor method for shippingMultiParcelWithReservationV3
     * @uses ShippingMultiParcelWithReservationV3::setEsdValue()
     * @uses ShippingMultiParcelWithReservationV3::setHeaderValue()
     * @uses ShippingMultiParcelWithReservationV3::setShipperValue()
     * @uses ShippingMultiParcelWithReservationV3::setCustomerValue()
     * @uses ShippingMultiParcelWithReservationV3::setRecipientValue()
     * @uses ShippingMultiParcelWithReservationV3::setRefValue()
     * @uses ShippingMultiParcelWithReservationV3::setSkybillValue()
     * @uses ShippingMultiParcelWithReservationV3::setSkybillParamsValue()
     * @uses ShippingMultiParcelWithReservationV3::setPassword()
     * @uses ShippingMultiParcelWithReservationV3::setModeRetour()
     * @uses ShippingMultiParcelWithReservationV3::setNumberOfParcel()
     * @uses ShippingMultiParcelWithReservationV3::setVersion()
     * @uses ShippingMultiParcelWithReservationV3::setMultiParcel()
     * @uses ShippingMultiParcelWithReservationV3::setScheduledValue()
     * @param \Chronopost\StructType\EsdValue3 $esdValue
     * @param \Chronopost\StructType\HeaderValue $headerValue
     * @param \Chronopost\StructType\ShipperValue $shipperValue
     * @param \Chronopost\StructType\CustomerValue $customerValue
     * @param \Chronopost\StructType\RecipientValue[] $recipientValue
     * @param \Chronopost\StructType\RefValue[] $refValue
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV2[] $skybillValue
     * @param \Chronopost\StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param int $numberOfParcel
     * @param string $version
     * @param string $multiParcel
     * @param \Chronopost\StructType\ScheduledValue $scheduledValue
     */
    public function __construct(\Chronopost\StructType\EsdValue3 $esdValue = null, \Chronopost\StructType\HeaderValue $headerValue = null, \Chronopost\StructType\ShipperValue $shipperValue = null, \Chronopost\StructType\CustomerValue $customerValue = null, array $recipientValue = array(), array $refValue = array(), array $skybillValue = array(), \Chronopost\StructType\SkybillParamsValue $skybillParamsValue = null, $password = null, $modeRetour = null, $numberOfParcel = null, $version = null, $multiParcel = null, \Chronopost\StructType\ScheduledValue $scheduledValue = null)
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
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
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
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setHeaderValue(\Chronopost\StructType\HeaderValue $headerValue = null)
    {
        $this->headerValue = $headerValue;
        return $this;
    }
    /**
     * Get shipperValue value
     * @return \Chronopost\StructType\ShipperValue|null
     */
    public function getShipperValue()
    {
        return $this->shipperValue;
    }
    /**
     * Set shipperValue value
     * @param \Chronopost\StructType\ShipperValue $shipperValue
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setShipperValue(\Chronopost\StructType\ShipperValue $shipperValue = null)
    {
        $this->shipperValue = $shipperValue;
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
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
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
        foreach ($values as $shippingMultiParcelWithReservationV3RecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationV3RecipientValueItem instanceof \Chronopost\StructType\RecipientValue) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationV3RecipientValueItem) ? get_class($shippingMultiParcelWithReservationV3RecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationV3RecipientValueItem), var_export($shippingMultiParcelWithReservationV3RecipientValueItem, true));
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
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
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
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
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
        foreach ($values as $shippingMultiParcelWithReservationV3RefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationV3RefValueItem instanceof \Chronopost\StructType\RefValue) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationV3RefValueItem) ? get_class($shippingMultiParcelWithReservationV3RefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationV3RefValueItem), var_export($shippingMultiParcelWithReservationV3RefValueItem, true));
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
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
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
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
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
     * @return \Chronopost\StructType\SkybillWithDimensionsValueV2[]|null
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
        foreach ($values as $shippingMultiParcelWithReservationV3SkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationV3SkybillValueItem instanceof \Chronopost\StructType\SkybillWithDimensionsValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationV3SkybillValueItem) ? get_class($shippingMultiParcelWithReservationV3SkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationV3SkybillValueItem), var_export($shippingMultiParcelWithReservationV3SkybillValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \Chronopost\StructType\SkybillWithDimensionsValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set skybillValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV2[] $skybillValue
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
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
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV2 $item
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
     */
    public function addToSkybillValue(\Chronopost\StructType\SkybillWithDimensionsValueV2 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\SkybillWithDimensionsValueV2) {
            throw new \InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \Chronopost\StructType\SkybillWithDimensionsValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->skybillValue[] = $item;
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \Chronopost\StructType\SkybillParamsValue|null
     */
    public function getSkybillParamsValue()
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \Chronopost\StructType\SkybillParamsValue $skybillParamsValue
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setSkybillParamsValue(\Chronopost\StructType\SkybillParamsValue $skybillParamsValue = null)
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
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
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
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
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
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
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
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
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
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
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
     * @return \Chronopost\StructType\ScheduledValue|null
     */
    public function getScheduledValue()
    {
        return $this->scheduledValue;
    }
    /**
     * Set scheduledValue value
     * @param \Chronopost\StructType\ScheduledValue $scheduledValue
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3
     */
    public function setScheduledValue(\Chronopost\StructType\ScheduledValue $scheduledValue = null)
    {
        $this->scheduledValue = $scheduledValue;
        return $this;
    }
}
