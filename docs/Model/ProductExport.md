# # ProductExport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**product_stream_id** | **string** |  |
**storefront_sales_channel_id** | **string** |  |
**sales_channel_id** | **string** |  |
**sales_channel_domain_id** | **string** |  |
**currency_id** | **string** |  |
**file_name** | **string** |  |
**access_key** | **string** |  |
**encoding** | **string** |  |
**file_format** | **string** |  |
**include_variants** | **bool** |  | [optional]
**generate_by_cronjob** | **bool** |  |
**generated_at** | [**\DateTime**](\DateTime.md) |  | [optional]
**interval** | **int** |  |
**header_template** | **string** |  | [optional]
**body_template** | **string** |  | [optional]
**footer_template** | **string** |  | [optional]
**paused_schedule** | **bool** |  | [optional]
**is_running** | **bool** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**product_stream** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductStream**](ProductStream.md) |  | [optional]
**storefront_sales_channel** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel**](SalesChannel.md) |  | [optional]
**sales_channel** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel**](SalesChannel.md) |  | [optional]
**sales_channel_domain** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannelDomain**](SalesChannelDomain.md) |  | [optional]
**currency** | [**\OpenAPI\ShopwareAdminApiClient\Model\Currency**](Currency.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
