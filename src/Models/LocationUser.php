<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class LocationUser implements \JsonSerializable
{
    /**
     * @var string
     */
    private $locationId;

    /**
     * @var string
     */
    private $userId;

    /**
     * @var array
     */
    private $locationApiId = [];

    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $createdTs;

    /**
     * @var int
     */
    private $modifiedTs;

    /**
     * @var string
     */
    private $createdUserId;

    /**
     * @var string
     */
    private $modifiedUserId;

    /**
     * @param string $locationId
     * @param string $userId
     * @param string $id
     * @param int $createdTs
     * @param int $modifiedTs
     * @param string $createdUserId
     * @param string $modifiedUserId
     */
    public function __construct(
        string $locationId,
        string $userId,
        string $id,
        int $createdTs,
        int $modifiedTs,
        string $createdUserId,
        string $modifiedUserId
    ) {
        $this->locationId = $locationId;
        $this->userId = $userId;
        $this->id = $id;
        $this->createdTs = $createdTs;
        $this->modifiedTs = $modifiedTs;
        $this->createdUserId = $createdUserId;
        $this->modifiedUserId = $modifiedUserId;
    }

    /**
     * Returns Location Id.
     * Location ID
     */
    public function getLocationId(): string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     * Location ID
     *
     * @required
     * @maps location_id
     */
    public function setLocationId(string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns User Id.
     * User ID
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * Sets User Id.
     * User ID
     *
     * @required
     * @maps user_id
     */
    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * Returns Location Api Id.
     */
    public function getLocationApiId(): ?string
    {
        if (count($this->locationApiId) == 0) {
            return null;
        }
        return $this->locationApiId['value'];
    }

    /**
     * Sets Location Api Id.
     *
     * @maps location_api_id
     */
    public function setLocationApiId(?string $locationApiId): void
    {
        $this->locationApiId['value'] = $locationApiId;
    }

    /**
     * Unsets Location Api Id.
     */
    public function unsetLocationApiId(): void
    {
        $this->locationApiId = [];
    }

    /**
     * Returns Id.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Created Ts.
     * Created Time Stamp
     */
    public function getCreatedTs(): int
    {
        return $this->createdTs;
    }

    /**
     * Sets Created Ts.
     * Created Time Stamp
     *
     * @required
     * @maps created_ts
     */
    public function setCreatedTs(int $createdTs): void
    {
        $this->createdTs = $createdTs;
    }

    /**
     * Returns Modified Ts.
     * Modified Time Stamp
     */
    public function getModifiedTs(): int
    {
        return $this->modifiedTs;
    }

    /**
     * Sets Modified Ts.
     * Modified Time Stamp
     *
     * @required
     * @maps modified_ts
     */
    public function setModifiedTs(int $modifiedTs): void
    {
        $this->modifiedTs = $modifiedTs;
    }

    /**
     * Returns Created User Id.
     * User ID Created the register
     */
    public function getCreatedUserId(): string
    {
        return $this->createdUserId;
    }

    /**
     * Sets Created User Id.
     * User ID Created the register
     *
     * @required
     * @maps created_user_id
     */
    public function setCreatedUserId(string $createdUserId): void
    {
        $this->createdUserId = $createdUserId;
    }

    /**
     * Returns Modified User Id.
     * Last User ID that updated the register
     */
    public function getModifiedUserId(): string
    {
        return $this->modifiedUserId;
    }

    /**
     * Sets Modified User Id.
     * Last User ID that updated the register
     *
     * @required
     * @maps modified_user_id
     */
    public function setModifiedUserId(string $modifiedUserId): void
    {
        $this->modifiedUserId = $modifiedUserId;
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
        $json['location_id']         = $this->locationId;
        $json['user_id']             = $this->userId;
        if (!empty($this->locationApiId)) {
            $json['location_api_id'] = $this->locationApiId['value'];
        }
        $json['id']                  = $this->id;
        $json['created_ts']          = $this->createdTs;
        $json['modified_ts']         = $this->modifiedTs;
        $json['created_user_id']     = $this->createdUserId;
        $json['modified_user_id']    = $this->modifiedUserId;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
