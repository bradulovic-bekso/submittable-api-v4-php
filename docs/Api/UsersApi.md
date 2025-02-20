# Submittable\UsersApi

All URIs are relative to https://submittable-api.submittable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSubmitters()**](UsersApi.md#getSubmitters) | **POST** /v4/users/submissions/submitters | Get submitters for list of submission ids |
| [**v4UsersPermissionsGet()**](UsersApi.md#v4UsersPermissionsGet) | **GET** /v4/users/permissions | Get User Permissions |
| [**v4UsersSubmissionsSubmissionIdSubmitterGet()**](UsersApi.md#v4UsersSubmissionsSubmissionIdSubmitterGet) | **GET** /v4/users/submissions/{submissionId}/submitter | Get submitter |


## `getSubmitters()`

```php
getSubmitters($get_submissions_submitters_request): \Submittable\Model\SubmittersResponse[]
```

Get submitters for list of submission ids

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_submissions_submitters_request = new \Submittable\Model\GetSubmissionsSubmittersRequest(); // \Submittable\Model\GetSubmissionsSubmittersRequest

try {
    $result = $apiInstance->getSubmitters($get_submissions_submitters_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getSubmitters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_submissions_submitters_request** | [**\Submittable\Model\GetSubmissionsSubmittersRequest**](../Model/GetSubmissionsSubmittersRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\SubmittersResponse[]**](../Model/SubmittersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4UsersPermissionsGet()`

```php
v4UsersPermissionsGet(): string[]
```

Get User Permissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v4UsersPermissionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v4UsersPermissionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4UsersSubmissionsSubmissionIdSubmitterGet()`

```php
v4UsersSubmissionsSubmissionIdSubmitterGet($submission_id): \Submittable\Model\SubmitterResponse
```

Get submitter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$submission_id = 'submission_id_example'; // string

try {
    $result = $apiInstance->v4UsersSubmissionsSubmissionIdSubmitterGet($submission_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->v4UsersSubmissionsSubmissionIdSubmitterGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **submission_id** | **string**|  | |

### Return type

[**\Submittable\Model\SubmitterResponse**](../Model/SubmitterResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
