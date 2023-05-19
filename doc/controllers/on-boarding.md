# On Boarding

```php
$onBoardingController = $client->getOnBoardingController();
```

## Class Name

`OnBoardingController`


# Merchant Boarding

This method can be used to pre-populate data on the Merchant Processing Application (MPA), a form that prospective merchants must complete and sign prior to approval. Using this method will reduce the effort required by the merchant at boarding time, in scenarios where data about the prospective merchant has already been collected. This method will return an Application ID, which can be sent to a prospective merchant to obtain and complete the pre-filled application.

Properties that are marked "Required" indicate the minimum required data for creating and saving an MPA. When using this method, you must provide data for each "Required" property, or you will not receive an Application ID. Properties that are marked "Required for completion" are those which need to be provided to Fortis before the Merchant Processing Application can be approved. These properties may be omitted or left blank when using this method, however, the merchant will be required to provide this data before the application can be submitted. Properties that are marked "Conditionally Required" may be required for completion of the Merchant Processing Application, depending on the values provided for other fields. See the description for each of these properties for more information about their requirement criteria.

```php
function merchantBoarding(V1OnboardingRequest $body): ResponseOnboarding
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`V1OnboardingRequest`](../../doc/models/v1-onboarding-request.md) | Body, Required | - |

## Response Type

[`ResponseOnboarding`](../../doc/models/response-onboarding.md)

## Example Usage

```php
$body = V1OnboardingRequestBuilder::init(
    PrimaryPrincipalBuilder::init(
        'Bob',
        'Fairview'
    )
        ->middleName('Nathaniel')
        ->title('Dr')
        ->dateOfBirth('2021-12-01')
        ->addressLine1('1354 Oak St.')
        ->addressLine2('Unit 203')
        ->city('Dover')
        ->stateProvince('DE')
        ->postalCode('55022')
        ->ownershipPercent(100)
        ->phoneNumber('555-555-1234')
        ->build(),
    '1234YourTemplateCode',
    'email@domain.com',
    'Discount Home Goods',
    Location4Builder::init(
        '555-555-1212'
    )
        ->addressLine1('1200 West Hartford Pkwy')
        ->addressLine2('Suite 2000')
        ->city('Dover')
        ->stateProvince('DE')
        ->postalCode('55022')
        ->build(),
    AppDeliveryEnum::DIRECT,
    BankAccountBuilder::init()
        ->routingNumber('011103093')
        ->accountNumber('01234567890123')
        ->accountHolderName('Bob Fairview')
        ->build(),
    AltBankAccountBuilder::init()
        ->routingNumber('011103093')
        ->accountNumber('01234567890123')
        ->accountHolderName('Bob Fairview')
        ->depositType('fees_adjustments')
        ->build(),
    ContactBuilder::init(
        '555-555-3456'
    )
        ->firstName('Jeffery')
        ->lastName('Todd')
        ->email('jtodd@example.com')
        ->build()
)
    ->parentId('11e95f8ec39de8fbdb0a4f1a')
    ->businessCategory(BusinessCategoryEnum::EDUCATION)
    ->swipedPercent(0)
    ->keyedPercent(0)
    ->ecommercePercent(100)
    ->ownershipType(OwnershipTypeEnum::LLP)
    ->fedTaxId('0000000000')
    ->ccAverageTicketRange(5)
    ->ccMonthlyVolumeRange(1)
    ->ccHighTicket(1500)
    ->ecAverageTicketRange(5)
    ->ecMonthlyVolumeRange(2)
    ->ecHighTicket(1500)
    ->website('http://www.example.com')
    ->legalName('Total Home Goods, LLP')
    ->clientAppId('ABC123')
    ->build();

$result = $onBoardingController->merchantBoarding($body);
```

## Example Response *(as JSON)*

```json
{
  "type": "Onboarding",
  "data": {
    "parent_id": "11e95f8ec39de8fbdb0a4f1a",
    "primary_principal": {
      "first_name": "Bob",
      "last_name": "Fairview",
      "middle_name": "Nathaniel",
      "title": "Dr",
      "date_of_birth": "2021-12-01",
      "address_line_1": "1354 Oak St.",
      "address_line_2": "Unit 203",
      "city": "Dover",
      "state_province": "DE",
      "postal_code": "55022",
      "ownership_percent": 100,
      "phone_number": "555-555-1234"
    },
    "template_code": "1234YourTemplateCode",
    "email": "jtodd@example.com",
    "dba_name": "Discount Home Goods",
    "location": {
      "address_line_1": "1200 West Hartford Pkwy",
      "address_line_2": "Suite 2000",
      "city": "Dover",
      "state_province": "DE",
      "postal_code": "55022",
      "phone_number": "555-555-1212"
    },
    "app_delivery": "link_full_page",
    "business_category": "education",
    "swiped_percent": 0,
    "keyed_percent": 0,
    "ecommerce_percent": 100,
    "ownership_type": "llp",
    "fed_tax_id": "0000000000",
    "cc_average_ticket_range": 5,
    "cc_monthly_volume_range": 1,
    "cc_high_ticket": 1500,
    "ec_average_ticket_range": 5,
    "ec_monthly_volume_range": 2,
    "ec_high_ticket": 1500,
    "website": "http://www.example.com",
    "bank_account": {
      "routing_number": "011103093",
      "account_number": "01234567890123",
      "account_holder_name": "Bob Fairview"
    },
    "alt_bank_account": {
      "routing_number": "011103093",
      "account_number": "01234567890123",
      "account_holder_name": "Bob Fairview",
      "deposit_type": "fees_adjustments"
    },
    "legal_name": "Total Home Goods, LLP",
    "contact": {
      "first_name": "Jeffery",
      "last_name": "Todd",
      "email": "jtodd@example.com",
      "phone_number": "555-555-3456"
    },
    "client_app_id": "ABC123",
    "app_link": "https://mpa.example.com/signup/123456788"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |
| 412 | Precondition Failed | [`Response412Exception`](../../doc/models/response-412-exception.md) |

