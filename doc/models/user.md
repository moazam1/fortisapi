
# User

User

## Structure

`User`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): ?string | setId(?string id): void |
| `username` | `?string` | Optional | Username | getUsername(): ?string | setUsername(?string username): void |
| `firstName` | `?string` | Optional | First Name | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | Last Name | getLastName(): ?string | setLastName(?string lastName): void |

## Example (as JSON)

```json
{
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "username": "email@domain.com",
  "first_name": "Bob",
  "last_name": "Fairview"
}
```

