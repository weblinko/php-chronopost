<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillValueBase StructType
 * @subpackage Structs
 */
class SkybillValueBase extends AbstractStructBase
{
    /**
     * The as
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $as;
    /**
     * The objectType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $objectType;
    /**
     * The productCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $productCode;
    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $service;
    /**
     * The shipDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipDate;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $weight;
    /**
     * Constructor method for skybillValueBase
     * @uses SkybillValueBase::setAs()
     * @uses SkybillValueBase::setObjectType()
     * @uses SkybillValueBase::setProductCode()
     * @uses SkybillValueBase::setService()
     * @uses SkybillValueBase::setShipDate()
     * @uses SkybillValueBase::setWeight()
     * @param string $as
     * @param string $objectType
     * @param string $productCode
     * @param string $service
     * @param string $shipDate
     * @param float $weight
     */
    public function __construct($as = null, $objectType = null, $productCode = null, $service = null, $shipDate = null, $weight = null)
    {
        $this
            ->setAs($as)
            ->setObjectType($objectType)
            ->setProductCode($productCode)
            ->setService($service)
            ->setShipDate($shipDate)
            ->setWeight($weight);
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
     * @return \Chronopost\StructType\SkybillValueBase
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
    /**
     * Get objectType value
     * @return string|null
     */
    public function getObjectType()
    {
        return $this->objectType;
    }
    /**
     * Set objectType value
     * @param string $objectType
     * @return \Chronopost\StructType\SkybillValueBase
     */
    public function setObjectType($objectType = null)
    {
        // validation for constraint: string
        if (!is_null($objectType) && !is_string($objectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectType, true), gettype($objectType)), __LINE__);
        }
        $this->objectType = $objectType;
        return $this;
    }
    /**
     * Get productCode value
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->productCode;
    }
    /**
     * Set productCode value
     * @param string $productCode
     * @return \Chronopost\StructType\SkybillValueBase
     */
    public function setProductCode($productCode = null)
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;
        return $this;
    }
    /**
     * Get service value
     * @return string|null
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \Chronopost\StructType\SkybillValueBase
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->service = $service;
        return $this;
    }
    /**
     * Get shipDate value
     * @return string|null
     */
    public function getShipDate()
    {
        return $this->shipDate;
    }
    /**
     * Set shipDate value
     * @param string $shipDate
     * @return \Chronopost\StructType\SkybillValueBase
     */
    public function setShipDate($shipDate = null)
    {
        // validation for constraint: string
        if (!is_null($shipDate) && !is_string($shipDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipDate, true), gettype($shipDate)), __LINE__);
        }
        $this->shipDate = $shipDate;
        return $this;
    }
    /**
     * Get weight value
     * @return float|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param float $weight
     * @return \Chronopost\StructType\SkybillValueBase
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        return $this;
    }
}
