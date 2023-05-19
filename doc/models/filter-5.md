
# Filter 5

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

`Filter5`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?array` | Optional | - | getLocationId(): ?array | setLocationId(?array locationId): void |
| `ccProductTransactionId` | `?array` | Optional | - | getCcProductTransactionId(): ?array | setCcProductTransactionId(?array ccProductTransactionId): void |
| `email` | `?array` | Optional | - | getEmail(): ?array | setEmail(?array email): void |
| `amountDue` | `?array` | Optional | - | getAmountDue(): ?array | setAmountDue(?array amountDue): void |
| `locationApiId` | `?array` | Optional | - | getLocationApiId(): ?array | setLocationApiId(?array locationApiId): void |
| `contactId` | `?array` | Optional | - | getContactId(): ?array | setContactId(?array contactId): void |
| `contactApiId` | `?array` | Optional | - | getContactApiId(): ?array | setContactApiId(?array contactApiId): void |
| `paylinkApiId` | `?array` | Optional | - | getPaylinkApiId(): ?array | setPaylinkApiId(?array paylinkApiId): void |
| `achProductTransactionId` | `?array` | Optional | - | getAchProductTransactionId(): ?array | setAchProductTransactionId(?array achProductTransactionId): void |
| `expireDate` | `?array` | Optional | - | getExpireDate(): ?array | setExpireDate(?array expireDate): void |
| `displayProductTransactionReceiptDetails` | `?array` | Optional | - | getDisplayProductTransactionReceiptDetails(): ?array | setDisplayProductTransactionReceiptDetails(?array displayProductTransactionReceiptDetails): void |
| `displayBillingFields` | `?array` | Optional | - | getDisplayBillingFields(): ?array | setDisplayBillingFields(?array displayBillingFields): void |
| `deliveryMethod` | `?array` | Optional | - | getDeliveryMethod(): ?array | setDeliveryMethod(?array deliveryMethod): void |
| `cellPhone` | `?array` | Optional | - | getCellPhone(): ?array | setCellPhone(?array cellPhone): void |
| `description` | `?array` | Optional | - | getDescription(): ?array | setDescription(?array description): void |
| `storeToken` | `?array` | Optional | - | getStoreToken(): ?array | setStoreToken(?array storeToken): void |
| `storeTokenTitle` | `?array` | Optional | - | getStoreTokenTitle(): ?array | setStoreTokenTitle(?array storeTokenTitle): void |
| `paylinkAction` | `?array` | Optional | - | getPaylinkAction(): ?array | setPaylinkAction(?array paylinkAction): void |
| `bankFundedOnlyOverride` | `?array` | Optional | - | getBankFundedOnlyOverride(): ?array | setBankFundedOnlyOverride(?array bankFundedOnlyOverride): void |
| `tags` | `?array` | Optional | - | getTags(): ?array | setTags(?array tags): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `statusId` | `?array` | Optional | - | getStatusId(): ?array | setStatusId(?array statusId): void |
| `statusCode` | `?array` | Optional | - | getStatusCode(): ?array | setStatusCode(?array statusCode): void |
| `active` | `?array` | Optional | - | getActive(): ?array | setActive(?array active): void |
| `createdTs` | ?(AnyOf([CreatedTs](../../doc/models/created-ts-enum.md), [CreatedTs1](../../doc/models/created-ts-1.md))) | Optional | This is a nested AnyOf case. | getCreatedTs(): | setCreatedTs( createdTs): void |
| `modifiedTs` | ?(AnyOf([ModifiedTs](../../doc/models/modified-ts-enum.md), [ModifiedTs1](../../doc/models/modified-ts-1.md))) | Optional | This is a nested AnyOf case. | getModifiedTs(): | setModifiedTs( modifiedTs): void |
| `createdUserId` | `?array` | Optional | - | getCreatedUserId(): ?array | setCreatedUserId(?array createdUserId): void |
| `modifiedUserId` | `?array` | Optional | - | getModifiedUserId(): ?array | setModifiedUserId(?array modifiedUserId): void |

## Example (as JSON)

```json
{
  "location_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "cc_product_transaction_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "email": {
    "key1": "val1",
    "key2": "val2"
  },
  "amount_due": {
    "key1": "val1",
    "key2": "val2"
  },
  "location_api_id": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

