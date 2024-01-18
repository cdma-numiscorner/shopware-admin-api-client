# OpenAPI\ShopwareAdminApiClient\ProductCrossSellingAssignedProductsApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductCrossSellingAssignedProducts()**](ProductCrossSellingAssignedProductsApi.md#createProductCrossSellingAssignedProducts) | **POST** /product-cross-selling-assigned-products | Create a new Product Cross Selling Assigned Products resources.
[**deleteProductCrossSellingAssignedProducts()**](ProductCrossSellingAssignedProductsApi.md#deleteProductCrossSellingAssignedProducts) | **DELETE** /product-cross-selling-assigned-products/{id} | Delete a Product Cross Selling Assigned Products resource.
[**getProductCrossSellingAssignedProducts()**](ProductCrossSellingAssignedProductsApi.md#getProductCrossSellingAssignedProducts) | **GET** /product-cross-selling-assigned-products/{id} | Detailed information about a Product Cross Selling Assigned Products resource.
[**getProductCrossSellingAssignedProductsList()**](ProductCrossSellingAssignedProductsApi.md#getProductCrossSellingAssignedProductsList) | **GET** /product-cross-selling-assigned-products | List with basic information of Product Cross Selling Assigned Products resources.
[**updateProductCrossSellingAssignedProducts()**](ProductCrossSellingAssignedProductsApi.md#updateProductCrossSellingAssignedProducts) | **PATCH** /product-cross-selling-assigned-products/{id} | Partially update information about a Product Cross Selling Assigned Products resource.


## `createProductCrossSellingAssignedProducts()`

```php
createProductCrossSellingAssignedProducts($_response, $inline_object156): Success
```

Create a new Product Cross Selling Assigned Products resources.

Available since: 6.2.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductCrossSellingAssignedProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object156 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject156(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject156

try {
    $result = $apiInstance->createProductCrossSellingAssignedProducts($_response, $inline_object156);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingAssignedProductsApi->createProductCrossSellingAssignedProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object156** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject156**](../Model/InlineObject156.md)|  | [optional]

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

## `deleteProductCrossSellingAssignedProducts()`

```php
deleteProductCrossSellingAssignedProducts($id, $_response)
```

Delete a Product Cross Selling Assigned Products resource.

Available since: 6.2.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductCrossSellingAssignedProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the product_cross_selling_assigned_products
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteProductCrossSellingAssignedProducts($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingAssignedProductsApi->deleteProductCrossSellingAssignedProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_cross_selling_assigned_products |
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

## `getProductCrossSellingAssignedProducts()`

```php
getProductCrossSellingAssignedProducts($id): Success
```

Detailed information about a Product Cross Selling Assigned Products resource.

Available since: 6.2.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductCrossSellingAssignedProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the product_cross_selling_assigned_products

try {
    $result = $apiInstance->getProductCrossSellingAssignedProducts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingAssignedProductsApi->getProductCrossSellingAssignedProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_cross_selling_assigned_products |

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

## `getProductCrossSellingAssignedProductsList()`

```php
getProductCrossSellingAssignedProductsList($limit, $page, $query): Success
```

List with basic information of Product Cross Selling Assigned Products resources.

Available since: 6.2.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductCrossSellingAssignedProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getProductCrossSellingAssignedProductsList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingAssignedProductsApi->getProductCrossSellingAssignedProductsList: ', $e->getMessage(), PHP_EOL;
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

## `updateProductCrossSellingAssignedProducts()`

```php
updateProductCrossSellingAssignedProducts($id, $_response, $inline_object157): Success
```

Partially update information about a Product Cross Selling Assigned Products resource.

Available since: 6.2.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductCrossSellingAssignedProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the product_cross_selling_assigned_products
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object157 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject157(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject157

try {
    $result = $apiInstance->updateProductCrossSellingAssignedProducts($id, $_response, $inline_object157);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductCrossSellingAssignedProductsApi->updateProductCrossSellingAssignedProducts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_cross_selling_assigned_products |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object157** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject157**](../Model/InlineObject157.md)|  | [optional]

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
