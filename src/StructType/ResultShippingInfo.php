<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultShippingInfo StructType
 * @subpackage Structs
 */
class ResultShippingInfo extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\Error
     */
    public $error;
    /**
     * The shippingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ShippingInfo
     */
    public $shippingInfo;
    /**
     * Constructor method for resultShippingInfo
     * @uses ResultShippingInfo::setError()
     * @uses ResultShippingInfo::setShippingInfo()
     * @param \Chronopost\StructType\Error $error
     * @param \Chronopost\StructType\ShippingInfo $shippingInfo
     */
    public function __construct(\Chronopost\StructType\Error $error = null, \Chronopost\StructType\ShippingInfo $shippingInfo = null)
    {
        $this
            ->setError($error)
            ->setShippingInfo($shippingInfo);
    }
    /**
     * Get error value
     * @return \Chronopost\StructType\Error|null
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \Chronopost\StructType\Error $error
     * @return \Chronopost\StructType\ResultShippingInfo
     */
    public function setError(\Chronopost\StructType\Error $error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * Get shippingInfo value
     * @return \Chronopost\StructType\ShippingInfo|null
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo;
    }
    /**
     * Set shippingInfo value
     * @param \Chronopost\StructType\ShippingInfo $shippingInfo
     * @return \Chronopost\StructType\ResultShippingInfo
     */
    public function setShippingInfo(\Chronopost\StructType\ShippingInfo $shippingInfo = null)
    {
        $this->shippingInfo = $shippingInfo;
        return $this;
    }
}
