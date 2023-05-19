
# Terminal Application

Terminal Application Information on `expand`

## Structure

`TerminalApplication`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `standalone` | `bool` | Required | Standalone | getStandalone(): bool | setStandalone(bool standalone): void |
| `emvCapable` | `bool` | Required | Emv Capable | getEmvCapable(): bool | setEmvCapable(bool emvCapable): void |
| `nfcCapable` | `bool` | Required | Nfc Capable | getNfcCapable(): bool | setNfcCapable(bool nfcCapable): void |
| `pinCapable` | `bool` | Required | Pin Capable | getPinCapable(): bool | setPinCapable(bool pinCapable): void |
| `printCapable` | `bool` | Required | Print Capable | getPrintCapable(): bool | setPrintCapable(bool printCapable): void |
| `msrCapable` | `bool` | Required | Msr Capable | getMsrCapable(): bool | setMsrCapable(bool msrCapable): void |
| `sigCaptureCapable` | `bool` | Required | Sig Capture Capable | getSigCaptureCapable(): bool | setSigCaptureCapable(bool sigCaptureCapable): void |
| `mposTerminal` | `bool` | Required | Mpos Terminal | getMposTerminal(): bool | setMposTerminal(bool mposTerminal): void |
| `title` | `?string` | Optional | Title<br>**Constraints**: *Maximum Length*: `48` | getTitle(): ?string | setTitle(?string title): void |
| `description` | `?string` | Optional | Description<br>**Constraints**: *Maximum Length*: `256` | getDescription(): ?string | setDescription(?string description): void |
| `id` | `string` | Required | Terminal Application Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `createdTs` | `?int` | Optional | Created Time Stamp | getCreatedTs(): ?int | setCreatedTs(?int createdTs): void |
| `modifiedTs` | `?int` | Optional | Modified Time Stamp | getModifiedTs(): ?int | setModifiedTs(?int modifiedTs): void |
| `createdUserId` | `?string` | Optional | User ID Created the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F\-]{24,36})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCreatedUserId(): ?string | setCreatedUserId(?string createdUserId): void |

## Example (as JSON)

```json
{
  "standalone": true,
  "emv_capable": true,
  "nfc_capable": false,
  "pin_capable": true,
  "print_capable": false,
  "msr_capable": true,
  "sig_capture_capable": false,
  "mpos_terminal": false,
  "title": "Ingenico Link2500",
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "created_ts": 1422040992,
  "modified_ts": 1422040992,
  "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
  "description": "description0"
}
```

