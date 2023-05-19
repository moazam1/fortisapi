
# Response Device Term

## Structure

`ResponseDeviceTerm`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'DeviceTerm'` | getType(): string | setType(string type): void |
| `data` | [`?Data3`](../../doc/models/data-3.md) | Optional | - | getData(): ?Data3 | setData(?Data3 data): void |

## Example (as JSON)

```json
{
  "type": "DeviceTerm",
  "data": {
    "location_id": "location_id4",
    "terminal_id": "terminal_id6",
    "require_signature": false,
    "device_term_api_id": "device_term_api_id0",
    "terms_conditions": "terms_conditions0",
    "id": "id0",
    "reason_code_id": 250,
    "signature": {
      "signature": "signature6",
      "resource": "AccountVault",
      "resource_id": "resource_id4",
      "id": "id8",
      "created_ts": 202,
      "modified_ts": 22
    },
    "created_ts": 114,
    "modified_ts": 190,
    "created_user_id": "created_user_id2",
    "created_user": {
      "account_number": "account_number6",
      "branding_domain_url": "branding_domain_url6",
      "cell_phone": "cell_phone0",
      "company_name": "company_name0",
      "contact_id": "contact_id0",
      "email": "email2",
      "last_name": "last_name2",
      "primary_location_id": "primary_location_id6",
      "tz": "tz4",
      "username": "username6",
      "user_type_code": 100,
      "id": "id4",
      "status": false,
      "login_attempts": 210,
      "last_login_ts": 100,
      "created_ts": 30,
      "modified_ts": 210,
      "created_user_id": "created_user_id4",
      "current_date_time": "current_date_time4"
    },
    "location": {
      "id": "id4",
      "created_ts": 28,
      "modified_ts": 104,
      "account_number": "account_number4",
      "address": {
        "city": "city0",
        "state": "state6",
        "postal_code": "postal_code2",
        "country": "US",
        "street": "street0"
      },
      "branding_domain_id": "branding_domain_id8",
      "contact_email_trx_receipt_default": false,
      "default_ach": "default_ach8",
      "name": "name4",
      "parent_id": "parent_id0"
    },
    "terminal": {
      "location_id": "location_id2",
      "default_product_transaction_id": "default_product_transaction_id4",
      "terminal_application_id": "terminal_application_id8",
      "terminal_cvm_id": "terminal_cvm_id2",
      "terminal_manufacturer_code": "4",
      "title": "title4",
      "mac_address": "mac_address6",
      "local_ip_address": "local_ip_address8",
      "port": 20,
      "serial_number": "serial_number2",
      "debit": false,
      "emv": false,
      "cashback_enable": false,
      "print_enable": false,
      "sig_capture_enable": false,
      "id": "id8",
      "created_ts": 76,
      "modified_ts": 104,
      "last_registration_ts": 196,
      "created_user_id": "created_user_id0",
      "modified_user_id": "modified_user_id0"
    }
  }
}
```

