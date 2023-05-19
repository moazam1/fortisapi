
# Changelog

## Structure

`Changelog`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Change Log ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `createdTs` | `?int` | Optional | Created Time Stamp | getCreatedTs(): ?int | setCreatedTs(?int createdTs): void |
| `action` | `?string` | Optional | Action<br>**Constraints**: *Maximum Length*: `255` | getAction(): ?string | setAction(?string action): void |
| `model` | `?string` | Optional | Model<br>**Constraints**: *Maximum Length*: `255` | getModel(): ?string | setModel(?string model): void |
| `modelId` | `?string` | Optional | Model ID<br>**Constraints**: *Maximum Length*: `255` | getModelId(): ?string | setModelId(?string modelId): void |
| `userId` | `?string` | Optional | User ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getUserId(): ?string | setUserId(?string userId): void |
| `changelogDetails` | [`?(ChangelogDetail[])`](../../doc/models/changelog-detail.md) | Optional | Change Log Details | getChangelogDetails(): ?array | setChangelogDetails(?array changelogDetails): void |
| `user` | [`?User`](../../doc/models/user.md) | Optional | User | getUser(): ?User | setUser(?User user): void |

## Example (as JSON)

```json
{
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "created_ts": 1422040992,
  "action": "CREATE",
  "model": "TransactionRequest",
  "model_id": "11ec829598f0d4008be9aba4",
  "user_id": "11e95f8ec39de8fbdb0a4f1a"
}
```

