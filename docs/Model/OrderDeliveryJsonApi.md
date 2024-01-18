# # OrderDeliveryJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationships**](OrderDeliveryJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**version_id** | **string** |  | [optional]
**order_id** | **string** |  |
**order_version_id** | **string** |  | [optional]
**shipping_order_address_id** | **string** |  |
**shipping_order_address_version_id** | **string** |  | [optional]
**shipping_method_id** | **string** |  |
**state_id** | **string** |  |
**tracking_codes** | **string[]** |  |
**shipping_date_earliest** | [**\DateTime**](\DateTime.md) |  |
**shipping_date_latest** | [**\DateTime**](\DateTime.md) |  |
**shipping_costs** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfShippingCosts**](OrderJsonApiAllOfShippingCosts.md) |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
