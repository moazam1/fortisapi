# Locations

```php
$locationsController = $client->getLocationsController();
```

## Class Name

`LocationsController`

## Methods

* [List All Locations](../../doc/controllers/locations.md#list-all-locations)
* [Locations Detail](../../doc/controllers/locations.md#locations-detail)
* [View Single Location Record](../../doc/controllers/locations.md#view-single-location-record)
* [Location Detail](../../doc/controllers/locations.md#location-detail)


# List All Locations

List all locations

```php
function listAllLocations(
    ?Page $page = null,
    ?Sort19 $sort = null,
    ?Filter3 $filter = null,
    ?array $expand = null
): ResponseLocationsCollection
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | [`?Page`](../../doc/models/page.md) | Query, Optional | Use this field to specify paginate your results, by using page size and number. You can use one of the following methods:<br><br>> /endpoint?page={ "number": 1, "size": 50 }<br>> <br>> /endpoint?page[number]=1&page[size]=50 |
| `sort` | [`?Sort19`](../../doc/models/sort-19.md) | Query, Optional | You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:<br><br>> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }<br>> <br>> /endpoint?sort[field_name]=asc&sort[field_name2]=desc |
| `filter` | [`?Filter3`](../../doc/models/filter-3.md) | Query, Optional | You can use any `field_name` from this endpoint results as a filter, and you can also use more than one field to create AND conditions. For date fields (ended with `_ts`), you can also search for ranges using the `$gte` (Greater than or equal to) and/or  `$lte` (Lower than or equal to). You can use one of the following methods:<br><br>> /endpoint?filter={ "field_name": "Value" }<br>> <br>> /endpoint?filter[field_name]=Value<br>> <br>> /endpoint?filter={ "created_ts": "today" }<br>> <br>> /endpoint?filter[created_ts]=today<br>> <br>> /endpoint?filter={ "created_ts": { "$gte": "yesterday", "$lte": "today" } }<br>> <br>> /endpoint?filter[created_ts][$gte]=yesterday&filter[created_ts][$lte]=today<br>> <br>> /endpoint?filter[address][city]=memphis<br>> <br>> /endpoint?filter={ "address": { "city" : "memphis" } } |
| `expand` | [`?(string[]) (Expand7Enum)`](../../doc/models/expand-7-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseLocationsCollection`](../../doc/models/response-locations-collection.md)

## Example Usage

```php
$page = PageBuilder::init()
    ->number(1)
    ->size(50)
    ->build();

$result = $locationsController->listAllLocations($page);
```

## Example Response *(as JSON)*

```json
{
  "type": "LocationsCollection",
  "list": [
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
      "parent_id": "11ed3e73adb98c0282f3fa9b",
      "show_contact_notes": true,
      "show_contact_files": true
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


# Locations Detail

Locations Detail

```php
function locationsDetail(
    ?Page $page = null,
    ?Sort19 $sort = null,
    ?Filter3 $filter = null,
    ?array $expand = null
): ResponseLocationInfosCollection
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | [`?Page`](../../doc/models/page.md) | Query, Optional | Use this field to specify paginate your results, by using page size and number. You can use one of the following methods:<br><br>> /endpoint?page={ "number": 1, "size": 50 }<br>> <br>> /endpoint?page[number]=1&page[size]=50 |
| `sort` | [`?Sort19`](../../doc/models/sort-19.md) | Query, Optional | You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:<br><br>> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }<br>> <br>> /endpoint?sort[field_name]=asc&sort[field_name2]=desc |
| `filter` | [`?Filter3`](../../doc/models/filter-3.md) | Query, Optional | You can use any `field_name` from this endpoint results as a filter, and you can also use more than one field to create AND conditions. For date fields (ended with `_ts`), you can also search for ranges using the `$gte` (Greater than or equal to) and/or  `$lte` (Lower than or equal to). You can use one of the following methods:<br><br>> /endpoint?filter={ "field_name": "Value" }<br>> <br>> /endpoint?filter[field_name]=Value<br>> <br>> /endpoint?filter={ "created_ts": "today" }<br>> <br>> /endpoint?filter[created_ts]=today<br>> <br>> /endpoint?filter={ "created_ts": { "$gte": "yesterday", "$lte": "today" } }<br>> <br>> /endpoint?filter[created_ts][$gte]=yesterday&filter[created_ts][$lte]=today<br>> <br>> /endpoint?filter[address][city]=memphis<br>> <br>> /endpoint?filter={ "address": { "city" : "memphis" } } |
| `expand` | [`?(string[]) (Expand7Enum)`](../../doc/models/expand-7-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseLocationInfosCollection`](../../doc/models/response-location-infos-collection.md)

## Example Usage

```php
$page = PageBuilder::init()
    ->number(1)
    ->size(50)
    ->build();

$result = $locationsController->locationsDetail($page);
```

## Example Response *(as JSON)*

```json
{
  "type": "LocationInfosCollection",
  "list": [
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
      "parent_id": "11ed3e73adb98c0282f3fa9b",
      "show_contact_notes": true,
      "show_contact_files": true,
      "branding_domain_url": "subdomain.sandbox.domain.com",
      "branding_domain": {},
      "product_transactions": [
        null
      ],
      "product_file": {},
      "product_accountvault": {},
      "product_recurring": {},
      "tags": [
        null
      ],
      "terminals": [
        null
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


# View Single Location Record

View single location record

```php
function viewSingleLocationRecord(string $locationId, ?array $expand = null): ResponseLocation
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `locationId` | `string` | Template, Required | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `expand` | [`?(string[]) (Expand7Enum)`](../../doc/models/expand-7-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseLocation`](../../doc/models/response-location.md)

## Example Usage

```php
$locationId = '11e95f8ec39de8fbdb0a4f1a';

$result = $locationsController->viewSingleLocationRecord($locationId);
```

## Example Response *(as JSON)*

```json
{
  "type": "Location",
  "data": {
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
    "parent_id": "11ed3e73adb98c0282f3fa9b",
    "show_contact_notes": true,
    "show_contact_files": true
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# Location Detail

Location Detail

```php
function locationDetail(string $locationId, ?array $expand = null): ResponseLocationInfo
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `locationId` | `string` | Template, Required | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `expand` | [`?(string[]) (Expand7Enum)`](../../doc/models/expand-7-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseLocationInfo`](../../doc/models/response-location-info.md)

## Example Usage

```php
$locationId = '11e95f8ec39de8fbdb0a4f1a';

$result = $locationsController->locationDetail($locationId);
```

## Example Response *(as JSON)*

```json
{
  "type": "LocationInfo",
  "data": {
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
    "parent_id": "11ed3e73adb98c0282f3fa9b",
    "show_contact_notes": true,
    "show_contact_files": true,
    "branding_domain_url": "subdomain.sandbox.domain.com",
    "branding_domain": {},
    "product_transactions": [
      null
    ],
    "product_file": {},
    "product_accountvault": {},
    "product_recurring": {},
    "tags": [
      null
    ],
    "terminals": [
      null
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |

