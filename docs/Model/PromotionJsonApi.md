# # PromotionJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationships**](PromotionJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**name** | **string** |  |
**active** | **bool** |  |
**valid_from** | [**\DateTime**](\DateTime.md) |  | [optional]
**valid_until** | [**\DateTime**](\DateTime.md) |  | [optional]
**max_redemptions_global** | **int** |  | [optional]
**max_redemptions_per_customer** | **int** |  | [optional]
**priority** | **int** |  |
**exclusive** | **bool** |  |
**code** | **string** |  | [optional]
**use_codes** | **bool** |  |
**use_individual_codes** | **bool** |  |
**individual_code_pattern** | **string** |  | [optional]
**use_set_groups** | **bool** |  |
**customer_restriction** | **bool** |  | [optional]
**prevent_combination** | **bool** |  |
**order_count** | **int** |  | [optional] [readonly]
**orders_per_customer_count** | **object** |  | [optional] [readonly]
**exclusion_ids** | **string[]** |  | [optional]
**custom_fields** | **object** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
