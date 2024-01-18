# # AppPaymentMethodJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\AppPaymentMethodJsonApiAllOfRelationships**](AppPaymentMethodJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**app_name** | **string** |  |
**identifier** | **string** |  |
**pay_url** | **string** |  | [optional]
**finalize_url** | **string** |  | [optional]
**validate_url** | **string** |  | [optional]
**capture_url** | **string** |  | [optional]
**refund_url** | **string** |  | [optional]
**recurring_url** | **string** |  | [optional]
**app_id** | **string** |  | [optional]
**original_media_id** | **string** |  | [optional]
**payment_method_id** | **string** |  |
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
