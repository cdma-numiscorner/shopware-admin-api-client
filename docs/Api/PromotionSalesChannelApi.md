# OpenAPI\ShopwareAdminApiClient\PromotionSalesChannelApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPromotionSalesChannel()**](PromotionSalesChannelApi.md#createPromotionSalesChannel) | **POST** /promotion-sales-channel | Create a new Promotion Sales Channel resources.
[**deletePromotionSalesChannel()**](PromotionSalesChannelApi.md#deletePromotionSalesChannel) | **DELETE** /promotion-sales-channel/{id} | Delete a Promotion Sales Channel resource.
[**getPromotionSalesChannel()**](PromotionSalesChannelApi.md#getPromotionSalesChannel) | **GET** /promotion-sales-channel/{id} | Detailed information about a Promotion Sales Channel resource.
[**getPromotionSalesChannelList()**](PromotionSalesChannelApi.md#getPromotionSalesChannelList) | **GET** /promotion-sales-channel | List with basic information of Promotion Sales Channel resources.
[**updatePromotionSalesChannel()**](PromotionSalesChannelApi.md#updatePromotionSalesChannel) | **PATCH** /promotion-sales-channel/{id} | Partially update information about a Promotion Sales Channel resource.


## `createPromotionSalesChannel()`

```php
createPromotionSalesChannel($_response, $inline_object196): Success
```

Create a new Promotion Sales Channel resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PromotionSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object196 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject196(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject196

try {
    $result = $apiInstance->createPromotionSalesChannel($_response, $inline_object196);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionSalesChannelApi->createPromotionSalesChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object196** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject196**](../Model/InlineObject196.md)|  | [optional]

### Return type

[**Success**](../Model/Success.md)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`, `application/json`
- **Accept**: `application/vnd.api+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePromotionSalesChannel()`

```php
deletePromotionSalesChannel($id, $_response)
```

Delete a Promotion Sales Channel resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PromotionSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the promotion_sales_channel
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deletePromotionSalesChannel($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling PromotionSalesChannelApi->deletePromotionSalesChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the promotion_sales_channel |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromotionSalesChannel()`

```php
getPromotionSalesChannel($id): Success
```

Detailed information about a Promotion Sales Channel resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PromotionSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the promotion_sales_channel

try {
    $result = $apiInstance->getPromotionSalesChannel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionSalesChannelApi->getPromotionSalesChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the promotion_sales_channel |

### Return type

[**Success**](../Model/Success.md)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPromotionSalesChannelList()`

```php
getPromotionSalesChannelList($limit, $page, $query): Success
```

List with basic information of Promotion Sales Channel resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PromotionSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getPromotionSalesChannelList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionSalesChannelApi->getPromotionSalesChannelList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Max amount of resources to be returned in a page | [optional]
 **page** | **int**| The page to be returned | [optional]
 **query** | **string**| Encoded SwagQL in JSON | [optional]

### Return type

[**Success**](../Model/Success.md)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.api+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePromotionSalesChannel()`

```php
updatePromotionSalesChannel($id, $_response, $inline_object197): Success
```

Partially update information about a Promotion Sales Channel resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PromotionSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the promotion_sales_channel
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object197 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject197(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject197

try {
    $result = $apiInstance->updatePromotionSalesChannel($id, $_response, $inline_object197);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionSalesChannelApi->updatePromotionSalesChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the promotion_sales_channel |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object197** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject197**](../Model/InlineObject197.md)|  | [optional]

### Return type

[**Success**](../Model/Success.md)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/vnd.api+json`, `application/json`
- **Accept**: `application/vnd.api+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
