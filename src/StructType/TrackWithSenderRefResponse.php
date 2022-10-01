<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackWithSenderRefResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackWithSenderRefResponse
 * @subpackage Structs
 */
class TrackWithSenderRefResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ResultTrackWithSenderRef
     */
    public $return;
    /**
     * Constructor method for trackWithSenderRefResponse
     * @uses TrackWithSenderRefResponse::setReturn()
     * @param \Chronopost\StructType\ResultTrackWithSenderRef $return
     */
    public function __construct(\Chronopost\StructType\ResultTrackWithSenderRef $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Chronopost\StructType\ResultTrackWithSenderRef|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Chronopost\StructType\ResultTrackWithSenderRef $return
     * @return \Chronopost\StructType\TrackWithSenderRefResponse
     */
    public function setReturn(\Chronopost\StructType\ResultTrackWithSenderRef $return = null)
    {
        $this->return = $return;
        return $this;
    }
}
