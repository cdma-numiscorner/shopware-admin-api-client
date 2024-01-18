# # UserJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\UserJsonApiAllOfRelationships**](UserJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**locale_id** | **string** |  |
**username** | **string** |  |
**first_name** | **string** |  |
**last_name** | **string** |  |
**title** | **string** |  | [optional]
**email** | **string** |  |
**active** | **bool** |  | [optional]
**admin** | **bool** |  | [optional]
**last_updated_password_at** | [**\DateTime**](\DateTime.md) |  | [optional]
**time_zone** | **string** |  |
**custom_fields** | **object** |  | [optional]
**avatar_id** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**extensions** | [**\OpenAPI\ShopwareAdminApiClient\Model\UserJsonApiAllOfExtensions**](UserJsonApiAllOfExtensions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
