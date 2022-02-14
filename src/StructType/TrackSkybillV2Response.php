<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSkybillV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSkybillV2Response.
 */
class TrackSkybillV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultTrackSkybillV2 $return = null;

    /**
     * Constructor method for trackSkybillV2Response.
     *
     * @uses TrackSkybillV2Response::setReturn()
     *
     * @param \Chronopost\StructType\ResultTrackSkybillV2 $return
     */
    public function __construct(?ResultTrackSkybillV2 $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultTrackSkybillV2
     */
    public function getReturn(): ?ResultTrackSkybillV2
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultTrackSkybillV2 $return
     *
     * @return \Chronopost\StructType\TrackSkybillV2Response
     */
    public function setReturn(?ResultTrackSkybillV2 $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
