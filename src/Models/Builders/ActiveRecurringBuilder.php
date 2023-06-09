<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\ActiveRecurring;
use FortisAPILib\Models\Joi;

/**
 * Builder for model ActiveRecurring
 *
 * @see ActiveRecurring
 */
class ActiveRecurringBuilder
{
    /**
     * @var ActiveRecurring
     */
    private $instance;

    private function __construct(ActiveRecurring $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new active recurring Builder object.
     */
    public static function init(
        bool $active,
        int $interval,
        string $intervalType,
        string $locationId,
        string $paymentMethod,
        string $startDate,
        string $status,
        int $transactionAmount,
        string $id,
        string $nextRunDate,
        int $createdTs,
        int $modifiedTs,
        string $recurringTypeId
    ): self {
        return new self(new ActiveRecurring(
            $active,
            $interval,
            $intervalType,
            $locationId,
            $paymentMethod,
            $startDate,
            $status,
            $transactionAmount,
            $id,
            $nextRunDate,
            $createdTs,
            $modifiedTs,
            $recurringTypeId
        ));
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
     * Sets token id field.
     */
    public function tokenId(?string $value): self
    {
        $this->instance->setTokenId($value);
        return $this;
    }

    /**
     * Sets account vault api id field.
     */
    public function accountVaultApiId(?string $value): self
    {
        $this->instance->setAccountVaultApiId($value);
        return $this;
    }

    /**
     * Unsets account vault api id field.
     */
    public function unsetAccountVaultApiId(): self
    {
        $this->instance->unsetAccountVaultApiId();
        return $this;
    }

    /**
     * Sets token api id field.
     */
    public function tokenApiId(?string $value): self
    {
        $this->instance->setTokenApiId($value);
        return $this;
    }

    /**
     * Unsets token api id field.
     */
    public function unsetTokenApiId(): self
    {
        $this->instance->unsetTokenApiId();
        return $this;
    }

    /**
     * Sets joi field.
     */
    public function joi(?Joi $value): self
    {
        $this->instance->setJoi($value);
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
     * Sets installment amount total field.
     */
    public function installmentAmountTotal(?int $value): self
    {
        $this->instance->setInstallmentAmountTotal($value);
        return $this;
    }

    /**
     * Unsets installment amount total field.
     */
    public function unsetInstallmentAmountTotal(): self
    {
        $this->instance->unsetInstallmentAmountTotal();
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
     * Initializes a new active recurring object.
     */
    public function build(): ActiveRecurring
    {
        return CoreHelper::clone($this->instance);
    }
}
