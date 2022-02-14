<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSearchResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSearchResponse.
 */
class TrackSearchResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultTrackSearch $return = null;

    /**
     * Constructor method for trackSearchResponse.
     *
     * @uses TrackSearchResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultTrackSearch $return
     */
    public function __construct(?ResultTrackSearch $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultTrackSearch
     */
    public function getReturn(): ?ResultTrackSearch
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultTrackSearch $return
     *
     * @return \Chronopost\StructType\TrackSearchResponse
     */
    public function setReturn(?ResultTrackSearch $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
