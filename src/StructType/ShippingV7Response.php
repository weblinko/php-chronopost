<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV7Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV7Response
 * @subpackage Structs
 */
class ShippingV7Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultMonoParcelExpeditionValue
     */
    public $return;
    /**
     * Constructor method for shippingV7Response
     * @uses ShippingV7Response::setReturn()
     * @param \Chronopost\StructType\ResultMonoParcelExpeditionValue $return
     */
    public function __construct(\Chronopost\StructType\ResultMonoParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultMonoParcelExpeditionValue|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultMonoParcelExpeditionValue $return
     * @return \Chronopost\StructType\ShippingV7Response
     */
    public function setReturn(\Chronopost\StructType\ResultMonoParcelExpeditionValue $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
