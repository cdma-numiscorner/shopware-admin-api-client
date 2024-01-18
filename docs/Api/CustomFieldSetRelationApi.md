# OpenAPI\ShopwareAdminApiClient\CustomFieldSetRelationApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomFieldSetRelation()**](CustomFieldSetRelationApi.md#createCustomFieldSetRelation) | **POST** /custom-field-set-relation | Create a new Custom Field Set Relation resources.
[**deleteCustomFieldSetRelation()**](CustomFieldSetRelationApi.md#deleteCustomFieldSetRelation) | **DELETE** /custom-field-set-relation/{id} | Delete a Custom Field Set Relation resource.
[**getCustomFieldSetRelation()**](CustomFieldSetRelationApi.md#getCustomFieldSetRelation) | **GET** /custom-field-set-relation/{id} | Detailed information about a Custom Field Set Relation resource.
[**getCustomFieldSetRelationList()**](CustomFieldSetRelationApi.md#getCustomFieldSetRelationList) | **GET** /custom-field-set-relation | List with basic information of Custom Field Set Relation resources.
[**updateCustomFieldSetRelation()**](CustomFieldSetRelationApi.md#updateCustomFieldSetRelation) | **PATCH** /custom-field-set-relation/{id} | Partially update information about a Custom Field Set Relation resource.


## `createCustomFieldSetRelation()`

```php
createCustomFieldSetRelation($_response, $inline_object46): Success
```

Create a new Custom Field Set Relation resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object46 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject46(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject46

try {
    $result = $apiInstance->createCustomFieldSetRelation($_response, $inline_object46);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->createCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object46** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject46**](../Model/InlineObject46.md)|  | [optional]

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

## `deleteCustomFieldSetRelation()`

```php
deleteCustomFieldSetRelation($id, $_response)
```

Delete a Custom Field Set Relation resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the custom_field_set_relation
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteCustomFieldSetRelation($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->deleteCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the custom_field_set_relation |
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

## `getCustomFieldSetRelation()`

```php
getCustomFieldSetRelation($id): Success
```

Detailed information about a Custom Field Set Relation resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the custom_field_set_relation

try {
    $result = $apiInstance->getCustomFieldSetRelation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->getCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the custom_field_set_relation |

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

## `getCustomFieldSetRelationList()`

```php
getCustomFieldSetRelationList($limit, $page, $query): Success
```

List with basic information of Custom Field Set Relation resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getCustomFieldSetRelationList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->getCustomFieldSetRelationList: ', $e->getMessage(), PHP_EOL;
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

## `updateCustomFieldSetRelation()`

```php
updateCustomFieldSetRelation($id, $_response, $inline_object47): Success
```

Partially update information about a Custom Field Set Relation resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CustomFieldSetRelationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the custom_field_set_relation
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object47 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject47(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject47

try {
    $result = $apiInstance->updateCustomFieldSetRelation($id, $_response, $inline_object47);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldSetRelationApi->updateCustomFieldSetRelation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the custom_field_set_relation |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object47** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject47**](../Model/InlineObject47.md)|  | [optional]

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
