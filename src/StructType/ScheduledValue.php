<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for scheduledValue StructType
 * @subpackage Structs
 */
class ScheduledValue extends AbstractStructBase
{
    /**
     * The appointmentValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Chronopost\StructType\AppointmentValue
     */
    public $appointmentValue;
    /**
     * The expirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $expirationDate;
    /**
     * The sellByDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sellByDate;
    /**
     * Constructor method for scheduledValue
     * @uses ScheduledValue::setAppointmentValue()
     * @uses ScheduledValue::setExpirationDate()
     * @uses ScheduledValue::setSellByDate()
     * @param \Chronopost\StructType\AppointmentValue $appointmentValue
     * @param string $expirationDate
     * @param string $sellByDate
     */
    public function __construct(\Chronopost\StructType\AppointmentValue $appointmentValue = null, $expirationDate = null, $sellByDate = null)
    {
        $this
            ->setAppointmentValue($appointmentValue)
            ->setExpirationDate($expirationDate)
            ->setSellByDate($sellByDate);
    }
    /**
     * Get appointmentValue value
     * @return \Chronopost\StructType\AppointmentValue|null
     */
    public function getAppointmentValue()
    {
        return $this->appointmentValue;
    }
    /**
     * Set appointmentValue value
     * @param \Chronopost\StructType\AppointmentValue $appointmentValue
     * @return \Chronopost\StructType\ScheduledValue
     */
    public function setAppointmentValue(\Chronopost\StructType\AppointmentValue $appointmentValue = null)
    {
        $this->appointmentValue = $appointmentValue;
        return $this;
    }
    /**
     * Get expirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
    /**
     * Set expirationDate value
     * @param string $expirationDate
     * @return \Chronopost\StructType\ScheduledValue
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get sellByDate value
     * @return string|null
     */
    public function getSellByDate()
    {
        return $this->sellByDate;
    }
    /**
     * Set sellByDate value
     * @param string $sellByDate
     * @return \Chronopost\StructType\ScheduledValue
     */
    public function setSellByDate($sellByDate = null)
    {
        // validation for constraint: string
        if (!is_null($sellByDate) && !is_string($sellByDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellByDate, true), gettype($sellByDate)), __LINE__);
        }
        $this->sellByDate = $sellByDate;
        return $this;
    }
}
