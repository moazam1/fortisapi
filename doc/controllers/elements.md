# Elements

Accept payment methods from around the globe with a single secure, embeddable UI component. For more information, please read the [Elements Documentation](page:elements/overview)

```php
$elementsController = $client->getElementsController();
```

## Class Name

`ElementsController`

## Methods

* [Ticket Intention](../../doc/controllers/elements.md#ticket-intention)
* [Transaction Intention](../../doc/controllers/elements.md#transaction-intention)


# Ticket Intention

Elements uses a `TicketIntention` object to represent your intent to tokenize credit card information from a customer.

```php
function ticketIntention(V1ElementsTicketIntentionRequest $body): ResponseTicketIntention
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`V1ElementsTicketIntentionRequest`](../../doc/models/v1-elements-ticket-intention-request.md) | Body, Required | - |

## Response Type

[`ResponseTicketIntention`](../../doc/models/response-ticket-intention.md)

## Example Usage

```php
$body = V1ElementsTicketIntentionRequestBuilder::init(
    '11e95f8ec39de8fbdb0a4f1a'
)
    ->contactId('11e95f8ec39de8fbdb0a4f1a')
    ->build();

$result = $elementsController->ticketIntention($body);
```

## Example Response *(as JSON)*

```json
{
  "type": "TicketIntention",
  "data": {
    "contact_id": "11e95f8ec39de8fbdb0a4f1a",
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "client_token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |
| 412 | Precondition Failed | [`Response412Exception`](../../doc/models/response-412-exception.md) |


# Transaction Intention

Elements uses a `TransactionIntention` object to represent your intent to collect payment from a customer, tracking charge attempts and payment state changes throughout the process.

```php
function transactionIntention(V1ElementsTransactionIntentionRequest $body): ResponseTransactionIntention
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`V1ElementsTransactionIntentionRequest`](../../doc/models/v1-elements-transaction-intention-request.md) | Body, Required | - |

## Response Type

[`ResponseTransactionIntention`](../../doc/models/response-transaction-intention.md)

## Example Usage

```php
$body = V1ElementsTransactionIntentionRequestBuilder::init()
    ->action(ActionEnum::SALE)
    ->locationId('11e95f8ec39de8fbdb0a4f1a')
    ->contactId('11e95f8ec39de8fbdb0a4f1a')
    ->achSecCode(AchSecCodeEnum::WEB)
    ->build();

$result = $elementsController->transactionIntention($body);
```

## Example Response *(as JSON)*

```json
{
  "type": "TransactionIntention",
  "data": {
    "action": "sale",
    "methods": [
      {
        "type": "cc",
        "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ],
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "contact_id": "11e95f8ec39de8fbdb0a4f1a",
    "ach_sec_code": "WEB",
    "client_token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |
| 412 | Precondition Failed | [`Response412Exception`](../../doc/models/response-412-exception.md) |

