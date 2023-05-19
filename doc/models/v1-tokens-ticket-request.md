
# V1 Tokens Ticket Request

## Structure

`V1TokensTicketRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountHolderName` | `?string` | Optional | Account holder name<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `32` | getAccountHolderName(): ?string | setAccountHolderName(?string accountHolderName): void |
| `accountNumber` | `?string` | Optional | Account number<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `19`, *Pattern*: `^[\d]+$` | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountVaultApiId` | `?string` | Optional | This field can be used to correlate Tokens in our system to data within an outside software integration<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64` | getAccountVaultApiId(): ?string | setAccountVaultApiId(?string accountVaultApiId): void |
| `tokenApiId` | `?string` | Optional | This field can be used to correlate Tokens in our system to data within an outside software integration<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `64` | getTokenApiId(): ?string | setTokenApiId(?string tokenApiId): void |
| `accountvaultC1` | `?string` | Optional | DEPRECATED (Use token_c1 instead)<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128` | getAccountvaultC1(): ?string | setAccountvaultC1(?string accountvaultC1): void |
| `accountvaultC2` | `?string` | Optional | DEPRECATED (Use token_c2 instead)<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128` | getAccountvaultC2(): ?string | setAccountvaultC2(?string accountvaultC2): void |
| `accountvaultC3` | `?string` | Optional | DEPRECATED (Use token_c3 instead)<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128` | getAccountvaultC3(): ?string | setAccountvaultC3(?string accountvaultC3): void |
| `tokenC1` | `?string` | Optional | Custom field 1 for API users to store custom data<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128` | getTokenC1(): ?string | setTokenC1(?string tokenC1): void |
| `tokenC2` | `?string` | Optional | Custom field 2 for API users to store custom data<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128` | getTokenC2(): ?string | setTokenC2(?string tokenC2): void |
| `tokenC3` | `?string` | Optional | Custom field 3 for API users to store custom data<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `128` | getTokenC3(): ?string | setTokenC3(?string tokenC3): void |
| `achSecCode` | [`?string (AchSecCode3Enum)`](../../doc/models/ach-sec-code-3-enum.md) | Optional | SEC code for the account | getAchSecCode(): ?string | setAchSecCode(?string achSecCode): void |
| `billingAddress` | [`?BillingAddress`](../../doc/models/billing-address.md) | Optional | Billing Address Object | getBillingAddress(): ?BillingAddress | setBillingAddress(?BillingAddress billingAddress): void |
| `contactId` | `?string` | Optional | Used to associate the Token with a Contact.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getContactId(): ?string | setContactId(?string contactId): void |
| `customerId` | `?string` | Optional | Used to store a customer identification number.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `50` | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `identityVerification` | [`?IdentityVerification2`](../../doc/models/identity-verification-2.md) | Optional | Identity verification | getIdentityVerification(): ?IdentityVerification2 | setIdentityVerification(?IdentityVerification2 identityVerification): void |
| `locationId` | `string` | Required | A valid Location Id associated with the Contact for this Token<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): string | setLocationId(string locationId): void |
| `previousAccountVaultApiId` | `?string` | Optional | Can be used to pull payment info from a previous token api id.<br>**Constraints**: *Maximum Length*: `64` | getPreviousAccountVaultApiId(): ?string | setPreviousAccountVaultApiId(?string previousAccountVaultApiId): void |
| `previousTokenApiId` | `?string` | Optional | Can be used to pull payment info from a previous token api id.<br>**Constraints**: *Maximum Length*: `64` | getPreviousTokenApiId(): ?string | setPreviousTokenApiId(?string previousTokenApiId): void |
| `previousAccountVaultId` | `?string` | Optional | Can be used to pull payment info from a previous token.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getPreviousAccountVaultId(): ?string | setPreviousAccountVaultId(?string previousAccountVaultId): void |
| `previousTokenId` | `?string` | Optional | Can be used to pull payment info from a previous token.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getPreviousTokenId(): ?string | setPreviousTokenId(?string previousTokenId): void |
| `previousTransactionId` | `?string` | Optional | Can be used to pull payment info from a previous transaction.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getPreviousTransactionId(): ?string | setPreviousTransactionId(?string previousTransactionId): void |
| `termsAgree` | `?bool` | Optional | Terms agreement. | getTermsAgree(): ?bool | setTermsAgree(?bool termsAgree): void |
| `termsAgreeIp` | `?string` | Optional | The ip address of the client that agreed to terms. | getTermsAgreeIp(): ?string | setTermsAgreeIp(?string termsAgreeIp): void |
| `title` | `?string` | Optional | Used to describe the Token for easier identification within our UI.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `16` | getTitle(): ?string | setTitle(?string title): void |
| `joi` | [`?Joi3`](../../doc/models/joi-3.md) | Optional | - | getJoi(): ?Joi3 | setJoi(?Joi3 joi): void |
| `ticket` | `string` | Required | A valid ticket that was created to store the token.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `36` | getTicket(): string | setTicket(string ticket): void |

## Example (as JSON)

```json
{
  "account_holder_name": "John Smith",
  "account_number": "545454545454545",
  "account_vault_api_id": "accountvaultabcd",
  "token_api_id": "tokenabcd",
  "accountvault_c1": "accountvault custom 1",
  "accountvault_c2": "accountvault custom 2",
  "accountvault_c3": "accountvault custom 3",
  "token_c1": "token custom 1",
  "token_c2": "token custom 2",
  "token_c3": "token custom 3",
  "ach_sec_code": "WEB",
  "contact_id": "11e95f8ec39de8fbdb0a4f1a",
  "customer_id": "123456",
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "previous_account_vault_api_id": "previousaccountvault123456",
  "previous_token_api_id": "previousaccountvault123456",
  "previous_account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
  "previous_token_id": "11e95f8ec39de8fbdb0a4f1a",
  "previous_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "terms_agree": true,
  "terms_agree_ip": "192.168.0.10",
  "title": "Test CC Account",
  "ticket": "12345678"
}
```

