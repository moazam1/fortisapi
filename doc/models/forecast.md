
# Forecast

Forecast Information on `expand`

## Structure

`Forecast`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): ?string | setId(?string id): void |
| `recurringId` | `string` | Required | Recurring ID | getRecurringId(): string | setRecurringId(string recurringId): void |
| `recurringType` | `?float` | Optional | Recurring Type | getRecurringType(): ?float | setRecurringType(?float recurringType): void |
| `amount` | `?float` | Optional | Amount | getAmount(): ?float | setAmount(?float amount): void |
| `month` | `?string` | Optional | Month | getMonth(): ?string | setMonth(?string month): void |
| `createdTs` | `?int` | Optional | Created Time Stamp | getCreatedTs(): ?int | setCreatedTs(?int createdTs): void |
| `modifiedTs` | `?int` | Optional | Modified Time Stamp | getModifiedTs(): ?int | setModifiedTs(?int modifiedTs): void |

## Example (as JSON)

```json
{
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "recurring_id": "Recurring ID",
  "created_ts": 1422040992,
  "modified_ts": 1422040992,
  "recurring_type": 201.82,
  "amount": 56.78,
  "month": "month0"
}
```

