<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultMultiParcelValue StructType
 * @subpackage Structs
 */
class ResultMultiParcelValue extends AbstractStructBase
{
    /**
     * The asCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $asCode;
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
     * The pdfEtiquette
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pdfEtiquette;
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
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $skybillNumber;
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
     * Constructor method for resultMultiParcelValue
     * @uses ResultMultiParcelValue::setAsCode()
     * @uses ResultMultiParcelValue::setCodeDepot()
     * @uses ResultMultiParcelValue::setCodeService()
     * @uses ResultMultiParcelValue::setDestinationDepot()
     * @uses ResultMultiParcelValue::setGeoPostCodeBarre()
     * @uses ResultMultiParcelValue::setGeoPostNumeroColis()
     * @uses ResultMultiParcelValue::setGroupingPriorityLabel()
     * @uses ResultMultiParcelValue::setPdfEtiquette()
     * @uses ResultMultiParcelValue::setServiceMark()
     * @uses ResultMultiParcelValue::setServiceName()
     * @uses ResultMultiParcelValue::setSignaletiqueProduit()
     * @uses ResultMultiParcelValue::setSkybillNumber()
     * @uses ResultMultiParcelValue::setDSort()
     * @uses ResultMultiParcelValue::setOSort()
     * @param string $asCode
     * @param string $codeDepot
     * @param string $codeService
     * @param string $destinationDepot
     * @param string $geoPostCodeBarre
     * @param string $geoPostNumeroColis
     * @param string $groupingPriorityLabel
     * @param string $pdfEtiquette
     * @param string $serviceMark
     * @param string $serviceName
     * @param string $signaletiqueProduit
     * @param string $skybillNumber
     * @param string $dSort
     * @param string $oSort
     */
    public function __construct($asCode = null, $codeDepot = null, $codeService = null, $destinationDepot = null, $geoPostCodeBarre = null, $geoPostNumeroColis = null, $groupingPriorityLabel = null, $pdfEtiquette = null, $serviceMark = null, $serviceName = null, $signaletiqueProduit = null, $skybillNumber = null, $dSort = null, $oSort = null)
    {
        $this
            ->setAsCode($asCode)
            ->setCodeDepot($codeDepot)
            ->setCodeService($codeService)
            ->setDestinationDepot($destinationDepot)
            ->setGeoPostCodeBarre($geoPostCodeBarre)
            ->setGeoPostNumeroColis($geoPostNumeroColis)
            ->setGroupingPriorityLabel($groupingPriorityLabel)
            ->setPdfEtiquette($pdfEtiquette)
            ->setServiceMark($serviceMark)
            ->setServiceName($serviceName)
            ->setSignaletiqueProduit($signaletiqueProduit)
            ->setSkybillNumber($skybillNumber)
            ->setDSort($dSort)
            ->setOSort($oSort);
    }
    /**
     * Get asCode value
     * @return string|null
     */
    public function getAsCode()
    {
        return $this->asCode;
    }
    /**
     * Set asCode value
     * @param string $asCode
     * @return \Chronopost\StructType\ResultMultiParcelValue
     */
    public function setAsCode($asCode = null)
    {
        // validation for constraint: string
        if (!is_null($asCode) && !is_string($asCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($asCode, true), gettype($asCode)), __LINE__);
        }
        $this->asCode = $asCode;
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
     * @return \Chronopost\StructType\ResultMultiParcelValue
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
     * @return \Chronopost\StructType\ResultMultiParcelValue
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
     * @return \Chronopost\StructType\ResultMultiParcelValue
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
     * @return \Chronopost\StructType\ResultMultiParcelValue
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
     * @return \Chronopost\StructType\ResultMultiParcelValue
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
     * @return \Chronopost\StructType\ResultMultiParcelValue
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
     * Get pdfEtiquette value
     * @return string|null
     */
    public function getPdfEtiquette()
    {
        return $this->pdfEtiquette;
    }
    /**
     * Set pdfEtiquette value
     * @param string $pdfEtiquette
     * @return \Chronopost\StructType\ResultMultiParcelValue
     */
    public function setPdfEtiquette($pdfEtiquette = null)
    {
        // validation for constraint: string
        if (!is_null($pdfEtiquette) && !is_string($pdfEtiquette)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pdfEtiquette, true), gettype($pdfEtiquette)), __LINE__);
        }
        $this->pdfEtiquette = $pdfEtiquette;
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
     * @return \Chronopost\StructType\ResultMultiParcelValue
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
     * @return \Chronopost\StructType\ResultMultiParcelValue
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
     * @return \Chronopost\StructType\ResultMultiParcelValue
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
     * Get skybillNumber value
     * @return string|null
     */
    public function getSkybillNumber()
    {
        return $this->skybillNumber;
    }
    /**
     * Set skybillNumber value
     * @param string $skybillNumber
     * @return \Chronopost\StructType\ResultMultiParcelValue
     */
    public function setSkybillNumber($skybillNumber = null)
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;
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
     * @return \Chronopost\StructType\ResultMultiParcelValue
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
     * @return \Chronopost\StructType\ResultMultiParcelValue
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
