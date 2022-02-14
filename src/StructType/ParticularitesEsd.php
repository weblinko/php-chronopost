<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for particularitesEsd StructType
 * @subpackage Structs
 */
class ParticularitesEsd extends AbstractStructBase
{
    /**
     * The etudeDeFaisabilite
     * @var bool
     */
    public $etudeDeFaisabilite;
    /**
     * The grosVolume
     * @var bool
     */
    public $grosVolume;
    /**
     * The hauteur
     * @var int
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
     * @var int
     */
    public $largeur;
    /**
     * The listeColisAnnonces
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $listeColisAnnonces;
    /**
     * The longueur
     * @var int
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
     * The volume
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $volume;
    /**
     * Constructor method for particularitesEsd
     * @uses ParticularitesEsd::setEtudeDeFaisabilite()
     * @uses ParticularitesEsd::setGrosVolume()
     * @uses ParticularitesEsd::setHauteur()
     * @uses ParticularitesEsd::setInstructionsParticulieres()
     * @uses ParticularitesEsd::setLargeur()
     * @uses ParticularitesEsd::setListeColisAnnonces()
     * @uses ParticularitesEsd::setLongueur()
     * @uses ParticularitesEsd::setNombreEnvois()
     * @uses ParticularitesEsd::setPoids()
     * @uses ParticularitesEsd::setVolume()
     * @param bool $etudeDeFaisabilite
     * @param bool $grosVolume
     * @param int $hauteur
     * @param string $instructionsParticulieres
     * @param int $largeur
     * @param string $listeColisAnnonces
     * @param int $longueur
     * @param int $nombreEnvois
     * @param float $poids
     * @param string $volume
     */
    public function __construct($etudeDeFaisabilite = null, $grosVolume = null, $hauteur = null, $instructionsParticulieres = null, $largeur = null, $listeColisAnnonces = null, $longueur = null, $nombreEnvois = null, $poids = null, $volume = null)
    {
        $this
            ->setEtudeDeFaisabilite($etudeDeFaisabilite)
            ->setGrosVolume($grosVolume)
            ->setHauteur($hauteur)
            ->setInstructionsParticulieres($instructionsParticulieres)
            ->setLargeur($largeur)
            ->setListeColisAnnonces($listeColisAnnonces)
            ->setLongueur($longueur)
            ->setNombreEnvois($nombreEnvois)
            ->setPoids($poids)
            ->setVolume($volume);
    }
    /**
     * Get etudeDeFaisabilite value
     * @return bool|null
     */
    public function getEtudeDeFaisabilite()
    {
        return $this->etudeDeFaisabilite;
    }
    /**
     * Set etudeDeFaisabilite value
     * @param bool $etudeDeFaisabilite
     * @return \Chronopost\StructType\ParticularitesEsd
     */
    public function setEtudeDeFaisabilite($etudeDeFaisabilite = null)
    {
        // validation for constraint: boolean
        if (!is_null($etudeDeFaisabilite) && !is_bool($etudeDeFaisabilite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($etudeDeFaisabilite, true), gettype($etudeDeFaisabilite)), __LINE__);
        }
        $this->etudeDeFaisabilite = $etudeDeFaisabilite;
        return $this;
    }
    /**
     * Get grosVolume value
     * @return bool|null
     */
    public function getGrosVolume()
    {
        return $this->grosVolume;
    }
    /**
     * Set grosVolume value
     * @param bool $grosVolume
     * @return \Chronopost\StructType\ParticularitesEsd
     */
    public function setGrosVolume($grosVolume = null)
    {
        // validation for constraint: boolean
        if (!is_null($grosVolume) && !is_bool($grosVolume)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($grosVolume, true), gettype($grosVolume)), __LINE__);
        }
        $this->grosVolume = $grosVolume;
        return $this;
    }
    /**
     * Get hauteur value
     * @return int|null
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }
    /**
     * Set hauteur value
     * @param int $hauteur
     * @return \Chronopost\StructType\ParticularitesEsd
     */
    public function setHauteur($hauteur = null)
    {
        // validation for constraint: int
        if (!is_null($hauteur) && !(is_int($hauteur) || ctype_digit($hauteur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hauteur, true), gettype($hauteur)), __LINE__);
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
     * @return \Chronopost\StructType\ParticularitesEsd
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
     * @return int|null
     */
    public function getLargeur()
    {
        return $this->largeur;
    }
    /**
     * Set largeur value
     * @param int $largeur
     * @return \Chronopost\StructType\ParticularitesEsd
     */
    public function setLargeur($largeur = null)
    {
        // validation for constraint: int
        if (!is_null($largeur) && !(is_int($largeur) || ctype_digit($largeur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($largeur, true), gettype($largeur)), __LINE__);
        }
        $this->largeur = $largeur;
        return $this;
    }
    /**
     * Get listeColisAnnonces value
     * @return string|null
     */
    public function getListeColisAnnonces()
    {
        return $this->listeColisAnnonces;
    }
    /**
     * Set listeColisAnnonces value
     * @param string $listeColisAnnonces
     * @return \Chronopost\StructType\ParticularitesEsd
     */
    public function setListeColisAnnonces($listeColisAnnonces = null)
    {
        // validation for constraint: string
        if (!is_null($listeColisAnnonces) && !is_string($listeColisAnnonces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listeColisAnnonces, true), gettype($listeColisAnnonces)), __LINE__);
        }
        $this->listeColisAnnonces = $listeColisAnnonces;
        return $this;
    }
    /**
     * Get longueur value
     * @return int|null
     */
    public function getLongueur()
    {
        return $this->longueur;
    }
    /**
     * Set longueur value
     * @param int $longueur
     * @return \Chronopost\StructType\ParticularitesEsd
     */
    public function setLongueur($longueur = null)
    {
        // validation for constraint: int
        if (!is_null($longueur) && !(is_int($longueur) || ctype_digit($longueur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($longueur, true), gettype($longueur)), __LINE__);
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
     * @return \Chronopost\StructType\ParticularitesEsd
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
     * @return \Chronopost\StructType\ParticularitesEsd
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
    /**
     * Get volume value
     * @return string|null
     */
    public function getVolume()
    {
        return $this->volume;
    }
    /**
     * Set volume value
     * @param string $volume
     * @return \Chronopost\StructType\ParticularitesEsd
     */
    public function setVolume($volume = null)
    {
        // validation for constraint: string
        if (!is_null($volume) && !is_string($volume)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($volume, true), gettype($volume)), __LINE__);
        }
        $this->volume = $volume;
        return $this;
    }
}
