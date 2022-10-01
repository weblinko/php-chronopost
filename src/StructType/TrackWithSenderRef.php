<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackWithSenderRef StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackWithSenderRef
 * @subpackage Structs
 */
class TrackWithSenderRef extends AbstractStructBase
{
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $accountNumber;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $password;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $language;
    /**
     * The sendersRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $sendersRef;
    /**
     * Constructor method for trackWithSenderRef
     * @uses TrackWithSenderRef::setAccountNumber()
     * @uses TrackWithSenderRef::setPassword()
     * @uses TrackWithSenderRef::setLanguage()
     * @uses TrackWithSenderRef::setSendersRef()
     * @param string $accountNumber
     * @param string $password
     * @param string $language
     * @param string $sendersRef
     */
    public function __construct($accountNumber = null, $password = null, $language = null, $sendersRef = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setPassword($password)
            ->setLanguage($language)
            ->setSendersRef($sendersRef);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \Chronopost\StructType\TrackWithSenderRef
     */
    public function setAccountNumber($accountNumber = null)
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Chronopost\StructType\TrackWithSenderRef
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Chronopost\StructType\TrackWithSenderRef
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        return $this;
    }
    /**
     * Get sendersRef value
     * @return string|null
     */
    public function getSendersRef()
    {
        return $this->sendersRef;
    }
    /**
     * Set sendersRef value
     * @param string $sendersRef
     * @return \Chronopost\StructType\TrackWithSenderRef
     */
    public function setSendersRef($sendersRef = null)
    {
        // validation for constraint: string
        if (!is_null($sendersRef) && !is_string($sendersRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sendersRef, true), gettype($sendersRef)), __LINE__);
        }
        $this->sendersRef = $sendersRef;
        return $this;
    }
}
