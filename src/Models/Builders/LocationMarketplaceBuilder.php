<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\LocationMarketplace;

/**
 * Builder for model LocationMarketplace
 *
 * @see LocationMarketplace
 */
class LocationMarketplaceBuilder
{
    /**
     * @var LocationMarketplace
     */
    private $instance;

    private function __construct(LocationMarketplace $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new location marketplace Builder object.
     */
    public static function init(string $locationId, string $marketplaceId, string $id): self
    {
        return new self(new LocationMarketplace($locationId, $marketplaceId, $id));
    }

    /**
     * Sets location api id field.
     */
    public function locationApiId(?string $value): self
    {
        $this->instance->setLocationApiId($value);
        return $this;
    }

    /**
     * Unsets location api id field.
     */
    public function unsetLocationApiId(): self
    {
        $this->instance->unsetLocationApiId();
        return $this;
    }

    /**
     * Sets user id field.
     */
    public function userId(?string $value): self
    {
        $this->instance->setUserId($value);
        return $this;
    }

    /**
     * Unsets user id field.
     */
    public function unsetUserId(): self
    {
        $this->instance->unsetUserId();
        return $this;
    }

    /**
     * Sets created ts field.
     */
    public function createdTs(?int $value): self
    {
        $this->instance->setCreatedTs($value);
        return $this;
    }

    /**
     * Unsets created ts field.
     */
    public function unsetCreatedTs(): self
    {
        $this->instance->unsetCreatedTs();
        return $this;
    }

    /**
     * Sets created user id field.
     */
    public function createdUserId(?string $value): self
    {
        $this->instance->setCreatedUserId($value);
        return $this;
    }

    /**
     * Unsets created user id field.
     */
    public function unsetCreatedUserId(): self
    {
        $this->instance->unsetCreatedUserId();
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
     * Initializes a new location marketplace object.
     */
    public function build(): LocationMarketplace
    {
        return CoreHelper::clone($this->instance);
    }
}
