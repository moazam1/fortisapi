
# V1 Quick Invoices Transaction Request

## Structure

`V1QuickInvoicesTransactionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionId` | `string` | Required | Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getTransactionId(): string | setTransactionId(string transactionId): void |

## Example (as JSON)

```json
{
  "transaction_id": "11e95f8ec39de8fbdb0a4f1a"
}
```

