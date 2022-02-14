<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeAndModeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeAndModeResponse
 * @subpackage Structs
 */
class GetReservedSkybillWithTypeAndModeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultGetReservedSkybillWithTypeValue
     */
    public $return;
    /**
     * Constructor method for getReservedSkybillWithTypeAndModeResponse
     * @uses GetReservedSkybillWithTypeAndModeResponse::setReturn()
     * @param \Chronopost\StructType\ResultGetReservedSkybillWithTypeValue $return
     */
    public function __construct(\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultGetReservedSkybillWithTypeValue|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultGetReservedSkybillWithTypeValue $return
     * @return \Chronopost\StructType\GetReservedSkybillWithTypeAndModeResponse
     */
    public function setReturn(\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
