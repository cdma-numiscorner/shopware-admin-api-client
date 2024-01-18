# # PaymentMethod

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**plugin_id** | **string** |  | [optional]
**handler_identifier** | **string** |  | [optional]
**name** | **string** |  |
**distinguishable_name** | **string** |  | [optional] [readonly]
**description** | **string** |  | [optional]
**position** | **int** |  | [optional]
**active** | **bool** |  | [optional]
**after_order_enabled** | **bool** |  | [optional]
**custom_fields** | **object** |  | [optional]
**availability_rule_id** | **string** |  | [optional]
**media_id** | **string** |  | [optional]
**formatted_handler_identifier** | **string** | Runtime field, cannot be used as part of the criteria. | [optional] [readonly]
**synchronous** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional] [readonly]
**asynchronous** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional] [readonly]
**prepared** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional] [readonly]
**refundable** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional] [readonly]
**recurring** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional] [readonly]
**short_name** | **string** | Runtime field, cannot be used as part of the criteria. | [optional]
**technical_name** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**media** | [**\OpenAPI\ShopwareAdminApiClient\Model\Media**](Media.md) |  | [optional]
**availability_rule** | [**\OpenAPI\ShopwareAdminApiClient\Model\Rule**](Rule.md) |  | [optional]
**sales_channel_default_assignments** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel[]**](SalesChannel.md) |  | [optional]
**plugin** | [**\OpenAPI\ShopwareAdminApiClient\Model\Plugin**](Plugin.md) |  | [optional]
**customers** | [**\OpenAPI\ShopwareAdminApiClient\Model\Customer[]**](Customer.md) |  | [optional]
**order_transactions** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderTransaction[]**](OrderTransaction.md) |  | [optional]
**sales_channels** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel[]**](SalesChannel.md) |  | [optional]
**app_payment_method** | [**\OpenAPI\ShopwareAdminApiClient\Model\AppPaymentMethod**](AppPaymentMethod.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
