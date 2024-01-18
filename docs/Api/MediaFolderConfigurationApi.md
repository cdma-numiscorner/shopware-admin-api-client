# OpenAPI\ShopwareAdminApiClient\MediaFolderConfigurationApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMediaFolderConfiguration()**](MediaFolderConfigurationApi.md#createMediaFolderConfiguration) | **POST** /media-folder-configuration | Create a new Media Folder Configuration resources.
[**deleteMediaFolderConfiguration()**](MediaFolderConfigurationApi.md#deleteMediaFolderConfiguration) | **DELETE** /media-folder-configuration/{id} | Delete a Media Folder Configuration resource.
[**getMediaFolderConfiguration()**](MediaFolderConfigurationApi.md#getMediaFolderConfiguration) | **GET** /media-folder-configuration/{id} | Detailed information about a Media Folder Configuration resource.
[**getMediaFolderConfigurationList()**](MediaFolderConfigurationApi.md#getMediaFolderConfigurationList) | **GET** /media-folder-configuration | List with basic information of Media Folder Configuration resources.
[**updateMediaFolderConfiguration()**](MediaFolderConfigurationApi.md#updateMediaFolderConfiguration) | **PATCH** /media-folder-configuration/{id} | Partially update information about a Media Folder Configuration resource.


## `createMediaFolderConfiguration()`

```php
createMediaFolderConfiguration($_response, $inline_object106): Success
```

Create a new Media Folder Configuration resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MediaFolderConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object106 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject106(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject106

try {
    $result = $apiInstance->createMediaFolderConfiguration($_response, $inline_object106);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaFolderConfigurationApi->createMediaFolderConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object106** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject106**](../Model/InlineObject106.md)|  | [optional]

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

## `deleteMediaFolderConfiguration()`

```php
deleteMediaFolderConfiguration($id, $_response)
```

Delete a Media Folder Configuration resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MediaFolderConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the media_folder_configuration
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteMediaFolderConfiguration($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling MediaFolderConfigurationApi->deleteMediaFolderConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the media_folder_configuration |
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

## `getMediaFolderConfiguration()`

```php
getMediaFolderConfiguration($id): Success
```

Detailed information about a Media Folder Configuration resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MediaFolderConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the media_folder_configuration

try {
    $result = $apiInstance->getMediaFolderConfiguration($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaFolderConfigurationApi->getMediaFolderConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the media_folder_configuration |

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

## `getMediaFolderConfigurationList()`

```php
getMediaFolderConfigurationList($limit, $page, $query): Success
```

List with basic information of Media Folder Configuration resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MediaFolderConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getMediaFolderConfigurationList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaFolderConfigurationApi->getMediaFolderConfigurationList: ', $e->getMessage(), PHP_EOL;
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

## `updateMediaFolderConfiguration()`

```php
updateMediaFolderConfiguration($id, $_response, $inline_object107): Success
```

Partially update information about a Media Folder Configuration resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MediaFolderConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the media_folder_configuration
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object107 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject107(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject107

try {
    $result = $apiInstance->updateMediaFolderConfiguration($id, $_response, $inline_object107);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaFolderConfigurationApi->updateMediaFolderConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the media_folder_configuration |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object107** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject107**](../Model/InlineObject107.md)|  | [optional]

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
