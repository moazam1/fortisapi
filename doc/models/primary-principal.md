
# Primary Principal

The Primary Principal.

## Structure

`PrimaryPrincipal`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `string` | Required | Signer's first name<br>**Constraints**: *Maximum Length*: `20` | getFirstName(): string | setFirstName(string firstName): void |
| `lastName` | `string` | Required | Signer's last name<br>**Constraints**: *Maximum Length*: `20` | getLastName(): string | setLastName(string lastName): void |
| `middleName` | `?string` | Optional | Signer's middle name<br>**Constraints**: *Maximum Length*: `20` | getMiddleName(): ?string | setMiddleName(?string middleName): void |
| `title` | `?string` | Optional | Signer's title<br>**Constraints**: *Maximum Length*: `20` | getTitle(): ?string | setTitle(?string title): void |
| `dateOfBirth` | `?string` | Optional | Signer's date of birth<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getDateOfBirth(): ?string | setDateOfBirth(?string dateOfBirth): void |
| `addressLine1` | `?string` | Optional | Signer's residential address line 1<br>**Constraints**: *Maximum Length*: `100` | getAddressLine1(): ?string | setAddressLine1(?string addressLine1): void |
| `addressLine2` | `?string` | Optional | Signer's residential address line 2<br>**Constraints**: *Maximum Length*: `20` | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `city` | `?string` | Optional | Signer's city<br>**Constraints**: *Maximum Length*: `50` | getCity(): ?string | setCity(?string city): void |
| `stateProvince` | `?string` | Optional | Signer's two-digit state code<br>**Constraints**: *Maximum Length*: `2` | getStateProvince(): ?string | setStateProvince(?string stateProvince): void |
| `postalCode` | `?string` | Optional | Signer's postal code<br>**Constraints**: *Maximum Length*: `10` | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `ssn` | `?string` | Optional | Last four digits of the primary principal or Signer's social security number<br>**Constraints**: *Maximum Length*: `4` | getSsn(): ?string | setSsn(?string ssn): void |
| `ownershipPercent` | `?int` | Optional | Percentage of business owned by primary principal or signer<br>**Constraints**: `>= 0`, `<= 100` | getOwnershipPercent(): ?int | setOwnershipPercent(?int ownershipPercent): void |
| `phoneNumber` | `?string` | Optional | Signer's phone number<br>**Constraints**: *Maximum Length*: `20` | getPhoneNumber(): ?string | setPhoneNumber(?string phoneNumber): void |

## Example (as JSON)

```json
{
  "first_name": "Bob",
  "last_name": "Fairview",
  "middle_name": "Nathaniel",
  "title": "Dr",
  "date_of_birth": "2021-12-01",
  "address_line_1": "1354 Oak St.",
  "address_line_2": "Unit 203",
  "city": "Dover",
  "state_province": "DE",
  "postal_code": "55022",
  "ownership_percent": 100,
  "phone_number": "555-555-1234"
}
```

