# # PromotionDiscount

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**promotion_id** | **string** |  |
**scope** | **string** |  |
**type** | **string** |  |
**value** | **float** |  |
**consider_advanced_rules** | **bool** |  |
**max_value** | **float** |  | [optional]
**sorter_key** | **string** |  | [optional]
**applier_key** | **string** |  | [optional]
**usage_key** | **string** |  | [optional]
**picker_key** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**promotion** | [**\OpenAPI\ShopwareAdminApiClient\Model\Promotion**](Promotion.md) |  | [optional]
**discount_rules** | [**\OpenAPI\ShopwareAdminApiClient\Model\Rule[]**](Rule.md) |  | [optional]
**promotion_discount_prices** | [**\OpenAPI\ShopwareAdminApiClient\Model\PromotionDiscountPrices[]**](PromotionDiscountPrices.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
