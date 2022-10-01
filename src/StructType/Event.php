<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for event StructType
 * @subpackage Structs
 */
class Event extends AbstractStructBase
{
    /**
     * The code
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $code;
    /**
     * The eventDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eventDate;
    /**
     * The eventLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $eventLabel;
    /**
     * The highPriority
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $highPriority;
    /**
     * The NPC
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NPC;
    /**
     * The officeLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $officeLabel;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $zipCode;
    /**
     * Constructor method for event
     * @uses Event::setCode()
     * @uses Event::setEventDate()
     * @uses Event::setEventLabel()
     * @uses Event::setHighPriority()
     * @uses Event::setNPC()
     * @uses Event::setOfficeLabel()
     * @uses Event::setZipCode()
     * @param string $code
     * @param string $eventDate
     * @param string $eventLabel
     * @param bool $highPriority
     * @param string $nPC
     * @param string $officeLabel
     * @param string $zipCode
     */
    public function __construct($code = null, $eventDate = null, $eventLabel = null, $highPriority = null, $nPC = null, $officeLabel = null, $zipCode = null)
    {
        $this
            ->setCode($code)
            ->setEventDate($eventDate)
            ->setEventLabel($eventLabel)
            ->setHighPriority($highPriority)
            ->setNPC($nPC)
            ->setOfficeLabel($officeLabel)
            ->setZipCode($zipCode);
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Chronopost\StructType\Event
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get eventDate value
     * @return string|null
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }
    /**
     * Set eventDate value
     * @param string $eventDate
     * @return \Chronopost\StructType\Event
     */
    public function setEventDate($eventDate = null)
    {
        // validation for constraint: string
        if (!is_null($eventDate) && !is_string($eventDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventDate, true), gettype($eventDate)), __LINE__);
        }
        $this->eventDate = $eventDate;
        return $this;
    }
    /**
     * Get eventLabel value
     * @return string|null
     */
    public function getEventLabel()
    {
        return $this->eventLabel;
    }
    /**
     * Set eventLabel value
     * @param string $eventLabel
     * @return \Chronopost\StructType\Event
     */
    public function setEventLabel($eventLabel = null)
    {
        // validation for constraint: string
        if (!is_null($eventLabel) && !is_string($eventLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventLabel, true), gettype($eventLabel)), __LINE__);
        }
        $this->eventLabel = $eventLabel;
        return $this;
    }
    /**
     * Get highPriority value
     * @return bool|null
     */
    public function getHighPriority()
    {
        return $this->highPriority;
    }
    /**
     * Set highPriority value
     * @param bool $highPriority
     * @return \Chronopost\StructType\Event
     */
    public function setHighPriority($highPriority = null)
    {
        // validation for constraint: boolean
        if (!is_null($highPriority) && !is_bool($highPriority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($highPriority, true), gettype($highPriority)), __LINE__);
        }
        $this->highPriority = $highPriority;
        return $this;
    }
    /**
     * Get NPC value
     * @return string|null
     */
    public function getNPC()
    {
        return $this->NPC;
    }
    /**
     * Set NPC value
     * @param string $nPC
     * @return \Chronopost\StructType\Event
     */
    public function setNPC($nPC = null)
    {
        // validation for constraint: string
        if (!is_null($nPC) && !is_string($nPC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nPC, true), gettype($nPC)), __LINE__);
        }
        $this->NPC = $nPC;
        return $this;
    }
    /**
     * Get officeLabel value
     * @return string|null
     */
    public function getOfficeLabel()
    {
        return $this->officeLabel;
    }
    /**
     * Set officeLabel value
     * @param string $officeLabel
     * @return \Chronopost\StructType\Event
     */
    public function setOfficeLabel($officeLabel = null)
    {
        // validation for constraint: string
        if (!is_null($officeLabel) && !is_string($officeLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($officeLabel, true), gettype($officeLabel)), __LINE__);
        }
        $this->officeLabel = $officeLabel;
        return $this;
    }
    /**
     * Get zipCode value
     * @return string|null
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }
    /**
     * Set zipCode value
     * @param string $zipCode
     * @return \Chronopost\StructType\Event
     */
    public function setZipCode($zipCode = null)
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;
        return $this;
    }
}
