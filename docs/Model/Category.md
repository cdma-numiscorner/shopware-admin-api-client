# # Category

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
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
**type** | **string** |  |
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
**parent** | [**\OpenAPI\ShopwareAdminApiClient\Model\Category**](Category.md) |  | [optional]
**children** | [**\OpenAPI\ShopwareAdminApiClient\Model\Category[]**](Category.md) |  | [optional]
**media** | [**\OpenAPI\ShopwareAdminApiClient\Model\Media**](Media.md) |  | [optional]
**products** | [**\OpenAPI\ShopwareAdminApiClient\Model\Product[]**](Product.md) |  | [optional]
**nested_products** | [**\OpenAPI\ShopwareAdminApiClient\Model\Product[]**](Product.md) |  | [optional]
**tags** | [**\OpenAPI\ShopwareAdminApiClient\Model\Tag[]**](Tag.md) |  | [optional]
**cms_page** | [**\OpenAPI\ShopwareAdminApiClient\Model\CmsPage**](CmsPage.md) |  | [optional]
**product_stream** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductStream**](ProductStream.md) |  | [optional]
**navigation_sales_channels** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel[]**](SalesChannel.md) |  | [optional]
**footer_sales_channels** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel[]**](SalesChannel.md) |  | [optional]
**service_sales_channels** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel[]**](SalesChannel.md) |  | [optional]
**main_categories** | [**\OpenAPI\ShopwareAdminApiClient\Model\MainCategory[]**](MainCategory.md) |  | [optional]
**seo_urls** | [**\OpenAPI\ShopwareAdminApiClient\Model\SeoUrl[]**](SeoUrl.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
