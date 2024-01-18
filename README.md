# OpenAPIClient-php

This endpoint reference contains an overview of all endpoints comprising the Shopware Admin API.

For a better overview, all CRUD-endpoints are hidden by default. If you want to show also CRUD-endpoints
add the query parameter `type=jsonapi`.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/cdma-numiscorner/shopware-admin-api-client.git"
    }
  ],
  "require": {
    "cdma-numiscorner/shopware-admin-api-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\ShopwareAdminApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\ShopwareAdminApiClient\Api\AclRoleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_response = '_response_example'; // string | Data format for response. Empty if none is provided.
$inline_object = new \OpenAPI\ShopwareAdminApiClient\Model\InlineObject(); // \OpenAPI\ShopwareAdminApiClient\Model\InlineObject

try {
    $result = $apiInstance->createAclRole($_response, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AclRoleApi->createAclRole: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost:8000/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AclRoleApi* | [**createAclRole**](docs/Api/AclRoleApi.md#createaclrole) | **POST** /acl-role | Create a new Acl Role resources.
*AclRoleApi* | [**deleteAclRole**](docs/Api/AclRoleApi.md#deleteaclrole) | **DELETE** /acl-role/{id} | Delete a Acl Role resource.
*AclRoleApi* | [**getAclRole**](docs/Api/AclRoleApi.md#getaclrole) | **GET** /acl-role/{id} | Detailed information about a Acl Role resource.
*AclRoleApi* | [**getAclRoleList**](docs/Api/AclRoleApi.md#getaclrolelist) | **GET** /acl-role | List with basic information of Acl Role resources.
*AclRoleApi* | [**updateAclRole**](docs/Api/AclRoleApi.md#updateaclrole) | **PATCH** /acl-role/{id} | Partially update information about a Acl Role resource.
*AppApi* | [**createApp**](docs/Api/AppApi.md#createapp) | **POST** /app | Create a new App resources.
*AppApi* | [**deleteApp**](docs/Api/AppApi.md#deleteapp) | **DELETE** /app/{id} | Delete a App resource.
*AppApi* | [**getApp**](docs/Api/AppApi.md#getapp) | **GET** /app/{id} | Detailed information about a App resource.
*AppApi* | [**getAppList**](docs/Api/AppApi.md#getapplist) | **GET** /app | List with basic information of App resources.
*AppApi* | [**updateApp**](docs/Api/AppApi.md#updateapp) | **PATCH** /app/{id} | Partially update information about a App resource.
*AppActionButtonApi* | [**createAppActionButton**](docs/Api/AppActionButtonApi.md#createappactionbutton) | **POST** /app-action-button | Create a new App Action Button resources.
*AppActionButtonApi* | [**deleteAppActionButton**](docs/Api/AppActionButtonApi.md#deleteappactionbutton) | **DELETE** /app-action-button/{id} | Delete a App Action Button resource.
*AppActionButtonApi* | [**getAppActionButton**](docs/Api/AppActionButtonApi.md#getappactionbutton) | **GET** /app-action-button/{id} | Detailed information about a App Action Button resource.
*AppActionButtonApi* | [**getAppActionButtonList**](docs/Api/AppActionButtonApi.md#getappactionbuttonlist) | **GET** /app-action-button | List with basic information of App Action Button resources.
*AppActionButtonApi* | [**updateAppActionButton**](docs/Api/AppActionButtonApi.md#updateappactionbutton) | **PATCH** /app-action-button/{id} | Partially update information about a App Action Button resource.
*AppAdministrationSnippetApi* | [**createAppAdministrationSnippet**](docs/Api/AppAdministrationSnippetApi.md#createappadministrationsnippet) | **POST** /app-administration-snippet | Create a new App Administration Snippet resources.
*AppAdministrationSnippetApi* | [**deleteAppAdministrationSnippet**](docs/Api/AppAdministrationSnippetApi.md#deleteappadministrationsnippet) | **DELETE** /app-administration-snippet/{id} | Delete a App Administration Snippet resource.
*AppAdministrationSnippetApi* | [**getAppAdministrationSnippet**](docs/Api/AppAdministrationSnippetApi.md#getappadministrationsnippet) | **GET** /app-administration-snippet/{id} | Detailed information about a App Administration Snippet resource.
*AppAdministrationSnippetApi* | [**getAppAdministrationSnippetList**](docs/Api/AppAdministrationSnippetApi.md#getappadministrationsnippetlist) | **GET** /app-administration-snippet | List with basic information of App Administration Snippet resources.
*AppAdministrationSnippetApi* | [**updateAppAdministrationSnippet**](docs/Api/AppAdministrationSnippetApi.md#updateappadministrationsnippet) | **PATCH** /app-administration-snippet/{id} | Partially update information about a App Administration Snippet resource.
*AppCmsBlockApi* | [**createAppCmsBlock**](docs/Api/AppCmsBlockApi.md#createappcmsblock) | **POST** /app-cms-block | Create a new App Cms Block resources.
*AppCmsBlockApi* | [**deleteAppCmsBlock**](docs/Api/AppCmsBlockApi.md#deleteappcmsblock) | **DELETE** /app-cms-block/{id} | Delete a App Cms Block resource.
*AppCmsBlockApi* | [**getAppCmsBlock**](docs/Api/AppCmsBlockApi.md#getappcmsblock) | **GET** /app-cms-block/{id} | Detailed information about a App Cms Block resource.
*AppCmsBlockApi* | [**getAppCmsBlockList**](docs/Api/AppCmsBlockApi.md#getappcmsblocklist) | **GET** /app-cms-block | List with basic information of App Cms Block resources.
*AppCmsBlockApi* | [**updateAppCmsBlock**](docs/Api/AppCmsBlockApi.md#updateappcmsblock) | **PATCH** /app-cms-block/{id} | Partially update information about a App Cms Block resource.
*AppFlowActionApi* | [**createAppFlowAction**](docs/Api/AppFlowActionApi.md#createappflowaction) | **POST** /app-flow-action | Create a new App Flow Action resources.
*AppFlowActionApi* | [**deleteAppFlowAction**](docs/Api/AppFlowActionApi.md#deleteappflowaction) | **DELETE** /app-flow-action/{id} | Delete a App Flow Action resource.
*AppFlowActionApi* | [**getAppFlowAction**](docs/Api/AppFlowActionApi.md#getappflowaction) | **GET** /app-flow-action/{id} | Detailed information about a App Flow Action resource.
*AppFlowActionApi* | [**getAppFlowActionList**](docs/Api/AppFlowActionApi.md#getappflowactionlist) | **GET** /app-flow-action | List with basic information of App Flow Action resources.
*AppFlowActionApi* | [**updateAppFlowAction**](docs/Api/AppFlowActionApi.md#updateappflowaction) | **PATCH** /app-flow-action/{id} | Partially update information about a App Flow Action resource.
*AppFlowEventApi* | [**createAppFlowEvent**](docs/Api/AppFlowEventApi.md#createappflowevent) | **POST** /app-flow-event | Create a new App Flow Event resources.
*AppFlowEventApi* | [**deleteAppFlowEvent**](docs/Api/AppFlowEventApi.md#deleteappflowevent) | **DELETE** /app-flow-event/{id} | Delete a App Flow Event resource.
*AppFlowEventApi* | [**getAppFlowEvent**](docs/Api/AppFlowEventApi.md#getappflowevent) | **GET** /app-flow-event/{id} | Detailed information about a App Flow Event resource.
*AppFlowEventApi* | [**getAppFlowEventList**](docs/Api/AppFlowEventApi.md#getappfloweventlist) | **GET** /app-flow-event | List with basic information of App Flow Event resources.
*AppFlowEventApi* | [**updateAppFlowEvent**](docs/Api/AppFlowEventApi.md#updateappflowevent) | **PATCH** /app-flow-event/{id} | Partially update information about a App Flow Event resource.
*AppPaymentMethodApi* | [**createAppPaymentMethod**](docs/Api/AppPaymentMethodApi.md#createapppaymentmethod) | **POST** /app-payment-method | Create a new App Payment Method resources.
*AppPaymentMethodApi* | [**deleteAppPaymentMethod**](docs/Api/AppPaymentMethodApi.md#deleteapppaymentmethod) | **DELETE** /app-payment-method/{id} | Delete a App Payment Method resource.
*AppPaymentMethodApi* | [**getAppPaymentMethod**](docs/Api/AppPaymentMethodApi.md#getapppaymentmethod) | **GET** /app-payment-method/{id} | Detailed information about a App Payment Method resource.
*AppPaymentMethodApi* | [**getAppPaymentMethodList**](docs/Api/AppPaymentMethodApi.md#getapppaymentmethodlist) | **GET** /app-payment-method | List with basic information of App Payment Method resources.
*AppPaymentMethodApi* | [**updateAppPaymentMethod**](docs/Api/AppPaymentMethodApi.md#updateapppaymentmethod) | **PATCH** /app-payment-method/{id} | Partially update information about a App Payment Method resource.
*AppScriptConditionApi* | [**createAppScriptCondition**](docs/Api/AppScriptConditionApi.md#createappscriptcondition) | **POST** /app-script-condition | Create a new App Script Condition resources.
*AppScriptConditionApi* | [**deleteAppScriptCondition**](docs/Api/AppScriptConditionApi.md#deleteappscriptcondition) | **DELETE** /app-script-condition/{id} | Delete a App Script Condition resource.
*AppScriptConditionApi* | [**getAppScriptCondition**](docs/Api/AppScriptConditionApi.md#getappscriptcondition) | **GET** /app-script-condition/{id} | Detailed information about a App Script Condition resource.
*AppScriptConditionApi* | [**getAppScriptConditionList**](docs/Api/AppScriptConditionApi.md#getappscriptconditionlist) | **GET** /app-script-condition | List with basic information of App Script Condition resources.
*AppScriptConditionApi* | [**updateAppScriptCondition**](docs/Api/AppScriptConditionApi.md#updateappscriptcondition) | **PATCH** /app-script-condition/{id} | Partially update information about a App Script Condition resource.
*AppShippingMethodApi* | [**createAppShippingMethod**](docs/Api/AppShippingMethodApi.md#createappshippingmethod) | **POST** /app-shipping-method | Create a new App Shipping Method resources.
*AppShippingMethodApi* | [**deleteAppShippingMethod**](docs/Api/AppShippingMethodApi.md#deleteappshippingmethod) | **DELETE** /app-shipping-method/{id} | Delete a App Shipping Method resource.
*AppShippingMethodApi* | [**getAppShippingMethod**](docs/Api/AppShippingMethodApi.md#getappshippingmethod) | **GET** /app-shipping-method/{id} | Detailed information about a App Shipping Method resource.
*AppShippingMethodApi* | [**getAppShippingMethodList**](docs/Api/AppShippingMethodApi.md#getappshippingmethodlist) | **GET** /app-shipping-method | List with basic information of App Shipping Method resources.
*AppShippingMethodApi* | [**updateAppShippingMethod**](docs/Api/AppShippingMethodApi.md#updateappshippingmethod) | **PATCH** /app-shipping-method/{id} | Partially update information about a App Shipping Method resource.
*AppTemplateApi* | [**createAppTemplate**](docs/Api/AppTemplateApi.md#createapptemplate) | **POST** /app-template | Create a new App Template resources.
*AppTemplateApi* | [**deleteAppTemplate**](docs/Api/AppTemplateApi.md#deleteapptemplate) | **DELETE** /app-template/{id} | Delete a App Template resource.
*AppTemplateApi* | [**getAppTemplate**](docs/Api/AppTemplateApi.md#getapptemplate) | **GET** /app-template/{id} | Detailed information about a App Template resource.
*AppTemplateApi* | [**getAppTemplateList**](docs/Api/AppTemplateApi.md#getapptemplatelist) | **GET** /app-template | List with basic information of App Template resources.
*AppTemplateApi* | [**updateAppTemplate**](docs/Api/AppTemplateApi.md#updateapptemplate) | **PATCH** /app-template/{id} | Partially update information about a App Template resource.
*AssetManagementApi* | [**upload**](docs/Api/AssetManagementApi.md#upload) | **POST** /_action/media/{mediaId}/upload | Upload a file to a media entity
*AuthorizationAuthenticationApi* | [**token**](docs/Api/AuthorizationAuthenticationApi.md#token) | **POST** /oauth/token | Fetch an access token
*BulkOperationsApi* | [**sync**](docs/Api/BulkOperationsApi.md#sync) | **POST** /_action/sync | Bulk edit entities
*CategoryApi* | [**createCategory**](docs/Api/CategoryApi.md#createcategory) | **POST** /category | Create a new Category resources.
*CategoryApi* | [**deleteCategory**](docs/Api/CategoryApi.md#deletecategory) | **DELETE** /category/{id} | Delete a Category resource.
*CategoryApi* | [**getCategory**](docs/Api/CategoryApi.md#getcategory) | **GET** /category/{id} | Detailed information about a Category resource.
*CategoryApi* | [**getCategoryList**](docs/Api/CategoryApi.md#getcategorylist) | **GET** /category | List with basic information of Category resources.
*CategoryApi* | [**updateCategory**](docs/Api/CategoryApi.md#updatecategory) | **PATCH** /category/{id} | Partially update information about a Category resource.
*CmsBlockApi* | [**createCmsBlock**](docs/Api/CmsBlockApi.md#createcmsblock) | **POST** /cms-block | Create a new Cms Block resources.
*CmsBlockApi* | [**deleteCmsBlock**](docs/Api/CmsBlockApi.md#deletecmsblock) | **DELETE** /cms-block/{id} | Delete a Cms Block resource.
*CmsBlockApi* | [**getCmsBlock**](docs/Api/CmsBlockApi.md#getcmsblock) | **GET** /cms-block/{id} | Detailed information about a Cms Block resource.
*CmsBlockApi* | [**getCmsBlockList**](docs/Api/CmsBlockApi.md#getcmsblocklist) | **GET** /cms-block | List with basic information of Cms Block resources.
*CmsBlockApi* | [**updateCmsBlock**](docs/Api/CmsBlockApi.md#updatecmsblock) | **PATCH** /cms-block/{id} | Partially update information about a Cms Block resource.
*CmsPageApi* | [**createCmsPage**](docs/Api/CmsPageApi.md#createcmspage) | **POST** /cms-page | Create a new Cms Page resources.
*CmsPageApi* | [**deleteCmsPage**](docs/Api/CmsPageApi.md#deletecmspage) | **DELETE** /cms-page/{id} | Delete a Cms Page resource.
*CmsPageApi* | [**getCmsPage**](docs/Api/CmsPageApi.md#getcmspage) | **GET** /cms-page/{id} | Detailed information about a Cms Page resource.
*CmsPageApi* | [**getCmsPageList**](docs/Api/CmsPageApi.md#getcmspagelist) | **GET** /cms-page | List with basic information of Cms Page resources.
*CmsPageApi* | [**updateCmsPage**](docs/Api/CmsPageApi.md#updatecmspage) | **PATCH** /cms-page/{id} | Partially update information about a Cms Page resource.
*CmsSectionApi* | [**createCmsSection**](docs/Api/CmsSectionApi.md#createcmssection) | **POST** /cms-section | Create a new Cms Section resources.
*CmsSectionApi* | [**deleteCmsSection**](docs/Api/CmsSectionApi.md#deletecmssection) | **DELETE** /cms-section/{id} | Delete a Cms Section resource.
*CmsSectionApi* | [**getCmsSection**](docs/Api/CmsSectionApi.md#getcmssection) | **GET** /cms-section/{id} | Detailed information about a Cms Section resource.
*CmsSectionApi* | [**getCmsSectionList**](docs/Api/CmsSectionApi.md#getcmssectionlist) | **GET** /cms-section | List with basic information of Cms Section resources.
*CmsSectionApi* | [**updateCmsSection**](docs/Api/CmsSectionApi.md#updatecmssection) | **PATCH** /cms-section/{id} | Partially update information about a Cms Section resource.
*CmsSlotApi* | [**createCmsSlot**](docs/Api/CmsSlotApi.md#createcmsslot) | **POST** /cms-slot | Create a new Cms Slot resources.
*CmsSlotApi* | [**deleteCmsSlot**](docs/Api/CmsSlotApi.md#deletecmsslot) | **DELETE** /cms-slot/{id} | Delete a Cms Slot resource.
*CmsSlotApi* | [**getCmsSlot**](docs/Api/CmsSlotApi.md#getcmsslot) | **GET** /cms-slot/{id} | Detailed information about a Cms Slot resource.
*CmsSlotApi* | [**getCmsSlotList**](docs/Api/CmsSlotApi.md#getcmsslotlist) | **GET** /cms-slot | List with basic information of Cms Slot resources.
*CmsSlotApi* | [**updateCmsSlot**](docs/Api/CmsSlotApi.md#updatecmsslot) | **PATCH** /cms-slot/{id} | Partially update information about a Cms Slot resource.
*CountryApi* | [**createCountry**](docs/Api/CountryApi.md#createcountry) | **POST** /country | Create a new Country resources.
*CountryApi* | [**deleteCountry**](docs/Api/CountryApi.md#deletecountry) | **DELETE** /country/{id} | Delete a Country resource.
*CountryApi* | [**getCountry**](docs/Api/CountryApi.md#getcountry) | **GET** /country/{id} | Detailed information about a Country resource.
*CountryApi* | [**getCountryList**](docs/Api/CountryApi.md#getcountrylist) | **GET** /country | List with basic information of Country resources.
*CountryApi* | [**updateCountry**](docs/Api/CountryApi.md#updatecountry) | **PATCH** /country/{id} | Partially update information about a Country resource.
*CountryStateApi* | [**createCountryState**](docs/Api/CountryStateApi.md#createcountrystate) | **POST** /country-state | Create a new Country State resources.
*CountryStateApi* | [**deleteCountryState**](docs/Api/CountryStateApi.md#deletecountrystate) | **DELETE** /country-state/{id} | Delete a Country State resource.
*CountryStateApi* | [**getCountryState**](docs/Api/CountryStateApi.md#getcountrystate) | **GET** /country-state/{id} | Detailed information about a Country State resource.
*CountryStateApi* | [**getCountryStateList**](docs/Api/CountryStateApi.md#getcountrystatelist) | **GET** /country-state | List with basic information of Country State resources.
*CountryStateApi* | [**updateCountryState**](docs/Api/CountryStateApi.md#updatecountrystate) | **PATCH** /country-state/{id} | Partially update information about a Country State resource.
*CurrencyApi* | [**createCurrency**](docs/Api/CurrencyApi.md#createcurrency) | **POST** /currency | Create a new Currency resources.
*CurrencyApi* | [**deleteCurrency**](docs/Api/CurrencyApi.md#deletecurrency) | **DELETE** /currency/{id} | Delete a Currency resource.
*CurrencyApi* | [**getCurrency**](docs/Api/CurrencyApi.md#getcurrency) | **GET** /currency/{id} | Detailed information about a Currency resource.
*CurrencyApi* | [**getCurrencyList**](docs/Api/CurrencyApi.md#getcurrencylist) | **GET** /currency | List with basic information of Currency resources.
*CurrencyApi* | [**updateCurrency**](docs/Api/CurrencyApi.md#updatecurrency) | **PATCH** /currency/{id} | Partially update information about a Currency resource.
*CurrencyCountryRoundingApi* | [**createCurrencyCountryRounding**](docs/Api/CurrencyCountryRoundingApi.md#createcurrencycountryrounding) | **POST** /currency-country-rounding | Create a new Currency Country Rounding resources.
*CurrencyCountryRoundingApi* | [**deleteCurrencyCountryRounding**](docs/Api/CurrencyCountryRoundingApi.md#deletecurrencycountryrounding) | **DELETE** /currency-country-rounding/{id} | Delete a Currency Country Rounding resource.
*CurrencyCountryRoundingApi* | [**getCurrencyCountryRounding**](docs/Api/CurrencyCountryRoundingApi.md#getcurrencycountryrounding) | **GET** /currency-country-rounding/{id} | Detailed information about a Currency Country Rounding resource.
*CurrencyCountryRoundingApi* | [**getCurrencyCountryRoundingList**](docs/Api/CurrencyCountryRoundingApi.md#getcurrencycountryroundinglist) | **GET** /currency-country-rounding | List with basic information of Currency Country Rounding resources.
*CurrencyCountryRoundingApi* | [**updateCurrencyCountryRounding**](docs/Api/CurrencyCountryRoundingApi.md#updatecurrencycountryrounding) | **PATCH** /currency-country-rounding/{id} | Partially update information about a Currency Country Rounding resource.
*CustomEntityApi* | [**createCustomEntity**](docs/Api/CustomEntityApi.md#createcustomentity) | **POST** /custom-entity | Create a new Custom Entity resources.
*CustomEntityApi* | [**deleteCustomEntity**](docs/Api/CustomEntityApi.md#deletecustomentity) | **DELETE** /custom-entity/{id} | Delete a Custom Entity resource.
*CustomEntityApi* | [**getCustomEntity**](docs/Api/CustomEntityApi.md#getcustomentity) | **GET** /custom-entity/{id} | Detailed information about a Custom Entity resource.
*CustomEntityApi* | [**getCustomEntityList**](docs/Api/CustomEntityApi.md#getcustomentitylist) | **GET** /custom-entity | List with basic information of Custom Entity resources.
*CustomEntityApi* | [**updateCustomEntity**](docs/Api/CustomEntityApi.md#updatecustomentity) | **PATCH** /custom-entity/{id} | Partially update information about a Custom Entity resource.
*CustomFieldApi* | [**createCustomField**](docs/Api/CustomFieldApi.md#createcustomfield) | **POST** /custom-field | Create a new Custom Field resources.
*CustomFieldApi* | [**deleteCustomField**](docs/Api/CustomFieldApi.md#deletecustomfield) | **DELETE** /custom-field/{id} | Delete a Custom Field resource.
*CustomFieldApi* | [**getCustomField**](docs/Api/CustomFieldApi.md#getcustomfield) | **GET** /custom-field/{id} | Detailed information about a Custom Field resource.
*CustomFieldApi* | [**getCustomFieldList**](docs/Api/CustomFieldApi.md#getcustomfieldlist) | **GET** /custom-field | List with basic information of Custom Field resources.
*CustomFieldApi* | [**updateCustomField**](docs/Api/CustomFieldApi.md#updatecustomfield) | **PATCH** /custom-field/{id} | Partially update information about a Custom Field resource.
*CustomFieldSetApi* | [**createCustomFieldSet**](docs/Api/CustomFieldSetApi.md#createcustomfieldset) | **POST** /custom-field-set | Create a new Custom Field Set resources.
*CustomFieldSetApi* | [**deleteCustomFieldSet**](docs/Api/CustomFieldSetApi.md#deletecustomfieldset) | **DELETE** /custom-field-set/{id} | Delete a Custom Field Set resource.
*CustomFieldSetApi* | [**getCustomFieldSet**](docs/Api/CustomFieldSetApi.md#getcustomfieldset) | **GET** /custom-field-set/{id} | Detailed information about a Custom Field Set resource.
*CustomFieldSetApi* | [**getCustomFieldSetList**](docs/Api/CustomFieldSetApi.md#getcustomfieldsetlist) | **GET** /custom-field-set | List with basic information of Custom Field Set resources.
*CustomFieldSetApi* | [**updateCustomFieldSet**](docs/Api/CustomFieldSetApi.md#updatecustomfieldset) | **PATCH** /custom-field-set/{id} | Partially update information about a Custom Field Set resource.
*CustomFieldSetRelationApi* | [**createCustomFieldSetRelation**](docs/Api/CustomFieldSetRelationApi.md#createcustomfieldsetrelation) | **POST** /custom-field-set-relation | Create a new Custom Field Set Relation resources.
*CustomFieldSetRelationApi* | [**deleteCustomFieldSetRelation**](docs/Api/CustomFieldSetRelationApi.md#deletecustomfieldsetrelation) | **DELETE** /custom-field-set-relation/{id} | Delete a Custom Field Set Relation resource.
*CustomFieldSetRelationApi* | [**getCustomFieldSetRelation**](docs/Api/CustomFieldSetRelationApi.md#getcustomfieldsetrelation) | **GET** /custom-field-set-relation/{id} | Detailed information about a Custom Field Set Relation resource.
*CustomFieldSetRelationApi* | [**getCustomFieldSetRelationList**](docs/Api/CustomFieldSetRelationApi.md#getcustomfieldsetrelationlist) | **GET** /custom-field-set-relation | List with basic information of Custom Field Set Relation resources.
*CustomFieldSetRelationApi* | [**updateCustomFieldSetRelation**](docs/Api/CustomFieldSetRelationApi.md#updatecustomfieldsetrelation) | **PATCH** /custom-field-set-relation/{id} | Partially update information about a Custom Field Set Relation resource.
*CustomerApi* | [**createCustomer**](docs/Api/CustomerApi.md#createcustomer) | **POST** /customer | Create a new Customer resources.
*CustomerApi* | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | **DELETE** /customer/{id} | Delete a Customer resource.
*CustomerApi* | [**getCustomer**](docs/Api/CustomerApi.md#getcustomer) | **GET** /customer/{id} | Detailed information about a Customer resource.
*CustomerApi* | [**getCustomerList**](docs/Api/CustomerApi.md#getcustomerlist) | **GET** /customer | List with basic information of Customer resources.
*CustomerApi* | [**updateCustomer**](docs/Api/CustomerApi.md#updatecustomer) | **PATCH** /customer/{id} | Partially update information about a Customer resource.
*CustomerAddressApi* | [**createCustomerAddress**](docs/Api/CustomerAddressApi.md#createcustomeraddress) | **POST** /customer-address | Create a new Customer Address resources.
*CustomerAddressApi* | [**deleteCustomerAddress**](docs/Api/CustomerAddressApi.md#deletecustomeraddress) | **DELETE** /customer-address/{id} | Delete a Customer Address resource.
*CustomerAddressApi* | [**getCustomerAddress**](docs/Api/CustomerAddressApi.md#getcustomeraddress) | **GET** /customer-address/{id} | Detailed information about a Customer Address resource.
*CustomerAddressApi* | [**getCustomerAddressList**](docs/Api/CustomerAddressApi.md#getcustomeraddresslist) | **GET** /customer-address | List with basic information of Customer Address resources.
*CustomerAddressApi* | [**updateCustomerAddress**](docs/Api/CustomerAddressApi.md#updatecustomeraddress) | **PATCH** /customer-address/{id} | Partially update information about a Customer Address resource.
*CustomerGroupApi* | [**createCustomerGroup**](docs/Api/CustomerGroupApi.md#createcustomergroup) | **POST** /customer-group | Create a new Customer Group resources.
*CustomerGroupApi* | [**deleteCustomerGroup**](docs/Api/CustomerGroupApi.md#deletecustomergroup) | **DELETE** /customer-group/{id} | Delete a Customer Group resource.
*CustomerGroupApi* | [**getCustomerGroup**](docs/Api/CustomerGroupApi.md#getcustomergroup) | **GET** /customer-group/{id} | Detailed information about a Customer Group resource.
*CustomerGroupApi* | [**getCustomerGroupList**](docs/Api/CustomerGroupApi.md#getcustomergrouplist) | **GET** /customer-group | List with basic information of Customer Group resources.
*CustomerGroupApi* | [**updateCustomerGroup**](docs/Api/CustomerGroupApi.md#updatecustomergroup) | **PATCH** /customer-group/{id} | Partially update information about a Customer Group resource.
*CustomerRecoveryApi* | [**createCustomerRecovery**](docs/Api/CustomerRecoveryApi.md#createcustomerrecovery) | **POST** /customer-recovery | Create a new Customer Recovery resources.
*CustomerRecoveryApi* | [**deleteCustomerRecovery**](docs/Api/CustomerRecoveryApi.md#deletecustomerrecovery) | **DELETE** /customer-recovery/{id} | Delete a Customer Recovery resource.
*CustomerRecoveryApi* | [**getCustomerRecovery**](docs/Api/CustomerRecoveryApi.md#getcustomerrecovery) | **GET** /customer-recovery/{id} | Detailed information about a Customer Recovery resource.
*CustomerRecoveryApi* | [**getCustomerRecoveryList**](docs/Api/CustomerRecoveryApi.md#getcustomerrecoverylist) | **GET** /customer-recovery | List with basic information of Customer Recovery resources.
*CustomerRecoveryApi* | [**updateCustomerRecovery**](docs/Api/CustomerRecoveryApi.md#updatecustomerrecovery) | **PATCH** /customer-recovery/{id} | Partially update information about a Customer Recovery resource.
*CustomerWishlistApi* | [**createCustomerWishlist**](docs/Api/CustomerWishlistApi.md#createcustomerwishlist) | **POST** /customer-wishlist | Create a new Customer Wishlist resources.
*CustomerWishlistApi* | [**deleteCustomerWishlist**](docs/Api/CustomerWishlistApi.md#deletecustomerwishlist) | **DELETE** /customer-wishlist/{id} | Delete a Customer Wishlist resource.
*CustomerWishlistApi* | [**getCustomerWishlist**](docs/Api/CustomerWishlistApi.md#getcustomerwishlist) | **GET** /customer-wishlist/{id} | Detailed information about a Customer Wishlist resource.
*CustomerWishlistApi* | [**getCustomerWishlistList**](docs/Api/CustomerWishlistApi.md#getcustomerwishlistlist) | **GET** /customer-wishlist | List with basic information of Customer Wishlist resources.
*CustomerWishlistApi* | [**updateCustomerWishlist**](docs/Api/CustomerWishlistApi.md#updatecustomerwishlist) | **PATCH** /customer-wishlist/{id} | Partially update information about a Customer Wishlist resource.
*CustomerWishlistProductApi* | [**createCustomerWishlistProduct**](docs/Api/CustomerWishlistProductApi.md#createcustomerwishlistproduct) | **POST** /customer-wishlist-product | Create a new Customer Wishlist Product resources.
*CustomerWishlistProductApi* | [**deleteCustomerWishlistProduct**](docs/Api/CustomerWishlistProductApi.md#deletecustomerwishlistproduct) | **DELETE** /customer-wishlist-product/{id} | Delete a Customer Wishlist Product resource.
*CustomerWishlistProductApi* | [**getCustomerWishlistProduct**](docs/Api/CustomerWishlistProductApi.md#getcustomerwishlistproduct) | **GET** /customer-wishlist-product/{id} | Detailed information about a Customer Wishlist Product resource.
*CustomerWishlistProductApi* | [**getCustomerWishlistProductList**](docs/Api/CustomerWishlistProductApi.md#getcustomerwishlistproductlist) | **GET** /customer-wishlist-product | List with basic information of Customer Wishlist Product resources.
*CustomerWishlistProductApi* | [**updateCustomerWishlistProduct**](docs/Api/CustomerWishlistProductApi.md#updatecustomerwishlistproduct) | **PATCH** /customer-wishlist-product/{id} | Partially update information about a Customer Wishlist Product resource.
*DeliveryTimeApi* | [**createDeliveryTime**](docs/Api/DeliveryTimeApi.md#createdeliverytime) | **POST** /delivery-time | Create a new Delivery Time resources.
*DeliveryTimeApi* | [**deleteDeliveryTime**](docs/Api/DeliveryTimeApi.md#deletedeliverytime) | **DELETE** /delivery-time/{id} | Delete a Delivery Time resource.
*DeliveryTimeApi* | [**getDeliveryTime**](docs/Api/DeliveryTimeApi.md#getdeliverytime) | **GET** /delivery-time/{id} | Detailed information about a Delivery Time resource.
*DeliveryTimeApi* | [**getDeliveryTimeList**](docs/Api/DeliveryTimeApi.md#getdeliverytimelist) | **GET** /delivery-time | List with basic information of Delivery Time resources.
*DeliveryTimeApi* | [**updateDeliveryTime**](docs/Api/DeliveryTimeApi.md#updatedeliverytime) | **PATCH** /delivery-time/{id} | Partially update information about a Delivery Time resource.
*DocumentApi* | [**createDocument**](docs/Api/DocumentApi.md#createdocument) | **POST** /document | Create a new Document resources.
*DocumentApi* | [**deleteDocument**](docs/Api/DocumentApi.md#deletedocument) | **DELETE** /document/{id} | Delete a Document resource.
*DocumentApi* | [**getDocument**](docs/Api/DocumentApi.md#getdocument) | **GET** /document/{id} | Detailed information about a Document resource.
*DocumentApi* | [**getDocumentList**](docs/Api/DocumentApi.md#getdocumentlist) | **GET** /document | List with basic information of Document resources.
*DocumentApi* | [**updateDocument**](docs/Api/DocumentApi.md#updatedocument) | **PATCH** /document/{id} | Partially update information about a Document resource.
*DocumentBaseConfigApi* | [**createDocumentBaseConfig**](docs/Api/DocumentBaseConfigApi.md#createdocumentbaseconfig) | **POST** /document-base-config | Create a new Document Base Config resources.
*DocumentBaseConfigApi* | [**deleteDocumentBaseConfig**](docs/Api/DocumentBaseConfigApi.md#deletedocumentbaseconfig) | **DELETE** /document-base-config/{id} | Delete a Document Base Config resource.
*DocumentBaseConfigApi* | [**getDocumentBaseConfig**](docs/Api/DocumentBaseConfigApi.md#getdocumentbaseconfig) | **GET** /document-base-config/{id} | Detailed information about a Document Base Config resource.
*DocumentBaseConfigApi* | [**getDocumentBaseConfigList**](docs/Api/DocumentBaseConfigApi.md#getdocumentbaseconfiglist) | **GET** /document-base-config | List with basic information of Document Base Config resources.
*DocumentBaseConfigApi* | [**updateDocumentBaseConfig**](docs/Api/DocumentBaseConfigApi.md#updatedocumentbaseconfig) | **PATCH** /document-base-config/{id} | Partially update information about a Document Base Config resource.
*DocumentBaseConfigSalesChannelApi* | [**createDocumentBaseConfigSalesChannel**](docs/Api/DocumentBaseConfigSalesChannelApi.md#createdocumentbaseconfigsaleschannel) | **POST** /document-base-config-sales-channel | Create a new Document Base Config Sales Channel resources.
*DocumentBaseConfigSalesChannelApi* | [**deleteDocumentBaseConfigSalesChannel**](docs/Api/DocumentBaseConfigSalesChannelApi.md#deletedocumentbaseconfigsaleschannel) | **DELETE** /document-base-config-sales-channel/{id} | Delete a Document Base Config Sales Channel resource.
*DocumentBaseConfigSalesChannelApi* | [**getDocumentBaseConfigSalesChannel**](docs/Api/DocumentBaseConfigSalesChannelApi.md#getdocumentbaseconfigsaleschannel) | **GET** /document-base-config-sales-channel/{id} | Detailed information about a Document Base Config Sales Channel resource.
*DocumentBaseConfigSalesChannelApi* | [**getDocumentBaseConfigSalesChannelList**](docs/Api/DocumentBaseConfigSalesChannelApi.md#getdocumentbaseconfigsaleschannellist) | **GET** /document-base-config-sales-channel | List with basic information of Document Base Config Sales Channel resources.
*DocumentBaseConfigSalesChannelApi* | [**updateDocumentBaseConfigSalesChannel**](docs/Api/DocumentBaseConfigSalesChannelApi.md#updatedocumentbaseconfigsaleschannel) | **PATCH** /document-base-config-sales-channel/{id} | Partially update information about a Document Base Config Sales Channel resource.
*DocumentManagementApi* | [**createDocuments**](docs/Api/DocumentManagementApi.md#createdocuments) | **POST** /_action/order/document/{documentTypeName}/create | Create documents for orders
*DocumentManagementApi* | [**downloadDocument**](docs/Api/DocumentManagementApi.md#downloaddocument) | **GET** /_action/document/{documentId}/{deepLinkCode} | Download a document
*DocumentManagementApi* | [**downloadDocuments**](docs/Api/DocumentManagementApi.md#downloaddocuments) | **POST** /_action/order/document/download | Download a documents
*DocumentManagementApi* | [**numberRangeReserve**](docs/Api/DocumentManagementApi.md#numberrangereserve) | **GET** /_action/number-range/reserve/{type}/{saleschannel} | Reserve or preview a document number
*DocumentManagementApi* | [**uploadToDocument**](docs/Api/DocumentManagementApi.md#uploadtodocument) | **POST** /_action/document/{documentId}/upload | Upload a file for a document
*DocumentTypeApi* | [**createDocumentType**](docs/Api/DocumentTypeApi.md#createdocumenttype) | **POST** /document-type | Create a new Document Type resources.
*DocumentTypeApi* | [**deleteDocumentType**](docs/Api/DocumentTypeApi.md#deletedocumenttype) | **DELETE** /document-type/{id} | Delete a Document Type resource.
*DocumentTypeApi* | [**getDocumentType**](docs/Api/DocumentTypeApi.md#getdocumenttype) | **GET** /document-type/{id} | Detailed information about a Document Type resource.
*DocumentTypeApi* | [**getDocumentTypeList**](docs/Api/DocumentTypeApi.md#getdocumenttypelist) | **GET** /document-type | List with basic information of Document Type resources.
*DocumentTypeApi* | [**updateDocumentType**](docs/Api/DocumentTypeApi.md#updatedocumenttype) | **PATCH** /document-type/{id} | Partially update information about a Document Type resource.
*FlowApi* | [**createFlow**](docs/Api/FlowApi.md#createflow) | **POST** /flow | Create a new Flow resources.
*FlowApi* | [**deleteFlow**](docs/Api/FlowApi.md#deleteflow) | **DELETE** /flow/{id} | Delete a Flow resource.
*FlowApi* | [**getFlow**](docs/Api/FlowApi.md#getflow) | **GET** /flow/{id} | Detailed information about a Flow resource.
*FlowApi* | [**getFlowList**](docs/Api/FlowApi.md#getflowlist) | **GET** /flow | List with basic information of Flow resources.
*FlowApi* | [**updateFlow**](docs/Api/FlowApi.md#updateflow) | **PATCH** /flow/{id} | Partially update information about a Flow resource.
*FlowSequenceApi* | [**createFlowSequence**](docs/Api/FlowSequenceApi.md#createflowsequence) | **POST** /flow-sequence | Create a new Flow Sequence resources.
*FlowSequenceApi* | [**deleteFlowSequence**](docs/Api/FlowSequenceApi.md#deleteflowsequence) | **DELETE** /flow-sequence/{id} | Delete a Flow Sequence resource.
*FlowSequenceApi* | [**getFlowSequence**](docs/Api/FlowSequenceApi.md#getflowsequence) | **GET** /flow-sequence/{id} | Detailed information about a Flow Sequence resource.
*FlowSequenceApi* | [**getFlowSequenceList**](docs/Api/FlowSequenceApi.md#getflowsequencelist) | **GET** /flow-sequence | List with basic information of Flow Sequence resources.
*FlowSequenceApi* | [**updateFlowSequence**](docs/Api/FlowSequenceApi.md#updateflowsequence) | **PATCH** /flow-sequence/{id} | Partially update information about a Flow Sequence resource.
*FlowTemplateApi* | [**createFlowTemplate**](docs/Api/FlowTemplateApi.md#createflowtemplate) | **POST** /flow-template | Create a new Flow Template resources.
*FlowTemplateApi* | [**deleteFlowTemplate**](docs/Api/FlowTemplateApi.md#deleteflowtemplate) | **DELETE** /flow-template/{id} | Delete a Flow Template resource.
*FlowTemplateApi* | [**getFlowTemplate**](docs/Api/FlowTemplateApi.md#getflowtemplate) | **GET** /flow-template/{id} | Detailed information about a Flow Template resource.
*FlowTemplateApi* | [**getFlowTemplateList**](docs/Api/FlowTemplateApi.md#getflowtemplatelist) | **GET** /flow-template | List with basic information of Flow Template resources.
*FlowTemplateApi* | [**updateFlowTemplate**](docs/Api/FlowTemplateApi.md#updateflowtemplate) | **PATCH** /flow-template/{id} | Partially update information about a Flow Template resource.
*ImportExportFileApi* | [**createImportExportFile**](docs/Api/ImportExportFileApi.md#createimportexportfile) | **POST** /import-export-file | Create a new Import Export File resources.
*ImportExportFileApi* | [**deleteImportExportFile**](docs/Api/ImportExportFileApi.md#deleteimportexportfile) | **DELETE** /import-export-file/{id} | Delete a Import Export File resource.
*ImportExportFileApi* | [**getImportExportFile**](docs/Api/ImportExportFileApi.md#getimportexportfile) | **GET** /import-export-file/{id} | Detailed information about a Import Export File resource.
*ImportExportFileApi* | [**getImportExportFileList**](docs/Api/ImportExportFileApi.md#getimportexportfilelist) | **GET** /import-export-file | List with basic information of Import Export File resources.
*ImportExportFileApi* | [**updateImportExportFile**](docs/Api/ImportExportFileApi.md#updateimportexportfile) | **PATCH** /import-export-file/{id} | Partially update information about a Import Export File resource.
*ImportExportLogApi* | [**createImportExportLog**](docs/Api/ImportExportLogApi.md#createimportexportlog) | **POST** /import-export-log | Create a new Import Export Log resources.
*ImportExportLogApi* | [**deleteImportExportLog**](docs/Api/ImportExportLogApi.md#deleteimportexportlog) | **DELETE** /import-export-log/{id} | Delete a Import Export Log resource.
*ImportExportLogApi* | [**getImportExportLog**](docs/Api/ImportExportLogApi.md#getimportexportlog) | **GET** /import-export-log/{id} | Detailed information about a Import Export Log resource.
*ImportExportLogApi* | [**getImportExportLogList**](docs/Api/ImportExportLogApi.md#getimportexportloglist) | **GET** /import-export-log | List with basic information of Import Export Log resources.
*ImportExportLogApi* | [**updateImportExportLog**](docs/Api/ImportExportLogApi.md#updateimportexportlog) | **PATCH** /import-export-log/{id} | Partially update information about a Import Export Log resource.
*ImportExportProfileApi* | [**createImportExportProfile**](docs/Api/ImportExportProfileApi.md#createimportexportprofile) | **POST** /import-export-profile | Create a new Import Export Profile resources.
*ImportExportProfileApi* | [**deleteImportExportProfile**](docs/Api/ImportExportProfileApi.md#deleteimportexportprofile) | **DELETE** /import-export-profile/{id} | Delete a Import Export Profile resource.
*ImportExportProfileApi* | [**getImportExportProfile**](docs/Api/ImportExportProfileApi.md#getimportexportprofile) | **GET** /import-export-profile/{id} | Detailed information about a Import Export Profile resource.
*ImportExportProfileApi* | [**getImportExportProfileList**](docs/Api/ImportExportProfileApi.md#getimportexportprofilelist) | **GET** /import-export-profile | List with basic information of Import Export Profile resources.
*ImportExportProfileApi* | [**updateImportExportProfile**](docs/Api/ImportExportProfileApi.md#updateimportexportprofile) | **PATCH** /import-export-profile/{id} | Partially update information about a Import Export Profile resource.
*IntegrationApi* | [**createIntegration**](docs/Api/IntegrationApi.md#createintegration) | **POST** /integration | Create a new Integration resources.
*IntegrationApi* | [**deleteIntegration**](docs/Api/IntegrationApi.md#deleteintegration) | **DELETE** /integration/{id} | Delete a Integration resource.
*IntegrationApi* | [**getIntegration**](docs/Api/IntegrationApi.md#getintegration) | **GET** /integration/{id} | Detailed information about a Integration resource.
*IntegrationApi* | [**getIntegrationList**](docs/Api/IntegrationApi.md#getintegrationlist) | **GET** /integration | List with basic information of Integration resources.
*IntegrationApi* | [**updateIntegration**](docs/Api/IntegrationApi.md#updateintegration) | **PATCH** /integration/{id} | Partially update information about a Integration resource.
*LandingPageApi* | [**createLandingPage**](docs/Api/LandingPageApi.md#createlandingpage) | **POST** /landing-page | Create a new Landing Page resources.
*LandingPageApi* | [**deleteLandingPage**](docs/Api/LandingPageApi.md#deletelandingpage) | **DELETE** /landing-page/{id} | Delete a Landing Page resource.
*LandingPageApi* | [**getLandingPage**](docs/Api/LandingPageApi.md#getlandingpage) | **GET** /landing-page/{id} | Detailed information about a Landing Page resource.
*LandingPageApi* | [**getLandingPageList**](docs/Api/LandingPageApi.md#getlandingpagelist) | **GET** /landing-page | List with basic information of Landing Page resources.
*LandingPageApi* | [**updateLandingPage**](docs/Api/LandingPageApi.md#updatelandingpage) | **PATCH** /landing-page/{id} | Partially update information about a Landing Page resource.
*LanguageApi* | [**createLanguage**](docs/Api/LanguageApi.md#createlanguage) | **POST** /language | Create a new Language resources.
*LanguageApi* | [**deleteLanguage**](docs/Api/LanguageApi.md#deletelanguage) | **DELETE** /language/{id} | Delete a Language resource.
*LanguageApi* | [**getLanguage**](docs/Api/LanguageApi.md#getlanguage) | **GET** /language/{id} | Detailed information about a Language resource.
*LanguageApi* | [**getLanguageList**](docs/Api/LanguageApi.md#getlanguagelist) | **GET** /language | List with basic information of Language resources.
*LanguageApi* | [**updateLanguage**](docs/Api/LanguageApi.md#updatelanguage) | **PATCH** /language/{id} | Partially update information about a Language resource.
*LocaleApi* | [**createLocale**](docs/Api/LocaleApi.md#createlocale) | **POST** /locale | Create a new Locale resources.
*LocaleApi* | [**deleteLocale**](docs/Api/LocaleApi.md#deletelocale) | **DELETE** /locale/{id} | Delete a Locale resource.
*LocaleApi* | [**getLocale**](docs/Api/LocaleApi.md#getlocale) | **GET** /locale/{id} | Detailed information about a Locale resource.
*LocaleApi* | [**getLocaleList**](docs/Api/LocaleApi.md#getlocalelist) | **GET** /locale | List with basic information of Locale resources.
*LocaleApi* | [**updateLocale**](docs/Api/LocaleApi.md#updatelocale) | **PATCH** /locale/{id} | Partially update information about a Locale resource.
*LogEntryApi* | [**createLogEntry**](docs/Api/LogEntryApi.md#createlogentry) | **POST** /log-entry | Create a new Log Entry resources.
*LogEntryApi* | [**deleteLogEntry**](docs/Api/LogEntryApi.md#deletelogentry) | **DELETE** /log-entry/{id} | Delete a Log Entry resource.
*LogEntryApi* | [**getLogEntry**](docs/Api/LogEntryApi.md#getlogentry) | **GET** /log-entry/{id} | Detailed information about a Log Entry resource.
*LogEntryApi* | [**getLogEntryList**](docs/Api/LogEntryApi.md#getlogentrylist) | **GET** /log-entry | List with basic information of Log Entry resources.
*LogEntryApi* | [**updateLogEntry**](docs/Api/LogEntryApi.md#updatelogentry) | **PATCH** /log-entry/{id} | Partially update information about a Log Entry resource.
*MailHeaderFooterApi* | [**createMailHeaderFooter**](docs/Api/MailHeaderFooterApi.md#createmailheaderfooter) | **POST** /mail-header-footer | Create a new Mail Header Footer resources.
*MailHeaderFooterApi* | [**deleteMailHeaderFooter**](docs/Api/MailHeaderFooterApi.md#deletemailheaderfooter) | **DELETE** /mail-header-footer/{id} | Delete a Mail Header Footer resource.
*MailHeaderFooterApi* | [**getMailHeaderFooter**](docs/Api/MailHeaderFooterApi.md#getmailheaderfooter) | **GET** /mail-header-footer/{id} | Detailed information about a Mail Header Footer resource.
*MailHeaderFooterApi* | [**getMailHeaderFooterList**](docs/Api/MailHeaderFooterApi.md#getmailheaderfooterlist) | **GET** /mail-header-footer | List with basic information of Mail Header Footer resources.
*MailHeaderFooterApi* | [**updateMailHeaderFooter**](docs/Api/MailHeaderFooterApi.md#updatemailheaderfooter) | **PATCH** /mail-header-footer/{id} | Partially update information about a Mail Header Footer resource.
*MailOperationsApi* | [**build**](docs/Api/MailOperationsApi.md#build) | **POST** /_action/mail-template/build | Preview a mail template
*MailOperationsApi* | [**send**](docs/Api/MailOperationsApi.md#send) | **POST** /_action/mail-template/send | Send a mail
*MailOperationsApi* | [**validate**](docs/Api/MailOperationsApi.md#validate) | **POST** /_action/mail-template/validate | Validate a mail content
*MailTemplateApi* | [**createMailTemplate**](docs/Api/MailTemplateApi.md#createmailtemplate) | **POST** /mail-template | Create a new Mail Template resources.
*MailTemplateApi* | [**deleteMailTemplate**](docs/Api/MailTemplateApi.md#deletemailtemplate) | **DELETE** /mail-template/{id} | Delete a Mail Template resource.
*MailTemplateApi* | [**getMailTemplate**](docs/Api/MailTemplateApi.md#getmailtemplate) | **GET** /mail-template/{id} | Detailed information about a Mail Template resource.
*MailTemplateApi* | [**getMailTemplateList**](docs/Api/MailTemplateApi.md#getmailtemplatelist) | **GET** /mail-template | List with basic information of Mail Template resources.
*MailTemplateApi* | [**updateMailTemplate**](docs/Api/MailTemplateApi.md#updatemailtemplate) | **PATCH** /mail-template/{id} | Partially update information about a Mail Template resource.
*MailTemplateTypeApi* | [**createMailTemplateType**](docs/Api/MailTemplateTypeApi.md#createmailtemplatetype) | **POST** /mail-template-type | Create a new Mail Template Type resources.
*MailTemplateTypeApi* | [**deleteMailTemplateType**](docs/Api/MailTemplateTypeApi.md#deletemailtemplatetype) | **DELETE** /mail-template-type/{id} | Delete a Mail Template Type resource.
*MailTemplateTypeApi* | [**getMailTemplateType**](docs/Api/MailTemplateTypeApi.md#getmailtemplatetype) | **GET** /mail-template-type/{id} | Detailed information about a Mail Template Type resource.
*MailTemplateTypeApi* | [**getMailTemplateTypeList**](docs/Api/MailTemplateTypeApi.md#getmailtemplatetypelist) | **GET** /mail-template-type | List with basic information of Mail Template Type resources.
*MailTemplateTypeApi* | [**updateMailTemplateType**](docs/Api/MailTemplateTypeApi.md#updatemailtemplatetype) | **PATCH** /mail-template-type/{id} | Partially update information about a Mail Template Type resource.
*MainCategoryApi* | [**createMainCategory**](docs/Api/MainCategoryApi.md#createmaincategory) | **POST** /main-category | Create a new Main Category resources.
*MainCategoryApi* | [**deleteMainCategory**](docs/Api/MainCategoryApi.md#deletemaincategory) | **DELETE** /main-category/{id} | Delete a Main Category resource.
*MainCategoryApi* | [**getMainCategory**](docs/Api/MainCategoryApi.md#getmaincategory) | **GET** /main-category/{id} | Detailed information about a Main Category resource.
*MainCategoryApi* | [**getMainCategoryList**](docs/Api/MainCategoryApi.md#getmaincategorylist) | **GET** /main-category | List with basic information of Main Category resources.
*MainCategoryApi* | [**updateMainCategory**](docs/Api/MainCategoryApi.md#updatemaincategory) | **PATCH** /main-category/{id} | Partially update information about a Main Category resource.
*MediaApi* | [**createMedia**](docs/Api/MediaApi.md#createmedia) | **POST** /media | Create a new Media resources.
*MediaApi* | [**deleteMedia**](docs/Api/MediaApi.md#deletemedia) | **DELETE** /media/{id} | Delete a Media resource.
*MediaApi* | [**getMedia**](docs/Api/MediaApi.md#getmedia) | **GET** /media/{id} | Detailed information about a Media resource.
*MediaApi* | [**getMediaList**](docs/Api/MediaApi.md#getmedialist) | **GET** /media | List with basic information of Media resources.
*MediaApi* | [**updateMedia**](docs/Api/MediaApi.md#updatemedia) | **PATCH** /media/{id} | Partially update information about a Media resource.
*MediaDefaultFolderApi* | [**createMediaDefaultFolder**](docs/Api/MediaDefaultFolderApi.md#createmediadefaultfolder) | **POST** /media-default-folder | Create a new Media Default Folder resources.
*MediaDefaultFolderApi* | [**deleteMediaDefaultFolder**](docs/Api/MediaDefaultFolderApi.md#deletemediadefaultfolder) | **DELETE** /media-default-folder/{id} | Delete a Media Default Folder resource.
*MediaDefaultFolderApi* | [**getMediaDefaultFolder**](docs/Api/MediaDefaultFolderApi.md#getmediadefaultfolder) | **GET** /media-default-folder/{id} | Detailed information about a Media Default Folder resource.
*MediaDefaultFolderApi* | [**getMediaDefaultFolderList**](docs/Api/MediaDefaultFolderApi.md#getmediadefaultfolderlist) | **GET** /media-default-folder | List with basic information of Media Default Folder resources.
*MediaDefaultFolderApi* | [**updateMediaDefaultFolder**](docs/Api/MediaDefaultFolderApi.md#updatemediadefaultfolder) | **PATCH** /media-default-folder/{id} | Partially update information about a Media Default Folder resource.
*MediaFolderApi* | [**createMediaFolder**](docs/Api/MediaFolderApi.md#createmediafolder) | **POST** /media-folder | Create a new Media Folder resources.
*MediaFolderApi* | [**deleteMediaFolder**](docs/Api/MediaFolderApi.md#deletemediafolder) | **DELETE** /media-folder/{id} | Delete a Media Folder resource.
*MediaFolderApi* | [**getMediaFolder**](docs/Api/MediaFolderApi.md#getmediafolder) | **GET** /media-folder/{id} | Detailed information about a Media Folder resource.
*MediaFolderApi* | [**getMediaFolderList**](docs/Api/MediaFolderApi.md#getmediafolderlist) | **GET** /media-folder | List with basic information of Media Folder resources.
*MediaFolderApi* | [**updateMediaFolder**](docs/Api/MediaFolderApi.md#updatemediafolder) | **PATCH** /media-folder/{id} | Partially update information about a Media Folder resource.
*MediaFolderConfigurationApi* | [**createMediaFolderConfiguration**](docs/Api/MediaFolderConfigurationApi.md#createmediafolderconfiguration) | **POST** /media-folder-configuration | Create a new Media Folder Configuration resources.
*MediaFolderConfigurationApi* | [**deleteMediaFolderConfiguration**](docs/Api/MediaFolderConfigurationApi.md#deletemediafolderconfiguration) | **DELETE** /media-folder-configuration/{id} | Delete a Media Folder Configuration resource.
*MediaFolderConfigurationApi* | [**getMediaFolderConfiguration**](docs/Api/MediaFolderConfigurationApi.md#getmediafolderconfiguration) | **GET** /media-folder-configuration/{id} | Detailed information about a Media Folder Configuration resource.
*MediaFolderConfigurationApi* | [**getMediaFolderConfigurationList**](docs/Api/MediaFolderConfigurationApi.md#getmediafolderconfigurationlist) | **GET** /media-folder-configuration | List with basic information of Media Folder Configuration resources.
*MediaFolderConfigurationApi* | [**updateMediaFolderConfiguration**](docs/Api/MediaFolderConfigurationApi.md#updatemediafolderconfiguration) | **PATCH** /media-folder-configuration/{id} | Partially update information about a Media Folder Configuration resource.
*MediaThumbnailApi* | [**createMediaThumbnail**](docs/Api/MediaThumbnailApi.md#createmediathumbnail) | **POST** /media-thumbnail | Create a new Media Thumbnail resources.
*MediaThumbnailApi* | [**deleteMediaThumbnail**](docs/Api/MediaThumbnailApi.md#deletemediathumbnail) | **DELETE** /media-thumbnail/{id} | Delete a Media Thumbnail resource.
*MediaThumbnailApi* | [**getMediaThumbnail**](docs/Api/MediaThumbnailApi.md#getmediathumbnail) | **GET** /media-thumbnail/{id} | Detailed information about a Media Thumbnail resource.
*MediaThumbnailApi* | [**getMediaThumbnailList**](docs/Api/MediaThumbnailApi.md#getmediathumbnaillist) | **GET** /media-thumbnail | List with basic information of Media Thumbnail resources.
*MediaThumbnailApi* | [**updateMediaThumbnail**](docs/Api/MediaThumbnailApi.md#updatemediathumbnail) | **PATCH** /media-thumbnail/{id} | Partially update information about a Media Thumbnail resource.
*MediaThumbnailSizeApi* | [**createMediaThumbnailSize**](docs/Api/MediaThumbnailSizeApi.md#createmediathumbnailsize) | **POST** /media-thumbnail-size | Create a new Media Thumbnail Size resources.
*MediaThumbnailSizeApi* | [**deleteMediaThumbnailSize**](docs/Api/MediaThumbnailSizeApi.md#deletemediathumbnailsize) | **DELETE** /media-thumbnail-size/{id} | Delete a Media Thumbnail Size resource.
*MediaThumbnailSizeApi* | [**getMediaThumbnailSize**](docs/Api/MediaThumbnailSizeApi.md#getmediathumbnailsize) | **GET** /media-thumbnail-size/{id} | Detailed information about a Media Thumbnail Size resource.
*MediaThumbnailSizeApi* | [**getMediaThumbnailSizeList**](docs/Api/MediaThumbnailSizeApi.md#getmediathumbnailsizelist) | **GET** /media-thumbnail-size | List with basic information of Media Thumbnail Size resources.
*MediaThumbnailSizeApi* | [**updateMediaThumbnailSize**](docs/Api/MediaThumbnailSizeApi.md#updatemediathumbnailsize) | **PATCH** /media-thumbnail-size/{id} | Partially update information about a Media Thumbnail Size resource.
*NewsletterRecipientApi* | [**createNewsletterRecipient**](docs/Api/NewsletterRecipientApi.md#createnewsletterrecipient) | **POST** /newsletter-recipient | Create a new Newsletter Recipient resources.
*NewsletterRecipientApi* | [**deleteNewsletterRecipient**](docs/Api/NewsletterRecipientApi.md#deletenewsletterrecipient) | **DELETE** /newsletter-recipient/{id} | Delete a Newsletter Recipient resource.
*NewsletterRecipientApi* | [**getNewsletterRecipient**](docs/Api/NewsletterRecipientApi.md#getnewsletterrecipient) | **GET** /newsletter-recipient/{id} | Detailed information about a Newsletter Recipient resource.
*NewsletterRecipientApi* | [**getNewsletterRecipientList**](docs/Api/NewsletterRecipientApi.md#getnewsletterrecipientlist) | **GET** /newsletter-recipient | List with basic information of Newsletter Recipient resources.
*NewsletterRecipientApi* | [**updateNewsletterRecipient**](docs/Api/NewsletterRecipientApi.md#updatenewsletterrecipient) | **PATCH** /newsletter-recipient/{id} | Partially update information about a Newsletter Recipient resource.
*NotificationApi* | [**createNotification**](docs/Api/NotificationApi.md#createnotification) | **POST** /notification | Create a new Notification resources.
*NotificationApi* | [**deleteNotification**](docs/Api/NotificationApi.md#deletenotification) | **DELETE** /notification/{id} | Delete a Notification resource.
*NotificationApi* | [**getNotification**](docs/Api/NotificationApi.md#getnotification) | **GET** /notification/{id} | Detailed information about a Notification resource.
*NotificationApi* | [**getNotificationList**](docs/Api/NotificationApi.md#getnotificationlist) | **GET** /notification | List with basic information of Notification resources.
*NotificationApi* | [**updateNotification**](docs/Api/NotificationApi.md#updatenotification) | **PATCH** /notification/{id} | Partially update information about a Notification resource.
*NumberRangeApi* | [**createNumberRange**](docs/Api/NumberRangeApi.md#createnumberrange) | **POST** /number-range | Create a new Number Range resources.
*NumberRangeApi* | [**deleteNumberRange**](docs/Api/NumberRangeApi.md#deletenumberrange) | **DELETE** /number-range/{id} | Delete a Number Range resource.
*NumberRangeApi* | [**getNumberRange**](docs/Api/NumberRangeApi.md#getnumberrange) | **GET** /number-range/{id} | Detailed information about a Number Range resource.
*NumberRangeApi* | [**getNumberRangeList**](docs/Api/NumberRangeApi.md#getnumberrangelist) | **GET** /number-range | List with basic information of Number Range resources.
*NumberRangeApi* | [**updateNumberRange**](docs/Api/NumberRangeApi.md#updatenumberrange) | **PATCH** /number-range/{id} | Partially update information about a Number Range resource.
*NumberRangeSalesChannelApi* | [**createNumberRangeSalesChannel**](docs/Api/NumberRangeSalesChannelApi.md#createnumberrangesaleschannel) | **POST** /number-range-sales-channel | Create a new Number Range Sales Channel resources.
*NumberRangeSalesChannelApi* | [**deleteNumberRangeSalesChannel**](docs/Api/NumberRangeSalesChannelApi.md#deletenumberrangesaleschannel) | **DELETE** /number-range-sales-channel/{id} | Delete a Number Range Sales Channel resource.
*NumberRangeSalesChannelApi* | [**getNumberRangeSalesChannel**](docs/Api/NumberRangeSalesChannelApi.md#getnumberrangesaleschannel) | **GET** /number-range-sales-channel/{id} | Detailed information about a Number Range Sales Channel resource.
*NumberRangeSalesChannelApi* | [**getNumberRangeSalesChannelList**](docs/Api/NumberRangeSalesChannelApi.md#getnumberrangesaleschannellist) | **GET** /number-range-sales-channel | List with basic information of Number Range Sales Channel resources.
*NumberRangeSalesChannelApi* | [**updateNumberRangeSalesChannel**](docs/Api/NumberRangeSalesChannelApi.md#updatenumberrangesaleschannel) | **PATCH** /number-range-sales-channel/{id} | Partially update information about a Number Range Sales Channel resource.
*NumberRangeStateApi* | [**createNumberRangeState**](docs/Api/NumberRangeStateApi.md#createnumberrangestate) | **POST** /number-range-state | Create a new Number Range State resources.
*NumberRangeStateApi* | [**deleteNumberRangeState**](docs/Api/NumberRangeStateApi.md#deletenumberrangestate) | **DELETE** /number-range-state/{id} | Delete a Number Range State resource.
*NumberRangeStateApi* | [**getNumberRangeState**](docs/Api/NumberRangeStateApi.md#getnumberrangestate) | **GET** /number-range-state/{id} | Detailed information about a Number Range State resource.
*NumberRangeStateApi* | [**getNumberRangeStateList**](docs/Api/NumberRangeStateApi.md#getnumberrangestatelist) | **GET** /number-range-state | List with basic information of Number Range State resources.
*NumberRangeStateApi* | [**updateNumberRangeState**](docs/Api/NumberRangeStateApi.md#updatenumberrangestate) | **PATCH** /number-range-state/{id} | Partially update information about a Number Range State resource.
*NumberRangeTypeApi* | [**createNumberRangeType**](docs/Api/NumberRangeTypeApi.md#createnumberrangetype) | **POST** /number-range-type | Create a new Number Range Type resources.
*NumberRangeTypeApi* | [**deleteNumberRangeType**](docs/Api/NumberRangeTypeApi.md#deletenumberrangetype) | **DELETE** /number-range-type/{id} | Delete a Number Range Type resource.
*NumberRangeTypeApi* | [**getNumberRangeType**](docs/Api/NumberRangeTypeApi.md#getnumberrangetype) | **GET** /number-range-type/{id} | Detailed information about a Number Range Type resource.
*NumberRangeTypeApi* | [**getNumberRangeTypeList**](docs/Api/NumberRangeTypeApi.md#getnumberrangetypelist) | **GET** /number-range-type | List with basic information of Number Range Type resources.
*NumberRangeTypeApi* | [**updateNumberRangeType**](docs/Api/NumberRangeTypeApi.md#updatenumberrangetype) | **PATCH** /number-range-type/{id} | Partially update information about a Number Range Type resource.
*OrderApi* | [**createOrder**](docs/Api/OrderApi.md#createorder) | **POST** /order | Create a new Order resources.
*OrderApi* | [**deleteOrder**](docs/Api/OrderApi.md#deleteorder) | **DELETE** /order/{id} | Delete a Order resource.
*OrderApi* | [**getOrder**](docs/Api/OrderApi.md#getorder) | **GET** /order/{id} | Detailed information about a Order resource.
*OrderApi* | [**getOrderList**](docs/Api/OrderApi.md#getorderlist) | **GET** /order | List with basic information of Order resources.
*OrderApi* | [**updateOrder**](docs/Api/OrderApi.md#updateorder) | **PATCH** /order/{id} | Partially update information about a Order resource.
*OrderAddressApi* | [**createOrderAddress**](docs/Api/OrderAddressApi.md#createorderaddress) | **POST** /order-address | Create a new Order Address resources.
*OrderAddressApi* | [**deleteOrderAddress**](docs/Api/OrderAddressApi.md#deleteorderaddress) | **DELETE** /order-address/{id} | Delete a Order Address resource.
*OrderAddressApi* | [**getOrderAddress**](docs/Api/OrderAddressApi.md#getorderaddress) | **GET** /order-address/{id} | Detailed information about a Order Address resource.
*OrderAddressApi* | [**getOrderAddressList**](docs/Api/OrderAddressApi.md#getorderaddresslist) | **GET** /order-address | List with basic information of Order Address resources.
*OrderAddressApi* | [**updateOrderAddress**](docs/Api/OrderAddressApi.md#updateorderaddress) | **PATCH** /order-address/{id} | Partially update information about a Order Address resource.
*OrderCustomerApi* | [**createOrderCustomer**](docs/Api/OrderCustomerApi.md#createordercustomer) | **POST** /order-customer | Create a new Order Customer resources.
*OrderCustomerApi* | [**deleteOrderCustomer**](docs/Api/OrderCustomerApi.md#deleteordercustomer) | **DELETE** /order-customer/{id} | Delete a Order Customer resource.
*OrderCustomerApi* | [**getOrderCustomer**](docs/Api/OrderCustomerApi.md#getordercustomer) | **GET** /order-customer/{id} | Detailed information about a Order Customer resource.
*OrderCustomerApi* | [**getOrderCustomerList**](docs/Api/OrderCustomerApi.md#getordercustomerlist) | **GET** /order-customer | List with basic information of Order Customer resources.
*OrderCustomerApi* | [**updateOrderCustomer**](docs/Api/OrderCustomerApi.md#updateordercustomer) | **PATCH** /order-customer/{id} | Partially update information about a Order Customer resource.
*OrderDeliveryApi* | [**createOrderDelivery**](docs/Api/OrderDeliveryApi.md#createorderdelivery) | **POST** /order-delivery | Create a new Order Delivery resources.
*OrderDeliveryApi* | [**deleteOrderDelivery**](docs/Api/OrderDeliveryApi.md#deleteorderdelivery) | **DELETE** /order-delivery/{id} | Delete a Order Delivery resource.
*OrderDeliveryApi* | [**getOrderDelivery**](docs/Api/OrderDeliveryApi.md#getorderdelivery) | **GET** /order-delivery/{id} | Detailed information about a Order Delivery resource.
*OrderDeliveryApi* | [**getOrderDeliveryList**](docs/Api/OrderDeliveryApi.md#getorderdeliverylist) | **GET** /order-delivery | List with basic information of Order Delivery resources.
*OrderDeliveryApi* | [**updateOrderDelivery**](docs/Api/OrderDeliveryApi.md#updateorderdelivery) | **PATCH** /order-delivery/{id} | Partially update information about a Order Delivery resource.
*OrderDeliveryPositionApi* | [**createOrderDeliveryPosition**](docs/Api/OrderDeliveryPositionApi.md#createorderdeliveryposition) | **POST** /order-delivery-position | Create a new Order Delivery Position resources.
*OrderDeliveryPositionApi* | [**deleteOrderDeliveryPosition**](docs/Api/OrderDeliveryPositionApi.md#deleteorderdeliveryposition) | **DELETE** /order-delivery-position/{id} | Delete a Order Delivery Position resource.
*OrderDeliveryPositionApi* | [**getOrderDeliveryPosition**](docs/Api/OrderDeliveryPositionApi.md#getorderdeliveryposition) | **GET** /order-delivery-position/{id} | Detailed information about a Order Delivery Position resource.
*OrderDeliveryPositionApi* | [**getOrderDeliveryPositionList**](docs/Api/OrderDeliveryPositionApi.md#getorderdeliverypositionlist) | **GET** /order-delivery-position | List with basic information of Order Delivery Position resources.
*OrderDeliveryPositionApi* | [**updateOrderDeliveryPosition**](docs/Api/OrderDeliveryPositionApi.md#updateorderdeliveryposition) | **PATCH** /order-delivery-position/{id} | Partially update information about a Order Delivery Position resource.
*OrderLineItemApi* | [**createOrderLineItem**](docs/Api/OrderLineItemApi.md#createorderlineitem) | **POST** /order-line-item | Create a new Order Line Item resources.
*OrderLineItemApi* | [**deleteOrderLineItem**](docs/Api/OrderLineItemApi.md#deleteorderlineitem) | **DELETE** /order-line-item/{id} | Delete a Order Line Item resource.
*OrderLineItemApi* | [**getOrderLineItem**](docs/Api/OrderLineItemApi.md#getorderlineitem) | **GET** /order-line-item/{id} | Detailed information about a Order Line Item resource.
*OrderLineItemApi* | [**getOrderLineItemList**](docs/Api/OrderLineItemApi.md#getorderlineitemlist) | **GET** /order-line-item | List with basic information of Order Line Item resources.
*OrderLineItemApi* | [**updateOrderLineItem**](docs/Api/OrderLineItemApi.md#updateorderlineitem) | **PATCH** /order-line-item/{id} | Partially update information about a Order Line Item resource.
*OrderLineItemDownloadApi* | [**createOrderLineItemDownload**](docs/Api/OrderLineItemDownloadApi.md#createorderlineitemdownload) | **POST** /order-line-item-download | Create a new Order Line Item Download resources.
*OrderLineItemDownloadApi* | [**deleteOrderLineItemDownload**](docs/Api/OrderLineItemDownloadApi.md#deleteorderlineitemdownload) | **DELETE** /order-line-item-download/{id} | Delete a Order Line Item Download resource.
*OrderLineItemDownloadApi* | [**getOrderLineItemDownload**](docs/Api/OrderLineItemDownloadApi.md#getorderlineitemdownload) | **GET** /order-line-item-download/{id} | Detailed information about a Order Line Item Download resource.
*OrderLineItemDownloadApi* | [**getOrderLineItemDownloadList**](docs/Api/OrderLineItemDownloadApi.md#getorderlineitemdownloadlist) | **GET** /order-line-item-download | List with basic information of Order Line Item Download resources.
*OrderLineItemDownloadApi* | [**updateOrderLineItemDownload**](docs/Api/OrderLineItemDownloadApi.md#updateorderlineitemdownload) | **PATCH** /order-line-item-download/{id} | Partially update information about a Order Line Item Download resource.
*OrderManagementApi* | [**orderDeliveryStateTransition**](docs/Api/OrderManagementApi.md#orderdeliverystatetransition) | **POST** /_action/order_delivery/{orderDeliveryId}/state/{transition} | Transition an order delivery to a new state
*OrderManagementApi* | [**orderStateTransition**](docs/Api/OrderManagementApi.md#orderstatetransition) | **POST** /_action/order/{orderId}/state/{transition} | Transition an order to a new state
*OrderManagementApi* | [**orderTransactionCaptureRefund**](docs/Api/OrderManagementApi.md#ordertransactioncapturerefund) | **POST** /_action/order_transaction_capture_refund/{refundId} | Refund an order transaction capture
*OrderManagementApi* | [**orderTransactionStateTransition**](docs/Api/OrderManagementApi.md#ordertransactionstatetransition) | **POST** /_action/order_transaction/{orderTransactionId}/state/{transition} | Transition an order transaction to a new state
*OrderTransactionApi* | [**createOrderTransaction**](docs/Api/OrderTransactionApi.md#createordertransaction) | **POST** /order-transaction | Create a new Order Transaction resources.
*OrderTransactionApi* | [**deleteOrderTransaction**](docs/Api/OrderTransactionApi.md#deleteordertransaction) | **DELETE** /order-transaction/{id} | Delete a Order Transaction resource.
*OrderTransactionApi* | [**getOrderTransaction**](docs/Api/OrderTransactionApi.md#getordertransaction) | **GET** /order-transaction/{id} | Detailed information about a Order Transaction resource.
*OrderTransactionApi* | [**getOrderTransactionList**](docs/Api/OrderTransactionApi.md#getordertransactionlist) | **GET** /order-transaction | List with basic information of Order Transaction resources.
*OrderTransactionApi* | [**updateOrderTransaction**](docs/Api/OrderTransactionApi.md#updateordertransaction) | **PATCH** /order-transaction/{id} | Partially update information about a Order Transaction resource.
*OrderTransactionCaptureApi* | [**createOrderTransactionCapture**](docs/Api/OrderTransactionCaptureApi.md#createordertransactioncapture) | **POST** /order-transaction-capture | Create a new Order Transaction Capture resources.
*OrderTransactionCaptureApi* | [**deleteOrderTransactionCapture**](docs/Api/OrderTransactionCaptureApi.md#deleteordertransactioncapture) | **DELETE** /order-transaction-capture/{id} | Delete a Order Transaction Capture resource.
*OrderTransactionCaptureApi* | [**getOrderTransactionCapture**](docs/Api/OrderTransactionCaptureApi.md#getordertransactioncapture) | **GET** /order-transaction-capture/{id} | Detailed information about a Order Transaction Capture resource.
*OrderTransactionCaptureApi* | [**getOrderTransactionCaptureList**](docs/Api/OrderTransactionCaptureApi.md#getordertransactioncapturelist) | **GET** /order-transaction-capture | List with basic information of Order Transaction Capture resources.
*OrderTransactionCaptureApi* | [**updateOrderTransactionCapture**](docs/Api/OrderTransactionCaptureApi.md#updateordertransactioncapture) | **PATCH** /order-transaction-capture/{id} | Partially update information about a Order Transaction Capture resource.
*OrderTransactionCaptureRefundApi* | [**createOrderTransactionCaptureRefund**](docs/Api/OrderTransactionCaptureRefundApi.md#createordertransactioncapturerefund) | **POST** /order-transaction-capture-refund | Create a new Order Transaction Capture Refund resources.
*OrderTransactionCaptureRefundApi* | [**deleteOrderTransactionCaptureRefund**](docs/Api/OrderTransactionCaptureRefundApi.md#deleteordertransactioncapturerefund) | **DELETE** /order-transaction-capture-refund/{id} | Delete a Order Transaction Capture Refund resource.
*OrderTransactionCaptureRefundApi* | [**getOrderTransactionCaptureRefund**](docs/Api/OrderTransactionCaptureRefundApi.md#getordertransactioncapturerefund) | **GET** /order-transaction-capture-refund/{id} | Detailed information about a Order Transaction Capture Refund resource.
*OrderTransactionCaptureRefundApi* | [**getOrderTransactionCaptureRefundList**](docs/Api/OrderTransactionCaptureRefundApi.md#getordertransactioncapturerefundlist) | **GET** /order-transaction-capture-refund | List with basic information of Order Transaction Capture Refund resources.
*OrderTransactionCaptureRefundApi* | [**updateOrderTransactionCaptureRefund**](docs/Api/OrderTransactionCaptureRefundApi.md#updateordertransactioncapturerefund) | **PATCH** /order-transaction-capture-refund/{id} | Partially update information about a Order Transaction Capture Refund resource.
*OrderTransactionCaptureRefundPositionApi* | [**createOrderTransactionCaptureRefundPosition**](docs/Api/OrderTransactionCaptureRefundPositionApi.md#createordertransactioncapturerefundposition) | **POST** /order-transaction-capture-refund-position | Create a new Order Transaction Capture Refund Position resources.
*OrderTransactionCaptureRefundPositionApi* | [**deleteOrderTransactionCaptureRefundPosition**](docs/Api/OrderTransactionCaptureRefundPositionApi.md#deleteordertransactioncapturerefundposition) | **DELETE** /order-transaction-capture-refund-position/{id} | Delete a Order Transaction Capture Refund Position resource.
*OrderTransactionCaptureRefundPositionApi* | [**getOrderTransactionCaptureRefundPosition**](docs/Api/OrderTransactionCaptureRefundPositionApi.md#getordertransactioncapturerefundposition) | **GET** /order-transaction-capture-refund-position/{id} | Detailed information about a Order Transaction Capture Refund Position resource.
*OrderTransactionCaptureRefundPositionApi* | [**getOrderTransactionCaptureRefundPositionList**](docs/Api/OrderTransactionCaptureRefundPositionApi.md#getordertransactioncapturerefundpositionlist) | **GET** /order-transaction-capture-refund-position | List with basic information of Order Transaction Capture Refund Position resources.
*OrderTransactionCaptureRefundPositionApi* | [**updateOrderTransactionCaptureRefundPosition**](docs/Api/OrderTransactionCaptureRefundPositionApi.md#updateordertransactioncapturerefundposition) | **PATCH** /order-transaction-capture-refund-position/{id} | Partially update information about a Order Transaction Capture Refund Position resource.
*PaymentMethodApi* | [**createPaymentMethod**](docs/Api/PaymentMethodApi.md#createpaymentmethod) | **POST** /payment-method | Create a new Payment Method resources.
*PaymentMethodApi* | [**deletePaymentMethod**](docs/Api/PaymentMethodApi.md#deletepaymentmethod) | **DELETE** /payment-method/{id} | Delete a Payment Method resource.
*PaymentMethodApi* | [**getPaymentMethod**](docs/Api/PaymentMethodApi.md#getpaymentmethod) | **GET** /payment-method/{id} | Detailed information about a Payment Method resource.
*PaymentMethodApi* | [**getPaymentMethodList**](docs/Api/PaymentMethodApi.md#getpaymentmethodlist) | **GET** /payment-method | List with basic information of Payment Method resources.
*PaymentMethodApi* | [**updatePaymentMethod**](docs/Api/PaymentMethodApi.md#updatepaymentmethod) | **PATCH** /payment-method/{id} | Partially update information about a Payment Method resource.
*PluginApi* | [**createPlugin**](docs/Api/PluginApi.md#createplugin) | **POST** /plugin | Create a new Plugin resources.
*PluginApi* | [**deletePlugin**](docs/Api/PluginApi.md#deleteplugin) | **DELETE** /plugin/{id} | Delete a Plugin resource.
*PluginApi* | [**getPlugin**](docs/Api/PluginApi.md#getplugin) | **GET** /plugin/{id} | Detailed information about a Plugin resource.
*PluginApi* | [**getPluginList**](docs/Api/PluginApi.md#getpluginlist) | **GET** /plugin | List with basic information of Plugin resources.
*PluginApi* | [**updatePlugin**](docs/Api/PluginApi.md#updateplugin) | **PATCH** /plugin/{id} | Partially update information about a Plugin resource.
*ProductApi* | [**createProduct**](docs/Api/ProductApi.md#createproduct) | **POST** /product | Create a new Product resources.
*ProductApi* | [**deleteProduct**](docs/Api/ProductApi.md#deleteproduct) | **DELETE** /product/{id} | Delete a Product resource.
*ProductApi* | [**getProduct**](docs/Api/ProductApi.md#getproduct) | **GET** /product/{id} | Detailed information about a Product resource.
*ProductApi* | [**getProductList**](docs/Api/ProductApi.md#getproductlist) | **GET** /product | List with basic information of Product resources.
*ProductApi* | [**updateProduct**](docs/Api/ProductApi.md#updateproduct) | **PATCH** /product/{id} | Partially update information about a Product resource.
*ProductConfiguratorSettingApi* | [**createProductConfiguratorSetting**](docs/Api/ProductConfiguratorSettingApi.md#createproductconfiguratorsetting) | **POST** /product-configurator-setting | Create a new Product Configurator Setting resources.
*ProductConfiguratorSettingApi* | [**deleteProductConfiguratorSetting**](docs/Api/ProductConfiguratorSettingApi.md#deleteproductconfiguratorsetting) | **DELETE** /product-configurator-setting/{id} | Delete a Product Configurator Setting resource.
*ProductConfiguratorSettingApi* | [**getProductConfiguratorSetting**](docs/Api/ProductConfiguratorSettingApi.md#getproductconfiguratorsetting) | **GET** /product-configurator-setting/{id} | Detailed information about a Product Configurator Setting resource.
*ProductConfiguratorSettingApi* | [**getProductConfiguratorSettingList**](docs/Api/ProductConfiguratorSettingApi.md#getproductconfiguratorsettinglist) | **GET** /product-configurator-setting | List with basic information of Product Configurator Setting resources.
*ProductConfiguratorSettingApi* | [**updateProductConfiguratorSetting**](docs/Api/ProductConfiguratorSettingApi.md#updateproductconfiguratorsetting) | **PATCH** /product-configurator-setting/{id} | Partially update information about a Product Configurator Setting resource.
*ProductCrossSellingApi* | [**createProductCrossSelling**](docs/Api/ProductCrossSellingApi.md#createproductcrossselling) | **POST** /product-cross-selling | Create a new Product Cross Selling resources.
*ProductCrossSellingApi* | [**deleteProductCrossSelling**](docs/Api/ProductCrossSellingApi.md#deleteproductcrossselling) | **DELETE** /product-cross-selling/{id} | Delete a Product Cross Selling resource.
*ProductCrossSellingApi* | [**getProductCrossSelling**](docs/Api/ProductCrossSellingApi.md#getproductcrossselling) | **GET** /product-cross-selling/{id} | Detailed information about a Product Cross Selling resource.
*ProductCrossSellingApi* | [**getProductCrossSellingList**](docs/Api/ProductCrossSellingApi.md#getproductcrosssellinglist) | **GET** /product-cross-selling | List with basic information of Product Cross Selling resources.
*ProductCrossSellingApi* | [**updateProductCrossSelling**](docs/Api/ProductCrossSellingApi.md#updateproductcrossselling) | **PATCH** /product-cross-selling/{id} | Partially update information about a Product Cross Selling resource.
*ProductCrossSellingAssignedProductsApi* | [**createProductCrossSellingAssignedProducts**](docs/Api/ProductCrossSellingAssignedProductsApi.md#createproductcrosssellingassignedproducts) | **POST** /product-cross-selling-assigned-products | Create a new Product Cross Selling Assigned Products resources.
*ProductCrossSellingAssignedProductsApi* | [**deleteProductCrossSellingAssignedProducts**](docs/Api/ProductCrossSellingAssignedProductsApi.md#deleteproductcrosssellingassignedproducts) | **DELETE** /product-cross-selling-assigned-products/{id} | Delete a Product Cross Selling Assigned Products resource.
*ProductCrossSellingAssignedProductsApi* | [**getProductCrossSellingAssignedProducts**](docs/Api/ProductCrossSellingAssignedProductsApi.md#getproductcrosssellingassignedproducts) | **GET** /product-cross-selling-assigned-products/{id} | Detailed information about a Product Cross Selling Assigned Products resource.
*ProductCrossSellingAssignedProductsApi* | [**getProductCrossSellingAssignedProductsList**](docs/Api/ProductCrossSellingAssignedProductsApi.md#getproductcrosssellingassignedproductslist) | **GET** /product-cross-selling-assigned-products | List with basic information of Product Cross Selling Assigned Products resources.
*ProductCrossSellingAssignedProductsApi* | [**updateProductCrossSellingAssignedProducts**](docs/Api/ProductCrossSellingAssignedProductsApi.md#updateproductcrosssellingassignedproducts) | **PATCH** /product-cross-selling-assigned-products/{id} | Partially update information about a Product Cross Selling Assigned Products resource.
*ProductDownloadApi* | [**createProductDownload**](docs/Api/ProductDownloadApi.md#createproductdownload) | **POST** /product-download | Create a new Product Download resources.
*ProductDownloadApi* | [**deleteProductDownload**](docs/Api/ProductDownloadApi.md#deleteproductdownload) | **DELETE** /product-download/{id} | Delete a Product Download resource.
*ProductDownloadApi* | [**getProductDownload**](docs/Api/ProductDownloadApi.md#getproductdownload) | **GET** /product-download/{id} | Detailed information about a Product Download resource.
*ProductDownloadApi* | [**getProductDownloadList**](docs/Api/ProductDownloadApi.md#getproductdownloadlist) | **GET** /product-download | List with basic information of Product Download resources.
*ProductDownloadApi* | [**updateProductDownload**](docs/Api/ProductDownloadApi.md#updateproductdownload) | **PATCH** /product-download/{id} | Partially update information about a Product Download resource.
*ProductExportApi* | [**createProductExport**](docs/Api/ProductExportApi.md#createproductexport) | **POST** /product-export | Create a new Product Export resources.
*ProductExportApi* | [**deleteProductExport**](docs/Api/ProductExportApi.md#deleteproductexport) | **DELETE** /product-export/{id} | Delete a Product Export resource.
*ProductExportApi* | [**getProductExport**](docs/Api/ProductExportApi.md#getproductexport) | **GET** /product-export/{id} | Detailed information about a Product Export resource.
*ProductExportApi* | [**getProductExportList**](docs/Api/ProductExportApi.md#getproductexportlist) | **GET** /product-export | List with basic information of Product Export resources.
*ProductExportApi* | [**updateProductExport**](docs/Api/ProductExportApi.md#updateproductexport) | **PATCH** /product-export/{id} | Partially update information about a Product Export resource.
*ProductFeatureSetApi* | [**createProductFeatureSet**](docs/Api/ProductFeatureSetApi.md#createproductfeatureset) | **POST** /product-feature-set | Create a new Product Feature Set resources.
*ProductFeatureSetApi* | [**deleteProductFeatureSet**](docs/Api/ProductFeatureSetApi.md#deleteproductfeatureset) | **DELETE** /product-feature-set/{id} | Delete a Product Feature Set resource.
*ProductFeatureSetApi* | [**getProductFeatureSet**](docs/Api/ProductFeatureSetApi.md#getproductfeatureset) | **GET** /product-feature-set/{id} | Detailed information about a Product Feature Set resource.
*ProductFeatureSetApi* | [**getProductFeatureSetList**](docs/Api/ProductFeatureSetApi.md#getproductfeaturesetlist) | **GET** /product-feature-set | List with basic information of Product Feature Set resources.
*ProductFeatureSetApi* | [**updateProductFeatureSet**](docs/Api/ProductFeatureSetApi.md#updateproductfeatureset) | **PATCH** /product-feature-set/{id} | Partially update information about a Product Feature Set resource.
*ProductKeywordDictionaryApi* | [**createProductKeywordDictionary**](docs/Api/ProductKeywordDictionaryApi.md#createproductkeyworddictionary) | **POST** /product-keyword-dictionary | Create a new Product Keyword Dictionary resources.
*ProductKeywordDictionaryApi* | [**deleteProductKeywordDictionary**](docs/Api/ProductKeywordDictionaryApi.md#deleteproductkeyworddictionary) | **DELETE** /product-keyword-dictionary/{id} | Delete a Product Keyword Dictionary resource.
*ProductKeywordDictionaryApi* | [**getProductKeywordDictionary**](docs/Api/ProductKeywordDictionaryApi.md#getproductkeyworddictionary) | **GET** /product-keyword-dictionary/{id} | Detailed information about a Product Keyword Dictionary resource.
*ProductKeywordDictionaryApi* | [**getProductKeywordDictionaryList**](docs/Api/ProductKeywordDictionaryApi.md#getproductkeyworddictionarylist) | **GET** /product-keyword-dictionary | List with basic information of Product Keyword Dictionary resources.
*ProductKeywordDictionaryApi* | [**updateProductKeywordDictionary**](docs/Api/ProductKeywordDictionaryApi.md#updateproductkeyworddictionary) | **PATCH** /product-keyword-dictionary/{id} | Partially update information about a Product Keyword Dictionary resource.
*ProductManufacturerApi* | [**createProductManufacturer**](docs/Api/ProductManufacturerApi.md#createproductmanufacturer) | **POST** /product-manufacturer | Create a new Product Manufacturer resources.
*ProductManufacturerApi* | [**deleteProductManufacturer**](docs/Api/ProductManufacturerApi.md#deleteproductmanufacturer) | **DELETE** /product-manufacturer/{id} | Delete a Product Manufacturer resource.
*ProductManufacturerApi* | [**getProductManufacturer**](docs/Api/ProductManufacturerApi.md#getproductmanufacturer) | **GET** /product-manufacturer/{id} | Detailed information about a Product Manufacturer resource.
*ProductManufacturerApi* | [**getProductManufacturerList**](docs/Api/ProductManufacturerApi.md#getproductmanufacturerlist) | **GET** /product-manufacturer | List with basic information of Product Manufacturer resources.
*ProductManufacturerApi* | [**updateProductManufacturer**](docs/Api/ProductManufacturerApi.md#updateproductmanufacturer) | **PATCH** /product-manufacturer/{id} | Partially update information about a Product Manufacturer resource.
*ProductMediaApi* | [**createProductMedia**](docs/Api/ProductMediaApi.md#createproductmedia) | **POST** /product-media | Create a new Product Media resources.
*ProductMediaApi* | [**deleteProductMedia**](docs/Api/ProductMediaApi.md#deleteproductmedia) | **DELETE** /product-media/{id} | Delete a Product Media resource.
*ProductMediaApi* | [**getProductMedia**](docs/Api/ProductMediaApi.md#getproductmedia) | **GET** /product-media/{id} | Detailed information about a Product Media resource.
*ProductMediaApi* | [**getProductMediaList**](docs/Api/ProductMediaApi.md#getproductmedialist) | **GET** /product-media | List with basic information of Product Media resources.
*ProductMediaApi* | [**updateProductMedia**](docs/Api/ProductMediaApi.md#updateproductmedia) | **PATCH** /product-media/{id} | Partially update information about a Product Media resource.
*ProductPriceApi* | [**createProductPrice**](docs/Api/ProductPriceApi.md#createproductprice) | **POST** /product-price | Create a new Product Price resources.
*ProductPriceApi* | [**deleteProductPrice**](docs/Api/ProductPriceApi.md#deleteproductprice) | **DELETE** /product-price/{id} | Delete a Product Price resource.
*ProductPriceApi* | [**getProductPrice**](docs/Api/ProductPriceApi.md#getproductprice) | **GET** /product-price/{id} | Detailed information about a Product Price resource.
*ProductPriceApi* | [**getProductPriceList**](docs/Api/ProductPriceApi.md#getproductpricelist) | **GET** /product-price | List with basic information of Product Price resources.
*ProductPriceApi* | [**updateProductPrice**](docs/Api/ProductPriceApi.md#updateproductprice) | **PATCH** /product-price/{id} | Partially update information about a Product Price resource.
*ProductReviewApi* | [**createProductReview**](docs/Api/ProductReviewApi.md#createproductreview) | **POST** /product-review | Create a new Product Review resources.
*ProductReviewApi* | [**deleteProductReview**](docs/Api/ProductReviewApi.md#deleteproductreview) | **DELETE** /product-review/{id} | Delete a Product Review resource.
*ProductReviewApi* | [**getProductReview**](docs/Api/ProductReviewApi.md#getproductreview) | **GET** /product-review/{id} | Detailed information about a Product Review resource.
*ProductReviewApi* | [**getProductReviewList**](docs/Api/ProductReviewApi.md#getproductreviewlist) | **GET** /product-review | List with basic information of Product Review resources.
*ProductReviewApi* | [**updateProductReview**](docs/Api/ProductReviewApi.md#updateproductreview) | **PATCH** /product-review/{id} | Partially update information about a Product Review resource.
*ProductSearchConfigApi* | [**createProductSearchConfig**](docs/Api/ProductSearchConfigApi.md#createproductsearchconfig) | **POST** /product-search-config | Create a new Product Search Config resources.
*ProductSearchConfigApi* | [**deleteProductSearchConfig**](docs/Api/ProductSearchConfigApi.md#deleteproductsearchconfig) | **DELETE** /product-search-config/{id} | Delete a Product Search Config resource.
*ProductSearchConfigApi* | [**getProductSearchConfig**](docs/Api/ProductSearchConfigApi.md#getproductsearchconfig) | **GET** /product-search-config/{id} | Detailed information about a Product Search Config resource.
*ProductSearchConfigApi* | [**getProductSearchConfigList**](docs/Api/ProductSearchConfigApi.md#getproductsearchconfiglist) | **GET** /product-search-config | List with basic information of Product Search Config resources.
*ProductSearchConfigApi* | [**updateProductSearchConfig**](docs/Api/ProductSearchConfigApi.md#updateproductsearchconfig) | **PATCH** /product-search-config/{id} | Partially update information about a Product Search Config resource.
*ProductSearchConfigFieldApi* | [**createProductSearchConfigField**](docs/Api/ProductSearchConfigFieldApi.md#createproductsearchconfigfield) | **POST** /product-search-config-field | Create a new Product Search Config Field resources.
*ProductSearchConfigFieldApi* | [**deleteProductSearchConfigField**](docs/Api/ProductSearchConfigFieldApi.md#deleteproductsearchconfigfield) | **DELETE** /product-search-config-field/{id} | Delete a Product Search Config Field resource.
*ProductSearchConfigFieldApi* | [**getProductSearchConfigField**](docs/Api/ProductSearchConfigFieldApi.md#getproductsearchconfigfield) | **GET** /product-search-config-field/{id} | Detailed information about a Product Search Config Field resource.
*ProductSearchConfigFieldApi* | [**getProductSearchConfigFieldList**](docs/Api/ProductSearchConfigFieldApi.md#getproductsearchconfigfieldlist) | **GET** /product-search-config-field | List with basic information of Product Search Config Field resources.
*ProductSearchConfigFieldApi* | [**updateProductSearchConfigField**](docs/Api/ProductSearchConfigFieldApi.md#updateproductsearchconfigfield) | **PATCH** /product-search-config-field/{id} | Partially update information about a Product Search Config Field resource.
*ProductSearchKeywordApi* | [**createProductSearchKeyword**](docs/Api/ProductSearchKeywordApi.md#createproductsearchkeyword) | **POST** /product-search-keyword | Create a new Product Search Keyword resources.
*ProductSearchKeywordApi* | [**deleteProductSearchKeyword**](docs/Api/ProductSearchKeywordApi.md#deleteproductsearchkeyword) | **DELETE** /product-search-keyword/{id} | Delete a Product Search Keyword resource.
*ProductSearchKeywordApi* | [**getProductSearchKeyword**](docs/Api/ProductSearchKeywordApi.md#getproductsearchkeyword) | **GET** /product-search-keyword/{id} | Detailed information about a Product Search Keyword resource.
*ProductSearchKeywordApi* | [**getProductSearchKeywordList**](docs/Api/ProductSearchKeywordApi.md#getproductsearchkeywordlist) | **GET** /product-search-keyword | List with basic information of Product Search Keyword resources.
*ProductSearchKeywordApi* | [**updateProductSearchKeyword**](docs/Api/ProductSearchKeywordApi.md#updateproductsearchkeyword) | **PATCH** /product-search-keyword/{id} | Partially update information about a Product Search Keyword resource.
*ProductSortingApi* | [**createProductSorting**](docs/Api/ProductSortingApi.md#createproductsorting) | **POST** /product-sorting | Create a new Product Sorting resources.
*ProductSortingApi* | [**deleteProductSorting**](docs/Api/ProductSortingApi.md#deleteproductsorting) | **DELETE** /product-sorting/{id} | Delete a Product Sorting resource.
*ProductSortingApi* | [**getProductSorting**](docs/Api/ProductSortingApi.md#getproductsorting) | **GET** /product-sorting/{id} | Detailed information about a Product Sorting resource.
*ProductSortingApi* | [**getProductSortingList**](docs/Api/ProductSortingApi.md#getproductsortinglist) | **GET** /product-sorting | List with basic information of Product Sorting resources.
*ProductSortingApi* | [**updateProductSorting**](docs/Api/ProductSortingApi.md#updateproductsorting) | **PATCH** /product-sorting/{id} | Partially update information about a Product Sorting resource.
*ProductStreamApi* | [**createProductStream**](docs/Api/ProductStreamApi.md#createproductstream) | **POST** /product-stream | Create a new Product Stream resources.
*ProductStreamApi* | [**deleteProductStream**](docs/Api/ProductStreamApi.md#deleteproductstream) | **DELETE** /product-stream/{id} | Delete a Product Stream resource.
*ProductStreamApi* | [**getProductStream**](docs/Api/ProductStreamApi.md#getproductstream) | **GET** /product-stream/{id} | Detailed information about a Product Stream resource.
*ProductStreamApi* | [**getProductStreamList**](docs/Api/ProductStreamApi.md#getproductstreamlist) | **GET** /product-stream | List with basic information of Product Stream resources.
*ProductStreamApi* | [**updateProductStream**](docs/Api/ProductStreamApi.md#updateproductstream) | **PATCH** /product-stream/{id} | Partially update information about a Product Stream resource.
*ProductStreamFilterApi* | [**createProductStreamFilter**](docs/Api/ProductStreamFilterApi.md#createproductstreamfilter) | **POST** /product-stream-filter | Create a new Product Stream Filter resources.
*ProductStreamFilterApi* | [**deleteProductStreamFilter**](docs/Api/ProductStreamFilterApi.md#deleteproductstreamfilter) | **DELETE** /product-stream-filter/{id} | Delete a Product Stream Filter resource.
*ProductStreamFilterApi* | [**getProductStreamFilter**](docs/Api/ProductStreamFilterApi.md#getproductstreamfilter) | **GET** /product-stream-filter/{id} | Detailed information about a Product Stream Filter resource.
*ProductStreamFilterApi* | [**getProductStreamFilterList**](docs/Api/ProductStreamFilterApi.md#getproductstreamfilterlist) | **GET** /product-stream-filter | List with basic information of Product Stream Filter resources.
*ProductStreamFilterApi* | [**updateProductStreamFilter**](docs/Api/ProductStreamFilterApi.md#updateproductstreamfilter) | **PATCH** /product-stream-filter/{id} | Partially update information about a Product Stream Filter resource.
*ProductVisibilityApi* | [**createProductVisibility**](docs/Api/ProductVisibilityApi.md#createproductvisibility) | **POST** /product-visibility | Create a new Product Visibility resources.
*ProductVisibilityApi* | [**deleteProductVisibility**](docs/Api/ProductVisibilityApi.md#deleteproductvisibility) | **DELETE** /product-visibility/{id} | Delete a Product Visibility resource.
*ProductVisibilityApi* | [**getProductVisibility**](docs/Api/ProductVisibilityApi.md#getproductvisibility) | **GET** /product-visibility/{id} | Detailed information about a Product Visibility resource.
*ProductVisibilityApi* | [**getProductVisibilityList**](docs/Api/ProductVisibilityApi.md#getproductvisibilitylist) | **GET** /product-visibility | List with basic information of Product Visibility resources.
*ProductVisibilityApi* | [**updateProductVisibility**](docs/Api/ProductVisibilityApi.md#updateproductvisibility) | **PATCH** /product-visibility/{id} | Partially update information about a Product Visibility resource.
*PromotionApi* | [**createPromotion**](docs/Api/PromotionApi.md#createpromotion) | **POST** /promotion | Create a new Promotion resources.
*PromotionApi* | [**deletePromotion**](docs/Api/PromotionApi.md#deletepromotion) | **DELETE** /promotion/{id} | Delete a Promotion resource.
*PromotionApi* | [**getPromotion**](docs/Api/PromotionApi.md#getpromotion) | **GET** /promotion/{id} | Detailed information about a Promotion resource.
*PromotionApi* | [**getPromotionList**](docs/Api/PromotionApi.md#getpromotionlist) | **GET** /promotion | List with basic information of Promotion resources.
*PromotionApi* | [**updatePromotion**](docs/Api/PromotionApi.md#updatepromotion) | **PATCH** /promotion/{id} | Partially update information about a Promotion resource.
*PromotionDiscountApi* | [**createPromotionDiscount**](docs/Api/PromotionDiscountApi.md#createpromotiondiscount) | **POST** /promotion-discount | Create a new Promotion Discount resources.
*PromotionDiscountApi* | [**deletePromotionDiscount**](docs/Api/PromotionDiscountApi.md#deletepromotiondiscount) | **DELETE** /promotion-discount/{id} | Delete a Promotion Discount resource.
*PromotionDiscountApi* | [**getPromotionDiscount**](docs/Api/PromotionDiscountApi.md#getpromotiondiscount) | **GET** /promotion-discount/{id} | Detailed information about a Promotion Discount resource.
*PromotionDiscountApi* | [**getPromotionDiscountList**](docs/Api/PromotionDiscountApi.md#getpromotiondiscountlist) | **GET** /promotion-discount | List with basic information of Promotion Discount resources.
*PromotionDiscountApi* | [**updatePromotionDiscount**](docs/Api/PromotionDiscountApi.md#updatepromotiondiscount) | **PATCH** /promotion-discount/{id} | Partially update information about a Promotion Discount resource.
*PromotionDiscountPricesApi* | [**createPromotionDiscountPrices**](docs/Api/PromotionDiscountPricesApi.md#createpromotiondiscountprices) | **POST** /promotion-discount-prices | Create a new Promotion Discount Prices resources.
*PromotionDiscountPricesApi* | [**deletePromotionDiscountPrices**](docs/Api/PromotionDiscountPricesApi.md#deletepromotiondiscountprices) | **DELETE** /promotion-discount-prices/{id} | Delete a Promotion Discount Prices resource.
*PromotionDiscountPricesApi* | [**getPromotionDiscountPrices**](docs/Api/PromotionDiscountPricesApi.md#getpromotiondiscountprices) | **GET** /promotion-discount-prices/{id} | Detailed information about a Promotion Discount Prices resource.
*PromotionDiscountPricesApi* | [**getPromotionDiscountPricesList**](docs/Api/PromotionDiscountPricesApi.md#getpromotiondiscountpriceslist) | **GET** /promotion-discount-prices | List with basic information of Promotion Discount Prices resources.
*PromotionDiscountPricesApi* | [**updatePromotionDiscountPrices**](docs/Api/PromotionDiscountPricesApi.md#updatepromotiondiscountprices) | **PATCH** /promotion-discount-prices/{id} | Partially update information about a Promotion Discount Prices resource.
*PromotionIndividualCodeApi* | [**createPromotionIndividualCode**](docs/Api/PromotionIndividualCodeApi.md#createpromotionindividualcode) | **POST** /promotion-individual-code | Create a new Promotion Individual Code resources.
*PromotionIndividualCodeApi* | [**deletePromotionIndividualCode**](docs/Api/PromotionIndividualCodeApi.md#deletepromotionindividualcode) | **DELETE** /promotion-individual-code/{id} | Delete a Promotion Individual Code resource.
*PromotionIndividualCodeApi* | [**getPromotionIndividualCode**](docs/Api/PromotionIndividualCodeApi.md#getpromotionindividualcode) | **GET** /promotion-individual-code/{id} | Detailed information about a Promotion Individual Code resource.
*PromotionIndividualCodeApi* | [**getPromotionIndividualCodeList**](docs/Api/PromotionIndividualCodeApi.md#getpromotionindividualcodelist) | **GET** /promotion-individual-code | List with basic information of Promotion Individual Code resources.
*PromotionIndividualCodeApi* | [**updatePromotionIndividualCode**](docs/Api/PromotionIndividualCodeApi.md#updatepromotionindividualcode) | **PATCH** /promotion-individual-code/{id} | Partially update information about a Promotion Individual Code resource.
*PromotionSalesChannelApi* | [**createPromotionSalesChannel**](docs/Api/PromotionSalesChannelApi.md#createpromotionsaleschannel) | **POST** /promotion-sales-channel | Create a new Promotion Sales Channel resources.
*PromotionSalesChannelApi* | [**deletePromotionSalesChannel**](docs/Api/PromotionSalesChannelApi.md#deletepromotionsaleschannel) | **DELETE** /promotion-sales-channel/{id} | Delete a Promotion Sales Channel resource.
*PromotionSalesChannelApi* | [**getPromotionSalesChannel**](docs/Api/PromotionSalesChannelApi.md#getpromotionsaleschannel) | **GET** /promotion-sales-channel/{id} | Detailed information about a Promotion Sales Channel resource.
*PromotionSalesChannelApi* | [**getPromotionSalesChannelList**](docs/Api/PromotionSalesChannelApi.md#getpromotionsaleschannellist) | **GET** /promotion-sales-channel | List with basic information of Promotion Sales Channel resources.
*PromotionSalesChannelApi* | [**updatePromotionSalesChannel**](docs/Api/PromotionSalesChannelApi.md#updatepromotionsaleschannel) | **PATCH** /promotion-sales-channel/{id} | Partially update information about a Promotion Sales Channel resource.
*PromotionSetgroupApi* | [**createPromotionSetgroup**](docs/Api/PromotionSetgroupApi.md#createpromotionsetgroup) | **POST** /promotion-setgroup | Create a new Promotion Setgroup resources.
*PromotionSetgroupApi* | [**deletePromotionSetgroup**](docs/Api/PromotionSetgroupApi.md#deletepromotionsetgroup) | **DELETE** /promotion-setgroup/{id} | Delete a Promotion Setgroup resource.
*PromotionSetgroupApi* | [**getPromotionSetgroup**](docs/Api/PromotionSetgroupApi.md#getpromotionsetgroup) | **GET** /promotion-setgroup/{id} | Detailed information about a Promotion Setgroup resource.
*PromotionSetgroupApi* | [**getPromotionSetgroupList**](docs/Api/PromotionSetgroupApi.md#getpromotionsetgrouplist) | **GET** /promotion-setgroup | List with basic information of Promotion Setgroup resources.
*PromotionSetgroupApi* | [**updatePromotionSetgroup**](docs/Api/PromotionSetgroupApi.md#updatepromotionsetgroup) | **PATCH** /promotion-setgroup/{id} | Partially update information about a Promotion Setgroup resource.
*PropertyGroupApi* | [**createPropertyGroup**](docs/Api/PropertyGroupApi.md#createpropertygroup) | **POST** /property-group | Create a new Property Group resources.
*PropertyGroupApi* | [**deletePropertyGroup**](docs/Api/PropertyGroupApi.md#deletepropertygroup) | **DELETE** /property-group/{id} | Delete a Property Group resource.
*PropertyGroupApi* | [**getPropertyGroup**](docs/Api/PropertyGroupApi.md#getpropertygroup) | **GET** /property-group/{id} | Detailed information about a Property Group resource.
*PropertyGroupApi* | [**getPropertyGroupList**](docs/Api/PropertyGroupApi.md#getpropertygrouplist) | **GET** /property-group | List with basic information of Property Group resources.
*PropertyGroupApi* | [**updatePropertyGroup**](docs/Api/PropertyGroupApi.md#updatepropertygroup) | **PATCH** /property-group/{id} | Partially update information about a Property Group resource.
*PropertyGroupOptionApi* | [**createPropertyGroupOption**](docs/Api/PropertyGroupOptionApi.md#createpropertygroupoption) | **POST** /property-group-option | Create a new Property Group Option resources.
*PropertyGroupOptionApi* | [**deletePropertyGroupOption**](docs/Api/PropertyGroupOptionApi.md#deletepropertygroupoption) | **DELETE** /property-group-option/{id} | Delete a Property Group Option resource.
*PropertyGroupOptionApi* | [**getPropertyGroupOption**](docs/Api/PropertyGroupOptionApi.md#getpropertygroupoption) | **GET** /property-group-option/{id} | Detailed information about a Property Group Option resource.
*PropertyGroupOptionApi* | [**getPropertyGroupOptionList**](docs/Api/PropertyGroupOptionApi.md#getpropertygroupoptionlist) | **GET** /property-group-option | List with basic information of Property Group Option resources.
*PropertyGroupOptionApi* | [**updatePropertyGroupOption**](docs/Api/PropertyGroupOptionApi.md#updatepropertygroupoption) | **PATCH** /property-group-option/{id} | Partially update information about a Property Group Option resource.
*RuleApi* | [**createRule**](docs/Api/RuleApi.md#createrule) | **POST** /rule | Create a new Rule resources.
*RuleApi* | [**deleteRule**](docs/Api/RuleApi.md#deleterule) | **DELETE** /rule/{id} | Delete a Rule resource.
*RuleApi* | [**getRule**](docs/Api/RuleApi.md#getrule) | **GET** /rule/{id} | Detailed information about a Rule resource.
*RuleApi* | [**getRuleList**](docs/Api/RuleApi.md#getrulelist) | **GET** /rule | List with basic information of Rule resources.
*RuleApi* | [**updateRule**](docs/Api/RuleApi.md#updaterule) | **PATCH** /rule/{id} | Partially update information about a Rule resource.
*RuleConditionApi* | [**createRuleCondition**](docs/Api/RuleConditionApi.md#createrulecondition) | **POST** /rule-condition | Create a new Rule Condition resources.
*RuleConditionApi* | [**deleteRuleCondition**](docs/Api/RuleConditionApi.md#deleterulecondition) | **DELETE** /rule-condition/{id} | Delete a Rule Condition resource.
*RuleConditionApi* | [**getRuleCondition**](docs/Api/RuleConditionApi.md#getrulecondition) | **GET** /rule-condition/{id} | Detailed information about a Rule Condition resource.
*RuleConditionApi* | [**getRuleConditionList**](docs/Api/RuleConditionApi.md#getruleconditionlist) | **GET** /rule-condition | List with basic information of Rule Condition resources.
*RuleConditionApi* | [**updateRuleCondition**](docs/Api/RuleConditionApi.md#updaterulecondition) | **PATCH** /rule-condition/{id} | Partially update information about a Rule Condition resource.
*SalesChannelApi* | [**createSalesChannel**](docs/Api/SalesChannelApi.md#createsaleschannel) | **POST** /sales-channel | Create a new Sales Channel resources.
*SalesChannelApi* | [**deleteSalesChannel**](docs/Api/SalesChannelApi.md#deletesaleschannel) | **DELETE** /sales-channel/{id} | Delete a Sales Channel resource.
*SalesChannelApi* | [**getSalesChannel**](docs/Api/SalesChannelApi.md#getsaleschannel) | **GET** /sales-channel/{id} | Detailed information about a Sales Channel resource.
*SalesChannelApi* | [**getSalesChannelList**](docs/Api/SalesChannelApi.md#getsaleschannellist) | **GET** /sales-channel | List with basic information of Sales Channel resources.
*SalesChannelApi* | [**updateSalesChannel**](docs/Api/SalesChannelApi.md#updatesaleschannel) | **PATCH** /sales-channel/{id} | Partially update information about a Sales Channel resource.
*SalesChannelAnalyticsApi* | [**createSalesChannelAnalytics**](docs/Api/SalesChannelAnalyticsApi.md#createsaleschannelanalytics) | **POST** /sales-channel-analytics | Create a new Sales Channel Analytics resources.
*SalesChannelAnalyticsApi* | [**deleteSalesChannelAnalytics**](docs/Api/SalesChannelAnalyticsApi.md#deletesaleschannelanalytics) | **DELETE** /sales-channel-analytics/{id} | Delete a Sales Channel Analytics resource.
*SalesChannelAnalyticsApi* | [**getSalesChannelAnalytics**](docs/Api/SalesChannelAnalyticsApi.md#getsaleschannelanalytics) | **GET** /sales-channel-analytics/{id} | Detailed information about a Sales Channel Analytics resource.
*SalesChannelAnalyticsApi* | [**getSalesChannelAnalyticsList**](docs/Api/SalesChannelAnalyticsApi.md#getsaleschannelanalyticslist) | **GET** /sales-channel-analytics | List with basic information of Sales Channel Analytics resources.
*SalesChannelAnalyticsApi* | [**updateSalesChannelAnalytics**](docs/Api/SalesChannelAnalyticsApi.md#updatesaleschannelanalytics) | **PATCH** /sales-channel-analytics/{id} | Partially update information about a Sales Channel Analytics resource.
*SalesChannelDomainApi* | [**createSalesChannelDomain**](docs/Api/SalesChannelDomainApi.md#createsaleschanneldomain) | **POST** /sales-channel-domain | Create a new Sales Channel Domain resources.
*SalesChannelDomainApi* | [**deleteSalesChannelDomain**](docs/Api/SalesChannelDomainApi.md#deletesaleschanneldomain) | **DELETE** /sales-channel-domain/{id} | Delete a Sales Channel Domain resource.
*SalesChannelDomainApi* | [**getSalesChannelDomain**](docs/Api/SalesChannelDomainApi.md#getsaleschanneldomain) | **GET** /sales-channel-domain/{id} | Detailed information about a Sales Channel Domain resource.
*SalesChannelDomainApi* | [**getSalesChannelDomainList**](docs/Api/SalesChannelDomainApi.md#getsaleschanneldomainlist) | **GET** /sales-channel-domain | List with basic information of Sales Channel Domain resources.
*SalesChannelDomainApi* | [**updateSalesChannelDomain**](docs/Api/SalesChannelDomainApi.md#updatesaleschanneldomain) | **PATCH** /sales-channel-domain/{id} | Partially update information about a Sales Channel Domain resource.
*SalesChannelTypeApi* | [**createSalesChannelType**](docs/Api/SalesChannelTypeApi.md#createsaleschanneltype) | **POST** /sales-channel-type | Create a new Sales Channel Type resources.
*SalesChannelTypeApi* | [**deleteSalesChannelType**](docs/Api/SalesChannelTypeApi.md#deletesaleschanneltype) | **DELETE** /sales-channel-type/{id} | Delete a Sales Channel Type resource.
*SalesChannelTypeApi* | [**getSalesChannelType**](docs/Api/SalesChannelTypeApi.md#getsaleschanneltype) | **GET** /sales-channel-type/{id} | Detailed information about a Sales Channel Type resource.
*SalesChannelTypeApi* | [**getSalesChannelTypeList**](docs/Api/SalesChannelTypeApi.md#getsaleschanneltypelist) | **GET** /sales-channel-type | List with basic information of Sales Channel Type resources.
*SalesChannelTypeApi* | [**updateSalesChannelType**](docs/Api/SalesChannelTypeApi.md#updatesaleschanneltype) | **PATCH** /sales-channel-type/{id} | Partially update information about a Sales Channel Type resource.
*SalutationApi* | [**createSalutation**](docs/Api/SalutationApi.md#createsalutation) | **POST** /salutation | Create a new Salutation resources.
*SalutationApi* | [**deleteSalutation**](docs/Api/SalutationApi.md#deletesalutation) | **DELETE** /salutation/{id} | Delete a Salutation resource.
*SalutationApi* | [**getSalutation**](docs/Api/SalutationApi.md#getsalutation) | **GET** /salutation/{id} | Detailed information about a Salutation resource.
*SalutationApi* | [**getSalutationList**](docs/Api/SalutationApi.md#getsalutationlist) | **GET** /salutation | List with basic information of Salutation resources.
*SalutationApi* | [**updateSalutation**](docs/Api/SalutationApi.md#updatesalutation) | **PATCH** /salutation/{id} | Partially update information about a Salutation resource.
*ScheduledTaskApi* | [**createScheduledTask**](docs/Api/ScheduledTaskApi.md#createscheduledtask) | **POST** /scheduled-task | Create a new Scheduled Task resources.
*ScheduledTaskApi* | [**deleteScheduledTask**](docs/Api/ScheduledTaskApi.md#deletescheduledtask) | **DELETE** /scheduled-task/{id} | Delete a Scheduled Task resource.
*ScheduledTaskApi* | [**getScheduledTask**](docs/Api/ScheduledTaskApi.md#getscheduledtask) | **GET** /scheduled-task/{id} | Detailed information about a Scheduled Task resource.
*ScheduledTaskApi* | [**getScheduledTaskList**](docs/Api/ScheduledTaskApi.md#getscheduledtasklist) | **GET** /scheduled-task | List with basic information of Scheduled Task resources.
*ScheduledTaskApi* | [**updateScheduledTask**](docs/Api/ScheduledTaskApi.md#updatescheduledtask) | **PATCH** /scheduled-task/{id} | Partially update information about a Scheduled Task resource.
*ScriptApi* | [**createScript**](docs/Api/ScriptApi.md#createscript) | **POST** /script | Create a new Script resources.
*ScriptApi* | [**deleteScript**](docs/Api/ScriptApi.md#deletescript) | **DELETE** /script/{id} | Delete a Script resource.
*ScriptApi* | [**getScript**](docs/Api/ScriptApi.md#getscript) | **GET** /script/{id} | Detailed information about a Script resource.
*ScriptApi* | [**getScriptList**](docs/Api/ScriptApi.md#getscriptlist) | **GET** /script | List with basic information of Script resources.
*ScriptApi* | [**updateScript**](docs/Api/ScriptApi.md#updatescript) | **PATCH** /script/{id} | Partially update information about a Script resource.
*SeoUrlApi* | [**createSeoUrl**](docs/Api/SeoUrlApi.md#createseourl) | **POST** /seo-url | Create a new Seo Url resources.
*SeoUrlApi* | [**deleteSeoUrl**](docs/Api/SeoUrlApi.md#deleteseourl) | **DELETE** /seo-url/{id} | Delete a Seo Url resource.
*SeoUrlApi* | [**getSeoUrl**](docs/Api/SeoUrlApi.md#getseourl) | **GET** /seo-url/{id} | Detailed information about a Seo Url resource.
*SeoUrlApi* | [**getSeoUrlList**](docs/Api/SeoUrlApi.md#getseourllist) | **GET** /seo-url | List with basic information of Seo Url resources.
*SeoUrlApi* | [**updateSeoUrl**](docs/Api/SeoUrlApi.md#updateseourl) | **PATCH** /seo-url/{id} | Partially update information about a Seo Url resource.
*SeoUrlTemplateApi* | [**createSeoUrlTemplate**](docs/Api/SeoUrlTemplateApi.md#createseourltemplate) | **POST** /seo-url-template | Create a new Seo Url Template resources.
*SeoUrlTemplateApi* | [**deleteSeoUrlTemplate**](docs/Api/SeoUrlTemplateApi.md#deleteseourltemplate) | **DELETE** /seo-url-template/{id} | Delete a Seo Url Template resource.
*SeoUrlTemplateApi* | [**getSeoUrlTemplate**](docs/Api/SeoUrlTemplateApi.md#getseourltemplate) | **GET** /seo-url-template/{id} | Detailed information about a Seo Url Template resource.
*SeoUrlTemplateApi* | [**getSeoUrlTemplateList**](docs/Api/SeoUrlTemplateApi.md#getseourltemplatelist) | **GET** /seo-url-template | List with basic information of Seo Url Template resources.
*SeoUrlTemplateApi* | [**updateSeoUrlTemplate**](docs/Api/SeoUrlTemplateApi.md#updateseourltemplate) | **PATCH** /seo-url-template/{id} | Partially update information about a Seo Url Template resource.
*ShippingMethodApi* | [**createShippingMethod**](docs/Api/ShippingMethodApi.md#createshippingmethod) | **POST** /shipping-method | Create a new Shipping Method resources.
*ShippingMethodApi* | [**deleteShippingMethod**](docs/Api/ShippingMethodApi.md#deleteshippingmethod) | **DELETE** /shipping-method/{id} | Delete a Shipping Method resource.
*ShippingMethodApi* | [**getShippingMethod**](docs/Api/ShippingMethodApi.md#getshippingmethod) | **GET** /shipping-method/{id} | Detailed information about a Shipping Method resource.
*ShippingMethodApi* | [**getShippingMethodList**](docs/Api/ShippingMethodApi.md#getshippingmethodlist) | **GET** /shipping-method | List with basic information of Shipping Method resources.
*ShippingMethodApi* | [**updateShippingMethod**](docs/Api/ShippingMethodApi.md#updateshippingmethod) | **PATCH** /shipping-method/{id} | Partially update information about a Shipping Method resource.
*ShippingMethodPriceApi* | [**createShippingMethodPrice**](docs/Api/ShippingMethodPriceApi.md#createshippingmethodprice) | **POST** /shipping-method-price | Create a new Shipping Method Price resources.
*ShippingMethodPriceApi* | [**deleteShippingMethodPrice**](docs/Api/ShippingMethodPriceApi.md#deleteshippingmethodprice) | **DELETE** /shipping-method-price/{id} | Delete a Shipping Method Price resource.
*ShippingMethodPriceApi* | [**getShippingMethodPrice**](docs/Api/ShippingMethodPriceApi.md#getshippingmethodprice) | **GET** /shipping-method-price/{id} | Detailed information about a Shipping Method Price resource.
*ShippingMethodPriceApi* | [**getShippingMethodPriceList**](docs/Api/ShippingMethodPriceApi.md#getshippingmethodpricelist) | **GET** /shipping-method-price | List with basic information of Shipping Method Price resources.
*ShippingMethodPriceApi* | [**updateShippingMethodPrice**](docs/Api/ShippingMethodPriceApi.md#updateshippingmethodprice) | **PATCH** /shipping-method-price/{id} | Partially update information about a Shipping Method Price resource.
*SnippetApi* | [**createSnippet**](docs/Api/SnippetApi.md#createsnippet) | **POST** /snippet | Create a new Snippet resources.
*SnippetApi* | [**deleteSnippet**](docs/Api/SnippetApi.md#deletesnippet) | **DELETE** /snippet/{id} | Delete a Snippet resource.
*SnippetApi* | [**getSnippet**](docs/Api/SnippetApi.md#getsnippet) | **GET** /snippet/{id} | Detailed information about a Snippet resource.
*SnippetApi* | [**getSnippetList**](docs/Api/SnippetApi.md#getsnippetlist) | **GET** /snippet | List with basic information of Snippet resources.
*SnippetApi* | [**updateSnippet**](docs/Api/SnippetApi.md#updatesnippet) | **PATCH** /snippet/{id} | Partially update information about a Snippet resource.
*SnippetSetApi* | [**createSnippetSet**](docs/Api/SnippetSetApi.md#createsnippetset) | **POST** /snippet-set | Create a new Snippet Set resources.
*SnippetSetApi* | [**deleteSnippetSet**](docs/Api/SnippetSetApi.md#deletesnippetset) | **DELETE** /snippet-set/{id} | Delete a Snippet Set resource.
*SnippetSetApi* | [**getSnippetSet**](docs/Api/SnippetSetApi.md#getsnippetset) | **GET** /snippet-set/{id} | Detailed information about a Snippet Set resource.
*SnippetSetApi* | [**getSnippetSetList**](docs/Api/SnippetSetApi.md#getsnippetsetlist) | **GET** /snippet-set | List with basic information of Snippet Set resources.
*SnippetSetApi* | [**updateSnippetSet**](docs/Api/SnippetSetApi.md#updatesnippetset) | **PATCH** /snippet-set/{id} | Partially update information about a Snippet Set resource.
*StateMachineApi* | [**createStateMachine**](docs/Api/StateMachineApi.md#createstatemachine) | **POST** /state-machine | Create a new State Machine resources.
*StateMachineApi* | [**deleteStateMachine**](docs/Api/StateMachineApi.md#deletestatemachine) | **DELETE** /state-machine/{id} | Delete a State Machine resource.
*StateMachineApi* | [**getStateMachine**](docs/Api/StateMachineApi.md#getstatemachine) | **GET** /state-machine/{id} | Detailed information about a State Machine resource.
*StateMachineApi* | [**getStateMachineList**](docs/Api/StateMachineApi.md#getstatemachinelist) | **GET** /state-machine | List with basic information of State Machine resources.
*StateMachineApi* | [**updateStateMachine**](docs/Api/StateMachineApi.md#updatestatemachine) | **PATCH** /state-machine/{id} | Partially update information about a State Machine resource.
*StateMachineHistoryApi* | [**createStateMachineHistory**](docs/Api/StateMachineHistoryApi.md#createstatemachinehistory) | **POST** /state-machine-history | Create a new State Machine History resources.
*StateMachineHistoryApi* | [**deleteStateMachineHistory**](docs/Api/StateMachineHistoryApi.md#deletestatemachinehistory) | **DELETE** /state-machine-history/{id} | Delete a State Machine History resource.
*StateMachineHistoryApi* | [**getStateMachineHistory**](docs/Api/StateMachineHistoryApi.md#getstatemachinehistory) | **GET** /state-machine-history/{id} | Detailed information about a State Machine History resource.
*StateMachineHistoryApi* | [**getStateMachineHistoryList**](docs/Api/StateMachineHistoryApi.md#getstatemachinehistorylist) | **GET** /state-machine-history | List with basic information of State Machine History resources.
*StateMachineHistoryApi* | [**updateStateMachineHistory**](docs/Api/StateMachineHistoryApi.md#updatestatemachinehistory) | **PATCH** /state-machine-history/{id} | Partially update information about a State Machine History resource.
*StateMachineStateApi* | [**createStateMachineState**](docs/Api/StateMachineStateApi.md#createstatemachinestate) | **POST** /state-machine-state | Create a new State Machine State resources.
*StateMachineStateApi* | [**deleteStateMachineState**](docs/Api/StateMachineStateApi.md#deletestatemachinestate) | **DELETE** /state-machine-state/{id} | Delete a State Machine State resource.
*StateMachineStateApi* | [**getStateMachineState**](docs/Api/StateMachineStateApi.md#getstatemachinestate) | **GET** /state-machine-state/{id} | Detailed information about a State Machine State resource.
*StateMachineStateApi* | [**getStateMachineStateList**](docs/Api/StateMachineStateApi.md#getstatemachinestatelist) | **GET** /state-machine-state | List with basic information of State Machine State resources.
*StateMachineStateApi* | [**updateStateMachineState**](docs/Api/StateMachineStateApi.md#updatestatemachinestate) | **PATCH** /state-machine-state/{id} | Partially update information about a State Machine State resource.
*StateMachineTransitionApi* | [**createStateMachineTransition**](docs/Api/StateMachineTransitionApi.md#createstatemachinetransition) | **POST** /state-machine-transition | Create a new State Machine Transition resources.
*StateMachineTransitionApi* | [**deleteStateMachineTransition**](docs/Api/StateMachineTransitionApi.md#deletestatemachinetransition) | **DELETE** /state-machine-transition/{id} | Delete a State Machine Transition resource.
*StateMachineTransitionApi* | [**getStateMachineTransition**](docs/Api/StateMachineTransitionApi.md#getstatemachinetransition) | **GET** /state-machine-transition/{id} | Detailed information about a State Machine Transition resource.
*StateMachineTransitionApi* | [**getStateMachineTransitionList**](docs/Api/StateMachineTransitionApi.md#getstatemachinetransitionlist) | **GET** /state-machine-transition | List with basic information of State Machine Transition resources.
*StateMachineTransitionApi* | [**updateStateMachineTransition**](docs/Api/StateMachineTransitionApi.md#updatestatemachinetransition) | **PATCH** /state-machine-transition/{id} | Partially update information about a State Machine Transition resource.
*SystemConfigApi* | [**createSystemConfig**](docs/Api/SystemConfigApi.md#createsystemconfig) | **POST** /system-config | Create a new System Config resources.
*SystemConfigApi* | [**deleteSystemConfig**](docs/Api/SystemConfigApi.md#deletesystemconfig) | **DELETE** /system-config/{id} | Delete a System Config resource.
*SystemConfigApi* | [**getSystemConfig**](docs/Api/SystemConfigApi.md#getsystemconfig) | **GET** /system-config/{id} | Detailed information about a System Config resource.
*SystemConfigApi* | [**getSystemConfigList**](docs/Api/SystemConfigApi.md#getsystemconfiglist) | **GET** /system-config | List with basic information of System Config resources.
*SystemConfigApi* | [**updateSystemConfig**](docs/Api/SystemConfigApi.md#updatesystemconfig) | **PATCH** /system-config/{id} | Partially update information about a System Config resource.
*SystemInfoHealthcheckApi* | [**apiInfo**](docs/Api/SystemInfoHealthcheckApi.md#apiinfo) | **GET** /_info/openapi3.json | Get OpenAPI Specification
*SystemInfoHealthcheckApi* | [**businessEvents**](docs/Api/SystemInfoHealthcheckApi.md#businessevents) | **GET** /_info/events.json | Get Business events
*SystemInfoHealthcheckApi* | [**config**](docs/Api/SystemInfoHealthcheckApi.md#config) | **GET** /_info/config | Get API information
*SystemInfoHealthcheckApi* | [**flowActions**](docs/Api/SystemInfoHealthcheckApi.md#flowactions) | **GET** /_info/flow-actions.json | Get actions for flow builder
*SystemInfoHealthcheckApi* | [**healthCheck**](docs/Api/SystemInfoHealthcheckApi.md#healthcheck) | **GET** /_info/health-check | Check that the Application is running
*SystemInfoHealthcheckApi* | [**infoShopwareVersion**](docs/Api/SystemInfoHealthcheckApi.md#infoshopwareversion) | **GET** /_info/version | Get the Shopware version
*SystemOperationsApi* | [**clearCache**](docs/Api/SystemOperationsApi.md#clearcache) | **DELETE** /_action/cache | Clear caches
*SystemOperationsApi* | [**clearCacheAndScheduleWarmUp**](docs/Api/SystemOperationsApi.md#clearcacheandschedulewarmup) | **DELETE** /_action/cache_warmup | Clear and warm up caches
*SystemOperationsApi* | [**clearContainerCache**](docs/Api/SystemOperationsApi.md#clearcontainercache) | **DELETE** /_action/container_cache | Clear container caches
*SystemOperationsApi* | [**clearOldCacheFolders**](docs/Api/SystemOperationsApi.md#clearoldcachefolders) | **DELETE** /_action/cleanup | Clear old cache folders
*SystemOperationsApi* | [**consumeMessages**](docs/Api/SystemOperationsApi.md#consumemessages) | **POST** /_action/message-queue/consume | Consume messages from the message queue.
*SystemOperationsApi* | [**getMinRunInterval**](docs/Api/SystemOperationsApi.md#getminruninterval) | **GET** /_action/scheduled-task/min-run-interval | Get the minimum schedules task interval
*SystemOperationsApi* | [**index**](docs/Api/SystemOperationsApi.md#index) | **POST** /_action/index | Run indexer
*SystemOperationsApi* | [**indexing**](docs/Api/SystemOperationsApi.md#indexing) | **POST** /_action/indexing | Run indexer
*SystemOperationsApi* | [**info**](docs/Api/SystemOperationsApi.md#info) | **GET** /_action/cache_info | Get cache information
*SystemOperationsApi* | [**iterate**](docs/Api/SystemOperationsApi.md#iterate) | **POST** /_action/indexing/{indexer} | Iterate an indexer
*SystemOperationsApi* | [**productIndexing**](docs/Api/SystemOperationsApi.md#productindexing) | **POST** /_action/index-products | Send product indexing message
*SystemOperationsApi* | [**runScheduledTasks**](docs/Api/SystemOperationsApi.md#runscheduledtasks) | **POST** /_action/scheduled-task/run | Run scheduled tasks.
*TagApi* | [**createTag**](docs/Api/TagApi.md#createtag) | **POST** /tag | Create a new Tag resources.
*TagApi* | [**deleteTag**](docs/Api/TagApi.md#deletetag) | **DELETE** /tag/{id} | Delete a Tag resource.
*TagApi* | [**getTag**](docs/Api/TagApi.md#gettag) | **GET** /tag/{id} | Detailed information about a Tag resource.
*TagApi* | [**getTagList**](docs/Api/TagApi.md#gettaglist) | **GET** /tag | List with basic information of Tag resources.
*TagApi* | [**updateTag**](docs/Api/TagApi.md#updatetag) | **PATCH** /tag/{id} | Partially update information about a Tag resource.
*TaxApi* | [**createTax**](docs/Api/TaxApi.md#createtax) | **POST** /tax | Create a new Tax resources.
*TaxApi* | [**deleteTax**](docs/Api/TaxApi.md#deletetax) | **DELETE** /tax/{id} | Delete a Tax resource.
*TaxApi* | [**getTax**](docs/Api/TaxApi.md#gettax) | **GET** /tax/{id} | Detailed information about a Tax resource.
*TaxApi* | [**getTaxList**](docs/Api/TaxApi.md#gettaxlist) | **GET** /tax | List with basic information of Tax resources.
*TaxApi* | [**updateTax**](docs/Api/TaxApi.md#updatetax) | **PATCH** /tax/{id} | Partially update information about a Tax resource.
*TaxProviderApi* | [**createTaxProvider**](docs/Api/TaxProviderApi.md#createtaxprovider) | **POST** /tax-provider | Create a new Tax Provider resources.
*TaxProviderApi* | [**deleteTaxProvider**](docs/Api/TaxProviderApi.md#deletetaxprovider) | **DELETE** /tax-provider/{id} | Delete a Tax Provider resource.
*TaxProviderApi* | [**getTaxProvider**](docs/Api/TaxProviderApi.md#gettaxprovider) | **GET** /tax-provider/{id} | Detailed information about a Tax Provider resource.
*TaxProviderApi* | [**getTaxProviderList**](docs/Api/TaxProviderApi.md#gettaxproviderlist) | **GET** /tax-provider | List with basic information of Tax Provider resources.
*TaxProviderApi* | [**updateTaxProvider**](docs/Api/TaxProviderApi.md#updatetaxprovider) | **PATCH** /tax-provider/{id} | Partially update information about a Tax Provider resource.
*TaxRuleApi* | [**createTaxRule**](docs/Api/TaxRuleApi.md#createtaxrule) | **POST** /tax-rule | Create a new Tax Rule resources.
*TaxRuleApi* | [**deleteTaxRule**](docs/Api/TaxRuleApi.md#deletetaxrule) | **DELETE** /tax-rule/{id} | Delete a Tax Rule resource.
*TaxRuleApi* | [**getTaxRule**](docs/Api/TaxRuleApi.md#gettaxrule) | **GET** /tax-rule/{id} | Detailed information about a Tax Rule resource.
*TaxRuleApi* | [**getTaxRuleList**](docs/Api/TaxRuleApi.md#gettaxrulelist) | **GET** /tax-rule | List with basic information of Tax Rule resources.
*TaxRuleApi* | [**updateTaxRule**](docs/Api/TaxRuleApi.md#updatetaxrule) | **PATCH** /tax-rule/{id} | Partially update information about a Tax Rule resource.
*TaxRuleTypeApi* | [**createTaxRuleType**](docs/Api/TaxRuleTypeApi.md#createtaxruletype) | **POST** /tax-rule-type | Create a new Tax Rule Type resources.
*TaxRuleTypeApi* | [**deleteTaxRuleType**](docs/Api/TaxRuleTypeApi.md#deletetaxruletype) | **DELETE** /tax-rule-type/{id} | Delete a Tax Rule Type resource.
*TaxRuleTypeApi* | [**getTaxRuleType**](docs/Api/TaxRuleTypeApi.md#gettaxruletype) | **GET** /tax-rule-type/{id} | Detailed information about a Tax Rule Type resource.
*TaxRuleTypeApi* | [**getTaxRuleTypeList**](docs/Api/TaxRuleTypeApi.md#gettaxruletypelist) | **GET** /tax-rule-type | List with basic information of Tax Rule Type resources.
*TaxRuleTypeApi* | [**updateTaxRuleType**](docs/Api/TaxRuleTypeApi.md#updatetaxruletype) | **PATCH** /tax-rule-type/{id} | Partially update information about a Tax Rule Type resource.
*ThemeApi* | [**createTheme**](docs/Api/ThemeApi.md#createtheme) | **POST** /theme | Create a new Theme resources.
*ThemeApi* | [**deleteTheme**](docs/Api/ThemeApi.md#deletetheme) | **DELETE** /theme/{id} | Delete a Theme resource.
*ThemeApi* | [**getTheme**](docs/Api/ThemeApi.md#gettheme) | **GET** /theme/{id} | Detailed information about a Theme resource.
*ThemeApi* | [**getThemeList**](docs/Api/ThemeApi.md#getthemelist) | **GET** /theme | List with basic information of Theme resources.
*ThemeApi* | [**updateTheme**](docs/Api/ThemeApi.md#updatetheme) | **PATCH** /theme/{id} | Partially update information about a Theme resource.
*UnitApi* | [**createUnit**](docs/Api/UnitApi.md#createunit) | **POST** /unit | Create a new Unit resources.
*UnitApi* | [**deleteUnit**](docs/Api/UnitApi.md#deleteunit) | **DELETE** /unit/{id} | Delete a Unit resource.
*UnitApi* | [**getUnit**](docs/Api/UnitApi.md#getunit) | **GET** /unit/{id} | Detailed information about a Unit resource.
*UnitApi* | [**getUnitList**](docs/Api/UnitApi.md#getunitlist) | **GET** /unit | List with basic information of Unit resources.
*UnitApi* | [**updateUnit**](docs/Api/UnitApi.md#updateunit) | **PATCH** /unit/{id} | Partially update information about a Unit resource.
*UserApi* | [**createUser**](docs/Api/UserApi.md#createuser) | **POST** /user | Create a new User resources.
*UserApi* | [**deleteUser**](docs/Api/UserApi.md#deleteuser) | **DELETE** /user/{id} | Delete a User resource.
*UserApi* | [**getUser**](docs/Api/UserApi.md#getuser) | **GET** /user/{id} | Detailed information about a User resource.
*UserApi* | [**getUserList**](docs/Api/UserApi.md#getuserlist) | **GET** /user | List with basic information of User resources.
*UserApi* | [**updateUser**](docs/Api/UserApi.md#updateuser) | **PATCH** /user/{id} | Partially update information about a User resource.
*UserAccessKeyApi* | [**createUserAccessKey**](docs/Api/UserAccessKeyApi.md#createuseraccesskey) | **POST** /user-access-key | Create a new User Access Key resources.
*UserAccessKeyApi* | [**deleteUserAccessKey**](docs/Api/UserAccessKeyApi.md#deleteuseraccesskey) | **DELETE** /user-access-key/{id} | Delete a User Access Key resource.
*UserAccessKeyApi* | [**getUserAccessKey**](docs/Api/UserAccessKeyApi.md#getuseraccesskey) | **GET** /user-access-key/{id} | Detailed information about a User Access Key resource.
*UserAccessKeyApi* | [**getUserAccessKeyList**](docs/Api/UserAccessKeyApi.md#getuseraccesskeylist) | **GET** /user-access-key | List with basic information of User Access Key resources.
*UserAccessKeyApi* | [**updateUserAccessKey**](docs/Api/UserAccessKeyApi.md#updateuseraccesskey) | **PATCH** /user-access-key/{id} | Partially update information about a User Access Key resource.
*UserConfigApi* | [**createUserConfig**](docs/Api/UserConfigApi.md#createuserconfig) | **POST** /user-config | Create a new User Config resources.
*UserConfigApi* | [**deleteUserConfig**](docs/Api/UserConfigApi.md#deleteuserconfig) | **DELETE** /user-config/{id} | Delete a User Config resource.
*UserConfigApi* | [**getUserConfig**](docs/Api/UserConfigApi.md#getuserconfig) | **GET** /user-config/{id} | Detailed information about a User Config resource.
*UserConfigApi* | [**getUserConfigList**](docs/Api/UserConfigApi.md#getuserconfiglist) | **GET** /user-config | List with basic information of User Config resources.
*UserConfigApi* | [**updateUserConfig**](docs/Api/UserConfigApi.md#updateuserconfig) | **PATCH** /user-config/{id} | Partially update information about a User Config resource.
*UserRecoveryApi* | [**createUserRecovery**](docs/Api/UserRecoveryApi.md#createuserrecovery) | **POST** /user-recovery | Create a new User Recovery resources.
*UserRecoveryApi* | [**deleteUserRecovery**](docs/Api/UserRecoveryApi.md#deleteuserrecovery) | **DELETE** /user-recovery/{id} | Delete a User Recovery resource.
*UserRecoveryApi* | [**getUserRecovery**](docs/Api/UserRecoveryApi.md#getuserrecovery) | **GET** /user-recovery/{id} | Detailed information about a User Recovery resource.
*UserRecoveryApi* | [**getUserRecoveryList**](docs/Api/UserRecoveryApi.md#getuserrecoverylist) | **GET** /user-recovery | List with basic information of User Recovery resources.
*UserRecoveryApi* | [**updateUserRecovery**](docs/Api/UserRecoveryApi.md#updateuserrecovery) | **PATCH** /user-recovery/{id} | Partially update information about a User Recovery resource.
*WebhookApi* | [**createWebhook**](docs/Api/WebhookApi.md#createwebhook) | **POST** /webhook | Create a new Webhook resources.
*WebhookApi* | [**deleteWebhook**](docs/Api/WebhookApi.md#deletewebhook) | **DELETE** /webhook/{id} | Delete a Webhook resource.
*WebhookApi* | [**getWebhook**](docs/Api/WebhookApi.md#getwebhook) | **GET** /webhook/{id} | Detailed information about a Webhook resource.
*WebhookApi* | [**getWebhookList**](docs/Api/WebhookApi.md#getwebhooklist) | **GET** /webhook | List with basic information of Webhook resources.
*WebhookApi* | [**updateWebhook**](docs/Api/WebhookApi.md#updatewebhook) | **PATCH** /webhook/{id} | Partially update information about a Webhook resource.
*WebhookEventLogApi* | [**createWebhookEventLog**](docs/Api/WebhookEventLogApi.md#createwebhookeventlog) | **POST** /webhook-event-log | Create a new Webhook Event Log resources.
*WebhookEventLogApi* | [**deleteWebhookEventLog**](docs/Api/WebhookEventLogApi.md#deletewebhookeventlog) | **DELETE** /webhook-event-log/{id} | Delete a Webhook Event Log resource.
*WebhookEventLogApi* | [**getWebhookEventLog**](docs/Api/WebhookEventLogApi.md#getwebhookeventlog) | **GET** /webhook-event-log/{id} | Detailed information about a Webhook Event Log resource.
*WebhookEventLogApi* | [**getWebhookEventLogList**](docs/Api/WebhookEventLogApi.md#getwebhookeventloglist) | **GET** /webhook-event-log | List with basic information of Webhook Event Log resources.
*WebhookEventLogApi* | [**updateWebhookEventLog**](docs/Api/WebhookEventLogApi.md#updatewebhookeventlog) | **PATCH** /webhook-event-log/{id} | Partially update information about a Webhook Event Log resource.

## Models

- [AclRole](docs/Model/AclRole.md)
- [AclRoleJsonApi](docs/Model/AclRoleJsonApi.md)
- [AclRoleJsonApiAllOf](docs/Model/AclRoleJsonApiAllOf.md)
- [AclRoleJsonApiAllOfRelationships](docs/Model/AclRoleJsonApiAllOfRelationships.md)
- [AclRoleJsonApiAllOfRelationshipsApp](docs/Model/AclRoleJsonApiAllOfRelationshipsApp.md)
- [AclRoleJsonApiAllOfRelationshipsAppData](docs/Model/AclRoleJsonApiAllOfRelationshipsAppData.md)
- [AclRoleJsonApiAllOfRelationshipsAppLinks](docs/Model/AclRoleJsonApiAllOfRelationshipsAppLinks.md)
- [AclRoleJsonApiAllOfRelationshipsIntegrations](docs/Model/AclRoleJsonApiAllOfRelationshipsIntegrations.md)
- [AclRoleJsonApiAllOfRelationshipsIntegrationsData](docs/Model/AclRoleJsonApiAllOfRelationshipsIntegrationsData.md)
- [AclRoleJsonApiAllOfRelationshipsIntegrationsLinks](docs/Model/AclRoleJsonApiAllOfRelationshipsIntegrationsLinks.md)
- [AclRoleJsonApiAllOfRelationshipsUsers](docs/Model/AclRoleJsonApiAllOfRelationshipsUsers.md)
- [AclRoleJsonApiAllOfRelationshipsUsersData](docs/Model/AclRoleJsonApiAllOfRelationshipsUsersData.md)
- [AclRoleJsonApiAllOfRelationshipsUsersLinks](docs/Model/AclRoleJsonApiAllOfRelationshipsUsersLinks.md)
- [AclUserRole](docs/Model/AclUserRole.md)
- [ActionMailTemplateBuildMailTemplate](docs/Model/ActionMailTemplateBuildMailTemplate.md)
- [ActionMailTemplateBuildMailTemplateType](docs/Model/ActionMailTemplateBuildMailTemplateType.md)
- [ActionMailTemplateSendBinAttachments](docs/Model/ActionMailTemplateSendBinAttachments.md)
- [App](docs/Model/App.md)
- [AppActionButton](docs/Model/AppActionButton.md)
- [AppActionButtonJsonApi](docs/Model/AppActionButtonJsonApi.md)
- [AppActionButtonJsonApiAllOf](docs/Model/AppActionButtonJsonApiAllOf.md)
- [AppActionButtonJsonApiAllOfRelationships](docs/Model/AppActionButtonJsonApiAllOfRelationships.md)
- [AppActionButtonJsonApiAllOfRelationshipsApp](docs/Model/AppActionButtonJsonApiAllOfRelationshipsApp.md)
- [AppActionButtonJsonApiAllOfRelationshipsAppLinks](docs/Model/AppActionButtonJsonApiAllOfRelationshipsAppLinks.md)
- [AppAdministrationSnippet](docs/Model/AppAdministrationSnippet.md)
- [AppAdministrationSnippetJsonApi](docs/Model/AppAdministrationSnippetJsonApi.md)
- [AppAdministrationSnippetJsonApiAllOf](docs/Model/AppAdministrationSnippetJsonApiAllOf.md)
- [AppCmsBlock](docs/Model/AppCmsBlock.md)
- [AppCmsBlockJsonApi](docs/Model/AppCmsBlockJsonApi.md)
- [AppCmsBlockJsonApiAllOf](docs/Model/AppCmsBlockJsonApiAllOf.md)
- [AppCmsBlockJsonApiAllOfRelationships](docs/Model/AppCmsBlockJsonApiAllOfRelationships.md)
- [AppCmsBlockJsonApiAllOfRelationshipsApp](docs/Model/AppCmsBlockJsonApiAllOfRelationshipsApp.md)
- [AppCmsBlockJsonApiAllOfRelationshipsAppLinks](docs/Model/AppCmsBlockJsonApiAllOfRelationshipsAppLinks.md)
- [AppFlowAction](docs/Model/AppFlowAction.md)
- [AppFlowActionJsonApi](docs/Model/AppFlowActionJsonApi.md)
- [AppFlowActionJsonApiAllOf](docs/Model/AppFlowActionJsonApiAllOf.md)
- [AppFlowActionJsonApiAllOfRelationships](docs/Model/AppFlowActionJsonApiAllOfRelationships.md)
- [AppFlowActionJsonApiAllOfRelationshipsApp](docs/Model/AppFlowActionJsonApiAllOfRelationshipsApp.md)
- [AppFlowActionJsonApiAllOfRelationshipsAppLinks](docs/Model/AppFlowActionJsonApiAllOfRelationshipsAppLinks.md)
- [AppFlowActionJsonApiAllOfRelationshipsFlowSequences](docs/Model/AppFlowActionJsonApiAllOfRelationshipsFlowSequences.md)
- [AppFlowActionJsonApiAllOfRelationshipsFlowSequencesData](docs/Model/AppFlowActionJsonApiAllOfRelationshipsFlowSequencesData.md)
- [AppFlowActionJsonApiAllOfRelationshipsFlowSequencesLinks](docs/Model/AppFlowActionJsonApiAllOfRelationshipsFlowSequencesLinks.md)
- [AppFlowEvent](docs/Model/AppFlowEvent.md)
- [AppFlowEventJsonApi](docs/Model/AppFlowEventJsonApi.md)
- [AppFlowEventJsonApiAllOf](docs/Model/AppFlowEventJsonApiAllOf.md)
- [AppFlowEventJsonApiAllOfRelationships](docs/Model/AppFlowEventJsonApiAllOfRelationships.md)
- [AppFlowEventJsonApiAllOfRelationshipsApp](docs/Model/AppFlowEventJsonApiAllOfRelationshipsApp.md)
- [AppFlowEventJsonApiAllOfRelationshipsAppLinks](docs/Model/AppFlowEventJsonApiAllOfRelationshipsAppLinks.md)
- [AppFlowEventJsonApiAllOfRelationshipsFlows](docs/Model/AppFlowEventJsonApiAllOfRelationshipsFlows.md)
- [AppFlowEventJsonApiAllOfRelationshipsFlowsData](docs/Model/AppFlowEventJsonApiAllOfRelationshipsFlowsData.md)
- [AppFlowEventJsonApiAllOfRelationshipsFlowsLinks](docs/Model/AppFlowEventJsonApiAllOfRelationshipsFlowsLinks.md)
- [AppJsonApi](docs/Model/AppJsonApi.md)
- [AppJsonApiAllOf](docs/Model/AppJsonApiAllOf.md)
- [AppJsonApiAllOfRelationships](docs/Model/AppJsonApiAllOfRelationships.md)
- [AppJsonApiAllOfRelationshipsAclRole](docs/Model/AppJsonApiAllOfRelationshipsAclRole.md)
- [AppJsonApiAllOfRelationshipsAclRoleData](docs/Model/AppJsonApiAllOfRelationshipsAclRoleData.md)
- [AppJsonApiAllOfRelationshipsAclRoleLinks](docs/Model/AppJsonApiAllOfRelationshipsAclRoleLinks.md)
- [AppJsonApiAllOfRelationshipsActionButtons](docs/Model/AppJsonApiAllOfRelationshipsActionButtons.md)
- [AppJsonApiAllOfRelationshipsActionButtonsData](docs/Model/AppJsonApiAllOfRelationshipsActionButtonsData.md)
- [AppJsonApiAllOfRelationshipsActionButtonsLinks](docs/Model/AppJsonApiAllOfRelationshipsActionButtonsLinks.md)
- [AppJsonApiAllOfRelationshipsAppShippingMethods](docs/Model/AppJsonApiAllOfRelationshipsAppShippingMethods.md)
- [AppJsonApiAllOfRelationshipsAppShippingMethodsData](docs/Model/AppJsonApiAllOfRelationshipsAppShippingMethodsData.md)
- [AppJsonApiAllOfRelationshipsAppShippingMethodsLinks](docs/Model/AppJsonApiAllOfRelationshipsAppShippingMethodsLinks.md)
- [AppJsonApiAllOfRelationshipsCmsBlocks](docs/Model/AppJsonApiAllOfRelationshipsCmsBlocks.md)
- [AppJsonApiAllOfRelationshipsCmsBlocksData](docs/Model/AppJsonApiAllOfRelationshipsCmsBlocksData.md)
- [AppJsonApiAllOfRelationshipsCmsBlocksLinks](docs/Model/AppJsonApiAllOfRelationshipsCmsBlocksLinks.md)
- [AppJsonApiAllOfRelationshipsCustomFieldSets](docs/Model/AppJsonApiAllOfRelationshipsCustomFieldSets.md)
- [AppJsonApiAllOfRelationshipsCustomFieldSetsData](docs/Model/AppJsonApiAllOfRelationshipsCustomFieldSetsData.md)
- [AppJsonApiAllOfRelationshipsCustomFieldSetsLinks](docs/Model/AppJsonApiAllOfRelationshipsCustomFieldSetsLinks.md)
- [AppJsonApiAllOfRelationshipsFlowActions](docs/Model/AppJsonApiAllOfRelationshipsFlowActions.md)
- [AppJsonApiAllOfRelationshipsFlowActionsData](docs/Model/AppJsonApiAllOfRelationshipsFlowActionsData.md)
- [AppJsonApiAllOfRelationshipsFlowActionsLinks](docs/Model/AppJsonApiAllOfRelationshipsFlowActionsLinks.md)
- [AppJsonApiAllOfRelationshipsFlowEvents](docs/Model/AppJsonApiAllOfRelationshipsFlowEvents.md)
- [AppJsonApiAllOfRelationshipsFlowEventsData](docs/Model/AppJsonApiAllOfRelationshipsFlowEventsData.md)
- [AppJsonApiAllOfRelationshipsFlowEventsLinks](docs/Model/AppJsonApiAllOfRelationshipsFlowEventsLinks.md)
- [AppJsonApiAllOfRelationshipsIntegration](docs/Model/AppJsonApiAllOfRelationshipsIntegration.md)
- [AppJsonApiAllOfRelationshipsIntegrationData](docs/Model/AppJsonApiAllOfRelationshipsIntegrationData.md)
- [AppJsonApiAllOfRelationshipsIntegrationLinks](docs/Model/AppJsonApiAllOfRelationshipsIntegrationLinks.md)
- [AppJsonApiAllOfRelationshipsPaymentMethods](docs/Model/AppJsonApiAllOfRelationshipsPaymentMethods.md)
- [AppJsonApiAllOfRelationshipsPaymentMethodsData](docs/Model/AppJsonApiAllOfRelationshipsPaymentMethodsData.md)
- [AppJsonApiAllOfRelationshipsPaymentMethodsLinks](docs/Model/AppJsonApiAllOfRelationshipsPaymentMethodsLinks.md)
- [AppJsonApiAllOfRelationshipsTaxProviders](docs/Model/AppJsonApiAllOfRelationshipsTaxProviders.md)
- [AppJsonApiAllOfRelationshipsTaxProvidersData](docs/Model/AppJsonApiAllOfRelationshipsTaxProvidersData.md)
- [AppJsonApiAllOfRelationshipsTaxProvidersLinks](docs/Model/AppJsonApiAllOfRelationshipsTaxProvidersLinks.md)
- [AppJsonApiAllOfRelationshipsTemplates](docs/Model/AppJsonApiAllOfRelationshipsTemplates.md)
- [AppJsonApiAllOfRelationshipsTemplatesData](docs/Model/AppJsonApiAllOfRelationshipsTemplatesData.md)
- [AppJsonApiAllOfRelationshipsTemplatesLinks](docs/Model/AppJsonApiAllOfRelationshipsTemplatesLinks.md)
- [AppJsonApiAllOfRelationshipsWebhooks](docs/Model/AppJsonApiAllOfRelationshipsWebhooks.md)
- [AppJsonApiAllOfRelationshipsWebhooksData](docs/Model/AppJsonApiAllOfRelationshipsWebhooksData.md)
- [AppJsonApiAllOfRelationshipsWebhooksLinks](docs/Model/AppJsonApiAllOfRelationshipsWebhooksLinks.md)
- [AppPaymentMethod](docs/Model/AppPaymentMethod.md)
- [AppPaymentMethodJsonApi](docs/Model/AppPaymentMethodJsonApi.md)
- [AppPaymentMethodJsonApiAllOf](docs/Model/AppPaymentMethodJsonApiAllOf.md)
- [AppPaymentMethodJsonApiAllOfRelationships](docs/Model/AppPaymentMethodJsonApiAllOfRelationships.md)
- [AppPaymentMethodJsonApiAllOfRelationshipsApp](docs/Model/AppPaymentMethodJsonApiAllOfRelationshipsApp.md)
- [AppPaymentMethodJsonApiAllOfRelationshipsAppLinks](docs/Model/AppPaymentMethodJsonApiAllOfRelationshipsAppLinks.md)
- [AppPaymentMethodJsonApiAllOfRelationshipsOriginalMedia](docs/Model/AppPaymentMethodJsonApiAllOfRelationshipsOriginalMedia.md)
- [AppPaymentMethodJsonApiAllOfRelationshipsOriginalMediaData](docs/Model/AppPaymentMethodJsonApiAllOfRelationshipsOriginalMediaData.md)
- [AppPaymentMethodJsonApiAllOfRelationshipsOriginalMediaLinks](docs/Model/AppPaymentMethodJsonApiAllOfRelationshipsOriginalMediaLinks.md)
- [AppPaymentMethodJsonApiAllOfRelationshipsPaymentMethod](docs/Model/AppPaymentMethodJsonApiAllOfRelationshipsPaymentMethod.md)
- [AppPaymentMethodJsonApiAllOfRelationshipsPaymentMethodData](docs/Model/AppPaymentMethodJsonApiAllOfRelationshipsPaymentMethodData.md)
- [AppPaymentMethodJsonApiAllOfRelationshipsPaymentMethodLinks](docs/Model/AppPaymentMethodJsonApiAllOfRelationshipsPaymentMethodLinks.md)
- [AppScriptCondition](docs/Model/AppScriptCondition.md)
- [AppScriptConditionJsonApi](docs/Model/AppScriptConditionJsonApi.md)
- [AppScriptConditionJsonApiAllOf](docs/Model/AppScriptConditionJsonApiAllOf.md)
- [AppScriptConditionJsonApiAllOfRelationships](docs/Model/AppScriptConditionJsonApiAllOfRelationships.md)
- [AppScriptConditionJsonApiAllOfRelationshipsApp](docs/Model/AppScriptConditionJsonApiAllOfRelationshipsApp.md)
- [AppScriptConditionJsonApiAllOfRelationshipsAppLinks](docs/Model/AppScriptConditionJsonApiAllOfRelationshipsAppLinks.md)
- [AppScriptConditionJsonApiAllOfRelationshipsRuleConditions](docs/Model/AppScriptConditionJsonApiAllOfRelationshipsRuleConditions.md)
- [AppScriptConditionJsonApiAllOfRelationshipsRuleConditionsData](docs/Model/AppScriptConditionJsonApiAllOfRelationshipsRuleConditionsData.md)
- [AppScriptConditionJsonApiAllOfRelationshipsRuleConditionsLinks](docs/Model/AppScriptConditionJsonApiAllOfRelationshipsRuleConditionsLinks.md)
- [AppShippingMethod](docs/Model/AppShippingMethod.md)
- [AppShippingMethodJsonApi](docs/Model/AppShippingMethodJsonApi.md)
- [AppShippingMethodJsonApiAllOf](docs/Model/AppShippingMethodJsonApiAllOf.md)
- [AppShippingMethodJsonApiAllOfRelationships](docs/Model/AppShippingMethodJsonApiAllOfRelationships.md)
- [AppShippingMethodJsonApiAllOfRelationshipsApp](docs/Model/AppShippingMethodJsonApiAllOfRelationshipsApp.md)
- [AppShippingMethodJsonApiAllOfRelationshipsAppLinks](docs/Model/AppShippingMethodJsonApiAllOfRelationshipsAppLinks.md)
- [AppShippingMethodJsonApiAllOfRelationshipsOriginalMedia](docs/Model/AppShippingMethodJsonApiAllOfRelationshipsOriginalMedia.md)
- [AppShippingMethodJsonApiAllOfRelationshipsOriginalMediaLinks](docs/Model/AppShippingMethodJsonApiAllOfRelationshipsOriginalMediaLinks.md)
- [AppShippingMethodJsonApiAllOfRelationshipsShippingMethod](docs/Model/AppShippingMethodJsonApiAllOfRelationshipsShippingMethod.md)
- [AppShippingMethodJsonApiAllOfRelationshipsShippingMethodData](docs/Model/AppShippingMethodJsonApiAllOfRelationshipsShippingMethodData.md)
- [AppShippingMethodJsonApiAllOfRelationshipsShippingMethodLinks](docs/Model/AppShippingMethodJsonApiAllOfRelationshipsShippingMethodLinks.md)
- [AppTemplate](docs/Model/AppTemplate.md)
- [AppTemplateJsonApi](docs/Model/AppTemplateJsonApi.md)
- [AppTemplateJsonApiAllOf](docs/Model/AppTemplateJsonApiAllOf.md)
- [AppTemplateJsonApiAllOfRelationships](docs/Model/AppTemplateJsonApiAllOfRelationships.md)
- [AppTemplateJsonApiAllOfRelationshipsApp](docs/Model/AppTemplateJsonApiAllOfRelationshipsApp.md)
- [AppTemplateJsonApiAllOfRelationshipsAppLinks](docs/Model/AppTemplateJsonApiAllOfRelationshipsAppLinks.md)
- [Category](docs/Model/Category.md)
- [CategoryJsonApi](docs/Model/CategoryJsonApi.md)
- [CategoryJsonApiAllOf](docs/Model/CategoryJsonApiAllOf.md)
- [CategoryJsonApiAllOfRelationships](docs/Model/CategoryJsonApiAllOfRelationships.md)
- [CategoryJsonApiAllOfRelationshipsChildren](docs/Model/CategoryJsonApiAllOfRelationshipsChildren.md)
- [CategoryJsonApiAllOfRelationshipsChildrenData](docs/Model/CategoryJsonApiAllOfRelationshipsChildrenData.md)
- [CategoryJsonApiAllOfRelationshipsChildrenLinks](docs/Model/CategoryJsonApiAllOfRelationshipsChildrenLinks.md)
- [CategoryJsonApiAllOfRelationshipsCmsPage](docs/Model/CategoryJsonApiAllOfRelationshipsCmsPage.md)
- [CategoryJsonApiAllOfRelationshipsCmsPageData](docs/Model/CategoryJsonApiAllOfRelationshipsCmsPageData.md)
- [CategoryJsonApiAllOfRelationshipsCmsPageLinks](docs/Model/CategoryJsonApiAllOfRelationshipsCmsPageLinks.md)
- [CategoryJsonApiAllOfRelationshipsFooterSalesChannels](docs/Model/CategoryJsonApiAllOfRelationshipsFooterSalesChannels.md)
- [CategoryJsonApiAllOfRelationshipsFooterSalesChannelsData](docs/Model/CategoryJsonApiAllOfRelationshipsFooterSalesChannelsData.md)
- [CategoryJsonApiAllOfRelationshipsFooterSalesChannelsLinks](docs/Model/CategoryJsonApiAllOfRelationshipsFooterSalesChannelsLinks.md)
- [CategoryJsonApiAllOfRelationshipsMainCategories](docs/Model/CategoryJsonApiAllOfRelationshipsMainCategories.md)
- [CategoryJsonApiAllOfRelationshipsMainCategoriesData](docs/Model/CategoryJsonApiAllOfRelationshipsMainCategoriesData.md)
- [CategoryJsonApiAllOfRelationshipsMainCategoriesLinks](docs/Model/CategoryJsonApiAllOfRelationshipsMainCategoriesLinks.md)
- [CategoryJsonApiAllOfRelationshipsMedia](docs/Model/CategoryJsonApiAllOfRelationshipsMedia.md)
- [CategoryJsonApiAllOfRelationshipsMediaData](docs/Model/CategoryJsonApiAllOfRelationshipsMediaData.md)
- [CategoryJsonApiAllOfRelationshipsMediaLinks](docs/Model/CategoryJsonApiAllOfRelationshipsMediaLinks.md)
- [CategoryJsonApiAllOfRelationshipsNavigationSalesChannels](docs/Model/CategoryJsonApiAllOfRelationshipsNavigationSalesChannels.md)
- [CategoryJsonApiAllOfRelationshipsNavigationSalesChannelsData](docs/Model/CategoryJsonApiAllOfRelationshipsNavigationSalesChannelsData.md)
- [CategoryJsonApiAllOfRelationshipsNavigationSalesChannelsLinks](docs/Model/CategoryJsonApiAllOfRelationshipsNavigationSalesChannelsLinks.md)
- [CategoryJsonApiAllOfRelationshipsNestedProducts](docs/Model/CategoryJsonApiAllOfRelationshipsNestedProducts.md)
- [CategoryJsonApiAllOfRelationshipsNestedProductsData](docs/Model/CategoryJsonApiAllOfRelationshipsNestedProductsData.md)
- [CategoryJsonApiAllOfRelationshipsNestedProductsLinks](docs/Model/CategoryJsonApiAllOfRelationshipsNestedProductsLinks.md)
- [CategoryJsonApiAllOfRelationshipsParent](docs/Model/CategoryJsonApiAllOfRelationshipsParent.md)
- [CategoryJsonApiAllOfRelationshipsParentData](docs/Model/CategoryJsonApiAllOfRelationshipsParentData.md)
- [CategoryJsonApiAllOfRelationshipsParentLinks](docs/Model/CategoryJsonApiAllOfRelationshipsParentLinks.md)
- [CategoryJsonApiAllOfRelationshipsProductStream](docs/Model/CategoryJsonApiAllOfRelationshipsProductStream.md)
- [CategoryJsonApiAllOfRelationshipsProductStreamData](docs/Model/CategoryJsonApiAllOfRelationshipsProductStreamData.md)
- [CategoryJsonApiAllOfRelationshipsProductStreamLinks](docs/Model/CategoryJsonApiAllOfRelationshipsProductStreamLinks.md)
- [CategoryJsonApiAllOfRelationshipsProducts](docs/Model/CategoryJsonApiAllOfRelationshipsProducts.md)
- [CategoryJsonApiAllOfRelationshipsProductsData](docs/Model/CategoryJsonApiAllOfRelationshipsProductsData.md)
- [CategoryJsonApiAllOfRelationshipsProductsLinks](docs/Model/CategoryJsonApiAllOfRelationshipsProductsLinks.md)
- [CategoryJsonApiAllOfRelationshipsSeoUrls](docs/Model/CategoryJsonApiAllOfRelationshipsSeoUrls.md)
- [CategoryJsonApiAllOfRelationshipsSeoUrlsData](docs/Model/CategoryJsonApiAllOfRelationshipsSeoUrlsData.md)
- [CategoryJsonApiAllOfRelationshipsSeoUrlsLinks](docs/Model/CategoryJsonApiAllOfRelationshipsSeoUrlsLinks.md)
- [CategoryJsonApiAllOfRelationshipsServiceSalesChannels](docs/Model/CategoryJsonApiAllOfRelationshipsServiceSalesChannels.md)
- [CategoryJsonApiAllOfRelationshipsServiceSalesChannelsData](docs/Model/CategoryJsonApiAllOfRelationshipsServiceSalesChannelsData.md)
- [CategoryJsonApiAllOfRelationshipsServiceSalesChannelsLinks](docs/Model/CategoryJsonApiAllOfRelationshipsServiceSalesChannelsLinks.md)
- [CategoryJsonApiAllOfRelationshipsTags](docs/Model/CategoryJsonApiAllOfRelationshipsTags.md)
- [CategoryJsonApiAllOfRelationshipsTagsData](docs/Model/CategoryJsonApiAllOfRelationshipsTagsData.md)
- [CategoryJsonApiAllOfRelationshipsTagsLinks](docs/Model/CategoryJsonApiAllOfRelationshipsTagsLinks.md)
- [CategoryTag](docs/Model/CategoryTag.md)
- [CmsBlock](docs/Model/CmsBlock.md)
- [CmsBlockJsonApi](docs/Model/CmsBlockJsonApi.md)
- [CmsBlockJsonApiAllOf](docs/Model/CmsBlockJsonApiAllOf.md)
- [CmsBlockJsonApiAllOfRelationships](docs/Model/CmsBlockJsonApiAllOfRelationships.md)
- [CmsBlockJsonApiAllOfRelationshipsBackgroundMedia](docs/Model/CmsBlockJsonApiAllOfRelationshipsBackgroundMedia.md)
- [CmsBlockJsonApiAllOfRelationshipsBackgroundMediaData](docs/Model/CmsBlockJsonApiAllOfRelationshipsBackgroundMediaData.md)
- [CmsBlockJsonApiAllOfRelationshipsBackgroundMediaLinks](docs/Model/CmsBlockJsonApiAllOfRelationshipsBackgroundMediaLinks.md)
- [CmsBlockJsonApiAllOfRelationshipsSection](docs/Model/CmsBlockJsonApiAllOfRelationshipsSection.md)
- [CmsBlockJsonApiAllOfRelationshipsSectionData](docs/Model/CmsBlockJsonApiAllOfRelationshipsSectionData.md)
- [CmsBlockJsonApiAllOfRelationshipsSectionLinks](docs/Model/CmsBlockJsonApiAllOfRelationshipsSectionLinks.md)
- [CmsBlockJsonApiAllOfRelationshipsSlots](docs/Model/CmsBlockJsonApiAllOfRelationshipsSlots.md)
- [CmsBlockJsonApiAllOfRelationshipsSlotsData](docs/Model/CmsBlockJsonApiAllOfRelationshipsSlotsData.md)
- [CmsBlockJsonApiAllOfRelationshipsSlotsLinks](docs/Model/CmsBlockJsonApiAllOfRelationshipsSlotsLinks.md)
- [CmsBlockJsonApiAllOfVisibility](docs/Model/CmsBlockJsonApiAllOfVisibility.md)
- [CmsPage](docs/Model/CmsPage.md)
- [CmsPageJsonApi](docs/Model/CmsPageJsonApi.md)
- [CmsPageJsonApiAllOf](docs/Model/CmsPageJsonApiAllOf.md)
- [CmsPageJsonApiAllOfConfig](docs/Model/CmsPageJsonApiAllOfConfig.md)
- [CmsPageJsonApiAllOfRelationships](docs/Model/CmsPageJsonApiAllOfRelationships.md)
- [CmsPageJsonApiAllOfRelationshipsCategories](docs/Model/CmsPageJsonApiAllOfRelationshipsCategories.md)
- [CmsPageJsonApiAllOfRelationshipsCategoriesData](docs/Model/CmsPageJsonApiAllOfRelationshipsCategoriesData.md)
- [CmsPageJsonApiAllOfRelationshipsCategoriesLinks](docs/Model/CmsPageJsonApiAllOfRelationshipsCategoriesLinks.md)
- [CmsPageJsonApiAllOfRelationshipsHomeSalesChannels](docs/Model/CmsPageJsonApiAllOfRelationshipsHomeSalesChannels.md)
- [CmsPageJsonApiAllOfRelationshipsHomeSalesChannelsData](docs/Model/CmsPageJsonApiAllOfRelationshipsHomeSalesChannelsData.md)
- [CmsPageJsonApiAllOfRelationshipsHomeSalesChannelsLinks](docs/Model/CmsPageJsonApiAllOfRelationshipsHomeSalesChannelsLinks.md)
- [CmsPageJsonApiAllOfRelationshipsLandingPages](docs/Model/CmsPageJsonApiAllOfRelationshipsLandingPages.md)
- [CmsPageJsonApiAllOfRelationshipsLandingPagesData](docs/Model/CmsPageJsonApiAllOfRelationshipsLandingPagesData.md)
- [CmsPageJsonApiAllOfRelationshipsLandingPagesLinks](docs/Model/CmsPageJsonApiAllOfRelationshipsLandingPagesLinks.md)
- [CmsPageJsonApiAllOfRelationshipsPreviewMedia](docs/Model/CmsPageJsonApiAllOfRelationshipsPreviewMedia.md)
- [CmsPageJsonApiAllOfRelationshipsPreviewMediaData](docs/Model/CmsPageJsonApiAllOfRelationshipsPreviewMediaData.md)
- [CmsPageJsonApiAllOfRelationshipsPreviewMediaLinks](docs/Model/CmsPageJsonApiAllOfRelationshipsPreviewMediaLinks.md)
- [CmsPageJsonApiAllOfRelationshipsProducts](docs/Model/CmsPageJsonApiAllOfRelationshipsProducts.md)
- [CmsPageJsonApiAllOfRelationshipsProductsLinks](docs/Model/CmsPageJsonApiAllOfRelationshipsProductsLinks.md)
- [CmsPageJsonApiAllOfRelationshipsSections](docs/Model/CmsPageJsonApiAllOfRelationshipsSections.md)
- [CmsPageJsonApiAllOfRelationshipsSectionsData](docs/Model/CmsPageJsonApiAllOfRelationshipsSectionsData.md)
- [CmsPageJsonApiAllOfRelationshipsSectionsLinks](docs/Model/CmsPageJsonApiAllOfRelationshipsSectionsLinks.md)
- [CmsSection](docs/Model/CmsSection.md)
- [CmsSectionJsonApi](docs/Model/CmsSectionJsonApi.md)
- [CmsSectionJsonApiAllOf](docs/Model/CmsSectionJsonApiAllOf.md)
- [CmsSectionJsonApiAllOfRelationships](docs/Model/CmsSectionJsonApiAllOfRelationships.md)
- [CmsSectionJsonApiAllOfRelationshipsBackgroundMedia](docs/Model/CmsSectionJsonApiAllOfRelationshipsBackgroundMedia.md)
- [CmsSectionJsonApiAllOfRelationshipsBackgroundMediaLinks](docs/Model/CmsSectionJsonApiAllOfRelationshipsBackgroundMediaLinks.md)
- [CmsSectionJsonApiAllOfRelationshipsBlocks](docs/Model/CmsSectionJsonApiAllOfRelationshipsBlocks.md)
- [CmsSectionJsonApiAllOfRelationshipsBlocksData](docs/Model/CmsSectionJsonApiAllOfRelationshipsBlocksData.md)
- [CmsSectionJsonApiAllOfRelationshipsBlocksLinks](docs/Model/CmsSectionJsonApiAllOfRelationshipsBlocksLinks.md)
- [CmsSectionJsonApiAllOfRelationshipsPage](docs/Model/CmsSectionJsonApiAllOfRelationshipsPage.md)
- [CmsSectionJsonApiAllOfRelationshipsPageData](docs/Model/CmsSectionJsonApiAllOfRelationshipsPageData.md)
- [CmsSectionJsonApiAllOfRelationshipsPageLinks](docs/Model/CmsSectionJsonApiAllOfRelationshipsPageLinks.md)
- [CmsSlot](docs/Model/CmsSlot.md)
- [CmsSlotJsonApi](docs/Model/CmsSlotJsonApi.md)
- [CmsSlotJsonApiAllOf](docs/Model/CmsSlotJsonApiAllOf.md)
- [CmsSlotJsonApiAllOfRelationships](docs/Model/CmsSlotJsonApiAllOfRelationships.md)
- [CmsSlotJsonApiAllOfRelationshipsBlock](docs/Model/CmsSlotJsonApiAllOfRelationshipsBlock.md)
- [CmsSlotJsonApiAllOfRelationshipsBlockData](docs/Model/CmsSlotJsonApiAllOfRelationshipsBlockData.md)
- [CmsSlotJsonApiAllOfRelationshipsBlockLinks](docs/Model/CmsSlotJsonApiAllOfRelationshipsBlockLinks.md)
- [Country](docs/Model/Country.md)
- [CountryJsonApi](docs/Model/CountryJsonApi.md)
- [CountryJsonApiAllOf](docs/Model/CountryJsonApiAllOf.md)
- [CountryJsonApiAllOfCustomerTax](docs/Model/CountryJsonApiAllOfCustomerTax.md)
- [CountryJsonApiAllOfRelationships](docs/Model/CountryJsonApiAllOfRelationships.md)
- [CountryJsonApiAllOfRelationshipsCurrencyCountryRoundings](docs/Model/CountryJsonApiAllOfRelationshipsCurrencyCountryRoundings.md)
- [CountryJsonApiAllOfRelationshipsCurrencyCountryRoundingsData](docs/Model/CountryJsonApiAllOfRelationshipsCurrencyCountryRoundingsData.md)
- [CountryJsonApiAllOfRelationshipsCurrencyCountryRoundingsLinks](docs/Model/CountryJsonApiAllOfRelationshipsCurrencyCountryRoundingsLinks.md)
- [CountryJsonApiAllOfRelationshipsCustomerAddresses](docs/Model/CountryJsonApiAllOfRelationshipsCustomerAddresses.md)
- [CountryJsonApiAllOfRelationshipsCustomerAddressesData](docs/Model/CountryJsonApiAllOfRelationshipsCustomerAddressesData.md)
- [CountryJsonApiAllOfRelationshipsCustomerAddressesLinks](docs/Model/CountryJsonApiAllOfRelationshipsCustomerAddressesLinks.md)
- [CountryJsonApiAllOfRelationshipsOrderAddresses](docs/Model/CountryJsonApiAllOfRelationshipsOrderAddresses.md)
- [CountryJsonApiAllOfRelationshipsOrderAddressesData](docs/Model/CountryJsonApiAllOfRelationshipsOrderAddressesData.md)
- [CountryJsonApiAllOfRelationshipsOrderAddressesLinks](docs/Model/CountryJsonApiAllOfRelationshipsOrderAddressesLinks.md)
- [CountryJsonApiAllOfRelationshipsSalesChannelDefaultAssignments](docs/Model/CountryJsonApiAllOfRelationshipsSalesChannelDefaultAssignments.md)
- [CountryJsonApiAllOfRelationshipsSalesChannelDefaultAssignmentsData](docs/Model/CountryJsonApiAllOfRelationshipsSalesChannelDefaultAssignmentsData.md)
- [CountryJsonApiAllOfRelationshipsSalesChannelDefaultAssignmentsLinks](docs/Model/CountryJsonApiAllOfRelationshipsSalesChannelDefaultAssignmentsLinks.md)
- [CountryJsonApiAllOfRelationshipsSalesChannels](docs/Model/CountryJsonApiAllOfRelationshipsSalesChannels.md)
- [CountryJsonApiAllOfRelationshipsSalesChannelsData](docs/Model/CountryJsonApiAllOfRelationshipsSalesChannelsData.md)
- [CountryJsonApiAllOfRelationshipsSalesChannelsLinks](docs/Model/CountryJsonApiAllOfRelationshipsSalesChannelsLinks.md)
- [CountryJsonApiAllOfRelationshipsStates](docs/Model/CountryJsonApiAllOfRelationshipsStates.md)
- [CountryJsonApiAllOfRelationshipsStatesData](docs/Model/CountryJsonApiAllOfRelationshipsStatesData.md)
- [CountryJsonApiAllOfRelationshipsStatesLinks](docs/Model/CountryJsonApiAllOfRelationshipsStatesLinks.md)
- [CountryJsonApiAllOfRelationshipsTaxRules](docs/Model/CountryJsonApiAllOfRelationshipsTaxRules.md)
- [CountryJsonApiAllOfRelationshipsTaxRulesData](docs/Model/CountryJsonApiAllOfRelationshipsTaxRulesData.md)
- [CountryJsonApiAllOfRelationshipsTaxRulesLinks](docs/Model/CountryJsonApiAllOfRelationshipsTaxRulesLinks.md)
- [CountryState](docs/Model/CountryState.md)
- [CountryStateJsonApi](docs/Model/CountryStateJsonApi.md)
- [CountryStateJsonApiAllOf](docs/Model/CountryStateJsonApiAllOf.md)
- [CountryStateJsonApiAllOfRelationships](docs/Model/CountryStateJsonApiAllOfRelationships.md)
- [CountryStateJsonApiAllOfRelationshipsCountry](docs/Model/CountryStateJsonApiAllOfRelationshipsCountry.md)
- [CountryStateJsonApiAllOfRelationshipsCountryData](docs/Model/CountryStateJsonApiAllOfRelationshipsCountryData.md)
- [CountryStateJsonApiAllOfRelationshipsCountryLinks](docs/Model/CountryStateJsonApiAllOfRelationshipsCountryLinks.md)
- [CountryStateJsonApiAllOfRelationshipsCustomerAddresses](docs/Model/CountryStateJsonApiAllOfRelationshipsCustomerAddresses.md)
- [CountryStateJsonApiAllOfRelationshipsCustomerAddressesLinks](docs/Model/CountryStateJsonApiAllOfRelationshipsCustomerAddressesLinks.md)
- [CountryStateJsonApiAllOfRelationshipsOrderAddresses](docs/Model/CountryStateJsonApiAllOfRelationshipsOrderAddresses.md)
- [CountryStateJsonApiAllOfRelationshipsOrderAddressesLinks](docs/Model/CountryStateJsonApiAllOfRelationshipsOrderAddressesLinks.md)
- [Criteria](docs/Model/Criteria.md)
- [CriteriaAggregations](docs/Model/CriteriaAggregations.md)
- [CriteriaFilter](docs/Model/CriteriaFilter.md)
- [CriteriaSort](docs/Model/CriteriaSort.md)
- [Currency](docs/Model/Currency.md)
- [CurrencyCountryRounding](docs/Model/CurrencyCountryRounding.md)
- [CurrencyCountryRoundingJsonApi](docs/Model/CurrencyCountryRoundingJsonApi.md)
- [CurrencyCountryRoundingJsonApiAllOf](docs/Model/CurrencyCountryRoundingJsonApiAllOf.md)
- [CurrencyCountryRoundingJsonApiAllOfRelationships](docs/Model/CurrencyCountryRoundingJsonApiAllOfRelationships.md)
- [CurrencyCountryRoundingJsonApiAllOfRelationshipsCountry](docs/Model/CurrencyCountryRoundingJsonApiAllOfRelationshipsCountry.md)
- [CurrencyCountryRoundingJsonApiAllOfRelationshipsCountryLinks](docs/Model/CurrencyCountryRoundingJsonApiAllOfRelationshipsCountryLinks.md)
- [CurrencyCountryRoundingJsonApiAllOfRelationshipsCurrency](docs/Model/CurrencyCountryRoundingJsonApiAllOfRelationshipsCurrency.md)
- [CurrencyCountryRoundingJsonApiAllOfRelationshipsCurrencyData](docs/Model/CurrencyCountryRoundingJsonApiAllOfRelationshipsCurrencyData.md)
- [CurrencyCountryRoundingJsonApiAllOfRelationshipsCurrencyLinks](docs/Model/CurrencyCountryRoundingJsonApiAllOfRelationshipsCurrencyLinks.md)
- [CurrencyJsonApi](docs/Model/CurrencyJsonApi.md)
- [CurrencyJsonApiAllOf](docs/Model/CurrencyJsonApiAllOf.md)
- [CurrencyJsonApiAllOfItemRounding](docs/Model/CurrencyJsonApiAllOfItemRounding.md)
- [CurrencyJsonApiAllOfRelationships](docs/Model/CurrencyJsonApiAllOfRelationships.md)
- [CurrencyJsonApiAllOfRelationshipsCountryRoundings](docs/Model/CurrencyJsonApiAllOfRelationshipsCountryRoundings.md)
- [CurrencyJsonApiAllOfRelationshipsCountryRoundingsData](docs/Model/CurrencyJsonApiAllOfRelationshipsCountryRoundingsData.md)
- [CurrencyJsonApiAllOfRelationshipsCountryRoundingsLinks](docs/Model/CurrencyJsonApiAllOfRelationshipsCountryRoundingsLinks.md)
- [CurrencyJsonApiAllOfRelationshipsOrders](docs/Model/CurrencyJsonApiAllOfRelationshipsOrders.md)
- [CurrencyJsonApiAllOfRelationshipsOrdersData](docs/Model/CurrencyJsonApiAllOfRelationshipsOrdersData.md)
- [CurrencyJsonApiAllOfRelationshipsOrdersLinks](docs/Model/CurrencyJsonApiAllOfRelationshipsOrdersLinks.md)
- [CurrencyJsonApiAllOfRelationshipsProductExports](docs/Model/CurrencyJsonApiAllOfRelationshipsProductExports.md)
- [CurrencyJsonApiAllOfRelationshipsProductExportsData](docs/Model/CurrencyJsonApiAllOfRelationshipsProductExportsData.md)
- [CurrencyJsonApiAllOfRelationshipsProductExportsLinks](docs/Model/CurrencyJsonApiAllOfRelationshipsProductExportsLinks.md)
- [CurrencyJsonApiAllOfRelationshipsPromotionDiscountPrices](docs/Model/CurrencyJsonApiAllOfRelationshipsPromotionDiscountPrices.md)
- [CurrencyJsonApiAllOfRelationshipsPromotionDiscountPricesData](docs/Model/CurrencyJsonApiAllOfRelationshipsPromotionDiscountPricesData.md)
- [CurrencyJsonApiAllOfRelationshipsPromotionDiscountPricesLinks](docs/Model/CurrencyJsonApiAllOfRelationshipsPromotionDiscountPricesLinks.md)
- [CurrencyJsonApiAllOfRelationshipsSalesChannelDefaultAssignments](docs/Model/CurrencyJsonApiAllOfRelationshipsSalesChannelDefaultAssignments.md)
- [CurrencyJsonApiAllOfRelationshipsSalesChannelDefaultAssignmentsLinks](docs/Model/CurrencyJsonApiAllOfRelationshipsSalesChannelDefaultAssignmentsLinks.md)
- [CurrencyJsonApiAllOfRelationshipsSalesChannelDomains](docs/Model/CurrencyJsonApiAllOfRelationshipsSalesChannelDomains.md)
- [CurrencyJsonApiAllOfRelationshipsSalesChannelDomainsData](docs/Model/CurrencyJsonApiAllOfRelationshipsSalesChannelDomainsData.md)
- [CurrencyJsonApiAllOfRelationshipsSalesChannelDomainsLinks](docs/Model/CurrencyJsonApiAllOfRelationshipsSalesChannelDomainsLinks.md)
- [CurrencyJsonApiAllOfRelationshipsSalesChannels](docs/Model/CurrencyJsonApiAllOfRelationshipsSalesChannels.md)
- [CurrencyJsonApiAllOfRelationshipsSalesChannelsLinks](docs/Model/CurrencyJsonApiAllOfRelationshipsSalesChannelsLinks.md)
- [CustomEntity](docs/Model/CustomEntity.md)
- [CustomEntityJsonApi](docs/Model/CustomEntityJsonApi.md)
- [CustomEntityJsonApiAllOf](docs/Model/CustomEntityJsonApiAllOf.md)
- [CustomField](docs/Model/CustomField.md)
- [CustomFieldJsonApi](docs/Model/CustomFieldJsonApi.md)
- [CustomFieldJsonApiAllOf](docs/Model/CustomFieldJsonApiAllOf.md)
- [CustomFieldJsonApiAllOfRelationships](docs/Model/CustomFieldJsonApiAllOfRelationships.md)
- [CustomFieldJsonApiAllOfRelationshipsCustomFieldSet](docs/Model/CustomFieldJsonApiAllOfRelationshipsCustomFieldSet.md)
- [CustomFieldJsonApiAllOfRelationshipsCustomFieldSetData](docs/Model/CustomFieldJsonApiAllOfRelationshipsCustomFieldSetData.md)
- [CustomFieldJsonApiAllOfRelationshipsCustomFieldSetLinks](docs/Model/CustomFieldJsonApiAllOfRelationshipsCustomFieldSetLinks.md)
- [CustomFieldJsonApiAllOfRelationshipsProductSearchConfigFields](docs/Model/CustomFieldJsonApiAllOfRelationshipsProductSearchConfigFields.md)
- [CustomFieldJsonApiAllOfRelationshipsProductSearchConfigFieldsData](docs/Model/CustomFieldJsonApiAllOfRelationshipsProductSearchConfigFieldsData.md)
- [CustomFieldJsonApiAllOfRelationshipsProductSearchConfigFieldsLinks](docs/Model/CustomFieldJsonApiAllOfRelationshipsProductSearchConfigFieldsLinks.md)
- [CustomFieldSet](docs/Model/CustomFieldSet.md)
- [CustomFieldSetJsonApi](docs/Model/CustomFieldSetJsonApi.md)
- [CustomFieldSetJsonApiAllOf](docs/Model/CustomFieldSetJsonApiAllOf.md)
- [CustomFieldSetJsonApiAllOfRelationships](docs/Model/CustomFieldSetJsonApiAllOfRelationships.md)
- [CustomFieldSetJsonApiAllOfRelationshipsApp](docs/Model/CustomFieldSetJsonApiAllOfRelationshipsApp.md)
- [CustomFieldSetJsonApiAllOfRelationshipsAppLinks](docs/Model/CustomFieldSetJsonApiAllOfRelationshipsAppLinks.md)
- [CustomFieldSetJsonApiAllOfRelationshipsCustomFields](docs/Model/CustomFieldSetJsonApiAllOfRelationshipsCustomFields.md)
- [CustomFieldSetJsonApiAllOfRelationshipsCustomFieldsData](docs/Model/CustomFieldSetJsonApiAllOfRelationshipsCustomFieldsData.md)
- [CustomFieldSetJsonApiAllOfRelationshipsCustomFieldsLinks](docs/Model/CustomFieldSetJsonApiAllOfRelationshipsCustomFieldsLinks.md)
- [CustomFieldSetJsonApiAllOfRelationshipsProducts](docs/Model/CustomFieldSetJsonApiAllOfRelationshipsProducts.md)
- [CustomFieldSetJsonApiAllOfRelationshipsProductsLinks](docs/Model/CustomFieldSetJsonApiAllOfRelationshipsProductsLinks.md)
- [CustomFieldSetJsonApiAllOfRelationshipsRelations](docs/Model/CustomFieldSetJsonApiAllOfRelationshipsRelations.md)
- [CustomFieldSetJsonApiAllOfRelationshipsRelationsData](docs/Model/CustomFieldSetJsonApiAllOfRelationshipsRelationsData.md)
- [CustomFieldSetJsonApiAllOfRelationshipsRelationsLinks](docs/Model/CustomFieldSetJsonApiAllOfRelationshipsRelationsLinks.md)
- [CustomFieldSetRelation](docs/Model/CustomFieldSetRelation.md)
- [CustomFieldSetRelationJsonApi](docs/Model/CustomFieldSetRelationJsonApi.md)
- [CustomFieldSetRelationJsonApiAllOf](docs/Model/CustomFieldSetRelationJsonApiAllOf.md)
- [CustomFieldSetRelationJsonApiAllOfRelationships](docs/Model/CustomFieldSetRelationJsonApiAllOfRelationships.md)
- [CustomFieldSetRelationJsonApiAllOfRelationshipsCustomFieldSet](docs/Model/CustomFieldSetRelationJsonApiAllOfRelationshipsCustomFieldSet.md)
- [CustomFieldSetRelationJsonApiAllOfRelationshipsCustomFieldSetLinks](docs/Model/CustomFieldSetRelationJsonApiAllOfRelationshipsCustomFieldSetLinks.md)
- [Customer](docs/Model/Customer.md)
- [CustomerAddress](docs/Model/CustomerAddress.md)
- [CustomerAddressJsonApi](docs/Model/CustomerAddressJsonApi.md)
- [CustomerAddressJsonApiAllOf](docs/Model/CustomerAddressJsonApiAllOf.md)
- [CustomerAddressJsonApiAllOfRelationships](docs/Model/CustomerAddressJsonApiAllOfRelationships.md)
- [CustomerAddressJsonApiAllOfRelationshipsCountry](docs/Model/CustomerAddressJsonApiAllOfRelationshipsCountry.md)
- [CustomerAddressJsonApiAllOfRelationshipsCountryLinks](docs/Model/CustomerAddressJsonApiAllOfRelationshipsCountryLinks.md)
- [CustomerAddressJsonApiAllOfRelationshipsCountryState](docs/Model/CustomerAddressJsonApiAllOfRelationshipsCountryState.md)
- [CustomerAddressJsonApiAllOfRelationshipsCountryStateData](docs/Model/CustomerAddressJsonApiAllOfRelationshipsCountryStateData.md)
- [CustomerAddressJsonApiAllOfRelationshipsCountryStateLinks](docs/Model/CustomerAddressJsonApiAllOfRelationshipsCountryStateLinks.md)
- [CustomerAddressJsonApiAllOfRelationshipsCustomer](docs/Model/CustomerAddressJsonApiAllOfRelationshipsCustomer.md)
- [CustomerAddressJsonApiAllOfRelationshipsCustomerData](docs/Model/CustomerAddressJsonApiAllOfRelationshipsCustomerData.md)
- [CustomerAddressJsonApiAllOfRelationshipsCustomerLinks](docs/Model/CustomerAddressJsonApiAllOfRelationshipsCustomerLinks.md)
- [CustomerAddressJsonApiAllOfRelationshipsSalutation](docs/Model/CustomerAddressJsonApiAllOfRelationshipsSalutation.md)
- [CustomerAddressJsonApiAllOfRelationshipsSalutationLinks](docs/Model/CustomerAddressJsonApiAllOfRelationshipsSalutationLinks.md)
- [CustomerGroup](docs/Model/CustomerGroup.md)
- [CustomerGroupJsonApi](docs/Model/CustomerGroupJsonApi.md)
- [CustomerGroupJsonApiAllOf](docs/Model/CustomerGroupJsonApiAllOf.md)
- [CustomerGroupJsonApiAllOfRelationships](docs/Model/CustomerGroupJsonApiAllOfRelationships.md)
- [CustomerGroupJsonApiAllOfRelationshipsCustomers](docs/Model/CustomerGroupJsonApiAllOfRelationshipsCustomers.md)
- [CustomerGroupJsonApiAllOfRelationshipsCustomersData](docs/Model/CustomerGroupJsonApiAllOfRelationshipsCustomersData.md)
- [CustomerGroupJsonApiAllOfRelationshipsCustomersLinks](docs/Model/CustomerGroupJsonApiAllOfRelationshipsCustomersLinks.md)
- [CustomerGroupJsonApiAllOfRelationshipsRegistrationSalesChannels](docs/Model/CustomerGroupJsonApiAllOfRelationshipsRegistrationSalesChannels.md)
- [CustomerGroupJsonApiAllOfRelationshipsRegistrationSalesChannelsData](docs/Model/CustomerGroupJsonApiAllOfRelationshipsRegistrationSalesChannelsData.md)
- [CustomerGroupJsonApiAllOfRelationshipsRegistrationSalesChannelsLinks](docs/Model/CustomerGroupJsonApiAllOfRelationshipsRegistrationSalesChannelsLinks.md)
- [CustomerGroupJsonApiAllOfRelationshipsSalesChannels](docs/Model/CustomerGroupJsonApiAllOfRelationshipsSalesChannels.md)
- [CustomerGroupJsonApiAllOfRelationshipsSalesChannelsLinks](docs/Model/CustomerGroupJsonApiAllOfRelationshipsSalesChannelsLinks.md)
- [CustomerGroupRegistrationSalesChannels](docs/Model/CustomerGroupRegistrationSalesChannels.md)
- [CustomerJsonApi](docs/Model/CustomerJsonApi.md)
- [CustomerJsonApiAllOf](docs/Model/CustomerJsonApiAllOf.md)
- [CustomerJsonApiAllOfRelationships](docs/Model/CustomerJsonApiAllOfRelationships.md)
- [CustomerJsonApiAllOfRelationshipsAddresses](docs/Model/CustomerJsonApiAllOfRelationshipsAddresses.md)
- [CustomerJsonApiAllOfRelationshipsAddressesData](docs/Model/CustomerJsonApiAllOfRelationshipsAddressesData.md)
- [CustomerJsonApiAllOfRelationshipsAddressesLinks](docs/Model/CustomerJsonApiAllOfRelationshipsAddressesLinks.md)
- [CustomerJsonApiAllOfRelationshipsBoundSalesChannel](docs/Model/CustomerJsonApiAllOfRelationshipsBoundSalesChannel.md)
- [CustomerJsonApiAllOfRelationshipsBoundSalesChannelData](docs/Model/CustomerJsonApiAllOfRelationshipsBoundSalesChannelData.md)
- [CustomerJsonApiAllOfRelationshipsBoundSalesChannelLinks](docs/Model/CustomerJsonApiAllOfRelationshipsBoundSalesChannelLinks.md)
- [CustomerJsonApiAllOfRelationshipsCreatedBy](docs/Model/CustomerJsonApiAllOfRelationshipsCreatedBy.md)
- [CustomerJsonApiAllOfRelationshipsCreatedByData](docs/Model/CustomerJsonApiAllOfRelationshipsCreatedByData.md)
- [CustomerJsonApiAllOfRelationshipsCreatedByLinks](docs/Model/CustomerJsonApiAllOfRelationshipsCreatedByLinks.md)
- [CustomerJsonApiAllOfRelationshipsDefaultBillingAddress](docs/Model/CustomerJsonApiAllOfRelationshipsDefaultBillingAddress.md)
- [CustomerJsonApiAllOfRelationshipsDefaultBillingAddressData](docs/Model/CustomerJsonApiAllOfRelationshipsDefaultBillingAddressData.md)
- [CustomerJsonApiAllOfRelationshipsDefaultBillingAddressLinks](docs/Model/CustomerJsonApiAllOfRelationshipsDefaultBillingAddressLinks.md)
- [CustomerJsonApiAllOfRelationshipsDefaultPaymentMethod](docs/Model/CustomerJsonApiAllOfRelationshipsDefaultPaymentMethod.md)
- [CustomerJsonApiAllOfRelationshipsDefaultPaymentMethodData](docs/Model/CustomerJsonApiAllOfRelationshipsDefaultPaymentMethodData.md)
- [CustomerJsonApiAllOfRelationshipsDefaultPaymentMethodLinks](docs/Model/CustomerJsonApiAllOfRelationshipsDefaultPaymentMethodLinks.md)
- [CustomerJsonApiAllOfRelationshipsDefaultShippingAddress](docs/Model/CustomerJsonApiAllOfRelationshipsDefaultShippingAddress.md)
- [CustomerJsonApiAllOfRelationshipsDefaultShippingAddressData](docs/Model/CustomerJsonApiAllOfRelationshipsDefaultShippingAddressData.md)
- [CustomerJsonApiAllOfRelationshipsDefaultShippingAddressLinks](docs/Model/CustomerJsonApiAllOfRelationshipsDefaultShippingAddressLinks.md)
- [CustomerJsonApiAllOfRelationshipsGroup](docs/Model/CustomerJsonApiAllOfRelationshipsGroup.md)
- [CustomerJsonApiAllOfRelationshipsGroupData](docs/Model/CustomerJsonApiAllOfRelationshipsGroupData.md)
- [CustomerJsonApiAllOfRelationshipsGroupLinks](docs/Model/CustomerJsonApiAllOfRelationshipsGroupLinks.md)
- [CustomerJsonApiAllOfRelationshipsLanguage](docs/Model/CustomerJsonApiAllOfRelationshipsLanguage.md)
- [CustomerJsonApiAllOfRelationshipsLanguageData](docs/Model/CustomerJsonApiAllOfRelationshipsLanguageData.md)
- [CustomerJsonApiAllOfRelationshipsLanguageLinks](docs/Model/CustomerJsonApiAllOfRelationshipsLanguageLinks.md)
- [CustomerJsonApiAllOfRelationshipsLastPaymentMethod](docs/Model/CustomerJsonApiAllOfRelationshipsLastPaymentMethod.md)
- [CustomerJsonApiAllOfRelationshipsLastPaymentMethodData](docs/Model/CustomerJsonApiAllOfRelationshipsLastPaymentMethodData.md)
- [CustomerJsonApiAllOfRelationshipsLastPaymentMethodLinks](docs/Model/CustomerJsonApiAllOfRelationshipsLastPaymentMethodLinks.md)
- [CustomerJsonApiAllOfRelationshipsOrderCustomers](docs/Model/CustomerJsonApiAllOfRelationshipsOrderCustomers.md)
- [CustomerJsonApiAllOfRelationshipsOrderCustomersData](docs/Model/CustomerJsonApiAllOfRelationshipsOrderCustomersData.md)
- [CustomerJsonApiAllOfRelationshipsOrderCustomersLinks](docs/Model/CustomerJsonApiAllOfRelationshipsOrderCustomersLinks.md)
- [CustomerJsonApiAllOfRelationshipsProductReviews](docs/Model/CustomerJsonApiAllOfRelationshipsProductReviews.md)
- [CustomerJsonApiAllOfRelationshipsProductReviewsData](docs/Model/CustomerJsonApiAllOfRelationshipsProductReviewsData.md)
- [CustomerJsonApiAllOfRelationshipsProductReviewsLinks](docs/Model/CustomerJsonApiAllOfRelationshipsProductReviewsLinks.md)
- [CustomerJsonApiAllOfRelationshipsPromotions](docs/Model/CustomerJsonApiAllOfRelationshipsPromotions.md)
- [CustomerJsonApiAllOfRelationshipsPromotionsData](docs/Model/CustomerJsonApiAllOfRelationshipsPromotionsData.md)
- [CustomerJsonApiAllOfRelationshipsPromotionsLinks](docs/Model/CustomerJsonApiAllOfRelationshipsPromotionsLinks.md)
- [CustomerJsonApiAllOfRelationshipsRecoveryCustomer](docs/Model/CustomerJsonApiAllOfRelationshipsRecoveryCustomer.md)
- [CustomerJsonApiAllOfRelationshipsRecoveryCustomerData](docs/Model/CustomerJsonApiAllOfRelationshipsRecoveryCustomerData.md)
- [CustomerJsonApiAllOfRelationshipsRecoveryCustomerLinks](docs/Model/CustomerJsonApiAllOfRelationshipsRecoveryCustomerLinks.md)
- [CustomerJsonApiAllOfRelationshipsRequestedGroup](docs/Model/CustomerJsonApiAllOfRelationshipsRequestedGroup.md)
- [CustomerJsonApiAllOfRelationshipsRequestedGroupData](docs/Model/CustomerJsonApiAllOfRelationshipsRequestedGroupData.md)
- [CustomerJsonApiAllOfRelationshipsRequestedGroupLinks](docs/Model/CustomerJsonApiAllOfRelationshipsRequestedGroupLinks.md)
- [CustomerJsonApiAllOfRelationshipsSalesChannel](docs/Model/CustomerJsonApiAllOfRelationshipsSalesChannel.md)
- [CustomerJsonApiAllOfRelationshipsSalesChannelData](docs/Model/CustomerJsonApiAllOfRelationshipsSalesChannelData.md)
- [CustomerJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/CustomerJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [CustomerJsonApiAllOfRelationshipsSalutation](docs/Model/CustomerJsonApiAllOfRelationshipsSalutation.md)
- [CustomerJsonApiAllOfRelationshipsSalutationData](docs/Model/CustomerJsonApiAllOfRelationshipsSalutationData.md)
- [CustomerJsonApiAllOfRelationshipsSalutationLinks](docs/Model/CustomerJsonApiAllOfRelationshipsSalutationLinks.md)
- [CustomerJsonApiAllOfRelationshipsTags](docs/Model/CustomerJsonApiAllOfRelationshipsTags.md)
- [CustomerJsonApiAllOfRelationshipsTagsLinks](docs/Model/CustomerJsonApiAllOfRelationshipsTagsLinks.md)
- [CustomerJsonApiAllOfRelationshipsUpdatedBy](docs/Model/CustomerJsonApiAllOfRelationshipsUpdatedBy.md)
- [CustomerJsonApiAllOfRelationshipsUpdatedByData](docs/Model/CustomerJsonApiAllOfRelationshipsUpdatedByData.md)
- [CustomerJsonApiAllOfRelationshipsUpdatedByLinks](docs/Model/CustomerJsonApiAllOfRelationshipsUpdatedByLinks.md)
- [CustomerJsonApiAllOfRelationshipsWishlists](docs/Model/CustomerJsonApiAllOfRelationshipsWishlists.md)
- [CustomerJsonApiAllOfRelationshipsWishlistsData](docs/Model/CustomerJsonApiAllOfRelationshipsWishlistsData.md)
- [CustomerJsonApiAllOfRelationshipsWishlistsLinks](docs/Model/CustomerJsonApiAllOfRelationshipsWishlistsLinks.md)
- [CustomerRecovery](docs/Model/CustomerRecovery.md)
- [CustomerRecoveryJsonApi](docs/Model/CustomerRecoveryJsonApi.md)
- [CustomerRecoveryJsonApiAllOf](docs/Model/CustomerRecoveryJsonApiAllOf.md)
- [CustomerRecoveryJsonApiAllOfRelationships](docs/Model/CustomerRecoveryJsonApiAllOfRelationships.md)
- [CustomerRecoveryJsonApiAllOfRelationshipsCustomer](docs/Model/CustomerRecoveryJsonApiAllOfRelationshipsCustomer.md)
- [CustomerRecoveryJsonApiAllOfRelationshipsCustomerLinks](docs/Model/CustomerRecoveryJsonApiAllOfRelationshipsCustomerLinks.md)
- [CustomerTag](docs/Model/CustomerTag.md)
- [CustomerWishlist](docs/Model/CustomerWishlist.md)
- [CustomerWishlistJsonApi](docs/Model/CustomerWishlistJsonApi.md)
- [CustomerWishlistJsonApiAllOf](docs/Model/CustomerWishlistJsonApiAllOf.md)
- [CustomerWishlistJsonApiAllOfRelationships](docs/Model/CustomerWishlistJsonApiAllOfRelationships.md)
- [CustomerWishlistJsonApiAllOfRelationshipsCustomer](docs/Model/CustomerWishlistJsonApiAllOfRelationshipsCustomer.md)
- [CustomerWishlistJsonApiAllOfRelationshipsCustomerLinks](docs/Model/CustomerWishlistJsonApiAllOfRelationshipsCustomerLinks.md)
- [CustomerWishlistJsonApiAllOfRelationshipsProducts](docs/Model/CustomerWishlistJsonApiAllOfRelationshipsProducts.md)
- [CustomerWishlistJsonApiAllOfRelationshipsProductsData](docs/Model/CustomerWishlistJsonApiAllOfRelationshipsProductsData.md)
- [CustomerWishlistJsonApiAllOfRelationshipsProductsLinks](docs/Model/CustomerWishlistJsonApiAllOfRelationshipsProductsLinks.md)
- [CustomerWishlistJsonApiAllOfRelationshipsSalesChannel](docs/Model/CustomerWishlistJsonApiAllOfRelationshipsSalesChannel.md)
- [CustomerWishlistJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/CustomerWishlistJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [CustomerWishlistProduct](docs/Model/CustomerWishlistProduct.md)
- [CustomerWishlistProductJsonApi](docs/Model/CustomerWishlistProductJsonApi.md)
- [CustomerWishlistProductJsonApiAllOf](docs/Model/CustomerWishlistProductJsonApiAllOf.md)
- [CustomerWishlistProductJsonApiAllOfRelationships](docs/Model/CustomerWishlistProductJsonApiAllOfRelationships.md)
- [CustomerWishlistProductJsonApiAllOfRelationshipsProduct](docs/Model/CustomerWishlistProductJsonApiAllOfRelationshipsProduct.md)
- [CustomerWishlistProductJsonApiAllOfRelationshipsProductData](docs/Model/CustomerWishlistProductJsonApiAllOfRelationshipsProductData.md)
- [CustomerWishlistProductJsonApiAllOfRelationshipsProductLinks](docs/Model/CustomerWishlistProductJsonApiAllOfRelationshipsProductLinks.md)
- [CustomerWishlistProductJsonApiAllOfRelationshipsWishlist](docs/Model/CustomerWishlistProductJsonApiAllOfRelationshipsWishlist.md)
- [CustomerWishlistProductJsonApiAllOfRelationshipsWishlistData](docs/Model/CustomerWishlistProductJsonApiAllOfRelationshipsWishlistData.md)
- [CustomerWishlistProductJsonApiAllOfRelationshipsWishlistLinks](docs/Model/CustomerWishlistProductJsonApiAllOfRelationshipsWishlistLinks.md)
- [Data](docs/Model/Data.md)
- [DeliveryTime](docs/Model/DeliveryTime.md)
- [DeliveryTimeJsonApi](docs/Model/DeliveryTimeJsonApi.md)
- [DeliveryTimeJsonApiAllOf](docs/Model/DeliveryTimeJsonApiAllOf.md)
- [DeliveryTimeJsonApiAllOfRelationships](docs/Model/DeliveryTimeJsonApiAllOfRelationships.md)
- [DeliveryTimeJsonApiAllOfRelationshipsProducts](docs/Model/DeliveryTimeJsonApiAllOfRelationshipsProducts.md)
- [DeliveryTimeJsonApiAllOfRelationshipsProductsLinks](docs/Model/DeliveryTimeJsonApiAllOfRelationshipsProductsLinks.md)
- [DeliveryTimeJsonApiAllOfRelationshipsShippingMethods](docs/Model/DeliveryTimeJsonApiAllOfRelationshipsShippingMethods.md)
- [DeliveryTimeJsonApiAllOfRelationshipsShippingMethodsData](docs/Model/DeliveryTimeJsonApiAllOfRelationshipsShippingMethodsData.md)
- [DeliveryTimeJsonApiAllOfRelationshipsShippingMethodsLinks](docs/Model/DeliveryTimeJsonApiAllOfRelationshipsShippingMethodsLinks.md)
- [Document](docs/Model/Document.md)
- [DocumentBaseConfig](docs/Model/DocumentBaseConfig.md)
- [DocumentBaseConfigJsonApi](docs/Model/DocumentBaseConfigJsonApi.md)
- [DocumentBaseConfigJsonApiAllOf](docs/Model/DocumentBaseConfigJsonApiAllOf.md)
- [DocumentBaseConfigJsonApiAllOfRelationships](docs/Model/DocumentBaseConfigJsonApiAllOfRelationships.md)
- [DocumentBaseConfigJsonApiAllOfRelationshipsDocumentType](docs/Model/DocumentBaseConfigJsonApiAllOfRelationshipsDocumentType.md)
- [DocumentBaseConfigJsonApiAllOfRelationshipsDocumentTypeLinks](docs/Model/DocumentBaseConfigJsonApiAllOfRelationshipsDocumentTypeLinks.md)
- [DocumentBaseConfigJsonApiAllOfRelationshipsLogo](docs/Model/DocumentBaseConfigJsonApiAllOfRelationshipsLogo.md)
- [DocumentBaseConfigJsonApiAllOfRelationshipsLogoData](docs/Model/DocumentBaseConfigJsonApiAllOfRelationshipsLogoData.md)
- [DocumentBaseConfigJsonApiAllOfRelationshipsLogoLinks](docs/Model/DocumentBaseConfigJsonApiAllOfRelationshipsLogoLinks.md)
- [DocumentBaseConfigJsonApiAllOfRelationshipsSalesChannels](docs/Model/DocumentBaseConfigJsonApiAllOfRelationshipsSalesChannels.md)
- [DocumentBaseConfigJsonApiAllOfRelationshipsSalesChannelsData](docs/Model/DocumentBaseConfigJsonApiAllOfRelationshipsSalesChannelsData.md)
- [DocumentBaseConfigJsonApiAllOfRelationshipsSalesChannelsLinks](docs/Model/DocumentBaseConfigJsonApiAllOfRelationshipsSalesChannelsLinks.md)
- [DocumentBaseConfigSalesChannel](docs/Model/DocumentBaseConfigSalesChannel.md)
- [DocumentBaseConfigSalesChannelJsonApi](docs/Model/DocumentBaseConfigSalesChannelJsonApi.md)
- [DocumentBaseConfigSalesChannelJsonApiAllOf](docs/Model/DocumentBaseConfigSalesChannelJsonApiAllOf.md)
- [DocumentBaseConfigSalesChannelJsonApiAllOfRelationships](docs/Model/DocumentBaseConfigSalesChannelJsonApiAllOfRelationships.md)
- [DocumentBaseConfigSalesChannelJsonApiAllOfRelationshipsDocumentBaseConfig](docs/Model/DocumentBaseConfigSalesChannelJsonApiAllOfRelationshipsDocumentBaseConfig.md)
- [DocumentBaseConfigSalesChannelJsonApiAllOfRelationshipsDocumentBaseConfigData](docs/Model/DocumentBaseConfigSalesChannelJsonApiAllOfRelationshipsDocumentBaseConfigData.md)
- [DocumentBaseConfigSalesChannelJsonApiAllOfRelationshipsDocumentBaseConfigLinks](docs/Model/DocumentBaseConfigSalesChannelJsonApiAllOfRelationshipsDocumentBaseConfigLinks.md)
- [DocumentBaseConfigSalesChannelJsonApiAllOfRelationshipsDocumentType](docs/Model/DocumentBaseConfigSalesChannelJsonApiAllOfRelationshipsDocumentType.md)
- [DocumentBaseConfigSalesChannelJsonApiAllOfRelationshipsDocumentTypeLinks](docs/Model/DocumentBaseConfigSalesChannelJsonApiAllOfRelationshipsDocumentTypeLinks.md)
- [DocumentBaseConfigSalesChannelJsonApiAllOfRelationshipsSalesChannel](docs/Model/DocumentBaseConfigSalesChannelJsonApiAllOfRelationshipsSalesChannel.md)
- [DocumentBaseConfigSalesChannelJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/DocumentBaseConfigSalesChannelJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [DocumentJsonApi](docs/Model/DocumentJsonApi.md)
- [DocumentJsonApiAllOf](docs/Model/DocumentJsonApiAllOf.md)
- [DocumentJsonApiAllOfRelationships](docs/Model/DocumentJsonApiAllOfRelationships.md)
- [DocumentJsonApiAllOfRelationshipsDependentDocuments](docs/Model/DocumentJsonApiAllOfRelationshipsDependentDocuments.md)
- [DocumentJsonApiAllOfRelationshipsDependentDocumentsData](docs/Model/DocumentJsonApiAllOfRelationshipsDependentDocumentsData.md)
- [DocumentJsonApiAllOfRelationshipsDependentDocumentsLinks](docs/Model/DocumentJsonApiAllOfRelationshipsDependentDocumentsLinks.md)
- [DocumentJsonApiAllOfRelationshipsDocumentMediaFile](docs/Model/DocumentJsonApiAllOfRelationshipsDocumentMediaFile.md)
- [DocumentJsonApiAllOfRelationshipsDocumentMediaFileData](docs/Model/DocumentJsonApiAllOfRelationshipsDocumentMediaFileData.md)
- [DocumentJsonApiAllOfRelationshipsDocumentMediaFileLinks](docs/Model/DocumentJsonApiAllOfRelationshipsDocumentMediaFileLinks.md)
- [DocumentJsonApiAllOfRelationshipsDocumentType](docs/Model/DocumentJsonApiAllOfRelationshipsDocumentType.md)
- [DocumentJsonApiAllOfRelationshipsDocumentTypeData](docs/Model/DocumentJsonApiAllOfRelationshipsDocumentTypeData.md)
- [DocumentJsonApiAllOfRelationshipsDocumentTypeLinks](docs/Model/DocumentJsonApiAllOfRelationshipsDocumentTypeLinks.md)
- [DocumentJsonApiAllOfRelationshipsOrder](docs/Model/DocumentJsonApiAllOfRelationshipsOrder.md)
- [DocumentJsonApiAllOfRelationshipsOrderData](docs/Model/DocumentJsonApiAllOfRelationshipsOrderData.md)
- [DocumentJsonApiAllOfRelationshipsOrderLinks](docs/Model/DocumentJsonApiAllOfRelationshipsOrderLinks.md)
- [DocumentJsonApiAllOfRelationshipsReferencedDocument](docs/Model/DocumentJsonApiAllOfRelationshipsReferencedDocument.md)
- [DocumentJsonApiAllOfRelationshipsReferencedDocumentData](docs/Model/DocumentJsonApiAllOfRelationshipsReferencedDocumentData.md)
- [DocumentJsonApiAllOfRelationshipsReferencedDocumentLinks](docs/Model/DocumentJsonApiAllOfRelationshipsReferencedDocumentLinks.md)
- [DocumentType](docs/Model/DocumentType.md)
- [DocumentTypeJsonApi](docs/Model/DocumentTypeJsonApi.md)
- [DocumentTypeJsonApiAllOf](docs/Model/DocumentTypeJsonApiAllOf.md)
- [DocumentTypeJsonApiAllOfRelationships](docs/Model/DocumentTypeJsonApiAllOfRelationships.md)
- [DocumentTypeJsonApiAllOfRelationshipsDocumentBaseConfigSalesChannels](docs/Model/DocumentTypeJsonApiAllOfRelationshipsDocumentBaseConfigSalesChannels.md)
- [DocumentTypeJsonApiAllOfRelationshipsDocumentBaseConfigSalesChannelsData](docs/Model/DocumentTypeJsonApiAllOfRelationshipsDocumentBaseConfigSalesChannelsData.md)
- [DocumentTypeJsonApiAllOfRelationshipsDocumentBaseConfigSalesChannelsLinks](docs/Model/DocumentTypeJsonApiAllOfRelationshipsDocumentBaseConfigSalesChannelsLinks.md)
- [DocumentTypeJsonApiAllOfRelationshipsDocumentBaseConfigs](docs/Model/DocumentTypeJsonApiAllOfRelationshipsDocumentBaseConfigs.md)
- [DocumentTypeJsonApiAllOfRelationshipsDocumentBaseConfigsData](docs/Model/DocumentTypeJsonApiAllOfRelationshipsDocumentBaseConfigsData.md)
- [DocumentTypeJsonApiAllOfRelationshipsDocumentBaseConfigsLinks](docs/Model/DocumentTypeJsonApiAllOfRelationshipsDocumentBaseConfigsLinks.md)
- [DocumentTypeJsonApiAllOfRelationshipsDocuments](docs/Model/DocumentTypeJsonApiAllOfRelationshipsDocuments.md)
- [DocumentTypeJsonApiAllOfRelationshipsDocumentsData](docs/Model/DocumentTypeJsonApiAllOfRelationshipsDocumentsData.md)
- [DocumentTypeJsonApiAllOfRelationshipsDocumentsLinks](docs/Model/DocumentTypeJsonApiAllOfRelationshipsDocumentsLinks.md)
- [Error](docs/Model/Error.md)
- [ErrorSource](docs/Model/ErrorSource.md)
- [Failure](docs/Model/Failure.md)
- [Flow](docs/Model/Flow.md)
- [FlowJsonApi](docs/Model/FlowJsonApi.md)
- [FlowJsonApiAllOf](docs/Model/FlowJsonApiAllOf.md)
- [FlowJsonApiAllOfRelationships](docs/Model/FlowJsonApiAllOfRelationships.md)
- [FlowJsonApiAllOfRelationshipsAppFlowEvent](docs/Model/FlowJsonApiAllOfRelationshipsAppFlowEvent.md)
- [FlowJsonApiAllOfRelationshipsAppFlowEventData](docs/Model/FlowJsonApiAllOfRelationshipsAppFlowEventData.md)
- [FlowJsonApiAllOfRelationshipsAppFlowEventLinks](docs/Model/FlowJsonApiAllOfRelationshipsAppFlowEventLinks.md)
- [FlowJsonApiAllOfRelationshipsSequences](docs/Model/FlowJsonApiAllOfRelationshipsSequences.md)
- [FlowJsonApiAllOfRelationshipsSequencesData](docs/Model/FlowJsonApiAllOfRelationshipsSequencesData.md)
- [FlowJsonApiAllOfRelationshipsSequencesLinks](docs/Model/FlowJsonApiAllOfRelationshipsSequencesLinks.md)
- [FlowSequence](docs/Model/FlowSequence.md)
- [FlowSequenceJsonApi](docs/Model/FlowSequenceJsonApi.md)
- [FlowSequenceJsonApiAllOf](docs/Model/FlowSequenceJsonApiAllOf.md)
- [FlowSequenceJsonApiAllOfRelationships](docs/Model/FlowSequenceJsonApiAllOfRelationships.md)
- [FlowSequenceJsonApiAllOfRelationshipsAppFlowAction](docs/Model/FlowSequenceJsonApiAllOfRelationshipsAppFlowAction.md)
- [FlowSequenceJsonApiAllOfRelationshipsAppFlowActionData](docs/Model/FlowSequenceJsonApiAllOfRelationshipsAppFlowActionData.md)
- [FlowSequenceJsonApiAllOfRelationshipsAppFlowActionLinks](docs/Model/FlowSequenceJsonApiAllOfRelationshipsAppFlowActionLinks.md)
- [FlowSequenceJsonApiAllOfRelationshipsChildren](docs/Model/FlowSequenceJsonApiAllOfRelationshipsChildren.md)
- [FlowSequenceJsonApiAllOfRelationshipsChildrenData](docs/Model/FlowSequenceJsonApiAllOfRelationshipsChildrenData.md)
- [FlowSequenceJsonApiAllOfRelationshipsChildrenLinks](docs/Model/FlowSequenceJsonApiAllOfRelationshipsChildrenLinks.md)
- [FlowSequenceJsonApiAllOfRelationshipsFlow](docs/Model/FlowSequenceJsonApiAllOfRelationshipsFlow.md)
- [FlowSequenceJsonApiAllOfRelationshipsFlowData](docs/Model/FlowSequenceJsonApiAllOfRelationshipsFlowData.md)
- [FlowSequenceJsonApiAllOfRelationshipsFlowLinks](docs/Model/FlowSequenceJsonApiAllOfRelationshipsFlowLinks.md)
- [FlowSequenceJsonApiAllOfRelationshipsParent](docs/Model/FlowSequenceJsonApiAllOfRelationshipsParent.md)
- [FlowSequenceJsonApiAllOfRelationshipsParentData](docs/Model/FlowSequenceJsonApiAllOfRelationshipsParentData.md)
- [FlowSequenceJsonApiAllOfRelationshipsParentLinks](docs/Model/FlowSequenceJsonApiAllOfRelationshipsParentLinks.md)
- [FlowSequenceJsonApiAllOfRelationshipsRule](docs/Model/FlowSequenceJsonApiAllOfRelationshipsRule.md)
- [FlowSequenceJsonApiAllOfRelationshipsRuleData](docs/Model/FlowSequenceJsonApiAllOfRelationshipsRuleData.md)
- [FlowSequenceJsonApiAllOfRelationshipsRuleLinks](docs/Model/FlowSequenceJsonApiAllOfRelationshipsRuleLinks.md)
- [FlowTemplate](docs/Model/FlowTemplate.md)
- [FlowTemplateJsonApi](docs/Model/FlowTemplateJsonApi.md)
- [FlowTemplateJsonApiAllOf](docs/Model/FlowTemplateJsonApiAllOf.md)
- [ImportExportFile](docs/Model/ImportExportFile.md)
- [ImportExportFileJsonApi](docs/Model/ImportExportFileJsonApi.md)
- [ImportExportFileJsonApiAllOf](docs/Model/ImportExportFileJsonApiAllOf.md)
- [ImportExportFileJsonApiAllOfRelationships](docs/Model/ImportExportFileJsonApiAllOfRelationships.md)
- [ImportExportFileJsonApiAllOfRelationshipsLog](docs/Model/ImportExportFileJsonApiAllOfRelationshipsLog.md)
- [ImportExportFileJsonApiAllOfRelationshipsLogData](docs/Model/ImportExportFileJsonApiAllOfRelationshipsLogData.md)
- [ImportExportFileJsonApiAllOfRelationshipsLogLinks](docs/Model/ImportExportFileJsonApiAllOfRelationshipsLogLinks.md)
- [ImportExportLog](docs/Model/ImportExportLog.md)
- [ImportExportLogJsonApi](docs/Model/ImportExportLogJsonApi.md)
- [ImportExportLogJsonApiAllOf](docs/Model/ImportExportLogJsonApiAllOf.md)
- [ImportExportLogJsonApiAllOfRelationships](docs/Model/ImportExportLogJsonApiAllOfRelationships.md)
- [ImportExportLogJsonApiAllOfRelationshipsFailedImportLog](docs/Model/ImportExportLogJsonApiAllOfRelationshipsFailedImportLog.md)
- [ImportExportLogJsonApiAllOfRelationshipsFailedImportLogData](docs/Model/ImportExportLogJsonApiAllOfRelationshipsFailedImportLogData.md)
- [ImportExportLogJsonApiAllOfRelationshipsFailedImportLogLinks](docs/Model/ImportExportLogJsonApiAllOfRelationshipsFailedImportLogLinks.md)
- [ImportExportLogJsonApiAllOfRelationshipsFile](docs/Model/ImportExportLogJsonApiAllOfRelationshipsFile.md)
- [ImportExportLogJsonApiAllOfRelationshipsFileData](docs/Model/ImportExportLogJsonApiAllOfRelationshipsFileData.md)
- [ImportExportLogJsonApiAllOfRelationshipsFileLinks](docs/Model/ImportExportLogJsonApiAllOfRelationshipsFileLinks.md)
- [ImportExportLogJsonApiAllOfRelationshipsInvalidRecordsLog](docs/Model/ImportExportLogJsonApiAllOfRelationshipsInvalidRecordsLog.md)
- [ImportExportLogJsonApiAllOfRelationshipsInvalidRecordsLogData](docs/Model/ImportExportLogJsonApiAllOfRelationshipsInvalidRecordsLogData.md)
- [ImportExportLogJsonApiAllOfRelationshipsInvalidRecordsLogLinks](docs/Model/ImportExportLogJsonApiAllOfRelationshipsInvalidRecordsLogLinks.md)
- [ImportExportLogJsonApiAllOfRelationshipsProfile](docs/Model/ImportExportLogJsonApiAllOfRelationshipsProfile.md)
- [ImportExportLogJsonApiAllOfRelationshipsProfileData](docs/Model/ImportExportLogJsonApiAllOfRelationshipsProfileData.md)
- [ImportExportLogJsonApiAllOfRelationshipsProfileLinks](docs/Model/ImportExportLogJsonApiAllOfRelationshipsProfileLinks.md)
- [ImportExportLogJsonApiAllOfRelationshipsUser](docs/Model/ImportExportLogJsonApiAllOfRelationshipsUser.md)
- [ImportExportLogJsonApiAllOfRelationshipsUserData](docs/Model/ImportExportLogJsonApiAllOfRelationshipsUserData.md)
- [ImportExportLogJsonApiAllOfRelationshipsUserLinks](docs/Model/ImportExportLogJsonApiAllOfRelationshipsUserLinks.md)
- [ImportExportProfile](docs/Model/ImportExportProfile.md)
- [ImportExportProfileJsonApi](docs/Model/ImportExportProfileJsonApi.md)
- [ImportExportProfileJsonApiAllOf](docs/Model/ImportExportProfileJsonApiAllOf.md)
- [ImportExportProfileJsonApiAllOfRelationships](docs/Model/ImportExportProfileJsonApiAllOfRelationships.md)
- [ImportExportProfileJsonApiAllOfRelationshipsImportExportLogs](docs/Model/ImportExportProfileJsonApiAllOfRelationshipsImportExportLogs.md)
- [ImportExportProfileJsonApiAllOfRelationshipsImportExportLogsData](docs/Model/ImportExportProfileJsonApiAllOfRelationshipsImportExportLogsData.md)
- [ImportExportProfileJsonApiAllOfRelationshipsImportExportLogsLinks](docs/Model/ImportExportProfileJsonApiAllOfRelationshipsImportExportLogsLinks.md)
- [Info](docs/Model/Info.md)
- [InfoConfigResponse](docs/Model/InfoConfigResponse.md)
- [InfoConfigResponseAdminWorker](docs/Model/InfoConfigResponseAdminWorker.md)
- [InfoConfigResponseBundles](docs/Model/InfoConfigResponseBundles.md)
- [InfoConfigResponseSettings](docs/Model/InfoConfigResponseSettings.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject10](docs/Model/InlineObject10.md)
- [InlineObject100](docs/Model/InlineObject100.md)
- [InlineObject101](docs/Model/InlineObject101.md)
- [InlineObject102](docs/Model/InlineObject102.md)
- [InlineObject103](docs/Model/InlineObject103.md)
- [InlineObject104](docs/Model/InlineObject104.md)
- [InlineObject105](docs/Model/InlineObject105.md)
- [InlineObject106](docs/Model/InlineObject106.md)
- [InlineObject107](docs/Model/InlineObject107.md)
- [InlineObject108](docs/Model/InlineObject108.md)
- [InlineObject109](docs/Model/InlineObject109.md)
- [InlineObject11](docs/Model/InlineObject11.md)
- [InlineObject110](docs/Model/InlineObject110.md)
- [InlineObject111](docs/Model/InlineObject111.md)
- [InlineObject112](docs/Model/InlineObject112.md)
- [InlineObject113](docs/Model/InlineObject113.md)
- [InlineObject114](docs/Model/InlineObject114.md)
- [InlineObject115](docs/Model/InlineObject115.md)
- [InlineObject116](docs/Model/InlineObject116.md)
- [InlineObject117](docs/Model/InlineObject117.md)
- [InlineObject118](docs/Model/InlineObject118.md)
- [InlineObject119](docs/Model/InlineObject119.md)
- [InlineObject12](docs/Model/InlineObject12.md)
- [InlineObject120](docs/Model/InlineObject120.md)
- [InlineObject121](docs/Model/InlineObject121.md)
- [InlineObject122](docs/Model/InlineObject122.md)
- [InlineObject123](docs/Model/InlineObject123.md)
- [InlineObject124](docs/Model/InlineObject124.md)
- [InlineObject125](docs/Model/InlineObject125.md)
- [InlineObject126](docs/Model/InlineObject126.md)
- [InlineObject127](docs/Model/InlineObject127.md)
- [InlineObject128](docs/Model/InlineObject128.md)
- [InlineObject129](docs/Model/InlineObject129.md)
- [InlineObject13](docs/Model/InlineObject13.md)
- [InlineObject130](docs/Model/InlineObject130.md)
- [InlineObject131](docs/Model/InlineObject131.md)
- [InlineObject132](docs/Model/InlineObject132.md)
- [InlineObject133](docs/Model/InlineObject133.md)
- [InlineObject134](docs/Model/InlineObject134.md)
- [InlineObject135](docs/Model/InlineObject135.md)
- [InlineObject136](docs/Model/InlineObject136.md)
- [InlineObject137](docs/Model/InlineObject137.md)
- [InlineObject138](docs/Model/InlineObject138.md)
- [InlineObject139](docs/Model/InlineObject139.md)
- [InlineObject14](docs/Model/InlineObject14.md)
- [InlineObject140](docs/Model/InlineObject140.md)
- [InlineObject141](docs/Model/InlineObject141.md)
- [InlineObject142](docs/Model/InlineObject142.md)
- [InlineObject143](docs/Model/InlineObject143.md)
- [InlineObject144](docs/Model/InlineObject144.md)
- [InlineObject145](docs/Model/InlineObject145.md)
- [InlineObject146](docs/Model/InlineObject146.md)
- [InlineObject147](docs/Model/InlineObject147.md)
- [InlineObject148](docs/Model/InlineObject148.md)
- [InlineObject149](docs/Model/InlineObject149.md)
- [InlineObject15](docs/Model/InlineObject15.md)
- [InlineObject150](docs/Model/InlineObject150.md)
- [InlineObject151](docs/Model/InlineObject151.md)
- [InlineObject152](docs/Model/InlineObject152.md)
- [InlineObject153](docs/Model/InlineObject153.md)
- [InlineObject154](docs/Model/InlineObject154.md)
- [InlineObject155](docs/Model/InlineObject155.md)
- [InlineObject156](docs/Model/InlineObject156.md)
- [InlineObject157](docs/Model/InlineObject157.md)
- [InlineObject158](docs/Model/InlineObject158.md)
- [InlineObject159](docs/Model/InlineObject159.md)
- [InlineObject16](docs/Model/InlineObject16.md)
- [InlineObject160](docs/Model/InlineObject160.md)
- [InlineObject161](docs/Model/InlineObject161.md)
- [InlineObject162](docs/Model/InlineObject162.md)
- [InlineObject163](docs/Model/InlineObject163.md)
- [InlineObject164](docs/Model/InlineObject164.md)
- [InlineObject165](docs/Model/InlineObject165.md)
- [InlineObject166](docs/Model/InlineObject166.md)
- [InlineObject167](docs/Model/InlineObject167.md)
- [InlineObject168](docs/Model/InlineObject168.md)
- [InlineObject169](docs/Model/InlineObject169.md)
- [InlineObject17](docs/Model/InlineObject17.md)
- [InlineObject170](docs/Model/InlineObject170.md)
- [InlineObject171](docs/Model/InlineObject171.md)
- [InlineObject172](docs/Model/InlineObject172.md)
- [InlineObject173](docs/Model/InlineObject173.md)
- [InlineObject174](docs/Model/InlineObject174.md)
- [InlineObject175](docs/Model/InlineObject175.md)
- [InlineObject176](docs/Model/InlineObject176.md)
- [InlineObject177](docs/Model/InlineObject177.md)
- [InlineObject178](docs/Model/InlineObject178.md)
- [InlineObject179](docs/Model/InlineObject179.md)
- [InlineObject18](docs/Model/InlineObject18.md)
- [InlineObject180](docs/Model/InlineObject180.md)
- [InlineObject181](docs/Model/InlineObject181.md)
- [InlineObject182](docs/Model/InlineObject182.md)
- [InlineObject183](docs/Model/InlineObject183.md)
- [InlineObject184](docs/Model/InlineObject184.md)
- [InlineObject185](docs/Model/InlineObject185.md)
- [InlineObject186](docs/Model/InlineObject186.md)
- [InlineObject187](docs/Model/InlineObject187.md)
- [InlineObject188](docs/Model/InlineObject188.md)
- [InlineObject189](docs/Model/InlineObject189.md)
- [InlineObject19](docs/Model/InlineObject19.md)
- [InlineObject190](docs/Model/InlineObject190.md)
- [InlineObject191](docs/Model/InlineObject191.md)
- [InlineObject192](docs/Model/InlineObject192.md)
- [InlineObject193](docs/Model/InlineObject193.md)
- [InlineObject194](docs/Model/InlineObject194.md)
- [InlineObject195](docs/Model/InlineObject195.md)
- [InlineObject196](docs/Model/InlineObject196.md)
- [InlineObject197](docs/Model/InlineObject197.md)
- [InlineObject198](docs/Model/InlineObject198.md)
- [InlineObject199](docs/Model/InlineObject199.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject20](docs/Model/InlineObject20.md)
- [InlineObject200](docs/Model/InlineObject200.md)
- [InlineObject201](docs/Model/InlineObject201.md)
- [InlineObject202](docs/Model/InlineObject202.md)
- [InlineObject203](docs/Model/InlineObject203.md)
- [InlineObject204](docs/Model/InlineObject204.md)
- [InlineObject205](docs/Model/InlineObject205.md)
- [InlineObject206](docs/Model/InlineObject206.md)
- [InlineObject207](docs/Model/InlineObject207.md)
- [InlineObject208](docs/Model/InlineObject208.md)
- [InlineObject209](docs/Model/InlineObject209.md)
- [InlineObject21](docs/Model/InlineObject21.md)
- [InlineObject210](docs/Model/InlineObject210.md)
- [InlineObject211](docs/Model/InlineObject211.md)
- [InlineObject212](docs/Model/InlineObject212.md)
- [InlineObject213](docs/Model/InlineObject213.md)
- [InlineObject214](docs/Model/InlineObject214.md)
- [InlineObject215](docs/Model/InlineObject215.md)
- [InlineObject216](docs/Model/InlineObject216.md)
- [InlineObject217](docs/Model/InlineObject217.md)
- [InlineObject218](docs/Model/InlineObject218.md)
- [InlineObject219](docs/Model/InlineObject219.md)
- [InlineObject22](docs/Model/InlineObject22.md)
- [InlineObject220](docs/Model/InlineObject220.md)
- [InlineObject221](docs/Model/InlineObject221.md)
- [InlineObject222](docs/Model/InlineObject222.md)
- [InlineObject223](docs/Model/InlineObject223.md)
- [InlineObject224](docs/Model/InlineObject224.md)
- [InlineObject225](docs/Model/InlineObject225.md)
- [InlineObject226](docs/Model/InlineObject226.md)
- [InlineObject227](docs/Model/InlineObject227.md)
- [InlineObject228](docs/Model/InlineObject228.md)
- [InlineObject229](docs/Model/InlineObject229.md)
- [InlineObject23](docs/Model/InlineObject23.md)
- [InlineObject230](docs/Model/InlineObject230.md)
- [InlineObject231](docs/Model/InlineObject231.md)
- [InlineObject232](docs/Model/InlineObject232.md)
- [InlineObject233](docs/Model/InlineObject233.md)
- [InlineObject234](docs/Model/InlineObject234.md)
- [InlineObject235](docs/Model/InlineObject235.md)
- [InlineObject236](docs/Model/InlineObject236.md)
- [InlineObject237](docs/Model/InlineObject237.md)
- [InlineObject238](docs/Model/InlineObject238.md)
- [InlineObject239](docs/Model/InlineObject239.md)
- [InlineObject24](docs/Model/InlineObject24.md)
- [InlineObject240](docs/Model/InlineObject240.md)
- [InlineObject241](docs/Model/InlineObject241.md)
- [InlineObject242](docs/Model/InlineObject242.md)
- [InlineObject243](docs/Model/InlineObject243.md)
- [InlineObject244](docs/Model/InlineObject244.md)
- [InlineObject245](docs/Model/InlineObject245.md)
- [InlineObject246](docs/Model/InlineObject246.md)
- [InlineObject247](docs/Model/InlineObject247.md)
- [InlineObject248](docs/Model/InlineObject248.md)
- [InlineObject249](docs/Model/InlineObject249.md)
- [InlineObject25](docs/Model/InlineObject25.md)
- [InlineObject250](docs/Model/InlineObject250.md)
- [InlineObject251](docs/Model/InlineObject251.md)
- [InlineObject252](docs/Model/InlineObject252.md)
- [InlineObject253](docs/Model/InlineObject253.md)
- [InlineObject254](docs/Model/InlineObject254.md)
- [InlineObject255](docs/Model/InlineObject255.md)
- [InlineObject256](docs/Model/InlineObject256.md)
- [InlineObject257](docs/Model/InlineObject257.md)
- [InlineObject258](docs/Model/InlineObject258.md)
- [InlineObject259](docs/Model/InlineObject259.md)
- [InlineObject26](docs/Model/InlineObject26.md)
- [InlineObject260](docs/Model/InlineObject260.md)
- [InlineObject261](docs/Model/InlineObject261.md)
- [InlineObject262](docs/Model/InlineObject262.md)
- [InlineObject263](docs/Model/InlineObject263.md)
- [InlineObject264](docs/Model/InlineObject264.md)
- [InlineObject265](docs/Model/InlineObject265.md)
- [InlineObject266](docs/Model/InlineObject266.md)
- [InlineObject267](docs/Model/InlineObject267.md)
- [InlineObject268](docs/Model/InlineObject268.md)
- [InlineObject269](docs/Model/InlineObject269.md)
- [InlineObject27](docs/Model/InlineObject27.md)
- [InlineObject270](docs/Model/InlineObject270.md)
- [InlineObject271](docs/Model/InlineObject271.md)
- [InlineObject272](docs/Model/InlineObject272.md)
- [InlineObject273](docs/Model/InlineObject273.md)
- [InlineObject274](docs/Model/InlineObject274.md)
- [InlineObject275](docs/Model/InlineObject275.md)
- [InlineObject276](docs/Model/InlineObject276.md)
- [InlineObject277](docs/Model/InlineObject277.md)
- [InlineObject278](docs/Model/InlineObject278.md)
- [InlineObject28](docs/Model/InlineObject28.md)
- [InlineObject29](docs/Model/InlineObject29.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineObject30](docs/Model/InlineObject30.md)
- [InlineObject31](docs/Model/InlineObject31.md)
- [InlineObject32](docs/Model/InlineObject32.md)
- [InlineObject33](docs/Model/InlineObject33.md)
- [InlineObject34](docs/Model/InlineObject34.md)
- [InlineObject35](docs/Model/InlineObject35.md)
- [InlineObject36](docs/Model/InlineObject36.md)
- [InlineObject37](docs/Model/InlineObject37.md)
- [InlineObject38](docs/Model/InlineObject38.md)
- [InlineObject39](docs/Model/InlineObject39.md)
- [InlineObject4](docs/Model/InlineObject4.md)
- [InlineObject40](docs/Model/InlineObject40.md)
- [InlineObject41](docs/Model/InlineObject41.md)
- [InlineObject42](docs/Model/InlineObject42.md)
- [InlineObject43](docs/Model/InlineObject43.md)
- [InlineObject44](docs/Model/InlineObject44.md)
- [InlineObject45](docs/Model/InlineObject45.md)
- [InlineObject46](docs/Model/InlineObject46.md)
- [InlineObject47](docs/Model/InlineObject47.md)
- [InlineObject48](docs/Model/InlineObject48.md)
- [InlineObject49](docs/Model/InlineObject49.md)
- [InlineObject5](docs/Model/InlineObject5.md)
- [InlineObject50](docs/Model/InlineObject50.md)
- [InlineObject51](docs/Model/InlineObject51.md)
- [InlineObject52](docs/Model/InlineObject52.md)
- [InlineObject53](docs/Model/InlineObject53.md)
- [InlineObject54](docs/Model/InlineObject54.md)
- [InlineObject55](docs/Model/InlineObject55.md)
- [InlineObject56](docs/Model/InlineObject56.md)
- [InlineObject57](docs/Model/InlineObject57.md)
- [InlineObject58](docs/Model/InlineObject58.md)
- [InlineObject59](docs/Model/InlineObject59.md)
- [InlineObject6](docs/Model/InlineObject6.md)
- [InlineObject60](docs/Model/InlineObject60.md)
- [InlineObject61](docs/Model/InlineObject61.md)
- [InlineObject62](docs/Model/InlineObject62.md)
- [InlineObject63](docs/Model/InlineObject63.md)
- [InlineObject64](docs/Model/InlineObject64.md)
- [InlineObject65](docs/Model/InlineObject65.md)
- [InlineObject66](docs/Model/InlineObject66.md)
- [InlineObject67](docs/Model/InlineObject67.md)
- [InlineObject68](docs/Model/InlineObject68.md)
- [InlineObject69](docs/Model/InlineObject69.md)
- [InlineObject7](docs/Model/InlineObject7.md)
- [InlineObject70](docs/Model/InlineObject70.md)
- [InlineObject71](docs/Model/InlineObject71.md)
- [InlineObject72](docs/Model/InlineObject72.md)
- [InlineObject73](docs/Model/InlineObject73.md)
- [InlineObject74](docs/Model/InlineObject74.md)
- [InlineObject75](docs/Model/InlineObject75.md)
- [InlineObject76](docs/Model/InlineObject76.md)
- [InlineObject77](docs/Model/InlineObject77.md)
- [InlineObject78](docs/Model/InlineObject78.md)
- [InlineObject79](docs/Model/InlineObject79.md)
- [InlineObject8](docs/Model/InlineObject8.md)
- [InlineObject80](docs/Model/InlineObject80.md)
- [InlineObject81](docs/Model/InlineObject81.md)
- [InlineObject82](docs/Model/InlineObject82.md)
- [InlineObject83](docs/Model/InlineObject83.md)
- [InlineObject84](docs/Model/InlineObject84.md)
- [InlineObject85](docs/Model/InlineObject85.md)
- [InlineObject86](docs/Model/InlineObject86.md)
- [InlineObject87](docs/Model/InlineObject87.md)
- [InlineObject88](docs/Model/InlineObject88.md)
- [InlineObject89](docs/Model/InlineObject89.md)
- [InlineObject9](docs/Model/InlineObject9.md)
- [InlineObject90](docs/Model/InlineObject90.md)
- [InlineObject91](docs/Model/InlineObject91.md)
- [InlineObject92](docs/Model/InlineObject92.md)
- [InlineObject93](docs/Model/InlineObject93.md)
- [InlineObject94](docs/Model/InlineObject94.md)
- [InlineObject95](docs/Model/InlineObject95.md)
- [InlineObject96](docs/Model/InlineObject96.md)
- [InlineObject97](docs/Model/InlineObject97.md)
- [InlineObject98](docs/Model/InlineObject98.md)
- [InlineObject99](docs/Model/InlineObject99.md)
- [InlineResponse200](docs/Model/InlineResponse200.md)
- [InlineResponse2001](docs/Model/InlineResponse2001.md)
- [InlineResponse20010](docs/Model/InlineResponse20010.md)
- [InlineResponse2002](docs/Model/InlineResponse2002.md)
- [InlineResponse2003](docs/Model/InlineResponse2003.md)
- [InlineResponse2004](docs/Model/InlineResponse2004.md)
- [InlineResponse2005](docs/Model/InlineResponse2005.md)
- [InlineResponse2006](docs/Model/InlineResponse2006.md)
- [InlineResponse2007](docs/Model/InlineResponse2007.md)
- [InlineResponse2008](docs/Model/InlineResponse2008.md)
- [InlineResponse2009](docs/Model/InlineResponse2009.md)
- [Integration](docs/Model/Integration.md)
- [IntegrationJsonApi](docs/Model/IntegrationJsonApi.md)
- [IntegrationJsonApiAllOf](docs/Model/IntegrationJsonApiAllOf.md)
- [IntegrationJsonApiAllOfExtensions](docs/Model/IntegrationJsonApiAllOfExtensions.md)
- [IntegrationJsonApiAllOfExtensionsCreatedNotifications](docs/Model/IntegrationJsonApiAllOfExtensionsCreatedNotifications.md)
- [IntegrationJsonApiAllOfExtensionsCreatedNotificationsData](docs/Model/IntegrationJsonApiAllOfExtensionsCreatedNotificationsData.md)
- [IntegrationJsonApiAllOfExtensionsCreatedNotificationsLinks](docs/Model/IntegrationJsonApiAllOfExtensionsCreatedNotificationsLinks.md)
- [IntegrationJsonApiAllOfRelationships](docs/Model/IntegrationJsonApiAllOfRelationships.md)
- [IntegrationJsonApiAllOfRelationshipsAclRoles](docs/Model/IntegrationJsonApiAllOfRelationshipsAclRoles.md)
- [IntegrationJsonApiAllOfRelationshipsAclRolesData](docs/Model/IntegrationJsonApiAllOfRelationshipsAclRolesData.md)
- [IntegrationJsonApiAllOfRelationshipsAclRolesLinks](docs/Model/IntegrationJsonApiAllOfRelationshipsAclRolesLinks.md)
- [IntegrationJsonApiAllOfRelationshipsApp](docs/Model/IntegrationJsonApiAllOfRelationshipsApp.md)
- [IntegrationJsonApiAllOfRelationshipsAppLinks](docs/Model/IntegrationJsonApiAllOfRelationshipsAppLinks.md)
- [IntegrationRole](docs/Model/IntegrationRole.md)
- [Jsonapi](docs/Model/Jsonapi.md)
- [LandingPage](docs/Model/LandingPage.md)
- [LandingPageJsonApi](docs/Model/LandingPageJsonApi.md)
- [LandingPageJsonApiAllOf](docs/Model/LandingPageJsonApiAllOf.md)
- [LandingPageJsonApiAllOfRelationships](docs/Model/LandingPageJsonApiAllOfRelationships.md)
- [LandingPageJsonApiAllOfRelationshipsCmsPage](docs/Model/LandingPageJsonApiAllOfRelationshipsCmsPage.md)
- [LandingPageJsonApiAllOfRelationshipsCmsPageLinks](docs/Model/LandingPageJsonApiAllOfRelationshipsCmsPageLinks.md)
- [LandingPageJsonApiAllOfRelationshipsSalesChannels](docs/Model/LandingPageJsonApiAllOfRelationshipsSalesChannels.md)
- [LandingPageJsonApiAllOfRelationshipsSalesChannelsLinks](docs/Model/LandingPageJsonApiAllOfRelationshipsSalesChannelsLinks.md)
- [LandingPageJsonApiAllOfRelationshipsSeoUrls](docs/Model/LandingPageJsonApiAllOfRelationshipsSeoUrls.md)
- [LandingPageJsonApiAllOfRelationshipsSeoUrlsLinks](docs/Model/LandingPageJsonApiAllOfRelationshipsSeoUrlsLinks.md)
- [LandingPageJsonApiAllOfRelationshipsTags](docs/Model/LandingPageJsonApiAllOfRelationshipsTags.md)
- [LandingPageJsonApiAllOfRelationshipsTagsLinks](docs/Model/LandingPageJsonApiAllOfRelationshipsTagsLinks.md)
- [LandingPageSalesChannel](docs/Model/LandingPageSalesChannel.md)
- [LandingPageTag](docs/Model/LandingPageTag.md)
- [Language](docs/Model/Language.md)
- [LanguageJsonApi](docs/Model/LanguageJsonApi.md)
- [LanguageJsonApiAllOf](docs/Model/LanguageJsonApiAllOf.md)
- [LanguageJsonApiAllOfRelationships](docs/Model/LanguageJsonApiAllOfRelationships.md)
- [LanguageJsonApiAllOfRelationshipsChildren](docs/Model/LanguageJsonApiAllOfRelationshipsChildren.md)
- [LanguageJsonApiAllOfRelationshipsChildrenData](docs/Model/LanguageJsonApiAllOfRelationshipsChildrenData.md)
- [LanguageJsonApiAllOfRelationshipsChildrenLinks](docs/Model/LanguageJsonApiAllOfRelationshipsChildrenLinks.md)
- [LanguageJsonApiAllOfRelationshipsCustomers](docs/Model/LanguageJsonApiAllOfRelationshipsCustomers.md)
- [LanguageJsonApiAllOfRelationshipsCustomersLinks](docs/Model/LanguageJsonApiAllOfRelationshipsCustomersLinks.md)
- [LanguageJsonApiAllOfRelationshipsLocale](docs/Model/LanguageJsonApiAllOfRelationshipsLocale.md)
- [LanguageJsonApiAllOfRelationshipsLocaleData](docs/Model/LanguageJsonApiAllOfRelationshipsLocaleData.md)
- [LanguageJsonApiAllOfRelationshipsLocaleLinks](docs/Model/LanguageJsonApiAllOfRelationshipsLocaleLinks.md)
- [LanguageJsonApiAllOfRelationshipsNewsletterRecipients](docs/Model/LanguageJsonApiAllOfRelationshipsNewsletterRecipients.md)
- [LanguageJsonApiAllOfRelationshipsNewsletterRecipientsData](docs/Model/LanguageJsonApiAllOfRelationshipsNewsletterRecipientsData.md)
- [LanguageJsonApiAllOfRelationshipsNewsletterRecipientsLinks](docs/Model/LanguageJsonApiAllOfRelationshipsNewsletterRecipientsLinks.md)
- [LanguageJsonApiAllOfRelationshipsOrders](docs/Model/LanguageJsonApiAllOfRelationshipsOrders.md)
- [LanguageJsonApiAllOfRelationshipsOrdersLinks](docs/Model/LanguageJsonApiAllOfRelationshipsOrdersLinks.md)
- [LanguageJsonApiAllOfRelationshipsParent](docs/Model/LanguageJsonApiAllOfRelationshipsParent.md)
- [LanguageJsonApiAllOfRelationshipsParentData](docs/Model/LanguageJsonApiAllOfRelationshipsParentData.md)
- [LanguageJsonApiAllOfRelationshipsParentLinks](docs/Model/LanguageJsonApiAllOfRelationshipsParentLinks.md)
- [LanguageJsonApiAllOfRelationshipsProductKeywordDictionaries](docs/Model/LanguageJsonApiAllOfRelationshipsProductKeywordDictionaries.md)
- [LanguageJsonApiAllOfRelationshipsProductKeywordDictionariesData](docs/Model/LanguageJsonApiAllOfRelationshipsProductKeywordDictionariesData.md)
- [LanguageJsonApiAllOfRelationshipsProductKeywordDictionariesLinks](docs/Model/LanguageJsonApiAllOfRelationshipsProductKeywordDictionariesLinks.md)
- [LanguageJsonApiAllOfRelationshipsProductReviews](docs/Model/LanguageJsonApiAllOfRelationshipsProductReviews.md)
- [LanguageJsonApiAllOfRelationshipsProductReviewsLinks](docs/Model/LanguageJsonApiAllOfRelationshipsProductReviewsLinks.md)
- [LanguageJsonApiAllOfRelationshipsProductSearchConfig](docs/Model/LanguageJsonApiAllOfRelationshipsProductSearchConfig.md)
- [LanguageJsonApiAllOfRelationshipsProductSearchConfigData](docs/Model/LanguageJsonApiAllOfRelationshipsProductSearchConfigData.md)
- [LanguageJsonApiAllOfRelationshipsProductSearchConfigLinks](docs/Model/LanguageJsonApiAllOfRelationshipsProductSearchConfigLinks.md)
- [LanguageJsonApiAllOfRelationshipsProductSearchKeywords](docs/Model/LanguageJsonApiAllOfRelationshipsProductSearchKeywords.md)
- [LanguageJsonApiAllOfRelationshipsProductSearchKeywordsData](docs/Model/LanguageJsonApiAllOfRelationshipsProductSearchKeywordsData.md)
- [LanguageJsonApiAllOfRelationshipsProductSearchKeywordsLinks](docs/Model/LanguageJsonApiAllOfRelationshipsProductSearchKeywordsLinks.md)
- [LanguageJsonApiAllOfRelationshipsSalesChannelDefaultAssignments](docs/Model/LanguageJsonApiAllOfRelationshipsSalesChannelDefaultAssignments.md)
- [LanguageJsonApiAllOfRelationshipsSalesChannelDefaultAssignmentsLinks](docs/Model/LanguageJsonApiAllOfRelationshipsSalesChannelDefaultAssignmentsLinks.md)
- [LanguageJsonApiAllOfRelationshipsSalesChannelDomains](docs/Model/LanguageJsonApiAllOfRelationshipsSalesChannelDomains.md)
- [LanguageJsonApiAllOfRelationshipsSalesChannelDomainsLinks](docs/Model/LanguageJsonApiAllOfRelationshipsSalesChannelDomainsLinks.md)
- [LanguageJsonApiAllOfRelationshipsSalesChannels](docs/Model/LanguageJsonApiAllOfRelationshipsSalesChannels.md)
- [LanguageJsonApiAllOfRelationshipsSalesChannelsLinks](docs/Model/LanguageJsonApiAllOfRelationshipsSalesChannelsLinks.md)
- [LanguageJsonApiAllOfRelationshipsTranslationCode](docs/Model/LanguageJsonApiAllOfRelationshipsTranslationCode.md)
- [LanguageJsonApiAllOfRelationshipsTranslationCodeData](docs/Model/LanguageJsonApiAllOfRelationshipsTranslationCodeData.md)
- [LanguageJsonApiAllOfRelationshipsTranslationCodeLinks](docs/Model/LanguageJsonApiAllOfRelationshipsTranslationCodeLinks.md)
- [Link](docs/Model/Link.md)
- [LinkOneOf](docs/Model/LinkOneOf.md)
- [Linkage](docs/Model/Linkage.md)
- [Locale](docs/Model/Locale.md)
- [LocaleJsonApi](docs/Model/LocaleJsonApi.md)
- [LocaleJsonApiAllOf](docs/Model/LocaleJsonApiAllOf.md)
- [LocaleJsonApiAllOfRelationships](docs/Model/LocaleJsonApiAllOfRelationships.md)
- [LocaleJsonApiAllOfRelationshipsLanguages](docs/Model/LocaleJsonApiAllOfRelationshipsLanguages.md)
- [LocaleJsonApiAllOfRelationshipsLanguagesData](docs/Model/LocaleJsonApiAllOfRelationshipsLanguagesData.md)
- [LocaleJsonApiAllOfRelationshipsLanguagesLinks](docs/Model/LocaleJsonApiAllOfRelationshipsLanguagesLinks.md)
- [LocaleJsonApiAllOfRelationshipsUsers](docs/Model/LocaleJsonApiAllOfRelationshipsUsers.md)
- [LocaleJsonApiAllOfRelationshipsUsersLinks](docs/Model/LocaleJsonApiAllOfRelationshipsUsersLinks.md)
- [LogEntry](docs/Model/LogEntry.md)
- [LogEntryJsonApi](docs/Model/LogEntryJsonApi.md)
- [LogEntryJsonApiAllOf](docs/Model/LogEntryJsonApiAllOf.md)
- [MailHeaderFooter](docs/Model/MailHeaderFooter.md)
- [MailHeaderFooterJsonApi](docs/Model/MailHeaderFooterJsonApi.md)
- [MailHeaderFooterJsonApiAllOf](docs/Model/MailHeaderFooterJsonApiAllOf.md)
- [MailHeaderFooterJsonApiAllOfRelationships](docs/Model/MailHeaderFooterJsonApiAllOfRelationships.md)
- [MailHeaderFooterJsonApiAllOfRelationshipsSalesChannels](docs/Model/MailHeaderFooterJsonApiAllOfRelationshipsSalesChannels.md)
- [MailHeaderFooterJsonApiAllOfRelationshipsSalesChannelsLinks](docs/Model/MailHeaderFooterJsonApiAllOfRelationshipsSalesChannelsLinks.md)
- [MailTemplate](docs/Model/MailTemplate.md)
- [MailTemplateJsonApi](docs/Model/MailTemplateJsonApi.md)
- [MailTemplateJsonApiAllOf](docs/Model/MailTemplateJsonApiAllOf.md)
- [MailTemplateJsonApiAllOfRelationships](docs/Model/MailTemplateJsonApiAllOfRelationships.md)
- [MailTemplateJsonApiAllOfRelationshipsMailTemplateType](docs/Model/MailTemplateJsonApiAllOfRelationshipsMailTemplateType.md)
- [MailTemplateJsonApiAllOfRelationshipsMailTemplateTypeData](docs/Model/MailTemplateJsonApiAllOfRelationshipsMailTemplateTypeData.md)
- [MailTemplateJsonApiAllOfRelationshipsMailTemplateTypeLinks](docs/Model/MailTemplateJsonApiAllOfRelationshipsMailTemplateTypeLinks.md)
- [MailTemplateJsonApiAllOfRelationshipsMedia](docs/Model/MailTemplateJsonApiAllOfRelationshipsMedia.md)
- [MailTemplateJsonApiAllOfRelationshipsMediaData](docs/Model/MailTemplateJsonApiAllOfRelationshipsMediaData.md)
- [MailTemplateJsonApiAllOfRelationshipsMediaLinks](docs/Model/MailTemplateJsonApiAllOfRelationshipsMediaLinks.md)
- [MailTemplateMedia](docs/Model/MailTemplateMedia.md)
- [MailTemplateType](docs/Model/MailTemplateType.md)
- [MailTemplateTypeJsonApi](docs/Model/MailTemplateTypeJsonApi.md)
- [MailTemplateTypeJsonApiAllOf](docs/Model/MailTemplateTypeJsonApiAllOf.md)
- [MailTemplateTypeJsonApiAllOfRelationships](docs/Model/MailTemplateTypeJsonApiAllOfRelationships.md)
- [MailTemplateTypeJsonApiAllOfRelationshipsMailTemplates](docs/Model/MailTemplateTypeJsonApiAllOfRelationshipsMailTemplates.md)
- [MailTemplateTypeJsonApiAllOfRelationshipsMailTemplatesData](docs/Model/MailTemplateTypeJsonApiAllOfRelationshipsMailTemplatesData.md)
- [MailTemplateTypeJsonApiAllOfRelationshipsMailTemplatesLinks](docs/Model/MailTemplateTypeJsonApiAllOfRelationshipsMailTemplatesLinks.md)
- [MainCategory](docs/Model/MainCategory.md)
- [MainCategoryJsonApi](docs/Model/MainCategoryJsonApi.md)
- [MainCategoryJsonApiAllOf](docs/Model/MainCategoryJsonApiAllOf.md)
- [MainCategoryJsonApiAllOfRelationships](docs/Model/MainCategoryJsonApiAllOfRelationships.md)
- [MainCategoryJsonApiAllOfRelationshipsCategory](docs/Model/MainCategoryJsonApiAllOfRelationshipsCategory.md)
- [MainCategoryJsonApiAllOfRelationshipsCategoryData](docs/Model/MainCategoryJsonApiAllOfRelationshipsCategoryData.md)
- [MainCategoryJsonApiAllOfRelationshipsCategoryLinks](docs/Model/MainCategoryJsonApiAllOfRelationshipsCategoryLinks.md)
- [MainCategoryJsonApiAllOfRelationshipsProduct](docs/Model/MainCategoryJsonApiAllOfRelationshipsProduct.md)
- [MainCategoryJsonApiAllOfRelationshipsProductLinks](docs/Model/MainCategoryJsonApiAllOfRelationshipsProductLinks.md)
- [MainCategoryJsonApiAllOfRelationshipsSalesChannel](docs/Model/MainCategoryJsonApiAllOfRelationshipsSalesChannel.md)
- [MainCategoryJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/MainCategoryJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [Media](docs/Model/Media.md)
- [MediaDefaultFolder](docs/Model/MediaDefaultFolder.md)
- [MediaDefaultFolderJsonApi](docs/Model/MediaDefaultFolderJsonApi.md)
- [MediaDefaultFolderJsonApiAllOf](docs/Model/MediaDefaultFolderJsonApiAllOf.md)
- [MediaDefaultFolderJsonApiAllOfRelationships](docs/Model/MediaDefaultFolderJsonApiAllOfRelationships.md)
- [MediaDefaultFolderJsonApiAllOfRelationshipsFolder](docs/Model/MediaDefaultFolderJsonApiAllOfRelationshipsFolder.md)
- [MediaDefaultFolderJsonApiAllOfRelationshipsFolderData](docs/Model/MediaDefaultFolderJsonApiAllOfRelationshipsFolderData.md)
- [MediaDefaultFolderJsonApiAllOfRelationshipsFolderLinks](docs/Model/MediaDefaultFolderJsonApiAllOfRelationshipsFolderLinks.md)
- [MediaFolder](docs/Model/MediaFolder.md)
- [MediaFolderConfiguration](docs/Model/MediaFolderConfiguration.md)
- [MediaFolderConfigurationJsonApi](docs/Model/MediaFolderConfigurationJsonApi.md)
- [MediaFolderConfigurationJsonApiAllOf](docs/Model/MediaFolderConfigurationJsonApiAllOf.md)
- [MediaFolderConfigurationJsonApiAllOfRelationships](docs/Model/MediaFolderConfigurationJsonApiAllOfRelationships.md)
- [MediaFolderConfigurationJsonApiAllOfRelationshipsMediaFolders](docs/Model/MediaFolderConfigurationJsonApiAllOfRelationshipsMediaFolders.md)
- [MediaFolderConfigurationJsonApiAllOfRelationshipsMediaFoldersData](docs/Model/MediaFolderConfigurationJsonApiAllOfRelationshipsMediaFoldersData.md)
- [MediaFolderConfigurationJsonApiAllOfRelationshipsMediaFoldersLinks](docs/Model/MediaFolderConfigurationJsonApiAllOfRelationshipsMediaFoldersLinks.md)
- [MediaFolderConfigurationJsonApiAllOfRelationshipsMediaThumbnailSizes](docs/Model/MediaFolderConfigurationJsonApiAllOfRelationshipsMediaThumbnailSizes.md)
- [MediaFolderConfigurationJsonApiAllOfRelationshipsMediaThumbnailSizesData](docs/Model/MediaFolderConfigurationJsonApiAllOfRelationshipsMediaThumbnailSizesData.md)
- [MediaFolderConfigurationJsonApiAllOfRelationshipsMediaThumbnailSizesLinks](docs/Model/MediaFolderConfigurationJsonApiAllOfRelationshipsMediaThumbnailSizesLinks.md)
- [MediaFolderConfigurationMediaThumbnailSize](docs/Model/MediaFolderConfigurationMediaThumbnailSize.md)
- [MediaFolderJsonApi](docs/Model/MediaFolderJsonApi.md)
- [MediaFolderJsonApiAllOf](docs/Model/MediaFolderJsonApiAllOf.md)
- [MediaFolderJsonApiAllOfRelationships](docs/Model/MediaFolderJsonApiAllOfRelationships.md)
- [MediaFolderJsonApiAllOfRelationshipsChildren](docs/Model/MediaFolderJsonApiAllOfRelationshipsChildren.md)
- [MediaFolderJsonApiAllOfRelationshipsChildrenData](docs/Model/MediaFolderJsonApiAllOfRelationshipsChildrenData.md)
- [MediaFolderJsonApiAllOfRelationshipsChildrenLinks](docs/Model/MediaFolderJsonApiAllOfRelationshipsChildrenLinks.md)
- [MediaFolderJsonApiAllOfRelationshipsConfiguration](docs/Model/MediaFolderJsonApiAllOfRelationshipsConfiguration.md)
- [MediaFolderJsonApiAllOfRelationshipsConfigurationData](docs/Model/MediaFolderJsonApiAllOfRelationshipsConfigurationData.md)
- [MediaFolderJsonApiAllOfRelationshipsConfigurationLinks](docs/Model/MediaFolderJsonApiAllOfRelationshipsConfigurationLinks.md)
- [MediaFolderJsonApiAllOfRelationshipsDefaultFolder](docs/Model/MediaFolderJsonApiAllOfRelationshipsDefaultFolder.md)
- [MediaFolderJsonApiAllOfRelationshipsDefaultFolderData](docs/Model/MediaFolderJsonApiAllOfRelationshipsDefaultFolderData.md)
- [MediaFolderJsonApiAllOfRelationshipsDefaultFolderLinks](docs/Model/MediaFolderJsonApiAllOfRelationshipsDefaultFolderLinks.md)
- [MediaFolderJsonApiAllOfRelationshipsMedia](docs/Model/MediaFolderJsonApiAllOfRelationshipsMedia.md)
- [MediaFolderJsonApiAllOfRelationshipsMediaData](docs/Model/MediaFolderJsonApiAllOfRelationshipsMediaData.md)
- [MediaFolderJsonApiAllOfRelationshipsMediaLinks](docs/Model/MediaFolderJsonApiAllOfRelationshipsMediaLinks.md)
- [MediaFolderJsonApiAllOfRelationshipsParent](docs/Model/MediaFolderJsonApiAllOfRelationshipsParent.md)
- [MediaFolderJsonApiAllOfRelationshipsParentData](docs/Model/MediaFolderJsonApiAllOfRelationshipsParentData.md)
- [MediaFolderJsonApiAllOfRelationshipsParentLinks](docs/Model/MediaFolderJsonApiAllOfRelationshipsParentLinks.md)
- [MediaJsonApi](docs/Model/MediaJsonApi.md)
- [MediaJsonApiAllOf](docs/Model/MediaJsonApiAllOf.md)
- [MediaJsonApiAllOfExtensions](docs/Model/MediaJsonApiAllOfExtensions.md)
- [MediaJsonApiAllOfExtensionsThemeMedia](docs/Model/MediaJsonApiAllOfExtensionsThemeMedia.md)
- [MediaJsonApiAllOfExtensionsThemeMediaData](docs/Model/MediaJsonApiAllOfExtensionsThemeMediaData.md)
- [MediaJsonApiAllOfExtensionsThemeMediaLinks](docs/Model/MediaJsonApiAllOfExtensionsThemeMediaLinks.md)
- [MediaJsonApiAllOfExtensionsThemes](docs/Model/MediaJsonApiAllOfExtensionsThemes.md)
- [MediaJsonApiAllOfExtensionsThemesData](docs/Model/MediaJsonApiAllOfExtensionsThemesData.md)
- [MediaJsonApiAllOfExtensionsThemesLinks](docs/Model/MediaJsonApiAllOfExtensionsThemesLinks.md)
- [MediaJsonApiAllOfRelationships](docs/Model/MediaJsonApiAllOfRelationships.md)
- [MediaJsonApiAllOfRelationshipsAppPaymentMethods](docs/Model/MediaJsonApiAllOfRelationshipsAppPaymentMethods.md)
- [MediaJsonApiAllOfRelationshipsAppPaymentMethodsData](docs/Model/MediaJsonApiAllOfRelationshipsAppPaymentMethodsData.md)
- [MediaJsonApiAllOfRelationshipsAppPaymentMethodsLinks](docs/Model/MediaJsonApiAllOfRelationshipsAppPaymentMethodsLinks.md)
- [MediaJsonApiAllOfRelationshipsAppShippingMethods](docs/Model/MediaJsonApiAllOfRelationshipsAppShippingMethods.md)
- [MediaJsonApiAllOfRelationshipsAppShippingMethodsLinks](docs/Model/MediaJsonApiAllOfRelationshipsAppShippingMethodsLinks.md)
- [MediaJsonApiAllOfRelationshipsAvatarUsers](docs/Model/MediaJsonApiAllOfRelationshipsAvatarUsers.md)
- [MediaJsonApiAllOfRelationshipsAvatarUsersData](docs/Model/MediaJsonApiAllOfRelationshipsAvatarUsersData.md)
- [MediaJsonApiAllOfRelationshipsAvatarUsersLinks](docs/Model/MediaJsonApiAllOfRelationshipsAvatarUsersLinks.md)
- [MediaJsonApiAllOfRelationshipsCategories](docs/Model/MediaJsonApiAllOfRelationshipsCategories.md)
- [MediaJsonApiAllOfRelationshipsCategoriesLinks](docs/Model/MediaJsonApiAllOfRelationshipsCategoriesLinks.md)
- [MediaJsonApiAllOfRelationshipsCmsBlocks](docs/Model/MediaJsonApiAllOfRelationshipsCmsBlocks.md)
- [MediaJsonApiAllOfRelationshipsCmsBlocksData](docs/Model/MediaJsonApiAllOfRelationshipsCmsBlocksData.md)
- [MediaJsonApiAllOfRelationshipsCmsBlocksLinks](docs/Model/MediaJsonApiAllOfRelationshipsCmsBlocksLinks.md)
- [MediaJsonApiAllOfRelationshipsCmsPages](docs/Model/MediaJsonApiAllOfRelationshipsCmsPages.md)
- [MediaJsonApiAllOfRelationshipsCmsPagesData](docs/Model/MediaJsonApiAllOfRelationshipsCmsPagesData.md)
- [MediaJsonApiAllOfRelationshipsCmsPagesLinks](docs/Model/MediaJsonApiAllOfRelationshipsCmsPagesLinks.md)
- [MediaJsonApiAllOfRelationshipsCmsSections](docs/Model/MediaJsonApiAllOfRelationshipsCmsSections.md)
- [MediaJsonApiAllOfRelationshipsCmsSectionsData](docs/Model/MediaJsonApiAllOfRelationshipsCmsSectionsData.md)
- [MediaJsonApiAllOfRelationshipsCmsSectionsLinks](docs/Model/MediaJsonApiAllOfRelationshipsCmsSectionsLinks.md)
- [MediaJsonApiAllOfRelationshipsDocumentBaseConfigs](docs/Model/MediaJsonApiAllOfRelationshipsDocumentBaseConfigs.md)
- [MediaJsonApiAllOfRelationshipsDocumentBaseConfigsLinks](docs/Model/MediaJsonApiAllOfRelationshipsDocumentBaseConfigsLinks.md)
- [MediaJsonApiAllOfRelationshipsDocuments](docs/Model/MediaJsonApiAllOfRelationshipsDocuments.md)
- [MediaJsonApiAllOfRelationshipsDocumentsLinks](docs/Model/MediaJsonApiAllOfRelationshipsDocumentsLinks.md)
- [MediaJsonApiAllOfRelationshipsMailTemplateMedia](docs/Model/MediaJsonApiAllOfRelationshipsMailTemplateMedia.md)
- [MediaJsonApiAllOfRelationshipsMailTemplateMediaData](docs/Model/MediaJsonApiAllOfRelationshipsMailTemplateMediaData.md)
- [MediaJsonApiAllOfRelationshipsMailTemplateMediaLinks](docs/Model/MediaJsonApiAllOfRelationshipsMailTemplateMediaLinks.md)
- [MediaJsonApiAllOfRelationshipsMediaFolder](docs/Model/MediaJsonApiAllOfRelationshipsMediaFolder.md)
- [MediaJsonApiAllOfRelationshipsMediaFolderData](docs/Model/MediaJsonApiAllOfRelationshipsMediaFolderData.md)
- [MediaJsonApiAllOfRelationshipsMediaFolderLinks](docs/Model/MediaJsonApiAllOfRelationshipsMediaFolderLinks.md)
- [MediaJsonApiAllOfRelationshipsOrderLineItemDownloads](docs/Model/MediaJsonApiAllOfRelationshipsOrderLineItemDownloads.md)
- [MediaJsonApiAllOfRelationshipsOrderLineItemDownloadsData](docs/Model/MediaJsonApiAllOfRelationshipsOrderLineItemDownloadsData.md)
- [MediaJsonApiAllOfRelationshipsOrderLineItemDownloadsLinks](docs/Model/MediaJsonApiAllOfRelationshipsOrderLineItemDownloadsLinks.md)
- [MediaJsonApiAllOfRelationshipsOrderLineItems](docs/Model/MediaJsonApiAllOfRelationshipsOrderLineItems.md)
- [MediaJsonApiAllOfRelationshipsOrderLineItemsData](docs/Model/MediaJsonApiAllOfRelationshipsOrderLineItemsData.md)
- [MediaJsonApiAllOfRelationshipsOrderLineItemsLinks](docs/Model/MediaJsonApiAllOfRelationshipsOrderLineItemsLinks.md)
- [MediaJsonApiAllOfRelationshipsPaymentMethods](docs/Model/MediaJsonApiAllOfRelationshipsPaymentMethods.md)
- [MediaJsonApiAllOfRelationshipsPaymentMethodsData](docs/Model/MediaJsonApiAllOfRelationshipsPaymentMethodsData.md)
- [MediaJsonApiAllOfRelationshipsPaymentMethodsLinks](docs/Model/MediaJsonApiAllOfRelationshipsPaymentMethodsLinks.md)
- [MediaJsonApiAllOfRelationshipsProductConfiguratorSettings](docs/Model/MediaJsonApiAllOfRelationshipsProductConfiguratorSettings.md)
- [MediaJsonApiAllOfRelationshipsProductConfiguratorSettingsData](docs/Model/MediaJsonApiAllOfRelationshipsProductConfiguratorSettingsData.md)
- [MediaJsonApiAllOfRelationshipsProductConfiguratorSettingsLinks](docs/Model/MediaJsonApiAllOfRelationshipsProductConfiguratorSettingsLinks.md)
- [MediaJsonApiAllOfRelationshipsProductDownloads](docs/Model/MediaJsonApiAllOfRelationshipsProductDownloads.md)
- [MediaJsonApiAllOfRelationshipsProductDownloadsData](docs/Model/MediaJsonApiAllOfRelationshipsProductDownloadsData.md)
- [MediaJsonApiAllOfRelationshipsProductDownloadsLinks](docs/Model/MediaJsonApiAllOfRelationshipsProductDownloadsLinks.md)
- [MediaJsonApiAllOfRelationshipsProductManufacturers](docs/Model/MediaJsonApiAllOfRelationshipsProductManufacturers.md)
- [MediaJsonApiAllOfRelationshipsProductManufacturersData](docs/Model/MediaJsonApiAllOfRelationshipsProductManufacturersData.md)
- [MediaJsonApiAllOfRelationshipsProductManufacturersLinks](docs/Model/MediaJsonApiAllOfRelationshipsProductManufacturersLinks.md)
- [MediaJsonApiAllOfRelationshipsProductMedia](docs/Model/MediaJsonApiAllOfRelationshipsProductMedia.md)
- [MediaJsonApiAllOfRelationshipsProductMediaData](docs/Model/MediaJsonApiAllOfRelationshipsProductMediaData.md)
- [MediaJsonApiAllOfRelationshipsProductMediaLinks](docs/Model/MediaJsonApiAllOfRelationshipsProductMediaLinks.md)
- [MediaJsonApiAllOfRelationshipsPropertyGroupOptions](docs/Model/MediaJsonApiAllOfRelationshipsPropertyGroupOptions.md)
- [MediaJsonApiAllOfRelationshipsPropertyGroupOptionsData](docs/Model/MediaJsonApiAllOfRelationshipsPropertyGroupOptionsData.md)
- [MediaJsonApiAllOfRelationshipsPropertyGroupOptionsLinks](docs/Model/MediaJsonApiAllOfRelationshipsPropertyGroupOptionsLinks.md)
- [MediaJsonApiAllOfRelationshipsShippingMethods](docs/Model/MediaJsonApiAllOfRelationshipsShippingMethods.md)
- [MediaJsonApiAllOfRelationshipsShippingMethodsLinks](docs/Model/MediaJsonApiAllOfRelationshipsShippingMethodsLinks.md)
- [MediaJsonApiAllOfRelationshipsTags](docs/Model/MediaJsonApiAllOfRelationshipsTags.md)
- [MediaJsonApiAllOfRelationshipsTagsLinks](docs/Model/MediaJsonApiAllOfRelationshipsTagsLinks.md)
- [MediaJsonApiAllOfRelationshipsThumbnails](docs/Model/MediaJsonApiAllOfRelationshipsThumbnails.md)
- [MediaJsonApiAllOfRelationshipsThumbnailsData](docs/Model/MediaJsonApiAllOfRelationshipsThumbnailsData.md)
- [MediaJsonApiAllOfRelationshipsThumbnailsLinks](docs/Model/MediaJsonApiAllOfRelationshipsThumbnailsLinks.md)
- [MediaJsonApiAllOfRelationshipsUser](docs/Model/MediaJsonApiAllOfRelationshipsUser.md)
- [MediaJsonApiAllOfRelationshipsUserLinks](docs/Model/MediaJsonApiAllOfRelationshipsUserLinks.md)
- [MediaTag](docs/Model/MediaTag.md)
- [MediaThumbnail](docs/Model/MediaThumbnail.md)
- [MediaThumbnailJsonApi](docs/Model/MediaThumbnailJsonApi.md)
- [MediaThumbnailJsonApiAllOf](docs/Model/MediaThumbnailJsonApiAllOf.md)
- [MediaThumbnailJsonApiAllOfRelationships](docs/Model/MediaThumbnailJsonApiAllOfRelationships.md)
- [MediaThumbnailJsonApiAllOfRelationshipsMedia](docs/Model/MediaThumbnailJsonApiAllOfRelationshipsMedia.md)
- [MediaThumbnailJsonApiAllOfRelationshipsMediaLinks](docs/Model/MediaThumbnailJsonApiAllOfRelationshipsMediaLinks.md)
- [MediaThumbnailSize](docs/Model/MediaThumbnailSize.md)
- [MediaThumbnailSizeJsonApi](docs/Model/MediaThumbnailSizeJsonApi.md)
- [MediaThumbnailSizeJsonApiAllOf](docs/Model/MediaThumbnailSizeJsonApiAllOf.md)
- [MediaThumbnailSizeJsonApiAllOfRelationships](docs/Model/MediaThumbnailSizeJsonApiAllOfRelationships.md)
- [MediaThumbnailSizeJsonApiAllOfRelationshipsMediaFolderConfigurations](docs/Model/MediaThumbnailSizeJsonApiAllOfRelationshipsMediaFolderConfigurations.md)
- [MediaThumbnailSizeJsonApiAllOfRelationshipsMediaFolderConfigurationsData](docs/Model/MediaThumbnailSizeJsonApiAllOfRelationshipsMediaFolderConfigurationsData.md)
- [MediaThumbnailSizeJsonApiAllOfRelationshipsMediaFolderConfigurationsLinks](docs/Model/MediaThumbnailSizeJsonApiAllOfRelationshipsMediaFolderConfigurationsLinks.md)
- [NewsletterRecipient](docs/Model/NewsletterRecipient.md)
- [NewsletterRecipientJsonApi](docs/Model/NewsletterRecipientJsonApi.md)
- [NewsletterRecipientJsonApiAllOf](docs/Model/NewsletterRecipientJsonApiAllOf.md)
- [NewsletterRecipientJsonApiAllOfRelationships](docs/Model/NewsletterRecipientJsonApiAllOfRelationships.md)
- [NewsletterRecipientJsonApiAllOfRelationshipsLanguage](docs/Model/NewsletterRecipientJsonApiAllOfRelationshipsLanguage.md)
- [NewsletterRecipientJsonApiAllOfRelationshipsLanguageLinks](docs/Model/NewsletterRecipientJsonApiAllOfRelationshipsLanguageLinks.md)
- [NewsletterRecipientJsonApiAllOfRelationshipsSalesChannel](docs/Model/NewsletterRecipientJsonApiAllOfRelationshipsSalesChannel.md)
- [NewsletterRecipientJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/NewsletterRecipientJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [NewsletterRecipientJsonApiAllOfRelationshipsSalutation](docs/Model/NewsletterRecipientJsonApiAllOfRelationshipsSalutation.md)
- [NewsletterRecipientJsonApiAllOfRelationshipsSalutationLinks](docs/Model/NewsletterRecipientJsonApiAllOfRelationshipsSalutationLinks.md)
- [NewsletterRecipientJsonApiAllOfRelationshipsTags](docs/Model/NewsletterRecipientJsonApiAllOfRelationshipsTags.md)
- [NewsletterRecipientJsonApiAllOfRelationshipsTagsLinks](docs/Model/NewsletterRecipientJsonApiAllOfRelationshipsTagsLinks.md)
- [NewsletterRecipientTag](docs/Model/NewsletterRecipientTag.md)
- [Notification](docs/Model/Notification.md)
- [NotificationJsonApi](docs/Model/NotificationJsonApi.md)
- [NotificationJsonApiAllOf](docs/Model/NotificationJsonApiAllOf.md)
- [NotificationJsonApiAllOfRelationships](docs/Model/NotificationJsonApiAllOfRelationships.md)
- [NotificationJsonApiAllOfRelationshipsCreatedByIntegration](docs/Model/NotificationJsonApiAllOfRelationshipsCreatedByIntegration.md)
- [NotificationJsonApiAllOfRelationshipsCreatedByIntegrationData](docs/Model/NotificationJsonApiAllOfRelationshipsCreatedByIntegrationData.md)
- [NotificationJsonApiAllOfRelationshipsCreatedByIntegrationLinks](docs/Model/NotificationJsonApiAllOfRelationshipsCreatedByIntegrationLinks.md)
- [NotificationJsonApiAllOfRelationshipsCreatedByUser](docs/Model/NotificationJsonApiAllOfRelationshipsCreatedByUser.md)
- [NotificationJsonApiAllOfRelationshipsCreatedByUserData](docs/Model/NotificationJsonApiAllOfRelationshipsCreatedByUserData.md)
- [NotificationJsonApiAllOfRelationshipsCreatedByUserLinks](docs/Model/NotificationJsonApiAllOfRelationshipsCreatedByUserLinks.md)
- [NumberRange](docs/Model/NumberRange.md)
- [NumberRangeJsonApi](docs/Model/NumberRangeJsonApi.md)
- [NumberRangeJsonApiAllOf](docs/Model/NumberRangeJsonApiAllOf.md)
- [NumberRangeJsonApiAllOfRelationships](docs/Model/NumberRangeJsonApiAllOfRelationships.md)
- [NumberRangeJsonApiAllOfRelationshipsNumberRangeSalesChannels](docs/Model/NumberRangeJsonApiAllOfRelationshipsNumberRangeSalesChannels.md)
- [NumberRangeJsonApiAllOfRelationshipsNumberRangeSalesChannelsData](docs/Model/NumberRangeJsonApiAllOfRelationshipsNumberRangeSalesChannelsData.md)
- [NumberRangeJsonApiAllOfRelationshipsNumberRangeSalesChannelsLinks](docs/Model/NumberRangeJsonApiAllOfRelationshipsNumberRangeSalesChannelsLinks.md)
- [NumberRangeJsonApiAllOfRelationshipsState](docs/Model/NumberRangeJsonApiAllOfRelationshipsState.md)
- [NumberRangeJsonApiAllOfRelationshipsStateData](docs/Model/NumberRangeJsonApiAllOfRelationshipsStateData.md)
- [NumberRangeJsonApiAllOfRelationshipsStateLinks](docs/Model/NumberRangeJsonApiAllOfRelationshipsStateLinks.md)
- [NumberRangeJsonApiAllOfRelationshipsType](docs/Model/NumberRangeJsonApiAllOfRelationshipsType.md)
- [NumberRangeJsonApiAllOfRelationshipsTypeData](docs/Model/NumberRangeJsonApiAllOfRelationshipsTypeData.md)
- [NumberRangeJsonApiAllOfRelationshipsTypeLinks](docs/Model/NumberRangeJsonApiAllOfRelationshipsTypeLinks.md)
- [NumberRangeSalesChannel](docs/Model/NumberRangeSalesChannel.md)
- [NumberRangeSalesChannelJsonApi](docs/Model/NumberRangeSalesChannelJsonApi.md)
- [NumberRangeSalesChannelJsonApiAllOf](docs/Model/NumberRangeSalesChannelJsonApiAllOf.md)
- [NumberRangeSalesChannelJsonApiAllOfRelationships](docs/Model/NumberRangeSalesChannelJsonApiAllOfRelationships.md)
- [NumberRangeSalesChannelJsonApiAllOfRelationshipsNumberRange](docs/Model/NumberRangeSalesChannelJsonApiAllOfRelationshipsNumberRange.md)
- [NumberRangeSalesChannelJsonApiAllOfRelationshipsNumberRangeData](docs/Model/NumberRangeSalesChannelJsonApiAllOfRelationshipsNumberRangeData.md)
- [NumberRangeSalesChannelJsonApiAllOfRelationshipsNumberRangeLinks](docs/Model/NumberRangeSalesChannelJsonApiAllOfRelationshipsNumberRangeLinks.md)
- [NumberRangeSalesChannelJsonApiAllOfRelationshipsNumberRangeType](docs/Model/NumberRangeSalesChannelJsonApiAllOfRelationshipsNumberRangeType.md)
- [NumberRangeSalesChannelJsonApiAllOfRelationshipsNumberRangeTypeData](docs/Model/NumberRangeSalesChannelJsonApiAllOfRelationshipsNumberRangeTypeData.md)
- [NumberRangeSalesChannelJsonApiAllOfRelationshipsNumberRangeTypeLinks](docs/Model/NumberRangeSalesChannelJsonApiAllOfRelationshipsNumberRangeTypeLinks.md)
- [NumberRangeSalesChannelJsonApiAllOfRelationshipsSalesChannel](docs/Model/NumberRangeSalesChannelJsonApiAllOfRelationshipsSalesChannel.md)
- [NumberRangeSalesChannelJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/NumberRangeSalesChannelJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [NumberRangeState](docs/Model/NumberRangeState.md)
- [NumberRangeStateJsonApi](docs/Model/NumberRangeStateJsonApi.md)
- [NumberRangeStateJsonApiAllOf](docs/Model/NumberRangeStateJsonApiAllOf.md)
- [NumberRangeStateJsonApiAllOfRelationships](docs/Model/NumberRangeStateJsonApiAllOfRelationships.md)
- [NumberRangeStateJsonApiAllOfRelationshipsNumberRange](docs/Model/NumberRangeStateJsonApiAllOfRelationshipsNumberRange.md)
- [NumberRangeStateJsonApiAllOfRelationshipsNumberRangeLinks](docs/Model/NumberRangeStateJsonApiAllOfRelationshipsNumberRangeLinks.md)
- [NumberRangeType](docs/Model/NumberRangeType.md)
- [NumberRangeTypeJsonApi](docs/Model/NumberRangeTypeJsonApi.md)
- [NumberRangeTypeJsonApiAllOf](docs/Model/NumberRangeTypeJsonApiAllOf.md)
- [NumberRangeTypeJsonApiAllOfRelationships](docs/Model/NumberRangeTypeJsonApiAllOfRelationships.md)
- [NumberRangeTypeJsonApiAllOfRelationshipsNumberRangeSalesChannels](docs/Model/NumberRangeTypeJsonApiAllOfRelationshipsNumberRangeSalesChannels.md)
- [NumberRangeTypeJsonApiAllOfRelationshipsNumberRangeSalesChannelsLinks](docs/Model/NumberRangeTypeJsonApiAllOfRelationshipsNumberRangeSalesChannelsLinks.md)
- [NumberRangeTypeJsonApiAllOfRelationshipsNumberRanges](docs/Model/NumberRangeTypeJsonApiAllOfRelationshipsNumberRanges.md)
- [NumberRangeTypeJsonApiAllOfRelationshipsNumberRangesData](docs/Model/NumberRangeTypeJsonApiAllOfRelationshipsNumberRangesData.md)
- [NumberRangeTypeJsonApiAllOfRelationshipsNumberRangesLinks](docs/Model/NumberRangeTypeJsonApiAllOfRelationshipsNumberRangesLinks.md)
- [OAuthClientCredentialsGrant](docs/Model/OAuthClientCredentialsGrant.md)
- [OAuthClientCredentialsGrantAllOf](docs/Model/OAuthClientCredentialsGrantAllOf.md)
- [OAuthGrant](docs/Model/OAuthGrant.md)
- [OAuthPasswordGrant](docs/Model/OAuthPasswordGrant.md)
- [OAuthPasswordGrantAllOf](docs/Model/OAuthPasswordGrantAllOf.md)
- [OAuthRefreshTokenGrant](docs/Model/OAuthRefreshTokenGrant.md)
- [OAuthRefreshTokenGrantAllOf](docs/Model/OAuthRefreshTokenGrantAllOf.md)
- [OAuthScopes](docs/Model/OAuthScopes.md)
- [Order](docs/Model/Order.md)
- [OrderAddress](docs/Model/OrderAddress.md)
- [OrderAddressJsonApi](docs/Model/OrderAddressJsonApi.md)
- [OrderAddressJsonApiAllOf](docs/Model/OrderAddressJsonApiAllOf.md)
- [OrderAddressJsonApiAllOfRelationships](docs/Model/OrderAddressJsonApiAllOfRelationships.md)
- [OrderAddressJsonApiAllOfRelationshipsCountry](docs/Model/OrderAddressJsonApiAllOfRelationshipsCountry.md)
- [OrderAddressJsonApiAllOfRelationshipsCountryLinks](docs/Model/OrderAddressJsonApiAllOfRelationshipsCountryLinks.md)
- [OrderAddressJsonApiAllOfRelationshipsCountryState](docs/Model/OrderAddressJsonApiAllOfRelationshipsCountryState.md)
- [OrderAddressJsonApiAllOfRelationshipsCountryStateLinks](docs/Model/OrderAddressJsonApiAllOfRelationshipsCountryStateLinks.md)
- [OrderAddressJsonApiAllOfRelationshipsOrder](docs/Model/OrderAddressJsonApiAllOfRelationshipsOrder.md)
- [OrderAddressJsonApiAllOfRelationshipsOrderDeliveries](docs/Model/OrderAddressJsonApiAllOfRelationshipsOrderDeliveries.md)
- [OrderAddressJsonApiAllOfRelationshipsOrderDeliveriesData](docs/Model/OrderAddressJsonApiAllOfRelationshipsOrderDeliveriesData.md)
- [OrderAddressJsonApiAllOfRelationshipsOrderDeliveriesLinks](docs/Model/OrderAddressJsonApiAllOfRelationshipsOrderDeliveriesLinks.md)
- [OrderAddressJsonApiAllOfRelationshipsOrderLinks](docs/Model/OrderAddressJsonApiAllOfRelationshipsOrderLinks.md)
- [OrderAddressJsonApiAllOfRelationshipsSalutation](docs/Model/OrderAddressJsonApiAllOfRelationshipsSalutation.md)
- [OrderAddressJsonApiAllOfRelationshipsSalutationLinks](docs/Model/OrderAddressJsonApiAllOfRelationshipsSalutationLinks.md)
- [OrderCustomer](docs/Model/OrderCustomer.md)
- [OrderCustomerJsonApi](docs/Model/OrderCustomerJsonApi.md)
- [OrderCustomerJsonApiAllOf](docs/Model/OrderCustomerJsonApiAllOf.md)
- [OrderCustomerJsonApiAllOfRelationships](docs/Model/OrderCustomerJsonApiAllOfRelationships.md)
- [OrderCustomerJsonApiAllOfRelationshipsCustomer](docs/Model/OrderCustomerJsonApiAllOfRelationshipsCustomer.md)
- [OrderCustomerJsonApiAllOfRelationshipsCustomerLinks](docs/Model/OrderCustomerJsonApiAllOfRelationshipsCustomerLinks.md)
- [OrderCustomerJsonApiAllOfRelationshipsOrder](docs/Model/OrderCustomerJsonApiAllOfRelationshipsOrder.md)
- [OrderCustomerJsonApiAllOfRelationshipsOrderLinks](docs/Model/OrderCustomerJsonApiAllOfRelationshipsOrderLinks.md)
- [OrderCustomerJsonApiAllOfRelationshipsSalutation](docs/Model/OrderCustomerJsonApiAllOfRelationshipsSalutation.md)
- [OrderCustomerJsonApiAllOfRelationshipsSalutationLinks](docs/Model/OrderCustomerJsonApiAllOfRelationshipsSalutationLinks.md)
- [OrderDelivery](docs/Model/OrderDelivery.md)
- [OrderDeliveryJsonApi](docs/Model/OrderDeliveryJsonApi.md)
- [OrderDeliveryJsonApiAllOf](docs/Model/OrderDeliveryJsonApiAllOf.md)
- [OrderDeliveryJsonApiAllOfRelationships](docs/Model/OrderDeliveryJsonApiAllOfRelationships.md)
- [OrderDeliveryJsonApiAllOfRelationshipsOrder](docs/Model/OrderDeliveryJsonApiAllOfRelationshipsOrder.md)
- [OrderDeliveryJsonApiAllOfRelationshipsOrderLinks](docs/Model/OrderDeliveryJsonApiAllOfRelationshipsOrderLinks.md)
- [OrderDeliveryJsonApiAllOfRelationshipsPositions](docs/Model/OrderDeliveryJsonApiAllOfRelationshipsPositions.md)
- [OrderDeliveryJsonApiAllOfRelationshipsPositionsData](docs/Model/OrderDeliveryJsonApiAllOfRelationshipsPositionsData.md)
- [OrderDeliveryJsonApiAllOfRelationshipsPositionsLinks](docs/Model/OrderDeliveryJsonApiAllOfRelationshipsPositionsLinks.md)
- [OrderDeliveryJsonApiAllOfRelationshipsShippingMethod](docs/Model/OrderDeliveryJsonApiAllOfRelationshipsShippingMethod.md)
- [OrderDeliveryJsonApiAllOfRelationshipsShippingMethodLinks](docs/Model/OrderDeliveryJsonApiAllOfRelationshipsShippingMethodLinks.md)
- [OrderDeliveryJsonApiAllOfRelationshipsShippingOrderAddress](docs/Model/OrderDeliveryJsonApiAllOfRelationshipsShippingOrderAddress.md)
- [OrderDeliveryJsonApiAllOfRelationshipsShippingOrderAddressData](docs/Model/OrderDeliveryJsonApiAllOfRelationshipsShippingOrderAddressData.md)
- [OrderDeliveryJsonApiAllOfRelationshipsShippingOrderAddressLinks](docs/Model/OrderDeliveryJsonApiAllOfRelationshipsShippingOrderAddressLinks.md)
- [OrderDeliveryJsonApiAllOfRelationshipsStateMachineState](docs/Model/OrderDeliveryJsonApiAllOfRelationshipsStateMachineState.md)
- [OrderDeliveryJsonApiAllOfRelationshipsStateMachineStateLinks](docs/Model/OrderDeliveryJsonApiAllOfRelationshipsStateMachineStateLinks.md)
- [OrderDeliveryPosition](docs/Model/OrderDeliveryPosition.md)
- [OrderDeliveryPositionJsonApi](docs/Model/OrderDeliveryPositionJsonApi.md)
- [OrderDeliveryPositionJsonApiAllOf](docs/Model/OrderDeliveryPositionJsonApiAllOf.md)
- [OrderDeliveryPositionJsonApiAllOfRelationships](docs/Model/OrderDeliveryPositionJsonApiAllOfRelationships.md)
- [OrderDeliveryPositionJsonApiAllOfRelationshipsOrderDelivery](docs/Model/OrderDeliveryPositionJsonApiAllOfRelationshipsOrderDelivery.md)
- [OrderDeliveryPositionJsonApiAllOfRelationshipsOrderDeliveryData](docs/Model/OrderDeliveryPositionJsonApiAllOfRelationshipsOrderDeliveryData.md)
- [OrderDeliveryPositionJsonApiAllOfRelationshipsOrderDeliveryLinks](docs/Model/OrderDeliveryPositionJsonApiAllOfRelationshipsOrderDeliveryLinks.md)
- [OrderDeliveryPositionJsonApiAllOfRelationshipsOrderLineItem](docs/Model/OrderDeliveryPositionJsonApiAllOfRelationshipsOrderLineItem.md)
- [OrderDeliveryPositionJsonApiAllOfRelationshipsOrderLineItemData](docs/Model/OrderDeliveryPositionJsonApiAllOfRelationshipsOrderLineItemData.md)
- [OrderDeliveryPositionJsonApiAllOfRelationshipsOrderLineItemLinks](docs/Model/OrderDeliveryPositionJsonApiAllOfRelationshipsOrderLineItemLinks.md)
- [OrderJsonApi](docs/Model/OrderJsonApi.md)
- [OrderJsonApiAllOf](docs/Model/OrderJsonApiAllOf.md)
- [OrderJsonApiAllOfPrice](docs/Model/OrderJsonApiAllOfPrice.md)
- [OrderJsonApiAllOfRelationships](docs/Model/OrderJsonApiAllOfRelationships.md)
- [OrderJsonApiAllOfRelationshipsAddresses](docs/Model/OrderJsonApiAllOfRelationshipsAddresses.md)
- [OrderJsonApiAllOfRelationshipsAddressesData](docs/Model/OrderJsonApiAllOfRelationshipsAddressesData.md)
- [OrderJsonApiAllOfRelationshipsAddressesLinks](docs/Model/OrderJsonApiAllOfRelationshipsAddressesLinks.md)
- [OrderJsonApiAllOfRelationshipsBillingAddress](docs/Model/OrderJsonApiAllOfRelationshipsBillingAddress.md)
- [OrderJsonApiAllOfRelationshipsBillingAddressData](docs/Model/OrderJsonApiAllOfRelationshipsBillingAddressData.md)
- [OrderJsonApiAllOfRelationshipsBillingAddressLinks](docs/Model/OrderJsonApiAllOfRelationshipsBillingAddressLinks.md)
- [OrderJsonApiAllOfRelationshipsCreatedBy](docs/Model/OrderJsonApiAllOfRelationshipsCreatedBy.md)
- [OrderJsonApiAllOfRelationshipsCreatedByLinks](docs/Model/OrderJsonApiAllOfRelationshipsCreatedByLinks.md)
- [OrderJsonApiAllOfRelationshipsCurrency](docs/Model/OrderJsonApiAllOfRelationshipsCurrency.md)
- [OrderJsonApiAllOfRelationshipsCurrencyLinks](docs/Model/OrderJsonApiAllOfRelationshipsCurrencyLinks.md)
- [OrderJsonApiAllOfRelationshipsDeliveries](docs/Model/OrderJsonApiAllOfRelationshipsDeliveries.md)
- [OrderJsonApiAllOfRelationshipsDeliveriesData](docs/Model/OrderJsonApiAllOfRelationshipsDeliveriesData.md)
- [OrderJsonApiAllOfRelationshipsDeliveriesLinks](docs/Model/OrderJsonApiAllOfRelationshipsDeliveriesLinks.md)
- [OrderJsonApiAllOfRelationshipsDocuments](docs/Model/OrderJsonApiAllOfRelationshipsDocuments.md)
- [OrderJsonApiAllOfRelationshipsDocumentsLinks](docs/Model/OrderJsonApiAllOfRelationshipsDocumentsLinks.md)
- [OrderJsonApiAllOfRelationshipsLanguage](docs/Model/OrderJsonApiAllOfRelationshipsLanguage.md)
- [OrderJsonApiAllOfRelationshipsLanguageLinks](docs/Model/OrderJsonApiAllOfRelationshipsLanguageLinks.md)
- [OrderJsonApiAllOfRelationshipsLineItems](docs/Model/OrderJsonApiAllOfRelationshipsLineItems.md)
- [OrderJsonApiAllOfRelationshipsLineItemsData](docs/Model/OrderJsonApiAllOfRelationshipsLineItemsData.md)
- [OrderJsonApiAllOfRelationshipsLineItemsLinks](docs/Model/OrderJsonApiAllOfRelationshipsLineItemsLinks.md)
- [OrderJsonApiAllOfRelationshipsOrderCustomer](docs/Model/OrderJsonApiAllOfRelationshipsOrderCustomer.md)
- [OrderJsonApiAllOfRelationshipsOrderCustomerData](docs/Model/OrderJsonApiAllOfRelationshipsOrderCustomerData.md)
- [OrderJsonApiAllOfRelationshipsOrderCustomerLinks](docs/Model/OrderJsonApiAllOfRelationshipsOrderCustomerLinks.md)
- [OrderJsonApiAllOfRelationshipsSalesChannel](docs/Model/OrderJsonApiAllOfRelationshipsSalesChannel.md)
- [OrderJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/OrderJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [OrderJsonApiAllOfRelationshipsStateMachineState](docs/Model/OrderJsonApiAllOfRelationshipsStateMachineState.md)
- [OrderJsonApiAllOfRelationshipsStateMachineStateData](docs/Model/OrderJsonApiAllOfRelationshipsStateMachineStateData.md)
- [OrderJsonApiAllOfRelationshipsStateMachineStateLinks](docs/Model/OrderJsonApiAllOfRelationshipsStateMachineStateLinks.md)
- [OrderJsonApiAllOfRelationshipsTags](docs/Model/OrderJsonApiAllOfRelationshipsTags.md)
- [OrderJsonApiAllOfRelationshipsTagsLinks](docs/Model/OrderJsonApiAllOfRelationshipsTagsLinks.md)
- [OrderJsonApiAllOfRelationshipsTransactions](docs/Model/OrderJsonApiAllOfRelationshipsTransactions.md)
- [OrderJsonApiAllOfRelationshipsTransactionsData](docs/Model/OrderJsonApiAllOfRelationshipsTransactionsData.md)
- [OrderJsonApiAllOfRelationshipsTransactionsLinks](docs/Model/OrderJsonApiAllOfRelationshipsTransactionsLinks.md)
- [OrderJsonApiAllOfRelationshipsUpdatedBy](docs/Model/OrderJsonApiAllOfRelationshipsUpdatedBy.md)
- [OrderJsonApiAllOfRelationshipsUpdatedByLinks](docs/Model/OrderJsonApiAllOfRelationshipsUpdatedByLinks.md)
- [OrderJsonApiAllOfShippingCosts](docs/Model/OrderJsonApiAllOfShippingCosts.md)
- [OrderJsonApiAllOfShippingCostsListPrice](docs/Model/OrderJsonApiAllOfShippingCostsListPrice.md)
- [OrderJsonApiAllOfShippingCostsRegulationPrice](docs/Model/OrderJsonApiAllOfShippingCostsRegulationPrice.md)
- [OrderLineItem](docs/Model/OrderLineItem.md)
- [OrderLineItemDownload](docs/Model/OrderLineItemDownload.md)
- [OrderLineItemDownloadJsonApi](docs/Model/OrderLineItemDownloadJsonApi.md)
- [OrderLineItemDownloadJsonApiAllOf](docs/Model/OrderLineItemDownloadJsonApiAllOf.md)
- [OrderLineItemDownloadJsonApiAllOfRelationships](docs/Model/OrderLineItemDownloadJsonApiAllOfRelationships.md)
- [OrderLineItemDownloadJsonApiAllOfRelationshipsMedia](docs/Model/OrderLineItemDownloadJsonApiAllOfRelationshipsMedia.md)
- [OrderLineItemDownloadJsonApiAllOfRelationshipsMediaLinks](docs/Model/OrderLineItemDownloadJsonApiAllOfRelationshipsMediaLinks.md)
- [OrderLineItemDownloadJsonApiAllOfRelationshipsOrderLineItem](docs/Model/OrderLineItemDownloadJsonApiAllOfRelationshipsOrderLineItem.md)
- [OrderLineItemDownloadJsonApiAllOfRelationshipsOrderLineItemLinks](docs/Model/OrderLineItemDownloadJsonApiAllOfRelationshipsOrderLineItemLinks.md)
- [OrderLineItemJsonApi](docs/Model/OrderLineItemJsonApi.md)
- [OrderLineItemJsonApiAllOf](docs/Model/OrderLineItemJsonApiAllOf.md)
- [OrderLineItemJsonApiAllOfRelationships](docs/Model/OrderLineItemJsonApiAllOfRelationships.md)
- [OrderLineItemJsonApiAllOfRelationshipsChildren](docs/Model/OrderLineItemJsonApiAllOfRelationshipsChildren.md)
- [OrderLineItemJsonApiAllOfRelationshipsChildrenData](docs/Model/OrderLineItemJsonApiAllOfRelationshipsChildrenData.md)
- [OrderLineItemJsonApiAllOfRelationshipsChildrenLinks](docs/Model/OrderLineItemJsonApiAllOfRelationshipsChildrenLinks.md)
- [OrderLineItemJsonApiAllOfRelationshipsCover](docs/Model/OrderLineItemJsonApiAllOfRelationshipsCover.md)
- [OrderLineItemJsonApiAllOfRelationshipsCoverData](docs/Model/OrderLineItemJsonApiAllOfRelationshipsCoverData.md)
- [OrderLineItemJsonApiAllOfRelationshipsCoverLinks](docs/Model/OrderLineItemJsonApiAllOfRelationshipsCoverLinks.md)
- [OrderLineItemJsonApiAllOfRelationshipsDownloads](docs/Model/OrderLineItemJsonApiAllOfRelationshipsDownloads.md)
- [OrderLineItemJsonApiAllOfRelationshipsDownloadsData](docs/Model/OrderLineItemJsonApiAllOfRelationshipsDownloadsData.md)
- [OrderLineItemJsonApiAllOfRelationshipsDownloadsLinks](docs/Model/OrderLineItemJsonApiAllOfRelationshipsDownloadsLinks.md)
- [OrderLineItemJsonApiAllOfRelationshipsOrder](docs/Model/OrderLineItemJsonApiAllOfRelationshipsOrder.md)
- [OrderLineItemJsonApiAllOfRelationshipsOrderDeliveryPositions](docs/Model/OrderLineItemJsonApiAllOfRelationshipsOrderDeliveryPositions.md)
- [OrderLineItemJsonApiAllOfRelationshipsOrderDeliveryPositionsData](docs/Model/OrderLineItemJsonApiAllOfRelationshipsOrderDeliveryPositionsData.md)
- [OrderLineItemJsonApiAllOfRelationshipsOrderDeliveryPositionsLinks](docs/Model/OrderLineItemJsonApiAllOfRelationshipsOrderDeliveryPositionsLinks.md)
- [OrderLineItemJsonApiAllOfRelationshipsOrderLinks](docs/Model/OrderLineItemJsonApiAllOfRelationshipsOrderLinks.md)
- [OrderLineItemJsonApiAllOfRelationshipsOrderTransactionCaptureRefundPositions](docs/Model/OrderLineItemJsonApiAllOfRelationshipsOrderTransactionCaptureRefundPositions.md)
- [OrderLineItemJsonApiAllOfRelationshipsOrderTransactionCaptureRefundPositionsData](docs/Model/OrderLineItemJsonApiAllOfRelationshipsOrderTransactionCaptureRefundPositionsData.md)
- [OrderLineItemJsonApiAllOfRelationshipsOrderTransactionCaptureRefundPositionsLinks](docs/Model/OrderLineItemJsonApiAllOfRelationshipsOrderTransactionCaptureRefundPositionsLinks.md)
- [OrderLineItemJsonApiAllOfRelationshipsParent](docs/Model/OrderLineItemJsonApiAllOfRelationshipsParent.md)
- [OrderLineItemJsonApiAllOfRelationshipsParentData](docs/Model/OrderLineItemJsonApiAllOfRelationshipsParentData.md)
- [OrderLineItemJsonApiAllOfRelationshipsParentLinks](docs/Model/OrderLineItemJsonApiAllOfRelationshipsParentLinks.md)
- [OrderLineItemJsonApiAllOfRelationshipsProduct](docs/Model/OrderLineItemJsonApiAllOfRelationshipsProduct.md)
- [OrderLineItemJsonApiAllOfRelationshipsProductLinks](docs/Model/OrderLineItemJsonApiAllOfRelationshipsProductLinks.md)
- [OrderLineItemJsonApiAllOfRelationshipsPromotion](docs/Model/OrderLineItemJsonApiAllOfRelationshipsPromotion.md)
- [OrderLineItemJsonApiAllOfRelationshipsPromotionData](docs/Model/OrderLineItemJsonApiAllOfRelationshipsPromotionData.md)
- [OrderLineItemJsonApiAllOfRelationshipsPromotionLinks](docs/Model/OrderLineItemJsonApiAllOfRelationshipsPromotionLinks.md)
- [OrderTag](docs/Model/OrderTag.md)
- [OrderTransaction](docs/Model/OrderTransaction.md)
- [OrderTransactionCapture](docs/Model/OrderTransactionCapture.md)
- [OrderTransactionCaptureJsonApi](docs/Model/OrderTransactionCaptureJsonApi.md)
- [OrderTransactionCaptureJsonApiAllOf](docs/Model/OrderTransactionCaptureJsonApiAllOf.md)
- [OrderTransactionCaptureJsonApiAllOfRelationships](docs/Model/OrderTransactionCaptureJsonApiAllOfRelationships.md)
- [OrderTransactionCaptureJsonApiAllOfRelationshipsRefunds](docs/Model/OrderTransactionCaptureJsonApiAllOfRelationshipsRefunds.md)
- [OrderTransactionCaptureJsonApiAllOfRelationshipsRefundsData](docs/Model/OrderTransactionCaptureJsonApiAllOfRelationshipsRefundsData.md)
- [OrderTransactionCaptureJsonApiAllOfRelationshipsRefundsLinks](docs/Model/OrderTransactionCaptureJsonApiAllOfRelationshipsRefundsLinks.md)
- [OrderTransactionCaptureJsonApiAllOfRelationshipsStateMachineState](docs/Model/OrderTransactionCaptureJsonApiAllOfRelationshipsStateMachineState.md)
- [OrderTransactionCaptureJsonApiAllOfRelationshipsStateMachineStateLinks](docs/Model/OrderTransactionCaptureJsonApiAllOfRelationshipsStateMachineStateLinks.md)
- [OrderTransactionCaptureJsonApiAllOfRelationshipsTransaction](docs/Model/OrderTransactionCaptureJsonApiAllOfRelationshipsTransaction.md)
- [OrderTransactionCaptureJsonApiAllOfRelationshipsTransactionData](docs/Model/OrderTransactionCaptureJsonApiAllOfRelationshipsTransactionData.md)
- [OrderTransactionCaptureJsonApiAllOfRelationshipsTransactionLinks](docs/Model/OrderTransactionCaptureJsonApiAllOfRelationshipsTransactionLinks.md)
- [OrderTransactionCaptureRefund](docs/Model/OrderTransactionCaptureRefund.md)
- [OrderTransactionCaptureRefundJsonApi](docs/Model/OrderTransactionCaptureRefundJsonApi.md)
- [OrderTransactionCaptureRefundJsonApiAllOf](docs/Model/OrderTransactionCaptureRefundJsonApiAllOf.md)
- [OrderTransactionCaptureRefundJsonApiAllOfRelationships](docs/Model/OrderTransactionCaptureRefundJsonApiAllOfRelationships.md)
- [OrderTransactionCaptureRefundJsonApiAllOfRelationshipsPositions](docs/Model/OrderTransactionCaptureRefundJsonApiAllOfRelationshipsPositions.md)
- [OrderTransactionCaptureRefundJsonApiAllOfRelationshipsPositionsData](docs/Model/OrderTransactionCaptureRefundJsonApiAllOfRelationshipsPositionsData.md)
- [OrderTransactionCaptureRefundJsonApiAllOfRelationshipsPositionsLinks](docs/Model/OrderTransactionCaptureRefundJsonApiAllOfRelationshipsPositionsLinks.md)
- [OrderTransactionCaptureRefundJsonApiAllOfRelationshipsStateMachineState](docs/Model/OrderTransactionCaptureRefundJsonApiAllOfRelationshipsStateMachineState.md)
- [OrderTransactionCaptureRefundJsonApiAllOfRelationshipsStateMachineStateLinks](docs/Model/OrderTransactionCaptureRefundJsonApiAllOfRelationshipsStateMachineStateLinks.md)
- [OrderTransactionCaptureRefundJsonApiAllOfRelationshipsTransactionCapture](docs/Model/OrderTransactionCaptureRefundJsonApiAllOfRelationshipsTransactionCapture.md)
- [OrderTransactionCaptureRefundJsonApiAllOfRelationshipsTransactionCaptureData](docs/Model/OrderTransactionCaptureRefundJsonApiAllOfRelationshipsTransactionCaptureData.md)
- [OrderTransactionCaptureRefundJsonApiAllOfRelationshipsTransactionCaptureLinks](docs/Model/OrderTransactionCaptureRefundJsonApiAllOfRelationshipsTransactionCaptureLinks.md)
- [OrderTransactionCaptureRefundPosition](docs/Model/OrderTransactionCaptureRefundPosition.md)
- [OrderTransactionCaptureRefundPositionJsonApi](docs/Model/OrderTransactionCaptureRefundPositionJsonApi.md)
- [OrderTransactionCaptureRefundPositionJsonApiAllOf](docs/Model/OrderTransactionCaptureRefundPositionJsonApiAllOf.md)
- [OrderTransactionCaptureRefundPositionJsonApiAllOfRelationships](docs/Model/OrderTransactionCaptureRefundPositionJsonApiAllOfRelationships.md)
- [OrderTransactionCaptureRefundPositionJsonApiAllOfRelationshipsOrderLineItem](docs/Model/OrderTransactionCaptureRefundPositionJsonApiAllOfRelationshipsOrderLineItem.md)
- [OrderTransactionCaptureRefundPositionJsonApiAllOfRelationshipsOrderLineItemLinks](docs/Model/OrderTransactionCaptureRefundPositionJsonApiAllOfRelationshipsOrderLineItemLinks.md)
- [OrderTransactionCaptureRefundPositionJsonApiAllOfRelationshipsOrderTransactionCaptureRefund](docs/Model/OrderTransactionCaptureRefundPositionJsonApiAllOfRelationshipsOrderTransactionCaptureRefund.md)
- [OrderTransactionCaptureRefundPositionJsonApiAllOfRelationshipsOrderTransactionCaptureRefundData](docs/Model/OrderTransactionCaptureRefundPositionJsonApiAllOfRelationshipsOrderTransactionCaptureRefundData.md)
- [OrderTransactionCaptureRefundPositionJsonApiAllOfRelationshipsOrderTransactionCaptureRefundLinks](docs/Model/OrderTransactionCaptureRefundPositionJsonApiAllOfRelationshipsOrderTransactionCaptureRefundLinks.md)
- [OrderTransactionJsonApi](docs/Model/OrderTransactionJsonApi.md)
- [OrderTransactionJsonApiAllOf](docs/Model/OrderTransactionJsonApiAllOf.md)
- [OrderTransactionJsonApiAllOfRelationships](docs/Model/OrderTransactionJsonApiAllOfRelationships.md)
- [OrderTransactionJsonApiAllOfRelationshipsCaptures](docs/Model/OrderTransactionJsonApiAllOfRelationshipsCaptures.md)
- [OrderTransactionJsonApiAllOfRelationshipsCapturesData](docs/Model/OrderTransactionJsonApiAllOfRelationshipsCapturesData.md)
- [OrderTransactionJsonApiAllOfRelationshipsCapturesLinks](docs/Model/OrderTransactionJsonApiAllOfRelationshipsCapturesLinks.md)
- [OrderTransactionJsonApiAllOfRelationshipsOrder](docs/Model/OrderTransactionJsonApiAllOfRelationshipsOrder.md)
- [OrderTransactionJsonApiAllOfRelationshipsOrderLinks](docs/Model/OrderTransactionJsonApiAllOfRelationshipsOrderLinks.md)
- [OrderTransactionJsonApiAllOfRelationshipsPaymentMethod](docs/Model/OrderTransactionJsonApiAllOfRelationshipsPaymentMethod.md)
- [OrderTransactionJsonApiAllOfRelationshipsPaymentMethodLinks](docs/Model/OrderTransactionJsonApiAllOfRelationshipsPaymentMethodLinks.md)
- [OrderTransactionJsonApiAllOfRelationshipsStateMachineState](docs/Model/OrderTransactionJsonApiAllOfRelationshipsStateMachineState.md)
- [OrderTransactionJsonApiAllOfRelationshipsStateMachineStateLinks](docs/Model/OrderTransactionJsonApiAllOfRelationshipsStateMachineStateLinks.md)
- [Pagination](docs/Model/Pagination.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentMethodJsonApi](docs/Model/PaymentMethodJsonApi.md)
- [PaymentMethodJsonApiAllOf](docs/Model/PaymentMethodJsonApiAllOf.md)
- [PaymentMethodJsonApiAllOfRelationships](docs/Model/PaymentMethodJsonApiAllOfRelationships.md)
- [PaymentMethodJsonApiAllOfRelationshipsAppPaymentMethod](docs/Model/PaymentMethodJsonApiAllOfRelationshipsAppPaymentMethod.md)
- [PaymentMethodJsonApiAllOfRelationshipsAppPaymentMethodData](docs/Model/PaymentMethodJsonApiAllOfRelationshipsAppPaymentMethodData.md)
- [PaymentMethodJsonApiAllOfRelationshipsAppPaymentMethodLinks](docs/Model/PaymentMethodJsonApiAllOfRelationshipsAppPaymentMethodLinks.md)
- [PaymentMethodJsonApiAllOfRelationshipsAvailabilityRule](docs/Model/PaymentMethodJsonApiAllOfRelationshipsAvailabilityRule.md)
- [PaymentMethodJsonApiAllOfRelationshipsAvailabilityRuleData](docs/Model/PaymentMethodJsonApiAllOfRelationshipsAvailabilityRuleData.md)
- [PaymentMethodJsonApiAllOfRelationshipsAvailabilityRuleLinks](docs/Model/PaymentMethodJsonApiAllOfRelationshipsAvailabilityRuleLinks.md)
- [PaymentMethodJsonApiAllOfRelationshipsCustomers](docs/Model/PaymentMethodJsonApiAllOfRelationshipsCustomers.md)
- [PaymentMethodJsonApiAllOfRelationshipsCustomersLinks](docs/Model/PaymentMethodJsonApiAllOfRelationshipsCustomersLinks.md)
- [PaymentMethodJsonApiAllOfRelationshipsMedia](docs/Model/PaymentMethodJsonApiAllOfRelationshipsMedia.md)
- [PaymentMethodJsonApiAllOfRelationshipsMediaLinks](docs/Model/PaymentMethodJsonApiAllOfRelationshipsMediaLinks.md)
- [PaymentMethodJsonApiAllOfRelationshipsOrderTransactions](docs/Model/PaymentMethodJsonApiAllOfRelationshipsOrderTransactions.md)
- [PaymentMethodJsonApiAllOfRelationshipsOrderTransactionsData](docs/Model/PaymentMethodJsonApiAllOfRelationshipsOrderTransactionsData.md)
- [PaymentMethodJsonApiAllOfRelationshipsOrderTransactionsLinks](docs/Model/PaymentMethodJsonApiAllOfRelationshipsOrderTransactionsLinks.md)
- [PaymentMethodJsonApiAllOfRelationshipsPlugin](docs/Model/PaymentMethodJsonApiAllOfRelationshipsPlugin.md)
- [PaymentMethodJsonApiAllOfRelationshipsPluginData](docs/Model/PaymentMethodJsonApiAllOfRelationshipsPluginData.md)
- [PaymentMethodJsonApiAllOfRelationshipsPluginLinks](docs/Model/PaymentMethodJsonApiAllOfRelationshipsPluginLinks.md)
- [PaymentMethodJsonApiAllOfRelationshipsSalesChannelDefaultAssignments](docs/Model/PaymentMethodJsonApiAllOfRelationshipsSalesChannelDefaultAssignments.md)
- [PaymentMethodJsonApiAllOfRelationshipsSalesChannelDefaultAssignmentsLinks](docs/Model/PaymentMethodJsonApiAllOfRelationshipsSalesChannelDefaultAssignmentsLinks.md)
- [PaymentMethodJsonApiAllOfRelationshipsSalesChannels](docs/Model/PaymentMethodJsonApiAllOfRelationshipsSalesChannels.md)
- [PaymentMethodJsonApiAllOfRelationshipsSalesChannelsLinks](docs/Model/PaymentMethodJsonApiAllOfRelationshipsSalesChannelsLinks.md)
- [Plugin](docs/Model/Plugin.md)
- [PluginJsonApi](docs/Model/PluginJsonApi.md)
- [PluginJsonApiAllOf](docs/Model/PluginJsonApiAllOf.md)
- [PluginJsonApiAllOfRelationships](docs/Model/PluginJsonApiAllOfRelationships.md)
- [PluginJsonApiAllOfRelationshipsPaymentMethods](docs/Model/PluginJsonApiAllOfRelationshipsPaymentMethods.md)
- [PluginJsonApiAllOfRelationshipsPaymentMethodsLinks](docs/Model/PluginJsonApiAllOfRelationshipsPaymentMethodsLinks.md)
- [Product](docs/Model/Product.md)
- [ProductCategory](docs/Model/ProductCategory.md)
- [ProductCategoryTree](docs/Model/ProductCategoryTree.md)
- [ProductConfiguratorSetting](docs/Model/ProductConfiguratorSetting.md)
- [ProductConfiguratorSettingJsonApi](docs/Model/ProductConfiguratorSettingJsonApi.md)
- [ProductConfiguratorSettingJsonApiAllOf](docs/Model/ProductConfiguratorSettingJsonApiAllOf.md)
- [ProductConfiguratorSettingJsonApiAllOfRelationships](docs/Model/ProductConfiguratorSettingJsonApiAllOfRelationships.md)
- [ProductConfiguratorSettingJsonApiAllOfRelationshipsMedia](docs/Model/ProductConfiguratorSettingJsonApiAllOfRelationshipsMedia.md)
- [ProductConfiguratorSettingJsonApiAllOfRelationshipsMediaLinks](docs/Model/ProductConfiguratorSettingJsonApiAllOfRelationshipsMediaLinks.md)
- [ProductConfiguratorSettingJsonApiAllOfRelationshipsOption](docs/Model/ProductConfiguratorSettingJsonApiAllOfRelationshipsOption.md)
- [ProductConfiguratorSettingJsonApiAllOfRelationshipsOptionData](docs/Model/ProductConfiguratorSettingJsonApiAllOfRelationshipsOptionData.md)
- [ProductConfiguratorSettingJsonApiAllOfRelationshipsOptionLinks](docs/Model/ProductConfiguratorSettingJsonApiAllOfRelationshipsOptionLinks.md)
- [ProductConfiguratorSettingJsonApiAllOfRelationshipsProduct](docs/Model/ProductConfiguratorSettingJsonApiAllOfRelationshipsProduct.md)
- [ProductConfiguratorSettingJsonApiAllOfRelationshipsProductLinks](docs/Model/ProductConfiguratorSettingJsonApiAllOfRelationshipsProductLinks.md)
- [ProductCrossSelling](docs/Model/ProductCrossSelling.md)
- [ProductCrossSellingAssignedProducts](docs/Model/ProductCrossSellingAssignedProducts.md)
- [ProductCrossSellingAssignedProductsJsonApi](docs/Model/ProductCrossSellingAssignedProductsJsonApi.md)
- [ProductCrossSellingAssignedProductsJsonApiAllOf](docs/Model/ProductCrossSellingAssignedProductsJsonApiAllOf.md)
- [ProductCrossSellingAssignedProductsJsonApiAllOfRelationships](docs/Model/ProductCrossSellingAssignedProductsJsonApiAllOfRelationships.md)
- [ProductCrossSellingAssignedProductsJsonApiAllOfRelationshipsCrossSelling](docs/Model/ProductCrossSellingAssignedProductsJsonApiAllOfRelationshipsCrossSelling.md)
- [ProductCrossSellingAssignedProductsJsonApiAllOfRelationshipsCrossSellingData](docs/Model/ProductCrossSellingAssignedProductsJsonApiAllOfRelationshipsCrossSellingData.md)
- [ProductCrossSellingAssignedProductsJsonApiAllOfRelationshipsCrossSellingLinks](docs/Model/ProductCrossSellingAssignedProductsJsonApiAllOfRelationshipsCrossSellingLinks.md)
- [ProductCrossSellingAssignedProductsJsonApiAllOfRelationshipsProduct](docs/Model/ProductCrossSellingAssignedProductsJsonApiAllOfRelationshipsProduct.md)
- [ProductCrossSellingAssignedProductsJsonApiAllOfRelationshipsProductLinks](docs/Model/ProductCrossSellingAssignedProductsJsonApiAllOfRelationshipsProductLinks.md)
- [ProductCrossSellingJsonApi](docs/Model/ProductCrossSellingJsonApi.md)
- [ProductCrossSellingJsonApiAllOf](docs/Model/ProductCrossSellingJsonApiAllOf.md)
- [ProductCrossSellingJsonApiAllOfRelationships](docs/Model/ProductCrossSellingJsonApiAllOfRelationships.md)
- [ProductCrossSellingJsonApiAllOfRelationshipsAssignedProducts](docs/Model/ProductCrossSellingJsonApiAllOfRelationshipsAssignedProducts.md)
- [ProductCrossSellingJsonApiAllOfRelationshipsAssignedProductsData](docs/Model/ProductCrossSellingJsonApiAllOfRelationshipsAssignedProductsData.md)
- [ProductCrossSellingJsonApiAllOfRelationshipsAssignedProductsLinks](docs/Model/ProductCrossSellingJsonApiAllOfRelationshipsAssignedProductsLinks.md)
- [ProductCrossSellingJsonApiAllOfRelationshipsProduct](docs/Model/ProductCrossSellingJsonApiAllOfRelationshipsProduct.md)
- [ProductCrossSellingJsonApiAllOfRelationshipsProductLinks](docs/Model/ProductCrossSellingJsonApiAllOfRelationshipsProductLinks.md)
- [ProductCrossSellingJsonApiAllOfRelationshipsProductStream](docs/Model/ProductCrossSellingJsonApiAllOfRelationshipsProductStream.md)
- [ProductCrossSellingJsonApiAllOfRelationshipsProductStreamLinks](docs/Model/ProductCrossSellingJsonApiAllOfRelationshipsProductStreamLinks.md)
- [ProductCustomFieldSet](docs/Model/ProductCustomFieldSet.md)
- [ProductDownload](docs/Model/ProductDownload.md)
- [ProductDownloadJsonApi](docs/Model/ProductDownloadJsonApi.md)
- [ProductDownloadJsonApiAllOf](docs/Model/ProductDownloadJsonApiAllOf.md)
- [ProductDownloadJsonApiAllOfRelationships](docs/Model/ProductDownloadJsonApiAllOfRelationships.md)
- [ProductDownloadJsonApiAllOfRelationshipsMedia](docs/Model/ProductDownloadJsonApiAllOfRelationshipsMedia.md)
- [ProductDownloadJsonApiAllOfRelationshipsMediaLinks](docs/Model/ProductDownloadJsonApiAllOfRelationshipsMediaLinks.md)
- [ProductDownloadJsonApiAllOfRelationshipsProduct](docs/Model/ProductDownloadJsonApiAllOfRelationshipsProduct.md)
- [ProductDownloadJsonApiAllOfRelationshipsProductLinks](docs/Model/ProductDownloadJsonApiAllOfRelationshipsProductLinks.md)
- [ProductExport](docs/Model/ProductExport.md)
- [ProductExportJsonApi](docs/Model/ProductExportJsonApi.md)
- [ProductExportJsonApiAllOf](docs/Model/ProductExportJsonApiAllOf.md)
- [ProductExportJsonApiAllOfRelationships](docs/Model/ProductExportJsonApiAllOfRelationships.md)
- [ProductExportJsonApiAllOfRelationshipsCurrency](docs/Model/ProductExportJsonApiAllOfRelationshipsCurrency.md)
- [ProductExportJsonApiAllOfRelationshipsCurrencyLinks](docs/Model/ProductExportJsonApiAllOfRelationshipsCurrencyLinks.md)
- [ProductExportJsonApiAllOfRelationshipsProductStream](docs/Model/ProductExportJsonApiAllOfRelationshipsProductStream.md)
- [ProductExportJsonApiAllOfRelationshipsProductStreamLinks](docs/Model/ProductExportJsonApiAllOfRelationshipsProductStreamLinks.md)
- [ProductExportJsonApiAllOfRelationshipsSalesChannel](docs/Model/ProductExportJsonApiAllOfRelationshipsSalesChannel.md)
- [ProductExportJsonApiAllOfRelationshipsSalesChannelDomain](docs/Model/ProductExportJsonApiAllOfRelationshipsSalesChannelDomain.md)
- [ProductExportJsonApiAllOfRelationshipsSalesChannelDomainData](docs/Model/ProductExportJsonApiAllOfRelationshipsSalesChannelDomainData.md)
- [ProductExportJsonApiAllOfRelationshipsSalesChannelDomainLinks](docs/Model/ProductExportJsonApiAllOfRelationshipsSalesChannelDomainLinks.md)
- [ProductExportJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/ProductExportJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [ProductExportJsonApiAllOfRelationshipsStorefrontSalesChannel](docs/Model/ProductExportJsonApiAllOfRelationshipsStorefrontSalesChannel.md)
- [ProductExportJsonApiAllOfRelationshipsStorefrontSalesChannelData](docs/Model/ProductExportJsonApiAllOfRelationshipsStorefrontSalesChannelData.md)
- [ProductExportJsonApiAllOfRelationshipsStorefrontSalesChannelLinks](docs/Model/ProductExportJsonApiAllOfRelationshipsStorefrontSalesChannelLinks.md)
- [ProductFeatureSet](docs/Model/ProductFeatureSet.md)
- [ProductFeatureSetJsonApi](docs/Model/ProductFeatureSetJsonApi.md)
- [ProductFeatureSetJsonApiAllOf](docs/Model/ProductFeatureSetJsonApiAllOf.md)
- [ProductFeatureSetJsonApiAllOfRelationships](docs/Model/ProductFeatureSetJsonApiAllOfRelationships.md)
- [ProductFeatureSetJsonApiAllOfRelationshipsProducts](docs/Model/ProductFeatureSetJsonApiAllOfRelationshipsProducts.md)
- [ProductFeatureSetJsonApiAllOfRelationshipsProductsLinks](docs/Model/ProductFeatureSetJsonApiAllOfRelationshipsProductsLinks.md)
- [ProductJsonApi](docs/Model/ProductJsonApi.md)
- [ProductJsonApiAllOf](docs/Model/ProductJsonApiAllOf.md)
- [ProductJsonApiAllOfRelationships](docs/Model/ProductJsonApiAllOfRelationships.md)
- [ProductJsonApiAllOfRelationshipsCanonicalProduct](docs/Model/ProductJsonApiAllOfRelationshipsCanonicalProduct.md)
- [ProductJsonApiAllOfRelationshipsCanonicalProductData](docs/Model/ProductJsonApiAllOfRelationshipsCanonicalProductData.md)
- [ProductJsonApiAllOfRelationshipsCanonicalProductLinks](docs/Model/ProductJsonApiAllOfRelationshipsCanonicalProductLinks.md)
- [ProductJsonApiAllOfRelationshipsCategories](docs/Model/ProductJsonApiAllOfRelationshipsCategories.md)
- [ProductJsonApiAllOfRelationshipsCategoriesLinks](docs/Model/ProductJsonApiAllOfRelationshipsCategoriesLinks.md)
- [ProductJsonApiAllOfRelationshipsCategoriesRo](docs/Model/ProductJsonApiAllOfRelationshipsCategoriesRo.md)
- [ProductJsonApiAllOfRelationshipsCategoriesRoData](docs/Model/ProductJsonApiAllOfRelationshipsCategoriesRoData.md)
- [ProductJsonApiAllOfRelationshipsCategoriesRoLinks](docs/Model/ProductJsonApiAllOfRelationshipsCategoriesRoLinks.md)
- [ProductJsonApiAllOfRelationshipsChildren](docs/Model/ProductJsonApiAllOfRelationshipsChildren.md)
- [ProductJsonApiAllOfRelationshipsChildrenData](docs/Model/ProductJsonApiAllOfRelationshipsChildrenData.md)
- [ProductJsonApiAllOfRelationshipsChildrenLinks](docs/Model/ProductJsonApiAllOfRelationshipsChildrenLinks.md)
- [ProductJsonApiAllOfRelationshipsCmsPage](docs/Model/ProductJsonApiAllOfRelationshipsCmsPage.md)
- [ProductJsonApiAllOfRelationshipsCmsPageLinks](docs/Model/ProductJsonApiAllOfRelationshipsCmsPageLinks.md)
- [ProductJsonApiAllOfRelationshipsConfiguratorSettings](docs/Model/ProductJsonApiAllOfRelationshipsConfiguratorSettings.md)
- [ProductJsonApiAllOfRelationshipsConfiguratorSettingsData](docs/Model/ProductJsonApiAllOfRelationshipsConfiguratorSettingsData.md)
- [ProductJsonApiAllOfRelationshipsConfiguratorSettingsLinks](docs/Model/ProductJsonApiAllOfRelationshipsConfiguratorSettingsLinks.md)
- [ProductJsonApiAllOfRelationshipsCover](docs/Model/ProductJsonApiAllOfRelationshipsCover.md)
- [ProductJsonApiAllOfRelationshipsCoverData](docs/Model/ProductJsonApiAllOfRelationshipsCoverData.md)
- [ProductJsonApiAllOfRelationshipsCoverLinks](docs/Model/ProductJsonApiAllOfRelationshipsCoverLinks.md)
- [ProductJsonApiAllOfRelationshipsCrossSellingAssignedProducts](docs/Model/ProductJsonApiAllOfRelationshipsCrossSellingAssignedProducts.md)
- [ProductJsonApiAllOfRelationshipsCrossSellingAssignedProductsData](docs/Model/ProductJsonApiAllOfRelationshipsCrossSellingAssignedProductsData.md)
- [ProductJsonApiAllOfRelationshipsCrossSellingAssignedProductsLinks](docs/Model/ProductJsonApiAllOfRelationshipsCrossSellingAssignedProductsLinks.md)
- [ProductJsonApiAllOfRelationshipsCrossSellings](docs/Model/ProductJsonApiAllOfRelationshipsCrossSellings.md)
- [ProductJsonApiAllOfRelationshipsCrossSellingsData](docs/Model/ProductJsonApiAllOfRelationshipsCrossSellingsData.md)
- [ProductJsonApiAllOfRelationshipsCrossSellingsLinks](docs/Model/ProductJsonApiAllOfRelationshipsCrossSellingsLinks.md)
- [ProductJsonApiAllOfRelationshipsCustomFieldSets](docs/Model/ProductJsonApiAllOfRelationshipsCustomFieldSets.md)
- [ProductJsonApiAllOfRelationshipsCustomFieldSetsLinks](docs/Model/ProductJsonApiAllOfRelationshipsCustomFieldSetsLinks.md)
- [ProductJsonApiAllOfRelationshipsDeliveryTime](docs/Model/ProductJsonApiAllOfRelationshipsDeliveryTime.md)
- [ProductJsonApiAllOfRelationshipsDeliveryTimeData](docs/Model/ProductJsonApiAllOfRelationshipsDeliveryTimeData.md)
- [ProductJsonApiAllOfRelationshipsDeliveryTimeLinks](docs/Model/ProductJsonApiAllOfRelationshipsDeliveryTimeLinks.md)
- [ProductJsonApiAllOfRelationshipsDownloads](docs/Model/ProductJsonApiAllOfRelationshipsDownloads.md)
- [ProductJsonApiAllOfRelationshipsDownloadsData](docs/Model/ProductJsonApiAllOfRelationshipsDownloadsData.md)
- [ProductJsonApiAllOfRelationshipsDownloadsLinks](docs/Model/ProductJsonApiAllOfRelationshipsDownloadsLinks.md)
- [ProductJsonApiAllOfRelationshipsFeatureSet](docs/Model/ProductJsonApiAllOfRelationshipsFeatureSet.md)
- [ProductJsonApiAllOfRelationshipsFeatureSetData](docs/Model/ProductJsonApiAllOfRelationshipsFeatureSetData.md)
- [ProductJsonApiAllOfRelationshipsFeatureSetLinks](docs/Model/ProductJsonApiAllOfRelationshipsFeatureSetLinks.md)
- [ProductJsonApiAllOfRelationshipsMainCategories](docs/Model/ProductJsonApiAllOfRelationshipsMainCategories.md)
- [ProductJsonApiAllOfRelationshipsMainCategoriesLinks](docs/Model/ProductJsonApiAllOfRelationshipsMainCategoriesLinks.md)
- [ProductJsonApiAllOfRelationshipsManufacturer](docs/Model/ProductJsonApiAllOfRelationshipsManufacturer.md)
- [ProductJsonApiAllOfRelationshipsManufacturerData](docs/Model/ProductJsonApiAllOfRelationshipsManufacturerData.md)
- [ProductJsonApiAllOfRelationshipsManufacturerLinks](docs/Model/ProductJsonApiAllOfRelationshipsManufacturerLinks.md)
- [ProductJsonApiAllOfRelationshipsMedia](docs/Model/ProductJsonApiAllOfRelationshipsMedia.md)
- [ProductJsonApiAllOfRelationshipsMediaData](docs/Model/ProductJsonApiAllOfRelationshipsMediaData.md)
- [ProductJsonApiAllOfRelationshipsMediaLinks](docs/Model/ProductJsonApiAllOfRelationshipsMediaLinks.md)
- [ProductJsonApiAllOfRelationshipsOptions](docs/Model/ProductJsonApiAllOfRelationshipsOptions.md)
- [ProductJsonApiAllOfRelationshipsOptionsData](docs/Model/ProductJsonApiAllOfRelationshipsOptionsData.md)
- [ProductJsonApiAllOfRelationshipsOptionsLinks](docs/Model/ProductJsonApiAllOfRelationshipsOptionsLinks.md)
- [ProductJsonApiAllOfRelationshipsOrderLineItems](docs/Model/ProductJsonApiAllOfRelationshipsOrderLineItems.md)
- [ProductJsonApiAllOfRelationshipsOrderLineItemsLinks](docs/Model/ProductJsonApiAllOfRelationshipsOrderLineItemsLinks.md)
- [ProductJsonApiAllOfRelationshipsParent](docs/Model/ProductJsonApiAllOfRelationshipsParent.md)
- [ProductJsonApiAllOfRelationshipsParentData](docs/Model/ProductJsonApiAllOfRelationshipsParentData.md)
- [ProductJsonApiAllOfRelationshipsParentLinks](docs/Model/ProductJsonApiAllOfRelationshipsParentLinks.md)
- [ProductJsonApiAllOfRelationshipsPrices](docs/Model/ProductJsonApiAllOfRelationshipsPrices.md)
- [ProductJsonApiAllOfRelationshipsPricesData](docs/Model/ProductJsonApiAllOfRelationshipsPricesData.md)
- [ProductJsonApiAllOfRelationshipsPricesLinks](docs/Model/ProductJsonApiAllOfRelationshipsPricesLinks.md)
- [ProductJsonApiAllOfRelationshipsProductReviews](docs/Model/ProductJsonApiAllOfRelationshipsProductReviews.md)
- [ProductJsonApiAllOfRelationshipsProductReviewsLinks](docs/Model/ProductJsonApiAllOfRelationshipsProductReviewsLinks.md)
- [ProductJsonApiAllOfRelationshipsProperties](docs/Model/ProductJsonApiAllOfRelationshipsProperties.md)
- [ProductJsonApiAllOfRelationshipsPropertiesData](docs/Model/ProductJsonApiAllOfRelationshipsPropertiesData.md)
- [ProductJsonApiAllOfRelationshipsPropertiesLinks](docs/Model/ProductJsonApiAllOfRelationshipsPropertiesLinks.md)
- [ProductJsonApiAllOfRelationshipsSearchKeywords](docs/Model/ProductJsonApiAllOfRelationshipsSearchKeywords.md)
- [ProductJsonApiAllOfRelationshipsSearchKeywordsData](docs/Model/ProductJsonApiAllOfRelationshipsSearchKeywordsData.md)
- [ProductJsonApiAllOfRelationshipsSearchKeywordsLinks](docs/Model/ProductJsonApiAllOfRelationshipsSearchKeywordsLinks.md)
- [ProductJsonApiAllOfRelationshipsSeoUrls](docs/Model/ProductJsonApiAllOfRelationshipsSeoUrls.md)
- [ProductJsonApiAllOfRelationshipsSeoUrlsLinks](docs/Model/ProductJsonApiAllOfRelationshipsSeoUrlsLinks.md)
- [ProductJsonApiAllOfRelationshipsStreams](docs/Model/ProductJsonApiAllOfRelationshipsStreams.md)
- [ProductJsonApiAllOfRelationshipsStreamsData](docs/Model/ProductJsonApiAllOfRelationshipsStreamsData.md)
- [ProductJsonApiAllOfRelationshipsStreamsLinks](docs/Model/ProductJsonApiAllOfRelationshipsStreamsLinks.md)
- [ProductJsonApiAllOfRelationshipsTags](docs/Model/ProductJsonApiAllOfRelationshipsTags.md)
- [ProductJsonApiAllOfRelationshipsTagsLinks](docs/Model/ProductJsonApiAllOfRelationshipsTagsLinks.md)
- [ProductJsonApiAllOfRelationshipsTax](docs/Model/ProductJsonApiAllOfRelationshipsTax.md)
- [ProductJsonApiAllOfRelationshipsTaxData](docs/Model/ProductJsonApiAllOfRelationshipsTaxData.md)
- [ProductJsonApiAllOfRelationshipsTaxLinks](docs/Model/ProductJsonApiAllOfRelationshipsTaxLinks.md)
- [ProductJsonApiAllOfRelationshipsUnit](docs/Model/ProductJsonApiAllOfRelationshipsUnit.md)
- [ProductJsonApiAllOfRelationshipsUnitData](docs/Model/ProductJsonApiAllOfRelationshipsUnitData.md)
- [ProductJsonApiAllOfRelationshipsUnitLinks](docs/Model/ProductJsonApiAllOfRelationshipsUnitLinks.md)
- [ProductJsonApiAllOfRelationshipsVisibilities](docs/Model/ProductJsonApiAllOfRelationshipsVisibilities.md)
- [ProductJsonApiAllOfRelationshipsVisibilitiesData](docs/Model/ProductJsonApiAllOfRelationshipsVisibilitiesData.md)
- [ProductJsonApiAllOfRelationshipsVisibilitiesLinks](docs/Model/ProductJsonApiAllOfRelationshipsVisibilitiesLinks.md)
- [ProductJsonApiAllOfRelationshipsWishlists](docs/Model/ProductJsonApiAllOfRelationshipsWishlists.md)
- [ProductJsonApiAllOfRelationshipsWishlistsData](docs/Model/ProductJsonApiAllOfRelationshipsWishlistsData.md)
- [ProductJsonApiAllOfRelationshipsWishlistsLinks](docs/Model/ProductJsonApiAllOfRelationshipsWishlistsLinks.md)
- [ProductKeywordDictionary](docs/Model/ProductKeywordDictionary.md)
- [ProductKeywordDictionaryJsonApi](docs/Model/ProductKeywordDictionaryJsonApi.md)
- [ProductKeywordDictionaryJsonApiAllOf](docs/Model/ProductKeywordDictionaryJsonApiAllOf.md)
- [ProductKeywordDictionaryJsonApiAllOfRelationships](docs/Model/ProductKeywordDictionaryJsonApiAllOfRelationships.md)
- [ProductKeywordDictionaryJsonApiAllOfRelationshipsLanguage](docs/Model/ProductKeywordDictionaryJsonApiAllOfRelationshipsLanguage.md)
- [ProductKeywordDictionaryJsonApiAllOfRelationshipsLanguageLinks](docs/Model/ProductKeywordDictionaryJsonApiAllOfRelationshipsLanguageLinks.md)
- [ProductManufacturer](docs/Model/ProductManufacturer.md)
- [ProductManufacturerJsonApi](docs/Model/ProductManufacturerJsonApi.md)
- [ProductManufacturerJsonApiAllOf](docs/Model/ProductManufacturerJsonApiAllOf.md)
- [ProductManufacturerJsonApiAllOfRelationships](docs/Model/ProductManufacturerJsonApiAllOfRelationships.md)
- [ProductManufacturerJsonApiAllOfRelationshipsMedia](docs/Model/ProductManufacturerJsonApiAllOfRelationshipsMedia.md)
- [ProductManufacturerJsonApiAllOfRelationshipsMediaLinks](docs/Model/ProductManufacturerJsonApiAllOfRelationshipsMediaLinks.md)
- [ProductManufacturerJsonApiAllOfRelationshipsProducts](docs/Model/ProductManufacturerJsonApiAllOfRelationshipsProducts.md)
- [ProductManufacturerJsonApiAllOfRelationshipsProductsLinks](docs/Model/ProductManufacturerJsonApiAllOfRelationshipsProductsLinks.md)
- [ProductMedia](docs/Model/ProductMedia.md)
- [ProductMediaJsonApi](docs/Model/ProductMediaJsonApi.md)
- [ProductMediaJsonApiAllOf](docs/Model/ProductMediaJsonApiAllOf.md)
- [ProductMediaJsonApiAllOfRelationships](docs/Model/ProductMediaJsonApiAllOfRelationships.md)
- [ProductMediaJsonApiAllOfRelationshipsCoverProducts](docs/Model/ProductMediaJsonApiAllOfRelationshipsCoverProducts.md)
- [ProductMediaJsonApiAllOfRelationshipsCoverProductsData](docs/Model/ProductMediaJsonApiAllOfRelationshipsCoverProductsData.md)
- [ProductMediaJsonApiAllOfRelationshipsCoverProductsLinks](docs/Model/ProductMediaJsonApiAllOfRelationshipsCoverProductsLinks.md)
- [ProductMediaJsonApiAllOfRelationshipsMedia](docs/Model/ProductMediaJsonApiAllOfRelationshipsMedia.md)
- [ProductMediaJsonApiAllOfRelationshipsMediaLinks](docs/Model/ProductMediaJsonApiAllOfRelationshipsMediaLinks.md)
- [ProductMediaJsonApiAllOfRelationshipsProduct](docs/Model/ProductMediaJsonApiAllOfRelationshipsProduct.md)
- [ProductMediaJsonApiAllOfRelationshipsProductLinks](docs/Model/ProductMediaJsonApiAllOfRelationshipsProductLinks.md)
- [ProductOption](docs/Model/ProductOption.md)
- [ProductPrice](docs/Model/ProductPrice.md)
- [ProductPriceJsonApi](docs/Model/ProductPriceJsonApi.md)
- [ProductPriceJsonApiAllOf](docs/Model/ProductPriceJsonApiAllOf.md)
- [ProductPriceJsonApiAllOfRelationships](docs/Model/ProductPriceJsonApiAllOfRelationships.md)
- [ProductPriceJsonApiAllOfRelationshipsProduct](docs/Model/ProductPriceJsonApiAllOfRelationshipsProduct.md)
- [ProductPriceJsonApiAllOfRelationshipsProductLinks](docs/Model/ProductPriceJsonApiAllOfRelationshipsProductLinks.md)
- [ProductPriceJsonApiAllOfRelationshipsRule](docs/Model/ProductPriceJsonApiAllOfRelationshipsRule.md)
- [ProductPriceJsonApiAllOfRelationshipsRuleLinks](docs/Model/ProductPriceJsonApiAllOfRelationshipsRuleLinks.md)
- [ProductProperty](docs/Model/ProductProperty.md)
- [ProductReview](docs/Model/ProductReview.md)
- [ProductReviewJsonApi](docs/Model/ProductReviewJsonApi.md)
- [ProductReviewJsonApiAllOf](docs/Model/ProductReviewJsonApiAllOf.md)
- [ProductReviewJsonApiAllOfRelationships](docs/Model/ProductReviewJsonApiAllOfRelationships.md)
- [ProductReviewJsonApiAllOfRelationshipsCustomer](docs/Model/ProductReviewJsonApiAllOfRelationshipsCustomer.md)
- [ProductReviewJsonApiAllOfRelationshipsCustomerLinks](docs/Model/ProductReviewJsonApiAllOfRelationshipsCustomerLinks.md)
- [ProductReviewJsonApiAllOfRelationshipsLanguage](docs/Model/ProductReviewJsonApiAllOfRelationshipsLanguage.md)
- [ProductReviewJsonApiAllOfRelationshipsLanguageLinks](docs/Model/ProductReviewJsonApiAllOfRelationshipsLanguageLinks.md)
- [ProductReviewJsonApiAllOfRelationshipsProduct](docs/Model/ProductReviewJsonApiAllOfRelationshipsProduct.md)
- [ProductReviewJsonApiAllOfRelationshipsProductLinks](docs/Model/ProductReviewJsonApiAllOfRelationshipsProductLinks.md)
- [ProductReviewJsonApiAllOfRelationshipsSalesChannel](docs/Model/ProductReviewJsonApiAllOfRelationshipsSalesChannel.md)
- [ProductReviewJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/ProductReviewJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [ProductSearchConfig](docs/Model/ProductSearchConfig.md)
- [ProductSearchConfigField](docs/Model/ProductSearchConfigField.md)
- [ProductSearchConfigFieldJsonApi](docs/Model/ProductSearchConfigFieldJsonApi.md)
- [ProductSearchConfigFieldJsonApiAllOf](docs/Model/ProductSearchConfigFieldJsonApiAllOf.md)
- [ProductSearchConfigFieldJsonApiAllOfRelationships](docs/Model/ProductSearchConfigFieldJsonApiAllOfRelationships.md)
- [ProductSearchConfigFieldJsonApiAllOfRelationshipsCustomField](docs/Model/ProductSearchConfigFieldJsonApiAllOfRelationshipsCustomField.md)
- [ProductSearchConfigFieldJsonApiAllOfRelationshipsCustomFieldData](docs/Model/ProductSearchConfigFieldJsonApiAllOfRelationshipsCustomFieldData.md)
- [ProductSearchConfigFieldJsonApiAllOfRelationshipsCustomFieldLinks](docs/Model/ProductSearchConfigFieldJsonApiAllOfRelationshipsCustomFieldLinks.md)
- [ProductSearchConfigFieldJsonApiAllOfRelationshipsSearchConfig](docs/Model/ProductSearchConfigFieldJsonApiAllOfRelationshipsSearchConfig.md)
- [ProductSearchConfigFieldJsonApiAllOfRelationshipsSearchConfigData](docs/Model/ProductSearchConfigFieldJsonApiAllOfRelationshipsSearchConfigData.md)
- [ProductSearchConfigFieldJsonApiAllOfRelationshipsSearchConfigLinks](docs/Model/ProductSearchConfigFieldJsonApiAllOfRelationshipsSearchConfigLinks.md)
- [ProductSearchConfigJsonApi](docs/Model/ProductSearchConfigJsonApi.md)
- [ProductSearchConfigJsonApiAllOf](docs/Model/ProductSearchConfigJsonApiAllOf.md)
- [ProductSearchConfigJsonApiAllOfRelationships](docs/Model/ProductSearchConfigJsonApiAllOfRelationships.md)
- [ProductSearchConfigJsonApiAllOfRelationshipsConfigFields](docs/Model/ProductSearchConfigJsonApiAllOfRelationshipsConfigFields.md)
- [ProductSearchConfigJsonApiAllOfRelationshipsConfigFieldsData](docs/Model/ProductSearchConfigJsonApiAllOfRelationshipsConfigFieldsData.md)
- [ProductSearchConfigJsonApiAllOfRelationshipsConfigFieldsLinks](docs/Model/ProductSearchConfigJsonApiAllOfRelationshipsConfigFieldsLinks.md)
- [ProductSearchConfigJsonApiAllOfRelationshipsLanguage](docs/Model/ProductSearchConfigJsonApiAllOfRelationshipsLanguage.md)
- [ProductSearchConfigJsonApiAllOfRelationshipsLanguageLinks](docs/Model/ProductSearchConfigJsonApiAllOfRelationshipsLanguageLinks.md)
- [ProductSearchKeyword](docs/Model/ProductSearchKeyword.md)
- [ProductSearchKeywordJsonApi](docs/Model/ProductSearchKeywordJsonApi.md)
- [ProductSearchKeywordJsonApiAllOf](docs/Model/ProductSearchKeywordJsonApiAllOf.md)
- [ProductSearchKeywordJsonApiAllOfRelationships](docs/Model/ProductSearchKeywordJsonApiAllOfRelationships.md)
- [ProductSearchKeywordJsonApiAllOfRelationshipsLanguage](docs/Model/ProductSearchKeywordJsonApiAllOfRelationshipsLanguage.md)
- [ProductSearchKeywordJsonApiAllOfRelationshipsLanguageLinks](docs/Model/ProductSearchKeywordJsonApiAllOfRelationshipsLanguageLinks.md)
- [ProductSearchKeywordJsonApiAllOfRelationshipsProduct](docs/Model/ProductSearchKeywordJsonApiAllOfRelationshipsProduct.md)
- [ProductSearchKeywordJsonApiAllOfRelationshipsProductLinks](docs/Model/ProductSearchKeywordJsonApiAllOfRelationshipsProductLinks.md)
- [ProductSorting](docs/Model/ProductSorting.md)
- [ProductSortingJsonApi](docs/Model/ProductSortingJsonApi.md)
- [ProductSortingJsonApiAllOf](docs/Model/ProductSortingJsonApiAllOf.md)
- [ProductStream](docs/Model/ProductStream.md)
- [ProductStreamFilter](docs/Model/ProductStreamFilter.md)
- [ProductStreamFilterJsonApi](docs/Model/ProductStreamFilterJsonApi.md)
- [ProductStreamFilterJsonApiAllOf](docs/Model/ProductStreamFilterJsonApiAllOf.md)
- [ProductStreamFilterJsonApiAllOfRelationships](docs/Model/ProductStreamFilterJsonApiAllOfRelationships.md)
- [ProductStreamFilterJsonApiAllOfRelationshipsParent](docs/Model/ProductStreamFilterJsonApiAllOfRelationshipsParent.md)
- [ProductStreamFilterJsonApiAllOfRelationshipsParentData](docs/Model/ProductStreamFilterJsonApiAllOfRelationshipsParentData.md)
- [ProductStreamFilterJsonApiAllOfRelationshipsParentLinks](docs/Model/ProductStreamFilterJsonApiAllOfRelationshipsParentLinks.md)
- [ProductStreamFilterJsonApiAllOfRelationshipsProductStream](docs/Model/ProductStreamFilterJsonApiAllOfRelationshipsProductStream.md)
- [ProductStreamFilterJsonApiAllOfRelationshipsProductStreamLinks](docs/Model/ProductStreamFilterJsonApiAllOfRelationshipsProductStreamLinks.md)
- [ProductStreamFilterJsonApiAllOfRelationshipsQueries](docs/Model/ProductStreamFilterJsonApiAllOfRelationshipsQueries.md)
- [ProductStreamFilterJsonApiAllOfRelationshipsQueriesData](docs/Model/ProductStreamFilterJsonApiAllOfRelationshipsQueriesData.md)
- [ProductStreamFilterJsonApiAllOfRelationshipsQueriesLinks](docs/Model/ProductStreamFilterJsonApiAllOfRelationshipsQueriesLinks.md)
- [ProductStreamJsonApi](docs/Model/ProductStreamJsonApi.md)
- [ProductStreamJsonApiAllOf](docs/Model/ProductStreamJsonApiAllOf.md)
- [ProductStreamJsonApiAllOfRelationships](docs/Model/ProductStreamJsonApiAllOfRelationships.md)
- [ProductStreamJsonApiAllOfRelationshipsCategories](docs/Model/ProductStreamJsonApiAllOfRelationshipsCategories.md)
- [ProductStreamJsonApiAllOfRelationshipsCategoriesLinks](docs/Model/ProductStreamJsonApiAllOfRelationshipsCategoriesLinks.md)
- [ProductStreamJsonApiAllOfRelationshipsFilters](docs/Model/ProductStreamJsonApiAllOfRelationshipsFilters.md)
- [ProductStreamJsonApiAllOfRelationshipsFiltersData](docs/Model/ProductStreamJsonApiAllOfRelationshipsFiltersData.md)
- [ProductStreamJsonApiAllOfRelationshipsFiltersLinks](docs/Model/ProductStreamJsonApiAllOfRelationshipsFiltersLinks.md)
- [ProductStreamJsonApiAllOfRelationshipsProductCrossSellings](docs/Model/ProductStreamJsonApiAllOfRelationshipsProductCrossSellings.md)
- [ProductStreamJsonApiAllOfRelationshipsProductCrossSellingsData](docs/Model/ProductStreamJsonApiAllOfRelationshipsProductCrossSellingsData.md)
- [ProductStreamJsonApiAllOfRelationshipsProductCrossSellingsLinks](docs/Model/ProductStreamJsonApiAllOfRelationshipsProductCrossSellingsLinks.md)
- [ProductStreamJsonApiAllOfRelationshipsProductExports](docs/Model/ProductStreamJsonApiAllOfRelationshipsProductExports.md)
- [ProductStreamJsonApiAllOfRelationshipsProductExportsLinks](docs/Model/ProductStreamJsonApiAllOfRelationshipsProductExportsLinks.md)
- [ProductStreamMapping](docs/Model/ProductStreamMapping.md)
- [ProductTag](docs/Model/ProductTag.md)
- [ProductVisibility](docs/Model/ProductVisibility.md)
- [ProductVisibilityJsonApi](docs/Model/ProductVisibilityJsonApi.md)
- [ProductVisibilityJsonApiAllOf](docs/Model/ProductVisibilityJsonApiAllOf.md)
- [ProductVisibilityJsonApiAllOfRelationships](docs/Model/ProductVisibilityJsonApiAllOfRelationships.md)
- [ProductVisibilityJsonApiAllOfRelationshipsProduct](docs/Model/ProductVisibilityJsonApiAllOfRelationshipsProduct.md)
- [ProductVisibilityJsonApiAllOfRelationshipsProductLinks](docs/Model/ProductVisibilityJsonApiAllOfRelationshipsProductLinks.md)
- [ProductVisibilityJsonApiAllOfRelationshipsSalesChannel](docs/Model/ProductVisibilityJsonApiAllOfRelationshipsSalesChannel.md)
- [ProductVisibilityJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/ProductVisibilityJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [Promotion](docs/Model/Promotion.md)
- [PromotionCartRule](docs/Model/PromotionCartRule.md)
- [PromotionDiscount](docs/Model/PromotionDiscount.md)
- [PromotionDiscountJsonApi](docs/Model/PromotionDiscountJsonApi.md)
- [PromotionDiscountJsonApiAllOf](docs/Model/PromotionDiscountJsonApiAllOf.md)
- [PromotionDiscountJsonApiAllOfRelationships](docs/Model/PromotionDiscountJsonApiAllOfRelationships.md)
- [PromotionDiscountJsonApiAllOfRelationshipsDiscountRules](docs/Model/PromotionDiscountJsonApiAllOfRelationshipsDiscountRules.md)
- [PromotionDiscountJsonApiAllOfRelationshipsDiscountRulesData](docs/Model/PromotionDiscountJsonApiAllOfRelationshipsDiscountRulesData.md)
- [PromotionDiscountJsonApiAllOfRelationshipsDiscountRulesLinks](docs/Model/PromotionDiscountJsonApiAllOfRelationshipsDiscountRulesLinks.md)
- [PromotionDiscountJsonApiAllOfRelationshipsPromotion](docs/Model/PromotionDiscountJsonApiAllOfRelationshipsPromotion.md)
- [PromotionDiscountJsonApiAllOfRelationshipsPromotionDiscountPrices](docs/Model/PromotionDiscountJsonApiAllOfRelationshipsPromotionDiscountPrices.md)
- [PromotionDiscountJsonApiAllOfRelationshipsPromotionDiscountPricesLinks](docs/Model/PromotionDiscountJsonApiAllOfRelationshipsPromotionDiscountPricesLinks.md)
- [PromotionDiscountJsonApiAllOfRelationshipsPromotionLinks](docs/Model/PromotionDiscountJsonApiAllOfRelationshipsPromotionLinks.md)
- [PromotionDiscountPrices](docs/Model/PromotionDiscountPrices.md)
- [PromotionDiscountPricesJsonApi](docs/Model/PromotionDiscountPricesJsonApi.md)
- [PromotionDiscountPricesJsonApiAllOf](docs/Model/PromotionDiscountPricesJsonApiAllOf.md)
- [PromotionDiscountPricesJsonApiAllOfRelationships](docs/Model/PromotionDiscountPricesJsonApiAllOfRelationships.md)
- [PromotionDiscountPricesJsonApiAllOfRelationshipsCurrency](docs/Model/PromotionDiscountPricesJsonApiAllOfRelationshipsCurrency.md)
- [PromotionDiscountPricesJsonApiAllOfRelationshipsCurrencyLinks](docs/Model/PromotionDiscountPricesJsonApiAllOfRelationshipsCurrencyLinks.md)
- [PromotionDiscountPricesJsonApiAllOfRelationshipsPromotionDiscount](docs/Model/PromotionDiscountPricesJsonApiAllOfRelationshipsPromotionDiscount.md)
- [PromotionDiscountPricesJsonApiAllOfRelationshipsPromotionDiscountData](docs/Model/PromotionDiscountPricesJsonApiAllOfRelationshipsPromotionDiscountData.md)
- [PromotionDiscountPricesJsonApiAllOfRelationshipsPromotionDiscountLinks](docs/Model/PromotionDiscountPricesJsonApiAllOfRelationshipsPromotionDiscountLinks.md)
- [PromotionDiscountRule](docs/Model/PromotionDiscountRule.md)
- [PromotionIndividualCode](docs/Model/PromotionIndividualCode.md)
- [PromotionIndividualCodeJsonApi](docs/Model/PromotionIndividualCodeJsonApi.md)
- [PromotionIndividualCodeJsonApiAllOf](docs/Model/PromotionIndividualCodeJsonApiAllOf.md)
- [PromotionIndividualCodeJsonApiAllOfRelationships](docs/Model/PromotionIndividualCodeJsonApiAllOfRelationships.md)
- [PromotionIndividualCodeJsonApiAllOfRelationshipsPromotion](docs/Model/PromotionIndividualCodeJsonApiAllOfRelationshipsPromotion.md)
- [PromotionIndividualCodeJsonApiAllOfRelationshipsPromotionLinks](docs/Model/PromotionIndividualCodeJsonApiAllOfRelationshipsPromotionLinks.md)
- [PromotionJsonApi](docs/Model/PromotionJsonApi.md)
- [PromotionJsonApiAllOf](docs/Model/PromotionJsonApiAllOf.md)
- [PromotionJsonApiAllOfRelationships](docs/Model/PromotionJsonApiAllOfRelationships.md)
- [PromotionJsonApiAllOfRelationshipsCartRules](docs/Model/PromotionJsonApiAllOfRelationshipsCartRules.md)
- [PromotionJsonApiAllOfRelationshipsCartRulesData](docs/Model/PromotionJsonApiAllOfRelationshipsCartRulesData.md)
- [PromotionJsonApiAllOfRelationshipsCartRulesLinks](docs/Model/PromotionJsonApiAllOfRelationshipsCartRulesLinks.md)
- [PromotionJsonApiAllOfRelationshipsDiscounts](docs/Model/PromotionJsonApiAllOfRelationshipsDiscounts.md)
- [PromotionJsonApiAllOfRelationshipsDiscountsData](docs/Model/PromotionJsonApiAllOfRelationshipsDiscountsData.md)
- [PromotionJsonApiAllOfRelationshipsDiscountsLinks](docs/Model/PromotionJsonApiAllOfRelationshipsDiscountsLinks.md)
- [PromotionJsonApiAllOfRelationshipsIndividualCodes](docs/Model/PromotionJsonApiAllOfRelationshipsIndividualCodes.md)
- [PromotionJsonApiAllOfRelationshipsIndividualCodesData](docs/Model/PromotionJsonApiAllOfRelationshipsIndividualCodesData.md)
- [PromotionJsonApiAllOfRelationshipsIndividualCodesLinks](docs/Model/PromotionJsonApiAllOfRelationshipsIndividualCodesLinks.md)
- [PromotionJsonApiAllOfRelationshipsOrderLineItems](docs/Model/PromotionJsonApiAllOfRelationshipsOrderLineItems.md)
- [PromotionJsonApiAllOfRelationshipsOrderLineItemsLinks](docs/Model/PromotionJsonApiAllOfRelationshipsOrderLineItemsLinks.md)
- [PromotionJsonApiAllOfRelationshipsOrderRules](docs/Model/PromotionJsonApiAllOfRelationshipsOrderRules.md)
- [PromotionJsonApiAllOfRelationshipsOrderRulesData](docs/Model/PromotionJsonApiAllOfRelationshipsOrderRulesData.md)
- [PromotionJsonApiAllOfRelationshipsOrderRulesLinks](docs/Model/PromotionJsonApiAllOfRelationshipsOrderRulesLinks.md)
- [PromotionJsonApiAllOfRelationshipsPersonaCustomers](docs/Model/PromotionJsonApiAllOfRelationshipsPersonaCustomers.md)
- [PromotionJsonApiAllOfRelationshipsPersonaCustomersData](docs/Model/PromotionJsonApiAllOfRelationshipsPersonaCustomersData.md)
- [PromotionJsonApiAllOfRelationshipsPersonaCustomersLinks](docs/Model/PromotionJsonApiAllOfRelationshipsPersonaCustomersLinks.md)
- [PromotionJsonApiAllOfRelationshipsPersonaRules](docs/Model/PromotionJsonApiAllOfRelationshipsPersonaRules.md)
- [PromotionJsonApiAllOfRelationshipsPersonaRulesData](docs/Model/PromotionJsonApiAllOfRelationshipsPersonaRulesData.md)
- [PromotionJsonApiAllOfRelationshipsPersonaRulesLinks](docs/Model/PromotionJsonApiAllOfRelationshipsPersonaRulesLinks.md)
- [PromotionJsonApiAllOfRelationshipsSalesChannels](docs/Model/PromotionJsonApiAllOfRelationshipsSalesChannels.md)
- [PromotionJsonApiAllOfRelationshipsSalesChannelsData](docs/Model/PromotionJsonApiAllOfRelationshipsSalesChannelsData.md)
- [PromotionJsonApiAllOfRelationshipsSalesChannelsLinks](docs/Model/PromotionJsonApiAllOfRelationshipsSalesChannelsLinks.md)
- [PromotionJsonApiAllOfRelationshipsSetgroups](docs/Model/PromotionJsonApiAllOfRelationshipsSetgroups.md)
- [PromotionJsonApiAllOfRelationshipsSetgroupsData](docs/Model/PromotionJsonApiAllOfRelationshipsSetgroupsData.md)
- [PromotionJsonApiAllOfRelationshipsSetgroupsLinks](docs/Model/PromotionJsonApiAllOfRelationshipsSetgroupsLinks.md)
- [PromotionOrderRule](docs/Model/PromotionOrderRule.md)
- [PromotionPersonaCustomer](docs/Model/PromotionPersonaCustomer.md)
- [PromotionPersonaRule](docs/Model/PromotionPersonaRule.md)
- [PromotionSalesChannel](docs/Model/PromotionSalesChannel.md)
- [PromotionSalesChannelJsonApi](docs/Model/PromotionSalesChannelJsonApi.md)
- [PromotionSalesChannelJsonApiAllOf](docs/Model/PromotionSalesChannelJsonApiAllOf.md)
- [PromotionSalesChannelJsonApiAllOfRelationships](docs/Model/PromotionSalesChannelJsonApiAllOfRelationships.md)
- [PromotionSalesChannelJsonApiAllOfRelationshipsPromotion](docs/Model/PromotionSalesChannelJsonApiAllOfRelationshipsPromotion.md)
- [PromotionSalesChannelJsonApiAllOfRelationshipsPromotionLinks](docs/Model/PromotionSalesChannelJsonApiAllOfRelationshipsPromotionLinks.md)
- [PromotionSalesChannelJsonApiAllOfRelationshipsSalesChannel](docs/Model/PromotionSalesChannelJsonApiAllOfRelationshipsSalesChannel.md)
- [PromotionSalesChannelJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/PromotionSalesChannelJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [PromotionSetgroup](docs/Model/PromotionSetgroup.md)
- [PromotionSetgroupJsonApi](docs/Model/PromotionSetgroupJsonApi.md)
- [PromotionSetgroupJsonApiAllOf](docs/Model/PromotionSetgroupJsonApiAllOf.md)
- [PromotionSetgroupJsonApiAllOfRelationships](docs/Model/PromotionSetgroupJsonApiAllOfRelationships.md)
- [PromotionSetgroupJsonApiAllOfRelationshipsPromotion](docs/Model/PromotionSetgroupJsonApiAllOfRelationshipsPromotion.md)
- [PromotionSetgroupJsonApiAllOfRelationshipsPromotionLinks](docs/Model/PromotionSetgroupJsonApiAllOfRelationshipsPromotionLinks.md)
- [PromotionSetgroupJsonApiAllOfRelationshipsSetGroupRules](docs/Model/PromotionSetgroupJsonApiAllOfRelationshipsSetGroupRules.md)
- [PromotionSetgroupJsonApiAllOfRelationshipsSetGroupRulesData](docs/Model/PromotionSetgroupJsonApiAllOfRelationshipsSetGroupRulesData.md)
- [PromotionSetgroupJsonApiAllOfRelationshipsSetGroupRulesLinks](docs/Model/PromotionSetgroupJsonApiAllOfRelationshipsSetGroupRulesLinks.md)
- [PromotionSetgroupRule](docs/Model/PromotionSetgroupRule.md)
- [PropertyGroup](docs/Model/PropertyGroup.md)
- [PropertyGroupJsonApi](docs/Model/PropertyGroupJsonApi.md)
- [PropertyGroupJsonApiAllOf](docs/Model/PropertyGroupJsonApiAllOf.md)
- [PropertyGroupJsonApiAllOfRelationships](docs/Model/PropertyGroupJsonApiAllOfRelationships.md)
- [PropertyGroupJsonApiAllOfRelationshipsOptions](docs/Model/PropertyGroupJsonApiAllOfRelationshipsOptions.md)
- [PropertyGroupJsonApiAllOfRelationshipsOptionsLinks](docs/Model/PropertyGroupJsonApiAllOfRelationshipsOptionsLinks.md)
- [PropertyGroupOption](docs/Model/PropertyGroupOption.md)
- [PropertyGroupOptionJsonApi](docs/Model/PropertyGroupOptionJsonApi.md)
- [PropertyGroupOptionJsonApiAllOf](docs/Model/PropertyGroupOptionJsonApiAllOf.md)
- [PropertyGroupOptionJsonApiAllOfRelationships](docs/Model/PropertyGroupOptionJsonApiAllOfRelationships.md)
- [PropertyGroupOptionJsonApiAllOfRelationshipsGroup](docs/Model/PropertyGroupOptionJsonApiAllOfRelationshipsGroup.md)
- [PropertyGroupOptionJsonApiAllOfRelationshipsGroupData](docs/Model/PropertyGroupOptionJsonApiAllOfRelationshipsGroupData.md)
- [PropertyGroupOptionJsonApiAllOfRelationshipsGroupLinks](docs/Model/PropertyGroupOptionJsonApiAllOfRelationshipsGroupLinks.md)
- [PropertyGroupOptionJsonApiAllOfRelationshipsMedia](docs/Model/PropertyGroupOptionJsonApiAllOfRelationshipsMedia.md)
- [PropertyGroupOptionJsonApiAllOfRelationshipsMediaLinks](docs/Model/PropertyGroupOptionJsonApiAllOfRelationshipsMediaLinks.md)
- [PropertyGroupOptionJsonApiAllOfRelationshipsProductConfiguratorSettings](docs/Model/PropertyGroupOptionJsonApiAllOfRelationshipsProductConfiguratorSettings.md)
- [PropertyGroupOptionJsonApiAllOfRelationshipsProductConfiguratorSettingsLinks](docs/Model/PropertyGroupOptionJsonApiAllOfRelationshipsProductConfiguratorSettingsLinks.md)
- [PropertyGroupOptionJsonApiAllOfRelationshipsProductOptions](docs/Model/PropertyGroupOptionJsonApiAllOfRelationshipsProductOptions.md)
- [PropertyGroupOptionJsonApiAllOfRelationshipsProductOptionsData](docs/Model/PropertyGroupOptionJsonApiAllOfRelationshipsProductOptionsData.md)
- [PropertyGroupOptionJsonApiAllOfRelationshipsProductOptionsLinks](docs/Model/PropertyGroupOptionJsonApiAllOfRelationshipsProductOptionsLinks.md)
- [PropertyGroupOptionJsonApiAllOfRelationshipsProductProperties](docs/Model/PropertyGroupOptionJsonApiAllOfRelationshipsProductProperties.md)
- [PropertyGroupOptionJsonApiAllOfRelationshipsProductPropertiesData](docs/Model/PropertyGroupOptionJsonApiAllOfRelationshipsProductPropertiesData.md)
- [PropertyGroupOptionJsonApiAllOfRelationshipsProductPropertiesLinks](docs/Model/PropertyGroupOptionJsonApiAllOfRelationshipsProductPropertiesLinks.md)
- [RelationshipLinks](docs/Model/RelationshipLinks.md)
- [RelationshipToOne](docs/Model/RelationshipToOne.md)
- [Relationships](docs/Model/Relationships.md)
- [RelationshipsAnyOf](docs/Model/RelationshipsAnyOf.md)
- [Resource](docs/Model/Resource.md)
- [Rule](docs/Model/Rule.md)
- [RuleCondition](docs/Model/RuleCondition.md)
- [RuleConditionJsonApi](docs/Model/RuleConditionJsonApi.md)
- [RuleConditionJsonApiAllOf](docs/Model/RuleConditionJsonApiAllOf.md)
- [RuleConditionJsonApiAllOfRelationships](docs/Model/RuleConditionJsonApiAllOfRelationships.md)
- [RuleConditionJsonApiAllOfRelationshipsAppScriptCondition](docs/Model/RuleConditionJsonApiAllOfRelationshipsAppScriptCondition.md)
- [RuleConditionJsonApiAllOfRelationshipsAppScriptConditionData](docs/Model/RuleConditionJsonApiAllOfRelationshipsAppScriptConditionData.md)
- [RuleConditionJsonApiAllOfRelationshipsAppScriptConditionLinks](docs/Model/RuleConditionJsonApiAllOfRelationshipsAppScriptConditionLinks.md)
- [RuleConditionJsonApiAllOfRelationshipsChildren](docs/Model/RuleConditionJsonApiAllOfRelationshipsChildren.md)
- [RuleConditionJsonApiAllOfRelationshipsChildrenData](docs/Model/RuleConditionJsonApiAllOfRelationshipsChildrenData.md)
- [RuleConditionJsonApiAllOfRelationshipsChildrenLinks](docs/Model/RuleConditionJsonApiAllOfRelationshipsChildrenLinks.md)
- [RuleConditionJsonApiAllOfRelationshipsParent](docs/Model/RuleConditionJsonApiAllOfRelationshipsParent.md)
- [RuleConditionJsonApiAllOfRelationshipsParentData](docs/Model/RuleConditionJsonApiAllOfRelationshipsParentData.md)
- [RuleConditionJsonApiAllOfRelationshipsParentLinks](docs/Model/RuleConditionJsonApiAllOfRelationshipsParentLinks.md)
- [RuleConditionJsonApiAllOfRelationshipsRule](docs/Model/RuleConditionJsonApiAllOfRelationshipsRule.md)
- [RuleConditionJsonApiAllOfRelationshipsRuleLinks](docs/Model/RuleConditionJsonApiAllOfRelationshipsRuleLinks.md)
- [RuleJsonApi](docs/Model/RuleJsonApi.md)
- [RuleJsonApiAllOf](docs/Model/RuleJsonApiAllOf.md)
- [RuleJsonApiAllOfRelationships](docs/Model/RuleJsonApiAllOfRelationships.md)
- [RuleJsonApiAllOfRelationshipsCartPromotions](docs/Model/RuleJsonApiAllOfRelationshipsCartPromotions.md)
- [RuleJsonApiAllOfRelationshipsCartPromotionsData](docs/Model/RuleJsonApiAllOfRelationshipsCartPromotionsData.md)
- [RuleJsonApiAllOfRelationshipsCartPromotionsLinks](docs/Model/RuleJsonApiAllOfRelationshipsCartPromotionsLinks.md)
- [RuleJsonApiAllOfRelationshipsConditions](docs/Model/RuleJsonApiAllOfRelationshipsConditions.md)
- [RuleJsonApiAllOfRelationshipsConditionsData](docs/Model/RuleJsonApiAllOfRelationshipsConditionsData.md)
- [RuleJsonApiAllOfRelationshipsConditionsLinks](docs/Model/RuleJsonApiAllOfRelationshipsConditionsLinks.md)
- [RuleJsonApiAllOfRelationshipsFlowSequences](docs/Model/RuleJsonApiAllOfRelationshipsFlowSequences.md)
- [RuleJsonApiAllOfRelationshipsFlowSequencesLinks](docs/Model/RuleJsonApiAllOfRelationshipsFlowSequencesLinks.md)
- [RuleJsonApiAllOfRelationshipsOrderPromotions](docs/Model/RuleJsonApiAllOfRelationshipsOrderPromotions.md)
- [RuleJsonApiAllOfRelationshipsOrderPromotionsData](docs/Model/RuleJsonApiAllOfRelationshipsOrderPromotionsData.md)
- [RuleJsonApiAllOfRelationshipsOrderPromotionsLinks](docs/Model/RuleJsonApiAllOfRelationshipsOrderPromotionsLinks.md)
- [RuleJsonApiAllOfRelationshipsPaymentMethods](docs/Model/RuleJsonApiAllOfRelationshipsPaymentMethods.md)
- [RuleJsonApiAllOfRelationshipsPaymentMethodsLinks](docs/Model/RuleJsonApiAllOfRelationshipsPaymentMethodsLinks.md)
- [RuleJsonApiAllOfRelationshipsPersonaPromotions](docs/Model/RuleJsonApiAllOfRelationshipsPersonaPromotions.md)
- [RuleJsonApiAllOfRelationshipsPersonaPromotionsData](docs/Model/RuleJsonApiAllOfRelationshipsPersonaPromotionsData.md)
- [RuleJsonApiAllOfRelationshipsPersonaPromotionsLinks](docs/Model/RuleJsonApiAllOfRelationshipsPersonaPromotionsLinks.md)
- [RuleJsonApiAllOfRelationshipsProductPrices](docs/Model/RuleJsonApiAllOfRelationshipsProductPrices.md)
- [RuleJsonApiAllOfRelationshipsProductPricesData](docs/Model/RuleJsonApiAllOfRelationshipsProductPricesData.md)
- [RuleJsonApiAllOfRelationshipsProductPricesLinks](docs/Model/RuleJsonApiAllOfRelationshipsProductPricesLinks.md)
- [RuleJsonApiAllOfRelationshipsPromotionDiscounts](docs/Model/RuleJsonApiAllOfRelationshipsPromotionDiscounts.md)
- [RuleJsonApiAllOfRelationshipsPromotionDiscountsData](docs/Model/RuleJsonApiAllOfRelationshipsPromotionDiscountsData.md)
- [RuleJsonApiAllOfRelationshipsPromotionDiscountsLinks](docs/Model/RuleJsonApiAllOfRelationshipsPromotionDiscountsLinks.md)
- [RuleJsonApiAllOfRelationshipsPromotionSetGroups](docs/Model/RuleJsonApiAllOfRelationshipsPromotionSetGroups.md)
- [RuleJsonApiAllOfRelationshipsPromotionSetGroupsData](docs/Model/RuleJsonApiAllOfRelationshipsPromotionSetGroupsData.md)
- [RuleJsonApiAllOfRelationshipsPromotionSetGroupsLinks](docs/Model/RuleJsonApiAllOfRelationshipsPromotionSetGroupsLinks.md)
- [RuleJsonApiAllOfRelationshipsShippingMethodPriceCalculations](docs/Model/RuleJsonApiAllOfRelationshipsShippingMethodPriceCalculations.md)
- [RuleJsonApiAllOfRelationshipsShippingMethodPriceCalculationsData](docs/Model/RuleJsonApiAllOfRelationshipsShippingMethodPriceCalculationsData.md)
- [RuleJsonApiAllOfRelationshipsShippingMethodPriceCalculationsLinks](docs/Model/RuleJsonApiAllOfRelationshipsShippingMethodPriceCalculationsLinks.md)
- [RuleJsonApiAllOfRelationshipsShippingMethodPrices](docs/Model/RuleJsonApiAllOfRelationshipsShippingMethodPrices.md)
- [RuleJsonApiAllOfRelationshipsShippingMethodPricesData](docs/Model/RuleJsonApiAllOfRelationshipsShippingMethodPricesData.md)
- [RuleJsonApiAllOfRelationshipsShippingMethodPricesLinks](docs/Model/RuleJsonApiAllOfRelationshipsShippingMethodPricesLinks.md)
- [RuleJsonApiAllOfRelationshipsShippingMethods](docs/Model/RuleJsonApiAllOfRelationshipsShippingMethods.md)
- [RuleJsonApiAllOfRelationshipsShippingMethodsLinks](docs/Model/RuleJsonApiAllOfRelationshipsShippingMethodsLinks.md)
- [RuleJsonApiAllOfRelationshipsTags](docs/Model/RuleJsonApiAllOfRelationshipsTags.md)
- [RuleJsonApiAllOfRelationshipsTagsLinks](docs/Model/RuleJsonApiAllOfRelationshipsTagsLinks.md)
- [RuleJsonApiAllOfRelationshipsTaxProviders](docs/Model/RuleJsonApiAllOfRelationshipsTaxProviders.md)
- [RuleJsonApiAllOfRelationshipsTaxProvidersLinks](docs/Model/RuleJsonApiAllOfRelationshipsTaxProvidersLinks.md)
- [RuleTag](docs/Model/RuleTag.md)
- [SalesChannel](docs/Model/SalesChannel.md)
- [SalesChannelAnalytics](docs/Model/SalesChannelAnalytics.md)
- [SalesChannelAnalyticsJsonApi](docs/Model/SalesChannelAnalyticsJsonApi.md)
- [SalesChannelAnalyticsJsonApiAllOf](docs/Model/SalesChannelAnalyticsJsonApiAllOf.md)
- [SalesChannelAnalyticsJsonApiAllOfRelationships](docs/Model/SalesChannelAnalyticsJsonApiAllOfRelationships.md)
- [SalesChannelAnalyticsJsonApiAllOfRelationshipsSalesChannel](docs/Model/SalesChannelAnalyticsJsonApiAllOfRelationshipsSalesChannel.md)
- [SalesChannelAnalyticsJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/SalesChannelAnalyticsJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [SalesChannelCountry](docs/Model/SalesChannelCountry.md)
- [SalesChannelCurrency](docs/Model/SalesChannelCurrency.md)
- [SalesChannelDomain](docs/Model/SalesChannelDomain.md)
- [SalesChannelDomainJsonApi](docs/Model/SalesChannelDomainJsonApi.md)
- [SalesChannelDomainJsonApiAllOf](docs/Model/SalesChannelDomainJsonApiAllOf.md)
- [SalesChannelDomainJsonApiAllOfRelationships](docs/Model/SalesChannelDomainJsonApiAllOfRelationships.md)
- [SalesChannelDomainJsonApiAllOfRelationshipsCurrency](docs/Model/SalesChannelDomainJsonApiAllOfRelationshipsCurrency.md)
- [SalesChannelDomainJsonApiAllOfRelationshipsCurrencyLinks](docs/Model/SalesChannelDomainJsonApiAllOfRelationshipsCurrencyLinks.md)
- [SalesChannelDomainJsonApiAllOfRelationshipsLanguage](docs/Model/SalesChannelDomainJsonApiAllOfRelationshipsLanguage.md)
- [SalesChannelDomainJsonApiAllOfRelationshipsLanguageLinks](docs/Model/SalesChannelDomainJsonApiAllOfRelationshipsLanguageLinks.md)
- [SalesChannelDomainJsonApiAllOfRelationshipsProductExports](docs/Model/SalesChannelDomainJsonApiAllOfRelationshipsProductExports.md)
- [SalesChannelDomainJsonApiAllOfRelationshipsProductExportsLinks](docs/Model/SalesChannelDomainJsonApiAllOfRelationshipsProductExportsLinks.md)
- [SalesChannelDomainJsonApiAllOfRelationshipsSalesChannel](docs/Model/SalesChannelDomainJsonApiAllOfRelationshipsSalesChannel.md)
- [SalesChannelDomainJsonApiAllOfRelationshipsSalesChannelDefaultHreflang](docs/Model/SalesChannelDomainJsonApiAllOfRelationshipsSalesChannelDefaultHreflang.md)
- [SalesChannelDomainJsonApiAllOfRelationshipsSalesChannelDefaultHreflangData](docs/Model/SalesChannelDomainJsonApiAllOfRelationshipsSalesChannelDefaultHreflangData.md)
- [SalesChannelDomainJsonApiAllOfRelationshipsSalesChannelDefaultHreflangLinks](docs/Model/SalesChannelDomainJsonApiAllOfRelationshipsSalesChannelDefaultHreflangLinks.md)
- [SalesChannelDomainJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/SalesChannelDomainJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [SalesChannelDomainJsonApiAllOfRelationshipsSnippetSet](docs/Model/SalesChannelDomainJsonApiAllOfRelationshipsSnippetSet.md)
- [SalesChannelDomainJsonApiAllOfRelationshipsSnippetSetData](docs/Model/SalesChannelDomainJsonApiAllOfRelationshipsSnippetSetData.md)
- [SalesChannelDomainJsonApiAllOfRelationshipsSnippetSetLinks](docs/Model/SalesChannelDomainJsonApiAllOfRelationshipsSnippetSetLinks.md)
- [SalesChannelJsonApi](docs/Model/SalesChannelJsonApi.md)
- [SalesChannelJsonApiAllOf](docs/Model/SalesChannelJsonApiAllOf.md)
- [SalesChannelJsonApiAllOfExtensions](docs/Model/SalesChannelJsonApiAllOfExtensions.md)
- [SalesChannelJsonApiAllOfExtensionsThemes](docs/Model/SalesChannelJsonApiAllOfExtensionsThemes.md)
- [SalesChannelJsonApiAllOfExtensionsThemesLinks](docs/Model/SalesChannelJsonApiAllOfExtensionsThemesLinks.md)
- [SalesChannelJsonApiAllOfRelationships](docs/Model/SalesChannelJsonApiAllOfRelationships.md)
- [SalesChannelJsonApiAllOfRelationshipsAnalytics](docs/Model/SalesChannelJsonApiAllOfRelationshipsAnalytics.md)
- [SalesChannelJsonApiAllOfRelationshipsAnalyticsData](docs/Model/SalesChannelJsonApiAllOfRelationshipsAnalyticsData.md)
- [SalesChannelJsonApiAllOfRelationshipsAnalyticsLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsAnalyticsLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsBoundCustomers](docs/Model/SalesChannelJsonApiAllOfRelationshipsBoundCustomers.md)
- [SalesChannelJsonApiAllOfRelationshipsBoundCustomersData](docs/Model/SalesChannelJsonApiAllOfRelationshipsBoundCustomersData.md)
- [SalesChannelJsonApiAllOfRelationshipsBoundCustomersLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsBoundCustomersLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsCountries](docs/Model/SalesChannelJsonApiAllOfRelationshipsCountries.md)
- [SalesChannelJsonApiAllOfRelationshipsCountriesData](docs/Model/SalesChannelJsonApiAllOfRelationshipsCountriesData.md)
- [SalesChannelJsonApiAllOfRelationshipsCountriesLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsCountriesLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsCountry](docs/Model/SalesChannelJsonApiAllOfRelationshipsCountry.md)
- [SalesChannelJsonApiAllOfRelationshipsCountryLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsCountryLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsCurrencies](docs/Model/SalesChannelJsonApiAllOfRelationshipsCurrencies.md)
- [SalesChannelJsonApiAllOfRelationshipsCurrenciesData](docs/Model/SalesChannelJsonApiAllOfRelationshipsCurrenciesData.md)
- [SalesChannelJsonApiAllOfRelationshipsCurrenciesLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsCurrenciesLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsCurrency](docs/Model/SalesChannelJsonApiAllOfRelationshipsCurrency.md)
- [SalesChannelJsonApiAllOfRelationshipsCurrencyLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsCurrencyLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsCustomerGroup](docs/Model/SalesChannelJsonApiAllOfRelationshipsCustomerGroup.md)
- [SalesChannelJsonApiAllOfRelationshipsCustomerGroupData](docs/Model/SalesChannelJsonApiAllOfRelationshipsCustomerGroupData.md)
- [SalesChannelJsonApiAllOfRelationshipsCustomerGroupLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsCustomerGroupLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsCustomerGroupsRegistrations](docs/Model/SalesChannelJsonApiAllOfRelationshipsCustomerGroupsRegistrations.md)
- [SalesChannelJsonApiAllOfRelationshipsCustomerGroupsRegistrationsData](docs/Model/SalesChannelJsonApiAllOfRelationshipsCustomerGroupsRegistrationsData.md)
- [SalesChannelJsonApiAllOfRelationshipsCustomerGroupsRegistrationsLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsCustomerGroupsRegistrationsLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsCustomers](docs/Model/SalesChannelJsonApiAllOfRelationshipsCustomers.md)
- [SalesChannelJsonApiAllOfRelationshipsCustomersLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsCustomersLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsDocumentBaseConfigSalesChannels](docs/Model/SalesChannelJsonApiAllOfRelationshipsDocumentBaseConfigSalesChannels.md)
- [SalesChannelJsonApiAllOfRelationshipsDocumentBaseConfigSalesChannelsLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsDocumentBaseConfigSalesChannelsLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsDomains](docs/Model/SalesChannelJsonApiAllOfRelationshipsDomains.md)
- [SalesChannelJsonApiAllOfRelationshipsDomainsData](docs/Model/SalesChannelJsonApiAllOfRelationshipsDomainsData.md)
- [SalesChannelJsonApiAllOfRelationshipsDomainsLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsDomainsLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsFooterCategory](docs/Model/SalesChannelJsonApiAllOfRelationshipsFooterCategory.md)
- [SalesChannelJsonApiAllOfRelationshipsFooterCategoryData](docs/Model/SalesChannelJsonApiAllOfRelationshipsFooterCategoryData.md)
- [SalesChannelJsonApiAllOfRelationshipsFooterCategoryLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsFooterCategoryLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsHomeCmsPage](docs/Model/SalesChannelJsonApiAllOfRelationshipsHomeCmsPage.md)
- [SalesChannelJsonApiAllOfRelationshipsHomeCmsPageData](docs/Model/SalesChannelJsonApiAllOfRelationshipsHomeCmsPageData.md)
- [SalesChannelJsonApiAllOfRelationshipsHomeCmsPageLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsHomeCmsPageLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsHreflangDefaultDomain](docs/Model/SalesChannelJsonApiAllOfRelationshipsHreflangDefaultDomain.md)
- [SalesChannelJsonApiAllOfRelationshipsHreflangDefaultDomainData](docs/Model/SalesChannelJsonApiAllOfRelationshipsHreflangDefaultDomainData.md)
- [SalesChannelJsonApiAllOfRelationshipsHreflangDefaultDomainLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsHreflangDefaultDomainLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsLandingPages](docs/Model/SalesChannelJsonApiAllOfRelationshipsLandingPages.md)
- [SalesChannelJsonApiAllOfRelationshipsLandingPagesLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsLandingPagesLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsLanguage](docs/Model/SalesChannelJsonApiAllOfRelationshipsLanguage.md)
- [SalesChannelJsonApiAllOfRelationshipsLanguageLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsLanguageLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsLanguages](docs/Model/SalesChannelJsonApiAllOfRelationshipsLanguages.md)
- [SalesChannelJsonApiAllOfRelationshipsLanguagesLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsLanguagesLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsMailHeaderFooter](docs/Model/SalesChannelJsonApiAllOfRelationshipsMailHeaderFooter.md)
- [SalesChannelJsonApiAllOfRelationshipsMailHeaderFooterData](docs/Model/SalesChannelJsonApiAllOfRelationshipsMailHeaderFooterData.md)
- [SalesChannelJsonApiAllOfRelationshipsMailHeaderFooterLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsMailHeaderFooterLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsMainCategories](docs/Model/SalesChannelJsonApiAllOfRelationshipsMainCategories.md)
- [SalesChannelJsonApiAllOfRelationshipsMainCategoriesLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsMainCategoriesLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsNavigationCategory](docs/Model/SalesChannelJsonApiAllOfRelationshipsNavigationCategory.md)
- [SalesChannelJsonApiAllOfRelationshipsNavigationCategoryData](docs/Model/SalesChannelJsonApiAllOfRelationshipsNavigationCategoryData.md)
- [SalesChannelJsonApiAllOfRelationshipsNavigationCategoryLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsNavigationCategoryLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsNewsletterRecipients](docs/Model/SalesChannelJsonApiAllOfRelationshipsNewsletterRecipients.md)
- [SalesChannelJsonApiAllOfRelationshipsNewsletterRecipientsLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsNewsletterRecipientsLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsNumberRangeSalesChannels](docs/Model/SalesChannelJsonApiAllOfRelationshipsNumberRangeSalesChannels.md)
- [SalesChannelJsonApiAllOfRelationshipsNumberRangeSalesChannelsLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsNumberRangeSalesChannelsLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsOrders](docs/Model/SalesChannelJsonApiAllOfRelationshipsOrders.md)
- [SalesChannelJsonApiAllOfRelationshipsOrdersLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsOrdersLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsPaymentMethod](docs/Model/SalesChannelJsonApiAllOfRelationshipsPaymentMethod.md)
- [SalesChannelJsonApiAllOfRelationshipsPaymentMethodLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsPaymentMethodLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsPaymentMethods](docs/Model/SalesChannelJsonApiAllOfRelationshipsPaymentMethods.md)
- [SalesChannelJsonApiAllOfRelationshipsPaymentMethodsLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsPaymentMethodsLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsProductExports](docs/Model/SalesChannelJsonApiAllOfRelationshipsProductExports.md)
- [SalesChannelJsonApiAllOfRelationshipsProductExportsLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsProductExportsLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsProductReviews](docs/Model/SalesChannelJsonApiAllOfRelationshipsProductReviews.md)
- [SalesChannelJsonApiAllOfRelationshipsProductReviewsLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsProductReviewsLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsProductVisibilities](docs/Model/SalesChannelJsonApiAllOfRelationshipsProductVisibilities.md)
- [SalesChannelJsonApiAllOfRelationshipsProductVisibilitiesData](docs/Model/SalesChannelJsonApiAllOfRelationshipsProductVisibilitiesData.md)
- [SalesChannelJsonApiAllOfRelationshipsProductVisibilitiesLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsProductVisibilitiesLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsPromotionSalesChannels](docs/Model/SalesChannelJsonApiAllOfRelationshipsPromotionSalesChannels.md)
- [SalesChannelJsonApiAllOfRelationshipsPromotionSalesChannelsData](docs/Model/SalesChannelJsonApiAllOfRelationshipsPromotionSalesChannelsData.md)
- [SalesChannelJsonApiAllOfRelationshipsPromotionSalesChannelsLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsPromotionSalesChannelsLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsSeoUrlTemplates](docs/Model/SalesChannelJsonApiAllOfRelationshipsSeoUrlTemplates.md)
- [SalesChannelJsonApiAllOfRelationshipsSeoUrlTemplatesData](docs/Model/SalesChannelJsonApiAllOfRelationshipsSeoUrlTemplatesData.md)
- [SalesChannelJsonApiAllOfRelationshipsSeoUrlTemplatesLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsSeoUrlTemplatesLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsSeoUrls](docs/Model/SalesChannelJsonApiAllOfRelationshipsSeoUrls.md)
- [SalesChannelJsonApiAllOfRelationshipsSeoUrlsLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsSeoUrlsLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsServiceCategory](docs/Model/SalesChannelJsonApiAllOfRelationshipsServiceCategory.md)
- [SalesChannelJsonApiAllOfRelationshipsServiceCategoryData](docs/Model/SalesChannelJsonApiAllOfRelationshipsServiceCategoryData.md)
- [SalesChannelJsonApiAllOfRelationshipsServiceCategoryLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsServiceCategoryLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsShippingMethod](docs/Model/SalesChannelJsonApiAllOfRelationshipsShippingMethod.md)
- [SalesChannelJsonApiAllOfRelationshipsShippingMethodLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsShippingMethodLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsShippingMethods](docs/Model/SalesChannelJsonApiAllOfRelationshipsShippingMethods.md)
- [SalesChannelJsonApiAllOfRelationshipsShippingMethodsLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsShippingMethodsLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsSystemConfigs](docs/Model/SalesChannelJsonApiAllOfRelationshipsSystemConfigs.md)
- [SalesChannelJsonApiAllOfRelationshipsSystemConfigsData](docs/Model/SalesChannelJsonApiAllOfRelationshipsSystemConfigsData.md)
- [SalesChannelJsonApiAllOfRelationshipsSystemConfigsLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsSystemConfigsLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsType](docs/Model/SalesChannelJsonApiAllOfRelationshipsType.md)
- [SalesChannelJsonApiAllOfRelationshipsTypeData](docs/Model/SalesChannelJsonApiAllOfRelationshipsTypeData.md)
- [SalesChannelJsonApiAllOfRelationshipsTypeLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsTypeLinks.md)
- [SalesChannelJsonApiAllOfRelationshipsWishlists](docs/Model/SalesChannelJsonApiAllOfRelationshipsWishlists.md)
- [SalesChannelJsonApiAllOfRelationshipsWishlistsLinks](docs/Model/SalesChannelJsonApiAllOfRelationshipsWishlistsLinks.md)
- [SalesChannelLanguage](docs/Model/SalesChannelLanguage.md)
- [SalesChannelPaymentMethod](docs/Model/SalesChannelPaymentMethod.md)
- [SalesChannelShippingMethod](docs/Model/SalesChannelShippingMethod.md)
- [SalesChannelType](docs/Model/SalesChannelType.md)
- [SalesChannelTypeJsonApi](docs/Model/SalesChannelTypeJsonApi.md)
- [SalesChannelTypeJsonApiAllOf](docs/Model/SalesChannelTypeJsonApiAllOf.md)
- [SalesChannelTypeJsonApiAllOfRelationships](docs/Model/SalesChannelTypeJsonApiAllOfRelationships.md)
- [SalesChannelTypeJsonApiAllOfRelationshipsSalesChannels](docs/Model/SalesChannelTypeJsonApiAllOfRelationshipsSalesChannels.md)
- [SalesChannelTypeJsonApiAllOfRelationshipsSalesChannelsLinks](docs/Model/SalesChannelTypeJsonApiAllOfRelationshipsSalesChannelsLinks.md)
- [Salutation](docs/Model/Salutation.md)
- [SalutationJsonApi](docs/Model/SalutationJsonApi.md)
- [SalutationJsonApiAllOf](docs/Model/SalutationJsonApiAllOf.md)
- [SalutationJsonApiAllOfRelationships](docs/Model/SalutationJsonApiAllOfRelationships.md)
- [SalutationJsonApiAllOfRelationshipsCustomerAddresses](docs/Model/SalutationJsonApiAllOfRelationshipsCustomerAddresses.md)
- [SalutationJsonApiAllOfRelationshipsCustomerAddressesLinks](docs/Model/SalutationJsonApiAllOfRelationshipsCustomerAddressesLinks.md)
- [SalutationJsonApiAllOfRelationshipsCustomers](docs/Model/SalutationJsonApiAllOfRelationshipsCustomers.md)
- [SalutationJsonApiAllOfRelationshipsCustomersLinks](docs/Model/SalutationJsonApiAllOfRelationshipsCustomersLinks.md)
- [SalutationJsonApiAllOfRelationshipsNewsletterRecipients](docs/Model/SalutationJsonApiAllOfRelationshipsNewsletterRecipients.md)
- [SalutationJsonApiAllOfRelationshipsNewsletterRecipientsLinks](docs/Model/SalutationJsonApiAllOfRelationshipsNewsletterRecipientsLinks.md)
- [SalutationJsonApiAllOfRelationshipsOrderAddresses](docs/Model/SalutationJsonApiAllOfRelationshipsOrderAddresses.md)
- [SalutationJsonApiAllOfRelationshipsOrderAddressesLinks](docs/Model/SalutationJsonApiAllOfRelationshipsOrderAddressesLinks.md)
- [SalutationJsonApiAllOfRelationshipsOrderCustomers](docs/Model/SalutationJsonApiAllOfRelationshipsOrderCustomers.md)
- [SalutationJsonApiAllOfRelationshipsOrderCustomersLinks](docs/Model/SalutationJsonApiAllOfRelationshipsOrderCustomersLinks.md)
- [ScheduledTask](docs/Model/ScheduledTask.md)
- [ScheduledTaskJsonApi](docs/Model/ScheduledTaskJsonApi.md)
- [ScheduledTaskJsonApiAllOf](docs/Model/ScheduledTaskJsonApiAllOf.md)
- [Script](docs/Model/Script.md)
- [ScriptJsonApi](docs/Model/ScriptJsonApi.md)
- [ScriptJsonApiAllOf](docs/Model/ScriptJsonApiAllOf.md)
- [ScriptJsonApiAllOfRelationships](docs/Model/ScriptJsonApiAllOfRelationships.md)
- [ScriptJsonApiAllOfRelationshipsApp](docs/Model/ScriptJsonApiAllOfRelationshipsApp.md)
- [ScriptJsonApiAllOfRelationshipsAppLinks](docs/Model/ScriptJsonApiAllOfRelationshipsAppLinks.md)
- [SeoUrl](docs/Model/SeoUrl.md)
- [SeoUrlJsonApi](docs/Model/SeoUrlJsonApi.md)
- [SeoUrlJsonApiAllOf](docs/Model/SeoUrlJsonApiAllOf.md)
- [SeoUrlJsonApiAllOfRelationships](docs/Model/SeoUrlJsonApiAllOfRelationships.md)
- [SeoUrlJsonApiAllOfRelationshipsLanguage](docs/Model/SeoUrlJsonApiAllOfRelationshipsLanguage.md)
- [SeoUrlJsonApiAllOfRelationshipsLanguageLinks](docs/Model/SeoUrlJsonApiAllOfRelationshipsLanguageLinks.md)
- [SeoUrlJsonApiAllOfRelationshipsSalesChannel](docs/Model/SeoUrlJsonApiAllOfRelationshipsSalesChannel.md)
- [SeoUrlJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/SeoUrlJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [SeoUrlTemplate](docs/Model/SeoUrlTemplate.md)
- [SeoUrlTemplateJsonApi](docs/Model/SeoUrlTemplateJsonApi.md)
- [SeoUrlTemplateJsonApiAllOf](docs/Model/SeoUrlTemplateJsonApiAllOf.md)
- [SeoUrlTemplateJsonApiAllOfRelationships](docs/Model/SeoUrlTemplateJsonApiAllOfRelationships.md)
- [SeoUrlTemplateJsonApiAllOfRelationshipsSalesChannel](docs/Model/SeoUrlTemplateJsonApiAllOfRelationshipsSalesChannel.md)
- [SeoUrlTemplateJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/SeoUrlTemplateJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [ShippingMethod](docs/Model/ShippingMethod.md)
- [ShippingMethodJsonApi](docs/Model/ShippingMethodJsonApi.md)
- [ShippingMethodJsonApiAllOf](docs/Model/ShippingMethodJsonApiAllOf.md)
- [ShippingMethodJsonApiAllOfRelationships](docs/Model/ShippingMethodJsonApiAllOfRelationships.md)
- [ShippingMethodJsonApiAllOfRelationshipsAppShippingMethod](docs/Model/ShippingMethodJsonApiAllOfRelationshipsAppShippingMethod.md)
- [ShippingMethodJsonApiAllOfRelationshipsAppShippingMethodData](docs/Model/ShippingMethodJsonApiAllOfRelationshipsAppShippingMethodData.md)
- [ShippingMethodJsonApiAllOfRelationshipsAppShippingMethodLinks](docs/Model/ShippingMethodJsonApiAllOfRelationshipsAppShippingMethodLinks.md)
- [ShippingMethodJsonApiAllOfRelationshipsAvailabilityRule](docs/Model/ShippingMethodJsonApiAllOfRelationshipsAvailabilityRule.md)
- [ShippingMethodJsonApiAllOfRelationshipsAvailabilityRuleLinks](docs/Model/ShippingMethodJsonApiAllOfRelationshipsAvailabilityRuleLinks.md)
- [ShippingMethodJsonApiAllOfRelationshipsDeliveryTime](docs/Model/ShippingMethodJsonApiAllOfRelationshipsDeliveryTime.md)
- [ShippingMethodJsonApiAllOfRelationshipsDeliveryTimeLinks](docs/Model/ShippingMethodJsonApiAllOfRelationshipsDeliveryTimeLinks.md)
- [ShippingMethodJsonApiAllOfRelationshipsMedia](docs/Model/ShippingMethodJsonApiAllOfRelationshipsMedia.md)
- [ShippingMethodJsonApiAllOfRelationshipsMediaLinks](docs/Model/ShippingMethodJsonApiAllOfRelationshipsMediaLinks.md)
- [ShippingMethodJsonApiAllOfRelationshipsOrderDeliveries](docs/Model/ShippingMethodJsonApiAllOfRelationshipsOrderDeliveries.md)
- [ShippingMethodJsonApiAllOfRelationshipsOrderDeliveriesLinks](docs/Model/ShippingMethodJsonApiAllOfRelationshipsOrderDeliveriesLinks.md)
- [ShippingMethodJsonApiAllOfRelationshipsPrices](docs/Model/ShippingMethodJsonApiAllOfRelationshipsPrices.md)
- [ShippingMethodJsonApiAllOfRelationshipsPricesData](docs/Model/ShippingMethodJsonApiAllOfRelationshipsPricesData.md)
- [ShippingMethodJsonApiAllOfRelationshipsPricesLinks](docs/Model/ShippingMethodJsonApiAllOfRelationshipsPricesLinks.md)
- [ShippingMethodJsonApiAllOfRelationshipsSalesChannelDefaultAssignments](docs/Model/ShippingMethodJsonApiAllOfRelationshipsSalesChannelDefaultAssignments.md)
- [ShippingMethodJsonApiAllOfRelationshipsSalesChannelDefaultAssignmentsLinks](docs/Model/ShippingMethodJsonApiAllOfRelationshipsSalesChannelDefaultAssignmentsLinks.md)
- [ShippingMethodJsonApiAllOfRelationshipsSalesChannels](docs/Model/ShippingMethodJsonApiAllOfRelationshipsSalesChannels.md)
- [ShippingMethodJsonApiAllOfRelationshipsSalesChannelsLinks](docs/Model/ShippingMethodJsonApiAllOfRelationshipsSalesChannelsLinks.md)
- [ShippingMethodJsonApiAllOfRelationshipsTags](docs/Model/ShippingMethodJsonApiAllOfRelationshipsTags.md)
- [ShippingMethodJsonApiAllOfRelationshipsTagsLinks](docs/Model/ShippingMethodJsonApiAllOfRelationshipsTagsLinks.md)
- [ShippingMethodJsonApiAllOfRelationshipsTax](docs/Model/ShippingMethodJsonApiAllOfRelationshipsTax.md)
- [ShippingMethodJsonApiAllOfRelationshipsTaxLinks](docs/Model/ShippingMethodJsonApiAllOfRelationshipsTaxLinks.md)
- [ShippingMethodPrice](docs/Model/ShippingMethodPrice.md)
- [ShippingMethodPriceJsonApi](docs/Model/ShippingMethodPriceJsonApi.md)
- [ShippingMethodPriceJsonApiAllOf](docs/Model/ShippingMethodPriceJsonApiAllOf.md)
- [ShippingMethodPriceJsonApiAllOfRelationships](docs/Model/ShippingMethodPriceJsonApiAllOfRelationships.md)
- [ShippingMethodPriceJsonApiAllOfRelationshipsCalculationRule](docs/Model/ShippingMethodPriceJsonApiAllOfRelationshipsCalculationRule.md)
- [ShippingMethodPriceJsonApiAllOfRelationshipsCalculationRuleData](docs/Model/ShippingMethodPriceJsonApiAllOfRelationshipsCalculationRuleData.md)
- [ShippingMethodPriceJsonApiAllOfRelationshipsCalculationRuleLinks](docs/Model/ShippingMethodPriceJsonApiAllOfRelationshipsCalculationRuleLinks.md)
- [ShippingMethodPriceJsonApiAllOfRelationshipsRule](docs/Model/ShippingMethodPriceJsonApiAllOfRelationshipsRule.md)
- [ShippingMethodPriceJsonApiAllOfRelationshipsRuleLinks](docs/Model/ShippingMethodPriceJsonApiAllOfRelationshipsRuleLinks.md)
- [ShippingMethodPriceJsonApiAllOfRelationshipsShippingMethod](docs/Model/ShippingMethodPriceJsonApiAllOfRelationshipsShippingMethod.md)
- [ShippingMethodPriceJsonApiAllOfRelationshipsShippingMethodLinks](docs/Model/ShippingMethodPriceJsonApiAllOfRelationshipsShippingMethodLinks.md)
- [ShippingMethodTag](docs/Model/ShippingMethodTag.md)
- [Snippet](docs/Model/Snippet.md)
- [SnippetJsonApi](docs/Model/SnippetJsonApi.md)
- [SnippetJsonApiAllOf](docs/Model/SnippetJsonApiAllOf.md)
- [SnippetJsonApiAllOfRelationships](docs/Model/SnippetJsonApiAllOfRelationships.md)
- [SnippetJsonApiAllOfRelationshipsSet](docs/Model/SnippetJsonApiAllOfRelationshipsSet.md)
- [SnippetJsonApiAllOfRelationshipsSetData](docs/Model/SnippetJsonApiAllOfRelationshipsSetData.md)
- [SnippetJsonApiAllOfRelationshipsSetLinks](docs/Model/SnippetJsonApiAllOfRelationshipsSetLinks.md)
- [SnippetSet](docs/Model/SnippetSet.md)
- [SnippetSetJsonApi](docs/Model/SnippetSetJsonApi.md)
- [SnippetSetJsonApiAllOf](docs/Model/SnippetSetJsonApiAllOf.md)
- [SnippetSetJsonApiAllOfRelationships](docs/Model/SnippetSetJsonApiAllOfRelationships.md)
- [SnippetSetJsonApiAllOfRelationshipsSalesChannelDomains](docs/Model/SnippetSetJsonApiAllOfRelationshipsSalesChannelDomains.md)
- [SnippetSetJsonApiAllOfRelationshipsSalesChannelDomainsLinks](docs/Model/SnippetSetJsonApiAllOfRelationshipsSalesChannelDomainsLinks.md)
- [SnippetSetJsonApiAllOfRelationshipsSnippets](docs/Model/SnippetSetJsonApiAllOfRelationshipsSnippets.md)
- [SnippetSetJsonApiAllOfRelationshipsSnippetsData](docs/Model/SnippetSetJsonApiAllOfRelationshipsSnippetsData.md)
- [SnippetSetJsonApiAllOfRelationshipsSnippetsLinks](docs/Model/SnippetSetJsonApiAllOfRelationshipsSnippetsLinks.md)
- [StateMachine](docs/Model/StateMachine.md)
- [StateMachineHistory](docs/Model/StateMachineHistory.md)
- [StateMachineHistoryJsonApi](docs/Model/StateMachineHistoryJsonApi.md)
- [StateMachineHistoryJsonApiAllOf](docs/Model/StateMachineHistoryJsonApiAllOf.md)
- [StateMachineHistoryJsonApiAllOfRelationships](docs/Model/StateMachineHistoryJsonApiAllOfRelationships.md)
- [StateMachineHistoryJsonApiAllOfRelationshipsFromStateMachineState](docs/Model/StateMachineHistoryJsonApiAllOfRelationshipsFromStateMachineState.md)
- [StateMachineHistoryJsonApiAllOfRelationshipsFromStateMachineStateData](docs/Model/StateMachineHistoryJsonApiAllOfRelationshipsFromStateMachineStateData.md)
- [StateMachineHistoryJsonApiAllOfRelationshipsFromStateMachineStateLinks](docs/Model/StateMachineHistoryJsonApiAllOfRelationshipsFromStateMachineStateLinks.md)
- [StateMachineHistoryJsonApiAllOfRelationshipsStateMachine](docs/Model/StateMachineHistoryJsonApiAllOfRelationshipsStateMachine.md)
- [StateMachineHistoryJsonApiAllOfRelationshipsStateMachineData](docs/Model/StateMachineHistoryJsonApiAllOfRelationshipsStateMachineData.md)
- [StateMachineHistoryJsonApiAllOfRelationshipsStateMachineLinks](docs/Model/StateMachineHistoryJsonApiAllOfRelationshipsStateMachineLinks.md)
- [StateMachineHistoryJsonApiAllOfRelationshipsToStateMachineState](docs/Model/StateMachineHistoryJsonApiAllOfRelationshipsToStateMachineState.md)
- [StateMachineHistoryJsonApiAllOfRelationshipsToStateMachineStateData](docs/Model/StateMachineHistoryJsonApiAllOfRelationshipsToStateMachineStateData.md)
- [StateMachineHistoryJsonApiAllOfRelationshipsToStateMachineStateLinks](docs/Model/StateMachineHistoryJsonApiAllOfRelationshipsToStateMachineStateLinks.md)
- [StateMachineHistoryJsonApiAllOfRelationshipsUser](docs/Model/StateMachineHistoryJsonApiAllOfRelationshipsUser.md)
- [StateMachineHistoryJsonApiAllOfRelationshipsUserLinks](docs/Model/StateMachineHistoryJsonApiAllOfRelationshipsUserLinks.md)
- [StateMachineJsonApi](docs/Model/StateMachineJsonApi.md)
- [StateMachineJsonApiAllOf](docs/Model/StateMachineJsonApiAllOf.md)
- [StateMachineJsonApiAllOfRelationships](docs/Model/StateMachineJsonApiAllOfRelationships.md)
- [StateMachineJsonApiAllOfRelationshipsHistoryEntries](docs/Model/StateMachineJsonApiAllOfRelationshipsHistoryEntries.md)
- [StateMachineJsonApiAllOfRelationshipsHistoryEntriesData](docs/Model/StateMachineJsonApiAllOfRelationshipsHistoryEntriesData.md)
- [StateMachineJsonApiAllOfRelationshipsHistoryEntriesLinks](docs/Model/StateMachineJsonApiAllOfRelationshipsHistoryEntriesLinks.md)
- [StateMachineJsonApiAllOfRelationshipsStates](docs/Model/StateMachineJsonApiAllOfRelationshipsStates.md)
- [StateMachineJsonApiAllOfRelationshipsStatesData](docs/Model/StateMachineJsonApiAllOfRelationshipsStatesData.md)
- [StateMachineJsonApiAllOfRelationshipsStatesLinks](docs/Model/StateMachineJsonApiAllOfRelationshipsStatesLinks.md)
- [StateMachineJsonApiAllOfRelationshipsTransitions](docs/Model/StateMachineJsonApiAllOfRelationshipsTransitions.md)
- [StateMachineJsonApiAllOfRelationshipsTransitionsData](docs/Model/StateMachineJsonApiAllOfRelationshipsTransitionsData.md)
- [StateMachineJsonApiAllOfRelationshipsTransitionsLinks](docs/Model/StateMachineJsonApiAllOfRelationshipsTransitionsLinks.md)
- [StateMachineState](docs/Model/StateMachineState.md)
- [StateMachineStateJsonApi](docs/Model/StateMachineStateJsonApi.md)
- [StateMachineStateJsonApiAllOf](docs/Model/StateMachineStateJsonApiAllOf.md)
- [StateMachineStateJsonApiAllOfRelationships](docs/Model/StateMachineStateJsonApiAllOfRelationships.md)
- [StateMachineStateJsonApiAllOfRelationshipsFromStateMachineHistoryEntries](docs/Model/StateMachineStateJsonApiAllOfRelationshipsFromStateMachineHistoryEntries.md)
- [StateMachineStateJsonApiAllOfRelationshipsFromStateMachineHistoryEntriesData](docs/Model/StateMachineStateJsonApiAllOfRelationshipsFromStateMachineHistoryEntriesData.md)
- [StateMachineStateJsonApiAllOfRelationshipsFromStateMachineHistoryEntriesLinks](docs/Model/StateMachineStateJsonApiAllOfRelationshipsFromStateMachineHistoryEntriesLinks.md)
- [StateMachineStateJsonApiAllOfRelationshipsFromStateMachineTransitions](docs/Model/StateMachineStateJsonApiAllOfRelationshipsFromStateMachineTransitions.md)
- [StateMachineStateJsonApiAllOfRelationshipsFromStateMachineTransitionsData](docs/Model/StateMachineStateJsonApiAllOfRelationshipsFromStateMachineTransitionsData.md)
- [StateMachineStateJsonApiAllOfRelationshipsFromStateMachineTransitionsLinks](docs/Model/StateMachineStateJsonApiAllOfRelationshipsFromStateMachineTransitionsLinks.md)
- [StateMachineStateJsonApiAllOfRelationshipsOrderDeliveries](docs/Model/StateMachineStateJsonApiAllOfRelationshipsOrderDeliveries.md)
- [StateMachineStateJsonApiAllOfRelationshipsOrderDeliveriesLinks](docs/Model/StateMachineStateJsonApiAllOfRelationshipsOrderDeliveriesLinks.md)
- [StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCaptureRefunds](docs/Model/StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCaptureRefunds.md)
- [StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCaptureRefundsData](docs/Model/StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCaptureRefundsData.md)
- [StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCaptureRefundsLinks](docs/Model/StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCaptureRefundsLinks.md)
- [StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCaptures](docs/Model/StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCaptures.md)
- [StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCapturesData](docs/Model/StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCapturesData.md)
- [StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCapturesLinks](docs/Model/StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCapturesLinks.md)
- [StateMachineStateJsonApiAllOfRelationshipsOrderTransactions](docs/Model/StateMachineStateJsonApiAllOfRelationshipsOrderTransactions.md)
- [StateMachineStateJsonApiAllOfRelationshipsOrderTransactionsLinks](docs/Model/StateMachineStateJsonApiAllOfRelationshipsOrderTransactionsLinks.md)
- [StateMachineStateJsonApiAllOfRelationshipsOrders](docs/Model/StateMachineStateJsonApiAllOfRelationshipsOrders.md)
- [StateMachineStateJsonApiAllOfRelationshipsOrdersLinks](docs/Model/StateMachineStateJsonApiAllOfRelationshipsOrdersLinks.md)
- [StateMachineStateJsonApiAllOfRelationshipsStateMachine](docs/Model/StateMachineStateJsonApiAllOfRelationshipsStateMachine.md)
- [StateMachineStateJsonApiAllOfRelationshipsStateMachineLinks](docs/Model/StateMachineStateJsonApiAllOfRelationshipsStateMachineLinks.md)
- [StateMachineStateJsonApiAllOfRelationshipsToStateMachineHistoryEntries](docs/Model/StateMachineStateJsonApiAllOfRelationshipsToStateMachineHistoryEntries.md)
- [StateMachineStateJsonApiAllOfRelationshipsToStateMachineHistoryEntriesData](docs/Model/StateMachineStateJsonApiAllOfRelationshipsToStateMachineHistoryEntriesData.md)
- [StateMachineStateJsonApiAllOfRelationshipsToStateMachineHistoryEntriesLinks](docs/Model/StateMachineStateJsonApiAllOfRelationshipsToStateMachineHistoryEntriesLinks.md)
- [StateMachineStateJsonApiAllOfRelationshipsToStateMachineTransitions](docs/Model/StateMachineStateJsonApiAllOfRelationshipsToStateMachineTransitions.md)
- [StateMachineStateJsonApiAllOfRelationshipsToStateMachineTransitionsData](docs/Model/StateMachineStateJsonApiAllOfRelationshipsToStateMachineTransitionsData.md)
- [StateMachineStateJsonApiAllOfRelationshipsToStateMachineTransitionsLinks](docs/Model/StateMachineStateJsonApiAllOfRelationshipsToStateMachineTransitionsLinks.md)
- [StateMachineTransition](docs/Model/StateMachineTransition.md)
- [StateMachineTransitionJsonApi](docs/Model/StateMachineTransitionJsonApi.md)
- [StateMachineTransitionJsonApiAllOf](docs/Model/StateMachineTransitionJsonApiAllOf.md)
- [StateMachineTransitionJsonApiAllOfRelationships](docs/Model/StateMachineTransitionJsonApiAllOfRelationships.md)
- [StateMachineTransitionJsonApiAllOfRelationshipsFromStateMachineState](docs/Model/StateMachineTransitionJsonApiAllOfRelationshipsFromStateMachineState.md)
- [StateMachineTransitionJsonApiAllOfRelationshipsFromStateMachineStateLinks](docs/Model/StateMachineTransitionJsonApiAllOfRelationshipsFromStateMachineStateLinks.md)
- [StateMachineTransitionJsonApiAllOfRelationshipsStateMachine](docs/Model/StateMachineTransitionJsonApiAllOfRelationshipsStateMachine.md)
- [StateMachineTransitionJsonApiAllOfRelationshipsStateMachineLinks](docs/Model/StateMachineTransitionJsonApiAllOfRelationshipsStateMachineLinks.md)
- [StateMachineTransitionJsonApiAllOfRelationshipsToStateMachineState](docs/Model/StateMachineTransitionJsonApiAllOfRelationshipsToStateMachineState.md)
- [StateMachineTransitionJsonApiAllOfRelationshipsToStateMachineStateLinks](docs/Model/StateMachineTransitionJsonApiAllOfRelationshipsToStateMachineStateLinks.md)
- [Success](docs/Model/Success.md)
- [SystemConfig](docs/Model/SystemConfig.md)
- [SystemConfigJsonApi](docs/Model/SystemConfigJsonApi.md)
- [SystemConfigJsonApiAllOf](docs/Model/SystemConfigJsonApiAllOf.md)
- [SystemConfigJsonApiAllOfConfigurationValue](docs/Model/SystemConfigJsonApiAllOfConfigurationValue.md)
- [SystemConfigJsonApiAllOfRelationships](docs/Model/SystemConfigJsonApiAllOfRelationships.md)
- [SystemConfigJsonApiAllOfRelationshipsSalesChannel](docs/Model/SystemConfigJsonApiAllOfRelationshipsSalesChannel.md)
- [SystemConfigJsonApiAllOfRelationshipsSalesChannelLinks](docs/Model/SystemConfigJsonApiAllOfRelationshipsSalesChannelLinks.md)
- [Tag](docs/Model/Tag.md)
- [TagJsonApi](docs/Model/TagJsonApi.md)
- [TagJsonApiAllOf](docs/Model/TagJsonApiAllOf.md)
- [TagJsonApiAllOfRelationships](docs/Model/TagJsonApiAllOfRelationships.md)
- [TagJsonApiAllOfRelationshipsCategories](docs/Model/TagJsonApiAllOfRelationshipsCategories.md)
- [TagJsonApiAllOfRelationshipsCategoriesLinks](docs/Model/TagJsonApiAllOfRelationshipsCategoriesLinks.md)
- [TagJsonApiAllOfRelationshipsCustomers](docs/Model/TagJsonApiAllOfRelationshipsCustomers.md)
- [TagJsonApiAllOfRelationshipsCustomersLinks](docs/Model/TagJsonApiAllOfRelationshipsCustomersLinks.md)
- [TagJsonApiAllOfRelationshipsLandingPages](docs/Model/TagJsonApiAllOfRelationshipsLandingPages.md)
- [TagJsonApiAllOfRelationshipsLandingPagesLinks](docs/Model/TagJsonApiAllOfRelationshipsLandingPagesLinks.md)
- [TagJsonApiAllOfRelationshipsMedia](docs/Model/TagJsonApiAllOfRelationshipsMedia.md)
- [TagJsonApiAllOfRelationshipsMediaLinks](docs/Model/TagJsonApiAllOfRelationshipsMediaLinks.md)
- [TagJsonApiAllOfRelationshipsNewsletterRecipients](docs/Model/TagJsonApiAllOfRelationshipsNewsletterRecipients.md)
- [TagJsonApiAllOfRelationshipsNewsletterRecipientsLinks](docs/Model/TagJsonApiAllOfRelationshipsNewsletterRecipientsLinks.md)
- [TagJsonApiAllOfRelationshipsOrders](docs/Model/TagJsonApiAllOfRelationshipsOrders.md)
- [TagJsonApiAllOfRelationshipsOrdersLinks](docs/Model/TagJsonApiAllOfRelationshipsOrdersLinks.md)
- [TagJsonApiAllOfRelationshipsProducts](docs/Model/TagJsonApiAllOfRelationshipsProducts.md)
- [TagJsonApiAllOfRelationshipsProductsLinks](docs/Model/TagJsonApiAllOfRelationshipsProductsLinks.md)
- [TagJsonApiAllOfRelationshipsRules](docs/Model/TagJsonApiAllOfRelationshipsRules.md)
- [TagJsonApiAllOfRelationshipsRulesData](docs/Model/TagJsonApiAllOfRelationshipsRulesData.md)
- [TagJsonApiAllOfRelationshipsRulesLinks](docs/Model/TagJsonApiAllOfRelationshipsRulesLinks.md)
- [TagJsonApiAllOfRelationshipsShippingMethods](docs/Model/TagJsonApiAllOfRelationshipsShippingMethods.md)
- [TagJsonApiAllOfRelationshipsShippingMethodsLinks](docs/Model/TagJsonApiAllOfRelationshipsShippingMethodsLinks.md)
- [Tax](docs/Model/Tax.md)
- [TaxJsonApi](docs/Model/TaxJsonApi.md)
- [TaxJsonApiAllOf](docs/Model/TaxJsonApiAllOf.md)
- [TaxJsonApiAllOfRelationships](docs/Model/TaxJsonApiAllOfRelationships.md)
- [TaxJsonApiAllOfRelationshipsProducts](docs/Model/TaxJsonApiAllOfRelationshipsProducts.md)
- [TaxJsonApiAllOfRelationshipsProductsLinks](docs/Model/TaxJsonApiAllOfRelationshipsProductsLinks.md)
- [TaxJsonApiAllOfRelationshipsRules](docs/Model/TaxJsonApiAllOfRelationshipsRules.md)
- [TaxJsonApiAllOfRelationshipsRulesData](docs/Model/TaxJsonApiAllOfRelationshipsRulesData.md)
- [TaxJsonApiAllOfRelationshipsRulesLinks](docs/Model/TaxJsonApiAllOfRelationshipsRulesLinks.md)
- [TaxJsonApiAllOfRelationshipsShippingMethods](docs/Model/TaxJsonApiAllOfRelationshipsShippingMethods.md)
- [TaxJsonApiAllOfRelationshipsShippingMethodsLinks](docs/Model/TaxJsonApiAllOfRelationshipsShippingMethodsLinks.md)
- [TaxProvider](docs/Model/TaxProvider.md)
- [TaxProviderJsonApi](docs/Model/TaxProviderJsonApi.md)
- [TaxProviderJsonApiAllOf](docs/Model/TaxProviderJsonApiAllOf.md)
- [TaxProviderJsonApiAllOfRelationships](docs/Model/TaxProviderJsonApiAllOfRelationships.md)
- [TaxProviderJsonApiAllOfRelationshipsApp](docs/Model/TaxProviderJsonApiAllOfRelationshipsApp.md)
- [TaxProviderJsonApiAllOfRelationshipsAppLinks](docs/Model/TaxProviderJsonApiAllOfRelationshipsAppLinks.md)
- [TaxProviderJsonApiAllOfRelationshipsAvailabilityRule](docs/Model/TaxProviderJsonApiAllOfRelationshipsAvailabilityRule.md)
- [TaxProviderJsonApiAllOfRelationshipsAvailabilityRuleLinks](docs/Model/TaxProviderJsonApiAllOfRelationshipsAvailabilityRuleLinks.md)
- [TaxRule](docs/Model/TaxRule.md)
- [TaxRuleJsonApi](docs/Model/TaxRuleJsonApi.md)
- [TaxRuleJsonApiAllOf](docs/Model/TaxRuleJsonApiAllOf.md)
- [TaxRuleJsonApiAllOfData](docs/Model/TaxRuleJsonApiAllOfData.md)
- [TaxRuleJsonApiAllOfRelationships](docs/Model/TaxRuleJsonApiAllOfRelationships.md)
- [TaxRuleJsonApiAllOfRelationshipsCountry](docs/Model/TaxRuleJsonApiAllOfRelationshipsCountry.md)
- [TaxRuleJsonApiAllOfRelationshipsCountryLinks](docs/Model/TaxRuleJsonApiAllOfRelationshipsCountryLinks.md)
- [TaxRuleJsonApiAllOfRelationshipsTax](docs/Model/TaxRuleJsonApiAllOfRelationshipsTax.md)
- [TaxRuleJsonApiAllOfRelationshipsTaxLinks](docs/Model/TaxRuleJsonApiAllOfRelationshipsTaxLinks.md)
- [TaxRuleJsonApiAllOfRelationshipsType](docs/Model/TaxRuleJsonApiAllOfRelationshipsType.md)
- [TaxRuleJsonApiAllOfRelationshipsTypeData](docs/Model/TaxRuleJsonApiAllOfRelationshipsTypeData.md)
- [TaxRuleJsonApiAllOfRelationshipsTypeLinks](docs/Model/TaxRuleJsonApiAllOfRelationshipsTypeLinks.md)
- [TaxRuleType](docs/Model/TaxRuleType.md)
- [TaxRuleTypeJsonApi](docs/Model/TaxRuleTypeJsonApi.md)
- [TaxRuleTypeJsonApiAllOf](docs/Model/TaxRuleTypeJsonApiAllOf.md)
- [TaxRuleTypeJsonApiAllOfRelationships](docs/Model/TaxRuleTypeJsonApiAllOfRelationships.md)
- [TaxRuleTypeJsonApiAllOfRelationshipsRules](docs/Model/TaxRuleTypeJsonApiAllOfRelationshipsRules.md)
- [TaxRuleTypeJsonApiAllOfRelationshipsRulesLinks](docs/Model/TaxRuleTypeJsonApiAllOfRelationshipsRulesLinks.md)
- [Theme](docs/Model/Theme.md)
- [ThemeChild](docs/Model/ThemeChild.md)
- [ThemeJsonApi](docs/Model/ThemeJsonApi.md)
- [ThemeJsonApiAllOf](docs/Model/ThemeJsonApiAllOf.md)
- [ThemeJsonApiAllOfRelationships](docs/Model/ThemeJsonApiAllOfRelationships.md)
- [ThemeJsonApiAllOfRelationshipsDependentThemes](docs/Model/ThemeJsonApiAllOfRelationshipsDependentThemes.md)
- [ThemeJsonApiAllOfRelationshipsDependentThemesData](docs/Model/ThemeJsonApiAllOfRelationshipsDependentThemesData.md)
- [ThemeJsonApiAllOfRelationshipsDependentThemesLinks](docs/Model/ThemeJsonApiAllOfRelationshipsDependentThemesLinks.md)
- [ThemeJsonApiAllOfRelationshipsMedia](docs/Model/ThemeJsonApiAllOfRelationshipsMedia.md)
- [ThemeJsonApiAllOfRelationshipsMediaLinks](docs/Model/ThemeJsonApiAllOfRelationshipsMediaLinks.md)
- [ThemeJsonApiAllOfRelationshipsPreviewMedia](docs/Model/ThemeJsonApiAllOfRelationshipsPreviewMedia.md)
- [ThemeJsonApiAllOfRelationshipsPreviewMediaLinks](docs/Model/ThemeJsonApiAllOfRelationshipsPreviewMediaLinks.md)
- [ThemeJsonApiAllOfRelationshipsSalesChannels](docs/Model/ThemeJsonApiAllOfRelationshipsSalesChannels.md)
- [ThemeJsonApiAllOfRelationshipsSalesChannelsLinks](docs/Model/ThemeJsonApiAllOfRelationshipsSalesChannelsLinks.md)
- [ThemeMedia](docs/Model/ThemeMedia.md)
- [ThemeSalesChannel](docs/Model/ThemeSalesChannel.md)
- [Unit](docs/Model/Unit.md)
- [UnitJsonApi](docs/Model/UnitJsonApi.md)
- [UnitJsonApiAllOf](docs/Model/UnitJsonApiAllOf.md)
- [UnitJsonApiAllOfRelationships](docs/Model/UnitJsonApiAllOfRelationships.md)
- [UnitJsonApiAllOfRelationshipsProducts](docs/Model/UnitJsonApiAllOfRelationshipsProducts.md)
- [UnitJsonApiAllOfRelationshipsProductsLinks](docs/Model/UnitJsonApiAllOfRelationshipsProductsLinks.md)
- [User](docs/Model/User.md)
- [UserAccessKey](docs/Model/UserAccessKey.md)
- [UserAccessKeyJsonApi](docs/Model/UserAccessKeyJsonApi.md)
- [UserAccessKeyJsonApiAllOf](docs/Model/UserAccessKeyJsonApiAllOf.md)
- [UserAccessKeyJsonApiAllOfRelationships](docs/Model/UserAccessKeyJsonApiAllOfRelationships.md)
- [UserAccessKeyJsonApiAllOfRelationshipsUser](docs/Model/UserAccessKeyJsonApiAllOfRelationshipsUser.md)
- [UserAccessKeyJsonApiAllOfRelationshipsUserLinks](docs/Model/UserAccessKeyJsonApiAllOfRelationshipsUserLinks.md)
- [UserConfig](docs/Model/UserConfig.md)
- [UserConfigJsonApi](docs/Model/UserConfigJsonApi.md)
- [UserConfigJsonApiAllOf](docs/Model/UserConfigJsonApiAllOf.md)
- [UserConfigJsonApiAllOfRelationships](docs/Model/UserConfigJsonApiAllOfRelationships.md)
- [UserConfigJsonApiAllOfRelationshipsUser](docs/Model/UserConfigJsonApiAllOfRelationshipsUser.md)
- [UserConfigJsonApiAllOfRelationshipsUserLinks](docs/Model/UserConfigJsonApiAllOfRelationshipsUserLinks.md)
- [UserJsonApi](docs/Model/UserJsonApi.md)
- [UserJsonApiAllOf](docs/Model/UserJsonApiAllOf.md)
- [UserJsonApiAllOfExtensions](docs/Model/UserJsonApiAllOfExtensions.md)
- [UserJsonApiAllOfExtensionsCreatedNotifications](docs/Model/UserJsonApiAllOfExtensionsCreatedNotifications.md)
- [UserJsonApiAllOfExtensionsCreatedNotificationsLinks](docs/Model/UserJsonApiAllOfExtensionsCreatedNotificationsLinks.md)
- [UserJsonApiAllOfRelationships](docs/Model/UserJsonApiAllOfRelationships.md)
- [UserJsonApiAllOfRelationshipsAccessKeys](docs/Model/UserJsonApiAllOfRelationshipsAccessKeys.md)
- [UserJsonApiAllOfRelationshipsAccessKeysData](docs/Model/UserJsonApiAllOfRelationshipsAccessKeysData.md)
- [UserJsonApiAllOfRelationshipsAccessKeysLinks](docs/Model/UserJsonApiAllOfRelationshipsAccessKeysLinks.md)
- [UserJsonApiAllOfRelationshipsAclRoles](docs/Model/UserJsonApiAllOfRelationshipsAclRoles.md)
- [UserJsonApiAllOfRelationshipsAclRolesLinks](docs/Model/UserJsonApiAllOfRelationshipsAclRolesLinks.md)
- [UserJsonApiAllOfRelationshipsAvatarMedia](docs/Model/UserJsonApiAllOfRelationshipsAvatarMedia.md)
- [UserJsonApiAllOfRelationshipsAvatarMediaData](docs/Model/UserJsonApiAllOfRelationshipsAvatarMediaData.md)
- [UserJsonApiAllOfRelationshipsAvatarMediaLinks](docs/Model/UserJsonApiAllOfRelationshipsAvatarMediaLinks.md)
- [UserJsonApiAllOfRelationshipsConfigs](docs/Model/UserJsonApiAllOfRelationshipsConfigs.md)
- [UserJsonApiAllOfRelationshipsConfigsData](docs/Model/UserJsonApiAllOfRelationshipsConfigsData.md)
- [UserJsonApiAllOfRelationshipsConfigsLinks](docs/Model/UserJsonApiAllOfRelationshipsConfigsLinks.md)
- [UserJsonApiAllOfRelationshipsCreatedCustomers](docs/Model/UserJsonApiAllOfRelationshipsCreatedCustomers.md)
- [UserJsonApiAllOfRelationshipsCreatedCustomersData](docs/Model/UserJsonApiAllOfRelationshipsCreatedCustomersData.md)
- [UserJsonApiAllOfRelationshipsCreatedCustomersLinks](docs/Model/UserJsonApiAllOfRelationshipsCreatedCustomersLinks.md)
- [UserJsonApiAllOfRelationshipsCreatedOrders](docs/Model/UserJsonApiAllOfRelationshipsCreatedOrders.md)
- [UserJsonApiAllOfRelationshipsCreatedOrdersData](docs/Model/UserJsonApiAllOfRelationshipsCreatedOrdersData.md)
- [UserJsonApiAllOfRelationshipsCreatedOrdersLinks](docs/Model/UserJsonApiAllOfRelationshipsCreatedOrdersLinks.md)
- [UserJsonApiAllOfRelationshipsImportExportLogEntries](docs/Model/UserJsonApiAllOfRelationshipsImportExportLogEntries.md)
- [UserJsonApiAllOfRelationshipsImportExportLogEntriesData](docs/Model/UserJsonApiAllOfRelationshipsImportExportLogEntriesData.md)
- [UserJsonApiAllOfRelationshipsImportExportLogEntriesLinks](docs/Model/UserJsonApiAllOfRelationshipsImportExportLogEntriesLinks.md)
- [UserJsonApiAllOfRelationshipsLocale](docs/Model/UserJsonApiAllOfRelationshipsLocale.md)
- [UserJsonApiAllOfRelationshipsLocaleLinks](docs/Model/UserJsonApiAllOfRelationshipsLocaleLinks.md)
- [UserJsonApiAllOfRelationshipsMedia](docs/Model/UserJsonApiAllOfRelationshipsMedia.md)
- [UserJsonApiAllOfRelationshipsMediaLinks](docs/Model/UserJsonApiAllOfRelationshipsMediaLinks.md)
- [UserJsonApiAllOfRelationshipsRecoveryUser](docs/Model/UserJsonApiAllOfRelationshipsRecoveryUser.md)
- [UserJsonApiAllOfRelationshipsRecoveryUserData](docs/Model/UserJsonApiAllOfRelationshipsRecoveryUserData.md)
- [UserJsonApiAllOfRelationshipsRecoveryUserLinks](docs/Model/UserJsonApiAllOfRelationshipsRecoveryUserLinks.md)
- [UserJsonApiAllOfRelationshipsStateMachineHistoryEntries](docs/Model/UserJsonApiAllOfRelationshipsStateMachineHistoryEntries.md)
- [UserJsonApiAllOfRelationshipsStateMachineHistoryEntriesData](docs/Model/UserJsonApiAllOfRelationshipsStateMachineHistoryEntriesData.md)
- [UserJsonApiAllOfRelationshipsStateMachineHistoryEntriesLinks](docs/Model/UserJsonApiAllOfRelationshipsStateMachineHistoryEntriesLinks.md)
- [UserJsonApiAllOfRelationshipsUpdatedCustomers](docs/Model/UserJsonApiAllOfRelationshipsUpdatedCustomers.md)
- [UserJsonApiAllOfRelationshipsUpdatedCustomersData](docs/Model/UserJsonApiAllOfRelationshipsUpdatedCustomersData.md)
- [UserJsonApiAllOfRelationshipsUpdatedCustomersLinks](docs/Model/UserJsonApiAllOfRelationshipsUpdatedCustomersLinks.md)
- [UserJsonApiAllOfRelationshipsUpdatedOrders](docs/Model/UserJsonApiAllOfRelationshipsUpdatedOrders.md)
- [UserJsonApiAllOfRelationshipsUpdatedOrdersData](docs/Model/UserJsonApiAllOfRelationshipsUpdatedOrdersData.md)
- [UserJsonApiAllOfRelationshipsUpdatedOrdersLinks](docs/Model/UserJsonApiAllOfRelationshipsUpdatedOrdersLinks.md)
- [UserRecovery](docs/Model/UserRecovery.md)
- [UserRecoveryJsonApi](docs/Model/UserRecoveryJsonApi.md)
- [UserRecoveryJsonApiAllOf](docs/Model/UserRecoveryJsonApiAllOf.md)
- [UserRecoveryJsonApiAllOfRelationships](docs/Model/UserRecoveryJsonApiAllOfRelationships.md)
- [UserRecoveryJsonApiAllOfRelationshipsUser](docs/Model/UserRecoveryJsonApiAllOfRelationshipsUser.md)
- [UserRecoveryJsonApiAllOfRelationshipsUserLinks](docs/Model/UserRecoveryJsonApiAllOfRelationshipsUserLinks.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookEventLog](docs/Model/WebhookEventLog.md)
- [WebhookEventLogJsonApi](docs/Model/WebhookEventLogJsonApi.md)
- [WebhookEventLogJsonApiAllOf](docs/Model/WebhookEventLogJsonApiAllOf.md)
- [WebhookJsonApi](docs/Model/WebhookJsonApi.md)
- [WebhookJsonApiAllOf](docs/Model/WebhookJsonApiAllOf.md)
- [WebhookJsonApiAllOfRelationships](docs/Model/WebhookJsonApiAllOfRelationships.md)
- [WebhookJsonApiAllOfRelationshipsApp](docs/Model/WebhookJsonApiAllOfRelationshipsApp.md)
- [WebhookJsonApiAllOfRelationshipsAppLinks](docs/Model/WebhookJsonApiAllOfRelationshipsAppLinks.md)

## Authorization

### oAuth

- **Type**: `OAuth`
- **Flow**: `password`
- **Authorization URL**: ``
- **Scopes**: 
    - **write**: Full write access


### oAuth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **write**: Full write access

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `6.5.8.0`
    - Package version: `1.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
