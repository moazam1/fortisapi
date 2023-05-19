
# Address 2

Address

## Structure

`Address2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `city` | `?string` | Optional | City name<br>**Constraints**: *Maximum Length*: `36`, *Pattern*: `^[\w\#\,\.\-\'\&\s\/]+$` | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | State name<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `2` | getState(): ?string | setState(?string state): void |
| `postalCode` | `?string` | Optional | Postal code<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `10`, *Pattern*: `^[a-zA-Z0-9\-\s]+$` | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `country` | [`?string (Country1Enum)`](../../doc/models/country-1-enum.md) | Optional | Country | getCountry(): ?string | setCountry(?string country): void |
| `street` | `?string` | Optional | Street<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[\w\#\,\.\-\'\&\s\/]+$` | getStreet(): ?string | setStreet(?string street): void |

## Example (as JSON)

```json
{
  "city": "Novi",
  "state": "MI",
  "postal_code": "48375",
  "country": "US",
  "street": "street0"
}
```

