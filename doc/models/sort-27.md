
# Sort 27

You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:

> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
> 
> /endpoint?sort[field_name]=asc&sort[field_name2]=desc

## Structure

`Sort27`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountHolderName` | `?array` | Optional | - | getAccountHolderName(): ?array | setAccountHolderName(?array accountHolderName): void |
| `expDate` | `?array` | Optional | - | getExpDate(): ?array | setExpDate(?array expDate): void |
| `cvv` | `?array` | Optional | - | getCvv(): ?array | setCvv(?array cvv): void |
| `accountNumber` | `?array` | Optional | - | getAccountNumber(): ?array | setAccountNumber(?array accountNumber): void |
| `billingAddress` | `?array` | Optional | - | getBillingAddress(): ?array | setBillingAddress(?array billingAddress): void |
| `contactId` | `?array` | Optional | - | getContactId(): ?array | setContactId(?array contactId): void |
| `contactApiId` | `?array` | Optional | - | getContactApiId(): ?array | setContactApiId(?array contactApiId): void |
| `locationId` | `?array` | Optional | - | getLocationId(): ?array | setLocationId(?array locationId): void |
| `locationApiId` | `?array` | Optional | - | getLocationApiId(): ?array | setLocationApiId(?array locationApiId): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | `?array` | Optional | - | getCreatedTs(): ?array | setCreatedTs(?array createdTs): void |
| `createdUserId` | `?array` | Optional | - | getCreatedUserId(): ?array | setCreatedUserId(?array createdUserId): void |

## Example (as JSON)

```json
{
  "account_holder_name": {
    "key1": "val1",
    "key2": "val2"
  },
  "exp_date": {
    "key1": "val1",
    "key2": "val2"
  },
  "cvv": {
    "key1": "val1",
    "key2": "val2"
  },
  "account_number": {
    "key1": "val1",
    "key2": "val2"
  },
  "billing_address": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

