
# V1 Users Request 1

## Structure

`V1UsersRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `?string` | Optional | Account Number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `brandingDomainUrl` | `?string` | Optional | Branding Domain Url<br>**Constraints**: *Maximum Length*: `64` | getBrandingDomainUrl(): ?string | setBrandingDomainUrl(?string brandingDomainUrl): void |
| `cellPhone` | `?string` | Optional | Cell Phone<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10`, *Pattern*: `^\d{10}$` | getCellPhone(): ?string | setCellPhone(?string cellPhone): void |
| `companyName` | `?string` | Optional | Company Name<br>**Constraints**: *Maximum Length*: `64` | getCompanyName(): ?string | setCompanyName(?string companyName): void |
| `contactId` | `?string` | Optional | Contact<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getContactId(): ?string | setContactId(?string contactId): void |
| `dateOfBirth` | `?string` | Optional | Date Of Birth<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getDateOfBirth(): ?string | setDateOfBirth(?string dateOfBirth): void |
| `domainId` | `?string` | Optional | Domain<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getDomainId(): ?string | setDomainId(?string domainId): void |
| `email` | `?string` | Optional | Email<br>**Constraints**: *Maximum Length*: `128` | getEmail(): ?string | setEmail(?string email): void |
| `emailTrxReceipt` | `?bool` | Optional | Email Trx Receipt | getEmailTrxReceipt(): ?bool | setEmailTrxReceipt(?bool emailTrxReceipt): void |
| `homePhone` | `?string` | Optional | Home Phone<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10`, *Pattern*: `^\d{10}$` | getHomePhone(): ?string | setHomePhone(?string homePhone): void |
| `firstName` | `?string` | Optional | First Name<br>**Constraints**: *Maximum Length*: `64` | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | Last Name<br>**Constraints**: *Maximum Length*: `64` | getLastName(): ?string | setLastName(?string lastName): void |
| `locale` | `?string` | Optional | Locale<br>**Constraints**: *Maximum Length*: `8` | getLocale(): ?string | setLocale(?string locale): void |
| `officePhone` | `?string` | Optional | Office Phone<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10`, *Pattern*: `^\d{10}$` | getOfficePhone(): ?string | setOfficePhone(?string officePhone): void |
| `officeExtPhone` | `?string` | Optional | Office Ext Phone<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^\d{1,10}$` | getOfficeExtPhone(): ?string | setOfficeExtPhone(?string officeExtPhone): void |
| `primaryLocationId` | `?string` | Optional | Primary Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getPrimaryLocationId(): ?string | setPrimaryLocationId(?string primaryLocationId): void |
| `requiresNewPassword` | `?string` | Optional | Requires New Password<br>**Constraints**: *Maximum Length*: `1` | getRequiresNewPassword(): ?string | setRequiresNewPassword(?string requiresNewPassword): void |
| `termsConditionCode` | `?string` | Optional | Terms Condition (This field is required when updating your own password). | getTermsConditionCode(): ?string | setTermsConditionCode(?string termsConditionCode): void |
| `tz` | `?string` | Optional | Time zone<br>**Constraints**: *Maximum Length*: `30` | getTz(): ?string | setTz(?string tz): void |
| `uiPrefs` | [`?UiPrefs`](../../doc/models/ui-prefs.md) | Optional | Ui Prefs | getUiPrefs(): ?UiPrefs | setUiPrefs(?UiPrefs uiPrefs): void |
| `username` | `?string` | Optional | Username<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `64` | getUsername(): ?string | setUsername(?string username): void |
| `userApiKey` | `?string` | Optional | User Api Key<br>**Constraints**: *Minimum Length*: `16`, *Maximum Length*: `64` | getUserApiKey(): ?string | setUserApiKey(?string userApiKey): void |
| `userHashKey` | `?string` | Optional | User Hash Key<br>**Constraints**: *Minimum Length*: `24`, *Maximum Length*: `36` | getUserHashKey(): ?string | setUserHashKey(?string userHashKey): void |
| `userTypeCode` | [`?int (UserTypeCodeEnum)`](../../doc/models/user-type-code-enum.md) | Optional | User Type | getUserTypeCode(): ?int | setUserTypeCode(?int userTypeCode): void |
| `password` | `?string` | Optional | Password<br>**Constraints**: *Minimum Length*: `8`, *Maximum Length*: `128`, *Pattern*: `^(?=.*[`!@#$%^&*()_+\-=\[\]{};':"\\\|,.<>\/?~])(?=.*[0-9])(?=.*[a-zA-Z]).*$` | getPassword(): ?string | setPassword(?string password): void |
| `zip` | `?string` | Optional | Zip<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `10`, *Pattern*: `^[a-zA-Z0-9\-\s]+$` | getZip(): ?string | setZip(?string zip): void |
| `locationId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `contactApiId` | `?string` | Optional | ContactApi Id | getContactApiId(): ?string | setContactApiId(?string contactApiId): void |
| `primaryLocationApiId` | `?string` | Optional | Primary LocationApi ID | getPrimaryLocationApiId(): ?string | setPrimaryLocationApiId(?string primaryLocationApiId): void |
| `statusId` | `?int` | Optional | Status | getStatusId(): ?int | setStatusId(?int statusId): void |
| `apiOnly` | `?bool` | Optional | API Only | getApiOnly(): ?bool | setApiOnly(?bool apiOnly): void |
| `isInvitation` | `?bool` | Optional | Is Invitation | getIsInvitation(): ?bool | setIsInvitation(?bool isInvitation): void |
| `address` | [`?Address2`](../../doc/models/address-2.md) | Optional | Address | getAddress(): ?Address2 | setAddress(?Address2 address): void |

## Example (as JSON)

```json
{
  "account_number": "5454545454545454",
  "branding_domain_url": "{branding_domain_url}",
  "cell_phone": "3339998822",
  "company_name": "Fortis Payment Systems, LLC",
  "contact_id": "11e95f8ec39de8fbdb0a4f1a",
  "date_of_birth": "2021-12-01",
  "domain_id": "11e95f8ec39de8fbdb0a4f1a",
  "email": "email@domain.com",
  "email_trx_receipt": true,
  "home_phone": "3339998822",
  "first_name": "John",
  "last_name": "Smith",
  "locale": "en-US",
  "office_phone": "3339998822",
  "office_ext_phone": "5",
  "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
  "terms_condition_code": "20220308",
  "tz": "America/New_York",
  "username": "{user_name}",
  "user_api_key": "234bas8dfn8238f923w2",
  "user_type_code": 100,
  "zip": "48375",
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "status_id": 1,
  "api_only": false,
  "is_invitation": false
}
```

