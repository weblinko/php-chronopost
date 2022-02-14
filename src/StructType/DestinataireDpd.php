<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for destinataireDpd StructType
 * @subpackage Structs
 */
class DestinataireDpd extends AbstractStructBase
{
    /**
     * The adresseDestinataire
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\AdresseDestinataire
     */
    public $adresseDestinataire;
    /**
     * The infoClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\InfoClient
     */
    public $infoClient;
    /**
     * The particularites
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\Particularites
     */
    public $particularites;
    /**
     * The particularitesColisDpd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ParticularitesColisDpd
     */
    public $particularitesColisDpd;
    /**
     * Constructor method for destinataireDpd
     * @uses DestinataireDpd::setAdresseDestinataire()
     * @uses DestinataireDpd::setInfoClient()
     * @uses DestinataireDpd::setParticularites()
     * @uses DestinataireDpd::setParticularitesColisDpd()
     * @param \Chronopost\StructType\AdresseDestinataire $adresseDestinataire
     * @param \Chronopost\StructType\InfoClient $infoClient
     * @param \Chronopost\StructType\Particularites $particularites
     * @param \Chronopost\StructType\ParticularitesColisDpd $particularitesColisDpd
     */
    public function __construct(\Chronopost\StructType\AdresseDestinataire $adresseDestinataire = null, \Chronopost\StructType\InfoClient $infoClient = null, \Chronopost\StructType\Particularites $particularites = null, \Chronopost\StructType\ParticularitesColisDpd $particularitesColisDpd = null)
    {
        $this
            ->setAdresseDestinataire($adresseDestinataire)
            ->setInfoClient($infoClient)
            ->setParticularites($particularites)
            ->setParticularitesColisDpd($particularitesColisDpd);
    }
    /**
     * Get adresseDestinataire value
     * @return \Chronopost\StructType\AdresseDestinataire|null
     */
    public function getAdresseDestinataire()
    {
        return $this->adresseDestinataire;
    }
    /**
     * Set adresseDestinataire value
     * @param \Chronopost\StructType\AdresseDestinataire $adresseDestinataire
     * @return \Chronopost\StructType\DestinataireDpd
     */
    public function setAdresseDestinataire(\Chronopost\StructType\AdresseDestinataire $adresseDestinataire = null)
    {
        $this->adresseDestinataire = $adresseDestinataire;
        return $this;
    }
    /**
     * Get infoClient value
     * @return \Chronopost\StructType\InfoClient|null
     */
    public function getInfoClient()
    {
        return $this->infoClient;
    }
    /**
     * Set infoClient value
     * @param \Chronopost\StructType\InfoClient $infoClient
     * @return \Chronopost\StructType\DestinataireDpd
     */
    public function setInfoClient(\Chronopost\StructType\InfoClient $infoClient = null)
    {
        $this->infoClient = $infoClient;
        return $this;
    }
    /**
     * Get particularites value
     * @return \Chronopost\StructType\Particularites|null
     */
    public function getParticularites()
    {
        return $this->particularites;
    }
    /**
     * Set particularites value
     * @param \Chronopost\StructType\Particularites $particularites
     * @return \Chronopost\StructType\DestinataireDpd
     */
    public function setParticularites(\Chronopost\StructType\Particularites $particularites = null)
    {
        $this->particularites = $particularites;
        return $this;
    }
    /**
     * Get particularitesColisDpd value
     * @return \Chronopost\StructType\ParticularitesColisDpd|null
     */
    public function getParticularitesColisDpd()
    {
        return $this->particularitesColisDpd;
    }
    /**
     * Set particularitesColisDpd value
     * @param \Chronopost\StructType\ParticularitesColisDpd $particularitesColisDpd
     * @return \Chronopost\StructType\DestinataireDpd
     */
    public function setParticularitesColisDpd(\Chronopost\StructType\ParticularitesColisDpd $particularitesColisDpd = null)
    {
        $this->particularitesColisDpd = $particularitesColisDpd;
        return $this;
    }
}
