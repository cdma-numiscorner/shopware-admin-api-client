# # ShippingMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  |
**active** | **bool** |  | [optional]
**position** | **int** |  | [optional]
**custom_fields** | **object** |  | [optional]
**availability_rule_id** | **string** |  |
**media_id** | **string** |  | [optional]
**delivery_time_id** | **string** |  |
**tax_type** | **string** |  |
**tax_id** | **string** |  | [optional]
**description** | **string** |  | [optional]
**tracking_url** | **string** |  | [optional]
**technical_name** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**delivery_time** | [**\OpenAPI\ShopwareAdminApiClient\Model\DeliveryTime**](DeliveryTime.md) |  | [optional]
**availability_rule** | [**\OpenAPI\ShopwareAdminApiClient\Model\Rule**](Rule.md) |  | [optional]
**prices** | [**\OpenAPI\ShopwareAdminApiClient\Model\ShippingMethodPrice[]**](ShippingMethodPrice.md) |  | [optional]
**media** | [**\OpenAPI\ShopwareAdminApiClient\Model\Media**](Media.md) |  | [optional]
**tags** | [**\OpenAPI\ShopwareAdminApiClient\Model\Tag[]**](Tag.md) |  | [optional]
**order_deliveries** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderDelivery[]**](OrderDelivery.md) |  | [optional]
**sales_channels** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel[]**](SalesChannel.md) |  | [optional]
**sales_channel_default_assignments** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel[]**](SalesChannel.md) |  | [optional]
**tax** | [**\OpenAPI\ShopwareAdminApiClient\Model\Tax**](Tax.md) |  | [optional]
**app_shipping_method** | [**\OpenAPI\ShopwareAdminApiClient\Model\AppShippingMethod**](AppShippingMethod.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
