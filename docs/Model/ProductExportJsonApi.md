# # ProductExportJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductExportJsonApiAllOfRelationships**](ProductExportJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**product_stream_id** | **string** |  |
**storefront_sales_channel_id** | **string** |  |
**sales_channel_id** | **string** |  |
**sales_channel_domain_id** | **string** |  |
**currency_id** | **string** |  |
**file_name** | **string** |  |
**access_key** | **string** |  |
**encoding** | **string** |  |
**file_format** | **string** |  |
**include_variants** | **bool** |  | [optional]
**generate_by_cronjob** | **bool** |  |
**generated_at** | [**\DateTime**](\DateTime.md) |  | [optional]
**interval** | **int** |  |
**header_template** | **string** |  | [optional]
**body_template** | **string** |  | [optional]
**footer_template** | **string** |  | [optional]
**paused_schedule** | **bool** |  | [optional]
**is_running** | **bool** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
