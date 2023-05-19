
# Postback Log

## Structure

`PostbackLog`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `postbackStatusId` | [`?int (PostbackStatusIdEnum)`](../../doc/models/postback-status-id-enum.md) | Optional | Postback Status Id | getPostbackStatusId(): ?int | setPostbackStatusId(?int postbackStatusId): void |
| `id` | `string` | Required | Postback Log Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `postbackConfigId` | `string` | Required | Postback Config Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getPostbackConfigId(): string | setPostbackConfigId(string postbackConfigId): void |
| `changelogId` | `string` | Required | Changelog Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getChangelogId(): string | setChangelogId(string changelogId): void |
| `httpVerb` | `?string` | Optional | Http Verb | getHttpVerb(): ?string | setHttpVerb(?string httpVerb): void |
| `nextRunTs` | `?int` | Optional | Next Run | getNextRunTs(): ?int | setNextRunTs(?int nextRunTs): void |
| `createdTs` | `?int` | Optional | Created Time Stamp | getCreatedTs(): ?int | setCreatedTs(?int createdTs): void |
| `model` | `?string` | Optional | MOdel | getModel(): ?string | setModel(?string model): void |
| `modelId` | `?string` | Optional | Model Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getModelId(): ?string | setModelId(?string modelId): void |

## Example (as JSON)

```json
{
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
  "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
  "next_run_ts": 1422040992,
  "created_ts": 1422040992,
  "model_id": "11e95f8ec39de8fbdb0a4f1a",
  "postback_status_id": 3,
  "http_verb": "http_verb0",
  "model": "model2"
}
```

