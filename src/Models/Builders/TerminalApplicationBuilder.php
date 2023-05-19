<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\TerminalApplication;

/**
 * Builder for model TerminalApplication
 *
 * @see TerminalApplication
 */
class TerminalApplicationBuilder
{
    /**
     * @var TerminalApplication
     */
    private $instance;

    private function __construct(TerminalApplication $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new terminal application Builder object.
     */
    public static function init(
        bool $standalone,
        bool $emvCapable,
        bool $nfcCapable,
        bool $pinCapable,
        bool $printCapable,
        bool $msrCapable,
        bool $sigCaptureCapable,
        bool $mposTerminal,
        string $id
    ): self {
        return new self(new TerminalApplication(
            $standalone,
            $emvCapable,
            $nfcCapable,
            $pinCapable,
            $printCapable,
            $msrCapable,
            $sigCaptureCapable,
            $mposTerminal,
            $id
        ));
    }

    /**
     * Sets title field.
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Unsets title field.
     */
    public function unsetTitle(): self
    {
        $this->instance->unsetTitle();
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
     * Sets modified ts field.
     */
    public function modifiedTs(?int $value): self
    {
        $this->instance->setModifiedTs($value);
        return $this;
    }

    /**
     * Unsets modified ts field.
     */
    public function unsetModifiedTs(): self
    {
        $this->instance->unsetModifiedTs();
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
     * Initializes a new terminal application object.
     */
    public function build(): TerminalApplication
    {
        return CoreHelper::clone($this->instance);
    }
}
