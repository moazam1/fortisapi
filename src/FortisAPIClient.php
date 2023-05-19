<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib;

use Core\ClientBuilder;
use Core\Utils\CoreHelper;
use FortisAPILib\Controllers\AsyncProcessingController;
use FortisAPILib\Controllers\BatchesController;
use FortisAPILib\Controllers\ContactsController;
use FortisAPILib\Controllers\DeviceTermsController;
use FortisAPILib\Controllers\ElementsController;
use FortisAPILib\Controllers\Level3DataController;
use FortisAPILib\Controllers\LocationsController;
use FortisAPILib\Controllers\OnBoardingController;
use FortisAPILib\Controllers\PaylinksController;
use FortisAPILib\Controllers\QuickInvoicesController;
use FortisAPILib\Controllers\RecurringController;
use FortisAPILib\Controllers\SignaturesController;
use FortisAPILib\Controllers\TagsController;
use FortisAPILib\Controllers\TerminalsController;
use FortisAPILib\Controllers\TicketsController;
use FortisAPILib\Controllers\TokensController;
use FortisAPILib\Controllers\TransactionsACHController;
use FortisAPILib\Controllers\TransactionsCashController;
use FortisAPILib\Controllers\TransactionsCreditCardController;
use FortisAPILib\Controllers\TransactionsReadController;
use FortisAPILib\Controllers\TransactionsUpdatesController;
use FortisAPILib\Controllers\UsersController;
use FortisAPILib\Controllers\UserVerificationsController;
use FortisAPILib\Controllers\WebhooksController;
use FortisAPILib\Utils\CompatibilityConverter;
use Unirest\Configuration;
use Unirest\HttpClient;

class FortisAPIClient implements ConfigurationInterface
{
    private $asyncProcessing;

    private $batches;

    private $contacts;

    private $deviceTerms;

    private $elements;

    private $locations;

    private $onBoarding;

    private $paylinks;

    private $quickInvoices;

    private $recurring;

    private $signatures;

    private $tags;

    private $terminals;

    private $tickets;

    private $tokens;

    private $transactionsACH;

    private $transactionsCash;

    private $transactionsCreditCard;

    private $transactionsRead;

    private $level3Data;

    private $transactionsUpdates;

    private $userVerifications;

    private $users;

    private $webhooks;

    private $customHeaderAuthenticationManager;

    private $config;

    private $client;

    /**
     * @see FortisAPIClientBuilder::init()
     * @see FortisAPIClientBuilder::build()
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge(ConfigurationDefaults::_ALL, CoreHelper::clone($config));
        $this->customHeaderAuthenticationManager = new CustomHeaderAuthenticationManager(
            $this->config['userId'] ?? ConfigurationDefaults::USER_ID,
            $this->config['userApiKey'] ?? ConfigurationDefaults::USER_API_KEY,
            $this->config['developerId'] ?? ConfigurationDefaults::DEVELOPER_ID
        );
        $this->client = ClientBuilder::init(new HttpClient(Configuration::init($this)))
            ->converter(new CompatibilityConverter())
            ->jsonHelper(ApiHelper::getJsonHelper())
            ->apiCallback($this->config['httpCallback'] ?? null)
            ->userAgent('APIMATIC 3.0')
            ->serverUrls(self::ENVIRONMENT_MAP[$this->getEnvironment()], Server::DEFAULT_)
            ->authManagers(['global' => $this->customHeaderAuthenticationManager])
            ->build();
    }

    /**
     * Create a builder with the current client's configurations.
     *
     * @return FortisAPIClientBuilder FortisAPIClientBuilder instance
     */
    public function toBuilder(): FortisAPIClientBuilder
    {
        return FortisAPIClientBuilder::init()
            ->timeout($this->getTimeout())
            ->enableRetries($this->shouldEnableRetries())
            ->numberOfRetries($this->getNumberOfRetries())
            ->retryInterval($this->getRetryInterval())
            ->backOffFactor($this->getBackOffFactor())
            ->maximumRetryWaitTime($this->getMaximumRetryWaitTime())
            ->retryOnTimeout($this->shouldRetryOnTimeout())
            ->httpStatusCodesToRetry($this->getHttpStatusCodesToRetry())
            ->httpMethodsToRetry($this->getHttpMethodsToRetry())
            ->environment($this->getEnvironment())
            ->userId($this->customHeaderAuthenticationManager->getUserId())
            ->userApiKey($this->customHeaderAuthenticationManager->getUserApiKey())
            ->developerId($this->customHeaderAuthenticationManager->getDeveloperId())
            ->httpCallback($this->config['httpCallback'] ?? null);
    }

