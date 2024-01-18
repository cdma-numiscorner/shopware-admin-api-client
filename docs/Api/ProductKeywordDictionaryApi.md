# OpenAPI\ShopwareAdminApiClient\ProductKeywordDictionaryApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductKeywordDictionary()**](ProductKeywordDictionaryApi.md#createProductKeywordDictionary) | **POST** /product-keyword-dictionary | Create a new Product Keyword Dictionary resources.
[**deleteProductKeywordDictionary()**](ProductKeywordDictionaryApi.md#deleteProductKeywordDictionary) | **DELETE** /product-keyword-dictionary/{id} | Delete a Product Keyword Dictionary resource.
[**getProductKeywordDictionary()**](ProductKeywordDictionaryApi.md#getProductKeywordDictionary) | **GET** /product-keyword-dictionary/{id} | Detailed information about a Product Keyword Dictionary resource.
[**getProductKeywordDictionaryList()**](ProductKeywordDictionaryApi.md#getProductKeywordDictionaryList) | **GET** /product-keyword-dictionary | List with basic information of Product Keyword Dictionary resources.
[**updateProductKeywordDictionary()**](ProductKeywordDictionaryApi.md#updateProductKeywordDictionary) | **PATCH** /product-keyword-dictionary/{id} | Partially update information about a Product Keyword Dictionary resource.


## `createProductKeywordDictionary()`

```php
createProductKeywordDictionary($_response, $inline_object164): Success
```

Create a new Product Keyword Dictionary resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductKeywordDictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object164 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject164(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject164

try {
    $result = $apiInstance->createProductKeywordDictionary($_response, $inline_object164);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductKeywordDictionaryApi->createProductKeywordDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object164** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject164**](../Model/InlineObject164.md)|  | [optional]

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

## `deleteProductKeywordDictionary()`

```php
deleteProductKeywordDictionary($id, $_response)
```

Delete a Product Keyword Dictionary resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductKeywordDictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the product_keyword_dictionary
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteProductKeywordDictionary($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ProductKeywordDictionaryApi->deleteProductKeywordDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_keyword_dictionary |
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

## `getProductKeywordDictionary()`

```php
getProductKeywordDictionary($id): Success
```

Detailed information about a Product Keyword Dictionary resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductKeywordDictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the product_keyword_dictionary

try {
    $result = $apiInstance->getProductKeywordDictionary($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductKeywordDictionaryApi->getProductKeywordDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_keyword_dictionary |

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

## `getProductKeywordDictionaryList()`

```php
getProductKeywordDictionaryList($limit, $page, $query): Success
```

List with basic information of Product Keyword Dictionary resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductKeywordDictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getProductKeywordDictionaryList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductKeywordDictionaryApi->getProductKeywordDictionaryList: ', $e->getMessage(), PHP_EOL;
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

## `updateProductKeywordDictionary()`

```php
updateProductKeywordDictionary($id, $_response, $inline_object165): Success
```

Partially update information about a Product Keyword Dictionary resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductKeywordDictionaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the product_keyword_dictionary
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object165 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject165(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject165

try {
    $result = $apiInstance->updateProductKeywordDictionary($id, $_response, $inline_object165);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductKeywordDictionaryApi->updateProductKeywordDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_keyword_dictionary |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object165** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject165**](../Model/InlineObject165.md)|  | [optional]

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
