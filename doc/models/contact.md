
# Contact

The Contact.

## Structure

`Contact`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | Contact's first name.<br>**Constraints**: *Maximum Length*: `20` | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | Contact's last name.<br>**Constraints**: *Maximum Length*: `20` | getLastName(): ?string | setLastName(?string lastName): void |
| `email` | `?string` | Optional | Contact's email address.<br>**Constraints**: *Maximum Length*: `100` | getEmail(): ?string | setEmail(?string email): void |
| `phoneNumber` | `string` | Required | Contact's phone.<br>**Constraints**: *Maximum Length*: `20` | getPhoneNumber(): string | setPhoneNumber(string phoneNumber): void |

## Example (as JSON)

```json
{
  "first_name": "Jeffery",
  "last_name": "Todd",
  "email": "jtodd@example.com",
  "phone_number": "555-555-3456"
}
```

