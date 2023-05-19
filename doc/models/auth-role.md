
# Auth Role

## Structure

`AuthRole`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `userId` | `string` | Required | User ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getUserId(): string | setUserId(string userId): void |
| `authRoleCode` | `int` | Required | Auth Role Code | getAuthRoleCode(): int | setAuthRoleCode(int authRoleCode): void |
| `code` | `int` | Required | Auth Role User Code | getCode(): int | setCode(int code): void |
| `createdTs` | `int` | Required | Created Time Stamp | getCreatedTs(): int | setCreatedTs(int createdTs): void |
| `modifiedTs` | `int` | Required | Modified Time Stamp | getModifiedTs(): int | setModifiedTs(int modifiedTs): void |
| `createdUserId` | `?string` | Optional | System generated id for user who created record<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCreatedUserId(): ?string | setCreatedUserId(?string createdUserId): void |
| `modifiedUserId` | `?string` | Optional | System generated id for user who created record<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getModifiedUserId(): ?string | setModifiedUserId(?string modifiedUserId): void |

## Example (as JSON)

```json
{
  "user_id": "11e95f8ec39de8fbdb0a4f1a",
  "auth_role_code": 110,
  "code": 83931,
  "created_ts": 1422040992,
  "modified_ts": 1422040992,
  "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
}
```

