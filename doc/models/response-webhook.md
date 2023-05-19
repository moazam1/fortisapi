
# Response Webhook

## Structure

`ResponseWebhook`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Webhook'` | getType(): string | setType(string type): void |
| `data` | [`?Data28`](../../doc/models/data-28.md) | Optional | - | getData(): ?Data28 | setData(?Data28 data): void |

## Example (as JSON)

```json
{
  "type": "Webhook",
  "data": {
    "attempt_interval": 14,
    "basic_auth_username": "basic_auth_username8",
    "basic_auth_password": "basic_auth_password0",
    "expands": "expands2",
    "format": "api-default",
    "is_active": false,
    "location_id": "location_id4",
    "on_create": false,
    "on_update": false,
    "on_delete": false,
    "resource": "transactionbatch",
    "number_of_attempts": 84,
    "url": "url4",
    "id": "id0"
  }
}
```

