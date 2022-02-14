<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for skybillParamsValueV2 StructType
 * @subpackage Structs
 */
class SkybillParamsValueV2 extends SkybillParamsValue
{
    /**
     * The withReservation
     * @var int
     */
    public $withReservation;
    /**
     * Constructor method for skybillParamsValueV2
     * @uses SkybillParamsValueV2::setWithReservation()
     * @param int $withReservation
     */
    public function __construct($withReservation = null)
    {
        $this
            ->setWithReservation($withReservation);
    }
    /**
     * Get withReservation value
     * @return int|null
     */
    public function getWithReservation()
    {
        return $this->withReservation;
    }
    /**
     * Set withReservation value
     * @param int $withReservation
     * @return \Chronopost\StructType\SkybillParamsValueV2
     */
    public function setWithReservation($withReservation = null)
    {
        // validation for constraint: int
        if (!is_null($withReservation) && !(is_int($withReservation) || ctype_digit($withReservation))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($withReservation, true), gettype($withReservation)), __LINE__);
        }
        $this->withReservation = $withReservation;
        return $this;
    }
}
