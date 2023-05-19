
# Filter 3

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

`Filter3`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | ?(AnyOf([CreatedTs](../../doc/models/created-ts-enum.md), [CreatedTs1](../../doc/models/created-ts-1.md))) | Optional | This is a nested AnyOf case. | getCreatedTs(): | setCreatedTs( createdTs): void |
| `modifiedTs` | ?(AnyOf([ModifiedTs](../../doc/models/modified-ts-enum.md), [ModifiedTs1](../../doc/models/modified-ts-1.md))) | Optional | This is a nested AnyOf case. | getModifiedTs(): | setModifiedTs( modifiedTs): void |
| `accountNumber` | `?array` | Optional | - | getAccountNumber(): ?array | setAccountNumber(?array accountNumber): void |
| `address` | `?array` | Optional | - | getAddress(): ?array | setAddress(?array address): void |
| `brandingDomainId` | `?array` | Optional | - | getBrandingDomainId(): ?array | setBrandingDomainId(?array brandingDomainId): void |
| `contactEmailTrxReceiptDefault` | `?array` | Optional | - | getContactEmailTrxReceiptDefault(): ?array | setContactEmailTrxReceiptDefault(?array contactEmailTrxReceiptDefault): void |
| `defaultAch` | `?array` | Optional | - | getDefaultAch(): ?array | setDefaultAch(?array defaultAch): void |
| `defaultCc` | `?array` | Optional | - | getDefaultCc(): ?array | setDefaultCc(?array defaultCc): void |
| `emailReplyTo` | `?array` | Optional | - | getEmailReplyTo(): ?array | setEmailReplyTo(?array emailReplyTo): void |
| `fax` | `?array` | Optional | - | getFax(): ?array | setFax(?array fax): void |
| `locationApiId` | `?array` | Optional | - | getLocationApiId(): ?array | setLocationApiId(?array locationApiId): void |
| `locationApiKey` | `?array` | Optional | - | getLocationApiKey(): ?array | setLocationApiKey(?array locationApiKey): void |
| `locationC1` | `?array` | Optional | - | getLocationC1(): ?array | setLocationC1(?array locationC1): void |
| `locationC2` | `?array` | Optional | - | getLocationC2(): ?array | setLocationC2(?array locationC2): void |
| `locationC3` | `?array` | Optional | - | getLocationC3(): ?array | setLocationC3(?array locationC3): void |
| `name` | `?array` | Optional | - | getName(): ?array | setName(?array name): void |
| `officePhone` | `?array` | Optional | - | getOfficePhone(): ?array | setOfficePhone(?array officePhone): void |
| `officeExtPhone` | `?array` | Optional | - | getOfficeExtPhone(): ?array | setOfficeExtPhone(?array officeExtPhone): void |
| `tz` | `?array` | Optional | - | getTz(): ?array | setTz(?array tz): void |
| `parentId` | `?array` | Optional | - | getParentId(): ?array | setParentId(?array parentId): void |
| `showContactNotes` | `?array` | Optional | - | getShowContactNotes(): ?array | setShowContactNotes(?array showContactNotes): void |
| `showContactFiles` | `?array` | Optional | - | getShowContactFiles(): ?array | setShowContactFiles(?array showContactFiles): void |
| `relationship` | `?array` | Optional | - | getRelationship(): ?array | setRelationship(?array relationship): void |

## Example (as JSON)

```json
{
  "id": {
    "key1": "val1",
    "key2": "val2"
  },
  "created_ts": "last 30 days",
  "modified_ts": "last 30 days",
  "account_number": {
    "key1": "val1",
    "key2": "val2"
  },
  "address": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

