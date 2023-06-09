<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Filter12;

/**
 * Builder for model Filter12
 *
 * @see Filter12
 */
class Filter12Builder
{
    /**
     * @var Filter12
     */
    private $instance;

    private function __construct(Filter12 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new filter 12 Builder object.
     */
    public static function init(): self
    {
        return new self(new Filter12());
    }

    /**
     * Sets account holder name field.
     */
    public function accountHolderName(?array $value): self
    {
        $this->instance->setAccountHolderName($value);
        return $this;
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?array $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Sets account vault api id field.
     */
    public function accountVaultApiId(?array $value): self
    {
        $this->instance->setAccountVaultApiId($value);
        return $this;
    }

    /**
     * Sets token api id field.
     */
    public function tokenApiId(?array $value): self
    {
        $this->instance->setTokenApiId($value);
        return $this;
    }

    /**
     * Sets accountvault c 1 field.
     */
    public function accountvaultC1(?array $value): self
    {
        $this->instance->setAccountvaultC1($value);
        return $this;
    }

    /**
     * Sets accountvault c 2 field.
     */
    public function accountvaultC2(?array $value): self
    {
        $this->instance->setAccountvaultC2($value);
        return $this;
    }

    /**
     * Sets accountvault c 3 field.
     */
    public function accountvaultC3(?array $value): self
    {
        $this->instance->setAccountvaultC3($value);
        return $this;
    }

    /**
     * Sets token c 1 field.
     */
    public function tokenC1(?array $value): self
    {
        $this->instance->setTokenC1($value);
        return $this;
    }

    /**
     * Sets token c 2 field.
     */
    public function tokenC2(?array $value): self
    {
        $this->instance->setTokenC2($value);
        return $this;
    }

    /**
     * Sets token c 3 field.
     */
    public function tokenC3(?array $value): self
    {
        $this->instance->setTokenC3($value);
        return $this;
    }

    /**
     * Sets ach sec code field.
     */
    public function achSecCode(?array $value): self
    {
        $this->instance->setAchSecCode($value);
        return $this;
    }

    /**
     * Sets billing address field.
     */
    public function billingAddress(?array $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets contact id field.
     */
    public function contactId(?array $value): self
    {
        $this->instance->setContactId($value);
        return $this;
    }

    /**
     * Sets customer id field.
     */
    public function customerId(?array $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Sets identity verification field.
     */
    public function identityVerification(?array $value): self
    {
        $this->instance->setIdentityVerification($value);
        return $this;
    }

    /**
     * Sets location id field.
     */
    public function locationId(?array $value): self
    {
        $this->instance->setLocationId($value);
        return $this;
    }

    /**
     * Sets previous account vault api id field.
     */
    public function previousAccountVaultApiId(?array $value): self
    {
        $this->instance->setPreviousAccountVaultApiId($value);
        return $this;
    }

    /**
     * Sets previous token api id field.
     */
    public function previousTokenApiId(?array $value): self
    {
        $this->instance->setPreviousTokenApiId($value);
        return $this;
    }

    /**
     * Sets previous account vault id field.
     */
    public function previousAccountVaultId(?array $value): self
    {
        $this->instance->setPreviousAccountVaultId($value);
        return $this;
    }

    /**
     * Sets previous token id field.
     */
    public function previousTokenId(?array $value): self
    {
        $this->instance->setPreviousTokenId($value);
        return $this;
    }

    /**
     * Sets previous transaction id field.
     */
    public function previousTransactionId(?array $value): self
    {
        $this->instance->setPreviousTransactionId($value);
        return $this;
    }

    /**
     * Sets terms agree field.
     */
    public function termsAgree(?array $value): self
    {
        $this->instance->setTermsAgree($value);
        return $this;
    }

    /**
     * Sets terms agree ip field.
     */
    public function termsAgreeIp(?array $value): self
    {
        $this->instance->setTermsAgreeIp($value);
        return $this;
    }

    /**
     * Sets title field.
     */
    public function title(?array $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Sets joi field.
     */
    public function joi(?array $value): self
    {
        $this->instance->setJoi($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?array $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets account type field.
     */
    public function accountType(?array $value): self
    {
        $this->instance->setAccountType($value);
        return $this;
    }

    /**
     * Sets active field.
     */
    public function active(?array $value): self
    {
        $this->instance->setActive($value);
        return $this;
    }

    /**
     * Sets cau summary status id field.
     */
    public function cauSummaryStatusId(?array $value): self
    {
        $this->instance->setCauSummaryStatusId($value);
        return $this;
    }

    /**
     * Sets created ts field.
     */
    public function createdTs($value): self
    {
        $this->instance->setCreatedTs($value);
        return $this;
    }

    /**
     * Sets e serial number field.
     */
    public function eSerialNumber(?array $value): self
    {
        $this->instance->setESerialNumber($value);
        return $this;
    }

    /**
     * Sets e track data field.
     */
    public function eTrackData(?array $value): self
    {
        $this->instance->setETrackData($value);
        return $this;
    }

    /**
     * Sets e format field.
     */
    public function eFormat(?array $value): self
    {
        $this->instance->setEFormat($value);
        return $this;
    }

    /**
     * Sets e keyed data field.
     */
    public function eKeyedData(?array $value): self
    {
        $this->instance->setEKeyedData($value);
        return $this;
    }

    /**
     * Sets expiring in months field.
     */
    public function expiringInMonths(?array $value): self
    {
        $this->instance->setExpiringInMonths($value);
        return $this;
    }

    /**
     * Sets exp date field.
     */
    public function expDate(?array $value): self
    {
        $this->instance->setExpDate($value);
        return $this;
    }

    /**
     * Sets first six field.
     */
    public function firstSix(?array $value): self
    {
        $this->instance->setFirstSix($value);
        return $this;
    }

    /**
     * Sets has recurring field.
     */
    public function hasRecurring(?array $value): self
    {
        $this->instance->setHasRecurring($value);
        return $this;
    }

    /**
     * Sets last four field.
     */
    public function lastFour(?array $value): self
    {
        $this->instance->setLastFour($value);
        return $this;
    }

    /**
     * Sets modified ts field.
     */
    public function modifiedTs($value): self
    {
        $this->instance->setModifiedTs($value);
        return $this;
    }

    /**
     * Sets payment method field.
     */
    public function paymentMethod(?array $value): self
    {
        $this->instance->setPaymentMethod($value);
        return $this;
    }

    /**
     * Sets ticket field.
     */
    public function ticket(?array $value): self
    {
        $this->instance->setTicket($value);
        return $this;
    }

    /**
     * Sets track data field.
     */
    public function trackData(?array $value): self
    {
        $this->instance->setTrackData($value);
        return $this;
    }

    /**
     * Sets location field.
     */
    public function location(?array $value): self
    {
        $this->instance->setLocation($value);
        return $this;
    }

    /**
     * Sets contact field.
     */
    public function contact(?array $value): self
    {
        $this->instance->setContact($value);
        return $this;
    }

    /**
     * Sets transactions field.
     */
    public function transactions(?array $value): self
    {
        $this->instance->setTransactions($value);
        return $this;
    }

    /**
     * Sets active recurrings field.
     */
    public function activeRecurrings(?array $value): self
    {
        $this->instance->setActiveRecurrings($value);
        return $this;
    }

    /**
     * Sets is deletable field.
     */
    public function isDeletable(?array $value): self
    {
        $this->instance->setIsDeletable($value);
        return $this;
    }

    /**
     * Sets signature field.
     */
    public function signature(?array $value): self
    {
        $this->instance->setSignature($value);
        return $this;
    }

    /**
     * Sets created user field.
     */
    public function createdUser(?array $value): self
    {
        $this->instance->setCreatedUser($value);
        return $this;
    }

    /**
     * Sets changelogs field.
     */
    public function changelogs(?array $value): self
    {
        $this->instance->setChangelogs($value);
        return $this;
    }

    /**
     * Sets account vault cau logs field.
     */
    public function accountVaultCauLogs(?array $value): self
    {
        $this->instance->setAccountVaultCauLogs($value);
        return $this;
    }

    /**
     * Sets account vault cau product transactions field.
     */
    public function accountVaultCauProductTransactions(?array $value): self
    {
        $this->instance->setAccountVaultCauProductTransactions($value);
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
     * Initializes a new filter 12 object.
     */
    public function build(): Filter12
    {
        return CoreHelper::clone($this->instance);
    }
}
