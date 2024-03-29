# OpenAPI\ShopwareAdminApiClient\SeoUrlApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSeoUrl()**](SeoUrlApi.md#createSeoUrl) | **POST** /seo-url | Create a new Seo Url resources.
[**deleteSeoUrl()**](SeoUrlApi.md#deleteSeoUrl) | **DELETE** /seo-url/{id} | Delete a Seo Url resource.
[**getSeoUrl()**](SeoUrlApi.md#getSeoUrl) | **GET** /seo-url/{id} | Detailed information about a Seo Url resource.
[**getSeoUrlList()**](SeoUrlApi.md#getSeoUrlList) | **GET** /seo-url | List with basic information of Seo Url resources.
[**updateSeoUrl()**](SeoUrlApi.md#updateSeoUrl) | **PATCH** /seo-url/{id} | Partially update information about a Seo Url resource.


## `createSeoUrl()`

```php
createSeoUrl($_response, $inline_object222): Success
```

Create a new Seo Url resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\SeoUrlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object222 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject222(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject222

try {
    $result = $apiInstance->createSeoUrl($_response, $inline_object222);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlApi->createSeoUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object222** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject222**](../Model/InlineObject222.md)|  | [optional]

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

## `deleteSeoUrl()`

```php
deleteSeoUrl($id, $_response)
```

Delete a Seo Url resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\SeoUrlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the seo_url
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteSeoUrl($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlApi->deleteSeoUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the seo_url |
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

## `getSeoUrl()`

```php
getSeoUrl($id): Success
```

Detailed information about a Seo Url resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\SeoUrlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the seo_url

try {
    $result = $apiInstance->getSeoUrl($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlApi->getSeoUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the seo_url |

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

## `getSeoUrlList()`

```php
getSeoUrlList($limit, $page, $query): Success
```

List with basic information of Seo Url resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\SeoUrlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getSeoUrlList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlApi->getSeoUrlList: ', $e->getMessage(), PHP_EOL;
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

## `updateSeoUrl()`

```php
updateSeoUrl($id, $_response, $inline_object223): Success
```

Partially update information about a Seo Url resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\SeoUrlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the seo_url
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object223 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject223(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject223

try {
    $result = $apiInstance->updateSeoUrl($id, $_response, $inline_object223);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SeoUrlApi->updateSeoUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the seo_url |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object223** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject223**](../Model/InlineObject223.md)|  | [optional]

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
