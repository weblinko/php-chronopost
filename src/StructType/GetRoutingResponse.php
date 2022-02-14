<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getRoutingResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getRoutingResponse
 * @subpackage Structs
 */
class GetRoutingResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultGetRouting
     */
    public $return;
    /**
     * Constructor method for getRoutingResponse
     * @uses GetRoutingResponse::setReturn()
     * @param \Chronopost\StructType\ResultGetRouting $return
     */
    public function __construct(\Chronopost\StructType\ResultGetRouting $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultGetRouting|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultGetRouting $return
     * @return \Chronopost\StructType\GetRoutingResponse
     */
    public function setReturn(\Chronopost\StructType\ResultGetRouting $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
