# # SeoUrlJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\SeoUrlJsonApiAllOfRelationships**](SeoUrlJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**sales_channel_id** | **string** |  | [optional]
**language_id** | **string** |  |
**foreign_key** | **string** |  |
**route_name** | **string** |  |
**path_info** | **string** |  |
**seo_path_info** | **string** |  |
**is_canonical** | **bool** |  | [optional]
**is_modified** | **bool** |  | [optional]
**is_deleted** | **bool** |  | [optional]
**url** | **string** | Runtime field, cannot be used as part of the criteria. | [optional]
**custom_fields** | **object** |  | [optional]
**is_valid** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
