<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data20;
use FortisAPILib\Models\ResponseTransactionLevel3Visa;

/**
 * Builder for model ResponseTransactionLevel3Visa
 *
 * @see ResponseTransactionLevel3Visa
 */
class ResponseTransactionLevel3VisaBuilder
{
    /**
     * @var ResponseTransactionLevel3Visa
     */
    private $instance;

    private function __construct(ResponseTransactionLevel3Visa $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response transaction level 3 visa Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseTransactionLevel3Visa());
    }

    /**
     * Sets data field.
     */
    public function data(?Data20 $value): self
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
     * Initializes a new response transaction level 3 visa object.
     */
    public function build(): ResponseTransactionLevel3Visa
    {
        return CoreHelper::clone($this->instance);
    }
}