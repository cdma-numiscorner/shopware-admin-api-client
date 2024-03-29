<?php
/**
 * ProductJsonApiAllOfRelationships
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Shopware Admin API
 *
 * This endpoint reference contains an overview of all endpoints comprising the Shopware Admin API.  For a better overview, all CRUD-endpoints are hidden by default. If you want to show also CRUD-endpoints add the query parameter `type=jsonapi`.
 *
 * The version of the OpenAPI document: 6.5.8.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\ShopwareAdminApiClient\Model;

use \ArrayAccess;
use \OpenAPI\ShopwareAdminApiClient\ObjectSerializer;

/**
 * ProductJsonApiAllOfRelationships Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ProductJsonApiAllOfRelationships implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductJsonApi_allOf_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'downloads' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsDownloads',
        'parent' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsParent',
        'children' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsChildren',
        'delivery_time' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsDeliveryTime',
        'tax' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsTax',
        'manufacturer' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsManufacturer',
        'unit' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsUnit',
        'cover' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCover',
        'feature_set' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsFeatureSet',
        'cms_page' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCmsPage',
        'canonical_product' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCanonicalProduct',
        'prices' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsPrices',
        'media' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsMedia',
        'cross_sellings' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCrossSellings',
        'cross_selling_assigned_products' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCrossSellingAssignedProducts',
        'configurator_settings' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsConfiguratorSettings',
        'visibilities' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsVisibilities',
        'search_keywords' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsSearchKeywords',
        'product_reviews' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsProductReviews',
        'main_categories' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsMainCategories',
        'seo_urls' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsSeoUrls',
        'order_line_items' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsOrderLineItems',
        'wishlists' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsWishlists',
        'options' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsOptions',
        'properties' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsProperties',
        'categories' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCategories',
        'streams' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsStreams',
        'categories_ro' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCategoriesRo',
        'tags' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsTags',
        'custom_field_sets' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCustomFieldSets'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'downloads' => null,
        'parent' => null,
        'children' => null,
        'delivery_time' => null,
        'tax' => null,
        'manufacturer' => null,
        'unit' => null,
        'cover' => null,
        'feature_set' => null,
        'cms_page' => null,
        'canonical_product' => null,
        'prices' => null,
        'media' => null,
        'cross_sellings' => null,
        'cross_selling_assigned_products' => null,
        'configurator_settings' => null,
        'visibilities' => null,
        'search_keywords' => null,
        'product_reviews' => null,
        'main_categories' => null,
        'seo_urls' => null,
        'order_line_items' => null,
        'wishlists' => null,
        'options' => null,
        'properties' => null,
        'categories' => null,
        'streams' => null,
        'categories_ro' => null,
        'tags' => null,
        'custom_field_sets' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'downloads' => 'downloads',
        'parent' => 'parent',
        'children' => 'children',
        'delivery_time' => 'deliveryTime',
        'tax' => 'tax',
        'manufacturer' => 'manufacturer',
        'unit' => 'unit',
        'cover' => 'cover',
        'feature_set' => 'featureSet',
        'cms_page' => 'cmsPage',
        'canonical_product' => 'canonicalProduct',
        'prices' => 'prices',
        'media' => 'media',
        'cross_sellings' => 'crossSellings',
        'cross_selling_assigned_products' => 'crossSellingAssignedProducts',
        'configurator_settings' => 'configuratorSettings',
        'visibilities' => 'visibilities',
        'search_keywords' => 'searchKeywords',
        'product_reviews' => 'productReviews',
        'main_categories' => 'mainCategories',
        'seo_urls' => 'seoUrls',
        'order_line_items' => 'orderLineItems',
        'wishlists' => 'wishlists',
        'options' => 'options',
        'properties' => 'properties',
        'categories' => 'categories',
        'streams' => 'streams',
        'categories_ro' => 'categoriesRo',
        'tags' => 'tags',
        'custom_field_sets' => 'customFieldSets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'downloads' => 'setDownloads',
        'parent' => 'setParent',
        'children' => 'setChildren',
        'delivery_time' => 'setDeliveryTime',
        'tax' => 'setTax',
        'manufacturer' => 'setManufacturer',
        'unit' => 'setUnit',
        'cover' => 'setCover',
        'feature_set' => 'setFeatureSet',
        'cms_page' => 'setCmsPage',
        'canonical_product' => 'setCanonicalProduct',
        'prices' => 'setPrices',
        'media' => 'setMedia',
        'cross_sellings' => 'setCrossSellings',
        'cross_selling_assigned_products' => 'setCrossSellingAssignedProducts',
        'configurator_settings' => 'setConfiguratorSettings',
        'visibilities' => 'setVisibilities',
        'search_keywords' => 'setSearchKeywords',
        'product_reviews' => 'setProductReviews',
        'main_categories' => 'setMainCategories',
        'seo_urls' => 'setSeoUrls',
        'order_line_items' => 'setOrderLineItems',
        'wishlists' => 'setWishlists',
        'options' => 'setOptions',
        'properties' => 'setProperties',
        'categories' => 'setCategories',
        'streams' => 'setStreams',
        'categories_ro' => 'setCategoriesRo',
        'tags' => 'setTags',
        'custom_field_sets' => 'setCustomFieldSets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'downloads' => 'getDownloads',
        'parent' => 'getParent',
        'children' => 'getChildren',
        'delivery_time' => 'getDeliveryTime',
        'tax' => 'getTax',
        'manufacturer' => 'getManufacturer',
        'unit' => 'getUnit',
        'cover' => 'getCover',
        'feature_set' => 'getFeatureSet',
        'cms_page' => 'getCmsPage',
        'canonical_product' => 'getCanonicalProduct',
        'prices' => 'getPrices',
        'media' => 'getMedia',
        'cross_sellings' => 'getCrossSellings',
        'cross_selling_assigned_products' => 'getCrossSellingAssignedProducts',
        'configurator_settings' => 'getConfiguratorSettings',
        'visibilities' => 'getVisibilities',
        'search_keywords' => 'getSearchKeywords',
        'product_reviews' => 'getProductReviews',
        'main_categories' => 'getMainCategories',
        'seo_urls' => 'getSeoUrls',
        'order_line_items' => 'getOrderLineItems',
        'wishlists' => 'getWishlists',
        'options' => 'getOptions',
        'properties' => 'getProperties',
        'categories' => 'getCategories',
        'streams' => 'getStreams',
        'categories_ro' => 'getCategoriesRo',
        'tags' => 'getTags',
        'custom_field_sets' => 'getCustomFieldSets'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['downloads'] = $data['downloads'] ?? null;
        $this->container['parent'] = $data['parent'] ?? null;
        $this->container['children'] = $data['children'] ?? null;
        $this->container['delivery_time'] = $data['delivery_time'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['manufacturer'] = $data['manufacturer'] ?? null;
        $this->container['unit'] = $data['unit'] ?? null;
        $this->container['cover'] = $data['cover'] ?? null;
        $this->container['feature_set'] = $data['feature_set'] ?? null;
        $this->container['cms_page'] = $data['cms_page'] ?? null;
        $this->container['canonical_product'] = $data['canonical_product'] ?? null;
        $this->container['prices'] = $data['prices'] ?? null;
        $this->container['media'] = $data['media'] ?? null;
        $this->container['cross_sellings'] = $data['cross_sellings'] ?? null;
        $this->container['cross_selling_assigned_products'] = $data['cross_selling_assigned_products'] ?? null;
        $this->container['configurator_settings'] = $data['configurator_settings'] ?? null;
        $this->container['visibilities'] = $data['visibilities'] ?? null;
        $this->container['search_keywords'] = $data['search_keywords'] ?? null;
        $this->container['product_reviews'] = $data['product_reviews'] ?? null;
        $this->container['main_categories'] = $data['main_categories'] ?? null;
        $this->container['seo_urls'] = $data['seo_urls'] ?? null;
        $this->container['order_line_items'] = $data['order_line_items'] ?? null;
        $this->container['wishlists'] = $data['wishlists'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['properties'] = $data['properties'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['streams'] = $data['streams'] ?? null;
        $this->container['categories_ro'] = $data['categories_ro'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['custom_field_sets'] = $data['custom_field_sets'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets downloads
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsDownloads|null
     */
    public function getDownloads()
    {
        return $this->container['downloads'];
    }

    /**
     * Sets downloads
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsDownloads|null $downloads downloads
     *
     * @return self
     */
    public function setDownloads($downloads)
    {
        $this->container['downloads'] = $downloads;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsParent|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsParent|null $parent parent
     *
     * @return self
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsChildren|null
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsChildren|null $children children
     *
     * @return self
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }

    /**
     * Gets delivery_time
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsDeliveryTime|null
     */
    public function getDeliveryTime()
    {
        return $this->container['delivery_time'];
    }

    /**
     * Sets delivery_time
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsDeliveryTime|null $delivery_time delivery_time
     *
     * @return self
     */
    public function setDeliveryTime($delivery_time)
    {
        $this->container['delivery_time'] = $delivery_time;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsTax|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsTax|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsManufacturer|null
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsManufacturer|null $manufacturer manufacturer
     *
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsUnit|null
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsUnit|null $unit unit
     *
     * @return self
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets cover
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCover|null
     */
    public function getCover()
    {
        return $this->container['cover'];
    }

    /**
     * Sets cover
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCover|null $cover cover
     *
     * @return self
     */
    public function setCover($cover)
    {
        $this->container['cover'] = $cover;

        return $this;
    }

    /**
     * Gets feature_set
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsFeatureSet|null
     */
    public function getFeatureSet()
    {
        return $this->container['feature_set'];
    }

    /**
     * Sets feature_set
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsFeatureSet|null $feature_set feature_set
     *
     * @return self
     */
    public function setFeatureSet($feature_set)
    {
        $this->container['feature_set'] = $feature_set;

        return $this;
    }

    /**
     * Gets cms_page
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCmsPage|null
     */
    public function getCmsPage()
    {
        return $this->container['cms_page'];
    }

    /**
     * Sets cms_page
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCmsPage|null $cms_page cms_page
     *
     * @return self
     */
    public function setCmsPage($cms_page)
    {
        $this->container['cms_page'] = $cms_page;

        return $this;
    }

    /**
     * Gets canonical_product
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCanonicalProduct|null
     */
    public function getCanonicalProduct()
    {
        return $this->container['canonical_product'];
    }

    /**
     * Sets canonical_product
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCanonicalProduct|null $canonical_product canonical_product
     *
     * @return self
     */
    public function setCanonicalProduct($canonical_product)
    {
        $this->container['canonical_product'] = $canonical_product;

        return $this;
    }

    /**
     * Gets prices
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsPrices|null
     */
    public function getPrices()
    {
        return $this->container['prices'];
    }

    /**
     * Sets prices
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsPrices|null $prices prices
     *
     * @return self
     */
    public function setPrices($prices)
    {
        $this->container['prices'] = $prices;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsMedia|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsMedia|null $media media
     *
     * @return self
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets cross_sellings
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCrossSellings|null
     */
    public function getCrossSellings()
    {
        return $this->container['cross_sellings'];
    }

    /**
     * Sets cross_sellings
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCrossSellings|null $cross_sellings cross_sellings
     *
     * @return self
     */
    public function setCrossSellings($cross_sellings)
    {
        $this->container['cross_sellings'] = $cross_sellings;

        return $this;
    }

    /**
     * Gets cross_selling_assigned_products
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCrossSellingAssignedProducts|null
     */
    public function getCrossSellingAssignedProducts()
    {
        return $this->container['cross_selling_assigned_products'];
    }

    /**
     * Sets cross_selling_assigned_products
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCrossSellingAssignedProducts|null $cross_selling_assigned_products cross_selling_assigned_products
     *
     * @return self
     */
    public function setCrossSellingAssignedProducts($cross_selling_assigned_products)
    {
        $this->container['cross_selling_assigned_products'] = $cross_selling_assigned_products;

        return $this;
    }

    /**
     * Gets configurator_settings
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsConfiguratorSettings|null
     */
    public function getConfiguratorSettings()
    {
        return $this->container['configurator_settings'];
    }

    /**
     * Sets configurator_settings
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsConfiguratorSettings|null $configurator_settings configurator_settings
     *
     * @return self
     */
    public function setConfiguratorSettings($configurator_settings)
    {
        $this->container['configurator_settings'] = $configurator_settings;

        return $this;
    }

    /**
     * Gets visibilities
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsVisibilities|null
     */
    public function getVisibilities()
    {
        return $this->container['visibilities'];
    }

    /**
     * Sets visibilities
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsVisibilities|null $visibilities visibilities
     *
     * @return self
     */
    public function setVisibilities($visibilities)
    {
        $this->container['visibilities'] = $visibilities;

        return $this;
    }

    /**
     * Gets search_keywords
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsSearchKeywords|null
     */
    public function getSearchKeywords()
    {
        return $this->container['search_keywords'];
    }

    /**
     * Sets search_keywords
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsSearchKeywords|null $search_keywords search_keywords
     *
     * @return self
     */
    public function setSearchKeywords($search_keywords)
    {
        $this->container['search_keywords'] = $search_keywords;

        return $this;
    }

    /**
     * Gets product_reviews
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsProductReviews|null
     */
    public function getProductReviews()
    {
        return $this->container['product_reviews'];
    }

    /**
     * Sets product_reviews
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsProductReviews|null $product_reviews product_reviews
     *
     * @return self
     */
    public function setProductReviews($product_reviews)
    {
        $this->container['product_reviews'] = $product_reviews;

        return $this;
    }

    /**
     * Gets main_categories
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsMainCategories|null
     */
    public function getMainCategories()
    {
        return $this->container['main_categories'];
    }

    /**
     * Sets main_categories
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsMainCategories|null $main_categories main_categories
     *
     * @return self
     */
    public function setMainCategories($main_categories)
    {
        $this->container['main_categories'] = $main_categories;

        return $this;
    }

    /**
     * Gets seo_urls
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsSeoUrls|null
     */
    public function getSeoUrls()
    {
        return $this->container['seo_urls'];
    }

    /**
     * Sets seo_urls
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsSeoUrls|null $seo_urls seo_urls
     *
     * @return self
     */
    public function setSeoUrls($seo_urls)
    {
        $this->container['seo_urls'] = $seo_urls;

        return $this;
    }

    /**
     * Gets order_line_items
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsOrderLineItems|null
     */
    public function getOrderLineItems()
    {
        return $this->container['order_line_items'];
    }

    /**
     * Sets order_line_items
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsOrderLineItems|null $order_line_items order_line_items
     *
     * @return self
     */
    public function setOrderLineItems($order_line_items)
    {
        $this->container['order_line_items'] = $order_line_items;

        return $this;
    }

    /**
     * Gets wishlists
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsWishlists|null
     */
    public function getWishlists()
    {
        return $this->container['wishlists'];
    }

    /**
     * Sets wishlists
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsWishlists|null $wishlists wishlists
     *
     * @return self
     */
    public function setWishlists($wishlists)
    {
        $this->container['wishlists'] = $wishlists;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsOptions|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsOptions|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsProperties|null
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsProperties|null $properties properties
     *
     * @return self
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCategories|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCategories|null $categories categories
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets streams
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsStreams|null
     */
    public function getStreams()
    {
        return $this->container['streams'];
    }

    /**
     * Sets streams
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsStreams|null $streams streams
     *
     * @return self
     */
    public function setStreams($streams)
    {
        $this->container['streams'] = $streams;

        return $this;
    }

    /**
     * Gets categories_ro
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCategoriesRo|null
     */
    public function getCategoriesRo()
    {
        return $this->container['categories_ro'];
    }

    /**
     * Sets categories_ro
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCategoriesRo|null $categories_ro categories_ro
     *
     * @return self
     */
    public function setCategoriesRo($categories_ro)
    {
        $this->container['categories_ro'] = $categories_ro;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsTags|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsTags|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets custom_field_sets
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCustomFieldSets|null
     */
    public function getCustomFieldSets()
    {
        return $this->container['custom_field_sets'];
    }

    /**
     * Sets custom_field_sets
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductJsonApiAllOfRelationshipsCustomFieldSets|null $custom_field_sets custom_field_sets
     *
     * @return self
     */
    public function setCustomFieldSets($custom_field_sets)
    {
        $this->container['custom_field_sets'] = $custom_field_sets;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


