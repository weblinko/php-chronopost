<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillParamsValue StructType
 * @subpackage Structs
 */
class SkybillParamsValue extends AbstractStructBase
{
    /**
     * The duplicata
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $duplicata;
    /**
     * The mode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mode;
    /**
     * Constructor method for skybillParamsValue
     * @uses SkybillParamsValue::setDuplicata()
     * @uses SkybillParamsValue::setMode()
     * @param string $duplicata
     * @param string $mode
     */
    public function __construct($duplicata = null, $mode = null)
    {
        $this
            ->setDuplicata($duplicata)
            ->setMode($mode);
    }
    /**
     * Get duplicata value
     * @return string|null
     */
    public function getDuplicata()
    {
        return $this->duplicata;
    }
    /**
     * Set duplicata value
     * @param string $duplicata
     * @return \Chronopost\StructType\SkybillParamsValue
     */
    public function setDuplicata($duplicata = null)
    {
        // validation for constraint: string
        if (!is_null($duplicata) && !is_string($duplicata)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($duplicata, true), gettype($duplicata)), __LINE__);
        }
        $this->duplicata = $duplicata;
        return $this;
    }
    /**
     * Get mode value
     * @return string|null
     */
    public function getMode()
    {
        return $this->mode;
    }
    /**
     * Set mode value
     * @param string $mode
     * @return \Chronopost\StructType\SkybillParamsValue
     */
    public function setMode($mode = null)
    {
        // validation for constraint: string
        if (!is_null($mode) && !is_string($mode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mode, true), gettype($mode)), __LINE__);
        }
        $this->mode = $mode;
        return $this;
    }
}
