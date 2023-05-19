
# Identity Verification 17

Identity Verification

## Structure

`IdentityVerification17`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dlState` | `string` | Required | Required for ACH transactions when Driver's License Verification is enabled on the terminal.  Either dl_number + dl_state OR customer_id will need to be passed in this scenario.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `2` | getDlState(): string | setDlState(string dlState): void |
| `dlNumber` | `string` | Required | Required for ACH transactions when Driver's License Verification is enabled on the terminal.  Either dl_number + dl_state OR customer_id will need to be passed in this scenario.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `50` | getDlNumber(): string | setDlNumber(string dlNumber): void |
| `ssn4` | `?string` | Optional | For ACH transactions where Identity Verification is enabled for terminal. Only ssn4 or dob_year should be passed. not both.<br>**Constraints**: *Maximum Length*: `4` | getSsn4(): ?string | setSsn4(?string ssn4): void |
| `dobYear` | `?string` | Optional | Required for certain ACH transactions where Identity Verification has been enabled for the terminal.  Either ssn4 or dob_year will need to be passed in this scenario but NOT BOTH.<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `4`, *Pattern*: `^(19\d{2})\|20\d{2}$` | getDobYear(): ?string | setDobYear(?string dobYear): void |

## Example (as JSON)

```json
{
  "dl_state": "MI",
  "dl_number": "1235567",
  "ssn4": "8527",
  "dob_year": "1980"
}
```

