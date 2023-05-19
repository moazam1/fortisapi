
# Response Ticket Intention

## Structure

`ResponseTicketIntention`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'TicketIntention'` | getType(): string | setType(string type): void |
| `data` | [`?Data4`](../../doc/models/data-4.md) | Optional | - | getData(): ?Data4 | setData(?Data4 data): void |

## Example (as JSON)

```json
{
  "type": "TicketIntention",
  "data": {
    "contact_id": "contact_id4",
    "contact_api_id": "contact_api_id4",
    "location_id": "location_id4",
    "client_token": "client_token0"
  }
}
```

