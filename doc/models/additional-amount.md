
# Additional Amount

## Structure

`AdditionalAmount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string (Type1Enum)`](../../doc/models/type-1-enum.md) | Optional | type of the amount [4S-Healthcare(Visa and MC Only), 4U-Prescription/Rx(Visa and MC Only), 4V-Vision/Optical(Visa Only), 4W-clinic/other qualified medical(Visa Only) ,4X-Dental(Visa Only)]. | getType(): ?string | setType(?string type): void |
| `amount` | `?int` | Optional | The amount of additional amount. | getAmount(): ?int | setAmount(?int amount): void |
| `accountType` | [`?string (AccountTypeEnum)`](../../doc/models/account-type-enum.md) | Optional | Account Type | getAccountType(): ?string | setAccountType(?string accountType): void |
| `currency` | `?float` | Optional | Currency Code | getCurrency(): ?float | setCurrency(?float currency): void |

## Example (as JSON)

```json
{
  "type": "cashback",
  "amount": 10,
  "account_type": "credit",
  "currency": 840.0
}
```

