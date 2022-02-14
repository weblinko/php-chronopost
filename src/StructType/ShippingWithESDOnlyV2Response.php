<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithESDOnlyV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithESDOnlyV2Response
 * @subpackage Structs
 */
class ShippingWithESDOnlyV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultReservationExpeditionValue
     */
    public $return;
    /**
     * Constructor method for shippingWithESDOnlyV2Response
     * @uses ShippingWithESDOnlyV2Response::setReturn()
     * @param \Chronopost\StructType\ResultReservationExpeditionValue $return
     */
    public function __construct(\Chronopost\StructType\ResultReservationExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultReservationExpeditionValue|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultReservationExpeditionValue $return
     * @return \Chronopost\StructType\ShippingWithESDOnlyV2Response
     */
    public function setReturn(\Chronopost\StructType\ResultReservationExpeditionValue $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
