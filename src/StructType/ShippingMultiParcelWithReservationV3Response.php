<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationV3Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationV3Response
 * @subpackage Structs
 */
class ShippingMultiParcelWithReservationV3Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2
     */
    public $return;
    /**
     * Constructor method for shippingMultiParcelWithReservationV3Response
     * @uses ShippingMultiParcelWithReservationV3Response::setReturn()
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
     * @return \Chronopost\StructType\ShippingMultiParcelWithReservationV3Response
     */
    public function setReturn(\Chronopost\StructType\ResultReservationMultiParcelExpeditionValueV2 $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
