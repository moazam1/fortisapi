
# Response Location Info

## Structure

`ResponseLocationInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'LocationInfo'` | getType(): string | setType(string type): void |
| `data` | [`?Data7`](../../doc/models/data-7.md) | Optional | - | getData(): ?Data7 | setData(?Data7 data): void |

## Example (as JSON)

```json
{
  "type": "LocationInfo",
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
    "name": "name0",
    "branding_domain": {
      "key1": "val1",
      "key2": "val2"
    },
    "product_transactions": [
      {
        "key1": "val1",
        "key2": "val2"
      },
      {
        "key1": "val1",
        "key2": "val2"
      }
    ],
    "product_file": {
      "key1": "val1",
      "key2": "val2"
    },
    "product_accountvault": {
      "key1": "val1",
      "key2": "val2"
    },
    "product_recurring": {
      "key1": "val1",
      "key2": "val2"
    },
    "tags": [
      {
        "key1": "val1",
        "key2": "val2"
      },
      {
        "key1": "val1",
        "key2": "val2"
      },
      {
        "key1": "val1",
        "key2": "val2"
      }
    ],
    "terminals": [
      {
        "key1": "val1",
        "key2": "val2"
      },
      {
        "key1": "val1",
        "key2": "val2"
      }
    ]
  }
}
```

