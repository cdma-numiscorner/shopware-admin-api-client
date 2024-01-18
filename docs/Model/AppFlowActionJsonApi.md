# # AppFlowActionJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\AppFlowActionJsonApiAllOfRelationships**](AppFlowActionJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
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

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
