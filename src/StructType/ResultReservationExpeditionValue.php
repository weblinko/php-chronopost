<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultReservationExpeditionValue StructType
 * @subpackage Structs
 */
class ResultReservationExpeditionValue extends AbstractStructBase
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
     * The ESDFullNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ESDFullNumber;
    /**
     * The ESDNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ESDNumber;
    /**
     * The errorCode
     * @var int
     */
    public $errorCode;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $errorMessage;
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
     * The pickupDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $pickupDate;
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
     * Constructor method for resultReservationExpeditionValue
     * @uses ResultReservationExpeditionValue::setCodeDepot()
     * @uses ResultReservationExpeditionValue::setCodeService()
     * @uses ResultReservationExpeditionValue::setDSort()
     * @uses ResultReservationExpeditionValue::setDestinationDepot()
     * @uses ResultReservationExpeditionValue::setESDFullNumber()
     * @uses ResultReservationExpeditionValue::setESDNumber()
     * @uses ResultReservationExpeditionValue::setErrorCode()
     * @uses ResultReservationExpeditionValue::setErrorMessage()
     * @uses ResultReservationExpeditionValue::setGeoPostCodeBarre()
     * @uses ResultReservationExpeditionValue::setGeoPostNumeroColis()
     * @uses ResultReservationExpeditionValue::setGroupingPriorityLabel()
     * @uses ResultReservationExpeditionValue::setOSort()
     * @uses ResultReservationExpeditionValue::setPickupDate()
     * @uses ResultReservationExpeditionValue::setReservationNumber()
     * @uses ResultReservationExpeditionValue::setServiceMark()
     * @uses ResultReservationExpeditionValue::setServiceName()
     * @uses ResultReservationExpeditionValue::setSignaletiqueProduit()
     * @uses ResultReservationExpeditionValue::setSkybillNumber()
     * @param string $codeDepot
     * @param string $codeService
     * @param string $dSort
     * @param string $destinationDepot
     * @param string $eSDFullNumber
     * @param string $eSDNumber
     * @param int $errorCode
     * @param string $errorMessage
     * @param string $geoPostCodeBarre
     * @param string $geoPostNumeroColis
     * @param string $groupingPriorityLabel
     * @param string $oSort
     * @param string $pickupDate
     * @param string $reservationNumber
     * @param string $serviceMark
     * @param string $serviceName
     * @param string $signaletiqueProduit
     * @param string $skybillNumber
     */
    public function __construct($codeDepot = null, $codeService = null, $dSort = null, $destinationDepot = null, $eSDFullNumber = null, $eSDNumber = null, $errorCode = null, $errorMessage = null, $geoPostCodeBarre = null, $geoPostNumeroColis = null, $groupingPriorityLabel = null, $oSort = null, $pickupDate = null, $reservationNumber = null, $serviceMark = null, $serviceName = null, $signaletiqueProduit = null, $skybillNumber = null)
    {
        $this
            ->setCodeDepot($codeDepot)
            ->setCodeService($codeService)
            ->setDSort($dSort)
            ->setDestinationDepot($destinationDepot)
            ->setESDFullNumber($eSDFullNumber)
            ->setESDNumber($eSDNumber)
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setGeoPostCodeBarre($geoPostCodeBarre)
            ->setGeoPostNumeroColis($geoPostNumeroColis)
            ->setGroupingPriorityLabel($groupingPriorityLabel)
            ->setOSort($oSort)
            ->setPickupDate($pickupDate)
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
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
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
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
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
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
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
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
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
     * Get ESDFullNumber value
     * @return string|null
     */
    public function getESDFullNumber()
    {
        return $this->ESDFullNumber;
    }
    /**
     * Set ESDFullNumber value
     * @param string $eSDFullNumber
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
     */
    public function setESDFullNumber($eSDFullNumber = null)
    {
        // validation for constraint: string
        if (!is_null($eSDFullNumber) && !is_string($eSDFullNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eSDFullNumber, true), gettype($eSDFullNumber)), __LINE__);
        }
        $this->ESDFullNumber = $eSDFullNumber;
        return $this;
    }
    /**
     * Get ESDNumber value
     * @return string|null
     */
    public function getESDNumber()
    {
        return $this->ESDNumber;
    }
    /**
     * Set ESDNumber value
     * @param string $eSDNumber
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
     */
    public function setESDNumber($eSDNumber = null)
    {
        // validation for constraint: string
        if (!is_null($eSDNumber) && !is_string($eSDNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eSDNumber, true), gettype($eSDNumber)), __LINE__);
        }
        $this->ESDNumber = $eSDNumber;
        return $this;
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
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
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
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
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
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
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
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
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
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
     * Get pickupDate value
     * @return string|null
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }
    /**
     * Set pickupDate value
     * @param string $pickupDate
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
     */
    public function setPickupDate($pickupDate = null)
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDate, true), gettype($pickupDate)), __LINE__);
        }
        $this->pickupDate = $pickupDate;
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
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
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
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
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
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
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
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
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
     * @return \Chronopost\StructType\ResultReservationExpeditionValue
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
