<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultPickupOrCollectionRequest StructType
 * @subpackage Structs
 */
class ResultPickupOrCollectionRequest extends AbstractStructBase
{
    /**
     * The codeErreur
     * @var int
     */
    public $codeErreur;
    /**
     * The collectionRequest
     * @var bool
     */
    public $collectionRequest;
    /**
     * The infoEnlevements
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Chronopost\StructType\InfoEnlevement[]
     */
    public $infoEnlevements;
    /**
     * The libelleErreur
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $libelleErreur;
    /**
     * Constructor method for resultPickupOrCollectionRequest
     * @uses ResultPickupOrCollectionRequest::setCodeErreur()
     * @uses ResultPickupOrCollectionRequest::setCollectionRequest()
     * @uses ResultPickupOrCollectionRequest::setInfoEnlevements()
     * @uses ResultPickupOrCollectionRequest::setLibelleErreur()
     * @param int $codeErreur
     * @param bool $collectionRequest
     * @param \Chronopost\StructType\InfoEnlevement[] $infoEnlevements
     * @param string $libelleErreur
     */
    public function __construct($codeErreur = null, $collectionRequest = null, array $infoEnlevements = array(), $libelleErreur = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setCollectionRequest($collectionRequest)
            ->setInfoEnlevements($infoEnlevements)
            ->setLibelleErreur($libelleErreur);
    }
    /**
     * Get codeErreur value
     * @return int|null
     */
    public function getCodeErreur()
    {
        return $this->codeErreur;
    }
    /**
     * Set codeErreur value
     * @param int $codeErreur
     * @return \Chronopost\StructType\ResultPickupOrCollectionRequest
     */
    public function setCodeErreur($codeErreur = null)
    {
        // validation for constraint: int
        if (!is_null($codeErreur) && !(is_int($codeErreur) || ctype_digit($codeErreur))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codeErreur, true), gettype($codeErreur)), __LINE__);
        }
        $this->codeErreur = $codeErreur;
        return $this;
    }
    /**
     * Get collectionRequest value
     * @return bool|null
     */
    public function getCollectionRequest()
    {
        return $this->collectionRequest;
    }
    /**
     * Set collectionRequest value
     * @param bool $collectionRequest
     * @return \Chronopost\StructType\ResultPickupOrCollectionRequest
     */
    public function setCollectionRequest($collectionRequest = null)
    {
        // validation for constraint: boolean
        if (!is_null($collectionRequest) && !is_bool($collectionRequest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collectionRequest, true), gettype($collectionRequest)), __LINE__);
        }
        $this->collectionRequest = $collectionRequest;
        return $this;
    }
    /**
     * Get infoEnlevements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Chronopost\StructType\InfoEnlevement[]|null
     */
    public function getInfoEnlevements()
    {
        return isset($this->infoEnlevements) ? $this->infoEnlevements : null;
    }
    /**
     * This method is responsible for validating the values passed to the setInfoEnlevements method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInfoEnlevements method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInfoEnlevementsForArrayConstraintsFromSetInfoEnlevements(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $resultPickupOrCollectionRequestInfoEnlevementsItem) {
            // validation for constraint: itemType
            if (!$resultPickupOrCollectionRequestInfoEnlevementsItem instanceof \Chronopost\StructType\InfoEnlevement) {
                $invalidValues[] = is_object($resultPickupOrCollectionRequestInfoEnlevementsItem) ? get_class($resultPickupOrCollectionRequestInfoEnlevementsItem) : sprintf('%s(%s)', gettype($resultPickupOrCollectionRequestInfoEnlevementsItem), var_export($resultPickupOrCollectionRequestInfoEnlevementsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The infoEnlevements property can only contain items of type \Chronopost\StructType\InfoEnlevement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set infoEnlevements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\InfoEnlevement[] $infoEnlevements
     * @return \Chronopost\StructType\ResultPickupOrCollectionRequest
     */
    public function setInfoEnlevements(array $infoEnlevements = array())
    {
        // validation for constraint: array
        if ('' !== ($infoEnlevementsArrayErrorMessage = self::validateInfoEnlevementsForArrayConstraintsFromSetInfoEnlevements($infoEnlevements))) {
            throw new \InvalidArgumentException($infoEnlevementsArrayErrorMessage, __LINE__);
        }
        if (is_null($infoEnlevements) || (is_array($infoEnlevements) && empty($infoEnlevements))) {
            unset($this->infoEnlevements);
        } else {
            $this->infoEnlevements = $infoEnlevements;
        }
        return $this;
    }
    /**
     * Add item to infoEnlevements value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\InfoEnlevement $item
     * @return \Chronopost\StructType\ResultPickupOrCollectionRequest
     */
    public function addToInfoEnlevements(\Chronopost\StructType\InfoEnlevement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\InfoEnlevement) {
            throw new \InvalidArgumentException(sprintf('The infoEnlevements property can only contain items of type \Chronopost\StructType\InfoEnlevement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->infoEnlevements[] = $item;
        return $this;
    }
    /**
     * Get libelleErreur value
     * @return string|null
     */
    public function getLibelleErreur()
    {
        return $this->libelleErreur;
    }
    /**
     * Set libelleErreur value
     * @param string $libelleErreur
     * @return \Chronopost\StructType\ResultPickupOrCollectionRequest
     */
    public function setLibelleErreur($libelleErreur = null)
    {
        // validation for constraint: string
        if (!is_null($libelleErreur) && !is_string($libelleErreur)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($libelleErreur, true), gettype($libelleErreur)), __LINE__);
        }
        $this->libelleErreur = $libelleErreur;
        return $this;
    }
}
