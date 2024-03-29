# OpenAPI\ShopwareAdminApiClient\AssetManagementApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**upload()**](AssetManagementApi.md#upload) | **POST** /_action/media/{mediaId}/upload | Upload a file to a media entity


## `upload()`

```php
upload($media_id, $extension, $file_name, $body)
```

Upload a file to a media entity

Adds a new file to a media entity. If the entity has an existing file, it will be replaced.  The are two methods of providing a file to this route:  * Use a typical file upload and provide the file in the request  * Fetch the file from an url. This only works if the `shopware.media.enable_url_upload_feature` variable is set to true in the shop environment. To use file upload via url, the content type has to be `application/json` and the parameter `url` has to be provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\AssetManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_id = 'media_id_example'; // string | Identifier of the media entity.
$extension = 'extension_example'; // string | Extension of the uploaded file. For example `png`
$file_name = 'file_name_example'; // string | Name of the uploaded file. If not provided the media identifier will be used as name
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $apiInstance->upload($media_id, $extension, $file_name, $body);
} catch (Exception $e) {
    echo 'Exception when calling AssetManagementApi->upload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_id** | **string**| Identifier of the media entity. |
 **extension** | **string**| Extension of the uploaded file. For example &#x60;png&#x60; |
 **file_name** | **string**| Name of the uploaded file. If not provided the media identifier will be used as name | [optional]
 **body** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`, `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
