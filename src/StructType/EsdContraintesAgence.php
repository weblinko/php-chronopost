<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for esdContraintesAgence StructType
 * @subpackage Structs
 */
class EsdContraintesAgence extends AbstractStructBase
{
    /**
     * The battement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $battement;
    /**
     * The battementEnHeure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $battementEnHeure;
    /**
     * The codeAgence
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codeAgence;
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
     * The hla
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $hla;
    /**
     * The hlp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $hlp;
    /**
     * The hppt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $hppt;
    /**
     * The nomAgence
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $nomAgence;
    /**
     * The raisonNonActivite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $raisonNonActivite;
    /**
     * The ville
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ville;
    /**
     * The zoneA
     * @var bool
     */
    public $zoneA;
    /**
     * Constructor method for esdContraintesAgence
     * @uses EsdContraintesAgence::setBattement()
     * @uses EsdContraintesAgence::setBattementEnHeure()
     * @uses EsdContraintesAgence::setCodeAgence()
     * @uses EsdContraintesAgence::setCodePays()
     * @uses EsdContraintesAgence::setCodePostal()
     * @uses EsdContraintesAgence::setHla()
     * @uses EsdContraintesAgence::setHlp()
     * @uses EsdContraintesAgence::setHppt()
     * @uses EsdContraintesAgence::setNomAgence()
     * @uses EsdContraintesAgence::setRaisonNonActivite()
     * @uses EsdContraintesAgence::setVille()
     * @uses EsdContraintesAgence::setZoneA()
     * @param int $battement
     * @param string $battementEnHeure
     * @param string $codeAgence
     * @param string $codePays
     * @param string $codePostal
     * @param string $hla
     * @param string $hlp
     * @param string $hppt
     * @param string $nomAgence
     * @param string $raisonNonActivite
     * @param string $ville
     * @param bool $zoneA
     */
    public function __construct($battement = null, $battementEnHeure = null, $codeAgence = null, $codePays = null, $codePostal = null, $hla = null, $hlp = null, $hppt = null, $nomAgence = null, $raisonNonActivite = null, $ville = null, $zoneA = null)
    {
        $this
            ->setBattement($battement)
            ->setBattementEnHeure($battementEnHeure)
            ->setCodeAgence($codeAgence)
            ->setCodePays($codePays)
            ->setCodePostal($codePostal)
            ->setHla($hla)
            ->setHlp($hlp)
            ->setHppt($hppt)
            ->setNomAgence($nomAgence)
            ->setRaisonNonActivite($raisonNonActivite)
            ->setVille($ville)
            ->setZoneA($zoneA);
    }
    /**
     * Get battement value
     * @return int|null
     */
    public function getBattement()
    {
        return $this->battement;
    }
    /**
     * Set battement value
     * @param int $battement
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setBattement($battement = null)
    {
        // validation for constraint: int
        if (!is_null($battement) && !(is_int($battement) || ctype_digit($battement))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($battement, true), gettype($battement)), __LINE__);
        }
        $this->battement = $battement;
        return $this;
    }
    /**
     * Get battementEnHeure value
     * @return string|null
     */
    public function getBattementEnHeure()
    {
        return $this->battementEnHeure;
    }
    /**
     * Set battementEnHeure value
     * @param string $battementEnHeure
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setBattementEnHeure($battementEnHeure = null)
    {
        // validation for constraint: string
        if (!is_null($battementEnHeure) && !is_string($battementEnHeure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($battementEnHeure, true), gettype($battementEnHeure)), __LINE__);
        }
        $this->battementEnHeure = $battementEnHeure;
        return $this;
    }
    /**
     * Get codeAgence value
     * @return string|null
     */
    public function getCodeAgence()
    {
        return $this->codeAgence;
    }
    /**
     * Set codeAgence value
     * @param string $codeAgence
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setCodeAgence($codeAgence = null)
    {
        // validation for constraint: string
        if (!is_null($codeAgence) && !is_string($codeAgence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeAgence, true), gettype($codeAgence)), __LINE__);
        }
        $this->codeAgence = $codeAgence;
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
     * @return \Chronopost\StructType\EsdContraintesAgence
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
     * @return \Chronopost\StructType\EsdContraintesAgence
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
     * Get hla value
     * @return string|null
     */
    public function getHla()
    {
        return $this->hla;
    }
    /**
     * Set hla value
     * @param string $hla
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setHla($hla = null)
    {
        // validation for constraint: string
        if (!is_null($hla) && !is_string($hla)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hla, true), gettype($hla)), __LINE__);
        }
        $this->hla = $hla;
        return $this;
    }
    /**
     * Get hlp value
     * @return string|null
     */
    public function getHlp()
    {
        return $this->hlp;
    }
    /**
     * Set hlp value
     * @param string $hlp
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setHlp($hlp = null)
    {
        // validation for constraint: string
        if (!is_null($hlp) && !is_string($hlp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hlp, true), gettype($hlp)), __LINE__);
        }
        $this->hlp = $hlp;
        return $this;
    }
    /**
     * Get hppt value
     * @return string|null
     */
    public function getHppt()
    {
        return $this->hppt;
    }
    /**
     * Set hppt value
     * @param string $hppt
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setHppt($hppt = null)
    {
        // validation for constraint: string
        if (!is_null($hppt) && !is_string($hppt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hppt, true), gettype($hppt)), __LINE__);
        }
        $this->hppt = $hppt;
        return $this;
    }
    /**
     * Get nomAgence value
     * @return string|null
     */
    public function getNomAgence()
    {
        return $this->nomAgence;
    }
    /**
     * Set nomAgence value
     * @param string $nomAgence
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setNomAgence($nomAgence = null)
    {
        // validation for constraint: string
        if (!is_null($nomAgence) && !is_string($nomAgence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nomAgence, true), gettype($nomAgence)), __LINE__);
        }
        $this->nomAgence = $nomAgence;
        return $this;
    }
    /**
     * Get raisonNonActivite value
     * @return string|null
     */
    public function getRaisonNonActivite()
    {
        return $this->raisonNonActivite;
    }
    /**
     * Set raisonNonActivite value
     * @param string $raisonNonActivite
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setRaisonNonActivite($raisonNonActivite = null)
    {
        // validation for constraint: string
        if (!is_null($raisonNonActivite) && !is_string($raisonNonActivite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($raisonNonActivite, true), gettype($raisonNonActivite)), __LINE__);
        }
        $this->raisonNonActivite = $raisonNonActivite;
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
     * @return \Chronopost\StructType\EsdContraintesAgence
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
     * Get zoneA value
     * @return bool|null
     */
    public function getZoneA()
    {
        return $this->zoneA;
    }
    /**
     * Set zoneA value
     * @param bool $zoneA
     * @return \Chronopost\StructType\EsdContraintesAgence
     */
    public function setZoneA($zoneA = null)
    {
        // validation for constraint: boolean
        if (!is_null($zoneA) && !is_bool($zoneA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zoneA, true), gettype($zoneA)), __LINE__);
        }
        $this->zoneA = $zoneA;
        return $this;
    }
}
