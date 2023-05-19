
# List 2

## Structure

`List2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `string` | Required | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): string | setLocationId(string locationId): void |
| `terminalId` | `string` | Required | Terminal ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getTerminalId(): string | setTerminalId(string terminalId): void |
| `requireSignature` | `bool` | Required | Set to true or 1 to require a signature from the customer | getRequireSignature(): bool | setRequireSignature(bool requireSignature): void |
| `deviceTermApiId` | `?string` | Optional | Can be used for associating record to external systems. Must be unique per location.<br>**Constraints**: *Maximum Length*: `64` | getDeviceTermApiId(): ?string | setDeviceTermApiId(?string deviceTermApiId): void |
| `termsConditions` | `string` | Required | This is the message that is displayed on the screen when prompting for a signature.<br>**Constraints**: *Maximum Length*: `4096` | getTermsConditions(): string | setTermsConditions(string termsConditions): void |
| `id` | `string` | Required | Device term ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `reasonCodeId` | `int` | Required | Reason code ID | getReasonCodeId(): int | setReasonCodeId(int reasonCodeId): void |
| `signature` | [`?Signature`](../../doc/models/signature.md) | Optional | Signature Information on `expand` | getSignature(): ?Signature | setSignature(?Signature signature): void |
| `createdTs` | `int` | Required | Created Time Stamp | getCreatedTs(): int | setCreatedTs(int createdTs): void |
| `modifiedTs` | `int` | Required | Modified Time Stamp | getModifiedTs(): int | setModifiedTs(int modifiedTs): void |
| `createdUserId` | `string` | Required | System generated id for user who created record<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCreatedUserId(): string | setCreatedUserId(string createdUserId): void |
| `createdUser` | [`?CreatedUser`](../../doc/models/created-user.md) | Optional | User Information on `expand` | getCreatedUser(): ?CreatedUser | setCreatedUser(?CreatedUser createdUser): void |
| `location` | [`?Location`](../../doc/models/location.md) | Optional | Location Information on `expand` | getLocation(): ?Location | setLocation(?Location location): void |
| `terminal` | [`?Terminal`](../../doc/models/terminal.md) | Optional | Terminal Information on `expand` | getTerminal(): ?Terminal | setTerminal(?Terminal terminal): void |
| `changelogs` | [`?(Changelog[])`](../../doc/models/changelog.md) | Optional | Changelog Information on `expand` | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `reasonCode` | [`?ReasonCode`](../../doc/models/reason-code.md) | Optional | Reason Code Information on `expand` | getReasonCode(): ?ReasonCode | setReasonCode(?ReasonCode reasonCode): void |

## Example (as JSON)

```json
{
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "terminal_id": "11e95f8ec39de8fbdb0a4f1a",
  "require_signature": true,
  "device_term_api_id": "device_term134",
  "terms_conditions": "FUNgib0Vh0B9c0Wbttvr50vNtGLOkTdFL0eFmhN1RJpKhK14IENeDa8irp2dEk9thEcVHvVEyriQeZLs5NjNsCzqNj9JDA4RSJwK647IFtYjrNPN1nBb9bw6hoQ71oT5kpsiXGt8HcqBFVBVeDA7psIzKAyDveAw2o1hfjipkOtXrPgWun0rYwyyFuvqkT1egQYKfYDj",
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "reason_code_id": 1000,
  "created_ts": 1422040992,
  "modified_ts": 1422040992,
  "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "signature": {
    "signature": "signature6",
    "resource": "Recurring",
    "resource_id": "resource_id4",
    "id": "id8",
    "created_ts": 80,
    "modified_ts": 4
  },
  "created_user": {
    "account_number": "account_number6",
    "branding_domain_url": "branding_domain_url4",
    "cell_phone": "cell_phone2",
    "company_name": "company_name2",
    "contact_id": "contact_id8",
    "email": "email0",
    "last_name": "last_name4",
    "primary_location_id": "primary_location_id6",
    "tz": "tz8",
    "username": "username6",
    "user_type_code": 300,
    "id": "id6",
    "status": false,
    "login_attempts": 52,
    "last_login_ts": 162,
    "created_ts": 232,
    "modified_ts": 52,
    "created_user_id": "created_user_id8",
    "current_date_time": "current_date_time6"
  },
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
  },
  "terminal": {
    "location_id": "location_id6",
    "default_product_transaction_id": "default_product_transaction_id8",
    "terminal_application_id": "terminal_application_id2",
    "terminal_cvm_id": "terminal_cvm_id8",
    "terminal_manufacturer_code": "1",
    "title": "title2",
    "mac_address": "mac_address0",
    "local_ip_address": "local_ip_address4",
    "port": 70,
    "serial_number": "serial_number4",
    "debit": false,
    "emv": false,
    "cashback_enable": false,
    "print_enable": false,
    "sig_capture_enable": false,
    "id": "id2",
    "created_ts": 130,
    "modified_ts": 54,
    "last_registration_ts": 10,
    "created_user_id": "created_user_id6",
    "modified_user_id": "modified_user_id6"
  }
}
```

