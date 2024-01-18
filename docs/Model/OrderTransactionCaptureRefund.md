# # OrderTransactionCaptureRefund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version_id** | **string** |  | [optional]
**capture_id** | **string** |  |
**capture_version_id** | **string** |  | [optional]
**state_id** | **string** |  |
**external_reference** | **string** |  | [optional]
**reason** | **string** |  | [optional]
**amount** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfShippingCosts**](OrderJsonApiAllOfShippingCosts.md) |  |
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**state_machine_state** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachineState**](StateMachineState.md) |  | [optional]
**transaction_capture** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderTransactionCapture**](OrderTransactionCapture.md) |  | [optional]
**positions** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderTransactionCaptureRefundPosition[]**](OrderTransactionCaptureRefundPosition.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
