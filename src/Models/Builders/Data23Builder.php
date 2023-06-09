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

/**
 * Builder for model Data23
 *
 * @see Data23
 */
class Data23Builder
{
    /**
     * @var Data23
     */
    private $instance;

    private function __construct(Data23 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new data 23 Builder object.
     */
    public static function init(string $id, string $userId, string $hash, int $createdTs): self
    {
        return new self(new Data23($id, $userId, $hash, $createdTs));
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
     * Initializes a new data 23 object.
     */
    public function build(): Data23
    {
        return CoreHelper::clone($this->instance);
    }
}
