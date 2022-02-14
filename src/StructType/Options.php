<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for options StructType
 * @subpackage Structs
 */
class Options extends AbstractStructBase
{
    /**
     * The aviserSurRealisation
     * @var bool
     */
    public $aviserSurRealisation;
    /**
     * The chezUnTiers
     * @var bool
     */
    public $chezUnTiers;
    /**
     * The envoyerLtParMail
     * @var bool
     */
    public $envoyerLtParMail;
    /**
     * The LTaImprimerParChronopost
     * @var bool
     */
    public $LTaImprimerParChronopost;
    /**
     * Constructor method for options
     * @uses Options::setAviserSurRealisation()
     * @uses Options::setChezUnTiers()
     * @uses Options::setEnvoyerLtParMail()
     * @uses Options::setLTaImprimerParChronopost()
     * @param bool $aviserSurRealisation
     * @param bool $chezUnTiers
     * @param bool $envoyerLtParMail
     * @param bool $lTaImprimerParChronopost
     */
    public function __construct($aviserSurRealisation = null, $chezUnTiers = null, $envoyerLtParMail = null, $lTaImprimerParChronopost = null)
    {
        $this
            ->setAviserSurRealisation($aviserSurRealisation)
            ->setChezUnTiers($chezUnTiers)
            ->setEnvoyerLtParMail($envoyerLtParMail)
            ->setLTaImprimerParChronopost($lTaImprimerParChronopost);
    }
    /**
     * Get aviserSurRealisation value
     * @return bool|null
     */
    public function getAviserSurRealisation()
    {
        return $this->aviserSurRealisation;
    }
    /**
     * Set aviserSurRealisation value
     * @param bool $aviserSurRealisation
     * @return \Chronopost\StructType\Options
     */
    public function setAviserSurRealisation($aviserSurRealisation = null)
    {
        // validation for constraint: boolean
        if (!is_null($aviserSurRealisation) && !is_bool($aviserSurRealisation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($aviserSurRealisation, true), gettype($aviserSurRealisation)), __LINE__);
        }
        $this->aviserSurRealisation = $aviserSurRealisation;
        return $this;
    }
    /**
     * Get chezUnTiers value
     * @return bool|null
     */
    public function getChezUnTiers()
    {
        return $this->chezUnTiers;
    }
    /**
     * Set chezUnTiers value
     * @param bool $chezUnTiers
     * @return \Chronopost\StructType\Options
     */
    public function setChezUnTiers($chezUnTiers = null)
    {
        // validation for constraint: boolean
        if (!is_null($chezUnTiers) && !is_bool($chezUnTiers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($chezUnTiers, true), gettype($chezUnTiers)), __LINE__);
        }
        $this->chezUnTiers = $chezUnTiers;
        return $this;
    }
    /**
     * Get envoyerLtParMail value
     * @return bool|null
     */
    public function getEnvoyerLtParMail()
    {
        return $this->envoyerLtParMail;
    }
    /**
     * Set envoyerLtParMail value
     * @param bool $envoyerLtParMail
     * @return \Chronopost\StructType\Options
     */
    public function setEnvoyerLtParMail($envoyerLtParMail = null)
    {
        // validation for constraint: boolean
        if (!is_null($envoyerLtParMail) && !is_bool($envoyerLtParMail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($envoyerLtParMail, true), gettype($envoyerLtParMail)), __LINE__);
        }
        $this->envoyerLtParMail = $envoyerLtParMail;
        return $this;
    }
    /**
     * Get LTaImprimerParChronopost value
     * @return bool|null
     */
    public function getLTaImprimerParChronopost()
    {
        return $this->LTaImprimerParChronopost;
    }
    /**
     * Set LTaImprimerParChronopost value
     * @param bool $lTaImprimerParChronopost
     * @return \Chronopost\StructType\Options
     */
    public function setLTaImprimerParChronopost($lTaImprimerParChronopost = null)
    {
        // validation for constraint: boolean
        if (!is_null($lTaImprimerParChronopost) && !is_bool($lTaImprimerParChronopost)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lTaImprimerParChronopost, true), gettype($lTaImprimerParChronopost)), __LINE__);
        }
        $this->LTaImprimerParChronopost = $lTaImprimerParChronopost;
        return $this;
    }
}
