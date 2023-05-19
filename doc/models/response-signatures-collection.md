
# Response Signatures Collection

## Structure

`ResponseSignaturesCollection`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'SignaturesCollection'` | getType(): string | setType(string type): void |
| `list` | [`List8[]`](../../doc/models/list-8.md) | Required | Resource Members | getList(): array | setList(array list): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | Pagination page links | getLinks(): ?Links | setLinks(?Links links): void |
| `pagination` | [`?Pagination`](../../doc/models/pagination.md) | Optional | Pagination info | getPagination(): ?Pagination | setPagination(?Pagination pagination): void |
| `sort` | [`?Sort`](../../doc/models/sort.md) | Optional | Sort information used on the results | getSort(): ?Sort | setSort(?Sort sort): void |

## Example (as JSON)

```json
{
  "type": "SignaturesCollection",
  "list": [
    {
      "signature": "iVBORw0KGgoAAAANSUhEUgAAANwAAAAsCAYAAAAOyNaYAAACvklEQVR4nO3bLZOqUBjA8ScaNxqNRiKRaCQaiXwEG7cRiUajH8FINBqJRCKR+NxyD4OIXtaXw2H3/5s5MwZ39rgz/zkvuKKqgar+YTAYnx/y7wUACwgOsIjgAIsIznFlWerlcpl6GngTgnNYVVW6WCxURDTLsqmngzcgOMdtNhsVERURDYJA8zyfekp4AcE5oCgKzfN8cOvYNM1VdCKiURRNMEu8A8FNrCzLm5j68Q1Fx2o3TwTngCzLNAiCq6D6UTVNo0mS6NfXF+HNGME5or+KeZ7XxrVcLjWOY83zXOu6vnqfeQ/bzHkgOIf0VzHP83Sz2eh6vW4D831fy7JsowvDsH1NdO4jOAfVdX0VXhRFWhSFRlHUrmr7/b4NLU3T9jVbTLcRnMO620ezep1Op3bF832/3XIORQr3EJzjumc7E9HQBUoYhjdnPKJzD8E5xjyT647T6aSr1UpFRPf7ffveuq41TdOHZzyicwvBTeBeVGEY3jwaGBrmWV3/Z82K1z/jca5zB8F9wFBQY6JaLBYax7EmSXJ3DD2v624rzUpoVrsgCDjXOWRWwVVVNfUUrvTDGrNK3YsqTdNRn69pGs2y7NshssV0w2yCK4pCRUSPx+Okc/hfWI9WqbFRPaMbYjc+s7ptt1uic8BsgsvzXEVED4fDR3/P2PPVUFifDOo7THxmPiY03/fZXk7s1wR371z1zPnKlbDGuvc9TKKz78cE9yio3W436vbv1fOV6/oPx010/Ee5PbMLbrfbPRWU53kPb/9+SlRj9L8ALcJ/lNsym+DO5/PTQaVpqnVdT/0RnGLOed0LlikvpH6L2QSnqoPX4QT1mu4FC3/Dz5tVcMDcERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGARwQEWERxgEcEBFhEcYBHBARYRHGDRX+EC0ah++pNrAAAAAElFTkSuQmCC",
      "resource": "Transaction",
      "resource_id": "11e95f8ec39de8fbdb0a4f1a",
      "id": "11e95f8ec39de8fbdb0a4f1a",
      "created_ts": 1422040992,
      "modified_ts": 1422040992,
      "raw_signature": "raw_signature6"
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

