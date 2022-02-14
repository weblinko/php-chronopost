<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for infoEnlevement StructType
 * @subpackage Structs
 */
class InfoEnlevement extends AbstractStructBase
{
    /**
     * The ancienNumeroESD
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ancienNumeroESD;
    /**
     * The codeBu
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codeBu;
    /**
     * The codeDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codeDepot;
    /**
     * The codePostal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codePostal;
    /**
     * The dateCreation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dateCreation;
    /**
     * The datePassage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $datePassage;
    /**
     * The idEnlevement
     * @var int
     */
    public $idEnlevement;
    /**
     * The numeroUniqueESD
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $numeroUniqueESD;
    /**
     * The refDestinataire
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $refDestinataire;
    /**
     * The refEsdClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $refEsdClient;
    /**
     * The ville
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ville;
    /**
     * Constructor method for infoEnlevement
     * @uses InfoEnlevement::setAncienNumeroESD()
     * @uses InfoEnlevement::setCodeBu()
     * @uses InfoEnlevement::setCodeDepot()
     * @uses InfoEnlevement::setCodePostal()
     * @uses InfoEnlevement::setDateCreation()
     * @uses InfoEnlevement::setDatePassage()
     * @uses InfoEnlevement::setIdEnlevement()
     * @uses InfoEnlevement::setNumeroUniqueESD()
     * @uses InfoEnlevement::setRefDestinataire()
     * @uses InfoEnlevement::setRefEsdClient()
     * @uses InfoEnlevement::setVille()
     * @param string $ancienNumeroESD
     * @param string $codeBu
     * @param string $codeDepot
     * @param string $codePostal
     * @param string $dateCreation
     * @param string $datePassage
     * @param int $idEnlevement
     * @param string $numeroUniqueESD
     * @param string $refDestinataire
     * @param string $refEsdClient
     * @param string $ville
     */
    public function __construct($ancienNumeroESD = null, $codeBu = null, $codeDepot = null, $codePostal = null, $dateCreation = null, $datePassage = null, $idEnlevement = null, $numeroUniqueESD = null, $refDestinataire = null, $refEsdClient = null, $ville = null)
    {
        $this
            ->setAncienNumeroESD($ancienNumeroESD)
            ->setCodeBu($codeBu)
            ->setCodeDepot($codeDepot)
            ->setCodePostal($codePostal)
            ->setDateCreation($dateCreation)
            ->setDatePassage($datePassage)
            ->setIdEnlevement($idEnlevement)
            ->setNumeroUniqueESD($numeroUniqueESD)
            ->setRefDestinataire($refDestinataire)
            ->setRefEsdClient($refEsdClient)
            ->setVille($ville);
    }
    /**
     * Get ancienNumeroESD value
     * @return string|null
     */
    public function getAncienNumeroESD()
    {
        return $this->ancienNumeroESD;
    }
    /**
     * Set ancienNumeroESD value
     * @param string $ancienNumeroESD
     * @return \Chronopost\StructType\InfoEnlevement
     */
    public function setAncienNumeroESD($ancienNumeroESD = null)
    {
        // validation for constraint: string
        if (!is_null($ancienNumeroESD) && !is_string($ancienNumeroESD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ancienNumeroESD, true), gettype($ancienNumeroESD)), __LINE__);
        }
        $this->ancienNumeroESD = $ancienNumeroESD;
        return $this;
    }
    /**
     * Get codeBu value
     * @return string|null
     */
    public function getCodeBu()
    {
        return $this->codeBu;
    }
    /**
     * Set codeBu value
     * @param string $codeBu
     * @return \Chronopost\StructType\InfoEnlevement
     */
    public function setCodeBu($codeBu = null)
    {
        // validation for constraint: string
        if (!is_null($codeBu) && !is_string($codeBu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeBu, true), gettype($codeBu)), __LINE__);
        }
        $this->codeBu = $codeBu;
        return $this;
    }
    /**
     * Get codeDepot value
     * @return string|null
     */
    public function getCodeDepot()
    {
        return $this->codeDepot;
    }
    /**
     * Set codeDepot value
     * @param string $codeDepot
     * @return \Chronopost\StructType\InfoEnlevement
     */
    public function setCodeDepot($codeDepot = null)
    {
        // validation for constraint: string
        if (!is_null($codeDepot) && !is_string($codeDepot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeDepot, true), gettype($codeDepot)), __LINE__);
        }
        $this->codeDepot = $codeDepot;
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
     * @return \Chronopost\StructType\InfoEnlevement
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
     * Get dateCreation value
     * @return string|null
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
    /**
     * Set dateCreation value
     * @param string $dateCreation
     * @return \Chronopost\StructType\InfoEnlevement
     */
    public function setDateCreation($dateCreation = null)
    {
        // validation for constraint: string
        if (!is_null($dateCreation) && !is_string($dateCreation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateCreation, true), gettype($dateCreation)), __LINE__);
        }
        $this->dateCreation = $dateCreation;
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
     * @return \Chronopost\StructType\InfoEnlevement
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
     * Get idEnlevement value
     * @return int|null
     */
    public function getIdEnlevement()
    {
        return $this->idEnlevement;
    }
    /**
     * Set idEnlevement value
     * @param int $idEnlevement
     * @return \Chronopost\StructType\InfoEnlevement
     */
    public function setIdEnlevement($idEnlevement = null)
    {
        // validation for constraint: int
        if (!is_null($idEnlevement) && !(is_int($idEnlevement) || ctype_digit($idEnlevement))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idEnlevement, true), gettype($idEnlevement)), __LINE__);
        }
        $this->idEnlevement = $idEnlevement;
        return $this;
    }
    /**
     * Get numeroUniqueESD value
     * @return string|null
     */
    public function getNumeroUniqueESD()
    {
        return $this->numeroUniqueESD;
    }
    /**
     * Set numeroUniqueESD value
     * @param string $numeroUniqueESD
     * @return \Chronopost\StructType\InfoEnlevement
     */
    public function setNumeroUniqueESD($numeroUniqueESD = null)
    {
        // validation for constraint: string
        if (!is_null($numeroUniqueESD) && !is_string($numeroUniqueESD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroUniqueESD, true), gettype($numeroUniqueESD)), __LINE__);
        }
        $this->numeroUniqueESD = $numeroUniqueESD;
        return $this;
    }
    /**
     * Get refDestinataire value
     * @return string|null
     */
    public function getRefDestinataire()
    {
        return $this->refDestinataire;
    }
    /**
     * Set refDestinataire value
     * @param string $refDestinataire
     * @return \Chronopost\StructType\InfoEnlevement
     */
    public function setRefDestinataire($refDestinataire = null)
    {
        // validation for constraint: string
        if (!is_null($refDestinataire) && !is_string($refDestinataire)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refDestinataire, true), gettype($refDestinataire)), __LINE__);
        }
        $this->refDestinataire = $refDestinataire;
        return $this;
    }
    /**
     * Get refEsdClient value
     * @return string|null
     */
    public function getRefEsdClient()
    {
        return $this->refEsdClient;
    }
    /**
     * Set refEsdClient value
     * @param string $refEsdClient
     * @return \Chronopost\StructType\InfoEnlevement
     */
    public function setRefEsdClient($refEsdClient = null)
    {
        // validation for constraint: string
        if (!is_null($refEsdClient) && !is_string($refEsdClient)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refEsdClient, true), gettype($refEsdClient)), __LINE__);
        }
        $this->refEsdClient = $refEsdClient;
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
     * @return \Chronopost\StructType\InfoEnlevement
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
