<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Sort29;

/**
 * Builder for model Sort29
 *
 * @see Sort29
 */
class Sort29Builder
{
    /**
     * @var Sort29
     */
    private $instance;

    private function __construct(Sort29 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new sort 29 Builder object.
     */
    public static function init(): self
    {
        return new self(new Sort29());
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
    public function billingAddress(?array $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets checkin date field.
     */
    public function checkinDate(?array $value): self
    {
        $this->instance->setCheckinDate($value);
        return $this;
    }

    /**
     * Sets checkout date field.
     */
    public function checkoutDate(?array $value): self
    {
        $this->instance->setCheckoutDate($value);
        return $this;
    }

    /**
     * Sets clerk number field.
     */
    public function clerkNumber(?array $value): self
    {
        $this->instance->setClerkNumber($value);
        return $this;
    }

    /**
     * Sets contact api id field.
     */
    public function contactApiId(?array $value): self
    {
        $this->instance->setContactApiId($value);
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
    public function customerId(?array $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?array $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets iias ind field.
     */
    public function iiasInd(?array $value): self
    {
        $this->instance->setIiasInd($value);
        return $this;
    }

    /**
     * Sets image front field.
     */
    public function imageFront(?array $value): self
    {
        $this->instance->setImageFront($value);
        return $this;
    }

    /**
     * Sets image back field.
     */
    public function imageBack(?array $value): self
    {
        $this->instance->setImageBack($value);
        return $this;
    }

    /**
     * Sets installment field.
     */
    public function installment(?array $value): self
    {
        $this->instance->setInstallment($value);
        return $this;
    }

    /**
     * Sets installment number field.
     */
    public function installmentNumber(?array $value): self
    {
        $this->instance->setInstallmentNumber($value);
        return $this;
    }

    /**
     * Sets installment count field.
     */
    public function installmentCount(?array $value): self
    {
        $this->instance->setInstallmentCount($value);
        return $this;
    }

    /**
     * Sets location api id field.
     */
    public function locationApiId(?array $value): self
    {
        $this->instance->setLocationApiId($value);
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
     * Sets product transaction id field.
     */
    public function productTransactionId(?array $value): self
    {
        $this->instance->setProductTransactionId($value);
        return $this;
    }

    /**
     * Sets advance deposit field.
     */
    public function advanceDeposit(?array $value): self
    {
        $this->instance->setAdvanceDeposit($value);
        return $this;
    }

    /**
     * Sets no show field.
     */
    public function noShow(?array $value): self
    {
        $this->instance->setNoShow($value);
        return $this;
    }

    /**
     * Sets notification email address field.
     */
    public function notificationEmailAddress(?array $value): self
    {
        $this->instance->setNotificationEmailAddress($value);
        return $this;
    }

    /**
     * Sets order number field.
     */
    public function orderNumber(?array $value): self
    {
        $this->instance->setOrderNumber($value);
        return $this;
    }

    /**
     * Sets po number field.
     */
    public function poNumber(?array $value): self
    {
        $this->instance->setPoNumber($value);
        return $this;
    }

    /**
     * Sets quick invoice id field.
     */
    public function quickInvoiceId(?array $value): self
    {
        $this->instance->setQuickInvoiceId($value);
        return $this;
    }

    /**
     * Sets recurring field.
     */
    public function recurring(?array $value): self
    {
        $this->instance->setRecurring($value);
        return $this;
    }

    /**
     * Sets recurring number field.
     */
    public function recurringNumber(?array $value): self
    {
        $this->instance->setRecurringNumber($value);
        return $this;
    }

    /**
     * Sets room num field.
     */
    public function roomNum(?array $value): self
    {
        $this->instance->setRoomNum($value);
        return $this;
    }

    /**
     * Sets room rate field.
     */
    public function roomRate(?array $value): self
    {
        $this->instance->setRoomRate($value);
        return $this;
    }

    /**
     * Sets save account field.
     */
    public function saveAccount(?array $value): self
    {
        $this->instance->setSaveAccount($value);
        return $this;
    }

    /**
     * Sets save account title field.
     */
    public function saveAccountTitle(?array $value): self
    {
        $this->instance->setSaveAccountTitle($value);
        return $this;
    }

    /**
     * Sets subtotal amount field.
     */
    public function subtotalAmount(?array $value): self
    {
        $this->instance->setSubtotalAmount($value);
        return $this;
    }

    /**
     * Sets surcharge amount field.
     */
    public function surchargeAmount(?array $value): self
    {
        $this->instance->setSurchargeAmount($value);
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
    public function tax(?array $value): self
    {
        $this->instance->setTax($value);
        return $this;
    }

    /**
     * Sets tip amount field.
     */
    public function tipAmount(?array $value): self
    {
        $this->instance->setTipAmount($value);
        return $this;
    }

    /**
     * Sets transaction amount field.
     */
    public function transactionAmount(?array $value): self
    {
        $this->instance->setTransactionAmount($value);
        return $this;
    }

    /**
     * Sets secondary amount field.
     */
    public function secondaryAmount(?array $value): self
    {
        $this->instance->setSecondaryAmount($value);
        return $this;
    }

    /**
     * Sets transaction api id field.
     */
    public function transactionApiId(?array $value): self
    {
        $this->instance->setTransactionApiId($value);
        return $this;
    }

    /**
     * Sets transaction c 1 field.
     */
    public function transactionC1(?array $value): self
    {
        $this->instance->setTransactionC1($value);
        return $this;
    }

    /**
     * Sets transaction c 2 field.
     */
    public function transactionC2(?array $value): self
    {
        $this->instance->setTransactionC2($value);
        return $this;
    }

    /**
     * Sets transaction c 3 field.
     */
    public function transactionC3(?array $value): self
    {
        $this->instance->setTransactionC3($value);
        return $this;
    }

    /**
     * Sets bank funded only override field.
     */
    public function bankFundedOnlyOverride(?array $value): self
    {
        $this->instance->setBankFundedOnlyOverride($value);
        return $this;
    }

    /**
     * Sets allow partial authorization override field.
     */
    public function allowPartialAuthorizationOverride(?array $value): self
    {
        $this->instance->setAllowPartialAuthorizationOverride($value);
        return $this;
    }

    /**
     * Sets auto decline cvv override field.
     */
    public function autoDeclineCvvOverride(?array $value): self
    {
        $this->instance->setAutoDeclineCvvOverride($value);
        return $this;
    }

    /**
     * Sets auto decline street override field.
     */
    public function autoDeclineStreetOverride(?array $value): self
    {
        $this->instance->setAutoDeclineStreetOverride($value);
        return $this;
    }

    /**
     * Sets auto decline zip override field.
     */
    public function autoDeclineZipOverride(?array $value): self
    {
        $this->instance->setAutoDeclineZipOverride($value);
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
     * Sets created ts field.
     */
    public function createdTs(?array $value): self
    {
        $this->instance->setCreatedTs($value);
        return $this;
    }

    /**
     * Sets modified ts field.
     */
    public function modifiedTs(?array $value): self
    {
        $this->instance->setModifiedTs($value);
        return $this;
    }

    /**
     * Sets terminal id field.
     */
    public function terminalId(?array $value): self
    {
        $this->instance->setTerminalId($value);
        return $this;
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
     * Sets account type field.
     */
    public function accountType(?array $value): self
    {
        $this->instance->setAccountType($value);
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
     * Sets token id field.
     */
    public function tokenId(?array $value): self
    {
        $this->instance->setTokenId($value);
        return $this;
    }

    /**
     * Sets ach identifier field.
     */
    public function achIdentifier(?array $value): self
    {
        $this->instance->setAchIdentifier($value);
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
     * Sets auth amount field.
     */
    public function authAmount(?array $value): self
    {
        $this->instance->setAuthAmount($value);
        return $this;
    }

    /**
     * Sets auth code field.
     */
    public function authCode(?array $value): self
    {
        $this->instance->setAuthCode($value);
        return $this;
    }

    /**
     * Sets avs field.
     */
    public function avs(?array $value): self
    {
        $this->instance->setAvs($value);
        return $this;
    }

    /**
     * Sets avs enhanced field.
     */
    public function avsEnhanced(?array $value): self
    {
        $this->instance->setAvsEnhanced($value);
        return $this;
    }

    /**
     * Sets cardholder present field.
     */
    public function cardholderPresent(?array $value): self
    {
        $this->instance->setCardholderPresent($value);
        return $this;
    }

    /**
     * Sets card present field.
     */
    public function cardPresent(?array $value): self
    {
        $this->instance->setCardPresent($value);
        return $this;
    }

    /**
     * Sets check number field.
     */
    public function checkNumber(?array $value): self
    {
        $this->instance->setCheckNumber($value);
        return $this;
    }

    /**
     * Sets customer ip field.
     */
    public function customerIp(?array $value): self
    {
        $this->instance->setCustomerIp($value);
        return $this;
    }

    /**
     * Sets cvv response field.
     */
    public function cvvResponse(?array $value): self
    {
        $this->instance->setCvvResponse($value);
        return $this;
    }

    /**
     * Sets entry mode id field.
     */
    public function entryModeId(?array $value): self
    {
        $this->instance->setEntryModeId($value);
        return $this;
    }

    /**
     * Sets emv receipt data field.
     */
    public function emvReceiptData(?array $value): self
    {
        $this->instance->setEmvReceiptData($value);
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
     * Sets last four field.
     */
    public function lastFour(?array $value): self
    {
        $this->instance->setLastFour($value);
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
     * Sets terminal serial number field.
     */
    public function terminalSerialNumber(?array $value): self
    {
        $this->instance->setTerminalSerialNumber($value);
        return $this;
    }

    /**
     * Sets transaction settlement status field.
     */
    public function transactionSettlementStatus(?array $value): self
    {
        $this->instance->setTransactionSettlementStatus($value);
        return $this;
    }

    /**
     * Sets charge back date field.
     */
    public function chargeBackDate(?array $value): self
    {
        $this->instance->setChargeBackDate($value);
        return $this;
    }

    /**
     * Sets is recurring field.
     */
    public function isRecurring(?array $value): self
    {
        $this->instance->setIsRecurring($value);
        return $this;
    }

    /**
     * Sets notification email sent field.
     */
    public function notificationEmailSent(?array $value): self
    {
        $this->instance->setNotificationEmailSent($value);
        return $this;
    }

    /**
     * Sets par field.
     */
    public function par(?array $value): self
    {
        $this->instance->setPar($value);
        return $this;
    }

    /**
     * Sets reason code id field.
     */
    public function reasonCodeId(?array $value): self
    {
        $this->instance->setReasonCodeId($value);
        return $this;
    }

    /**
     * Sets recurring id field.
     */
    public function recurringId(?array $value): self
    {
        $this->instance->setRecurringId($value);
        return $this;
    }

    /**
     * Sets settle date field.
     */
    public function settleDate(?array $value): self
    {
        $this->instance->setSettleDate($value);
        return $this;
    }

    /**
     * Sets status code field.
     */
    public function statusCode(?array $value): self
    {
        $this->instance->setStatusCode($value);
        return $this;
    }

    /**
     * Sets transaction batch id field.
     */
    public function transactionBatchId(?array $value): self
    {
        $this->instance->setTransactionBatchId($value);
        return $this;
    }

    /**
     * Sets type id field.
     */
    public function typeId(?array $value): self
    {
        $this->instance->setTypeId($value);
        return $this;
    }

    /**
     * Sets verbiage field.
     */
    public function verbiage(?array $value): self
    {
        $this->instance->setVerbiage($value);
        return $this;
    }

    /**
     * Sets void date field.
     */
    public function voidDate(?array $value): self
    {
        $this->instance->setVoidDate($value);
        return $this;
    }

    /**
     * Sets batch field.
     */
    public function batch(?array $value): self
    {
        $this->instance->setBatch($value);
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
     * Sets response message field.
     */
    public function responseMessage(?array $value): self
    {
        $this->instance->setResponseMessage($value);
        return $this;
    }

    /**
     * Sets return date field.
     */
    public function returnDate(?array $value): self
    {
        $this->instance->setReturnDate($value);
        return $this;
    }

    /**
     * Sets trx source id field.
     */
    public function trxSourceId(?array $value): self
    {
        $this->instance->setTrxSourceId($value);
        return $this;
    }

    /**
     * Sets routing number field.
     */
    public function routingNumber(?array $value): self
    {
        $this->instance->setRoutingNumber($value);
        return $this;
    }

    /**
     * Sets trx source code field.
     */
    public function trxSourceCode(?array $value): self
    {
        $this->instance->setTrxSourceCode($value);
        return $this;
    }

    /**
     * Sets paylink id field.
     */
    public function paylinkId(?array $value): self
    {
        $this->instance->setPaylinkId($value);
        return $this;
    }

    /**
     * Sets currency code field.
     */
    public function currencyCode(?array $value): self
    {
        $this->instance->setCurrencyCode($value);
        return $this;
    }

    /**
     * Sets account vault field.
     */
    public function accountVault(?array $value): self
    {
        $this->instance->setAccountVault($value);
        return $this;
    }

    /**
     * Sets quick invoice field.
     */
    public function quickInvoice(?array $value): self
    {
        $this->instance->setQuickInvoice($value);
        return $this;
    }

    /**
     * Sets log emails field.
     */
    public function logEmails(?array $value): self
    {
        $this->instance->setLogEmails($value);
        return $this;
    }

    /**
     * Sets is voidable field.
     */
    public function isVoidable(?array $value): self
    {
        $this->instance->setIsVoidable($value);
        return $this;
    }

    /**
     * Sets is token field.
     */
    public function isToken(?array $value): self
    {
        $this->instance->setIsToken($value);
        return $this;
    }

    /**
     * Sets is accountvault field.
     */
    public function isAccountvault(?array $value): self
    {
        $this->instance->setIsAccountvault($value);
        return $this;
    }

    /**
     * Sets is reversible field.
     */
    public function isReversible(?array $value): self
    {
        $this->instance->setIsReversible($value);
        return $this;
    }

    /**
     * Sets is refundable field.
     */
    public function isRefundable(?array $value): self
    {
        $this->instance->setIsRefundable($value);
        return $this;
    }

    /**
     * Sets is completable field.
     */
    public function isCompletable(?array $value): self
    {
        $this->instance->setIsCompletable($value);
        return $this;
    }

    /**
     * Sets is settled field.
     */
    public function isSettled(?array $value): self
    {
        $this->instance->setIsSettled($value);
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
     * Sets changelogs field.
     */
    public function changelogs(?array $value): self
    {
        $this->instance->setChangelogs($value);
        return $this;
    }

    /**
     * Sets product transaction field.
     */
    public function productTransaction(?array $value): self
    {
        $this->instance->setProductTransaction($value);
        return $this;
    }

    /**
     * Sets all tags field.
     */
    public function allTags(?array $value): self
    {
        $this->instance->setAllTags($value);
        return $this;
    }

    /**
     * Sets tag transactions field.
     */
    public function tagTransactions(?array $value): self
    {
        $this->instance->setTagTransactions($value);
        return $this;
    }

    /**
     * Sets declined recurring notification field.
     */
    public function declinedRecurringNotification(?array $value): self
    {
        $this->instance->setDeclinedRecurringNotification($value);
        return $this;
    }

    /**
     * Sets payment recurring notification field.
     */
    public function paymentRecurringNotification(?array $value): self
    {
        $this->instance->setPaymentRecurringNotification($value);
        return $this;
    }

    /**
     * Sets developer company field.
     */
    public function developerCompany(?array $value): self
    {
        $this->instance->setDeveloperCompany($value);
        return $this;
    }

    /**
     * Sets terminal field.
     */
    public function terminal(?array $value): self
    {
        $this->instance->setTerminal($value);
        return $this;
    }

    /**
     * Sets hosted payment page field.
     */
    public function hostedPaymentPage(?array $value): self
    {
        $this->instance->setHostedPaymentPage($value);
        return $this;
    }

    /**
     * Sets transaction level 3 field.
     */
    public function transactionLevel3(?array $value): self
    {
        $this->instance->setTransactionLevel3($value);
        return $this;
    }

    /**
     * Sets developer company id field.
     */
    public function developerCompanyId(?array $value): self
    {
        $this->instance->setDeveloperCompanyId($value);
        return $this;
    }

    /**
     * Sets transaction histories field.
     */
    public function transactionHistories(?array $value): self
    {
        $this->instance->setTransactionHistories($value);
        return $this;
    }

    /**
     * Sets surcharge transaction field.
     */
    public function surchargeTransaction(?array $value): self
    {
        $this->instance->setSurchargeTransaction($value);
        return $this;
    }

    /**
     * Sets surcharge field.
     */
    public function surcharge(?array $value): self
    {
        $this->instance->setSurcharge($value);
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
     * Sets reason code field.
     */
    public function reasonCode(?array $value): self
    {
        $this->instance->setReasonCode($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?array $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets status field.
     */
    public function status(?array $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets transaction batch field.
     */
    public function transactionBatch(?array $value): self
    {
        $this->instance->setTransactionBatch($value);
        return $this;
    }

    /**
     * Sets transaction splits field.
     */
    public function transactionSplits(?array $value): self
    {
        $this->instance->setTransactionSplits($value);
        return $this;
    }

    /**
     * Sets postback logs field.
     */
    public function postbackLogs(?array $value): self
    {
        $this->instance->setPostbackLogs($value);
        return $this;
    }

    /**
     * Sets currency type field.
     */
    public function currencyType(?array $value): self
    {
        $this->instance->setCurrencyType($value);
        return $this;
    }

    /**
     * Sets transaction references field.
     */
    public function transactionReferences(?array $value): self
    {
        $this->instance->setTransactionReferences($value);
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
     * Initializes a new sort 29 object.
     */
    public function build(): Sort29
    {
        return CoreHelper::clone($this->instance);
    }
}