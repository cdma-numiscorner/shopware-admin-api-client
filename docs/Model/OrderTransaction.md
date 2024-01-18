# # OrderTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version_id** | **string** |  | [optional]
**order_id** | **string** |  |
**order_version_id** | **string** |  | [optional]
**payment_method_id** | **string** |  |
**amount** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfShippingCosts**](OrderJsonApiAllOfShippingCosts.md) |  |
**state_id** | **string** |  |
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**state_machine_state** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachineState**](StateMachineState.md) |  | [optional]
**order** | [**\OpenAPI\ShopwareAdminApiClient\Model\Order**](Order.md) |  | [optional]
**payment_method** | [**\OpenAPI\ShopwareAdminApiClient\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**captures** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderTransactionCapture[]**](OrderTransactionCapture.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
