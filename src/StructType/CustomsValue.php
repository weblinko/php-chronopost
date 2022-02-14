<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for customsValue StructType
 * @subpackage Structs
 */
class CustomsValue extends AbstractStructBase
{
    /**
     * The articlesValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Chronopost\StructType\ArticleValue[]
     */
    public $articlesValue;
    /**
     * The bagNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $bagNumber;
    /**
     * The clearanceCleared
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $clearanceCleared;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $currency;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $description;
    /**
     * The descriptionInLanguage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $descriptionInLanguage;
    /**
     * The eori
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eori;
    /**
     * The incoterm
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $incoterm;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $language;
    /**
     * The numberOfItems
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $numberOfItems;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $value;
    /**
     * The vatNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $vatNumber;
    /**
     * Constructor method for customsValue
     * @uses CustomsValue::setArticlesValue()
     * @uses CustomsValue::setBagNumber()
     * @uses CustomsValue::setClearanceCleared()
     * @uses CustomsValue::setCurrency()
     * @uses CustomsValue::setDescription()
     * @uses CustomsValue::setDescriptionInLanguage()
     * @uses CustomsValue::setEori()
     * @uses CustomsValue::setIncoterm()
     * @uses CustomsValue::setLanguage()
     * @uses CustomsValue::setNumberOfItems()
     * @uses CustomsValue::setValue()
     * @uses CustomsValue::setVatNumber()
     * @param \Chronopost\StructType\ArticleValue[] $articlesValue
     * @param string $bagNumber
     * @param string $clearanceCleared
     * @param string $currency
     * @param string $description
     * @param string $descriptionInLanguage
     * @param string $eori
     * @param string $incoterm
     * @param string $language
     * @param int $numberOfItems
     * @param float $value
     * @param string $vatNumber
     */
    public function __construct(array $articlesValue = array(), $bagNumber = null, $clearanceCleared = null, $currency = null, $description = null, $descriptionInLanguage = null, $eori = null, $incoterm = null, $language = null, $numberOfItems = null, $value = null, $vatNumber = null)
    {
        $this
            ->setArticlesValue($articlesValue)
            ->setBagNumber($bagNumber)
            ->setClearanceCleared($clearanceCleared)
            ->setCurrency($currency)
            ->setDescription($description)
            ->setDescriptionInLanguage($descriptionInLanguage)
            ->setEori($eori)
            ->setIncoterm($incoterm)
            ->setLanguage($language)
            ->setNumberOfItems($numberOfItems)
            ->setValue($value)
            ->setVatNumber($vatNumber);
    }
    /**
     * Get articlesValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Chronopost\StructType\ArticleValue[]|null
     */
    public function getArticlesValue()
    {
        return isset($this->articlesValue) ? $this->articlesValue : null;
    }
    /**
     * This method is responsible for validating the values passed to the setArticlesValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArticlesValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArticlesValueForArrayConstraintsFromSetArticlesValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $customsValueArticlesValueItem) {
            // validation for constraint: itemType
            if (!$customsValueArticlesValueItem instanceof \Chronopost\StructType\ArticleValue) {
                $invalidValues[] = is_object($customsValueArticlesValueItem) ? get_class($customsValueArticlesValueItem) : sprintf('%s(%s)', gettype($customsValueArticlesValueItem), var_export($customsValueArticlesValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The articlesValue property can only contain items of type \Chronopost\StructType\ArticleValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set articlesValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\ArticleValue[] $articlesValue
     * @return \Chronopost\StructType\CustomsValue
     */
    public function setArticlesValue(array $articlesValue = array())
    {
        // validation for constraint: array
        if ('' !== ($articlesValueArrayErrorMessage = self::validateArticlesValueForArrayConstraintsFromSetArticlesValue($articlesValue))) {
            throw new \InvalidArgumentException($articlesValueArrayErrorMessage, __LINE__);
        }
        if (is_null($articlesValue) || (is_array($articlesValue) && empty($articlesValue))) {
            unset($this->articlesValue);
        } else {
            $this->articlesValue = $articlesValue;
        }
        return $this;
    }
    /**
     * Add item to articlesValue value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\ArticleValue $item
     * @return \Chronopost\StructType\CustomsValue
     */
    public function addToArticlesValue(\Chronopost\StructType\ArticleValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\ArticleValue) {
            throw new \InvalidArgumentException(sprintf('The articlesValue property can only contain items of type \Chronopost\StructType\ArticleValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->articlesValue[] = $item;
        return $this;
    }
    /**
     * Get bagNumber value
     * @return string|null
     */
    public function getBagNumber()
    {
        return $this->bagNumber;
    }
    /**
     * Set bagNumber value
     * @param string $bagNumber
     * @return \Chronopost\StructType\CustomsValue
     */
    public function setBagNumber($bagNumber = null)
    {
        // validation for constraint: string
        if (!is_null($bagNumber) && !is_string($bagNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bagNumber, true), gettype($bagNumber)), __LINE__);
        }
        $this->bagNumber = $bagNumber;
        return $this;
    }
    /**
     * Get clearanceCleared value
     * @return string|null
     */
    public function getClearanceCleared()
    {
        return $this->clearanceCleared;
    }
    /**
     * Set clearanceCleared value
     * @param string $clearanceCleared
     * @return \Chronopost\StructType\CustomsValue
     */
    public function setClearanceCleared($clearanceCleared = null)
    {
        // validation for constraint: string
        if (!is_null($clearanceCleared) && !is_string($clearanceCleared)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clearanceCleared, true), gettype($clearanceCleared)), __LINE__);
        }
        $this->clearanceCleared = $clearanceCleared;
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Chronopost\StructType\CustomsValue
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Chronopost\StructType\CustomsValue
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        return $this;
    }
    /**
     * Get descriptionInLanguage value
     * @return string|null
     */
    public function getDescriptionInLanguage()
    {
        return $this->descriptionInLanguage;
    }
    /**
     * Set descriptionInLanguage value
     * @param string $descriptionInLanguage
     * @return \Chronopost\StructType\CustomsValue
     */
    public function setDescriptionInLanguage($descriptionInLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($descriptionInLanguage) && !is_string($descriptionInLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptionInLanguage, true), gettype($descriptionInLanguage)), __LINE__);
        }
        $this->descriptionInLanguage = $descriptionInLanguage;
        return $this;
    }
    /**
     * Get eori value
     * @return string|null
     */
    public function getEori()
    {
        return $this->eori;
    }
    /**
     * Set eori value
     * @param string $eori
     * @return \Chronopost\StructType\CustomsValue
     */
    public function setEori($eori = null)
    {
        // validation for constraint: string
        if (!is_null($eori) && !is_string($eori)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eori, true), gettype($eori)), __LINE__);
        }
        $this->eori = $eori;
        return $this;
    }
    /**
     * Get incoterm value
     * @return string|null
     */
    public function getIncoterm()
    {
        return $this->incoterm;
    }
    /**
     * Set incoterm value
     * @param string $incoterm
     * @return \Chronopost\StructType\CustomsValue
     */
    public function setIncoterm($incoterm = null)
    {
        // validation for constraint: string
        if (!is_null($incoterm) && !is_string($incoterm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incoterm, true), gettype($incoterm)), __LINE__);
        }
        $this->incoterm = $incoterm;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Chronopost\StructType\CustomsValue
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Get numberOfItems value
     * @return int|null
     */
    public function getNumberOfItems()
    {
        return $this->numberOfItems;
    }
    /**
     * Set numberOfItems value
     * @param int $numberOfItems
     * @return \Chronopost\StructType\CustomsValue
     */
    public function setNumberOfItems($numberOfItems = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfItems) && !(is_int($numberOfItems) || ctype_digit($numberOfItems))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfItems, true), gettype($numberOfItems)), __LINE__);
        }
        $this->numberOfItems = $numberOfItems;
        return $this;
    }
    /**
     * Get value value
     * @return float|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Chronopost\StructType\CustomsValue
     */
    public function setValue($value = null)
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        return $this;
    }
    /**
     * Get vatNumber value
     * @return string|null
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }
    /**
     * Set vatNumber value
     * @param string $vatNumber
     * @return \Chronopost\StructType\CustomsValue
     */
    public function setVatNumber($vatNumber = null)
    {
        // validation for constraint: string
        if (!is_null($vatNumber) && !is_string($vatNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatNumber, true), gettype($vatNumber)), __LINE__);
        }
        $this->vatNumber = $vatNumber;
        return $this;
    }
}
