
# Response Signature

## Structure

`ResponseSignature`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Signature'` | getType(): string | setType(string type): void |
| `data` | [`?Data13`](../../doc/models/data-13.md) | Optional | - | getData(): ?Data13 | setData(?Data13 data): void |

## Example (as JSON)

```json
{
  "type": "Signature",
  "data": {
    "signature": "signature8",
    "resource": "AccountVault",
    "resource_id": "resource_id6",
    "id": "id0",
    "created_ts": 114,
    "modified_ts": 190,
    "raw_signature": "raw_signature0"
  }
}
```

