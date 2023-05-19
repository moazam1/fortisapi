
# Response Recurring

## Structure

`ResponseRecurring`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Recurring'` | getType(): string | setType(string type): void |
| `data` | [`?Data12`](../../doc/models/data-12.md) | Optional | - | getData(): ?Data12 | setData(?Data12 data): void |

## Example (as JSON)

```json
{
  "type": "Recurring",
  "data": {
    "account_vault_id": "account_vault_id6",
    "token_id": "token_id4",
    "account_vault_api_id": "account_vault_api_id4",
    "token_api_id": "token_api_id6",
    "_joi": {
      "conditions": {
        "method": "xor",
        "values": "account_vault_id"
      }
    },
    "active": false,
    "interval": 190,
    "interval_type": "m",
    "location_id": "location_id4",
    "payment_method": "cc",
    "start_date": "start_date4",
    "status": "ended",
    "transaction_amount": 88,
    "id": "id0",
    "next_run_date": "next_run_date8",
    "created_ts": 114,
    "modified_ts": 190,
    "recurring_type_id": "o"
  }
}
```

