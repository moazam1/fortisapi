
# Transaction Reference

## Structure

`TransactionReference`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): ?string | setId(?string id): void |
| `transactionId` | `?string` | Optional | Transaction ID | getTransactionId(): ?string | setTransactionId(?string transactionId): void |
| `previousTransactionId` | `?string` | Optional | Previous Transaction ID | getPreviousTransactionId(): ?string | setPreviousTransactionId(?string previousTransactionId): void |
| `transactionAmount` | `?int` | Optional | Transaction Amount | getTransactionAmount(): ?int | setTransactionAmount(?int transactionAmount): void |
| `previousTransactionAmount` | `?int` | Optional | Previous Transaction Amount | getPreviousTransactionAmount(): ?int | setPreviousTransactionAmount(?int previousTransactionAmount): void |
| `previousTransactionCreatedTs` | `?float` | Optional | Previous Transaction Created Timestamp | getPreviousTransactionCreatedTs(): ?float | setPreviousTransactionCreatedTs(?float previousTransactionCreatedTs): void |
| `referenceType` | `?string` | Optional | Reference Type | getReferenceType(): ?string | setReferenceType(?string referenceType): void |
| `createdTs` | `?int` | Optional | Created Time Stamp | getCreatedTs(): ?int | setCreatedTs(?int createdTs): void |
| `createdUserId` | `?string` | Optional | User ID Created the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCreatedUserId(): ?string | setCreatedUserId(?string createdUserId): void |

## Example (as JSON)

```json
{
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "created_ts": 1422040992,
  "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "transaction_id": "transaction_id8",
  "previous_transaction_id": "previous_transaction_id4",
  "transaction_amount": 62,
  "previous_transaction_amount": 50
}
```

