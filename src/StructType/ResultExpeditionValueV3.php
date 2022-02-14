<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultExpeditionValueV3 StructType
 * @subpackage Structs
 */
class ResultExpeditionValueV3 extends ResultExpeditionValue
{
    /**
     * The codeDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codeDepot;
    /**
     * The codeService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codeService;
    /**
     * The destinationDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $destinationDepot;
    /**
     * The geoPostCodeBarre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $geoPostCodeBarre;
    /**
     * The geoPostNumeroColis
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $geoPostNumeroColis;
    /**
     * The groupingPriorityLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $groupingPriorityLabel;
    /**
     * The serviceMark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $serviceMark;
    /**
     * The serviceName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $serviceName;
    /**
     * The signaletiqueProduit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $signaletiqueProduit;
    /**
     * The dSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $dSort;
    /**
     * The oSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $oSort;
    /**
     * Constructor method for resultExpeditionValueV3
     * @uses ResultExpeditionValueV3::setCodeDepot()
     * @uses ResultExpeditionValueV3::setCodeService()
     * @uses ResultExpeditionValueV3::setDestinationDepot()
     * @uses ResultExpeditionValueV3::setGeoPostCodeBarre()
     * @uses ResultExpeditionValueV3::setGeoPostNumeroColis()
     * @uses ResultExpeditionValueV3::setGroupingPriorityLabel()
     * @uses ResultExpeditionValueV3::setServiceMark()
     * @uses ResultExpeditionValueV3::setServiceName()
     * @uses ResultExpeditionValueV3::setSignaletiqueProduit()
     * @uses ResultExpeditionValueV3::setDSort()
     * @uses ResultExpeditionValueV3::setOSort()
     * @param string $codeDepot
     * @param string $codeService
     * @param string $destinationDepot
     * @param string $geoPostCodeBarre
     * @param string $geoPostNumeroColis
     * @param string $groupingPriorityLabel
     * @param string $serviceMark
     * @param string $serviceName
     * @param string $signaletiqueProduit
     * @param string $dSort
     * @param string $oSort
     */
    public function __construct($codeDepot = null, $codeService = null, $destinationDepot = null, $geoPostCodeBarre = null, $geoPostNumeroColis = null, $groupingPriorityLabel = null, $serviceMark = null, $serviceName = null, $signaletiqueProduit = null, $dSort = null, $oSort = null)
    {
        $this
            ->setCodeDepot($codeDepot)
            ->setCodeService($codeService)
            ->setDestinationDepot($destinationDepot)
            ->setGeoPostCodeBarre($geoPostCodeBarre)
            ->setGeoPostNumeroColis($geoPostNumeroColis)
            ->setGroupingPriorityLabel($groupingPriorityLabel)
            ->setServiceMark($serviceMark)
            ->setServiceName($serviceName)
            ->setSignaletiqueProduit($signaletiqueProduit)
            ->setDSort($dSort)
            ->setOSort($oSort);
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
     * @return \Chronopost\StructType\ResultExpeditionValueV3
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
     * Get codeService value
     * @return string|null
     */
    public function getCodeService()
    {
        return $this->codeService;
    }
    /**
     * Set codeService value
     * @param string $codeService
     * @return \Chronopost\StructType\ResultExpeditionValueV3
     */
    public function setCodeService($codeService = null)
    {
        // validation for constraint: string
        if (!is_null($codeService) && !is_string($codeService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeService, true), gettype($codeService)), __LINE__);
        }
        $this->codeService = $codeService;
        return $this;
    }
    /**
     * Get destinationDepot value
     * @return string|null
     */
    public function getDestinationDepot()
    {
        return $this->destinationDepot;
    }
    /**
     * Set destinationDepot value
     * @param string $destinationDepot
     * @return \Chronopost\StructType\ResultExpeditionValueV3
     */
    public function setDestinationDepot($destinationDepot = null)
    {
        // validation for constraint: string
        if (!is_null($destinationDepot) && !is_string($destinationDepot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationDepot, true), gettype($destinationDepot)), __LINE__);
        }
        $this->destinationDepot = $destinationDepot;
        return $this;
    }
    /**
     * Get geoPostCodeBarre value
     * @return string|null
     */
    public function getGeoPostCodeBarre()
    {
        return $this->geoPostCodeBarre;
    }
    /**
     * Set geoPostCodeBarre value
     * @param string $geoPostCodeBarre
     * @return \Chronopost\StructType\ResultExpeditionValueV3
     */
    public function setGeoPostCodeBarre($geoPostCodeBarre = null)
    {
        // validation for constraint: string
        if (!is_null($geoPostCodeBarre) && !is_string($geoPostCodeBarre)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoPostCodeBarre, true), gettype($geoPostCodeBarre)), __LINE__);
        }
        $this->geoPostCodeBarre = $geoPostCodeBarre;
        return $this;
    }
    /**
     * Get geoPostNumeroColis value
     * @return string|null
     */
    public function getGeoPostNumeroColis()
    {
        return $this->geoPostNumeroColis;
    }
    /**
     * Set geoPostNumeroColis value
     * @param string $geoPostNumeroColis
     * @return \Chronopost\StructType\ResultExpeditionValueV3
     */
    public function setGeoPostNumeroColis($geoPostNumeroColis = null)
    {
        // validation for constraint: string
        if (!is_null($geoPostNumeroColis) && !is_string($geoPostNumeroColis)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoPostNumeroColis, true), gettype($geoPostNumeroColis)), __LINE__);
        }
        $this->geoPostNumeroColis = $geoPostNumeroColis;
        return $this;
    }
    /**
     * Get groupingPriorityLabel value
     * @return string|null
     */
    public function getGroupingPriorityLabel()
    {
        return $this->groupingPriorityLabel;
    }
    /**
     * Set groupingPriorityLabel value
     * @param string $groupingPriorityLabel
     * @return \Chronopost\StructType\ResultExpeditionValueV3
     */
    public function setGroupingPriorityLabel($groupingPriorityLabel = null)
    {
        // validation for constraint: string
        if (!is_null($groupingPriorityLabel) && !is_string($groupingPriorityLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupingPriorityLabel, true), gettype($groupingPriorityLabel)), __LINE__);
        }
        $this->groupingPriorityLabel = $groupingPriorityLabel;
        return $this;
    }
    /**
     * Get serviceMark value
     * @return string|null
     */
    public function getServiceMark()
    {
        return $this->serviceMark;
    }
    /**
     * Set serviceMark value
     * @param string $serviceMark
     * @return \Chronopost\StructType\ResultExpeditionValueV3
     */
    public function setServiceMark($serviceMark = null)
    {
        // validation for constraint: string
        if (!is_null($serviceMark) && !is_string($serviceMark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceMark, true), gettype($serviceMark)), __LINE__);
        }
        $this->serviceMark = $serviceMark;
        return $this;
    }
    /**
     * Get serviceName value
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }
    /**
     * Set serviceName value
     * @param string $serviceName
     * @return \Chronopost\StructType\ResultExpeditionValueV3
     */
    public function setServiceName($serviceName = null)
    {
        // validation for constraint: string
        if (!is_null($serviceName) && !is_string($serviceName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceName, true), gettype($serviceName)), __LINE__);
        }
        $this->serviceName = $serviceName;
        return $this;
    }
    /**
     * Get signaletiqueProduit value
     * @return string|null
     */
    public function getSignaletiqueProduit()
    {
        return $this->signaletiqueProduit;
    }
    /**
     * Set signaletiqueProduit value
     * @param string $signaletiqueProduit
     * @return \Chronopost\StructType\ResultExpeditionValueV3
     */
    public function setSignaletiqueProduit($signaletiqueProduit = null)
    {
        // validation for constraint: string
        if (!is_null($signaletiqueProduit) && !is_string($signaletiqueProduit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signaletiqueProduit, true), gettype($signaletiqueProduit)), __LINE__);
        }
        $this->signaletiqueProduit = $signaletiqueProduit;
        return $this;
    }
    /**
     * Get dSort value
     * @return string|null
     */
    public function getDSort()
    {
        return $this->dSort;
    }
    /**
     * Set dSort value
     * @param string $dSort
     * @return \Chronopost\StructType\ResultExpeditionValueV3
     */
    public function setDSort($dSort = null)
    {
        // validation for constraint: string
        if (!is_null($dSort) && !is_string($dSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dSort, true), gettype($dSort)), __LINE__);
        }
        $this->dSort = $dSort;
        return $this;
    }
    /**
     * Get oSort value
     * @return string|null
     */
    public function getOSort()
    {
        return $this->oSort;
    }
    /**
     * Set oSort value
     * @param string $oSort
     * @return \Chronopost\StructType\ResultExpeditionValueV3
     */
    public function setOSort($oSort = null)
    {
        // validation for constraint: string
        if (!is_null($oSort) && !is_string($oSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oSort, true), gettype($oSort)), __LINE__);
        }
        $this->oSort = $oSort;
        return $this;
    }
}
