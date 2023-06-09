<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Method2;

/**
 * Builder for model Method2
 *
 * @see Method2
 */
class Method2Builder
{
    /**
     * @var Method2
     */
    private $instance;

    private function __construct(Method2 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new method 2 Builder object.
     */
    public static function init(string $type, string $productTransactionId): self
    {
        return new self(new Method2($type, $productTransactionId));
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
     * Initializes a new method 2 object.
     */
    public function build(): Method2
    {
        return CoreHelper::clone($this->instance);
    }
}
