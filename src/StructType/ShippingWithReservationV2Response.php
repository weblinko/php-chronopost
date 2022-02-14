<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationV2Response
 * @subpackage Structs
 */
class ShippingWithReservationV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultReservationExpeditionValueV2
     */
    public $return;
    /**
     * Constructor method for shippingWithReservationV2Response
     * @uses ShippingWithReservationV2Response::setReturn()
     * @param \Chronopost\StructType\ResultReservationExpeditionValueV2 $return
     */
    public function __construct(\Chronopost\StructType\ResultReservationExpeditionValueV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultReservationExpeditionValueV2|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultReservationExpeditionValueV2 $return
     * @return \Chronopost\StructType\ShippingWithReservationV2Response
     */
    public function setReturn(\Chronopost\StructType\ResultReservationExpeditionValueV2 $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
