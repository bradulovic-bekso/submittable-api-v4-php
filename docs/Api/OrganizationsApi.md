# Submittable\OrganizationsApi

All URIs are relative to https://submittable-api.submittable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOrganizationFeatures()**](OrganizationsApi.md#getOrganizationFeatures) | **GET** /v4/organizations/features | Get organization&#39;s features |
| [**v4OrganizationsBillingGet()**](OrganizationsApi.md#v4OrganizationsBillingGet) | **GET** /v4/organizations/billing | Get billing information for organization |
| [**v4OrganizationsBillingPost()**](OrganizationsApi.md#v4OrganizationsBillingPost) | **POST** /v4/organizations/billing | Create billing information for organization |
| [**v4OrganizationsBillingPut()**](OrganizationsApi.md#v4OrganizationsBillingPut) | **PUT** /v4/organizations/billing | Update billing information for organization |
| [**v4OrganizationsCustomdataCustomDataRecordIdPatch()**](OrganizationsApi.md#v4OrganizationsCustomdataCustomDataRecordIdPatch) | **PATCH** /v4/organizations/customdata/{customDataRecordId} | Update a Organization&#39;s Public Organization Custom Data Record |
| [**v4OrganizationsCustomdataLabelsGet()**](OrganizationsApi.md#v4OrganizationsCustomdataLabelsGet) | **GET** /v4/organizations/customdata/labels | Get a list of Custom Data Labels |
| [**v4OrganizationsCustomdataPost()**](OrganizationsApi.md#v4OrganizationsCustomdataPost) | **POST** /v4/organizations/customdata | Bulk Create an organization&#39;s Public Organizations custom data |
| [**v4OrganizationsCustomdataPublicOrgIdGet()**](OrganizationsApi.md#v4OrganizationsCustomdataPublicOrgIdGet) | **GET** /v4/organizations/customdata/{publicOrgId} | Get a Public Organization&#39;s Custom Data Record |
| [**v4OrganizationsGet()**](OrganizationsApi.md#v4OrganizationsGet) | **GET** /v4/organizations | Get organization info |
| [**v4OrganizationsGuidGet()**](OrganizationsApi.md#v4OrganizationsGuidGet) | **GET** /v4/organizations/guid | Get the organization guid |
| [**v4OrganizationsStaffGroupsListGet()**](OrganizationsApi.md#v4OrganizationsStaffGroupsListGet) | **GET** /v4/organizations/staffGroups/list | List staff groups |
| [**v4OrganizationsStaffGroupsPost()**](OrganizationsApi.md#v4OrganizationsStaffGroupsPost) | **POST** /v4/organizations/staffGroups | Create staff group |
| [**v4OrganizationsStaffGroupsStaffGroupIdDelete()**](OrganizationsApi.md#v4OrganizationsStaffGroupsStaffGroupIdDelete) | **DELETE** /v4/organizations/staffGroups/{staffGroupId} | Delete staff group |
| [**v4OrganizationsStaffGroupsStaffGroupIdPut()**](OrganizationsApi.md#v4OrganizationsStaffGroupsStaffGroupIdPut) | **PUT** /v4/organizations/staffGroups/{staffGroupId} | Update staff group |
| [**v4OrganizationsTeamDelete()**](OrganizationsApi.md#v4OrganizationsTeamDelete) | **DELETE** /v4/organizations/team | Remove Team Members from an Organization |
| [**v4OrganizationsTeamGet()**](OrganizationsApi.md#v4OrganizationsTeamGet) | **GET** /v4/organizations/team | Get team members |
| [**v4OrganizationsTeamInvitesDeletePost()**](OrganizationsApi.md#v4OrganizationsTeamInvitesDeletePost) | **POST** /v4/organizations/team/invites/delete | Remove any unaccepted staff invites for the given emails |
| [**v4OrganizationsTeamInvitesGet()**](OrganizationsApi.md#v4OrganizationsTeamInvitesGet) | **GET** /v4/organizations/team/invites | Get list of team invites |
| [**v4OrganizationsTeamInvitesResendPost()**](OrganizationsApi.md#v4OrganizationsTeamInvitesResendPost) | **POST** /v4/organizations/team/invites/resend | Resend any unaccepted staff invites for the ids |
| [**v4OrganizationsTeamListPost()**](OrganizationsApi.md#v4OrganizationsTeamListPost) | **POST** /v4/organizations/team/list | Get a list of team members |
| [**v4OrganizationsTeamPatch()**](OrganizationsApi.md#v4OrganizationsTeamPatch) | **PATCH** /v4/organizations/team | Updates Team Members |
| [**v4OrganizationsTeamPost()**](OrganizationsApi.md#v4OrganizationsTeamPost) | **POST** /v4/organizations/team | Add Team Members to Organization |


## `getOrganizationFeatures()`

```php
getOrganizationFeatures(): \Submittable\Model\OrganizationFeatures
```

Get organization's features

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getOrganizationFeatures();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Submittable\Model\OrganizationFeatures**](../Model/OrganizationFeatures.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsBillingGet()`

```php
v4OrganizationsBillingGet(): \Submittable\Model\GetOrganizationBillingInfoResponse
```

Get billing information for organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v4OrganizationsBillingGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsBillingGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Submittable\Model\GetOrganizationBillingInfoResponse**](../Model/GetOrganizationBillingInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsBillingPost()`

```php
v4OrganizationsBillingPost($create_organization_billing_info_request): \Submittable\Model\OrganizationBillingInfoResponse
```

Create billing information for organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_organization_billing_info_request = new \Submittable\Model\CreateOrganizationBillingInfoRequest(); // \Submittable\Model\CreateOrganizationBillingInfoRequest

try {
    $result = $apiInstance->v4OrganizationsBillingPost($create_organization_billing_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsBillingPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_organization_billing_info_request** | [**\Submittable\Model\CreateOrganizationBillingInfoRequest**](../Model/CreateOrganizationBillingInfoRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\OrganizationBillingInfoResponse**](../Model/OrganizationBillingInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsBillingPut()`

```php
v4OrganizationsBillingPut($update_organization_billing_info_request): \Submittable\Model\OrganizationBillingInfoResponse
```

Update billing information for organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_organization_billing_info_request = new \Submittable\Model\UpdateOrganizationBillingInfoRequest(); // \Submittable\Model\UpdateOrganizationBillingInfoRequest

try {
    $result = $apiInstance->v4OrganizationsBillingPut($update_organization_billing_info_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsBillingPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_organization_billing_info_request** | [**\Submittable\Model\UpdateOrganizationBillingInfoRequest**](../Model/UpdateOrganizationBillingInfoRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\OrganizationBillingInfoResponse**](../Model/OrganizationBillingInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsCustomdataCustomDataRecordIdPatch()`

```php
v4OrganizationsCustomdataCustomDataRecordIdPatch($custom_data_record_id, $custom_data_record_request): \Submittable\Model\PublicOrganizationCustomData
```

Update a Organization's Public Organization Custom Data Record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_data_record_id = 'custom_data_record_id_example'; // string
$custom_data_record_request = new \Submittable\Model\CustomDataRecordRequest(); // \Submittable\Model\CustomDataRecordRequest

try {
    $result = $apiInstance->v4OrganizationsCustomdataCustomDataRecordIdPatch($custom_data_record_id, $custom_data_record_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsCustomdataCustomDataRecordIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_data_record_id** | **string**|  | |
| **custom_data_record_request** | [**\Submittable\Model\CustomDataRecordRequest**](../Model/CustomDataRecordRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\PublicOrganizationCustomData**](../Model/PublicOrganizationCustomData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsCustomdataLabelsGet()`

```php
v4OrganizationsCustomdataLabelsGet(): \Submittable\Model\CustomDataLabelsResponse
```

Get a list of Custom Data Labels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v4OrganizationsCustomdataLabelsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsCustomdataLabelsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Submittable\Model\CustomDataLabelsResponse**](../Model/CustomDataLabelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsCustomdataPost()`

```php
v4OrganizationsCustomdataPost($custom_data_record_request): \Submittable\Model\OrganizationCustomDataBulk
```

Bulk Create an organization's Public Organizations custom data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_data_record_request = array(new \Submittable\Model\CustomDataRecordRequest()); // \Submittable\Model\CustomDataRecordRequest[]

try {
    $result = $apiInstance->v4OrganizationsCustomdataPost($custom_data_record_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsCustomdataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **custom_data_record_request** | [**\Submittable\Model\CustomDataRecordRequest[]**](../Model/CustomDataRecordRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\OrganizationCustomDataBulk**](../Model/OrganizationCustomDataBulk.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsCustomdataPublicOrgIdGet()`

```php
v4OrganizationsCustomdataPublicOrgIdGet($public_org_id): \Submittable\Model\PublicOrganizationCustomData
```

Get a Public Organization's Custom Data Record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$public_org_id = 'public_org_id_example'; // string

try {
    $result = $apiInstance->v4OrganizationsCustomdataPublicOrgIdGet($public_org_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsCustomdataPublicOrgIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **public_org_id** | **string**|  | |

### Return type

[**\Submittable\Model\PublicOrganizationCustomData**](../Model/PublicOrganizationCustomData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsGet()`

```php
v4OrganizationsGet(): \Submittable\Model\OrganizationResponse
```

Get organization info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v4OrganizationsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Submittable\Model\OrganizationResponse**](../Model/OrganizationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsGuidGet()`

```php
v4OrganizationsGuidGet(): string
```

Get the organization guid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v4OrganizationsGuidGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsGuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsStaffGroupsListGet()`

```php
v4OrganizationsStaffGroupsListGet($continuation_token, $size): \Submittable\Model\ContinuationTokenResponseStaffGroupResponse
```

List staff groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$continuation_token = 'continuation_token_example'; // string
$size = 20; // int

try {
    $result = $apiInstance->v4OrganizationsStaffGroupsListGet($continuation_token, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsStaffGroupsListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **continuation_token** | **string**|  | [optional] |
| **size** | **int**|  | [optional] [default to 20] |

### Return type

[**\Submittable\Model\ContinuationTokenResponseStaffGroupResponse**](../Model/ContinuationTokenResponseStaffGroupResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsStaffGroupsPost()`

```php
v4OrganizationsStaffGroupsPost($staff_group_request): \Submittable\Model\StaffGroupResponse
```

Create staff group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$staff_group_request = new \Submittable\Model\StaffGroupRequest(); // \Submittable\Model\StaffGroupRequest

try {
    $result = $apiInstance->v4OrganizationsStaffGroupsPost($staff_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsStaffGroupsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **staff_group_request** | [**\Submittable\Model\StaffGroupRequest**](../Model/StaffGroupRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\StaffGroupResponse**](../Model/StaffGroupResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsStaffGroupsStaffGroupIdDelete()`

```php
v4OrganizationsStaffGroupsStaffGroupIdDelete($staff_group_id)
```

Delete staff group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$staff_group_id = 'staff_group_id_example'; // string

try {
    $apiInstance->v4OrganizationsStaffGroupsStaffGroupIdDelete($staff_group_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsStaffGroupsStaffGroupIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **staff_group_id** | **string**|  | |

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

## `v4OrganizationsStaffGroupsStaffGroupIdPut()`

```php
v4OrganizationsStaffGroupsStaffGroupIdPut($staff_group_id, $staff_group_request): \Submittable\Model\StaffGroupResponse
```

Update staff group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$staff_group_id = 'staff_group_id_example'; // string
$staff_group_request = new \Submittable\Model\StaffGroupRequest(); // \Submittable\Model\StaffGroupRequest

try {
    $result = $apiInstance->v4OrganizationsStaffGroupsStaffGroupIdPut($staff_group_id, $staff_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsStaffGroupsStaffGroupIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **staff_group_id** | **string**|  | |
| **staff_group_request** | [**\Submittable\Model\StaffGroupRequest**](../Model/StaffGroupRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\StaffGroupResponse**](../Model/StaffGroupResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsTeamDelete()`

```php
v4OrganizationsTeamDelete($user_id)
```

Remove Team Members from an Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = array('user_id_example'); // string[]

try {
    $apiInstance->v4OrganizationsTeamDelete($user_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsTeamDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | [**string[]**](../Model/string.md)|  | [optional] |

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

## `v4OrganizationsTeamGet()`

```php
v4OrganizationsTeamGet(): \Submittable\Model\GetTeamMembersResponse
```

Get team members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v4OrganizationsTeamGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsTeamGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Submittable\Model\GetTeamMembersResponse**](../Model/GetTeamMembersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsTeamInvitesDeletePost()`

```php
v4OrganizationsTeamInvitesDeletePost($remove_staff_invite_request)
```

Remove any unaccepted staff invites for the given emails

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$remove_staff_invite_request = new \Submittable\Model\RemoveStaffInviteRequest(); // \Submittable\Model\RemoveStaffInviteRequest

try {
    $apiInstance->v4OrganizationsTeamInvitesDeletePost($remove_staff_invite_request);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsTeamInvitesDeletePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **remove_staff_invite_request** | [**\Submittable\Model\RemoveStaffInviteRequest**](../Model/RemoveStaffInviteRequest.md)|  | [optional] |

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

## `v4OrganizationsTeamInvitesGet()`

```php
v4OrganizationsTeamInvitesGet(): \Submittable\Model\TeamInviteResponse[]
```

Get list of team invites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->v4OrganizationsTeamInvitesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsTeamInvitesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Submittable\Model\TeamInviteResponse[]**](../Model/TeamInviteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsTeamInvitesResendPost()`

```php
v4OrganizationsTeamInvitesResendPost($resend_staff_invites_request)
```

Resend any unaccepted staff invites for the ids

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resend_staff_invites_request = new \Submittable\Model\ResendStaffInvitesRequest(); // \Submittable\Model\ResendStaffInvitesRequest

try {
    $apiInstance->v4OrganizationsTeamInvitesResendPost($resend_staff_invites_request);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsTeamInvitesResendPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resend_staff_invites_request** | [**\Submittable\Model\ResendStaffInvitesRequest**](../Model/ResendStaffInvitesRequest.md)|  | [optional] |

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

## `v4OrganizationsTeamListPost()`

```php
v4OrganizationsTeamListPost($get_team_members_request): \Submittable\Model\TeamMemberResponse[]
```

Get a list of team members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_team_members_request = new \Submittable\Model\GetTeamMembersRequest(); // \Submittable\Model\GetTeamMembersRequest

try {
    $result = $apiInstance->v4OrganizationsTeamListPost($get_team_members_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsTeamListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_team_members_request** | [**\Submittable\Model\GetTeamMembersRequest**](../Model/GetTeamMembersRequest.md)|  | [optional] |

### Return type

[**\Submittable\Model\TeamMemberResponse[]**](../Model/TeamMemberResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `v4OrganizationsTeamPatch()`

```php
v4OrganizationsTeamPatch($update_team_members_request)
```

Updates Team Members

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_team_members_request = new \Submittable\Model\UpdateTeamMembersRequest(); // \Submittable\Model\UpdateTeamMembersRequest

try {
    $apiInstance->v4OrganizationsTeamPatch($update_team_members_request);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsTeamPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_team_members_request** | [**\Submittable\Model\UpdateTeamMembersRequest**](../Model/UpdateTeamMembersRequest.md)|  | [optional] |

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

## `v4OrganizationsTeamPost()`

```php
v4OrganizationsTeamPost($add_team_members_request)
```

Add Team Members to Organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Submittable\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$add_team_members_request = new \Submittable\Model\AddTeamMembersRequest(); // \Submittable\Model\AddTeamMembersRequest

try {
    $apiInstance->v4OrganizationsTeamPost($add_team_members_request);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->v4OrganizationsTeamPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_team_members_request** | [**\Submittable\Model\AddTeamMembersRequest**](../Model/AddTeamMembersRequest.md)|  | [optional] |

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
