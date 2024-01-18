# OpenAPI\ShopwareAdminApiClient\PromotionDiscountPricesApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPromotionDiscountPrices()**](PromotionDiscountPricesApi.md#createPromotionDiscountPrices) | **POST** /promotion-discount-prices | Create a new Promotion Discount Prices resources.
[**deletePromotionDiscountPrices()**](PromotionDiscountPricesApi.md#deletePromotionDiscountPrices) | **DELETE** /promotion-discount-prices/{id} | Delete a Promotion Discount Prices resource.
[**getPromotionDiscountPrices()**](PromotionDiscountPricesApi.md#getPromotionDiscountPrices) | **GET** /promotion-discount-prices/{id} | Detailed information about a Promotion Discount Prices resource.
[**getPromotionDiscountPricesList()**](PromotionDiscountPricesApi.md#getPromotionDiscountPricesList) | **GET** /promotion-discount-prices | List with basic information of Promotion Discount Prices resources.
[**updatePromotionDiscountPrices()**](PromotionDiscountPricesApi.md#updatePromotionDiscountPrices) | **PATCH** /promotion-discount-prices/{id} | Partially update information about a Promotion Discount Prices resource.


## `createPromotionDiscountPrices()`

```php
createPromotionDiscountPrices($_response, $inline_object192): Success
```

Create a new Promotion Discount Prices resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object192 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject192(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject192

try {
    $result = $apiInstance->createPromotionDiscountPrices($_response, $inline_object192);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->createPromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object192** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject192**](../Model/InlineObject192.md)|  | [optional]

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

## `deletePromotionDiscountPrices()`

```php
deletePromotionDiscountPrices($id, $_response)
```

Delete a Promotion Discount Prices resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the promotion_discount_prices
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deletePromotionDiscountPrices($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->deletePromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the promotion_discount_prices |
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

## `getPromotionDiscountPrices()`

```php
getPromotionDiscountPrices($id): Success
```

Detailed information about a Promotion Discount Prices resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the promotion_discount_prices

try {
    $result = $apiInstance->getPromotionDiscountPrices($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->getPromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the promotion_discount_prices |

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

## `getPromotionDiscountPricesList()`

```php
getPromotionDiscountPricesList($limit, $page, $query): Success
```

List with basic information of Promotion Discount Prices resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getPromotionDiscountPricesList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->getPromotionDiscountPricesList: ', $e->getMessage(), PHP_EOL;
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

## `updatePromotionDiscountPrices()`

```php
updatePromotionDiscountPrices($id, $_response, $inline_object193): Success
```

Partially update information about a Promotion Discount Prices resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PromotionDiscountPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the promotion_discount_prices
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object193 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject193(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject193

try {
    $result = $apiInstance->updatePromotionDiscountPrices($id, $_response, $inline_object193);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionDiscountPricesApi->updatePromotionDiscountPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the promotion_discount_prices |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object193** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject193**](../Model/InlineObject193.md)|  | [optional]

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
