# OpenAPI\ShopwareAdminApiClient\ImportExportLogApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createImportExportLog()**](ImportExportLogApi.md#createImportExportLog) | **POST** /import-export-log | Create a new Import Export Log resources.
[**deleteImportExportLog()**](ImportExportLogApi.md#deleteImportExportLog) | **DELETE** /import-export-log/{id} | Delete a Import Export Log resource.
[**getImportExportLog()**](ImportExportLogApi.md#getImportExportLog) | **GET** /import-export-log/{id} | Detailed information about a Import Export Log resource.
[**getImportExportLogList()**](ImportExportLogApi.md#getImportExportLogList) | **GET** /import-export-log | List with basic information of Import Export Log resources.
[**updateImportExportLog()**](ImportExportLogApi.md#updateImportExportLog) | **PATCH** /import-export-log/{id} | Partially update information about a Import Export Log resource.


## `createImportExportLog()`

```php
createImportExportLog($_response, $inline_object78): Success
```

Create a new Import Export Log resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object78 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject78(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject78

try {
    $result = $apiInstance->createImportExportLog($_response, $inline_object78);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportLogApi->createImportExportLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object78** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject78**](../Model/InlineObject78.md)|  | [optional]

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

## `deleteImportExportLog()`

```php
deleteImportExportLog($id, $_response)
```

Delete a Import Export Log resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the import_export_log
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteImportExportLog($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportLogApi->deleteImportExportLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the import_export_log |
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

## `getImportExportLog()`

```php
getImportExportLog($id): Success
```

Detailed information about a Import Export Log resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the import_export_log

try {
    $result = $apiInstance->getImportExportLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportLogApi->getImportExportLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the import_export_log |

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

## `getImportExportLogList()`

```php
getImportExportLogList($limit, $page, $query): Success
```

List with basic information of Import Export Log resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getImportExportLogList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportLogApi->getImportExportLogList: ', $e->getMessage(), PHP_EOL;
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

## `updateImportExportLog()`

```php
updateImportExportLog($id, $_response, $inline_object79): Success
```

Partially update information about a Import Export Log resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\ImportExportLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the import_export_log
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object79 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject79(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject79

try {
    $result = $apiInstance->updateImportExportLog($id, $_response, $inline_object79);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImportExportLogApi->updateImportExportLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the import_export_log |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object79** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject79**](../Model/InlineObject79.md)|  | [optional]

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
