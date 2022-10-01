<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultTrackWithSenderRef StructType
 * @subpackage Structs
 */
class ResultTrackWithSenderRef extends AbstractStructBase
{
    /**
     * The errorCode
     * @var int
     */
    public $errorCode;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $errorMessage;
    /**
     * The listParcel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Chronopost\StructType\ListEvents[]
     */
    public $listParcel;
    /**
     * Constructor method for resultTrackWithSenderRef
     * @uses ResultTrackWithSenderRef::setErrorCode()
     * @uses ResultTrackWithSenderRef::setErrorMessage()
     * @uses ResultTrackWithSenderRef::setListParcel()
     * @param int $errorCode
     * @param string $errorMessage
     * @param \Chronopost\StructType\ListEvents[] $listParcel
     */
    public function __construct($errorCode = null, $errorMessage = null, array $listParcel = array())
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setListParcel($listParcel);
    }
    /**
     * Get errorCode value
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param int $errorCode
     * @return \Chronopost\StructType\ResultTrackWithSenderRef
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \Chronopost\StructType\ResultTrackWithSenderRef
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        return $this;
    }
    /**
     * Get listParcel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Chronopost\StructType\ListEvents[]|null
     */
    public function getListParcel()
    {
        return isset($this->listParcel) ? $this->listParcel : null;
    }
    /**
     * This method is responsible for validating the values passed to the setListParcel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListParcel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListParcelForArrayConstraintsFromSetListParcel(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $resultTrackWithSenderRefListParcelItem) {
            // validation for constraint: itemType
            if (!$resultTrackWithSenderRefListParcelItem instanceof \Chronopost\StructType\ListEvents) {
                $invalidValues[] = is_object($resultTrackWithSenderRefListParcelItem) ? get_class($resultTrackWithSenderRefListParcelItem) : sprintf('%s(%s)', gettype($resultTrackWithSenderRefListParcelItem), var_export($resultTrackWithSenderRefListParcelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The listParcel property can only contain items of type \Chronopost\StructType\ListEvents, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set listParcel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\ListEvents[] $listParcel
     * @return \Chronopost\StructType\ResultTrackWithSenderRef
     */
    public function setListParcel(array $listParcel = array())
    {
        // validation for constraint: array
        if ('' !== ($listParcelArrayErrorMessage = self::validateListParcelForArrayConstraintsFromSetListParcel($listParcel))) {
            throw new \InvalidArgumentException($listParcelArrayErrorMessage, __LINE__);
        }
        if (is_null($listParcel) || (is_array($listParcel) && empty($listParcel))) {
            unset($this->listParcel);
        } else {
            $this->listParcel = $listParcel;
        }
        return $this;
    }
    /**
     * Add item to listParcel value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\ListEvents $item
     * @return \Chronopost\StructType\ResultTrackWithSenderRef
     */
    public function addToListParcel(\Chronopost\StructType\ListEvents $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\ListEvents) {
            throw new \InvalidArgumentException(sprintf('The listParcel property can only contain items of type \Chronopost\StructType\ListEvents, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listParcel[] = $item;
        return $this;
    }
}
