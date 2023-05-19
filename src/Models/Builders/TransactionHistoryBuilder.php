<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\TransactionHistory;

/**
 * Builder for model TransactionHistory
 *
 * @see TransactionHistory
 */
class TransactionHistoryBuilder
{
    /**
     * @var TransactionHistory
     */
    private $instance;

    private function __construct(TransactionHistory $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new transaction history Builder object.
     */
    public static function init(string $transactionId, string $id, int $createdTs, int $modifiedTs): self
    {
        return new self(new TransactionHistory($transactionId, $id, $createdTs, $modifiedTs));
    }

    /**
     * Sets status id field.
     */
    public function statusId(?int $value): self
    {
        $this->instance->setStatusId($value);
        return $this;
    }

    /**
     * Unsets status id field.
     */
    public function unsetStatusId(): self
    {
        $this->instance->unsetStatusId();
        return $this;
    }

    /**
     * Sets event date ts field.
     */
    public function eventDateTs(?int $value): self
    {
        $this->instance->setEventDateTs($value);
        return $this;
    }

    /**
     * Unsets event date ts field.
     */
    public function unsetEventDateTs(): self
    {
        $this->instance->unsetEventDateTs();
        return $this;
    }

    /**
     * Sets location id field.
     */
    public function locationId(?string $value): self
    {
        $this->instance->setLocationId($value);
        return $this;
    }

    /**
     * Unsets location id field.
     */
    public function unsetLocationId(): self
    {
        $this->instance->unsetLocationId();
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
     * Initializes a new transaction history object.
     */
    public function build(): TransactionHistory
    {
        return CoreHelper::clone($this->instance);
    }
}
