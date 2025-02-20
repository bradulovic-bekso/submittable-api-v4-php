# OpenAPI\Client\PublicOrganizationsApi

All URIs are relative to https://submittable-api.submittable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v4PublicOrganizationsGet()**](PublicOrganizationsApi.md#v4PublicOrganizationsGet) | **GET** /v4/public-organizations | Get a page of Public Organization Profiles for your organization |
| [**v4PublicOrganizationsSearchAgenciesGet()**](PublicOrganizationsApi.md#v4PublicOrganizationsSearchAgenciesGet) | **GET** /v4/public-organizations/search/agencies | Get all organization search agencies |


## `v4PublicOrganizationsGet()`

```php
v4PublicOrganizationsGet($search_term, $continuation_token, $size): \OpenAPI\Client\Model\ContinuationTokenResponsePublicOrganizationResponse
```

Get a page of Public Organization Profiles for your organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PublicOrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_term = 'search_term_example'; // string
$continuation_token = 'continuation_token_example'; // string
$size = 20; // int

try {
    $result = $apiInstance->v4PublicOrganizationsGet($search_term, $continuation_token, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicOrganizationsApi->v4PublicOrganizationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_term** | **string**|  | [optional] |
| **continuation_token** | **string**|  | [optional] |
| **size** | **int**|  | [optional] [default to 20] |

### Return type

[**\OpenAPI\Client\Model\ContinuationTokenResponsePublicOrganizationResponse**](../Model/ContinuationTokenResponsePublicOrganizationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4PublicOrganizationsSearchAgenciesGet()`

```php
v4PublicOrganizationsSearchAgenciesGet(): \OpenAPI\Client\Model\OrganizationSearchAgency[]
```

Get all organization search agencies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\PublicOrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v4PublicOrganizationsSearchAgenciesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PublicOrganizationsApi->v4PublicOrganizationsSearchAgenciesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\OrganizationSearchAgency[]**](../Model/OrganizationSearchAgency.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
