
# Sort

Sort information used on the results

## Structure

`Sort`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Object type<br>**Default**: `'Sorting'` | getType(): string | setType(string type): void |
| `fields` | [`Field[]`](../../doc/models/field.md) | Required | [object Object] | getFields(): array | setFields(array fields): void |

## Example (as JSON)

```json
{
  "type": "Sorting",
  "fields": [
    {
      "field": "last_name",
      "order": "asc"
    }
  ]
}
```

