<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Conditions33;

/**
 * Builder for model Conditions33
 *
 * @see Conditions33
 */
class Conditions33Builder
{
    /**
     * @var Conditions33
     */
    private $instance;

    private function __construct(Conditions33 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new conditions 33 Builder object.
     */
    public static function init(): self
    {
        return new self(new Conditions33());
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
     * Initializes a new conditions 33 object.
     */
    public function build(): Conditions33
    {
        return CoreHelper::clone($this->instance);
    }
}
