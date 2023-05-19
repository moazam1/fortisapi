
# Billing Address

Billing Address Object

## Structure

`BillingAddress`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `city` | `?string` | Optional | The City portion of the address associated with the Credit Card (CC) or Bank Account (ACH).<br>**Constraints**: *Maximum Length*: `36`, *Pattern*: `^[\w\#\,\.\-\'\&\s\/]+$` | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | The State portion of the address associated with the Credit Card (CC) or Bank Account (ACH).<br>**Constraints**: *Maximum Length*: `24` | getState(): ?string | setState(?string state): void |
| `postalCode` | `?string` | Optional | The Zip or 'Postal Code' portion of the address associated with the Credit Card (CC) or Bank Account (ACH).<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `10`, *Pattern*: `^[a-zA-Z0-9\-\s]+$` | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `street` | `?string` | Optional | The Street portion of the address associated with the Credit Card (CC) or Bank Account (ACH).<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[\w\#\,\.\-\'\&\s\/]+$` | getStreet(): ?string | setStreet(?string street): void |
| `phone` | `?string` | Optional | The Phone # to be used to contact Payer if there are any issues processing a transaction.<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10`, *Pattern*: `^\d{10}$` | getPhone(): ?string | setPhone(?string phone): void |
| `country` | `?string` | Optional | The Country portion of the address assocaited with the Credit Card (CC) or Bank Account (ACH | getCountry(): ?string | setCountry(?string country): void |

## Example (as JSON)

```json
{
  "city": "Novi",
  "state": "Michigan",
  "postal_code": "48375",
  "phone": "3339998822",
  "street": "street0"
}
```

