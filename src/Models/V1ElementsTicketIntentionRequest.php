<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class V1ElementsTicketIntentionRequest implements \JsonSerializable
{
    /**
     * @var array
     */
    private $contactId = [];

    /**
     * @var array
     */
    private $contactApiId = [];

    /**
     * @var string
     */
    private $locationId;

    /**
     * @param string $locationId
     */
    public function __construct(string $locationId)
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Contact Id.
     * Used to associate the Ticket with a Contact.
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
     * Used to associate the Ticket with a Contact.
     *
     * @maps contact_id
     */
    public function setContactId(?string $contactId): void
    {
        $this->contactId['value'] = $contactId;
    }

    /**
     * Unsets Contact Id.
     * Used to associate the Ticket with a Contact.
     */
    public function unsetContactId(): void
    {
        $this->contactId = [];
    }

    /**
     * Returns Contact Api Id.
     * Used to associate the Ticket with a Contact.
     */
    public function getContactApiId(): ?string
    {
        if (count($this->contactApiId) == 0) {
            return null;
        }
        return $this->contactApiId['value'];
    }

    /**
     * Sets Contact Api Id.
     * Used to associate the Ticket with a Contact.
     *
     * @maps contact_api_id
     */
    public function setContactApiId(?string $contactApiId): void
    {
        $this->contactApiId['value'] = $contactApiId;
    }

    /**
     * Unsets Contact Api Id.
     * Used to associate the Ticket with a Contact.
     */
    public function unsetContactApiId(): void
    {
        $this->contactApiId = [];
    }

    /**
     * Returns Location Id.
     * A valid Location Id associated with the Contact for this Ticket
     */
    public function getLocationId(): string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     * A valid Location Id associated with the Contact for this Ticket
     *
     * @required
     * @maps location_id
     */
    public function setLocationId(string $locationId): void
    {
        $this->locationId = $locationId;
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
        if (!empty($this->contactId)) {
            $json['contact_id']     = $this->contactId['value'];
        }
        if (!empty($this->contactApiId)) {
            $json['contact_api_id'] = $this->contactApiId['value'];
        }
        $json['location_id']        = $this->locationId;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
