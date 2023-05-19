# Async Processing

```php
$asyncProcessingController = $client->getAsyncProcessingController();
```

## Class Name

`AsyncProcessingController`


# Status Check

Retrieve the current status for a particular code.

```php
function statusCheck(string $statusCode): ResponseAsyncStatus
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `statusCode` | `string` | Template, Required | A [UUID v4](https://datatracker.ietf.org/doc/html/rfc4122) that's unique for the Async Request |

## Response Type

[`ResponseAsyncStatus`](../../doc/models/response-async-status.md)

## Example Usage

```php
$statusCode = '406c66c3-21cb-47fb-80fc-843bc42507fb';

$result = $asyncProcessingController->statusCheck($statusCode);
```

## Example Response *(as JSON)*

```json
{
  "type": "AsyncStatus",
  "data": {
    "code": "406c66c3-21cb-47fb-80fc-843bc42507fb",
    "type": "Transaction",
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "progress": 100,
    "error": null,
    "ttl": 7956886942
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |

