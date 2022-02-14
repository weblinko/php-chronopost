<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeAndMode StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeAndMode
 * @subpackage Structs
 */
class GetReservedSkybillWithTypeAndMode extends AbstractStructBase
{
    /**
     * The reservationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reservationNumber;
    /**
     * The mode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $mode;
    /**
     * Constructor method for getReservedSkybillWithTypeAndMode
     * @uses GetReservedSkybillWithTypeAndMode::setReservationNumber()
     * @uses GetReservedSkybillWithTypeAndMode::setMode()
     * @param string $reservationNumber
     * @param string $mode
     */
    public function __construct($reservationNumber = null, $mode = null)
    {
        $this
            ->setReservationNumber($reservationNumber)
            ->setMode($mode);
    }
    /**
     * Get reservationNumber value
     * @return string|null
     */
    public function getReservationNumber()
    {
        return $this->reservationNumber;
    }
    /**
     * Set reservationNumber value
     * @param string $reservationNumber
     * @return \Chronopost\StructType\GetReservedSkybillWithTypeAndMode
     */
    public function setReservationNumber($reservationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($reservationNumber) && !is_string($reservationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationNumber, true), gettype($reservationNumber)), __LINE__);
        }
        $this->reservationNumber = $reservationNumber;
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
     * @return \Chronopost\StructType\GetReservedSkybillWithTypeAndMode
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
