
# Identity Verification 2

Identity verification

## Structure

`IdentityVerification2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dlState` | `?string` | Optional | Used for certain ACH transactions where Driver's License is required by the terminal being used.<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `2` | getDlState(): ?string | setDlState(?string dlState): void |
| `dlNumber` | `?string` | Optional | Used for certain ACH transactions where Driver's License is required by the terminal being used.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `50` | getDlNumber(): ?string | setDlNumber(?string dlNumber): void |
| `ssn4` | `?string` | Optional | The last four of the account_holder social security number.<br>**Constraints**: *Maximum Length*: `4` | getSsn4(): ?string | setSsn4(?string ssn4): void |
| `dobYear` | `?string` | Optional | Used for certain ACH transactions where Identity Verification is enabled on the terminal being used.<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `4`, *Pattern*: `^(19\d{2})\|20\d{2}$` | getDobYear(): ?string | setDobYear(?string dobYear): void |

## Example (as JSON)

```json
{
  "dl_state": "MI",
  "dl_number": "1235567",
  "ssn4": "8527",
  "dob_year": "1980"
}
```

