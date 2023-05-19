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
 * User Type
 */
class UserTypeCodeEnum
{
    public const ENUM_200 = 200;

    public const ENUM_250 = 250;

    public const ENUM_300 = 300;

    public const ENUM_400 = 400;

    public const ENUM_500 = 500;

    public const ENUM_600 = 600;

    public const ENUM_700 = 700;

    public const ENUM_800 = 800;

    public const ENUM_900 = 900;

    public const ENUM_1000 = 1000;

    public const ENUM_100 = 100;

    private const _ALL_VALUES = [
        self::ENUM_200,
        self::ENUM_250,
        self::ENUM_300,
        self::ENUM_400,
        self::ENUM_500,
        self::ENUM_600,
        self::ENUM_700,
        self::ENUM_800,
        self::ENUM_900,
        self::ENUM_1000,
        self::ENUM_100
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
        throw new Exception("$value is invalid for UserTypeCodeEnum.");
    }
}
