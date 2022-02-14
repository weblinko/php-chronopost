<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for recipientValueV2 StructType
 * @subpackage Structs
 */
class RecipientValueV2 extends RecipientValue
{
    /**
     * The recipientType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $recipientType;
    /**
     * Constructor method for recipientValueV2
     * @uses RecipientValueV2::setRecipientType()
     * @param string $recipientType
     */
    public function __construct($recipientType = null)
    {
        $this
            ->setRecipientType($recipientType);
    }
    /**
     * Get recipientType value
     * @return string|null
     */
    public function getRecipientType()
    {
        return $this->recipientType;
    }
    /**
     * Set recipientType value
     * @param string $recipientType
     * @return \Chronopost\StructType\RecipientValueV2
     */
    public function setRecipientType($recipientType = null)
    {
        // validation for constraint: string
        if (!is_null($recipientType) && !is_string($recipientType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientType, true), gettype($recipientType)), __LINE__);
        }
        $this->recipientType = $recipientType;
        return $this;
    }
}
