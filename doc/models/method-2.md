
# Method 2

## Structure

`Method2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`string (TypeEnum)`](../../doc/models/type-enum.md) | Required | Payment type. Must be unique. | getType(): string | setType(string type): void |
| `productTransactionId` | `string` | Required | The Product's method (cc/ach) has to match the type.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getProductTransactionId(): string | setProductTransactionId(string productTransactionId): void |

## Example (as JSON)

```json
{
  "type": "cc",
  "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a"
}
```

