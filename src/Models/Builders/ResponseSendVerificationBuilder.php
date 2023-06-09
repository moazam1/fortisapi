<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data23;
use FortisAPILib\Models\ResponseSendVerification;

/**
 * Builder for model ResponseSendVerification
 *
 * @see ResponseSendVerification
 */
class ResponseSendVerificationBuilder
{
    /**
     * @var ResponseSendVerification
     */
    private $instance;

    private function __construct(ResponseSendVerification $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response send verification Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseSendVerification());
    }

    /**
     * Sets data field.
     */
    public function data(?Data23 $value): self
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
     * Initializes a new response send verification object.
     */
    public function build(): ResponseSendVerification
    {
        return CoreHelper::clone($this->instance);
    }
}
