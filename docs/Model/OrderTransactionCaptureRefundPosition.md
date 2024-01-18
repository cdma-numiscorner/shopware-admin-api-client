# # OrderTransactionCaptureRefundPosition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version_id** | **string** |  | [optional]
**refund_id** | **string** |  |
**refund_version_id** | **string** |  | [optional]
**order_line_item_id** | **string** |  |
**order_line_item_version_id** | **string** |  | [optional]
**external_reference** | **string** |  | [optional]
**reason** | **string** |  | [optional]
**quantity** | **int** |  | [optional]
**amount** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfShippingCosts**](OrderJsonApiAllOfShippingCosts.md) |  |
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**order_line_item** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItem**](OrderLineItem.md) |  | [optional]
**order_transaction_capture_refund** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderTransactionCaptureRefund**](OrderTransactionCaptureRefund.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
