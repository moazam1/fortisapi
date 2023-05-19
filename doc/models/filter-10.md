
# Filter 10

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

`Filter10`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?array` | Optional | - | getLocationId(): ?array | setLocationId(?array locationId): void |
| `defaultProductTransactionId` | `?array` | Optional | - | getDefaultProductTransactionId(): ?array | setDefaultProductTransactionId(?array defaultProductTransactionId): void |
| `terminalApplicationId` | `?array` | Optional | - | getTerminalApplicationId(): ?array | setTerminalApplicationId(?array terminalApplicationId): void |
| `terminalCvmId` | `?array` | Optional | - | getTerminalCvmId(): ?array | setTerminalCvmId(?array terminalCvmId): void |
| `terminalManufacturerCode` | `?array` | Optional | - | getTerminalManufacturerCode(): ?array | setTerminalManufacturerCode(?array terminalManufacturerCode): void |
| `title` | `?array` | Optional | - | getTitle(): ?array | setTitle(?array title): void |
| `macAddress` | `?array` | Optional | - | getMacAddress(): ?array | setMacAddress(?array macAddress): void |
| `localIpAddress` | `?array` | Optional | - | getLocalIpAddress(): ?array | setLocalIpAddress(?array localIpAddress): void |
| `port` | `?array` | Optional | - | getPort(): ?array | setPort(?array port): void |
| `serialNumber` | `?array` | Optional | - | getSerialNumber(): ?array | setSerialNumber(?array serialNumber): void |
| `terminalNumber` | `?array` | Optional | - | getTerminalNumber(): ?array | setTerminalNumber(?array terminalNumber): void |
| `terminalTimeouts` | `?array` | Optional | - | getTerminalTimeouts(): ?array | setTerminalTimeouts(?array terminalTimeouts): void |
| `tipPercents` | `?array` | Optional | - | getTipPercents(): ?array | setTipPercents(?array tipPercents): void |
| `locationApiId` | `?array` | Optional | - | getLocationApiId(): ?array | setLocationApiId(?array locationApiId): void |
| `terminalApiId` | `?array` | Optional | - | getTerminalApiId(): ?array | setTerminalApiId(?array terminalApiId): void |
| `headerLine1` | `?array` | Optional | - | getHeaderLine1(): ?array | setHeaderLine1(?array headerLine1): void |
| `headerLine2` | `?array` | Optional | - | getHeaderLine2(): ?array | setHeaderLine2(?array headerLine2): void |
| `headerLine3` | `?array` | Optional | - | getHeaderLine3(): ?array | setHeaderLine3(?array headerLine3): void |
| `headerLine4` | `?array` | Optional | - | getHeaderLine4(): ?array | setHeaderLine4(?array headerLine4): void |
| `headerLine5` | `?array` | Optional | - | getHeaderLine5(): ?array | setHeaderLine5(?array headerLine5): void |
| `trailerLine1` | `?array` | Optional | - | getTrailerLine1(): ?array | setTrailerLine1(?array trailerLine1): void |
| `trailerLine2` | `?array` | Optional | - | getTrailerLine2(): ?array | setTrailerLine2(?array trailerLine2): void |
| `trailerLine3` | `?array` | Optional | - | getTrailerLine3(): ?array | setTrailerLine3(?array trailerLine3): void |
| `trailerLine4` | `?array` | Optional | - | getTrailerLine4(): ?array | setTrailerLine4(?array trailerLine4): void |
| `trailerLine5` | `?array` | Optional | - | getTrailerLine5(): ?array | setTrailerLine5(?array trailerLine5): void |
| `defaultCheckin` | `?array` | Optional | - | getDefaultCheckin(): ?array | setDefaultCheckin(?array defaultCheckin): void |
| `defaultCheckout` | `?array` | Optional | - | getDefaultCheckout(): ?array | setDefaultCheckout(?array defaultCheckout): void |
| `defaultRoomRate` | `?array` | Optional | - | getDefaultRoomRate(): ?array | setDefaultRoomRate(?array defaultRoomRate): void |
| `defaultRoomNumber` | `?array` | Optional | - | getDefaultRoomNumber(): ?array | setDefaultRoomNumber(?array defaultRoomNumber): void |
| `debit` | `?array` | Optional | - | getDebit(): ?array | setDebit(?array debit): void |
| `emv` | `?array` | Optional | - | getEmv(): ?array | setEmv(?array emv): void |
| `cashbackEnable` | `?array` | Optional | - | getCashbackEnable(): ?array | setCashbackEnable(?array cashbackEnable): void |
| `printEnable` | `?array` | Optional | - | getPrintEnable(): ?array | setPrintEnable(?array printEnable): void |
| `sigCaptureEnable` | `?array` | Optional | - | getSigCaptureEnable(): ?array | setSigCaptureEnable(?array sigCaptureEnable): void |
| `isProvisioned` | `?array` | Optional | - | getIsProvisioned(): ?array | setIsProvisioned(?array isProvisioned): void |
| `tipEnable` | `?array` | Optional | - | getTipEnable(): ?array | setTipEnable(?array tipEnable): void |
| `validatedDecryption` | `?array` | Optional | - | getValidatedDecryption(): ?array | setValidatedDecryption(?array validatedDecryption): void |
| `communicationType` | `?array` | Optional | - | getCommunicationType(): ?array | setCommunicationType(?array communicationType): void |
| `active` | `?array` | Optional | - | getActive(): ?array | setActive(?array active): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | ?(AnyOf([CreatedTs](../../doc/models/created-ts-enum.md), [CreatedTs1](../../doc/models/created-ts-1.md))) | Optional | This is a nested AnyOf case. | getCreatedTs(): | setCreatedTs( createdTs): void |
| `modifiedTs` | ?(AnyOf([ModifiedTs](../../doc/models/modified-ts-enum.md), [ModifiedTs1](../../doc/models/modified-ts-1.md))) | Optional | This is a nested AnyOf case. | getModifiedTs(): | setModifiedTs( modifiedTs): void |
| `lastRegistrationTs` | ?(AnyOf([LastRegistrationTs](../../doc/models/last-registration-ts-enum.md), [LastRegistrationTs1](../../doc/models/last-registration-ts-1.md))) | Optional | This is a nested AnyOf case. | getLastRegistrationTs(): | setLastRegistrationTs( lastRegistrationTs): void |
| `createdUserId` | `?array` | Optional | - | getCreatedUserId(): ?array | setCreatedUserId(?array createdUserId): void |
| `modifiedUserId` | `?array` | Optional | - | getModifiedUserId(): ?array | setModifiedUserId(?array modifiedUserId): void |
| `location` | `?array` | Optional | - | getLocation(): ?array | setLocation(?array location): void |
| `createdUser` | `?array` | Optional | - | getCreatedUser(): ?array | setCreatedUser(?array createdUser): void |
| `terminalApplication` | `?array` | Optional | - | getTerminalApplication(): ?array | setTerminalApplication(?array terminalApplication): void |
| `changelogs` | `?array` | Optional | - | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `terminalRouters` | `?array` | Optional | - | getTerminalRouters(): ?array | setTerminalRouters(?array terminalRouters): void |
| `hasTerminalRouters` | `?array` | Optional | - | getHasTerminalRouters(): ?array | setHasTerminalRouters(?array hasTerminalRouters): void |
| `terminalCvm` | `?array` | Optional | - | getTerminalCvm(): ?array | setTerminalCvm(?array terminalCvm): void |
| `terminalManufacturer` | `?array` | Optional | - | getTerminalManufacturer(): ?array | setTerminalManufacturer(?array terminalManufacturer): void |

## Example (as JSON)

```json
{
  "location_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "default_product_transaction_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "terminal_application_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "terminal_cvm_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "terminal_manufacturer_code": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

