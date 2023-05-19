
# Surcharge

Surcharge Information on `expand`

## Structure

`Surcharge`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `surchargeFee` | `int` | Required | Surcharge Fee | getSurchargeFee(): int | setSurchargeFee(int surchargeFee): void |
| `surchargeRate` | `int` | Required | Surcharge Rate | getSurchargeRate(): int | setSurchargeRate(int surchargeRate): void |
| `maxTransactionAmount` | `?int` | Optional | Max Transaction Amount | getMaxTransactionAmount(): ?int | setMaxTransactionAmount(?int maxTransactionAmount): void |
| `minFeeAmount` | `?int` | Optional | Min Fee Amount | getMinFeeAmount(): ?int | setMinFeeAmount(?int minFeeAmount): void |
| `maxFeeAmount` | `?int` | Optional | Max Fee Amount | getMaxFeeAmount(): ?int | setMaxFeeAmount(?int maxFeeAmount): void |
| `surchargeOnRecurring` | `?bool` | Optional | Surcharge On Recurring | getSurchargeOnRecurring(): ?bool | setSurchargeOnRecurring(?bool surchargeOnRecurring): void |
| `refundSurcharges` | `?bool` | Optional | Refund Surcharges | getRefundSurcharges(): ?bool | setRefundSurcharges(?bool refundSurcharges): void |
| `productTransactionId` | `string` | Required | Product Transaction Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getProductTransactionId(): string | setProductTransactionId(string productTransactionId): void |
| `runAsSeparateTransaction` | `?bool` | Optional | Run As Separate Transaction | getRunAsSeparateTransaction(): ?bool | setRunAsSeparateTransaction(?bool runAsSeparateTransaction): void |
| `applyToUserTypeId` | `?string` | Optional | Apply To User Type Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getApplyToUserTypeId(): ?string | setApplyToUserTypeId(?string applyToUserTypeId): void |
| `title` | `?string` | Optional | Title<br>**Constraints**: *Maximum Length*: `256` | getTitle(): ?string | setTitle(?string title): void |
| `surchargeLabel` | `?string` | Optional | Surcharge Label<br>**Constraints**: *Maximum Length*: `64` | getSurchargeLabel(): ?string | setSurchargeLabel(?string surchargeLabel): void |
| `surchargeTransactionProductId` | `?string` | Optional | Surcharge Transaction Product Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getSurchargeTransactionProductId(): ?string | setSurchargeTransactionProductId(?string surchargeTransactionProductId): void |
| `id` | `string` | Required | Surcharge Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `createdUserId` | `string` | Required | User ID Created the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCreatedUserId(): string | setCreatedUserId(string createdUserId): void |
| `modifiedUserId` | `string` | Required | Last User ID that updated the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getModifiedUserId(): string | setModifiedUserId(string modifiedUserId): void |
| `createdTs` | `int` | Required | Created Time Stamp | getCreatedTs(): int | setCreatedTs(int createdTs): void |
| `modifiedTs` | `int` | Required | Modified Time Stamp | getModifiedTs(): int | setModifiedTs(int modifiedTs): void |

## Example (as JSON)

```json
{
  "surcharge_fee": 10,
  "surcharge_rate": 1,
  "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "apply_to_user_type_id": "11e95f8ec39de8fbdb0a4f1a",
  "surcharge_transaction_product_id": "11e95f8ec39de8fbdb0a4f1a",
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "modified_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "created_ts": 1422040992,
  "modified_ts": 1422040992,
  "max_transaction_amount": 220,
  "min_fee_amount": 166,
  "max_fee_amount": 140,
  "surcharge_on_recurring": false,
  "refund_surcharges": false
}
```

