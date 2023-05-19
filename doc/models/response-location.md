
# Response Location

## Structure

`ResponseLocation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Location'` | getType(): string | setType(string type): void |
| `data` | [`?Data6`](../../doc/models/data-6.md) | Optional | - | getData(): ?Data6 | setData(?Data6 data): void |

## Example (as JSON)

```json
{
  "type": "Location",
  "data": {
    "id": "id0",
    "created_ts": 114,
    "modified_ts": 190,
    "account_number": "account_number0",
    "address": {
      "city": "city6",
      "state": "state2",
      "postal_code": "postal_code8",
      "country": "US",
      "street": "street6"
    },
    "branding_domain_id": "branding_domain_id4",
    "contact_email_trx_receipt_default": false,
    "default_ach": "default_ach4",
    "name": "name0"
  }
}
```

