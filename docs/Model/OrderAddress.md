# # OrderAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version_id** | **string** |  | [optional]
**country_id** | **string** |  |
**country_state_id** | **string** |  | [optional]
**order_id** | **string** |  |
**order_version_id** | **string** |  | [optional]
**salutation_id** | **string** |  | [optional]
**first_name** | **string** |  |
**last_name** | **string** |  |
**street** | **string** |  |
**zipcode** | **string** |  | [optional]
**city** | **string** |  |
**company** | **string** |  | [optional]
**department** | **string** |  | [optional]
**title** | **string** |  | [optional]
**vat_id** | **string** |  | [optional]
**phone_number** | **string** |  | [optional]
**additional_address_line1** | **string** |  | [optional]
**additional_address_line2** | **string** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**country** | [**\OpenAPI\ShopwareAdminApiClient\Model\Country**](Country.md) |  | [optional]
**country_state** | [**\OpenAPI\ShopwareAdminApiClient\Model\CountryState**](CountryState.md) |  | [optional]
**order** | [**\OpenAPI\ShopwareAdminApiClient\Model\Order**](Order.md) |  | [optional]
**order_deliveries** | [**\OpenAPI\ShopwareAdminApiClient\Model\OrderDelivery[]**](OrderDelivery.md) |  | [optional]
**salutation** | [**\OpenAPI\ShopwareAdminApiClient\Model\Salutation**](Salutation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
