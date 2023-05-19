
# Sort 18

You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:

> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
> 
> /endpoint?sort[field_name]=asc&sort[field_name2]=desc

## Structure

`Sort18`

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
| `createdTs` | `?array` | Optional | - | getCreatedTs(): ?array | setCreatedTs(?array createdTs): void |
| `modifiedTs` | `?array` | Optional | - | getModifiedTs(): ?array | setModifiedTs(?array modifiedTs): void |
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

