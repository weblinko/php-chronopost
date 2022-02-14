<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShippingInformation StructType
 * Meta information extracted from the WSDL
 * - type: tns:getShippingInformation
 * @subpackage Structs
 */
class GetShippingInformation extends AbstractStructBase
{
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
     * The recipientValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\RecipientValue
     */
    public $recipientValue;
    /**
     * The skybillValueBase
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\SkybillValueBase
     */
    public $skybillValueBase;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $password;
    /**
     * Constructor method for getShippingInformation
     * @uses GetShippingInformation::setHeaderValue()
     * @uses GetShippingInformation::setShipperValue()
     * @uses GetShippingInformation::setRecipientValue()
     * @uses GetShippingInformation::setSkybillValueBase()
     * @uses GetShippingInformation::setPassword()
     * @param \Chronopost\StructType\HeaderValue $headerValue
     * @param \Chronopost\StructType\ShipperValue $shipperValue
     * @param \Chronopost\StructType\RecipientValue $recipientValue
     * @param \Chronopost\StructType\SkybillValueBase $skybillValueBase
     * @param string $password
     */
    public function __construct(\Chronopost\StructType\HeaderValue $headerValue = null, \Chronopost\StructType\ShipperValue $shipperValue = null, \Chronopost\StructType\RecipientValue $recipientValue = null, \Chronopost\StructType\SkybillValueBase $skybillValueBase = null, $password = null)
    {
        $this
            ->setHeaderValue($headerValue)
            ->setShipperValue($shipperValue)
            ->setRecipientValue($recipientValue)
            ->setSkybillValueBase($skybillValueBase)
            ->setPassword($password);
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
     * @return \Chronopost\StructType\GetShippingInformation
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
     * @return \Chronopost\StructType\GetShippingInformation
     */
    public function setShipperValue(\Chronopost\StructType\ShipperValue $shipperValue = null)
    {
        $this->shipperValue = $shipperValue;
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
     * @return \Chronopost\StructType\GetShippingInformation
     */
    public function setRecipientValue(\Chronopost\StructType\RecipientValue $recipientValue = null)
    {
        $this->recipientValue = $recipientValue;
        return $this;
    }
    /**
     * Get skybillValueBase value
     * @return \Chronopost\StructType\SkybillValueBase|null
     */
    public function getSkybillValueBase()
    {
        return $this->skybillValueBase;
    }
    /**
     * Set skybillValueBase value
     * @param \Chronopost\StructType\SkybillValueBase $skybillValueBase
     * @return \Chronopost\StructType\GetShippingInformation
     */
    public function setSkybillValueBase(\Chronopost\StructType\SkybillValueBase $skybillValueBase = null)
    {
        $this->skybillValueBase = $skybillValueBase;
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
     * @return \Chronopost\StructType\GetShippingInformation
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
