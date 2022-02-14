<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for esdWithRefClientValueV2 StructType
 * @subpackage Structs
 */
class EsdWithRefClientValueV2 extends EsdWithRefClientValue
{
    /**
     * The numberOfParcel
     * @var int
     */
    public $numberOfParcel;
    /**
     * The parcelsNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var string[]
     */
    public $parcelsNumber;
    /**
     * Constructor method for esdWithRefClientValueV2
     * @uses EsdWithRefClientValueV2::setNumberOfParcel()
     * @uses EsdWithRefClientValueV2::setParcelsNumber()
     * @param int $numberOfParcel
     * @param string[] $parcelsNumber
     */
    public function __construct($numberOfParcel = null, array $parcelsNumber = array())
    {
        $this
            ->setNumberOfParcel($numberOfParcel)
            ->setParcelsNumber($parcelsNumber);
    }
    /**
     * Get numberOfParcel value
     * @return int|null
     */
    public function getNumberOfParcel()
    {
        return $this->numberOfParcel;
    }
    /**
     * Set numberOfParcel value
     * @param int $numberOfParcel
     * @return \Chronopost\StructType\EsdWithRefClientValueV2
     */
    public function setNumberOfParcel($numberOfParcel = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfParcel) && !(is_int($numberOfParcel) || ctype_digit($numberOfParcel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfParcel, true), gettype($numberOfParcel)), __LINE__);
        }
        $this->numberOfParcel = $numberOfParcel;
        return $this;
    }
    /**
     * Get parcelsNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string[]|null
     */
    public function getParcelsNumber()
    {
        return isset($this->parcelsNumber) ? $this->parcelsNumber : null;
    }
    /**
     * This method is responsible for validating the values passed to the setParcelsNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelsNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelsNumberForArrayConstraintsFromSetParcelsNumber(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $esdWithRefClientValueV2ParcelsNumberItem) {
            // validation for constraint: itemType
            if (!is_string($esdWithRefClientValueV2ParcelsNumberItem)) {
                $invalidValues[] = is_object($esdWithRefClientValueV2ParcelsNumberItem) ? get_class($esdWithRefClientValueV2ParcelsNumberItem) : sprintf('%s(%s)', gettype($esdWithRefClientValueV2ParcelsNumberItem), var_export($esdWithRefClientValueV2ParcelsNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The parcelsNumber property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set parcelsNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param string[] $parcelsNumber
     * @return \Chronopost\StructType\EsdWithRefClientValueV2
     */
    public function setParcelsNumber(array $parcelsNumber = array())
    {
        // validation for constraint: array
        if ('' !== ($parcelsNumberArrayErrorMessage = self::validateParcelsNumberForArrayConstraintsFromSetParcelsNumber($parcelsNumber))) {
            throw new \InvalidArgumentException($parcelsNumberArrayErrorMessage, __LINE__);
        }
        if (is_null($parcelsNumber) || (is_array($parcelsNumber) && empty($parcelsNumber))) {
            unset($this->parcelsNumber);
        } else {
            $this->parcelsNumber = $parcelsNumber;
        }
        return $this;
    }
    /**
     * Add item to parcelsNumber value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Chronopost\StructType\EsdWithRefClientValueV2
     */
    public function addToParcelsNumber($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The parcelsNumber property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->parcelsNumber[] = $item;
        return $this;
    }
}
