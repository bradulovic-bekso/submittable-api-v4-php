# OpenAPI\Client\SubmissionsApi

All URIs are relative to https://submittable-api.submittable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSubmission()**](SubmissionsApi.md#getSubmission) | **GET** /v4/submissions/{submissionId} | Get a submission |
| [**getSubmissions()**](SubmissionsApi.md#getSubmissions) | **POST** /v4/submissions/ids | Get submissions |
| [**v4MySubmissionsExternalPost()**](SubmissionsApi.md#v4MySubmissionsExternalPost) | **POST** /v4/my/submissions/external | Create external submission |
| [**v4SubmissionsAssignmentsListPost()**](SubmissionsApi.md#v4SubmissionsAssignmentsListPost) | **POST** /v4/submissions/assignments/list | Get submission assignments organized by userId |
| [**v4SubmissionsAssignmentsPut()**](SubmissionsApi.md#v4SubmissionsAssignmentsPut) | **PUT** /v4/submissions/assignments | Update assignments on submissions |
| [**v4SubmissionsAssignmentsRandomPost()**](SubmissionsApi.md#v4SubmissionsAssignmentsRandomPost) | **POST** /v4/submissions/assignments/random | Add random assignments to submissions |
| [**v4SubmissionsBulkPost()**](SubmissionsApi.md#v4SubmissionsBulkPost) | **POST** /v4/submissions/bulk | Bulk import submissions |
| [**v4SubmissionsEditingClosePut()**](SubmissionsApi.md#v4SubmissionsEditingClosePut) | **PUT** /v4/submissions/editing/close | Close submissions for editing |
| [**v4SubmissionsEditingOpenPut()**](SubmissionsApi.md#v4SubmissionsEditingOpenPut) | **PUT** /v4/submissions/editing/open | Open submissions for editing |
| [**v4SubmissionsGet()**](SubmissionsApi.md#v4SubmissionsGet) | **GET** /v4/submissions | Get a page of submissions |
| [**v4SubmissionsHistoryGet()**](SubmissionsApi.md#v4SubmissionsHistoryGet) | **GET** /v4/submissions/history | Get a page of submission history items |
| [**v4SubmissionsIdConvertIntsPost()**](SubmissionsApi.md#v4SubmissionsIdConvertIntsPost) | **POST** /v4/submissions/id/convert/ints | Convert list of int submission ids to guid submission ids |
| [**v4SubmissionsIdConvertSubmissionIdGet()**](SubmissionsApi.md#v4SubmissionsIdConvertSubmissionIdGet) | **GET** /v4/submissions/id/convert/{submissionId} | Convert integer Submission Id to guid Submission Id |
| [**v4SubmissionsLabelsPut()**](SubmissionsApi.md#v4SubmissionsLabelsPut) | **PUT** /v4/submissions/labels | Add labels to submissions |
| [**v4SubmissionsMessagePost()**](SubmissionsApi.md#v4SubmissionsMessagePost) | **POST** /v4/submissions/message | Send submitter a message |
| [**v4SubmissionsPost()**](SubmissionsApi.md#v4SubmissionsPost) | **POST** /v4/submissions | Import a submission |
| [**v4SubmissionsPublicOrganizationPost()**](SubmissionsApi.md#v4SubmissionsPublicOrganizationPost) | **POST** /v4/submissions/public-organization | Update a public organization id associated with a submission |
| [**v4SubmissionsReviewStagePut()**](SubmissionsApi.md#v4SubmissionsReviewStagePut) | **PUT** /v4/submissions/review_stage | Update review stage on submissions |
| [**v4SubmissionsStatusPut()**](SubmissionsApi.md#v4SubmissionsStatusPut) | **PUT** /v4/submissions/status | Update status on submissions |
| [**v4SubmissionsSubmissionIdArchivePut()**](SubmissionsApi.md#v4SubmissionsSubmissionIdArchivePut) | **PUT** /v4/submissions/{submissionId}/archive | Archive submission |
| [**v4SubmissionsSubmissionIdAssignmentsPut()**](SubmissionsApi.md#v4SubmissionsSubmissionIdAssignmentsPut) | **PUT** /v4/submissions/{submissionId}/assignments | Update assignments for submission |
| [**v4SubmissionsSubmissionIdDelete()**](SubmissionsApi.md#v4SubmissionsSubmissionIdDelete) | **DELETE** /v4/submissions/{submissionId} | Delete a submission |
| [**v4SubmissionsSubmissionIdLabelsLabelIdDelete()**](SubmissionsApi.md#v4SubmissionsSubmissionIdLabelsLabelIdDelete) | **DELETE** /v4/submissions/{submissionId}/labels/{labelId} | Remove a label from a submission |
| [**v4SubmissionsSubmissionIdLabelsLabelIdPut()**](SubmissionsApi.md#v4SubmissionsSubmissionIdLabelsLabelIdPut) | **PUT** /v4/submissions/{submissionId}/labels/{labelId} | Apply a label to a submission |
| [**v4SubmissionsSubmissionIdNotesAttachmentsPost()**](SubmissionsApi.md#v4SubmissionsSubmissionIdNotesAttachmentsPost) | **POST** /v4/submissions/{submissionId}/notes/attachments | Upload a note file attachment |
| [**v4SubmissionsSubmissionIdNotesPost()**](SubmissionsApi.md#v4SubmissionsSubmissionIdNotesPost) | **POST** /v4/submissions/{submissionId}/notes | Add a note to a submission |
| [**v4SubmissionsSubmissionIdStageStageIdPut()**](SubmissionsApi.md#v4SubmissionsSubmissionIdStageStageIdPut) | **PUT** /v4/submissions/{submissionId}/stage/{stageId} | Move submission between review stages |
| [**v4SubmissionsSubmissionIdStatusPut()**](SubmissionsApi.md#v4SubmissionsSubmissionIdStatusPut) | **PUT** /v4/submissions/{submissionId}/status | Update status of a submission |
| [**v4SubmissionsSubmissionIdTransferPost()**](SubmissionsApi.md#v4SubmissionsSubmissionIdTransferPost) | **POST** /v4/submissions/{submissionId}/transfer | Create a submission transfer request |
| [**v4SubmissionsSubmissionIdUnarchivePut()**](SubmissionsApi.md#v4SubmissionsSubmissionIdUnarchivePut) | **PUT** /v4/submissions/{submissionId}/unarchive | Unarchive submission |
| [**v4SubmissionsTeamAssignmentsGet()**](SubmissionsApi.md#v4SubmissionsTeamAssignmentsGet) | **GET** /v4/submissions/team/assignments | Get team member assignment counts |
| [**v4SubmissionsTransfersPost()**](SubmissionsApi.md#v4SubmissionsTransfersPost) | **POST** /v4/submissions/transfers | Get pending submission transfer requests |
| [**v4SubmissionsTransfersTransferIdCancelPost()**](SubmissionsApi.md#v4SubmissionsTransfersTransferIdCancelPost) | **POST** /v4/submissions/transfers/{transferId}/cancel | Cancel a transfer request |


## `getSubmission()`

```php
getSubmission($submission_id): \OpenAPI\Client\Model\SubmissionResponse
```

Get a submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string

try {
    $result = $apiInstance->getSubmission($submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->getSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SubmissionResponse**](../Model/SubmissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubmissions()`

```php
getSubmissions($get_submissions_request): \OpenAPI\Client\Model\SubmissionResponse[]
```

Get submissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_submissions_request = new \OpenAPI\Client\Model\GetSubmissionsRequest(); // \OpenAPI\Client\Model\GetSubmissionsRequest

try {
    $result = $apiInstance->getSubmissions($get_submissions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->getSubmissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_submissions_request** | [**\OpenAPI\Client\Model\GetSubmissionsRequest**](../Model/GetSubmissionsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubmissionResponse[]**](../Model/SubmissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4MySubmissionsExternalPost()`

```php
v4MySubmissionsExternalPost($external_submission_request): \OpenAPI\Client\Model\ExternalSubmissionResponse
```

Create external submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_submission_request = new \OpenAPI\Client\Model\ExternalSubmissionRequest(); // \OpenAPI\Client\Model\ExternalSubmissionRequest

try {
    $result = $apiInstance->v4MySubmissionsExternalPost($external_submission_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4MySubmissionsExternalPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_submission_request** | [**\OpenAPI\Client\Model\ExternalSubmissionRequest**](../Model/ExternalSubmissionRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ExternalSubmissionResponse**](../Model/ExternalSubmissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsAssignmentsListPost()`

```php
v4SubmissionsAssignmentsListPost($submission_guids_base_request): \OpenAPI\Client\Model\ListSubmissionAssignmentsResponse
```

Get submission assignments organized by userId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_guids_base_request = new \OpenAPI\Client\Model\SubmissionGuidsBaseRequest(); // \OpenAPI\Client\Model\SubmissionGuidsBaseRequest

try {
    $result = $apiInstance->v4SubmissionsAssignmentsListPost($submission_guids_base_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsAssignmentsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_guids_base_request** | [**\OpenAPI\Client\Model\SubmissionGuidsBaseRequest**](../Model/SubmissionGuidsBaseRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListSubmissionAssignmentsResponse**](../Model/ListSubmissionAssignmentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsAssignmentsPut()`

```php
v4SubmissionsAssignmentsPut($update_submissions_assignments_request): \OpenAPI\Client\Model\UpdateSubmissionAssignmentsApiResponse
```

Update assignments on submissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_submissions_assignments_request = new \OpenAPI\Client\Model\UpdateSubmissionsAssignmentsRequest(); // \OpenAPI\Client\Model\UpdateSubmissionsAssignmentsRequest

try {
    $result = $apiInstance->v4SubmissionsAssignmentsPut($update_submissions_assignments_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsAssignmentsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_submissions_assignments_request** | [**\OpenAPI\Client\Model\UpdateSubmissionsAssignmentsRequest**](../Model/UpdateSubmissionsAssignmentsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UpdateSubmissionAssignmentsApiResponse**](../Model/UpdateSubmissionAssignmentsApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsAssignmentsRandomPost()`

```php
v4SubmissionsAssignmentsRandomPost($random_submission_assignments_request): \OpenAPI\Client\Model\UpdateSubmissionAssignmentsApiResponse
```

Add random assignments to submissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$random_submission_assignments_request = new \OpenAPI\Client\Model\RandomSubmissionAssignmentsRequest(); // \OpenAPI\Client\Model\RandomSubmissionAssignmentsRequest

try {
    $result = $apiInstance->v4SubmissionsAssignmentsRandomPost($random_submission_assignments_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsAssignmentsRandomPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **random_submission_assignments_request** | [**\OpenAPI\Client\Model\RandomSubmissionAssignmentsRequest**](../Model/RandomSubmissionAssignmentsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UpdateSubmissionAssignmentsApiResponse**](../Model/UpdateSubmissionAssignmentsApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsBulkPost()`

```php
v4SubmissionsBulkPost($bulk_import_submissions_request): \OpenAPI\Client\Model\BulkImportSubmissionsResponse
```

Bulk import submissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bulk_import_submissions_request = new \OpenAPI\Client\Model\BulkImportSubmissionsRequest(); // \OpenAPI\Client\Model\BulkImportSubmissionsRequest

try {
    $result = $apiInstance->v4SubmissionsBulkPost($bulk_import_submissions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsBulkPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulk_import_submissions_request** | [**\OpenAPI\Client\Model\BulkImportSubmissionsRequest**](../Model/BulkImportSubmissionsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BulkImportSubmissionsResponse**](../Model/BulkImportSubmissionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsEditingClosePut()`

```php
v4SubmissionsEditingClosePut($update_submissions_is_open_for_editing_request): \OpenAPI\Client\Model\SubmissionActionResponse
```

Close submissions for editing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_submissions_is_open_for_editing_request = new \OpenAPI\Client\Model\UpdateSubmissionsIsOpenForEditingRequest(); // \OpenAPI\Client\Model\UpdateSubmissionsIsOpenForEditingRequest

try {
    $result = $apiInstance->v4SubmissionsEditingClosePut($update_submissions_is_open_for_editing_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsEditingClosePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_submissions_is_open_for_editing_request** | [**\OpenAPI\Client\Model\UpdateSubmissionsIsOpenForEditingRequest**](../Model/UpdateSubmissionsIsOpenForEditingRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubmissionActionResponse**](../Model/SubmissionActionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsEditingOpenPut()`

```php
v4SubmissionsEditingOpenPut($update_submissions_is_open_for_editing_request): \OpenAPI\Client\Model\SubmissionActionResponse
```

Open submissions for editing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_submissions_is_open_for_editing_request = new \OpenAPI\Client\Model\UpdateSubmissionsIsOpenForEditingRequest(); // \OpenAPI\Client\Model\UpdateSubmissionsIsOpenForEditingRequest

try {
    $result = $apiInstance->v4SubmissionsEditingOpenPut($update_submissions_is_open_for_editing_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsEditingOpenPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_submissions_is_open_for_editing_request** | [**\OpenAPI\Client\Model\UpdateSubmissionsIsOpenForEditingRequest**](../Model/UpdateSubmissionsIsOpenForEditingRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubmissionActionResponse**](../Model/SubmissionActionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsGet()`

```php
v4SubmissionsGet($continuation_token, $size, $search, $public_organization_ids_include, $public_organization_ids_exclude, $projects_include, $projects_exclude, $statuses_include, $statuses_exclude, $reviewers, $archived_status, $labels_include_any, $labels_include_all, $labels_include_unlabeled, $labels_exclude_any, $labels_exclude_all, $labels_exclude_unlabeled, $date_from, $date_to, $additional_form_statuses, $request_form_statuses, $review_status, $reviewer_progress, $review_stages_include, $review_stages_exclude, $sort_by_field, $sort_by_order): \OpenAPI\Client\Model\ContinuationTokenResponseSubmissionListResponse
```

Get a page of submissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$continuation_token = 'continuation_token_example'; // string
$size = 20; // int
$search = 'search_example'; // string
$public_organization_ids_include = array('public_organization_ids_include_example'); // string[] | Include matching ids.  Value is dropped if also included in Exclude.
$public_organization_ids_exclude = array('public_organization_ids_exclude_example'); // string[] | Exclude matching ids
$projects_include = array('projects_include_example'); // string[] | Include matching ids.  Value is dropped if also included in Exclude.
$projects_exclude = array('projects_exclude_example'); // string[] | Exclude matching ids
$statuses_include = array('statuses_include_example'); // string[] | Include matching ids.  Value is dropped if also included in Exclude.
$statuses_exclude = array('statuses_exclude_example'); // string[] | Exclude matching ids
$reviewers = array('reviewers_example'); // string[]
$archived_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ArchivedStatus(); // \OpenAPI\Client\Model\ArchivedStatus
$labels_include_any = array('labels_include_any_example'); // string[]
$labels_include_all = array('labels_include_all_example'); // string[]
$labels_include_unlabeled = True; // bool
$labels_exclude_any = array('labels_exclude_any_example'); // string[]
$labels_exclude_all = array('labels_exclude_all_example'); // string[]
$labels_exclude_unlabeled = True; // bool
$date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime
$additional_form_statuses = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\AdditionalFormsStatus()); // \OpenAPI\Client\Model\AdditionalFormsStatus[]
$request_form_statuses = array(new \OpenAPI\Client\Model\\OpenAPI\Client\Model\RequestFormsStatus()); // \OpenAPI\Client\Model\RequestFormsStatus[]
$review_status = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReviewStatus(); // \OpenAPI\Client\Model\ReviewStatus
$reviewer_progress = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ReviewStatus(); // \OpenAPI\Client\Model\ReviewStatus
$review_stages_include = array('review_stages_include_example'); // string[] | Include matching ids.  Value is dropped if also included in Exclude.
$review_stages_exclude = array('review_stages_exclude_example'); // string[] | Exclude matching ids
$sort_by_field = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SubmissionSortField(); // \OpenAPI\Client\Model\SubmissionSortField
$sort_by_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\SubmissionSortOrder(); // \OpenAPI\Client\Model\SubmissionSortOrder

try {
    $result = $apiInstance->v4SubmissionsGet($continuation_token, $size, $search, $public_organization_ids_include, $public_organization_ids_exclude, $projects_include, $projects_exclude, $statuses_include, $statuses_exclude, $reviewers, $archived_status, $labels_include_any, $labels_include_all, $labels_include_unlabeled, $labels_exclude_any, $labels_exclude_all, $labels_exclude_unlabeled, $date_from, $date_to, $additional_form_statuses, $request_form_statuses, $review_status, $reviewer_progress, $review_stages_include, $review_stages_exclude, $sort_by_field, $sort_by_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **continuation_token** | **string**|  | [optional] |
| **size** | **int**|  | [optional] [default to 20] |
| **search** | **string**|  | [optional] |
| **public_organization_ids_include** | [**string[]**](../Model/string.md)| Include matching ids.  Value is dropped if also included in Exclude. | [optional] |
| **public_organization_ids_exclude** | [**string[]**](../Model/string.md)| Exclude matching ids | [optional] |
| **projects_include** | [**string[]**](../Model/string.md)| Include matching ids.  Value is dropped if also included in Exclude. | [optional] |
| **projects_exclude** | [**string[]**](../Model/string.md)| Exclude matching ids | [optional] |
| **statuses_include** | [**string[]**](../Model/string.md)| Include matching ids.  Value is dropped if also included in Exclude. | [optional] |
| **statuses_exclude** | [**string[]**](../Model/string.md)| Exclude matching ids | [optional] |
| **reviewers** | [**string[]**](../Model/string.md)|  | [optional] |
| **archived_status** | [**\OpenAPI\Client\Model\ArchivedStatus**](../Model/.md)|  | [optional] |
| **labels_include_any** | [**string[]**](../Model/string.md)|  | [optional] |
| **labels_include_all** | [**string[]**](../Model/string.md)|  | [optional] |
| **labels_include_unlabeled** | **bool**|  | [optional] |
| **labels_exclude_any** | [**string[]**](../Model/string.md)|  | [optional] |
| **labels_exclude_all** | [**string[]**](../Model/string.md)|  | [optional] |
| **labels_exclude_unlabeled** | **bool**|  | [optional] |
| **date_from** | **\DateTime**|  | [optional] |
| **date_to** | **\DateTime**|  | [optional] |
| **additional_form_statuses** | [**\OpenAPI\Client\Model\AdditionalFormsStatus[]**](../Model/\OpenAPI\Client\Model\AdditionalFormsStatus.md)|  | [optional] |
| **request_form_statuses** | [**\OpenAPI\Client\Model\RequestFormsStatus[]**](../Model/\OpenAPI\Client\Model\RequestFormsStatus.md)|  | [optional] |
| **review_status** | [**\OpenAPI\Client\Model\ReviewStatus**](../Model/.md)|  | [optional] |
| **reviewer_progress** | [**\OpenAPI\Client\Model\ReviewStatus**](../Model/.md)|  | [optional] |
| **review_stages_include** | [**string[]**](../Model/string.md)| Include matching ids.  Value is dropped if also included in Exclude. | [optional] |
| **review_stages_exclude** | [**string[]**](../Model/string.md)| Exclude matching ids | [optional] |
| **sort_by_field** | [**\OpenAPI\Client\Model\SubmissionSortField**](../Model/.md)|  | [optional] |
| **sort_by_order** | [**\OpenAPI\Client\Model\SubmissionSortOrder**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContinuationTokenResponseSubmissionListResponse**](../Model/ContinuationTokenResponseSubmissionListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsHistoryGet()`

```php
v4SubmissionsHistoryGet($submission_id, $user_id, $history_type_id, $bulk_action_task_id, $continuation_token, $size): \OpenAPI\Client\Model\ContinuationTokenResponseSubmissionHistoryResponse
```

Get a page of submission history items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = array('submission_id_example'); // string[]
$user_id = array('user_id_example'); // string[]
$history_type_id = array(56); // int[]
$bulk_action_task_id = 'bulk_action_task_id_example'; // string
$continuation_token = 'continuation_token_example'; // string
$size = 20; // int

try {
    $result = $apiInstance->v4SubmissionsHistoryGet($submission_id, $user_id, $history_type_id, $bulk_action_task_id, $continuation_token, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsHistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | [**string[]**](../Model/string.md)|  | [optional] |
| **user_id** | [**string[]**](../Model/string.md)|  | [optional] |
| **history_type_id** | [**int[]**](../Model/int.md)|  | [optional] |
| **bulk_action_task_id** | **string**|  | [optional] |
| **continuation_token** | **string**|  | [optional] |
| **size** | **int**|  | [optional] [default to 20] |

### Return type

[**\OpenAPI\Client\Model\ContinuationTokenResponseSubmissionHistoryResponse**](../Model/ContinuationTokenResponseSubmissionHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsIdConvertIntsPost()`

```php
v4SubmissionsIdConvertIntsPost($request_body): array<string,string>
```

Convert list of int submission ids to guid submission ids

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = array(56); // int[]

try {
    $result = $apiInstance->v4SubmissionsIdConvertIntsPost($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsIdConvertIntsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**int[]**](../Model/int.md)|  | [optional] |

### Return type

**array<string,string>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsIdConvertSubmissionIdGet()`

```php
v4SubmissionsIdConvertSubmissionIdGet($submission_id): string
```

Convert integer Submission Id to guid Submission Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 56; // int

try {
    $result = $apiInstance->v4SubmissionsIdConvertSubmissionIdGet($submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsIdConvertSubmissionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **int**|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsLabelsPut()`

```php
v4SubmissionsLabelsPut($apply_label_to_submissions_request): \OpenAPI\Client\Model\SubmissionActionResponse
```

Add labels to submissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apply_label_to_submissions_request = new \OpenAPI\Client\Model\ApplyLabelToSubmissionsRequest(); // \OpenAPI\Client\Model\ApplyLabelToSubmissionsRequest

try {
    $result = $apiInstance->v4SubmissionsLabelsPut($apply_label_to_submissions_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsLabelsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apply_label_to_submissions_request** | [**\OpenAPI\Client\Model\ApplyLabelToSubmissionsRequest**](../Model/ApplyLabelToSubmissionsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubmissionActionResponse**](../Model/SubmissionActionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsMessagePost()`

```php
v4SubmissionsMessagePost($create_submission_message_by_submission_ids_request): \OpenAPI\Client\Model\SubmissionActionResponse
```

Send submitter a message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_submission_message_by_submission_ids_request = new \OpenAPI\Client\Model\CreateSubmissionMessageBySubmissionIdsRequest(); // \OpenAPI\Client\Model\CreateSubmissionMessageBySubmissionIdsRequest

try {
    $result = $apiInstance->v4SubmissionsMessagePost($create_submission_message_by_submission_ids_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsMessagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_submission_message_by_submission_ids_request** | [**\OpenAPI\Client\Model\CreateSubmissionMessageBySubmissionIdsRequest**](../Model/CreateSubmissionMessageBySubmissionIdsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubmissionActionResponse**](../Model/SubmissionActionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsPost()`

```php
v4SubmissionsPost($v4_submissions_post_request): \OpenAPI\Client\Model\SubmissionResponse
```

Import a submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$v4_submissions_post_request = new \OpenAPI\Client\Model\V4SubmissionsPostRequest(); // \OpenAPI\Client\Model\V4SubmissionsPostRequest

try {
    $result = $apiInstance->v4SubmissionsPost($v4_submissions_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v4_submissions_post_request** | [**\OpenAPI\Client\Model\V4SubmissionsPostRequest**](../Model/V4SubmissionsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubmissionResponse**](../Model/SubmissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsPublicOrganizationPost()`

```php
v4SubmissionsPublicOrganizationPost($update_submission_public_organization_request)
```

Update a public organization id associated with a submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_submission_public_organization_request = new \OpenAPI\Client\Model\UpdateSubmissionPublicOrganizationRequest(); // \OpenAPI\Client\Model\UpdateSubmissionPublicOrganizationRequest

try {
    $apiInstance->v4SubmissionsPublicOrganizationPost($update_submission_public_organization_request);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsPublicOrganizationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_submission_public_organization_request** | [**\OpenAPI\Client\Model\UpdateSubmissionPublicOrganizationRequest**](../Model/UpdateSubmissionPublicOrganizationRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsReviewStagePut()`

```php
v4SubmissionsReviewStagePut($update_submissions_review_stage_request): \OpenAPI\Client\Model\SubmissionActionResponse
```

Update review stage on submissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_submissions_review_stage_request = new \OpenAPI\Client\Model\UpdateSubmissionsReviewStageRequest(); // \OpenAPI\Client\Model\UpdateSubmissionsReviewStageRequest

try {
    $result = $apiInstance->v4SubmissionsReviewStagePut($update_submissions_review_stage_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsReviewStagePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_submissions_review_stage_request** | [**\OpenAPI\Client\Model\UpdateSubmissionsReviewStageRequest**](../Model/UpdateSubmissionsReviewStageRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubmissionActionResponse**](../Model/SubmissionActionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsStatusPut()`

```php
v4SubmissionsStatusPut($update_submissions_status_request): \OpenAPI\Client\Model\SubmissionActionResponse
```

Update status on submissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_submissions_status_request = new \OpenAPI\Client\Model\UpdateSubmissionsStatusRequest(); // \OpenAPI\Client\Model\UpdateSubmissionsStatusRequest

try {
    $result = $apiInstance->v4SubmissionsStatusPut($update_submissions_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsStatusPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_submissions_status_request** | [**\OpenAPI\Client\Model\UpdateSubmissionsStatusRequest**](../Model/UpdateSubmissionsStatusRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubmissionActionResponse**](../Model/SubmissionActionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsSubmissionIdArchivePut()`

```php
v4SubmissionsSubmissionIdArchivePut($submission_id)
```

Archive submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string

try {
    $apiInstance->v4SubmissionsSubmissionIdArchivePut($submission_id);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsSubmissionIdArchivePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsSubmissionIdAssignmentsPut()`

```php
v4SubmissionsSubmissionIdAssignmentsPut($submission_id, $update_submission_assignments_request): \OpenAPI\Client\Model\UpdateSubmissionAssignmentsResponse
```

Update assignments for submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string
$update_submission_assignments_request = new \OpenAPI\Client\Model\UpdateSubmissionAssignmentsRequest(); // \OpenAPI\Client\Model\UpdateSubmissionAssignmentsRequest

try {
    $result = $apiInstance->v4SubmissionsSubmissionIdAssignmentsPut($submission_id, $update_submission_assignments_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsSubmissionIdAssignmentsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |
| **update_submission_assignments_request** | [**\OpenAPI\Client\Model\UpdateSubmissionAssignmentsRequest**](../Model/UpdateSubmissionAssignmentsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UpdateSubmissionAssignmentsResponse**](../Model/UpdateSubmissionAssignmentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsSubmissionIdDelete()`

```php
v4SubmissionsSubmissionIdDelete($submission_id)
```

Delete a submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string

try {
    $apiInstance->v4SubmissionsSubmissionIdDelete($submission_id);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsSubmissionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsSubmissionIdLabelsLabelIdDelete()`

```php
v4SubmissionsSubmissionIdLabelsLabelIdDelete($submission_id, $label_id)
```

Remove a label from a submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string
$label_id = 'label_id_example'; // string

try {
    $apiInstance->v4SubmissionsSubmissionIdLabelsLabelIdDelete($submission_id, $label_id);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsSubmissionIdLabelsLabelIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |
| **label_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsSubmissionIdLabelsLabelIdPut()`

```php
v4SubmissionsSubmissionIdLabelsLabelIdPut($submission_id, $label_id)
```

Apply a label to a submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string
$label_id = 'label_id_example'; // string

try {
    $apiInstance->v4SubmissionsSubmissionIdLabelsLabelIdPut($submission_id, $label_id);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsSubmissionIdLabelsLabelIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |
| **label_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsSubmissionIdNotesAttachmentsPost()`

```php
v4SubmissionsSubmissionIdNotesAttachmentsPost($submission_id, $upload_note_file_attachment_request): \OpenAPI\Client\Model\PostFileDataResponse
```

Upload a note file attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string
$upload_note_file_attachment_request = new \OpenAPI\Client\Model\UploadNoteFileAttachmentRequest(); // \OpenAPI\Client\Model\UploadNoteFileAttachmentRequest

try {
    $result = $apiInstance->v4SubmissionsSubmissionIdNotesAttachmentsPost($submission_id, $upload_note_file_attachment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsSubmissionIdNotesAttachmentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |
| **upload_note_file_attachment_request** | [**\OpenAPI\Client\Model\UploadNoteFileAttachmentRequest**](../Model/UploadNoteFileAttachmentRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PostFileDataResponse**](../Model/PostFileDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsSubmissionIdNotesPost()`

```php
v4SubmissionsSubmissionIdNotesPost($submission_id, $add_note_to_submission_request)
```

Add a note to a submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string
$add_note_to_submission_request = new \OpenAPI\Client\Model\AddNoteToSubmissionRequest(); // \OpenAPI\Client\Model\AddNoteToSubmissionRequest

try {
    $apiInstance->v4SubmissionsSubmissionIdNotesPost($submission_id, $add_note_to_submission_request);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsSubmissionIdNotesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |
| **add_note_to_submission_request** | [**\OpenAPI\Client\Model\AddNoteToSubmissionRequest**](../Model/AddNoteToSubmissionRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsSubmissionIdStageStageIdPut()`

```php
v4SubmissionsSubmissionIdStageStageIdPut($submission_id, $stage_id): \OpenAPI\Client\Model\UpdateSubmissionReviewStageResponse
```

Move submission between review stages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string
$stage_id = 'stage_id_example'; // string

try {
    $result = $apiInstance->v4SubmissionsSubmissionIdStageStageIdPut($submission_id, $stage_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsSubmissionIdStageStageIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |
| **stage_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\UpdateSubmissionReviewStageResponse**](../Model/UpdateSubmissionReviewStageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsSubmissionIdStatusPut()`

```php
v4SubmissionsSubmissionIdStatusPut($submission_id, $v4_submissions_submission_id_status_put_request)
```

Update status of a submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string
$v4_submissions_submission_id_status_put_request = new \OpenAPI\Client\Model\V4SubmissionsSubmissionIdStatusPutRequest(); // \OpenAPI\Client\Model\V4SubmissionsSubmissionIdStatusPutRequest

try {
    $apiInstance->v4SubmissionsSubmissionIdStatusPut($submission_id, $v4_submissions_submission_id_status_put_request);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsSubmissionIdStatusPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |
| **v4_submissions_submission_id_status_put_request** | [**\OpenAPI\Client\Model\V4SubmissionsSubmissionIdStatusPutRequest**](../Model/V4SubmissionsSubmissionIdStatusPutRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsSubmissionIdTransferPost()`

```php
v4SubmissionsSubmissionIdTransferPost($submission_id, $create_transfer_request): \OpenAPI\Client\Model\BackgroundTaskStatusResponse
```

Create a submission transfer request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string
$create_transfer_request = new \OpenAPI\Client\Model\CreateTransferRequest(); // \OpenAPI\Client\Model\CreateTransferRequest

try {
    $result = $apiInstance->v4SubmissionsSubmissionIdTransferPost($submission_id, $create_transfer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsSubmissionIdTransferPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |
| **create_transfer_request** | [**\OpenAPI\Client\Model\CreateTransferRequest**](../Model/CreateTransferRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BackgroundTaskStatusResponse**](../Model/BackgroundTaskStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsSubmissionIdUnarchivePut()`

```php
v4SubmissionsSubmissionIdUnarchivePut($submission_id)
```

Unarchive submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string

try {
    $apiInstance->v4SubmissionsSubmissionIdUnarchivePut($submission_id);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsSubmissionIdUnarchivePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsTeamAssignmentsGet()`

```php
v4SubmissionsTeamAssignmentsGet(): \OpenAPI\Client\Model\GetAssignmentCountsResponse
```

Get team member assignment counts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v4SubmissionsTeamAssignmentsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsTeamAssignmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\GetAssignmentCountsResponse**](../Model/GetAssignmentCountsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsTransfersPost()`

```php
v4SubmissionsTransfersPost($get_pending_transfers_request): \OpenAPI\Client\Model\SubmissionPendingTransfersResponse[]
```

Get pending submission transfer requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_pending_transfers_request = new \OpenAPI\Client\Model\GetPendingTransfersRequest(); // \OpenAPI\Client\Model\GetPendingTransfersRequest

try {
    $result = $apiInstance->v4SubmissionsTransfersPost($get_pending_transfers_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsTransfersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_pending_transfers_request** | [**\OpenAPI\Client\Model\GetPendingTransfersRequest**](../Model/GetPendingTransfersRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SubmissionPendingTransfersResponse[]**](../Model/SubmissionPendingTransfersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4SubmissionsTransfersTransferIdCancelPost()`

```php
v4SubmissionsTransfersTransferIdCancelPost($transfer_id)
```

Cancel a transfer request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SubmissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transfer_id = 'transfer_id_example'; // string

try {
    $apiInstance->v4SubmissionsTransfersTransferIdCancelPost($transfer_id);
} catch (Exception $e) {
    echo 'Exception when calling SubmissionsApi->v4SubmissionsTransfersTransferIdCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transfer_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
