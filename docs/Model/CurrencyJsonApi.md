# # CurrencyJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\CurrencyJsonApiAllOfRelationships**](CurrencyJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**factor** | **float** |  |
**symbol** | **string** |  |
**iso_code** | **string** |  |
**short_name** | **string** |  |
**name** | **string** |  |
**position** | **int** |  | [optional]
**is_system_default** | **bool** | Runtime field, cannot be used as part of the criteria. | [optional]
**tax_free_from** | **float** |  | [optional]
**custom_fields** | **object** |  | [optional]
**item_rounding** | [**\OpenAPI\ShopwareAdminApiClient\Model\CurrencyJsonApiAllOfItemRounding**](CurrencyJsonApiAllOfItemRounding.md) |  |
**total_rounding** | [**\OpenAPI\ShopwareAdminApiClient\Model\CurrencyJsonApiAllOfItemRounding**](CurrencyJsonApiAllOfItemRounding.md) |  |
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
