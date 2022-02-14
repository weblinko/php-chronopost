<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for infoClient StructType
 * @subpackage Structs
 */
class InfoClient extends AbstractStructBase
{
    /**
     * The contenu
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $contenu;
    /**
     * The devise
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $devise;
    /**
     * The montant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $montant;
    /**
     * The refEsdClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $refEsdClient;
    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $service;
    /**
     * Constructor method for infoClient
     * @uses InfoClient::setContenu()
     * @uses InfoClient::setDevise()
     * @uses InfoClient::setMontant()
     * @uses InfoClient::setRefEsdClient()
     * @uses InfoClient::setService()
     * @param string $contenu
     * @param string $devise
     * @param float $montant
     * @param string $refEsdClient
     * @param string $service
     */
    public function __construct($contenu = null, $devise = null, $montant = null, $refEsdClient = null, $service = null)
    {
        $this
            ->setContenu($contenu)
            ->setDevise($devise)
            ->setMontant($montant)
            ->setRefEsdClient($refEsdClient)
            ->setService($service);
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
     * @return \Chronopost\StructType\InfoClient
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
     * Get devise value
     * @return string|null
     */
    public function getDevise()
    {
        return $this->devise;
    }
    /**
     * Set devise value
     * @param string $devise
     * @return \Chronopost\StructType\InfoClient
     */
    public function setDevise($devise = null)
    {
        // validation for constraint: string
        if (!is_null($devise) && !is_string($devise)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($devise, true), gettype($devise)), __LINE__);
        }
        $this->devise = $devise;
        return $this;
    }
    /**
     * Get montant value
     * @return float|null
     */
    public function getMontant()
    {
        return $this->montant;
    }
    /**
     * Set montant value
     * @param float $montant
     * @return \Chronopost\StructType\InfoClient
     */
    public function setMontant($montant = null)
    {
        // validation for constraint: float
        if (!is_null($montant) && !(is_float($montant) || is_numeric($montant))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($montant, true), gettype($montant)), __LINE__);
        }
        $this->montant = $montant;
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
     * @return \Chronopost\StructType\InfoClient
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
     * @return \Chronopost\StructType\InfoClient
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
}
