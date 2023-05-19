
# Response Locations Collection

## Structure

`ResponseLocationsCollection`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'LocationsCollection'` | getType(): string | setType(string type): void |
| `list` | [`List3[]`](../../doc/models/list-3.md) | Required | Resource Members | getList(): array | setList(array list): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | Pagination page links | getLinks(): ?Links | setLinks(?Links links): void |
| `pagination` | [`?Pagination`](../../doc/models/pagination.md) | Optional | Pagination info | getPagination(): ?Pagination | setPagination(?Pagination pagination): void |
| `sort` | [`?Sort`](../../doc/models/sort.md) | Optional | Sort information used on the results | getSort(): ?Sort | setSort(?Sort sort): void |

## Example (as JSON)

```json
{
  "type": "LocationsCollection",
  "list": [
    {
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "account_number": "5454545454545454",
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
      "parent_id": "11ed3e73adb98c0282f3fa9b",
      "show_contact_notes": true,
      "show_contact_files": true,
      "address": {
        "city": "city2",
        "state": "state8",
        "postal_code": "postal_code4",
        "country": "US",
        "street": "street2"
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

