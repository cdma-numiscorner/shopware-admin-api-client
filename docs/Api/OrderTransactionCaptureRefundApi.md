# OpenAPI\ShopwareAdminApiClient\OrderTransactionCaptureRefundApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderTransactionCaptureRefund()**](OrderTransactionCaptureRefundApi.md#createOrderTransactionCaptureRefund) | **POST** /order-transaction-capture-refund | Create a new Order Transaction Capture Refund resources.
[**deleteOrderTransactionCaptureRefund()**](OrderTransactionCaptureRefundApi.md#deleteOrderTransactionCaptureRefund) | **DELETE** /order-transaction-capture-refund/{id} | Delete a Order Transaction Capture Refund resource.
[**getOrderTransactionCaptureRefund()**](OrderTransactionCaptureRefundApi.md#getOrderTransactionCaptureRefund) | **GET** /order-transaction-capture-refund/{id} | Detailed information about a Order Transaction Capture Refund resource.
[**getOrderTransactionCaptureRefundList()**](OrderTransactionCaptureRefundApi.md#getOrderTransactionCaptureRefundList) | **GET** /order-transaction-capture-refund | List with basic information of Order Transaction Capture Refund resources.
[**updateOrderTransactionCaptureRefund()**](OrderTransactionCaptureRefundApi.md#updateOrderTransactionCaptureRefund) | **PATCH** /order-transaction-capture-refund/{id} | Partially update information about a Order Transaction Capture Refund resource.


## `createOrderTransactionCaptureRefund()`

```php
createOrderTransactionCaptureRefund($_response, $inline_object142): Success
```

Create a new Order Transaction Capture Refund resources.

Available since: 6.4.12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderTransactionCaptureRefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object142 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject142(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject142

try {
    $result = $apiInstance->createOrderTransactionCaptureRefund($_response, $inline_object142);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTransactionCaptureRefundApi->createOrderTransactionCaptureRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object142** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject142**](../Model/InlineObject142.md)|  | [optional]

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

## `deleteOrderTransactionCaptureRefund()`

```php
deleteOrderTransactionCaptureRefund($id, $_response)
```

Delete a Order Transaction Capture Refund resource.

Available since: 6.4.12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderTransactionCaptureRefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the order_transaction_capture_refund
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteOrderTransactionCaptureRefund($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling OrderTransactionCaptureRefundApi->deleteOrderTransactionCaptureRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the order_transaction_capture_refund |
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

## `getOrderTransactionCaptureRefund()`

```php
getOrderTransactionCaptureRefund($id): Success
```

Detailed information about a Order Transaction Capture Refund resource.

Available since: 6.4.12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderTransactionCaptureRefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the order_transaction_capture_refund

try {
    $result = $apiInstance->getOrderTransactionCaptureRefund($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTransactionCaptureRefundApi->getOrderTransactionCaptureRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the order_transaction_capture_refund |

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

## `getOrderTransactionCaptureRefundList()`

```php
getOrderTransactionCaptureRefundList($limit, $page, $query): Success
```

List with basic information of Order Transaction Capture Refund resources.

Available since: 6.4.12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderTransactionCaptureRefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getOrderTransactionCaptureRefundList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTransactionCaptureRefundApi->getOrderTransactionCaptureRefundList: ', $e->getMessage(), PHP_EOL;
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

## `updateOrderTransactionCaptureRefund()`

```php
updateOrderTransactionCaptureRefund($id, $_response, $inline_object143): Success
```

Partially update information about a Order Transaction Capture Refund resource.

Available since: 6.4.12.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderTransactionCaptureRefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the order_transaction_capture_refund
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object143 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject143(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject143

try {
    $result = $apiInstance->updateOrderTransactionCaptureRefund($id, $_response, $inline_object143);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTransactionCaptureRefundApi->updateOrderTransactionCaptureRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the order_transaction_capture_refund |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object143** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject143**](../Model/InlineObject143.md)|  | [optional]

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
