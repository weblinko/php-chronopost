<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSearchResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSearchResponse
 * @subpackage Structs
 */
class TrackSearchResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultTrackSearch
     */
    public $return;
    /**
     * Constructor method for trackSearchResponse
     * @uses TrackSearchResponse::setReturn()
     * @param \Chronopost\StructType\ResultTrackSearch $return
     */
    public function __construct(\Chronopost\StructType\ResultTrackSearch $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultTrackSearch|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultTrackSearch $return
     * @return \Chronopost\StructType\TrackSearchResponse
     */
    public function setReturn(\Chronopost\StructType\ResultTrackSearch $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
