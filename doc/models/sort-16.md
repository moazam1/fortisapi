
# Sort 16

You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:

> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
> 
> /endpoint?sort[field_name]=asc&sort[field_name2]=desc

## Structure

`Sort16`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | `?array` | Optional | - | getCreatedTs(): ?array | setCreatedTs(?array createdTs): void |
| `productTransactionId` | `?array` | Optional | - | getProductTransactionId(): ?array | setProductTransactionId(?array productTransactionId): void |
| `processingStatusId` | `?array` | Optional | - | getProcessingStatusId(): ?array | setProcessingStatusId(?array processingStatusId): void |
| `batchNum` | `?array` | Optional | - | getBatchNum(): ?array | setBatchNum(?array batchNum): void |
| `isOpen` | `?array` | Optional | - | getIsOpen(): ?array | setIsOpen(?array isOpen): void |
| `settlementFileName` | `?array` | Optional | - | getSettlementFileName(): ?array | setSettlementFileName(?array settlementFileName): void |
| `batchCloseTs` | `?array` | Optional | - | getBatchCloseTs(): ?array | setBatchCloseTs(?array batchCloseTs): void |
| `batchCloseDetail` | `?array` | Optional | - | getBatchCloseDetail(): ?array | setBatchCloseDetail(?array batchCloseDetail): void |
| `totalSaleAmount` | `?array` | Optional | - | getTotalSaleAmount(): ?array | setTotalSaleAmount(?array totalSaleAmount): void |
| `totalSaleCount` | `?array` | Optional | - | getTotalSaleCount(): ?array | setTotalSaleCount(?array totalSaleCount): void |
| `totalRefundAmount` | `?array` | Optional | - | getTotalRefundAmount(): ?array | setTotalRefundAmount(?array totalRefundAmount): void |
| `totalRefundCount` | `?array` | Optional | - | getTotalRefundCount(): ?array | setTotalRefundCount(?array totalRefundCount): void |
| `totalVoidAmount` | `?array` | Optional | - | getTotalVoidAmount(): ?array | setTotalVoidAmount(?array totalVoidAmount): void |
| `totalVoidCount` | `?array` | Optional | - | getTotalVoidCount(): ?array | setTotalVoidCount(?array totalVoidCount): void |
| `changelogs` | `?array` | Optional | - | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `postbackLogs` | `?array` | Optional | - | getPostbackLogs(): ?array | setPostbackLogs(?array postbackLogs): void |
| `productTransaction` | `?array` | Optional | - | getProductTransaction(): ?array | setProductTransaction(?array productTransaction): void |

## Example (as JSON)

```json
{
  "id": {
    "key1": "val1",
    "key2": "val2"
  },
  "created_ts": {
    "key1": "val1",
    "key2": "val2"
  },
  "product_transaction_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "processing_status_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "batch_num": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

