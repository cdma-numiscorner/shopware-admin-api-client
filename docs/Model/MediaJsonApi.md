# # MediaJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\MediaJsonApiAllOfRelationships**](MediaJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**user_id** | **string** |  | [optional]
**media_folder_id** | **string** |  | [optional]
**mime_type** | **string** |  | [optional] [readonly]
**file_extension** | **string** |  | [optional] [readonly]
**uploaded_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**file_name** | **string** |  | [optional] [readonly]
**file_size** | **int** |  | [optional] [readonly]
**meta_data** | **object** |  | [optional] [readonly]
**media_type** | **object** |  | [optional] [readonly]
**config** | **object** |  | [optional]
**alt** | **string** |  | [optional]
**title** | **string** |  | [optional]
**url** | **string** | Runtime field, cannot be used as part of the criteria. | [optional]
**path** | **string** |  | [optional]
**has_file** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional]
**private** | **bool** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**extensions** | [**\OpenAPI\ShopwareAdminApiClient\Model\MediaJsonApiAllOfExtensions**](MediaJsonApiAllOfExtensions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
