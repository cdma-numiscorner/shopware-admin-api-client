# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
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
**state_machine_state** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachineState**](StateMachineState.md) |  | [optional]
**order_customer** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderCustomer**](OrderCustomer.md) |  | [optional]
**currency** | [**\OpenAPI\ShopwareAdminApiClient\Model\Currency**](Currency.md) |  | [optional]
**language** | [**\OpenAPI\ShopwareAdminApiClient\Model\Language**](Language.md) |  | [optional]
**sales_channel** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel**](SalesChannel.md) |  | [optional]
**addresses** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderAddress[]**](OrderAddress.md) |  | [optional]
**billing_address** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderAddress**](OrderAddress.md) |  | [optional]
**deliveries** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderDelivery[]**](OrderDelivery.md) |  | [optional]
**line_items** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItem[]**](OrderLineItem.md) |  | [optional]
**transactions** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderTransaction[]**](OrderTransaction.md) |  | [optional]
**documents** | [**\OpenAPI\ShopwareAdminApiClient\Model\Document[]**](Document.md) |  | [optional]
**tags** | [**\OpenAPI\ShopwareAdminApiClient\Model\Tag[]**](Tag.md) |  | [optional]
**created_by** | [**\OpenAPI\ShopwareAdminApiClient\Model\User**](User.md) |  | [optional]
**updated_by** | [**\OpenAPI\ShopwareAdminApiClient\Model\User**](User.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
