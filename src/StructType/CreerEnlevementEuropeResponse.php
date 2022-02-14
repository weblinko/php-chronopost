<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementEuropeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementEuropeResponse
 * @subpackage Structs
 */
class CreerEnlevementEuropeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultPickupOrCollectionRequest
     */
    public $return;
    /**
     * Constructor method for creerEnlevementEuropeResponse
     * @uses CreerEnlevementEuropeResponse::setReturn()
     * @param \Chronopost\StructType\ResultPickupOrCollectionRequest $return
     */
    public function __construct(\Chronopost\StructType\ResultPickupOrCollectionRequest $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultPickupOrCollectionRequest|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultPickupOrCollectionRequest $return
     * @return \Chronopost\StructType\CreerEnlevementEuropeResponse
     */
    public function setReturn(\Chronopost\StructType\ResultPickupOrCollectionRequest $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
