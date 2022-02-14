<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultParcelValue StructType
 * @subpackage Structs
 */
class ResultParcelValue extends AbstractStructBase
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
     * The DSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DSort;
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
     * The OSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OSort;
    /**
     * The reservationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reservationNumber;
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
     * Constructor method for resultParcelValue
     * @uses ResultParcelValue::setCodeDepot()
     * @uses ResultParcelValue::setCodeService()
     * @uses ResultParcelValue::setDSort()
     * @uses ResultParcelValue::setDestinationDepot()
     * @uses ResultParcelValue::setGeoPostCodeBarre()
     * @uses ResultParcelValue::setGeoPostNumeroColis()
     * @uses ResultParcelValue::setGroupingPriorityLabel()
     * @uses ResultParcelValue::setOSort()
     * @uses ResultParcelValue::setReservationNumber()
     * @uses ResultParcelValue::setServiceMark()
     * @uses ResultParcelValue::setServiceName()
     * @uses ResultParcelValue::setSignaletiqueProduit()
     * @uses ResultParcelValue::setSkybillNumber()
     * @param string $codeDepot
     * @param string $codeService
     * @param string $dSort
     * @param string $destinationDepot
     * @param string $geoPostCodeBarre
     * @param string $geoPostNumeroColis
     * @param string $groupingPriorityLabel
     * @param string $oSort
     * @param string $reservationNumber
     * @param string $serviceMark
     * @param string $serviceName
     * @param string $signaletiqueProduit
     * @param string $skybillNumber
     */
    public function __construct($codeDepot = null, $codeService = null, $dSort = null, $destinationDepot = null, $geoPostCodeBarre = null, $geoPostNumeroColis = null, $groupingPriorityLabel = null, $oSort = null, $reservationNumber = null, $serviceMark = null, $serviceName = null, $signaletiqueProduit = null, $skybillNumber = null)
    {
        $this
            ->setCodeDepot($codeDepot)
            ->setCodeService($codeService)
            ->setDSort($dSort)
            ->setDestinationDepot($destinationDepot)
            ->setGeoPostCodeBarre($geoPostCodeBarre)
            ->setGeoPostNumeroColis($geoPostNumeroColis)
            ->setGroupingPriorityLabel($groupingPriorityLabel)
            ->setOSort($oSort)
            ->setReservationNumber($reservationNumber)
            ->setServiceMark($serviceMark)
            ->setServiceName($serviceName)
            ->setSignaletiqueProduit($signaletiqueProduit)
            ->setSkybillNumber($skybillNumber);
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
     * @return \Chronopost\StructType\ResultParcelValue
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
     * @return \Chronopost\StructType\ResultParcelValue
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
     * Get DSort value
     * @return string|null
     */
    public function getDSort()
    {
        return $this->DSort;
    }
    /**
     * Set DSort value
     * @param string $dSort
     * @return \Chronopost\StructType\ResultParcelValue
     */
    public function setDSort($dSort = null)
    {
        // validation for constraint: string
        if (!is_null($dSort) && !is_string($dSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dSort, true), gettype($dSort)), __LINE__);
        }
        $this->DSort = $dSort;
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
     * @return \Chronopost\StructType\ResultParcelValue
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
     * @return \Chronopost\StructType\ResultParcelValue
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
     * @return \Chronopost\StructType\ResultParcelValue
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
     * @return \Chronopost\StructType\ResultParcelValue
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
     * Get OSort value
     * @return string|null
     */
    public function getOSort()
    {
        return $this->OSort;
    }
    /**
     * Set OSort value
     * @param string $oSort
     * @return \Chronopost\StructType\ResultParcelValue
     */
    public function setOSort($oSort = null)
    {
        // validation for constraint: string
        if (!is_null($oSort) && !is_string($oSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oSort, true), gettype($oSort)), __LINE__);
        }
        $this->OSort = $oSort;
        return $this;
    }
    /**
     * Get reservationNumber value
     * @return string|null
     */
    public function getReservationNumber()
    {
        return $this->reservationNumber;
    }
    /**
     * Set reservationNumber value
     * @param string $reservationNumber
     * @return \Chronopost\StructType\ResultParcelValue
     */
    public function setReservationNumber($reservationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($reservationNumber) && !is_string($reservationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationNumber, true), gettype($reservationNumber)), __LINE__);
        }
        $this->reservationNumber = $reservationNumber;
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
     * @return \Chronopost\StructType\ResultParcelValue
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
     * @return \Chronopost\StructType\ResultParcelValue
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
     * @return \Chronopost\StructType\ResultParcelValue
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
     * @return \Chronopost\StructType\ResultParcelValue
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
}
