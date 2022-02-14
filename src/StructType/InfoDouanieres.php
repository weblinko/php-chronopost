<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for infoDouanieres StructType
 * @subpackage Structs
 */
class InfoDouanieres extends AbstractStructBase
{
    /**
     * The devise
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $devise;
    /**
     * The montant
     * @var float
     */
    public $montant;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type;
    /**
     * Constructor method for infoDouanieres
     * @uses InfoDouanieres::setDevise()
     * @uses InfoDouanieres::setMontant()
     * @uses InfoDouanieres::setType()
     * @param string $devise
     * @param float $montant
     * @param string $type
     */
    public function __construct($devise = null, $montant = null, $type = null)
    {
        $this
            ->setDevise($devise)
            ->setMontant($montant)
            ->setType($type);
    }
    /**
     * Get devise value
     * @return string|null
     */
    public function getDevise()
    {
        return $this->devise;
    }
    /**
     * Set devise value
     * @param string $devise
     * @return \Chronopost\StructType\InfoDouanieres
     */
    public function setDevise($devise = null)
    {
        // validation for constraint: string
        if (!is_null($devise) && !is_string($devise)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($devise, true), gettype($devise)), __LINE__);
        }
        $this->devise = $devise;
        return $this;
    }
    /**
     * Get montant value
     * @return float|null
     */
    public function getMontant()
    {
        return $this->montant;
    }
    /**
     * Set montant value
     * @param float $montant
     * @return \Chronopost\StructType\InfoDouanieres
     */
    public function setMontant($montant = null)
    {
        // validation for constraint: float
        if (!is_null($montant) && !(is_float($montant) || is_numeric($montant))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($montant, true), gettype($montant)), __LINE__);
        }
        $this->montant = $montant;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Chronopost\StructType\InfoDouanieres
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
