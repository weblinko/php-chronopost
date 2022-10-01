<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultTrackSkybillV2 StructType
 * @subpackage Structs
 */
class ResultTrackSkybillV2 extends AbstractStructBase
{
    /**
     * The errorCode
     * @var int
     */
    public $errorCode;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $errorMessage;
    /**
     * The listEventInfoComp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\ListEventInfoComps
     */
    public $listEventInfoComp;
    /**
     * Constructor method for resultTrackSkybillV2
     * @uses ResultTrackSkybillV2::setErrorCode()
     * @uses ResultTrackSkybillV2::setErrorMessage()
     * @uses ResultTrackSkybillV2::setListEventInfoComp()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \Chronopost\StructType\ListEventInfoComps $listEventInfoComp
     */
    public function __construct($errorCode = null, $errorMessage = null, \Chronopost\StructType\ListEventInfoComps $listEventInfoComp = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setListEventInfoComp($listEventInfoComp);
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \Chronopost\StructType\ResultTrackSkybillV2
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \Chronopost\StructType\ResultTrackSkybillV2
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * Get listEventInfoComp value
     * @return \Chronopost\StructType\ListEventInfoComps|null
     */
    public function getListEventInfoComp()
    {
        return $this->listEventInfoComp;
    }
    /**
     * Set listEventInfoComp value
     * @param \Chronopost\StructType\ListEventInfoComps $listEventInfoComp
     * @return \Chronopost\StructType\ResultTrackSkybillV2
     */
    public function setListEventInfoComp(\Chronopost\StructType\ListEventInfoComps $listEventInfoComp = null)
    {
        $this->listEventInfoComp = $listEventInfoComp;
        return $this;
    }
}
