# OpenAPI\ShopwareAdminApiClient\OrderManagementApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderDeliveryStateTransition()**](OrderManagementApi.md#orderDeliveryStateTransition) | **POST** /_action/order_delivery/{orderDeliveryId}/state/{transition} | Transition an order delivery to a new state
[**orderStateTransition()**](OrderManagementApi.md#orderStateTransition) | **POST** /_action/order/{orderId}/state/{transition} | Transition an order to a new state
[**orderTransactionCaptureRefund()**](OrderManagementApi.md#orderTransactionCaptureRefund) | **POST** /_action/order_transaction_capture_refund/{refundId} | Refund an order transaction capture
[**orderTransactionStateTransition()**](OrderManagementApi.md#orderTransactionStateTransition) | **POST** /_action/order_transaction/{orderTransactionId}/state/{transition} | Transition an order transaction to a new state


## `orderDeliveryStateTransition()`

```php
orderDeliveryStateTransition($order_delivery_id, $transition, $inline_object278)
```

Transition an order delivery to a new state

Changes the order delivery state and informs the customer via email if configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_delivery_id = 'order_delivery_id_example'; // string | Identifier of the order delivery.
$transition = 'transition_example'; // string | The `action_name` of the `state_machine_transition`. For example `process` if the order state should change from open to in progress.  Note: If you choose a transition which is not possible, you will get an error that lists possible transition for the actual state.
$inline_object278 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject278(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject278

try {
    $apiInstance->orderDeliveryStateTransition($order_delivery_id, $transition, $inline_object278);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderDeliveryStateTransition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_delivery_id** | **string**| Identifier of the order delivery. |
 **transition** | **string**| The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition which is not possible, you will get an error that lists possible transition for the actual state. |
 **inline_object278** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject278**](../Model/InlineObject278.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderStateTransition()`

```php
orderStateTransition($order_id, $transition, $inline_object273)
```

Transition an order to a new state

Changes the order state and informs the customer via email if configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | Identifier of the order.
$transition = 'transition_example'; // string | The `action_name` of the `state_machine_transition`. For example `process` if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state.
$inline_object273 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject273(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject273

try {
    $apiInstance->orderStateTransition($order_id, $transition, $inline_object273);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderStateTransition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Identifier of the order. |
 **transition** | **string**| The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state. |
 **inline_object273** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject273**](../Model/InlineObject273.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderTransactionCaptureRefund()`

```php
orderTransactionCaptureRefund($refund_id)
```

Refund an order transaction capture

Refunds an order transaction capture.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$refund_id = 'refund_id_example'; // string | Identifier of the order transaction capture refund.

try {
    $apiInstance->orderTransactionCaptureRefund($refund_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderTransactionCaptureRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refund_id** | **string**| Identifier of the order transaction capture refund. |

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderTransactionStateTransition()`

```php
orderTransactionStateTransition($order_transaction_id, $transition, $inline_object275)
```

Transition an order transaction to a new state

Changes the order transaction state and informs the customer via email if configured.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_transaction_id = 'order_transaction_id_example'; // string | Identifier of the order transaction.
$transition = 'transition_example'; // string | The `action_name` of the `state_machine_transition`. For example `process` if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state.
$inline_object275 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject275(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject275

try {
    $apiInstance->orderTransactionStateTransition($order_transaction_id, $transition, $inline_object275);
} catch (Exception $e) {
    echo 'Exception when calling OrderManagementApi->orderTransactionStateTransition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_transaction_id** | **string**| Identifier of the order transaction. |
 **transition** | **string**| The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state. |
 **inline_object275** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject275**](../Model/InlineObject275.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
