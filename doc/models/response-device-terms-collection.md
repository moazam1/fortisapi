
# Response Device Terms Collection

## Structure

`ResponseDeviceTermsCollection`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'DeviceTermsCollection'` | getType(): string | setType(string type): void |
| `list` | [`List2[]`](../../doc/models/list-2.md) | Required | Resource Members | getList(): array | setList(array list): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | Pagination page links | getLinks(): ?Links | setLinks(?Links links): void |
| `pagination` | [`?Pagination`](../../doc/models/pagination.md) | Optional | Pagination info | getPagination(): ?Pagination | setPagination(?Pagination pagination): void |
| `sort` | [`?Sort`](../../doc/models/sort.md) | Optional | Sort information used on the results | getSort(): ?Sort | setSort(?Sort sort): void |

## Example (as JSON)

```json
{
  "type": "DeviceTermsCollection",
  "list": [
    {
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "terminal_id": "11e95f8ec39de8fbdb0a4f1a",
      "require_signature": true,
      "device_term_api_id": "device_term134",
      "terms_conditions": "FUNgib0Vh0B9c0Wbttvr50vNtGLOkTdFL0eFmhN1RJpKhK14IENeDa8irp2dEk9thEcVHvVEyriQeZLs5NjNsCzqNj9JDA4RSJwK647IFtYjrNPN1nBb9bw6hoQ71oT5kpsiXGt8HcqBFVBVeDA7psIzKAyDveAw2o1hfjipkOtXrPgWun0rYwyyFuvqkT1egQYKfYDj",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "reason_code_id": 1000,
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
      "signature": {
        "signature": "signature2",
        "resource": "Recurring",
        "resource_id": "resource_id0",
        "id": "id4",
        "created_ts": 160,
        "modified_ts": 20
      },
      "created_user": {
        "account_number": "account_number0",
        "branding_domain_url": "branding_domain_url0",
        "cell_phone": "cell_phone6",
        "company_name": "company_name6",
        "contact_id": "contact_id4",
        "email": "email6",
        "last_name": "last_name8",
        "primary_location_id": "primary_location_id0",
        "tz": "tz8",
        "username": "username0",
        "user_type_code": 400,
        "id": "id0",
        "status": false,
        "login_attempts": 68,
        "last_login_ts": 178,
        "created_ts": 248,
        "modified_ts": 188,
        "created_user_id": "created_user_id2",
        "current_date_time": "current_date_time0"
      },
      "location": {
        "id": "id0",
        "created_ts": 242,
        "modified_ts": 194,
        "account_number": "account_number0",
        "address": {
          "city": "city6",
          "state": "state2",
          "postal_code": "postal_code8",
          "country": "US",
          "street": "street6"
        },
        "branding_domain_id": "branding_domain_id4",
        "contact_email_trx_receipt_default": false,
        "default_ach": "default_ach4",
        "name": "name0",
        "parent_id": "parent_id6"
      },
      "terminal": {
        "location_id": "location_id8",
        "default_product_transaction_id": "default_product_transaction_id0",
        "terminal_application_id": "terminal_application_id4",
        "terminal_cvm_id": "terminal_cvm_id6",
        "terminal_manufacturer_code": "1",
        "title": "title0",
        "mac_address": "mac_address2",
        "local_ip_address": "local_ip_address2",
        "port": 234,
        "serial_number": "serial_number2",
        "debit": false,
        "emv": false,
        "cashback_enable": false,
        "print_enable": false,
        "sig_capture_enable": false,
        "id": "id4",
        "created_ts": 222,
        "modified_ts": 146,
        "last_registration_ts": 102,
        "created_user_id": "created_user_id4",
        "modified_user_id": "modified_user_id4"
      }
    }
  ],
  "links": {
    "type": "type4",
    "first": "first0",
    "previous": "previous2",
    "last": "last4"
  },
  "pagination": {
    "type": "type6",
    "total_count": 100,
    "page_count": 212,
    "page_number": 28,
    "page_size": 6
  },
  "sort": {
    "type": "type2",
    "fields": [
      {
        "field": "field4",
        "order": "asc"
      },
      {
        "field": "field5",
        "order": "desc"
      },
      {
        "field": "field6",
        "order": "asc"
      }
    ]
  }
}
```

