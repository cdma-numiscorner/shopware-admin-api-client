# OpenAPI\ShopwareAdminApiClient\MailOperationsApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**build()**](MailOperationsApi.md#build) | **POST** /_action/mail-template/build | Preview a mail template
[**send()**](MailOperationsApi.md#send) | **POST** /_action/mail-template/send | Send a mail
[**validate()**](MailOperationsApi.md#validate) | **POST** /_action/mail-template/validate | Validate a mail content


## `build()`

```php
build($inline_object272): string
```

Preview a mail template

Generates a preview of a mail template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MailOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object272 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject272(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject272

try {
    $result = $apiInstance->build($inline_object272);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailOperationsApi->build: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object272** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject272**](../Model/InlineObject272.md)|  |

### Return type

**string**

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `send()`

```php
send($inline_object270): \OpenAPI\ShopwareAdminApiClient\Model\InlineResponse200
```

Send a mail

Generates a mail from a mail template and sends it to the customer.  Take a look at the `salesChannel` entity for possible values. For example `{{ salesChannel.name }}` can be used.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MailOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object270 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject270(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject270

try {
    $result = $apiInstance->send($inline_object270);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailOperationsApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object270** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject270**](../Model/InlineObject270.md)|  |

### Return type

[**\OpenAPI\ShopwareAdminApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validate()`

```php
validate($inline_object271)
```

Validate a mail content

Validates if content for a mail can be rendered without sending an email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\MailOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object271 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject271(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject271

try {
    $apiInstance->validate($inline_object271);
} catch (Exception $e) {
    echo 'Exception when calling MailOperationsApi->validate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object271** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject271**](../Model/InlineObject271.md)|  |

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
