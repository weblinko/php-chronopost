<?php

namespace Chronopost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for destinatairesDpd StructType
 * @subpackage Structs
 */
class DestinatairesDpd extends AbstractStructBase
{
    /**
     * The destinataireDpd
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Chronopost\StructType\DestinataireDpd[]
     */
    public $destinataireDpd;
    /**
     * Constructor method for destinatairesDpd
     * @uses DestinatairesDpd::setDestinataireDpd()
     * @param \Chronopost\StructType\DestinataireDpd[] $destinataireDpd
     */
    public function __construct(array $destinataireDpd = array())
    {
        $this
            ->setDestinataireDpd($destinataireDpd);
    }
    /**
     * Get destinataireDpd value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Chronopost\StructType\DestinataireDpd[]|null
     */
    public function getDestinataireDpd()
    {
        return isset($this->destinataireDpd) ? $this->destinataireDpd : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDestinataireDpd method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDestinataireDpd method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDestinataireDpdForArrayConstraintsFromSetDestinataireDpd(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $destinatairesDpdDestinataireDpdItem) {
            // validation for constraint: itemType
            if (!$destinatairesDpdDestinataireDpdItem instanceof \Chronopost\StructType\DestinataireDpd) {
                $invalidValues[] = is_object($destinatairesDpdDestinataireDpdItem) ? get_class($destinatairesDpdDestinataireDpdItem) : sprintf('%s(%s)', gettype($destinatairesDpdDestinataireDpdItem), var_export($destinatairesDpdDestinataireDpdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The destinataireDpd property can only contain items of type \Chronopost\StructType\DestinataireDpd, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set destinataireDpd value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\DestinataireDpd[] $destinataireDpd
     * @return \Chronopost\StructType\DestinatairesDpd
     */
    public function setDestinataireDpd(array $destinataireDpd = array())
    {
        // validation for constraint: array
        if ('' !== ($destinataireDpdArrayErrorMessage = self::validateDestinataireDpdForArrayConstraintsFromSetDestinataireDpd($destinataireDpd))) {
            throw new \InvalidArgumentException($destinataireDpdArrayErrorMessage, __LINE__);
        }
        if (is_null($destinataireDpd) || (is_array($destinataireDpd) && empty($destinataireDpd))) {
            unset($this->destinataireDpd);
        } else {
            $this->destinataireDpd = $destinataireDpd;
        }
        return $this;
    }
    /**
     * Add item to destinataireDpd value
     * @throws \InvalidArgumentException
     * @param \Chronopost\StructType\DestinataireDpd $item
     * @return \Chronopost\StructType\DestinatairesDpd
     */
    public function addToDestinataireDpd(\Chronopost\StructType\DestinataireDpd $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Chronopost\StructType\DestinataireDpd) {
            throw new \InvalidArgumentException(sprintf('The destinataireDpd property can only contain items of type \Chronopost\StructType\DestinataireDpd, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->destinataireDpd[] = $item;
        return $this;
    }
}
