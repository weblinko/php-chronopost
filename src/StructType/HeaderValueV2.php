<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for headerValueV2 StructType
 * @subpackage Structs
 */
class HeaderValueV2 extends HeaderValue
{
    /**
     * The iv4OrderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $iv4OrderId;
    /**
     * Constructor method for headerValueV2
     * @uses HeaderValueV2::setIv4OrderId()
     * @param string $iv4OrderId
     */
    public function __construct($iv4OrderId = null)
    {
        $this
            ->setIv4OrderId($iv4OrderId);
    }
    /**
     * Get iv4OrderId value
     * @return string|null
     */
    public function getIv4OrderId()
    {
        return $this->iv4OrderId;
    }
    /**
     * Set iv4OrderId value
     * @param string $iv4OrderId
     * @return \Chronopost\StructType\HeaderValueV2
     */
    public function setIv4OrderId($iv4OrderId = null)
    {
        // validation for constraint: string
        if (!is_null($iv4OrderId) && !is_string($iv4OrderId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iv4OrderId, true), gettype($iv4OrderId)), __LINE__);
        }
        $this->iv4OrderId = $iv4OrderId;
        return $this;
    }
}
