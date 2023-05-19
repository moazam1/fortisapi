
# Cc Product Transaction

Cc Product Transaction Information on `expand`

## Structure

`CcProductTransaction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `processorVersion` | `?string` | Optional | Processor Version | getProcessorVersion(): ?string | setProcessorVersion(?string processorVersion): void |
| `industryType` | [`?string (IndustryTypeEnum)`](../../doc/models/industry-type-enum.md) | Optional | Industry Type<br>**Constraints**: *Maximum Length*: `45` | getIndustryType(): ?string | setIndustryType(?string industryType): void |
| `title` | `string` | Required | Title<br>**Constraints**: *Maximum Length*: `64` | getTitle(): string | setTitle(string title): void |
| `paymentMethod` | [`string (PaymentMethodEnum)`](../../doc/models/payment-method-enum.md) | Required | Payment method | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |
| `processor` | [`?string (ProcessorEnum)`](../../doc/models/processor-enum.md) | Optional | Processor | getProcessor(): ?string | setProcessor(?string processor): void |
| `mcc` | `?string` | Optional | MCC<br>**Constraints**: *Maximum Length*: `4`, *Pattern*: `^\d+$` | getMcc(): ?string | setMcc(?string mcc): void |
| `taxSurchargeConfig` | [`?int (TaxSurchargeConfigEnum)`](../../doc/models/tax-surcharge-config-enum.md) | Optional | Tax Surcharge Config<br>**Default**: `TaxSurchargeConfigEnum::ENUM_2` | getTaxSurchargeConfig(): ?int | setTaxSurchargeConfig(?int taxSurchargeConfig): void |
| `terminalId` | `?string` | Optional | Terminal ID<br>**Constraints**: *Maximum Length*: `24` | getTerminalId(): ?string | setTerminalId(?string terminalId): void |
| `partner` | [`?string (PartnerEnum)`](../../doc/models/partner-enum.md) | Optional | Partner<br>**Constraints**: *Maximum Length*: `24` | getPartner(): ?string | setPartner(?string partner): void |
| `productAchPvStoreId` | `?string` | Optional | Product Ach Pv Store ID | getProductAchPvStoreId(): ?string | setProductAchPvStoreId(?string productAchPvStoreId): void |
| `invoiceAdjustmentTitle` | `?string` | Optional | Invoice Adjustment Title | getInvoiceAdjustmentTitle(): ?string | setInvoiceAdjustmentTitle(?string invoiceAdjustmentTitle): void |
| `locationId` | `string` | Required | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): string | setLocationId(string locationId): void |
| `locationApiId` | `?string` | Optional | Location Api ID | getLocationApiId(): ?string | setLocationApiId(?string locationApiId): void |
| `billingLocationApiId` | `?string` | Optional | Billing Location API ID | getBillingLocationApiId(): ?string | setBillingLocationApiId(?string billingLocationApiId): void |
| `portfolioId` | `?string` | Optional | Portfolio ID | getPortfolioId(): ?string | setPortfolioId(?string portfolioId): void |
| `portfolioValidationRule` | `?string` | Optional | Product Validation Rule | getPortfolioValidationRule(): ?string | setPortfolioValidationRule(?string portfolioValidationRule): void |
| `subProcessor` | `?string` | Optional | Sub Processor<br>**Constraints**: *Maximum Length*: `48` | getSubProcessor(): ?string | setSubProcessor(?string subProcessor): void |
| `surcharge` | `?array` | Optional | Surcharge | getSurcharge(): ?array | setSurcharge(?array surcharge): void |
| `processorData` | `?array` | Optional | - | getProcessorData(): ?array | setProcessorData(?array processorData): void |
| `vtClerkNumber` | `?bool` | Optional | Vt Clerk Number | getVtClerkNumber(): ?bool | setVtClerkNumber(?bool vtClerkNumber): void |
| `vtBillingPhone` | `?bool` | Optional | Card Type JCB | getVtBillingPhone(): ?bool | setVtBillingPhone(?bool vtBillingPhone): void |
| `vtEnableTip` | `?bool` | Optional | VT Enable Tip | getVtEnableTip(): ?bool | setVtEnableTip(?bool vtEnableTip): void |
| `achAllowDebit` | `?bool` | Optional | Ach Allow Debit | getAchAllowDebit(): ?bool | setAchAllowDebit(?bool achAllowDebit): void |
| `achAllowCredit` | `?bool` | Optional | Ach Allow Credit | getAchAllowCredit(): ?bool | setAchAllowCredit(?bool achAllowCredit): void |
| `achAllowRefund` | `?bool` | Optional | Ach Allow Refund | getAchAllowRefund(): ?bool | setAchAllowRefund(?bool achAllowRefund): void |
| `vtCvv` | `?bool` | Optional | VT CVV | getVtCvv(): ?bool | setVtCvv(?bool vtCvv): void |
| `vtStreet` | `?bool` | Optional | VT Street | getVtStreet(): ?bool | setVtStreet(?bool vtStreet): void |
| `vtZip` | `?bool` | Optional | VT Zip | getVtZip(): ?bool | setVtZip(?bool vtZip): void |
| `vtOrderNum` | `?bool` | Optional | VT Order Num | getVtOrderNum(): ?bool | setVtOrderNum(?bool vtOrderNum): void |
| `vtEnable` | `?bool` | Optional | VT Enable | getVtEnable(): ?bool | setVtEnable(?bool vtEnable): void |
| `receiptShowContactName` | `?bool` | Optional | Receipt Show Contact Name | getReceiptShowContactName(): ?bool | setReceiptShowContactName(?bool receiptShowContactName): void |
| `displayAvs` | `?bool` | Optional | Display Avs | getDisplayAvs(): ?bool | setDisplayAvs(?bool displayAvs): void |
| `cardTypeVisa` | `?bool` | Optional | Card Type Visa | getCardTypeVisa(): ?bool | setCardTypeVisa(?bool cardTypeVisa): void |
| `cardTypeMc` | `?bool` | Optional | Card Type Mc | getCardTypeMc(): ?bool | setCardTypeMc(?bool cardTypeMc): void |
| `cardTypeDisc` | `?bool` | Optional | Card Type Disc | getCardTypeDisc(): ?bool | setCardTypeDisc(?bool cardTypeDisc): void |
| `cardTypeAmex` | `?bool` | Optional | Card Type Amex | getCardTypeAmex(): ?bool | setCardTypeAmex(?bool cardTypeAmex): void |
| `cardTypeDiners` | `?bool` | Optional | Card Type Dinners | getCardTypeDiners(): ?bool | setCardTypeDiners(?bool cardTypeDiners): void |
| `cardTypeJcb` | `?bool` | Optional | - | getCardTypeJcb(): ?bool | setCardTypeJcb(?bool cardTypeJcb): void |
| `invoiceLocation` | `?bool` | Optional | Invoice Location | getInvoiceLocation(): ?bool | setInvoiceLocation(?bool invoiceLocation): void |
| `allowPartialAuthorization` | `?bool` | Optional | Allow Partial Authorization | getAllowPartialAuthorization(): ?bool | setAllowPartialAuthorization(?bool allowPartialAuthorization): void |
| `allowRecurringPartialAuthorization` | `?bool` | Optional | Allow Recurring Partial Authorization | getAllowRecurringPartialAuthorization(): ?bool | setAllowRecurringPartialAuthorization(?bool allowRecurringPartialAuthorization): void |
| `autoDeclineCvv` | `?bool` | Optional | Auto Decline Cvv | getAutoDeclineCvv(): ?bool | setAutoDeclineCvv(?bool autoDeclineCvv): void |
| `autoDeclineStreet` | `?bool` | Optional | Auto Decline Street | getAutoDeclineStreet(): ?bool | setAutoDeclineStreet(?bool autoDeclineStreet): void |
| `autoDeclineZip` | `?bool` | Optional | Auto Decline ZIP | getAutoDeclineZip(): ?bool | setAutoDeclineZip(?bool autoDeclineZip): void |
| `splitPaymentsAllow` | `?bool` | Optional | Split Payments Allow | getSplitPaymentsAllow(): ?bool | setSplitPaymentsAllow(?bool splitPaymentsAllow): void |
| `vtShowCustomFields` | `?bool` | Optional | Vt Show Custom Fields | getVtShowCustomFields(): ?bool | setVtShowCustomFields(?bool vtShowCustomFields): void |
| `receiptShowCustomFields` | `?bool` | Optional | Receipt Show Custom Fields | getReceiptShowCustomFields(): ?bool | setReceiptShowCustomFields(?bool receiptShowCustomFields): void |
| `vtOverrideSalesTaxAllowed` | `?bool` | Optional | Vt Override Sales Tax Allowed | getVtOverrideSalesTaxAllowed(): ?bool | setVtOverrideSalesTaxAllowed(?bool vtOverrideSalesTaxAllowed): void |
| `vtEnableSalesTax` | `?bool` | Optional | Vt Enable Sales Tax | getVtEnableSalesTax(): ?bool | setVtEnableSalesTax(?bool vtEnableSalesTax): void |
| `vtRequireZip` | `?bool` | Optional | Vt Require ZIP | getVtRequireZip(): ?bool | setVtRequireZip(?bool vtRequireZip): void |
| `vtRequireStreet` | `?bool` | Optional | Vt Require Street | getVtRequireStreet(): ?bool | setVtRequireStreet(?bool vtRequireStreet): void |
| `autoDeclineCavv` | `?bool` | Optional | Auto Decline Cavv | getAutoDeclineCavv(): ?bool | setAutoDeclineCavv(?bool autoDeclineCavv): void |
| `merchantId` | `?string` | Optional | Merchant ID<br>**Constraints**: *Maximum Length*: `24` | getMerchantId(): ?string | setMerchantId(?string merchantId): void |
| `receiptHeader` | `?string` | Optional | Receipt Header<br>**Constraints**: *Maximum Length*: `255` | getReceiptHeader(): ?string | setReceiptHeader(?string receiptHeader): void |
| `receiptFooter` | `?string` | Optional | Receipt Footer<br>**Constraints**: *Maximum Length*: `255` | getReceiptFooter(): ?string | setReceiptFooter(?string receiptFooter): void |
| `receiptAddAccountAboveSignature` | `?string` | Optional | Receipt Add Account Above Signature<br>**Constraints**: *Maximum Length*: `1032` | getReceiptAddAccountAboveSignature(): ?string | setReceiptAddAccountAboveSignature(?string receiptAddAccountAboveSignature): void |
| `receiptAddRecurringAboveSignature` | `?string` | Optional | Receipt Add Recurring Above Signature<br>**Constraints**: *Maximum Length*: `1032` | getReceiptAddRecurringAboveSignature(): ?string | setReceiptAddRecurringAboveSignature(?string receiptAddRecurringAboveSignature): void |
| `receiptVtAboveSignature` | `?string` | Optional | Receipt VT Above Signature<br>**Constraints**: *Maximum Length*: `1032` | getReceiptVtAboveSignature(): ?string | setReceiptVtAboveSignature(?string receiptVtAboveSignature): void |
| `defaultTransactionType` | [`?string (DefaultTransactionTypeEnum)`](../../doc/models/default-transaction-type-enum.md) | Optional | Default Transaction Type | getDefaultTransactionType(): ?string | setDefaultTransactionType(?string defaultTransactionType): void |
| `username` | `?string` | Optional | Username<br>**Constraints**: *Maximum Length*: `512` | getUsername(): ?string | setUsername(?string username): void |
| `password` | `?string` | Optional | Passowrd<br>**Constraints**: *Maximum Length*: `512` | getPassword(): ?string | setPassword(?string password): void |
| `currentBatch` | `?float` | Optional | Current Batch<br>**Default**: `1`<br>**Constraints**: `>= 1`, `<= 9999` | getCurrentBatch(): ?float | setCurrentBatch(?float currentBatch): void |
| `dupCheckPerBatch` | `?string` | Optional | Dup Check Per Batch<br>**Constraints**: *Maximum Length*: `500` | getDupCheckPerBatch(): ?string | setDupCheckPerBatch(?string dupCheckPerBatch): void |
| `agentCode` | `?string` | Optional | Agent Code<br>**Constraints**: *Maximum Length*: `16`, *Pattern*: `^[\w\-]+$` | getAgentCode(): ?string | setAgentCode(?string agentCode): void |
| `paylinkAllow` | `?bool` | Optional | Paylink Allow | getPaylinkAllow(): ?bool | setPaylinkAllow(?bool paylinkAllow): void |
| `quickInvoiceAllow` | `?bool` | Optional | Quick Invoice Allow | getQuickInvoiceAllow(): ?bool | setQuickInvoiceAllow(?bool quickInvoiceAllow): void |
| `level3Allow` | `?bool` | Optional | Level3 Allow | getLevel3Allow(): ?bool | setLevel3Allow(?bool level3Allow): void |
| `payfacEnable` | `?bool` | Optional | Payfac Enable | getPayfacEnable(): ?bool | setPayfacEnable(?bool payfacEnable): void |
| `salesOfficeId` | `?string` | Optional | Sales Office ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getSalesOfficeId(): ?string | setSalesOfficeId(?string salesOfficeId): void |
| `hostedPaymentPageMaxAllowed` | `?float` | Optional | Hosted Payment Page Max Allowed<br>**Default**: `5`<br>**Constraints**: `>= 1`, `<= 999` | getHostedPaymentPageMaxAllowed(): ?float | setHostedPaymentPageMaxAllowed(?float hostedPaymentPageMaxAllowed): void |
| `hostedPaymentPageAllow` | `?bool` | Optional | Hosted Payment Page Allow | getHostedPaymentPageAllow(): ?bool | setHostedPaymentPageAllow(?bool hostedPaymentPageAllow): void |
| `surchargeId` | `?string` | Optional | Surcharge ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getSurchargeId(): ?string | setSurchargeId(?string surchargeId): void |
| `level3Default` | `?array` | Optional | Level3 Default | getLevel3Default(): ?array | setLevel3Default(?array level3Default): void |
| `cauSubscribeTypeId` | [`?int (CauSubscribeTypeIdEnum)`](../../doc/models/cau-subscribe-type-id-enum.md) | Optional | Cau Subscribe Type ID | getCauSubscribeTypeId(): ?int | setCauSubscribeTypeId(?int cauSubscribeTypeId): void |
| `cauAccountNumber` | `?string` | Optional | Cau Account Number<br>**Constraints**: *Minimum Length*: `32`, *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-]+$` | getCauAccountNumber(): ?string | setCauAccountNumber(?string cauAccountNumber): void |
| `locationBillingAccountId` | `?string` | Optional | Location Billing Account ID | getLocationBillingAccountId(): ?string | setLocationBillingAccountId(?string locationBillingAccountId): void |
| `productBillingGroupId` | `?string` | Optional | Product Billing Group ID | getProductBillingGroupId(): ?string | setProductBillingGroupId(?string productBillingGroupId): void |
| `accountNumber` | `?string` | Optional | Account number<br>**Constraints**: *Maximum Length*: `32`, *Pattern*: `^[a-zA-Z0-9\-_]+$` | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `runAvsOnAccountvaultCreate` | `?bool` | Optional | Run Avs On Accountvault Create | getRunAvsOnAccountvaultCreate(): ?bool | setRunAvsOnAccountvaultCreate(?bool runAvsOnAccountvaultCreate): void |
| `accountvaultExpireNotificationEmailEnable` | `?bool` | Optional | Accountvault Expire Notification Email Enable | getAccountvaultExpireNotificationEmailEnable(): ?bool | setAccountvaultExpireNotificationEmailEnable(?bool accountvaultExpireNotificationEmailEnable): void |
| `debitAllowVoid` | `?bool` | Optional | Debit Allow Void | getDebitAllowVoid(): ?bool | setDebitAllowVoid(?bool debitAllowVoid): void |
| `quickInvoiceTextToPay` | `?bool` | Optional | Quick Invoice Text To Pay | getQuickInvoiceTextToPay(): ?bool | setQuickInvoiceTextToPay(?bool quickInvoiceTextToPay): void |
| `authenticationCode` | `?string` | Optional | Authentication Code | getAuthenticationCode(): ?string | setAuthenticationCode(?string authenticationCode): void |
| `smsEnable` | `?bool` | Optional | SMS Enable | getSmsEnable(): ?bool | setSmsEnable(?bool smsEnable): void |
| `vtShowCurrency` | `?bool` | Optional | Vt Show Currency | getVtShowCurrency(): ?bool | setVtShowCurrency(?bool vtShowCurrency): void |
| `receiptShowCurrency` | `?bool` | Optional | Receipt Show Currency | getReceiptShowCurrency(): ?bool | setReceiptShowCurrency(?bool receiptShowCurrency): void |
| `allowBlindRefund` | `?bool` | Optional | Allow Blind Refund | getAllowBlindRefund(): ?bool | setAllowBlindRefund(?bool allowBlindRefund): void |
| `vtShowCompanyName` | `?bool` | Optional | Vt Show Company Name | getVtShowCompanyName(): ?bool | setVtShowCompanyName(?bool vtShowCompanyName): void |
| `receiptShowCompanyName` | `?bool` | Optional | Receipt Show Company Name | getReceiptShowCompanyName(): ?bool | setReceiptShowCompanyName(?bool receiptShowCompanyName): void |
| `bankFundedOnly` | `?bool` | Optional | Bank Funded Only | getBankFundedOnly(): ?bool | setBankFundedOnly(?bool bankFundedOnly): void |
| `id` | `string` | Required | User Reports ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `receiptLogo` | `?string` | Optional | Receipt Logo | getReceiptLogo(): ?string | setReceiptLogo(?string receiptLogo): void |
| `active` | `?bool` | Optional | Active | getActive(): ?bool | setActive(?bool active): void |
| `tz` | `?string` | Optional | TZ | getTz(): ?string | setTz(?string tz): void |
| `currencyCode` | `?float` | Optional | Currency Code<br>**Default**: `840` | getCurrencyCode(): ?float | setCurrencyCode(?float currencyCode): void |
| `currentStan` | `?float` | Optional | Current Stan<br>**Default**: `1` | getCurrentStan(): ?float | setCurrentStan(?float currentStan): void |
| `createdTs` | `?int` | Optional | Created Time Stamp | getCreatedTs(): ?int | setCreatedTs(?int createdTs): void |
| `modifiedTs` | `?int` | Optional | Modified Time Stamp | getModifiedTs(): ?int | setModifiedTs(?int modifiedTs): void |
| `createdUserId` | `?string` | Optional | User ID Created the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCreatedUserId(): ?string | setCreatedUserId(?string createdUserId): void |
| `modifiedUserId` | `?string` | Optional | Last User ID that updated the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getModifiedUserId(): ?string | setModifiedUserId(?string modifiedUserId): void |

