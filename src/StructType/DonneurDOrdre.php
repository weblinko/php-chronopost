<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for donneurDOrdre StructType
 * @subpackage Structs
 */
class DonneurDOrdre extends AbstractStructBase
{
    /**
     * The autreTelephone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $autreTelephone;
    /**
     * The batiment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $batiment;
    /**
     * The codeCivilite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codeCivilite;
    /**
     * The codeNaf
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codeNaf;
    /**
     * The codePays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codePays;
    /**
     * The codePostal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codePostal;
    /**
     * The EMail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EMail;
    /**
     * The fax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $fax;
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
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $service;
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
     * The voie
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $voie;
    /**
     * Constructor method for donneurDOrdre
     * @uses DonneurDOrdre::setAutreTelephone()
     * @uses DonneurDOrdre::setBatiment()
     * @uses DonneurDOrdre::setCodeCivilite()
     * @uses DonneurDOrdre::setCodeNaf()
     * @uses DonneurDOrdre::setCodePays()
     * @uses DonneurDOrdre::setCodePostal()
     * @uses DonneurDOrdre::setEMail()
     * @uses DonneurDOrdre::setFax()
     * @uses DonneurDOrdre::setLieuDit()
     * @uses DonneurDOrdre::setNom()
     * @uses DonneurDOrdre::setPrenom()
     * @uses DonneurDOrdre::setRaisonSociale()
     * @uses DonneurDOrdre::setService()
     * @uses DonneurDOrdre::setTelephone()
     * @uses DonneurDOrdre::setVille()
     * @uses DonneurDOrdre::setVoie()
     * @param string $autreTelephone
     * @param string $batiment
     * @param string $codeCivilite
     * @param string $codeNaf
     * @param string $codePays
     * @param string $codePostal
     * @param string $eMail
     * @param string $fax
     * @param string $lieuDit
     * @param string $nom
     * @param string $prenom
     * @param string $raisonSociale
     * @param string $service
     * @param string $telephone
     * @param string $ville
     * @param string $voie
     */
    public function __construct($autreTelephone = null, $batiment = null, $codeCivilite = null, $codeNaf = null, $codePays = null, $codePostal = null, $eMail = null, $fax = null, $lieuDit = null, $nom = null, $prenom = null, $raisonSociale = null, $service = null, $telephone = null, $ville = null, $voie = null)
    {
        $this
            ->setAutreTelephone($autreTelephone)
            ->setBatiment($batiment)
            ->setCodeCivilite($codeCivilite)
            ->setCodeNaf($codeNaf)
            ->setCodePays($codePays)
            ->setCodePostal($codePostal)
            ->setEMail($eMail)
            ->setFax($fax)
            ->setLieuDit($lieuDit)
            ->setNom($nom)
            ->setPrenom($prenom)
            ->setRaisonSociale($raisonSociale)
            ->setService($service)
            ->setTelephone($telephone)
            ->setVille($ville)
            ->setVoie($voie);
    }
    /**
     * Get autreTelephone value
     * @return string|null
     */
    public function getAutreTelephone()
    {
        return $this->autreTelephone;
    }
    /**
     * Set autreTelephone value
     * @param string $autreTelephone
     * @return \Chronopost\StructType\DonneurDOrdre
     */
    public function setAutreTelephone($autreTelephone = null)
    {
        // validation for constraint: string
        if (!is_null($autreTelephone) && !is_string($autreTelephone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autreTelephone, true), gettype($autreTelephone)), __LINE__);
        }
        $this->autreTelephone = $autreTelephone;
        return $this;
    }
    /**
     * Get batiment value
     * @return string|null
     */
    public function getBatiment()
    {
        return $this->batiment;
    }
    /**
     * Set batiment value
     * @param string $batiment
     * @return \Chronopost\StructType\DonneurDOrdre
     */
    public function setBatiment($batiment = null)
    {
        // validation for constraint: string
        if (!is_null($batiment) && !is_string($batiment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($batiment, true), gettype($batiment)), __LINE__);
        }
        $this->batiment = $batiment;
        return $this;
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
     * @return \Chronopost\StructType\DonneurDOrdre
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
     * Get codeNaf value
     * @return string|null
     */
    public function getCodeNaf()
    {
        return $this->codeNaf;
    }
    /**
     * Set codeNaf value
     * @param string $codeNaf
     * @return \Chronopost\StructType\DonneurDOrdre
     */
    public function setCodeNaf($codeNaf = null)
    {
        // validation for constraint: string
        if (!is_null($codeNaf) && !is_string($codeNaf)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeNaf, true), gettype($codeNaf)), __LINE__);
        }
        $this->codeNaf = $codeNaf;
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
     * @return \Chronopost\StructType\DonneurDOrdre
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
     * @return \Chronopost\StructType\DonneurDOrdre
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
     * Get EMail value
     * @return string|null
     */
    public function getEMail()
    {
        return $this->EMail;
    }
    /**
     * Set EMail value
     * @param string $eMail
     * @return \Chronopost\StructType\DonneurDOrdre
     */
    public function setEMail($eMail = null)
    {
        // validation for constraint: string
        if (!is_null($eMail) && !is_string($eMail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eMail, true), gettype($eMail)), __LINE__);
        }
        $this->EMail = $eMail;
        return $this;
    }
    /**
     * Get fax value
     * @return string|null
     */
    public function getFax()
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param string $fax
     * @return \Chronopost\StructType\DonneurDOrdre
     */
    public function setFax($fax = null)
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        $this->fax = $fax;
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
     * @return \Chronopost\StructType\DonneurDOrdre
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
     * @return \Chronopost\StructType\DonneurDOrdre
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
     * @return \Chronopost\StructType\DonneurDOrdre
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
     * @return \Chronopost\StructType\DonneurDOrdre
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
     * Get service value
     * @return string|null
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \Chronopost\StructType\DonneurDOrdre
     */
    public function setService($service = null)
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->service = $service;
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
     * @return \Chronopost\StructType\DonneurDOrdre
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
     * @return \Chronopost\StructType\DonneurDOrdre
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
    /**
     * Get voie value
     * @return string|null
     */
    public function getVoie()
    {
        return $this->voie;
    }
    /**
     * Set voie value
     * @param string $voie
     * @return \Chronopost\StructType\DonneurDOrdre
     */
    public function setVoie($voie = null)
    {
        // validation for constraint: string
        if (!is_null($voie) && !is_string($voie)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voie, true), gettype($voie)), __LINE__);
        }
        $this->voie = $voie;
        return $this;
    }
}
