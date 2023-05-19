
# Data 5

## Structure

`Data5`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `action` | [`?string (ActionEnum)`](../../doc/models/action-enum.md) | Optional | The action to be performed<br>**Default**: `ActionEnum::SALE` | getAction(): ?string | setAction(?string action): void |
| `methods` | [`?(Method2[])`](../../doc/models/method-2.md) | Optional | By default the system will try to offer all the availables payment methods from your account. But if you like, you can specify exactly what services you want to use.<br>**Constraints**: *Minimum Items*: `1`, *Unique Items Required* | getMethods(): ?array | setMethods(?array methods): void |
| `amount` | ?(int) | Optional | This is a nested AnyOf case. | getAmount(): ?int | setAmount(?int amount): void |
| `taxAmount` | ?(int) | Optional | This is a nested AnyOf case.<br>**Constraints**: `>= 1`, `<= 999999999` | getTaxAmount(): ?int | setTaxAmount(?int taxAmount): void |
| `secondaryAmount` | ?(int) | Optional | This is a nested AnyOf case.<br>**Constraints**: `>= 0`, `<= 999999999` | getSecondaryAmount(): ?int | setSecondaryAmount(?int secondaryAmount): void |
| `locationId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `contactId` | `?string` | Optional | Contact ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getContactId(): ?string | setContactId(?string contactId): void |
| `saveAccount` | ?(bool) | Optional | This is a nested AnyOf case. | getSaveAccount(): ?bool | setSaveAccount(?bool saveAccount): void |
| `saveAccountTitle` | ?(string) | Optional | This is a nested AnyOf case.<br>**Constraints**: *Maximum Length*: `16` | getSaveAccountTitle(): ?string | setSaveAccountTitle(?string saveAccountTitle): void |
| `title` | ?(string) | Optional | This is a nested AnyOf case.<br>**Constraints**: *Maximum Length*: `16` | getTitle(): ?string | setTitle(?string title): void |
| `achSecCode` | [`?string (AchSecCodeEnum)`](../../doc/models/ach-sec-code-enum.md) | Optional | SEC code for the transaction if it's an ACH transaction<br>**Default**: `AchSecCodeEnum::WEB` | getAchSecCode(): ?string | setAchSecCode(?string achSecCode): void |
| `bankFundedOnlyOverride` | ?(bool) | Optional | This is a nested AnyOf case. | getBankFundedOnlyOverride(): ?bool | setBankFundedOnlyOverride(?bool bankFundedOnlyOverride): void |
| `allowPartialAuthorizationOverride` | ?(bool) | Optional | This is a nested AnyOf case. | getAllowPartialAuthorizationOverride(): ?bool | setAllowPartialAuthorizationOverride(?bool allowPartialAuthorizationOverride): void |
| `autoDeclineCvvOverride` | ?(bool) | Optional | This is a nested AnyOf case. | getAutoDeclineCvvOverride(): ?bool | setAutoDeclineCvvOverride(?bool autoDeclineCvvOverride): void |
| `autoDeclineStreetOverride` | ?(bool) | Optional | This is a nested AnyOf case. | getAutoDeclineStreetOverride(): ?bool | setAutoDeclineStreetOverride(?bool autoDeclineStreetOverride): void |
| `autoDeclineZipOverride` | ?(bool) | Optional | This is a nested AnyOf case. | getAutoDeclineZipOverride(): ?bool | setAutoDeclineZipOverride(?bool autoDeclineZipOverride): void |
| `clientToken` | `string` | Required | A JWT to be used to create the elements.<br><br>> This is a one-time only use token.<br>> Do not store for long term use, it expires after 48 hours. | getClientToken(): string | setClientToken(string clientToken): void |

## Example (as JSON)

```json
{
  "action": "sale",
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "contact_id": "11e95f8ec39de8fbdb0a4f1a",
  "ach_sec_code": "WEB",
  "client_token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c",
  "methods": [
    {
      "type": "cc",
      "product_transaction_id": "product_transaction_id9"
    },
    {
      "type": "ach",
      "product_transaction_id": "product_transaction_id0"
    }
  ],
  "amount": 224,
  "tax_amount": 164,
  "secondary_amount": 78
}
```

