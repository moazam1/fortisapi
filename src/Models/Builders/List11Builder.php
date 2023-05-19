<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\BillingAddress4;
use FortisAPILib\Models\List11;

/**
 * Builder for model List11
 *
 * @see List11
 */
class List11Builder
{
    /**
     * @var List11
     */
    private $instance;

    private function __construct(List11 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list 11 Builder object.
     */
    public static function init(string $expDate, string $accountNumber, string $id, int $createdTs): self
    {
        return new self(new List11($expDate, $accountNumber, $id, $createdTs));
    }

    /**
     * Sets account holder name field.
     */
    public function accountHolderName(?string $value): self
    {
        $this->instance->setAccountHolderName($value);
        return $this;
    }

    /**
     * Unsets account holder name field.
     */
    public function unsetAccountHolderName(): self
    {
        $this->instance->unsetAccountHolderName();
        return $this;
    }

    /**
     * Sets cvv field.
     */
    public function cvv(?string $value): self
    {
        $this->instance->setCvv($value);
        return $this;
    }

    /**
     * Unsets cvv field.
     */
    public function unsetCvv(): self
    {
        $this->instance->unsetCvv();
        return $this;
    }

    /**
     * Sets billing address field.
     */
    public function billingAddress(?BillingAddress4 $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets contact id field.
     */
    public function contactId(?string $value): self
    {
        $this->instance->setContactId($value);
        return $this;
    }

    /**
     * Unsets contact id field.
     */
    public function unsetContactId(): self
    {
        $this->instance->unsetContactId();
        return $this;
    }

    /**
     * Sets contact api id field.
     */
    public function contactApiId(?string $value): self
    {
        $this->instance->setContactApiId($value);
        return $this;
    }

    /**
     * Unsets contact api id field.
     */
    public function unsetContactApiId(): self
    {
        $this->instance->unsetContactApiId();
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
     * Initializes a new list 11 object.
     */
    public function build(): List11
    {
        return CoreHelper::clone($this->instance);
    }
}