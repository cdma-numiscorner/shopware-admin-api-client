# # FlowSequence

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**flow_id** | **string** |  |
**rule_id** | **string** |  | [optional]
**action_name** | **string** |  | [optional]
**config** | **object** |  | [optional]
**position** | **int** |  | [optional]
**display_group** | **int** |  | [optional]
**true_case** | **bool** |  | [optional]
**parent_id** | **string** |  | [optional]
**custom_fields** | **object** |  | [optional]
**app_flow_action_id** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**flow** | [**\OpenAPI\ShopwareAdminApiClient\Model\Flow**](Flow.md) |  | [optional]
**rule** | [**\OpenAPI\ShopwareAdminApiClient\Model\Rule**](Rule.md) |  | [optional]
**parent** | [**\OpenAPI\ShopwareAdminApiClient\Model\FlowSequence**](FlowSequence.md) |  | [optional]
**children** | [**\OpenAPI\ShopwareAdminApiClient\Model\FlowSequence[]**](FlowSequence.md) |  | [optional]
**app_flow_action** | [**\OpenAPI\ShopwareAdminApiClient\Model\AppFlowAction**](AppFlowAction.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
