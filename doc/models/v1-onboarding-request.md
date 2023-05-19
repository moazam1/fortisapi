
# V1 Onboarding Request

## Structure

`V1OnboardingRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `parentId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getParentId(): ?string | setParentId(?string parentId): void |
| `primaryPrincipal` | [`PrimaryPrincipal`](../../doc/models/primary-principal.md) | Required | The Primary Principal. | getPrimaryPrincipal(): PrimaryPrincipal | setPrimaryPrincipal(PrimaryPrincipal primaryPrincipal): void |
| `templateCode` | `string` | Required | The ID of the template to be used - this value will be provided by Fortis.<br>**Constraints**: *Maximum Length*: `20`, *Pattern*: `^[a-zA-Z0-9]*$` | getTemplateCode(): string | setTemplateCode(string templateCode): void |
| `email` | `string` | Required | Merchant email address.<br>**Constraints**: *Maximum Length*: `100` | getEmail(): string | setEmail(string email): void |
| `dbaName` | `string` | Required | Merchant 'Doing Business As' name.<br>**Constraints**: *Maximum Length*: `100` | getDbaName(): string | setDbaName(string dbaName): void |
| `location` | [`Location4`](../../doc/models/location-4.md) | Required | The Location. | getLocation(): Location4 | setLocation(Location4 location): void |
| `appDelivery` | [`string (AppDeliveryEnum)`](../../doc/models/app-delivery-enum.md) | Required | The delivery method of the app to the merchant.<br>**Constraints**: *Maximum Length*: `12` | getAppDelivery(): string | setAppDelivery(string appDelivery): void |
| `businessCategory` | [`?string (BusinessCategoryEnum)`](../../doc/models/business-category-enum.md) | Optional | The Category of the merchant's business | getBusinessCategory(): ?string | setBusinessCategory(?string businessCategory): void |
| `businessType` | [`?string (BusinessTypeEnum)`](../../doc/models/business-type-enum.md) | Optional | The Type of a merchant's business. | getBusinessType(): ?string | setBusinessType(?string businessType): void |
| `businessDescription` | `?string` | Optional | Description of Goods or Services.<br>**Constraints**: *Maximum Length*: `200` | getBusinessDescription(): ?string | setBusinessDescription(?string businessDescription): void |
| `swipedPercent` | `?int` | Optional | Card present/swiped percentage<br>**Constraints**: `>= 0`, `<= 100` | getSwipedPercent(): ?int | setSwipedPercent(?int swipedPercent): void |
| `keyedPercent` | `?int` | Optional | Card not present/keyed percentage<br>**Constraints**: `>= 0`, `<= 100` | getKeyedPercent(): ?int | setKeyedPercent(?int keyedPercent): void |
| `ecommercePercent` | `?int` | Optional | eCommerce percentage.<br>**Constraints**: `>= 0`, `<= 100` | getEcommercePercent(): ?int | setEcommercePercent(?int ecommercePercent): void |
| `ownershipType` | [`?string (OwnershipTypeEnum)`](../../doc/models/ownership-type-enum.md) | Optional | The Ownership Type of the merchant's business.<br>**Constraints**: *Maximum Length*: `10` | getOwnershipType(): ?string | setOwnershipType(?string ownershipType): void |
| `fedTaxId` | `?string` | Optional | Federal Tax ID (EIN).<br>**Constraints**: *Maximum Length*: `10` | getFedTaxId(): ?string | setFedTaxId(?string fedTaxId): void |
| `ccAverageTicketRange` | `?int` | Optional | Average Transaction Amount Range<br>**Constraints**: `>= 1`, `<= 7` | getCcAverageTicketRange(): ?int | setCcAverageTicketRange(?int ccAverageTicketRange): void |
| `ccMonthlyVolumeRange` | `?int` | Optional | Monthly Processing Volume Range<br>**Constraints**: `>= 1`, `<= 7` | getCcMonthlyVolumeRange(): ?int | setCcMonthlyVolumeRange(?int ccMonthlyVolumeRange): void |
| `ccHighTicket` | `?int` | Optional | Highest transaction amount rounded to the next dollar<br>**Constraints**: `>= 0`, `<= 30000` | getCcHighTicket(): ?int | setCcHighTicket(?int ccHighTicket): void |
| `ecAverageTicketRange` | `?int` | Optional | Average Transaction Amount Range<br>**Constraints**: `>= 1`, `<= 7` | getEcAverageTicketRange(): ?int | setEcAverageTicketRange(?int ecAverageTicketRange): void |
| `ecMonthlyVolumeRange` | `?int` | Optional | Monthly Processing Volume Range<br>**Constraints**: `>= 1`, `<= 7` | getEcMonthlyVolumeRange(): ?int | setEcMonthlyVolumeRange(?int ecMonthlyVolumeRange): void |
| `ecHighTicket` | `?int` | Optional | Highest transaction amount rounded to the next dollar<br>**Constraints**: `>= 0`, `<= 30000` | getEcHighTicket(): ?int | setEcHighTicket(?int ecHighTicket): void |
| `website` | `?string` | Optional | Merchant's business website.<br>**Constraints**: *Maximum Length*: `100` | getWebsite(): ?string | setWebsite(?string website): void |
| `bankAccount` | [`BankAccount`](../../doc/models/bank-account.md) | Required | The Bank Account. | getBankAccount(): BankAccount | setBankAccount(BankAccount bankAccount): void |
| `altBankAccount` | [`AltBankAccount`](../../doc/models/alt-bank-account.md) | Required | The Alternative Bank Account. | getAltBankAccount(): AltBankAccount | setAltBankAccount(AltBankAccount altBankAccount): void |
| `legalName` | `?string` | Optional | Merchant legal name.<br>**Constraints**: *Maximum Length*: `100` | getLegalName(): ?string | setLegalName(?string legalName): void |
| `contact` | [`Contact`](../../doc/models/contact.md) | Required | The Contact. | getContact(): Contact | setContact(Contact contact): void |
| `clientAppId` | `?string` | Optional | Client Issues Id to track that can be used to track each submitted merchant application. This id should be generated and sent in the request payload, and will be returned in the response payload. If no id is submitted in the payload request, this field will be null in the response.<br>**Constraints**: *Maximum Length*: `50` | getClientAppId(): ?string | setClientAppId(?string clientAppId): void |

