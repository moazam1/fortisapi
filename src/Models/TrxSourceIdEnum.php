<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * How the transaction was obtained by the API.
 * >1 - Unknown - The origination of this transaction could not be determined.
 * >
 * >2 - Mobile - The origination of this transaction is through the mobile application. This is always
 * a merchant submitted payment.
 * >
 * >3 - Web - The origination of this transaction is through a web browser. This is always a merchant
 * submitted payment. Examples include Virtual Terminal, Contact Charge, and Transaction Details - Run
 * Again pages.
 * >
 * >4 - IVR Transaction - The origination of this transaction is over the phone. This payment is
 * submitted by an automated system initiated by the cardholder.
 * >
 * >5 - Contact Statement - The orignation of this transaction is through a Vericle statement.
 * >
 * >6 - Contact Payment Mobile - The origination of this transaction is through the mobile application.
 * This is always submitted by a contact user.
 * >
 * >7 - Contact Payment - The origination of this transaction is through a web browser. This is always
 * submitted by a contact user.
 * >
 * >8 - Quick Invoice - The orignation of this transaction is through a Quick Invoice. This is
 * typically submitted by a contact user, however the transaction can also be submitted by a merchant.
 * >
 * >9 - Payform - The origination of this transaction is through a Payform. This is typically a
 * merchant submitted transaction, and is always from an internal developer.
 * >
 * >10 - Hosted Payment Page - The orignation of this transaction is through a Hosted Payment Page.
 * This is typically a cardholder submitted transaction.
 * >
 * >11 - Emulator -  The origination of this transaction is through Auth.Net emulator. This is
 * typically submitted through an integration to a website or a shopping cart.
 * >
 * >12 - Integration - The orignation of this transaction is through an integrated solution. This will
 * always be from an external developer.
 * >
 * >13 - Recurring Billing - The orignation of this transaction is through a scheduled recurring
 * payment. This payment is system-initiated based on a payment schedule that has been configured.
 * >
 * >14 - Recurring Secondary - This feature has not been implented yet.
 * >
 * >15 - Declined Recurring Email - The orignation of this transaction is through the email
 * notification sent when a recurring payment has been declined. This is typically submitted by a
 * cardholder.
 * >
 * >16 - Paylink - The orignation of this transaction is through a Paylink. This is typically submitted
 * by a contact user, however the transaction can also be submitted by a merchant.
 * >
 * >17 - Elements - The origination of this transaction is through the Elements payments page. This can
 * be a cardholder submitted or a merchant submitted transaction.
 * >
 * >18 - ACH Import - The origination of this transaction is through an ACH file import. This is a
 * merchant initiated process.
 * >
 */
class TrxSourceIdEnum
{
    public const ENUM_1 = 1;

    public const ENUM_2 = 2;

    public const ENUM_3 = 3;

    public const ENUM_4 = 4;

    public const ENUM_5 = 5;

    public const ENUM_6 = 6;

    public const ENUM_7 = 7;

    public const ENUM_8 = 8;

    public const ENUM_9 = 9;

    public const ENUM_10 = 10;

    public const ENUM_11 = 11;

    public const ENUM_12 = 12;

    public const ENUM_13 = 13;

    public const ENUM_14 = 14;

    public const ENUM_15 = 15;

    public const ENUM_16 = 16;

    public const ENUM_17 = 17;

    public const ENUM_18 = 18;

    private const _ALL_VALUES = [
        self::ENUM_1,
        self::ENUM_2,
        self::ENUM_3,
        self::ENUM_4,
        self::ENUM_5,
        self::ENUM_6,
        self::ENUM_7,
        self::ENUM_8,
        self::ENUM_9,
        self::ENUM_10,
        self::ENUM_11,
        self::ENUM_12,
        self::ENUM_13,
        self::ENUM_14,
        self::ENUM_15,
        self::ENUM_16,
        self::ENUM_17,
        self::ENUM_18
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|int $value Value or a list/map of values to be checked
     *
     * @return array|null|int Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for TrxSourceIdEnum.");
    }
}