# Submittable\LabelsApi

All URIs are relative to https://submittable-api.submittable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v4LabelsGet()**](LabelsApi.md#v4LabelsGet) | **GET** /v4/labels | Get a page of labels |
| [**v4LabelsLabelIdDelete()**](LabelsApi.md#v4LabelsLabelIdDelete) | **DELETE** /v4/labels/{labelId} | Delete a label |
| [**v4LabelsLabelIdGet()**](LabelsApi.md#v4LabelsLabelIdGet) | **GET** /v4/labels/{labelId} | Get a label |
| [**v4LabelsLabelIdPut()**](LabelsApi.md#v4LabelsLabelIdPut) | **PUT** /v4/labels/{labelId} | Update a label |
| [**v4LabelsListPost()**](LabelsApi.md#v4LabelsListPost) | **POST** /v4/labels/list | Get a list of labels |
| [**v4LabelsMetadataGet()**](LabelsApi.md#v4LabelsMetadataGet) | **GET** /v4/labels/metadata | Get Label MetaData |
| [**v4LabelsPost()**](LabelsApi.md#v4LabelsPost) | **POST** /v4/labels | Create a label |
| [**v4LabelsRemoveLabelIdDelete()**](LabelsApi.md#v4LabelsRemoveLabelIdDelete) | **DELETE** /v4/labels/remove/{labelId} | Remove a label from Submissions |


## `v4LabelsGet()`

```php
v4LabelsGet($continuation_token, $size): \Submittable\Model\ContinuationTokenResponseLabelResponse
```

Get a page of labels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$continuation_token = 'continuation_token_example'; // string
$size = 20; // int

try {
    $result = $apiInstance->v4LabelsGet($continuation_token, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->v4LabelsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **continuation_token** | **string**|  | [optional] |
| **size** | **int**|  | [optional] [default to 20] |

### Return type

[**\Submittable\Model\ContinuationTokenResponseLabelResponse**](../Model/ContinuationTokenResponseLabelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4LabelsLabelIdDelete()`

```php
v4LabelsLabelIdDelete($label_id)
```

Delete a label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$label_id = 'label_id_example'; // string

try {
    $apiInstance->v4LabelsLabelIdDelete($label_id);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->v4LabelsLabelIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `v4LabelsLabelIdGet()`

```php
v4LabelsLabelIdGet($label_id): \Submittable\Model\LabelResponse
```

Get a label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$label_id = 'label_id_example'; // string

try {
    $result = $apiInstance->v4LabelsLabelIdGet($label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->v4LabelsLabelIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **label_id** | **string**|  | |

### Return type

[**\Submittable\Model\LabelResponse**](../Model/LabelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4LabelsLabelIdPut()`

```php
v4LabelsLabelIdPut($label_id, $update_label_request): \Submittable\Model\LabelResponse
```

Update a label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$label_id = 'label_id_example'; // string
$update_label_request = new \Submittable\Model\UpdateLabelRequest(); // \Submittable\Model\UpdateLabelRequest

try {
    $result = $apiInstance->v4LabelsLabelIdPut($label_id, $update_label_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->v4LabelsLabelIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **label_id** | **string**|  | |
| **update_label_request** | [**\Submittable\Model\UpdateLabelRequest**](../Model/UpdateLabelRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\LabelResponse**](../Model/LabelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4LabelsListPost()`

```php
v4LabelsListPost($get_labels_request): \Submittable\Model\LabelResponse[]
```

Get a list of labels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_labels_request = new \Submittable\Model\GetLabelsRequest(); // \Submittable\Model\GetLabelsRequest

try {
    $result = $apiInstance->v4LabelsListPost($get_labels_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->v4LabelsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_labels_request** | [**\Submittable\Model\GetLabelsRequest**](../Model/GetLabelsRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\LabelResponse[]**](../Model/LabelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4LabelsMetadataGet()`

```php
v4LabelsMetadataGet()
```

Get Label MetaData

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->v4LabelsMetadataGet();
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->v4LabelsMetadataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `v4LabelsPost()`

```php
v4LabelsPost($create_label_request): \Submittable\Model\LabelResponse
```

Create a label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_label_request = new \Submittable\Model\CreateLabelRequest(); // \Submittable\Model\CreateLabelRequest

try {
    $result = $apiInstance->v4LabelsPost($create_label_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->v4LabelsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_label_request** | [**\Submittable\Model\CreateLabelRequest**](../Model/CreateLabelRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\LabelResponse**](../Model/LabelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4LabelsRemoveLabelIdDelete()`

```php
v4LabelsRemoveLabelIdDelete($label_id)
```

Remove a label from Submissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\LabelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$label_id = 'label_id_example'; // string

try {
    $apiInstance->v4LabelsRemoveLabelIdDelete($label_id);
} catch (Exception $e) {
    echo 'Exception when calling LabelsApi->v4LabelsRemoveLabelIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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
