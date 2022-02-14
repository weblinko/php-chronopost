<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for entry StructType
 * @subpackage Structs
 */
class Entry extends AbstractStructBase
{
    /**
     * The key
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $key;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $value;
    /**
     * Constructor method for entry
     * @uses Entry::setKey()
     * @uses Entry::setValue()
     * @param mixed $key
     * @param mixed $value
     */
    public function __construct($key = null, $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get key value
     * @return mixed|null
     */
    public function getKey()
    {
        return $this->key;
    }
    /**
     * Set key value
     * @param mixed $key
     * @return \Chronopost\StructType\Entry
     */
    public function setKey($key = null)
    {
        $this->key = $key;
        return $this;
    }
    /**
     * Get value value
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param mixed $value
     * @return \Chronopost\StructType\Entry
     */
    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }
}
