<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data9;
use FortisAPILib\Models\ResponsePaylink;

/**
 * Builder for model ResponsePaylink
 *
 * @see ResponsePaylink
 */
class ResponsePaylinkBuilder
{
    /**
     * @var ResponsePaylink
     */
    private $instance;

    private function __construct(ResponsePaylink $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response paylink Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponsePaylink());
    }

    /**
     * Sets data field.
     */
    public function data(?Data9 $value): self
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
     * Initializes a new response paylink object.
     */
    public function build(): ResponsePaylink
    {
        return CoreHelper::clone($this->instance);
    }
}