# # DocumentJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationships**](DocumentJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**document_type_id** | **string** |  |
**file_type** | **string** |  |
**referenced_document_id** | **string** |  | [optional]
**order_id** | **string** |  |
**document_media_file_id** | **string** |  | [optional]
**order_version_id** | **string** |  | [optional]
**config** | **object** |  |
**sent** | **bool** |  | [optional]
**static** | **bool** |  | [optional]
**deep_link_code** | **string** |  |
**document_number** | **string** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
