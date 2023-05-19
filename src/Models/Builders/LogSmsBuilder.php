<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\LogSms;

/**
 * Builder for model LogSms
 *
 * @see LogSms
 */
class LogSmsBuilder
{
    /**
     * @var LogSms
     */
    private $instance;

    private function __construct(LogSms $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new log sms Builder object.
     */
    public static function init(
        string $id,
        string $reasonModel,
        string $reasonModelId,
        string $providerId,
        string $status,
        string $sender,
        string $recipient,
        int $createdTs,
        string $createdUserId
    ): self {
        return new self(new LogSms(
            $id,
            $reasonModel,
            $reasonModelId,
            $providerId,
            $status,
            $sender,
            $recipient,
            $createdTs,
            $createdUserId
        ));
    }

    /**
     * Sets body field.
     */
    public function body(?string $value): self
    {
        $this->instance->setBody($value);
        return $this;
    }

    /**
     * Unsets body field.
     */
    public function unsetBody(): self
    {
        $this->instance->unsetBody();
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
     * Initializes a new log sms object.
     */
    public function build(): LogSms
    {
        return CoreHelper::clone($this->instance);
    }
}
