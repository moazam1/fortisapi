
# Emv Receipt Data

This field is a read only field. This field will only be populated for EMV transactions and will contain proper JSON formatted data with some or all of the following fields: TC,TVR,AID,TSI,ATC,APPLAB,APPN,CVM

## Structure

`EmvReceiptData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `aID` | `?string` | Optional | This field is a read only field. This field will only be populated for EMV transactions and will contain proper JSON formatted data with some or all of the following fields: TC,TVR,AID,TSI,ATC,APPLAB,APPN,CVM | getAID(): ?string | setAID(?string aID): void |
| `aPPLAB` | `?string` | Optional | This field is a read only field. This field will only be populated for EMV transactions and will contain proper JSON formatted data with some or all of the following fields: TC,TVR,AID,TSI,ATC,APPLAB,APPN,CVM | getAPPLAB(): ?string | setAPPLAB(?string aPPLAB): void |
| `aPPN` | `?string` | Optional | This field is a read only field. This field will only be populated for EMV transactions and will contain proper JSON formatted data with some or all of the following fields: TC,TVR,AID,TSI,ATC,APPLAB,APPN,CVM | getAPPN(): ?string | setAPPN(?string aPPN): void |
| `cVM` | `?string` | Optional | This field is a read only field. This field will only be populated for EMV transactions and will contain proper JSON formatted data with some or all of the following fields: TC,TVR,AID,TSI,ATC,APPLAB,APPN,CVM | getCVM(): ?string | setCVM(?string cVM): void |
| `tSI` | `?string` | Optional | This field is a read only field. This field will only be populated for EMV transactions and will contain proper JSON formatted data with some or all of the following fields: TC,TVR,AID,TSI,ATC,APPLAB,APPN,CVM | getTSI(): ?string | setTSI(?string tSI): void |
| `tVR` | `?string` | Optional | This field is a read only field. This field will only be populated for EMV transactions and will contain proper JSON formatted data with some or all of the following fields: TC,TVR,AID,TSI,ATC,APPLAB,APPN,CVM | getTVR(): ?string | setTVR(?string tVR): void |

## Example (as JSON)

```json
{
  "AID": "a0000000042203",
  "APPLAB": "US Maestro",
  "APPN": "US Maestro",
  "CVM": "Pin Verified",
  "TSI": "e800",
  "TVR": "0800008000"
}
```

