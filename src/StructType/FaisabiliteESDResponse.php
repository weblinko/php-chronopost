<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for faisabiliteESDResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:faisabiliteESDResponse
 * @subpackage Structs
 */
class FaisabiliteESDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultFaisabiliteESD
     */
    public $return;
    /**
     * Constructor method for faisabiliteESDResponse
     * @uses FaisabiliteESDResponse::setReturn()
     * @param \Chronopost\StructType\ResultFaisabiliteESD $return
     */
    public function __construct(\Chronopost\StructType\ResultFaisabiliteESD $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultFaisabiliteESD|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultFaisabiliteESD $return
     * @return \Chronopost\StructType\FaisabiliteESDResponse
     */
    public function setReturn(\Chronopost\StructType\ResultFaisabiliteESD $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
