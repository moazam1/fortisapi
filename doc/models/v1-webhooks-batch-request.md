
# V1 Webhooks Batch Request

## Structure

`V1WebhooksBatchRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attemptInterval` | `?int` | Optional | Number of seconds before another retry is submitted<br>**Default**: `300`<br>**Constraints**: `>= 300`, `<= 86400` | getAttemptInterval(): ?int | setAttemptInterval(?int attemptInterval): void |
| `basicAuthUsername` | `?string` | Optional | The Basic authorization username for the URL, if not supplied, the postback will be submitted without Basic authorization headers<br>**Constraints**: *Maximum Length*: `512` | getBasicAuthUsername(): ?string | setBasicAuthUsername(?string basicAuthUsername): void |
| `basicAuthPassword` | `?string` | Optional | The basic authorization password<br>**Constraints**: *Maximum Length*: `512` | getBasicAuthPassword(): ?string | setBasicAuthPassword(?string basicAuthPassword): void |
| `expands` | `?string` | Optional | An option list of expanded data to send with base data. (i.e. set this field to “contact,account_vault” to get the contact an accountvault used to run a transaction.)<br>**Constraints**: *Maximum Length*: `512` | getExpands(): ?string | setExpands(?string expands): void |
| `format` | [`?string (FormatEnum)`](../../doc/models/format-enum.md) | Optional | Options include: api-default | getFormat(): ?string | setFormat(?string format): void |
| `isActive` | `bool` | Required | Flag to indicate whether configuration is active (in effect). | getIsActive(): bool | setIsActive(bool isActive): void |
| `locationId` | `string` | Required | The location identifier of the resource you want to recieve postbacks from.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): string | setLocationId(string locationId): void |
| `locationApiId` | `?string` | Optional | Location Api ID | getLocationApiId(): ?string | setLocationApiId(?string locationApiId): void |
| `onCreate` | `bool` | Required | To receive postbacks on the creation of a resource | getOnCreate(): bool | setOnCreate(bool onCreate): void |
| `onUpdate` | `bool` | Required | To receive postbacks on the updating of a resource | getOnUpdate(): bool | setOnUpdate(bool onUpdate): void |
| `onDelete` | `bool` | Required | To receive postbacks when the record is deleted | getOnDelete(): bool | setOnDelete(bool onDelete): void |
| `postbackConfigId` | `?string` | Optional | Postback Config ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getPostbackConfigId(): ?string | setPostbackConfigId(?string postbackConfigId): void |
| `productTransactionId` | `string` | Required | Required when using 'transaction' or 'transactionbatch' resource<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getProductTransactionId(): string | setProductTransactionId(string productTransactionId): void |
| `resource` | [`?string (Resource12Enum)`](../../doc/models/resource-12-enum.md) | Optional | The resource you want to subscribe the postbacks to.<br>**Constraints**: *Maximum Length*: `128` | getResource(): ?string | setResource(?string resource): void |
| `numberOfAttempts` | `int` | Required | Maximum number of attempts on failure<br>**Constraints**: `>= 1`, `<= 5` | getNumberOfAttempts(): int | setNumberOfAttempts(int numberOfAttempts): void |
| `url` | `string` | Required | The URL where the postback will be submitted<br>**Constraints**: *Maximum Length*: `512` | getUrl(): string | setUrl(string url): void |

## Example (as JSON)

```json
{
  "attempt_interval": 300,
  "basic_auth_username": "tester",
  "basic_auth_password": "Test@522",
  "expands": "changelogs,tags",
  "format": "api-default",
  "is_active": true,
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "on_create": true,
  "on_update": true,
  "on_delete": true,
  "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
  "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "resource": "contact",
  "number_of_attempts": 1,
  "url": "https://127.0.0.1/receiver"
}
```

