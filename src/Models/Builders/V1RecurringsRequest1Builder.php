<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\V1RecurringsRequest1;

/**
 * Builder for model V1RecurringsRequest1
 *
 * @see V1RecurringsRequest1
 */
class V1RecurringsRequest1Builder
{
    /**
     * @var V1RecurringsRequest1
     */
    private $instance;

    private function __construct(V1RecurringsRequest1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new v1 recurrings request 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new V1RecurringsRequest1());
    }

    /**
     * Sets next run date field.
     */
    public function nextRunDate(?string $value): self
    {
        $this->instance->setNextRunDate($value);
        return $this;
    }

    /**
     * Unsets next run date field.
     */
    public function unsetNextRunDate(): self
    {
        $this->instance->unsetNextRunDate();
        return $this;
    }

    /**
     * Sets account vault id field.
     */
    public function accountVaultId(?string $value): self
    {
        $this->instance->setAccountVaultId($value);
        return $this;
    }

    /**
     * Unsets account vault id field.
     */
    public function unsetAccountVaultId(): self
    {
        $this->instance->unsetAccountVaultId();
        return $this;
    }

    /**
     * Sets token id field.
     */
    public function tokenId(?string $value): self
    {
        $this->instance->setTokenId($value);
        return $this;
    }

    /**
     * Unsets token id field.
     */
    public function unsetTokenId(): self
    {
        $this->instance->unsetTokenId();
        return $this;
    }

    /**
     * Sets active field.
     */
    public function active(?bool $value): self
    {
        $this->instance->setActive($value);
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
     * Sets end date field.
     */
    public function endDate(?string $value): self
    {
        $this->instance->setEndDate($value);
        return $this;
    }

    /**
     * Unsets end date field.
     */
    public function unsetEndDate(): self
    {
        $this->instance->unsetEndDate();
        return $this;
    }

    /**
     * Sets installment total count field.
     */
    public function installmentTotalCount(?int $value): self
    {
        $this->instance->setInstallmentTotalCount($value);
        return $this;
    }

    /**
     * Unsets installment total count field.
     */
    public function unsetInstallmentTotalCount(): self
    {
        $this->instance->unsetInstallmentTotalCount();
        return $this;
    }

    /**
     * Sets interval field.
     */
    public function interval(?int $value): self
    {
        $this->instance->setInterval($value);
        return $this;
    }

    /**
     * Unsets interval field.
     */
    public function unsetInterval(): self
    {
        $this->instance->unsetInterval();
        return $this;
    }

    /**
     * Sets interval type field.
     */
    public function intervalType(?string $value): self
    {
        $this->instance->setIntervalType($value);
        return $this;
    }

    /**
     * Unsets interval type field.
     */
    public function unsetIntervalType(): self
    {
        $this->instance->unsetIntervalType();
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
     * Sets notification days field.
     */
    public function notificationDays(?int $value): self
    {
        $this->instance->setNotificationDays($value);
        return $this;
    }

    /**
     * Unsets notification days field.
     */
    public function unsetNotificationDays(): self
    {
        $this->instance->unsetNotificationDays();
        return $this;
    }

    /**
     * Sets payment method field.
     */
    public function paymentMethod(?string $value): self
    {
        $this->instance->setPaymentMethod($value);
        return $this;
    }

    /**
     * Unsets payment method field.
     */
    public function unsetPaymentMethod(): self
    {
        $this->instance->unsetPaymentMethod();
        return $this;
    }

    /**
     * Sets product transaction id field.
     */
    public function productTransactionId(?string $value): self
    {
        $this->instance->setProductTransactionId($value);
        return $this;
    }

    /**
     * Unsets product transaction id field.
     */
    public function unsetProductTransactionId(): self
    {
        $this->instance->unsetProductTransactionId();
        return $this;
    }

    /**
     * Sets recurring id field.
     */
    public function recurringId(?string $value): self
    {
        $this->instance->setRecurringId($value);
        return $this;
    }

    /**
     * Unsets recurring id field.
     */
    public function unsetRecurringId(): self
    {
        $this->instance->unsetRecurringId();
        return $this;
    }

    /**
     * Sets recurring api id field.
     */
    public function recurringApiId(?string $value): self
    {
        $this->instance->setRecurringApiId($value);
        return $this;
    }

    /**
     * Unsets recurring api id field.
     */
    public function unsetRecurringApiId(): self
    {
        $this->instance->unsetRecurringApiId();
        return $this;
    }

    /**
     * Sets start date field.
     */
    public function startDate(?string $value): self
    {
        $this->instance->setStartDate($value);
        return $this;
    }

    /**
     * Unsets start date field.
     */
    public function unsetStartDate(): self
    {
        $this->instance->unsetStartDate();
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Unsets status field.
     */
    public function unsetStatus(): self
    {
        $this->instance->unsetStatus();
        return $this;
    }

    /**
     * Sets transaction amount field.
     */
    public function transactionAmount(?int $value): self
    {
        $this->instance->setTransactionAmount($value);
        return $this;
    }

    /**
     * Unsets transaction amount field.
     */
    public function unsetTransactionAmount(): self
    {
        $this->instance->unsetTransactionAmount();
        return $this;
    }

    /**
     * Sets terms agree field.
     */
    public function termsAgree(?bool $value): self
    {
        $this->instance->setTermsAgree($value);
        return $this;
    }

    /**
     * Sets terms agree ip field.
     */
    public function termsAgreeIp(?string $value): self
    {
        $this->instance->setTermsAgreeIp($value);
        return $this;
    }

    /**
     * Unsets terms agree ip field.
     */
    public function unsetTermsAgreeIp(): self
    {
        $this->instance->unsetTermsAgreeIp();
        return $this;
    }

    /**
     * Sets recurring c 1 field.
     */
    public function recurringC1(?string $value): self
    {
        $this->instance->setRecurringC1($value);
        return $this;
    }

    /**
     * Unsets recurring c 1 field.
     */
    public function unsetRecurringC1(): self
    {
        $this->instance->unsetRecurringC1();
        return $this;
    }

    /**
     * Sets recurring c 2 field.
     */
    public function recurringC2(?string $value): self
    {
        $this->instance->setRecurringC2($value);
        return $this;
    }

    /**
     * Unsets recurring c 2 field.
     */
    public function unsetRecurringC2(): self
    {
        $this->instance->unsetRecurringC2();
        return $this;
    }

    /**
     * Sets recurring c 3 field.
     */
    public function recurringC3(?string $value): self
    {
        $this->instance->setRecurringC3($value);
        return $this;
    }

    /**
     * Unsets recurring c 3 field.
     */
    public function unsetRecurringC3(): self
    {
        $this->instance->unsetRecurringC3();
        return $this;
    }

    /**
     * Sets send to proc as recur field.
     */
    public function sendToProcAsRecur(?bool $value): self
    {
        $this->instance->setSendToProcAsRecur($value);
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
     * Initializes a new v1 recurrings request 1 object.
     */
    public function build(): V1RecurringsRequest1
    {
        return CoreHelper::clone($this->instance);
    }
}
