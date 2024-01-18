# # CategoryJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\CategoryJsonApiAllOfRelationships**](CategoryJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**version_id** | **string** |  | [optional]
**parent_id** | **string** |  | [optional]
**parent_version_id** | **string** |  | [optional]
**after_category_id** | **string** |  | [optional]
**after_category_version_id** | **string** |  | [optional]
**media_id** | **string** |  | [optional]
**display_nested_products** | **bool** |  |
**auto_increment** | **int** |  | [optional] [readonly]
**breadcrumb** | **object[]** |  | [optional] [readonly]
**level** | **int** |  | [optional] [readonly]
**path** | **string** |  | [optional] [readonly]
**child_count** | **int** |  | [optional] [readonly]
**product_assignment_type** | **string** |  |
**visible** | **bool** |  | [optional]
**active** | **bool** |  | [optional]
**cms_page_id_switched** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional]
**visible_child_count** | **int** | Runtime field, cannot be used as part of the criteria. | [optional]
**name** | **string** |  |
**custom_fields** | **object** |  | [optional]
**slot_config** | **object** |  | [optional]
**link_type** | **string** |  | [optional]
**internal_link** | **string** |  | [optional]
**external_link** | **string** |  | [optional]
**link_new_tab** | **bool** |  | [optional]
**description** | **string** |  | [optional]
**meta_title** | **string** |  | [optional]
**meta_description** | **string** |  | [optional]
**keywords** | **string** |  | [optional]
**cms_page_id** | **string** |  | [optional]
**cms_page_version_id** | **string** |  | [optional]
**product_stream_id** | **string** |  | [optional]
**custom_entity_type_id** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
