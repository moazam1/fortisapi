<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class ChangelogDetail implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var array
     */
    private $changelogId = [];

    /**
     * @var array
     */
    private $field = [];

    /**
     * @var array
     */
    private $oldValue = [];

    /**
     * Returns Id.
     * ID
     */
    public function getId(): ?string
    {
        if (count($this->id) == 0) {
            return null;
        }
        return $this->id['value'];
    }

    /**
     * Sets Id.
     * ID
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id['value'] = $id;
    }

    /**
     * Unsets Id.
     * ID
     */
    public function unsetId(): void
    {
        $this->id = [];
    }

    /**
     * Returns Changelog Id.
     * Changelog ID
     */
    public function getChangelogId(): ?string
    {
        if (count($this->changelogId) == 0) {
            return null;
        }
        return $this->changelogId['value'];
    }

    /**
     * Sets Changelog Id.
     * Changelog ID
     *
     * @maps changelog_id
     */
    public function setChangelogId(?string $changelogId): void
    {
        $this->changelogId['value'] = $changelogId;
    }

    /**
     * Unsets Changelog Id.
     * Changelog ID
     */
    public function unsetChangelogId(): void
    {
        $this->changelogId = [];
    }

    /**
     * Returns Field.
     * Field
     */
    public function getField(): ?string
    {
        if (count($this->field) == 0) {
            return null;
        }
        return $this->field['value'];
    }

    /**
     * Sets Field.
     * Field
     *
     * @maps field
     */
    public function setField(?string $field): void
    {
        $this->field['value'] = $field;
    }

    /**
     * Unsets Field.
     * Field
     */
    public function unsetField(): void
    {
        $this->field = [];
    }

    /**
     * Returns Old Value.
     * Old Value
     */
    public function getOldValue(): ?string
    {
        if (count($this->oldValue) == 0) {
            return null;
        }
        return $this->oldValue['value'];
    }

    /**
     * Sets Old Value.
     * Old Value
     *
     * @maps old_value
     */
    public function setOldValue(?string $oldValue): void
    {
        $this->oldValue['value'] = $oldValue;
    }

    /**
     * Unsets Old Value.
     * Old Value
     */
    public function unsetOldValue(): void
    {
        $this->oldValue = [];
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
        if (!empty($this->id)) {
            $json['id']           = $this->id['value'];
        }
        if (!empty($this->changelogId)) {
            $json['changelog_id'] = $this->changelogId['value'];
        }
        if (!empty($this->field)) {
            $json['field']        = $this->field['value'];
        }
        if (!empty($this->oldValue)) {
            $json['old_value']    = $this->oldValue['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
