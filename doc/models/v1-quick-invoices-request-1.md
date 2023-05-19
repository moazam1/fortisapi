
# V1 Quick Invoices Request 1

## Structure

`V1QuickInvoicesRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `title` | `?string` | Optional | Title<br>**Constraints**: *Maximum Length*: `64` | getTitle(): ?string | setTitle(?string title): void |
| `ccProductTransactionId` | `?string` | Optional | Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCcProductTransactionId(): ?string | setCcProductTransactionId(?string ccProductTransactionId): void |
| `achProductTransactionId` | `?string` | Optional | ACH Product Transaction Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getAchProductTransactionId(): ?string | setAchProductTransactionId(?string achProductTransactionId): void |
| `dueDate` | `?string` | Optional | Due Date, Format: Y-m-d<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getDueDate(): ?string | setDueDate(?string dueDate): void |
| `itemList` | [`?(ItemList5[])`](../../doc/models/item-list-5.md) | Optional | Item List<br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `99`, *Unique Items Required* | getItemList(): ?array | setItemList(?array itemList): void |
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
| `amountDue` | `?int` | Optional | Amount Due | getAmountDue(): ?int | setAmountDue(?int amountDue): void |
| `notificationEmail` | `?string` | Optional | Notification email<br>**Constraints**: *Maximum Length*: `640` | getNotificationEmail(): ?string | setNotificationEmail(?string notificationEmail): void |
| `statusId` | `?int` | Optional | (DEPRECATED) Status Id<br>**Constraints**: `>= 0`, `<= 1` | getStatusId(): ?int | setStatusId(?int statusId): void |
| `statusCode` | `?int` | Optional | Status Code<br>**Constraints**: `>= 0`, `<= 1` | getStatusCode(): ?int | setStatusCode(?int statusCode): void |
| `note` | `?string` | Optional | Note<br>**Constraints**: *Maximum Length*: `200` | getNote(): ?string | setNote(?string note): void |
| `notificationDaysBeforeDueDate` | `?int` | Optional | Notification days before due date<br>**Constraints**: `>= 0`, `<= 60` | getNotificationDaysBeforeDueDate(): ?int | setNotificationDaysBeforeDueDate(?int notificationDaysBeforeDueDate): void |
| `notificationDaysAfterDueDate` | `?int` | Optional | Notification days after due date<br>**Constraints**: `>= 0`, `<= 60` | getNotificationDaysAfterDueDate(): ?int | setNotificationDaysAfterDueDate(?int notificationDaysAfterDueDate): void |
| `notificationOnDueDate` | `?bool` | Optional | Notification on due date | getNotificationOnDueDate(): ?bool | setNotificationOnDueDate(?bool notificationOnDueDate): void |
| `sendTextToPay` | `?bool` | Optional | Send Text To Pay | getSendTextToPay(): ?bool | setSendTextToPay(?bool sendTextToPay): void |
| `files` | `?(array[])` | Optional | Files | getFiles(): ?array | setFiles(?array files): void |
| `remainingBalance` | `?int` | Optional | Remaining Balance<br>**Constraints**: `>= 0`, `<= 999999999` | getRemainingBalance(): ?int | setRemainingBalance(?int remainingBalance): void |
| `singlePaymentMinAmount` | `?int` | Optional | Single Payment Min Amount | getSinglePaymentMinAmount(): ?int | setSinglePaymentMinAmount(?int singlePaymentMinAmount): void |
| `singlePaymentMaxAmount` | `?int` | Optional | Single Payment Max Amount<br>**Default**: `999999999` | getSinglePaymentMaxAmount(): ?int | setSinglePaymentMaxAmount(?int singlePaymentMaxAmount): void |
| `cellPhone` | `?string` | Optional | Cell Phone<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10`, *Pattern*: `^\d{10}$` | getCellPhone(): ?string | setCellPhone(?string cellPhone): void |

## Example (as JSON)

```json
{
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "title": "My terminal",
  "cc_product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "ach_product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "due_date": "2021-12-01",
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
  "amount_due": 24536,
  "notification_email": "email@domain.com",
  "status_id": 1,
  "status_code": 1,
  "note": "some note",
  "notification_days_before_due_date": 3,
  "notification_days_after_due_date": 7,
  "notification_on_due_date": true,
  "send_text_to_pay": true,
  "remaining_balance": 24536,
  "single_payment_min_amount": 500,
  "single_payment_max_amount": 500000,
  "cell_phone": "3339998822"
}
```

