# # OrderDelivery

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
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
**state_machine_state** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachineState**](StateMachineState.md) |  | [optional]
**order** | [**\OpenAPI\ShopwareAdminApiClient\Model\Order**](Order.md) |  | [optional]
**shipping_order_address** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderAddress**](OrderAddress.md) |  | [optional]
**shipping_method** | [**\OpenAPI\ShopwareAdminApiClient\Model\ShippingMethod**](ShippingMethod.md) |  | [optional]
**positions** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryPosition[]**](OrderDeliveryPosition.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
