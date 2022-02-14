<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV5Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV5Response
 * @subpackage Structs
 */
class ShippingMultiParcelV5Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultMultiParcelExpeditionValue
     */
    public $return;
    /**
     * Constructor method for shippingMultiParcelV5Response
     * @uses ShippingMultiParcelV5Response::setReturn()
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
     * @return \Chronopost\StructType\ShippingMultiParcelV5Response
     */
    public function setReturn(\Chronopost\StructType\ResultMultiParcelExpeditionValue $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
