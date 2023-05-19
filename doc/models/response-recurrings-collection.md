
# Response Recurrings Collection

## Structure

`ResponseRecurringsCollection`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'RecurringsCollection'` | getType(): string | setType(string type): void |
| `list` | [`List7[]`](../../doc/models/list-7.md) | Required | Resource Members | getList(): array | setList(array list): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | Pagination page links | getLinks(): ?Links | setLinks(?Links links): void |
| `pagination` | [`?Pagination`](../../doc/models/pagination.md) | Optional | Pagination info | getPagination(): ?Pagination | setPagination(?Pagination pagination): void |
| `sort` | [`?Sort`](../../doc/models/sort.md) | Optional | Sort information used on the results | getSort(): ?Sort | setSort(?Sort sort): void |

## Example (as JSON)

```json
{
  "type": "RecurringsCollection",
  "list": [
    {
      "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
      "token_id": "11e95f8ec39de8fbdb0a4f1a",
      "account_vault_api_id": "token1234abcd",
      "token_api_id": "token1234abcd",
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
      "next_run_date_min": "2021-12-01",
      "next_run_date_max": "2021-12-01",
      "_joi": {
        "conditions": {
          "method": "xor",
          "values": "account_vault_api_id"
        }
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

