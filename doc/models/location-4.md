
# Location 4

The Location.

## Structure

`Location4`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressLine1` | `?string` | Optional | Merchant's business address line 1.<br>**Constraints**: *Maximum Length*: `100` | getAddressLine1(): ?string | setAddressLine1(?string addressLine1): void |
| `addressLine2` | `?string` | Optional | Merchant's business address line 2.<br>**Constraints**: *Maximum Length*: `20` | getAddressLine2(): ?string | setAddressLine2(?string addressLine2): void |
| `city` | `?string` | Optional | Merchant's business city.<br>**Constraints**: *Maximum Length*: `50` | getCity(): ?string | setCity(?string city): void |
| `stateProvince` | `?string` | Optional | Merchant's business two-digit state or province code.<br>**Constraints**: *Maximum Length*: `2` | getStateProvince(): ?string | setStateProvince(?string stateProvince): void |
| `postalCode` | `?string` | Optional | Merchant's business postal code.<br>**Constraints**: *Maximum Length*: `10` | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `phoneNumber` | `string` | Required | Merchant's business phone number.<br>**Constraints**: *Maximum Length*: `20` | getPhoneNumber(): string | setPhoneNumber(string phoneNumber): void |

## Example (as JSON)

```json
{
  "address_line_1": "1200 West Hartford Pkwy",
  "address_line_2": "Suite 2000",
  "city": "Dover",
  "state_province": "DE",
  "postal_code": "55022",
  "phone_number": "555-555-1212"
}
```

