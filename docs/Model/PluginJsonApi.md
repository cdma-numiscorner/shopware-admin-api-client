# # PluginJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\PluginJsonApiAllOfRelationships**](PluginJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**base_class** | **string** |  |
**name** | **string** |  |
**composer_name** | **string** |  | [optional]
**autoload** | **object** |  |
**active** | **bool** |  | [optional]
**managed_by_composer** | **bool** |  | [optional]
**path** | **string** |  | [optional]
**author** | **string** |  | [optional]
**copyright** | **string** |  | [optional]
**license** | **string** |  | [optional]
**version** | **string** |  |
**upgrade_version** | **string** |  | [optional]
**installed_at** | [**\DateTime**](\DateTime.md) |  | [optional]
**upgraded_at** | [**\DateTime**](\DateTime.md) |  | [optional]
**icon** | **string** | Runtime field, cannot be used as part of the criteria. | [optional] [readonly]
**label** | **string** |  |
**description** | **string** |  | [optional]
**manufacturer_link** | **string** |  | [optional]
**support_link** | **string** |  | [optional]
**changelog** | **object** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
