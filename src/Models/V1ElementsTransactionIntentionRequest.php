<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use FortisAPILib\ApiHelper;
use stdClass;

class V1ElementsTransactionIntentionRequest implements \JsonSerializable
{
    /**
     * @var array
     */
    private $action = ['value' => ActionEnum::SALE];

    /**
     * @var Method2[]|null
     */
    private $methods;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var int|null
     */
    private $taxAmount;

    /**
     * @var int|null
     */
    private $secondaryAmount;

    /**
     * @var array
     */
    private $locationId = [];

    /**
     * @var array
     */
    private $contactId = [];

    /**
     * @var bool|null
     */
    private $saveAccount;

    /**
     * @var string|null
     */
    private $saveAccountTitle;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var array
     */
    private $achSecCode = ['value' => AchSecCodeEnum::WEB];

    /**
     * @var bool|null
     */
    private $bankFundedOnlyOverride;

    /**
     * @var bool|null
     */
    private $allowPartialAuthorizationOverride;

    /**
     * @var bool|null
     */
    private $autoDeclineCvvOverride;

    /**
     * @var bool|null
     */
    private $autoDeclineStreetOverride;

    /**
     * @var bool|null
     */
    private $autoDeclineZipOverride;

    /**
     * Returns Action.
     * The action to be performed
     */
    public function getAction(): ?string
    {
        if (count($this->action) == 0) {
            return null;
        }
        return $this->action['value'];
    }

    /**
     * Sets Action.
     * The action to be performed
     *
     * @maps action
     * @factory \FortisAPILib\Models\ActionEnum::checkValue
     */
    public function setAction(?string $action): void
    {
        $this->action['value'] = $action;
    }

    /**
     * Unsets Action.
     * The action to be performed
     */
    public function unsetAction(): void
    {
        $this->action = [];
    }

    /**
     * Returns Methods.
     * By default the system will try to offer all the availables payment methods from your account. But if
     * you like, you can specify exactly what services you want to use.
     *
     * @return Method2[]|null
     */
    public function getMethods(): ?array
    {
        return $this->methods;
    }

    /**
     * Sets Methods.
     * By default the system will try to offer all the availables payment methods from your account. But if
     * you like, you can specify exactly what services you want to use.
     *
     * @maps methods
     *
     * @param Method2[]|null $methods
     */
    public function setMethods(?array $methods): void
    {
        $this->methods = $methods;
    }

    /**
     * Returns Amount.
     * The total amount to be charged. Allowed on the actions: `sale`, `auth-only`, `refund`
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The total amount to be charged. Allowed on the actions: `sale`, `auth-only`, `refund`
     *
     * @maps amount
     * @mapsBy anyOf(anyOf(int,anyOf(int)),null)
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Tax Amount.
     * Amount of Sales Tax. If supplied, this amount should be already included in the transaction amount.
     * Allowed on the actions: `sale`, `auth-only`, `refund`
     */
    public function getTaxAmount(): ?int
    {
        return $this->taxAmount;
    }

    /**
     * Sets Tax Amount.
     * Amount of Sales Tax. If supplied, this amount should be already included in the transaction amount.
     * Allowed on the actions: `sale`, `auth-only`, `refund`
     *
     * @maps tax_amount
     * @mapsBy anyOf(anyOf(anyOf(int)),null)
     */
    public function setTaxAmount(?int $taxAmount): void
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * Returns Secondary Amount.
     * Secondary Amount. Allowed on the actions: `sale`, `auth-only`, `refund`
     */
    public function getSecondaryAmount(): ?int
    {
        return $this->secondaryAmount;
    }

    /**
     * Sets Secondary Amount.
     * Secondary Amount. Allowed on the actions: `sale`, `auth-only`, `refund`
     *
     * @maps secondary_amount
     * @mapsBy anyOf(anyOf(anyOf(int)),null)
     */
    public function setSecondaryAmount(?int $secondaryAmount): void
    {
        $this->secondaryAmount = $secondaryAmount;
    }

    /**
     * Returns Location Id.
     * Location ID
     */
    public function getLocationId(): ?string
    {
        if (count($this->locationId) == 0) {
            return null;
        }
        return $this->locationId['value'];
    }

    /**
     * Sets Location Id.
     * Location ID
     *
     * @maps location_id
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId['value'] = $locationId;
    }

    /**
     * Unsets Location Id.
     * Location ID
     */
    public function unsetLocationId(): void
    {
        $this->locationId = [];
    }

