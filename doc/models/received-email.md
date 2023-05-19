
# Received Email

## Structure

`ReceivedEmail`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subject` | `string` | Required | Subject<br>**Constraints**: *Maximum Length*: `256` | getSubject(): string | setSubject(string subject): void |
| `body` | `string` | Required | Body | getBody(): string | setBody(string body): void |
| `sourceAddress` | `string` | Required | Source Address<br>**Constraints**: *Maximum Length*: `64` | getSourceAddress(): string | setSourceAddress(string sourceAddress): void |
| `returnPath` | `string` | Required | Return Path<br>**Constraints**: *Maximum Length*: `64` | getReturnPath(): string | setReturnPath(string returnPath): void |
| `providerId` | `?string` | Optional | Provider<br>**Constraints**: *Maximum Length*: `60` | getProviderId(): ?string | setProviderId(?string providerId): void |
| `domainId` | `?string` | Optional | Domain<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getDomainId(): ?string | setDomainId(?string domainId): void |
| `reasonSent` | `?string` | Optional | Reason Sent<br>**Constraints**: *Maximum Length*: `36` | getReasonSent(): ?string | setReasonSent(?string reasonSent): void |
| `reasonModel` | [`?string (ReasonModelEnum)`](../../doc/models/reason-model-enum.md) | Optional | Reason Model<br>**Constraints**: *Maximum Length*: `64` | getReasonModel(): ?string | setReasonModel(?string reasonModel): void |
| `reasonModelId` | `?string` | Optional | Reason Model<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getReasonModelId(): ?string | setReasonModelId(?string reasonModelId): void |
| `replyTo` | `?string` | Optional | Reply To<br>**Constraints**: *Maximum Length*: `520` | getReplyTo(): ?string | setReplyTo(?string replyTo): void |
| `id` | `string` | Required | Log Email Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `createdTs` | `int` | Required | Created Time Stamp | getCreatedTs(): int | setCreatedTs(int createdTs): void |

## Example (as JSON)

```json
{
  "subject": "Payment Receipt - 12skiestech",
  "body": "This email is being sent from a server.",
  "source_address": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
  "return_path": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
  "provider_id": "0100017e67bcc530-e1dd23b4-8a39-4a5b-8d5d-68d51c4c942f-000000",
  "domain_id": "11e95f8ec39de8fbdb0a4f1a",
  "reason_sent": "Contact Email",
  "reason_model": "Transaction",
  "reason_model_id": "11e95f8ec39de8fbdb0a4f1a",
  "reply_to": "\"Zeamster\" <emma.p@zeamster.com>",
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "created_ts": 1422040992
}
```

