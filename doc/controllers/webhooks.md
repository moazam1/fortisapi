# Webhooks

```php
$webhooksController = $client->getWebhooksController();
```

## Class Name

`WebhooksController`

## Methods

* [Create a New Transaction Batch Postback Config](../../doc/controllers/webhooks.md#create-a-new-transaction-batch-postback-config)
* [Create a New Contact Postback Config](../../doc/controllers/webhooks.md#create-a-new-contact-postback-config)
* [Create a New Transaction Postback Config](../../doc/controllers/webhooks.md#create-a-new-transaction-postback-config)
* [Delete a Postback Config](../../doc/controllers/webhooks.md#delete-a-postback-config)
* [Update Transaction Batch Postback Config](../../doc/controllers/webhooks.md#update-transaction-batch-postback-config)
* [Update Contact Postback Config](../../doc/controllers/webhooks.md#update-contact-postback-config)
* [Update Transaction Postback Config](../../doc/controllers/webhooks.md#update-transaction-postback-config)


# Create a New Transaction Batch Postback Config

Create a new transaction batch postback config

```php
function createANewTransactionBatchPostbackConfig(
    V1WebhooksBatchRequest $body,
    ?array $expand = null
): ResponseWebhook
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`V1WebhooksBatchRequest`](../../doc/models/v1-webhooks-batch-request.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand91Enum)`](../../doc/models/expand-91-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseWebhook`](../../doc/models/response-webhook.md)

## Example Usage

```php
$body = V1WebhooksBatchRequestBuilder::init(
    true,
    '11e95f8ec39de8fbdb0a4f1a',
    true,
    true,
    true,
    '11e95f8ec39de8fbdb0a4f1a',
    1,
    'https://127.0.0.1/receiver'
)
    ->attemptInterval(300)
    ->basicAuthUsername('tester')
    ->basicAuthPassword('Test@522')
    ->expands('changelogs,tags')
    ->format(FormatEnum::APIDEFAULT)
    ->postbackConfigId('11e95f8ec39de8fbdb0a4f1a')
    ->resource(Resource12Enum::CONTACT)
    ->build();

$result = $webhooksController->createANewTransactionBatchPostbackConfig($body);
```

## Example Response *(as JSON)*

```json
{
  "type": "Webhook",
  "data": {
    "attempt_interval": 300,
    "basic_auth_username": "username",
    "basic_auth_password": "password",
    "expands": "changelogs,tags",
    "format": "api-default",
    "is_active": true,
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "on_create": true,
    "on_update": true,
    "on_delete": true,
    "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
    "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "resource": "contact",
    "number_of_attempts": 1,
    "url": "https://127.0.0.1/receiver",
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "postback_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
        "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
        "next_run_ts": 1422040992,
        "created_ts": 1422040992,
        "model_id": "11e95f8ec39de8fbdb0a4f1a"
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


# Create a New Contact Postback Config

Create a new contact postback config

```php
function createANewContactPostbackConfig(V1WebhooksContactRequest $body, ?array $expand = null): ResponseWebhook
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`V1WebhooksContactRequest`](../../doc/models/v1-webhooks-contact-request.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand91Enum)`](../../doc/models/expand-91-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseWebhook`](../../doc/models/response-webhook.md)

## Example Usage

```php
$body = V1WebhooksContactRequestBuilder::init(
    true,
    '11e95f8ec39de8fbdb0a4f1a',
    true,
    true,
    true,
    1,
    'https://127.0.0.1/receiver'
)
    ->attemptInterval(300)
    ->basicAuthUsername('tester')
    ->basicAuthPassword('Test@522')
    ->expands('changelogs,tags')
    ->format(FormatEnum::APIDEFAULT)
    ->postbackConfigId('11e95f8ec39de8fbdb0a4f1a')
    ->productTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->resource(Resource12Enum::CONTACT)
    ->build();

$result = $webhooksController->createANewContactPostbackConfig($body);
```

## Example Response *(as JSON)*

```json
{
  "type": "Webhook",
  "data": {
    "attempt_interval": 300,
    "basic_auth_username": "username",
    "basic_auth_password": "password",
    "expands": "changelogs,tags",
    "format": "api-default",
    "is_active": true,
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "on_create": true,
    "on_update": true,
    "on_delete": true,
    "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
    "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "resource": "contact",
    "number_of_attempts": 1,
    "url": "https://127.0.0.1/receiver",
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "postback_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
        "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
        "next_run_ts": 1422040992,
        "created_ts": 1422040992,
        "model_id": "11e95f8ec39de8fbdb0a4f1a"
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


# Create a New Transaction Postback Config

Create a new transaction postback config

```php
function createANewTransactionPostbackConfig(
    V1WebhooksTransactionRequest $body,
    ?array $expand = null
): ResponseWebhook
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`V1WebhooksTransactionRequest`](../../doc/models/v1-webhooks-transaction-request.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand91Enum)`](../../doc/models/expand-91-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseWebhook`](../../doc/models/response-webhook.md)

## Example Usage

```php
$body = V1WebhooksTransactionRequestBuilder::init(
    true,
    '11e95f8ec39de8fbdb0a4f1a',
    true,
    true,
    true,
    '11e95f8ec39de8fbdb0a4f1a',
    1,
    'https://127.0.0.1/receiver'
)
    ->attemptInterval(300)
    ->basicAuthUsername('tester')
    ->basicAuthPassword('Test@522')
    ->expands('changelogs,tags')
    ->format(FormatEnum::APIDEFAULT)
    ->postbackConfigId('11e95f8ec39de8fbdb0a4f1a')
    ->resource(Resource12Enum::CONTACT)
    ->build();

$result = $webhooksController->createANewTransactionPostbackConfig($body);
```

## Example Response *(as JSON)*

```json
{
  "type": "Webhook",
  "data": {
    "attempt_interval": 300,
    "basic_auth_username": "username",
    "basic_auth_password": "password",
    "expands": "changelogs,tags",
    "format": "api-default",
    "is_active": true,
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "on_create": true,
    "on_update": true,
    "on_delete": true,
    "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
    "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "resource": "contact",
    "number_of_attempts": 1,
    "url": "https://127.0.0.1/receiver",
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "postback_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
        "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
        "next_run_ts": 1422040992,
        "created_ts": 1422040992,
        "model_id": "11e95f8ec39de8fbdb0a4f1a"
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


# Delete a Postback Config

Delete a postback config

```php
function deleteAPostbackConfig(string $webhookId): ResponseWebhook
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `webhookId` | `string` | Template, Required | Postback Config ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |

## Response Type

[`ResponseWebhook`](../../doc/models/response-webhook.md)

## Example Usage

```php
$webhookId = '11e95f8ec39de8fbdb0a4f1a';

$result = $webhooksController->deleteAPostbackConfig($webhookId);
```

## Example Response *(as JSON)*

```json
{
  "type": "Webhook",
  "data": {
    "attempt_interval": 300,
    "basic_auth_username": "username",
    "basic_auth_password": "password",
    "expands": "changelogs,tags",
    "format": "api-default",
    "is_active": true,
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "on_create": true,
    "on_update": true,
    "on_delete": true,
    "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
    "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "resource": "contact",
    "number_of_attempts": 1,
    "url": "https://127.0.0.1/receiver",
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "postback_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
        "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
        "next_run_ts": 1422040992,
        "created_ts": 1422040992,
        "model_id": "11e95f8ec39de8fbdb0a4f1a"
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# Update Transaction Batch Postback Config

Update transaction batch postback config

```php
function updateTransactionBatchPostbackConfig(
    string $webhookId,
    V1WebhooksBatchRequest1 $body,
    ?array $expand = null
): ResponseWebhook
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `webhookId` | `string` | Template, Required | Postback Config ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `body` | [`V1WebhooksBatchRequest1`](../../doc/models/v1-webhooks-batch-request-1.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand91Enum)`](../../doc/models/expand-91-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseWebhook`](../../doc/models/response-webhook.md)

## Example Usage

```php
$webhookId = '11e95f8ec39de8fbdb0a4f1a';

$body = V1WebhooksBatchRequest1Builder::init()
    ->attemptInterval(300)
    ->basicAuthUsername('tester')
    ->basicAuthPassword('Test@522')
    ->expands('changelogs,tags')
    ->format(FormatEnum::APIDEFAULT)
    ->isActive(true)
    ->locationId('11e95f8ec39de8fbdb0a4f1a')
    ->onCreate(true)
    ->onUpdate(true)
    ->onDelete(true)
    ->postbackConfigId('11e95f8ec39de8fbdb0a4f1a')
    ->productTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->resource(Resource12Enum::CONTACT)
    ->numberOfAttempts(1)
    ->url('https://127.0.0.1/receiver')
    ->build();

$result = $webhooksController->updateTransactionBatchPostbackConfig(
    $webhookId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "type": "Webhook",
  "data": {
    "attempt_interval": 300,
    "basic_auth_username": "username",
    "basic_auth_password": "password",
    "expands": "changelogs,tags",
    "format": "api-default",
    "is_active": true,
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "on_create": true,
    "on_update": true,
    "on_delete": true,
    "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
    "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "resource": "contact",
    "number_of_attempts": 1,
    "url": "https://127.0.0.1/receiver",
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "postback_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
        "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
        "next_run_ts": 1422040992,
        "created_ts": 1422040992,
        "model_id": "11e95f8ec39de8fbdb0a4f1a"
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


# Update Contact Postback Config

Update contact postback config

```php
function updateContactPostbackConfig(
    string $webhookId,
    V1WebhooksContactRequest1 $body,
    ?array $expand = null
): ResponseWebhook
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `webhookId` | `string` | Template, Required | Postback Config ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `body` | [`V1WebhooksContactRequest1`](../../doc/models/v1-webhooks-contact-request-1.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand91Enum)`](../../doc/models/expand-91-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseWebhook`](../../doc/models/response-webhook.md)

## Example Usage

```php
$webhookId = '11e95f8ec39de8fbdb0a4f1a';

$body = V1WebhooksContactRequest1Builder::init()
    ->attemptInterval(300)
    ->basicAuthUsername('tester')
    ->basicAuthPassword('Test@522')
    ->expands('changelogs,tags')
    ->format(FormatEnum::APIDEFAULT)
    ->isActive(true)
    ->locationId('11e95f8ec39de8fbdb0a4f1a')
    ->onCreate(true)
    ->onUpdate(true)
    ->onDelete(true)
    ->postbackConfigId('11e95f8ec39de8fbdb0a4f1a')
    ->productTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->resource(Resource12Enum::CONTACT)
    ->numberOfAttempts(1)
    ->url('https://127.0.0.1/receiver')
    ->build();

$result = $webhooksController->updateContactPostbackConfig(
    $webhookId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "type": "Webhook",
  "data": {
    "attempt_interval": 300,
    "basic_auth_username": "username",
    "basic_auth_password": "password",
    "expands": "changelogs,tags",
    "format": "api-default",
    "is_active": true,
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "on_create": true,
    "on_update": true,
    "on_delete": true,
    "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
    "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "resource": "contact",
    "number_of_attempts": 1,
    "url": "https://127.0.0.1/receiver",
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "postback_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
        "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
        "next_run_ts": 1422040992,
        "created_ts": 1422040992,
        "model_id": "11e95f8ec39de8fbdb0a4f1a"
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


# Update Transaction Postback Config

Update transaction postback config

```php
function updateTransactionPostbackConfig(
    string $webhookId,
    V1WebhooksTransactionRequest1 $body,
    ?array $expand = null
): ResponseWebhook
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `webhookId` | `string` | Template, Required | Postback Config ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `body` | [`V1WebhooksTransactionRequest1`](../../doc/models/v1-webhooks-transaction-request-1.md) | Body, Required | - |
| `expand` | [`?(string[]) (Expand91Enum)`](../../doc/models/expand-91-enum.md) | Query, Optional | Most endpoints in the API have a way to retrieve extra data related to the current record being retrieved. For example, if the API request is for the accountvaults endpoint, and the end user also needs to know which contact the token belongs to, this data can be returned in the accountvaults endpoint request.<br>**Constraints**: *Unique Items Required*, *Pattern*: `^[\w]+$` |

## Response Type

[`ResponseWebhook`](../../doc/models/response-webhook.md)

## Example Usage

```php
$webhookId = '11e95f8ec39de8fbdb0a4f1a';

$body = V1WebhooksTransactionRequest1Builder::init()
    ->attemptInterval(300)
    ->basicAuthUsername('tester')
    ->basicAuthPassword('Test@522')
    ->expands('changelogs,tags')
    ->format(FormatEnum::APIDEFAULT)
    ->isActive(true)
    ->locationId('11e95f8ec39de8fbdb0a4f1a')
    ->onCreate(true)
    ->onUpdate(true)
    ->onDelete(true)
    ->postbackConfigId('11e95f8ec39de8fbdb0a4f1a')
    ->productTransactionId('11e95f8ec39de8fbdb0a4f1a')
    ->resource(Resource12Enum::CONTACT)
    ->numberOfAttempts(1)
    ->url('https://127.0.0.1/receiver')
    ->build();

$result = $webhooksController->updateTransactionPostbackConfig(
    $webhookId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "type": "Webhook",
  "data": {
    "attempt_interval": 300,
    "basic_auth_username": "username",
    "basic_auth_password": "password",
    "expands": "changelogs,tags",
    "format": "api-default",
    "is_active": true,
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "on_create": true,
    "on_update": true,
    "on_delete": true,
    "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
    "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "resource": "contact",
    "number_of_attempts": 1,
    "url": "https://127.0.0.1/receiver",
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "postback_logs": [
      {
        "id": "11e95f8ec39de8fbdb0a4f1a",
        "postback_config_id": "11e95f8ec39de8fbdb0a4f1a",
        "changelog_id": "11e95f8ec39de8fbdb0a4f1a",
        "next_run_ts": 1422040992,
        "created_ts": 1422040992,
        "model_id": "11e95f8ec39de8fbdb0a4f1a"
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

