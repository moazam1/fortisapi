
# Item List 5

## Structure

`ItemList5`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | Item's Name, must be unique on the list<br>**Constraints**: *Maximum Length*: `100` | getName(): ?string | setName(?string name): void |
| `amount` | `?int` | Optional | Item's Amount<br>**Constraints**: `>= -999999999`, `<= 999999999` | getAmount(): ?int | setAmount(?int amount): void |

## Example (as JSON)

```json
{
  "name": "Bread",
  "amount": 2015
}
```

