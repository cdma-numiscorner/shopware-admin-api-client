# # App

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**name** | **string** |  |
**path** | **string** |  |
**author** | **string** |  | [optional]
**copyright** | **string** |  | [optional]
**license** | **string** |  | [optional]
**active** | **bool** |  |
**configurable** | **bool** |  |
**privacy** | **string** |  | [optional]
**version** | **string** |  |
**icon** | **string** | Runtime field, cannot be used as part of the criteria. | [optional] [readonly]
**modules** | **object[]** |  | [optional]
**main_module** | **object** |  | [optional]
**cookies** | **object[]** |  | [optional]
**allow_disable** | **bool** |  |
**base_app_url** | **string** |  | [optional]
**allowed_hosts** | **string[]** |  | [optional]
**template_load_priority** | **int** |  | [optional]
**label** | **string** |  |
**description** | **string** |  | [optional]
**privacy_policy_extensions** | **string** |  | [optional]
**custom_fields** | **object** |  | [optional]
**integration_id** | **string** |  |
**acl_role_id** | **string** |  |
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]
**integration** | [**\OpenAPI\ShopwareAdminApiClient\Model\Integration**](Integration.md) |  | [optional]
**acl_role** | [**\OpenAPI\ShopwareAdminApiClient\Model\AclRole**](AclRole.md) |  | [optional]
**custom_field_sets** | [**\OpenAPI\ShopwareAdminApiClient\Model\CustomFieldSet[]**](CustomFieldSet.md) |  | [optional]
**action_buttons** | [**\OpenAPI\ShopwareAdminApiClient\Model\AppActionButton[]**](AppActionButton.md) |  | [optional]
**templates** | [**\OpenAPI\ShopwareAdminApiClient\Model\AppTemplate[]**](AppTemplate.md) |  | [optional]
**webhooks** | [**\OpenAPI\ShopwareAdminApiClient\Model\Webhook[]**](Webhook.md) |  | [optional]
**payment_methods** | [**\OpenAPI\ShopwareAdminApiClient\Model\AppPaymentMethod[]**](AppPaymentMethod.md) |  | [optional]
**tax_providers** | [**\OpenAPI\ShopwareAdminApiClient\Model\TaxProvider[]**](TaxProvider.md) |  | [optional]
**cms_blocks** | [**\OpenAPI\ShopwareAdminApiClient\Model\AppCmsBlock[]**](AppCmsBlock.md) |  | [optional]
**flow_actions** | [**\OpenAPI\ShopwareAdminApiClient\Model\AppFlowAction[]**](AppFlowAction.md) |  | [optional]
**flow_events** | [**\OpenAPI\ShopwareAdminApiClient\Model\AppFlowEvent[]**](AppFlowEvent.md) |  | [optional]
**app_shipping_methods** | [**\OpenAPI\ShopwareAdminApiClient\Model\AppShippingMethod[]**](AppShippingMethod.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
