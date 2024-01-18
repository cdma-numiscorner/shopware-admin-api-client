# # OrderJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationships**](OrderJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**version_id** | **string** |  | [optional]
**auto_increment** | **int** |  | [optional] [readonly]
**order_number** | **string** |  | [optional]
**billing_address_id** | **string** |  |
**billing_address_version_id** | **string** |  | [optional]
**currency_id** | **string** |  |
**language_id** | **string** |  |
**sales_channel_id** | **string** |  |
**order_date_time** | [**\DateTime**](\DateTime.md) |  |
**order_date** | **string** |  | [optional] [readonly]
**price** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfPrice**](OrderJsonApiAllOfPrice.md) |  | [optional]
**amount_total** | **float** |  | [optional] [readonly]
**amount_net** | **float** |  | [optional] [readonly]
**position_price** | **float** |  | [optional] [readonly]
**tax_status** | **string** |  | [optional] [readonly]
**shipping_costs** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfShippingCosts**](OrderJsonApiAllOfShippingCosts.md) |  | [optional]
**shipping_total** | **float** |  | [optional] [readonly]
**currency_factor** | **float** |  |
**deep_link_code** | **string** |  | [optional]
**affiliate_code** | **string** |  | [optional]
**campaign_code** | **string** |  | [optional]
**customer_comment** | **string** |  | [optional]
**source** | **string** |  | [optional]
**state_id** | **string** |  |
**rule_ids** | **string[]** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_by_id** | **string** |  | [optional]
**updated_by_id** | **string** |  | [optional]
**item_rounding** | [**\OpenAPI\ShopwareAdminApiClient\Model\CurrencyJsonApiAllOfItemRounding**](CurrencyJsonApiAllOfItemRounding.md) |  |
**total_rounding** | [**\OpenAPI\ShopwareAdminApiClient\Model\CurrencyJsonApiAllOfItemRounding**](CurrencyJsonApiAllOfItemRounding.md) |  |
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
