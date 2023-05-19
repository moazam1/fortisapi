
# Data 10

## Structure

`Data10`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `title` | `string` | Required | Title<br>**Constraints**: *Maximum Length*: `64` | getTitle(): string | setTitle(string title): void |
| `ccProductTransactionId` | `?string` | Optional | Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCcProductTransactionId(): ?string | setCcProductTransactionId(?string ccProductTransactionId): void |
| `achProductTransactionId` | `?string` | Optional | ACH Product Transaction Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getAchProductTransactionId(): ?string | setAchProductTransactionId(?string achProductTransactionId): void |
| `dueDate` | `string` | Required | Due Date, Format: Y-m-d<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getDueDate(): string | setDueDate(string dueDate): void |
| `itemList` | [`ItemList[]`](../../doc/models/item-list.md) | Required | Item List<br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `99`, *Unique Items Required* | getItemList(): array | setItemList(array itemList): void |
| `allowOverpayment` | `?bool` | Optional | Allow Overpayment. | getAllowOverpayment(): ?bool | setAllowOverpayment(?bool allowOverpayment): void |
| `bankFundedOnlyOverride` | `?bool` | Optional | Bank Funded Only override | getBankFundedOnlyOverride(): ?bool | setBankFundedOnlyOverride(?bool bankFundedOnlyOverride): void |
| `email` | `?string` | Optional | Email<br>**Constraints**: *Maximum Length*: `128` | getEmail(): ?string | setEmail(?string email): void |
| `contactId` | `?string` | Optional | Contact ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getContactId(): ?string | setContactId(?string contactId): void |
| `contactApiId` | `?string` | Optional | Contact API Id<br>**Constraints**: *Maximum Length*: `64` | getContactApiId(): ?string | setContactApiId(?string contactApiId): void |
| `quickInvoiceApiId` | `?string` | Optional | Quick Invoice API Id<br>**Constraints**: *Maximum Length*: `64` | getQuickInvoiceApiId(): ?string | setQuickInvoiceApiId(?string quickInvoiceApiId): void |
| `customerId` | `?string` | Optional | Customer Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `expireDate` | `?string` | Optional | Expire Date.<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getExpireDate(): ?string | setExpireDate(?string expireDate): void |
| `allowPartialPay` | `?bool` | Optional | Allow partial pay | getAllowPartialPay(): ?bool | setAllowPartialPay(?bool allowPartialPay): void |
| `attachFilesToEmail` | `?bool` | Optional | Attach Files to Email | getAttachFilesToEmail(): ?bool | setAttachFilesToEmail(?bool attachFilesToEmail): void |
| `sendEmail` | `?bool` | Optional | Send Email | getSendEmail(): ?bool | setSendEmail(?bool sendEmail): void |
| `invoiceNumber` | `?string` | Optional | Invoice number<br>**Constraints**: *Maximum Length*: `64` | getInvoiceNumber(): ?string | setInvoiceNumber(?string invoiceNumber): void |
| `itemHeader` | `?string` | Optional | Item Header<br>**Constraints**: *Maximum Length*: `250` | getItemHeader(): ?string | setItemHeader(?string itemHeader): void |
| `itemFooter` | `?string` | Optional | Item footer<br>**Constraints**: *Maximum Length*: `250` | getItemFooter(): ?string | setItemFooter(?string itemFooter): void |
| `amountDue` | `?float` | Optional | Amount Due | getAmountDue(): ?float | setAmountDue(?float amountDue): void |
| `notificationEmail` | `?string` | Optional | Notification email<br>**Constraints**: *Maximum Length*: `640` | getNotificationEmail(): ?string | setNotificationEmail(?string notificationEmail): void |
| `statusId` | [`?int (StatusIdEnum)`](../../doc/models/status-id-enum.md) | Optional | (DEPRECATED) Status Id | getStatusId(): ?int | setStatusId(?int statusId): void |
| `statusCode` | [`?int (StatusCodeEnum)`](../../doc/models/status-code-enum.md) | Optional | Status Code | getStatusCode(): ?int | setStatusCode(?int statusCode): void |
| `note` | `?string` | Optional | Note<br>**Constraints**: *Maximum Length*: `200` | getNote(): ?string | setNote(?string note): void |
| `notificationDaysBeforeDueDate` | `?int` | Optional | Notification days before due date<br>**Constraints**: `>= 0`, `<= 99` | getNotificationDaysBeforeDueDate(): ?int | setNotificationDaysBeforeDueDate(?int notificationDaysBeforeDueDate): void |
| `notificationDaysAfterDueDate` | `?int` | Optional | Notification days after due date<br>**Constraints**: `>= 0`, `<= 99` | getNotificationDaysAfterDueDate(): ?int | setNotificationDaysAfterDueDate(?int notificationDaysAfterDueDate): void |
| `notificationOnDueDate` | `?bool` | Optional | Notification on due date | getNotificationOnDueDate(): ?bool | setNotificationOnDueDate(?bool notificationOnDueDate): void |
| `sendTextToPay` | `?bool` | Optional | Send Text To Pay | getSendTextToPay(): ?bool | setSendTextToPay(?bool sendTextToPay): void |
| `files` | [`?(File[])`](../../doc/models/file.md) | Optional | File Information on `expand` | getFiles(): ?array | setFiles(?array files): void |
| `remainingBalance` | `?float` | Optional | Remaining Balance | getRemainingBalance(): ?float | setRemainingBalance(?float remainingBalance): void |
| `singlePaymentMinAmount` | `?int` | Optional | Single Payment Min Amount | getSinglePaymentMinAmount(): ?int | setSinglePaymentMinAmount(?int singlePaymentMinAmount): void |
| `singlePaymentMaxAmount` | `?int` | Optional | Single Payment Max Amount<br>**Default**: `999999999` | getSinglePaymentMaxAmount(): ?int | setSinglePaymentMaxAmount(?int singlePaymentMaxAmount): void |
| `cellPhone` | `?string` | Optional | Cell Phone<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10`, *Pattern*: `^\d{10}$` | getCellPhone(): ?string | setCellPhone(?string cellPhone): void |
| `id` | `string` | Required | Quick Invoice ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `createdTs` | `int` | Required | Created Time Stamp | getCreatedTs(): int | setCreatedTs(int createdTs): void |
| `modifiedTs` | `int` | Required | Modified Time Stamp | getModifiedTs(): int | setModifiedTs(int modifiedTs): void |
| `createdUserId` | `?string` | Optional | Created User Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCreatedUserId(): ?string | setCreatedUserId(?string createdUserId): void |
| `modifiedUserId` | `?string` | Optional | Modified User Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getModifiedUserId(): ?string | setModifiedUserId(?string modifiedUserId): void |
| `active` | `?bool` | Optional | Active status | getActive(): ?bool | setActive(?bool active): void |
| `paymentStatusId` | `?int` | Optional | Payment Status Id<br>**Constraints**: `>= 1`, `<= 3` | getPaymentStatusId(): ?int | setPaymentStatusId(?int paymentStatusId): void |
| `isActive` | `?bool` | Optional | Register is active | getIsActive(): ?bool | setIsActive(?bool isActive): void |
| `quickInvoiceSetting` | [`?QuickInvoiceSetting`](../../doc/models/quick-invoice-setting.md) | Optional | Quick Invoice Setting Information on `expand` | getQuickInvoiceSetting(): ?QuickInvoiceSetting | setQuickInvoiceSetting(?QuickInvoiceSetting quickInvoiceSetting): void |
| `tags` | [`?(Tag[])`](../../doc/models/tag.md) | Optional | Tag Information on `expand` | getTags(): ?array | setTags(?array tags): void |
| `quickInvoiceViews` | [`?(QuickInvoiceView[])`](../../doc/models/quick-invoice-view.md) | Optional | Quick Invoice View Information on `expand` | getQuickInvoiceViews(): ?array | setQuickInvoiceViews(?array quickInvoiceViews): void |
| `location` | [`?Location`](../../doc/models/location.md) | Optional | Location Information on `expand` | getLocation(): ?Location | setLocation(?Location location): void |
| `createdUser` | [`?CreatedUser`](../../doc/models/created-user.md) | Optional | User Information on `expand` | getCreatedUser(): ?CreatedUser | setCreatedUser(?CreatedUser createdUser): void |
| `modifiedUser` | [`?ModifiedUser`](../../doc/models/modified-user.md) | Optional | Modified User Information on `expand` | getModifiedUser(): ?ModifiedUser | setModifiedUser(?ModifiedUser modifiedUser): void |
| `changelogs` | [`?(Changelog[])`](../../doc/models/changelog.md) | Optional | Changelog Information on `expand` | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `contact` | [`?Contact1`](../../doc/models/contact-1.md) | Optional | Contact Information on `expand` | getContact(): ?Contact1 | setContact(?Contact1 contact): void |
| `logEmails` | [`?(LogEmail[])`](../../doc/models/log-email.md) | Optional | Log Email Information on `expand` | getLogEmails(): ?array | setLogEmails(?array logEmails): void |
| `logSms` | [`?LogSms`](../../doc/models/log-sms.md) | Optional | Log Sms Information on `expand` | getLogSms(): ?LogSms | setLogSms(?LogSms logSms): void |
| `transactions` | [`?(Transaction[])`](../../doc/models/transaction.md) | Optional | Transaction Information on `expand` | getTransactions(): ?array | setTransactions(?array transactions): void |
| `ccProductTransaction` | [`?CcProductTransaction`](../../doc/models/cc-product-transaction.md) | Optional | Cc Product Transaction Information on `expand` | getCcProductTransaction(): ?CcProductTransaction | setCcProductTransaction(?CcProductTransaction ccProductTransaction): void |
| `achProductTransaction` | [`?AchProductTransaction`](../../doc/models/ach-product-transaction.md) | Optional | Ach Product Transaction Information on `expand` | getAchProductTransaction(): ?AchProductTransaction | setAchProductTransaction(?AchProductTransaction achProductTransaction): void |
| `emailBlacklist` | [`?EmailBlacklist`](../../doc/models/email-blacklist.md) | Optional | Email Blacklist Information on `expand` | getEmailBlacklist(): ?EmailBlacklist | setEmailBlacklist(?EmailBlacklist emailBlacklist): void |
| `smsBlacklist` | [`?SmsBlacklist`](../../doc/models/sms-blacklist.md) | Optional | Sms Blacklist Information on `expand` | getSmsBlacklist(): ?SmsBlacklist | setSmsBlacklist(?SmsBlacklist smsBlacklist): void |
| `paymentUrl` | `?string` | Optional | Payment Url Information on `expand` | getPaymentUrl(): ?string | setPaymentUrl(?string paymentUrl): void |

## Example (as JSON)

```json
{
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "title": "My terminal",
  "cc_product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "ach_product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "due_date": "2021-12-01",
  "item_list": [
    {
      "name": "Bread",
      "amount": 2015
    }
  ],
  "allow_overpayment": true,
  "bank_funded_only_override": true,
  "email": "email@domain.com",
  "contact_id": "11e95f8ec39de8fbdb0a4f1a",
  "contact_api_id": "contact12345",
  "quick_invoice_api_id": "quickinvoice12345",
  "customer_id": "11e95f8ec39de8fbdb0a4f1a",
  "expire_date": "2021-12-01",
  "allow_partial_pay": true,
  "attach_files_to_email": true,
  "send_email": true,
  "invoice_number": "invoice12345",
  "item_header": "Quick invoice header sample",
  "item_footer": "Thank you",
  "amount_due": 245.36,
  "notification_email": "email@domain.com",
  "status_id": 1,
  "status_code": 1,
  "note": "some note",
  "notification_days_before_due_date": 3,
  "notification_days_after_due_date": 7,
  "notification_on_due_date": true,
  "send_text_to_pay": true,
  "remaining_balance": 245.36,
  "single_payment_min_amount": 500,
  "single_payment_max_amount": 500000,
  "cell_phone": "3339998822",
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "created_ts": 1422040992,
  "modified_ts": 1422040992,
  "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "modified_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "active": true,
  "payment_status_id": 1,
  "is_active": true
}
```

