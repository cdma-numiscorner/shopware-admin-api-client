# OpenAPI\ShopwareAdminApiClient\BulkOperationsApi

All URIs are relative to http://localhost:8000/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sync()**](BulkOperationsApi.md#sync) | **POST** /_action/sync | Bulk edit entities


## `sync()`

```php
sync($inline_object1, $fail_on_error, $indexing_behavior): \OpenAPI\ShopwareAdminApiClient\Model\InlineResponse2001
```

Bulk edit entities

Starts a sync process for the list of provided actions. This can be upserts and deletes on different entities to an asynchronous process in the background. You can control the behaviour with the `indexing-behavior` header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\BulkOperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object1 = array(new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject1()); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject1[]
$fail_on_error = true; // bool | To continue upcoming actions on errors, set the `fail-on-error` header to `false`.
$indexing_behavior = 'indexing_behavior_example'; // string | Controls the indexing behavior.     - `disable-indexing`: Data indexing is completely disabled

try {
    $result = $apiInstance->sync($inline_object1, $fail_on_error, $indexing_behavior);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkOperationsApi->sync: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object1** | [**\OpenAPI\ShopwareAdminApiClient\Model\InlineObject1[]**](../Model/InlineObject1.md)|  |
 **fail_on_error** | **bool**| To continue upcoming actions on errors, set the &#x60;fail-on-error&#x60; header to &#x60;false&#x60;. | [optional] [default to true]
 **indexing_behavior** | **string**| Controls the indexing behavior.     - &#x60;disable-indexing&#x60;: Data indexing is completely disabled | [optional]

### Return type

[**\OpenAPI\ShopwareAdminApiClient\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[oAuth](../../README.md#oAuth), [oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
