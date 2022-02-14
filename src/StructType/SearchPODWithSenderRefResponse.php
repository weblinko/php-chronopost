<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPODWithSenderRefResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:searchPODWithSenderRefResponse.
 */
class SearchPODWithSenderRefResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultSearchPODWithSenderRef $return = null;

    /**
     * Constructor method for searchPODWithSenderRefResponse.
     *
     * @uses SearchPODWithSenderRefResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultSearchPODWithSenderRef $return
     */
    public function __construct(?ResultSearchPODWithSenderRef $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultSearchPODWithSenderRef
     */
    public function getReturn(): ?ResultSearchPODWithSenderRef
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultSearchPODWithSenderRef $return
     *
     * @return \Chronopost\StructType\SearchPODWithSenderRefResponse
     */
    public function setReturn(?ResultSearchPODWithSenderRef $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
