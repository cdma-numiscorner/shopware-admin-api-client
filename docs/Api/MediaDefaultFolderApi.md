# OpenAPI\ShopwareAdminApiClient\MediaDefaultFolderApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMediaDefaultFolder()**](MediaDefaultFolderApi.md#createMediaDefaultFolder) | **POST** /media-default-folder | Create a new Media Default Folder resources.
[**deleteMediaDefaultFolder()**](MediaDefaultFolderApi.md#deleteMediaDefaultFolder) | **DELETE** /media-default-folder/{id} | Delete a Media Default Folder resource.
[**getMediaDefaultFolder()**](MediaDefaultFolderApi.md#getMediaDefaultFolder) | **GET** /media-default-folder/{id} | Detailed information about a Media Default Folder resource.
[**getMediaDefaultFolderList()**](MediaDefaultFolderApi.md#getMediaDefaultFolderList) | **GET** /media-default-folder | List with basic information of Media Default Folder resources.
[**updateMediaDefaultFolder()**](MediaDefaultFolderApi.md#updateMediaDefaultFolder) | **PATCH** /media-default-folder/{id} | Partially update information about a Media Default Folder resource.


## `createMediaDefaultFolder()`

```php
createMediaDefaultFolder($_response, $inline_object102): Success
```

Create a new Media Default Folder resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MediaDefaultFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object102 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject102(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject102

try {
    $result = $apiInstance->createMediaDefaultFolder($_response, $inline_object102);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaDefaultFolderApi->createMediaDefaultFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object102** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject102**](../Model/InlineObject102.md)|  | [optional]

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

## `deleteMediaDefaultFolder()`

```php
deleteMediaDefaultFolder($id, $_response)
```

Delete a Media Default Folder resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MediaDefaultFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the media_default_folder
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteMediaDefaultFolder($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling MediaDefaultFolderApi->deleteMediaDefaultFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the media_default_folder |
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

## `getMediaDefaultFolder()`

```php
getMediaDefaultFolder($id): Success
```

Detailed information about a Media Default Folder resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MediaDefaultFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the media_default_folder

try {
    $result = $apiInstance->getMediaDefaultFolder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaDefaultFolderApi->getMediaDefaultFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the media_default_folder |

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

## `getMediaDefaultFolderList()`

```php
getMediaDefaultFolderList($limit, $page, $query): Success
```

List with basic information of Media Default Folder resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MediaDefaultFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getMediaDefaultFolderList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaDefaultFolderApi->getMediaDefaultFolderList: ', $e->getMessage(), PHP_EOL;
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

## `updateMediaDefaultFolder()`

```php
updateMediaDefaultFolder($id, $_response, $inline_object103): Success
```

Partially update information about a Media Default Folder resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MediaDefaultFolderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the media_default_folder
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object103 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject103(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject103

try {
    $result = $apiInstance->updateMediaDefaultFolder($id, $_response, $inline_object103);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaDefaultFolderApi->updateMediaDefaultFolder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the media_default_folder |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object103** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject103**](../Model/InlineObject103.md)|  | [optional]

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
