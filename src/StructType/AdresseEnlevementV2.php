<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for adresseEnlevementV2 StructType
 * @subpackage Structs
 */
class AdresseEnlevementV2 extends AdresseEnlevement
{
    /**
     * The email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $email;
    /**
     * Constructor method for adresseEnlevementV2
     * @uses AdresseEnlevementV2::setEmail()
     * @param string $email
     */
    public function __construct($email = null)
    {
        $this
            ->setEmail($email);
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Chronopost\StructType\AdresseEnlevementV2
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        return $this;
    }
}
