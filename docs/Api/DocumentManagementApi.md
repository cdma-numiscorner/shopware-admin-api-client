# OpenAPI\ShopwareAdminApiClient\DocumentManagementApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDocuments()**](DocumentManagementApi.md#createDocuments) | **POST** /_action/order/document/{documentTypeName}/create | Create documents for orders
[**downloadDocument()**](DocumentManagementApi.md#downloadDocument) | **GET** /_action/document/{documentId}/{deepLinkCode} | Download a document
[**downloadDocuments()**](DocumentManagementApi.md#downloadDocuments) | **POST** /_action/order/document/download | Download a documents
[**numberRangeReserve()**](DocumentManagementApi.md#numberRangeReserve) | **GET** /_action/number-range/reserve/{type}/{saleschannel} | Reserve or preview a document number
[**uploadToDocument()**](DocumentManagementApi.md#uploadToDocument) | **POST** /_action/document/{documentId}/upload | Upload a file for a document


## `createDocuments()`

```php
createDocuments($document_type_name, $inline_object)
```

Create documents for orders

Creates documents for orders. Documents can for example be an invoice or a delivery note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type_name = 'document_type_name_example'; // string | The type of document to create
$inline_object = array(new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject()); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject[] | test

try {
    $apiInstance->createDocuments($document_type_name, $inline_object);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->createDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type_name** | **string**| The type of document to create |
 **inline_object** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject[]**](../Model/InlineObject.md)| test |

### Return type

void (empty response body)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadDocument()`

```php
downloadDocument($document_id, $deep_link_code, $download): \SplFileObject
```

Download a document

Download a document by its identifier and deep link code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 'document_id_example'; // string | Identifier of the document to be downloaded.
$deep_link_code = 'deep_link_code_example'; // string | A unique hash code which was generated when the document was created.
$download = false; // bool | This parameter controls the `Content-Disposition` header. If set to `true` the header will be set to `attachment` else `inline`.

try {
    $result = $apiInstance->downloadDocument($document_id, $deep_link_code, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->downloadDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**| Identifier of the document to be downloaded. |
 **deep_link_code** | **string**| A unique hash code which was generated when the document was created. |
 **download** | **bool**| This parameter controls the &#x60;Content-Disposition&#x60; header. If set to &#x60;true&#x60; the header will be set to &#x60;attachment&#x60; else &#x60;inline&#x60;. | [optional] [default to false]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadDocuments()`

```php
downloadDocuments($request_body): \SplFileObject
```

Download a documents

Download a multiple documents in one pdf file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[] | documentIds

try {
    $result = $apiInstance->downloadDocuments($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->downloadDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | [**string[]**](../Model/string.md)| documentIds | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `numberRangeReserve()`

```php
numberRangeReserve($type, $saleschannel, $preview): \OpenAPI\ShopwareAdminApiClient\Model\InlineResponse2008
```

Reserve or preview a document number

This endpoint provides functionality to reserve or preview a document number which can be used to create a new document using the `/_action/order/{orderId}/document/{documentTypeName}` endpoint.  The number generated by the endpoint will be reserved and the number pointer will be incremented with every call. For preview purposes, you can add the `?preview=1` parameter to the request. In that case, the number will not be incremented.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | `technicalName` of the document type (e.g. `document_invoice`). Available types can be fetched with the `/api/document-type endpoint`.
$saleschannel = 'saleschannel_example'; // string | Sales channel for the number range. Number ranges can be defined per sales channel, so you can pass a sales channel ID here.
$preview = True; // bool | If this parameter has a true value, the number will not actually be incremented, but only previewed.

try {
    $result = $apiInstance->numberRangeReserve($type, $saleschannel, $preview);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->numberRangeReserve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| &#x60;technicalName&#x60; of the document type (e.g. &#x60;document_invoice&#x60;). Available types can be fetched with the &#x60;/api/document-type endpoint&#x60;. |
 **saleschannel** | **string**| Sales channel for the number range. Number ranges can be defined per sales channel, so you can pass a sales channel ID here. |
 **preview** | **bool**| If this parameter has a true value, the number will not actually be incremented, but only previewed. | [optional]

### Return type

[**\OpenAPI\ShopwareAdminApiClient\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadToDocument()`

```php
uploadToDocument($document_id, $file_name, $extension, $body): \OpenAPI\ShopwareAdminApiClient\Model\InlineResponse2005
```

Upload a file for a document

Uploads a file for a document. This prevents the document from being dynamically generated and delivers the uploaded file instead, when the document is downloaded.  Note: * The document is required to be `static` * A document can only have one media file  The are two methods of providing a file to this route:  * Use a typical file upload and provide the file in the request  * Fetch the file from an url. This only works if the `shopware.media.enable_url_upload_feature` variable is set to true in the shop environment. To use file upload via url, the content type has to be `application/json` and the parameter `url` has to be provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\DocumentManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 'document_id_example'; // string | Identifier of the document the new file should be added to.
$file_name = 'file_name_example'; // string | Name of the uploaded file.
$extension = 'extension_example'; // string | Extension of the uploaded file. For example `pdf`
$body = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->uploadToDocument($document_id, $file_name, $extension, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentManagementApi->uploadToDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_id** | **string**| Identifier of the document the new file should be added to. |
 **file_name** | **string**| Name of the uploaded file. |
 **extension** | **string**| Extension of the uploaded file. For example &#x60;pdf&#x60; |
 **body** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\OpenAPI\ShopwareAdminApiClient\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`, `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
