# # PaymentMethodJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationships**](PaymentMethodJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**plugin_id** | **string** |  | [optional]
**handler_identifier** | **string** |  | [optional]
**name** | **string** |  |
**distinguishable_name** | **string** |  | [optional] [readonly]
**description** | **string** |  | [optional]
**position** | **int** |  | [optional]
**active** | **bool** |  | [optional]
**after_order_enabled** | **bool** |  | [optional]
**custom_fields** | **object** |  | [optional]
**availability_rule_id** | **string** |  | [optional]
**media_id** | **string** |  | [optional]
**formatted_handler_identifier** | **string** | Runtime field, cannot be used as part of the criteria. | [optional] [readonly]
**synchronous** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional] [readonly]
**asynchronous** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional] [readonly]
**prepared** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional] [readonly]
**refundable** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional] [readonly]
**recurring** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional] [readonly]
**short_name** | **string** | Runtime field, cannot be used as part of the criteria. | [optional]
**technical_name** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
