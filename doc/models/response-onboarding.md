
# Response Onboarding

## Structure

`ResponseOnboarding`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Onboarding'` | getType(): string | setType(string type): void |
| `data` | [`?Data8`](../../doc/models/data-8.md) | Optional | - | getData(): ?Data8 | setData(?Data8 data): void |

## Example (as JSON)

```json
{
  "type": "Onboarding",
  "data": {
    "parent_id": "parent_id6",
    "primary_principal": {
      "first_name": "first_name4",
      "last_name": "last_name2",
      "middle_name": "middle_name4",
      "title": "title0",
      "date_of_birth": "date_of_birth4",
      "address_line_1": "address_line_16",
      "address_line_2": "address_line_24"
    },
    "template_code": "template_code0",
    "email": "email6",
    "dba_name": "dba_name8",
    "location": {
      "address_line_1": "address_line_14",
      "address_line_2": "address_line_24",
      "city": "city4",
      "state_province": "state_province6",
      "postal_code": "postal_code6",
      "phone_number": "phone_number2"
    },
    "app_delivery": "app_delivery2",
    "business_category": "health_care_and_fitness",
    "business_type": "nanny_services",
    "business_description": "business_description8",
    "swiped_percent": 118,
    "bank_account": {
      "routing_number": "routing_number8",
      "account_number": "account_number4",
      "account_holder_name": "account_holder_name4"
    },
    "alt_bank_account": {
      "routing_number": "routing_number4",
      "account_number": "account_number0",
      "account_holder_name": "account_holder_name0",
      "deposit_type": "deposit_type6"
    },
    "contact": {
      "first_name": "first_name8",
      "last_name": "last_name6",
      "email": "email8",
      "phone_number": "phone_number4"
    },
    "client_app_id": "client_app_id6"
  }
}
```

