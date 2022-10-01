<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for parcelPOD StructType
 * @subpackage Structs
 */
class ParcelPOD extends AbstractStructBase
{
    /**
     * The formatPOD
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $formatPOD;
    /**
     * The pod
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pod;
    /**
     * The podPresente
     * @var bool
     */
    public $podPresente;
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $skybillNumber;
    /**
     * The statusCode
     * @var int
     */
    public $statusCode;
    /**
     * Constructor method for parcelPOD
     * @uses ParcelPOD::setFormatPOD()
     * @uses ParcelPOD::setPod()
     * @uses ParcelPOD::setPodPresente()
     * @uses ParcelPOD::setSkybillNumber()
     * @uses ParcelPOD::setStatusCode()
     * @param string $formatPOD
     * @param string $pod
     * @param bool $podPresente
     * @param string $skybillNumber
     * @param int $statusCode
     */
    public function __construct($formatPOD = null, $pod = null, $podPresente = null, $skybillNumber = null, $statusCode = null)
    {
        $this
            ->setFormatPOD($formatPOD)
            ->setPod($pod)
            ->setPodPresente($podPresente)
            ->setSkybillNumber($skybillNumber)
            ->setStatusCode($statusCode);
    }
    /**
     * Get formatPOD value
     * @return string|null
     */
    public function getFormatPOD()
    {
        return $this->formatPOD;
    }
    /**
     * Set formatPOD value
     * @param string $formatPOD
     * @return \Chronopost\StructType\ParcelPOD
     */
    public function setFormatPOD($formatPOD = null)
    {
        // validation for constraint: string
        if (!is_null($formatPOD) && !is_string($formatPOD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatPOD, true), gettype($formatPOD)), __LINE__);
        }
        $this->formatPOD = $formatPOD;
        return $this;
    }
    /**
     * Get pod value
     * @return string|null
     */
    public function getPod()
    {
        return $this->pod;
    }
    /**
     * Set pod value
     * @param string $pod
     * @return \Chronopost\StructType\ParcelPOD
     */
    public function setPod($pod = null)
    {
        // validation for constraint: string
        if (!is_null($pod) && !is_string($pod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pod, true), gettype($pod)), __LINE__);
        }
        $this->pod = $pod;
        return $this;
    }
    /**
     * Get podPresente value
     * @return bool|null
     */
    public function getPodPresente()
    {
        return $this->podPresente;
    }
    /**
     * Set podPresente value
     * @param bool $podPresente
     * @return \Chronopost\StructType\ParcelPOD
     */
    public function setPodPresente($podPresente = null)
    {
        // validation for constraint: boolean
        if (!is_null($podPresente) && !is_bool($podPresente)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($podPresente, true), gettype($podPresente)), __LINE__);
        }
        $this->podPresente = $podPresente;
        return $this;
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
     * @return \Chronopost\StructType\ParcelPOD
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
    /**
     * Get statusCode value
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }
    /**
     * Set statusCode value
     * @param int $statusCode
     * @return \Chronopost\StructType\ParcelPOD
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: int
        if (!is_null($statusCode) && !(is_int($statusCode) || ctype_digit($statusCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusCode, true), gettype($statusCode)), __LINE__);
        }
        $this->statusCode = $statusCode;
        return $this;
    }
}
