<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationAndESDWithRefClientResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationAndESDWithRefClientResponse
 * @subpackage Structs
 */
class ShippingWithReservationAndESDWithRefClientResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultReservationExpeditionValue
     */
    public $return;
    /**
     * Constructor method for shippingWithReservationAndESDWithRefClientResponse
     * @uses ShippingWithReservationAndESDWithRefClientResponse::setReturn()
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
     * @return \Chronopost\StructType\ShippingWithReservationAndESDWithRefClientResponse
     */
    public function setReturn(\Chronopost\StructType\ResultReservationExpeditionValue $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
