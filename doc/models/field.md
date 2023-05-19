
# Field

## Structure

`Field`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `field` | `string` | Required | Field name used on the sort | getField(): string | setField(string field): void |
| `order` | [`string (OrderEnum)`](../../doc/models/order-enum.md) | Required | Sort direction ASC/DESC | getOrder(): string | setOrder(string order): void |

## Example (as JSON)

```json
{
  "field": "last_name",
  "order": "asc"
}
```

