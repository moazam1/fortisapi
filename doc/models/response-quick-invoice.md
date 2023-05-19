
# Response Quick Invoice

## Structure

`ResponseQuickInvoice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'QuickInvoice'` | getType(): string | setType(string type): void |
| `data` | [`?Data10`](../../doc/models/data-10.md) | Optional | - | getData(): ?Data10 | setData(?Data10 data): void |

## Example (as JSON)

```json
{
  "type": "QuickInvoice",
  "data": {
    "location_id": "location_id4",
    "title": "title6",
    "cc_product_transaction_id": "cc_product_transaction_id2",
    "ach_product_transaction_id": "ach_product_transaction_id2",
    "due_date": "due_date8",
    "item_list": [
      {
        "name": "name9",
        "amount": 113
      },
      {
        "name": "name0",
        "amount": 114
      }
    ],
    "allow_overpayment": false,
    "bank_funded_only_override": false,
    "id": "id0",
    "created_ts": 114,
    "modified_ts": 190
  }
}
```

