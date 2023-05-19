<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

/**
 * Transaction Batch Information on `expand`
 */
class TransactionBatch implements \JsonSerializable
{
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
    private $productTransactionId = [];

    /**
     * @var int
     */
    private $processingStatusId;

    /**
     * @var array
     */
    private $batchNum = [];

    /**
     * @var array
     */
    private $isOpen = [];

    /**
     * @var array
     */
    private $settlementFileName = [];

    /**
     * @var array
     */
    private $batchCloseTs = [];

    /**
     * @var array
     */
    private $batchCloseDetail = [];

    /**
     * @var array
     */
    private $totalSaleAmount = [];

    /**
     * @var array
     */
    private $totalSaleCount = [];

    /**
     * @var array
     */
    private $totalRefundAmount = [];

    /**
     * @var array
     */
    private $totalRefundCount = [];

    /**
     * @var array
     */
    private $totalVoidAmount = [];

    /**
     * @var array
     */
    private $totalVoidCount = [];

    /**
     * @param string $id
     * @param int $createdTs
     * @param int $processingStatusId
     */
    public function __construct(string $id, int $createdTs, int $processingStatusId)
    {
        $this->id = $id;
        $this->createdTs = $createdTs;
        $this->processingStatusId = $processingStatusId;
    }

    /**
     * Returns Id.
     * Batch ID
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Batch ID
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
     * Returns Product Transaction Id.
     * Product Transaction Id
     */
    public function getProductTransactionId(): ?string
    {
        if (count($this->productTransactionId) == 0) {
            return null;
        }
        return $this->productTransactionId['value'];
    }

    /**
     * Sets Product Transaction Id.
     * Product Transaction Id
     *
     * @maps product_transaction_id
     */
    public function setProductTransactionId(?string $productTransactionId): void
    {
        $this->productTransactionId['value'] = $productTransactionId;
    }

    /**
     * Unsets Product Transaction Id.
     * Product Transaction Id
     */
    public function unsetProductTransactionId(): void
    {
        $this->productTransactionId = [];
    }

    /**
     * Returns Processing Status Id.
     * Processing Status Id
     */
    public function getProcessingStatusId(): int
    {
        return $this->processingStatusId;
    }

    /**
     * Sets Processing Status Id.
     * Processing Status Id
     *
     * @required
     * @maps processing_status_id
     */
    public function setProcessingStatusId(int $processingStatusId): void
    {
        $this->processingStatusId = $processingStatusId;
    }

    /**
     * Returns Batch Num.
     * Batch Number
     */
    public function getBatchNum(): ?int
    {
        if (count($this->batchNum) == 0) {
            return null;
        }
        return $this->batchNum['value'];
    }

    /**
     * Sets Batch Num.
     * Batch Number
     *
     * @maps batch_num
     */
    public function setBatchNum(?int $batchNum): void
    {
        $this->batchNum['value'] = $batchNum;
    }

    /**
     * Unsets Batch Num.
     * Batch Number
     */
    public function unsetBatchNum(): void
    {
        $this->batchNum = [];
    }

    /**
     * Returns Is Open.
     * Is Open
     */
    public function getIsOpen(): ?float
    {
        if (count($this->isOpen) == 0) {
            return null;
        }
        return $this->isOpen['value'];
    }

    /**
     * Sets Is Open.
     * Is Open
     *
     * @maps is_open
     */
    public function setIsOpen(?float $isOpen): void
    {
        $this->isOpen['value'] = $isOpen;
    }

    /**
     * Unsets Is Open.
     * Is Open
     */
    public function unsetIsOpen(): void
    {
        $this->isOpen = [];
    }

    /**
     * Returns Settlement File Name.
     * Settlement File Name
     */
    public function getSettlementFileName(): ?string
    {
        if (count($this->settlementFileName) == 0) {
            return null;
        }
        return $this->settlementFileName['value'];
    }

