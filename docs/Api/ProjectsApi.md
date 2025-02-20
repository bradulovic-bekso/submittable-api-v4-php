# OpenAPI\Client\ProjectsApi

All URIs are relative to https://submittable-api.submittable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProject()**](ProjectsApi.md#getProject) | **GET** /v4/projects/{projectId} | Get a project |
| [**v4ProjectsDuplicatePost()**](ProjectsApi.md#v4ProjectsDuplicatePost) | **POST** /v4/projects/duplicate | Duplicate a project |
| [**v4ProjectsGet()**](ProjectsApi.md#v4ProjectsGet) | **GET** /v4/projects | Get a page of projects |
| [**v4ProjectsPost()**](ProjectsApi.md#v4ProjectsPost) | **POST** /v4/projects | Create a project |
| [**v4ProjectsProjectIdPut()**](ProjectsApi.md#v4ProjectsProjectIdPut) | **PUT** /v4/projects/{projectId} | Update a project |


## `getProject()`

```php
getProject($project_id): \OpenAPI\Client\Model\ProjectResponse
```

Get a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string

try {
    $result = $apiInstance->getProject($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->getProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ProjectResponse**](../Model/ProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4ProjectsDuplicatePost()`

```php
v4ProjectsDuplicatePost($duplicate_project_request): string
```

Duplicate a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$duplicate_project_request = new \OpenAPI\Client\Model\DuplicateProjectRequest(); // \OpenAPI\Client\Model\DuplicateProjectRequest

try {
    $result = $apiInstance->v4ProjectsDuplicatePost($duplicate_project_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->v4ProjectsDuplicatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **duplicate_project_request** | [**\OpenAPI\Client\Model\DuplicateProjectRequest**](../Model/DuplicateProjectRequest.md)|  | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4ProjectsGet()`

```php
v4ProjectsGet($continuation_token, $size): \OpenAPI\Client\Model\ContinuationTokenResponseListProjectResponse
```

Get a page of projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$continuation_token = 'continuation_token_example'; // string
$size = 20; // int

try {
    $result = $apiInstance->v4ProjectsGet($continuation_token, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->v4ProjectsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **continuation_token** | **string**|  | [optional] |
| **size** | **int**|  | [optional] [default to 20] |

### Return type

[**\OpenAPI\Client\Model\ContinuationTokenResponseListProjectResponse**](../Model/ContinuationTokenResponseListProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4ProjectsPost()`

```php
v4ProjectsPost($create_project_request): \OpenAPI\Client\Model\ProjectResponse
```

Create a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_project_request = new \OpenAPI\Client\Model\CreateProjectRequest(); // \OpenAPI\Client\Model\CreateProjectRequest

try {
    $result = $apiInstance->v4ProjectsPost($create_project_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->v4ProjectsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_project_request** | [**\OpenAPI\Client\Model\CreateProjectRequest**](../Model/CreateProjectRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectResponse**](../Model/ProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4ProjectsProjectIdPut()`

```php
v4ProjectsProjectIdPut($project_id, $update_project_request): \OpenAPI\Client\Model\ProjectResponse
```

Update a project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$project_id = 'project_id_example'; // string
$update_project_request = new \OpenAPI\Client\Model\UpdateProjectRequest(); // \OpenAPI\Client\Model\UpdateProjectRequest

try {
    $result = $apiInstance->v4ProjectsProjectIdPut($project_id, $update_project_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->v4ProjectsProjectIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **project_id** | **string**|  | |
| **update_project_request** | [**\OpenAPI\Client\Model\UpdateProjectRequest**](../Model/UpdateProjectRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProjectResponse**](../Model/ProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
