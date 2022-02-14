<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultReservationExpeditionValueV2 StructType
 * @subpackage Structs
 */
class ResultReservationExpeditionValueV2 extends ResultReservationExpeditionValue
{
    /**
     * The asCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $asCode;
    /**
     * Constructor method for resultReservationExpeditionValueV2
     * @uses ResultReservationExpeditionValueV2::setAsCode()
     * @param string $asCode
     */
    public function __construct($asCode = null)
    {
        $this
            ->setAsCode($asCode);
    }
    /**
     * Get asCode value
     * @return string|null
     */
    public function getAsCode()
    {
        return $this->asCode;
    }
    /**
     * Set asCode value
     * @param string $asCode
     * @return \Chronopost\StructType\ResultReservationExpeditionValueV2
     */
    public function setAsCode($asCode = null)
    {
        // validation for constraint: string
        if (!is_null($asCode) && !is_string($asCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($asCode, true), gettype($asCode)), __LINE__);
        }
        $this->asCode = $asCode;
        return $this;
    }
}
