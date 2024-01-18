# OpenAPI\ShopwareAdminApiClient\SalesChannelAnalyticsApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSalesChannelAnalytics()**](SalesChannelAnalyticsApi.md#createSalesChannelAnalytics) | **POST** /sales-channel-analytics | Create a new Sales Channel Analytics resources.
[**deleteSalesChannelAnalytics()**](SalesChannelAnalyticsApi.md#deleteSalesChannelAnalytics) | **DELETE** /sales-channel-analytics/{id} | Delete a Sales Channel Analytics resource.
[**getSalesChannelAnalytics()**](SalesChannelAnalyticsApi.md#getSalesChannelAnalytics) | **GET** /sales-channel-analytics/{id} | Detailed information about a Sales Channel Analytics resource.
[**getSalesChannelAnalyticsList()**](SalesChannelAnalyticsApi.md#getSalesChannelAnalyticsList) | **GET** /sales-channel-analytics | List with basic information of Sales Channel Analytics resources.
[**updateSalesChannelAnalytics()**](SalesChannelAnalyticsApi.md#updateSalesChannelAnalytics) | **PATCH** /sales-channel-analytics/{id} | Partially update information about a Sales Channel Analytics resource.


## `createSalesChannelAnalytics()`

```php
createSalesChannelAnalytics($_response, $inline_object210): Success
```

Create a new Sales Channel Analytics resources.

Available since: 6.2.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\SalesChannelAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object210 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject210(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject210

try {
    $result = $apiInstance->createSalesChannelAnalytics($_response, $inline_object210);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelAnalyticsApi->createSalesChannelAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object210** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject210**](../Model/InlineObject210.md)|  | [optional]

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

## `deleteSalesChannelAnalytics()`

```php
deleteSalesChannelAnalytics($id, $_response)
```

Delete a Sales Channel Analytics resource.

Available since: 6.2.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\SalesChannelAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the sales_channel_analytics
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSalesChannelAnalytics($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelAnalyticsApi->deleteSalesChannelAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the sales_channel_analytics |
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

## `getSalesChannelAnalytics()`

```php
getSalesChannelAnalytics($id): Success
```

Detailed information about a Sales Channel Analytics resource.

Available since: 6.2.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\SalesChannelAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the sales_channel_analytics

try {
    $result = $apiInstance->getSalesChannelAnalytics($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelAnalyticsApi->getSalesChannelAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the sales_channel_analytics |

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

## `getSalesChannelAnalyticsList()`

```php
getSalesChannelAnalyticsList($limit, $page, $query): Success
```

List with basic information of Sales Channel Analytics resources.

Available since: 6.2.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\SalesChannelAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSalesChannelAnalyticsList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelAnalyticsApi->getSalesChannelAnalyticsList: ', $e->getMessage(), PHP_EOL;
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

## `updateSalesChannelAnalytics()`

```php
updateSalesChannelAnalytics($id, $_response, $inline_object211): Success
```

Partially update information about a Sales Channel Analytics resource.

Available since: 6.2.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\SalesChannelAnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the sales_channel_analytics
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object211 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject211(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject211

try {
    $result = $apiInstance->updateSalesChannelAnalytics($id, $_response, $inline_object211);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelAnalyticsApi->updateSalesChannelAnalytics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the sales_channel_analytics |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object211** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject211**](../Model/InlineObject211.md)|  | [optional]

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
