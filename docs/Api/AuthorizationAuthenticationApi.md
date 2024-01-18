# OpenAPI\ShopwareAdminApiClient\AuthorizationAuthenticationApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**token()**](AuthorizationAuthenticationApi.md#token) | **POST** /oauth/token | Fetch an access token


## `token()`

```php
token($unknown_base_type): \OpenAPI\ShopwareAdminApiClient\Model\InlineResponse20010
```

Fetch an access token

Fetch a access token that can be used to perform authenticated requests. For more information take a look at the [Authentication documentation](https://shopware.stoplight.io/docs/admin-api/docs/concepts/authentication-authorisation.md).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\AuthorizationAuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unknown_base_type = new \OpenAPI\ShopwareAdminApiClient\Model\UNKNOWN_BASE_TYPE(); // \OpenAPI\ShopwareAdminApiClient\Model\UNKNOWN_BASE_TYPE

try {
    $result = $apiInstance->token($unknown_base_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizationAuthenticationApi->token: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unknown_base_type** | [**\OpenAPI\ShopwareAdminApiClient\Model\UNKNOWN_BASE_TYPE**](../Model/UNKNOWN_BASE_TYPE.md)|  |

### Return type

[**\OpenAPI\ShopwareAdminApiClient\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/vnd.api+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
