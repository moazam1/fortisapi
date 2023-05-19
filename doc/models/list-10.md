
# List 10

## Structure

`List10`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `string` | Required | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): string | setLocationId(string locationId): void |
| `defaultProductTransactionId` | `?string` | Optional | Product Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getDefaultProductTransactionId(): ?string | setDefaultProductTransactionId(?string defaultProductTransactionId): void |
| `terminalApplicationId` | `string` | Required | Terminal Application ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getTerminalApplicationId(): string | setTerminalApplicationId(string terminalApplicationId): void |
| `terminalCvmId` | `?string` | Optional | Terminal CVM ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getTerminalCvmId(): ?string | setTerminalCvmId(?string terminalCvmId): void |
| `terminalManufacturerCode` | [`string (TerminalManufacturerCodeEnum)`](../../doc/models/terminal-manufacturer-code-enum.md) | Required | Terminal Manufacturer Code | getTerminalManufacturerCode(): string | setTerminalManufacturerCode(string terminalManufacturerCode): void |
| `title` | `string` | Required | Terminal Name<br>**Constraints**: *Maximum Length*: `24` | getTitle(): string | setTitle(string title): void |
| `macAddress` | `?string` | Optional | Terminal MAC Address<br>**Constraints**: *Pattern*: `^([0-9a-fA-F]{2}[:-]?){5}([0-9a-fA-F]{2})$` | getMacAddress(): ?string | setMacAddress(?string macAddress): void |
| `localIpAddress` | `?string` | Optional | Terminal Local IP Address | getLocalIpAddress(): ?string | setLocalIpAddress(?string localIpAddress): void |
| `port` | `?int` | Optional | Terminal Port<br>**Default**: `10009`<br>**Constraints**: `>= 0`, `<= 65535` | getPort(): ?int | setPort(?int port): void |
| `serialNumber` | `string` | Required | Terminal Serial Number<br>**Constraints**: *Maximum Length*: `24`, *Pattern*: `^[a-zA-Z0-9]*$` | getSerialNumber(): string | setSerialNumber(string serialNumber): void |
| `terminalNumber` | `?string` | Optional | Terminal Number<br>**Constraints**: *Minimum Length*: `15`, *Maximum Length*: `15` | getTerminalNumber(): ?string | setTerminalNumber(?string terminalNumber): void |
| `terminalTimeouts` | [`?TerminalTimeouts`](../../doc/models/terminal-timeouts.md) | Optional | The following options outlines some configurable timeout values that can be used to customize the experience at the terminal for the cardholder. | getTerminalTimeouts(): ?TerminalTimeouts | setTerminalTimeouts(?TerminalTimeouts terminalTimeouts): void |
| `tipPercents` | [`?TipPercents`](../../doc/models/tip-percents.md) | Optional | A JSON of tip percents the JSON MUST contain only these three fields: percent_1, percent_2, percent_3 | getTipPercents(): ?TipPercents | setTipPercents(?TipPercents tipPercents): void |
| `locationApiId` | `?string` | Optional | Location Api ID<br>**Constraints**: *Maximum Length*: `64` | getLocationApiId(): ?string | setLocationApiId(?string locationApiId): void |
| `terminalApiId` | `?string` | Optional | Terminal Api ID<br>**Constraints**: *Maximum Length*: `64` | getTerminalApiId(): ?string | setTerminalApiId(?string terminalApiId): void |
| `headerLine1` | `?string` | Optional | Header Line 1<br>**Constraints**: *Maximum Length*: `32` | getHeaderLine1(): ?string | setHeaderLine1(?string headerLine1): void |
| `headerLine2` | `?string` | Optional | Header Line 2<br>**Constraints**: *Maximum Length*: `32` | getHeaderLine2(): ?string | setHeaderLine2(?string headerLine2): void |
| `headerLine3` | `?string` | Optional | Header Line 3<br>**Constraints**: *Maximum Length*: `32` | getHeaderLine3(): ?string | setHeaderLine3(?string headerLine3): void |
| `headerLine4` | `?string` | Optional | Header Line 4<br>**Constraints**: *Maximum Length*: `32` | getHeaderLine4(): ?string | setHeaderLine4(?string headerLine4): void |
| `headerLine5` | `?string` | Optional | Header Line 5<br>**Constraints**: *Maximum Length*: `32` | getHeaderLine5(): ?string | setHeaderLine5(?string headerLine5): void |
| `trailerLine1` | `?string` | Optional | Trailer Line 1<br>**Constraints**: *Maximum Length*: `32` | getTrailerLine1(): ?string | setTrailerLine1(?string trailerLine1): void |
| `trailerLine2` | `?string` | Optional | Trailer Line 2<br>**Constraints**: *Maximum Length*: `32` | getTrailerLine2(): ?string | setTrailerLine2(?string trailerLine2): void |
| `trailerLine3` | `?string` | Optional | Trailer Line 3<br>**Constraints**: *Maximum Length*: `32` | getTrailerLine3(): ?string | setTrailerLine3(?string trailerLine3): void |
| `trailerLine4` | `?string` | Optional | Trailer Line 4<br>**Constraints**: *Maximum Length*: `32` | getTrailerLine4(): ?string | setTrailerLine4(?string trailerLine4): void |
| `trailerLine5` | `?string` | Optional | Trailer Line 5<br>**Constraints**: *Maximum Length*: `32` | getTrailerLine5(): ?string | setTrailerLine5(?string trailerLine5): void |
| `defaultCheckin` | `?string` | Optional | Default Checkin<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getDefaultCheckin(): ?string | setDefaultCheckin(?string defaultCheckin): void |
| `defaultCheckout` | `?string` | Optional | Default Checkout<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getDefaultCheckout(): ?string | setDefaultCheckout(?string defaultCheckout): void |
| `defaultRoomRate` | `?int` | Optional | Default Room Rate<br>**Constraints**: `>= 0`, `<= 100` | getDefaultRoomRate(): ?int | setDefaultRoomRate(?int defaultRoomRate): void |
| `defaultRoomNumber` | `?string` | Optional | Default Room Number<br>**Constraints**: *Maximum Length*: `12` | getDefaultRoomNumber(): ?string | setDefaultRoomNumber(?string defaultRoomNumber): void |
| `debit` | `bool` | Required | Debit | getDebit(): bool | setDebit(bool debit): void |
| `emv` | `bool` | Required | EMV | getEmv(): bool | setEmv(bool emv): void |
| `cashbackEnable` | `bool` | Required | Cashback Enable | getCashbackEnable(): bool | setCashbackEnable(bool cashbackEnable): void |
| `printEnable` | `bool` | Required | Print Enable | getPrintEnable(): bool | setPrintEnable(bool printEnable): void |
| `sigCaptureEnable` | `bool` | Required | Sig Capture Enable | getSigCaptureEnable(): bool | setSigCaptureEnable(bool sigCaptureEnable): void |
| `isProvisioned` | `?bool` | Optional | Is Provisioned | getIsProvisioned(): ?bool | setIsProvisioned(?bool isProvisioned): void |
| `tipEnable` | `?bool` | Optional | Tip Enable | getTipEnable(): ?bool | setTipEnable(?bool tipEnable): void |
| `validatedDecryption` | `?bool` | Optional | Validated Decryption | getValidatedDecryption(): ?bool | setValidatedDecryption(?bool validatedDecryption): void |
| `communicationType` | [`?string (CommunicationTypeEnum)`](../../doc/models/communication-type-enum.md) | Optional | Communication Type | getCommunicationType(): ?string | setCommunicationType(?string communicationType): void |
| `active` | `?bool` | Optional | Active | getActive(): ?bool | setActive(?bool active): void |
| `id` | `string` | Required | Terminal ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `createdTs` | `int` | Required | Created Time Stamp | getCreatedTs(): int | setCreatedTs(int createdTs): void |
| `modifiedTs` | `int` | Required | Modified Time Stamp | getModifiedTs(): int | setModifiedTs(int modifiedTs): void |
| `lastRegistrationTs` | `int` | Required | Modified Time Stamp | getLastRegistrationTs(): int | setLastRegistrationTs(int lastRegistrationTs): void |
| `createdUserId` | `string` | Required | User ID Created the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCreatedUserId(): string | setCreatedUserId(string createdUserId): void |
| `modifiedUserId` | `string` | Required | Last User ID that updated the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getModifiedUserId(): string | setModifiedUserId(string modifiedUserId): void |
| `location` | [`?Location`](../../doc/models/location.md) | Optional | Location Information on `expand` | getLocation(): ?Location | setLocation(?Location location): void |
| `createdUser` | [`?CreatedUser`](../../doc/models/created-user.md) | Optional | User Information on `expand` | getCreatedUser(): ?CreatedUser | setCreatedUser(?CreatedUser createdUser): void |
| `terminalApplication` | [`?TerminalApplication`](../../doc/models/terminal-application.md) | Optional | Terminal Application Information on `expand` | getTerminalApplication(): ?TerminalApplication | setTerminalApplication(?TerminalApplication terminalApplication): void |
| `changelogs` | [`?(Changelog[])`](../../doc/models/changelog.md) | Optional | Changelog Information on `expand` | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `terminalRouters` | [`?(TerminalRouter[])`](../../doc/models/terminal-router.md) | Optional | Terminal Router Information on `expand` | getTerminalRouters(): ?array | setTerminalRouters(?array terminalRouters): void |
| `hasTerminalRouters` | `?bool` | Optional | Has Terminal Router Information on `expand` | getHasTerminalRouters(): ?bool | setHasTerminalRouters(?bool hasTerminalRouters): void |
| `terminalCvm` | [`?TerminalCvm`](../../doc/models/terminal-cvm.md) | Optional | Terminal Cvm Information on `expand` | getTerminalCvm(): ?TerminalCvm | setTerminalCvm(?TerminalCvm terminalCvm): void |
| `terminalManufacturer` | [`?TerminalManufacturer`](../../doc/models/terminal-manufacturer.md) | Optional | Terminal Manufacturer Information on `expand` | getTerminalManufacturer(): ?TerminalManufacturer | setTerminalManufacturer(?TerminalManufacturer terminalManufacturer): void |

