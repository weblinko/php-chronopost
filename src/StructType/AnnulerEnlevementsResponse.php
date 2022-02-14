<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for annulerEnlevementsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:annulerEnlevementsResponse
 * @subpackage Structs
 */
class AnnulerEnlevementsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultAnnulerEnlevement
     */
    public $return;
    /**
     * Constructor method for annulerEnlevementsResponse
     * @uses AnnulerEnlevementsResponse::setReturn()
     * @param \Chronopost\StructType\ResultAnnulerEnlevement $return
     */
    public function __construct(\Chronopost\StructType\ResultAnnulerEnlevement $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultAnnulerEnlevement|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultAnnulerEnlevement $return
     * @return \Chronopost\StructType\AnnulerEnlevementsResponse
     */
    public function setReturn(\Chronopost\StructType\ResultAnnulerEnlevement $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
