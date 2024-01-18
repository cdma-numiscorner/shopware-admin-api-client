# OpenAPI\ShopwareAdminApiClient\CustomerWishlistApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomerWishlist()**](CustomerWishlistApi.md#createCustomerWishlist) | **POST** /customer-wishlist | Create a new Customer Wishlist resources.
[**deleteCustomerWishlist()**](CustomerWishlistApi.md#deleteCustomerWishlist) | **DELETE** /customer-wishlist/{id} | Delete a Customer Wishlist resource.
[**getCustomerWishlist()**](CustomerWishlistApi.md#getCustomerWishlist) | **GET** /customer-wishlist/{id} | Detailed information about a Customer Wishlist resource.
[**getCustomerWishlistList()**](CustomerWishlistApi.md#getCustomerWishlistList) | **GET** /customer-wishlist | List with basic information of Customer Wishlist resources.
[**updateCustomerWishlist()**](CustomerWishlistApi.md#updateCustomerWishlist) | **PATCH** /customer-wishlist/{id} | Partially update information about a Customer Wishlist resource.


## `createCustomerWishlist()`

```php
createCustomerWishlist($_response, $inline_object56): Success
```

Create a new Customer Wishlist resources.

Available since: 6.3.4.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CustomerWishlistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object56 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject56(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject56

try {
    $result = $apiInstance->createCustomerWishlist($_response, $inline_object56);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistApi->createCustomerWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object56** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject56**](../Model/InlineObject56.md)|  | [optional]

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

## `deleteCustomerWishlist()`

```php
deleteCustomerWishlist($id, $_response)
```

Delete a Customer Wishlist resource.

Available since: 6.3.4.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CustomerWishlistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the customer_wishlist
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteCustomerWishlist($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistApi->deleteCustomerWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the customer_wishlist |
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

## `getCustomerWishlist()`

```php
getCustomerWishlist($id): Success
```

Detailed information about a Customer Wishlist resource.

Available since: 6.3.4.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CustomerWishlistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the customer_wishlist

try {
    $result = $apiInstance->getCustomerWishlist($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistApi->getCustomerWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the customer_wishlist |

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

## `getCustomerWishlistList()`

```php
getCustomerWishlistList($limit, $page, $query): Success
```

List with basic information of Customer Wishlist resources.

Available since: 6.3.4.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CustomerWishlistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getCustomerWishlistList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistApi->getCustomerWishlistList: ', $e->getMessage(), PHP_EOL;
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

## `updateCustomerWishlist()`

```php
updateCustomerWishlist($id, $_response, $inline_object57): Success
```

Partially update information about a Customer Wishlist resource.

Available since: 6.3.4.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CustomerWishlistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the customer_wishlist
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object57 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject57(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject57

try {
    $result = $apiInstance->updateCustomerWishlist($id, $_response, $inline_object57);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerWishlistApi->updateCustomerWishlist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the customer_wishlist |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object57** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject57**](../Model/InlineObject57.md)|  | [optional]

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