## Example (as JSON)

```json
{
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "default_product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "terminal_application_id": "11e95f8ec39de8fbdb0a4f1a",
  "terminal_cvm_id": "11e95f8ec39de8fbdb0a4f1a",
  "terminal_manufacturer_code": "1",
  "title": "My terminal",
  "mac_address": "3D:F2:C9:A6:B3:4F",
  "local_ip_address": "192.168.0.10",
  "port": 10009,
  "serial_number": "1234567890",
  "terminal_number": "973456789012367",
  "header_line_1": "line 1 sample",
  "header_line_2": "line 2 sample",
  "header_line_3": "line 3 sample",
  "header_line_4": "line 4 sample",
  "header_line_5": "line 5 sample",
  "trailer_line_1": "trailer 1 sample",
  "trailer_line_2": "trailer 2 sample",
  "trailer_line_3": "trailer 3 sample",
  "trailer_line_4": "trailer 4 sample",
  "trailer_line_5": "trailer 5 sample",
  "default_checkin": "2021-12-01",
  "default_checkout": "2021-12-01",
  "default_room_rate": 56,
  "default_room_number": "303",
  "debit": false,
  "emv": false,
  "cashback_enable": false,
  "print_enable": false,
  "sig_capture_enable": false,
  "is_provisioned": false,
  "tip_enable": false,
  "validated_decryption": false,
  "communication_type": "http",
  "active": true,
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "created_ts": 1422040992,
  "modified_ts": 1422040992,
  "last_registration_ts": 1422040992,
  "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "modified_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "has_terminal_routers": true
}
```

