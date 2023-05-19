
# Bank Account

The Bank Account.

## Structure

`BankAccount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `routingNumber` | `?string` | Optional | Nine-digit Bank routing number.<br>**Constraints**: *Maximum Length*: `9` | getRoutingNumber(): ?string | setRoutingNumber(?string routingNumber): void |
| `accountNumber` | `?string` | Optional | Bank account number.<br>**Constraints**: *Maximum Length*: `17` | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountHolderName` | `?string` | Optional | Name on bank account.<br>**Constraints**: *Maximum Length*: `40` | getAccountHolderName(): ?string | setAccountHolderName(?string accountHolderName): void |

## Example (as JSON)

```json
{
  "routing_number": "011103093",
  "account_number": "01234567890123",
  "account_holder_name": "Bob Fairview"
}
```

