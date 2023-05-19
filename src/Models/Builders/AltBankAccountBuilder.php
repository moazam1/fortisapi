<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\AltBankAccount;

/**
 * Builder for model AltBankAccount
 *
 * @see AltBankAccount
 */
class AltBankAccountBuilder
{
    /**
     * @var AltBankAccount
     */
    private $instance;

    private function __construct(AltBankAccount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new alt bank account Builder object.
     */
    public static function init(): self
    {
        return new self(new AltBankAccount());
    }

    /**
     * Sets routing number field.
     */
    public function routingNumber(?string $value): self
    {
        $this->instance->setRoutingNumber($value);
        return $this;
    }

    /**
     * Unsets routing number field.
     */
    public function unsetRoutingNumber(): self
    {
        $this->instance->unsetRoutingNumber();
        return $this;
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Unsets account number field.
     */
    public function unsetAccountNumber(): self
    {
        $this->instance->unsetAccountNumber();
        return $this;
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
     * Sets deposit type field.
     */
    public function depositType(?string $value): self
    {
        $this->instance->setDepositType($value);
        return $this;
    }

    /**
     * Unsets deposit type field.
     */
    public function unsetDepositType(): self
    {
        $this->instance->unsetDepositType();
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
     * Initializes a new alt bank account object.
     */
    public function build(): AltBankAccount
    {
        return CoreHelper::clone($this->instance);
    }
}