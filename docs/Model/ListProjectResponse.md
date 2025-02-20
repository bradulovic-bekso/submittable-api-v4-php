# # ListProjectResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project_id** | **string** |  | [optional]
**name** | **string** |  | [optional]
**guidelines_html** | **string** |  | [optional]
**terms_of_use** | **string** |  | [optional]
**initial_form_id** | **string** |  | [optional]
**internal_form_id** | **string** |  | [optional]
**eligibility_form_id** | **string** |  | [optional]
**starts_at** | **\DateTime** |  | [optional]
**ends_at** | **\DateTime** |  | [optional]
**is_hidden** | **bool** |  | [optional]
**is_live** | **bool** |  | [optional]
**is_archived** | **bool** |  | [optional]
**should_hide_blind_fields** | **bool** |  | [optional]
**blind_level** | **string** |  | [optional]
**created_by_user_id** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**review_stages** | [**\OpenAPI\Client\Model\ReviewStageResponse[]**](ReviewStageResponse.md) |  | [optional]
**conceal_public_org_info** | **bool** |  | [optional]
**require_public_org_id** | **bool** |  | [optional]
**enable_collaborative_drafts** | **bool** |  | [optional]
**require_validated_email** | **bool** |  | [optional]
**enable_us_bank_check_payment** | **bool** |  | [optional]
**enable_us_bank_ach_payment** | **bool** |  | [optional]
**enable_us_bank_prepaid_card_payment** | **bool** |  | [optional]
**us_bank_prepaid_card_disclosure_url** | **string** |  | [optional]
**us_bank_ach_account_is_individual** | **bool** |  | [optional]
**enable_organization_search** | **bool** |  | [optional]
**organization_search_by_ein** | **bool** |  | [optional]
**organization_search_by_uei** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
