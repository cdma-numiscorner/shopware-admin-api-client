# OpenAPI\ShopwareAdminApiClient\PromotionIndividualCodeApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPromotionIndividualCode()**](PromotionIndividualCodeApi.md#createPromotionIndividualCode) | **POST** /promotion-individual-code | Create a new Promotion Individual Code resources.
[**deletePromotionIndividualCode()**](PromotionIndividualCodeApi.md#deletePromotionIndividualCode) | **DELETE** /promotion-individual-code/{id} | Delete a Promotion Individual Code resource.
[**getPromotionIndividualCode()**](PromotionIndividualCodeApi.md#getPromotionIndividualCode) | **GET** /promotion-individual-code/{id} | Detailed information about a Promotion Individual Code resource.
[**getPromotionIndividualCodeList()**](PromotionIndividualCodeApi.md#getPromotionIndividualCodeList) | **GET** /promotion-individual-code | List with basic information of Promotion Individual Code resources.
[**updatePromotionIndividualCode()**](PromotionIndividualCodeApi.md#updatePromotionIndividualCode) | **PATCH** /promotion-individual-code/{id} | Partially update information about a Promotion Individual Code resource.


## `createPromotionIndividualCode()`

```php
createPromotionIndividualCode($_response, $inline_object194): Success
```

Create a new Promotion Individual Code resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PromotionIndividualCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object194 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject194(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject194

try {
    $result = $apiInstance->createPromotionIndividualCode($_response, $inline_object194);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionIndividualCodeApi->createPromotionIndividualCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object194** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject194**](../Model/InlineObject194.md)|  | [optional]

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

## `deletePromotionIndividualCode()`

```php
deletePromotionIndividualCode($id, $_response)
```

Delete a Promotion Individual Code resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PromotionIndividualCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the promotion_individual_code
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deletePromotionIndividualCode($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling PromotionIndividualCodeApi->deletePromotionIndividualCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the promotion_individual_code |
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

## `getPromotionIndividualCode()`

```php
getPromotionIndividualCode($id): Success
```

Detailed information about a Promotion Individual Code resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PromotionIndividualCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the promotion_individual_code

try {
    $result = $apiInstance->getPromotionIndividualCode($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionIndividualCodeApi->getPromotionIndividualCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the promotion_individual_code |

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

## `getPromotionIndividualCodeList()`

```php
getPromotionIndividualCodeList($limit, $page, $query): Success
```

List with basic information of Promotion Individual Code resources.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PromotionIndividualCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getPromotionIndividualCodeList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionIndividualCodeApi->getPromotionIndividualCodeList: ', $e->getMessage(), PHP_EOL;
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

## `updatePromotionIndividualCode()`

```php
updatePromotionIndividualCode($id, $_response, $inline_object195): Success
```

Partially update information about a Promotion Individual Code resource.

Available since: 6.0.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\PromotionIndividualCodeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the promotion_individual_code
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object195 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject195(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject195

try {
    $result = $apiInstance->updatePromotionIndividualCode($id, $_response, $inline_object195);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionIndividualCodeApi->updatePromotionIndividualCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the promotion_individual_code |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object195** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject195**](../Model/InlineObject195.md)|  | [optional]

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
