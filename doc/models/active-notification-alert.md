
# Active Notification Alert

## Structure

`ActiveNotificationAlert`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `locationApiId` | `?string` | Optional | Location Api ID | getLocationApiId(): ?string | setLocationApiId(?string locationApiId): void |
| `dateStart` | `string` | Required | Date Start<br>**Constraints**: *Maximum Length*: `19`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}\s[\d]{2}:[\d]{2}:[\d]{2}$` | getDateStart(): string | setDateStart(string dateStart): void |
| `dateEnd` | `string` | Required | Date End<br>**Constraints**: *Maximum Length*: `19`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}\s[\d]{2}:[\d]{2}:[\d]{2}$` | getDateEnd(): string | setDateEnd(string dateEnd): void |
| `userLocation` | `?bool` | Optional | User Location | getUserLocation(): ?bool | setUserLocation(?bool userLocation): void |
| `userContact` | `?bool` | Optional | User Contact | getUserContact(): ?bool | setUserContact(?bool userContact): void |
| `includeChildren` | `?bool` | Optional | Include Children | getIncludeChildren(): ?bool | setIncludeChildren(?bool includeChildren): void |
| `alertType` | [`?int (AlertTypeEnum)`](../../doc/models/alert-type-enum.md) | Optional | Alert Type | getAlertType(): ?int | setAlertType(?int alertType): void |
| `alertTypeId` | [`?int (AlertTypeIdEnum)`](../../doc/models/alert-type-id-enum.md) | Optional | Alert Type ID | getAlertTypeId(): ?int | setAlertTypeId(?int alertTypeId): void |
| `description` | `?string` | Optional | Description<br>**Constraints**: *Maximum Length*: `32` | getDescription(): ?string | setDescription(?string description): void |
| `alertMessage` | `?string` | Optional | Alert Message | getAlertMessage(): ?string | setAlertMessage(?string alertMessage): void |
| `id` | `string` | Required | Notification Alert ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `createdTs` | `int` | Required | Created Time Stamp | getCreatedTs(): int | setCreatedTs(int createdTs): void |
| `modifiedTs` | `int` | Required | Modified Time Stamp | getModifiedTs(): int | setModifiedTs(int modifiedTs): void |
| `createdUserId` | `?string` | Optional | User ID Created the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCreatedUserId(): ?string | setCreatedUserId(?string createdUserId): void |
| `modifiedUserId` | `?string` | Optional | Last User ID that updated the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getModifiedUserId(): ?string | setModifiedUserId(?string modifiedUserId): void |

## Example (as JSON)

```json
{
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "date_start": "2021-12-01 10:10:00",
  "date_end": "2021-12-01 10:10:00",
  "user_location": true,
  "user_contact": true,
  "include_children": true,
  "alert_type": 1,
  "alert_type_id": 1,
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "created_ts": 1422040992,
  "modified_ts": 1422040992,
  "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "modified_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "location_api_id": "location_api_id0"
}
```

