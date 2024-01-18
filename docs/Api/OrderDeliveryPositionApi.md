# OpenAPI\ShopwareAdminApiClient\OrderDeliveryPositionApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderDeliveryPosition()**](OrderDeliveryPositionApi.md#createOrderDeliveryPosition) | **POST** /order-delivery-position | Create a new Order Delivery Position resources.
[**deleteOrderDeliveryPosition()**](OrderDeliveryPositionApi.md#deleteOrderDeliveryPosition) | **DELETE** /order-delivery-position/{id} | Delete a Order Delivery Position resource.
[**getOrderDeliveryPosition()**](OrderDeliveryPositionApi.md#getOrderDeliveryPosition) | **GET** /order-delivery-position/{id} | Detailed information about a Order Delivery Position resource.
[**getOrderDeliveryPositionList()**](OrderDeliveryPositionApi.md#getOrderDeliveryPositionList) | **GET** /order-delivery-position | List with basic information of Order Delivery Position resources.
[**updateOrderDeliveryPosition()**](OrderDeliveryPositionApi.md#updateOrderDeliveryPosition) | **PATCH** /order-delivery-position/{id} | Partially update information about a Order Delivery Position resource.


## `createOrderDeliveryPosition()`

```php
createOrderDeliveryPosition($_response, $inline_object132): Success
```

Create a new Order Delivery Position resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderDeliveryPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object132 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject132(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject132

try {
    $result = $apiInstance->createOrderDeliveryPosition($_response, $inline_object132);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryPositionApi->createOrderDeliveryPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object132** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject132**](../Model/InlineObject132.md)|  | [optional]

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

## `deleteOrderDeliveryPosition()`

```php
deleteOrderDeliveryPosition($id, $_response)
```

Delete a Order Delivery Position resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderDeliveryPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the order_delivery_position
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteOrderDeliveryPosition($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryPositionApi->deleteOrderDeliveryPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the order_delivery_position |
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

## `getOrderDeliveryPosition()`

```php
getOrderDeliveryPosition($id): Success
```

Detailed information about a Order Delivery Position resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderDeliveryPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the order_delivery_position

try {
    $result = $apiInstance->getOrderDeliveryPosition($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryPositionApi->getOrderDeliveryPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the order_delivery_position |

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

## `getOrderDeliveryPositionList()`

```php
getOrderDeliveryPositionList($limit, $page, $query): Success
```

List with basic information of Order Delivery Position resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderDeliveryPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getOrderDeliveryPositionList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryPositionApi->getOrderDeliveryPositionList: ', $e->getMessage(), PHP_EOL;
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

## `updateOrderDeliveryPosition()`

```php
updateOrderDeliveryPosition($id, $_response, $inline_object133): Success
```

Partially update information about a Order Delivery Position resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\OrderDeliveryPositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the order_delivery_position
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object133 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject133(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject133

try {
    $result = $apiInstance->updateOrderDeliveryPosition($id, $_response, $inline_object133);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDeliveryPositionApi->updateOrderDeliveryPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the order_delivery_position |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object133** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject133**](../Model/InlineObject133.md)|  | [optional]

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