    /**
     * Sets Settlement File Name.
     * Settlement File Name
     *
     * @maps settlement_file_name
     */
    public function setSettlementFileName(?string $settlementFileName): void
    {
        $this->settlementFileName['value'] = $settlementFileName;
    }

    /**
     * Unsets Settlement File Name.
     * Settlement File Name
     */
    public function unsetSettlementFileName(): void
    {
        $this->settlementFileName = [];
    }

    /**
     * Returns Batch Close Ts.
     * Batch Close Ts
     */
    public function getBatchCloseTs(): ?float
    {
        if (count($this->batchCloseTs) == 0) {
            return null;
        }
        return $this->batchCloseTs['value'];
    }

    /**
     * Sets Batch Close Ts.
     * Batch Close Ts
     *
     * @maps batch_close_ts
     */
    public function setBatchCloseTs(?float $batchCloseTs): void
    {
        $this->batchCloseTs['value'] = $batchCloseTs;
    }

    /**
     * Unsets Batch Close Ts.
     * Batch Close Ts
     */
    public function unsetBatchCloseTs(): void
    {
        $this->batchCloseTs = [];
    }

    /**
     * Returns Batch Close Detail.
     * Batch Close Detail
     */
    public function getBatchCloseDetail(): ?string
    {
        if (count($this->batchCloseDetail) == 0) {
            return null;
        }
        return $this->batchCloseDetail['value'];
    }

    /**
     * Sets Batch Close Detail.
     * Batch Close Detail
     *
     * @maps batch_close_detail
     */
    public function setBatchCloseDetail(?string $batchCloseDetail): void
    {
        $this->batchCloseDetail['value'] = $batchCloseDetail;
    }

    /**
     * Unsets Batch Close Detail.
     * Batch Close Detail
     */
    public function unsetBatchCloseDetail(): void
    {
        $this->batchCloseDetail = [];
    }

    /**
     * Returns Total Sale Amount.
     * Total Sale Amount
     */
    public function getTotalSaleAmount(): ?int
    {
        if (count($this->totalSaleAmount) == 0) {
            return null;
        }
        return $this->totalSaleAmount['value'];
    }

    /**
     * Sets Total Sale Amount.
     * Total Sale Amount
     *
     * @maps total_sale_amount
     */
    public function setTotalSaleAmount(?int $totalSaleAmount): void
    {
        $this->totalSaleAmount['value'] = $totalSaleAmount;
    }

    /**
     * Unsets Total Sale Amount.
     * Total Sale Amount
     */
    public function unsetTotalSaleAmount(): void
    {
        $this->totalSaleAmount = [];
    }

    /**
     * Returns Total Sale Count.
     * Total Sale Count
     */
    public function getTotalSaleCount(): ?int
    {
        if (count($this->totalSaleCount) == 0) {
            return null;
        }
        return $this->totalSaleCount['value'];
    }

    /**
     * Sets Total Sale Count.
     * Total Sale Count
     *
     * @maps total_sale_count
     */
    public function setTotalSaleCount(?int $totalSaleCount): void
    {
        $this->totalSaleCount['value'] = $totalSaleCount;
    }

    /**
     * Unsets Total Sale Count.
     * Total Sale Count
     */
    public function unsetTotalSaleCount(): void
    {
        $this->totalSaleCount = [];
    }

    /**
     * Returns Total Refund Amount.
     * Total Refund Amount
     */
    public function getTotalRefundAmount(): ?int
    {
        if (count($this->totalRefundAmount) == 0) {
            return null;
        }
        return $this->totalRefundAmount['value'];
    }

    /**
     * Sets Total Refund Amount.
     * Total Refund Amount
     *
     * @maps total_refund_amount
     */
    public function setTotalRefundAmount(?int $totalRefundAmount): void
    {
        $this->totalRefundAmount['value'] = $totalRefundAmount;
    }

