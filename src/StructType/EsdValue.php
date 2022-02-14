<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for esdValue StructType
 * @subpackage Structs
 */
class EsdValue extends AbstractStructBase
{
    /**
     * The closingDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $closingDateTime;
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
     * The retrievalDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $retrievalDateTime;
    /**
     * The shipperBuildingFloor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperBuildingFloor;
    /**
     * The shipperCarriesCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperCarriesCode;
    /**
     * The shipperServiceDirection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperServiceDirection;
    /**
     * The specificInstructions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $specificInstructions;
    /**
     * The width
     * @var float
     */
    public $width;
    /**
     * Constructor method for esdValue
     * @uses EsdValue::setClosingDateTime()
     * @uses EsdValue::setHeight()
     * @uses EsdValue::setLength()
     * @uses EsdValue::setRetrievalDateTime()
     * @uses EsdValue::setShipperBuildingFloor()
     * @uses EsdValue::setShipperCarriesCode()
     * @uses EsdValue::setShipperServiceDirection()
     * @uses EsdValue::setSpecificInstructions()
     * @uses EsdValue::setWidth()
     * @param string $closingDateTime
     * @param float $height
     * @param float $length
     * @param string $retrievalDateTime
     * @param string $shipperBuildingFloor
     * @param string $shipperCarriesCode
     * @param string $shipperServiceDirection
     * @param string $specificInstructions
     * @param float $width
     */
    public function __construct($closingDateTime = null, $height = null, $length = null, $retrievalDateTime = null, $shipperBuildingFloor = null, $shipperCarriesCode = null, $shipperServiceDirection = null, $specificInstructions = null, $width = null)
    {
        $this
            ->setClosingDateTime($closingDateTime)
            ->setHeight($height)
            ->setLength($length)
            ->setRetrievalDateTime($retrievalDateTime)
            ->setShipperBuildingFloor($shipperBuildingFloor)
            ->setShipperCarriesCode($shipperCarriesCode)
            ->setShipperServiceDirection($shipperServiceDirection)
            ->setSpecificInstructions($specificInstructions)
            ->setWidth($width);
    }
    /**
     * Get closingDateTime value
     * @return string|null
     */
    public function getClosingDateTime()
    {
        return $this->closingDateTime;
    }
    /**
     * Set closingDateTime value
     * @param string $closingDateTime
     * @return \Chronopost\StructType\EsdValue
     */
    public function setClosingDateTime($closingDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($closingDateTime) && !is_string($closingDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closingDateTime, true), gettype($closingDateTime)), __LINE__);
        }
        $this->closingDateTime = $closingDateTime;
        return $this;
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
     * @return \Chronopost\StructType\EsdValue
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
     * @return \Chronopost\StructType\EsdValue
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
     * Get retrievalDateTime value
     * @return string|null
     */
    public function getRetrievalDateTime()
    {
        return $this->retrievalDateTime;
    }
    /**
     * Set retrievalDateTime value
     * @param string $retrievalDateTime
     * @return \Chronopost\StructType\EsdValue
     */
    public function setRetrievalDateTime($retrievalDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($retrievalDateTime) && !is_string($retrievalDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retrievalDateTime, true), gettype($retrievalDateTime)), __LINE__);
        }
        $this->retrievalDateTime = $retrievalDateTime;
        return $this;
    }
    /**
     * Get shipperBuildingFloor value
     * @return string|null
     */
    public function getShipperBuildingFloor()
    {
        return $this->shipperBuildingFloor;
    }
    /**
     * Set shipperBuildingFloor value
     * @param string $shipperBuildingFloor
     * @return \Chronopost\StructType\EsdValue
     */
    public function setShipperBuildingFloor($shipperBuildingFloor = null)
    {
        // validation for constraint: string
        if (!is_null($shipperBuildingFloor) && !is_string($shipperBuildingFloor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperBuildingFloor, true), gettype($shipperBuildingFloor)), __LINE__);
        }
        $this->shipperBuildingFloor = $shipperBuildingFloor;
        return $this;
    }
    /**
     * Get shipperCarriesCode value
     * @return string|null
     */
    public function getShipperCarriesCode()
    {
        return $this->shipperCarriesCode;
    }
    /**
     * Set shipperCarriesCode value
     * @param string $shipperCarriesCode
     * @return \Chronopost\StructType\EsdValue
     */
    public function setShipperCarriesCode($shipperCarriesCode = null)
    {
        // validation for constraint: string
        if (!is_null($shipperCarriesCode) && !is_string($shipperCarriesCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCarriesCode, true), gettype($shipperCarriesCode)), __LINE__);
        }
        $this->shipperCarriesCode = $shipperCarriesCode;
        return $this;
    }
    /**
     * Get shipperServiceDirection value
     * @return string|null
     */
    public function getShipperServiceDirection()
    {
        return $this->shipperServiceDirection;
    }
    /**
     * Set shipperServiceDirection value
     * @param string $shipperServiceDirection
     * @return \Chronopost\StructType\EsdValue
     */
    public function setShipperServiceDirection($shipperServiceDirection = null)
    {
        // validation for constraint: string
        if (!is_null($shipperServiceDirection) && !is_string($shipperServiceDirection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperServiceDirection, true), gettype($shipperServiceDirection)), __LINE__);
        }
        $this->shipperServiceDirection = $shipperServiceDirection;
        return $this;
    }
    /**
     * Get specificInstructions value
     * @return string|null
     */
    public function getSpecificInstructions()
    {
        return $this->specificInstructions;
    }
    /**
     * Set specificInstructions value
     * @param string $specificInstructions
     * @return \Chronopost\StructType\EsdValue
     */
    public function setSpecificInstructions($specificInstructions = null)
    {
        // validation for constraint: string
        if (!is_null($specificInstructions) && !is_string($specificInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($specificInstructions, true), gettype($specificInstructions)), __LINE__);
        }
        $this->specificInstructions = $specificInstructions;
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
     * @return \Chronopost\StructType\EsdValue
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
