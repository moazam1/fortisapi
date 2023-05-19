
# Tag Transaction

## Structure

`TagTransaction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): ?string | setId(?string id): void |
| `tagId` | `string` | Required | Tag | getTagId(): string | setTagId(string tagId): void |
| `transactionId` | `string` | Required | Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getTransactionId(): string | setTransactionId(string transactionId): void |
| `paymentMethod` | `?string` | Optional | Payment Method | getPaymentMethod(): ?string | setPaymentMethod(?string paymentMethod): void |
| `created` | `?string` | Optional | Created | getCreated(): ?string | setCreated(?string created): void |
| `modified` | `?string` | Optional | Modified | getModified(): ?string | setModified(?string modified): void |
| `createdTs` | `?int` | Optional | Created Time Stamp | getCreatedTs(): ?int | setCreatedTs(?int createdTs): void |
| `modifiedTs` | `?int` | Optional | Modified Time Stamp | getModifiedTs(): ?int | setModifiedTs(?int modifiedTs): void |
| `createdUserId` | `?string` | Optional | User ID Created the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCreatedUserId(): ?string | setCreatedUserId(?string createdUserId): void |
| `modifiedUserId` | `?string` | Optional | Last User ID that updated the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getModifiedUserId(): ?string | setModifiedUserId(?string modifiedUserId): void |

## Example (as JSON)

```json
{
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "tag_id": "Tag ID",
  "transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "created_ts": 1422040992,
  "modified_ts": 1422040992,
  "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "modified_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "payment_method": "payment_method0",
  "created": "created0",
  "modified": "modified2"
}
```

