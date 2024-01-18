# OpenAPI\ShopwareAdminApiClient\WebhookEventLogApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebhookEventLog()**](WebhookEventLogApi.md#createWebhookEventLog) | **POST** /webhook-event-log | Create a new Webhook Event Log resources.
[**deleteWebhookEventLog()**](WebhookEventLogApi.md#deleteWebhookEventLog) | **DELETE** /webhook-event-log/{id} | Delete a Webhook Event Log resource.
[**getWebhookEventLog()**](WebhookEventLogApi.md#getWebhookEventLog) | **GET** /webhook-event-log/{id} | Detailed information about a Webhook Event Log resource.
[**getWebhookEventLogList()**](WebhookEventLogApi.md#getWebhookEventLogList) | **GET** /webhook-event-log | List with basic information of Webhook Event Log resources.
[**updateWebhookEventLog()**](WebhookEventLogApi.md#updateWebhookEventLog) | **PATCH** /webhook-event-log/{id} | Partially update information about a Webhook Event Log resource.


## `createWebhookEventLog()`

```php
createWebhookEventLog($_response, $inline_object268): Success
```

Create a new Webhook Event Log resources.

Available since: 6.4.1.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\WebhookEventLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object268 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject268(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject268

try {
    $result = $apiInstance->createWebhookEventLog($_response, $inline_object268);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventLogApi->createWebhookEventLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object268** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject268**](../Model/InlineObject268.md)|  | [optional]

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

## `deleteWebhookEventLog()`

```php
deleteWebhookEventLog($id, $_response)
```

Delete a Webhook Event Log resource.

Available since: 6.4.1.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\WebhookEventLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the webhook_event_log
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.

try {
    $apiInstance->deleteWebhookEventLog($id, $_response);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventLogApi->deleteWebhookEventLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the webhook_event_log |
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

## `getWebhookEventLog()`

```php
getWebhookEventLog($id): Success
```

Detailed information about a Webhook Event Log resource.

Available since: 6.4.1.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\WebhookEventLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the webhook_event_log

try {
    $result = $apiInstance->getWebhookEventLog($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventLogApi->getWebhookEventLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the webhook_event_log |

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

## `getWebhookEventLogList()`

```php
getWebhookEventLogList($limit, $page, $query): Success
```

List with basic information of Webhook Event Log resources.

Available since: 6.4.1.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\WebhookEventLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Max amount of resources to be returned in a page
$page = 56; // int | The page to be returned
$query = 'query_example'; // string | Encoded SwagQL in JSON

try {
    $result = $apiInstance->getWebhookEventLogList($limit, $page, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventLogApi->getWebhookEventLogList: ', $e->getMessage(), PHP_EOL;
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

## `updateWebhookEventLog()`

```php
updateWebhookEventLog($id, $_response, $inline_object269): Success
```

Partially update information about a Webhook Event Log resource.

Available since: 6.4.1.0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\WebhookEventLogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identifier for the webhook_event_log
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object269 = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject269(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject269

try {
    $result = $apiInstance->updateWebhookEventLog($id, $_response, $inline_object269);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEventLogApi->updateWebhookEventLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Identifier for the webhook_event_log |
 **_response** | **string**| Data format for response. Empty if none is provided. | [optional]
 **inline_object269** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject269**](../Model/InlineObject269.md)|  | [optional]

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
