
# Sort 22

You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:

> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
> 
> /endpoint?sort[field_name]=asc&sort[field_name2]=desc

## Structure

`Sort22`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?array` | Optional | - | getLocationId(): ?array | setLocationId(?array locationId): void |
| `title` | `?array` | Optional | - | getTitle(): ?array | setTitle(?array title): void |
| `ccProductTransactionId` | `?array` | Optional | - | getCcProductTransactionId(): ?array | setCcProductTransactionId(?array ccProductTransactionId): void |
| `achProductTransactionId` | `?array` | Optional | - | getAchProductTransactionId(): ?array | setAchProductTransactionId(?array achProductTransactionId): void |
| `dueDate` | `?array` | Optional | - | getDueDate(): ?array | setDueDate(?array dueDate): void |
| `itemList` | `?array` | Optional | - | getItemList(): ?array | setItemList(?array itemList): void |
| `allowOverpayment` | `?array` | Optional | - | getAllowOverpayment(): ?array | setAllowOverpayment(?array allowOverpayment): void |
| `bankFundedOnlyOverride` | `?array` | Optional | - | getBankFundedOnlyOverride(): ?array | setBankFundedOnlyOverride(?array bankFundedOnlyOverride): void |
| `email` | `?array` | Optional | - | getEmail(): ?array | setEmail(?array email): void |
| `contactId` | `?array` | Optional | - | getContactId(): ?array | setContactId(?array contactId): void |
| `contactApiId` | `?array` | Optional | - | getContactApiId(): ?array | setContactApiId(?array contactApiId): void |
| `quickInvoiceApiId` | `?array` | Optional | - | getQuickInvoiceApiId(): ?array | setQuickInvoiceApiId(?array quickInvoiceApiId): void |
| `customerId` | `?array` | Optional | - | getCustomerId(): ?array | setCustomerId(?array customerId): void |
| `expireDate` | `?array` | Optional | - | getExpireDate(): ?array | setExpireDate(?array expireDate): void |
| `allowPartialPay` | `?array` | Optional | - | getAllowPartialPay(): ?array | setAllowPartialPay(?array allowPartialPay): void |
| `attachFilesToEmail` | `?array` | Optional | - | getAttachFilesToEmail(): ?array | setAttachFilesToEmail(?array attachFilesToEmail): void |
| `sendEmail` | `?array` | Optional | - | getSendEmail(): ?array | setSendEmail(?array sendEmail): void |
| `invoiceNumber` | `?array` | Optional | - | getInvoiceNumber(): ?array | setInvoiceNumber(?array invoiceNumber): void |
| `itemHeader` | `?array` | Optional | - | getItemHeader(): ?array | setItemHeader(?array itemHeader): void |
| `itemFooter` | `?array` | Optional | - | getItemFooter(): ?array | setItemFooter(?array itemFooter): void |
| `amountDue` | `?array` | Optional | - | getAmountDue(): ?array | setAmountDue(?array amountDue): void |
| `notificationEmail` | `?array` | Optional | - | getNotificationEmail(): ?array | setNotificationEmail(?array notificationEmail): void |
| `statusId` | `?array` | Optional | - | getStatusId(): ?array | setStatusId(?array statusId): void |
| `statusCode` | `?array` | Optional | - | getStatusCode(): ?array | setStatusCode(?array statusCode): void |
| `note` | `?array` | Optional | - | getNote(): ?array | setNote(?array note): void |
| `notificationDaysBeforeDueDate` | `?array` | Optional | - | getNotificationDaysBeforeDueDate(): ?array | setNotificationDaysBeforeDueDate(?array notificationDaysBeforeDueDate): void |
| `notificationDaysAfterDueDate` | `?array` | Optional | - | getNotificationDaysAfterDueDate(): ?array | setNotificationDaysAfterDueDate(?array notificationDaysAfterDueDate): void |
| `notificationOnDueDate` | `?array` | Optional | - | getNotificationOnDueDate(): ?array | setNotificationOnDueDate(?array notificationOnDueDate): void |
| `sendTextToPay` | `?array` | Optional | - | getSendTextToPay(): ?array | setSendTextToPay(?array sendTextToPay): void |
| `files` | `?array` | Optional | - | getFiles(): ?array | setFiles(?array files): void |
| `remainingBalance` | `?array` | Optional | - | getRemainingBalance(): ?array | setRemainingBalance(?array remainingBalance): void |
| `singlePaymentMinAmount` | `?array` | Optional | - | getSinglePaymentMinAmount(): ?array | setSinglePaymentMinAmount(?array singlePaymentMinAmount): void |
| `singlePaymentMaxAmount` | `?array` | Optional | - | getSinglePaymentMaxAmount(): ?array | setSinglePaymentMaxAmount(?array singlePaymentMaxAmount): void |
| `cellPhone` | `?array` | Optional | - | getCellPhone(): ?array | setCellPhone(?array cellPhone): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | `?array` | Optional | - | getCreatedTs(): ?array | setCreatedTs(?array createdTs): void |
| `modifiedTs` | `?array` | Optional | - | getModifiedTs(): ?array | setModifiedTs(?array modifiedTs): void |
| `createdUserId` | `?array` | Optional | - | getCreatedUserId(): ?array | setCreatedUserId(?array createdUserId): void |
| `modifiedUserId` | `?array` | Optional | - | getModifiedUserId(): ?array | setModifiedUserId(?array modifiedUserId): void |
| `active` | `?array` | Optional | - | getActive(): ?array | setActive(?array active): void |
| `paymentStatusId` | `?array` | Optional | - | getPaymentStatusId(): ?array | setPaymentStatusId(?array paymentStatusId): void |
| `isActive` | `?array` | Optional | - | getIsActive(): ?array | setIsActive(?array isActive): void |
| `quickInvoiceSetting` | `?array` | Optional | - | getQuickInvoiceSetting(): ?array | setQuickInvoiceSetting(?array quickInvoiceSetting): void |
| `tags` | `?array` | Optional | - | getTags(): ?array | setTags(?array tags): void |
| `quickInvoiceViews` | `?array` | Optional | - | getQuickInvoiceViews(): ?array | setQuickInvoiceViews(?array quickInvoiceViews): void |
| `location` | `?array` | Optional | - | getLocation(): ?array | setLocation(?array location): void |
| `createdUser` | `?array` | Optional | - | getCreatedUser(): ?array | setCreatedUser(?array createdUser): void |
| `modifiedUser` | `?array` | Optional | - | getModifiedUser(): ?array | setModifiedUser(?array modifiedUser): void |
| `changelogs` | `?array` | Optional | - | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `contact` | `?array` | Optional | - | getContact(): ?array | setContact(?array contact): void |
| `logEmails` | `?array` | Optional | - | getLogEmails(): ?array | setLogEmails(?array logEmails): void |
| `logSms` | `?array` | Optional | - | getLogSms(): ?array | setLogSms(?array logSms): void |
| `transactions` | `?array` | Optional | - | getTransactions(): ?array | setTransactions(?array transactions): void |
| `ccProductTransaction` | `?array` | Optional | - | getCcProductTransaction(): ?array | setCcProductTransaction(?array ccProductTransaction): void |
| `achProductTransaction` | `?array` | Optional | - | getAchProductTransaction(): ?array | setAchProductTransaction(?array achProductTransaction): void |
| `emailBlacklist` | `?array` | Optional | - | getEmailBlacklist(): ?array | setEmailBlacklist(?array emailBlacklist): void |
| `smsBlacklist` | `?array` | Optional | - | getSmsBlacklist(): ?array | setSmsBlacklist(?array smsBlacklist): void |
| `paymentUrl` | `?array` | Optional | - | getPaymentUrl(): ?array | setPaymentUrl(?array paymentUrl): void |

## Example (as JSON)

```json
{
  "location_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "title": {
    "key1": "val1",
    "key2": "val2"
  },
  "cc_product_transaction_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "ach_product_transaction_id": {
    "key1": "val1",
    "key2": "val2"
  },
  "due_date": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

