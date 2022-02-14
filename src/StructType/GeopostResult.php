<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geopostResult StructType
 * @subpackage Structs
 */
class GeopostResult extends AbstractStructBase
{
    /**
     * The barcodeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $barcodeId;
    /**
     * The barcodePostcode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $barcodePostcode;
    /**
     * The buAlphaString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $buAlphaString;
    /**
     * The buCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $buCode;
    /**
     * The CSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CSort;
    /**
     * The DCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DCountry;
    /**
     * The DDepot
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DDepot;
    /**
     * The DDepotCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DDepotCountry;
    /**
     * The DDepotStr
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DDepotStr;
    /**
     * The DSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DSort;
    /**
     * The groupingPriority
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $groupingPriority;
    /**
     * The networkCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $networkCode;
    /**
     * The OSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OSort;
    /**
     * The partnerCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $partnerCode;
    /**
     * The SSort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SSort;
    /**
     * The serviceMark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $serviceMark;
    /**
     * The serviceText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $serviceText;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $version;
    /**
     * Constructor method for geopostResult
     * @uses GeopostResult::setBarcodeId()
     * @uses GeopostResult::setBarcodePostcode()
     * @uses GeopostResult::setBuAlphaString()
     * @uses GeopostResult::setBuCode()
     * @uses GeopostResult::setCSort()
     * @uses GeopostResult::setDCountry()
     * @uses GeopostResult::setDDepot()
     * @uses GeopostResult::setDDepotCountry()
     * @uses GeopostResult::setDDepotStr()
     * @uses GeopostResult::setDSort()
     * @uses GeopostResult::setGroupingPriority()
     * @uses GeopostResult::setNetworkCode()
     * @uses GeopostResult::setOSort()
     * @uses GeopostResult::setPartnerCode()
     * @uses GeopostResult::setSSort()
     * @uses GeopostResult::setServiceMark()
     * @uses GeopostResult::setServiceText()
     * @uses GeopostResult::setVersion()
     * @param string $barcodeId
     * @param string $barcodePostcode
     * @param string $buAlphaString
     * @param string $buCode
     * @param string $cSort
     * @param string $dCountry
     * @param string $dDepot
     * @param string $dDepotCountry
     * @param string $dDepotStr
     * @param string $dSort
     * @param string $groupingPriority
     * @param string $networkCode
     * @param string $oSort
     * @param string $partnerCode
     * @param string $sSort
     * @param string $serviceMark
     * @param string $serviceText
     * @param string $version
     */
    public function __construct($barcodeId = null, $barcodePostcode = null, $buAlphaString = null, $buCode = null, $cSort = null, $dCountry = null, $dDepot = null, $dDepotCountry = null, $dDepotStr = null, $dSort = null, $groupingPriority = null, $networkCode = null, $oSort = null, $partnerCode = null, $sSort = null, $serviceMark = null, $serviceText = null, $version = null)
    {
        $this
            ->setBarcodeId($barcodeId)
            ->setBarcodePostcode($barcodePostcode)
            ->setBuAlphaString($buAlphaString)
            ->setBuCode($buCode)
            ->setCSort($cSort)
            ->setDCountry($dCountry)
            ->setDDepot($dDepot)
            ->setDDepotCountry($dDepotCountry)
            ->setDDepotStr($dDepotStr)
            ->setDSort($dSort)
            ->setGroupingPriority($groupingPriority)
            ->setNetworkCode($networkCode)
            ->setOSort($oSort)
            ->setPartnerCode($partnerCode)
            ->setSSort($sSort)
            ->setServiceMark($serviceMark)
            ->setServiceText($serviceText)
            ->setVersion($version);
    }
    /**
     * Get barcodeId value
     * @return string|null
     */
    public function getBarcodeId()
    {
        return $this->barcodeId;
    }
    /**
     * Set barcodeId value
     * @param string $barcodeId
     * @return \Chronopost\StructType\GeopostResult
     */
    public function setBarcodeId($barcodeId = null)
    {
        // validation for constraint: string
        if (!is_null($barcodeId) && !is_string($barcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeId, true), gettype($barcodeId)), __LINE__);
        }
        $this->barcodeId = $barcodeId;
        return $this;
    }
    /**
     * Get barcodePostcode value
     * @return string|null
     */
    public function getBarcodePostcode()
    {
        return $this->barcodePostcode;
    }
    /**
     * Set barcodePostcode value
     * @param string $barcodePostcode
     * @return \Chronopost\StructType\GeopostResult
     */
    public function setBarcodePostcode($barcodePostcode = null)
    {
        // validation for constraint: string
        if (!is_null($barcodePostcode) && !is_string($barcodePostcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodePostcode, true), gettype($barcodePostcode)), __LINE__);
        }
        $this->barcodePostcode = $barcodePostcode;
        return $this;
    }
    /**
     * Get buAlphaString value
     * @return string|null
     */
    public function getBuAlphaString()
    {
        return $this->buAlphaString;
    }
    /**
     * Set buAlphaString value
     * @param string $buAlphaString
     * @return \Chronopost\StructType\GeopostResult
     */
    public function setBuAlphaString($buAlphaString = null)
    {
        // validation for constraint: string
        if (!is_null($buAlphaString) && !is_string($buAlphaString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buAlphaString, true), gettype($buAlphaString)), __LINE__);
        }
        $this->buAlphaString = $buAlphaString;
        return $this;
    }
    /**
     * Get buCode value
     * @return string|null
     */
    public function getBuCode()
    {
        return $this->buCode;
    }
    /**
     * Set buCode value
     * @param string $buCode
     * @return \Chronopost\StructType\GeopostResult
     */
    public function setBuCode($buCode = null)
    {
        // validation for constraint: string
        if (!is_null($buCode) && !is_string($buCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buCode, true), gettype($buCode)), __LINE__);
        }
        $this->buCode = $buCode;
        return $this;
    }
    /**
     * Get CSort value
     * @return string|null
     */
    public function getCSort()
    {
        return $this->CSort;
    }
    /**
     * Set CSort value
     * @param string $cSort
     * @return \Chronopost\StructType\GeopostResult
     */
    public function setCSort($cSort = null)
    {
        // validation for constraint: string
        if (!is_null($cSort) && !is_string($cSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cSort, true), gettype($cSort)), __LINE__);
        }
        $this->CSort = $cSort;
        return $this;
    }
    /**
     * Get DCountry value
     * @return string|null
     */
    public function getDCountry()
    {
        return $this->DCountry;
    }
    /**
     * Set DCountry value
     * @param string $dCountry
     * @return \Chronopost\StructType\GeopostResult
     */
    public function setDCountry($dCountry = null)
    {
        // validation for constraint: string
        if (!is_null($dCountry) && !is_string($dCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dCountry, true), gettype($dCountry)), __LINE__);
        }
        $this->DCountry = $dCountry;
        return $this;
    }
    /**
     * Get DDepot value
     * @return string|null
     */
    public function getDDepot()
    {
        return $this->DDepot;
    }
    /**
     * Set DDepot value
     * @param string $dDepot
     * @return \Chronopost\StructType\GeopostResult
     */
    public function setDDepot($dDepot = null)
    {
        // validation for constraint: string
        if (!is_null($dDepot) && !is_string($dDepot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dDepot, true), gettype($dDepot)), __LINE__);
        }
        $this->DDepot = $dDepot;
        return $this;
    }
    /**
     * Get DDepotCountry value
     * @return string|null
     */
    public function getDDepotCountry()
    {
        return $this->DDepotCountry;
    }
    /**
     * Set DDepotCountry value
     * @param string $dDepotCountry
     * @return \Chronopost\StructType\GeopostResult
     */
    public function setDDepotCountry($dDepotCountry = null)
    {
        // validation for constraint: string
        if (!is_null($dDepotCountry) && !is_string($dDepotCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dDepotCountry, true), gettype($dDepotCountry)), __LINE__);
        }
        $this->DDepotCountry = $dDepotCountry;
        return $this;
    }
    /**
     * Get DDepotStr value
     * @return string|null
     */
    public function getDDepotStr()
    {
        return $this->DDepotStr;
    }
    /**
     * Set DDepotStr value
     * @param string $dDepotStr
     * @return \Chronopost\StructType\GeopostResult
     */
    public function setDDepotStr($dDepotStr = null)
    {
        // validation for constraint: string
        if (!is_null($dDepotStr) && !is_string($dDepotStr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dDepotStr, true), gettype($dDepotStr)), __LINE__);
        }
        $this->DDepotStr = $dDepotStr;
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
     * @return \Chronopost\StructType\GeopostResult
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
     * Get groupingPriority value
     * @return string|null
     */
    public function getGroupingPriority()
    {
        return $this->groupingPriority;
    }
    /**
     * Set groupingPriority value
     * @param string $groupingPriority
     * @return \Chronopost\StructType\GeopostResult
     */
    public function setGroupingPriority($groupingPriority = null)
    {
        // validation for constraint: string
        if (!is_null($groupingPriority) && !is_string($groupingPriority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupingPriority, true), gettype($groupingPriority)), __LINE__);
        }
        $this->groupingPriority = $groupingPriority;
        return $this;
    }
    /**
     * Get networkCode value
     * @return string|null
     */
    public function getNetworkCode()
    {
        return $this->networkCode;
    }
    /**
     * Set networkCode value
     * @param string $networkCode
     * @return \Chronopost\StructType\GeopostResult
     */
    public function setNetworkCode($networkCode = null)
    {
        // validation for constraint: string
        if (!is_null($networkCode) && !is_string($networkCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($networkCode, true), gettype($networkCode)), __LINE__);
        }
        $this->networkCode = $networkCode;
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
     * @return \Chronopost\StructType\GeopostResult
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
     * Get partnerCode value
     * @return string|null
     */
    public function getPartnerCode()
    {
        return $this->partnerCode;
    }
    /**
     * Set partnerCode value
     * @param string $partnerCode
     * @return \Chronopost\StructType\GeopostResult
     */
    public function setPartnerCode($partnerCode = null)
    {
        // validation for constraint: string
        if (!is_null($partnerCode) && !is_string($partnerCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerCode, true), gettype($partnerCode)), __LINE__);
        }
        $this->partnerCode = $partnerCode;
        return $this;
    }
    /**
     * Get SSort value
     * @return string|null
     */
    public function getSSort()
    {
        return $this->SSort;
    }
    /**
     * Set SSort value
     * @param string $sSort
     * @return \Chronopost\StructType\GeopostResult
     */
    public function setSSort($sSort = null)
    {
        // validation for constraint: string
        if (!is_null($sSort) && !is_string($sSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sSort, true), gettype($sSort)), __LINE__);
        }
        $this->SSort = $sSort;
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
     * @return \Chronopost\StructType\GeopostResult
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
     * Get serviceText value
     * @return string|null
     */
    public function getServiceText()
    {
        return $this->serviceText;
    }
    /**
     * Set serviceText value
     * @param string $serviceText
     * @return \Chronopost\StructType\GeopostResult
     */
    public function setServiceText($serviceText = null)
    {
        // validation for constraint: string
        if (!is_null($serviceText) && !is_string($serviceText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceText, true), gettype($serviceText)), __LINE__);
        }
        $this->serviceText = $serviceText;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Chronopost\StructType\GeopostResult
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
}
