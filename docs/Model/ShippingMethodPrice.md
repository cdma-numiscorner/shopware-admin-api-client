# # ShippingMethodPrice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**shipping_method_id** | **string** |  |
**rule_id** | **string** |  | [optional]
**calculation** | **int** |  | [optional]
**calculation_rule_id** | **string** |  | [optional]
**quantity_start** | **float** |  | [optional]
**quantity_end** | **float** |  | [optional]
**currency_price** | **object** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**shipping_method** | [**\OpenAPI\ShopwareAdminApiClient\Model\ShippingMethod**](ShippingMethod.md) |  | [optional]
**rule** | [**\OpenAPI\ShopwareAdminApiClient\Model\Rule**](Rule.md) |  | [optional]
**calculation_rule** | [**\OpenAPI\ShopwareAdminApiClient\Model\Rule**](Rule.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
