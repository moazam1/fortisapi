
# Response Paylink

## Structure

`ResponsePaylink`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Paylink'` | getType(): string | setType(string type): void |
| `data` | [`?Data9`](../../doc/models/data-9.md) | Optional | - | getData(): ?Data9 | setData(?Data9 data): void |

## Example (as JSON)

```json
{
  "type": "Paylink",
  "data": {
    "location_id": "location_id4",
    "cc_product_transaction_id": "cc_product_transaction_id2",
    "email": "email6",
    "amount_due": 196,
    "location_api_id": "location_api_id0",
    "contact_id": "contact_id4",
    "id": "id0",
    "created_ts": 114,
    "modified_ts": 190
  }
}
```

