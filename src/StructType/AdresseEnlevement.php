<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for adresseEnlevement StructType
 * @subpackage Structs
 */
class AdresseEnlevement extends AbstractStructBase
{
    /**
     * The codeCivilite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codeCivilite;
    /**
     * The codePays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codePays;
    /**
     * The codePorte
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codePorte;
    /**
     * The codePostal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codePostal;
    /**
     * The lieuDit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $lieuDit;
    /**
     * The nom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nom;
    /**
     * The nomPersonneARencontrer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nomPersonneARencontrer;
    /**
     * The numeroVoie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $numeroVoie;
    /**
     * The porteAPorte
     * @var bool
     */
    public $porteAPorte;
    /**
     * The prenom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $prenom;
    /**
     * The raisonSociale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $raisonSociale;
    /**
     * The residenceBatimentEtage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $residenceBatimentEtage;
    /**
     * The serviceDirection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $serviceDirection;
    /**
     * The telephone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $telephone;
    /**
     * The ville
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ville;
    /**
     * Constructor method for adresseEnlevement
     * @uses AdresseEnlevement::setCodeCivilite()
     * @uses AdresseEnlevement::setCodePays()
     * @uses AdresseEnlevement::setCodePorte()
     * @uses AdresseEnlevement::setCodePostal()
     * @uses AdresseEnlevement::setLieuDit()
     * @uses AdresseEnlevement::setNom()
     * @uses AdresseEnlevement::setNomPersonneARencontrer()
     * @uses AdresseEnlevement::setNumeroVoie()
     * @uses AdresseEnlevement::setPorteAPorte()
     * @uses AdresseEnlevement::setPrenom()
     * @uses AdresseEnlevement::setRaisonSociale()
     * @uses AdresseEnlevement::setResidenceBatimentEtage()
     * @uses AdresseEnlevement::setServiceDirection()
     * @uses AdresseEnlevement::setTelephone()
     * @uses AdresseEnlevement::setVille()
     * @param string $codeCivilite
     * @param string $codePays
     * @param string $codePorte
     * @param string $codePostal
     * @param string $lieuDit
     * @param string $nom
     * @param string $nomPersonneARencontrer
     * @param string $numeroVoie
     * @param bool $porteAPorte
     * @param string $prenom
     * @param string $raisonSociale
     * @param string $residenceBatimentEtage
     * @param string $serviceDirection
     * @param string $telephone
     * @param string $ville
     */
    public function __construct($codeCivilite = null, $codePays = null, $codePorte = null, $codePostal = null, $lieuDit = null, $nom = null, $nomPersonneARencontrer = null, $numeroVoie = null, $porteAPorte = null, $prenom = null, $raisonSociale = null, $residenceBatimentEtage = null, $serviceDirection = null, $telephone = null, $ville = null)
    {
        $this
            ->setCodeCivilite($codeCivilite)
            ->setCodePays($codePays)
            ->setCodePorte($codePorte)
            ->setCodePostal($codePostal)
            ->setLieuDit($lieuDit)
            ->setNom($nom)
            ->setNomPersonneARencontrer($nomPersonneARencontrer)
            ->setNumeroVoie($numeroVoie)
            ->setPorteAPorte($porteAPorte)
            ->setPrenom($prenom)
            ->setRaisonSociale($raisonSociale)
            ->setResidenceBatimentEtage($residenceBatimentEtage)
            ->setServiceDirection($serviceDirection)
            ->setTelephone($telephone)
            ->setVille($ville);
    }
    /**
     * Get codeCivilite value
     * @return string|null
     */
    public function getCodeCivilite()
    {
        return $this->codeCivilite;
    }
    /**
     * Set codeCivilite value
     * @param string $codeCivilite
     * @return \Chronopost\StructType\AdresseEnlevement
     */
    public function setCodeCivilite($codeCivilite = null)
    {
        // validation for constraint: string
        if (!is_null($codeCivilite) && !is_string($codeCivilite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeCivilite, true), gettype($codeCivilite)), __LINE__);
        }
        $this->codeCivilite = $codeCivilite;
        return $this;
    }
    /**
     * Get codePays value
     * @return string|null
     */
    public function getCodePays()
    {
        return $this->codePays;
    }
    /**
     * Set codePays value
     * @param string $codePays
     * @return \Chronopost\StructType\AdresseEnlevement
     */
    public function setCodePays($codePays = null)
    {
        // validation for constraint: string
        if (!is_null($codePays) && !is_string($codePays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePays, true), gettype($codePays)), __LINE__);
        }
        $this->codePays = $codePays;
        return $this;
    }
    /**
     * Get codePorte value
     * @return string|null
     */
    public function getCodePorte()
    {
        return $this->codePorte;
    }
    /**
     * Set codePorte value
     * @param string $codePorte
     * @return \Chronopost\StructType\AdresseEnlevement
     */
    public function setCodePorte($codePorte = null)
    {
        // validation for constraint: string
        if (!is_null($codePorte) && !is_string($codePorte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePorte, true), gettype($codePorte)), __LINE__);
        }
        $this->codePorte = $codePorte;
        return $this;
    }
    /**
     * Get codePostal value
     * @return string|null
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }
    /**
     * Set codePostal value
     * @param string $codePostal
     * @return \Chronopost\StructType\AdresseEnlevement
     */
    public function setCodePostal($codePostal = null)
    {
        // validation for constraint: string
        if (!is_null($codePostal) && !is_string($codePostal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codePostal, true), gettype($codePostal)), __LINE__);
        }
        $this->codePostal = $codePostal;
        return $this;
    }
    /**
     * Get lieuDit value
     * @return string|null
     */
    public function getLieuDit()
    {
        return $this->lieuDit;
    }
    /**
     * Set lieuDit value
     * @param string $lieuDit
     * @return \Chronopost\StructType\AdresseEnlevement
     */
    public function setLieuDit($lieuDit = null)
    {
        // validation for constraint: string
        if (!is_null($lieuDit) && !is_string($lieuDit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lieuDit, true), gettype($lieuDit)), __LINE__);
        }
        $this->lieuDit = $lieuDit;
        return $this;
    }
    /**
     * Get nom value
     * @return string|null
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Set nom value
     * @param string $nom
     * @return \Chronopost\StructType\AdresseEnlevement
     */
    public function setNom($nom = null)
    {
        // validation for constraint: string
        if (!is_null($nom) && !is_string($nom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nom, true), gettype($nom)), __LINE__);
        }
        $this->nom = $nom;
        return $this;
    }
    /**
     * Get nomPersonneARencontrer value
     * @return string|null
     */
    public function getNomPersonneARencontrer()
    {
        return $this->nomPersonneARencontrer;
    }
    /**
     * Set nomPersonneARencontrer value
     * @param string $nomPersonneARencontrer
     * @return \Chronopost\StructType\AdresseEnlevement
     */
    public function setNomPersonneARencontrer($nomPersonneARencontrer = null)
    {
        // validation for constraint: string
        if (!is_null($nomPersonneARencontrer) && !is_string($nomPersonneARencontrer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomPersonneARencontrer, true), gettype($nomPersonneARencontrer)), __LINE__);
        }
        $this->nomPersonneARencontrer = $nomPersonneARencontrer;
        return $this;
    }
    /**
     * Get numeroVoie value
     * @return string|null
     */
    public function getNumeroVoie()
    {
        return $this->numeroVoie;
    }
    /**
     * Set numeroVoie value
     * @param string $numeroVoie
     * @return \Chronopost\StructType\AdresseEnlevement
     */
    public function setNumeroVoie($numeroVoie = null)
    {
        // validation for constraint: string
        if (!is_null($numeroVoie) && !is_string($numeroVoie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroVoie, true), gettype($numeroVoie)), __LINE__);
        }
        $this->numeroVoie = $numeroVoie;
        return $this;
    }
    /**
     * Get porteAPorte value
     * @return bool|null
     */
    public function getPorteAPorte()
    {
        return $this->porteAPorte;
    }
    /**
     * Set porteAPorte value
     * @param bool $porteAPorte
     * @return \Chronopost\StructType\AdresseEnlevement
     */
    public function setPorteAPorte($porteAPorte = null)
    {
        // validation for constraint: boolean
        if (!is_null($porteAPorte) && !is_bool($porteAPorte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($porteAPorte, true), gettype($porteAPorte)), __LINE__);
        }
        $this->porteAPorte = $porteAPorte;
        return $this;
    }
    /**
     * Get prenom value
     * @return string|null
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    /**
     * Set prenom value
     * @param string $prenom
     * @return \Chronopost\StructType\AdresseEnlevement
     */
    public function setPrenom($prenom = null)
    {
        // validation for constraint: string
        if (!is_null($prenom) && !is_string($prenom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prenom, true), gettype($prenom)), __LINE__);
        }
        $this->prenom = $prenom;
        return $this;
    }
    /**
     * Get raisonSociale value
     * @return string|null
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }
    /**
     * Set raisonSociale value
     * @param string $raisonSociale
     * @return \Chronopost\StructType\AdresseEnlevement
     */
    public function setRaisonSociale($raisonSociale = null)
    {
        // validation for constraint: string
        if (!is_null($raisonSociale) && !is_string($raisonSociale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($raisonSociale, true), gettype($raisonSociale)), __LINE__);
        }
        $this->raisonSociale = $raisonSociale;
        return $this;
    }
    /**
     * Get residenceBatimentEtage value
     * @return string|null
     */
    public function getResidenceBatimentEtage()
    {
        return $this->residenceBatimentEtage;
    }
    /**
     * Set residenceBatimentEtage value
     * @param string $residenceBatimentEtage
     * @return \Chronopost\StructType\AdresseEnlevement
     */
    public function setResidenceBatimentEtage($residenceBatimentEtage = null)
    {
        // validation for constraint: string
        if (!is_null($residenceBatimentEtage) && !is_string($residenceBatimentEtage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($residenceBatimentEtage, true), gettype($residenceBatimentEtage)), __LINE__);
        }
        $this->residenceBatimentEtage = $residenceBatimentEtage;
        return $this;
    }
    /**
     * Get serviceDirection value
     * @return string|null
     */
    public function getServiceDirection()
    {
        return $this->serviceDirection;
    }
    /**
     * Set serviceDirection value
     * @param string $serviceDirection
     * @return \Chronopost\StructType\AdresseEnlevement
     */
    public function setServiceDirection($serviceDirection = null)
    {
        // validation for constraint: string
        if (!is_null($serviceDirection) && !is_string($serviceDirection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceDirection, true), gettype($serviceDirection)), __LINE__);
        }
        $this->serviceDirection = $serviceDirection;
        return $this;
    }
    /**
     * Get telephone value
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
    /**
     * Set telephone value
     * @param string $telephone
     * @return \Chronopost\StructType\AdresseEnlevement
     */
    public function setTelephone($telephone = null)
    {
        // validation for constraint: string
        if (!is_null($telephone) && !is_string($telephone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($telephone, true), gettype($telephone)), __LINE__);
        }
        $this->telephone = $telephone;
        return $this;
    }
    /**
     * Get ville value
     * @return string|null
     */
    public function getVille()
    {
        return $this->ville;
    }
    /**
     * Set ville value
     * @param string $ville
     * @return \Chronopost\StructType\AdresseEnlevement
     */
    public function setVille($ville = null)
    {
        // validation for constraint: string
        if (!is_null($ville) && !is_string($ville)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ville, true), gettype($ville)), __LINE__);
        }
        $this->ville = $ville;
        return $this;
    }
}
