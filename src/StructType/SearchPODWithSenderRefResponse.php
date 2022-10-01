<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPODWithSenderRefResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:searchPODWithSenderRefResponse
 * @subpackage Structs
 */
class SearchPODWithSenderRefResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultSearchPODWithSenderRef
     */
    public $return;
    /**
     * Constructor method for searchPODWithSenderRefResponse
     * @uses SearchPODWithSenderRefResponse::setReturn()
     * @param \Chronopost\StructType\ResultSearchPODWithSenderRef $return
     */
    public function __construct(\Chronopost\StructType\ResultSearchPODWithSenderRef $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultSearchPODWithSenderRef|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultSearchPODWithSenderRef $return
     * @return \Chronopost\StructType\SearchPODWithSenderRefResponse
     */
    public function setReturn(\Chronopost\StructType\ResultSearchPODWithSenderRef $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
