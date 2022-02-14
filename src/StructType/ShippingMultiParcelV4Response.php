<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV4Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV4Response
 * @subpackage Structs
 */
class ShippingMultiParcelV4Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultMultiParcelExpeditionValue
     */
    public $return;
    /**
     * Constructor method for shippingMultiParcelV4Response
     * @uses ShippingMultiParcelV4Response::setReturn()
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
     * @return \Chronopost\StructType\ShippingMultiParcelV4Response
     */
    public function setReturn(\Chronopost\StructType\ResultMultiParcelExpeditionValue $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
