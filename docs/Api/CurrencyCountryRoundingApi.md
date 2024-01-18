# OpenAPI\ShopwareAdminApiClient\CurrencyCountryRoundingApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCurrencyCountryRounding()**](CurrencyCountryRoundingApi.md#createCurrencyCountryRounding) | **POST** /currency-country-rounding | Create a new Currency Country Rounding resources.
[**deleteCurrencyCountryRounding()**](CurrencyCountryRoundingApi.md#deleteCurrencyCountryRounding) | **DELETE** /currency-country-rounding/{id} | Delete a Currency Country Rounding resource.
[**getCurrencyCountryRounding()**](CurrencyCountryRoundingApi.md#getCurrencyCountryRounding) | **GET** /currency-country-rounding/{id} | Detailed information about a Currency Country Rounding resource.
[**getCurrencyCountryRoundingList()**](CurrencyCountryRoundingApi.md#getCurrencyCountryRoundingList) | **GET** /currency-country-rounding | List with basic information of Currency Country Rounding resources.
[**updateCurrencyCountryRounding()**](CurrencyCountryRoundingApi.md#updateCurrencyCountryRounding) | **PATCH** /currency-country-rounding/{id} | Partially update information about a Currency Country Rounding resource.


## `createCurrencyCountryRounding()`

```php
createCurrencyCountryRounding($_response, $inline_object38): Success
```

Create a new Currency Country Rounding resources.

Available since: 6.4.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CurrencyCountryRoundingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object38 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject38(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject38

try {
    $result = $apiInstance->createCurrencyCountryRounding($_response, $inline_object38);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyCountryRoundingApi->createCurrencyCountryRounding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object38** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject38**](../Model/InlineObject38.md)|  | [optional]

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

## `deleteCurrencyCountryRounding()`

```php
deleteCurrencyCountryRounding($id, $_response)
```

Delete a Currency Country Rounding resource.

Available since: 6.4.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CurrencyCountryRoundingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the currency_country_rounding
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteCurrencyCountryRounding($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyCountryRoundingApi->deleteCurrencyCountryRounding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the currency_country_rounding |
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

## `getCurrencyCountryRounding()`

```php
getCurrencyCountryRounding($id): Success
```

Detailed information about a Currency Country Rounding resource.

Available since: 6.4.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CurrencyCountryRoundingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the currency_country_rounding

try {
    $result = $apiInstance->getCurrencyCountryRounding($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyCountryRoundingApi->getCurrencyCountryRounding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the currency_country_rounding |

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

## `getCurrencyCountryRoundingList()`

```php
getCurrencyCountryRoundingList($limit, $page, $query): Success
```

List with basic information of Currency Country Rounding resources.

Available since: 6.4.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CurrencyCountryRoundingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getCurrencyCountryRoundingList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyCountryRoundingApi->getCurrencyCountryRoundingList: ', $e->getMessage(), PHP_EOL;
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

## `updateCurrencyCountryRounding()`

```php
updateCurrencyCountryRounding($id, $_response, $inline_object39): Success
```

Partially update information about a Currency Country Rounding resource.

Available since: 6.4.0.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\CurrencyCountryRoundingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the currency_country_rounding
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object39 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject39(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject39

try {
    $result = $apiInstance->updateCurrencyCountryRounding($id, $_response, $inline_object39);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyCountryRoundingApi->updateCurrencyCountryRounding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the currency_country_rounding |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object39** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject39**](../Model/InlineObject39.md)|  | [optional]

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
