
# Joi 3

## Structure

`Joi3`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `conditions` | ?(AnyOf([Conditions3](../../doc/models/conditions-3.md), [Conditions31](../../doc/models/conditions-31.md), [Conditions32](../../doc/models/conditions-32.md), [Conditions33](../../doc/models/conditions-33.md))) | Optional | This is a nested AnyOf case. | getConditions(): | setConditions( conditions): void |

## Example (as JSON)

```json
{
  "conditions": {
    "method": "oxor",
    "values": "token_api_id"
  }
}
```

