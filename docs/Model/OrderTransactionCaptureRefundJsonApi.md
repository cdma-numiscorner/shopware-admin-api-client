# # OrderTransactionCaptureRefundJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderTransactionCaptureRefundJsonApiAllOfRelationships**](OrderTransactionCaptureRefundJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**version_id** | **string** |  | [optional]
**capture_id** | **string** |  |
**capture_version_id** | **string** |  | [optional]
**state_id** | **string** |  |
**external_reference** | **string** |  | [optional]
**reason** | **string** |  | [optional]
**amount** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfShippingCosts**](OrderJsonApiAllOfShippingCosts.md) |  |
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
