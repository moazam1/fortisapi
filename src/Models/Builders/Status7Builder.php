<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Status7;

/**
 * Builder for model Status7
 *
 * @see Status7
 */
class Status7Builder
{
    /**
     * @var Status7
     */
    private $instance;

    private function __construct(Status7 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new status 7 Builder object.
     */
    public static function init(): self
    {
        return new self(new Status7());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
        return $this;
    }

    /**
     * Sets title field.
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
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
     * Initializes a new status 7 object.
     */
    public function build(): Status7
    {
        return CoreHelper::clone($this->instance);
    }
}