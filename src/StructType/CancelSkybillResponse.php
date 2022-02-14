<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:cancelSkybillResponse.
 */
class CancelSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultCancelSkybill $return = null;

    /**
     * Constructor method for cancelSkybillResponse.
     *
     * @uses CancelSkybillResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultCancelSkybill $return
     */
    public function __construct(?ResultCancelSkybill $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultCancelSkybill
     */
    public function getReturn(): ?ResultCancelSkybill
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultCancelSkybill $return
     *
     * @return \Chronopost\StructType\CancelSkybillResponse
     */
    public function setReturn(?ResultCancelSkybill $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
