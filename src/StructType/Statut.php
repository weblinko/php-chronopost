<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for statut StructType
 * @subpackage Structs
 */
class Statut extends AbstractStructBase
{
    /**
     * The entry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Chronopost\StructType\Entry[]
     */
    public $entry;
    /**
     * Constructor method for statut
     * @uses Statut::setEntry()
     * @param \Chronopost\StructType\Entry[] $entry
     */
    public function __construct(array $entry = array())
    {
        $this
            ->setEntry($entry);
    }
    /**
     * Get entry value
     * @return \Chronopost\StructType\Entry[]|null
     */
    public function getEntry()
    {
        return $this->entry;
    }
    /**
     * This method is responsible for validating the values passed to the setEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntryForArrayConstraintsFromSetEntry(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $statutEntryItem) {
            // validation for constraint: itemType
            if (!$statutEntryItem instanceof \Chronopost\StructType\Entry) {
                $invalidValues[] = is_object($statutEntryItem) ? get_class($statutEntryItem) : sprintf('%s(%s)', gettype($statutEntryItem), var_export($statutEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The entry property can only contain items of type \Chronopost\StructType\Entry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set entry value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\Entry[] $entry
     * @return \Chronopost\StructType\Statut
     */
    public function setEntry(array $entry = array())
    {
        // validation for constraint: array
        if ('' !== ($entryArrayErrorMessage = self::validateEntryForArrayConstraintsFromSetEntry($entry))) {
            throw new \InvalidArgumentException($entryArrayErrorMessage, __LINE__);
        }
        $this->entry = $entry;
        return $this;
    }
    /**
     * Add item to entry value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\Entry $item
     * @return \Chronopost\StructType\Statut
     */
    public function addToEntry(\Chronopost\StructType\Entry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\Entry) {
            throw new \InvalidArgumentException(sprintf('The entry property can only contain items of type \Chronopost\StructType\Entry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->entry[] = $item;
        return $this;
    }
}
