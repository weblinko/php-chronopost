<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementNational StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementNational
 * @subpackage Structs
 */
class CreerEnlevementNational extends AbstractStructBase
{
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\HeaderValue
     */
    public $headerValue;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $password;
    /**
     * The datePassage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datePassage;
    /**
     * The datePassageFermeture
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datePassageFermeture;
    /**
     * The donneurDOrdre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\DonneurDOrdre
     */
    public $donneurDOrdre;
    /**
     * The adresseEnlevement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\AdresseEnlevementV3
     */
    public $adresseEnlevement;
    /**
     * The particulartiesEsd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ParticularitesEsd
     */
    public $particulartiesEsd;
    /**
     * The referenceEsdClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $referenceEsdClient;
    /**
     * The contenu
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $contenu;
    /**
     * The options
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\Options
     */
    public $options;
    /**
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $locale;
    /**
     * Constructor method for creerEnlevementNational
     * @uses CreerEnlevementNational::setHeaderValue()
     * @uses CreerEnlevementNational::setPassword()
     * @uses CreerEnlevementNational::setDatePassage()
     * @uses CreerEnlevementNational::setDatePassageFermeture()
     * @uses CreerEnlevementNational::setDonneurDOrdre()
     * @uses CreerEnlevementNational::setAdresseEnlevement()
     * @uses CreerEnlevementNational::setParticulartiesEsd()
     * @uses CreerEnlevementNational::setReferenceEsdClient()
     * @uses CreerEnlevementNational::setContenu()
     * @uses CreerEnlevementNational::setOptions()
     * @uses CreerEnlevementNational::setLocale()
     * @param \Chronopost\StructType\HeaderValue $headerValue
     * @param string $password
     * @param string $datePassage
     * @param string $datePassageFermeture
     * @param \Chronopost\StructType\DonneurDOrdre $donneurDOrdre
     * @param \Chronopost\StructType\AdresseEnlevementV3 $adresseEnlevement
     * @param \Chronopost\StructType\ParticularitesEsd $particulartiesEsd
     * @param string $referenceEsdClient
     * @param string $contenu
     * @param \Chronopost\StructType\Options $options
     * @param string $locale
     */
    public function __construct(\Chronopost\StructType\HeaderValue $headerValue = null, $password = null, $datePassage = null, $datePassageFermeture = null, \Chronopost\StructType\DonneurDOrdre $donneurDOrdre = null, \Chronopost\StructType\AdresseEnlevementV3 $adresseEnlevement = null, \Chronopost\StructType\ParticularitesEsd $particulartiesEsd = null, $referenceEsdClient = null, $contenu = null, \Chronopost\StructType\Options $options = null, $locale = null)
    {
        $this
            ->setHeaderValue($headerValue)
            ->setPassword($password)
            ->setDatePassage($datePassage)
            ->setDatePassageFermeture($datePassageFermeture)
            ->setDonneurDOrdre($donneurDOrdre)
            ->setAdresseEnlevement($adresseEnlevement)
            ->setParticulartiesEsd($particulartiesEsd)
            ->setReferenceEsdClient($referenceEsdClient)
            ->setContenu($contenu)
            ->setOptions($options)
            ->setLocale($locale);
    }
    /**
     * Get headerValue value
     * @return \Chronopost\StructType\HeaderValue|null
     */
    public function getHeaderValue()
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \Chronopost\StructType\HeaderValue $headerValue
     * @return \Chronopost\StructType\CreerEnlevementNational
     */
    public function setHeaderValue(\Chronopost\StructType\HeaderValue $headerValue = null)
    {
        $this->headerValue = $headerValue;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Chronopost\StructType\CreerEnlevementNational
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get datePassage value
     * @return string|null
     */
    public function getDatePassage()
    {
        return $this->datePassage;
    }
    /**
     * Set datePassage value
     * @param string $datePassage
     * @return \Chronopost\StructType\CreerEnlevementNational
     */
    public function setDatePassage($datePassage = null)
    {
        // validation for constraint: string
        if (!is_null($datePassage) && !is_string($datePassage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datePassage, true), gettype($datePassage)), __LINE__);
        }
        $this->datePassage = $datePassage;
        return $this;
    }
    /**
     * Get datePassageFermeture value
     * @return string|null
     */
    public function getDatePassageFermeture()
    {
        return $this->datePassageFermeture;
    }
    /**
     * Set datePassageFermeture value
     * @param string $datePassageFermeture
     * @return \Chronopost\StructType\CreerEnlevementNational
     */
    public function setDatePassageFermeture($datePassageFermeture = null)
    {
        // validation for constraint: string
        if (!is_null($datePassageFermeture) && !is_string($datePassageFermeture)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datePassageFermeture, true), gettype($datePassageFermeture)), __LINE__);
        }
        $this->datePassageFermeture = $datePassageFermeture;
        return $this;
    }
    /**
     * Get donneurDOrdre value
     * @return \Chronopost\StructType\DonneurDOrdre|null
     */
    public function getDonneurDOrdre()
    {
        return $this->donneurDOrdre;
    }
    /**
     * Set donneurDOrdre value
     * @param \Chronopost\StructType\DonneurDOrdre $donneurDOrdre
     * @return \Chronopost\StructType\CreerEnlevementNational
     */
    public function setDonneurDOrdre(\Chronopost\StructType\DonneurDOrdre $donneurDOrdre = null)
    {
        $this->donneurDOrdre = $donneurDOrdre;
        return $this;
    }
    /**
     * Get adresseEnlevement value
     * @return \Chronopost\StructType\AdresseEnlevementV3|null
     */
    public function getAdresseEnlevement()
    {
        return $this->adresseEnlevement;
    }
    /**
     * Set adresseEnlevement value
     * @param \Chronopost\StructType\AdresseEnlevementV3 $adresseEnlevement
     * @return \Chronopost\StructType\CreerEnlevementNational
     */
    public function setAdresseEnlevement(\Chronopost\StructType\AdresseEnlevementV3 $adresseEnlevement = null)
    {
        $this->adresseEnlevement = $adresseEnlevement;
        return $this;
    }
    /**
     * Get particulartiesEsd value
     * @return \Chronopost\StructType\ParticularitesEsd|null
     */
    public function getParticulartiesEsd()
    {
        return $this->particulartiesEsd;
    }
    /**
     * Set particulartiesEsd value
     * @param \Chronopost\StructType\ParticularitesEsd $particulartiesEsd
     * @return \Chronopost\StructType\CreerEnlevementNational
     */
    public function setParticulartiesEsd(\Chronopost\StructType\ParticularitesEsd $particulartiesEsd = null)
    {
        $this->particulartiesEsd = $particulartiesEsd;
        return $this;
    }
    /**
     * Get referenceEsdClient value
     * @return string|null
     */
    public function getReferenceEsdClient()
    {
        return $this->referenceEsdClient;
    }
    /**
     * Set referenceEsdClient value
     * @param string $referenceEsdClient
     * @return \Chronopost\StructType\CreerEnlevementNational
     */
    public function setReferenceEsdClient($referenceEsdClient = null)
    {
        // validation for constraint: string
        if (!is_null($referenceEsdClient) && !is_string($referenceEsdClient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceEsdClient, true), gettype($referenceEsdClient)), __LINE__);
        }
        $this->referenceEsdClient = $referenceEsdClient;
        return $this;
    }
    /**
     * Get contenu value
     * @return string|null
     */
    public function getContenu()
    {
        return $this->contenu;
    }
    /**
     * Set contenu value
     * @param string $contenu
     * @return \Chronopost\StructType\CreerEnlevementNational
     */
    public function setContenu($contenu = null)
    {
        // validation for constraint: string
        if (!is_null($contenu) && !is_string($contenu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contenu, true), gettype($contenu)), __LINE__);
        }
        $this->contenu = $contenu;
        return $this;
    }
    /**
     * Get options value
     * @return \Chronopost\StructType\Options|null
     */
    public function getOptions()
    {
        return $this->options;
    }
    /**
     * Set options value
     * @param \Chronopost\StructType\Options $options
     * @return \Chronopost\StructType\CreerEnlevementNational
     */
    public function setOptions(\Chronopost\StructType\Options $options = null)
    {
        $this->options = $options;
        return $this;
    }
    /**
     * Get locale value
     * @return string|null
     */
    public function getLocale()
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Chronopost\StructType\CreerEnlevementNational
     */
    public function setLocale($locale = null)
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        return $this;
    }
}
