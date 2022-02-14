<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV6Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV6Response
 * @subpackage Structs
 */
class ShippingV6Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultExpeditionValueV3
     */
    public $return;
    /**
     * Constructor method for shippingV6Response
     * @uses ShippingV6Response::setReturn()
     * @param \Chronopost\StructType\ResultExpeditionValueV3 $return
     */
    public function __construct(\Chronopost\StructType\ResultExpeditionValueV3 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultExpeditionValueV3|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultExpeditionValueV3 $return
     * @return \Chronopost\StructType\ShippingV6Response
     */
    public function setReturn(\Chronopost\StructType\ResultExpeditionValueV3 $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
