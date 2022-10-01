<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSkybillV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSkybillV2Response
 * @subpackage Structs
 */
class TrackSkybillV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultTrackSkybillV2
     */
    public $return;
    /**
     * Constructor method for trackSkybillV2Response
     * @uses TrackSkybillV2Response::setReturn()
     * @param \Chronopost\StructType\ResultTrackSkybillV2 $return
     */
    public function __construct(\Chronopost\StructType\ResultTrackSkybillV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultTrackSkybillV2|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultTrackSkybillV2 $return
     * @return \Chronopost\StructType\TrackSkybillV2Response
     */
    public function setReturn(\Chronopost\StructType\ResultTrackSkybillV2 $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