## Example (as JSON)

```json
{
  "parent_id": "11e95f8ec39de8fbdb0a4f1a",
  "primary_principal": {
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
  },
  "template_code": "1234YourTemplateCode",
  "email": "email@domain.com",
  "dba_name": "Discount Home Goods",
  "location": {
    "address_line_1": "1200 West Hartford Pkwy",
    "address_line_2": "Suite 2000",
    "city": "Dover",
    "state_province": "DE",
    "postal_code": "55022",
    "phone_number": "555-555-1212"
  },
  "app_delivery": "link_full_page",
  "business_category": "education",
  "swiped_percent": 0,
  "keyed_percent": 0,
  "ecommerce_percent": 100,
  "ownership_type": "llp",
  "fed_tax_id": "0000000000",
  "cc_average_ticket_range": 5,
  "cc_monthly_volume_range": 1,
  "cc_high_ticket": 1500,
  "ec_average_ticket_range": 5,
  "ec_monthly_volume_range": 2,
  "ec_high_ticket": 1500,
  "website": "http://www.example.com",
  "bank_account": {
    "routing_number": "011103093",
    "account_number": "01234567890123",
    "account_holder_name": "Bob Fairview"
  },
  "alt_bank_account": {
    "routing_number": "011103093",
    "account_number": "01234567890123",
    "account_holder_name": "Bob Fairview",
    "deposit_type": "fees_adjustments"
  },
  "legal_name": "Total Home Goods, LLP",
  "contact": {
    "first_name": "Jeffery",
    "last_name": "Todd",
    "email": "jtodd@example.com",
    "phone_number": "555-555-3456"
  },
  "client_app_id": "ABC123",
  "business_type": "carpet_cleaning",
  "business_description": "business_description8"
}
```

