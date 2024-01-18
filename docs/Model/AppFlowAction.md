# # AppFlowAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**app_id** | **string** |  |
**name** | **string** |  |
**badge** | **string** |  | [optional]
**parameters** | **object** |  | [optional]
**config** | **object** |  | [optional]
**headers** | **object** |  | [optional]
**requirements** | **string[]** |  | [optional]
**icon_raw** | **string** |  | [optional]
**icon** | **string** | Runtime field, cannot be used as part of the criteria. | [optional] [readonly]
**sw_icon** | **string** |  | [optional]
**url** | **string** |  |
**delayable** | **bool** |  | [optional]
**label** | **string** |  |
**description** | **string** |  | [optional]
**headline** | **string** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**app** | [**\OpenAPI\ShopwareAdminApiClient\Model\App**](App.md) |  | [optional]
**flow_sequences** | [**\OpenAPI\ShopwareAdminApiClient\Model\FlowSequence[]**](FlowSequence.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
