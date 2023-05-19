
# Surcharge Transaction

Surcharge Transaction Information on `expand`

## Structure

`SurchargeTransaction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): ?string | setId(?string id): void |
| `modelName` | `string` | Required | Model Name | getModelName(): string | setModelName(string modelName): void |
| `transactionId` | `string` | Required | Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getTransactionId(): string | setTransactionId(string transactionId): void |
| `surchargeFee` | `int` | Required | Surcharge Fee<br>**Constraints**: `>= 0` | getSurchargeFee(): int | setSurchargeFee(int surchargeFee): void |
| `surchargeRate` | `int` | Required | Surcharge Rate<br>**Constraints**: `>= 0` | getSurchargeRate(): int | setSurchargeRate(int surchargeRate): void |
| `surchargeAmount` | `?int` | Optional | Surcharge Amount<br>**Constraints**: `>= 0` | getSurchargeAmount(): ?int | setSurchargeAmount(?int surchargeAmount): void |
| `surchargeTransactionMin` | `?int` | Optional | Surcharge Transaction Minimum<br>**Constraints**: `>= 0` | getSurchargeTransactionMin(): ?int | setSurchargeTransactionMin(?int surchargeTransactionMin): void |
| `surchargeTransactionMax` | `?int` | Optional | Surcharge Transaction Maximum<br>**Constraints**: `>= 0` | getSurchargeTransactionMax(): ?int | setSurchargeTransactionMax(?int surchargeTransactionMax): void |
| `created` | `?int` | Optional | Created | getCreated(): ?int | setCreated(?int created): void |
| `modified` | `?int` | Optional | Modified | getModified(): ?int | setModified(?int modified): void |
| `createdUserId` | `?string` | Optional | User ID Created the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCreatedUserId(): ?string | setCreatedUserId(?string createdUserId): void |
| `modifiedUserId` | `?string` | Optional | Last User ID that updated the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getModifiedUserId(): ?string | setModifiedUserId(?string modifiedUserId): void |

## Example (as JSON)

```json
{
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "model_name": "Model Name",
  "transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "surcharge_fee": 0,
  "surcharge_rate": 0,
  "created": 1422040992,
  "modified": 1422040992,
  "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "modified_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "surcharge_amount": 18,
  "surcharge_transaction_min": 94,
  "surcharge_transaction_max": 130
}
```

