# OpenAPI\Client\FormsApi

All URIs are relative to https://submittable-api.submittable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v4EntriesAdditionalPost()**](FormsApi.md#v4EntriesAdditionalPost) | **POST** /v4/entries/additional | Create and send an additional form entry |
| [**v4EntriesAdditionalRescindPost()**](FormsApi.md#v4EntriesAdditionalRescindPost) | **POST** /v4/entries/additional/rescind | Rescind additional form requests |
| [**v4EntriesEditingClosePost()**](FormsApi.md#v4EntriesEditingClosePost) | **POST** /v4/entries/editing/close | Close entries for editing |
| [**v4EntriesEditingOpenPost()**](FormsApi.md#v4EntriesEditingOpenPost) | **POST** /v4/entries/editing/open | Open entries for editing |
| [**v4EntriesEntryIdClosePost()**](FormsApi.md#v4EntriesEntryIdClosePost) | **POST** /v4/entries/{entryId}/close | Close editing |
| [**v4EntriesEntryIdDelete()**](FormsApi.md#v4EntriesEntryIdDelete) | **DELETE** /v4/entries/{entryId} | Delete an entry |
| [**v4EntriesEntryIdFieldsFieldIdPost()**](FormsApi.md#v4EntriesEntryIdFieldsFieldIdPost) | **POST** /v4/entries/{entryId}/fields/{fieldId} | Get a file upload url |
| [**v4EntriesEntryIdFilesFileIdGet()**](FormsApi.md#v4EntriesEntryIdFilesFileIdGet) | **GET** /v4/entries/{entryId}/files/{fileId} | Get a url to download the uploaded file |
| [**v4EntriesEntryIdGet()**](FormsApi.md#v4EntriesEntryIdGet) | **GET** /v4/entries/{entryId} | Get an entry |
| [**v4EntriesEntryIdOpenPost()**](FormsApi.md#v4EntriesEntryIdOpenPost) | **POST** /v4/entries/{entryId}/open | Open editing |
| [**v4EntriesEntryIdPatch()**](FormsApi.md#v4EntriesEntryIdPatch) | **PATCH** /v4/entries/{entryId} | Update a form entry |
| [**v4EntriesEntryIdPut()**](FormsApi.md#v4EntriesEntryIdPut) | **PUT** /v4/entries/{entryId} | Update a form entry |
| [**v4EntriesEntryIdTablesTableIdGet()**](FormsApi.md#v4EntriesEntryIdTablesTableIdGet) | **GET** /v4/entries/{entryId}/tables/{tableId} | Get a url to download the table |
| [**v4EntriesFormsFormIdGet()**](FormsApi.md#v4EntriesFormsFormIdGet) | **GET** /v4/entries/forms/{formId} | Get a page of completed form entries |
| [**v4EntriesInternalPost()**](FormsApi.md#v4EntriesInternalPost) | **POST** /v4/entries/internal | Create an internal form entry |
| [**v4EntriesMessagePost()**](FormsApi.md#v4EntriesMessagePost) | **POST** /v4/entries/message | Send message to entries |
| [**v4EntriesMetadataFormsFormIdGet()**](FormsApi.md#v4EntriesMetadataFormsFormIdGet) | **GET** /v4/entries/metadata/forms/{formId} | Get a page of form entry metadata |
| [**v4EntriesRequestFilterEditingClosePut()**](FormsApi.md#v4EntriesRequestFilterEditingClosePut) | **PUT** /v4/entries/request/filter/editing/close | Close request form entries for editing by filter |
| [**v4EntriesRequestFilterEditingOpenPut()**](FormsApi.md#v4EntriesRequestFilterEditingOpenPut) | **PUT** /v4/entries/request/filter/editing/open | Open request form entries for editing by filter |
| [**v4EntriesRequestStatusPut()**](FormsApi.md#v4EntriesRequestStatusPut) | **PUT** /v4/entries/request/status | Update status on request form entries |
| [**v4EntriesReviewsEntryIdDelete()**](FormsApi.md#v4EntriesReviewsEntryIdDelete) | **DELETE** /v4/entries/reviews/{entryId} | Delete a review entry by id |
| [**v4EntriesReviewsScorePut()**](FormsApi.md#v4EntriesReviewsScorePut) | **PUT** /v4/entries/reviews/score | Update a review score |
| [**v4EntriesSubmissionsSubmissionIdGet()**](FormsApi.md#v4EntriesSubmissionsSubmissionIdGet) | **GET** /v4/entries/submissions/{submissionId} | Get a submission&#39;s entries |
| [**v4EntriesSubmissionsSubmissionIdReviewsGet()**](FormsApi.md#v4EntriesSubmissionsSubmissionIdReviewsGet) | **GET** /v4/entries/submissions/{submissionId}/reviews | Get reviews for a Submission |
| [**v4FormsFormIdDelete()**](FormsApi.md#v4FormsFormIdDelete) | **DELETE** /v4/forms/{formId} | Delete a form |
| [**v4FormsFormIdGet()**](FormsApi.md#v4FormsFormIdGet) | **GET** /v4/forms/{formId} | Get a form |
| [**v4FormsFormIdPut()**](FormsApi.md#v4FormsFormIdPut) | **PUT** /v4/forms/{formId} | Update a form |
| [**v4FormsGet()**](FormsApi.md#v4FormsGet) | **GET** /v4/forms | Get a page of forms |
| [**v4FormsMetadataGet()**](FormsApi.md#v4FormsMetadataGet) | **GET** /v4/forms/metadata | Get a page of form metadata |
| [**v4FormsPost()**](FormsApi.md#v4FormsPost) | **POST** /v4/forms | Create a form |
| [**v4FormsScheduledScheduledAdditionalFormIdDelete()**](FormsApi.md#v4FormsScheduledScheduledAdditionalFormIdDelete) | **DELETE** /v4/forms/scheduled/{scheduledAdditionalFormId} | Delete scheduled additional form by id |
| [**v4FormsSubmissionIdScheduledGet()**](FormsApi.md#v4FormsSubmissionIdScheduledGet) | **GET** /v4/forms/{submissionId}/scheduled | Get scheduled additional forms by submission |
| [**v4FormsTemplatesPaymentGet()**](FormsApi.md#v4FormsTemplatesPaymentGet) | **GET** /v4/forms/templates/payment | Clone payment template |
| [**v4ReviewsReviewResponseIdDelete()**](FormsApi.md#v4ReviewsReviewResponseIdDelete) | **DELETE** /v4/reviews/{reviewResponseId} | Delete a review by id |


## `v4EntriesAdditionalPost()`

```php
v4EntriesAdditionalPost($create_additional_form_entry_request): \OpenAPI\Client\Model\AdditionalFormEntryResponse
```

Create and send an additional form entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_additional_form_entry_request = new \OpenAPI\Client\Model\CreateAdditionalFormEntryRequest(); // \OpenAPI\Client\Model\CreateAdditionalFormEntryRequest

try {
    $result = $apiInstance->v4EntriesAdditionalPost($create_additional_form_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesAdditionalPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_additional_form_entry_request** | [**\OpenAPI\Client\Model\CreateAdditionalFormEntryRequest**](../Model/CreateAdditionalFormEntryRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\AdditionalFormEntryResponse**](../Model/AdditionalFormEntryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesAdditionalRescindPost()`

```php
v4EntriesAdditionalRescindPost($rescind_additional_forms_request): string[]
```

Rescind additional form requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$rescind_additional_forms_request = new \OpenAPI\Client\Model\RescindAdditionalFormsRequest(); // \OpenAPI\Client\Model\RescindAdditionalFormsRequest

try {
    $result = $apiInstance->v4EntriesAdditionalRescindPost($rescind_additional_forms_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesAdditionalRescindPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **rescind_additional_forms_request** | [**\OpenAPI\Client\Model\RescindAdditionalFormsRequest**](../Model/RescindAdditionalFormsRequest.md)|  | [optional] |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesEditingClosePost()`

```php
v4EntriesEditingClosePost($update_entries_is_open_for_editing_request): string[]
```

Close entries for editing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_entries_is_open_for_editing_request = new \OpenAPI\Client\Model\UpdateEntriesIsOpenForEditingRequest(); // \OpenAPI\Client\Model\UpdateEntriesIsOpenForEditingRequest

try {
    $result = $apiInstance->v4EntriesEditingClosePost($update_entries_is_open_for_editing_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesEditingClosePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_entries_is_open_for_editing_request** | [**\OpenAPI\Client\Model\UpdateEntriesIsOpenForEditingRequest**](../Model/UpdateEntriesIsOpenForEditingRequest.md)|  | [optional] |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesEditingOpenPost()`

```php
v4EntriesEditingOpenPost($update_entries_is_open_for_editing_request): string[]
```

Open entries for editing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_entries_is_open_for_editing_request = new \OpenAPI\Client\Model\UpdateEntriesIsOpenForEditingRequest(); // \OpenAPI\Client\Model\UpdateEntriesIsOpenForEditingRequest

try {
    $result = $apiInstance->v4EntriesEditingOpenPost($update_entries_is_open_for_editing_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesEditingOpenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_entries_is_open_for_editing_request** | [**\OpenAPI\Client\Model\UpdateEntriesIsOpenForEditingRequest**](../Model/UpdateEntriesIsOpenForEditingRequest.md)|  | [optional] |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesEntryIdClosePost()`

```php
v4EntriesEntryIdClosePost($entry_id, $update_is_open_for_editing_request): string[]
```

Close editing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entry_id = 'entry_id_example'; // string
$update_is_open_for_editing_request = new \OpenAPI\Client\Model\UpdateIsOpenForEditingRequest(); // \OpenAPI\Client\Model\UpdateIsOpenForEditingRequest

try {
    $result = $apiInstance->v4EntriesEntryIdClosePost($entry_id, $update_is_open_for_editing_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesEntryIdClosePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_id** | **string**|  | |
| **update_is_open_for_editing_request** | [**\OpenAPI\Client\Model\UpdateIsOpenForEditingRequest**](../Model/UpdateIsOpenForEditingRequest.md)|  | [optional] |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesEntryIdDelete()`

```php
v4EntriesEntryIdDelete($entry_id)
```

Delete an entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entry_id = 'entry_id_example'; // string

try {
    $apiInstance->v4EntriesEntryIdDelete($entry_id);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesEntryIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_id** | **string**|  | |

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

## `v4EntriesEntryIdFieldsFieldIdPost()`

```php
v4EntriesEntryIdFieldsFieldIdPost($entry_id, $field_id, $create_response_file_request): \OpenAPI\Client\Model\CreateFileResult
```

Get a file upload url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entry_id = 'entry_id_example'; // string
$field_id = 'field_id_example'; // string
$create_response_file_request = new \OpenAPI\Client\Model\CreateResponseFileRequest(); // \OpenAPI\Client\Model\CreateResponseFileRequest

try {
    $result = $apiInstance->v4EntriesEntryIdFieldsFieldIdPost($entry_id, $field_id, $create_response_file_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesEntryIdFieldsFieldIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_id** | **string**|  | |
| **field_id** | **string**|  | |
| **create_response_file_request** | [**\OpenAPI\Client\Model\CreateResponseFileRequest**](../Model/CreateResponseFileRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateFileResult**](../Model/CreateFileResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesEntryIdFilesFileIdGet()`

```php
v4EntriesEntryIdFilesFileIdGet($entry_id, $file_id): \OpenAPI\Client\Model\GetUrlResponse
```

Get a url to download the uploaded file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entry_id = 'entry_id_example'; // string
$file_id = 'file_id_example'; // string

try {
    $result = $apiInstance->v4EntriesEntryIdFilesFileIdGet($entry_id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesEntryIdFilesFileIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_id** | **string**|  | |
| **file_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetUrlResponse**](../Model/GetUrlResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesEntryIdGet()`

```php
v4EntriesEntryIdGet($entry_id, $prefer_original_version, $include_drafts): \OpenAPI\Client\Model\V4EntriesEntryIdGet200Response
```

Get an entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entry_id = 'entry_id_example'; // string
$prefer_original_version = True; // bool
$include_drafts = True; // bool

try {
    $result = $apiInstance->v4EntriesEntryIdGet($entry_id, $prefer_original_version, $include_drafts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesEntryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_id** | **string**|  | |
| **prefer_original_version** | **bool**|  | [optional] |
| **include_drafts** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\V4EntriesEntryIdGet200Response**](../Model/V4EntriesEntryIdGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesEntryIdOpenPost()`

```php
v4EntriesEntryIdOpenPost($entry_id, $update_is_open_for_editing_request): string[]
```

Open editing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entry_id = 'entry_id_example'; // string
$update_is_open_for_editing_request = new \OpenAPI\Client\Model\UpdateIsOpenForEditingRequest(); // \OpenAPI\Client\Model\UpdateIsOpenForEditingRequest

try {
    $result = $apiInstance->v4EntriesEntryIdOpenPost($entry_id, $update_is_open_for_editing_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesEntryIdOpenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_id** | **string**|  | |
| **update_is_open_for_editing_request** | [**\OpenAPI\Client\Model\UpdateIsOpenForEditingRequest**](../Model/UpdateIsOpenForEditingRequest.md)|  | [optional] |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesEntryIdPatch()`

```php
v4EntriesEntryIdPatch($entry_id, $v4_entries_entry_id_patch_request)
```

Update a form entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entry_id = 'entry_id_example'; // string
$v4_entries_entry_id_patch_request = new \OpenAPI\Client\Model\V4EntriesEntryIdPatchRequest(); // \OpenAPI\Client\Model\V4EntriesEntryIdPatchRequest

try {
    $apiInstance->v4EntriesEntryIdPatch($entry_id, $v4_entries_entry_id_patch_request);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesEntryIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_id** | **string**|  | |
| **v4_entries_entry_id_patch_request** | [**\OpenAPI\Client\Model\V4EntriesEntryIdPatchRequest**](../Model/V4EntriesEntryIdPatchRequest.md)|  | [optional] |

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

## `v4EntriesEntryIdPut()`

```php
v4EntriesEntryIdPut($entry_id, $v4_entries_entry_id_put_request): \OpenAPI\Client\Model\V4EntriesEntryIdGet200Response
```

Update a form entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entry_id = 'entry_id_example'; // string
$v4_entries_entry_id_put_request = new \OpenAPI\Client\Model\V4EntriesEntryIdPutRequest(); // \OpenAPI\Client\Model\V4EntriesEntryIdPutRequest

try {
    $result = $apiInstance->v4EntriesEntryIdPut($entry_id, $v4_entries_entry_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesEntryIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_id** | **string**|  | |
| **v4_entries_entry_id_put_request** | [**\OpenAPI\Client\Model\V4EntriesEntryIdPutRequest**](../Model/V4EntriesEntryIdPutRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\V4EntriesEntryIdGet200Response**](../Model/V4EntriesEntryIdGet200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesEntryIdTablesTableIdGet()`

```php
v4EntriesEntryIdTablesTableIdGet($entry_id, $table_id): \OpenAPI\Client\Model\GetUrlResponse
```

Get a url to download the table

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entry_id = 'entry_id_example'; // string
$table_id = 'table_id_example'; // string

try {
    $result = $apiInstance->v4EntriesEntryIdTablesTableIdGet($entry_id, $table_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesEntryIdTablesTableIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_id** | **string**|  | |
| **table_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetUrlResponse**](../Model/GetUrlResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesFormsFormIdGet()`

```php
v4EntriesFormsFormIdGet($form_id, $continuation_token, $size): \OpenAPI\Client\Model\ContinuationTokenResponseAnyFormTypeEntryResponse
```

Get a page of completed form entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$form_id = 'form_id_example'; // string
$continuation_token = 'continuation_token_example'; // string
$size = 20; // int

try {
    $result = $apiInstance->v4EntriesFormsFormIdGet($form_id, $continuation_token, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesFormsFormIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |
| **continuation_token** | **string**|  | [optional] |
| **size** | **int**|  | [optional] [default to 20] |

### Return type

[**\OpenAPI\Client\Model\ContinuationTokenResponseAnyFormTypeEntryResponse**](../Model/ContinuationTokenResponseAnyFormTypeEntryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesInternalPost()`

```php
v4EntriesInternalPost($create_internal_form_entry_request): \OpenAPI\Client\Model\InternalFormEntryResponse
```

Create an internal form entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_internal_form_entry_request = new \OpenAPI\Client\Model\CreateInternalFormEntryRequest(); // \OpenAPI\Client\Model\CreateInternalFormEntryRequest

try {
    $result = $apiInstance->v4EntriesInternalPost($create_internal_form_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesInternalPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_internal_form_entry_request** | [**\OpenAPI\Client\Model\CreateInternalFormEntryRequest**](../Model/CreateInternalFormEntryRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\InternalFormEntryResponse**](../Model/InternalFormEntryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesMessagePost()`

```php
v4EntriesMessagePost($send_message_to_entries_request)
```

Send message to entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$send_message_to_entries_request = new \OpenAPI\Client\Model\SendMessageToEntriesRequest(); // \OpenAPI\Client\Model\SendMessageToEntriesRequest

try {
    $apiInstance->v4EntriesMessagePost($send_message_to_entries_request);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesMessagePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_message_to_entries_request** | [**\OpenAPI\Client\Model\SendMessageToEntriesRequest**](../Model/SendMessageToEntriesRequest.md)|  | [optional] |

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

## `v4EntriesMetadataFormsFormIdGet()`

```php
v4EntriesMetadataFormsFormIdGet($form_id, $continuation_token, $size, $project_ids, $states, $sort_by_sort, $sort_by_direction, $statuses, $sent_date_from, $sent_date_to, $deadline_date_from, $deadline_date_to, $request_form_entry_statuses, $submitted_date_from, $submitted_date_to): \OpenAPI\Client\Model\ContinuationTokenResponseAnyFormTypeEntryMetadataResponse
```

Get a page of form entry metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$form_id = 'form_id_example'; // string
$continuation_token = 'continuation_token_example'; // string
$size = 20; // int
$project_ids = array('project_ids_example'); // string[] | Additional and request form entries only
$states = array('states_example'); // string[] | Additional and request form entries only
$sort_by_sort = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FormEntrySortField(); // \OpenAPI\Client\Model\FormEntrySortField | 'dateSent', 'status' and 'deadline' only for Additional form entries. 'dateSubmitted' and 'requestFormEntryStatus' only for Request form entries
$sort_by_direction = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\FormEntrySortOrder(); // \OpenAPI\Client\Model\FormEntrySortOrder
$statuses = array('statuses_example'); // string[] | Additional form entries only
$sent_date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Additional form entries only
$sent_date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Additional form entries only
$deadline_date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Additional form entries only
$deadline_date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Additional form entries only
$request_form_entry_statuses = array('request_form_entry_statuses_example'); // string[] | Request form entries only
$submitted_date_from = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Request form entries only
$submitted_date_to = new \DateTime('2013-10-20T19:20:30+01:00'); // \DateTime | Request form entries only

try {
    $result = $apiInstance->v4EntriesMetadataFormsFormIdGet($form_id, $continuation_token, $size, $project_ids, $states, $sort_by_sort, $sort_by_direction, $statuses, $sent_date_from, $sent_date_to, $deadline_date_from, $deadline_date_to, $request_form_entry_statuses, $submitted_date_from, $submitted_date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesMetadataFormsFormIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |
| **continuation_token** | **string**|  | [optional] |
| **size** | **int**|  | [optional] [default to 20] |
| **project_ids** | [**string[]**](../Model/string.md)| Additional and request form entries only | [optional] |
| **states** | [**string[]**](../Model/string.md)| Additional and request form entries only | [optional] |
| **sort_by_sort** | [**\OpenAPI\Client\Model\FormEntrySortField**](../Model/.md)| &#39;dateSent&#39;, &#39;status&#39; and &#39;deadline&#39; only for Additional form entries. &#39;dateSubmitted&#39; and &#39;requestFormEntryStatus&#39; only for Request form entries | [optional] |
| **sort_by_direction** | [**\OpenAPI\Client\Model\FormEntrySortOrder**](../Model/.md)|  | [optional] |
| **statuses** | [**string[]**](../Model/string.md)| Additional form entries only | [optional] |
| **sent_date_from** | **\DateTime**| Additional form entries only | [optional] |
| **sent_date_to** | **\DateTime**| Additional form entries only | [optional] |
| **deadline_date_from** | **\DateTime**| Additional form entries only | [optional] |
| **deadline_date_to** | **\DateTime**| Additional form entries only | [optional] |
| **request_form_entry_statuses** | [**string[]**](../Model/string.md)| Request form entries only | [optional] |
| **submitted_date_from** | **\DateTime**| Request form entries only | [optional] |
| **submitted_date_to** | **\DateTime**| Request form entries only | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContinuationTokenResponseAnyFormTypeEntryMetadataResponse**](../Model/ContinuationTokenResponseAnyFormTypeEntryMetadataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesRequestFilterEditingClosePut()`

```php
v4EntriesRequestFilterEditingClosePut($update_request_form_is_open_for_editing_by_filter_request)
```

Close request form entries for editing by filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_request_form_is_open_for_editing_by_filter_request = new \OpenAPI\Client\Model\UpdateRequestFormIsOpenForEditingByFilterRequest(); // \OpenAPI\Client\Model\UpdateRequestFormIsOpenForEditingByFilterRequest

try {
    $apiInstance->v4EntriesRequestFilterEditingClosePut($update_request_form_is_open_for_editing_by_filter_request);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesRequestFilterEditingClosePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_request_form_is_open_for_editing_by_filter_request** | [**\OpenAPI\Client\Model\UpdateRequestFormIsOpenForEditingByFilterRequest**](../Model/UpdateRequestFormIsOpenForEditingByFilterRequest.md)|  | [optional] |

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

## `v4EntriesRequestFilterEditingOpenPut()`

```php
v4EntriesRequestFilterEditingOpenPut($update_request_form_is_open_for_editing_by_filter_request)
```

Open request form entries for editing by filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_request_form_is_open_for_editing_by_filter_request = new \OpenAPI\Client\Model\UpdateRequestFormIsOpenForEditingByFilterRequest(); // \OpenAPI\Client\Model\UpdateRequestFormIsOpenForEditingByFilterRequest

try {
    $apiInstance->v4EntriesRequestFilterEditingOpenPut($update_request_form_is_open_for_editing_by_filter_request);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesRequestFilterEditingOpenPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_request_form_is_open_for_editing_by_filter_request** | [**\OpenAPI\Client\Model\UpdateRequestFormIsOpenForEditingByFilterRequest**](../Model/UpdateRequestFormIsOpenForEditingByFilterRequest.md)|  | [optional] |

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

## `v4EntriesRequestStatusPut()`

```php
v4EntriesRequestStatusPut($update_request_form_entry_status_request): string[]
```

Update status on request form entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_request_form_entry_status_request = new \OpenAPI\Client\Model\UpdateRequestFormEntryStatusRequest(); // \OpenAPI\Client\Model\UpdateRequestFormEntryStatusRequest

try {
    $result = $apiInstance->v4EntriesRequestStatusPut($update_request_form_entry_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesRequestStatusPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_request_form_entry_status_request** | [**\OpenAPI\Client\Model\UpdateRequestFormEntryStatusRequest**](../Model/UpdateRequestFormEntryStatusRequest.md)|  | [optional] |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesReviewsEntryIdDelete()`

```php
v4EntriesReviewsEntryIdDelete($entry_id)
```

Delete a review entry by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entry_id = 'entry_id_example'; // string

try {
    $apiInstance->v4EntriesReviewsEntryIdDelete($entry_id);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesReviewsEntryIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entry_id** | **string**|  | |

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

## `v4EntriesReviewsScorePut()`

```php
v4EntriesReviewsScorePut($update_review_score_request): \OpenAPI\Client\Model\ReviewFormEntryResponse
```

Update a review score

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_review_score_request = new \OpenAPI\Client\Model\UpdateReviewScoreRequest(); // \OpenAPI\Client\Model\UpdateReviewScoreRequest

try {
    $result = $apiInstance->v4EntriesReviewsScorePut($update_review_score_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesReviewsScorePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_review_score_request** | [**\OpenAPI\Client\Model\UpdateReviewScoreRequest**](../Model/UpdateReviewScoreRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReviewFormEntryResponse**](../Model/ReviewFormEntryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesSubmissionsSubmissionIdGet()`

```php
v4EntriesSubmissionsSubmissionIdGet($submission_id): \OpenAPI\Client\Model\FormEntriesForSubmissionResponse
```

Get a submission's entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string

try {
    $result = $apiInstance->v4EntriesSubmissionsSubmissionIdGet($submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesSubmissionsSubmissionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\FormEntriesForSubmissionResponse**](../Model/FormEntriesForSubmissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4EntriesSubmissionsSubmissionIdReviewsGet()`

```php
v4EntriesSubmissionsSubmissionIdReviewsGet($submission_id, $review_stage_id): \OpenAPI\Client\Model\ReviewFormEntryResponse[]
```

Get reviews for a Submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string
$review_stage_id = 'review_stage_id_example'; // string

try {
    $result = $apiInstance->v4EntriesSubmissionsSubmissionIdReviewsGet($submission_id, $review_stage_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesSubmissionsSubmissionIdReviewsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |
| **review_stage_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReviewFormEntryResponse[]**](../Model/ReviewFormEntryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4FormsFormIdDelete()`

```php
v4FormsFormIdDelete($form_id)
```

Delete a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$form_id = 'form_id_example'; // string | 

try {
    $apiInstance->v4FormsFormIdDelete($form_id);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4FormsFormIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |

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

## `v4FormsFormIdGet()`

```php
v4FormsFormIdGet($form_id): \OpenAPI\Client\Model\V4FormsPost201Response
```

Get a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$form_id = 'form_id_example'; // string

try {
    $result = $apiInstance->v4FormsFormIdGet($form_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4FormsFormIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\V4FormsPost201Response**](../Model/V4FormsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4FormsFormIdPut()`

```php
v4FormsFormIdPut($form_id, $v4_forms_post_request): \OpenAPI\Client\Model\V4FormsPost201Response
```

Update a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$form_id = 'form_id_example'; // string
$v4_forms_post_request = new \OpenAPI\Client\Model\V4FormsPostRequest(); // \OpenAPI\Client\Model\V4FormsPostRequest

try {
    $result = $apiInstance->v4FormsFormIdPut($form_id, $v4_forms_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4FormsFormIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |
| **v4_forms_post_request** | [**\OpenAPI\Client\Model\V4FormsPostRequest**](../Model/V4FormsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\V4FormsPost201Response**](../Model/V4FormsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4FormsGet()`

```php
v4FormsGet($continuation_token, $size, $type, $project_id): \OpenAPI\Client\Model\ContinuationTokenResponseFormResponseV4
```

Get a page of forms

The projectId filter only returns initial and additional forms that have received a response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$continuation_token = 'continuation_token_example'; // string
$size = 20; // int
$type = 'type_example'; // string
$project_id = 'project_id_example'; // string

try {
    $result = $apiInstance->v4FormsGet($continuation_token, $size, $type, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4FormsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **continuation_token** | **string**|  | [optional] |
| **size** | **int**|  | [optional] [default to 20] |
| **type** | **string**|  | [optional] |
| **project_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContinuationTokenResponseFormResponseV4**](../Model/ContinuationTokenResponseFormResponseV4.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4FormsMetadataGet()`

```php
v4FormsMetadataGet($continuation_token, $size, $type, $project_id): \OpenAPI\Client\Model\ContinuationTokenResponseFormMetadataResponse
```

Get a page of form metadata

The projectId filter only returns initial and additional forms that have received a response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$continuation_token = 'continuation_token_example'; // string
$size = 20; // int
$type = 'type_example'; // string
$project_id = 'project_id_example'; // string

try {
    $result = $apiInstance->v4FormsMetadataGet($continuation_token, $size, $type, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4FormsMetadataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **continuation_token** | **string**|  | [optional] |
| **size** | **int**|  | [optional] [default to 20] |
| **type** | **string**|  | [optional] |
| **project_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContinuationTokenResponseFormMetadataResponse**](../Model/ContinuationTokenResponseFormMetadataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4FormsPost()`

```php
v4FormsPost($v4_forms_post_request): \OpenAPI\Client\Model\V4FormsPost201Response
```

Create a form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$v4_forms_post_request = new \OpenAPI\Client\Model\V4FormsPostRequest(); // \OpenAPI\Client\Model\V4FormsPostRequest

try {
    $result = $apiInstance->v4FormsPost($v4_forms_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4FormsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v4_forms_post_request** | [**\OpenAPI\Client\Model\V4FormsPostRequest**](../Model/V4FormsPostRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\V4FormsPost201Response**](../Model/V4FormsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4FormsScheduledScheduledAdditionalFormIdDelete()`

```php
v4FormsScheduledScheduledAdditionalFormIdDelete($scheduled_additional_form_id)
```

Delete scheduled additional form by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$scheduled_additional_form_id = 'scheduled_additional_form_id_example'; // string

try {
    $apiInstance->v4FormsScheduledScheduledAdditionalFormIdDelete($scheduled_additional_form_id);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4FormsScheduledScheduledAdditionalFormIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scheduled_additional_form_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4FormsSubmissionIdScheduledGet()`

```php
v4FormsSubmissionIdScheduledGet($submission_id): \OpenAPI\Client\Model\ScheduledAdditionalFormsBySubmissionIdResponse
```

Get scheduled additional forms by submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string

try {
    $result = $apiInstance->v4FormsSubmissionIdScheduledGet($submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4FormsSubmissionIdScheduledGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ScheduledAdditionalFormsBySubmissionIdResponse**](../Model/ScheduledAdditionalFormsBySubmissionIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4FormsTemplatesPaymentGet()`

```php
v4FormsTemplatesPaymentGet(): \OpenAPI\Client\Model\FormTemplateResponse
```

Clone payment template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v4FormsTemplatesPaymentGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4FormsTemplatesPaymentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FormTemplateResponse**](../Model/FormTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4ReviewsReviewResponseIdDelete()`

```php
v4ReviewsReviewResponseIdDelete($review_response_id)
```

Delete a review by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$review_response_id = 'review_response_id_example'; // string

try {
    $apiInstance->v4ReviewsReviewResponseIdDelete($review_response_id);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4ReviewsReviewResponseIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **review_response_id** | **string**|  | |

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
