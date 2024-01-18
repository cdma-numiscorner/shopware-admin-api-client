# # Criteria

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**page** | **int** | Search result page | [optional]
**limit** | **int** | Number of items per result page | [optional]
**filter** | [**\OpenAPI\ShopwareAdminApiClient\Model\CriteriaFilter[]**](CriteriaFilter.md) | List of filters to restrict the search result. For more information, see [Search Queries &gt; Filter](https://shopware.stoplight.io/docs/store-api/docs/concepts/search-queries.md#filter) | [optional]
**sort** | [**\OpenAPI\ShopwareAdminApiClient\Model\CriteriaSort[]**](CriteriaSort.md) | Sorting in the search result. | [optional]
**post_filter** | [**\OpenAPI\ShopwareAdminApiClient\Model\CriteriaFilter[]**](CriteriaFilter.md) | Filters that applied without affecting aggregations. For more information, see [Search Queries &gt; Post Filter](https://shopware.stoplight.io/docs/store-api/docs/concepts/search-queries.md#post-filter) | [optional]
**associations** | **object** | Used to fetch associations which are not fetched by default. | [optional]
**aggregations** | [**\OpenAPI\ShopwareAdminApiClient\Model\CriteriaAggregations[]**](CriteriaAggregations.md) | Used to perform aggregations on the search result. For more information, see [Search Queries &gt; Aggregations](https://shopware.stoplight.io/docs/store-api/docs/concepts/search-queries.md#aggregations) | [optional]
**grouping** | **string[]** | Perform groupings over certain fields | [optional]
**fields** | **string[]** | Fields which should be returned in the search result. | [optional]
**total_count_mode** | **string** | Whether the total for the total number of hits should be determined for the search query. none &#x3D; disabled total count, exact &#x3D; calculate exact total amount (slow), next-pages &#x3D; calculate only for next page (fast) | [optional] [default to TOTAL_COUNT_MODE_NONE]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
