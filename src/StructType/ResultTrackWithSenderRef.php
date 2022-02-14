<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultTrackWithSenderRef StructType.
 */
class ResultTrackWithSenderRef extends AbstractStructBase
{
    /**
     * The errorCode.
     */
    protected ?int $errorCode = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $errorMessage = null;
    /**
     * The listParcel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var \Chronopost\StructType\ListEvents[]
     */
    protected ?array $listParcel = null;

    /**
     * Constructor method for resultTrackWithSenderRef.
     *
     * @uses ResultTrackWithSenderRef::setErrorCode()
     * @uses ResultTrackWithSenderRef::setErrorMessage()
     * @uses ResultTrackWithSenderRef::setListParcel()
     *
     * @param int                                 $errorCode
     * @param string                              $errorMessage
     * @param \Chronopost\StructType\ListEvents[] $listParcel
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?array $listParcel = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setListParcel($listParcel)
        ;
    }

    /**
     * Get errorCode value.
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    /**
     * Set errorCode value.
     *
     * @param int $errorCode
     *
     * @return \Chronopost\StructType\ResultTrackWithSenderRef
     */
    public function setErrorCode(?int $errorCode = null): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Get errorMessage value.
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * Set errorMessage value.
     *
     * @param string $errorMessage
     *
     * @return \Chronopost\StructType\ResultTrackWithSenderRef
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;

        return $this;
    }

    /**
     * Get listParcel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return \Chronopost\StructType\ListEvents[]
     */
    public function getListParcel(): ?array
    {
        return isset($this->listParcel) ? $this->listParcel : null;
    }

    /**
     * This method is responsible for validating the values passed to the setListParcel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListParcel method.
     *
     * @param array $values
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListParcelForArrayConstraintsFromSetListParcel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
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
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param \Chronopost\StructType\ListEvents[] $listParcel
     *
     * @throws InvalidArgumentException
     *
     * @return \Chronopost\StructType\ResultTrackWithSenderRef
     */
    public function setListParcel(?array $listParcel = null): self
    {
        // validation for constraint: array
        if ('' !== ($listParcelArrayErrorMessage = self::validateListParcelForArrayConstraintsFromSetListParcel($listParcel))) {
            throw new InvalidArgumentException($listParcelArrayErrorMessage, __LINE__);
        }
        if (is_null($listParcel) || (is_array($listParcel) && empty($listParcel))) {
            unset($this->listParcel);
        } else {
            $this->listParcel = $listParcel;
        }

        return $this;
    }

    /**
     * Add item to listParcel value.
     *
     * @param \Chronopost\StructType\ListEvents $item
     *
     * @throws InvalidArgumentException
     *
     * @return \Chronopost\StructType\ResultTrackWithSenderRef
     */
    public function addToListParcel(ListEvents $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\ListEvents) {
            throw new InvalidArgumentException(sprintf('The listParcel property can only contain items of type \Chronopost\StructType\ListEvents, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->listParcel[] = $item;

        return $this;
    }
}
