# Quick Invoices

```php
$quickInvoicesController = $client->getQuickInvoicesController();
```

## Class Name

`QuickInvoicesController`

## Methods

* [Create a New Quick Invoice](../../doc/controllers/quick-invoices.md#create-a-new-quick-invoice)
* [List All Quick Invoices Related](../../doc/controllers/quick-invoices.md#list-all-quick-invoices-related)
* [Resend](../../doc/controllers/quick-invoices.md#resend)
* [Associate Transaction With Ouick Invoice](../../doc/controllers/quick-invoices.md#associate-transaction-with-ouick-invoice)
* [Remove Transaction From Quick Invoice](../../doc/controllers/quick-invoices.md#remove-transaction-from-quick-invoice)
* [Delete Quick Invoice](../../doc/controllers/quick-invoices.md#delete-quick-invoice)
* [View Single Quick Invoice Record](../../doc/controllers/quick-invoices.md#view-single-quick-invoice-record)
* [Update Quick Invoice](../../doc/controllers/quick-invoices.md#update-quick-invoice)
* [Reopen Quick Invoice](../../doc/controllers/quick-invoices.md#reopen-quick-invoice)


# Create a New Quick Invoice

Create a new quick invoice

```php
function createANewQuickInvoice(V1QuickInvoicesRequest $body, ?array $expand = null): ResponseQuickInvoice
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`V1QuickInvoicesRequest`](../../doc/models/v1-quick-invoices-request.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand11Enum)`](../../doc/models/expand-11-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseQuickInvoice`](../../doc/models/response-quick-invoice.md)

## Example Usage

```php
$body = V1QuickInvoicesRequestBuilder::init(
    'My terminal',
    '2021-12-01',
    [
        ItemListBuilder::init(
            'Bread',
            2015
        )->build()
    ]
)
    ->locationId('11e95f8ec39de8fbdb0a4f1a')
    ->ccProductTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->achProductTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->allowOverpayment(true)
    ->bankFundedOnlyOverride(true)
    ->email('email@domain.com')
    ->contactId('11e95f8ec39de8fbdb0a4f1a')
    ->contactApiId('contact12345')
    ->quickInvoiceApiId('quickinvoice12345')
    ->customerId('11e95f8ec39de8fbdb0a4f1a')
    ->expireDate('2021-12-01')
    ->allowPartialPay(true)
    ->attachFilesToEmail(true)
    ->sendEmail(true)
    ->invoiceNumber('invoice12345')
    ->itemHeader('Quick invoice header sample')
    ->itemFooter('Thank you')
    ->amountDue(24536)
    ->notificationEmail('email@domain.com')
    ->statusId(1)
    ->statusCode(1)
    ->note('some note')
    ->notificationDaysBeforeDueDate(3)
    ->notificationDaysAfterDueDate(7)
    ->notificationOnDueDate(true)
    ->sendTextToPay(true)
    ->remainingBalance(24536)
    ->singlePaymentMinAmount(500)
    ->singlePaymentMaxAmount(500000)
    ->cellPhone('3339998822')
    ->build();

$result = $quickInvoicesController->createANewQuickInvoice($body);
```

## Example Response *(as JSON)*

```json
{
  "type": "QuickInvoice",
  "data": {
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
    "files": [
      {
        "file": {},
        "resource_id": "11e95f8ec39de8fbdb0a4f1a",
        "resource": "Contact",
        "product_file_id": "11e95f8ec39de8fbdb0a4f1a",
        "file_category_id": "11e95f8ec39de8fbdb0a4f1a",
        "visibility_group_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
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
    "is_active": true,
    "quick_invoice_setting": {
      "location_api_id": "11e95f8ec39de8fbdb0a4f1a",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "quick_invoice_template": "<html>Template<html>",
      "default_allow_partial_pay": true,
      "default_notification_on_due_date": true,
      "default_notification_days_after_due_date": 7,
      "default_notification_days_before_due_date": 3,
      "id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "quick_invoice_views": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "quick_invoice_id": "Quick Invoice ID",
        "created_ts": 1422040992
      }
    ],
    "location": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "account_number": "5454545454545454",
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "branding_domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "contact_email_trx_receipt_default": true,
      "default_ach": "11e608a7d515f1e093242bb2",
      "default_cc": "11e608a442a5f1e092242dda",
      "email_reply_to": "email@domain.com",
      "fax": "3339998822",
      "location_api_id": "location-111111",
      "location_api_key": "AE34BBCAADF4AE34BBCAADF4",
      "location_c1": "custom 1",
      "location_c2": "custom 2",
      "location_c3": "custom data 3",
      "name": "Sample Company Headquarters",
      "office_phone": "2481234567",
      "office_ext_phone": "1021021209",
      "tz": "America/New_York",
      "parent_id": "11e95f8ec39de8fbdb0a4f1a",
      "show_contact_notes": true,
      "show_contact_files": true,
      "ticket_hash_key": "A5F443CADF4AE34BBCAADF4"
    },
    "created_user": {
      "account_number": "5454545454545454",
      "branding_domain_url": "{branding_domain_url}",
      "cell_phone": "3339998822",
      "company_name": "Fortis Payment Systems, LLC",
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "date_of_birth": "2021-12-01",
      "domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "email": "email@domain.com",
      "email_trx_receipt": true,
      "home_phone": "3339998822",
      "first_name": "John",
      "last_name": "Smith",
      "locale": "en-US",
      "office_phone": "3339998822",
      "office_ext_phone": "5",
      "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
      "requires_new_password": null,
      "terms_condition_code": "20220308",
      "tz": "America/New_York",
      "ui_prefs": {
        "entry_page": "dashboard",
        "page_size": 2,
        "report_export_type": "csv",
        "process_method": "virtual_terminal",
        "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
      },
      "username": "{user_name}",
      "user_api_key": "234bas8dfn8238f923w2",
      "user_hash_key": null,
      "user_type_code": 100,
      "password": null,
      "zip": "48375",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "status_id": 1,
      "api_only": false,
      "is_invitation": false,
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "status": true,
      "login_attempts": 0,
      "last_login_ts": 1422040992,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_accepted_ts": 1422040992,
      "terms_agree_ip": "192.168.0.10",
      "current_date_time": "2019-03-11T10:38:26-0700"
    },
    "modified_user": {
      "account_number": "5454545454545454",
      "branding_domain_url": "{branding_domain_url}",
      "cell_phone": "3339998822",
      "company_name": "Fortis Payment Systems, LLC",
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "date_of_birth": "2021-12-01",
      "domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "email": "email@domain.com",
      "email_trx_receipt": true,
      "home_phone": "3339998822",
      "first_name": "John",
      "last_name": "Smith",
      "locale": "en-US",
      "office_phone": "3339998822",
      "office_ext_phone": "5",
      "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
      "requires_new_password": null,
      "terms_condition_code": "20220308",
      "tz": "America/New_York",
      "ui_prefs": {
        "entry_page": "dashboard",
        "page_size": 2,
        "report_export_type": "csv",
        "process_method": "virtual_terminal",
        "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
      },
      "username": "{user_name}",
      "user_api_key": "234bas8dfn8238f923w2",
      "user_hash_key": null,
      "user_type_code": 100,
      "password": null,
      "zip": "48375",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "status_id": 1,
      "api_only": false,
      "is_invitation": false,
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "status": true,
      "login_attempts": 0,
      "last_login_ts": 1422040992,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_accepted_ts": 1422040992,
      "terms_agree_ip": "192.168.0.10",
      "current_date_time": "2019-03-11T10:38:26-0700"
    },
    "changelogs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "action": "CREATE",
        "model": "TransactionRequest",
        "model_id": "11ec829598f0d4008be9aba4",
        "user_id": "11e95f8ec39de8fbdb0a4f1a",
        "changelog_details": [
          {
            "id": "11e95f8ec39de8fbdb0a4f1a",
            "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
            "field": "next_run_ts",
            "old_value": "1643616000"
          }
        ],
        "user": {
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "username": "email@domain.com",
          "first_name": "Bob",
          "last_name": "Fairview"
        }
      }
    ],
    "contact": {
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "account_number": "54545433332",
      "contact_api_id": "137",
      "first_name": "John",
      "last_name": "Smith",
      "cell_phone": "3339998822",
      "balance": 245.36,
      "address": {
        "city": "Novi",
        "state": "Michigan",
        "postal_code": "48375",
        "country": "US"
      },
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
      "email": "email@domain.com",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "active": true
    },
    "log_emails": [
      {
        "subject": "Payment Receipt - 12skiestech",
        "body": "This email is being sent from a server.",
        "source_address": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
        "return_path": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
        "provider_id": "0100017e67bcc530-e1dd23b4-8a39-4a5b-8d5d-68d51c4c942f-000000",
        "domain_id": "11e95f8ec39de8fbdb0a4f1a",
        "reason_sent": "Contact Email",
        "reason_model": "Transaction",
        "reason_model_id": "11e95f8ec39de8fbdb0a4f1a",
        "reply_to": "\"Zeamster\" <emma.p@zeamster.com>",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992
      }
    ],
    "log_sms": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "body": " ",
      "reason_model": " ",
      "reason_model_id": " ",
      "provider_id": " ",
      "status": " ",
      "sender": " ",
      "recipient": " ",
      "created_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "transactions": [
      {
        "additional_amounts": [
          {
            "type": "cashback",
            "amount": 10,
            "account_type": "credit",
            "currency": 840
          }
        ],
        "billing_address": {
          "city": "Novi",
          "state": "Michigan",
          "postal_code": "48375",
          "phone": "3339998822"
        },
        "checkin_date": "2021-12-01",
        "checkout_date": "2021-12-01",
        "clerk_number": "AE1234",
        "contact_id": "11e95f8ec39de8fbdb0a4f1a",
        "custom_data": {},
        "customer_id": "customerid",
        "description": "some description",
        "identity_verification": {
          "dl_state": "MI",
          "dl_number": "1235567",
          "dob_year": "1980"
        },
        "iias_ind": 1,
        "image_front": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
        "image_back": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
        "installment": true,
        "installment_number": 1,
        "installment_count": 1,
        "location_api_id": "location-api-id-florida-2",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "advance_deposit": false,
        "no_show": false,
        "notification_email_address": "johnsmith@smiths.com",
        "order_number": "433659378839",
        "po_number": "555555553123",
        "quick_invoice_id": "11e95f8ec39de8fbdb0a4f1a",
        "recurring": false,
        "recurring_number": 1,
        "room_num": "303",
        "room_rate": 95,
        "save_account": false,
        "save_account_title": "John Account",
        "subtotal_amount": 599,
        "surcharge_amount": 100,
        "tags": [
          "Walk-in Customer"
        ],
        "tax": 0,
        "tip_amount": 0,
        "transaction_amount": 0,
        "secondary_amount": 0,
        "transaction_api_id": "transaction-payment-abcd123",
        "transaction_c1": "custom-data-1",
        "transaction_c2": "custom-data-2",
        "transaction_c3": "custom-data-3",
        "bank_funded_only_override": false,
        "allow_partial_authorization_override": false,
        "auto_decline_cvv_override": false,
        "auto_decline_street_override": false,
        "auto_decline_zip_override": false,
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "terminal_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_holder_name": "smith",
        "account_type": "checking",
        "token_id": "11e95f8ec39de8fbdb0a4f1a",
        "ach_identifier": "P",
        "ach_sec_code": "C21",
        "auth_amount": 1,
        "auth_code": "BR349K",
        "avs": "BAD",
        "avs_enhanced": "N",
        "cardholder_present": true,
        "card_present": true,
        "check_number": "8520748520963",
        "customer_ip": "192.168.0.10",
        "cvv_response": "N",
        "entry_mode_id": "C",
        "emv_receipt_data": {
          "AID": "a0000000042203",
          "APPLAB": "US Maestro",
          "APPN": "US Maestro",
          "CVM": "Pin Verified",
          "TSI": "e800",
          "TVR": "0800008000"
        },
        "first_six": "545454",
        "last_four": "5454",
        "payment_method": "cc",
        "terminal_serial_number": "1234567890",
        "transaction_settlement_status": null,
        "charge_back_date": "2021-12-01",
        "is_recurring": true,
        "notification_email_sent": "true",
        "par": "Q1J4Z28RKA1EBL470G9XYG90R5D3E",
        "reason_code_id": 1000,
        "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
        "settle_date": "2021-12-01",
        "status_code": 101,
        "transaction_batch_id": "11e95f8ec39de8fbdb0a4f1a",
        "verbiage": "APPROVED",
        "void_date": "2021-12-01",
        "batch": "2",
        "terms_agree": true,
        "response_message": null,
        "return_date": "2021-12-01",
        "trx_source_id": 8,
        "routing_number": "051904524",
        "trx_source_code": 8,
        "paylink_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "cc_product_transaction": {
      "processor_version": "1_0_0",
      "title": "My terminal",
      "payment_method": "cc",
      "processor": "zgate",
      "mcc": "1111",
      "tax_surcharge_config": 2,
      "partner": "standalone",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "surcharge": {},
      "processor_data": {},
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
      "dup_check_per_batch": null,
      "paylink_allow": false,
      "quick_invoice_allow": false,
      "level3_allow": false,
      "payfac_enable": false,
      "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "ach_product_transaction": {
      "processor_version": "1_0_0",
      "title": "My terminal",
      "payment_method": "cc",
      "processor": "zgate",
      "mcc": "1111",
      "tax_surcharge_config": 2,
      "partner": "standalone",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "surcharge": {},
      "processor_data": {},
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
      "dup_check_per_batch": null,
      "paylink_allow": false,
      "quick_invoice_allow": false,
      "level3_allow": false,
      "payfac_enable": false,
      "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "email_blacklist": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "isBlacklisted": true,
      "detail": true,
      "created_ts": 1422040992
    },
    "sms_blacklist": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "isBlacklisted": true,
      "detail": true,
      "created_ts": 1422040992
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |
| 412 | Precondition Failed | [`Response412Exception`](../../doc/models/response-412-exception.md) |


# List All Quick Invoices Related

List all quick invoices related

```php
function listAllQuickInvoicesRelated(
    ?Page $page = null,
    ?Sort22 $sort = null,
    ?Filter6 $filter = null,
    ?array $expand = null
): ResponseQuickInvoicesCollection
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | [`?Page`](../../doc/models/page.md) | Query, Optional | Use this field to specify paginate your results, by using page size and number. You can use one of the following methods:<br><br>> /endpoint?page={ "number": 1, "size": 50 }<br>> <br>> /endpoint?page[number]=1&page[size]=50 |
| `sort` | [`?Sort22`](../../doc/models/sort-22.md) | Query, Optional | You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:<br><br>> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }<br>> <br>> /endpoint?sort[field_name]=asc&sort[field_name2]=desc |
| `filter` | [`?Filter6`](../../doc/models/filter-6.md) | Query, Optional | You can use any `field_name` from this endpoint results as a filter, and you can also use more than one field to create AND conditions. For date fields (ended with `_ts`), you can also search for ranges using the `$gte` (Greater than or equal to) and/or  `$lte` (Lower than or equal to). You can use one of the following methods:<br><br>> /endpoint?filter={ "field_name": "Value" }<br>> <br>> /endpoint?filter[field_name]=Value<br>> <br>> /endpoint?filter={ "created_ts": "today" }<br>> <br>> /endpoint?filter[created_ts]=today<br>> <br>> /endpoint?filter={ "created_ts": { "$gte": "yesterday", "$lte": "today" } }<br>> <br>> /endpoint?filter[created_ts][$gte]=yesterday&filter[created_ts][$lte]=today<br>> <br>> /endpoint?filter[address][city]=memphis<br>> <br>> /endpoint?filter={ "address": { "city" : "memphis" } } |
| `expand` | [`?(string[]) (Expand11Enum)`](../../doc/models/expand-11-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseQuickInvoicesCollection`](../../doc/models/response-quick-invoices-collection.md)

## Example Usage

```php
$page = PageBuilder::init()
    ->number(1)
    ->size(50)
    ->build();

$result = $quickInvoicesController->listAllQuickInvoicesRelated($page);
```

## Example Response *(as JSON)*

```json
{
  "type": "QuickInvoicesCollection",
  "list": [
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
      "files": [
        {
          "file": {},
          "resource_id": "11e95f8ec39de8fbdb0a4f1a",
          "resource": "Contact",
          "product_file_id": "11e95f8ec39de8fbdb0a4f1a",
          "file_category_id": "11e95f8ec39de8fbdb0a4f1a",
          "visibility_group_id": "11e95f8ec39de8fbdb0a4f1a",
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "modified_ts": 1422040992
        }
      ],
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
      "is_active": true,
      "quick_invoice_setting": {
        "location_api_id": "11e95f8ec39de8fbdb0a4f1a",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "quick_invoice_template": "<html>Template<html>",
        "default_allow_partial_pay": true,
        "default_notification_on_due_date": true,
        "default_notification_days_after_due_date": 7,
        "default_notification_days_before_due_date": 3,
        "id": "11e95f8ec39de8fbdb0a4f1a"
      },
      "tags": [
        {
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "title": "My terminal",
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "modified_ts": 1422040992
        }
      ],
      "quick_invoice_views": [
        {
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "quick_invoice_id": "Quick Invoice ID",
          "created_ts": 1422040992
        }
      ],
      "location": {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "account_number": "5454545454545454",
        "address": {
          "city": "Novi",
          "state": "MI",
          "postal_code": "48375",
          "country": "US"
        },
        "branding_domain_id": "11e95f8ec39de8fbdb0a4f1a",
        "contact_email_trx_receipt_default": true,
        "default_ach": "11e608a7d515f1e093242bb2",
        "default_cc": "11e608a442a5f1e092242dda",
        "email_reply_to": "email@domain.com",
        "fax": "3339998822",
        "location_api_id": "location-111111",
        "location_api_key": "AE34BBCAADF4AE34BBCAADF4",
        "location_c1": "custom 1",
        "location_c2": "custom 2",
        "location_c3": "custom data 3",
        "name": "Sample Company Headquarters",
        "office_phone": "2481234567",
        "office_ext_phone": "1021021209",
        "tz": "America/New_York",
        "parent_id": "11e95f8ec39de8fbdb0a4f1a",
        "show_contact_notes": true,
        "show_contact_files": true,
        "ticket_hash_key": "A5F443CADF4AE34BBCAADF4"
      },
      "created_user": {
        "account_number": "5454545454545454",
        "branding_domain_url": "{branding_domain_url}",
        "cell_phone": "3339998822",
        "company_name": "Fortis Payment Systems, LLC",
        "contact_id": "11e95f8ec39de8fbdb0a4f1a",
        "date_of_birth": "2021-12-01",
        "domain_id": "11e95f8ec39de8fbdb0a4f1a",
        "email": "email@domain.com",
        "email_trx_receipt": true,
        "home_phone": "3339998822",
        "first_name": "John",
        "last_name": "Smith",
        "locale": "en-US",
        "office_phone": "3339998822",
        "office_ext_phone": "5",
        "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
        "requires_new_password": null,
        "terms_condition_code": "20220308",
        "tz": "America/New_York",
        "ui_prefs": {
          "entry_page": "dashboard",
          "page_size": 2,
          "report_export_type": "csv",
          "process_method": "virtual_terminal",
          "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
        },
        "username": "{user_name}",
        "user_api_key": "234bas8dfn8238f923w2",
        "user_hash_key": null,
        "user_type_code": 100,
        "password": null,
        "zip": "48375",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "status_id": 1,
        "api_only": false,
        "is_invitation": false,
        "address": {
          "city": "Novi",
          "state": "MI",
          "postal_code": "48375",
          "country": "US"
        },
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "status": true,
        "login_attempts": 0,
        "last_login_ts": 1422040992,
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "terms_accepted_ts": 1422040992,
        "terms_agree_ip": "192.168.0.10",
        "current_date_time": "2019-03-11T10:38:26-0700"
      },
      "modified_user": {
        "account_number": "5454545454545454",
        "branding_domain_url": "{branding_domain_url}",
        "cell_phone": "3339998822",
        "company_name": "Fortis Payment Systems, LLC",
        "contact_id": "11e95f8ec39de8fbdb0a4f1a",
        "date_of_birth": "2021-12-01",
        "domain_id": "11e95f8ec39de8fbdb0a4f1a",
        "email": "email@domain.com",
        "email_trx_receipt": true,
        "home_phone": "3339998822",
        "first_name": "John",
        "last_name": "Smith",
        "locale": "en-US",
        "office_phone": "3339998822",
        "office_ext_phone": "5",
        "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
        "requires_new_password": null,
        "terms_condition_code": "20220308",
        "tz": "America/New_York",
        "ui_prefs": {
          "entry_page": "dashboard",
          "page_size": 2,
          "report_export_type": "csv",
          "process_method": "virtual_terminal",
          "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
        },
        "username": "{user_name}",
        "user_api_key": "234bas8dfn8238f923w2",
        "user_hash_key": null,
        "user_type_code": 100,
        "password": null,
        "zip": "48375",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "status_id": 1,
        "api_only": false,
        "is_invitation": false,
        "address": {
          "city": "Novi",
          "state": "MI",
          "postal_code": "48375",
          "country": "US"
        },
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "status": true,
        "login_attempts": 0,
        "last_login_ts": 1422040992,
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "terms_accepted_ts": 1422040992,
        "terms_agree_ip": "192.168.0.10",
        "current_date_time": "2019-03-11T10:38:26-0700"
      },
      "changelogs": [
        {
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "action": "CREATE",
          "model": "TransactionRequest",
          "model_id": "11ec829598f0d4008be9aba4",
          "user_id": "11e95f8ec39de8fbdb0a4f1a",
          "changelog_details": [
            {
              "id": "11e95f8ec39de8fbdb0a4f1a",
              "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
              "field": "next_run_ts",
              "old_value": "1643616000"
            }
          ],
          "user": {
            "id": "11e95f8ec39de8fbdb0a4f1a",
            "username": "email@domain.com",
            "first_name": "Bob",
            "last_name": "Fairview"
          }
        }
      ],
      "contact": {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_number": "54545433332",
        "contact_api_id": "137",
        "first_name": "John",
        "last_name": "Smith",
        "cell_phone": "3339998822",
        "balance": 245.36,
        "address": {
          "city": "Novi",
          "state": "Michigan",
          "postal_code": "48375",
          "country": "US"
        },
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
        "email": "email@domain.com",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "active": true
      },
      "log_emails": [
        {
          "subject": "Payment Receipt - 12skiestech",
          "body": "This email is being sent from a server.",
          "source_address": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
          "return_path": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
          "provider_id": "0100017e67bcc530-e1dd23b4-8a39-4a5b-8d5d-68d51c4c942f-000000",
          "domain_id": "11e95f8ec39de8fbdb0a4f1a",
          "reason_sent": "Contact Email",
          "reason_model": "Transaction",
          "reason_model_id": "11e95f8ec39de8fbdb0a4f1a",
          "reply_to": "\"Zeamster\" <emma.p@zeamster.com>",
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992
        }
      ],
      "log_sms": {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "body": " ",
        "reason_model": " ",
        "reason_model_id": " ",
        "provider_id": " ",
        "status": " ",
        "sender": " ",
        "recipient": " ",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      },
      "transactions": [
        {
          "additional_amounts": [
            {
              "type": "cashback",
              "amount": 10,
              "account_type": "credit",
              "currency": 840
            }
          ],
          "billing_address": {
            "city": "Novi",
            "state": "Michigan",
            "postal_code": "48375",
            "phone": "3339998822"
          },
          "checkin_date": "2021-12-01",
          "checkout_date": "2021-12-01",
          "clerk_number": "AE1234",
          "contact_id": "11e95f8ec39de8fbdb0a4f1a",
          "custom_data": {},
          "customer_id": "customerid",
          "description": "some description",
          "identity_verification": {
            "dl_state": "MI",
            "dl_number": "1235567",
            "dob_year": "1980"
          },
          "iias_ind": 1,
          "image_front": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
          "image_back": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
          "installment": true,
          "installment_number": 1,
          "installment_count": 1,
          "location_api_id": "location-api-id-florida-2",
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
          "advance_deposit": false,
          "no_show": false,
          "notification_email_address": "johnsmith@smiths.com",
          "order_number": "433659378839",
          "po_number": "555555553123",
          "quick_invoice_id": "11e95f8ec39de8fbdb0a4f1a",
          "recurring": false,
          "recurring_number": 1,
          "room_num": "303",
          "room_rate": 95,
          "save_account": false,
          "save_account_title": "John Account",
          "subtotal_amount": 599,
          "surcharge_amount": 100,
          "tags": [
            "Walk-in Customer"
          ],
          "tax": 0,
          "tip_amount": 0,
          "transaction_amount": 0,
          "secondary_amount": 0,
          "transaction_api_id": "transaction-payment-abcd123",
          "transaction_c1": "custom-data-1",
          "transaction_c2": "custom-data-2",
          "transaction_c3": "custom-data-3",
          "bank_funded_only_override": false,
          "allow_partial_authorization_override": false,
          "auto_decline_cvv_override": false,
          "auto_decline_street_override": false,
          "auto_decline_zip_override": false,
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "modified_ts": 1422040992,
          "terminal_id": "11e95f8ec39de8fbdb0a4f1a",
          "account_holder_name": "smith",
          "account_type": "checking",
          "token_id": "11e95f8ec39de8fbdb0a4f1a",
          "ach_identifier": "P",
          "ach_sec_code": "C21",
          "auth_amount": 1,
          "auth_code": "BR349K",
          "avs": "BAD",
          "avs_enhanced": "N",
          "cardholder_present": true,
          "card_present": true,
          "check_number": "8520748520963",
          "customer_ip": "192.168.0.10",
          "cvv_response": "N",
          "entry_mode_id": "C",
          "emv_receipt_data": {
            "AID": "a0000000042203",
            "APPLAB": "US Maestro",
            "APPN": "US Maestro",
            "CVM": "Pin Verified",
            "TSI": "e800",
            "TVR": "0800008000"
          },
          "first_six": "545454",
          "last_four": "5454",
          "payment_method": "cc",
          "terminal_serial_number": "1234567890",
          "transaction_settlement_status": null,
          "charge_back_date": "2021-12-01",
          "is_recurring": true,
          "notification_email_sent": "true",
          "par": "Q1J4Z28RKA1EBL470G9XYG90R5D3E",
          "reason_code_id": 1000,
          "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
          "settle_date": "2021-12-01",
          "status_code": 101,
          "transaction_batch_id": "11e95f8ec39de8fbdb0a4f1a",
          "verbiage": "APPROVED",
          "void_date": "2021-12-01",
          "batch": "2",
          "terms_agree": true,
          "response_message": null,
          "return_date": "2021-12-01",
          "trx_source_id": 8,
          "routing_number": "051904524",
          "trx_source_code": 8,
          "paylink_id": "11e95f8ec39de8fbdb0a4f1a"
        }
      ],
      "cc_product_transaction": {
        "processor_version": "1_0_0",
        "title": "My terminal",
        "payment_method": "cc",
        "processor": "zgate",
        "mcc": "1111",
        "tax_surcharge_config": 2,
        "partner": "standalone",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "surcharge": {},
        "processor_data": {},
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
        "dup_check_per_batch": null,
        "paylink_allow": false,
        "quick_invoice_allow": false,
        "level3_allow": false,
        "payfac_enable": false,
        "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
      },
      "ach_product_transaction": {
        "processor_version": "1_0_0",
        "title": "My terminal",
        "payment_method": "cc",
        "processor": "zgate",
        "mcc": "1111",
        "tax_surcharge_config": 2,
        "partner": "standalone",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "surcharge": {},
        "processor_data": {},
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
        "dup_check_per_batch": null,
        "paylink_allow": false,
        "quick_invoice_allow": false,
        "level3_allow": false,
        "payfac_enable": false,
        "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
        "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
      },
      "email_blacklist": {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "isBlacklisted": true,
        "detail": true,
        "created_ts": 1422040992
      },
      "sms_blacklist": {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "isBlacklisted": true,
        "detail": true,
        "created_ts": 1422040992
      }
    }
  ],
  "links": {
    "type": "Links",
    "first": "/v1/endpoint?page[size]=10&page[number]=1",
    "previous": "/v1/endpoint?page[size]=10&page[number]=5",
    "last": "/v1/endpoint?page[size]=10&page[number]=42"
  },
  "pagination": {
    "type": "Pagination",
    "total_count": 423,
    "page_count": 42,
    "page_number": 6,
    "page_size": 10
  },
  "sort": {
    "type": "Sorting",
    "fields": [
      {
        "field": "last_name",
        "order": "asc"
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# Resend

Resend

```php
function resend(string $quickInvoiceId, ?int $email = null, ?int $sms = null): ResponseQuickInvoiceResend
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `quickInvoiceId` | `string` | Template, Required | Quick Invoice ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `email` | [`?int (EmailEnum)`](../../doc/models/email-enum.md) | Query, Optional | Resend Email |
| `sms` | [`?int (SmsEnum)`](../../doc/models/sms-enum.md) | Query, Optional | Resend SMS |

## Response Type

[`ResponseQuickInvoiceResend`](../../doc/models/response-quick-invoice-resend.md)

## Example Usage

```php
$quickInvoiceId = '11e95f8ec39de8fbdb0a4f1a';

$result = $quickInvoicesController->resend($quickInvoiceId);
```

## Example Response *(as JSON)*

```json
{
  "type": "QuickInvoiceResend",
  "data": {
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "email_log_id": "11e95f8ec39de8fbdb0a4f1a",
    "sms_log_id": "11e95f8ec39de8fbdb0a4f1a",
    "success": true,
    "sms_success": true,
    "email": "email@domain.com"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# Associate Transaction With Ouick Invoice

Associate Transaction with Ouick Invoice

```php
function associateTransactionWithOuickInvoice(
    string $quickInvoiceId,
    V1QuickInvoicesTransactionRequest $body
): ResponseQuickInvoice
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `quickInvoiceId` | `string` | Template, Required | Quick Invoice ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `body` | [`V1QuickInvoicesTransactionRequest`](../../doc/models/v1-quick-invoices-transaction-request.md) | Body, Required | - |

## Response Type

[`ResponseQuickInvoice`](../../doc/models/response-quick-invoice.md)

## Example Usage

```php
$quickInvoiceId = '11e95f8ec39de8fbdb0a4f1a';

$body = V1QuickInvoicesTransactionRequestBuilder::init(
    '11e95f8ec39de8fbdb0a4f1a'
)->build();

$result = $quickInvoicesController->associateTransactionWithOuickInvoice(
    $quickInvoiceId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "type": "QuickInvoice",
  "data": {
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
    "files": [
      {
        "file": {},
        "resource_id": "11e95f8ec39de8fbdb0a4f1a",
        "resource": "Contact",
        "product_file_id": "11e95f8ec39de8fbdb0a4f1a",
        "file_category_id": "11e95f8ec39de8fbdb0a4f1a",
        "visibility_group_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
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
    "is_active": true,
    "quick_invoice_setting": {
      "location_api_id": "11e95f8ec39de8fbdb0a4f1a",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "quick_invoice_template": "<html>Template<html>",
      "default_allow_partial_pay": true,
      "default_notification_on_due_date": true,
      "default_notification_days_after_due_date": 7,
      "default_notification_days_before_due_date": 3,
      "id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "quick_invoice_views": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "quick_invoice_id": "Quick Invoice ID",
        "created_ts": 1422040992
      }
    ],
    "location": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "account_number": "5454545454545454",
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "branding_domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "contact_email_trx_receipt_default": true,
      "default_ach": "11e608a7d515f1e093242bb2",
      "default_cc": "11e608a442a5f1e092242dda",
      "email_reply_to": "email@domain.com",
      "fax": "3339998822",
      "location_api_id": "location-111111",
      "location_api_key": "AE34BBCAADF4AE34BBCAADF4",
      "location_c1": "custom 1",
      "location_c2": "custom 2",
      "location_c3": "custom data 3",
      "name": "Sample Company Headquarters",
      "office_phone": "2481234567",
      "office_ext_phone": "1021021209",
      "tz": "America/New_York",
      "parent_id": "11e95f8ec39de8fbdb0a4f1a",
      "show_contact_notes": true,
      "show_contact_files": true,
      "ticket_hash_key": "A5F443CADF4AE34BBCAADF4"
    },
    "created_user": {
      "account_number": "5454545454545454",
      "branding_domain_url": "{branding_domain_url}",
      "cell_phone": "3339998822",
      "company_name": "Fortis Payment Systems, LLC",
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "date_of_birth": "2021-12-01",
      "domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "email": "email@domain.com",
      "email_trx_receipt": true,
      "home_phone": "3339998822",
      "first_name": "John",
      "last_name": "Smith",
      "locale": "en-US",
      "office_phone": "3339998822",
      "office_ext_phone": "5",
      "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
      "requires_new_password": null,
      "terms_condition_code": "20220308",
      "tz": "America/New_York",
      "ui_prefs": {
        "entry_page": "dashboard",
        "page_size": 2,
        "report_export_type": "csv",
        "process_method": "virtual_terminal",
        "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
      },
      "username": "{user_name}",
      "user_api_key": "234bas8dfn8238f923w2",
      "user_hash_key": null,
      "user_type_code": 100,
      "password": null,
      "zip": "48375",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "status_id": 1,
      "api_only": false,
      "is_invitation": false,
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "status": true,
      "login_attempts": 0,
      "last_login_ts": 1422040992,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_accepted_ts": 1422040992,
      "terms_agree_ip": "192.168.0.10",
      "current_date_time": "2019-03-11T10:38:26-0700"
    },
    "modified_user": {
      "account_number": "5454545454545454",
      "branding_domain_url": "{branding_domain_url}",
      "cell_phone": "3339998822",
      "company_name": "Fortis Payment Systems, LLC",
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "date_of_birth": "2021-12-01",
      "domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "email": "email@domain.com",
      "email_trx_receipt": true,
      "home_phone": "3339998822",
      "first_name": "John",
      "last_name": "Smith",
      "locale": "en-US",
      "office_phone": "3339998822",
      "office_ext_phone": "5",
      "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
      "requires_new_password": null,
      "terms_condition_code": "20220308",
      "tz": "America/New_York",
      "ui_prefs": {
        "entry_page": "dashboard",
        "page_size": 2,
        "report_export_type": "csv",
        "process_method": "virtual_terminal",
        "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
      },
      "username": "{user_name}",
      "user_api_key": "234bas8dfn8238f923w2",
      "user_hash_key": null,
      "user_type_code": 100,
      "password": null,
      "zip": "48375",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "status_id": 1,
      "api_only": false,
      "is_invitation": false,
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "status": true,
      "login_attempts": 0,
      "last_login_ts": 1422040992,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_accepted_ts": 1422040992,
      "terms_agree_ip": "192.168.0.10",
      "current_date_time": "2019-03-11T10:38:26-0700"
    },
    "changelogs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "action": "CREATE",
        "model": "TransactionRequest",
        "model_id": "11ec829598f0d4008be9aba4",
        "user_id": "11e95f8ec39de8fbdb0a4f1a",
        "changelog_details": [
          {
            "id": "11e95f8ec39de8fbdb0a4f1a",
            "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
            "field": "next_run_ts",
            "old_value": "1643616000"
          }
        ],
        "user": {
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "username": "email@domain.com",
          "first_name": "Bob",
          "last_name": "Fairview"
        }
      }
    ],
    "contact": {
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "account_number": "54545433332",
      "contact_api_id": "137",
      "first_name": "John",
      "last_name": "Smith",
      "cell_phone": "3339998822",
      "balance": 245.36,
      "address": {
        "city": "Novi",
        "state": "Michigan",
        "postal_code": "48375",
        "country": "US"
      },
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
      "email": "email@domain.com",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "active": true
    },
    "log_emails": [
      {
        "subject": "Payment Receipt - 12skiestech",
        "body": "This email is being sent from a server.",
        "source_address": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
        "return_path": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
        "provider_id": "0100017e67bcc530-e1dd23b4-8a39-4a5b-8d5d-68d51c4c942f-000000",
        "domain_id": "11e95f8ec39de8fbdb0a4f1a",
        "reason_sent": "Contact Email",
        "reason_model": "Transaction",
        "reason_model_id": "11e95f8ec39de8fbdb0a4f1a",
        "reply_to": "\"Zeamster\" <emma.p@zeamster.com>",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992
      }
    ],
    "log_sms": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "body": " ",
      "reason_model": " ",
      "reason_model_id": " ",
      "provider_id": " ",
      "status": " ",
      "sender": " ",
      "recipient": " ",
      "created_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "transactions": [
      {
        "additional_amounts": [
          {
            "type": "cashback",
            "amount": 10,
            "account_type": "credit",
            "currency": 840
          }
        ],
        "billing_address": {
          "city": "Novi",
          "state": "Michigan",
          "postal_code": "48375",
          "phone": "3339998822"
        },
        "checkin_date": "2021-12-01",
        "checkout_date": "2021-12-01",
        "clerk_number": "AE1234",
        "contact_id": "11e95f8ec39de8fbdb0a4f1a",
        "custom_data": {},
        "customer_id": "customerid",
        "description": "some description",
        "identity_verification": {
          "dl_state": "MI",
          "dl_number": "1235567",
          "dob_year": "1980"
        },
        "iias_ind": 1,
        "image_front": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
        "image_back": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
        "installment": true,
        "installment_number": 1,
        "installment_count": 1,
        "location_api_id": "location-api-id-florida-2",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "advance_deposit": false,
        "no_show": false,
        "notification_email_address": "johnsmith@smiths.com",
        "order_number": "433659378839",
        "po_number": "555555553123",
        "quick_invoice_id": "11e95f8ec39de8fbdb0a4f1a",
        "recurring": false,
        "recurring_number": 1,
        "room_num": "303",
        "room_rate": 95,
        "save_account": false,
        "save_account_title": "John Account",
        "subtotal_amount": 599,
        "surcharge_amount": 100,
        "tags": [
          "Walk-in Customer"
        ],
        "tax": 0,
        "tip_amount": 0,
        "transaction_amount": 0,
        "secondary_amount": 0,
        "transaction_api_id": "transaction-payment-abcd123",
        "transaction_c1": "custom-data-1",
        "transaction_c2": "custom-data-2",
        "transaction_c3": "custom-data-3",
        "bank_funded_only_override": false,
        "allow_partial_authorization_override": false,
        "auto_decline_cvv_override": false,
        "auto_decline_street_override": false,
        "auto_decline_zip_override": false,
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "terminal_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_holder_name": "smith",
        "account_type": "checking",
        "token_id": "11e95f8ec39de8fbdb0a4f1a",
        "ach_identifier": "P",
        "ach_sec_code": "C21",
        "auth_amount": 1,
        "auth_code": "BR349K",
        "avs": "BAD",
        "avs_enhanced": "N",
        "cardholder_present": true,
        "card_present": true,
        "check_number": "8520748520963",
        "customer_ip": "192.168.0.10",
        "cvv_response": "N",
        "entry_mode_id": "C",
        "emv_receipt_data": {
          "AID": "a0000000042203",
          "APPLAB": "US Maestro",
          "APPN": "US Maestro",
          "CVM": "Pin Verified",
          "TSI": "e800",
          "TVR": "0800008000"
        },
        "first_six": "545454",
        "last_four": "5454",
        "payment_method": "cc",
        "terminal_serial_number": "1234567890",
        "transaction_settlement_status": null,
        "charge_back_date": "2021-12-01",
        "is_recurring": true,
        "notification_email_sent": "true",
        "par": "Q1J4Z28RKA1EBL470G9XYG90R5D3E",
        "reason_code_id": 1000,
        "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
        "settle_date": "2021-12-01",
        "status_code": 101,
        "transaction_batch_id": "11e95f8ec39de8fbdb0a4f1a",
        "verbiage": "APPROVED",
        "void_date": "2021-12-01",
        "batch": "2",
        "terms_agree": true,
        "response_message": null,
        "return_date": "2021-12-01",
        "trx_source_id": 8,
        "routing_number": "051904524",
        "trx_source_code": 8,
        "paylink_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "cc_product_transaction": {
      "processor_version": "1_0_0",
      "title": "My terminal",
      "payment_method": "cc",
      "processor": "zgate",
      "mcc": "1111",
      "tax_surcharge_config": 2,
      "partner": "standalone",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "surcharge": {},
      "processor_data": {},
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
      "dup_check_per_batch": null,
      "paylink_allow": false,
      "quick_invoice_allow": false,
      "level3_allow": false,
      "payfac_enable": false,
      "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "ach_product_transaction": {
      "processor_version": "1_0_0",
      "title": "My terminal",
      "payment_method": "cc",
      "processor": "zgate",
      "mcc": "1111",
      "tax_surcharge_config": 2,
      "partner": "standalone",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "surcharge": {},
      "processor_data": {},
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
      "dup_check_per_batch": null,
      "paylink_allow": false,
      "quick_invoice_allow": false,
      "level3_allow": false,
      "payfac_enable": false,
      "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "email_blacklist": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "isBlacklisted": true,
      "detail": true,
      "created_ts": 1422040992
    },
    "sms_blacklist": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "isBlacklisted": true,
      "detail": true,
      "created_ts": 1422040992
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |
| 412 | Precondition Failed | [`Response412Exception`](../../doc/models/response-412-exception.md) |


# Remove Transaction From Quick Invoice

Remove transaction from Quick Invoice

```php
function removeTransactionFromQuickInvoice(
    string $quickInvoiceId,
    V1QuickInvoicesTransactionRequest $body
): ResponseQuickInvoice
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `quickInvoiceId` | `string` | Template, Required | Quick Invoice ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `body` | [`V1QuickInvoicesTransactionRequest`](../../doc/models/v1-quick-invoices-transaction-request.md) | Body, Required | - |

## Response Type

[`ResponseQuickInvoice`](../../doc/models/response-quick-invoice.md)

## Example Usage

```php
$quickInvoiceId = '11e95f8ec39de8fbdb0a4f1a';

$body = V1QuickInvoicesTransactionRequestBuilder::init(
    '11e95f8ec39de8fbdb0a4f1a'
)->build();

$result = $quickInvoicesController->removeTransactionFromQuickInvoice(
    $quickInvoiceId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "type": "QuickInvoice",
  "data": {
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
    "files": [
      {
        "file": {},
        "resource_id": "11e95f8ec39de8fbdb0a4f1a",
        "resource": "Contact",
        "product_file_id": "11e95f8ec39de8fbdb0a4f1a",
        "file_category_id": "11e95f8ec39de8fbdb0a4f1a",
        "visibility_group_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
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
    "is_active": true,
    "quick_invoice_setting": {
      "location_api_id": "11e95f8ec39de8fbdb0a4f1a",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "quick_invoice_template": "<html>Template<html>",
      "default_allow_partial_pay": true,
      "default_notification_on_due_date": true,
      "default_notification_days_after_due_date": 7,
      "default_notification_days_before_due_date": 3,
      "id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "quick_invoice_views": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "quick_invoice_id": "Quick Invoice ID",
        "created_ts": 1422040992
      }
    ],
    "location": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "account_number": "5454545454545454",
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "branding_domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "contact_email_trx_receipt_default": true,
      "default_ach": "11e608a7d515f1e093242bb2",
      "default_cc": "11e608a442a5f1e092242dda",
      "email_reply_to": "email@domain.com",
      "fax": "3339998822",
      "location_api_id": "location-111111",
      "location_api_key": "AE34BBCAADF4AE34BBCAADF4",
      "location_c1": "custom 1",
      "location_c2": "custom 2",
      "location_c3": "custom data 3",
      "name": "Sample Company Headquarters",
      "office_phone": "2481234567",
      "office_ext_phone": "1021021209",
      "tz": "America/New_York",
      "parent_id": "11e95f8ec39de8fbdb0a4f1a",
      "show_contact_notes": true,
      "show_contact_files": true,
      "ticket_hash_key": "A5F443CADF4AE34BBCAADF4"
    },
    "created_user": {
      "account_number": "5454545454545454",
      "branding_domain_url": "{branding_domain_url}",
      "cell_phone": "3339998822",
      "company_name": "Fortis Payment Systems, LLC",
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "date_of_birth": "2021-12-01",
      "domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "email": "email@domain.com",
      "email_trx_receipt": true,
      "home_phone": "3339998822",
      "first_name": "John",
      "last_name": "Smith",
      "locale": "en-US",
      "office_phone": "3339998822",
      "office_ext_phone": "5",
      "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
      "requires_new_password": null,
      "terms_condition_code": "20220308",
      "tz": "America/New_York",
      "ui_prefs": {
        "entry_page": "dashboard",
        "page_size": 2,
        "report_export_type": "csv",
        "process_method": "virtual_terminal",
        "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
      },
      "username": "{user_name}",
      "user_api_key": "234bas8dfn8238f923w2",
      "user_hash_key": null,
      "user_type_code": 100,
      "password": null,
      "zip": "48375",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "status_id": 1,
      "api_only": false,
      "is_invitation": false,
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "status": true,
      "login_attempts": 0,
      "last_login_ts": 1422040992,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_accepted_ts": 1422040992,
      "terms_agree_ip": "192.168.0.10",
      "current_date_time": "2019-03-11T10:38:26-0700"
    },
    "modified_user": {
      "account_number": "5454545454545454",
      "branding_domain_url": "{branding_domain_url}",
      "cell_phone": "3339998822",
      "company_name": "Fortis Payment Systems, LLC",
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "date_of_birth": "2021-12-01",
      "domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "email": "email@domain.com",
      "email_trx_receipt": true,
      "home_phone": "3339998822",
      "first_name": "John",
      "last_name": "Smith",
      "locale": "en-US",
      "office_phone": "3339998822",
      "office_ext_phone": "5",
      "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
      "requires_new_password": null,
      "terms_condition_code": "20220308",
      "tz": "America/New_York",
      "ui_prefs": {
        "entry_page": "dashboard",
        "page_size": 2,
        "report_export_type": "csv",
        "process_method": "virtual_terminal",
        "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
      },
      "username": "{user_name}",
      "user_api_key": "234bas8dfn8238f923w2",
      "user_hash_key": null,
      "user_type_code": 100,
      "password": null,
      "zip": "48375",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "status_id": 1,
      "api_only": false,
      "is_invitation": false,
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "status": true,
      "login_attempts": 0,
      "last_login_ts": 1422040992,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_accepted_ts": 1422040992,
      "terms_agree_ip": "192.168.0.10",
      "current_date_time": "2019-03-11T10:38:26-0700"
    },
    "changelogs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "action": "CREATE",
        "model": "TransactionRequest",
        "model_id": "11ec829598f0d4008be9aba4",
        "user_id": "11e95f8ec39de8fbdb0a4f1a",
        "changelog_details": [
          {
            "id": "11e95f8ec39de8fbdb0a4f1a",
            "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
            "field": "next_run_ts",
            "old_value": "1643616000"
          }
        ],
        "user": {
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "username": "email@domain.com",
          "first_name": "Bob",
          "last_name": "Fairview"
        }
      }
    ],
    "contact": {
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "account_number": "54545433332",
      "contact_api_id": "137",
      "first_name": "John",
      "last_name": "Smith",
      "cell_phone": "3339998822",
      "balance": 245.36,
      "address": {
        "city": "Novi",
        "state": "Michigan",
        "postal_code": "48375",
        "country": "US"
      },
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
      "email": "email@domain.com",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "active": true
    },
    "log_emails": [
      {
        "subject": "Payment Receipt - 12skiestech",
        "body": "This email is being sent from a server.",
        "source_address": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
        "return_path": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
        "provider_id": "0100017e67bcc530-e1dd23b4-8a39-4a5b-8d5d-68d51c4c942f-000000",
        "domain_id": "11e95f8ec39de8fbdb0a4f1a",
        "reason_sent": "Contact Email",
        "reason_model": "Transaction",
        "reason_model_id": "11e95f8ec39de8fbdb0a4f1a",
        "reply_to": "\"Zeamster\" <emma.p@zeamster.com>",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992
      }
    ],
    "log_sms": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "body": " ",
      "reason_model": " ",
      "reason_model_id": " ",
      "provider_id": " ",
      "status": " ",
      "sender": " ",
      "recipient": " ",
      "created_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "transactions": [
      {
        "additional_amounts": [
          {
            "type": "cashback",
            "amount": 10,
            "account_type": "credit",
            "currency": 840
          }
        ],
        "billing_address": {
          "city": "Novi",
          "state": "Michigan",
          "postal_code": "48375",
          "phone": "3339998822"
        },
        "checkin_date": "2021-12-01",
        "checkout_date": "2021-12-01",
        "clerk_number": "AE1234",
        "contact_id": "11e95f8ec39de8fbdb0a4f1a",
        "custom_data": {},
        "customer_id": "customerid",
        "description": "some description",
        "identity_verification": {
          "dl_state": "MI",
          "dl_number": "1235567",
          "dob_year": "1980"
        },
        "iias_ind": 1,
        "image_front": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
        "image_back": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
        "installment": true,
        "installment_number": 1,
        "installment_count": 1,
        "location_api_id": "location-api-id-florida-2",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "advance_deposit": false,
        "no_show": false,
        "notification_email_address": "johnsmith@smiths.com",
        "order_number": "433659378839",
        "po_number": "555555553123",
        "quick_invoice_id": "11e95f8ec39de8fbdb0a4f1a",
        "recurring": false,
        "recurring_number": 1,
        "room_num": "303",
        "room_rate": 95,
        "save_account": false,
        "save_account_title": "John Account",
        "subtotal_amount": 599,
        "surcharge_amount": 100,
        "tags": [
          "Walk-in Customer"
        ],
        "tax": 0,
        "tip_amount": 0,
        "transaction_amount": 0,
        "secondary_amount": 0,
        "transaction_api_id": "transaction-payment-abcd123",
        "transaction_c1": "custom-data-1",
        "transaction_c2": "custom-data-2",
        "transaction_c3": "custom-data-3",
        "bank_funded_only_override": false,
        "allow_partial_authorization_override": false,
        "auto_decline_cvv_override": false,
        "auto_decline_street_override": false,
        "auto_decline_zip_override": false,
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "terminal_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_holder_name": "smith",
        "account_type": "checking",
        "token_id": "11e95f8ec39de8fbdb0a4f1a",
        "ach_identifier": "P",
        "ach_sec_code": "C21",
        "auth_amount": 1,
        "auth_code": "BR349K",
        "avs": "BAD",
        "avs_enhanced": "N",
        "cardholder_present": true,
        "card_present": true,
        "check_number": "8520748520963",
        "customer_ip": "192.168.0.10",
        "cvv_response": "N",
        "entry_mode_id": "C",
        "emv_receipt_data": {
          "AID": "a0000000042203",
          "APPLAB": "US Maestro",
          "APPN": "US Maestro",
          "CVM": "Pin Verified",
          "TSI": "e800",
          "TVR": "0800008000"
        },
        "first_six": "545454",
        "last_four": "5454",
        "payment_method": "cc",
        "terminal_serial_number": "1234567890",
        "transaction_settlement_status": null,
        "charge_back_date": "2021-12-01",
        "is_recurring": true,
        "notification_email_sent": "true",
        "par": "Q1J4Z28RKA1EBL470G9XYG90R5D3E",
        "reason_code_id": 1000,
        "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
        "settle_date": "2021-12-01",
        "status_code": 101,
        "transaction_batch_id": "11e95f8ec39de8fbdb0a4f1a",
        "verbiage": "APPROVED",
        "void_date": "2021-12-01",
        "batch": "2",
        "terms_agree": true,
        "response_message": null,
        "return_date": "2021-12-01",
        "trx_source_id": 8,
        "routing_number": "051904524",
        "trx_source_code": 8,
        "paylink_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "cc_product_transaction": {
      "processor_version": "1_0_0",
      "title": "My terminal",
      "payment_method": "cc",
      "processor": "zgate",
      "mcc": "1111",
      "tax_surcharge_config": 2,
      "partner": "standalone",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "surcharge": {},
      "processor_data": {},
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
      "dup_check_per_batch": null,
      "paylink_allow": false,
      "quick_invoice_allow": false,
      "level3_allow": false,
      "payfac_enable": false,
      "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "ach_product_transaction": {
      "processor_version": "1_0_0",
      "title": "My terminal",
      "payment_method": "cc",
      "processor": "zgate",
      "mcc": "1111",
      "tax_surcharge_config": 2,
      "partner": "standalone",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "surcharge": {},
      "processor_data": {},
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
      "dup_check_per_batch": null,
      "paylink_allow": false,
      "quick_invoice_allow": false,
      "level3_allow": false,
      "payfac_enable": false,
      "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "email_blacklist": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "isBlacklisted": true,
      "detail": true,
      "created_ts": 1422040992
    },
    "sms_blacklist": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "isBlacklisted": true,
      "detail": true,
      "created_ts": 1422040992
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |
| 412 | Precondition Failed | [`Response412Exception`](../../doc/models/response-412-exception.md) |


# Delete Quick Invoice

Delete quick Invoice

```php
function deleteQuickInvoice(string $quickInvoiceId): ResponseQuickInvoice
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `quickInvoiceId` | `string` | Template, Required | Quick Invoice ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |

## Response Type

[`ResponseQuickInvoice`](../../doc/models/response-quick-invoice.md)

## Example Usage

```php
$quickInvoiceId = '11e95f8ec39de8fbdb0a4f1a';

$result = $quickInvoicesController->deleteQuickInvoice($quickInvoiceId);
```

## Example Response *(as JSON)*

```json
{
  "type": "QuickInvoice",
  "data": {
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
    "files": [
      {
        "file": {},
        "resource_id": "11e95f8ec39de8fbdb0a4f1a",
        "resource": "Contact",
        "product_file_id": "11e95f8ec39de8fbdb0a4f1a",
        "file_category_id": "11e95f8ec39de8fbdb0a4f1a",
        "visibility_group_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
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
    "is_active": true,
    "quick_invoice_setting": {
      "location_api_id": "11e95f8ec39de8fbdb0a4f1a",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "quick_invoice_template": "<html>Template<html>",
      "default_allow_partial_pay": true,
      "default_notification_on_due_date": true,
      "default_notification_days_after_due_date": 7,
      "default_notification_days_before_due_date": 3,
      "id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "quick_invoice_views": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "quick_invoice_id": "Quick Invoice ID",
        "created_ts": 1422040992
      }
    ],
    "location": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "account_number": "5454545454545454",
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "branding_domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "contact_email_trx_receipt_default": true,
      "default_ach": "11e608a7d515f1e093242bb2",
      "default_cc": "11e608a442a5f1e092242dda",
      "email_reply_to": "email@domain.com",
      "fax": "3339998822",
      "location_api_id": "location-111111",
      "location_api_key": "AE34BBCAADF4AE34BBCAADF4",
      "location_c1": "custom 1",
      "location_c2": "custom 2",
      "location_c3": "custom data 3",
      "name": "Sample Company Headquarters",
      "office_phone": "2481234567",
      "office_ext_phone": "1021021209",
      "tz": "America/New_York",
      "parent_id": "11e95f8ec39de8fbdb0a4f1a",
      "show_contact_notes": true,
      "show_contact_files": true,
      "ticket_hash_key": "A5F443CADF4AE34BBCAADF4"
    },
    "created_user": {
      "account_number": "5454545454545454",
      "branding_domain_url": "{branding_domain_url}",
      "cell_phone": "3339998822",
      "company_name": "Fortis Payment Systems, LLC",
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "date_of_birth": "2021-12-01",
      "domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "email": "email@domain.com",
      "email_trx_receipt": true,
      "home_phone": "3339998822",
      "first_name": "John",
      "last_name": "Smith",
      "locale": "en-US",
      "office_phone": "3339998822",
      "office_ext_phone": "5",
      "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
      "requires_new_password": null,
      "terms_condition_code": "20220308",
      "tz": "America/New_York",
      "ui_prefs": {
        "entry_page": "dashboard",
        "page_size": 2,
        "report_export_type": "csv",
        "process_method": "virtual_terminal",
        "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
      },
      "username": "{user_name}",
      "user_api_key": "234bas8dfn8238f923w2",
      "user_hash_key": null,
      "user_type_code": 100,
      "password": null,
      "zip": "48375",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "status_id": 1,
      "api_only": false,
      "is_invitation": false,
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "status": true,
      "login_attempts": 0,
      "last_login_ts": 1422040992,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_accepted_ts": 1422040992,
      "terms_agree_ip": "192.168.0.10",
      "current_date_time": "2019-03-11T10:38:26-0700"
    },
    "modified_user": {
      "account_number": "5454545454545454",
      "branding_domain_url": "{branding_domain_url}",
      "cell_phone": "3339998822",
      "company_name": "Fortis Payment Systems, LLC",
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "date_of_birth": "2021-12-01",
      "domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "email": "email@domain.com",
      "email_trx_receipt": true,
      "home_phone": "3339998822",
      "first_name": "John",
      "last_name": "Smith",
      "locale": "en-US",
      "office_phone": "3339998822",
      "office_ext_phone": "5",
      "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
      "requires_new_password": null,
      "terms_condition_code": "20220308",
      "tz": "America/New_York",
      "ui_prefs": {
        "entry_page": "dashboard",
        "page_size": 2,
        "report_export_type": "csv",
        "process_method": "virtual_terminal",
        "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
      },
      "username": "{user_name}",
      "user_api_key": "234bas8dfn8238f923w2",
      "user_hash_key": null,
      "user_type_code": 100,
      "password": null,
      "zip": "48375",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "status_id": 1,
      "api_only": false,
      "is_invitation": false,
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "status": true,
      "login_attempts": 0,
      "last_login_ts": 1422040992,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_accepted_ts": 1422040992,
      "terms_agree_ip": "192.168.0.10",
      "current_date_time": "2019-03-11T10:38:26-0700"
    },
    "changelogs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "action": "CREATE",
        "model": "TransactionRequest",
        "model_id": "11ec829598f0d4008be9aba4",
        "user_id": "11e95f8ec39de8fbdb0a4f1a",
        "changelog_details": [
          {
            "id": "11e95f8ec39de8fbdb0a4f1a",
            "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
            "field": "next_run_ts",
            "old_value": "1643616000"
          }
        ],
        "user": {
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "username": "email@domain.com",
          "first_name": "Bob",
          "last_name": "Fairview"
        }
      }
    ],
    "contact": {
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "account_number": "54545433332",
      "contact_api_id": "137",
      "first_name": "John",
      "last_name": "Smith",
      "cell_phone": "3339998822",
      "balance": 245.36,
      "address": {
        "city": "Novi",
        "state": "Michigan",
        "postal_code": "48375",
        "country": "US"
      },
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
      "email": "email@domain.com",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "active": true
    },
    "log_emails": [
      {
        "subject": "Payment Receipt - 12skiestech",
        "body": "This email is being sent from a server.",
        "source_address": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
        "return_path": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
        "provider_id": "0100017e67bcc530-e1dd23b4-8a39-4a5b-8d5d-68d51c4c942f-000000",
        "domain_id": "11e95f8ec39de8fbdb0a4f1a",
        "reason_sent": "Contact Email",
        "reason_model": "Transaction",
        "reason_model_id": "11e95f8ec39de8fbdb0a4f1a",
        "reply_to": "\"Zeamster\" <emma.p@zeamster.com>",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992
      }
    ],
    "log_sms": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "body": " ",
      "reason_model": " ",
      "reason_model_id": " ",
      "provider_id": " ",
      "status": " ",
      "sender": " ",
      "recipient": " ",
      "created_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "transactions": [
      {
        "additional_amounts": [
          {
            "type": "cashback",
            "amount": 10,
            "account_type": "credit",
            "currency": 840
          }
        ],
        "billing_address": {
          "city": "Novi",
          "state": "Michigan",
          "postal_code": "48375",
          "phone": "3339998822"
        },
        "checkin_date": "2021-12-01",
        "checkout_date": "2021-12-01",
        "clerk_number": "AE1234",
        "contact_id": "11e95f8ec39de8fbdb0a4f1a",
        "custom_data": {},
        "customer_id": "customerid",
        "description": "some description",
        "identity_verification": {
          "dl_state": "MI",
          "dl_number": "1235567",
          "dob_year": "1980"
        },
        "iias_ind": 1,
        "image_front": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
        "image_back": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
        "installment": true,
        "installment_number": 1,
        "installment_count": 1,
        "location_api_id": "location-api-id-florida-2",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "advance_deposit": false,
        "no_show": false,
        "notification_email_address": "johnsmith@smiths.com",
        "order_number": "433659378839",
        "po_number": "555555553123",
        "quick_invoice_id": "11e95f8ec39de8fbdb0a4f1a",
        "recurring": false,
        "recurring_number": 1,
        "room_num": "303",
        "room_rate": 95,
        "save_account": false,
        "save_account_title": "John Account",
        "subtotal_amount": 599,
        "surcharge_amount": 100,
        "tags": [
          "Walk-in Customer"
        ],
        "tax": 0,
        "tip_amount": 0,
        "transaction_amount": 0,
        "secondary_amount": 0,
        "transaction_api_id": "transaction-payment-abcd123",
        "transaction_c1": "custom-data-1",
        "transaction_c2": "custom-data-2",
        "transaction_c3": "custom-data-3",
        "bank_funded_only_override": false,
        "allow_partial_authorization_override": false,
        "auto_decline_cvv_override": false,
        "auto_decline_street_override": false,
        "auto_decline_zip_override": false,
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "terminal_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_holder_name": "smith",
        "account_type": "checking",
        "token_id": "11e95f8ec39de8fbdb0a4f1a",
        "ach_identifier": "P",
        "ach_sec_code": "C21",
        "auth_amount": 1,
        "auth_code": "BR349K",
        "avs": "BAD",
        "avs_enhanced": "N",
        "cardholder_present": true,
        "card_present": true,
        "check_number": "8520748520963",
        "customer_ip": "192.168.0.10",
        "cvv_response": "N",
        "entry_mode_id": "C",
        "emv_receipt_data": {
          "AID": "a0000000042203",
          "APPLAB": "US Maestro",
          "APPN": "US Maestro",
          "CVM": "Pin Verified",
          "TSI": "e800",
          "TVR": "0800008000"
        },
        "first_six": "545454",
        "last_four": "5454",
        "payment_method": "cc",
        "terminal_serial_number": "1234567890",
        "transaction_settlement_status": null,
        "charge_back_date": "2021-12-01",
        "is_recurring": true,
        "notification_email_sent": "true",
        "par": "Q1J4Z28RKA1EBL470G9XYG90R5D3E",
        "reason_code_id": 1000,
        "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
        "settle_date": "2021-12-01",
        "status_code": 101,
        "transaction_batch_id": "11e95f8ec39de8fbdb0a4f1a",
        "verbiage": "APPROVED",
        "void_date": "2021-12-01",
        "batch": "2",
        "terms_agree": true,
        "response_message": null,
        "return_date": "2021-12-01",
        "trx_source_id": 8,
        "routing_number": "051904524",
        "trx_source_code": 8,
        "paylink_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "cc_product_transaction": {
      "processor_version": "1_0_0",
      "title": "My terminal",
      "payment_method": "cc",
      "processor": "zgate",
      "mcc": "1111",
      "tax_surcharge_config": 2,
      "partner": "standalone",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "surcharge": {},
      "processor_data": {},
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
      "dup_check_per_batch": null,
      "paylink_allow": false,
      "quick_invoice_allow": false,
      "level3_allow": false,
      "payfac_enable": false,
      "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "ach_product_transaction": {
      "processor_version": "1_0_0",
      "title": "My terminal",
      "payment_method": "cc",
      "processor": "zgate",
      "mcc": "1111",
      "tax_surcharge_config": 2,
      "partner": "standalone",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "surcharge": {},
      "processor_data": {},
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
      "dup_check_per_batch": null,
      "paylink_allow": false,
      "quick_invoice_allow": false,
      "level3_allow": false,
      "payfac_enable": false,
      "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "email_blacklist": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "isBlacklisted": true,
      "detail": true,
      "created_ts": 1422040992
    },
    "sms_blacklist": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "isBlacklisted": true,
      "detail": true,
      "created_ts": 1422040992
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# View Single Quick Invoice Record

View single quick invoice record

```php
function viewSingleQuickInvoiceRecord(string $quickInvoiceId, ?array $expand = null): ResponseQuickInvoice
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `quickInvoiceId` | `string` | Template, Required | Quick Invoice ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `expand` | [`?(string[]) (Expand11Enum)`](../../doc/models/expand-11-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseQuickInvoice`](../../doc/models/response-quick-invoice.md)

## Example Usage

```php
$quickInvoiceId = '11e95f8ec39de8fbdb0a4f1a';

$result = $quickInvoicesController->viewSingleQuickInvoiceRecord($quickInvoiceId);
```

## Example Response *(as JSON)*

```json
{
  "type": "QuickInvoice",
  "data": {
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
    "files": [
      {
        "file": {},
        "resource_id": "11e95f8ec39de8fbdb0a4f1a",
        "resource": "Contact",
        "product_file_id": "11e95f8ec39de8fbdb0a4f1a",
        "file_category_id": "11e95f8ec39de8fbdb0a4f1a",
        "visibility_group_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
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
    "is_active": true,
    "quick_invoice_setting": {
      "location_api_id": "11e95f8ec39de8fbdb0a4f1a",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "quick_invoice_template": "<html>Template<html>",
      "default_allow_partial_pay": true,
      "default_notification_on_due_date": true,
      "default_notification_days_after_due_date": 7,
      "default_notification_days_before_due_date": 3,
      "id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "quick_invoice_views": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "quick_invoice_id": "Quick Invoice ID",
        "created_ts": 1422040992
      }
    ],
    "location": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "account_number": "5454545454545454",
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "branding_domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "contact_email_trx_receipt_default": true,
      "default_ach": "11e608a7d515f1e093242bb2",
      "default_cc": "11e608a442a5f1e092242dda",
      "email_reply_to": "email@domain.com",
      "fax": "3339998822",
      "location_api_id": "location-111111",
      "location_api_key": "AE34BBCAADF4AE34BBCAADF4",
      "location_c1": "custom 1",
      "location_c2": "custom 2",
      "location_c3": "custom data 3",
      "name": "Sample Company Headquarters",
      "office_phone": "2481234567",
      "office_ext_phone": "1021021209",
      "tz": "America/New_York",
      "parent_id": "11e95f8ec39de8fbdb0a4f1a",
      "show_contact_notes": true,
      "show_contact_files": true,
      "ticket_hash_key": "A5F443CADF4AE34BBCAADF4"
    },
    "created_user": {
      "account_number": "5454545454545454",
      "branding_domain_url": "{branding_domain_url}",
      "cell_phone": "3339998822",
      "company_name": "Fortis Payment Systems, LLC",
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "date_of_birth": "2021-12-01",
      "domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "email": "email@domain.com",
      "email_trx_receipt": true,
      "home_phone": "3339998822",
      "first_name": "John",
      "last_name": "Smith",
      "locale": "en-US",
      "office_phone": "3339998822",
      "office_ext_phone": "5",
      "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
      "requires_new_password": null,
      "terms_condition_code": "20220308",
      "tz": "America/New_York",
      "ui_prefs": {
        "entry_page": "dashboard",
        "page_size": 2,
        "report_export_type": "csv",
        "process_method": "virtual_terminal",
        "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
      },
      "username": "{user_name}",
      "user_api_key": "234bas8dfn8238f923w2",
      "user_hash_key": null,
      "user_type_code": 100,
      "password": null,
      "zip": "48375",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "status_id": 1,
      "api_only": false,
      "is_invitation": false,
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "status": true,
      "login_attempts": 0,
      "last_login_ts": 1422040992,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_accepted_ts": 1422040992,
      "terms_agree_ip": "192.168.0.10",
      "current_date_time": "2019-03-11T10:38:26-0700"
    },
    "modified_user": {
      "account_number": "5454545454545454",
      "branding_domain_url": "{branding_domain_url}",
      "cell_phone": "3339998822",
      "company_name": "Fortis Payment Systems, LLC",
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "date_of_birth": "2021-12-01",
      "domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "email": "email@domain.com",
      "email_trx_receipt": true,
      "home_phone": "3339998822",
      "first_name": "John",
      "last_name": "Smith",
      "locale": "en-US",
      "office_phone": "3339998822",
      "office_ext_phone": "5",
      "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
      "requires_new_password": null,
      "terms_condition_code": "20220308",
      "tz": "America/New_York",
      "ui_prefs": {
        "entry_page": "dashboard",
        "page_size": 2,
        "report_export_type": "csv",
        "process_method": "virtual_terminal",
        "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
      },
      "username": "{user_name}",
      "user_api_key": "234bas8dfn8238f923w2",
      "user_hash_key": null,
      "user_type_code": 100,
      "password": null,
      "zip": "48375",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "status_id": 1,
      "api_only": false,
      "is_invitation": false,
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "status": true,
      "login_attempts": 0,
      "last_login_ts": 1422040992,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_accepted_ts": 1422040992,
      "terms_agree_ip": "192.168.0.10",
      "current_date_time": "2019-03-11T10:38:26-0700"
    },
    "changelogs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "action": "CREATE",
        "model": "TransactionRequest",
        "model_id": "11ec829598f0d4008be9aba4",
        "user_id": "11e95f8ec39de8fbdb0a4f1a",
        "changelog_details": [
          {
            "id": "11e95f8ec39de8fbdb0a4f1a",
            "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
            "field": "next_run_ts",
            "old_value": "1643616000"
          }
        ],
        "user": {
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "username": "email@domain.com",
          "first_name": "Bob",
          "last_name": "Fairview"
        }
      }
    ],
    "contact": {
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "account_number": "54545433332",
      "contact_api_id": "137",
      "first_name": "John",
      "last_name": "Smith",
      "cell_phone": "3339998822",
      "balance": 245.36,
      "address": {
        "city": "Novi",
        "state": "Michigan",
        "postal_code": "48375",
        "country": "US"
      },
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
      "email": "email@domain.com",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "active": true
    },
    "log_emails": [
      {
        "subject": "Payment Receipt - 12skiestech",
        "body": "This email is being sent from a server.",
        "source_address": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
        "return_path": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
        "provider_id": "0100017e67bcc530-e1dd23b4-8a39-4a5b-8d5d-68d51c4c942f-000000",
        "domain_id": "11e95f8ec39de8fbdb0a4f1a",
        "reason_sent": "Contact Email",
        "reason_model": "Transaction",
        "reason_model_id": "11e95f8ec39de8fbdb0a4f1a",
        "reply_to": "\"Zeamster\" <emma.p@zeamster.com>",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992
      }
    ],
    "log_sms": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "body": " ",
      "reason_model": " ",
      "reason_model_id": " ",
      "provider_id": " ",
      "status": " ",
      "sender": " ",
      "recipient": " ",
      "created_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "transactions": [
      {
        "additional_amounts": [
          {
            "type": "cashback",
            "amount": 10,
            "account_type": "credit",
            "currency": 840
          }
        ],
        "billing_address": {
          "city": "Novi",
          "state": "Michigan",
          "postal_code": "48375",
          "phone": "3339998822"
        },
        "checkin_date": "2021-12-01",
        "checkout_date": "2021-12-01",
        "clerk_number": "AE1234",
        "contact_id": "11e95f8ec39de8fbdb0a4f1a",
        "custom_data": {},
        "customer_id": "customerid",
        "description": "some description",
        "identity_verification": {
          "dl_state": "MI",
          "dl_number": "1235567",
          "dob_year": "1980"
        },
        "iias_ind": 1,
        "image_front": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
        "image_back": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
        "installment": true,
        "installment_number": 1,
        "installment_count": 1,
        "location_api_id": "location-api-id-florida-2",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "advance_deposit": false,
        "no_show": false,
        "notification_email_address": "johnsmith@smiths.com",
        "order_number": "433659378839",
        "po_number": "555555553123",
        "quick_invoice_id": "11e95f8ec39de8fbdb0a4f1a",
        "recurring": false,
        "recurring_number": 1,
        "room_num": "303",
        "room_rate": 95,
        "save_account": false,
        "save_account_title": "John Account",
        "subtotal_amount": 599,
        "surcharge_amount": 100,
        "tags": [
          "Walk-in Customer"
        ],
        "tax": 0,
        "tip_amount": 0,
        "transaction_amount": 0,
        "secondary_amount": 0,
        "transaction_api_id": "transaction-payment-abcd123",
        "transaction_c1": "custom-data-1",
        "transaction_c2": "custom-data-2",
        "transaction_c3": "custom-data-3",
        "bank_funded_only_override": false,
        "allow_partial_authorization_override": false,
        "auto_decline_cvv_override": false,
        "auto_decline_street_override": false,
        "auto_decline_zip_override": false,
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "terminal_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_holder_name": "smith",
        "account_type": "checking",
        "token_id": "11e95f8ec39de8fbdb0a4f1a",
        "ach_identifier": "P",
        "ach_sec_code": "C21",
        "auth_amount": 1,
        "auth_code": "BR349K",
        "avs": "BAD",
        "avs_enhanced": "N",
        "cardholder_present": true,
        "card_present": true,
        "check_number": "8520748520963",
        "customer_ip": "192.168.0.10",
        "cvv_response": "N",
        "entry_mode_id": "C",
        "emv_receipt_data": {
          "AID": "a0000000042203",
          "APPLAB": "US Maestro",
          "APPN": "US Maestro",
          "CVM": "Pin Verified",
          "TSI": "e800",
          "TVR": "0800008000"
        },
        "first_six": "545454",
        "last_four": "5454",
        "payment_method": "cc",
        "terminal_serial_number": "1234567890",
        "transaction_settlement_status": null,
        "charge_back_date": "2021-12-01",
        "is_recurring": true,
        "notification_email_sent": "true",
        "par": "Q1J4Z28RKA1EBL470G9XYG90R5D3E",
        "reason_code_id": 1000,
        "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
        "settle_date": "2021-12-01",
        "status_code": 101,
        "transaction_batch_id": "11e95f8ec39de8fbdb0a4f1a",
        "verbiage": "APPROVED",
        "void_date": "2021-12-01",
        "batch": "2",
        "terms_agree": true,
        "response_message": null,
        "return_date": "2021-12-01",
        "trx_source_id": 8,
        "routing_number": "051904524",
        "trx_source_code": 8,
        "paylink_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "cc_product_transaction": {
      "processor_version": "1_0_0",
      "title": "My terminal",
      "payment_method": "cc",
      "processor": "zgate",
      "mcc": "1111",
      "tax_surcharge_config": 2,
      "partner": "standalone",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "surcharge": {},
      "processor_data": {},
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
      "dup_check_per_batch": null,
      "paylink_allow": false,
      "quick_invoice_allow": false,
      "level3_allow": false,
      "payfac_enable": false,
      "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "ach_product_transaction": {
      "processor_version": "1_0_0",
      "title": "My terminal",
      "payment_method": "cc",
      "processor": "zgate",
      "mcc": "1111",
      "tax_surcharge_config": 2,
      "partner": "standalone",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "surcharge": {},
      "processor_data": {},
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
      "dup_check_per_batch": null,
      "paylink_allow": false,
      "quick_invoice_allow": false,
      "level3_allow": false,
      "payfac_enable": false,
      "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "email_blacklist": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "isBlacklisted": true,
      "detail": true,
      "created_ts": 1422040992
    },
    "sms_blacklist": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "isBlacklisted": true,
      "detail": true,
      "created_ts": 1422040992
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# Update Quick Invoice

NOTE: A quick invoice can not be updated if it is already closed.
Once a partial payment is made, the item list should not be editable.

```php
function updateQuickInvoice(
    string $quickInvoiceId,
    V1QuickInvoicesRequest1 $body,
    ?array $expand = null
): ResponseQuickInvoice
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `quickInvoiceId` | `string` | Template, Required | Quick Invoice ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `body` | [`V1QuickInvoicesRequest1`](../../doc/models/v1-quick-invoices-request-1.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand11Enum)`](../../doc/models/expand-11-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseQuickInvoice`](../../doc/models/response-quick-invoice.md)

## Example Usage

```php
$quickInvoiceId = '11e95f8ec39de8fbdb0a4f1a';

$body = V1QuickInvoicesRequest1Builder::init()
    ->locationId('11e95f8ec39de8fbdb0a4f1a')
    ->title('My terminal')
    ->ccProductTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->achProductTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->dueDate('2021-12-01')
    ->allowOverpayment(true)
    ->bankFundedOnlyOverride(true)
    ->email('email@domain.com')
    ->contactId('11e95f8ec39de8fbdb0a4f1a')
    ->contactApiId('contact12345')
    ->quickInvoiceApiId('quickinvoice12345')
    ->customerId('11e95f8ec39de8fbdb0a4f1a')
    ->expireDate('2021-12-01')
    ->allowPartialPay(true)
    ->attachFilesToEmail(true)
    ->sendEmail(true)
    ->invoiceNumber('invoice12345')
    ->itemHeader('Quick invoice header sample')
    ->itemFooter('Thank you')
    ->amountDue(24536)
    ->notificationEmail('email@domain.com')
    ->statusId(1)
    ->statusCode(1)
    ->note('some note')
    ->notificationDaysBeforeDueDate(3)
    ->notificationDaysAfterDueDate(7)
    ->notificationOnDueDate(true)
    ->sendTextToPay(true)
    ->remainingBalance(24536)
    ->singlePaymentMinAmount(500)
    ->singlePaymentMaxAmount(500000)
    ->cellPhone('3339998822')
    ->build();

$result = $quickInvoicesController->updateQuickInvoice(
    $quickInvoiceId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "type": "QuickInvoice",
  "data": {
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
    "files": [
      {
        "file": {},
        "resource_id": "11e95f8ec39de8fbdb0a4f1a",
        "resource": "Contact",
        "product_file_id": "11e95f8ec39de8fbdb0a4f1a",
        "file_category_id": "11e95f8ec39de8fbdb0a4f1a",
        "visibility_group_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
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
    "is_active": true,
    "quick_invoice_setting": {
      "location_api_id": "11e95f8ec39de8fbdb0a4f1a",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "quick_invoice_template": "<html>Template<html>",
      "default_allow_partial_pay": true,
      "default_notification_on_due_date": true,
      "default_notification_days_after_due_date": 7,
      "default_notification_days_before_due_date": 3,
      "id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "quick_invoice_views": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "quick_invoice_id": "Quick Invoice ID",
        "created_ts": 1422040992
      }
    ],
    "location": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "account_number": "5454545454545454",
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "branding_domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "contact_email_trx_receipt_default": true,
      "default_ach": "11e608a7d515f1e093242bb2",
      "default_cc": "11e608a442a5f1e092242dda",
      "email_reply_to": "email@domain.com",
      "fax": "3339998822",
      "location_api_id": "location-111111",
      "location_api_key": "AE34BBCAADF4AE34BBCAADF4",
      "location_c1": "custom 1",
      "location_c2": "custom 2",
      "location_c3": "custom data 3",
      "name": "Sample Company Headquarters",
      "office_phone": "2481234567",
      "office_ext_phone": "1021021209",
      "tz": "America/New_York",
      "parent_id": "11e95f8ec39de8fbdb0a4f1a",
      "show_contact_notes": true,
      "show_contact_files": true,
      "ticket_hash_key": "A5F443CADF4AE34BBCAADF4"
    },
    "created_user": {
      "account_number": "5454545454545454",
      "branding_domain_url": "{branding_domain_url}",
      "cell_phone": "3339998822",
      "company_name": "Fortis Payment Systems, LLC",
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "date_of_birth": "2021-12-01",
      "domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "email": "email@domain.com",
      "email_trx_receipt": true,
      "home_phone": "3339998822",
      "first_name": "John",
      "last_name": "Smith",
      "locale": "en-US",
      "office_phone": "3339998822",
      "office_ext_phone": "5",
      "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
      "requires_new_password": null,
      "terms_condition_code": "20220308",
      "tz": "America/New_York",
      "ui_prefs": {
        "entry_page": "dashboard",
        "page_size": 2,
        "report_export_type": "csv",
        "process_method": "virtual_terminal",
        "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
      },
      "username": "{user_name}",
      "user_api_key": "234bas8dfn8238f923w2",
      "user_hash_key": null,
      "user_type_code": 100,
      "password": null,
      "zip": "48375",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "status_id": 1,
      "api_only": false,
      "is_invitation": false,
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "status": true,
      "login_attempts": 0,
      "last_login_ts": 1422040992,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_accepted_ts": 1422040992,
      "terms_agree_ip": "192.168.0.10",
      "current_date_time": "2019-03-11T10:38:26-0700"
    },
    "modified_user": {
      "account_number": "5454545454545454",
      "branding_domain_url": "{branding_domain_url}",
      "cell_phone": "3339998822",
      "company_name": "Fortis Payment Systems, LLC",
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "date_of_birth": "2021-12-01",
      "domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "email": "email@domain.com",
      "email_trx_receipt": true,
      "home_phone": "3339998822",
      "first_name": "John",
      "last_name": "Smith",
      "locale": "en-US",
      "office_phone": "3339998822",
      "office_ext_phone": "5",
      "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
      "requires_new_password": null,
      "terms_condition_code": "20220308",
      "tz": "America/New_York",
      "ui_prefs": {
        "entry_page": "dashboard",
        "page_size": 2,
        "report_export_type": "csv",
        "process_method": "virtual_terminal",
        "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
      },
      "username": "{user_name}",
      "user_api_key": "234bas8dfn8238f923w2",
      "user_hash_key": null,
      "user_type_code": 100,
      "password": null,
      "zip": "48375",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "status_id": 1,
      "api_only": false,
      "is_invitation": false,
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "status": true,
      "login_attempts": 0,
      "last_login_ts": 1422040992,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_accepted_ts": 1422040992,
      "terms_agree_ip": "192.168.0.10",
      "current_date_time": "2019-03-11T10:38:26-0700"
    },
    "changelogs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "action": "CREATE",
        "model": "TransactionRequest",
        "model_id": "11ec829598f0d4008be9aba4",
        "user_id": "11e95f8ec39de8fbdb0a4f1a",
        "changelog_details": [
          {
            "id": "11e95f8ec39de8fbdb0a4f1a",
            "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
            "field": "next_run_ts",
            "old_value": "1643616000"
          }
        ],
        "user": {
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "username": "email@domain.com",
          "first_name": "Bob",
          "last_name": "Fairview"
        }
      }
    ],
    "contact": {
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "account_number": "54545433332",
      "contact_api_id": "137",
      "first_name": "John",
      "last_name": "Smith",
      "cell_phone": "3339998822",
      "balance": 245.36,
      "address": {
        "city": "Novi",
        "state": "Michigan",
        "postal_code": "48375",
        "country": "US"
      },
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
      "email": "email@domain.com",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "active": true
    },
    "log_emails": [
      {
        "subject": "Payment Receipt - 12skiestech",
        "body": "This email is being sent from a server.",
        "source_address": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
        "return_path": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
        "provider_id": "0100017e67bcc530-e1dd23b4-8a39-4a5b-8d5d-68d51c4c942f-000000",
        "domain_id": "11e95f8ec39de8fbdb0a4f1a",
        "reason_sent": "Contact Email",
        "reason_model": "Transaction",
        "reason_model_id": "11e95f8ec39de8fbdb0a4f1a",
        "reply_to": "\"Zeamster\" <emma.p@zeamster.com>",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992
      }
    ],
    "log_sms": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "body": " ",
      "reason_model": " ",
      "reason_model_id": " ",
      "provider_id": " ",
      "status": " ",
      "sender": " ",
      "recipient": " ",
      "created_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "transactions": [
      {
        "additional_amounts": [
          {
            "type": "cashback",
            "amount": 10,
            "account_type": "credit",
            "currency": 840
          }
        ],
        "billing_address": {
          "city": "Novi",
          "state": "Michigan",
          "postal_code": "48375",
          "phone": "3339998822"
        },
        "checkin_date": "2021-12-01",
        "checkout_date": "2021-12-01",
        "clerk_number": "AE1234",
        "contact_id": "11e95f8ec39de8fbdb0a4f1a",
        "custom_data": {},
        "customer_id": "customerid",
        "description": "some description",
        "identity_verification": {
          "dl_state": "MI",
          "dl_number": "1235567",
          "dob_year": "1980"
        },
        "iias_ind": 1,
        "image_front": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
        "image_back": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
        "installment": true,
        "installment_number": 1,
        "installment_count": 1,
        "location_api_id": "location-api-id-florida-2",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "advance_deposit": false,
        "no_show": false,
        "notification_email_address": "johnsmith@smiths.com",
        "order_number": "433659378839",
        "po_number": "555555553123",
        "quick_invoice_id": "11e95f8ec39de8fbdb0a4f1a",
        "recurring": false,
        "recurring_number": 1,
        "room_num": "303",
        "room_rate": 95,
        "save_account": false,
        "save_account_title": "John Account",
        "subtotal_amount": 599,
        "surcharge_amount": 100,
        "tags": [
          "Walk-in Customer"
        ],
        "tax": 0,
        "tip_amount": 0,
        "transaction_amount": 0,
        "secondary_amount": 0,
        "transaction_api_id": "transaction-payment-abcd123",
        "transaction_c1": "custom-data-1",
        "transaction_c2": "custom-data-2",
        "transaction_c3": "custom-data-3",
        "bank_funded_only_override": false,
        "allow_partial_authorization_override": false,
        "auto_decline_cvv_override": false,
        "auto_decline_street_override": false,
        "auto_decline_zip_override": false,
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "terminal_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_holder_name": "smith",
        "account_type": "checking",
        "token_id": "11e95f8ec39de8fbdb0a4f1a",
        "ach_identifier": "P",
        "ach_sec_code": "C21",
        "auth_amount": 1,
        "auth_code": "BR349K",
        "avs": "BAD",
        "avs_enhanced": "N",
        "cardholder_present": true,
        "card_present": true,
        "check_number": "8520748520963",
        "customer_ip": "192.168.0.10",
        "cvv_response": "N",
        "entry_mode_id": "C",
        "emv_receipt_data": {
          "AID": "a0000000042203",
          "APPLAB": "US Maestro",
          "APPN": "US Maestro",
          "CVM": "Pin Verified",
          "TSI": "e800",
          "TVR": "0800008000"
        },
        "first_six": "545454",
        "last_four": "5454",
        "payment_method": "cc",
        "terminal_serial_number": "1234567890",
        "transaction_settlement_status": null,
        "charge_back_date": "2021-12-01",
        "is_recurring": true,
        "notification_email_sent": "true",
        "par": "Q1J4Z28RKA1EBL470G9XYG90R5D3E",
        "reason_code_id": 1000,
        "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
        "settle_date": "2021-12-01",
        "status_code": 101,
        "transaction_batch_id": "11e95f8ec39de8fbdb0a4f1a",
        "verbiage": "APPROVED",
        "void_date": "2021-12-01",
        "batch": "2",
        "terms_agree": true,
        "response_message": null,
        "return_date": "2021-12-01",
        "trx_source_id": 8,
        "routing_number": "051904524",
        "trx_source_code": 8,
        "paylink_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "cc_product_transaction": {
      "processor_version": "1_0_0",
      "title": "My terminal",
      "payment_method": "cc",
      "processor": "zgate",
      "mcc": "1111",
      "tax_surcharge_config": 2,
      "partner": "standalone",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "surcharge": {},
      "processor_data": {},
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
      "dup_check_per_batch": null,
      "paylink_allow": false,
      "quick_invoice_allow": false,
      "level3_allow": false,
      "payfac_enable": false,
      "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "ach_product_transaction": {
      "processor_version": "1_0_0",
      "title": "My terminal",
      "payment_method": "cc",
      "processor": "zgate",
      "mcc": "1111",
      "tax_surcharge_config": 2,
      "partner": "standalone",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "surcharge": {},
      "processor_data": {},
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
      "dup_check_per_batch": null,
      "paylink_allow": false,
      "quick_invoice_allow": false,
      "level3_allow": false,
      "payfac_enable": false,
      "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "email_blacklist": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "isBlacklisted": true,
      "detail": true,
      "created_ts": 1422040992
    },
    "sms_blacklist": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "isBlacklisted": true,
      "detail": true,
      "created_ts": 1422040992
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |
| 412 | Precondition Failed | [`Response412Exception`](../../doc/models/response-412-exception.md) |


# Reopen Quick Invoice

Reopen quick invoice

```php
function reopenQuickInvoice(string $quickInvoiceId): ResponseQuickInvoice
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `quickInvoiceId` | `string` | Template, Required | Quick Invoice ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |

## Response Type

[`ResponseQuickInvoice`](../../doc/models/response-quick-invoice.md)

## Example Usage

```php
$quickInvoiceId = '11e95f8ec39de8fbdb0a4f1a';

$result = $quickInvoicesController->reopenQuickInvoice($quickInvoiceId);
```

## Example Response *(as JSON)*

```json
{
  "type": "QuickInvoice",
  "data": {
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
    "files": [
      {
        "file": {},
        "resource_id": "11e95f8ec39de8fbdb0a4f1a",
        "resource": "Contact",
        "product_file_id": "11e95f8ec39de8fbdb0a4f1a",
        "file_category_id": "11e95f8ec39de8fbdb0a4f1a",
        "visibility_group_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
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
    "is_active": true,
    "quick_invoice_setting": {
      "location_api_id": "11e95f8ec39de8fbdb0a4f1a",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "quick_invoice_template": "<html>Template<html>",
      "default_allow_partial_pay": true,
      "default_notification_on_due_date": true,
      "default_notification_days_after_due_date": 7,
      "default_notification_days_before_due_date": 3,
      "id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "quick_invoice_views": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "quick_invoice_id": "Quick Invoice ID",
        "created_ts": 1422040992
      }
    ],
    "location": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "account_number": "5454545454545454",
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "branding_domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "contact_email_trx_receipt_default": true,
      "default_ach": "11e608a7d515f1e093242bb2",
      "default_cc": "11e608a442a5f1e092242dda",
      "email_reply_to": "email@domain.com",
      "fax": "3339998822",
      "location_api_id": "location-111111",
      "location_api_key": "AE34BBCAADF4AE34BBCAADF4",
      "location_c1": "custom 1",
      "location_c2": "custom 2",
      "location_c3": "custom data 3",
      "name": "Sample Company Headquarters",
      "office_phone": "2481234567",
      "office_ext_phone": "1021021209",
      "tz": "America/New_York",
      "parent_id": "11e95f8ec39de8fbdb0a4f1a",
      "show_contact_notes": true,
      "show_contact_files": true,
      "ticket_hash_key": "A5F443CADF4AE34BBCAADF4"
    },
    "created_user": {
      "account_number": "5454545454545454",
      "branding_domain_url": "{branding_domain_url}",
      "cell_phone": "3339998822",
      "company_name": "Fortis Payment Systems, LLC",
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "date_of_birth": "2021-12-01",
      "domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "email": "email@domain.com",
      "email_trx_receipt": true,
      "home_phone": "3339998822",
      "first_name": "John",
      "last_name": "Smith",
      "locale": "en-US",
      "office_phone": "3339998822",
      "office_ext_phone": "5",
      "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
      "requires_new_password": null,
      "terms_condition_code": "20220308",
      "tz": "America/New_York",
      "ui_prefs": {
        "entry_page": "dashboard",
        "page_size": 2,
        "report_export_type": "csv",
        "process_method": "virtual_terminal",
        "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
      },
      "username": "{user_name}",
      "user_api_key": "234bas8dfn8238f923w2",
      "user_hash_key": null,
      "user_type_code": 100,
      "password": null,
      "zip": "48375",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "status_id": 1,
      "api_only": false,
      "is_invitation": false,
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "status": true,
      "login_attempts": 0,
      "last_login_ts": 1422040992,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_accepted_ts": 1422040992,
      "terms_agree_ip": "192.168.0.10",
      "current_date_time": "2019-03-11T10:38:26-0700"
    },
    "modified_user": {
      "account_number": "5454545454545454",
      "branding_domain_url": "{branding_domain_url}",
      "cell_phone": "3339998822",
      "company_name": "Fortis Payment Systems, LLC",
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "date_of_birth": "2021-12-01",
      "domain_id": "11e95f8ec39de8fbdb0a4f1a",
      "email": "email@domain.com",
      "email_trx_receipt": true,
      "home_phone": "3339998822",
      "first_name": "John",
      "last_name": "Smith",
      "locale": "en-US",
      "office_phone": "3339998822",
      "office_ext_phone": "5",
      "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
      "requires_new_password": null,
      "terms_condition_code": "20220308",
      "tz": "America/New_York",
      "ui_prefs": {
        "entry_page": "dashboard",
        "page_size": 2,
        "report_export_type": "csv",
        "process_method": "virtual_terminal",
        "default_terminal": "11e95f8ec39de8fbdb0a4f1a"
      },
      "username": "{user_name}",
      "user_api_key": "234bas8dfn8238f923w2",
      "user_hash_key": null,
      "user_type_code": 100,
      "password": null,
      "zip": "48375",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "status_id": 1,
      "api_only": false,
      "is_invitation": false,
      "address": {
        "city": "Novi",
        "state": "MI",
        "postal_code": "48375",
        "country": "US"
      },
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "status": true,
      "login_attempts": 0,
      "last_login_ts": 1422040992,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_accepted_ts": 1422040992,
      "terms_agree_ip": "192.168.0.10",
      "current_date_time": "2019-03-11T10:38:26-0700"
    },
    "changelogs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "action": "CREATE",
        "model": "TransactionRequest",
        "model_id": "11ec829598f0d4008be9aba4",
        "user_id": "11e95f8ec39de8fbdb0a4f1a",
        "changelog_details": [
          {
            "id": "11e95f8ec39de8fbdb0a4f1a",
            "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
            "field": "next_run_ts",
            "old_value": "1643616000"
          }
        ],
        "user": {
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "username": "email@domain.com",
          "first_name": "Bob",
          "last_name": "Fairview"
        }
      }
    ],
    "contact": {
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "account_number": "54545433332",
      "contact_api_id": "137",
      "first_name": "John",
      "last_name": "Smith",
      "cell_phone": "3339998822",
      "balance": 245.36,
      "address": {
        "city": "Novi",
        "state": "Michigan",
        "postal_code": "48375",
        "country": "US"
      },
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
      "email": "email@domain.com",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "active": true
    },
    "log_emails": [
      {
        "subject": "Payment Receipt - 12skiestech",
        "body": "This email is being sent from a server.",
        "source_address": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
        "return_path": "\"12skiestech A7t3qi\" <noreply@zeamster.email>",
        "provider_id": "0100017e67bcc530-e1dd23b4-8a39-4a5b-8d5d-68d51c4c942f-000000",
        "domain_id": "11e95f8ec39de8fbdb0a4f1a",
        "reason_sent": "Contact Email",
        "reason_model": "Transaction",
        "reason_model_id": "11e95f8ec39de8fbdb0a4f1a",
        "reply_to": "\"Zeamster\" <emma.p@zeamster.com>",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992
      }
    ],
    "log_sms": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "body": " ",
      "reason_model": " ",
      "reason_model_id": " ",
      "provider_id": " ",
      "status": " ",
      "sender": " ",
      "recipient": " ",
      "created_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "transactions": [
      {
        "additional_amounts": [
          {
            "type": "cashback",
            "amount": 10,
            "account_type": "credit",
            "currency": 840
          }
        ],
        "billing_address": {
          "city": "Novi",
          "state": "Michigan",
          "postal_code": "48375",
          "phone": "3339998822"
        },
        "checkin_date": "2021-12-01",
        "checkout_date": "2021-12-01",
        "clerk_number": "AE1234",
        "contact_id": "11e95f8ec39de8fbdb0a4f1a",
        "custom_data": {},
        "customer_id": "customerid",
        "description": "some description",
        "identity_verification": {
          "dl_state": "MI",
          "dl_number": "1235567",
          "dob_year": "1980"
        },
        "iias_ind": 1,
        "image_front": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
        "image_back": "U29tZVN0cmluZ09idmlvdXNseU5vdEJhc2U2NEVuY29kZWQ=",
        "installment": true,
        "installment_number": 1,
        "installment_count": 1,
        "location_api_id": "location-api-id-florida-2",
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "advance_deposit": false,
        "no_show": false,
        "notification_email_address": "johnsmith@smiths.com",
        "order_number": "433659378839",
        "po_number": "555555553123",
        "quick_invoice_id": "11e95f8ec39de8fbdb0a4f1a",
        "recurring": false,
        "recurring_number": 1,
        "room_num": "303",
        "room_rate": 95,
        "save_account": false,
        "save_account_title": "John Account",
        "subtotal_amount": 599,
        "surcharge_amount": 100,
        "tags": [
          "Walk-in Customer"
        ],
        "tax": 0,
        "tip_amount": 0,
        "transaction_amount": 0,
        "secondary_amount": 0,
        "transaction_api_id": "transaction-payment-abcd123",
        "transaction_c1": "custom-data-1",
        "transaction_c2": "custom-data-2",
        "transaction_c3": "custom-data-3",
        "bank_funded_only_override": false,
        "allow_partial_authorization_override": false,
        "auto_decline_cvv_override": false,
        "auto_decline_street_override": false,
        "auto_decline_zip_override": false,
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992,
        "terminal_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_holder_name": "smith",
        "account_type": "checking",
        "token_id": "11e95f8ec39de8fbdb0a4f1a",
        "ach_identifier": "P",
        "ach_sec_code": "C21",
        "auth_amount": 1,
        "auth_code": "BR349K",
        "avs": "BAD",
        "avs_enhanced": "N",
        "cardholder_present": true,
        "card_present": true,
        "check_number": "8520748520963",
        "customer_ip": "192.168.0.10",
        "cvv_response": "N",
        "entry_mode_id": "C",
        "emv_receipt_data": {
          "AID": "a0000000042203",
          "APPLAB": "US Maestro",
          "APPN": "US Maestro",
          "CVM": "Pin Verified",
          "TSI": "e800",
          "TVR": "0800008000"
        },
        "first_six": "545454",
        "last_four": "5454",
        "payment_method": "cc",
        "terminal_serial_number": "1234567890",
        "transaction_settlement_status": null,
        "charge_back_date": "2021-12-01",
        "is_recurring": true,
        "notification_email_sent": "true",
        "par": "Q1J4Z28RKA1EBL470G9XYG90R5D3E",
        "reason_code_id": 1000,
        "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
        "settle_date": "2021-12-01",
        "status_code": 101,
        "transaction_batch_id": "11e95f8ec39de8fbdb0a4f1a",
        "verbiage": "APPROVED",
        "void_date": "2021-12-01",
        "batch": "2",
        "terms_agree": true,
        "response_message": null,
        "return_date": "2021-12-01",
        "trx_source_id": 8,
        "routing_number": "051904524",
        "trx_source_code": 8,
        "paylink_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "cc_product_transaction": {
      "processor_version": "1_0_0",
      "title": "My terminal",
      "payment_method": "cc",
      "processor": "zgate",
      "mcc": "1111",
      "tax_surcharge_config": 2,
      "partner": "standalone",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "surcharge": {},
      "processor_data": {},
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
      "dup_check_per_batch": null,
      "paylink_allow": false,
      "quick_invoice_allow": false,
      "level3_allow": false,
      "payfac_enable": false,
      "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "ach_product_transaction": {
      "processor_version": "1_0_0",
      "title": "My terminal",
      "payment_method": "cc",
      "processor": "zgate",
      "mcc": "1111",
      "tax_surcharge_config": 2,
      "partner": "standalone",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "surcharge": {},
      "processor_data": {},
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
      "dup_check_per_batch": null,
      "paylink_allow": false,
      "quick_invoice_allow": false,
      "level3_allow": false,
      "payfac_enable": false,
      "sales_office_id": "11e95f8ec39de8fbdb0a4f1a",
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
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "modified_user_id": "11e95f8ec39de8fbdb0a4f1a"
    },
    "email_blacklist": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "isBlacklisted": true,
      "detail": true,
      "created_ts": 1422040992
    },
    "sms_blacklist": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "isBlacklisted": true,
      "detail": true,
      "created_ts": 1422040992
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |

