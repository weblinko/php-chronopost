<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationV2Response
 * @subpackage Structs
 */
class ShippingMultiParcelWithReservationV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2
     */
    public $return;
    /**
     * Constructor method for shippingMultiParcelWithReservationV2Response
     * @uses ShippingMultiParcelWithReservationV2Response::setReturn()
     * @param \Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2 $return
     */
    public function __construct(\Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2 $return
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV2Response
     */
    public function setReturn(\Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2 $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
