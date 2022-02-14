<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV7 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV7
 * @subpackage Structs
 */
class ShippingV7 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\EsdValue
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
     * - minOccurs: 0
     * @var \Chronopost\StructType\RecipientValue
     */
    public $recipientValue;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\RefValue
     */
    public $refValue;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\SkybillWithDimensionsValueV3
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
     * The customsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\CustomsValue
     */
    public $customsValue;
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
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $version;
    /**
     * The scheduledValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ScheduledValue
     */
    public $scheduledValue;
    /**
     * Constructor method for shippingV7
     * @uses ShippingV7::setEsdValue()
     * @uses ShippingV7::setHeaderValue()
     * @uses ShippingV7::setShipperValue()
     * @uses ShippingV7::setCustomerValue()
     * @uses ShippingV7::setRecipientValue()
     * @uses ShippingV7::setRefValue()
     * @uses ShippingV7::setSkybillValue()
     * @uses ShippingV7::setSkybillParamsValue()
     * @uses ShippingV7::setCustomsValue()
     * @uses ShippingV7::setPassword()
     * @uses ShippingV7::setModeRetour()
     * @uses ShippingV7::setVersion()
     * @uses ShippingV7::setScheduledValue()
     * @param \Chronopost\StructType\EsdValue $esdValue
     * @param \Chronopost\StructType\HeaderValue $headerValue
     * @param \Chronopost\StructType\ShipperValue $shipperValue
     * @param \Chronopost\StructType\CustomerValue $customerValue
     * @param \Chronopost\StructType\RecipientValue $recipientValue
     * @param \Chronopost\StructType\RefValue $refValue
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV3 $skybillValue
     * @param \Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @param \Chronopost\StructType\CustomsValue $customsValue
     * @param string $password
     * @param string $modeRetour
     * @param string $version
     * @param \Chronopost\StructType\ScheduledValue $scheduledValue
     */
    public function __construct(\Chronopost\StructType\EsdValue $esdValue = null, \Chronopost\StructType\HeaderValue $headerValue = null, \Chronopost\StructType\ShipperValue $shipperValue = null, \Chronopost\StructType\CustomerValue $customerValue = null, \Chronopost\StructType\RecipientValue $recipientValue = null, \Chronopost\StructType\RefValue $refValue = null, \Chronopost\StructType\SkybillWithDimensionsValueV3 $skybillValue = null, \Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue = null, \Chronopost\StructType\CustomsValue $customsValue = null, $password = null, $modeRetour = null, $version = null, \Chronopost\StructType\ScheduledValue $scheduledValue = null)
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
            ->setCustomsValue($customsValue)
            ->setPassword($password)
            ->setModeRetour($modeRetour)
            ->setVersion($version)
            ->setScheduledValue($scheduledValue);
    }
    /**
     * Get esdValue value
     * @return \Chronopost\StructType\EsdValue|null
     */
    public function getEsdValue()
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \Chronopost\StructType\EsdValue $esdValue
     * @return \Chronopost\StructType\ShippingV7
     */
    public function setEsdValue(\Chronopost\StructType\EsdValue $esdValue = null)
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
     * @return \Chronopost\StructType\ShippingV7
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
     * @return \Chronopost\StructType\ShippingV7
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
     * @return \Chronopost\StructType\ShippingV7
     */
    public function setCustomerValue(\Chronopost\StructType\CustomerValue $customerValue = null)
    {
        $this->customerValue = $customerValue;
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \Chronopost\StructType\RecipientValue|null
     */
    public function getRecipientValue()
    {
        return $this->recipientValue;
    }
    /**
     * Set recipientValue value
     * @param \Chronopost\StructType\RecipientValue $recipientValue
     * @return \Chronopost\StructType\ShippingV7
     */
    public function setRecipientValue(\Chronopost\StructType\RecipientValue $recipientValue = null)
    {
        $this->recipientValue = $recipientValue;
        return $this;
    }
    /**
     * Get refValue value
     * @return \Chronopost\StructType\RefValue|null
     */
    public function getRefValue()
    {
        return $this->refValue;
    }
    /**
     * Set refValue value
     * @param \Chronopost\StructType\RefValue $refValue
     * @return \Chronopost\StructType\ShippingV7
     */
    public function setRefValue(\Chronopost\StructType\RefValue $refValue = null)
    {
        $this->refValue = $refValue;
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \Chronopost\StructType\SkybillWithDimensionsValueV3|null
     */
    public function getSkybillValue()
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \Chronopost\StructType\SkybillWithDimensionsValueV3 $skybillValue
     * @return \Chronopost\StructType\ShippingV7
     */
    public function setSkybillValue(\Chronopost\StructType\SkybillWithDimensionsValueV3 $skybillValue = null)
    {
        $this->skybillValue = $skybillValue;
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
     * @return \Chronopost\StructType\ShippingV7
     */
    public function setSkybillParamsValue(\Chronopost\StructType\SkybillParamsValueV2 $skybillParamsValue = null)
    {
        $this->skybillParamsValue = $skybillParamsValue;
        return $this;
    }
    /**
     * Get customsValue value
     * @return \Chronopost\StructType\CustomsValue|null
     */
    public function getCustomsValue()
    {
        return $this->customsValue;
    }
    /**
     * Set customsValue value
     * @param \Chronopost\StructType\CustomsValue $customsValue
     * @return \Chronopost\StructType\ShippingV7
     */
    public function setCustomsValue(\Chronopost\StructType\CustomsValue $customsValue = null)
    {
        $this->customsValue = $customsValue;
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
     * @return \Chronopost\StructType\ShippingV7
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
     * @return \Chronopost\StructType\ShippingV7
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
     * @return \Chronopost\StructType\ShippingV7
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
     * @return \Chronopost\StructType\ShippingV7
     */
    public function setScheduledValue(\Chronopost\StructType\ScheduledValue $scheduledValue = null)
    {
        $this->scheduledValue = $scheduledValue;
        return $this;
    }
}
