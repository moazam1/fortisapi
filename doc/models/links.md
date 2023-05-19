
# Links

Pagination page links

## Structure

`Links`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Object type<br>**Default**: `'Links'` | getType(): string | setType(string type): void |
| `first` | `string` | Required | Link to the first page | getFirst(): string | setFirst(string first): void |
| `previous` | `string` | Required | Link to the previous page | getPrevious(): string | setPrevious(string previous): void |
| `last` | `string` | Required | Link to the last page | getLast(): string | setLast(string last): void |

## Example (as JSON)

```json
{
  "type": "Links",
  "first": "/v1/endpoint?page[size]=10&page[number]=1",
  "previous": "/v1/endpoint?page[size]=10&page[number]=5",
  "last": "/v1/endpoint?page[size]=10&page[number]=42"
}
```

