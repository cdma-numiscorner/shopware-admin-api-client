# OpenAPI\ShopwareAdminApiClient\ProductSearchConfigFieldApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductSearchConfigField()**](ProductSearchConfigFieldApi.md#createProductSearchConfigField) | **POST** /product-search-config-field | Create a new Product Search Config Field resources.
[**deleteProductSearchConfigField()**](ProductSearchConfigFieldApi.md#deleteProductSearchConfigField) | **DELETE** /product-search-config-field/{id} | Delete a Product Search Config Field resource.
[**getProductSearchConfigField()**](ProductSearchConfigFieldApi.md#getProductSearchConfigField) | **GET** /product-search-config-field/{id} | Detailed information about a Product Search Config Field resource.
[**getProductSearchConfigFieldList()**](ProductSearchConfigFieldApi.md#getProductSearchConfigFieldList) | **GET** /product-search-config-field | List with basic information of Product Search Config Field resources.
[**updateProductSearchConfigField()**](ProductSearchConfigFieldApi.md#updateProductSearchConfigField) | **PATCH** /product-search-config-field/{id} | Partially update information about a Product Search Config Field resource.


## `createProductSearchConfigField()`

```php
createProductSearchConfigField($_response, $inline_object176): Success
```

Create a new Product Search Config Field resources.

Available since: 6.3.5.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductSearchConfigFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object176 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject176(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject176

try {
    $result = $apiInstance->createProductSearchConfigField($_response, $inline_object176);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchConfigFieldApi->createProductSearchConfigField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object176** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject176**](../Model/InlineObject176.md)|  | [optional]

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

## `deleteProductSearchConfigField()`

```php
deleteProductSearchConfigField($id, $_response)
```

Delete a Product Search Config Field resource.

Available since: 6.3.5.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductSearchConfigFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the product_search_config_field
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteProductSearchConfigField($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchConfigFieldApi->deleteProductSearchConfigField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_search_config_field |
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

## `getProductSearchConfigField()`

```php
getProductSearchConfigField($id): Success
```

Detailed information about a Product Search Config Field resource.

Available since: 6.3.5.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductSearchConfigFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the product_search_config_field

try {
    $result = $apiInstance->getProductSearchConfigField($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchConfigFieldApi->getProductSearchConfigField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_search_config_field |

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

## `getProductSearchConfigFieldList()`

```php
getProductSearchConfigFieldList($limit, $page, $query): Success
```

List with basic information of Product Search Config Field resources.

Available since: 6.3.5.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductSearchConfigFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getProductSearchConfigFieldList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchConfigFieldApi->getProductSearchConfigFieldList: ', $e->getMessage(), PHP_EOL;
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

## `updateProductSearchConfigField()`

```php
updateProductSearchConfigField($id, $_response, $inline_object177): Success
```

Partially update information about a Product Search Config Field resource.

Available since: 6.3.5.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductSearchConfigFieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the product_search_config_field
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object177 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject177(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject177

try {
    $result = $apiInstance->updateProductSearchConfigField($id, $_response, $inline_object177);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductSearchConfigFieldApi->updateProductSearchConfigField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_search_config_field |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object177** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject177**](../Model/InlineObject177.md)|  | [optional]

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
