<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:cancelSkybillResponse
 * @subpackage Structs
 */
class CancelSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultCancelSkybill
     */
    public $return;
    /**
     * Constructor method for cancelSkybillResponse
     * @uses CancelSkybillResponse::setReturn()
     * @param \Chronopost\StructType\ResultCancelSkybill $return
     */
    public function __construct(\Chronopost\StructType\ResultCancelSkybill $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultCancelSkybill|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultCancelSkybill $return
     * @return \Chronopost\StructType\CancelSkybillResponse
     */
    public function setReturn(\Chronopost\StructType\ResultCancelSkybill $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
