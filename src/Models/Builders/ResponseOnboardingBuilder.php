<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data8;
use FortisAPILib\Models\ResponseOnboarding;

/**
 * Builder for model ResponseOnboarding
 *
 * @see ResponseOnboarding
 */
class ResponseOnboardingBuilder
{
    /**
     * @var ResponseOnboarding
     */
    private $instance;

    private function __construct(ResponseOnboarding $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response onboarding Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseOnboarding());
    }

    /**
     * Sets data field.
     */
    public function data(?Data8 $value): self
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
     * Initializes a new response onboarding object.
     */
    public function build(): ResponseOnboarding
    {
        return CoreHelper::clone($this->instance);
    }
}
