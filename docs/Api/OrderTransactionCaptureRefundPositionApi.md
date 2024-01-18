# OpenAPI\ShopwareAdminApiClient\OrderTransactionCaptureRefundPositionApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderTransactionCaptureRefundPosition()**](OrderTransactionCaptureRefundPositionApi.md#createOrderTransactionCaptureRefundPosition) | **POST** /order-transaction-capture-refund-position | Create a new Order Transaction Capture Refund Position resources.
[**deleteOrderTransactionCaptureRefundPosition()**](OrderTransactionCaptureRefundPositionApi.md#deleteOrderTransactionCaptureRefundPosition) | **DELETE** /order-transaction-capture-refund-position/{id} | Delete a Order Transaction Capture Refund Position resource.
[**getOrderTransactionCaptureRefundPosition()**](OrderTransactionCaptureRefundPositionApi.md#getOrderTransactionCaptureRefundPosition) | **GET** /order-transaction-capture-refund-position/{id} | Detailed information about a Order Transaction Capture Refund Position resource.
[**getOrderTransactionCaptureRefundPositionList()**](OrderTransactionCaptureRefundPositionApi.md#getOrderTransactionCaptureRefundPositionList) | **GET** /order-transaction-capture-refund-position | List with basic information of Order Transaction Capture Refund Position resources.
[**updateOrderTransactionCaptureRefundPosition()**](OrderTransactionCaptureRefundPositionApi.md#updateOrderTransactionCaptureRefundPosition) | **PATCH** /order-transaction-capture-refund-position/{id} | Partially update information about a Order Transaction Capture Refund Position resource.


## `createOrderTransactionCaptureRefundPosition()`

```php
createOrderTransactionCaptureRefundPosition($_response, $inline_object144): Success
```

Create a new Order Transaction Capture Refund Position resources.

Available since: 6.4.12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderTransactionCaptureRefundPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object144 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject144(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject144

try {
    $result = $apiInstance->createOrderTransactionCaptureRefundPosition($_response, $inline_object144);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTransactionCaptureRefundPositionApi->createOrderTransactionCaptureRefundPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object144** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject144**](../Model/InlineObject144.md)|  | [optional]

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

## `deleteOrderTransactionCaptureRefundPosition()`

```php
deleteOrderTransactionCaptureRefundPosition($id, $_response)
```

Delete a Order Transaction Capture Refund Position resource.

Available since: 6.4.12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderTransactionCaptureRefundPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the order_transaction_capture_refund_position
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteOrderTransactionCaptureRefundPosition($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling OrderTransactionCaptureRefundPositionApi->deleteOrderTransactionCaptureRefundPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the order_transaction_capture_refund_position |
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

## `getOrderTransactionCaptureRefundPosition()`

```php
getOrderTransactionCaptureRefundPosition($id): Success
```

Detailed information about a Order Transaction Capture Refund Position resource.

Available since: 6.4.12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderTransactionCaptureRefundPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the order_transaction_capture_refund_position

try {
    $result = $apiInstance->getOrderTransactionCaptureRefundPosition($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTransactionCaptureRefundPositionApi->getOrderTransactionCaptureRefundPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the order_transaction_capture_refund_position |

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

## `getOrderTransactionCaptureRefundPositionList()`

```php
getOrderTransactionCaptureRefundPositionList($limit, $page, $query): Success
```

List with basic information of Order Transaction Capture Refund Position resources.

Available since: 6.4.12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderTransactionCaptureRefundPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getOrderTransactionCaptureRefundPositionList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTransactionCaptureRefundPositionApi->getOrderTransactionCaptureRefundPositionList: ', $e->getMessage(), PHP_EOL;
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

## `updateOrderTransactionCaptureRefundPosition()`

```php
updateOrderTransactionCaptureRefundPosition($id, $_response, $inline_object145): Success
```

Partially update information about a Order Transaction Capture Refund Position resource.

Available since: 6.4.12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderTransactionCaptureRefundPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the order_transaction_capture_refund_position
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object145 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject145(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject145

try {
    $result = $apiInstance->updateOrderTransactionCaptureRefundPosition($id, $_response, $inline_object145);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTransactionCaptureRefundPositionApi->updateOrderTransactionCaptureRefundPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the order_transaction_capture_refund_position |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object145** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject145**](../Model/InlineObject145.md)|  | [optional]

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
