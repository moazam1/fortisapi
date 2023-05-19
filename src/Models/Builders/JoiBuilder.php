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
use FortisAPILib\Models\Joi;

/**
 * Builder for model Joi
 *
 * @see Joi
 */
class JoiBuilder
{
    /**
     * @var Joi
     */
    private $instance;

    private function __construct(Joi $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new joi Builder object.
     */
    public static function init(): self
    {
        return new self(new Joi());
    }

    /**
     * Sets conditions field.
     */
    public function conditions(?Conditions $value): self
    {
        $this->instance->setConditions($value);
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
     * Initializes a new joi object.
     */
    public function build(): Joi
    {
        return CoreHelper::clone($this->instance);
    }
}