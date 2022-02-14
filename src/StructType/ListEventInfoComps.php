<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for listEventInfoComps StructType.
 */
class ListEventInfoComps extends AbstractStructBase
{
    /**
     * The events
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var \Chronopost\StructType\EventInfoComp[]
     */
    protected ?array $events = null;
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $skybillNumber = null;

    /**
     * Constructor method for listEventInfoComps.
     *
     * @uses ListEventInfoComps::setEvents()
     * @uses ListEventInfoComps::setSkybillNumber()
     *
     * @param \Chronopost\StructType\EventInfoComp[] $events
     * @param string                                 $skybillNumber
     */
    public function __construct(?array $events = null, ?string $skybillNumber = null)
    {
        $this
            ->setEvents($events)
            ->setSkybillNumber($skybillNumber)
        ;
    }

    /**
     * Get events value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return \Chronopost\StructType\EventInfoComp[]
     */
    public function getEvents(): ?array
    {
        return isset($this->events) ? $this->events : null;
    }

    /**
     * This method is responsible for validating the values passed to the setEvents method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEvents method.
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEventsForArrayConstraintsFromSetEvents(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listEventInfoCompsEventsItem) {
            // validation for constraint: itemType
            if (!$listEventInfoCompsEventsItem instanceof \Chronopost\StructType\EventInfoComp) {
                $invalidValues[] = is_object($listEventInfoCompsEventsItem) ? get_class($listEventInfoCompsEventsItem) : sprintf('%s(%s)', gettype($listEventInfoCompsEventsItem), var_export($listEventInfoCompsEventsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The events property can only contain items of type \Chronopost\StructType\EventInfoComp, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set events value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param \Chronopost\StructType\EventInfoComp[] $events
     *
     * @throws InvalidArgumentException
     *
     * @return \Chronopost\StructType\ListEventInfoComps
     */
    public function setEvents(?array $events = null): self
    {
        // validation for constraint: array
        if ('' !== ($eventsArrayErrorMessage = self::validateEventsForArrayConstraintsFromSetEvents($events))) {
            throw new InvalidArgumentException($eventsArrayErrorMessage, __LINE__);
        }
        if (is_null($events) || (is_array($events) && empty($events))) {
            unset($this->events);
        } else {
            $this->events = $events;
        }

        return $this;
    }

    /**
     * Add item to events value.
     *
     * @param \Chronopost\StructType\EventInfoComp $item
     *
     * @throws InvalidArgumentException
     *
     * @return \Chronopost\StructType\ListEventInfoComps
     */
    public function addToEvents(EventInfoComp $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\EventInfoComp) {
            throw new InvalidArgumentException(sprintf('The events property can only contain items of type \Chronopost\StructType\EventInfoComp, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->events[] = $item;

        return $this;
    }

    /**
     * Get skybillNumber value.
     */
    public function getSkybillNumber(): ?string
    {
        return $this->skybillNumber;
    }

    /**
     * Set skybillNumber value.
     *
     * @param string $skybillNumber
     *
     * @return \Chronopost\StructType\ListEventInfoComps
     */
    public function setSkybillNumber(?string $skybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;

        return $this;
    }
}
