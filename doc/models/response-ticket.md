
# Response Ticket

## Structure

`ResponseTicket`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Ticket'` | getType(): string | setType(string type): void |
| `data` | [`?Data16`](../../doc/models/data-16.md) | Optional | - | getData(): ?Data16 | setData(?Data16 data): void |

## Example (as JSON)

```json
{
  "type": "Ticket",
  "data": {
    "account_holder_name": "account_holder_name0",
    "exp_date": "exp_date8",
    "cvv": "cvv8",
    "account_number": "account_number0",
    "billing_address": {
      "postal_code": "postal_code4",
      "street": "street2"
    },
    "contact_id": "contact_id4",
    "contact_api_id": "contact_api_id4",
    "id": "id0",
    "created_ts": 114
  }
}
```

