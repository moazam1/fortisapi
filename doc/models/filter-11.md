
# Filter 11

You can use any `field_name` from this endpoint results as a filter, and you can also use more than one field to create AND conditions. For date fields (ended with `_ts`), you can also search for ranges using the `$gte` (Greater than or equal to) and/or  `$lte` (Lower than or equal to). You can use one of the following methods:

> /endpoint?filter={ "field_name": "Value" }
> 
> /endpoint?filter[field_name]=Value
> 
> /endpoint?filter={ "created_ts": "today" }
> 
> /endpoint?filter[created_ts]=today
> 
> /endpoint?filter={ "created_ts": { "$gte": "yesterday", "$lte": "today" } }
> 
> /endpoint?filter[created_ts][$gte]=yesterday&filter[created_ts][$lte]=today
> 
> /endpoint?filter[address][city]=memphis
> 
> /endpoint?filter={ "address": { "city" : "memphis" } }

## Structure

`Filter11`

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
| `createdTs` | ?(AnyOf([CreatedTs](../../doc/models/created-ts-enum.md), [CreatedTs1](../../doc/models/created-ts-1.md))) | Optional | This is a nested AnyOf case. | getCreatedTs(): | setCreatedTs( createdTs): void |
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

