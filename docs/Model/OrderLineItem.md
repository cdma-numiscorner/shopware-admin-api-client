# # OrderLineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version_id** | **string** |  | [optional]
**order_id** | **string** |  |
**order_version_id** | **string** |  | [optional]
**product_id** | **string** |  | [optional]
**product_version_id** | **string** |  | [optional]
**promotion_id** | **string** |  | [optional] [readonly]
**parent_id** | **string** |  | [optional]
**parent_version_id** | **string** |  | [optional]
**cover_id** | **string** |  | [optional]
**identifier** | **string** |  |
**referenced_id** | **string** |  | [optional]
**quantity** | **int** |  |
**label** | **string** |  |
**payload** | **object** |  | [optional]
**good** | **bool** |  | [optional]
**removable** | **bool** |  | [optional]
**stackable** | **bool** |  | [optional]
**position** | **int** |  |
**states** | **string[]** |  |
**price** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfShippingCosts**](OrderJsonApiAllOfShippingCosts.md) |  |
**price_definition** | **object** |  | [optional]
**unit_price** | **float** |  | [optional]
**total_price** | **float** |  | [optional]
**description** | **string** |  | [optional]
**type** | **string** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**cover** | [**\OpenAPI\ShopwareAdminApiClient\Model\Media**](Media.md) |  | [optional]
**order** | [**\OpenAPI\ShopwareAdminApiClient\Model\Order**](Order.md) |  | [optional]
**product** | [**\OpenAPI\ShopwareAdminApiClient\Model\Product**](Product.md) |  | [optional]
**promotion** | [**\OpenAPI\ShopwareAdminApiClient\Model\Promotion**](Promotion.md) |  | [optional]
**order_delivery_positions** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryPosition[]**](OrderDeliveryPosition.md) |  | [optional]
**order_transaction_capture_refund_positions** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderTransactionCaptureRefundPosition[]**](OrderTransactionCaptureRefundPosition.md) |  | [optional]
**downloads** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemDownload[]**](OrderLineItemDownload.md) |  | [optional]
**parent** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItem**](OrderLineItem.md) |  | [optional]
**children** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItem[]**](OrderLineItem.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
