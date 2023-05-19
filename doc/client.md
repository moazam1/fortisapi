
# Client Class Documentation

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `environment` | Environment | The API environment. <br> **Default: `Environment.SANDBOX`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `0` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `userId` | `string` | User ID |
| `userApiKey` | `string` | User API Key |
| `developerId` | `string` | Developer ID |

The API client can be initialized as follows:

```php
$client = FortisAPIClientBuilder::init()
    ->userId('user-id')
    ->userApiKey('user-api-key')
    ->developerId('developer-id')
    ->environment('sandbox')
    ->build();
```

## Fortis API Client

The gateway for the SDK. This class acts as a factory for the Controllers and also holds the configuration of the SDK.

## Controllers

| Name | Description |
|  --- | --- |
| getAsyncProcessingController() | Gets AsyncProcessingController |
| getBatchesController() | Gets BatchesController |
| getContactsController() | Gets ContactsController |
| getDeviceTermsController() | Gets DeviceTermsController |
| getElementsController() | Gets ElementsController |
| getLocationsController() | Gets LocationsController |
| getOnBoardingController() | Gets OnBoardingController |
| getPaylinksController() | Gets PaylinksController |
| getQuickInvoicesController() | Gets QuickInvoicesController |
| getRecurringController() | Gets RecurringController |
| getSignaturesController() | Gets SignaturesController |
| getTagsController() | Gets TagsController |
| getTerminalsController() | Gets TerminalsController |
| getTicketsController() | Gets TicketsController |
| getTokensController() | Gets TokensController |
| getTransactionsACHController() | Gets TransactionsACHController |
| getTransactionsCashController() | Gets TransactionsCashController |
| getTransactionsCreditCardController() | Gets TransactionsCreditCardController |
| getTransactionsReadController() | Gets TransactionsReadController |
| getLevel3DataController() | Gets Level3DataController |
| getTransactionsUpdatesController() | Gets TransactionsUpdatesController |
| getUserVerificationsController() | Gets UserVerificationsController |
| getUsersController() | Gets UsersController |
| getWebhooksController() | Gets WebhooksController |

