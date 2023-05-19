
# Response Quick Invoice Resend

## Structure

`ResponseQuickInvoiceResend`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'QuickInvoiceResend'` | getType(): string | setType(string type): void |
| `data` | [`?Data11`](../../doc/models/data-11.md) | Optional | - | getData(): ?Data11 | setData(?Data11 data): void |

## Example (as JSON)

```json
{
  "type": "QuickInvoiceResend",
  "data": {
    "id": "id0",
    "email_log_id": "email_log_id2",
    "sms_log_id": "sms_log_id4",
    "success": false,
    "sms_success": false,
    "email": "email6"
  }
}
```

