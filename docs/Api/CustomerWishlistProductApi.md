# OpenAPI\ShopwareAdminApiClient\CustomerWishlistProductApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomerWishlistProduct()**](CustomerWishlistProductApi.md#createCustomerWishlistProduct) | **POST** /customer-wishlist-product | Create a new Customer Wishlist Product resources.
[**deleteCustomerWishlistProduct()**](CustomerWishlistProductApi.md#deleteCustomerWishlistProduct) | **DELETE** /customer-wishlist-product/{id} | Delete a Customer Wishlist Product resource.
[**getCustomerWishlistProduct()**](CustomerWishlistProductApi.md#getCustomerWishlistProduct) | **GET** /customer-wishlist-product/{id} | Detailed information about a Customer Wishlist Product resource.
[**getCustomerWishlistProductList()**](CustomerWishlistProductApi.md#getCustomerWishlistProductList) | **GET** /customer-wishlist-product | List with basic information of Customer Wishlist Product resources.
[**updateCustomerWishlistProduct()**](CustomerWishlistProductApi.md#updateCustomerWishlistProduct) | **PATCH** /customer-wishlist-product/{id} | Partially update information about a Customer Wishlist Product resource.


## `createCustomerWishlistProduct()`

```php
createCustomerWishlistProduct($_response, $inline_object58): Success
```

Create a new Customer Wishlist Product resources.

Available since: 6.3.4.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CustomerWishlistProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object58 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject58(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject58

try {
    $result = $apiInstance->createCustomerWishlistProduct($_response, $inline_object58);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistProductApi->createCustomerWishlistProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object58** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject58**](../Model/InlineObject58.md)|  | [optional]

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

## `deleteCustomerWishlistProduct()`

```php
deleteCustomerWishlistProduct($id, $_response)
```

Delete a Customer Wishlist Product resource.

Available since: 6.3.4.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CustomerWishlistProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the customer_wishlist_product
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteCustomerWishlistProduct($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistProductApi->deleteCustomerWishlistProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the customer_wishlist_product |
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

## `getCustomerWishlistProduct()`

```php
getCustomerWishlistProduct($id): Success
```

Detailed information about a Customer Wishlist Product resource.

Available since: 6.3.4.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CustomerWishlistProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the customer_wishlist_product

try {
    $result = $apiInstance->getCustomerWishlistProduct($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistProductApi->getCustomerWishlistProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the customer_wishlist_product |

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

## `getCustomerWishlistProductList()`

```php
getCustomerWishlistProductList($limit, $page, $query): Success
```

List with basic information of Customer Wishlist Product resources.

Available since: 6.3.4.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CustomerWishlistProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getCustomerWishlistProductList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistProductApi->getCustomerWishlistProductList: ', $e->getMessage(), PHP_EOL;
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

## `updateCustomerWishlistProduct()`

```php
updateCustomerWishlistProduct($id, $_response, $inline_object59): Success
```

Partially update information about a Customer Wishlist Product resource.

Available since: 6.3.4.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CustomerWishlistProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the customer_wishlist_product
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object59 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject59(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject59

try {
    $result = $apiInstance->updateCustomerWishlistProduct($id, $_response, $inline_object59);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistProductApi->updateCustomerWishlistProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the customer_wishlist_product |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object59** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject59**](../Model/InlineObject59.md)|  | [optional]

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
