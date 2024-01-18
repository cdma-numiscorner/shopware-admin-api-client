# # StateMachine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**technical_name** | **string** |  |
**name** | **string** |  |
**custom_fields** | **object** |  | [optional]
**initial_state_id** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**states** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachineState[]**](StateMachineState.md) |  | [optional]
**transitions** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachineTransition[]**](StateMachineTransition.md) |  | [optional]
**history_entries** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachineHistory[]**](StateMachineHistory.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
