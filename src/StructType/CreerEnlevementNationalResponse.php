<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementNationalResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementNationalResponse
 * @subpackage Structs
 */
class CreerEnlevementNationalResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultEnlevementNational
     */
    public $return;
    /**
     * Constructor method for creerEnlevementNationalResponse
     * @uses CreerEnlevementNationalResponse::setReturn()
     * @param \Chronopost\StructType\ResultEnlevementNational $return
     */
    public function __construct(\Chronopost\StructType\ResultEnlevementNational $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultEnlevementNational|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultEnlevementNational $return
     * @return \Chronopost\StructType\CreerEnlevementNationalResponse
     */
    public function setReturn(\Chronopost\StructType\ResultEnlevementNational $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
