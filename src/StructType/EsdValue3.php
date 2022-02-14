<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for esdValue3 StructType
 * @subpackage Structs
 */
class EsdValue3 extends EsdWithRefClientValue
{
    /**
     * The codeDepotColReq
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codeDepotColReq;
    /**
     * The numColReq
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $numColReq;
    /**
     * Constructor method for esdValue3
     * @uses EsdValue3::setCodeDepotColReq()
     * @uses EsdValue3::setNumColReq()
     * @param string $codeDepotColReq
     * @param string $numColReq
     */
    public function __construct($codeDepotColReq = null, $numColReq = null)
    {
        $this
            ->setCodeDepotColReq($codeDepotColReq)
            ->setNumColReq($numColReq);
    }
    /**
     * Get codeDepotColReq value
     * @return string|null
     */
    public function getCodeDepotColReq()
    {
        return $this->codeDepotColReq;
    }
    /**
     * Set codeDepotColReq value
     * @param string $codeDepotColReq
     * @return \Chronopost\StructType\EsdValue3
     */
    public function setCodeDepotColReq($codeDepotColReq = null)
    {
        // validation for constraint: string
        if (!is_null($codeDepotColReq) && !is_string($codeDepotColReq)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeDepotColReq, true), gettype($codeDepotColReq)), __LINE__);
        }
        $this->codeDepotColReq = $codeDepotColReq;
        return $this;
    }
    /**
     * Get numColReq value
     * @return string|null
     */
    public function getNumColReq()
    {
        return $this->numColReq;
    }
    /**
     * Set numColReq value
     * @param string $numColReq
     * @return \Chronopost\StructType\EsdValue3
     */
    public function setNumColReq($numColReq = null)
    {
        // validation for constraint: string
        if (!is_null($numColReq) && !is_string($numColReq)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numColReq, true), gettype($numColReq)), __LINE__);
        }
        $this->numColReq = $numColReq;
        return $this;
    }
}
