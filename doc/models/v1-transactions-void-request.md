
# V1 Transactions Void Request

## Structure

`V1TransactionsVoidRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `tags` | `?(string[])` | Optional | Tags | getTags(): ?array | setTags(?array tags): void |
| `description` | `?string` | Optional | Description<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64` | getDescription(): ?string | setDescription(?string description): void |

## Example (as JSON)

```json
{
  "description": "some description",
  "tags": [
    "tags5",
    "tags6"
  ]
}
```

