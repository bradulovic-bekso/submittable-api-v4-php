# Submittable\IntegrationsDocuSignApi

All URIs are relative to https://submittable-api.submittable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v4DocusignPlaceholdersPost()**](IntegrationsDocuSignApi.md#v4DocusignPlaceholdersPost) | **POST** /v4/docusign/placeholders | Create Placeholders in Docusign |


## `v4DocusignPlaceholdersPost()`

```php
v4DocusignPlaceholdersPost($sync_placeholders_request): \Submittable\Model\SyncPlaceholdersResponse[]
```

Create Placeholders in Docusign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\IntegrationsDocuSignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sync_placeholders_request = array(new \Submittable\Model\SyncPlaceholdersRequest()); // \Submittable\Model\SyncPlaceholdersRequest[]

try {
    $result = $apiInstance->v4DocusignPlaceholdersPost($sync_placeholders_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsDocuSignApi->v4DocusignPlaceholdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sync_placeholders_request** | [**\Submittable\Model\SyncPlaceholdersRequest[]**](../Model/SyncPlaceholdersRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\SyncPlaceholdersResponse[]**](../Model/SyncPlaceholdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
