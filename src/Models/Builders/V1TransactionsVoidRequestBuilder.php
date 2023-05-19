<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\V1TransactionsVoidRequest;

/**
 * Builder for model V1TransactionsVoidRequest
 *
 * @see V1TransactionsVoidRequest
 */
class V1TransactionsVoidRequestBuilder
{
    /**
     * @var V1TransactionsVoidRequest
     */
    private $instance;

    private function __construct(V1TransactionsVoidRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new v1 transactions void request Builder object.
     */
    public static function init(): self
    {
        return new self(new V1TransactionsVoidRequest());
    }

    /**
     * Sets tags field.
     */
    public function tags(?array $value): self
    {
        $this->instance->setTags($value);
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
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
     * Initializes a new v1 transactions void request object.
     */
    public function build(): V1TransactionsVoidRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
