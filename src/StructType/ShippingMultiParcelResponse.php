<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelResponse
 * @subpackage Structs
 */
class ShippingMultiParcelResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultMultiParcelExpeditionValue
     */
    public $return;
    /**
     * Constructor method for shippingMultiParcelResponse
     * @uses ShippingMultiParcelResponse::setReturn()
     * @param \Chronopost\StructType\ResultMultiParcelExpeditionValue $return
     */
    public function __construct(\Chronopost\StructType\ResultMultiParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultMultiParcelExpeditionValue|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultMultiParcelExpeditionValue $return
     * @return \Chronopost\StructType\ShippingMultiParcelResponse
     */
    public function setReturn(\Chronopost\StructType\ResultMultiParcelExpeditionValue $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
