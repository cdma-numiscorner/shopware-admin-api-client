# OpenAPI\ShopwareAdminApiClient\DocumentBaseConfigSalesChannelApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDocumentBaseConfigSalesChannel()**](DocumentBaseConfigSalesChannelApi.md#createDocumentBaseConfigSalesChannel) | **POST** /document-base-config-sales-channel | Create a new Document Base Config Sales Channel resources.
[**deleteDocumentBaseConfigSalesChannel()**](DocumentBaseConfigSalesChannelApi.md#deleteDocumentBaseConfigSalesChannel) | **DELETE** /document-base-config-sales-channel/{id} | Delete a Document Base Config Sales Channel resource.
[**getDocumentBaseConfigSalesChannel()**](DocumentBaseConfigSalesChannelApi.md#getDocumentBaseConfigSalesChannel) | **GET** /document-base-config-sales-channel/{id} | Detailed information about a Document Base Config Sales Channel resource.
[**getDocumentBaseConfigSalesChannelList()**](DocumentBaseConfigSalesChannelApi.md#getDocumentBaseConfigSalesChannelList) | **GET** /document-base-config-sales-channel | List with basic information of Document Base Config Sales Channel resources.
[**updateDocumentBaseConfigSalesChannel()**](DocumentBaseConfigSalesChannelApi.md#updateDocumentBaseConfigSalesChannel) | **PATCH** /document-base-config-sales-channel/{id} | Partially update information about a Document Base Config Sales Channel resource.


## `createDocumentBaseConfigSalesChannel()`

```php
createDocumentBaseConfigSalesChannel($_response, $inline_object66): Success
```

Create a new Document Base Config Sales Channel resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\DocumentBaseConfigSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object66 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject66(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject66

try {
    $result = $apiInstance->createDocumentBaseConfigSalesChannel($_response, $inline_object66);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentBaseConfigSalesChannelApi->createDocumentBaseConfigSalesChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object66** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject66**](../Model/InlineObject66.md)|  | [optional]

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

## `deleteDocumentBaseConfigSalesChannel()`

```php
deleteDocumentBaseConfigSalesChannel($id, $_response)
```

Delete a Document Base Config Sales Channel resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\DocumentBaseConfigSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the document_base_config_sales_channel
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteDocumentBaseConfigSalesChannel($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling DocumentBaseConfigSalesChannelApi->deleteDocumentBaseConfigSalesChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the document_base_config_sales_channel |
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

## `getDocumentBaseConfigSalesChannel()`

```php
getDocumentBaseConfigSalesChannel($id): Success
```

Detailed information about a Document Base Config Sales Channel resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\DocumentBaseConfigSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the document_base_config_sales_channel

try {
    $result = $apiInstance->getDocumentBaseConfigSalesChannel($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentBaseConfigSalesChannelApi->getDocumentBaseConfigSalesChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the document_base_config_sales_channel |

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

## `getDocumentBaseConfigSalesChannelList()`

```php
getDocumentBaseConfigSalesChannelList($limit, $page, $query): Success
```

List with basic information of Document Base Config Sales Channel resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\DocumentBaseConfigSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getDocumentBaseConfigSalesChannelList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentBaseConfigSalesChannelApi->getDocumentBaseConfigSalesChannelList: ', $e->getMessage(), PHP_EOL;
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

## `updateDocumentBaseConfigSalesChannel()`

```php
updateDocumentBaseConfigSalesChannel($id, $_response, $inline_object67): Success
```

Partially update information about a Document Base Config Sales Channel resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\DocumentBaseConfigSalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the document_base_config_sales_channel
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object67 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject67(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject67

try {
    $result = $apiInstance->updateDocumentBaseConfigSalesChannel($id, $_response, $inline_object67);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentBaseConfigSalesChannelApi->updateDocumentBaseConfigSalesChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the document_base_config_sales_channel |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object67** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject67**](../Model/InlineObject67.md)|  | [optional]

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
