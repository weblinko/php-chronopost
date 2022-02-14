<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackWithSenderRefResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackWithSenderRefResponse.
 */
class TrackWithSenderRefResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultTrackWithSenderRef $return = null;

    /**
     * Constructor method for trackWithSenderRefResponse.
     *
     * @uses TrackWithSenderRefResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultTrackWithSenderRef $return
     */
    public function __construct(?ResultTrackWithSenderRef $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultTrackWithSenderRef
     */
    public function getReturn(): ?ResultTrackWithSenderRef
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultTrackWithSenderRef $return
     *
     * @return \Chronopost\StructType\TrackWithSenderRefResponse
     */
    public function setReturn(?ResultTrackWithSenderRef $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
