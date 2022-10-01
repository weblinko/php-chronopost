<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for listEvents StructType
 * @subpackage Structs
 */
class ListEvents extends AbstractStructBase
{
    /**
     * The events
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Chronopost\StructType\Event[]
     */
    public $events;
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $skybillNumber;
    /**
     * Constructor method for listEvents
     * @uses ListEvents::setEvents()
     * @uses ListEvents::setSkybillNumber()
     * @param \Chronopost\StructType\Event[] $events
     * @param string $skybillNumber
     */
    public function __construct(array $events = array(), $skybillNumber = null)
    {
        $this
            ->setEvents($events)
            ->setSkybillNumber($skybillNumber);
    }
    /**
     * Get events value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Chronopost\StructType\Event[]|null
     */
    public function getEvents()
    {
        return isset($this->events) ? $this->events : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEvents method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEvents method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEventsForArrayConstraintsFromSetEvents(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $listEventsEventsItem) {
            // validation for constraint: itemType
            if (!$listEventsEventsItem instanceof \Chronopost\StructType\Event) {
                $invalidValues[] = is_object($listEventsEventsItem) ? get_class($listEventsEventsItem) : sprintf('%s(%s)', gettype($listEventsEventsItem), var_export($listEventsEventsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The events property can only contain items of type \Chronopost\StructType\Event, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set events value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\Event[] $events
     * @return \Chronopost\StructType\ListEvents
     */
    public function setEvents(array $events = array())
    {
        // validation for constraint: array
        if ('' !== ($eventsArrayErrorMessage = self::validateEventsForArrayConstraintsFromSetEvents($events))) {
            throw new \InvalidArgumentException($eventsArrayErrorMessage, __LINE__);
        }
        if (is_null($events) || (is_array($events) && empty($events))) {
            unset($this->events);
        } else {
            $this->events = $events;
        }
        return $this;
    }
    /**
     * Add item to events value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\Event $item
     * @return \Chronopost\StructType\ListEvents
     */
    public function addToEvents(\Chronopost\StructType\Event $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\Event) {
            throw new \InvalidArgumentException(sprintf('The events property can only contain items of type \Chronopost\StructType\Event, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->events[] = $item;
        return $this;
    }
    /**
     * Get skybillNumber value
     * @return string|null
     */
    public function getSkybillNumber()
    {
        return $this->skybillNumber;
    }
    /**
     * Set skybillNumber value
     * @param string $skybillNumber
     * @return \Chronopost\StructType\ListEvents
     */
    public function setSkybillNumber($skybillNumber = null)
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;
        return $this;
    }
}
