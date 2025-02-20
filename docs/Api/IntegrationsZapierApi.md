# OpenAPI\Client\IntegrationsZapierApi

All URIs are relative to https://submittable-api.submittable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v4ZapierSubscribePost()**](IntegrationsZapierApi.md#v4ZapierSubscribePost) | **POST** /v4/zapier/subscribe | Add a Zapier Subscription Entry |
| [**v4ZapierUnsubscribePost()**](IntegrationsZapierApi.md#v4ZapierUnsubscribePost) | **POST** /v4/zapier/unsubscribe | Mark a Zapier Subscription as Deleted |


## `v4ZapierSubscribePost()`

```php
v4ZapierSubscribePost($zapier_subscription_request): string
```

Add a Zapier Subscription Entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IntegrationsZapierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zapier_subscription_request = new \OpenAPI\Client\Model\ZapierSubscriptionRequest(); // \OpenAPI\Client\Model\ZapierSubscriptionRequest

try {
    $result = $apiInstance->v4ZapierSubscribePost($zapier_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsZapierApi->v4ZapierSubscribePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zapier_subscription_request** | [**\OpenAPI\Client\Model\ZapierSubscriptionRequest**](../Model/ZapierSubscriptionRequest.md)|  | [optional] |

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

## `v4ZapierUnsubscribePost()`

```php
v4ZapierUnsubscribePost($zapier_unsubscribe_request)
```

Mark a Zapier Subscription as Deleted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\IntegrationsZapierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zapier_unsubscribe_request = new \OpenAPI\Client\Model\ZapierUnsubscribeRequest(); // \OpenAPI\Client\Model\ZapierUnsubscribeRequest

try {
    $apiInstance->v4ZapierUnsubscribePost($zapier_unsubscribe_request);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationsZapierApi->v4ZapierUnsubscribePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zapier_unsubscribe_request** | [**\OpenAPI\Client\Model\ZapierUnsubscribeRequest**](../Model/ZapierUnsubscribeRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
