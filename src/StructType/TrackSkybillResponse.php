<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSkybillResponse.
 */
class TrackSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultTrackSkybill $return = null;

    /**
     * Constructor method for trackSkybillResponse.
     *
     * @uses TrackSkybillResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultTrackSkybill $return
     */
    public function __construct(?ResultTrackSkybill $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultTrackSkybill
     */
    public function getReturn(): ?ResultTrackSkybill
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultTrackSkybill $return
     *
     * @return \Chronopost\StructType\TrackSkybillResponse
     */
    public function setReturn(?ResultTrackSkybill $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
