<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackSearch StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackSearch.
 */
class TrackSearch extends AbstractStructBase
{
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $accountNumber = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $password = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $language = null;
    /**
     * The consigneesCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $consigneesCountry = null;
    /**
     * The consigneesRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $consigneesRef = null;
    /**
     * The consigneesZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $consigneesZipCode = null;
    /**
     * The dateDeposit
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $dateDeposit = null;
    /**
     * The dateEndDeposit
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $dateEndDeposit = null;
    /**
     * The parcelState
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $parcelState = null;
    /**
     * The sendersRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $sendersRef = null;
    /**
     * The serviceCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $serviceCode = null;

    /**
     * Constructor method for trackSearch.
     *
     * @uses TrackSearch::setAccountNumber()
     * @uses TrackSearch::setPassword()
     * @uses TrackSearch::setLanguage()
     * @uses TrackSearch::setConsigneesCountry()
     * @uses TrackSearch::setConsigneesRef()
     * @uses TrackSearch::setConsigneesZipCode()
     * @uses TrackSearch::setDateDeposit()
     * @uses TrackSearch::setDateEndDeposit()
     * @uses TrackSearch::setParcelState()
     * @uses TrackSearch::setSendersRef()
     * @uses TrackSearch::setServiceCode()
     *
     * @param string $accountNumber
     * @param string $password
     * @param string $language
     * @param string $consigneesCountry
     * @param string $consigneesRef
     * @param string $consigneesZipCode
     * @param string $dateDeposit
     * @param string $dateEndDeposit
     * @param string $parcelState
     * @param string $sendersRef
     * @param string $serviceCode
     */
    public function __construct(?string $accountNumber = null, ?string $password = null, ?string $language = null, ?string $consigneesCountry = null, ?string $consigneesRef = null, ?string $consigneesZipCode = null, ?string $dateDeposit = null, ?string $dateEndDeposit = null, ?string $parcelState = null, ?string $sendersRef = null, ?string $serviceCode = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setLanguage($language)
            ->setConsigneesCountry($consigneesCountry)
            ->setConsigneesRef($consigneesRef)
            ->setConsigneesZipCode($consigneesZipCode)
            ->setDateDeposit($dateDeposit)
            ->setDateEndDeposit($dateEndDeposit)
            ->setParcelState($parcelState)
            ->setSendersRef($sendersRef)
            ->setServiceCode($serviceCode)
        ;
    }

    /**
     * Get accountNumber value.
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Set accountNumber value.
     *
     * @param string $accountNumber
     *
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Get password value.
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * Set password value.
     *
     * @param string $password
     *
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;

        return $this;
    }

    /**
     * Get language value.
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Set language value.
     *
     * @param string $language
     *
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;

        return $this;
    }

    /**
     * Get consigneesCountry value.
     */
    public function getConsigneesCountry(): ?string
    {
        return $this->consigneesCountry;
    }

    /**
     * Set consigneesCountry value.
     *
     * @param string $consigneesCountry
     *
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setConsigneesCountry(?string $consigneesCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($consigneesCountry) && !is_string($consigneesCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consigneesCountry, true), gettype($consigneesCountry)), __LINE__);
        }
        $this->consigneesCountry = $consigneesCountry;

        return $this;
    }

    /**
     * Get consigneesRef value.
     */
    public function getConsigneesRef(): ?string
    {
        return $this->consigneesRef;
    }

    /**
     * Set consigneesRef value.
     *
     * @param string $consigneesRef
     *
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setConsigneesRef(?string $consigneesRef = null): self
    {
        // validation for constraint: string
        if (!is_null($consigneesRef) && !is_string($consigneesRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consigneesRef, true), gettype($consigneesRef)), __LINE__);
        }
        $this->consigneesRef = $consigneesRef;

        return $this;
    }

    /**
     * Get consigneesZipCode value.
     */
    public function getConsigneesZipCode(): ?string
    {
        return $this->consigneesZipCode;
    }

    /**
     * Set consigneesZipCode value.
     *
     * @param string $consigneesZipCode
     *
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setConsigneesZipCode(?string $consigneesZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($consigneesZipCode) && !is_string($consigneesZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consigneesZipCode, true), gettype($consigneesZipCode)), __LINE__);
        }
        $this->consigneesZipCode = $consigneesZipCode;

        return $this;
    }

    /**
     * Get dateDeposit value.
     */
    public function getDateDeposit(): ?string
    {
        return $this->dateDeposit;
    }

    /**
     * Set dateDeposit value.
     *
     * @param string $dateDeposit
     *
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setDateDeposit(?string $dateDeposit = null): self
    {
        // validation for constraint: string
        if (!is_null($dateDeposit) && !is_string($dateDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateDeposit, true), gettype($dateDeposit)), __LINE__);
        }
        $this->dateDeposit = $dateDeposit;

        return $this;
    }

    /**
     * Get dateEndDeposit value.
     */
    public function getDateEndDeposit(): ?string
    {
        return $this->dateEndDeposit;
    }

    /**
     * Set dateEndDeposit value.
     *
     * @param string $dateEndDeposit
     *
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setDateEndDeposit(?string $dateEndDeposit = null): self
    {
        // validation for constraint: string
        if (!is_null($dateEndDeposit) && !is_string($dateEndDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateEndDeposit, true), gettype($dateEndDeposit)), __LINE__);
        }
        $this->dateEndDeposit = $dateEndDeposit;

        return $this;
    }

    /**
     * Get parcelState value.
     */
    public function getParcelState(): ?string
    {
        return $this->parcelState;
    }

    /**
     * Set parcelState value.
     *
     * @param string $parcelState
     *
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setParcelState(?string $parcelState = null): self
    {
        // validation for constraint: string
        if (!is_null($parcelState) && !is_string($parcelState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelState, true), gettype($parcelState)), __LINE__);
        }
        $this->parcelState = $parcelState;

        return $this;
    }

    /**
     * Get sendersRef value.
     */
    public function getSendersRef(): ?string
    {
        return $this->sendersRef;
    }

    /**
     * Set sendersRef value.
     *
     * @param string $sendersRef
     *
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setSendersRef(?string $sendersRef = null): self
    {
        // validation for constraint: string
        if (!is_null($sendersRef) && !is_string($sendersRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sendersRef, true), gettype($sendersRef)), __LINE__);
        }
        $this->sendersRef = $sendersRef;

        return $this;
    }

    /**
     * Get serviceCode value.
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    /**
     * Set serviceCode value.
     *
     * @param string $serviceCode
     *
     * @return \Chronopost\StructType\TrackSearch
     */
    public function setServiceCode(?string $serviceCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceCode) && !is_string($serviceCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceCode, true), gettype($serviceCode)), __LINE__);
        }
        $this->serviceCode = $serviceCode;

        return $this;
    }
}
