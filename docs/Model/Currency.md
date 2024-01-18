# # Currency

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**factor** | **float** |  |
**symbol** | **string** |  |
**iso_code** | **string** |  |
**short_name** | **string** |  |
**name** | **string** |  |
**position** | **int** |  | [optional]
**is_system_default** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional]
**tax_free_from** | **float** |  | [optional]
**custom_fields** | **object** |  | [optional]
**item_rounding** | [**\OpenAPI\ShopwareAdminApiClient\Model\CurrencyJsonApiAllOfItemRounding**](CurrencyJsonApiAllOfItemRounding.md) |  |
**total_rounding** | [**\OpenAPI\ShopwareAdminApiClient\Model\CurrencyJsonApiAllOfItemRounding**](CurrencyJsonApiAllOfItemRounding.md) |  |
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**sales_channel_default_assignments** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel[]**](SalesChannel.md) |  | [optional]
**orders** | [**\OpenAPI\ShopwareAdminApiClient\Model\Order[]**](Order.md) |  | [optional]
**sales_channels** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel[]**](SalesChannel.md) |  | [optional]
**sales_channel_domains** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannelDomain[]**](SalesChannelDomain.md) |  | [optional]
**promotion_discount_prices** | [**\OpenAPI\ShopwareAdminApiClient\Model\PromotionDiscountPrices[]**](PromotionDiscountPrices.md) |  | [optional]
**product_exports** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductExport[]**](ProductExport.md) |  | [optional]
**country_roundings** | [**\OpenAPI\ShopwareAdminApiClient\Model\CurrencyCountryRounding[]**](CurrencyCountryRounding.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
