<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\TerminalRouter;

/**
 * Builder for model TerminalRouter
 *
 * @see TerminalRouter
 */
class TerminalRouterBuilder
{
    /**
     * @var TerminalRouter
     */
    private $instance;

    private function __construct(TerminalRouter $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new terminal router Builder object.
     */
    public static function init(string $locationId, string $id, int $createdTs, int $modifiedTs): self
    {
        return new self(new TerminalRouter($locationId, $id, $createdTs, $modifiedTs));
    }

    /**
     * Sets mac address field.
     */
    public function macAddress(?string $value): self
    {
        $this->instance->setMacAddress($value);
        return $this;
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
     * Initializes a new terminal router object.
     */
    public function build(): TerminalRouter
    {
        return CoreHelper::clone($this->instance);
    }
}
