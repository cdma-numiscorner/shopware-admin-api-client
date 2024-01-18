# # AppJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationships**](AppJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
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

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
