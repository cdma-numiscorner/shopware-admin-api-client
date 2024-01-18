# OpenAPI\ShopwareAdminApiClient\AppAdministrationSnippetApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAppAdministrationSnippet()**](AppAdministrationSnippetApi.md#createAppAdministrationSnippet) | **POST** /app-administration-snippet | Create a new App Administration Snippet resources.
[**deleteAppAdministrationSnippet()**](AppAdministrationSnippetApi.md#deleteAppAdministrationSnippet) | **DELETE** /app-administration-snippet/{id} | Delete a App Administration Snippet resource.
[**getAppAdministrationSnippet()**](AppAdministrationSnippetApi.md#getAppAdministrationSnippet) | **GET** /app-administration-snippet/{id} | Detailed information about a App Administration Snippet resource.
[**getAppAdministrationSnippetList()**](AppAdministrationSnippetApi.md#getAppAdministrationSnippetList) | **GET** /app-administration-snippet | List with basic information of App Administration Snippet resources.
[**updateAppAdministrationSnippet()**](AppAdministrationSnippetApi.md#updateAppAdministrationSnippet) | **PATCH** /app-administration-snippet/{id} | Partially update information about a App Administration Snippet resource.


## `createAppAdministrationSnippet()`

```php
createAppAdministrationSnippet($_response, $inline_object6): Success
```

Create a new App Administration Snippet resources.

Available since: 6.4.15.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\AppAdministrationSnippetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object6 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject6(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject6

try {
    $result = $apiInstance->createAppAdministrationSnippet($_response, $inline_object6);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppAdministrationSnippetApi->createAppAdministrationSnippet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object6** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject6**](../Model/InlineObject6.md)|  | [optional]

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

## `deleteAppAdministrationSnippet()`

```php
deleteAppAdministrationSnippet($id, $_response)
```

Delete a App Administration Snippet resource.

Available since: 6.4.15.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\AppAdministrationSnippetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the app_administration_snippet
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteAppAdministrationSnippet($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling AppAdministrationSnippetApi->deleteAppAdministrationSnippet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the app_administration_snippet |
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

## `getAppAdministrationSnippet()`

```php
getAppAdministrationSnippet($id): Success
```

Detailed information about a App Administration Snippet resource.

Available since: 6.4.15.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\AppAdministrationSnippetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the app_administration_snippet

try {
    $result = $apiInstance->getAppAdministrationSnippet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppAdministrationSnippetApi->getAppAdministrationSnippet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the app_administration_snippet |

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

## `getAppAdministrationSnippetList()`

```php
getAppAdministrationSnippetList($limit, $page, $query): Success
```

List with basic information of App Administration Snippet resources.

Available since: 6.4.15.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\AppAdministrationSnippetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getAppAdministrationSnippetList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppAdministrationSnippetApi->getAppAdministrationSnippetList: ', $e->getMessage(), PHP_EOL;
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

## `updateAppAdministrationSnippet()`

```php
updateAppAdministrationSnippet($id, $_response, $inline_object7): Success
```

Partially update information about a App Administration Snippet resource.

Available since: 6.4.15.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\AppAdministrationSnippetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the app_administration_snippet
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object7 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject7(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject7

try {
    $result = $apiInstance->updateAppAdministrationSnippet($id, $_response, $inline_object7);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppAdministrationSnippetApi->updateAppAdministrationSnippet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the app_administration_snippet |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object7** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject7**](../Model/InlineObject7.md)|  | [optional]

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
