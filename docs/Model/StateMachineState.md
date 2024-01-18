# # StateMachineState

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**technical_name** | **string** |  |
**name** | **string** |  |
**state_machine_id** | **string** |  |
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**state_machine** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachine**](StateMachine.md) |  | [optional]
**from_state_machine_transitions** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachineTransition[]**](StateMachineTransition.md) |  | [optional]
**to_state_machine_transitions** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachineTransition[]**](StateMachineTransition.md) |  | [optional]
**order_transactions** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderTransaction[]**](OrderTransaction.md) |  | [optional]
**order_deliveries** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderDelivery[]**](OrderDelivery.md) |  | [optional]
**orders** | [**\OpenAPI\ShopwareAdminApiClient\Model\Order[]**](Order.md) |  | [optional]
**order_transaction_captures** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderTransactionCapture[]**](OrderTransactionCapture.md) |  | [optional]
**order_transaction_capture_refunds** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderTransactionCaptureRefund[]**](OrderTransactionCaptureRefund.md) |  | [optional]
**to_state_machine_history_entries** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachineHistory[]**](StateMachineHistory.md) |  | [optional]
**from_state_machine_history_entries** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachineHistory[]**](StateMachineHistory.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
