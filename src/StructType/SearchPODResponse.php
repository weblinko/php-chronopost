<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPODResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:searchPODResponse.
 */
class SearchPODResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?\Chronopost\StructType\ResultSearchPOD $return = null;

    /**
     * Constructor method for searchPODResponse.
     *
     * @uses SearchPODResponse::setReturn()
     *
     * @param \Chronopost\StructType\ResultSearchPOD $return
     */
    public function __construct(?ResultSearchPOD $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     *
     * @return null|\Chronopost\StructType\ResultSearchPOD
     */
    public function getReturn(): ?ResultSearchPOD
    {
        return $this->return;
    }

    /**
     * Set return value.
     *
     * @param \Chronopost\StructType\ResultSearchPOD $return
     *
     * @return \Chronopost\StructType\SearchPODResponse
     */
    public function setReturn(?ResultSearchPOD $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
