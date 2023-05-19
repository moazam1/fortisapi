
# Response 417 Filter Channels

## Structure

`Response417filterChannels`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statusCode` | `?int` | Optional | Response code | getStatusCode(): ?int | setStatusCode(?int statusCode): void |
| `error` | `?string` | Optional | Expectation Failed | getError(): ?string | setError(?string error): void |
| `message` | `?string` | Optional | Channel filters are not set for this project | getMessage(): ?string | setMessage(?string message): void |

## Example (as JSON)

```json
{
  "statusCode": 417,
  "error": "Expectation Failed",
  "message": "Channel filters are not set for this project"
}
```

