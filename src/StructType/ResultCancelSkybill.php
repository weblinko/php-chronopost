<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultCancelSkybill StructType.
 */
class ResultCancelSkybill extends AbstractStructBase
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
     * The statusCode.
     */
    protected ?int $statusCode = null;

    /**
     * Constructor method for resultCancelSkybill.
     *
     * @uses ResultCancelSkybill::setErrorCode()
     * @uses ResultCancelSkybill::setErrorMessage()
     * @uses ResultCancelSkybill::setStatusCode()
     *
     * @param int    $errorCode
     * @param string $errorMessage
     * @param int    $statusCode
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?int $statusCode = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setStatusCode($statusCode)
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
     * @return \Chronopost\StructType\ResultCancelSkybill
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
     * @return \Chronopost\StructType\ResultCancelSkybill
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
     * Get statusCode value.
     */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    /**
     * Set statusCode value.
     *
     * @param int $statusCode
     *
     * @return \Chronopost\StructType\ResultCancelSkybill
     */
    public function setStatusCode(?int $statusCode = null): self
    {
        // validation for constraint: int
        if (!is_null($statusCode) && !(is_int($statusCode) || ctype_digit($statusCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusCode, true), gettype($statusCode)), __LINE__);
        }
        $this->statusCode = $statusCode;

        return $this;
    }
}
