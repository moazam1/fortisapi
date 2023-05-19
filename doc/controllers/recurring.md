# Recurring

The recurrings endpoint is used to run a recurring transaction one or more times. There are two different types of recurrings:

1. **ongoing** (recurring_type_id="o") - a recurring that runs until it is deleted or an end date has been set.
2. **installment** (recurring_type_id="i") - a recurring that runs a fixed number of times, regardless of approval or decline.

When setting up a reccuring, it isn't necessarily linked directly to a contact, it is linked to an token through the account_vault_id or account_vault_api_id field. The token is then in turn linked to a contact. So in order to create a recurring, you must first create a contact, then create an token for that contact. Then the id of the token can be used for the recurring as account_vault_id.

```php
$recurringController = $client->getRecurringController();
```

## Class Name

`RecurringController`

## Methods

* [Create a New Recurring Record](../../doc/controllers/recurring.md#create-a-new-recurring-record)
* [List All Recurring Record](../../doc/controllers/recurring.md#list-all-recurring-record)
* [Delete Recurring Record](../../doc/controllers/recurring.md#delete-recurring-record)
* [View Single Recurring Record](../../doc/controllers/recurring.md#view-single-recurring-record)
* [Update Recurring Payment](../../doc/controllers/recurring.md#update-recurring-payment)
* [Activate Recurring Payment](../../doc/controllers/recurring.md#activate-recurring-payment)
* [Defer Recurring Payment](../../doc/controllers/recurring.md#defer-recurring-payment)
* [Place on Hold Recurring Payment](../../doc/controllers/recurring.md#place-on-hold-recurring-payment)
* [Skip Recurring Payment](../../doc/controllers/recurring.md#skip-recurring-payment)


# Create a New Recurring Record

Create a new recurring record

```php
function createANewRecurringRecord(V1RecurringsRequest $body, ?array $expand = null): ResponseRecurring
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`V1RecurringsRequest`](../../doc/models/v1-recurrings-request.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand20Enum)`](../../doc/models/expand-20-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseRecurring`](../../doc/models/response-recurring.md)

## Example Usage

```php
$body = V1RecurringsRequestBuilder::init(
    1,
    IntervalTypeEnum::D,
    '11e95f8ec39de8fbdb0a4f1a',
    '2021-12-01',
    300
)
    ->accountVaultId('11e95f8ec39de8fbdb0a4f1a')
    ->tokenId('11e95f8ec39de8fbdb0a4f1a')
    ->accountVaultApiId('token1234abcd')
    ->tokenApiId('token1234abcd')
    ->active(true)
    ->description('Description')
    ->endDate('2021-12-01')
    ->installmentTotalCount(20)
    ->notificationDays(2)
    ->paymentMethod(PaymentMethod1Enum::CC)
    ->productTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->recurringId('11e95f8ec39de8fbdb0a4f1a')
    ->recurringApiId('recurring1234abcd')
    ->status(StatusEnum::ACTIVE)
    ->termsAgree(true)
    ->termsAgreeIp('192.168.0.10')
    ->recurringC1('recurring custom data 1')
    ->recurringC2('recurring custom data 2')
    ->recurringC3('recurring custom data 3')
    ->sendToProcAsRecur(true)
    ->build();

$result = $recurringController->createANewRecurringRecord($body);
```

## Example Response *(as JSON)*

```json
{
  "type": "Recurring",
  "data": {
    "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
    "token_id": "11e95f8ec39de8fbdb0a4f1a",
    "account_vault_api_id": "token1234abcd",
    "token_api_id": "token1234abcd",
    "_joi": {
      "conditions": {}
    },
    "active": true,
    "description": "Description",
    "end_date": "2021-12-01",
    "installment_total_count": 20,
    "interval": 1,
    "interval_type": "d",
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "notification_days": 2,
    "payment_method": "cc",
    "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_api_id": "recurring1234abcd",
    "start_date": "2021-12-01",
    "status": "active",
    "transaction_amount": 300,
    "terms_agree": true,
    "terms_agree_ip": "192.168.0.10",
    "recurring_c1": "recurring custom data 1",
    "recurring_c2": "recurring custom data 2",
    "recurring_c3": "recurring custom data 3",
    "send_to_proc_as_recur": true,
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "next_run_date": "2021-12-01",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "recurring_type_id": "i",
    "installment_amount_total": 99999999,
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
    "account_vault": {
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
      "billing_address": {
        "city": "Novi",
        "state": "Michigan",
        "postal_code": "48375",
        "phone": "3339998822"
      },
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "customer_id": "123456",
      "identity_verification": {
        "dl_state": "MI",
        "dl_number": "1235567",
        "ssn4": "8527",
        "dob_year": "1980"
      },
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_account_vault_api_id": "previousaccountvault123456",
      "previous_token_api_id": "previousaccountvault123456",
      "previous_account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_token_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_agree": true,
      "terms_agree_ip": "192.168.0.10",
      "title": "Test CC Account",
      "_joi": {},
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "account_type": "checking",
      "active": true,
      "cau_summary_status_id": 1,
      "created_ts": 1422040992,
      "e_serial_number": "1234567890",
      "e_track_data": null,
      "e_format": null,
      "e_keyed_data": null,
      "expiring_in_months": null,
      "exp_date": "0722",
      "first_six": "700953",
      "has_recurring": false,
      "last_four": "3657",
      "modified_ts": 1422040992,
      "payment_method": "cc",
      "ticket": null,
      "track_data": null
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
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "payment_schedule": [
      "2021-12-01"
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
    "product_transaction": {
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
    "next_run_date_min": "2021-12-01",
    "next_run_date_max": "2021-12-01",
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "all_tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
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
    "forecast": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "recurring_id": "Recurring ID",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "recurring_splits": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |
| 412 | Precondition Failed | [`Response412Exception`](../../doc/models/response-412-exception.md) |


# List All Recurring Record

List all recurring record

```php
function listAllRecurringRecord(
    ?Page $page = null,
    ?Sort23 $sort = null,
    ?Filter7 $filter = null,
    ?array $expand = null
): ResponseRecurringsCollection
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | [`?Page`](../../doc/models/page.md) | Query, Optional | Use this field to specify paginate your results, by using page size and number. You can use one of the following methods:<br><br>> /endpoint?page={ "number": 1, "size": 50 }<br>> <br>> /endpoint?page[number]=1&page[size]=50 |
| `sort` | [`?Sort23`](../../doc/models/sort-23.md) | Query, Optional | You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:<br><br>> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }<br>> <br>> /endpoint?sort[field_name]=asc&sort[field_name2]=desc |
| `filter` | [`?Filter7`](../../doc/models/filter-7.md) | Query, Optional | You can use any `field_name` from this endpoint results as a filter, and you can also use more than one field to create AND conditions. For date fields (ended with `_ts`), you can also search for ranges using the `$gte` (Greater than or equal to) and/or  `$lte` (Lower than or equal to). You can use one of the following methods:<br><br>> /endpoint?filter={ "field_name": "Value" }<br>> <br>> /endpoint?filter[field_name]=Value<br>> <br>> /endpoint?filter={ "created_ts": "today" }<br>> <br>> /endpoint?filter[created_ts]=today<br>> <br>> /endpoint?filter={ "created_ts": { "$gte": "yesterday", "$lte": "today" } }<br>> <br>> /endpoint?filter[created_ts][$gte]=yesterday&filter[created_ts][$lte]=today<br>> <br>> /endpoint?filter[address][city]=memphis<br>> <br>> /endpoint?filter={ "address": { "city" : "memphis" } } |
| `expand` | [`?(string[]) (Expand20Enum)`](../../doc/models/expand-20-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseRecurringsCollection`](../../doc/models/response-recurrings-collection.md)

## Example Usage

```php
$page = PageBuilder::init()
    ->number(1)
    ->size(50)
    ->build();

$result = $recurringController->listAllRecurringRecord($page);
```

## Example Response *(as JSON)*

```json
{
  "type": "RecurringsCollection",
  "list": [
    {
      "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
      "token_id": "11e95f8ec39de8fbdb0a4f1a",
      "account_vault_api_id": "token1234abcd",
      "token_api_id": "token1234abcd",
      "_joi": {
        "conditions": {}
      },
      "active": true,
      "description": "Description",
      "end_date": "2021-12-01",
      "installment_total_count": 20,
      "interval": 1,
      "interval_type": "d",
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "notification_days": 2,
      "payment_method": "cc",
      "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
      "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
      "recurring_api_id": "recurring1234abcd",
      "start_date": "2021-12-01",
      "status": "active",
      "transaction_amount": 300,
      "terms_agree": true,
      "terms_agree_ip": "192.168.0.10",
      "recurring_c1": "recurring custom data 1",
      "recurring_c2": "recurring custom data 2",
      "recurring_c3": "recurring custom data 3",
      "send_to_proc_as_recur": true,
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "next_run_date": "2021-12-01",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "recurring_type_id": "i",
      "installment_amount_total": 99999999,
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
      "account_vault": {
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
        "billing_address": {
          "city": "Novi",
          "state": "Michigan",
          "postal_code": "48375",
          "phone": "3339998822"
        },
        "contact_id": "11e95f8ec39de8fbdb0a4f1a",
        "customer_id": "123456",
        "identity_verification": {
          "dl_state": "MI",
          "dl_number": "1235567",
          "ssn4": "8527",
          "dob_year": "1980"
        },
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "previous_account_vault_api_id": "previousaccountvault123456",
        "previous_token_api_id": "previousaccountvault123456",
        "previous_account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
        "previous_token_id": "11e95f8ec39de8fbdb0a4f1a",
        "previous_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "terms_agree": true,
        "terms_agree_ip": "192.168.0.10",
        "title": "Test CC Account",
        "_joi": {},
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "account_type": "checking",
        "active": true,
        "cau_summary_status_id": 1,
        "created_ts": 1422040992,
        "e_serial_number": "1234567890",
        "e_track_data": null,
        "e_format": null,
        "e_keyed_data": null,
        "expiring_in_months": null,
        "exp_date": "0722",
        "first_six": "700953",
        "has_recurring": false,
        "last_four": "3657",
        "modified_ts": 1422040992,
        "payment_method": "cc",
        "ticket": null,
        "track_data": null
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
      "signature": {
        "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
        "resource": "Transaction",
        "resource_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      },
      "payment_schedule": [
        "2021-12-01"
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
      "product_transaction": {
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
      "next_run_date_min": "2021-12-01",
      "next_run_date_max": "2021-12-01",
      "tags": [
        {
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "title": "My terminal",
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "modified_ts": 1422040992
        }
      ],
      "all_tags": [
        {
          "location_id": "11e95f8ec39de8fbdb0a4f1a",
          "title": "My terminal",
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "modified_ts": 1422040992
        }
      ],
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
      "forecast": {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "recurring_id": "Recurring ID",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      },
      "recurring_splits": [
        {
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
        }
      ]
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


# Delete Recurring Record

Delete recurring record

```php
function deleteRecurringRecord(string $recurringId): ResponseRecurring
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recurringId` | `string` | Template, Required | Recurring ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |

## Response Type

[`ResponseRecurring`](../../doc/models/response-recurring.md)

## Example Usage

```php
$recurringId = '11e95f8ec39de8fbdb0a4f1a';

$result = $recurringController->deleteRecurringRecord($recurringId);
```

## Example Response *(as JSON)*

```json
{
  "type": "Recurring",
  "data": {
    "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
    "token_id": "11e95f8ec39de8fbdb0a4f1a",
    "account_vault_api_id": "token1234abcd",
    "token_api_id": "token1234abcd",
    "_joi": {
      "conditions": {}
    },
    "active": true,
    "description": "Description",
    "end_date": "2021-12-01",
    "installment_total_count": 20,
    "interval": 1,
    "interval_type": "d",
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "notification_days": 2,
    "payment_method": "cc",
    "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_api_id": "recurring1234abcd",
    "start_date": "2021-12-01",
    "status": "active",
    "transaction_amount": 300,
    "terms_agree": true,
    "terms_agree_ip": "192.168.0.10",
    "recurring_c1": "recurring custom data 1",
    "recurring_c2": "recurring custom data 2",
    "recurring_c3": "recurring custom data 3",
    "send_to_proc_as_recur": true,
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "next_run_date": "2021-12-01",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "recurring_type_id": "i",
    "installment_amount_total": 99999999,
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
    "account_vault": {
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
      "billing_address": {
        "city": "Novi",
        "state": "Michigan",
        "postal_code": "48375",
        "phone": "3339998822"
      },
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "customer_id": "123456",
      "identity_verification": {
        "dl_state": "MI",
        "dl_number": "1235567",
        "ssn4": "8527",
        "dob_year": "1980"
      },
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_account_vault_api_id": "previousaccountvault123456",
      "previous_token_api_id": "previousaccountvault123456",
      "previous_account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_token_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_agree": true,
      "terms_agree_ip": "192.168.0.10",
      "title": "Test CC Account",
      "_joi": {},
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "account_type": "checking",
      "active": true,
      "cau_summary_status_id": 1,
      "created_ts": 1422040992,
      "e_serial_number": "1234567890",
      "e_track_data": null,
      "e_format": null,
      "e_keyed_data": null,
      "expiring_in_months": null,
      "exp_date": "0722",
      "first_six": "700953",
      "has_recurring": false,
      "last_four": "3657",
      "modified_ts": 1422040992,
      "payment_method": "cc",
      "ticket": null,
      "track_data": null
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
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "payment_schedule": [
      "2021-12-01"
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
    "product_transaction": {
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
    "next_run_date_min": "2021-12-01",
    "next_run_date_max": "2021-12-01",
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "all_tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
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
    "forecast": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "recurring_id": "Recurring ID",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "recurring_splits": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# View Single Recurring Record

View single recurring record

```php
function viewSingleRecurringRecord(string $recurringId, ?array $expand = null): ResponseRecurring
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recurringId` | `string` | Template, Required | Recurring ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `expand` | [`?(string[]) (Expand20Enum)`](../../doc/models/expand-20-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseRecurring`](../../doc/models/response-recurring.md)

## Example Usage

```php
$recurringId = '11e95f8ec39de8fbdb0a4f1a';

$result = $recurringController->viewSingleRecurringRecord($recurringId);
```

## Example Response *(as JSON)*

```json
{
  "type": "Recurring",
  "data": {
    "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
    "token_id": "11e95f8ec39de8fbdb0a4f1a",
    "account_vault_api_id": "token1234abcd",
    "token_api_id": "token1234abcd",
    "_joi": {
      "conditions": {}
    },
    "active": true,
    "description": "Description",
    "end_date": "2021-12-01",
    "installment_total_count": 20,
    "interval": 1,
    "interval_type": "d",
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "notification_days": 2,
    "payment_method": "cc",
    "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_api_id": "recurring1234abcd",
    "start_date": "2021-12-01",
    "status": "active",
    "transaction_amount": 300,
    "terms_agree": true,
    "terms_agree_ip": "192.168.0.10",
    "recurring_c1": "recurring custom data 1",
    "recurring_c2": "recurring custom data 2",
    "recurring_c3": "recurring custom data 3",
    "send_to_proc_as_recur": true,
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "next_run_date": "2021-12-01",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "recurring_type_id": "i",
    "installment_amount_total": 99999999,
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
    "account_vault": {
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
      "billing_address": {
        "city": "Novi",
        "state": "Michigan",
        "postal_code": "48375",
        "phone": "3339998822"
      },
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "customer_id": "123456",
      "identity_verification": {
        "dl_state": "MI",
        "dl_number": "1235567",
        "ssn4": "8527",
        "dob_year": "1980"
      },
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_account_vault_api_id": "previousaccountvault123456",
      "previous_token_api_id": "previousaccountvault123456",
      "previous_account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_token_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_agree": true,
      "terms_agree_ip": "192.168.0.10",
      "title": "Test CC Account",
      "_joi": {},
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "account_type": "checking",
      "active": true,
      "cau_summary_status_id": 1,
      "created_ts": 1422040992,
      "e_serial_number": "1234567890",
      "e_track_data": null,
      "e_format": null,
      "e_keyed_data": null,
      "expiring_in_months": null,
      "exp_date": "0722",
      "first_six": "700953",
      "has_recurring": false,
      "last_four": "3657",
      "modified_ts": 1422040992,
      "payment_method": "cc",
      "ticket": null,
      "track_data": null
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
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "payment_schedule": [
      "2021-12-01"
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
    "product_transaction": {
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
    "next_run_date_min": "2021-12-01",
    "next_run_date_max": "2021-12-01",
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "all_tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
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
    "forecast": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "recurring_id": "Recurring ID",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "recurring_splits": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# Update Recurring Payment

Update recurring payment

```php
function updateRecurringPayment(
    string $recurringId,
    V1RecurringsRequest1 $body,
    ?array $expand = null
): ResponseRecurring
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recurringId` | `string` | Template, Required | Recurring ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `body` | [`V1RecurringsRequest1`](../../doc/models/v1-recurrings-request-1.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand20Enum)`](../../doc/models/expand-20-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseRecurring`](../../doc/models/response-recurring.md)

## Example Usage

```php
$recurringId = '11e95f8ec39de8fbdb0a4f1a';

$body = V1RecurringsRequest1Builder::init()
    ->nextRunDate('2021-12-01')
    ->accountVaultId('11e95f8ec39de8fbdb0a4f1a')
    ->tokenId('11e95f8ec39de8fbdb0a4f1a')
    ->active(true)
    ->description('Description')
    ->endDate('2021-12-01')
    ->installmentTotalCount(20)
    ->interval(1)
    ->intervalType(IntervalTypeEnum::D)
    ->locationId('11e95f8ec39de8fbdb0a4f1a')
    ->notificationDays(2)
    ->paymentMethod(PaymentMethod1Enum::CC)
    ->productTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->recurringId('11e95f8ec39de8fbdb0a4f1a')
    ->recurringApiId('recurring1234abcd')
    ->startDate('2021-12-01')
    ->status(StatusEnum::ACTIVE)
    ->transactionAmount(300)
    ->termsAgree(true)
    ->termsAgreeIp('192.168.0.10')
    ->recurringC1('recurring custom data 1')
    ->recurringC2('recurring custom data 2')
    ->recurringC3('recurring custom data 3')
    ->sendToProcAsRecur(true)
    ->build();

$result = $recurringController->updateRecurringPayment(
    $recurringId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "type": "Recurring",
  "data": {
    "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
    "token_id": "11e95f8ec39de8fbdb0a4f1a",
    "account_vault_api_id": "token1234abcd",
    "token_api_id": "token1234abcd",
    "_joi": {
      "conditions": {}
    },
    "active": true,
    "description": "Description",
    "end_date": "2021-12-01",
    "installment_total_count": 20,
    "interval": 1,
    "interval_type": "d",
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "notification_days": 2,
    "payment_method": "cc",
    "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_api_id": "recurring1234abcd",
    "start_date": "2021-12-01",
    "status": "active",
    "transaction_amount": 300,
    "terms_agree": true,
    "terms_agree_ip": "192.168.0.10",
    "recurring_c1": "recurring custom data 1",
    "recurring_c2": "recurring custom data 2",
    "recurring_c3": "recurring custom data 3",
    "send_to_proc_as_recur": true,
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "next_run_date": "2021-12-01",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "recurring_type_id": "i",
    "installment_amount_total": 99999999,
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
    "account_vault": {
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
      "billing_address": {
        "city": "Novi",
        "state": "Michigan",
        "postal_code": "48375",
        "phone": "3339998822"
      },
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "customer_id": "123456",
      "identity_verification": {
        "dl_state": "MI",
        "dl_number": "1235567",
        "ssn4": "8527",
        "dob_year": "1980"
      },
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_account_vault_api_id": "previousaccountvault123456",
      "previous_token_api_id": "previousaccountvault123456",
      "previous_account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_token_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_agree": true,
      "terms_agree_ip": "192.168.0.10",
      "title": "Test CC Account",
      "_joi": {},
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "account_type": "checking",
      "active": true,
      "cau_summary_status_id": 1,
      "created_ts": 1422040992,
      "e_serial_number": "1234567890",
      "e_track_data": null,
      "e_format": null,
      "e_keyed_data": null,
      "expiring_in_months": null,
      "exp_date": "0722",
      "first_six": "700953",
      "has_recurring": false,
      "last_four": "3657",
      "modified_ts": 1422040992,
      "payment_method": "cc",
      "ticket": null,
      "track_data": null
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
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "payment_schedule": [
      "2021-12-01"
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
    "product_transaction": {
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
    "next_run_date_min": "2021-12-01",
    "next_run_date_max": "2021-12-01",
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "all_tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
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
    "forecast": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "recurring_id": "Recurring ID",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "recurring_splits": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |
| 412 | Precondition Failed | [`Response412Exception`](../../doc/models/response-412-exception.md) |


# Activate Recurring Payment

Activate recurring payment

```php
function activateRecurringPayment(string $recurringId, ?array $expand = null): ResponseRecurring
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recurringId` | `string` | Template, Required | Recurring ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `expand` | [`?(string[]) (Expand20Enum)`](../../doc/models/expand-20-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseRecurring`](../../doc/models/response-recurring.md)

## Example Usage

```php
$recurringId = '11e95f8ec39de8fbdb0a4f1a';

$result = $recurringController->activateRecurringPayment($recurringId);
```

## Example Response *(as JSON)*

```json
{
  "type": "Recurring",
  "data": {
    "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
    "token_id": "11e95f8ec39de8fbdb0a4f1a",
    "account_vault_api_id": "token1234abcd",
    "token_api_id": "token1234abcd",
    "_joi": {
      "conditions": {}
    },
    "active": true,
    "description": "Description",
    "end_date": "2021-12-01",
    "installment_total_count": 20,
    "interval": 1,
    "interval_type": "d",
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "notification_days": 2,
    "payment_method": "cc",
    "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_api_id": "recurring1234abcd",
    "start_date": "2021-12-01",
    "status": "active",
    "transaction_amount": 300,
    "terms_agree": true,
    "terms_agree_ip": "192.168.0.10",
    "recurring_c1": "recurring custom data 1",
    "recurring_c2": "recurring custom data 2",
    "recurring_c3": "recurring custom data 3",
    "send_to_proc_as_recur": true,
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "next_run_date": "2021-12-01",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "recurring_type_id": "i",
    "installment_amount_total": 99999999,
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
    "account_vault": {
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
      "billing_address": {
        "city": "Novi",
        "state": "Michigan",
        "postal_code": "48375",
        "phone": "3339998822"
      },
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "customer_id": "123456",
      "identity_verification": {
        "dl_state": "MI",
        "dl_number": "1235567",
        "ssn4": "8527",
        "dob_year": "1980"
      },
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_account_vault_api_id": "previousaccountvault123456",
      "previous_token_api_id": "previousaccountvault123456",
      "previous_account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_token_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_agree": true,
      "terms_agree_ip": "192.168.0.10",
      "title": "Test CC Account",
      "_joi": {},
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "account_type": "checking",
      "active": true,
      "cau_summary_status_id": 1,
      "created_ts": 1422040992,
      "e_serial_number": "1234567890",
      "e_track_data": null,
      "e_format": null,
      "e_keyed_data": null,
      "expiring_in_months": null,
      "exp_date": "0722",
      "first_six": "700953",
      "has_recurring": false,
      "last_four": "3657",
      "modified_ts": 1422040992,
      "payment_method": "cc",
      "ticket": null,
      "track_data": null
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
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "payment_schedule": [
      "2021-12-01"
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
    "product_transaction": {
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
    "next_run_date_min": "2021-12-01",
    "next_run_date_max": "2021-12-01",
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "all_tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
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
    "forecast": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "recurring_id": "Recurring ID",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "recurring_splits": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# Defer Recurring Payment

Defer recurring payment

```php
function deferRecurringPayment(
    string $recurringId,
    V1RecurringsDeferPaymentRequest $body,
    ?array $expand = null
): ResponseRecurring
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recurringId` | `string` | Template, Required | Recurring ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `body` | [`V1RecurringsDeferPaymentRequest`](../../doc/models/v1-recurrings-defer-payment-request.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand20Enum)`](../../doc/models/expand-20-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseRecurring`](../../doc/models/response-recurring.md)

## Example Usage

```php
$recurringId = '11e95f8ec39de8fbdb0a4f1a';

$body = V1RecurringsDeferPaymentRequestBuilder::init(
    5
)->build();

$result = $recurringController->deferRecurringPayment(
    $recurringId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "type": "Recurring",
  "data": {
    "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
    "token_id": "11e95f8ec39de8fbdb0a4f1a",
    "account_vault_api_id": "token1234abcd",
    "token_api_id": "token1234abcd",
    "_joi": {
      "conditions": {}
    },
    "active": true,
    "description": "Description",
    "end_date": "2021-12-01",
    "installment_total_count": 20,
    "interval": 1,
    "interval_type": "d",
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "notification_days": 2,
    "payment_method": "cc",
    "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_api_id": "recurring1234abcd",
    "start_date": "2021-12-01",
    "status": "active",
    "transaction_amount": 300,
    "terms_agree": true,
    "terms_agree_ip": "192.168.0.10",
    "recurring_c1": "recurring custom data 1",
    "recurring_c2": "recurring custom data 2",
    "recurring_c3": "recurring custom data 3",
    "send_to_proc_as_recur": true,
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "next_run_date": "2021-12-01",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "recurring_type_id": "i",
    "installment_amount_total": 99999999,
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
    "account_vault": {
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
      "billing_address": {
        "city": "Novi",
        "state": "Michigan",
        "postal_code": "48375",
        "phone": "3339998822"
      },
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "customer_id": "123456",
      "identity_verification": {
        "dl_state": "MI",
        "dl_number": "1235567",
        "ssn4": "8527",
        "dob_year": "1980"
      },
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_account_vault_api_id": "previousaccountvault123456",
      "previous_token_api_id": "previousaccountvault123456",
      "previous_account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_token_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_agree": true,
      "terms_agree_ip": "192.168.0.10",
      "title": "Test CC Account",
      "_joi": {},
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "account_type": "checking",
      "active": true,
      "cau_summary_status_id": 1,
      "created_ts": 1422040992,
      "e_serial_number": "1234567890",
      "e_track_data": null,
      "e_format": null,
      "e_keyed_data": null,
      "expiring_in_months": null,
      "exp_date": "0722",
      "first_six": "700953",
      "has_recurring": false,
      "last_four": "3657",
      "modified_ts": 1422040992,
      "payment_method": "cc",
      "ticket": null,
      "track_data": null
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
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "payment_schedule": [
      "2021-12-01"
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
    "product_transaction": {
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
    "next_run_date_min": "2021-12-01",
    "next_run_date_max": "2021-12-01",
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "all_tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
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
    "forecast": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "recurring_id": "Recurring ID",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "recurring_splits": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |
| 412 | Precondition Failed | [`Response412Exception`](../../doc/models/response-412-exception.md) |


# Place on Hold Recurring Payment

Place on hold recurring payment

```php
function placeOnHoldRecurringPayment(string $recurringId, ?array $expand = null): ResponseRecurring
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recurringId` | `string` | Template, Required | Recurring ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `expand` | [`?(string[]) (Expand20Enum)`](../../doc/models/expand-20-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseRecurring`](../../doc/models/response-recurring.md)

## Example Usage

```php
$recurringId = '11e95f8ec39de8fbdb0a4f1a';

$result = $recurringController->placeOnHoldRecurringPayment($recurringId);
```

## Example Response *(as JSON)*

```json
{
  "type": "Recurring",
  "data": {
    "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
    "token_id": "11e95f8ec39de8fbdb0a4f1a",
    "account_vault_api_id": "token1234abcd",
    "token_api_id": "token1234abcd",
    "_joi": {
      "conditions": {}
    },
    "active": true,
    "description": "Description",
    "end_date": "2021-12-01",
    "installment_total_count": 20,
    "interval": 1,
    "interval_type": "d",
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "notification_days": 2,
    "payment_method": "cc",
    "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_api_id": "recurring1234abcd",
    "start_date": "2021-12-01",
    "status": "active",
    "transaction_amount": 300,
    "terms_agree": true,
    "terms_agree_ip": "192.168.0.10",
    "recurring_c1": "recurring custom data 1",
    "recurring_c2": "recurring custom data 2",
    "recurring_c3": "recurring custom data 3",
    "send_to_proc_as_recur": true,
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "next_run_date": "2021-12-01",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "recurring_type_id": "i",
    "installment_amount_total": 99999999,
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
    "account_vault": {
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
      "billing_address": {
        "city": "Novi",
        "state": "Michigan",
        "postal_code": "48375",
        "phone": "3339998822"
      },
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "customer_id": "123456",
      "identity_verification": {
        "dl_state": "MI",
        "dl_number": "1235567",
        "ssn4": "8527",
        "dob_year": "1980"
      },
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_account_vault_api_id": "previousaccountvault123456",
      "previous_token_api_id": "previousaccountvault123456",
      "previous_account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_token_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_agree": true,
      "terms_agree_ip": "192.168.0.10",
      "title": "Test CC Account",
      "_joi": {},
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "account_type": "checking",
      "active": true,
      "cau_summary_status_id": 1,
      "created_ts": 1422040992,
      "e_serial_number": "1234567890",
      "e_track_data": null,
      "e_format": null,
      "e_keyed_data": null,
      "expiring_in_months": null,
      "exp_date": "0722",
      "first_six": "700953",
      "has_recurring": false,
      "last_four": "3657",
      "modified_ts": 1422040992,
      "payment_method": "cc",
      "ticket": null,
      "track_data": null
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
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "payment_schedule": [
      "2021-12-01"
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
    "product_transaction": {
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
    "next_run_date_min": "2021-12-01",
    "next_run_date_max": "2021-12-01",
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "all_tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
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
    "forecast": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "recurring_id": "Recurring ID",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "recurring_splits": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# Skip Recurring Payment

Skip recurring payment

```php
function skipRecurringPayment(
    string $recurringId,
    V1RecurringsSkipPaymentRequest $body,
    ?array $expand = null
): ResponseRecurring
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `recurringId` | `string` | Template, Required | Recurring ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `body` | [`V1RecurringsSkipPaymentRequest`](../../doc/models/v1-recurrings-skip-payment-request.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand20Enum)`](../../doc/models/expand-20-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseRecurring`](../../doc/models/response-recurring.md)

## Example Usage

```php
$recurringId = '11e95f8ec39de8fbdb0a4f1a';

$body = V1RecurringsSkipPaymentRequestBuilder::init(
    7
)->build();

$result = $recurringController->skipRecurringPayment(
    $recurringId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "type": "Recurring",
  "data": {
    "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
    "token_id": "11e95f8ec39de8fbdb0a4f1a",
    "account_vault_api_id": "token1234abcd",
    "token_api_id": "token1234abcd",
    "_joi": {
      "conditions": {}
    },
    "active": true,
    "description": "Description",
    "end_date": "2021-12-01",
    "installment_total_count": 20,
    "interval": 1,
    "interval_type": "d",
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "notification_days": 2,
    "payment_method": "cc",
    "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_id": "11e95f8ec39de8fbdb0a4f1a",
    "recurring_api_id": "recurring1234abcd",
    "start_date": "2021-12-01",
    "status": "active",
    "transaction_amount": 300,
    "terms_agree": true,
    "terms_agree_ip": "192.168.0.10",
    "recurring_c1": "recurring custom data 1",
    "recurring_c2": "recurring custom data 2",
    "recurring_c3": "recurring custom data 3",
    "send_to_proc_as_recur": true,
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "next_run_date": "2021-12-01",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "recurring_type_id": "i",
    "installment_amount_total": 99999999,
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
    "account_vault": {
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
      "billing_address": {
        "city": "Novi",
        "state": "Michigan",
        "postal_code": "48375",
        "phone": "3339998822"
      },
      "contact_id": "11e95f8ec39de8fbdb0a4f1a",
      "customer_id": "123456",
      "identity_verification": {
        "dl_state": "MI",
        "dl_number": "1235567",
        "ssn4": "8527",
        "dob_year": "1980"
      },
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_account_vault_api_id": "previousaccountvault123456",
      "previous_token_api_id": "previousaccountvault123456",
      "previous_account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_token_id": "11e95f8ec39de8fbdb0a4f1a",
      "previous_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
      "terms_agree": true,
      "terms_agree_ip": "192.168.0.10",
      "title": "Test CC Account",
      "_joi": {},
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "account_type": "checking",
      "active": true,
      "cau_summary_status_id": 1,
      "created_ts": 1422040992,
      "e_serial_number": "1234567890",
      "e_track_data": null,
      "e_format": null,
      "e_keyed_data": null,
      "expiring_in_months": null,
      "exp_date": "0722",
      "first_six": "700953",
      "has_recurring": false,
      "last_four": "3657",
      "modified_ts": 1422040992,
      "payment_method": "cc",
      "ticket": null,
      "track_data": null
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
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "payment_schedule": [
      "2021-12-01"
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
    "product_transaction": {
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
    "next_run_date_min": "2021-12-01",
    "next_run_date_max": "2021-12-01",
    "tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
    "all_tags": [
      {
        "location_id": "11e95f8ec39de8fbdb0a4f1a",
        "title": "My terminal",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
      }
    ],
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
    "forecast": {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "recurring_id": "Recurring ID",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
    },
    "recurring_splits": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |
| 412 | Precondition Failed | [`Response412Exception`](../../doc/models/response-412-exception.md) |

