<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillWithDimensionsValueV6 StructType
 * @subpackage Structs
 */
class SkybillWithDimensionsValueV6 extends SkybillWithDimensionsValueV5
{
    /**
     * The alternateProductCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $alternateProductCode;
    /**
     * The labelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $labelNumber;
    /**
     * Constructor method for skybillWithDimensionsValueV6
     * @uses SkybillWithDimensionsValueV6::setAlternateProductCode()
     * @uses SkybillWithDimensionsValueV6::setLabelNumber()
     * @param string $alternateProductCode
     * @param string $labelNumber
     */
    public function __construct($alternateProductCode = null, $labelNumber = null)
    {
        $this
            ->setAlternateProductCode($alternateProductCode)
            ->setLabelNumber($labelNumber);
    }
    /**
     * Get alternateProductCode value
     * @return string|null
     */
    public function getAlternateProductCode()
    {
        return $this->alternateProductCode;
    }
    /**
     * Set alternateProductCode value
     * @param string $alternateProductCode
     * @return \Chronopost\StructType\SkybillWithDimensionsValueV6
     */
    public function setAlternateProductCode($alternateProductCode = null)
    {
        // validation for constraint: string
        if (!is_null($alternateProductCode) && !is_string($alternateProductCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alternateProductCode, true), gettype($alternateProductCode)), __LINE__);
        }
        $this->alternateProductCode = $alternateProductCode;
        return $this;
    }
    /**
     * Get labelNumber value
     * @return string|null
     */
    public function getLabelNumber()
    {
        return $this->labelNumber;
    }
    /**
     * Set labelNumber value
     * @param string $labelNumber
     * @return \Chronopost\StructType\SkybillWithDimensionsValueV6
     */
    public function setLabelNumber($labelNumber = null)
    {
        // validation for constraint: string
        if (!is_null($labelNumber) && !is_string($labelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelNumber, true), gettype($labelNumber)), __LINE__);
        }
        $this->labelNumber = $labelNumber;
        return $this;
    }
}
