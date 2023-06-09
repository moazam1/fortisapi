<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Sort;

/**
 * Builder for model Sort
 *
 * @see Sort
 */
class SortBuilder
{
    /**
     * @var Sort
     */
    private $instance;

    private function __construct(Sort $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new sort Builder object.
     */
    public static function init(array $fields): self
    {
        return new self(new Sort($fields));
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
     * Initializes a new sort object.
     */
    public function build(): Sort
    {
        return CoreHelper::clone($this->instance);
    }
}
