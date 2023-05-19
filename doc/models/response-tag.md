
# Response Tag

## Structure

`ResponseTag`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Tag'` | getType(): string | setType(string type): void |
| `data` | [`?Data14`](../../doc/models/data-14.md) | Optional | - | getData(): ?Data14 | setData(?Data14 data): void |

## Example (as JSON)

```json
{
  "type": "Tag",
  "data": {
    "location_id": "location_id4",
    "title": "title6",
    "id": "id0",
    "created_ts": 114,
    "modified_ts": 190,
    "location": {
      "id": "id4",
      "created_ts": 28,
      "modified_ts": 104,
      "account_number": "account_number4",
      "address": {
        "city": "city0",
        "state": "state6",
        "postal_code": "postal_code2",
        "country": "US",
        "street": "street0"
      },
      "branding_domain_id": "branding_domain_id8",
      "contact_email_trx_receipt_default": false,
      "default_ach": "default_ach8",
      "name": "name4",
      "parent_id": "parent_id0"
    }
  }
}
```

