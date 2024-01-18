# OpenAPI\ShopwareAdminApiClient\PropertyGroupOptionApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPropertyGroupOption()**](PropertyGroupOptionApi.md#createPropertyGroupOption) | **POST** /property-group-option | Create a new Property Group Option resources.
[**deletePropertyGroupOption()**](PropertyGroupOptionApi.md#deletePropertyGroupOption) | **DELETE** /property-group-option/{id} | Delete a Property Group Option resource.
[**getPropertyGroupOption()**](PropertyGroupOptionApi.md#getPropertyGroupOption) | **GET** /property-group-option/{id} | Detailed information about a Property Group Option resource.
[**getPropertyGroupOptionList()**](PropertyGroupOptionApi.md#getPropertyGroupOptionList) | **GET** /property-group-option | List with basic information of Property Group Option resources.
[**updatePropertyGroupOption()**](PropertyGroupOptionApi.md#updatePropertyGroupOption) | **PATCH** /property-group-option/{id} | Partially update information about a Property Group Option resource.


## `createPropertyGroupOption()`

```php
createPropertyGroupOption($_response, $inline_object202): Success
```

Create a new Property Group Option resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PropertyGroupOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object202 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject202(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject202

try {
    $result = $apiInstance->createPropertyGroupOption($_response, $inline_object202);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupOptionApi->createPropertyGroupOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object202** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject202**](../Model/InlineObject202.md)|  | [optional]

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

## `deletePropertyGroupOption()`

```php
deletePropertyGroupOption($id, $_response)
```

Delete a Property Group Option resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PropertyGroupOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the property_group_option
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deletePropertyGroupOption($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupOptionApi->deletePropertyGroupOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the property_group_option |
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

## `getPropertyGroupOption()`

```php
getPropertyGroupOption($id): Success
```

Detailed information about a Property Group Option resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PropertyGroupOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the property_group_option

try {
    $result = $apiInstance->getPropertyGroupOption($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupOptionApi->getPropertyGroupOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the property_group_option |

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

## `getPropertyGroupOptionList()`

```php
getPropertyGroupOptionList($limit, $page, $query): Success
```

List with basic information of Property Group Option resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PropertyGroupOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getPropertyGroupOptionList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupOptionApi->getPropertyGroupOptionList: ', $e->getMessage(), PHP_EOL;
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

## `updatePropertyGroupOption()`

```php
updatePropertyGroupOption($id, $_response, $inline_object203): Success
```

Partially update information about a Property Group Option resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PropertyGroupOptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the property_group_option
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object203 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject203(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject203

try {
    $result = $apiInstance->updatePropertyGroupOption($id, $_response, $inline_object203);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGroupOptionApi->updatePropertyGroupOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the property_group_option |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object203** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject203**](../Model/InlineObject203.md)|  | [optional]

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
