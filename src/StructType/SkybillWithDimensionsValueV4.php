<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillWithDimensionsValueV4 StructType
 * @subpackage Structs
 */
class SkybillWithDimensionsValueV4 extends SkybillWithDimensionsValueV3
{
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $skybillNumber;
    /**
     * Constructor method for skybillWithDimensionsValueV4
     * @uses SkybillWithDimensionsValueV4::setSkybillNumber()
     * @param string $skybillNumber
     */
    public function __construct($skybillNumber = null)
    {
        $this
            ->setSkybillNumber($skybillNumber);
    }
    /**
     * Get skybillNumber value
     * @return string|null
     */
    public function getSkybillNumber()
    {
        return $this->skybillNumber;
    }
    /**
     * Set skybillNumber value
     * @param string $skybillNumber
     * @return \Chronopost\StructType\SkybillWithDimensionsValueV4
     */
    public function setSkybillNumber($skybillNumber = null)
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;
        return $this;
    }
}
