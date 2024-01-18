# # CustomEntityJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\Relationships**](Relationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**name** | **string** |  |
**fields** | **object** |  |
**flags** | **object** |  | [optional]
**app_id** | **string** |  | [optional]
**plugin_id** | **string** |  | [optional]
**cms_aware** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional]
**store_api_aware** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional]
**custom_fields_aware** | **bool** |  | [optional]
**label_property** | **string** |  | [optional]
**deleted_at** | [**\DateTime**](\DateTime.md) |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