    /**
     * Unsets Total Refund Amount.
     * Total Refund Amount
     */
    public function unsetTotalRefundAmount(): void
    {
        $this->totalRefundAmount = [];
    }

    /**
     * Returns Total Refund Count.
     * Total Refund Count
     */
    public function getTotalRefundCount(): ?int
    {
        if (count($this->totalRefundCount) == 0) {
            return null;
        }
        return $this->totalRefundCount['value'];
    }

    /**
     * Sets Total Refund Count.
     * Total Refund Count
     *
     * @maps total_refund_count
     */
    public function setTotalRefundCount(?int $totalRefundCount): void
    {
        $this->totalRefundCount['value'] = $totalRefundCount;
    }

    /**
     * Unsets Total Refund Count.
     * Total Refund Count
     */
    public function unsetTotalRefundCount(): void
    {
        $this->totalRefundCount = [];
    }

    /**
     * Returns Total Void Amount.
     * Total Void Amount
     */
    public function getTotalVoidAmount(): ?int
    {
        if (count($this->totalVoidAmount) == 0) {
            return null;
        }
        return $this->totalVoidAmount['value'];
    }

    /**
     * Sets Total Void Amount.
     * Total Void Amount
     *
     * @maps total_void_amount
     */
    public function setTotalVoidAmount(?int $totalVoidAmount): void
    {
        $this->totalVoidAmount['value'] = $totalVoidAmount;
    }

    /**
     * Unsets Total Void Amount.
     * Total Void Amount
     */
    public function unsetTotalVoidAmount(): void
    {
        $this->totalVoidAmount = [];
    }

    /**
     * Returns Total Void Count.
     * Total Void Count
     */
    public function getTotalVoidCount(): ?int
    {
        if (count($this->totalVoidCount) == 0) {
            return null;
        }
        return $this->totalVoidCount['value'];
    }

    /**
     * Sets Total Void Count.
     * Total Void Count
     *
     * @maps total_void_count
     */
    public function setTotalVoidCount(?int $totalVoidCount): void
    {
        $this->totalVoidCount['value'] = $totalVoidCount;
    }

    /**
     * Unsets Total Void Count.
     * Total Void Count
     */
    public function unsetTotalVoidCount(): void
    {
        $this->totalVoidCount = [];
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
        $json['id']                         = $this->id;
        $json['created_ts']                 = $this->createdTs;
        if (!empty($this->productTransactionId)) {
            $json['product_transaction_id'] = $this->productTransactionId['value'];
        }
        $json['processing_status_id']       = $this->processingStatusId;
        if (!empty($this->batchNum)) {
            $json['batch_num']              = $this->batchNum['value'];
        }
        if (!empty($this->isOpen)) {
            $json['is_open']                = $this->isOpen['value'];
        }
        if (!empty($this->settlementFileName)) {
            $json['settlement_file_name']   = $this->settlementFileName['value'];
        }
        if (!empty($this->batchCloseTs)) {
            $json['batch_close_ts']         = $this->batchCloseTs['value'];
        }
        if (!empty($this->batchCloseDetail)) {
            $json['batch_close_detail']     = $this->batchCloseDetail['value'];
        }
        if (!empty($this->totalSaleAmount)) {
            $json['total_sale_amount']      = $this->totalSaleAmount['value'];
        }
        if (!empty($this->totalSaleCount)) {
            $json['total_sale_count']       = $this->totalSaleCount['value'];
        }
        if (!empty($this->totalRefundAmount)) {
            $json['total_refund_amount']    = $this->totalRefundAmount['value'];
        }
        if (!empty($this->totalRefundCount)) {
            $json['total_refund_count']     = $this->totalRefundCount['value'];
        }
        if (!empty($this->totalVoidAmount)) {
            $json['total_void_amount']      = $this->totalVoidAmount['value'];
        }
        if (!empty($this->totalVoidCount)) {
            $json['total_void_count']       = $this->totalVoidCount['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}