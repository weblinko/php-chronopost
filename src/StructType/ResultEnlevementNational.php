<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultEnlevementNational StructType
 * @subpackage Structs
 */
class ResultEnlevementNational extends AbstractStructBase
{
    /**
     * The codeErreur
     * @var int
     */
    public $codeErreur;
    /**
     * The infoEnlevement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\InfoEnlevement
     */
    public $infoEnlevement;
    /**
     * The libelleErreur
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $libelleErreur;
    /**
     * Constructor method for resultEnlevementNational
     * @uses ResultEnlevementNational::setCodeErreur()
     * @uses ResultEnlevementNational::setInfoEnlevement()
     * @uses ResultEnlevementNational::setLibelleErreur()
     * @param int $codeErreur
     * @param \Chronopost\StructType\InfoEnlevement $infoEnlevement
     * @param string $libelleErreur
     */
    public function __construct($codeErreur = null, \Chronopost\StructType\InfoEnlevement $infoEnlevement = null, $libelleErreur = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setInfoEnlevement($infoEnlevement)
            ->setLibelleErreur($libelleErreur);
    }
    /**
     * Get codeErreur value
     * @return int|null
     */
    public function getCodeErreur()
    {
        return $this->codeErreur;
    }
    /**
     * Set codeErreur value
     * @param int $codeErreur
     * @return \Chronopost\StructType\ResultEnlevementNational
     */
    public function setCodeErreur($codeErreur = null)
    {
        // validation for constraint: int
        if (!is_null($codeErreur) && !(is_int($codeErreur) || ctype_digit($codeErreur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codeErreur, true), gettype($codeErreur)), __LINE__);
        }
        $this->codeErreur = $codeErreur;
        return $this;
    }
    /**
     * Get infoEnlevement value
     * @return \Chronopost\StructType\InfoEnlevement|null
     */
    public function getInfoEnlevement()
    {
        return $this->infoEnlevement;
    }
    /**
     * Set infoEnlevement value
     * @param \Chronopost\StructType\InfoEnlevement $infoEnlevement
     * @return \Chronopost\StructType\ResultEnlevementNational
     */
    public function setInfoEnlevement(\Chronopost\StructType\InfoEnlevement $infoEnlevement = null)
    {
        $this->infoEnlevement = $infoEnlevement;
        return $this;
    }
    /**
     * Get libelleErreur value
     * @return string|null
     */
    public function getLibelleErreur()
    {
        return $this->libelleErreur;
    }
    /**
     * Set libelleErreur value
     * @param string $libelleErreur
     * @return \Chronopost\StructType\ResultEnlevementNational
     */
    public function setLibelleErreur($libelleErreur = null)
    {
        // validation for constraint: string
        if (!is_null($libelleErreur) && !is_string($libelleErreur)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libelleErreur, true), gettype($libelleErreur)), __LINE__);
        }
        $this->libelleErreur = $libelleErreur;
        return $this;
    }
}
