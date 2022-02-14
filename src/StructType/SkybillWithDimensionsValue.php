<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillWithDimensionsValue StructType
 * @subpackage Structs
 */
class SkybillWithDimensionsValue extends SkybillValue
{
    /**
     * The height
     * @var float
     */
    public $height;
    /**
     * The length
     * @var float
     */
    public $length;
    /**
     * The width
     * @var float
     */
    public $width;
    /**
     * Constructor method for skybillWithDimensionsValue
     * @uses SkybillWithDimensionsValue::setHeight()
     * @uses SkybillWithDimensionsValue::setLength()
     * @uses SkybillWithDimensionsValue::setWidth()
     * @param float $height
     * @param float $length
     * @param float $width
     */
    public function __construct($height = null, $length = null, $width = null)
    {
        $this
            ->setHeight($height)
            ->setLength($length)
            ->setWidth($width);
    }
    /**
     * Get height value
     * @return float|null
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param float $height
     * @return \Chronopost\StructType\SkybillWithDimensionsValue
     */
    public function setHeight($height = null)
    {
        // validation for constraint: float
        if (!is_null($height) && !(is_float($height) || is_numeric($height))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;
        return $this;
    }
    /**
     * Get length value
     * @return float|null
     */
    public function getLength()
    {
        return $this->length;
    }
    /**
     * Set length value
     * @param float $length
     * @return \Chronopost\StructType\SkybillWithDimensionsValue
     */
    public function setLength($length = null)
    {
        // validation for constraint: float
        if (!is_null($length) && !(is_float($length) || is_numeric($length))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->length = $length;
        return $this;
    }
    /**
     * Get width value
     * @return float|null
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param float $width
     * @return \Chronopost\StructType\SkybillWithDimensionsValue
     */
    public function setWidth($width = null)
    {
        // validation for constraint: float
        if (!is_null($width) && !(is_float($width) || is_numeric($width))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->width = $width;
        return $this;
    }
}
