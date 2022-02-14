<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShippingInformationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getShippingInformationResponse
 * @subpackage Structs
 */
class GetShippingInformationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultShippingInfo
     */
    public $return;
    /**
     * Constructor method for getShippingInformationResponse
     * @uses GetShippingInformationResponse::setReturn()
     * @param \Chronopost\StructType\ResultShippingInfo $return
     */
    public function __construct(\Chronopost\StructType\ResultShippingInfo $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultShippingInfo|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultShippingInfo $return
     * @return \Chronopost\StructType\GetShippingInformationResponse
     */
    public function setReturn(\Chronopost\StructType\ResultShippingInfo $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
