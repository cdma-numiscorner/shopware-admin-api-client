# # SalesChannel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**type_id** | **string** |  |
**language_id** | **string** |  |
**customer_group_id** | **string** |  |
**currency_id** | **string** |  |
**payment_method_id** | **string** |  |
**shipping_method_id** | **string** |  |
**country_id** | **string** |  |
**analytics_id** | **string** |  | [optional]
**navigation_category_id** | **string** |  |
**navigation_category_version_id** | **string** |  | [optional]
**navigation_category_depth** | **int** |  | [optional]
**footer_category_id** | **string** |  | [optional]
**footer_category_version_id** | **string** |  | [optional]
**service_category_id** | **string** |  | [optional]
**service_category_version_id** | **string** |  | [optional]
**mail_header_footer_id** | **string** |  | [optional]
**hreflang_default_domain_id** | **string** |  | [optional]
**name** | **string** |  |
**short_name** | **string** |  | [optional]
**tax_calculation_type** | **string** |  | [optional]
**access_key** | **string** |  |
**configuration** | **object** |  | [optional]
**active** | **bool** |  | [optional]
**hreflang_active** | **bool** |  | [optional]
**maintenance** | **bool** |  | [optional]
**maintenance_ip_whitelist** | **object[]** |  | [optional]
**custom_fields** | **object** |  | [optional]
**payment_method_ids** | **string[]** |  | [optional] [readonly]
**home_cms_page_id** | **string** |  | [optional]
**home_cms_page_version_id** | **string** |  | [optional]
**home_slot_config** | **object** |  | [optional]
**home_enabled** | **bool** |  |
**home_name** | **string** |  | [optional]
**home_meta_title** | **string** |  | [optional]
**home_meta_description** | **string** |  | [optional]
**home_keywords** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**extensions** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannelJsonApiAllOfExtensions**](SalesChannelJsonApiAllOfExtensions.md) |  | [optional]
**currencies** | [**\OpenAPI\ShopwareAdminApiClient\Model\Currency[]**](Currency.md) |  | [optional]
**languages** | [**\OpenAPI\ShopwareAdminApiClient\Model\Language[]**](Language.md) |  | [optional]
**countries** | [**\OpenAPI\ShopwareAdminApiClient\Model\Country[]**](Country.md) |  | [optional]
**payment_methods** | [**\OpenAPI\ShopwareAdminApiClient\Model\PaymentMethod[]**](PaymentMethod.md) |  | [optional]
**shipping_methods** | [**\OpenAPI\ShopwareAdminApiClient\Model\ShippingMethod[]**](ShippingMethod.md) |  | [optional]
**type** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannelType**](SalesChannelType.md) |  | [optional]
**language** | [**\OpenAPI\ShopwareAdminApiClient\Model\Language**](Language.md) |  | [optional]
**customer_group** | [**\OpenAPI\ShopwareAdminApiClient\Model\CustomerGroup**](CustomerGroup.md) |  | [optional]
**currency** | [**\OpenAPI\ShopwareAdminApiClient\Model\Currency**](Currency.md) |  | [optional]
**payment_method** | [**\OpenAPI\ShopwareAdminApiClient\Model\PaymentMethod**](PaymentMethod.md) |  | [optional]
**shipping_method** | [**\OpenAPI\ShopwareAdminApiClient\Model\ShippingMethod**](ShippingMethod.md) |  | [optional]
**country** | [**\OpenAPI\ShopwareAdminApiClient\Model\Country**](Country.md) |  | [optional]
**orders** | [**\OpenAPI\ShopwareAdminApiClient\Model\Order[]**](Order.md) |  | [optional]
**customers** | [**\OpenAPI\ShopwareAdminApiClient\Model\Customer[]**](Customer.md) |  | [optional]
**home_cms_page** | [**\OpenAPI\ShopwareAdminApiClient\Model\CmsPage**](CmsPage.md) |  | [optional]
**domains** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannelDomain[]**](SalesChannelDomain.md) |  | [optional]
**system_configs** | [**\OpenAPI\ShopwareAdminApiClient\Model\SystemConfig[]**](SystemConfig.md) |  | [optional]
**navigation_category** | [**\OpenAPI\ShopwareAdminApiClient\Model\Category**](Category.md) |  | [optional]
**footer_category** | [**\OpenAPI\ShopwareAdminApiClient\Model\Category**](Category.md) |  | [optional]
**service_category** | [**\OpenAPI\ShopwareAdminApiClient\Model\Category**](Category.md) |  | [optional]
**product_visibilities** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductVisibility[]**](ProductVisibility.md) |  | [optional]
**hreflang_default_domain** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannelDomain**](SalesChannelDomain.md) |  | [optional]
**mail_header_footer** | [**\OpenAPI\ShopwareAdminApiClient\Model\MailHeaderFooter**](MailHeaderFooter.md) |  | [optional]
**newsletter_recipients** | [**\OpenAPI\ShopwareAdminApiClient\Model\NewsletterRecipient[]**](NewsletterRecipient.md) |  | [optional]
**number_range_sales_channels** | [**\OpenAPI\ShopwareAdminApiClient\Model\NumberRangeSalesChannel[]**](NumberRangeSalesChannel.md) |  | [optional]
**promotion_sales_channels** | [**\OpenAPI\ShopwareAdminApiClient\Model\PromotionSalesChannel[]**](PromotionSalesChannel.md) |  | [optional]
**document_base_config_sales_channels** | [**\OpenAPI\ShopwareAdminApiClient\Model\DocumentBaseConfigSalesChannel[]**](DocumentBaseConfigSalesChannel.md) |  | [optional]
**product_reviews** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductReview[]**](ProductReview.md) |  | [optional]
**seo_urls** | [**\OpenAPI\ShopwareAdminApiClient\Model\SeoUrl[]**](SeoUrl.md) |  | [optional]
**seo_url_templates** | [**\OpenAPI\ShopwareAdminApiClient\Model\SeoUrlTemplate[]**](SeoUrlTemplate.md) |  | [optional]
**main_categories** | [**\OpenAPI\ShopwareAdminApiClient\Model\MainCategory[]**](MainCategory.md) |  | [optional]
**product_exports** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductExport[]**](ProductExport.md) |  | [optional]
**analytics** | [**\OpenAPI\ShopwareAdminApiClient\Model\SalesChannelAnalytics**](SalesChannelAnalytics.md) |  | [optional]
**customer_groups_registrations** | [**\OpenAPI\ShopwareAdminApiClient\Model\CustomerGroup[]**](CustomerGroup.md) |  | [optional]
**landing_pages** | [**\OpenAPI\ShopwareAdminApiClient\Model\LandingPage[]**](LandingPage.md) |  | [optional]
**bound_customers** | [**\OpenAPI\ShopwareAdminApiClient\Model\Customer[]**](Customer.md) |  | [optional]
**wishlists** | [**\OpenAPI\ShopwareAdminApiClient\Model\CustomerWishlist[]**](CustomerWishlist.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
