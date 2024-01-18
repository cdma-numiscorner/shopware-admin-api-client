# OpenAPI\ShopwareAdminApiClient\OrderLineItemDownloadApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderLineItemDownload()**](OrderLineItemDownloadApi.md#createOrderLineItemDownload) | **POST** /order-line-item-download | Create a new Order Line Item Download resources.
[**deleteOrderLineItemDownload()**](OrderLineItemDownloadApi.md#deleteOrderLineItemDownload) | **DELETE** /order-line-item-download/{id} | Delete a Order Line Item Download resource.
[**getOrderLineItemDownload()**](OrderLineItemDownloadApi.md#getOrderLineItemDownload) | **GET** /order-line-item-download/{id} | Detailed information about a Order Line Item Download resource.
[**getOrderLineItemDownloadList()**](OrderLineItemDownloadApi.md#getOrderLineItemDownloadList) | **GET** /order-line-item-download | List with basic information of Order Line Item Download resources.
[**updateOrderLineItemDownload()**](OrderLineItemDownloadApi.md#updateOrderLineItemDownload) | **PATCH** /order-line-item-download/{id} | Partially update information about a Order Line Item Download resource.


## `createOrderLineItemDownload()`

```php
createOrderLineItemDownload($_response, $inline_object136): Success
```

Create a new Order Line Item Download resources.

Available since: 6.4.19.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderLineItemDownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object136 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject136(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject136

try {
    $result = $apiInstance->createOrderLineItemDownload($_response, $inline_object136);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineItemDownloadApi->createOrderLineItemDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object136** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject136**](../Model/InlineObject136.md)|  | [optional]

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

## `deleteOrderLineItemDownload()`

```php
deleteOrderLineItemDownload($id, $_response)
```

Delete a Order Line Item Download resource.

Available since: 6.4.19.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderLineItemDownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the order_line_item_download
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteOrderLineItemDownload($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineItemDownloadApi->deleteOrderLineItemDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the order_line_item_download |
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

## `getOrderLineItemDownload()`

```php
getOrderLineItemDownload($id): Success
```

Detailed information about a Order Line Item Download resource.

Available since: 6.4.19.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderLineItemDownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the order_line_item_download

try {
    $result = $apiInstance->getOrderLineItemDownload($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineItemDownloadApi->getOrderLineItemDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the order_line_item_download |

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

## `getOrderLineItemDownloadList()`

```php
getOrderLineItemDownloadList($limit, $page, $query): Success
```

List with basic information of Order Line Item Download resources.

Available since: 6.4.19.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderLineItemDownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getOrderLineItemDownloadList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineItemDownloadApi->getOrderLineItemDownloadList: ', $e->getMessage(), PHP_EOL;
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

## `updateOrderLineItemDownload()`

```php
updateOrderLineItemDownload($id, $_response, $inline_object137): Success
```

Partially update information about a Order Line Item Download resource.

Available since: 6.4.19.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderLineItemDownloadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the order_line_item_download
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object137 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject137(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject137

try {
    $result = $apiInstance->updateOrderLineItemDownload($id, $_response, $inline_object137);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLineItemDownloadApi->updateOrderLineItemDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the order_line_item_download |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object137** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject137**](../Model/InlineObject137.md)|  | [optional]

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
