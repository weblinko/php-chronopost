<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV2 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV2
 * @subpackage Structs
 */
class ShippingV2 extends AbstractStructBase
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
     * @var \Chronopost\StructType\SkybillValue
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
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $version;
    /**
     * Constructor method for shippingV2
     * @uses ShippingV2::setEsdValue()
     * @uses ShippingV2::setHeaderValue()
     * @uses ShippingV2::setShipperValue()
     * @uses ShippingV2::setCustomerValue()
     * @uses ShippingV2::setRecipientValue()
     * @uses ShippingV2::setRefValue()
     * @uses ShippingV2::setSkybillValue()
     * @uses ShippingV2::setSkybillParamsValue()
     * @uses ShippingV2::setPassword()
     * @uses ShippingV2::setVersion()
     * @param \Chronopost\StructType\EsdValue $esdValue
     * @param \Chronopost\StructType\HeaderValue $headerValue
     * @param \Chronopost\StructType\ShipperValue $shipperValue
     * @param \Chronopost\StructType\CustomerValue $customerValue
     * @param \Chronopost\StructType\RecipientValue $recipientValue
     * @param \Chronopost\StructType\RefValue $refValue
     * @param \Chronopost\StructType\SkybillValue $skybillValue
     * @param \Chronopost\StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $version
     */
    public function __construct(\Chronopost\StructType\EsdValue $esdValue = null, \Chronopost\StructType\HeaderValue $headerValue = null, \Chronopost\StructType\ShipperValue $shipperValue = null, \Chronopost\StructType\CustomerValue $customerValue = null, \Chronopost\StructType\RecipientValue $recipientValue = null, \Chronopost\StructType\RefValue $refValue = null, \Chronopost\StructType\SkybillValue $skybillValue = null, \Chronopost\StructType\SkybillParamsValue $skybillParamsValue = null, $password = null, $version = null)
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
            ->setVersion($version);
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
     * @return \Chronopost\StructType\ShippingV2
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
     * @return \Chronopost\StructType\ShippingV2
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
     * @return \Chronopost\StructType\ShippingV2
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
     * @return \Chronopost\StructType\ShippingV2
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
     * @return \Chronopost\StructType\ShippingV2
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
     * @return \Chronopost\StructType\ShippingV2
     */
    public function setRefValue(\Chronopost\StructType\RefValue $refValue = null)
    {
        $this->refValue = $refValue;
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \Chronopost\StructType\SkybillValue|null
     */
    public function getSkybillValue()
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \Chronopost\StructType\SkybillValue $skybillValue
     * @return \Chronopost\StructType\ShippingV2
     */
    public function setSkybillValue(\Chronopost\StructType\SkybillValue $skybillValue = null)
    {
        $this->skybillValue = $skybillValue;
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
     * @return \Chronopost\StructType\ShippingV2
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
     * @return \Chronopost\StructType\ShippingV2
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
     * @return \Chronopost\StructType\ShippingV2
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
}
