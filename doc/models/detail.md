
# Detail

## Structure

`Detail`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `message` | `?string` | Optional | - | getMessage(): ?string | setMessage(?string message): void |
| `path` | `?(string[])` | Optional | - | getPath(): ?array | setPath(?array path): void |
| `type` | `?string` | Optional | - | getType(): ?string | setType(?string type): void |
| `context` | [`?Context`](../../doc/models/context.md) | Optional | - | getContext(): ?Context | setContext(?Context context): void |

## Example (as JSON)

```json
{
  "message": "\"fieldName\" is required",
  "type": "any.required",
  "path": [
    "path8",
    "path9",
    "path0"
  ],
  "context": {
    "key": "key2",
    "label": "label2"
  }
}
```

