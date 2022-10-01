<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eventInfoComp StructType
 * @subpackage Structs
 */
class EventInfoComp extends Event
{
    /**
     * The infoCompList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Chronopost\StructType\InfoComp[]
     */
    public $infoCompList;
    /**
     * Constructor method for eventInfoComp
     * @uses EventInfoComp::setInfoCompList()
     * @param \Chronopost\StructType\InfoComp[] $infoCompList
     */
    public function __construct(array $infoCompList = array())
    {
        $this
            ->setInfoCompList($infoCompList);
    }
    /**
     * Get infoCompList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Chronopost\StructType\InfoComp[]|null
     */
    public function getInfoCompList()
    {
        return isset($this->infoCompList) ? $this->infoCompList : null;
    }
    /**
     * This method is responsible for validating the values passed to the setInfoCompList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInfoCompList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInfoCompListForArrayConstraintsFromSetInfoCompList(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $eventInfoCompInfoCompListItem) {
            // validation for constraint: itemType
            if (!$eventInfoCompInfoCompListItem instanceof \Chronopost\StructType\InfoComp) {
                $invalidValues[] = is_object($eventInfoCompInfoCompListItem) ? get_class($eventInfoCompInfoCompListItem) : sprintf('%s(%s)', gettype($eventInfoCompInfoCompListItem), var_export($eventInfoCompInfoCompListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The infoCompList property can only contain items of type \Chronopost\StructType\InfoComp, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set infoCompList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\InfoComp[] $infoCompList
     * @return \Chronopost\StructType\EventInfoComp
     */
    public function setInfoCompList(array $infoCompList = array())
    {
        // validation for constraint: array
        if ('' !== ($infoCompListArrayErrorMessage = self::validateInfoCompListForArrayConstraintsFromSetInfoCompList($infoCompList))) {
            throw new \InvalidArgumentException($infoCompListArrayErrorMessage, __LINE__);
        }
        if (is_null($infoCompList) || (is_array($infoCompList) && empty($infoCompList))) {
            unset($this->infoCompList);
        } else {
            $this->infoCompList = $infoCompList;
        }
        return $this;
    }
    /**
     * Add item to infoCompList value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\InfoComp $item
     * @return \Chronopost\StructType\EventInfoComp
     */
    public function addToInfoCompList(\Chronopost\StructType\InfoComp $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\InfoComp) {
            throw new \InvalidArgumentException(sprintf('The infoCompList property can only contain items of type \Chronopost\StructType\InfoComp, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->infoCompList[] = $item;
        return $this;
    }
}
