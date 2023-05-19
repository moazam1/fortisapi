<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\LastRegistrationTs1;

/**
 * Builder for model LastRegistrationTs1
 *
 * @see LastRegistrationTs1
 */
class LastRegistrationTs1Builder
{
    /**
     * @var LastRegistrationTs1
     */
    private $instance;

    private function __construct(LastRegistrationTs1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new last registration ts 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new LastRegistrationTs1());
    }

    /**
     * Sets lte field.
     */
    public function lte($value): self
    {
        $this->instance->setLte($value);
        return $this;
    }

    /**
     * Sets gte field.
     */
    public function gte($value): self
    {
        $this->instance->setGte($value);
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
     * Initializes a new last registration ts 1 object.
     */
    public function build(): LastRegistrationTs1
    {
        return CoreHelper::clone($this->instance);
    }
}
