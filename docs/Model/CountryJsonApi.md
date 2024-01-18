# # CountryJsonApi

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**id** | **string** |  |
**attributes** | **map[string,object]** | Members of the attributes object (\&quot;attributes\&quot;) represent information about the resource object in which it&#39;s defined. | [optional]
**relationships** | [**\OpenAPI\ShopwareAdminApiClient\Model\CountryJsonApiAllOfRelationships**](CountryJsonApiAllOfRelationships.md) |  | [optional]
**links** | [**map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]**](Link.md) |  | [optional]
**meta** | **map[string,object]** | Non-standard meta-information that can not be represented as an attribute or relationship. | [optional]
**name** | **string** |  |
**iso** | **string** |  | [optional]
**position** | **int** |  | [optional]
**active** | **bool** |  | [optional]
**shipping_available** | **bool** |  | [optional]
**iso3** | **string** |  | [optional]
**display_state_in_registration** | **bool** |  | [optional]
**force_state_in_registration** | **bool** |  | [optional]
**check_vat_id_pattern** | **bool** |  | [optional]
**vat_id_required** | **bool** |  | [optional]
**vat_id_pattern** | **string** |  | [optional]
**custom_fields** | **object** |  | [optional]
**customer_tax** | [**\OpenAPI\ShopwareAdminApiClient\Model\CountryJsonApiAllOfCustomerTax**](CountryJsonApiAllOfCustomerTax.md) |  | [optional]
**company_tax** | [**\OpenAPI\ShopwareAdminApiClient\Model\CountryJsonApiAllOfCustomerTax**](CountryJsonApiAllOfCustomerTax.md) |  | [optional]
**postal_code_required** | **bool** |  | [optional]
**check_postal_code_pattern** | **bool** |  | [optional]
**check_advanced_postal_code_pattern** | **bool** |  | [optional]
**advanced_postal_code_pattern** | **string** |  | [optional]
**address_format** | **object** |  |
**default_postal_code_pattern** | **string** |  | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [readonly]
**updated_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**translated** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
