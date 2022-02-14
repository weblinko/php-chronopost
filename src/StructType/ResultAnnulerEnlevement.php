<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultAnnulerEnlevement StructType
 * @subpackage Structs
 */
class ResultAnnulerEnlevement extends AbstractStructBase
{
    /**
     * The codeErreur
     * @var int
     */
    public $codeErreur;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $errorMessage;
    /**
     * The statut
     * @var \Chronopost\StructType\Statut
     */
    public $statut;
    /**
     * Constructor method for resultAnnulerEnlevement
     * @uses ResultAnnulerEnlevement::setCodeErreur()
     * @uses ResultAnnulerEnlevement::setErrorMessage()
     * @uses ResultAnnulerEnlevement::setStatut()
     * @param int $codeErreur
     * @param string $errorMessage
     * @param \Chronopost\StructType\Statut $statut
     */
    public function __construct($codeErreur = null, $errorMessage = null, \Chronopost\StructType\Statut $statut = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setErrorMessage($errorMessage)
            ->setStatut($statut);
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
     * @return \Chronopost\StructType\ResultAnnulerEnlevement
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
     * @return \Chronopost\StructType\ResultAnnulerEnlevement
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
     * Get statut value
     * @return \Chronopost\StructType\Statut|null
     */
    public function getStatut()
    {
        return $this->statut;
    }
    /**
     * Set statut value
     * @param \Chronopost\StructType\Statut $statut
     * @return \Chronopost\StructType\ResultAnnulerEnlevement
     */
    public function setStatut(\Chronopost\StructType\Statut $statut = null)
    {
        $this->statut = $statut;
        return $this;
    }
}
