<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for appointmentValue StructType
 * @subpackage Structs
 */
class AppointmentValue extends AbstractStructBase
{
    /**
     * The timeSlotEndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $timeSlotEndDate;
    /**
     * The timeSlotStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $timeSlotStartDate;
    /**
     * The timeSlotTariffLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $timeSlotTariffLevel;
    /**
     * Constructor method for appointmentValue
     * @uses AppointmentValue::setTimeSlotEndDate()
     * @uses AppointmentValue::setTimeSlotStartDate()
     * @uses AppointmentValue::setTimeSlotTariffLevel()
     * @param string $timeSlotEndDate
     * @param string $timeSlotStartDate
     * @param string $timeSlotTariffLevel
     */
    public function __construct($timeSlotEndDate = null, $timeSlotStartDate = null, $timeSlotTariffLevel = null)
    {
        $this
            ->setTimeSlotEndDate($timeSlotEndDate)
            ->setTimeSlotStartDate($timeSlotStartDate)
            ->setTimeSlotTariffLevel($timeSlotTariffLevel);
    }
    /**
     * Get timeSlotEndDate value
     * @return string|null
     */
    public function getTimeSlotEndDate()
    {
        return $this->timeSlotEndDate;
    }
    /**
     * Set timeSlotEndDate value
     * @param string $timeSlotEndDate
     * @return \Chronopost\StructType\AppointmentValue
     */
    public function setTimeSlotEndDate($timeSlotEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($timeSlotEndDate) && !is_string($timeSlotEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeSlotEndDate, true), gettype($timeSlotEndDate)), __LINE__);
        }
        $this->timeSlotEndDate = $timeSlotEndDate;
        return $this;
    }
    /**
     * Get timeSlotStartDate value
     * @return string|null
     */
    public function getTimeSlotStartDate()
    {
        return $this->timeSlotStartDate;
    }
    /**
     * Set timeSlotStartDate value
     * @param string $timeSlotStartDate
     * @return \Chronopost\StructType\AppointmentValue
     */
    public function setTimeSlotStartDate($timeSlotStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($timeSlotStartDate) && !is_string($timeSlotStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeSlotStartDate, true), gettype($timeSlotStartDate)), __LINE__);
        }
        $this->timeSlotStartDate = $timeSlotStartDate;
        return $this;
    }
    /**
     * Get timeSlotTariffLevel value
     * @return string|null
     */
    public function getTimeSlotTariffLevel()
    {
        return $this->timeSlotTariffLevel;
    }
    /**
     * Set timeSlotTariffLevel value
     * @param string $timeSlotTariffLevel
     * @return \Chronopost\StructType\AppointmentValue
     */
    public function setTimeSlotTariffLevel($timeSlotTariffLevel = null)
    {
        // validation for constraint: string
        if (!is_null($timeSlotTariffLevel) && !is_string($timeSlotTariffLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeSlotTariffLevel, true), gettype($timeSlotTariffLevel)), __LINE__);
        }
        $this->timeSlotTariffLevel = $timeSlotTariffLevel;
        return $this;
    }
}
