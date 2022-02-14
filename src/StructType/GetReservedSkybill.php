<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybill StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybill
 * @subpackage Structs
 */
class GetReservedSkybill extends AbstractStructBase
{
    /**
     * The reservationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $reservationNumber;
    /**
     * Constructor method for getReservedSkybill
     * @uses GetReservedSkybill::setReservationNumber()
     * @param string $reservationNumber
     */
    public function __construct($reservationNumber = null)
    {
        $this
            ->setReservationNumber($reservationNumber);
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
     * @return \Chronopost\StructType\GetReservedSkybill
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
}
