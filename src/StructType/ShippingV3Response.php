<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV3Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV3Response
 * @subpackage Structs
 */
class ShippingV3Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultExpeditionValue
     */
    public $return;
    /**
     * Constructor method for shippingV3Response
     * @uses ShippingV3Response::setReturn()
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
     * @return \Chronopost\StructType\ShippingV3Response
     */
    public function setReturn(\Chronopost\StructType\ResultExpeditionValue $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
