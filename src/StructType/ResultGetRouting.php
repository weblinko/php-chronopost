<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultGetRouting StructType
 * @subpackage Structs
 */
class ResultGetRouting extends AbstractStructBase
{
    /**
     * The errorCode
     * @var int
     */
    public $errorCode;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $errorMessage;
    /**
     * The geopostResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\GeopostResult
     */
    public $geopostResult;
    /**
     * The posteComptable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $posteComptable;
    /**
     * Constructor method for resultGetRouting
     * @uses ResultGetRouting::setErrorCode()
     * @uses ResultGetRouting::setErrorMessage()
     * @uses ResultGetRouting::setGeopostResult()
     * @uses ResultGetRouting::setPosteComptable()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \Chronopost\StructType\GeopostResult $geopostResult
     * @param string $posteComptable
     */
    public function __construct($errorCode = null, $errorMessage = null, \Chronopost\StructType\GeopostResult $geopostResult = null, $posteComptable = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setGeopostResult($geopostResult)
            ->setPosteComptable($posteComptable);
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \Chronopost\StructType\ResultGetRouting
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \Chronopost\StructType\ResultGetRouting
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * Get geopostResult value
     * @return \Chronopost\StructType\GeopostResult|null
     */
    public function getGeopostResult()
    {
        return $this->geopostResult;
    }
    /**
     * Set geopostResult value
     * @param \Chronopost\StructType\GeopostResult $geopostResult
     * @return \Chronopost\StructType\ResultGetRouting
     */
    public function setGeopostResult(\Chronopost\StructType\GeopostResult $geopostResult = null)
    {
        $this->geopostResult = $geopostResult;
        return $this;
    }
    /**
     * Get posteComptable value
     * @return string|null
     */
    public function getPosteComptable()
    {
        return $this->posteComptable;
    }
    /**
     * Set posteComptable value
     * @param string $posteComptable
     * @return \Chronopost\StructType\ResultGetRouting
     */
    public function setPosteComptable($posteComptable = null)
    {
        // validation for constraint: string
        if (!is_null($posteComptable) && !is_string($posteComptable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($posteComptable, true), gettype($posteComptable)), __LINE__);
        }
        $this->posteComptable = $posteComptable;
        return $this;
    }
}
