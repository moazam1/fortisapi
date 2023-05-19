
# Response Terminal

## Structure

`ResponseTerminal`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Terminal'` | getType(): string | setType(string type): void |
| `data` | [`?Data15`](../../doc/models/data-15.md) | Optional | - | getData(): ?Data15 | setData(?Data15 data): void |

## Example (as JSON)

```json
{
  "type": "Terminal",
  "data": {
    "location_id": "location_id4",
    "default_product_transaction_id": "default_product_transaction_id6",
    "terminal_application_id": "terminal_application_id0",
    "terminal_cvm_id": "terminal_cvm_id0",
    "terminal_manufacturer_code": "1",
    "title": "title6",
    "mac_address": "mac_address8",
    "local_ip_address": "local_ip_address4",
    "port": 58,
    "serial_number": "serial_number4",
    "debit": false,
    "emv": false,
    "cashback_enable": false,
    "print_enable": false,
    "sig_capture_enable": false,
    "id": "id0",
    "created_ts": 114,
    "modified_ts": 190,
    "last_registration_ts": 234,
    "created_user_id": "created_user_id2",
    "modified_user_id": "modified_user_id2"
  }
}
```

