<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shipping StructType
 * Meta information extracted from the WSDL
 * - type: tns:shipping
 * @subpackage Structs
 */
class Shipping extends AbstractStructBase
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
     * Constructor method for shipping
     * @uses Shipping::setEsdValue()
     * @uses Shipping::setHeaderValue()
     * @uses Shipping::setShipperValue()
     * @uses Shipping::setCustomerValue()
     * @uses Shipping::setRecipientValue()
     * @uses Shipping::setRefValue()
     * @uses Shipping::setSkybillValue()
     * @uses Shipping::setSkybillParamsValue()
     * @uses Shipping::setPassword()
     * @param \Chronopost\StructType\EsdValue $esdValue
     * @param \Chronopost\StructType\HeaderValue $headerValue
     * @param \Chronopost\StructType\ShipperValue $shipperValue
     * @param \Chronopost\StructType\CustomerValue $customerValue
     * @param \Chronopost\StructType\RecipientValue $recipientValue
     * @param \Chronopost\StructType\RefValue $refValue
     * @param \Chronopost\StructType\SkybillValue $skybillValue
     * @param \Chronopost\StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     */
    public function __construct(\Chronopost\StructType\EsdValue $esdValue = null, \Chronopost\StructType\HeaderValue $headerValue = null, \Chronopost\StructType\ShipperValue $shipperValue = null, \Chronopost\StructType\CustomerValue $customerValue = null, \Chronopost\StructType\RecipientValue $recipientValue = null, \Chronopost\StructType\RefValue $refValue = null, \Chronopost\StructType\SkybillValue $skybillValue = null, \Chronopost\StructType\SkybillParamsValue $skybillParamsValue = null, $password = null)
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
            ->setPassword($password);
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
     * @return \Chronopost\StructType\Shipping
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
     * @return \Chronopost\StructType\Shipping
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
     * @return \Chronopost\StructType\Shipping
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
     * @return \Chronopost\StructType\Shipping
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
     * @return \Chronopost\StructType\Shipping
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
     * @return \Chronopost\StructType\Shipping
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
     * @return \Chronopost\StructType\Shipping
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
     * @return \Chronopost\StructType\Shipping
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
     * @return \Chronopost\StructType\Shipping
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
}
