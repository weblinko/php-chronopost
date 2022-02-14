<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for adresseEnlevementV3 StructType
 * @subpackage Structs
 */
class AdresseEnlevementV3 extends AdresseEnlevementV2
{
    /**
     * The refExpediteur
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $refExpediteur;
    /**
     * Constructor method for adresseEnlevementV3
     * @uses AdresseEnlevementV3::setRefExpediteur()
     * @param string $refExpediteur
     */
    public function __construct($refExpediteur = null)
    {
        $this
            ->setRefExpediteur($refExpediteur);
    }
    /**
     * Get refExpediteur value
     * @return string|null
     */
    public function getRefExpediteur()
    {
        return $this->refExpediteur;
    }
    /**
     * Set refExpediteur value
     * @param string $refExpediteur
     * @return \Chronopost\StructType\AdresseEnlevementV3
     */
    public function setRefExpediteur($refExpediteur = null)
    {
        // validation for constraint: string
        if (!is_null($refExpediteur) && !is_string($refExpediteur)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refExpediteur, true), gettype($refExpediteur)), __LINE__);
        }
        $this->refExpediteur = $refExpediteur;
        return $this;
    }
}
