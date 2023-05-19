
# Field 13

## Structure

`Field13`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | id | getId(): string | setId(string id): void |
| `label` | `string` | Required | Label | getLabel(): string | setLabel(string label): void |
| `fieldType` | `string` | Required | Field Type | getFieldType(): string | setFieldType(string fieldType): void |
| `position` | `string[]` | Required | Position<br>**Constraints**: *Minimum Items*: `1` | getPosition(): array | setPosition(array position): void |
| `required` | `?bool` | Optional | Required | getRequired(): ?bool | setRequired(?bool required): void |
| `readonly` | `?bool` | Optional | Read Only | getReadonly(): ?bool | setReadonly(?bool readonly): void |
| `visible` | `?bool` | Optional | Visible | getVisible(): ?bool | setVisible(?bool visible): void |
| `value` | `?string` | Optional | Value | getValue(): ?string | setValue(?string value): void |

## Example (as JSON)

```json
{
  "id": "transaction_amount",
  "label": "Header",
  "field_type": "heading",
  "position": [
    "1",
    "0",
    "1",
    "1"
  ],
  "required": true,
  "readonly": true,
  "visible": true,
  "value": "value2"
}
```

