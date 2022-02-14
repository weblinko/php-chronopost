<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillValueV2 StructType
 * @subpackage Structs
 */
class SkybillValueV2 extends SkybillValue
{
    /**
     * The as
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $as;
    /**
     * Constructor method for skybillValueV2
     * @uses SkybillValueV2::setAs()
     * @param string $as
     */
    public function __construct($as = null)
    {
        $this
            ->setAs($as);
    }
    /**
     * Get as value
     * @return string|null
     */
    public function getAs()
    {
        return $this->as;
    }
    /**
     * Set as value
     * @param string $as
     * @return \Chronopost\StructType\SkybillValueV2
     */
    public function setAs($as = null)
    {
        // validation for constraint: string
        if (!is_null($as) && !is_string($as)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as, true), gettype($as)), __LINE__);
        }
        $this->as = $as;
        return $this;
    }
}
