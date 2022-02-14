<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillWithDimensionsValueV5 StructType
 * @subpackage Structs
 */
class SkybillWithDimensionsValueV5 extends SkybillWithDimensionsValueV4
{
    /**
     * The carrier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $carrier;
    /**
     * The skybillBackNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $skybillBackNumber;
    /**
     * Constructor method for skybillWithDimensionsValueV5
     * @uses SkybillWithDimensionsValueV5::setCarrier()
     * @uses SkybillWithDimensionsValueV5::setSkybillBackNumber()
     * @param string $carrier
     * @param string $skybillBackNumber
     */
    public function __construct($carrier = null, $skybillBackNumber = null)
    {
        $this
            ->setCarrier($carrier)
            ->setSkybillBackNumber($skybillBackNumber);
    }
    /**
     * Get carrier value
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->carrier;
    }
    /**
     * Set carrier value
     * @param string $carrier
     * @return \Chronopost\StructType\SkybillWithDimensionsValueV5
     */
    public function setCarrier($carrier = null)
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        $this->carrier = $carrier;
        return $this;
    }
    /**
     * Get skybillBackNumber value
     * @return string|null
     */
    public function getSkybillBackNumber()
    {
        return $this->skybillBackNumber;
    }
    /**
     * Set skybillBackNumber value
     * @param string $skybillBackNumber
     * @return \Chronopost\StructType\SkybillWithDimensionsValueV5
     */
    public function setSkybillBackNumber($skybillBackNumber = null)
    {
        // validation for constraint: string
        if (!is_null($skybillBackNumber) && !is_string($skybillBackNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillBackNumber, true), gettype($skybillBackNumber)), __LINE__);
        }
        $this->skybillBackNumber = $skybillBackNumber;
        return $this;
    }
}
