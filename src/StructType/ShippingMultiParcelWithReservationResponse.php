<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationResponse
 * @subpackage Structs
 */
class ShippingMultiParcelWithReservationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultReservationMultiParcelExpeditionValue
     */
    public $return;
    /**
     * Constructor method for shippingMultiParcelWithReservationResponse
     * @uses ShippingMultiParcelWithReservationResponse::setReturn()
     * @param \Chronopost\StructType\ResultReservationMultiParcelExpeditionValue $return
     */
    public function __construct(\Chronopost\StructType\ResultReservationMultiParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultReservationMultiParcelExpeditionValue|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultReservationMultiParcelExpeditionValue $return
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationResponse
     */
    public function setReturn(\Chronopost\StructType\ResultReservationMultiParcelExpeditionValue $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
