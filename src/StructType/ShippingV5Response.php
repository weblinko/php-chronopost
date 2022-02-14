<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV5Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV5Response
 * @subpackage Structs
 */
class ShippingV5Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultExpeditionValue
     */
    public $return;
    /**
     * Constructor method for shippingV5Response
     * @uses ShippingV5Response::setReturn()
     * @param \Chronopost\StructType\ResultExpeditionValue $return
     */
    public function __construct(\Chronopost\StructType\ResultExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultExpeditionValue|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultExpeditionValue $return
     * @return \Chronopost\StructType\ShippingV5Response
     */
    public function setReturn(\Chronopost\StructType\ResultExpeditionValue $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
