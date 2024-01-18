# # ProductCrossSelling

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  |
**position** | **int** |  |
**sort_by** | **string** |  | [optional]
**sort_direction** | **string** |  | [optional]
**type** | **string** |  |
**active** | **bool** |  | [optional]
**limit** | **int** |  | [optional]
**product_id** | **string** |  |
**product_version_id** | **string** |  | [optional]
**product_stream_id** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**product** | [**\OpenAPI\ShopwareAdminApiClient\Model\Product**](Product.md) |  | [optional]
**product_stream** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductStream**](ProductStream.md) |  | [optional]
**assigned_products** | [**\OpenAPI\ShopwareAdminApiClient\Model\ProductCrossSellingAssignedProducts[]**](ProductCrossSellingAssignedProducts.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
