<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for event StructType.
 */
class Event extends AbstractStructBase
{
    /**
     * The code
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $code = null;
    /**
     * The eventDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $eventDate = null;
    /**
     * The eventLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $eventLabel = null;
    /**
     * The highPriority
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?bool $highPriority = null;
    /**
     * The NPC
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $NPC = null;
    /**
     * The officeLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $officeLabel = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $zipCode = null;

    /**
     * Constructor method for event.
     *
     * @uses Event::setCode()
     * @uses Event::setEventDate()
     * @uses Event::setEventLabel()
     * @uses Event::setHighPriority()
     * @uses Event::setNPC()
     * @uses Event::setOfficeLabel()
     * @uses Event::setZipCode()
     *
     * @param string $code
     * @param string $eventDate
     * @param string $eventLabel
     * @param bool   $highPriority
     * @param string $nPC
     * @param string $officeLabel
     * @param string $zipCode
     */
    public function __construct(?string $code = null, ?string $eventDate = null, ?string $eventLabel = null, ?bool $highPriority = null, ?string $nPC = null, ?string $officeLabel = null, ?string $zipCode = null)
    {
        $this
            ->setCode($code)
            ->setEventDate($eventDate)
            ->setEventLabel($eventLabel)
            ->setHighPriority($highPriority)
            ->setNPC($nPC)
            ->setOfficeLabel($officeLabel)
            ->setZipCode($zipCode)
        ;
    }

    /**
     * Get code value.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Set code value.
     *
     * @param string $code
     *
     * @return \Chronopost\StructType\Event
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;

        return $this;
    }

    /**
     * Get eventDate value.
     */
    public function getEventDate(): ?string
    {
        return $this->eventDate;
    }

    /**
     * Set eventDate value.
     *
     * @param string $eventDate
     *
     * @return \Chronopost\StructType\Event
     */
    public function setEventDate(?string $eventDate = null): self
    {
        // validation for constraint: string
        if (!is_null($eventDate) && !is_string($eventDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventDate, true), gettype($eventDate)), __LINE__);
        }
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Get eventLabel value.
     */
    public function getEventLabel(): ?string
    {
        return $this->eventLabel;
    }

    /**
     * Set eventLabel value.
     *
     * @param string $eventLabel
     *
     * @return \Chronopost\StructType\Event
     */
    public function setEventLabel(?string $eventLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($eventLabel) && !is_string($eventLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventLabel, true), gettype($eventLabel)), __LINE__);
        }
        $this->eventLabel = $eventLabel;

        return $this;
    }

    /**
     * Get highPriority value.
     */
    public function getHighPriority(): ?bool
    {
        return $this->highPriority;
    }

    /**
     * Set highPriority value.
     *
     * @param bool $highPriority
     *
     * @return \Chronopost\StructType\Event
     */
    public function setHighPriority(?bool $highPriority = null): self
    {
        // validation for constraint: boolean
        if (!is_null($highPriority) && !is_bool($highPriority)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($highPriority, true), gettype($highPriority)), __LINE__);
        }
        $this->highPriority = $highPriority;

        return $this;
    }

    /**
     * Get NPC value.
     */
    public function getNPC(): ?string
    {
        return $this->NPC;
    }

    /**
     * Set NPC value.
     *
     * @param string $nPC
     *
     * @return \Chronopost\StructType\Event
     */
    public function setNPC(?string $nPC = null): self
    {
        // validation for constraint: string
        if (!is_null($nPC) && !is_string($nPC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nPC, true), gettype($nPC)), __LINE__);
        }
        $this->NPC = $nPC;

        return $this;
    }

    /**
     * Get officeLabel value.
     */
    public function getOfficeLabel(): ?string
    {
        return $this->officeLabel;
    }

    /**
     * Set officeLabel value.
     *
     * @param string $officeLabel
     *
     * @return \Chronopost\StructType\Event
     */
    public function setOfficeLabel(?string $officeLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($officeLabel) && !is_string($officeLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($officeLabel, true), gettype($officeLabel)), __LINE__);
        }
        $this->officeLabel = $officeLabel;

        return $this;
    }

    /**
     * Get zipCode value.
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * Set zipCode value.
     *
     * @param string $zipCode
     *
     * @return \Chronopost\StructType\Event
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;

        return $this;
    }
}
