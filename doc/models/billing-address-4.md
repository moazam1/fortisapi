
# Billing Address 4

Billing Address Object

## Structure

`BillingAddress4`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `postalCode` | `?string` | Optional | The Zip or 'Postal Code' portion of the address associated with the Credit Card.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `10`, *Pattern*: `^[a-zA-Z0-9\-\s]+$` | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `street` | `?string` | Optional | The Street portion of the address associated with the Credit Card.<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[\w\#\,\.\-\'\&\s\/]+$` | getStreet(): ?string | setStreet(?string street): void |

## Example (as JSON)

```json
{
  "postal_code": "48375",
  "street": "street0"
}
```

