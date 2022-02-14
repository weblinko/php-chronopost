<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillWithDimensionsValueV3 StructType
 * @subpackage Structs
 */
class SkybillWithDimensionsValueV3 extends SkybillWithDimensionsValueV2
{
    /**
     * The subAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $subAccount;
    /**
     * The toTheOrderOf
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $toTheOrderOf;
    /**
     * Constructor method for skybillWithDimensionsValueV3
     * @uses SkybillWithDimensionsValueV3::setSubAccount()
     * @uses SkybillWithDimensionsValueV3::setToTheOrderOf()
     * @param string $subAccount
     * @param string $toTheOrderOf
     */
    public function __construct($subAccount = null, $toTheOrderOf = null)
    {
        $this
            ->setSubAccount($subAccount)
            ->setToTheOrderOf($toTheOrderOf);
    }
    /**
     * Get subAccount value
     * @return string|null
     */
    public function getSubAccount()
    {
        return $this->subAccount;
    }
    /**
     * Set subAccount value
     * @param string $subAccount
     * @return \Chronopost\StructType\SkybillWithDimensionsValueV3
     */
    public function setSubAccount($subAccount = null)
    {
        // validation for constraint: string
        if (!is_null($subAccount) && !is_string($subAccount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subAccount, true), gettype($subAccount)), __LINE__);
        }
        $this->subAccount = $subAccount;
        return $this;
    }
    /**
     * Get toTheOrderOf value
     * @return string|null
     */
    public function getToTheOrderOf()
    {
        return $this->toTheOrderOf;
    }
    /**
     * Set toTheOrderOf value
     * @param string $toTheOrderOf
     * @return \Chronopost\StructType\SkybillWithDimensionsValueV3
     */
    public function setToTheOrderOf($toTheOrderOf = null)
    {
        // validation for constraint: string
        if (!is_null($toTheOrderOf) && !is_string($toTheOrderOf)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toTheOrderOf, true), gettype($toTheOrderOf)), __LINE__);
        }
        $this->toTheOrderOf = $toTheOrderOf;
        return $this;
    }
}
