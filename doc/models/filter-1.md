
# Filter 1

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

`Filter1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?array` | Optional | - | getLocationId(): ?array | setLocationId(?array locationId): void |
| `accountNumber` | `?array` | Optional | - | getAccountNumber(): ?array | setAccountNumber(?array accountNumber): void |
| `contactApiId` | `?array` | Optional | - | getContactApiId(): ?array | setContactApiId(?array contactApiId): void |
| `firstName` | `?array` | Optional | - | getFirstName(): ?array | setFirstName(?array firstName): void |
| `lastName` | `?array` | Optional | - | getLastName(): ?array | setLastName(?array lastName): void |
| `cellPhone` | `?array` | Optional | - | getCellPhone(): ?array | setCellPhone(?array cellPhone): void |
| `balance` | `?array` | Optional | - | getBalance(): ?array | setBalance(?array balance): void |
| `address` | `?array` | Optional | - | getAddress(): ?array | setAddress(?array address): void |
| `companyName` | `?array` | Optional | - | getCompanyName(): ?array | setCompanyName(?array companyName): void |
| `headerMessage` | `?array` | Optional | - | getHeaderMessage(): ?array | setHeaderMessage(?array headerMessage): void |
| `dateOfBirth` | `?array` | Optional | - | getDateOfBirth(): ?array | setDateOfBirth(?array dateOfBirth): void |
| `emailTrxReceipt` | `?array` | Optional | - | getEmailTrxReceipt(): ?array | setEmailTrxReceipt(?array emailTrxReceipt): void |
| `homePhone` | `?array` | Optional | - | getHomePhone(): ?array | setHomePhone(?array homePhone): void |
| `officePhone` | `?array` | Optional | - | getOfficePhone(): ?array | setOfficePhone(?array officePhone): void |
| `officePhoneExt` | `?array` | Optional | - | getOfficePhoneExt(): ?array | setOfficePhoneExt(?array officePhoneExt): void |
| `headerMessageType` | `?array` | Optional | - | getHeaderMessageType(): ?array | setHeaderMessageType(?array headerMessageType): void |
| `updateIfExists` | `?array` | Optional | - | getUpdateIfExists(): ?array | setUpdateIfExists(?array updateIfExists): void |
| `contactC1` | `?array` | Optional | - | getContactC1(): ?array | setContactC1(?array contactC1): void |
| `contactC2` | `?array` | Optional | - | getContactC2(): ?array | setContactC2(?array contactC2): void |
| `contactC3` | `?array` | Optional | - | getContactC3(): ?array | setContactC3(?array contactC3): void |
| `parentId` | `?array` | Optional | - | getParentId(): ?array | setParentId(?array parentId): void |
| `email` | `?array` | Optional | - | getEmail(): ?array | setEmail(?array email): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | ?(AnyOf([CreatedTs](../../doc/models/created-ts-enum.md), [CreatedTs1](../../doc/models/created-ts-1.md))) | Optional | This is a nested AnyOf case. | getCreatedTs(): | setCreatedTs( createdTs): void |
| `modifiedTs` | ?(AnyOf([ModifiedTs](../../doc/models/modified-ts-enum.md), [ModifiedTs1](../../doc/models/modified-ts-1.md))) | Optional | This is a nested AnyOf case. | getModifiedTs(): | setModifiedTs( modifiedTs): void |
| `active` | `?array` | Optional | - | getActive(): ?array | setActive(?array active): void |
| `receivedEmails` | `?array` | Optional | - | getReceivedEmails(): ?array | setReceivedEmails(?array receivedEmails): void |
| `isDeletable` | `?array` | Optional | - | getIsDeletable(): ?array | setIsDeletable(?array isDeletable): void |
| `location` | `?array` | Optional | - | getLocation(): ?array | setLocation(?array location): void |
| `user` | `?array` | Optional | - | getUser(): ?array | setUser(?array user): void |
| `recurrings` | `?array` | Optional | - | getRecurrings(): ?array | setRecurrings(?array recurrings): void |
| `emailBlacklist` | `?array` | Optional | - | getEmailBlacklist(): ?array | setEmailBlacklist(?array emailBlacklist): void |
| `smsBlacklist` | `?array` | Optional | - | getSmsBlacklist(): ?array | setSmsBlacklist(?array smsBlacklist): void |
| `changelogs` | `?array` | Optional | - | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `postbackLogs` | `?array` | Optional | - | getPostbackLogs(): ?array | setPostbackLogs(?array postbackLogs): void |
| `createdUser` | `?array` | Optional | - | getCreatedUser(): ?array | setCreatedUser(?array createdUser): void |
| `parent` | `?array` | Optional | - | getParent(): ?array | setParent(?array parent): void |
| `children` | `?array` | Optional | - | getChildren(): ?array | setChildren(?array children): void |

## Example (as JSON)

```json
{
  "location_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "account_number": {
    "key1": "val1",
    "key2": "val2"
  },
  "contact_api_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "first_name": {
    "key1": "val1",
    "key2": "val2"
  },
  "last_name": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

