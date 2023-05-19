
# Sort 25

You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:

> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
> 
> /endpoint?sort[field_name]=asc&sort[field_name2]=desc

## Structure

`Sort25`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?array` | Optional | - | getLocationId(): ?array | setLocationId(?array locationId): void |
| `title` | `?array` | Optional | - | getTitle(): ?array | setTitle(?array title): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | `?array` | Optional | - | getCreatedTs(): ?array | setCreatedTs(?array createdTs): void |
| `modifiedTs` | `?array` | Optional | - | getModifiedTs(): ?array | setModifiedTs(?array modifiedTs): void |
| `location` | `?array` | Optional | - | getLocation(): ?array | setLocation(?array location): void |

## Example (as JSON)

```json
{
  "location_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "title": {
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
  },
  "modified_ts": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

