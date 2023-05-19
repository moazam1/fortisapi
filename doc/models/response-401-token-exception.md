
# Response 401 Token Exception

## Structure

`Response401tokenException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statusCode` | `?int` | Optional | Response code | getStatusCode(): ?int | setStatusCode(?int statusCode): void |
| `error` | `?string` | Optional | Unauthorized | getError(): ?string | setError(?string error): void |
| `message` | `?string` | Optional | Invalid token | getMessage(): ?string | setMessage(?string message): void |

## Example (as JSON)

```json
{
  "statusCode": 401,
  "error": "Unauthorized",
  "message": "Invalid token"
}
```

