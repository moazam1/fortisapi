
# Pagination

Pagination info

## Structure

`Pagination`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Object type<br>**Default**: `'Pagination'` | getType(): string | setType(string type): void |
| `totalCount` | `?int` | Optional | Total records count | getTotalCount(): ?int | setTotalCount(?int totalCount): void |
| `pageCount` | `?int` | Optional | Total page count | getPageCount(): ?int | setPageCount(?int pageCount): void |
| `pageNumber` | `?int` | Optional | Current page | getPageNumber(): ?int | setPageNumber(?int pageNumber): void |
| `pageSize` | `?int` | Optional | Page size | getPageSize(): ?int | setPageSize(?int pageSize): void |

## Example (as JSON)

```json
{
  "type": "Pagination",
  "total_count": 423,
  "page_count": 42,
  "page_number": 6,
  "page_size": 10
}
```