## Example (as JSON)

```json
{
  "processor_version": "1_0_0",
  "title": "My terminal",
  "payment_method": "cc",
  "processor": "zgate",
  "mcc": "1111",
  "tax_surcharge_config": 2,
  "partner": "standalone",
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "vt_clerk_number": true,
  "vt_billing_phone": true,
  "vt_enable_tip": true,
  "ach_allow_debit": true,
  "ach_allow_credit": true,
  "ach_allow_refund": true,
  "vt_cvv": true,
  "vt_street": true,
  "vt_zip": true,
  "vt_order_num": true,
  "vt_enable": true,
  "receipt_show_contact_name": true,
  "display_avs": true,
  "card_type_visa": true,
  "card_type_mc": true,
  "card_type_disc": true,
  "card_type_amex": true,
  "card_type_diners": true,
  "card_type_jcb": true,
  "invoice_location": true,
  "allow_partial_authorization": true,
  "allow_recurring_partial_authorization": true,
  "auto_decline_cvv": true,
  "auto_decline_street": true,
  "auto_decline_zip": true,
  "split_payments_allow": true,
  "vt_show_custom_fields": true,
  "receipt_show_custom_fields": true,
  "vt_override_sales_tax_allowed": true,
  "vt_enable_sales_tax": true,
  "vt_require_zip": true,
  "vt_require_street": true,
  "auto_decline_cavv": true,
  "current_batch": 34,
  "paylink_allow": false,
  "quick_invoice_allow": false,
  "level3_allow": false,
  "payfac_enable": false,
  "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
  "hosted_payment_page_max_allowed": 5,
  "hosted_payment_page_allow": false,
  "surcharge_id": "11e95f8ec39de8fbdb0a4f1a",
  "level3_default": {},
  "cau_subscribe_type_id": 0,
  "location_billing_account_id": "11eb88b873980c64a21e5fd2",
  "product_billing_group_id": "nofees",
  "account_number": "12345678",
  "run_avs_on_accountvault_create": false,
  "accountvault_expire_notification_email_enable": false,
  "debit_allow_void": false,
  "quick_invoice_text_to_pay": false,
  "sms_enable": false,
  "vt_show_currency": true,
  "receipt_show_currency": false,
  "allow_blind_refund": false,
  "vt_show_company_name": false,
  "receipt_show_company_name": false,
  "bank_funded_only": false,
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "active": true,
  "currency_code": 840,
  "current_stan": 1,
  "created_ts": 1422040992,
  "modified_ts": 1422040992,
  "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "modified_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "industry_type": "retail"
}
```

