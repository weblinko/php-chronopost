<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillValue StructType
 * @subpackage Structs
 */
class SkybillValue extends AbstractStructBase
{
    /**
     * The bulkNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $bulkNumber;
    /**
     * The codCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $codCurrency;
    /**
     * The codValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $codValue;
    /**
     * The content1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $content1;
    /**
     * The content2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $content2;
    /**
     * The content3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $content3;
    /**
     * The content4
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $content4;
    /**
     * The content5
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $content5;
    /**
     * The customsCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $customsCurrency;
    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $customsValue;
    /**
     * The evtCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $evtCode;
    /**
     * The insuredCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $insuredCurrency;
    /**
     * The insuredValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $insuredValue;
    /**
     * The latitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $latitude;
    /**
     * The longitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $longitude;
    /**
     * The masterSkybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $masterSkybillNumber;
    /**
     * The objectType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $objectType;
    /**
     * The portCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $portCurrency;
    /**
     * The portValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $portValue;
    /**
     * The productCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $productCode;
    /**
     * The qualite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $qualite;
    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $service;
    /**
     * The shipDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipDate;
    /**
     * The shipHour
     * @var int
     */
    public $shipHour;
    /**
     * The skybillRank
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $skybillRank;
    /**
     * The source
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $source;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $weight;
    /**
     * The weightUnit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $weightUnit;
    /**
     * Constructor method for skybillValue
     * @uses SkybillValue::setBulkNumber()
     * @uses SkybillValue::setCodCurrency()
     * @uses SkybillValue::setCodValue()
     * @uses SkybillValue::setContent1()
     * @uses SkybillValue::setContent2()
     * @uses SkybillValue::setContent3()
     * @uses SkybillValue::setContent4()
     * @uses SkybillValue::setContent5()
     * @uses SkybillValue::setCustomsCurrency()
     * @uses SkybillValue::setCustomsValue()
     * @uses SkybillValue::setEvtCode()
     * @uses SkybillValue::setInsuredCurrency()
     * @uses SkybillValue::setInsuredValue()
     * @uses SkybillValue::setLatitude()
     * @uses SkybillValue::setLongitude()
     * @uses SkybillValue::setMasterSkybillNumber()
     * @uses SkybillValue::setObjectType()
     * @uses SkybillValue::setPortCurrency()
     * @uses SkybillValue::setPortValue()
     * @uses SkybillValue::setProductCode()
     * @uses SkybillValue::setQualite()
     * @uses SkybillValue::setService()
     * @uses SkybillValue::setShipDate()
     * @uses SkybillValue::setShipHour()
     * @uses SkybillValue::setSkybillRank()
     * @uses SkybillValue::setSource()
     * @uses SkybillValue::setWeight()
     * @uses SkybillValue::setWeightUnit()
     * @param string $bulkNumber
     * @param string $codCurrency
     * @param float $codValue
     * @param string $content1
     * @param string $content2
     * @param string $content3
     * @param string $content4
     * @param string $content5
     * @param string $customsCurrency
     * @param float $customsValue
     * @param string $evtCode
     * @param string $insuredCurrency
     * @param float $insuredValue
     * @param string $latitude
     * @param string $longitude
     * @param string $masterSkybillNumber
     * @param string $objectType
     * @param string $portCurrency
     * @param float $portValue
     * @param string $productCode
     * @param string $qualite
     * @param string $service
     * @param string $shipDate
     * @param int $shipHour
     * @param string $skybillRank
     * @param string $source
     * @param float $weight
     * @param string $weightUnit
     */
    public function __construct($bulkNumber = null, $codCurrency = null, $codValue = null, $content1 = null, $content2 = null, $content3 = null, $content4 = null, $content5 = null, $customsCurrency = null, $customsValue = null, $evtCode = null, $insuredCurrency = null, $insuredValue = null, $latitude = null, $longitude = null, $masterSkybillNumber = null, $objectType = null, $portCurrency = null, $portValue = null, $productCode = null, $qualite = null, $service = null, $shipDate = null, $shipHour = null, $skybillRank = null, $source = null, $weight = null, $weightUnit = null)
    {
        $this
            ->setBulkNumber($bulkNumber)
            ->setCodCurrency($codCurrency)
            ->setCodValue($codValue)
            ->setContent1($content1)
            ->setContent2($content2)
            ->setContent3($content3)
            ->setContent4($content4)
            ->setContent5($content5)
            ->setCustomsCurrency($customsCurrency)
            ->setCustomsValue($customsValue)
            ->setEvtCode($evtCode)
            ->setInsuredCurrency($insuredCurrency)
            ->setInsuredValue($insuredValue)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setMasterSkybillNumber($masterSkybillNumber)
            ->setObjectType($objectType)
            ->setPortCurrency($portCurrency)
            ->setPortValue($portValue)
            ->setProductCode($productCode)
            ->setQualite($qualite)
            ->setService($service)
            ->setShipDate($shipDate)
            ->setShipHour($shipHour)
            ->setSkybillRank($skybillRank)
            ->setSource($source)
            ->setWeight($weight)
            ->setWeightUnit($weightUnit);
    }
    /**
     * Get bulkNumber value
     * @return string|null
     */
    public function getBulkNumber()
    {
        return $this->bulkNumber;
    }
    /**
     * Set bulkNumber value
     * @param string $bulkNumber
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setBulkNumber($bulkNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bulkNumber) && !is_string($bulkNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bulkNumber, true), gettype($bulkNumber)), __LINE__);
        }
        $this->bulkNumber = $bulkNumber;
        return $this;
    }
    /**
     * Get codCurrency value
     * @return string|null
     */
    public function getCodCurrency()
    {
        return $this->codCurrency;
    }
    /**
     * Set codCurrency value
     * @param string $codCurrency
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setCodCurrency($codCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($codCurrency) && !is_string($codCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codCurrency, true), gettype($codCurrency)), __LINE__);
        }
        $this->codCurrency = $codCurrency;
        return $this;
    }
    /**
     * Get codValue value
     * @return float|null
     */
    public function getCodValue()
    {
        return $this->codValue;
    }
    /**
     * Set codValue value
     * @param float $codValue
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setCodValue($codValue = null)
    {
        // validation for constraint: float
        if (!is_null($codValue) && !(is_float($codValue) || is_numeric($codValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($codValue, true), gettype($codValue)), __LINE__);
        }
        $this->codValue = $codValue;
        return $this;
    }
    /**
     * Get content1 value
     * @return string|null
     */
    public function getContent1()
    {
        return $this->content1;
    }
    /**
     * Set content1 value
     * @param string $content1
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setContent1($content1 = null)
    {
        // validation for constraint: string
        if (!is_null($content1) && !is_string($content1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content1, true), gettype($content1)), __LINE__);
        }
        $this->content1 = $content1;
        return $this;
    }
    /**
     * Get content2 value
     * @return string|null
     */
    public function getContent2()
    {
        return $this->content2;
    }
    /**
     * Set content2 value
     * @param string $content2
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setContent2($content2 = null)
    {
        // validation for constraint: string
        if (!is_null($content2) && !is_string($content2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content2, true), gettype($content2)), __LINE__);
        }
        $this->content2 = $content2;
        return $this;
    }
    /**
     * Get content3 value
     * @return string|null
     */
    public function getContent3()
    {
        return $this->content3;
    }
    /**
     * Set content3 value
     * @param string $content3
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setContent3($content3 = null)
    {
        // validation for constraint: string
        if (!is_null($content3) && !is_string($content3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content3, true), gettype($content3)), __LINE__);
        }
        $this->content3 = $content3;
        return $this;
    }
    /**
     * Get content4 value
     * @return string|null
     */
    public function getContent4()
    {
        return $this->content4;
    }
    /**
     * Set content4 value
     * @param string $content4
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setContent4($content4 = null)
    {
        // validation for constraint: string
        if (!is_null($content4) && !is_string($content4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content4, true), gettype($content4)), __LINE__);
        }
        $this->content4 = $content4;
        return $this;
    }
    /**
     * Get content5 value
     * @return string|null
     */
    public function getContent5()
    {
        return $this->content5;
    }
    /**
     * Set content5 value
     * @param string $content5
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setContent5($content5 = null)
    {
        // validation for constraint: string
        if (!is_null($content5) && !is_string($content5)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content5, true), gettype($content5)), __LINE__);
        }
        $this->content5 = $content5;
        return $this;
    }
    /**
     * Get customsCurrency value
     * @return string|null
     */
    public function getCustomsCurrency()
    {
        return $this->customsCurrency;
    }
    /**
     * Set customsCurrency value
     * @param string $customsCurrency
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setCustomsCurrency($customsCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($customsCurrency) && !is_string($customsCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customsCurrency, true), gettype($customsCurrency)), __LINE__);
        }
        $this->customsCurrency = $customsCurrency;
        return $this;
    }
    /**
     * Get customsValue value
     * @return float|null
     */
    public function getCustomsValue()
    {
        return $this->customsValue;
    }
    /**
     * Set customsValue value
     * @param float $customsValue
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setCustomsValue($customsValue = null)
    {
        // validation for constraint: float
        if (!is_null($customsValue) && !(is_float($customsValue) || is_numeric($customsValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($customsValue, true), gettype($customsValue)), __LINE__);
        }
        $this->customsValue = $customsValue;
        return $this;
    }
    /**
     * Get evtCode value
     * @return string|null
     */
    public function getEvtCode()
    {
        return $this->evtCode;
    }
    /**
     * Set evtCode value
     * @param string $evtCode
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setEvtCode($evtCode = null)
    {
        // validation for constraint: string
        if (!is_null($evtCode) && !is_string($evtCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($evtCode, true), gettype($evtCode)), __LINE__);
        }
        $this->evtCode = $evtCode;
        return $this;
    }
    /**
     * Get insuredCurrency value
     * @return string|null
     */
    public function getInsuredCurrency()
    {
        return $this->insuredCurrency;
    }
    /**
     * Set insuredCurrency value
     * @param string $insuredCurrency
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setInsuredCurrency($insuredCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($insuredCurrency) && !is_string($insuredCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuredCurrency, true), gettype($insuredCurrency)), __LINE__);
        }
        $this->insuredCurrency = $insuredCurrency;
        return $this;
    }
    /**
     * Get insuredValue value
     * @return float|null
     */
    public function getInsuredValue()
    {
        return $this->insuredValue;
    }
    /**
     * Set insuredValue value
     * @param float $insuredValue
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setInsuredValue($insuredValue = null)
    {
        // validation for constraint: float
        if (!is_null($insuredValue) && !(is_float($insuredValue) || is_numeric($insuredValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($insuredValue, true), gettype($insuredValue)), __LINE__);
        }
        $this->insuredValue = $insuredValue;
        return $this;
    }
    /**
     * Get latitude value
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    /**
     * Set latitude value
     * @param string $latitude
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setLatitude($latitude = null)
    {
        // validation for constraint: string
        if (!is_null($latitude) && !is_string($latitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        $this->latitude = $latitude;
        return $this;
    }
    /**
     * Get longitude value
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * Set longitude value
     * @param string $longitude
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setLongitude($longitude = null)
    {
        // validation for constraint: string
        if (!is_null($longitude) && !is_string($longitude)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        $this->longitude = $longitude;
        return $this;
    }
    /**
     * Get masterSkybillNumber value
     * @return string|null
     */
    public function getMasterSkybillNumber()
    {
        return $this->masterSkybillNumber;
    }
    /**
     * Set masterSkybillNumber value
     * @param string $masterSkybillNumber
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setMasterSkybillNumber($masterSkybillNumber = null)
    {
        // validation for constraint: string
        if (!is_null($masterSkybillNumber) && !is_string($masterSkybillNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($masterSkybillNumber, true), gettype($masterSkybillNumber)), __LINE__);
        }
        $this->masterSkybillNumber = $masterSkybillNumber;
        return $this;
    }
    /**
     * Get objectType value
     * @return string|null
     */
    public function getObjectType()
    {
        return $this->objectType;
    }
    /**
     * Set objectType value
     * @param string $objectType
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setObjectType($objectType = null)
    {
        // validation for constraint: string
        if (!is_null($objectType) && !is_string($objectType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectType, true), gettype($objectType)), __LINE__);
        }
        $this->objectType = $objectType;
        return $this;
    }
    /**
     * Get portCurrency value
     * @return string|null
     */
    public function getPortCurrency()
    {
        return $this->portCurrency;
    }
    /**
     * Set portCurrency value
     * @param string $portCurrency
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setPortCurrency($portCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($portCurrency) && !is_string($portCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portCurrency, true), gettype($portCurrency)), __LINE__);
        }
        $this->portCurrency = $portCurrency;
        return $this;
    }
    /**
     * Get portValue value
     * @return float|null
     */
    public function getPortValue()
    {
        return $this->portValue;
    }
    /**
     * Set portValue value
     * @param float $portValue
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setPortValue($portValue = null)
    {
        // validation for constraint: float
        if (!is_null($portValue) && !(is_float($portValue) || is_numeric($portValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($portValue, true), gettype($portValue)), __LINE__);
        }
        $this->portValue = $portValue;
        return $this;
    }
    /**
     * Get productCode value
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->productCode;
    }
    /**
     * Set productCode value
     * @param string $productCode
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setProductCode($productCode = null)
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;
        return $this;
    }
    /**
     * Get qualite value
     * @return string|null
     */
    public function getQualite()
    {
        return $this->qualite;
    }
    /**
     * Set qualite value
     * @param string $qualite
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setQualite($qualite = null)
    {
        // validation for constraint: string
        if (!is_null($qualite) && !is_string($qualite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qualite, true), gettype($qualite)), __LINE__);
        }
        $this->qualite = $qualite;
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
     * @return \Chronopost\StructType\SkybillValue
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
    /**
     * Get shipDate value
     * @return string|null
     */
    public function getShipDate()
    {
        return $this->shipDate;
    }
    /**
     * Set shipDate value
     * @param string $shipDate
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setShipDate($shipDate = null)
    {
        // validation for constraint: string
        if (!is_null($shipDate) && !is_string($shipDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipDate, true), gettype($shipDate)), __LINE__);
        }
        $this->shipDate = $shipDate;
        return $this;
    }
    /**
     * Get shipHour value
     * @return int|null
     */
    public function getShipHour()
    {
        return $this->shipHour;
    }
    /**
     * Set shipHour value
     * @param int $shipHour
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setShipHour($shipHour = null)
    {
        // validation for constraint: int
        if (!is_null($shipHour) && !(is_int($shipHour) || ctype_digit($shipHour))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shipHour, true), gettype($shipHour)), __LINE__);
        }
        $this->shipHour = $shipHour;
        return $this;
    }
    /**
     * Get skybillRank value
     * @return string|null
     */
    public function getSkybillRank()
    {
        return $this->skybillRank;
    }
    /**
     * Set skybillRank value
     * @param string $skybillRank
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setSkybillRank($skybillRank = null)
    {
        // validation for constraint: string
        if (!is_null($skybillRank) && !is_string($skybillRank)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillRank, true), gettype($skybillRank)), __LINE__);
        }
        $this->skybillRank = $skybillRank;
        return $this;
    }
    /**
     * Get source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * Set source value
     * @param string $source
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setSource($source = null)
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source, true), gettype($source)), __LINE__);
        }
        $this->source = $source;
        return $this;
    }
    /**
     * Get weight value
     * @return float|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param float $weight
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        return $this;
    }
    /**
     * Get weightUnit value
     * @return string|null
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }
    /**
     * Set weightUnit value
     * @param string $weightUnit
     * @return \Chronopost\StructType\SkybillValue
     */
    public function setWeightUnit($weightUnit = null)
    {
        // validation for constraint: string
        if (!is_null($weightUnit) && !is_string($weightUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weightUnit, true), gettype($weightUnit)), __LINE__);
        }
        $this->weightUnit = $weightUnit;
        return $this;
    }
}
