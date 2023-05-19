# Tokens

The tokens endpoint is used as a tokenization endpoint to store token records. If there is a need to store accountvaults (tokens) for account numbers and card numbers for later use, then this is the endpoint to perform that task.

The account_vault_id field can be used in place of the account_number and exp_date fields on most endpoints in the system. So storing an accountvault on this endpoint will allow for the reuse of the account at a later time.

```php
$tokensController = $client->getTokensController();
```

## Class Name

`TokensController`

## Methods

* [Create a New ACH Token](../../doc/controllers/tokens.md#create-a-new-ach-token)
* [Create a New Credit Card Token](../../doc/controllers/tokens.md#create-a-new-credit-card-token)
* [Create a New Previous Transaction Token](../../doc/controllers/tokens.md#create-a-new-previous-transaction-token)
* [Create a New Terminal Token](../../doc/controllers/tokens.md#create-a-new-terminal-token)
* [Create a New Ticket Token](../../doc/controllers/tokens.md#create-a-new-ticket-token)
* [Delete a Single Token Record](../../doc/controllers/tokens.md#delete-a-single-token-record)
* [View Single Token Record](../../doc/controllers/tokens.md#view-single-token-record)
* [List All Tokens Related](../../doc/controllers/tokens.md#list-all-tokens-related)
* [Update ACH Token](../../doc/controllers/tokens.md#update-ach-token)
* [Update CC Token](../../doc/controllers/tokens.md#update-cc-token)


# Create a New ACH Token

Create a new ACH Token

```php
function createANewACHToken(V1TokensAchRequest $body, ?array $expand = null): ResponseToken
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`V1TokensAchRequest`](../../doc/models/v1-tokens-ach-request.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand41Enum)`](../../doc/models/expand-41-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseToken`](../../doc/models/response-token.md)

## Example Usage

```php
$body = V1TokensAchRequestBuilder::init(
    '11e95f8ec39de8fbdb0a4f1a'
)
    ->accountHolderName('John Smith')
    ->accountNumber('545454545454545')
    ->accountVaultApiId('accountvaultabcd')
    ->tokenApiId('tokenabcd')
    ->accountvaultC1('accountvault custom 1')
    ->accountvaultC2('accountvault custom 2')
    ->accountvaultC3('accountvault custom 3')
    ->tokenC1('token custom 1')
    ->tokenC2('token custom 2')
    ->tokenC3('token custom 3')
    ->achSecCode(AchSecCode3Enum::WEB)
    ->contactId('11e95f8ec39de8fbdb0a4f1a')
    ->customerId('123456')
    ->previousAccountVaultApiId('previousaccountvault123456')
    ->previousTokenApiId('previousaccountvault123456')
    ->previousAccountVaultId('11e95f8ec39de8fbdb0a4f1a')
    ->previousTokenId('11e95f8ec39de8fbdb0a4f1a')
    ->previousTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->termsAgree(true)
    ->termsAgreeIp('192.168.0.10')
    ->title('Test CC Account')
    ->accountType(AccountType6Enum::SAVINGS)
    ->isCompany(false)
    ->routingNumber('100020200')
    ->build();

$result = $tokensController->createANewACHToken($body);
```

## Example Response *(as JSON)*

```json
{
  "type": "Token",
  "data": {
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
    "track_data": null,
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
    "activeRecurrings": [
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
        "installment_amount_total": 99999999
      }
    ],
    "is_deletable": true,
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
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
    "account_vault_cau_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "account_vault_cau_product_transactions": [
      {
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


# Create a New Credit Card Token

Create a new Credit Card Token

```php
function createANewCreditCardToken(V1TokensCcRequest $body, ?array $expand = null): ResponseToken
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`V1TokensCcRequest`](../../doc/models/v1-tokens-cc-request.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand41Enum)`](../../doc/models/expand-41-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseToken`](../../doc/models/response-token.md)

## Example Usage

```php
$body = V1TokensCcRequestBuilder::init(
    '11e95f8ec39de8fbdb0a4f1a'
)
    ->accountHolderName('John Smith')
    ->accountNumber('5454545454545454')
    ->accountVaultApiId('accountvaultabcd')
    ->tokenApiId('tokenabcd')
    ->accountvaultC1('accountvault custom 1')
    ->accountvaultC2('accountvault custom 2')
    ->accountvaultC3('accountvault custom 3')
    ->tokenC1('token custom 1')
    ->tokenC2('token custom 2')
    ->tokenC3('token custom 3')
    ->achSecCode(AchSecCode3Enum::WEB)
    ->contactId('11e95f8ec39de8fbdb0a4f1a')
    ->customerId('123456')
    ->previousAccountVaultApiId('previousaccountvault123456')
    ->previousTokenApiId('previousaccountvault123456')
    ->previousAccountVaultId('11e95f8ec39de8fbdb0a4f1a')
    ->previousTokenId('11e95f8ec39de8fbdb0a4f1a')
    ->previousTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->termsAgree(true)
    ->termsAgreeIp('192.168.0.10')
    ->title('Test CC Account')
    ->expDate('0929')
    ->eSerialNumber('1234567890')
    ->eTrackData('%B5454545454545454^account holder^17041010001111A123456789012?250112000000153000000?;5454545454545454=25011011000012345678?00|DC7AB845EFA793FB3C89C5D347D36ED11CAAED0C33E150437893996BA75EB8A0F334D0DAA1B874B6C677A4EF6984B089F891D8E434ACD867B616F4D815E63DA6A86B2AF927E9919B0CFC1DA3FD276D9382672EF8AA256329|32EA4D785CA3398882AABC405017EF9C2BDA666FA007A76538DE10878601EEC36EFE1F185BB8B1C8')
    ->eFormat('ksn')
    ->eKeyedData('236D530E098D48DB3F1AA367882CC1A7D475EFCACEFF1E965F17EC1E2D42CBF611C9EB0F80F4255784BA06951BD6092AB6CD3369D3D7E022E74DDCB16F9C40599FA03355E37E6ABB06B717B207709ED8C6BC5C7B6E32BB2B2F5046551A1C88D6')
    ->runAvs(false)
    ->trackData('%B5424181111112228^FDCS TEST CARD /MASTERCARD^18121010001111123456789012?;5424181111112228=1812101100000123456?')
    ->ticket('12345678')
    ->build();

$result = $tokensController->createANewCreditCardToken($body);
```

## Example Response *(as JSON)*

```json
{
  "type": "Token",
  "data": {
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
    "track_data": null,
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
    "activeRecurrings": [
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
        "installment_amount_total": 99999999
      }
    ],
    "is_deletable": true,
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
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
    "account_vault_cau_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "account_vault_cau_product_transactions": [
      {
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


# Create a New Previous Transaction Token

Create a new Previous Transaction Token

```php
function createANewPreviousTransactionToken(
    V1TokensPreviousTransactionRequest $body,
    ?array $expand = null
): ResponseToken
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`V1TokensPreviousTransactionRequest`](../../doc/models/v1-tokens-previous-transaction-request.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand41Enum)`](../../doc/models/expand-41-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseToken`](../../doc/models/response-token.md)

## Example Usage

```php
$body = V1TokensPreviousTransactionRequestBuilder::init(
    '11e95f8ec39de8fbdb0a4f1a',
    '11e95f8ec39de8fbdb0a4f1a'
)
    ->accountHolderName('John Smith')
    ->accountNumber('545454545454545')
    ->accountVaultApiId('accountvaultabcd')
    ->tokenApiId('tokenabcd')
    ->accountvaultC1('accountvault custom 1')
    ->accountvaultC2('accountvault custom 2')
    ->accountvaultC3('accountvault custom 3')
    ->tokenC1('token custom 1')
    ->tokenC2('token custom 2')
    ->tokenC3('token custom 3')
    ->achSecCode(AchSecCode3Enum::WEB)
    ->contactId('11e95f8ec39de8fbdb0a4f1a')
    ->customerId('123456')
    ->previousAccountVaultApiId('previousaccountvault123456')
    ->previousTokenApiId('previousaccountvault123456')
    ->previousAccountVaultId('11e95f8ec39de8fbdb0a4f1a')
    ->previousTokenId('11e95f8ec39de8fbdb0a4f1a')
    ->termsAgree(true)
    ->termsAgreeIp('192.168.0.10')
    ->title('Test CC Account')
    ->build();

$result = $tokensController->createANewPreviousTransactionToken($body);
```

## Example Response *(as JSON)*

```json
{
  "type": "Token",
  "data": {
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
    "track_data": null,
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
    "activeRecurrings": [
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
        "installment_amount_total": 99999999
      }
    ],
    "is_deletable": true,
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
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
    "account_vault_cau_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "account_vault_cau_product_transactions": [
      {
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


# Create a New Terminal Token

Create a new Terminal Token

```php
function createANewTerminalToken(V1TokensTerminalRequest $body, ?array $expand = null): ResponseToken
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`V1TokensTerminalRequest`](../../doc/models/v1-tokens-terminal-request.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand41Enum)`](../../doc/models/expand-41-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseToken`](../../doc/models/response-token.md)

## Example Usage

```php
$body = V1TokensTerminalRequestBuilder::init(
    '11e95f8ec39de8fbdb0a4f1a',
    '11e95f8ec39de8fbdb0a4f1a',
    '11e95f8ec39de8fbdb0a4f1a'
)
    ->accountHolderName('John Smith')
    ->accountNumber('545454545454545')
    ->accountVaultApiId('accountvaultabcd')
    ->tokenApiId('tokenabcd')
    ->accountvaultC1('accountvault custom 1')
    ->accountvaultC2('accountvault custom 2')
    ->accountvaultC3('accountvault custom 3')
    ->tokenC1('token custom 1')
    ->tokenC2('token custom 2')
    ->tokenC3('token custom 3')
    ->achSecCode(AchSecCode3Enum::WEB)
    ->customerId('123456')
    ->previousAccountVaultApiId('previousaccountvault123456')
    ->previousTokenApiId('previousaccountvault123456')
    ->previousAccountVaultId('11e95f8ec39de8fbdb0a4f1a')
    ->previousTokenId('11e95f8ec39de8fbdb0a4f1a')
    ->previousTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->termsAgree(true)
    ->termsAgreeIp('192.168.0.10')
    ->title('Test CC Account')
    ->build();

$result = $tokensController->createANewTerminalToken($body);
```

## Example Response *(as JSON)*

```json
{
  "type": "Token",
  "data": {
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
    "track_data": null,
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
    "activeRecurrings": [
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
        "installment_amount_total": 99999999
      }
    ],
    "is_deletable": true,
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
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
    "account_vault_cau_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "account_vault_cau_product_transactions": [
      {
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


# Create a New Ticket Token

Create a new Ticket Token

```php
function createANewTicketToken(V1TokensTicketRequest $body, ?array $expand = null): ResponseToken
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`V1TokensTicketRequest`](../../doc/models/v1-tokens-ticket-request.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand41Enum)`](../../doc/models/expand-41-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseToken`](../../doc/models/response-token.md)

## Example Usage

```php
$body = V1TokensTicketRequestBuilder::init(
    '11e95f8ec39de8fbdb0a4f1a',
    '12345678'
)
    ->accountHolderName('John Smith')
    ->accountNumber('545454545454545')
    ->accountVaultApiId('accountvaultabcd')
    ->tokenApiId('tokenabcd')
    ->accountvaultC1('accountvault custom 1')
    ->accountvaultC2('accountvault custom 2')
    ->accountvaultC3('accountvault custom 3')
    ->tokenC1('token custom 1')
    ->tokenC2('token custom 2')
    ->tokenC3('token custom 3')
    ->achSecCode(AchSecCode3Enum::WEB)
    ->contactId('11e95f8ec39de8fbdb0a4f1a')
    ->customerId('123456')
    ->previousAccountVaultApiId('previousaccountvault123456')
    ->previousTokenApiId('previousaccountvault123456')
    ->previousAccountVaultId('11e95f8ec39de8fbdb0a4f1a')
    ->previousTokenId('11e95f8ec39de8fbdb0a4f1a')
    ->previousTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->termsAgree(true)
    ->termsAgreeIp('192.168.0.10')
    ->title('Test CC Account')
    ->build();

$result = $tokensController->createANewTicketToken($body);
```

## Example Response *(as JSON)*

```json
{
  "type": "Token",
  "data": {
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
    "track_data": null,
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
    "activeRecurrings": [
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
        "installment_amount_total": 99999999
      }
    ],
    "is_deletable": true,
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
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
    "account_vault_cau_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "account_vault_cau_product_transactions": [
      {
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


# Delete a Single Token Record

Delete a single token record

```php
function deleteASingleTokenRecord(string $tokenId): ResponseToken
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `tokenId` | `string` | Template, Required | A unique, system-generated identifier for the Token.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |

## Response Type

[`ResponseToken`](../../doc/models/response-token.md)

## Example Usage

```php
$tokenId = '11e95f8ec39de8fbdb0a4f1a';

$result = $tokensController->deleteASingleTokenRecord($tokenId);
```

## Example Response *(as JSON)*

```json
{
  "type": "Token",
  "data": {
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
    "track_data": null,
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
    "activeRecurrings": [
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
        "installment_amount_total": 99999999
      }
    ],
    "is_deletable": true,
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
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
    "account_vault_cau_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "account_vault_cau_product_transactions": [
      {
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
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# View Single Token Record

View single token record

```php
function viewSingleTokenRecord(string $tokenId, ?array $expand = null): ResponseToken
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `tokenId` | `string` | Template, Required | A unique, system-generated identifier for the Token.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `expand` | [`?(string[]) (Expand41Enum)`](../../doc/models/expand-41-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseToken`](../../doc/models/response-token.md)

## Example Usage

```php
$tokenId = '11e95f8ec39de8fbdb0a4f1a';

$result = $tokensController->viewSingleTokenRecord($tokenId);
```

## Example Response *(as JSON)*

```json
{
  "type": "Token",
  "data": {
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
    "track_data": null,
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
    "activeRecurrings": [
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
        "installment_amount_total": 99999999
      }
    ],
    "is_deletable": true,
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
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
    "account_vault_cau_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "account_vault_cau_product_transactions": [
      {
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
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# List All Tokens Related

List all tokens related

```php
function listAllTokensRelated(
    ?Page $page = null,
    ?Sort28 $sort = null,
    ?Filter12 $filter = null,
    ?array $expand = null
): ResponseTokensCollection
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | [`?Page`](../../doc/models/page.md) | Query, Optional | Use this field to specify paginate your results, by using page size and number. You can use one of the following methods:<br><br>> /endpoint?page={ "number": 1, "size": 50 }<br>> <br>> /endpoint?page[number]=1&page[size]=50 |
| `sort` | [`?Sort28`](../../doc/models/sort-28.md) | Query, Optional | You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:<br><br>> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }<br>> <br>> /endpoint?sort[field_name]=asc&sort[field_name2]=desc |
| `filter` | [`?Filter12`](../../doc/models/filter-12.md) | Query, Optional | You can use any `field_name` from this endpoint results as a filter, and you can also use more than one field to create AND conditions. For date fields (ended with `_ts`), you can also search for ranges using the `$gte` (Greater than or equal to) and/or  `$lte` (Lower than or equal to). You can use one of the following methods:<br><br>> /endpoint?filter={ "field_name": "Value" }<br>> <br>> /endpoint?filter[field_name]=Value<br>> <br>> /endpoint?filter={ "created_ts": "today" }<br>> <br>> /endpoint?filter[created_ts]=today<br>> <br>> /endpoint?filter={ "created_ts": { "$gte": "yesterday", "$lte": "today" } }<br>> <br>> /endpoint?filter[created_ts][$gte]=yesterday&filter[created_ts][$lte]=today<br>> <br>> /endpoint?filter[address][city]=memphis<br>> <br>> /endpoint?filter={ "address": { "city" : "memphis" } } |
| `expand` | [`?(string[]) (Expand41Enum)`](../../doc/models/expand-41-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseTokensCollection`](../../doc/models/response-tokens-collection.md)

## Example Usage

```php
$page = PageBuilder::init()
    ->number(1)
    ->size(50)
    ->build();

$result = $tokensController->listAllTokensRelated($page);
```

## Example Response *(as JSON)*

```json
{
  "type": "TokensCollection",
  "list": [
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
      "track_data": null,
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
      "activeRecurrings": [
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
          "installment_amount_total": 99999999
        }
      ],
      "is_deletable": true,
      "signature": {
        "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
        "resource": "Transaction",
        "resource_id": "11e95f8ec39de8fbdb0a4f1a",
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "modified_ts": 1422040992
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
      "account_vault_cau_logs": [
        {
          "id": "11e95f8ec39de8fbdb0a4f1a",
          "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
          "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
          "created_ts": 1422040992,
          "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
        }
      ],
      "account_vault_cau_product_transactions": [
        {
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


# Update ACH Token

Update ACH Token

```php
function updateACHToken(string $tokenId, V1TokensAchRequest1 $body, ?array $expand = null): ResponseToken
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `tokenId` | `string` | Template, Required | A unique, system-generated identifier for the Token.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `body` | [`V1TokensAchRequest1`](../../doc/models/v1-tokens-ach-request-1.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand41Enum)`](../../doc/models/expand-41-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseToken`](../../doc/models/response-token.md)

## Example Usage

```php
$tokenId = '11e95f8ec39de8fbdb0a4f1a';

$body = V1TokensAchRequest1Builder::init()
    ->accountHolderName('John Smith')
    ->accountNumber('545454545454545')
    ->accountVaultApiId('accountvaultabcd')
    ->tokenApiId('tokenabcd')
    ->accountvaultC1('accountvault custom 1')
    ->accountvaultC2('accountvault custom 2')
    ->accountvaultC3('accountvault custom 3')
    ->tokenC1('token custom 1')
    ->tokenC2('token custom 2')
    ->tokenC3('token custom 3')
    ->achSecCode(AchSecCode3Enum::WEB)
    ->contactId('11e95f8ec39de8fbdb0a4f1a')
    ->customerId('123456')
    ->locationId('11e95f8ec39de8fbdb0a4f1a')
    ->previousAccountVaultApiId('previousaccountvault123456')
    ->previousTokenApiId('previousaccountvault123456')
    ->previousAccountVaultId('11e95f8ec39de8fbdb0a4f1a')
    ->previousTokenId('11e95f8ec39de8fbdb0a4f1a')
    ->previousTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->termsAgree(true)
    ->termsAgreeIp('192.168.0.10')
    ->title('Test CC Account')
    ->accountType(AccountType6Enum::SAVINGS)
    ->build();

$result = $tokensController->updateACHToken(
    $tokenId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "type": "Token",
  "data": {
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
    "track_data": null,
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
    "activeRecurrings": [
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
        "installment_amount_total": 99999999
      }
    ],
    "is_deletable": true,
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
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
    "account_vault_cau_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "account_vault_cau_product_transactions": [
      {
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


# Update CC Token

Update CC Token

```php
function updateCCToken(string $tokenId, V1TokensCcRequest1 $body, ?array $expand = null): ResponseToken
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `tokenId` | `string` | Template, Required | A unique, system-generated identifier for the Token.<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `body` | [`V1TokensCcRequest1`](../../doc/models/v1-tokens-cc-request-1.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand41Enum)`](../../doc/models/expand-41-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseToken`](../../doc/models/response-token.md)

## Example Usage

```php
$tokenId = '11e95f8ec39de8fbdb0a4f1a';

$body = V1TokensCcRequest1Builder::init()
    ->accountHolderName('John Smith')
    ->accountNumber('545454545454545')
    ->accountVaultApiId('accountvaultabcd')
    ->tokenApiId('tokenabcd')
    ->accountvaultC1('accountvault custom 1')
    ->accountvaultC2('accountvault custom 2')
    ->accountvaultC3('accountvault custom 3')
    ->tokenC1('token custom 1')
    ->tokenC2('token custom 2')
    ->tokenC3('token custom 3')
    ->achSecCode(AchSecCode3Enum::WEB)
    ->contactId('11e95f8ec39de8fbdb0a4f1a')
    ->customerId('123456')
    ->locationId('11e95f8ec39de8fbdb0a4f1a')
    ->previousAccountVaultApiId('previousaccountvault123456')
    ->previousTokenApiId('previousaccountvault123456')
    ->previousAccountVaultId('11e95f8ec39de8fbdb0a4f1a')
    ->previousTokenId('11e95f8ec39de8fbdb0a4f1a')
    ->previousTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->termsAgree(true)
    ->termsAgreeIp('192.168.0.10')
    ->title('Test CC Account')
    ->expDate('0929')
    ->build();

$result = $tokensController->updateCCToken(
    $tokenId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "type": "Token",
  "data": {
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
    "track_data": null,
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
    "activeRecurrings": [
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
        "installment_amount_total": 99999999
      }
    ],
    "is_deletable": true,
    "signature": {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992
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
    "account_vault_cau_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
        "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
        "created_ts": 1422040992,
        "created_user_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "account_vault_cau_product_transactions": [
      {
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

