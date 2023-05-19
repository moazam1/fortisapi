
# Log Sms

Log Sms Information on `expand`

## Structure

`LogSms`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Log Sms Id<br>**Constraints**: *Maximum Length*: `24`, *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `body` | `?string` | Optional | Body | getBody(): ?string | setBody(?string body): void |
| `reasonModel` | `string` | Required | Reason Model<br>**Constraints**: *Maximum Length*: `24` | getReasonModel(): string | setReasonModel(string reasonModel): void |
| `reasonModelId` | `string` | Required | Reason Model ID<br>**Constraints**: *Maximum Length*: `36` | getReasonModelId(): string | setReasonModelId(string reasonModelId): void |
| `providerId` | `string` | Required | Provider ID<br>**Constraints**: *Maximum Length*: `60` | getProviderId(): string | setProviderId(string providerId): void |
| `status` | `string` | Required | Status<br>**Constraints**: *Maximum Length*: `10` | getStatus(): string | setStatus(string status): void |
| `sender` | `string` | Required | Sender<br>**Constraints**: *Maximum Length*: `10` | getSender(): string | setSender(string sender): void |
| `recipient` | `string` | Required | Recipient<br>**Constraints**: *Maximum Length*: `10` | getRecipient(): string | setRecipient(string recipient): void |
| `createdTs` | `int` | Required | Created Time Stamp | getCreatedTs(): int | setCreatedTs(int createdTs): void |
| `createdUserId` | `string` | Required | User ID Created the register<br>**Constraints**: *Maximum Length*: `36`, *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCreatedUserId(): string | setCreatedUserId(string createdUserId): void |

## Example (as JSON)

```json
{
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "reason_model": " ",
  "reason_model_id": " ",
  "provider_id": " ",
  "status": " ",
  "sender": " ",
  "recipient": " ",
  "created_ts": 1422040992,
  "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "body": "body6"
}
```

