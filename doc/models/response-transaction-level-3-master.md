
# Response Transaction Level 3 Master

## Structure

`ResponseTransactionLevel3Master`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'TransactionLevel3Master'` | getType(): string | setType(string type): void |
| `data` | [`?Data20`](../../doc/models/data-20.md) | Optional | - | getData(): ?Data20 | setData(?Data20 data): void |

## Example (as JSON)

```json
{
  "type": "TransactionLevel3Master",
  "data": {
    "id": "id0",
    "transaction_id": "transaction_id8",
    "level3_data": {
      "destination_country_code": "destination_country_code8",
      "duty_amount": 236,
      "freight_amount": 114,
      "national_tax": 252,
      "sales_tax": 20,
      "line_items": [
        {
          "description": "description3",
          "commodity_code": "commodity_code9",
          "discount_amount": 175,
          "other_tax_amount": 147,
          "product_code": "product_code3",
          "quantity": 173,
          "tax_amount": 215,
          "tax_rate": 97,
          "unit_code": "unit_code7",
          "unit_cost": 97
        },
        {
          "description": "description2",
          "commodity_code": "commodity_code0",
          "discount_amount": 174,
          "other_tax_amount": 148,
          "product_code": "product_code4",
          "quantity": 174,
          "tax_amount": 214,
          "tax_rate": 96,
          "unit_code": "unit_code8",
          "unit_cost": 96
        }
      ]
    }
  }
}
```

