
# V1 Contacts Request 1

## Structure

`V1ContactsRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `accountNumber` | `?string` | Optional | Contact Account Number<br>**Constraints**: *Maximum Length*: `32` | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `contactApiId` | `?string` | Optional | Contact API Id<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9]*$` | getContactApiId(): ?string | setContactApiId(?string contactApiId): void |
| `firstName` | `?string` | Optional | First Name<br>**Constraints**: *Maximum Length*: `64` | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | Last Name<br>**Constraints**: *Maximum Length*: `64` | getLastName(): ?string | setLastName(?string lastName): void |
| `cellPhone` | `?string` | Optional | Cell phone of contact<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10`, *Pattern*: `^\d{10}$` | getCellPhone(): ?string | setCellPhone(?string cellPhone): void |
| `balance` | `?float` | Optional | Balance<br>**Constraints**: `>= -99999999.99`, `<= 99999999.99` | getBalance(): ?float | setBalance(?float balance): void |
| `address` | [`?Address`](../../doc/models/address.md) | Optional | Address of contact | getAddress(): ?Address | setAddress(?Address address): void |
| `companyName` | `?string` | Optional | Company Name<br>**Constraints**: *Maximum Length*: `64` | getCompanyName(): ?string | setCompanyName(?string companyName): void |
| `headerMessage` | `?string` | Optional | Header Message<br>**Constraints**: *Maximum Length*: `250` | getHeaderMessage(): ?string | setHeaderMessage(?string headerMessage): void |
| `dateOfBirth` | `?string` | Optional | Contacts DOB, Format: yyyy-MM-dd<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getDateOfBirth(): ?string | setDateOfBirth(?string dateOfBirth): void |
| `emailTrxReceipt` | `?bool` | Optional | Whether or not to email all transactions receipts to contact (1 or 0) | getEmailTrxReceipt(): ?bool | setEmailTrxReceipt(?bool emailTrxReceipt): void |
| `homePhone` | `?string` | Optional | Contacts home phone<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10`, *Pattern*: `^\d{10}$` | getHomePhone(): ?string | setHomePhone(?string homePhone): void |
| `officePhone` | `?string` | Optional | Contacts office phone<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10`, *Pattern*: `^\d{10}$` | getOfficePhone(): ?string | setOfficePhone(?string officePhone): void |
| `officePhoneExt` | `?string` | Optional | Contacts office phone extension for office phone<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^\d{1,10}$` | getOfficePhoneExt(): ?string | setOfficePhoneExt(?string officePhoneExt): void |
| `headerMessageType` | `?int` | Optional | Header Message Type<br>**Constraints**: `>= 0`, `<= 4` | getHeaderMessageType(): ?int | setHeaderMessageType(?int headerMessageType): void |
| `updateIfExists` | [`?int (UpdateIfExistsEnum)`](../../doc/models/update-if-exists-enum.md) | Optional | Update If Exists | getUpdateIfExists(): ?int | setUpdateIfExists(?int updateIfExists): void |
| `contactC1` | `?string` | Optional | Custom field 1 for api users to store custom data<br>**Constraints**: *Maximum Length*: `128` | getContactC1(): ?string | setContactC1(?string contactC1): void |
| `contactC2` | `?string` | Optional | Custom field 2 for api users to store custom data<br>**Constraints**: *Maximum Length*: `128` | getContactC2(): ?string | setContactC2(?string contactC2): void |
| `contactC3` | `?string` | Optional | Custom field 3 for api users to store custom data<br>**Constraints**: *Maximum Length*: `128` | getContactC3(): ?string | setContactC3(?string contactC3): void |
| `parentId` | `?string` | Optional | Parent Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getParentId(): ?string | setParentId(?string parentId): void |
| `email` | `?string` | Optional | Email of contact<br>**Constraints**: *Maximum Length*: `64` | getEmail(): ?string | setEmail(?string email): void |

## Example (as JSON)

```json
{
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "account_number": "54545433332",
  "contact_api_id": "137",
  "first_name": "John",
  "last_name": "Smith",
  "cell_phone": "3339998822",
  "balance": 245.36,
  "company_name": "Fortis Payment Systems, LLC",
  "header_message": "This is a sample message for you",
  "date_of_birth": "2021-12-01",
  "email_trx_receipt": true,
  "home_phone": "3339998822",
  "office_phone": "3339998822",
  "office_phone_ext": "5",
  "header_message_type": 0,
  "update_if_exists": 1,
  "contact_c1": "any",
  "contact_c2": "anything",
  "contact_c3": "something",
  "parent_id": "11e95f8ec39de8fbdb0a4f1a",
  "email": "email@domain.com"
}
```

