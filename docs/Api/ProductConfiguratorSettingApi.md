# OpenAPI\ShopwareAdminApiClient\ProductConfiguratorSettingApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProductConfiguratorSetting()**](ProductConfiguratorSettingApi.md#createProductConfiguratorSetting) | **POST** /product-configurator-setting | Create a new Product Configurator Setting resources.
[**deleteProductConfiguratorSetting()**](ProductConfiguratorSettingApi.md#deleteProductConfiguratorSetting) | **DELETE** /product-configurator-setting/{id} | Delete a Product Configurator Setting resource.
[**getProductConfiguratorSetting()**](ProductConfiguratorSettingApi.md#getProductConfiguratorSetting) | **GET** /product-configurator-setting/{id} | Detailed information about a Product Configurator Setting resource.
[**getProductConfiguratorSettingList()**](ProductConfiguratorSettingApi.md#getProductConfiguratorSettingList) | **GET** /product-configurator-setting | List with basic information of Product Configurator Setting resources.
[**updateProductConfiguratorSetting()**](ProductConfiguratorSettingApi.md#updateProductConfiguratorSetting) | **PATCH** /product-configurator-setting/{id} | Partially update information about a Product Configurator Setting resource.


## `createProductConfiguratorSetting()`

```php
createProductConfiguratorSetting($_response, $inline_object152): Success
```

Create a new Product Configurator Setting resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object152 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject152(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject152

try {
    $result = $apiInstance->createProductConfiguratorSetting($_response, $inline_object152);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->createProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object152** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject152**](../Model/InlineObject152.md)|  | [optional]

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

## `deleteProductConfiguratorSetting()`

```php
deleteProductConfiguratorSetting($id, $_response)
```

Delete a Product Configurator Setting resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the product_configurator_setting
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteProductConfiguratorSetting($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->deleteProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_configurator_setting |
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

## `getProductConfiguratorSetting()`

```php
getProductConfiguratorSetting($id): Success
```

Detailed information about a Product Configurator Setting resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the product_configurator_setting

try {
    $result = $apiInstance->getProductConfiguratorSetting($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->getProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_configurator_setting |

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

## `getProductConfiguratorSettingList()`

```php
getProductConfiguratorSettingList($limit, $page, $query): Success
```

List with basic information of Product Configurator Setting resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getProductConfiguratorSettingList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->getProductConfiguratorSettingList: ', $e->getMessage(), PHP_EOL;
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

## `updateProductConfiguratorSetting()`

```php
updateProductConfiguratorSetting($id, $_response, $inline_object153): Success
```

Partially update information about a Product Configurator Setting resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ProductConfiguratorSettingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the product_configurator_setting
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object153 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject153(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject153

try {
    $result = $apiInstance->updateProductConfiguratorSetting($id, $_response, $inline_object153);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductConfiguratorSettingApi->updateProductConfiguratorSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the product_configurator_setting |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object153** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject153**](../Model/InlineObject153.md)|  | [optional]

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
