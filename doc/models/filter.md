
# Filter

You can use any `field_name` from this endpoint results as a filter, and you can also use more than one field to create AND conditions. For date fields (ended with `_ts`), you can also search for ranges using the `$gte` (Greater than or equal to) and/or  `$lte` (Lower than or equal to). You can use one of the following methods:

> /endpoint?filter={ "field_name": "Value" }
> 
> /endpoint?filter[field_name]=Value
> 
> /endpoint?filter={ "created_ts": "today" }
> 
> /endpoint?filter[created_ts]=today
> 
> /endpoint?filter={ "created_ts": { "$gte": "yesterday", "$lte": "today" } }
> 
> /endpoint?filter[created_ts][$gte]=yesterday&filter[created_ts][$lte]=today
> 
> /endpoint?filter[address][city]=memphis
> 
> /endpoint?filter={ "address": { "city" : "memphis" } }

## Structure

`Filter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | ?(AnyOf([CreatedTs](../../doc/models/created-ts-enum.md), [CreatedTs1](../../doc/models/created-ts-1.md))) | Optional | This is a nested AnyOf case. | getCreatedTs(): | setCreatedTs( createdTs): void |
| `productTransactionId` | `?array` | Optional | - | getProductTransactionId(): ?array | setProductTransactionId(?array productTransactionId): void |
| `processingStatusId` | `?array` | Optional | - | getProcessingStatusId(): ?array | setProcessingStatusId(?array processingStatusId): void |
| `batchNum` | `?array` | Optional | - | getBatchNum(): ?array | setBatchNum(?array batchNum): void |
| `isOpen` | `?array` | Optional | - | getIsOpen(): ?array | setIsOpen(?array isOpen): void |
| `settlementFileName` | `?array` | Optional | - | getSettlementFileName(): ?array | setSettlementFileName(?array settlementFileName): void |
| `batchCloseTs` | ?(AnyOf([BatchCloseTs](../../doc/models/batch-close-ts-enum.md), [BatchCloseTs1](../../doc/models/batch-close-ts-1.md))) | Optional | This is a nested AnyOf case. | getBatchCloseTs(): | setBatchCloseTs( batchCloseTs): void |
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
  "created_ts": "last 30 days",
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

