<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultSearchPOD StructType.
 */
class ResultSearchPOD extends AbstractStructBase
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
     * The formatPOD
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $formatPOD = null;
    /**
     * The pod
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $pod = null;
    /**
     * The podPresente.
     */
    protected ?bool $podPresente = null;
    /**
     * The statusCode.
     */
    protected ?int $statusCode = null;

    /**
     * Constructor method for resultSearchPOD.
     *
     * @uses ResultSearchPOD::setErrorCode()
     * @uses ResultSearchPOD::setErrorMessage()
     * @uses ResultSearchPOD::setFormatPOD()
     * @uses ResultSearchPOD::setPod()
     * @uses ResultSearchPOD::setPodPresente()
     * @uses ResultSearchPOD::setStatusCode()
     *
     * @param int    $errorCode
     * @param string $errorMessage
     * @param string $formatPOD
     * @param string $pod
     * @param bool   $podPresente
     * @param int    $statusCode
     */
    public function __construct(?int $errorCode = null, ?string $errorMessage = null, ?string $formatPOD = null, ?string $pod = null, ?bool $podPresente = null, ?int $statusCode = null)
    {
        $this
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setFormatPOD($formatPOD)
            ->setPod($pod)
            ->setPodPresente($podPresente)
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
     * @return \Chronopost\StructType\ResultSearchPOD
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
     * @return \Chronopost\StructType\ResultSearchPOD
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
     * Get formatPOD value.
     */
    public function getFormatPOD(): ?string
    {
        return $this->formatPOD;
    }

    /**
     * Set formatPOD value.
     *
     * @param string $formatPOD
     *
     * @return \Chronopost\StructType\ResultSearchPOD
     */
    public function setFormatPOD(?string $formatPOD = null): self
    {
        // validation for constraint: string
        if (!is_null($formatPOD) && !is_string($formatPOD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatPOD, true), gettype($formatPOD)), __LINE__);
        }
        $this->formatPOD = $formatPOD;

        return $this;
    }

    /**
     * Get pod value.
     */
    public function getPod(): ?string
    {
        return $this->pod;
    }

    /**
     * Set pod value.
     *
     * @param string $pod
     *
     * @return \Chronopost\StructType\ResultSearchPOD
     */
    public function setPod(?string $pod = null): self
    {
        // validation for constraint: string
        if (!is_null($pod) && !is_string($pod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pod, true), gettype($pod)), __LINE__);
        }
        $this->pod = $pod;

        return $this;
    }

    /**
     * Get podPresente value.
     */
    public function getPodPresente(): ?bool
    {
        return $this->podPresente;
    }

    /**
     * Set podPresente value.
     *
     * @param bool $podPresente
     *
     * @return \Chronopost\StructType\ResultSearchPOD
     */
    public function setPodPresente(?bool $podPresente = null): self
    {
        // validation for constraint: boolean
        if (!is_null($podPresente) && !is_bool($podPresente)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($podPresente, true), gettype($podPresente)), __LINE__);
        }
        $this->podPresente = $podPresente;

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
     * @return \Chronopost\StructType\ResultSearchPOD
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
