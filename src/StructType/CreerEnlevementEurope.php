<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementEurope StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementEurope
 * @subpackage Structs
 */
class CreerEnlevementEurope extends AbstractStructBase
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
     * The destinatairesEsd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\DestinatairesDpd
     */
    public $destinatairesEsd;
    /**
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $locale;
    /**
     * Constructor method for creerEnlevementEurope
     * @uses CreerEnlevementEurope::setHeaderValue()
     * @uses CreerEnlevementEurope::setPassword()
     * @uses CreerEnlevementEurope::setDatePassage()
     * @uses CreerEnlevementEurope::setDonneurDOrdre()
     * @uses CreerEnlevementEurope::setAdresseEnlevement()
     * @uses CreerEnlevementEurope::setDestinatairesEsd()
     * @uses CreerEnlevementEurope::setLocale()
     * @param \Chronopost\StructType\HeaderValue $headerValue
     * @param string $password
     * @param string $datePassage
     * @param \Chronopost\StructType\DonneurDOrdre $donneurDOrdre
     * @param \Chronopost\StructType\AdresseEnlevementV3 $adresseEnlevement
     * @param \Chronopost\StructType\DestinatairesDpd $destinatairesEsd
     * @param string $locale
     */
    public function __construct(\Chronopost\StructType\HeaderValue $headerValue = null, $password = null, $datePassage = null, \Chronopost\StructType\DonneurDOrdre $donneurDOrdre = null, \Chronopost\StructType\AdresseEnlevementV3 $adresseEnlevement = null, \Chronopost\StructType\DestinatairesDpd $destinatairesEsd = null, $locale = null)
    {
        $this
            ->setHeaderValue($headerValue)
            ->setPassword($password)
            ->setDatePassage($datePassage)
            ->setDonneurDOrdre($donneurDOrdre)
            ->setAdresseEnlevement($adresseEnlevement)
            ->setDestinatairesEsd($destinatairesEsd)
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
     * @return \Chronopost\StructType\CreerEnlevementEurope
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
     * @return \Chronopost\StructType\CreerEnlevementEurope
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
     * @return \Chronopost\StructType\CreerEnlevementEurope
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
     * @return \Chronopost\StructType\CreerEnlevementEurope
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
     * @return \Chronopost\StructType\CreerEnlevementEurope
     */
    public function setAdresseEnlevement(\Chronopost\StructType\AdresseEnlevementV3 $adresseEnlevement = null)
    {
        $this->adresseEnlevement = $adresseEnlevement;
        return $this;
    }
    /**
     * Get destinatairesEsd value
     * @return \Chronopost\StructType\DestinatairesDpd|null
     */
    public function getDestinatairesEsd()
    {
        return $this->destinatairesEsd;
    }
    /**
     * Set destinatairesEsd value
     * @param \Chronopost\StructType\DestinatairesDpd $destinatairesEsd
     * @return \Chronopost\StructType\CreerEnlevementEurope
     */
    public function setDestinatairesEsd(\Chronopost\StructType\DestinatairesDpd $destinatairesEsd = null)
    {
        $this->destinatairesEsd = $destinatairesEsd;
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
     * @return \Chronopost\StructType\CreerEnlevementEurope
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
