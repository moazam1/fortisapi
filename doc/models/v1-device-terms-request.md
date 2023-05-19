
# V1 Device Terms Request

## Structure

`V1DeviceTermsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `string` | Required | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): string | setLocationId(string locationId): void |
| `terminalId` | `string` | Required | Terminal ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getTerminalId(): string | setTerminalId(string terminalId): void |
| `requireSignature` | `bool` | Required | Set to true or 1 to require a signature from the customer | getRequireSignature(): bool | setRequireSignature(bool requireSignature): void |
| `deviceTermApiId` | `?string` | Optional | Can be used for associating record to external systems. Must be unique per location.<br>**Constraints**: *Maximum Length*: `64` | getDeviceTermApiId(): ?string | setDeviceTermApiId(?string deviceTermApiId): void |
| `termsConditions` | `string` | Required | This is the message that is displayed on the screen when prompting for a signature.<br>**Constraints**: *Maximum Length*: `4096` | getTermsConditions(): string | setTermsConditions(string termsConditions): void |

## Example (as JSON)

```json
{
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "terminal_id": "11e95f8ec39de8fbdb0a4f1a",
  "require_signature": true,
  "device_term_api_id": "device_term134",
  "terms_conditions": "FUNgib0Vh0B9c0Wbttvr50vNtGLOkTdFL0eFmhN1RJpKhK14IENeDa8irp2dEk9thEcVHvVEyriQeZLs5NjNsCzqNj9JDA4RSJwK647IFtYjrNPN1nBb9bw6hoQ71oT5kpsiXGt8HcqBFVBVeDA7psIzKAyDveAw2o1hfjipkOtXrPgWun0rYwyyFuvqkT1egQYKfYDj"
}
```

