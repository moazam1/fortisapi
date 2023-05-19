
# V1 Recurrings Defer Payment Request

## Structure

`V1RecurringsDeferPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deferCount` | `int` | Required | Defer Count<br>**Constraints**: `>= 1`, `<= 99` | getDeferCount(): int | setDeferCount(int deferCount): void |

## Example (as JSON)

```json
{
  "defer_count": 5
}
```

