# Level 3 Data

```php
$level3DataController = $client->getLevel3DataController();
```

## Class Name

`Level3DataController`

## Methods

* [Create a New Level 3 Entry for a Master Card](../../doc/controllers/level-3-data.md#create-a-new-level-3-entry-for-a-master-card)
* [Create a New Level 3 Entry for a Visa](../../doc/controllers/level-3-data.md#create-a-new-level-3-entry-for-a-visa)
* [Delete a Single Level 3 Record](../../doc/controllers/level-3-data.md#delete-a-single-level-3-record)
* [View Single Level 3 Record](../../doc/controllers/level-3-data.md#view-single-level-3-record)


# Create a New Level 3 Entry for a Master Card

Create a new Level3 entry for a MasterCard

```php
function createANewLevel3EntryForAMasterCard(
    string $transactionId,
    V1TransactionsLevel3MasterCardRequest $body
): ResponseTransactionLevel3Master
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transactionId` | `string` | Template, Required | Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `body` | [`V1TransactionsLevel3MasterCardRequest`](../../doc/models/v1-transactions-level-3-master-card-request.md) | Body, Required | - |

## Response Type

[`ResponseTransactionLevel3Master`](../../doc/models/response-transaction-level-3-master.md)

## Example Usage

```php
$transactionId = '11e95f8ec39de8fbdb0a4f1a';

$body = V1TransactionsLevel3MasterCardRequestBuilder::init(
    Level3Data5Builder::init(
        [
            LineItem5Builder::init(
                'cool drink',
                'coke12345678',
                'gll',
                10
            )
                ->alternateTaxId('1234')
                ->debitCredit(DebitCreditEnum::C)
                ->discountAmount(10)
                ->discountRate(11)
                ->quantity(5)
                ->taxAmount(3)
                ->taxRate(0)
                ->taxTypeApplied('22')
                ->taxTypeId('11')
                ->build()
        ]
    )
        ->destinationCountryCode('840')
        ->dutyAmount(0)
        ->freightAmount(0)
        ->nationalTax(2)
        ->salesTax(200)
        ->shipfromZipCode('AZ12345')
        ->shiptoZipCode('MI48335')
        ->taxAmount(0)
        ->taxExempt(TaxExemptEnum::ENUM_0)
        ->build()
)->build();

$result = $level3DataController->createANewLevel3EntryForAMasterCard(
    $transactionId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "type": "TransactionLevel3Master",
  "data": {
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "level3_data": {
      "destination_country_code": "840",
      "duty_amount": 0,
      "freight_amount": 0,
      "national_tax": 2,
      "sales_tax": 200,
      "shipfrom_zip_code": "AZ1234",
      "shipto_zip_code": "FL1234",
      "tax_amount": 10,
      "tax_exempt": "0",
      "customer_vat_registration": "12345678",
      "merchant_vat_registration": "123456",
      "order_date": "171006",
      "summary_commodity_code": "C1K2",
      "tax_rate": 0,
      "unique_vat_ref_number": "vat1234",
      "line_items": [
        {
          "description": "cool drink",
          "commodity_code": "cc123456",
          "discount_amount": 0,
          "other_tax_amount": 0,
          "product_code": "fanta123456",
          "quantity": 12,
          "tax_amount": 4,
          "tax_rate": 0,
          "unit_code": "gll",
          "unit_cost": 3,
          "alternate_tax_id": "1234",
          "debit_credit": "C",
          "discount_rate": 11,
          "tax_type_applied": "22",
          "tax_type_id": "11"
        }
      ]
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |
| 412 | Precondition Failed | [`Response412Exception`](../../doc/models/response-412-exception.md) |


# Create a New Level 3 Entry for a Visa

Create a new Level3 entry for a Visa

```php
function createANewLevel3EntryForAVisa(
    string $transactionId,
    V1TransactionsLevel3VisaRequest $body
): ResponseTransactionLevel3Visa
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transactionId` | `string` | Template, Required | Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `body` | [`V1TransactionsLevel3VisaRequest`](../../doc/models/v1-transactions-level-3-visa-request.md) | Body, Required | - |

## Response Type

[`ResponseTransactionLevel3Visa`](../../doc/models/response-transaction-level-3-visa.md)

## Example Usage

```php
$transactionId = '11e95f8ec39de8fbdb0a4f1a';

$body = V1TransactionsLevel3VisaRequestBuilder::init(
    Level3Data6Builder::init(
        [
            LineItem6Builder::init(
                'cool drink',
                'cc123456',
                'fanta123456',
                'gll',
                3
            )
                ->discountAmount(0)
                ->otherTaxAmount(0)
                ->quantity(12)
                ->taxAmount(4)
                ->taxRate(0)
                ->build()
        ]
    )
        ->destinationCountryCode('840')
        ->dutyAmount(0)
        ->freightAmount(0)
        ->nationalTax(2)
        ->salesTax(200)
        ->shipfromZipCode('AZ1234')
        ->shiptoZipCode('FL1234')
        ->taxAmount(10)
        ->taxExempt(TaxExemptEnum::ENUM_0)
        ->customerVatRegistration('12345678')
        ->merchantVatRegistration('123456')
        ->orderDate('171006')
        ->summaryCommodityCode('C1K2')
        ->taxRate(0)
        ->uniqueVatRefNumber('vat1234')
        ->build()
)->build();

$result = $level3DataController->createANewLevel3EntryForAVisa(
    $transactionId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "type": "TransactionLevel3Visa",
  "data": {
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "level3_data": {
      "destination_country_code": "840",
      "duty_amount": 0,
      "freight_amount": 0,
      "national_tax": 2,
      "sales_tax": 200,
      "shipfrom_zip_code": "AZ1234",
      "shipto_zip_code": "FL1234",
      "tax_amount": 10,
      "tax_exempt": "0",
      "customer_vat_registration": "12345678",
      "merchant_vat_registration": "123456",
      "order_date": "171006",
      "summary_commodity_code": "C1K2",
      "tax_rate": 0,
      "unique_vat_ref_number": "vat1234",
      "line_items": [
        {
          "description": "cool drink",
          "commodity_code": "cc123456",
          "discount_amount": 0,
          "other_tax_amount": 0,
          "product_code": "fanta123456",
          "quantity": 12,
          "tax_amount": 4,
          "tax_rate": 0,
          "unit_code": "gll",
          "unit_cost": 3,
          "alternate_tax_id": "1234",
          "debit_credit": "C",
          "discount_rate": 11,
          "tax_type_applied": "22",
          "tax_type_id": "11"
        }
      ]
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |
| 412 | Precondition Failed | [`Response412Exception`](../../doc/models/response-412-exception.md) |


# Delete a Single Level 3 Record

Delete a single level3 record

```php
function deleteASingleLevel3Record(string $transactionId, string $level3Id): ResponseTransactionLevel3
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transactionId` | `string` | Template, Required | Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `level3Id` | `string` | Template, Required | Level 3 ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |

## Response Type

[`ResponseTransactionLevel3`](../../doc/models/response-transaction-level-3.md)

## Example Usage

```php
$transactionId = '11e95f8ec39de8fbdb0a4f1a';

$level3Id = '11e95f8ec39de8fbdb0a4f1a';

$result = $level3DataController->deleteASingleLevel3Record(
    $transactionId,
    $level3Id
);
```

## Example Response *(as JSON)*

```json
{
  "type": "TransactionLevel3",
  "data": {
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "level3_data": {
      "destination_country_code": "840",
      "duty_amount": 0,
      "freight_amount": 0,
      "national_tax": 2,
      "sales_tax": 200,
      "shipfrom_zip_code": "AZ1234",
      "shipto_zip_code": "FL1234",
      "tax_amount": 10,
      "tax_exempt": "0",
      "customer_vat_registration": "12345678",
      "merchant_vat_registration": "123456",
      "order_date": "171006",
      "summary_commodity_code": "C1K2",
      "tax_rate": 0,
      "unique_vat_ref_number": "vat1234",
      "line_items": [
        {
          "description": "cool drink",
          "commodity_code": "cc123456",
          "discount_amount": 0,
          "other_tax_amount": 0,
          "product_code": "fanta123456",
          "quantity": 12,
          "tax_amount": 4,
          "tax_rate": 0,
          "unit_code": "gll",
          "unit_cost": 3,
          "alternate_tax_id": "1234",
          "debit_credit": "C",
          "discount_rate": 11,
          "tax_type_applied": "22",
          "tax_type_id": "11"
        }
      ]
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |


# View Single Level 3 Record

View single level3 record

```php
function viewSingleLevel3Record(string $transactionId, string $level3Id): ResponseTransactionLevel3
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `transactionId` | `string` | Template, Required | Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |
| `level3Id` | `string` | Template, Required | Level 3 ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` |

## Response Type

[`ResponseTransactionLevel3`](../../doc/models/response-transaction-level-3.md)

## Example Usage

```php
$transactionId = '11e95f8ec39de8fbdb0a4f1a';

$level3Id = '11e95f8ec39de8fbdb0a4f1a';

$result = $level3DataController->viewSingleLevel3Record(
    $transactionId,
    $level3Id
);
```

## Example Response *(as JSON)*

```json
{
  "type": "TransactionLevel3",
  "data": {
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "transaction_id": "11e95f8ec39de8fbdb0a4f1a",
    "level3_data": {
      "destination_country_code": "840",
      "duty_amount": 0,
      "freight_amount": 0,
      "national_tax": 2,
      "sales_tax": 200,
      "shipfrom_zip_code": "AZ1234",
      "shipto_zip_code": "FL1234",
      "tax_amount": 10,
      "tax_exempt": "0",
      "customer_vat_registration": "12345678",
      "merchant_vat_registration": "123456",
      "order_date": "171006",
      "summary_commodity_code": "C1K2",
      "tax_rate": 0,
      "unique_vat_ref_number": "vat1234",
      "line_items": [
        {
          "description": "cool drink",
          "commodity_code": "cc123456",
          "discount_amount": 0,
          "other_tax_amount": 0,
          "product_code": "fanta123456",
          "quantity": 12,
          "tax_amount": 4,
          "tax_rate": 0,
          "unit_code": "gll",
          "unit_cost": 3,
          "alternate_tax_id": "1234",
          "debit_credit": "C",
          "discount_rate": 11,
          "tax_type_applied": "22",
          "tax_type_id": "11"
        }
      ]
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized | [`Response401tokenException`](../../doc/models/response-401-token-exception.md) |

