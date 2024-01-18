# # OrderLineItemJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationships**](OrderLineItemJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**version_id** | **string** |  | [optional]
**order_id** | **string** |  |
**order_version_id** | **string** |  | [optional]
**product_id** | **string** |  | [optional]
**product_version_id** | **string** |  | [optional]
**promotion_id** | **string** |  | [optional] [readonly]
**parent_id** | **string** |  | [optional]
**parent_version_id** | **string** |  | [optional]
**cover_id** | **string** |  | [optional]
**identifier** | **string** |  |
**referenced_id** | **string** |  | [optional]
**quantity** | **int** |  |
**label** | **string** |  |
**payload** | **object** |  | [optional]
**good** | **bool** |  | [optional]
**removable** | **bool** |  | [optional]
**stackable** | **bool** |  | [optional]
**position** | **int** |  |
**states** | **string[]** |  |
**price** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfShippingCosts**](OrderJsonApiAllOfShippingCosts.md) |  |
**price_definition** | **object** |  | [optional]
**unit_price** | **float** |  | [optional]
**total_price** | **float** |  | [optional]
**description** | **string** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
