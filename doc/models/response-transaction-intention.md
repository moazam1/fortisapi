
# Response Transaction Intention

## Structure

`ResponseTransactionIntention`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'TransactionIntention'` | getType(): string | setType(string type): void |
| `data` | [`?Data5`](../../doc/models/data-5.md) | Optional | - | getData(): ?Data5 | setData(?Data5 data): void |

## Example (as JSON)

```json
{
  "type": "TransactionIntention",
  "data": {
    "action": "refund",
    "methods": [
      {
        "type": "cc",
        "product_transaction_id": "product_transaction_id1"
      }
    ],
    "amount": 158,
    "tax_amount": 62,
    "secondary_amount": 104,
    "client_token": "client_token0"
  }
}
```

