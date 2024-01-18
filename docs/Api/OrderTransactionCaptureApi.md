# OpenAPI\ShopwareAdminApiClient\OrderTransactionCaptureApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderTransactionCapture()**](OrderTransactionCaptureApi.md#createOrderTransactionCapture) | **POST** /order-transaction-capture | Create a new Order Transaction Capture resources.
[**deleteOrderTransactionCapture()**](OrderTransactionCaptureApi.md#deleteOrderTransactionCapture) | **DELETE** /order-transaction-capture/{id} | Delete a Order Transaction Capture resource.
[**getOrderTransactionCapture()**](OrderTransactionCaptureApi.md#getOrderTransactionCapture) | **GET** /order-transaction-capture/{id} | Detailed information about a Order Transaction Capture resource.
[**getOrderTransactionCaptureList()**](OrderTransactionCaptureApi.md#getOrderTransactionCaptureList) | **GET** /order-transaction-capture | List with basic information of Order Transaction Capture resources.
[**updateOrderTransactionCapture()**](OrderTransactionCaptureApi.md#updateOrderTransactionCapture) | **PATCH** /order-transaction-capture/{id} | Partially update information about a Order Transaction Capture resource.


## `createOrderTransactionCapture()`

```php
createOrderTransactionCapture($_response, $inline_object140): Success
```

Create a new Order Transaction Capture resources.

Available since: 6.4.12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderTransactionCaptureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object140 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject140(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject140

try {
    $result = $apiInstance->createOrderTransactionCapture($_response, $inline_object140);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTransactionCaptureApi->createOrderTransactionCapture: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object140** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject140**](../Model/InlineObject140.md)|  | [optional]

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

## `deleteOrderTransactionCapture()`

```php
deleteOrderTransactionCapture($id, $_response)
```

Delete a Order Transaction Capture resource.

Available since: 6.4.12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderTransactionCaptureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the order_transaction_capture
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteOrderTransactionCapture($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling OrderTransactionCaptureApi->deleteOrderTransactionCapture: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the order_transaction_capture |
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

## `getOrderTransactionCapture()`

```php
getOrderTransactionCapture($id): Success
```

Detailed information about a Order Transaction Capture resource.

Available since: 6.4.12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderTransactionCaptureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the order_transaction_capture

try {
    $result = $apiInstance->getOrderTransactionCapture($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTransactionCaptureApi->getOrderTransactionCapture: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the order_transaction_capture |

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

## `getOrderTransactionCaptureList()`

```php
getOrderTransactionCaptureList($limit, $page, $query): Success
```

List with basic information of Order Transaction Capture resources.

Available since: 6.4.12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderTransactionCaptureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getOrderTransactionCaptureList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTransactionCaptureApi->getOrderTransactionCaptureList: ', $e->getMessage(), PHP_EOL;
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

## `updateOrderTransactionCapture()`

```php
updateOrderTransactionCapture($id, $_response, $inline_object141): Success
```

Partially update information about a Order Transaction Capture resource.

Available since: 6.4.12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderTransactionCaptureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the order_transaction_capture
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object141 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject141(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject141

try {
    $result = $apiInstance->updateOrderTransactionCapture($id, $_response, $inline_object141);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTransactionCaptureApi->updateOrderTransactionCapture: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the order_transaction_capture |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object141** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject141**](../Model/InlineObject141.md)|  | [optional]

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
