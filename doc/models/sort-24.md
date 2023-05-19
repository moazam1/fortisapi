
# Sort 24

You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:

> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
> 
> /endpoint?sort[field_name]=asc&sort[field_name2]=desc

## Structure

`Sort24`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `signature` | `?array` | Optional | - | getSignature(): ?array | setSignature(?array signature): void |
| `resource` | `?array` | Optional | - | getResource(): ?array | setResource(?array resource): void |
| `resourceId` | `?array` | Optional | - | getResourceId(): ?array | setResourceId(?array resourceId): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | `?array` | Optional | - | getCreatedTs(): ?array | setCreatedTs(?array createdTs): void |
| `modifiedTs` | `?array` | Optional | - | getModifiedTs(): ?array | setModifiedTs(?array modifiedTs): void |
| `rawSignature` | `?array` | Optional | - | getRawSignature(): ?array | setRawSignature(?array rawSignature): void |

## Example (as JSON)

```json
{
  "signature": {
    "key1": "val1",
    "key2": "val2"
  },
  "resource": {
    "key1": "val1",
    "key2": "val2"
  },
  "resource_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "id": {
    "key1": "val1",
    "key2": "val2"
  },
  "created_ts": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

