
# Header

Header

## Structure

`Header`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `settings` | [`Settings`](../../doc/models/settings.md) | Required | - | getSettings(): Settings | setSettings(Settings settings): void |
| `fields` | [`Field13[]`](../../doc/models/field-13.md) | Required | - | getFields(): array | setFields(array fields): void |

## Example (as JSON)

```json
{
  "settings": {
    "enabled": true,
    "columns": 1.0,
    "rows": 1.0
  },
  "fields": [
    {
      "id": "transaction_amount",
      "label": "Header",
      "field_type": "heading",
      "position": [
        "1",
        "0",
        "1",
        "1"
      ],
      "required": true,
      "readonly": true,
      "visible": true,
      "value": "value4"
    }
  ]
}
```

