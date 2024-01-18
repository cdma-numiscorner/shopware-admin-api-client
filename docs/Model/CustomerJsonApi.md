# # CustomerJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\CustomerJsonApiAllOfRelationships**](CustomerJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**group_id** | **string** |  |
**default_payment_method_id** | **string** |  |
**sales_channel_id** | **string** |  |
**language_id** | **string** |  |
**last_payment_method_id** | **string** |  | [optional]
**default_billing_address_id** | **string** |  |
**default_shipping_address_id** | **string** |  |
**auto_increment** | **int** |  | [optional] [readonly]
**customer_number** | **string** |  |
**salutation_id** | **string** |  | [optional]
**first_name** | **string** |  |
**last_name** | **string** |  |
**company** | **string** |  | [optional]
**email** | **string** |  |
**title** | **string** |  | [optional]
**vat_ids** | **string[]** |  | [optional]
**affiliate_code** | **string** |  | [optional]
**campaign_code** | **string** |  | [optional]
**active** | **bool** |  | [optional]
**double_opt_in_registration** | **bool** |  | [optional]
**double_opt_in_email_sent_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**double_opt_in_confirm_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**hash** | **string** |  | [optional]
**guest** | **bool** |  | [optional]
**first_login** | [**\DateTime**](\DateTime.md) |  | [optional]
**last_login** | [**\DateTime**](\DateTime.md) |  | [optional]
**birthday** | **string** |  | [optional]
**last_order_date** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**order_count** | **int** |  | [optional] [readonly]
**order_total_amount** | **float** |  | [optional] [readonly]
**review_count** | **int** |  | [optional] [readonly]
**custom_fields** | **object** |  | [optional]
**remote_address** | **string** |  | [optional]
**tag_ids** | **string[]** |  | [optional] [readonly]
**requested_group_id** | **string** |  | [optional]
**bound_sales_channel_id** | **string** |  | [optional]
**account_type** | **string** |  |
**created_by_id** | **string** |  | [optional]
**updated_by_id** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
