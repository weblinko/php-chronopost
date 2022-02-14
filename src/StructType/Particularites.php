<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for particularites StructType
 * @subpackage Structs
 */
class Particularites extends AbstractStructBase
{
    /**
     * The hauteur
     * @var float
     */
    public $hauteur;
    /**
     * The instructionsParticulieres
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $instructionsParticulieres;
    /**
     * The largeur
     * @var float
     */
    public $largeur;
    /**
     * The longueur
     * @var float
     */
    public $longueur;
    /**
     * The nombreEnvois
     * @var int
     */
    public $nombreEnvois;
    /**
     * The poids
     * @var float
     */
    public $poids;
    /**
     * Constructor method for particularites
     * @uses Particularites::setHauteur()
     * @uses Particularites::setInstructionsParticulieres()
     * @uses Particularites::setLargeur()
     * @uses Particularites::setLongueur()
     * @uses Particularites::setNombreEnvois()
     * @uses Particularites::setPoids()
     * @param float $hauteur
     * @param string $instructionsParticulieres
     * @param float $largeur
     * @param float $longueur
     * @param int $nombreEnvois
     * @param float $poids
     */
    public function __construct($hauteur = null, $instructionsParticulieres = null, $largeur = null, $longueur = null, $nombreEnvois = null, $poids = null)
    {
        $this
            ->setHauteur($hauteur)
            ->setInstructionsParticulieres($instructionsParticulieres)
            ->setLargeur($largeur)
            ->setLongueur($longueur)
            ->setNombreEnvois($nombreEnvois)
            ->setPoids($poids);
    }
    /**
     * Get hauteur value
     * @return float|null
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }
    /**
     * Set hauteur value
     * @param float $hauteur
     * @return \Chronopost\StructType\Particularites
     */
    public function setHauteur($hauteur = null)
    {
        // validation for constraint: float
        if (!is_null($hauteur) && !(is_float($hauteur) || is_numeric($hauteur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($hauteur, true), gettype($hauteur)), __LINE__);
        }
        $this->hauteur = $hauteur;
        return $this;
    }
    /**
     * Get instructionsParticulieres value
     * @return string|null
     */
    public function getInstructionsParticulieres()
    {
        return $this->instructionsParticulieres;
    }
    /**
     * Set instructionsParticulieres value
     * @param string $instructionsParticulieres
     * @return \Chronopost\StructType\Particularites
     */
    public function setInstructionsParticulieres($instructionsParticulieres = null)
    {
        // validation for constraint: string
        if (!is_null($instructionsParticulieres) && !is_string($instructionsParticulieres)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instructionsParticulieres, true), gettype($instructionsParticulieres)), __LINE__);
        }
        $this->instructionsParticulieres = $instructionsParticulieres;
        return $this;
    }
    /**
     * Get largeur value
     * @return float|null
     */
    public function getLargeur()
    {
        return $this->largeur;
    }
    /**
     * Set largeur value
     * @param float $largeur
     * @return \Chronopost\StructType\Particularites
     */
    public function setLargeur($largeur = null)
    {
        // validation for constraint: float
        if (!is_null($largeur) && !(is_float($largeur) || is_numeric($largeur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($largeur, true), gettype($largeur)), __LINE__);
        }
        $this->largeur = $largeur;
        return $this;
    }
    /**
     * Get longueur value
     * @return float|null
     */
    public function getLongueur()
    {
        return $this->longueur;
    }
    /**
     * Set longueur value
     * @param float $longueur
     * @return \Chronopost\StructType\Particularites
     */
    public function setLongueur($longueur = null)
    {
        // validation for constraint: float
        if (!is_null($longueur) && !(is_float($longueur) || is_numeric($longueur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longueur, true), gettype($longueur)), __LINE__);
        }
        $this->longueur = $longueur;
        return $this;
    }
    /**
     * Get nombreEnvois value
     * @return int|null
     */
    public function getNombreEnvois()
    {
        return $this->nombreEnvois;
    }
    /**
     * Set nombreEnvois value
     * @param int $nombreEnvois
     * @return \Chronopost\StructType\Particularites
     */
    public function setNombreEnvois($nombreEnvois = null)
    {
        // validation for constraint: int
        if (!is_null($nombreEnvois) && !(is_int($nombreEnvois) || ctype_digit($nombreEnvois))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nombreEnvois, true), gettype($nombreEnvois)), __LINE__);
        }
        $this->nombreEnvois = $nombreEnvois;
        return $this;
    }
    /**
     * Get poids value
     * @return float|null
     */
    public function getPoids()
    {
        return $this->poids;
    }
    /**
     * Set poids value
     * @param float $poids
     * @return \Chronopost\StructType\Particularites
     */
    public function setPoids($poids = null)
    {
        // validation for constraint: float
        if (!is_null($poids) && !(is_float($poids) || is_numeric($poids))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($poids, true), gettype($poids)), __LINE__);
        }
        $this->poids = $poids;
        return $this;
    }
}
