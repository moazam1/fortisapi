<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Sort24;

/**
 * Builder for model Sort24
 *
 * @see Sort24
 */
class Sort24Builder
{
    /**
     * @var Sort24
     */
    private $instance;

    private function __construct(Sort24 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new sort 24 Builder object.
     */
    public static function init(): self
    {
        return new self(new Sort24());
    }

    /**
     * Sets signature field.
     */
    public function signature(?array $value): self
    {
        $this->instance->setSignature($value);
        return $this;
    }

    /**
     * Sets resource field.
     */
    public function resource(?array $value): self
    {
        $this->instance->setResource($value);
        return $this;
    }

    /**
     * Sets resource id field.
     */
    public function resourceId(?array $value): self
    {
        $this->instance->setResourceId($value);
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
    public function createdTs(?array $value): self
    {
        $this->instance->setCreatedTs($value);
        return $this;
    }

    /**
     * Sets modified ts field.
     */
    public function modifiedTs(?array $value): self
    {
        $this->instance->setModifiedTs($value);
        return $this;
    }

    /**
     * Sets raw signature field.
     */
    public function rawSignature(?array $value): self
    {
        $this->instance->setRawSignature($value);
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
     * Initializes a new sort 24 object.
     */
    public function build(): Sort24
    {
        return CoreHelper::clone($this->instance);
    }
}