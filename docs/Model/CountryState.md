# # CountryState

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**country_id** | **string** |  |
**short_code** | **string** |  |
**name** | **string** |  |
**position** | **int** |  | [optional]
**active** | **bool** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**country** | [**\OpenAPI\ShopwareAdminApiClient\Model\Country**](Country.md) |  | [optional]
**customer_addresses** | [**\OpenAPI\ShopwareAdminApiClient\Model\CustomerAddress[]**](CustomerAddress.md) |  | [optional]
**order_addresses** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderAddress[]**](OrderAddress.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