    public function getTimeout(): int
    {
        return $this->config['timeout'] ?? ConfigurationDefaults::TIMEOUT;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->config['enableRetries'] ?? ConfigurationDefaults::ENABLE_RETRIES;
    }

    public function getNumberOfRetries(): int
    {
        return $this->config['numberOfRetries'] ?? ConfigurationDefaults::NUMBER_OF_RETRIES;
    }

    public function getRetryInterval(): float
    {
        return $this->config['retryInterval'] ?? ConfigurationDefaults::RETRY_INTERVAL;
    }

    public function getBackOffFactor(): float
    {
        return $this->config['backOffFactor'] ?? ConfigurationDefaults::BACK_OFF_FACTOR;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->config['maximumRetryWaitTime'] ?? ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->config['retryOnTimeout'] ?? ConfigurationDefaults::RETRY_ON_TIMEOUT;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->config['httpStatusCodesToRetry'] ?? ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->config['httpMethodsToRetry'] ?? ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    }

    public function getEnvironment(): string
    {
        return $this->config['environment'] ?? ConfigurationDefaults::ENVIRONMENT;
    }

    public function getCustomHeaderAuthenticationCredentials(): ?CustomHeaderAuthenticationCredentials
    {
        return $this->customHeaderAuthenticationManager;
    }

    /**
     * Get the client configuration as an associative array
     *
     * @see FortisAPIClientBuilder::getConfiguration()
     */
    public function getConfiguration(): array
    {
        return $this->toBuilder()->getConfiguration();
    }

    /**
     * Clone this client and override given configuration options
     *
     * @see FortisAPIClientBuilder::build()
     */
    public function withConfiguration(array $config): self
    {
        return new self(array_merge($this->config, $config));
    }

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string
    {
        return $this->client->getGlobalRequest($server)->getQueryUrl();
    }

    /**
     * Returns Async Processing Controller
     */
    public function getAsyncProcessingController(): AsyncProcessingController
    {
        if ($this->asyncProcessing == null) {
            $this->asyncProcessing = new AsyncProcessingController($this->client);
        }
        return $this->asyncProcessing;
    }

    /**
     * Returns Batches Controller
     */
    public function getBatchesController(): BatchesController
    {
        if ($this->batches == null) {
            $this->batches = new BatchesController($this->client);
        }
        return $this->batches;
    }

    /**
     * Returns Contacts Controller
     */
    public function getContactsController(): ContactsController
    {
        if ($this->contacts == null) {
            $this->contacts = new ContactsController($this->client);
        }
        return $this->contacts;
    }

    /**
     * Returns Device Terms Controller
     */
    public function getDeviceTermsController(): DeviceTermsController
    {
        if ($this->deviceTerms == null) {
            $this->deviceTerms = new DeviceTermsController($this->client);
        }
        return $this->deviceTerms;
    }

    /**
     * Returns Elements Controller
     */
    public function getElementsController(): ElementsController
    {
        if ($this->elements == null) {
            $this->elements = new ElementsController($this->client);
        }
        return $this->elements;
    }

    /**
     * Returns Locations Controller
     */
    public function getLocationsController(): LocationsController
    {
        if ($this->locations == null) {
            $this->locations = new LocationsController($this->client);
        }
        return $this->locations;
    }

    /**
     * Returns On Boarding Controller
     */
    public function getOnBoardingController(): OnBoardingController
    {
        if ($this->onBoarding == null) {
            $this->onBoarding = new OnBoardingController($this->client);
        }
        return $this->onBoarding;
    }

    /**
     * Returns Paylinks Controller
     */
    public function getPaylinksController(): PaylinksController
    {
        if ($this->paylinks == null) {
            $this->paylinks = new PaylinksController($this->client);
        }
        return $this->paylinks;
    }

