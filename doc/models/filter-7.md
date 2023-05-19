
# Filter 7

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

`Filter7`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountVaultId` | `?array` | Optional | - | getAccountVaultId(): ?array | setAccountVaultId(?array accountVaultId): void |
| `tokenId` | `?array` | Optional | - | getTokenId(): ?array | setTokenId(?array tokenId): void |
| `accountVaultApiId` | `?array` | Optional | - | getAccountVaultApiId(): ?array | setAccountVaultApiId(?array accountVaultApiId): void |
| `tokenApiId` | `?array` | Optional | - | getTokenApiId(): ?array | setTokenApiId(?array tokenApiId): void |
| `joi` | `?array` | Optional | - | getJoi(): ?array | setJoi(?array joi): void |
| `active` | `?array` | Optional | - | getActive(): ?array | setActive(?array active): void |
| `description` | `?array` | Optional | - | getDescription(): ?array | setDescription(?array description): void |
| `endDate` | `?array` | Optional | - | getEndDate(): ?array | setEndDate(?array endDate): void |
| `installmentTotalCount` | `?array` | Optional | - | getInstallmentTotalCount(): ?array | setInstallmentTotalCount(?array installmentTotalCount): void |
| `interval` | `?array` | Optional | - | getInterval(): ?array | setInterval(?array interval): void |
| `intervalType` | `?array` | Optional | - | getIntervalType(): ?array | setIntervalType(?array intervalType): void |
| `locationId` | `?array` | Optional | - | getLocationId(): ?array | setLocationId(?array locationId): void |
| `notificationDays` | `?array` | Optional | - | getNotificationDays(): ?array | setNotificationDays(?array notificationDays): void |
| `paymentMethod` | `?array` | Optional | - | getPaymentMethod(): ?array | setPaymentMethod(?array paymentMethod): void |
| `productTransactionId` | `?array` | Optional | - | getProductTransactionId(): ?array | setProductTransactionId(?array productTransactionId): void |
| `recurringId` | `?array` | Optional | - | getRecurringId(): ?array | setRecurringId(?array recurringId): void |
| `recurringApiId` | `?array` | Optional | - | getRecurringApiId(): ?array | setRecurringApiId(?array recurringApiId): void |
| `startDate` | `?array` | Optional | - | getStartDate(): ?array | setStartDate(?array startDate): void |
| `status` | `?array` | Optional | - | getStatus(): ?array | setStatus(?array status): void |
| `transactionAmount` | `?array` | Optional | - | getTransactionAmount(): ?array | setTransactionAmount(?array transactionAmount): void |
| `termsAgree` | `?array` | Optional | - | getTermsAgree(): ?array | setTermsAgree(?array termsAgree): void |
| `termsAgreeIp` | `?array` | Optional | - | getTermsAgreeIp(): ?array | setTermsAgreeIp(?array termsAgreeIp): void |
| `recurringC1` | `?array` | Optional | - | getRecurringC1(): ?array | setRecurringC1(?array recurringC1): void |
| `recurringC2` | `?array` | Optional | - | getRecurringC2(): ?array | setRecurringC2(?array recurringC2): void |
| `recurringC3` | `?array` | Optional | - | getRecurringC3(): ?array | setRecurringC3(?array recurringC3): void |
| `sendToProcAsRecur` | `?array` | Optional | - | getSendToProcAsRecur(): ?array | setSendToProcAsRecur(?array sendToProcAsRecur): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `nextRunDate` | `?array` | Optional | - | getNextRunDate(): ?array | setNextRunDate(?array nextRunDate): void |
| `createdTs` | ?(AnyOf([CreatedTs](../../doc/models/created-ts-enum.md), [CreatedTs1](../../doc/models/created-ts-1.md))) | Optional | This is a nested AnyOf case. | getCreatedTs(): | setCreatedTs( createdTs): void |
| `modifiedTs` | ?(AnyOf([ModifiedTs](../../doc/models/modified-ts-enum.md), [ModifiedTs1](../../doc/models/modified-ts-1.md))) | Optional | This is a nested AnyOf case. | getModifiedTs(): | setModifiedTs( modifiedTs): void |
| `recurringTypeId` | `?array` | Optional | - | getRecurringTypeId(): ?array | setRecurringTypeId(?array recurringTypeId): void |
| `installmentAmountTotal` | `?array` | Optional | - | getInstallmentAmountTotal(): ?array | setInstallmentAmountTotal(?array installmentAmountTotal): void |
| `logEmails` | `?array` | Optional | - | getLogEmails(): ?array | setLogEmails(?array logEmails): void |
| `contact` | `?array` | Optional | - | getContact(): ?array | setContact(?array contact): void |
| `accountVault` | `?array` | Optional | - | getAccountVault(): ?array | setAccountVault(?array accountVault): void |
| `createdUser` | `?array` | Optional | - | getCreatedUser(): ?array | setCreatedUser(?array createdUser): void |
| `signature` | `?array` | Optional | - | getSignature(): ?array | setSignature(?array signature): void |
| `paymentSchedule` | `?array` | Optional | - | getPaymentSchedule(): ?array | setPaymentSchedule(?array paymentSchedule): void |
| `location` | `?array` | Optional | - | getLocation(): ?array | setLocation(?array location): void |
| `productTransaction` | `?array` | Optional | - | getProductTransaction(): ?array | setProductTransaction(?array productTransaction): void |
| `nextRunDateMin` | `?array` | Optional | - | getNextRunDateMin(): ?array | setNextRunDateMin(?array nextRunDateMin): void |
| `nextRunDateMax` | `?array` | Optional | - | getNextRunDateMax(): ?array | setNextRunDateMax(?array nextRunDateMax): void |
| `tags` | `?array` | Optional | - | getTags(): ?array | setTags(?array tags): void |
| `allTags` | `?array` | Optional | - | getAllTags(): ?array | setAllTags(?array allTags): void |
| `changelogs` | `?array` | Optional | - | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `forecast` | `?array` | Optional | - | getForecast(): ?array | setForecast(?array forecast): void |
| `recurringSplits` | `?array` | Optional | - | getRecurringSplits(): ?array | setRecurringSplits(?array recurringSplits): void |

## Example (as JSON)

```json
{
  "account_vault_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "token_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "account_vault_api_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "token_api_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "_joi": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

