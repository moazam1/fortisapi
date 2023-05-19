
# Response 412 Exception

## Structure

`Response412Exception`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statusCode` | `?int` | Optional | Response code | getStatusCode(): ?int | setStatusCode(?int statusCode): void |
| `error` | `?string` | Optional | Error description | getError(): ?string | setError(?string error): void |
| `message` | `?string` | Optional | Error message | getMessage(): ?string | setMessage(?string message): void |
| `details` | [`?(Detail[])`](../../doc/models/detail.md) | Optional | Error detail | getDetails(): ?array | setDetails(?array details): void |

## Example (as JSON)

```json
{
  "statusCode": 412,
  "error": "Precondition Failed",
  "message": "child \"fieldName\" fails because [\"fieldName\" is required]",
  "details": [
    {
      "message": "message5",
      "path": [
        "path1",
        "path2"
      ],
      "type": "type5",
      "context": {
        "key": "key7",
        "label": "label7"
      }
    },
    {
      "message": "message6",
      "path": [
        "path2",
        "path3",
        "path4"
      ],
      "type": "type6",
      "context": {
        "key": "key8",
        "label": "label8"
      }
    },
    {
      "message": "message7",
      "path": [
        "path3"
      ],
      "type": "type7",
      "context": {
        "key": "key9",
        "label": "label9"
      }
    }
  ]
}
```

