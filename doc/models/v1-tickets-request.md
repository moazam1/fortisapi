
# V1 Tickets Request

## Structure

`V1TicketsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountHolderName` | `?string` | Optional | Account holder name<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `32` | getAccountHolderName(): ?string | setAccountHolderName(?string accountHolderName): void |
| `expDate` | `string` | Required | The Expiration Date for the credit card. | getExpDate(): string | setExpDate(string expDate): void |
| `cvv` | `?string` | Optional | CVV<br>**Constraints**: *Maximum Length*: `4` | getCvv(): ?string | setCvv(?string cvv): void |
| `accountNumber` | `string` | Required | Account number<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `19`, *Pattern*: `^[\d]+$` | getAccountNumber(): string | setAccountNumber(string accountNumber): void |
| `billingAddress` | [`?BillingAddress4`](../../doc/models/billing-address-4.md) | Optional | Billing Address Object | getBillingAddress(): ?BillingAddress4 | setBillingAddress(?BillingAddress4 billingAddress): void |
| `contactId` | `?string` | Optional | Used to associate the Ticket with a Contact.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getContactId(): ?string | setContactId(?string contactId): void |
| `contactApiId` | `?string` | Optional | Used to associate the Ticket with a Contact. | getContactApiId(): ?string | setContactApiId(?string contactApiId): void |
| `locationId` | ?(string) | Optional | This is a nested AnyOf case. | getLocationId(): ?string | setLocationId(?string locationId): void |
| `locationApiId` | `?string` | Optional | Location Api Id | getLocationApiId(): ?string | setLocationApiId(?string locationApiId): void |

## Example (as JSON)

```json
{
  "account_holder_name": "John Smith",
  "exp_date": "0722",
  "account_number": "545454545454545",
  "contact_id": "11e95f8ec39de8fbdb0a4f1a",
  "cvv": "cvv2",
  "billing_address": {
    "postal_code": "postal_code0",
    "street": "street8"
  },
  "contact_api_id": "contact_api_id4"
}
```

