
# Filter 15

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

`Filter15`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `?array` | Optional | - | getAccountNumber(): ?array | setAccountNumber(?array accountNumber): void |
| `brandingDomainUrl` | `?array` | Optional | - | getBrandingDomainUrl(): ?array | setBrandingDomainUrl(?array brandingDomainUrl): void |
| `cellPhone` | `?array` | Optional | - | getCellPhone(): ?array | setCellPhone(?array cellPhone): void |
| `companyName` | `?array` | Optional | - | getCompanyName(): ?array | setCompanyName(?array companyName): void |
| `contactId` | `?array` | Optional | - | getContactId(): ?array | setContactId(?array contactId): void |
| `dateOfBirth` | `?array` | Optional | - | getDateOfBirth(): ?array | setDateOfBirth(?array dateOfBirth): void |
| `domainId` | `?array` | Optional | - | getDomainId(): ?array | setDomainId(?array domainId): void |
| `email` | `?array` | Optional | - | getEmail(): ?array | setEmail(?array email): void |
| `emailTrxReceipt` | `?array` | Optional | - | getEmailTrxReceipt(): ?array | setEmailTrxReceipt(?array emailTrxReceipt): void |
| `homePhone` | `?array` | Optional | - | getHomePhone(): ?array | setHomePhone(?array homePhone): void |
| `firstName` | `?array` | Optional | - | getFirstName(): ?array | setFirstName(?array firstName): void |
| `lastName` | `?array` | Optional | - | getLastName(): ?array | setLastName(?array lastName): void |
| `locale` | `?array` | Optional | - | getLocale(): ?array | setLocale(?array locale): void |
| `officePhone` | `?array` | Optional | - | getOfficePhone(): ?array | setOfficePhone(?array officePhone): void |
| `officeExtPhone` | `?array` | Optional | - | getOfficeExtPhone(): ?array | setOfficeExtPhone(?array officeExtPhone): void |
| `primaryLocationId` | `?array` | Optional | - | getPrimaryLocationId(): ?array | setPrimaryLocationId(?array primaryLocationId): void |
| `requiresNewPassword` | `?array` | Optional | - | getRequiresNewPassword(): ?array | setRequiresNewPassword(?array requiresNewPassword): void |
| `termsConditionCode` | `?array` | Optional | - | getTermsConditionCode(): ?array | setTermsConditionCode(?array termsConditionCode): void |
| `tz` | `?array` | Optional | - | getTz(): ?array | setTz(?array tz): void |
| `uiPrefs` | `?array` | Optional | - | getUiPrefs(): ?array | setUiPrefs(?array uiPrefs): void |
| `username` | `?array` | Optional | - | getUsername(): ?array | setUsername(?array username): void |
| `userApiKey` | `?array` | Optional | - | getUserApiKey(): ?array | setUserApiKey(?array userApiKey): void |
| `userHashKey` | `?array` | Optional | - | getUserHashKey(): ?array | setUserHashKey(?array userHashKey): void |
| `userTypeCode` | `?array` | Optional | - | getUserTypeCode(): ?array | setUserTypeCode(?array userTypeCode): void |
| `password` | `?array` | Optional | - | getPassword(): ?array | setPassword(?array password): void |
| `zip` | `?array` | Optional | - | getZip(): ?array | setZip(?array zip): void |
| `locationId` | `?array` | Optional | - | getLocationId(): ?array | setLocationId(?array locationId): void |
| `contactApiId` | `?array` | Optional | - | getContactApiId(): ?array | setContactApiId(?array contactApiId): void |
| `primaryLocationApiId` | `?array` | Optional | - | getPrimaryLocationApiId(): ?array | setPrimaryLocationApiId(?array primaryLocationApiId): void |
| `statusId` | `?array` | Optional | - | getStatusId(): ?array | setStatusId(?array statusId): void |
| `apiOnly` | `?array` | Optional | - | getApiOnly(): ?array | setApiOnly(?array apiOnly): void |
| `isInvitation` | `?array` | Optional | - | getIsInvitation(): ?array | setIsInvitation(?array isInvitation): void |
| `address` | `?array` | Optional | - | getAddress(): ?array | setAddress(?array address): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `status` | `?array` | Optional | - | getStatus(): ?array | setStatus(?array status): void |
| `loginAttempts` | `?array` | Optional | - | getLoginAttempts(): ?array | setLoginAttempts(?array loginAttempts): void |
| `lastLoginTs` | ?(AnyOf([LastLoginTs](../../doc/models/last-login-ts-enum.md), [LastLoginTs1](../../doc/models/last-login-ts-1.md))) | Optional | This is a nested AnyOf case. | getLastLoginTs(): | setLastLoginTs( lastLoginTs): void |
| `createdTs` | ?(AnyOf([CreatedTs](../../doc/models/created-ts-enum.md), [CreatedTs1](../../doc/models/created-ts-1.md))) | Optional | This is a nested AnyOf case. | getCreatedTs(): | setCreatedTs( createdTs): void |
| `modifiedTs` | ?(AnyOf([ModifiedTs](../../doc/models/modified-ts-enum.md), [ModifiedTs1](../../doc/models/modified-ts-1.md))) | Optional | This is a nested AnyOf case. | getModifiedTs(): | setModifiedTs( modifiedTs): void |
| `createdUserId` | `?array` | Optional | - | getCreatedUserId(): ?array | setCreatedUserId(?array createdUserId): void |
| `termsAcceptedTs` | ?(AnyOf([TermsAcceptedTs](../../doc/models/terms-accepted-ts-enum.md), [TermsAcceptedTs1](../../doc/models/terms-accepted-ts-1.md))) | Optional | This is a nested AnyOf case. | getTermsAcceptedTs(): | setTermsAcceptedTs( termsAcceptedTs): void |
| `termsAgreeIp` | `?array` | Optional | - | getTermsAgreeIp(): ?array | setTermsAgreeIp(?array termsAgreeIp): void |
| `currentDateTime` | `?array` | Optional | - | getCurrentDateTime(): ?array | setCurrentDateTime(?array currentDateTime): void |
| `locations` | `?array` | Optional | - | getLocations(): ?array | setLocations(?array locations): void |
| `primaryLocation` | `?array` | Optional | - | getPrimaryLocation(): ?array | setPrimaryLocation(?array primaryLocation): void |
| `receivedEmails` | `?array` | Optional | - | getReceivedEmails(): ?array | setReceivedEmails(?array receivedEmails): void |
| `contact` | `?array` | Optional | - | getContact(): ?array | setContact(?array contact): void |
| `isDeletable` | `?array` | Optional | - | getIsDeletable(): ?array | setIsDeletable(?array isDeletable): void |
| `activeNotificationAlerts` | `?array` | Optional | - | getActiveNotificationAlerts(): ?array | setActiveNotificationAlerts(?array activeNotificationAlerts): void |
| `locationUsers` | `?array` | Optional | - | getLocationUsers(): ?array | setLocationUsers(?array locationUsers): void |
| `authRoles` | `?array` | Optional | - | getAuthRoles(): ?array | setAuthRoles(?array authRoles): void |
| `changelogs` | `?array` | Optional | - | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `resources` | `?array` | Optional | - | getResources(): ?array | setResources(?array resources): void |
| `domain` | `?array` | Optional | - | getDomain(): ?array | setDomain(?array domain): void |
| `createdUser` | `?array` | Optional | - | getCreatedUser(): ?array | setCreatedUser(?array createdUser): void |
| `locationMarketplaces` | `?array` | Optional | - | getLocationMarketplaces(): ?array | setLocationMarketplaces(?array locationMarketplaces): void |
| `emailBlacklist` | `?array` | Optional | - | getEmailBlacklist(): ?array | setEmailBlacklist(?array emailBlacklist): void |
| `helppage` | `?array` | Optional | - | getHelppage(): ?array | setHelppage(?array helppage): void |

## Example (as JSON)

```json
{
  "account_number": {
    "key1": "val1",
    "key2": "val2"
  },
  "branding_domain_url": {
    "key1": "val1",
    "key2": "val2"
  },
  "cell_phone": {
    "key1": "val1",
    "key2": "val2"
  },
  "company_name": {
    "key1": "val1",
    "key2": "val2"
  },
  "contact_id": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

