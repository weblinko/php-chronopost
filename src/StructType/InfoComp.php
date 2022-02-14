<?php

declare(strict_types=1);

namespace Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for infoComp StructType.
 */
class InfoComp extends AbstractStructBase
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $name = null;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $value = null;

    /**
     * Constructor method for infoComp.
     *
     * @uses InfoComp::setName()
     * @uses InfoComp::setValue()
     *
     * @param string $name
     * @param string $value
     */
    public function __construct(?string $name = null, ?string $value = null)
    {
        $this
            ->setName($name)
            ->setValue($value)
        ;
    }

    /**
     * Get name value.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set name value.
     *
     * @param string $name
     *
     * @return \Chronopost\StructType\InfoComp
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;

        return $this;
    }

    /**
     * Get value value.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Set value value.
     *
     * @param string $value
     *
     * @return \Chronopost\StructType\InfoComp
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;

        return $this;
    }
}
