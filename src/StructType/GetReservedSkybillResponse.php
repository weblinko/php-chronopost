<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillResponse
 * @subpackage Structs
 */
class GetReservedSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultGetReservedSkybillValue
     */
    public $return;
    /**
     * Constructor method for getReservedSkybillResponse
     * @uses GetReservedSkybillResponse::setReturn()
     * @param \Chronopost\StructType\ResultGetReservedSkybillValue $return
     */
    public function __construct(\Chronopost\StructType\ResultGetReservedSkybillValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultGetReservedSkybillValue|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultGetReservedSkybillValue $return
     * @return \Chronopost\StructType\GetReservedSkybillResponse
     */
    public function setReturn(\Chronopost\StructType\ResultGetReservedSkybillValue $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
