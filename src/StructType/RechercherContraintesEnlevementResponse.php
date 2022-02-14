<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for rechercherContraintesEnlevementResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:rechercherContraintesEnlevementResponse
 * @subpackage Structs
 */
class RechercherContraintesEnlevementResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\EsdResultContraintesAgenceValue
     */
    public $return;
    /**
     * Constructor method for rechercherContraintesEnlevementResponse
     * @uses RechercherContraintesEnlevementResponse::setReturn()
     * @param \Chronopost\StructType\EsdResultContraintesAgenceValue $return
     */
    public function __construct(\Chronopost\StructType\EsdResultContraintesAgenceValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\EsdResultContraintesAgenceValue|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\EsdResultContraintesAgenceValue $return
     * @return \Chronopost\StructType\RechercherContraintesEnlevementResponse
     */
    public function setReturn(\Chronopost\StructType\EsdResultContraintesAgenceValue $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
