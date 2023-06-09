<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data24;

/**
 * Builder for model Data24
 *
 * @see Data24
 */
class Data24Builder
{
    /**
     * @var Data24
     */
    private $instance;

    private function __construct(Data24 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new data 24 Builder object.
     */
    public static function init(string $userApiKey): self
    {
        return new self(new Data24($userApiKey));
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
     * Initializes a new data 24 object.
     */
    public function build(): Data24
    {
        return CoreHelper::clone($this->instance);
    }
}
