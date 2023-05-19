<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class TransactionSplit implements \JsonSerializable
{
    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var string
     */
    private $contactId;

    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $createdTs;

    /**
     * @var array
     */
    private $createdUserId = [];

    /**
     * @param string $transactionId
     * @param string $contactId
     * @param int $amount
     * @param string $id
     * @param int $createdTs
     */
    public function __construct(string $transactionId, string $contactId, int $amount, string $id, int $createdTs)
    {
        $this->transactionId = $transactionId;
        $this->contactId = $contactId;
        $this->amount = $amount;
        $this->id = $id;
        $this->createdTs = $createdTs;
    }

    /**
     * Returns Transaction Id.
     * Transaction ID
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     * Transaction ID
     *
     * @required
     * @maps transaction_id
     */
    public function setTransactionId(string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Returns Contact Id.
     * Contact ID
     */
    public function getContactId(): string
    {
        return $this->contactId;
    }

    /**
     * Sets Contact Id.
     * Contact ID
     *
     * @required
     * @maps contact_id
     */
    public function setContactId(string $contactId): void
    {
        $this->contactId = $contactId;
    }

    /**
     * Returns Amount.
     * Amount
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount
     *
     * @required
     * @maps amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Id.
     * Transaction Splits ID
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Transaction Splits ID
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
     * Returns Created User Id.
     * User ID Created the register
     */
    public function getCreatedUserId(): ?string
    {
        if (count($this->createdUserId) == 0) {
            return null;
        }
        return $this->createdUserId['value'];
    }

    /**
     * Sets Created User Id.
     * User ID Created the register
     *
     * @maps created_user_id
     */
    public function setCreatedUserId(?string $createdUserId): void
    {
        $this->createdUserId['value'] = $createdUserId;
    }

    /**
     * Unsets Created User Id.
     * User ID Created the register
     */
    public function unsetCreatedUserId(): void
    {
        $this->createdUserId = [];
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
        $json['transaction_id']      = $this->transactionId;
        $json['contact_id']          = $this->contactId;
        $json['amount']              = $this->amount;
        $json['id']                  = $this->id;
        $json['created_ts']          = $this->createdTs;
        if (!empty($this->createdUserId)) {
            $json['created_user_id'] = $this->createdUserId['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
