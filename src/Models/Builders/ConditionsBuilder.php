<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Conditions;

/**
 * Builder for model Conditions
 *
 * @see Conditions
 */
class ConditionsBuilder
{
    /**
     * @var Conditions
     */
    private $instance;

    private function __construct(Conditions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new conditions Builder object.
     */
    public static function init(): self
    {
        return new self(new Conditions());
    }

    /**
     * Sets method field.
     */
    public function method(?string $value): self
    {
        $this->instance->setMethod($value);
        return $this;
    }

    /**
     * Sets values field.
     */
    public function values(?string $value): self
    {
        $this->instance->setValues($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new conditions object.
     */
    public function build(): Conditions
    {
        return CoreHelper::clone($this->instance);
    }
}