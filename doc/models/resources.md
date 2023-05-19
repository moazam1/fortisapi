
# Resources

Resource Information on `expand`

## Structure

`Resources`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `title` | `string` | Required | Resource Title<br>**Constraints**: *Maximum Length*: `64` | getTitle(): string | setTitle(string title): void |
| `priv` | `?string` | Optional | Priv<br>**Constraints**: *Maximum Length*: `64` | getPriv(): ?string | setPriv(?string priv): void |
| `resourceName` | `string` | Required | Resource Name<br>**Constraints**: *Maximum Length*: `64` | getResourceName(): string | setResourceName(string resourceName): void |
| `id` | `int` | Required | Resource ID | getId(): int | setId(int id): void |
| `lastUsedDate` | `?int` | Optional | Last Used Date | getLastUsedDate(): ?int | setLastUsedDate(?int lastUsedDate): void |
| `createdTs` | `?int` | Optional | Created Time Stamp | getCreatedTs(): ?int | setCreatedTs(?int createdTs): void |
| `modifiedTs` | `?int` | Optional | Modified Time Stamp | getModifiedTs(): ?int | setModifiedTs(?int modifiedTs): void |

## Example (as JSON)

```json
{
  "title": "My terminal",
  "resource_name": "v2.addons.iframe.get",
  "id": 5693,
  "last_used_date": 1422040992,
  "created_ts": 1422040992,
  "modified_ts": 1422040992,
  "priv": "priv6"
}
```