    /**
     * Returns Contact Id.
     * Contact ID
     */
    public function getContactId(): ?string
    {
        if (count($this->contactId) == 0) {
            return null;
        }
        return $this->contactId['value'];
    }

    /**
     * Sets Contact Id.
     * Contact ID
     *
     * @maps contact_id
     */
    public function setContactId(?string $contactId): void
    {
        $this->contactId['value'] = $contactId;
    }

    /**
     * Unsets Contact Id.
     * Contact ID
     */
    public function unsetContactId(): void
    {
        $this->contactId = [];
    }

    /**
     * Returns Save Account.
     * Specifies to tokenize card/bank information within the transaction. Allowed on the actions: `sale`,
     * `auth-only`, `avs-only`, `refund`
     */
    public function getSaveAccount(): ?bool
    {
        return $this->saveAccount;
    }

    /**
     * Sets Save Account.
     * Specifies to tokenize card/bank information within the transaction. Allowed on the actions: `sale`,
     * `auth-only`, `avs-only`, `refund`
     *
     * @maps save_account
     * @mapsBy anyOf(anyOf(bool),null)
     */
    public function setSaveAccount(?bool $saveAccount): void
    {
        $this->saveAccount = $saveAccount;
    }

    /**
     * Returns Save Account Title.
     * Specifies to tokenize card/bank information within the transaction. Allowed on the actions: `sale`,
     * `auth-only`, `avs-only`, `refund`
     */
    public function getSaveAccountTitle(): ?string
    {
        return $this->saveAccountTitle;
    }

    /**
     * Sets Save Account Title.
     * Specifies to tokenize card/bank information within the transaction. Allowed on the actions: `sale`,
     * `auth-only`, `avs-only`, `refund`
     *
     * @maps save_account_title
     * @mapsBy anyOf(anyOf(string),null)
     */
    public function setSaveAccountTitle(?string $saveAccountTitle): void
    {
        $this->saveAccountTitle = $saveAccountTitle;
    }

    /**
     * Returns Title.
     * A title for the token.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     * A title for the token.
     *
     * @maps title
     * @mapsBy anyOf(anyOf(string),null)
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Ach Sec Code.
     * SEC code for the transaction if it's an ACH transaction
     */
    public function getAchSecCode(): ?string
    {
        if (count($this->achSecCode) == 0) {
            return null;
        }
        return $this->achSecCode['value'];
    }

    /**
     * Sets Ach Sec Code.
     * SEC code for the transaction if it's an ACH transaction
     *
     * @maps ach_sec_code
     * @factory \FortisAPILib\Models\AchSecCodeEnum::checkValue
     */
    public function setAchSecCode(?string $achSecCode): void
    {
        $this->achSecCode['value'] = $achSecCode;
    }

    /**
     * Unsets Ach Sec Code.
     * SEC code for the transaction if it's an ACH transaction
     */
    public function unsetAchSecCode(): void
    {
        $this->achSecCode = [];
    }

    /**
     * Returns Bank Funded Only Override.
     * Bank Funded Only Override
     */
    public function getBankFundedOnlyOverride(): ?bool
    {
        return $this->bankFundedOnlyOverride;
    }

    /**
     * Sets Bank Funded Only Override.
     * Bank Funded Only Override
     *
     * @maps bank_funded_only_override
     * @mapsBy anyOf(anyOf(bool),null)
     */
    public function setBankFundedOnlyOverride(?bool $bankFundedOnlyOverride): void
    {
        $this->bankFundedOnlyOverride = $bankFundedOnlyOverride;
    }

    /**
     * Returns Allow Partial Authorization Override.
     * Allow partial Authorization Override
     */
    public function getAllowPartialAuthorizationOverride(): ?bool
    {
        return $this->allowPartialAuthorizationOverride;
    }

    /**
     * Sets Allow Partial Authorization Override.
     * Allow partial Authorization Override
     *
     * @maps allow_partial_authorization_override
     * @mapsBy anyOf(anyOf(bool),null)
     */
    public function setAllowPartialAuthorizationOverride(?bool $allowPartialAuthorizationOverride): void
    {
        $this->allowPartialAuthorizationOverride = $allowPartialAuthorizationOverride;
    }

