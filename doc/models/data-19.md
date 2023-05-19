
# Data 19

## Structure

`Data19`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `issuerBankName` | `string` | Required | The Issuer Bank name for the BIN<br>**Constraints**: *Maximum Length*: `60` | getIssuerBankName(): string | setIssuerBankName(string issuerBankName): void |
| `countryCode` | `string` | Required | VISA - Three character alpha country code<br>MC - Three character alpha country code<br>Maestro - Three character alpha country code<br>Amex - Space Filled<br>Discover - Three character alpha country code or spaces when Discover doesn't share issuer country.<br>**Constraints**: *Maximum Length*: `2` | getCountryCode(): string | setCountryCode(string countryCode): void |
| `detailCardProduct` | `string` | Required | V - Visa<br>M - MasterCard<br>A - American Express<br>D - Discover<br>N - PIN Only (Non-Visa/MasterCard/AMEX/Discover<br>**Constraints**: *Maximum Length*: `1` | getDetailCardProduct(): string | setDetailCardProduct(string detailCardProduct): void |
| `detailCardIndicator` | `string` | Required | Left justified, Space filled<br>**Constraints**: *Maximum Length*: `2` | getDetailCardIndicator(): string | setDetailCardIndicator(string detailCardIndicator): void |
| `fsaIndicator` | `string` | Required | Left justified, Space filled<br>**Constraints**: *Maximum Length*: `1` | getFsaIndicator(): string | setFsaIndicator(string fsaIndicator): void |
| `prepaidIndicator` | `string` | Required | P = Prepaid Card<br>Default: Space filled<br>**Constraints**: *Maximum Length*: `1` | getPrepaidIndicator(): string | setPrepaidIndicator(string prepaidIndicator): void |
| `productId` | `string` | Required | P = Prepaid Card<br>Default: Space filled<br>**Constraints**: *Maximum Length*: `3` | getProductId(): string | setProductId(string productId): void |
| `regulatorIndicator` | `string` | Required | P = Prepaid Card<br>Default: Space filled<br>**Constraints**: *Maximum Length*: `1` | getRegulatorIndicator(): string | setRegulatorIndicator(string regulatorIndicator): void |
| `visaProductSubType` | `?string` | Optional | This is used to identify product sub-types, i.e. further classification of product.<br>**Constraints**: *Maximum Length*: `2` | getVisaProductSubType(): ?string | setVisaProductSubType(?string visaProductSubType): void |
| `visaLargeTicketIndicator` | `?string` | Optional | L = Visa Large Ticket.<br>Default: Space filled<br>**Constraints**: *Maximum Length*: `1` | getVisaLargeTicketIndicator(): ?string | setVisaLargeTicketIndicator(?string visaLargeTicketIndicator): void |
| `accountFundSource` | `string` | Required | For Visa, MasterCard, and Discover.  Identifies the source of the funds associated with the primary account for the card.<br>**Constraints**: *Maximum Length*: `1` | getAccountFundSource(): string | setAccountFundSource(string accountFundSource): void |
| `cardClass` | `?string` | Optional | Categorizes the BIN as a Business card, Corporate T&E card, Purchase card or Consumer card. Assists the POS device with prompting decisions – to collect addenda or not.  Visa, MasterCard and Discover only.<br>**Constraints**: *Maximum Length*: `1` | getCardClass(): ?string | setCardClass(?string cardClass): void |
| `tokenInd` | `?string` | Optional | Token Indicator values:<br>Y = Token BIN<br>Default: Space filled<br>VISA, MC, and Discover Only<br>**Constraints**: *Maximum Length*: `1` | getTokenInd(): ?string | setTokenInd(?string tokenInd): void |
| `issuingNetwork` | `?string` | Optional | For Discover card types<br>00 - Discover<br>01 - Diners<br>02 - JCB (Japanese Credit Bank)<br>03 - CUP (China Union Pay)<br>04 PayPal<br>**Constraints**: *Maximum Length*: `2` | getIssuingNetwork(): ?string | setIssuingNetwork(?string issuingNetwork): void |

## Example (as JSON)

```json
{
  "issuer_bank_name": "Cartasi S.P.A.",
  "country_code": "US",
  "detail_card_product": "V",
  "detail_card_indicator": "X",
  "fsa_indicator": "F",
  "prepaid_indicator": "P",
  "product_id": "G",
  "regulator_indicator": "N",
  "account_fund_source": "C",
  "card_class": "B",
  "visa_product_sub_type": "visa_product_sub_type6",
  "visa_large_ticket_indicator": "visa_large_ticket_indicator4",
  "token_ind": "token_ind0",
  "issuing_network": "issuing_network8"
}
```

