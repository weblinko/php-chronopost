<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeResponse
 * @subpackage Structs
 */
class GetReservedSkybillWithTypeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultGetReservedSkybillWithTypeValue
     */
    public $return;
    /**
     * Constructor method for getReservedSkybillWithTypeResponse
     * @uses GetReservedSkybillWithTypeResponse::setReturn()
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
     * @return \Chronopost\StructType\GetReservedSkybillWithTypeResponse
     */
    public function setReturn(\Chronopost\StructType\ResultGetReservedSkybillWithTypeValue $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
