# OpenAPI\ShopwareAdminApiClient\MediaThumbnailSizeApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMediaThumbnailSize()**](MediaThumbnailSizeApi.md#createMediaThumbnailSize) | **POST** /media-thumbnail-size | Create a new Media Thumbnail Size resources.
[**deleteMediaThumbnailSize()**](MediaThumbnailSizeApi.md#deleteMediaThumbnailSize) | **DELETE** /media-thumbnail-size/{id} | Delete a Media Thumbnail Size resource.
[**getMediaThumbnailSize()**](MediaThumbnailSizeApi.md#getMediaThumbnailSize) | **GET** /media-thumbnail-size/{id} | Detailed information about a Media Thumbnail Size resource.
[**getMediaThumbnailSizeList()**](MediaThumbnailSizeApi.md#getMediaThumbnailSizeList) | **GET** /media-thumbnail-size | List with basic information of Media Thumbnail Size resources.
[**updateMediaThumbnailSize()**](MediaThumbnailSizeApi.md#updateMediaThumbnailSize) | **PATCH** /media-thumbnail-size/{id} | Partially update information about a Media Thumbnail Size resource.


## `createMediaThumbnailSize()`

```php
createMediaThumbnailSize($_response, $inline_object110): Success
```

Create a new Media Thumbnail Size resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MediaThumbnailSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object110 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject110(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject110

try {
    $result = $apiInstance->createMediaThumbnailSize($_response, $inline_object110);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaThumbnailSizeApi->createMediaThumbnailSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object110** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject110**](../Model/InlineObject110.md)|  | [optional]

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

## `deleteMediaThumbnailSize()`

```php
deleteMediaThumbnailSize($id, $_response)
```

Delete a Media Thumbnail Size resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MediaThumbnailSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the media_thumbnail_size
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteMediaThumbnailSize($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling MediaThumbnailSizeApi->deleteMediaThumbnailSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the media_thumbnail_size |
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

## `getMediaThumbnailSize()`

```php
getMediaThumbnailSize($id): Success
```

Detailed information about a Media Thumbnail Size resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MediaThumbnailSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the media_thumbnail_size

try {
    $result = $apiInstance->getMediaThumbnailSize($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaThumbnailSizeApi->getMediaThumbnailSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the media_thumbnail_size |

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

## `getMediaThumbnailSizeList()`

```php
getMediaThumbnailSizeList($limit, $page, $query): Success
```

List with basic information of Media Thumbnail Size resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MediaThumbnailSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getMediaThumbnailSizeList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaThumbnailSizeApi->getMediaThumbnailSizeList: ', $e->getMessage(), PHP_EOL;
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

## `updateMediaThumbnailSize()`

```php
updateMediaThumbnailSize($id, $_response, $inline_object111): Success
```

Partially update information about a Media Thumbnail Size resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MediaThumbnailSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the media_thumbnail_size
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object111 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject111(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject111

try {
    $result = $apiInstance->updateMediaThumbnailSize($id, $_response, $inline_object111);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaThumbnailSizeApi->updateMediaThumbnailSize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the media_thumbnail_size |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object111** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject111**](../Model/InlineObject111.md)|  | [optional]

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
