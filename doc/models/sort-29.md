
# Sort 29

You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:

> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
> 
> /endpoint?sort[field_name]=asc&sort[field_name2]=desc

## Structure

`Sort29`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `additionalAmounts` | `?array` | Optional | - | getAdditionalAmounts(): ?array | setAdditionalAmounts(?array additionalAmounts): void |
| `billingAddress` | `?array` | Optional | - | getBillingAddress(): ?array | setBillingAddress(?array billingAddress): void |
| `checkinDate` | `?array` | Optional | - | getCheckinDate(): ?array | setCheckinDate(?array checkinDate): void |
| `checkoutDate` | `?array` | Optional | - | getCheckoutDate(): ?array | setCheckoutDate(?array checkoutDate): void |
| `clerkNumber` | `?array` | Optional | - | getClerkNumber(): ?array | setClerkNumber(?array clerkNumber): void |
| `contactApiId` | `?array` | Optional | - | getContactApiId(): ?array | setContactApiId(?array contactApiId): void |
| `contactId` | `?array` | Optional | - | getContactId(): ?array | setContactId(?array contactId): void |
| `customData` | `?array` | Optional | - | getCustomData(): ?array | setCustomData(?array customData): void |
| `customerId` | `?array` | Optional | - | getCustomerId(): ?array | setCustomerId(?array customerId): void |
| `description` | `?array` | Optional | - | getDescription(): ?array | setDescription(?array description): void |
| `iiasInd` | `?array` | Optional | - | getIiasInd(): ?array | setIiasInd(?array iiasInd): void |
| `imageFront` | `?array` | Optional | - | getImageFront(): ?array | setImageFront(?array imageFront): void |
| `imageBack` | `?array` | Optional | - | getImageBack(): ?array | setImageBack(?array imageBack): void |
| `installment` | `?array` | Optional | - | getInstallment(): ?array | setInstallment(?array installment): void |
| `installmentNumber` | `?array` | Optional | - | getInstallmentNumber(): ?array | setInstallmentNumber(?array installmentNumber): void |
| `installmentCount` | `?array` | Optional | - | getInstallmentCount(): ?array | setInstallmentCount(?array installmentCount): void |
| `locationApiId` | `?array` | Optional | - | getLocationApiId(): ?array | setLocationApiId(?array locationApiId): void |
| `locationId` | `?array` | Optional | - | getLocationId(): ?array | setLocationId(?array locationId): void |
| `productTransactionId` | `?array` | Optional | - | getProductTransactionId(): ?array | setProductTransactionId(?array productTransactionId): void |
| `advanceDeposit` | `?array` | Optional | - | getAdvanceDeposit(): ?array | setAdvanceDeposit(?array advanceDeposit): void |
| `noShow` | `?array` | Optional | - | getNoShow(): ?array | setNoShow(?array noShow): void |
| `notificationEmailAddress` | `?array` | Optional | - | getNotificationEmailAddress(): ?array | setNotificationEmailAddress(?array notificationEmailAddress): void |
| `orderNumber` | `?array` | Optional | - | getOrderNumber(): ?array | setOrderNumber(?array orderNumber): void |
| `poNumber` | `?array` | Optional | - | getPoNumber(): ?array | setPoNumber(?array poNumber): void |
| `quickInvoiceId` | `?array` | Optional | - | getQuickInvoiceId(): ?array | setQuickInvoiceId(?array quickInvoiceId): void |
| `recurring` | `?array` | Optional | - | getRecurring(): ?array | setRecurring(?array recurring): void |
| `recurringNumber` | `?array` | Optional | - | getRecurringNumber(): ?array | setRecurringNumber(?array recurringNumber): void |
| `roomNum` | `?array` | Optional | - | getRoomNum(): ?array | setRoomNum(?array roomNum): void |
| `roomRate` | `?array` | Optional | - | getRoomRate(): ?array | setRoomRate(?array roomRate): void |
| `saveAccount` | `?array` | Optional | - | getSaveAccount(): ?array | setSaveAccount(?array saveAccount): void |
| `saveAccountTitle` | `?array` | Optional | - | getSaveAccountTitle(): ?array | setSaveAccountTitle(?array saveAccountTitle): void |
| `subtotalAmount` | `?array` | Optional | - | getSubtotalAmount(): ?array | setSubtotalAmount(?array subtotalAmount): void |
| `surchargeAmount` | `?array` | Optional | - | getSurchargeAmount(): ?array | setSurchargeAmount(?array surchargeAmount): void |
| `tags` | `?array` | Optional | - | getTags(): ?array | setTags(?array tags): void |
| `tax` | `?array` | Optional | - | getTax(): ?array | setTax(?array tax): void |
| `tipAmount` | `?array` | Optional | - | getTipAmount(): ?array | setTipAmount(?array tipAmount): void |
| `transactionAmount` | `?array` | Optional | - | getTransactionAmount(): ?array | setTransactionAmount(?array transactionAmount): void |
| `secondaryAmount` | `?array` | Optional | - | getSecondaryAmount(): ?array | setSecondaryAmount(?array secondaryAmount): void |
| `transactionApiId` | `?array` | Optional | - | getTransactionApiId(): ?array | setTransactionApiId(?array transactionApiId): void |
| `transactionC1` | `?array` | Optional | - | getTransactionC1(): ?array | setTransactionC1(?array transactionC1): void |
| `transactionC2` | `?array` | Optional | - | getTransactionC2(): ?array | setTransactionC2(?array transactionC2): void |
| `transactionC3` | `?array` | Optional | - | getTransactionC3(): ?array | setTransactionC3(?array transactionC3): void |
| `bankFundedOnlyOverride` | `?array` | Optional | - | getBankFundedOnlyOverride(): ?array | setBankFundedOnlyOverride(?array bankFundedOnlyOverride): void |
| `allowPartialAuthorizationOverride` | `?array` | Optional | - | getAllowPartialAuthorizationOverride(): ?array | setAllowPartialAuthorizationOverride(?array allowPartialAuthorizationOverride): void |
| `autoDeclineCvvOverride` | `?array` | Optional | - | getAutoDeclineCvvOverride(): ?array | setAutoDeclineCvvOverride(?array autoDeclineCvvOverride): void |
| `autoDeclineStreetOverride` | `?array` | Optional | - | getAutoDeclineStreetOverride(): ?array | setAutoDeclineStreetOverride(?array autoDeclineStreetOverride): void |
| `autoDeclineZipOverride` | `?array` | Optional | - | getAutoDeclineZipOverride(): ?array | setAutoDeclineZipOverride(?array autoDeclineZipOverride): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | `?array` | Optional | - | getCreatedTs(): ?array | setCreatedTs(?array createdTs): void |
| `modifiedTs` | `?array` | Optional | - | getModifiedTs(): ?array | setModifiedTs(?array modifiedTs): void |
| `terminalId` | `?array` | Optional | - | getTerminalId(): ?array | setTerminalId(?array terminalId): void |
| `accountHolderName` | `?array` | Optional | - | getAccountHolderName(): ?array | setAccountHolderName(?array accountHolderName): void |
| `accountType` | `?array` | Optional | - | getAccountType(): ?array | setAccountType(?array accountType): void |
| `tokenApiId` | `?array` | Optional | - | getTokenApiId(): ?array | setTokenApiId(?array tokenApiId): void |
| `tokenId` | `?array` | Optional | - | getTokenId(): ?array | setTokenId(?array tokenId): void |
| `achIdentifier` | `?array` | Optional | - | getAchIdentifier(): ?array | setAchIdentifier(?array achIdentifier): void |
| `achSecCode` | `?array` | Optional | - | getAchSecCode(): ?array | setAchSecCode(?array achSecCode): void |
| `authAmount` | `?array` | Optional | - | getAuthAmount(): ?array | setAuthAmount(?array authAmount): void |
| `authCode` | `?array` | Optional | - | getAuthCode(): ?array | setAuthCode(?array authCode): void |
| `avs` | `?array` | Optional | - | getAvs(): ?array | setAvs(?array avs): void |
| `avsEnhanced` | `?array` | Optional | - | getAvsEnhanced(): ?array | setAvsEnhanced(?array avsEnhanced): void |
| `cardholderPresent` | `?array` | Optional | - | getCardholderPresent(): ?array | setCardholderPresent(?array cardholderPresent): void |
| `cardPresent` | `?array` | Optional | - | getCardPresent(): ?array | setCardPresent(?array cardPresent): void |
| `checkNumber` | `?array` | Optional | - | getCheckNumber(): ?array | setCheckNumber(?array checkNumber): void |
| `customerIp` | `?array` | Optional | - | getCustomerIp(): ?array | setCustomerIp(?array customerIp): void |
| `cvvResponse` | `?array` | Optional | - | getCvvResponse(): ?array | setCvvResponse(?array cvvResponse): void |
| `entryModeId` | `?array` | Optional | - | getEntryModeId(): ?array | setEntryModeId(?array entryModeId): void |
| `emvReceiptData` | `?array` | Optional | - | getEmvReceiptData(): ?array | setEmvReceiptData(?array emvReceiptData): void |
| `firstSix` | `?array` | Optional | - | getFirstSix(): ?array | setFirstSix(?array firstSix): void |
| `lastFour` | `?array` | Optional | - | getLastFour(): ?array | setLastFour(?array lastFour): void |
| `paymentMethod` | `?array` | Optional | - | getPaymentMethod(): ?array | setPaymentMethod(?array paymentMethod): void |
| `terminalSerialNumber` | `?array` | Optional | - | getTerminalSerialNumber(): ?array | setTerminalSerialNumber(?array terminalSerialNumber): void |
| `transactionSettlementStatus` | `?array` | Optional | - | getTransactionSettlementStatus(): ?array | setTransactionSettlementStatus(?array transactionSettlementStatus): void |
| `chargeBackDate` | `?array` | Optional | - | getChargeBackDate(): ?array | setChargeBackDate(?array chargeBackDate): void |
| `isRecurring` | `?array` | Optional | - | getIsRecurring(): ?array | setIsRecurring(?array isRecurring): void |
| `notificationEmailSent` | `?array` | Optional | - | getNotificationEmailSent(): ?array | setNotificationEmailSent(?array notificationEmailSent): void |
| `par` | `?array` | Optional | - | getPar(): ?array | setPar(?array par): void |
| `reasonCodeId` | `?array` | Optional | - | getReasonCodeId(): ?array | setReasonCodeId(?array reasonCodeId): void |
| `recurringId` | `?array` | Optional | - | getRecurringId(): ?array | setRecurringId(?array recurringId): void |
| `settleDate` | `?array` | Optional | - | getSettleDate(): ?array | setSettleDate(?array settleDate): void |
| `statusCode` | `?array` | Optional | - | getStatusCode(): ?array | setStatusCode(?array statusCode): void |
| `transactionBatchId` | `?array` | Optional | - | getTransactionBatchId(): ?array | setTransactionBatchId(?array transactionBatchId): void |
| `typeId` | `?array` | Optional | - | getTypeId(): ?array | setTypeId(?array typeId): void |
| `verbiage` | `?array` | Optional | - | getVerbiage(): ?array | setVerbiage(?array verbiage): void |
| `voidDate` | `?array` | Optional | - | getVoidDate(): ?array | setVoidDate(?array voidDate): void |
| `batch` | `?array` | Optional | - | getBatch(): ?array | setBatch(?array batch): void |
| `termsAgree` | `?array` | Optional | - | getTermsAgree(): ?array | setTermsAgree(?array termsAgree): void |
| `responseMessage` | `?array` | Optional | - | getResponseMessage(): ?array | setResponseMessage(?array responseMessage): void |
| `returnDate` | `?array` | Optional | - | getReturnDate(): ?array | setReturnDate(?array returnDate): void |
| `trxSourceId` | `?array` | Optional | - | getTrxSourceId(): ?array | setTrxSourceId(?array trxSourceId): void |
| `routingNumber` | `?array` | Optional | - | getRoutingNumber(): ?array | setRoutingNumber(?array routingNumber): void |
| `trxSourceCode` | `?array` | Optional | - | getTrxSourceCode(): ?array | setTrxSourceCode(?array trxSourceCode): void |
| `paylinkId` | `?array` | Optional | - | getPaylinkId(): ?array | setPaylinkId(?array paylinkId): void |
| `currencyCode` | `?array` | Optional | - | getCurrencyCode(): ?array | setCurrencyCode(?array currencyCode): void |
| `accountVault` | `?array` | Optional | - | getAccountVault(): ?array | setAccountVault(?array accountVault): void |
| `quickInvoice` | `?array` | Optional | - | getQuickInvoice(): ?array | setQuickInvoice(?array quickInvoice): void |
| `logEmails` | `?array` | Optional | - | getLogEmails(): ?array | setLogEmails(?array logEmails): void |
| `isVoidable` | `?array` | Optional | - | getIsVoidable(): ?array | setIsVoidable(?array isVoidable): void |
| `isToken` | `?array` | Optional | - | getIsToken(): ?array | setIsToken(?array isToken): void |
| `isAccountvault` | `?array` | Optional | - | getIsAccountvault(): ?array | setIsAccountvault(?array isAccountvault): void |
| `isReversible` | `?array` | Optional | - | getIsReversible(): ?array | setIsReversible(?array isReversible): void |
| `isRefundable` | `?array` | Optional | - | getIsRefundable(): ?array | setIsRefundable(?array isRefundable): void |
| `isCompletable` | `?array` | Optional | - | getIsCompletable(): ?array | setIsCompletable(?array isCompletable): void |
| `isSettled` | `?array` | Optional | - | getIsSettled(): ?array | setIsSettled(?array isSettled): void |
| `createdUser` | `?array` | Optional | - | getCreatedUser(): ?array | setCreatedUser(?array createdUser): void |
| `location` | `?array` | Optional | - | getLocation(): ?array | setLocation(?array location): void |
| `contact` | `?array` | Optional | - | getContact(): ?array | setContact(?array contact): void |
| `changelogs` | `?array` | Optional | - | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `productTransaction` | `?array` | Optional | - | getProductTransaction(): ?array | setProductTransaction(?array productTransaction): void |
| `allTags` | `?array` | Optional | - | getAllTags(): ?array | setAllTags(?array allTags): void |
| `tagTransactions` | `?array` | Optional | - | getTagTransactions(): ?array | setTagTransactions(?array tagTransactions): void |
| `declinedRecurringNotification` | `?array` | Optional | - | getDeclinedRecurringNotification(): ?array | setDeclinedRecurringNotification(?array declinedRecurringNotification): void |
| `paymentRecurringNotification` | `?array` | Optional | - | getPaymentRecurringNotification(): ?array | setPaymentRecurringNotification(?array paymentRecurringNotification): void |
| `developerCompany` | `?array` | Optional | - | getDeveloperCompany(): ?array | setDeveloperCompany(?array developerCompany): void |
| `terminal` | `?array` | Optional | - | getTerminal(): ?array | setTerminal(?array terminal): void |
| `hostedPaymentPage` | `?array` | Optional | - | getHostedPaymentPage(): ?array | setHostedPaymentPage(?array hostedPaymentPage): void |
| `transactionLevel3` | `?array` | Optional | - | getTransactionLevel3(): ?array | setTransactionLevel3(?array transactionLevel3): void |
| `developerCompanyId` | `?array` | Optional | - | getDeveloperCompanyId(): ?array | setDeveloperCompanyId(?array developerCompanyId): void |
| `transactionHistories` | `?array` | Optional | - | getTransactionHistories(): ?array | setTransactionHistories(?array transactionHistories): void |
| `surchargeTransaction` | `?array` | Optional | - | getSurchargeTransaction(): ?array | setSurchargeTransaction(?array surchargeTransaction): void |
| `surcharge` | `?array` | Optional | - | getSurcharge(): ?array | setSurcharge(?array surcharge): void |
| `signature` | `?array` | Optional | - | getSignature(): ?array | setSignature(?array signature): void |
| `reasonCode` | `?array` | Optional | - | getReasonCode(): ?array | setReasonCode(?array reasonCode): void |
| `type` | `?array` | Optional | - | getType(): ?array | setType(?array type): void |
| `status` | `?array` | Optional | - | getStatus(): ?array | setStatus(?array status): void |
| `transactionBatch` | `?array` | Optional | - | getTransactionBatch(): ?array | setTransactionBatch(?array transactionBatch): void |
| `transactionSplits` | `?array` | Optional | - | getTransactionSplits(): ?array | setTransactionSplits(?array transactionSplits): void |
| `postbackLogs` | `?array` | Optional | - | getPostbackLogs(): ?array | setPostbackLogs(?array postbackLogs): void |
| `currencyType` | `?array` | Optional | - | getCurrencyType(): ?array | setCurrencyType(?array currencyType): void |
| `transactionReferences` | `?array` | Optional | - | getTransactionReferences(): ?array | setTransactionReferences(?array transactionReferences): void |

## Example (as JSON)

```json
{
  "additional_amounts": {
    "key1": "val1",
    "key2": "val2"
  },
  "billing_address": {
    "key1": "val1",
    "key2": "val2"
  },
  "checkin_date": {
    "key1": "val1",
    "key2": "val2"
  },
  "checkout_date": {
    "key1": "val1",
    "key2": "val2"
  },
  "clerk_number": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

