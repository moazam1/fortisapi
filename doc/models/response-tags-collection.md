
# Response Tags Collection

## Structure

`ResponseTagsCollection`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'TagsCollection'` | getType(): string | setType(string type): void |
| `list` | [`List9[]`](../../doc/models/list-9.md) | Required | Resource Members | getList(): array | setList(array list): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | Pagination page links | getLinks(): ?Links | setLinks(?Links links): void |
| `pagination` | [`?Pagination`](../../doc/models/pagination.md) | Optional | Pagination info | getPagination(): ?Pagination | setPagination(?Pagination pagination): void |
| `sort` | [`?Sort`](../../doc/models/sort.md) | Optional | Sort information used on the results | getSort(): ?Sort | setSort(?Sort sort): void |

## Example (as JSON)

```json
{
  "type": "TagsCollection",
  "list": [
    {
      "location_id": "11e95f8ec39de8fbdb0a4f1a",
      "title": "My terminal",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
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

