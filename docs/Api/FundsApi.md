# Submittable\FundsApi

All URIs are relative to https://submittable-api.submittable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**v4FundsFundIdDelete()**](FundsApi.md#v4FundsFundIdDelete) | **DELETE** /v4/funds/{fundId} | Delete a fund |
| [**v4FundsFundIdGet()**](FundsApi.md#v4FundsFundIdGet) | **GET** /v4/funds/{fundId} | Get a fund |
| [**v4FundsFundIdPut()**](FundsApi.md#v4FundsFundIdPut) | **PUT** /v4/funds/{fundId} | Update a fund |
| [**v4FundsGet()**](FundsApi.md#v4FundsGet) | **GET** /v4/funds | Get a page of funds |
| [**v4FundsPost()**](FundsApi.md#v4FundsPost) | **POST** /v4/funds | Create a fund |
| [**v4TransactionsGet()**](FundsApi.md#v4TransactionsGet) | **GET** /v4/transactions | Get a page of transactions |
| [**v4TransactionsPost()**](FundsApi.md#v4TransactionsPost) | **POST** /v4/transactions | Create a transaction |
| [**v4TransactionsTransactionIdDelete()**](FundsApi.md#v4TransactionsTransactionIdDelete) | **DELETE** /v4/transactions/{transactionId} | Delete a transaction by id |
| [**v4TransactionsTransactionIdGet()**](FundsApi.md#v4TransactionsTransactionIdGet) | **GET** /v4/transactions/{transactionId} | Get a transaction by id |
| [**v4TransactionsTransactionIdPut()**](FundsApi.md#v4TransactionsTransactionIdPut) | **PUT** /v4/transactions/{transactionId} | Update a transaction by id |
| [**v4TransactionsTransactionIdSendPost()**](FundsApi.md#v4TransactionsTransactionIdSendPost) | **POST** /v4/transactions/{transactionId}/send | Send funds |


## `v4FundsFundIdDelete()`

```php
v4FundsFundIdDelete($fund_id)
```

Delete a fund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\FundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fund_id = 'fund_id_example'; // string

try {
    $apiInstance->v4FundsFundIdDelete($fund_id);
} catch (Exception $e) {
    echo 'Exception when calling FundsApi->v4FundsFundIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fund_id** | **string**|  | |

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

## `v4FundsFundIdGet()`

```php
v4FundsFundIdGet($fund_id): \Submittable\Model\FundResponse
```

Get a fund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\FundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fund_id = 'fund_id_example'; // string

try {
    $result = $apiInstance->v4FundsFundIdGet($fund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundsApi->v4FundsFundIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fund_id** | **string**|  | |

### Return type

[**\Submittable\Model\FundResponse**](../Model/FundResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4FundsFundIdPut()`

```php
v4FundsFundIdPut($fund_id, $update_fund_request): \Submittable\Model\FundResponse
```

Update a fund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\FundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fund_id = 'fund_id_example'; // string
$update_fund_request = new \Submittable\Model\UpdateFundRequest(); // \Submittable\Model\UpdateFundRequest

try {
    $result = $apiInstance->v4FundsFundIdPut($fund_id, $update_fund_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundsApi->v4FundsFundIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fund_id** | **string**|  | |
| **update_fund_request** | [**\Submittable\Model\UpdateFundRequest**](../Model/UpdateFundRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\FundResponse**](../Model/FundResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4FundsGet()`

```php
v4FundsGet($continuation_token, $size): \Submittable\Model\ContinuationTokenResponseFundResponse
```

Get a page of funds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\FundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$continuation_token = 'continuation_token_example'; // string
$size = 20; // int

try {
    $result = $apiInstance->v4FundsGet($continuation_token, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundsApi->v4FundsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **continuation_token** | **string**|  | [optional] |
| **size** | **int**|  | [optional] [default to 20] |

### Return type

[**\Submittable\Model\ContinuationTokenResponseFundResponse**](../Model/ContinuationTokenResponseFundResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4FundsPost()`

```php
v4FundsPost($create_fund_request): \Submittable\Model\FundResponse
```

Create a fund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\FundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_fund_request = new \Submittable\Model\CreateFundRequest(); // \Submittable\Model\CreateFundRequest

try {
    $result = $apiInstance->v4FundsPost($create_fund_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundsApi->v4FundsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_fund_request** | [**\Submittable\Model\CreateFundRequest**](../Model/CreateFundRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\FundResponse**](../Model/FundResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4TransactionsGet()`

```php
v4TransactionsGet($continuation_token, $size, $fund_id, $status, $start_date, $end_date, $submitter_id, $submission_id, $public_organization_id): \Submittable\Model\ContinuationTokenResponseTransactionResponse
```

Get a page of transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\FundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$continuation_token = 'continuation_token_example'; // string
$size = 20; // int
$fund_id = 'fund_id_example'; // string
$status = 'status_example'; // string
$start_date = 'start_date_example'; // string
$end_date = 'end_date_example'; // string
$submitter_id = 'submitter_id_example'; // string
$submission_id = 'submission_id_example'; // string
$public_organization_id = 'public_organization_id_example'; // string

try {
    $result = $apiInstance->v4TransactionsGet($continuation_token, $size, $fund_id, $status, $start_date, $end_date, $submitter_id, $submission_id, $public_organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundsApi->v4TransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **continuation_token** | **string**|  | [optional] |
| **size** | **int**|  | [optional] [default to 20] |
| **fund_id** | **string**|  | [optional] |
| **status** | **string**|  | [optional] |
| **start_date** | **string**|  | [optional] |
| **end_date** | **string**|  | [optional] |
| **submitter_id** | **string**|  | [optional] |
| **submission_id** | **string**|  | [optional] |
| **public_organization_id** | **string**|  | [optional] |

### Return type

[**\Submittable\Model\ContinuationTokenResponseTransactionResponse**](../Model/ContinuationTokenResponseTransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4TransactionsPost()`

```php
v4TransactionsPost($v4_transactions_post_request): \Submittable\Model\TransactionResponse
```

Create a transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\FundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$v4_transactions_post_request = new \Submittable\Model\V4TransactionsPostRequest(); // \Submittable\Model\V4TransactionsPostRequest

try {
    $result = $apiInstance->v4TransactionsPost($v4_transactions_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundsApi->v4TransactionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **v4_transactions_post_request** | [**\Submittable\Model\V4TransactionsPostRequest**](../Model/V4TransactionsPostRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4TransactionsTransactionIdDelete()`

```php
v4TransactionsTransactionIdDelete($transaction_id, $delete_transaction_request)
```

Delete a transaction by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\FundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = 'transaction_id_example'; // string
$delete_transaction_request = new \Submittable\Model\DeleteTransactionRequest(); // \Submittable\Model\DeleteTransactionRequest

try {
    $apiInstance->v4TransactionsTransactionIdDelete($transaction_id, $delete_transaction_request);
} catch (Exception $e) {
    echo 'Exception when calling FundsApi->v4TransactionsTransactionIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**|  | |
| **delete_transaction_request** | [**\Submittable\Model\DeleteTransactionRequest**](../Model/DeleteTransactionRequest.md)|  | [optional] |

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

## `v4TransactionsTransactionIdGet()`

```php
v4TransactionsTransactionIdGet($transaction_id): \Submittable\Model\TransactionResponse
```

Get a transaction by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\FundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = 'transaction_id_example'; // string

try {
    $result = $apiInstance->v4TransactionsTransactionIdGet($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundsApi->v4TransactionsTransactionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**|  | |

### Return type

[**\Submittable\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4TransactionsTransactionIdPut()`

```php
v4TransactionsTransactionIdPut($transaction_id, $update_transaction_request): \Submittable\Model\TransactionResponse
```

Update a transaction by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\FundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = 'transaction_id_example'; // string
$update_transaction_request = new \Submittable\Model\UpdateTransactionRequest(); // \Submittable\Model\UpdateTransactionRequest

try {
    $result = $apiInstance->v4TransactionsTransactionIdPut($transaction_id, $update_transaction_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundsApi->v4TransactionsTransactionIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**|  | |
| **update_transaction_request** | [**\Submittable\Model\UpdateTransactionRequest**](../Model/UpdateTransactionRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4TransactionsTransactionIdSendPost()`

```php
v4TransactionsTransactionIdSendPost($transaction_id, $send_funds_request): \Submittable\Model\TransactionResponse
```

Send funds

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\FundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = 'transaction_id_example'; // string
$send_funds_request = new \Submittable\Model\SendFundsRequest(); // \Submittable\Model\SendFundsRequest

try {
    $result = $apiInstance->v4TransactionsTransactionIdSendPost($transaction_id, $send_funds_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FundsApi->v4TransactionsTransactionIdSendPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**|  | |
| **send_funds_request** | [**\Submittable\Model\SendFundsRequest**](../Model/SendFundsRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\TransactionResponse**](../Model/TransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
