
# Filter 12

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

`Filter12`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountHolderName` | `?array` | Optional | - | getAccountHolderName(): ?array | setAccountHolderName(?array accountHolderName): void |
| `accountNumber` | `?array` | Optional | - | getAccountNumber(): ?array | setAccountNumber(?array accountNumber): void |
| `accountVaultApiId` | `?array` | Optional | - | getAccountVaultApiId(): ?array | setAccountVaultApiId(?array accountVaultApiId): void |
| `tokenApiId` | `?array` | Optional | - | getTokenApiId(): ?array | setTokenApiId(?array tokenApiId): void |
| `accountvaultC1` | `?array` | Optional | - | getAccountvaultC1(): ?array | setAccountvaultC1(?array accountvaultC1): void |
| `accountvaultC2` | `?array` | Optional | - | getAccountvaultC2(): ?array | setAccountvaultC2(?array accountvaultC2): void |
| `accountvaultC3` | `?array` | Optional | - | getAccountvaultC3(): ?array | setAccountvaultC3(?array accountvaultC3): void |
| `tokenC1` | `?array` | Optional | - | getTokenC1(): ?array | setTokenC1(?array tokenC1): void |
| `tokenC2` | `?array` | Optional | - | getTokenC2(): ?array | setTokenC2(?array tokenC2): void |
| `tokenC3` | `?array` | Optional | - | getTokenC3(): ?array | setTokenC3(?array tokenC3): void |
| `achSecCode` | `?array` | Optional | - | getAchSecCode(): ?array | setAchSecCode(?array achSecCode): void |
| `billingAddress` | `?array` | Optional | - | getBillingAddress(): ?array | setBillingAddress(?array billingAddress): void |
| `contactId` | `?array` | Optional | - | getContactId(): ?array | setContactId(?array contactId): void |
| `customerId` | `?array` | Optional | - | getCustomerId(): ?array | setCustomerId(?array customerId): void |
| `identityVerification` | `?array` | Optional | - | getIdentityVerification(): ?array | setIdentityVerification(?array identityVerification): void |
| `locationId` | `?array` | Optional | - | getLocationId(): ?array | setLocationId(?array locationId): void |
| `previousAccountVaultApiId` | `?array` | Optional | - | getPreviousAccountVaultApiId(): ?array | setPreviousAccountVaultApiId(?array previousAccountVaultApiId): void |
| `previousTokenApiId` | `?array` | Optional | - | getPreviousTokenApiId(): ?array | setPreviousTokenApiId(?array previousTokenApiId): void |
| `previousAccountVaultId` | `?array` | Optional | - | getPreviousAccountVaultId(): ?array | setPreviousAccountVaultId(?array previousAccountVaultId): void |
| `previousTokenId` | `?array` | Optional | - | getPreviousTokenId(): ?array | setPreviousTokenId(?array previousTokenId): void |
| `previousTransactionId` | `?array` | Optional | - | getPreviousTransactionId(): ?array | setPreviousTransactionId(?array previousTransactionId): void |
| `termsAgree` | `?array` | Optional | - | getTermsAgree(): ?array | setTermsAgree(?array termsAgree): void |
| `termsAgreeIp` | `?array` | Optional | - | getTermsAgreeIp(): ?array | setTermsAgreeIp(?array termsAgreeIp): void |
| `title` | `?array` | Optional | - | getTitle(): ?array | setTitle(?array title): void |
| `joi` | `?array` | Optional | - | getJoi(): ?array | setJoi(?array joi): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `accountType` | `?array` | Optional | - | getAccountType(): ?array | setAccountType(?array accountType): void |
| `active` | `?array` | Optional | - | getActive(): ?array | setActive(?array active): void |
| `cauSummaryStatusId` | `?array` | Optional | - | getCauSummaryStatusId(): ?array | setCauSummaryStatusId(?array cauSummaryStatusId): void |
| `createdTs` | ?(AnyOf([CreatedTs](../../doc/models/created-ts-enum.md), [CreatedTs1](../../doc/models/created-ts-1.md))) | Optional | This is a nested AnyOf case. | getCreatedTs(): | setCreatedTs( createdTs): void |
| `eSerialNumber` | `?array` | Optional | - | getESerialNumber(): ?array | setESerialNumber(?array eSerialNumber): void |
| `eTrackData` | `?array` | Optional | - | getETrackData(): ?array | setETrackData(?array eTrackData): void |
| `eFormat` | `?array` | Optional | - | getEFormat(): ?array | setEFormat(?array eFormat): void |
| `eKeyedData` | `?array` | Optional | - | getEKeyedData(): ?array | setEKeyedData(?array eKeyedData): void |
| `expiringInMonths` | `?array` | Optional | - | getExpiringInMonths(): ?array | setExpiringInMonths(?array expiringInMonths): void |
| `expDate` | `?array` | Optional | - | getExpDate(): ?array | setExpDate(?array expDate): void |
| `firstSix` | `?array` | Optional | - | getFirstSix(): ?array | setFirstSix(?array firstSix): void |
| `hasRecurring` | `?array` | Optional | - | getHasRecurring(): ?array | setHasRecurring(?array hasRecurring): void |
| `lastFour` | `?array` | Optional | - | getLastFour(): ?array | setLastFour(?array lastFour): void |
| `modifiedTs` | ?(AnyOf([ModifiedTs](../../doc/models/modified-ts-enum.md), [ModifiedTs1](../../doc/models/modified-ts-1.md))) | Optional | This is a nested AnyOf case. | getModifiedTs(): | setModifiedTs( modifiedTs): void |
| `paymentMethod` | `?array` | Optional | - | getPaymentMethod(): ?array | setPaymentMethod(?array paymentMethod): void |
| `ticket` | `?array` | Optional | - | getTicket(): ?array | setTicket(?array ticket): void |
| `trackData` | `?array` | Optional | - | getTrackData(): ?array | setTrackData(?array trackData): void |
| `location` | `?array` | Optional | - | getLocation(): ?array | setLocation(?array location): void |
| `contact` | `?array` | Optional | - | getContact(): ?array | setContact(?array contact): void |
| `transactions` | `?array` | Optional | - | getTransactions(): ?array | setTransactions(?array transactions): void |
| `activeRecurrings` | `?array` | Optional | - | getActiveRecurrings(): ?array | setActiveRecurrings(?array activeRecurrings): void |
| `isDeletable` | `?array` | Optional | - | getIsDeletable(): ?array | setIsDeletable(?array isDeletable): void |
| `signature` | `?array` | Optional | - | getSignature(): ?array | setSignature(?array signature): void |
| `createdUser` | `?array` | Optional | - | getCreatedUser(): ?array | setCreatedUser(?array createdUser): void |
| `changelogs` | `?array` | Optional | - | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `accountVaultCauLogs` | `?array` | Optional | - | getAccountVaultCauLogs(): ?array | setAccountVaultCauLogs(?array accountVaultCauLogs): void |
| `accountVaultCauProductTransactions` | `?array` | Optional | - | getAccountVaultCauProductTransactions(): ?array | setAccountVaultCauProductTransactions(?array accountVaultCauProductTransactions): void |

## Example (as JSON)

```json
{
  "account_holder_name": {
    "key1": "val1",
    "key2": "val2"
  },
  "account_number": {
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
  "accountvault_c1": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

