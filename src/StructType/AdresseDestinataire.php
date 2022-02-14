<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for adresseDestinataire StructType
 * @subpackage Structs
 */
class AdresseDestinataire extends AbstractStructBase
{
    /**
     * The adresse
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adresse;
    /**
     * The adresseSuite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $adresseSuite;
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
     * The digicode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $digicode;
    /**
     * The etage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $etage;
    /**
     * The mail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mail;
    /**
     * The nom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nom;
    /**
     * The poids
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $poids;
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
     * The referenceDestinataire
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $referenceDestinataire;
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
     * Constructor method for adresseDestinataire
     * @uses AdresseDestinataire::setAdresse()
     * @uses AdresseDestinataire::setAdresseSuite()
     * @uses AdresseDestinataire::setCodePays()
     * @uses AdresseDestinataire::setCodePostal()
     * @uses AdresseDestinataire::setDigicode()
     * @uses AdresseDestinataire::setEtage()
     * @uses AdresseDestinataire::setMail()
     * @uses AdresseDestinataire::setNom()
     * @uses AdresseDestinataire::setPoids()
     * @uses AdresseDestinataire::setPrenom()
     * @uses AdresseDestinataire::setRaisonSociale()
     * @uses AdresseDestinataire::setReferenceDestinataire()
     * @uses AdresseDestinataire::setTelephone()
     * @uses AdresseDestinataire::setVille()
     * @param string $adresse
     * @param string $adresseSuite
     * @param string $codePays
     * @param string $codePostal
     * @param string $digicode
     * @param string $etage
     * @param string $mail
     * @param string $nom
     * @param float $poids
     * @param string $prenom
     * @param string $raisonSociale
     * @param string $referenceDestinataire
     * @param string $telephone
     * @param string $ville
     */
    public function __construct($adresse = null, $adresseSuite = null, $codePays = null, $codePostal = null, $digicode = null, $etage = null, $mail = null, $nom = null, $poids = null, $prenom = null, $raisonSociale = null, $referenceDestinataire = null, $telephone = null, $ville = null)
    {
        $this
            ->setAdresse($adresse)
            ->setAdresseSuite($adresseSuite)
            ->setCodePays($codePays)
            ->setCodePostal($codePostal)
            ->setDigicode($digicode)
            ->setEtage($etage)
            ->setMail($mail)
            ->setNom($nom)
            ->setPoids($poids)
            ->setPrenom($prenom)
            ->setRaisonSociale($raisonSociale)
            ->setReferenceDestinataire($referenceDestinataire)
            ->setTelephone($telephone)
            ->setVille($ville);
    }
    /**
     * Get adresse value
     * @return string|null
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    /**
     * Set adresse value
     * @param string $adresse
     * @return \Chronopost\StructType\AdresseDestinataire
     */
    public function setAdresse($adresse = null)
    {
        // validation for constraint: string
        if (!is_null($adresse) && !is_string($adresse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresse, true), gettype($adresse)), __LINE__);
        }
        $this->adresse = $adresse;
        return $this;
    }
    /**
     * Get adresseSuite value
     * @return string|null
     */
    public function getAdresseSuite()
    {
        return $this->adresseSuite;
    }
    /**
     * Set adresseSuite value
     * @param string $adresseSuite
     * @return \Chronopost\StructType\AdresseDestinataire
     */
    public function setAdresseSuite($adresseSuite = null)
    {
        // validation for constraint: string
        if (!is_null($adresseSuite) && !is_string($adresseSuite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adresseSuite, true), gettype($adresseSuite)), __LINE__);
        }
        $this->adresseSuite = $adresseSuite;
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
     * @return \Chronopost\StructType\AdresseDestinataire
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
     * @return \Chronopost\StructType\AdresseDestinataire
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
     * Get digicode value
     * @return string|null
     */
    public function getDigicode()
    {
        return $this->digicode;
    }
    /**
     * Set digicode value
     * @param string $digicode
     * @return \Chronopost\StructType\AdresseDestinataire
     */
    public function setDigicode($digicode = null)
    {
        // validation for constraint: string
        if (!is_null($digicode) && !is_string($digicode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($digicode, true), gettype($digicode)), __LINE__);
        }
        $this->digicode = $digicode;
        return $this;
    }
    /**
     * Get etage value
     * @return string|null
     */
    public function getEtage()
    {
        return $this->etage;
    }
    /**
     * Set etage value
     * @param string $etage
     * @return \Chronopost\StructType\AdresseDestinataire
     */
    public function setEtage($etage = null)
    {
        // validation for constraint: string
        if (!is_null($etage) && !is_string($etage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($etage, true), gettype($etage)), __LINE__);
        }
        $this->etage = $etage;
        return $this;
    }
    /**
     * Get mail value
     * @return string|null
     */
    public function getMail()
    {
        return $this->mail;
    }
    /**
     * Set mail value
     * @param string $mail
     * @return \Chronopost\StructType\AdresseDestinataire
     */
    public function setMail($mail = null)
    {
        // validation for constraint: string
        if (!is_null($mail) && !is_string($mail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mail, true), gettype($mail)), __LINE__);
        }
        $this->mail = $mail;
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
     * @return \Chronopost\StructType\AdresseDestinataire
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
     * @return \Chronopost\StructType\AdresseDestinataire
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
     * @return \Chronopost\StructType\AdresseDestinataire
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
     * @return \Chronopost\StructType\AdresseDestinataire
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
     * Get referenceDestinataire value
     * @return string|null
     */
    public function getReferenceDestinataire()
    {
        return $this->referenceDestinataire;
    }
    /**
     * Set referenceDestinataire value
     * @param string $referenceDestinataire
     * @return \Chronopost\StructType\AdresseDestinataire
     */
    public function setReferenceDestinataire($referenceDestinataire = null)
    {
        // validation for constraint: string
        if (!is_null($referenceDestinataire) && !is_string($referenceDestinataire)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceDestinataire, true), gettype($referenceDestinataire)), __LINE__);
        }
        $this->referenceDestinataire = $referenceDestinataire;
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
     * @return \Chronopost\StructType\AdresseDestinataire
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
     * @return \Chronopost\StructType\AdresseDestinataire
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
