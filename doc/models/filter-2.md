
# Filter 2

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

`Filter2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?array` | Optional | - | getLocationId(): ?array | setLocationId(?array locationId): void |
| `terminalId` | `?array` | Optional | - | getTerminalId(): ?array | setTerminalId(?array terminalId): void |
| `requireSignature` | `?array` | Optional | - | getRequireSignature(): ?array | setRequireSignature(?array requireSignature): void |
| `deviceTermApiId` | `?array` | Optional | - | getDeviceTermApiId(): ?array | setDeviceTermApiId(?array deviceTermApiId): void |
| `termsConditions` | `?array` | Optional | - | getTermsConditions(): ?array | setTermsConditions(?array termsConditions): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `reasonCodeId` | `?array` | Optional | - | getReasonCodeId(): ?array | setReasonCodeId(?array reasonCodeId): void |
| `signature` | `?array` | Optional | - | getSignature(): ?array | setSignature(?array signature): void |
| `createdTs` | ?(AnyOf([CreatedTs](../../doc/models/created-ts-enum.md), [CreatedTs1](../../doc/models/created-ts-1.md))) | Optional | This is a nested AnyOf case. | getCreatedTs(): | setCreatedTs( createdTs): void |
| `modifiedTs` | ?(AnyOf([ModifiedTs](../../doc/models/modified-ts-enum.md), [ModifiedTs1](../../doc/models/modified-ts-1.md))) | Optional | This is a nested AnyOf case. | getModifiedTs(): | setModifiedTs( modifiedTs): void |
| `createdUserId` | `?array` | Optional | - | getCreatedUserId(): ?array | setCreatedUserId(?array createdUserId): void |
| `createdUser` | `?array` | Optional | - | getCreatedUser(): ?array | setCreatedUser(?array createdUser): void |
| `location` | `?array` | Optional | - | getLocation(): ?array | setLocation(?array location): void |
| `terminal` | `?array` | Optional | - | getTerminal(): ?array | setTerminal(?array terminal): void |
| `changelogs` | `?array` | Optional | - | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `reasonCode` | `?array` | Optional | - | getReasonCode(): ?array | setReasonCode(?array reasonCode): void |

## Example (as JSON)

```json
{
  "location_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "terminal_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "require_signature": {
    "key1": "val1",
    "key2": "val2"
  },
  "device_term_api_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "terms_conditions": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

