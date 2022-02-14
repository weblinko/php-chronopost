<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for faisabiliteESD StructType
 * Meta information extracted from the WSDL
 * - type: tns:faisabiliteESD
 * @subpackage Structs
 */
class FaisabiliteESD extends AbstractStructBase
{
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ShipperValue
     */
    public $shipperValue;
    /**
     * The retrievalDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $retrievalDateTime;
    /**
     * The closingDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $closingDateTime;
    /**
     * Constructor method for faisabiliteESD
     * @uses FaisabiliteESD::setShipperValue()
     * @uses FaisabiliteESD::setRetrievalDateTime()
     * @uses FaisabiliteESD::setClosingDateTime()
     * @param \Chronopost\StructType\ShipperValue $shipperValue
     * @param string $retrievalDateTime
     * @param string $closingDateTime
     */
    public function __construct(\Chronopost\StructType\ShipperValue $shipperValue = null, $retrievalDateTime = null, $closingDateTime = null)
    {
        $this
            ->setShipperValue($shipperValue)
            ->setRetrievalDateTime($retrievalDateTime)
            ->setClosingDateTime($closingDateTime);
    }
    /**
     * Get shipperValue value
     * @return \Chronopost\StructType\ShipperValue|null
     */
    public function getShipperValue()
    {
        return $this->shipperValue;
    }
    /**
     * Set shipperValue value
     * @param \Chronopost\StructType\ShipperValue $shipperValue
     * @return \Chronopost\StructType\FaisabiliteESD
     */
    public function setShipperValue(\Chronopost\StructType\ShipperValue $shipperValue = null)
    {
        $this->shipperValue = $shipperValue;
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
     * @return \Chronopost\StructType\FaisabiliteESD
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
     * @return \Chronopost\StructType\FaisabiliteESD
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
}
