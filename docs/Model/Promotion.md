# # Promotion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  |
**active** | **bool** |  |
**valid_from** | [**\DateTime**](\DateTime.md) |  | [optional]
**valid_until** | [**\DateTime**](\DateTime.md) |  | [optional]
**max_redemptions_global** | **int** |  | [optional]
**max_redemptions_per_customer** | **int** |  | [optional]
**priority** | **int** |  |
**exclusive** | **bool** |  |
**code** | **string** |  | [optional]
**use_codes** | **bool** |  |
**use_individual_codes** | **bool** |  |
**individual_code_pattern** | **string** |  | [optional]
**use_set_groups** | **bool** |  |
**customer_restriction** | **bool** |  | [optional]
**prevent_combination** | **bool** |  |
**order_count** | **int** |  | [optional] [readonly]
**orders_per_customer_count** | **object** |  | [optional] [readonly]
**exclusion_ids** | **string[]** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**setgroups** | [**\OpenAPI\ShopwareAdminApiClient\Model\PromotionSetgroup[]**](PromotionSetgroup.md) |  | [optional]
**sales_channels** | [**\OpenAPI\ShopwareAdminApiClient\Model\PromotionSalesChannel[]**](PromotionSalesChannel.md) |  | [optional]
**discounts** | [**\OpenAPI\ShopwareAdminApiClient\Model\PromotionDiscount[]**](PromotionDiscount.md) |  | [optional]
**individual_codes** | [**\OpenAPI\ShopwareAdminApiClient\Model\PromotionIndividualCode[]**](PromotionIndividualCode.md) |  | [optional]
**persona_rules** | [**\OpenAPI\ShopwareAdminApiClient\Model\Rule[]**](Rule.md) |  | [optional]
**persona_customers** | [**\OpenAPI\ShopwareAdminApiClient\Model\Customer[]**](Customer.md) |  | [optional]
**order_rules** | [**\OpenAPI\ShopwareAdminApiClient\Model\Rule[]**](Rule.md) |  | [optional]
**cart_rules** | [**\OpenAPI\ShopwareAdminApiClient\Model\Rule[]**](Rule.md) |  | [optional]
**order_line_items** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItem[]**](OrderLineItem.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
