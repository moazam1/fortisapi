
# Response User Verification

## Structure

`ResponseUserVerification`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'UserVerification'` | getType(): string | setType(string type): void |
| `data` | [`?Data23`](../../doc/models/data-23.md) | Optional | - | getData(): ?Data23 | setData(?Data23 data): void |

## Example (as JSON)

```json
{
  "type": "UserVerification",
  "data": {
    "id": "id0",
    "user_id": "user_id8",
    "hash": "hash6",
    "created_ts": 114
  }
}
```

