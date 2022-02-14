<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for particularitesColisDpd StructType
 * @subpackage Structs
 */
class ParticularitesColisDpd extends AbstractStructBase
{
    /**
     * The infoDouanieres
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\InfoDouanieres
     */
    public $infoDouanieres;
    /**
     * The valeurAssuree
     * @var float
     */
    public $valeurAssuree;
    /**
     * Constructor method for particularitesColisDpd
     * @uses ParticularitesColisDpd::setInfoDouanieres()
     * @uses ParticularitesColisDpd::setValeurAssuree()
     * @param \Chronopost\StructType\InfoDouanieres $infoDouanieres
     * @param float $valeurAssuree
     */
    public function __construct(\Chronopost\StructType\InfoDouanieres $infoDouanieres = null, $valeurAssuree = null)
    {
        $this
            ->setInfoDouanieres($infoDouanieres)
            ->setValeurAssuree($valeurAssuree);
    }
    /**
     * Get infoDouanieres value
     * @return \Chronopost\StructType\InfoDouanieres|null
     */
    public function getInfoDouanieres()
    {
        return $this->infoDouanieres;
    }
    /**
     * Set infoDouanieres value
     * @param \Chronopost\StructType\InfoDouanieres $infoDouanieres
     * @return \Chronopost\StructType\ParticularitesColisDpd
     */
    public function setInfoDouanieres(\Chronopost\StructType\InfoDouanieres $infoDouanieres = null)
    {
        $this->infoDouanieres = $infoDouanieres;
        return $this;
    }
    /**
     * Get valeurAssuree value
     * @return float|null
     */
    public function getValeurAssuree()
    {
        return $this->valeurAssuree;
    }
    /**
     * Set valeurAssuree value
     * @param float $valeurAssuree
     * @return \Chronopost\StructType\ParticularitesColisDpd
     */
    public function setValeurAssuree($valeurAssuree = null)
    {
        // validation for constraint: float
        if (!is_null($valeurAssuree) && !(is_float($valeurAssuree) || is_numeric($valeurAssuree))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valeurAssuree, true), gettype($valeurAssuree)), __LINE__);
        }
        $this->valeurAssuree = $valeurAssuree;
        return $this;
    }
}