    /**
     * Returns Quick Invoices Controller
     */
    public function getQuickInvoicesController(): QuickInvoicesController
    {
        if ($this->quickInvoices == null) {
            $this->quickInvoices = new QuickInvoicesController($this->client);
        }
        return $this->quickInvoices;
    }

    /**
     * Returns Recurring Controller
     */
    public function getRecurringController(): RecurringController
    {
        if ($this->recurring == null) {
            $this->recurring = new RecurringController($this->client);
        }
        return $this->recurring;
    }

    /**
     * Returns Signatures Controller
     */
    public function getSignaturesController(): SignaturesController
    {
        if ($this->signatures == null) {
            $this->signatures = new SignaturesController($this->client);
        }
        return $this->signatures;
    }

    /**
     * Returns Tags Controller
     */
    public function getTagsController(): TagsController
    {
        if ($this->tags == null) {
            $this->tags = new TagsController($this->client);
        }
        return $this->tags;
    }

    /**
     * Returns Terminals Controller
     */
    public function getTerminalsController(): TerminalsController
    {
        if ($this->terminals == null) {
            $this->terminals = new TerminalsController($this->client);
        }
        return $this->terminals;
    }

    /**
     * Returns Tickets Controller
     */
    public function getTicketsController(): TicketsController
    {
        if ($this->tickets == null) {
            $this->tickets = new TicketsController($this->client);
        }
        return $this->tickets;
    }

    /**
     * Returns Tokens Controller
     */
    public function getTokensController(): TokensController
    {
        if ($this->tokens == null) {
            $this->tokens = new TokensController($this->client);
        }
        return $this->tokens;
    }

    /**
     * Returns Transactions ACH Controller
     */
    public function getTransactionsACHController(): TransactionsACHController
    {
        if ($this->transactionsACH == null) {
            $this->transactionsACH = new TransactionsACHController($this->client);
        }
        return $this->transactionsACH;
    }

    /**
     * Returns Transactions Cash Controller
     */
    public function getTransactionsCashController(): TransactionsCashController
    {
        if ($this->transactionsCash == null) {
            $this->transactionsCash = new TransactionsCashController($this->client);
        }
        return $this->transactionsCash;
    }

    /**
     * Returns Transactions Credit Card Controller
     */
    public function getTransactionsCreditCardController(): TransactionsCreditCardController
    {
        if ($this->transactionsCreditCard == null) {
            $this->transactionsCreditCard = new TransactionsCreditCardController($this->client);
        }
        return $this->transactionsCreditCard;
    }

    /**
     * Returns Transactions Read Controller
     */
    public function getTransactionsReadController(): TransactionsReadController
    {
        if ($this->transactionsRead == null) {
            $this->transactionsRead = new TransactionsReadController($this->client);
        }
        return $this->transactionsRead;
    }

    /**
     * Returns Level 3 Data Controller
     */
    public function getLevel3DataController(): Level3DataController
    {
        if ($this->level3Data == null) {
            $this->level3Data = new Level3DataController($this->client);
        }
        return $this->level3Data;
    }

    /**
     * Returns Transactions Updates Controller
     */
    public function getTransactionsUpdatesController(): TransactionsUpdatesController
    {
        if ($this->transactionsUpdates == null) {
            $this->transactionsUpdates = new TransactionsUpdatesController($this->client);
        }
        return $this->transactionsUpdates;
    }

    /**
     * Returns User Verifications Controller
     */
    public function getUserVerificationsController(): UserVerificationsController
    {
        if ($this->userVerifications == null) {
            $this->userVerifications = new UserVerificationsController($this->client);
        }
        return $this->userVerifications;
    }

    /**
     * Returns Users Controller
     */
    public function getUsersController(): UsersController
    {
        if ($this->users == null) {
            $this->users = new UsersController($this->client);
        }
        return $this->users;
    }

    /**
     * Returns Webhooks Controller
     */
    public function getWebhooksController(): WebhooksController
    {
        if ($this->webhooks == null) {
            $this->webhooks = new WebhooksController($this->client);
        }
        return $this->webhooks;
    }

    /**
     * A map of all base urls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [
        Environment::SANDBOX => [Server::DEFAULT_ => 'https://api.sandbox.fortis.tech'],
        Environment::PRODUCTION => [Server::DEFAULT_ => 'https://api.fortis.tech']
    ];
}
