
# Response User

## Structure

`ResponseUser`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'User'` | getType(): string | setType(string type): void |
| `data` | [`?Data25`](../../doc/models/data-25.md) | Optional | - | getData(): ?Data25 | setData(?Data25 data): void |

## Example (as JSON)

```json
{
  "type": "User",
  "data": {
    "account_number": "account_number0",
    "branding_domain_url": "branding_domain_url0",
    "cell_phone": "cell_phone6",
    "company_name": "company_name6",
    "contact_id": "contact_id4",
    "email": "email6",
    "last_name": "last_name8",
    "primary_location_id": "primary_location_id0",
    "tz": "tz2",
    "username": "username0",
    "user_type_code": 1000,
    "id": "id0",
    "status": false,
    "login_attempts": 190,
    "last_login_ts": 44,
    "created_ts": 114,
    "modified_ts": 190,
    "created_user_id": "created_user_id2",
    "current_date_time": "current_date_time0"
  }
}
```

