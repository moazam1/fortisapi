
# List 9

## Structure

`List9`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `string` | Required | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): string | setLocationId(string locationId): void |
| `title` | `string` | Required | Tag Title<br>**Constraints**: *Maximum Length*: `64` | getTitle(): string | setTitle(string title): void |
| `id` | `string` | Required | Tag ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `createdTs` | `int` | Required | Created Time Stamp | getCreatedTs(): int | setCreatedTs(int createdTs): void |
| `modifiedTs` | `int` | Required | Modified Time Stamp | getModifiedTs(): int | setModifiedTs(int modifiedTs): void |
| `location` | [`?Location`](../../doc/models/location.md) | Optional | Location Information on `expand` | getLocation(): ?Location | setLocation(?Location location): void |

## Example (as JSON)

```json
{
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "title": "My terminal",
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "created_ts": 1422040992,
  "modified_ts": 1422040992,
  "location": {
    "id": "id4",
    "created_ts": 254,
    "modified_ts": 178,
    "account_number": "account_number6",
    "address": {
      "city": "city0",
      "state": "state6",
      "postal_code": "postal_code2",
      "country": "US",
      "street": "street0"
    },
    "branding_domain_id": "branding_domain_id8",
    "contact_email_trx_receipt_default": false,
    "default_ach": "default_ach8",
    "name": "name4",
    "parent_id": "parent_id0"
  }
}
```

