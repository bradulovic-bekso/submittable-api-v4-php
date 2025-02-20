# # AdditionalFormEntryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**submission_id** | **string** |  | [optional] [readonly]
**payment_receipt** | [**\OpenAPI\Client\Model\PaymentReceipt**](PaymentReceipt.md) |  | [optional]
**deadline** | **\DateTime** |  | [optional] [readonly]
**is_strict_deadline** | **bool** |  | [optional] [readonly]
**collaboration_session_id** | **string** |  | [optional] [readonly]
**has_been_opened_for_editing** | **bool** |  | [optional] [readonly]
**is_transferred_submission** | **bool** |  | [optional]
**last_transfer_date** | **\DateTime** |  | [optional]
**entry_id** | **string** |  | [optional] [readonly]
**form_id** | **string** |  | [optional] [readonly]
**status** | **string** |  | [optional] [readonly]
**completed_at** | **\DateTime** |  | [optional] [readonly]
**created_by** | **string** |  | [optional] [readonly]
**created_at** | **\DateTime** |  | [optional] [readonly]
**opened_for_editing_at** | **\DateTime** |  | [optional] [readonly]
**field_data** | [**\OpenAPI\Client\Model\AdditionalFormEntryResponseFieldDataInner[]**](AdditionalFormEntryResponseFieldDataInner.md) |  | [optional] [readonly]
**score** | **int** |  | [optional] [readonly]
**entry_version_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
