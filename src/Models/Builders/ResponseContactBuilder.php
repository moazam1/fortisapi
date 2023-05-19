<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data2;
use FortisAPILib\Models\ResponseContact;

/**
 * Builder for model ResponseContact
 *
 * @see ResponseContact
 */
class ResponseContactBuilder
{
    /**
     * @var ResponseContact
     */
    private $instance;

    private function __construct(ResponseContact $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response contact Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseContact());
    }

    /**
     * Sets data field.
     */
    public function data(?Data2 $value): self
    {
        $this->instance->setData($value);
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
     * Initializes a new response contact object.
     */
    public function build(): ResponseContact
    {
        return CoreHelper::clone($this->instance);
    }
}
