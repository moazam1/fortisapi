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

class Joi3 implements \JsonSerializable
{
    /**
     * @var Conditions3|null|Conditions31|Conditions32|Conditions33
     */
    private $conditions;

    /**
     * Returns Conditions.
     *
     * @return Conditions3|null|Conditions31|Conditions32|Conditions33
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Sets Conditions.
     *
     * @maps conditions
     * @mapsBy anyOf(anyOf(Conditions3,Conditions31,Conditions32,Conditions33),null)
     *
     * @param Conditions3|null|Conditions31|Conditions32|Conditions33 $conditions
     */
    public function setConditions($conditions): void
    {
        $this->conditions = $conditions;
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
        if (isset($this->conditions)) {
            $json['conditions'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->conditions,
                    'anyOf(anyOf(Conditions3,Conditions31,Conditions32,Conditions33),null)'
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
