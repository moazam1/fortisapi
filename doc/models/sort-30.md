
# Sort 30

You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:

> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
> 
> /endpoint?sort[field_name]=asc&sort[field_name2]=desc

## Structure

`Sort30`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `userId` | `?array` | Optional | - | getUserId(): ?array | setUserId(?array userId): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | `?array` | Optional | - | getCreatedTs(): ?array | setCreatedTs(?array createdTs): void |

## Example (as JSON)

```json
{
  "user_id": {
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

