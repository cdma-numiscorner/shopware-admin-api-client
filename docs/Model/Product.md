# # Product

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version_id** | **string** |  | [optional]
**parent_id** | **string** |  | [optional]
**parent_version_id** | **string** |  | [optional]
**manufacturer_id** | **string** |  | [optional]
**product_manufacturer_version_id** | **string** |  | [optional]
**unit_id** | **string** |  | [optional]
**tax_id** | **string** |  |
**cover_id** | **string** |  | [optional]
**product_media_version_id** | **string** |  | [optional]
**delivery_time_id** | **string** |  | [optional]
**feature_set_id** | **string** |  | [optional]
**canonical_product_id** | **string** |  | [optional]
**cms_page_id** | **string** |  | [optional]
**cms_page_version_id** | **string** |  | [optional]
**price** | **object** |  |
**product_number** | **string** |  |
**restock_time** | **int** |  | [optional]
**auto_increment** | **int** |  | [optional] [readonly]
**active** | **bool** |  | [optional]
**available** | **bool** |  | [optional] [readonly]
**is_closeout** | **bool** |  | [optional]
**variation** | **string[]** |  | [optional]
**display_group** | **string** |  | [optional] [readonly]
**variant_listing_config** | **object** |  | [optional]
**variant_restrictions** | **object** |  | [optional]
**manufacturer_number** | **string** |  | [optional]
**ean** | **string** |  | [optional]
**purchase_steps** | **int** |  | [optional]
**max_purchase** | **int** |  | [optional]
**min_purchase** | **int** |  | [optional]
**purchase_unit** | **float** |  | [optional]
**reference_unit** | **float** |  | [optional]
**shipping_free** | **bool** |  | [optional]
**purchase_prices** | **object** |  | [optional]
**mark_as_topseller** | **bool** |  | [optional]
**weight** | **float** |  | [optional]
**width** | **float** |  | [optional]
**height** | **float** |  | [optional]
**length** | **float** |  | [optional]
**release_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**rating_average** | **float** |  | [optional] [readonly]
**category_tree** | **string[]** |  | [optional] [readonly]
**property_ids** | **string[]** |  | [optional] [readonly]
**option_ids** | **string[]** |  | [optional] [readonly]
**stream_ids** | **string[]** |  | [optional] [readonly]
**tag_ids** | **string[]** |  | [optional] [readonly]
**category_ids** | **string[]** |  | [optional] [readonly]
**child_count** | **int** |  | [optional] [readonly]
**custom_field_set_selection_active** | **bool** |  | [optional]
**sales** | **int** |  | [optional] [readonly]
**states** | **string[]** |  | [optional] [readonly]
**meta_description** | **string** |  | [optional]
**name** | **string** |  |
**keywords** | **string** |  | [optional]
**description** | **string** |  | [optional]
**meta_title** | **string** |  | [optional]
**pack_unit** | **string** |  | [optional]
**pack_unit_plural** | **string** |  | [optional]
**custom_fields** | **object** |  | [optional]
**slot_config** | **object** |  | [optional]
**custom_search_keywords** | **object[]** |  | [optional]
**available_stock** | **int** |  | [optional]
**stock** | **int** |  |
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**downloads** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductDownload[]**](ProductDownload.md) |  | [optional]
**parent** | [**\OpenAPI\ShopwareAdminApiClient\Model\Product**](Product.md) |  | [optional]
**children** | [**\OpenAPI\ShopwareAdminApiClient\Model\Product[]**](Product.md) |  | [optional]
**delivery_time** | [**\OpenAPI\ShopwareAdminApiClient\Model\DeliveryTime**](DeliveryTime.md) |  | [optional]
**tax** | [**\OpenAPI\ShopwareAdminApiClient\Model\Tax**](Tax.md) |  | [optional]
**manufacturer** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductManufacturer**](ProductManufacturer.md) |  | [optional]
**unit** | [**\OpenAPI\ShopwareAdminApiClient\Model\Unit**](Unit.md) |  | [optional]
**cover** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductMedia**](ProductMedia.md) |  | [optional]
**feature_set** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductFeatureSet**](ProductFeatureSet.md) |  | [optional]
**cms_page** | [**\OpenAPI\ShopwareAdminApiClient\Model\CmsPage**](CmsPage.md) |  | [optional]
**canonical_product** | [**\OpenAPI\ShopwareAdminApiClient\Model\Product**](Product.md) |  | [optional]
**prices** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductPrice[]**](ProductPrice.md) |  | [optional]
**media** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductMedia[]**](ProductMedia.md) |  | [optional]
**cross_sellings** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductCrossSelling[]**](ProductCrossSelling.md) |  | [optional]
**cross_selling_assigned_products** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductCrossSellingAssignedProducts[]**](ProductCrossSellingAssignedProducts.md) |  | [optional]
**configurator_settings** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductConfiguratorSetting[]**](ProductConfiguratorSetting.md) |  | [optional]
**visibilities** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductVisibility[]**](ProductVisibility.md) |  | [optional]
**search_keywords** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductSearchKeyword[]**](ProductSearchKeyword.md) |  | [optional]
**product_reviews** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductReview[]**](ProductReview.md) |  | [optional]
**main_categories** | [**\OpenAPI\ShopwareAdminApiClient\Model\MainCategory[]**](MainCategory.md) |  | [optional]
**seo_urls** | [**\OpenAPI\ShopwareAdminApiClient\Model\SeoUrl[]**](SeoUrl.md) |  | [optional]
**order_line_items** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItem[]**](OrderLineItem.md) |  | [optional]
**wishlists** | [**\OpenAPI\ShopwareAdminApiClient\Model\CustomerWishlistProduct[]**](CustomerWishlistProduct.md) |  | [optional]
**options** | [**\OpenAPI\ShopwareAdminApiClient\Model\PropertyGroupOption[]**](PropertyGroupOption.md) |  | [optional]
**properties** | [**\OpenAPI\ShopwareAdminApiClient\Model\PropertyGroupOption[]**](PropertyGroupOption.md) |  | [optional]
**categories** | [**\OpenAPI\ShopwareAdminApiClient\Model\Category[]**](Category.md) |  | [optional]
**streams** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductStream[]**](ProductStream.md) |  | [optional]
**categories_ro** | [**\OpenAPI\ShopwareAdminApiClient\Model\Category[]**](Category.md) |  | [optional]
**tags** | [**\OpenAPI\ShopwareAdminApiClient\Model\Tag[]**](Tag.md) |  | [optional]
**custom_field_sets** | [**\OpenAPI\ShopwareAdminApiClient\Model\CustomFieldSet[]**](CustomFieldSet.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
