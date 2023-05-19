
# Domain

Domain Information on `expand`

## Structure

`Domain`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `string` | Required | URL<br>**Constraints**: *Maximum Length*: `64`, *Pattern*: `^[a-zA-Z0-9]+([\-\.]{1}[a-zA-Z0-9]+)*\.[a-zA-Z]{2,5}$` | getUrl(): string | setUrl(string url): void |
| `title` | `string` | Required | Domain Name<br>**Constraints**: *Maximum Length*: `64` | getTitle(): string | setTitle(string title): void |
| `logo` | `?string` | Optional | Logo<br>**Constraints**: *Maximum Length*: `64` | getLogo(): ?string | setLogo(?string logo): void |
| `supportEmail` | `?string` | Optional | Support Email<br>**Constraints**: *Maximum Length*: `64` | getSupportEmail(): ?string | setSupportEmail(?string supportEmail): void |
| `allowContactSignup` | `bool` | Required | Allow Contact Signup. | getAllowContactSignup(): bool | setAllowContactSignup(bool allowContactSignup): void |
| `allowContactRegistration` | `bool` | Required | Allow Contact Registration. | getAllowContactRegistration(): bool | setAllowContactRegistration(bool allowContactRegistration): void |
| `allowContactLogin` | `bool` | Required | Allow Contact Login. | getAllowContactLogin(): bool | setAllowContactLogin(bool allowContactLogin): void |
| `registrationFields` | [`?(string[]) (RegistrationFieldEnum)`](../../doc/models/registration-field-enum.md) | Optional | Registration Fields | getRegistrationFields(): ?array | setRegistrationFields(?array registrationFields): void |
| `companyName` | `?string` | Optional | Company Name.<br>**Constraints**: *Maximum Length*: `32` | getCompanyName(): ?string | setCompanyName(?string companyName): void |
| `navColor` | `?string` | Optional | Nav Color.<br>**Constraints**: *Maximum Length*: `7` | getNavColor(): ?string | setNavColor(?string navColor): void |
| `buttonPrimaryColor` | `?string` | Optional | Button Primary Color.<br>**Constraints**: *Maximum Length*: `7` | getButtonPrimaryColor(): ?string | setButtonPrimaryColor(?string buttonPrimaryColor): void |
| `logoBackgroundColor` | `?string` | Optional | Logo Background Color.<br>**Constraints**: *Maximum Length*: `7` | getLogoBackgroundColor(): ?string | setLogoBackgroundColor(?string logoBackgroundColor): void |
| `iconBackgroundColor` | `?string` | Optional | Icon Background Color.<br>**Constraints**: *Maximum Length*: `7` | getIconBackgroundColor(): ?string | setIconBackgroundColor(?string iconBackgroundColor): void |
| `menuTextBackgroundColor` | `?string` | Optional | Menu Text Background Color<br>**Constraints**: *Maximum Length*: `7` | getMenuTextBackgroundColor(): ?string | setMenuTextBackgroundColor(?string menuTextBackgroundColor): void |
| `menuTextColor` | `?string` | Optional | Menu Text Color.<br>**Constraints**: *Maximum Length*: `7` | getMenuTextColor(): ?string | setMenuTextColor(?string menuTextColor): void |
| `rightMenuBackgroundColor` | `?string` | Optional | Right Menu Background Color.<br>**Constraints**: *Maximum Length*: `7` | getRightMenuBackgroundColor(): ?string | setRightMenuBackgroundColor(?string rightMenuBackgroundColor): void |
| `rightMenuTextColor` | `?string` | Optional | Right Menu Text Color.<br>**Constraints**: *Maximum Length*: `7` | getRightMenuTextColor(): ?string | setRightMenuTextColor(?string rightMenuTextColor): void |
| `buttonPrimaryTextColor` | `?string` | Optional | Button Primary Text Color.<br>**Constraints**: *Maximum Length*: `7` | getButtonPrimaryTextColor(): ?string | setButtonPrimaryTextColor(?string buttonPrimaryTextColor): void |
| `navLogo` | `?string` | Optional | Nav Logo.<br>**Constraints**: *Maximum Length*: `256` | getNavLogo(): ?string | setNavLogo(?string navLogo): void |
| `favIcon` | `?string` | Optional | Fav Icon.<br>**Constraints**: *Maximum Length*: `256` | getFavIcon(): ?string | setFavIcon(?string favIcon): void |
| `aesKey` | `?string` | Optional | Aes Key.<br>**Constraints**: *Maximum Length*: `255` | getAesKey(): ?string | setAesKey(?string aesKey): void |
| `helpText` | `?string` | Optional | Help Text. | getHelpText(): ?string | setHelpText(?string helpText): void |
| `emailReplyTo` | `?string` | Optional | Email Reply To. | getEmailReplyTo(): ?string | setEmailReplyTo(?string emailReplyTo): void |
| `email` | `?string` | Optional | Email. | getEmail(): ?string | setEmail(?string email): void |
| `customJavascript` | `?string` | Optional | Custom Javascript.<br>**Constraints**: *Maximum Length*: `2048`, *Pattern*: `^<script\b[^>]*>([\s\S]*?)<\/script>$` | getCustomJavascript(): ?string | setCustomJavascript(?string customJavascript): void |
| `customTheme` | `?string` | Optional | Custom Theme<br>**Constraints**: *Maximum Length*: `48` | getCustomTheme(): ?string | setCustomTheme(?string customTheme): void |
| `customCss` | `?string` | Optional | Custom CSS<br>**Constraints**: *Maximum Length*: `2048` | getCustomCss(): ?string | setCustomCss(?string customCss): void |
| `contactUserDefaultEntryPage` | [`?string (ContactUserDefaultEntryPageEnum)`](../../doc/models/contact-user-default-entry-page-enum.md) | Optional | Contact User Default Entry Page | getContactUserDefaultEntryPage(): ?string | setContactUserDefaultEntryPage(?string contactUserDefaultEntryPage): void |
| `contactUserDefaultAuthRoles` | `?(array[])` | Optional | Contact User Default Auth Role | getContactUserDefaultAuthRoles(): ?array | setContactUserDefaultAuthRoles(?array contactUserDefaultAuthRoles): void |
| `id` | `string` | Required | Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `createdTs` | `int` | Required | Created Time Stamp | getCreatedTs(): int | setCreatedTs(int createdTs): void |
| `modifiedTs` | `int` | Required | Modified Time Stamp | getModifiedTs(): int | setModifiedTs(int modifiedTs): void |

## Example (as JSON)

```json
{
  "url": "fortispayrbyn9y.sandbox.zeamster.com",
  "title": "Test Brand Domain Title 2",
  "support_email": "email@domain.com",
  "allow_contact_signup": true,
  "allow_contact_registration": true,
  "allow_contact_login": true,
  "registration_fields": [
    "id",
    "email"
  ],
  "email_reply_to": "email@domain.com",
  "email": "email@domain.com",
  "contact_user_default_entry_page": "dashboard",
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "created_ts": 1422040992,
  "modified_ts": 1422040992,
  "logo": "logo4",
  "company_name": "company_name6",
  "nav_color": "nav_color2"
}
```

