# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**locale_id** | **string** |  |
**username** | **string** |  |
**first_name** | **string** |  |
**last_name** | **string** |  |
**title** | **string** |  | [optional]
**email** | **string** |  |
**active** | **bool** |  | [optional]
**admin** | **bool** |  | [optional]
**last_updated_password_at** | [**\DateTime**](\DateTime.md) |  | [optional]
**time_zone** | **string** |  |
**custom_fields** | **object** |  | [optional]
**avatar_id** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**extensions** | [**\OpenAPI\ShopwareAdminApiClient\Model\UserJsonApiAllOfExtensions**](UserJsonApiAllOfExtensions.md) |  | [optional]
**locale** | [**\OpenAPI\ShopwareAdminApiClient\Model\Locale**](Locale.md) |  | [optional]
**avatar_media** | [**\OpenAPI\ShopwareAdminApiClient\Model\Media**](Media.md) |  | [optional]
**media** | [**\OpenAPI\ShopwareAdminApiClient\Model\Media[]**](Media.md) |  | [optional]
**access_keys** | [**\OpenAPI\ShopwareAdminApiClient\Model\UserAccessKey[]**](UserAccessKey.md) |  | [optional]
**configs** | [**\OpenAPI\ShopwareAdminApiClient\Model\UserConfig[]**](UserConfig.md) |  | [optional]
**state_machine_history_entries** | [**\OpenAPI\ShopwareAdminApiClient\Model\StateMachineHistory[]**](StateMachineHistory.md) |  | [optional]
**import_export_log_entries** | [**\OpenAPI\ShopwareAdminApiClient\Model\ImportExportLog[]**](ImportExportLog.md) |  | [optional]
**acl_roles** | [**\OpenAPI\ShopwareAdminApiClient\Model\AclRole[]**](AclRole.md) |  | [optional]
**recovery_user** | [**\OpenAPI\ShopwareAdminApiClient\Model\UserRecovery**](UserRecovery.md) |  | [optional]
**created_orders** | [**\OpenAPI\ShopwareAdminApiClient\Model\Order[]**](Order.md) |  | [optional]
**updated_orders** | [**\OpenAPI\ShopwareAdminApiClient\Model\Order[]**](Order.md) |  | [optional]
**created_customers** | [**\OpenAPI\ShopwareAdminApiClient\Model\Customer[]**](Customer.md) |  | [optional]
**updated_customers** | [**\OpenAPI\ShopwareAdminApiClient\Model\Customer[]**](Customer.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
