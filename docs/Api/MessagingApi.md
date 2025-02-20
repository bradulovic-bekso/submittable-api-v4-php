# OpenAPI\Client\MessagingApi

All URIs are relative to https://submittable-api.submittable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v4MessagesMessageIdAttachmentsGet()**](MessagingApi.md#v4MessagesMessageIdAttachmentsGet) | **GET** /v4/messages/{messageId}/attachments | Get the file attachments associated with a messageId |
| [**v4MessagesPlaceholdersFormsFormIdGet()**](MessagingApi.md#v4MessagesPlaceholdersFormsFormIdGet) | **GET** /v4/messages/placeholders/forms/{formId} | Get a placeholder by id |
| [**v4MessagesPlaceholdersGet()**](MessagingApi.md#v4MessagesPlaceholdersGet) | **GET** /v4/messages/placeholders | Get a list of placeholders |
| [**v4MessagesPlaceholdersPlaceholderIdGet()**](MessagingApi.md#v4MessagesPlaceholdersPlaceholderIdGet) | **GET** /v4/messages/placeholders/{placeholderId} | Get a placeholder by id |
| [**v4MessagesPlaceholdersPlaceholderIdPut()**](MessagingApi.md#v4MessagesPlaceholdersPlaceholderIdPut) | **PUT** /v4/messages/placeholders/{placeholderId} | Update a custom placeholder and any of its mappings |
| [**v4MessagesPlaceholdersPost()**](MessagingApi.md#v4MessagesPlaceholdersPost) | **POST** /v4/messages/placeholders | Create a new Custom Placeholder |
| [**v4MessagesResponsesTemplatesPost()**](MessagingApi.md#v4MessagesResponsesTemplatesPost) | **POST** /v4/messages/responses/templates | Create or update a response template |


## `v4MessagesMessageIdAttachmentsGet()`

```php
v4MessagesMessageIdAttachmentsGet($message_id): \OpenAPI\Client\Model\MessageAttachmentResponse
```

Get the file attachments associated with a messageId

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$message_id = 'message_id_example'; // string

try {
    $result = $apiInstance->v4MessagesMessageIdAttachmentsGet($message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->v4MessagesMessageIdAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\MessageAttachmentResponse**](../Model/MessageAttachmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4MessagesPlaceholdersFormsFormIdGet()`

```php
v4MessagesPlaceholdersFormsFormIdGet($form_id): \OpenAPI\Client\Model\PlaceholderResponse[]
```

Get a placeholder by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$form_id = 'form_id_example'; // string

try {
    $result = $apiInstance->v4MessagesPlaceholdersFormsFormIdGet($form_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->v4MessagesPlaceholdersFormsFormIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PlaceholderResponse[]**](../Model/PlaceholderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4MessagesPlaceholdersGet()`

```php
v4MessagesPlaceholdersGet($continuation_token, $size, $search, $include_disabled, $include_standard, $sort_by_field, $sort_by_order): \OpenAPI\Client\Model\ContinuationTokenResponsePlaceholderResponse
```

Get a list of placeholders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$continuation_token = 'continuation_token_example'; // string
$size = 20; // int
$search = 'search_example'; // string
$include_disabled = True; // bool
$include_standard = True; // bool
$sort_by_field = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PlaceholderSortField(); // \OpenAPI\Client\Model\PlaceholderSortField
$sort_by_order = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\PlaceholderSortOrder(); // \OpenAPI\Client\Model\PlaceholderSortOrder

try {
    $result = $apiInstance->v4MessagesPlaceholdersGet($continuation_token, $size, $search, $include_disabled, $include_standard, $sort_by_field, $sort_by_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->v4MessagesPlaceholdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **continuation_token** | **string**|  | [optional] |
| **size** | **int**|  | [optional] [default to 20] |
| **search** | **string**|  | [optional] |
| **include_disabled** | **bool**|  | [optional] |
| **include_standard** | **bool**|  | [optional] |
| **sort_by_field** | [**\OpenAPI\Client\Model\PlaceholderSortField**](../Model/.md)|  | [optional] |
| **sort_by_order** | [**\OpenAPI\Client\Model\PlaceholderSortOrder**](../Model/.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ContinuationTokenResponsePlaceholderResponse**](../Model/ContinuationTokenResponsePlaceholderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4MessagesPlaceholdersPlaceholderIdGet()`

```php
v4MessagesPlaceholdersPlaceholderIdGet($placeholder_id): \OpenAPI\Client\Model\PlaceholderResponse
```

Get a placeholder by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$placeholder_id = 'placeholder_id_example'; // string

try {
    $result = $apiInstance->v4MessagesPlaceholdersPlaceholderIdGet($placeholder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->v4MessagesPlaceholdersPlaceholderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **placeholder_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\PlaceholderResponse**](../Model/PlaceholderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4MessagesPlaceholdersPlaceholderIdPut()`

```php
v4MessagesPlaceholdersPlaceholderIdPut($placeholder_id, $update_custom_placeholder_request): \OpenAPI\Client\Model\PlaceholderResponse
```

Update a custom placeholder and any of its mappings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$placeholder_id = 'placeholder_id_example'; // string
$update_custom_placeholder_request = new \OpenAPI\Client\Model\UpdateCustomPlaceholderRequest(); // \OpenAPI\Client\Model\UpdateCustomPlaceholderRequest

try {
    $result = $apiInstance->v4MessagesPlaceholdersPlaceholderIdPut($placeholder_id, $update_custom_placeholder_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->v4MessagesPlaceholdersPlaceholderIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **placeholder_id** | **string**|  | |
| **update_custom_placeholder_request** | [**\OpenAPI\Client\Model\UpdateCustomPlaceholderRequest**](../Model/UpdateCustomPlaceholderRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PlaceholderResponse**](../Model/PlaceholderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4MessagesPlaceholdersPost()`

```php
v4MessagesPlaceholdersPost($create_custom_placeholder_request): \OpenAPI\Client\Model\PlaceholderResponse
```

Create a new Custom Placeholder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_custom_placeholder_request = new \OpenAPI\Client\Model\CreateCustomPlaceholderRequest(); // \OpenAPI\Client\Model\CreateCustomPlaceholderRequest

try {
    $result = $apiInstance->v4MessagesPlaceholdersPost($create_custom_placeholder_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->v4MessagesPlaceholdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_custom_placeholder_request** | [**\OpenAPI\Client\Model\CreateCustomPlaceholderRequest**](../Model/CreateCustomPlaceholderRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PlaceholderResponse**](../Model/PlaceholderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4MessagesResponsesTemplatesPost()`

```php
v4MessagesResponsesTemplatesPost($create_response_template_request): \OpenAPI\Client\Model\CreateResponseTemplateResponse
```

Create or update a response template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_response_template_request = new \OpenAPI\Client\Model\CreateResponseTemplateRequest(); // \OpenAPI\Client\Model\CreateResponseTemplateRequest

try {
    $result = $apiInstance->v4MessagesResponsesTemplatesPost($create_response_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->v4MessagesResponsesTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_response_template_request** | [**\OpenAPI\Client\Model\CreateResponseTemplateRequest**](../Model/CreateResponseTemplateRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateResponseTemplateResponse**](../Model/CreateResponseTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
