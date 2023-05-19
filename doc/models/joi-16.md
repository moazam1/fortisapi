
# Joi 16

## Structure

`Joi16`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `conditions` | ?(AnyOf([Conditions15](../../doc/models/conditions-15.md), [Conditions161](../../doc/models/conditions-161.md), [Conditions3](../../doc/models/conditions-3.md), [Conditions31](../../doc/models/conditions-31.md), [Conditions32](../../doc/models/conditions-32.md), [Conditions33](../../doc/models/conditions-33.md))) | Optional | This is a nested AnyOf case. | getConditions(): | setConditions( conditions): void |

## Example (as JSON)

```json
{
  "conditions": {
    "method": "xor",
    "values": "account_number"
  }
}
```

