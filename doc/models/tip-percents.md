
# Tip Percents

A JSON of tip percents the JSON MUST contain only these three fields: percent_1, percent_2, percent_3

## Structure

`TipPercents`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `percent1` | `?int` | Optional | field can only contain a value from 0 to 99, if 1 field is NULL, all fields must be null.<br>**Constraints**: `>= 0`, `<= 99` | getPercent1(): ?int | setPercent1(?int percent1): void |
| `percent2` | `?int` | Optional | field can only contain a value from 0 to 99, if 1 field is NULL, all fields must be null.<br>**Constraints**: `>= 0`, `<= 99` | getPercent2(): ?int | setPercent2(?int percent2): void |
| `percent3` | `?int` | Optional | field can only contain a value from 0 to 99, if 1 field is NULL, all fields must be null.<br>**Constraints**: `>= 0`, `<= 99` | getPercent3(): ?int | setPercent3(?int percent3): void |

## Example (as JSON)

```json
{
  "percent_1": 0,
  "percent_2": 2,
  "percent_3": 99
}
```

