<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Filter14;

/**
 * Builder for model Filter14
 *
 * @see Filter14
 */
class Filter14Builder
{
    /**
     * @var Filter14
     */
    private $instance;

    private function __construct(Filter14 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new filter 14 Builder object.
     */
    public static function init(): self
    {
        return new self(new Filter14());
    }

    /**
     * Sets user id field.
     */
    public function userId(?array $value): self
    {
        $this->instance->setUserId($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?array $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets created ts field.
     */
    public function createdTs($value): self
    {
        $this->instance->setCreatedTs($value);
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
     * Initializes a new filter 14 object.
     */
    public function build(): Filter14
    {
        return CoreHelper::clone($this->instance);
    }
}