    /**
     * Returns Auto Decline Cvv Override.
     * Auto Decline Cvv Override
     */
    public function getAutoDeclineCvvOverride(): ?bool
    {
        return $this->autoDeclineCvvOverride;
    }

    /**
     * Sets Auto Decline Cvv Override.
     * Auto Decline Cvv Override
     *
     * @maps auto_decline_cvv_override
     * @mapsBy anyOf(anyOf(bool),null)
     */
    public function setAutoDeclineCvvOverride(?bool $autoDeclineCvvOverride): void
    {
        $this->autoDeclineCvvOverride = $autoDeclineCvvOverride;
    }

    /**
     * Returns Auto Decline Street Override.
     * Auto Decline Street Override
     */
    public function getAutoDeclineStreetOverride(): ?bool
    {
        return $this->autoDeclineStreetOverride;
    }

    /**
     * Sets Auto Decline Street Override.
     * Auto Decline Street Override
     *
     * @maps auto_decline_street_override
     * @mapsBy anyOf(anyOf(bool),null)
     */
    public function setAutoDeclineStreetOverride(?bool $autoDeclineStreetOverride): void
    {
        $this->autoDeclineStreetOverride = $autoDeclineStreetOverride;
    }

    /**
     * Returns Auto Decline Zip Override.
     * Auto Decline Zip Override
     */
    public function getAutoDeclineZipOverride(): ?bool
    {
        return $this->autoDeclineZipOverride;
    }

    /**
     * Sets Auto Decline Zip Override.
     * Auto Decline Zip Override
     *
     * @maps auto_decline_zip_override
     * @mapsBy anyOf(anyOf(bool),null)
     */
    public function setAutoDeclineZipOverride(?bool $autoDeclineZipOverride): void
    {
        $this->autoDeclineZipOverride = $autoDeclineZipOverride;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (!empty($this->action)) {
            $json['action']                               = ActionEnum::checkValue($this->action['value']);
        }
        if (isset($this->methods)) {
            $json['methods']                              = $this->methods;
        }
        if (isset($this->amount)) {
            $json['amount']                               =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->amount,
                    'anyOf(anyOf(int,anyOf(int)),null)'
                );
        }
        if (isset($this->taxAmount)) {
            $json['tax_amount']                           =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->taxAmount,
                    'anyOf(anyOf(anyOf(int)),null)'
                );
        }
        if (isset($this->secondaryAmount)) {
            $json['secondary_amount']                     =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->secondaryAmount,
                    'anyOf(anyOf(anyOf(int)),null)'
                );
        }
        if (!empty($this->locationId)) {
            $json['location_id']                          = $this->locationId['value'];
        }
        if (!empty($this->contactId)) {
            $json['contact_id']                           = $this->contactId['value'];
        }
        if (isset($this->saveAccount)) {
            $json['save_account']                         =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->saveAccount,
                    'anyOf(anyOf(bool),null)'
                );
        }
        if (isset($this->saveAccountTitle)) {
            $json['save_account_title']                   =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->saveAccountTitle,
                    'anyOf(anyOf(string),null)'
                );
        }
        if (isset($this->title)) {
            $json['title']                                =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->title,
                    'anyOf(anyOf(string),null)'
                );
        }
        if (!empty($this->achSecCode)) {
            $json['ach_sec_code']                         = AchSecCodeEnum::checkValue($this->achSecCode['value']);
        }
        if (isset($this->bankFundedOnlyOverride)) {
            $json['bank_funded_only_override']            =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->bankFundedOnlyOverride,
                    'anyOf(anyOf(bool),null)'
                );
        }
        if (isset($this->allowPartialAuthorizationOverride)) {
            $json['allow_partial_authorization_override'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->allowPartialAuthorizationOverride,
                    'anyOf(anyOf(bool),null)'
                );
        }
        if (isset($this->autoDeclineCvvOverride)) {
            $json['auto_decline_cvv_override']            =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->autoDeclineCvvOverride,
                    'anyOf(anyOf(bool),null)'
                );
        }
        if (isset($this->autoDeclineStreetOverride)) {
            $json['auto_decline_street_override']         =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->autoDeclineStreetOverride,
                    'anyOf(anyOf(bool),null)'
                );
        }
        if (isset($this->autoDeclineZipOverride)) {
            $json['auto_decline_zip_override']            =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->autoDeclineZipOverride,
                    'anyOf(anyOf(bool),null)'
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
