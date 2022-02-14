<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for refValue StructType
 * @subpackage Structs
 */
class RefValue extends AbstractStructBase
{
    /**
     * The customerSkybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $customerSkybillNumber;
    /**
     * The PCardTransactionNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PCardTransactionNumber;
    /**
     * The recipientRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $recipientRef;
    /**
     * The shipperRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $shipperRef;
    /**
     * Constructor method for refValue
     * @uses RefValue::setCustomerSkybillNumber()
     * @uses RefValue::setPCardTransactionNumber()
     * @uses RefValue::setRecipientRef()
     * @uses RefValue::setShipperRef()
     * @param string $customerSkybillNumber
     * @param string $pCardTransactionNumber
     * @param string $recipientRef
     * @param string $shipperRef
     */
    public function __construct($customerSkybillNumber = null, $pCardTransactionNumber = null, $recipientRef = null, $shipperRef = null)
    {
        $this
            ->setCustomerSkybillNumber($customerSkybillNumber)
            ->setPCardTransactionNumber($pCardTransactionNumber)
            ->setRecipientRef($recipientRef)
            ->setShipperRef($shipperRef);
    }
    /**
     * Get customerSkybillNumber value
     * @return string|null
     */
    public function getCustomerSkybillNumber()
    {
        return $this->customerSkybillNumber;
    }
    /**
     * Set customerSkybillNumber value
     * @param string $customerSkybillNumber
     * @return \Chronopost\StructType\RefValue
     */
    public function setCustomerSkybillNumber($customerSkybillNumber = null)
    {
        // validation for constraint: string
        if (!is_null($customerSkybillNumber) && !is_string($customerSkybillNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerSkybillNumber, true), gettype($customerSkybillNumber)), __LINE__);
        }
        $this->customerSkybillNumber = $customerSkybillNumber;
        return $this;
    }
    /**
     * Get PCardTransactionNumber value
     * @return string|null
     */
    public function getPCardTransactionNumber()
    {
        return $this->PCardTransactionNumber;
    }
    /**
     * Set PCardTransactionNumber value
     * @param string $pCardTransactionNumber
     * @return \Chronopost\StructType\RefValue
     */
    public function setPCardTransactionNumber($pCardTransactionNumber = null)
    {
        // validation for constraint: string
        if (!is_null($pCardTransactionNumber) && !is_string($pCardTransactionNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pCardTransactionNumber, true), gettype($pCardTransactionNumber)), __LINE__);
        }
        $this->PCardTransactionNumber = $pCardTransactionNumber;
        return $this;
    }
    /**
     * Get recipientRef value
     * @return string|null
     */
    public function getRecipientRef()
    {
        return $this->recipientRef;
    }
    /**
     * Set recipientRef value
     * @param string $recipientRef
     * @return \Chronopost\StructType\RefValue
     */
    public function setRecipientRef($recipientRef = null)
    {
        // validation for constraint: string
        if (!is_null($recipientRef) && !is_string($recipientRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientRef, true), gettype($recipientRef)), __LINE__);
        }
        $this->recipientRef = $recipientRef;
        return $this;
    }
    /**
     * Get shipperRef value
     * @return string|null
     */
    public function getShipperRef()
    {
        return $this->shipperRef;
    }
    /**
     * Set shipperRef value
     * @param string $shipperRef
     * @return \Chronopost\StructType\RefValue
     */
    public function setShipperRef($shipperRef = null)
    {
        // validation for constraint: string
        if (!is_null($shipperRef) && !is_string($shipperRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperRef, true), gettype($shipperRef)), __LINE__);
        }
        $this->shipperRef = $shipperRef;
        return $this;
    }
}
