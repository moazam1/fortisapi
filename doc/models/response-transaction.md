
# Response Transaction

## Structure

`ResponseTransaction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Transaction'` | getType(): string | setType(string type): void |
| `data` | [`?Data18`](../../doc/models/data-18.md) | Optional | - | getData(): ?Data18 | setData(?Data18 data): void |

## Example (as JSON)

```json
{
  "type": "Transaction",
  "data": {
    "additional_amounts": [
      {
        "type": "vision",
        "amount": 58,
        "account_type": "checking",
        "currency": 116.76
      },
      {
        "type": "clinical",
        "amount": 59,
        "account_type": "credit",
        "currency": 116.77
      }
    ],
    "billing_address": {
      "city": "city2",
      "state": "state8",
      "postal_code": "postal_code4",
      "street": "street2",
      "phone": "phone8"
    },
    "checkin_date": "checkin_date2",
    "checkout_date": "checkout_date4",
    "clerk_number": "clerk_number4",
    "id": "id0",
    "created_ts": 114,
    "modified_ts": 190,
    "payment_method": "cc"
  }
}
```

