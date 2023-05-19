<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\BillingAddress;
use FortisAPILib\Models\IdentityVerification;
use FortisAPILib\Models\V1TransactionsCcForceTicketRequest;

/**
 * Builder for model V1TransactionsCcForceTicketRequest
 *
 * @see V1TransactionsCcForceTicketRequest
 */
class V1TransactionsCcForceTicketRequestBuilder
{
    /**
     * @var V1TransactionsCcForceTicketRequest
     */
    private $instance;

    private function __construct(V1TransactionsCcForceTicketRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new v1 transactions cc force ticket request Builder object.
     */
    public static function init(string $ticketId, string $authCode): self
    {
        return new self(new V1TransactionsCcForceTicketRequest($ticketId, $authCode));
    }

    /**
     * Sets additional amounts field.
     */
    public function additionalAmounts(?array $value): self
    {
        $this->instance->setAdditionalAmounts($value);
        return $this;
    }

    /**
     * Sets billing address field.
     */
    public function billingAddress(?BillingAddress $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets checkin date field.
     */
    public function checkinDate(?string $value): self
    {
        $this->instance->setCheckinDate($value);
        return $this;
    }

    /**
     * Unsets checkin date field.
     */
    public function unsetCheckinDate(): self
    {
        $this->instance->unsetCheckinDate();
        return $this;
    }

    /**
     * Sets checkout date field.
     */
    public function checkoutDate(?string $value): self
    {
        $this->instance->setCheckoutDate($value);
        return $this;
    }

    /**
     * Unsets checkout date field.
     */
    public function unsetCheckoutDate(): self
    {
        $this->instance->unsetCheckoutDate();
        return $this;
    }

    /**
     * Sets clerk number field.
     */
    public function clerkNumber(?string $value): self
    {
        $this->instance->setClerkNumber($value);
        return $this;
    }

    /**
     * Unsets clerk number field.
     */
    public function unsetClerkNumber(): self
    {
        $this->instance->unsetClerkNumber();
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
     * Sets custom data field.
     */
    public function customData(?array $value): self
    {
        $this->instance->setCustomData($value);
        return $this;
    }

    /**
     * Sets customer id field.
     */
    public function customerId(?string $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Unsets customer id field.
     */
    public function unsetCustomerId(): self
    {
        $this->instance->unsetCustomerId();
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
     * Sets identity verification field.
     */
    public function identityVerification(?IdentityVerification $value): self
    {
        $this->instance->setIdentityVerification($value);
        return $this;
    }

    /**
     * Sets iias ind field.
     */
    public function iiasInd(?int $value): self
    {
        $this->instance->setIiasInd($value);
        return $this;
    }

    /**
     * Unsets iias ind field.
     */
    public function unsetIiasInd(): self
    {
        $this->instance->unsetIiasInd();
        return $this;
    }

    /**
     * Sets image front field.
     */
    public function imageFront(?string $value): self
    {
        $this->instance->setImageFront($value);
        return $this;
    }

    /**
     * Unsets image front field.
     */
    public function unsetImageFront(): self
    {
        $this->instance->unsetImageFront();
        return $this;
    }

    /**
     * Sets image back field.
     */
    public function imageBack(?string $value): self
    {
        $this->instance->setImageBack($value);
        return $this;
    }

    /**
     * Unsets image back field.
     */
    public function unsetImageBack(): self
    {
        $this->instance->unsetImageBack();
        return $this;
    }

    /**
     * Sets installment field.
     */
    public function installment(?bool $value): self
    {
        $this->instance->setInstallment($value);
        return $this;
    }

    /**
     * Sets installment number field.
     */
    public function installmentNumber(?int $value): self
    {
        $this->instance->setInstallmentNumber($value);
        return $this;
    }

    /**
     * Unsets installment number field.
     */
    public function unsetInstallmentNumber(): self
    {
        $this->instance->unsetInstallmentNumber();
        return $this;
    }

    /**
     * Sets installment count field.
     */
    public function installmentCount(?int $value): self
    {
        $this->instance->setInstallmentCount($value);
        return $this;
    }

    /**
     * Unsets installment count field.
     */
    public function unsetInstallmentCount(): self
    {
        $this->instance->unsetInstallmentCount();
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
     * Sets advance deposit field.
     */
    public function advanceDeposit(?bool $value): self
    {
        $this->instance->setAdvanceDeposit($value);
        return $this;
    }

    /**
     * Sets no show field.
     */
    public function noShow(?bool $value): self
    {
        $this->instance->setNoShow($value);
        return $this;
    }

    /**
     * Sets notification email address field.
     */
    public function notificationEmailAddress(?string $value): self
    {
        $this->instance->setNotificationEmailAddress($value);
        return $this;
    }

    /**
     * Unsets notification email address field.
     */
    public function unsetNotificationEmailAddress(): self
    {
        $this->instance->unsetNotificationEmailAddress();
        return $this;
    }

    /**
     * Sets order number field.
     */
    public function orderNumber(?string $value): self
    {
        $this->instance->setOrderNumber($value);
        return $this;
    }

    /**
     * Unsets order number field.
     */
    public function unsetOrderNumber(): self
    {
        $this->instance->unsetOrderNumber();
        return $this;
    }

    /**
     * Sets po number field.
     */
    public function poNumber(?string $value): self
    {
        $this->instance->setPoNumber($value);
        return $this;
    }

    /**
     * Unsets po number field.
     */
    public function unsetPoNumber(): self
    {
        $this->instance->unsetPoNumber();
        return $this;
    }

    /**
     * Sets quick invoice id field.
     */
    public function quickInvoiceId(?string $value): self
    {
        $this->instance->setQuickInvoiceId($value);
        return $this;
    }

    /**
     * Unsets quick invoice id field.
     */
    public function unsetQuickInvoiceId(): self
    {
        $this->instance->unsetQuickInvoiceId();
        return $this;
    }

    /**
     * Sets recurring field.
     */
    public function recurring(?bool $value): self
    {
        $this->instance->setRecurring($value);
        return $this;
    }

    /**
     * Sets recurring number field.
     */
    public function recurringNumber(?int $value): self
    {
        $this->instance->setRecurringNumber($value);
        return $this;
    }

    /**
     * Unsets recurring number field.
     */
    public function unsetRecurringNumber(): self
    {
        $this->instance->unsetRecurringNumber();
        return $this;
    }

    /**
     * Sets room num field.
     */
    public function roomNum(?string $value): self
    {
        $this->instance->setRoomNum($value);
        return $this;
    }

    /**
     * Unsets room num field.
     */
    public function unsetRoomNum(): self
    {
        $this->instance->unsetRoomNum();
        return $this;
    }

    /**
     * Sets room rate field.
     */
    public function roomRate(?int $value): self
    {
        $this->instance->setRoomRate($value);
        return $this;
    }

    /**
     * Unsets room rate field.
     */
    public function unsetRoomRate(): self
    {
        $this->instance->unsetRoomRate();
        return $this;
    }

    /**
     * Sets save account field.
     */
    public function saveAccount(?bool $value): self
    {
        $this->instance->setSaveAccount($value);
        return $this;
    }

    /**
     * Sets save account title field.
     */
    public function saveAccountTitle(?string $value): self
    {
        $this->instance->setSaveAccountTitle($value);
        return $this;
    }

    /**
     * Unsets save account title field.
     */
    public function unsetSaveAccountTitle(): self
    {
        $this->instance->unsetSaveAccountTitle();
        return $this;
    }

    /**
     * Sets subtotal amount field.
     */
    public function subtotalAmount(?int $value): self
    {
        $this->instance->setSubtotalAmount($value);
        return $this;
    }

    /**
     * Unsets subtotal amount field.
     */
    public function unsetSubtotalAmount(): self
    {
        $this->instance->unsetSubtotalAmount();
        return $this;
    }

    /**
     * Sets surcharge amount field.
     */
    public function surchargeAmount(?int $value): self
    {
        $this->instance->setSurchargeAmount($value);
        return $this;
    }

    /**
     * Unsets surcharge amount field.
     */
    public function unsetSurchargeAmount(): self
    {
        $this->instance->unsetSurchargeAmount();
        return $this;
    }

    /**
     * Sets tags field.
     */
    public function tags(?array $value): self
    {
        $this->instance->setTags($value);
        return $this;
    }

    /**
     * Sets tax field.
     */
    public function tax(?int $value): self
    {
        $this->instance->setTax($value);
        return $this;
    }

    /**
     * Unsets tax field.
     */
    public function unsetTax(): self
    {
        $this->instance->unsetTax();
        return $this;
    }

    /**
     * Sets tip amount field.
     */
    public function tipAmount(?int $value): self
    {
        $this->instance->setTipAmount($value);
        return $this;
    }

    /**
     * Unsets tip amount field.
     */
    public function unsetTipAmount(): self
    {
        $this->instance->unsetTipAmount();
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
     * Sets secondary amount field.
     */
    public function secondaryAmount(?int $value): self
    {
        $this->instance->setSecondaryAmount($value);
        return $this;
    }

    /**
     * Unsets secondary amount field.
     */
    public function unsetSecondaryAmount(): self
    {
        $this->instance->unsetSecondaryAmount();
        return $this;
    }

    /**
     * Sets transaction api id field.
     */
    public function transactionApiId(?string $value): self
    {
        $this->instance->setTransactionApiId($value);
        return $this;
    }

    /**
     * Unsets transaction api id field.
     */
    public function unsetTransactionApiId(): self
    {
        $this->instance->unsetTransactionApiId();
        return $this;
    }

    /**
     * Sets transaction c 1 field.
     */
    public function transactionC1(?string $value): self
    {
        $this->instance->setTransactionC1($value);
        return $this;
    }

    /**
     * Unsets transaction c 1 field.
     */
    public function unsetTransactionC1(): self
    {
        $this->instance->unsetTransactionC1();
        return $this;
    }

    /**
     * Sets transaction c 2 field.
     */
    public function transactionC2(?string $value): self
    {
        $this->instance->setTransactionC2($value);
        return $this;
    }

    /**
     * Unsets transaction c 2 field.
     */
    public function unsetTransactionC2(): self
    {
        $this->instance->unsetTransactionC2();
        return $this;
    }

    /**
     * Sets transaction c 3 field.
     */
    public function transactionC3(?string $value): self
    {
        $this->instance->setTransactionC3($value);
        return $this;
    }

    /**
     * Unsets transaction c 3 field.
     */
    public function unsetTransactionC3(): self
    {
        $this->instance->unsetTransactionC3();
        return $this;
    }

    /**
     * Sets bank funded only override field.
     */
    public function bankFundedOnlyOverride(?bool $value): self
    {
        $this->instance->setBankFundedOnlyOverride($value);
        return $this;
    }

    /**
     * Sets allow partial authorization override field.
     */
    public function allowPartialAuthorizationOverride(?bool $value): self
    {
        $this->instance->setAllowPartialAuthorizationOverride($value);
        return $this;
    }

    /**
     * Sets auto decline cvv override field.
     */
    public function autoDeclineCvvOverride(?bool $value): self
    {
        $this->instance->setAutoDeclineCvvOverride($value);
        return $this;
    }

    /**
     * Sets auto decline street override field.
     */
    public function autoDeclineStreetOverride(?bool $value): self
    {
        $this->instance->setAutoDeclineStreetOverride($value);
        return $this;
    }

    /**
     * Sets auto decline zip override field.
     */
    public function autoDeclineZipOverride(?bool $value): self
    {
        $this->instance->setAutoDeclineZipOverride($value);
        return $this;
    }

    /**
     * Sets cardholder present field.
     */
    public function cardholderPresent(?bool $value): self
    {
        $this->instance->setCardholderPresent($value);
        return $this;
    }

    /**
     * Sets card present field.
     */
    public function cardPresent(?bool $value): self
    {
        $this->instance->setCardPresent($value);
        return $this;
    }

    /**
     * Sets secure auth data field.
     */
    public function secureAuthData(?string $value): self
    {
        $this->instance->setSecureAuthData($value);
        return $this;
    }

    /**
     * Unsets secure auth data field.
     */
    public function unsetSecureAuthData(): self
    {
        $this->instance->unsetSecureAuthData();
        return $this;
    }

    /**
     * Sets secure protocol version field.
     */
    public function secureProtocolVersion(?int $value): self
    {
        $this->instance->setSecureProtocolVersion($value);
        return $this;
    }

    /**
     * Unsets secure protocol version field.
     */
    public function unsetSecureProtocolVersion(): self
    {
        $this->instance->unsetSecureProtocolVersion();
        return $this;
    }

    /**
     * Sets secure collection indicator field.
     */
    public function secureCollectionIndicator(?int $value): self
    {
        $this->instance->setSecureCollectionIndicator($value);
        return $this;
    }

    /**
     * Unsets secure collection indicator field.
     */
    public function unsetSecureCollectionIndicator(): self
    {
        $this->instance->unsetSecureCollectionIndicator();
        return $this;
    }

    /**
     * Sets secure crytogram field.
     */
    public function secureCrytogram(?string $value): self
    {
        $this->instance->setSecureCrytogram($value);
        return $this;
    }

    /**
     * Unsets secure crytogram field.
     */
    public function unsetSecureCrytogram(): self
    {
        $this->instance->unsetSecureCrytogram();
        return $this;
    }

    /**
     * Sets secure directory server transaction id field.
     */
    public function secureDirectoryServerTransactionId(?string $value): self
    {
        $this->instance->setSecureDirectoryServerTransactionId($value);
        return $this;
    }

    /**
     * Unsets secure directory server transaction id field.
     */
    public function unsetSecureDirectoryServerTransactionId(): self
    {
        $this->instance->unsetSecureDirectoryServerTransactionId();
        return $this;
    }

    /**
     * Sets secure ecomm url field.
     */
    public function secureEcommUrl(?string $value): self
    {
        $this->instance->setSecureEcommUrl($value);
        return $this;
    }

    /**
     * Unsets secure ecomm url field.
     */
    public function unsetSecureEcommUrl(): self
    {
        $this->instance->unsetSecureEcommUrl();
        return $this;
    }

    /**
     * Sets terminal serial number field.
     */
    public function terminalSerialNumber(?string $value): self
    {
        $this->instance->setTerminalSerialNumber($value);
        return $this;
    }

    /**
     * Unsets terminal serial number field.
     */
    public function unsetTerminalSerialNumber(): self
    {
        $this->instance->unsetTerminalSerialNumber();
        return $this;
    }

    /**
     * Sets threedsecure field.
     */
    public function threedsecure(?bool $value): self
    {
        $this->instance->setThreedsecure($value);
        return $this;
    }

    /**
     * Sets wallet type field.
     */
    public function walletType(?string $value): self
    {
        $this->instance->setWalletType($value);
        return $this;
    }

    /**
     * Unsets wallet type field.
     */
    public function unsetWalletType(): self
    {
        $this->instance->unsetWalletType();
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
     * Initializes a new v1 transactions cc force ticket request object.
     */
    public function build(): V1TransactionsCcForceTicketRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
