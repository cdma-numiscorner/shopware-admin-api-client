# # StateMachineHistory

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**state_machine_id** | **string** |  |
**entity_name** | **string** |  |
**from_state_id** | **string** |  |
**to_state_id** | **string** |  |
**transition_action_name** | **string** |  | [optional]
**user_id** | **string** |  | [optional]
**entity_id** | **object** |  |
**referenced_id** | **string** |  | [optional]
**referenced_version_id** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**state_machine** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachine**](StateMachine.md) |  | [optional]
**from_state_machine_state** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachineState**](StateMachineState.md) |  | [optional]
**to_state_machine_state** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachineState**](StateMachineState.md) |  | [optional]
**user** | [**\OpenAPI\ShopwareAdminApiClient\Model\User**](User.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
