<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for articleValue StructType
 * @subpackage Structs
 */
class ArticleValue extends AbstractStructBase
{
    /**
     * The content
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $content;
    /**
     * The contentInLanguage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $contentInLanguage;
    /**
     * The grossWeight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $grossWeight;
    /**
     * The hscode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $hscode;
    /**
     * The netWeight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $netWeight;
    /**
     * The origin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $origin;
    /**
     * The position
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $position;
    /**
     * The quantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $quantity;
    /**
     * The regime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $regime;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $value;
    /**
     * Constructor method for articleValue
     * @uses ArticleValue::setContent()
     * @uses ArticleValue::setContentInLanguage()
     * @uses ArticleValue::setGrossWeight()
     * @uses ArticleValue::setHscode()
     * @uses ArticleValue::setNetWeight()
     * @uses ArticleValue::setOrigin()
     * @uses ArticleValue::setPosition()
     * @uses ArticleValue::setQuantity()
     * @uses ArticleValue::setRegime()
     * @uses ArticleValue::setValue()
     * @param string $content
     * @param string $contentInLanguage
     * @param float $grossWeight
     * @param string $hscode
     * @param float $netWeight
     * @param string $origin
     * @param int $position
     * @param int $quantity
     * @param string $regime
     * @param float $value
     */
    public function __construct($content = null, $contentInLanguage = null, $grossWeight = null, $hscode = null, $netWeight = null, $origin = null, $position = null, $quantity = null, $regime = null, $value = null)
    {
        $this
            ->setContent($content)
            ->setContentInLanguage($contentInLanguage)
            ->setGrossWeight($grossWeight)
            ->setHscode($hscode)
            ->setNetWeight($netWeight)
            ->setOrigin($origin)
            ->setPosition($position)
            ->setQuantity($quantity)
            ->setRegime($regime)
            ->setValue($value);
    }
    /**
     * Get content value
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * Set content value
     * @param string $content
     * @return \Chronopost\StructType\ArticleValue
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content, true), gettype($content)), __LINE__);
        }
        $this->content = $content;
        return $this;
    }
    /**
     * Get contentInLanguage value
     * @return string|null
     */
    public function getContentInLanguage()
    {
        return $this->contentInLanguage;
    }
    /**
     * Set contentInLanguage value
     * @param string $contentInLanguage
     * @return \Chronopost\StructType\ArticleValue
     */
    public function setContentInLanguage($contentInLanguage = null)
    {
        // validation for constraint: string
        if (!is_null($contentInLanguage) && !is_string($contentInLanguage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentInLanguage, true), gettype($contentInLanguage)), __LINE__);
        }
        $this->contentInLanguage = $contentInLanguage;
        return $this;
    }
    /**
     * Get grossWeight value
     * @return float|null
     */
    public function getGrossWeight()
    {
        return $this->grossWeight;
    }
    /**
     * Set grossWeight value
     * @param float $grossWeight
     * @return \Chronopost\StructType\ArticleValue
     */
    public function setGrossWeight($grossWeight = null)
    {
        // validation for constraint: float
        if (!is_null($grossWeight) && !(is_float($grossWeight) || is_numeric($grossWeight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($grossWeight, true), gettype($grossWeight)), __LINE__);
        }
        $this->grossWeight = $grossWeight;
        return $this;
    }
    /**
     * Get hscode value
     * @return string|null
     */
    public function getHscode()
    {
        return $this->hscode;
    }
    /**
     * Set hscode value
     * @param string $hscode
     * @return \Chronopost\StructType\ArticleValue
     */
    public function setHscode($hscode = null)
    {
        // validation for constraint: string
        if (!is_null($hscode) && !is_string($hscode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hscode, true), gettype($hscode)), __LINE__);
        }
        $this->hscode = $hscode;
        return $this;
    }
    /**
     * Get netWeight value
     * @return float|null
     */
    public function getNetWeight()
    {
        return $this->netWeight;
    }
    /**
     * Set netWeight value
     * @param float $netWeight
     * @return \Chronopost\StructType\ArticleValue
     */
    public function setNetWeight($netWeight = null)
    {
        // validation for constraint: float
        if (!is_null($netWeight) && !(is_float($netWeight) || is_numeric($netWeight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($netWeight, true), gettype($netWeight)), __LINE__);
        }
        $this->netWeight = $netWeight;
        return $this;
    }
    /**
     * Get origin value
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->origin;
    }
    /**
     * Set origin value
     * @param string $origin
     * @return \Chronopost\StructType\ArticleValue
     */
    public function setOrigin($origin = null)
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        $this->origin = $origin;
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Chronopost\StructType\ArticleValue
     */
    public function setPosition($position = null)
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        return $this;
    }
    /**
     * Get quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Set quantity value
     * @param int $quantity
     * @return \Chronopost\StructType\ArticleValue
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * Get regime value
     * @return string|null
     */
    public function getRegime()
    {
        return $this->regime;
    }
    /**
     * Set regime value
     * @param string $regime
     * @return \Chronopost\StructType\ArticleValue
     */
    public function setRegime($regime = null)
    {
        // validation for constraint: string
        if (!is_null($regime) && !is_string($regime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regime, true), gettype($regime)), __LINE__);
        }
        $this->regime = $regime;
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
     * @return \Chronopost\StructType\ArticleValue
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
}
