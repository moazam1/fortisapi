
# Address

Address of contact

## Structure

`Address`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `city` | `?string` | Optional | City of contact<br>**Constraints**: *Maximum Length*: `36`, *Pattern*: `^[\w\#\,\.\-\'\&\s\/]+$` | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | State of contact<br>**Constraints**: *Maximum Length*: `24` | getState(): ?string | setState(?string state): void |
| `postalCode` | `?string` | Optional | Postal code of contact<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `10`, *Pattern*: `^[a-zA-Z0-9\-\s]+$` | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `country` | [`?string (CountryEnum)`](../../doc/models/country-enum.md) | Optional | Country of contact | getCountry(): ?string | setCountry(?string country): void |
| `street` | `?string` | Optional | Street of contact<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[\w\#\,\.\-\'\&\s\/]+$` | getStreet(): ?string | setStreet(?string street): void |

## Example (as JSON)

```json
{
  "city": "Novi",
  "state": "Michigan",
  "postal_code": "48375",
  "country": "US",
  "street": "street0"
}
```

