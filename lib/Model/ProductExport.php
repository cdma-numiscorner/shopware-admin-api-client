<?php
/**
 * ProductExport
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
 * ProductExport Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.1.0.0
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ProductExport implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductExport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'product_stream_id' => 'string',
        'storefront_sales_channel_id' => 'string',
        'sales_channel_id' => 'string',
        'sales_channel_domain_id' => 'string',
        'currency_id' => 'string',
        'file_name' => 'string',
        'access_key' => 'string',
        'encoding' => 'string',
        'file_format' => 'string',
        'include_variants' => 'bool',
        'generate_by_cronjob' => 'bool',
        'generated_at' => '\DateTime',
        'interval' => 'int',
        'header_template' => 'string',
        'body_template' => 'string',
        'footer_template' => 'string',
        'paused_schedule' => 'bool',
        'is_running' => 'bool',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'product_stream' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductStream',
        'storefront_sales_channel' => '\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel',
        'sales_channel' => '\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel',
        'sales_channel_domain' => '\OpenAPI\ShopwareAdminApiClient\Model\SalesChannelDomain',
        'currency' => '\OpenAPI\ShopwareAdminApiClient\Model\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'product_stream_id' => null,
        'storefront_sales_channel_id' => null,
        'sales_channel_id' => null,
        'sales_channel_domain_id' => null,
        'currency_id' => null,
        'file_name' => null,
        'access_key' => null,
        'encoding' => null,
        'file_format' => null,
        'include_variants' => null,
        'generate_by_cronjob' => null,
        'generated_at' => 'date-time',
        'interval' => 'int64',
        'header_template' => null,
        'body_template' => null,
        'footer_template' => null,
        'paused_schedule' => null,
        'is_running' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'product_stream' => null,
        'storefront_sales_channel' => null,
        'sales_channel' => null,
        'sales_channel_domain' => null,
        'currency' => null
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
        'id' => 'id',
        'product_stream_id' => 'productStreamId',
        'storefront_sales_channel_id' => 'storefrontSalesChannelId',
        'sales_channel_id' => 'salesChannelId',
        'sales_channel_domain_id' => 'salesChannelDomainId',
        'currency_id' => 'currencyId',
        'file_name' => 'fileName',
        'access_key' => 'accessKey',
        'encoding' => 'encoding',
        'file_format' => 'fileFormat',
        'include_variants' => 'includeVariants',
        'generate_by_cronjob' => 'generateByCronjob',
        'generated_at' => 'generatedAt',
        'interval' => 'interval',
        'header_template' => 'headerTemplate',
        'body_template' => 'bodyTemplate',
        'footer_template' => 'footerTemplate',
        'paused_schedule' => 'pausedSchedule',
        'is_running' => 'isRunning',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'product_stream' => 'productStream',
        'storefront_sales_channel' => 'storefrontSalesChannel',
        'sales_channel' => 'salesChannel',
        'sales_channel_domain' => 'salesChannelDomain',
        'currency' => 'currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'product_stream_id' => 'setProductStreamId',
        'storefront_sales_channel_id' => 'setStorefrontSalesChannelId',
        'sales_channel_id' => 'setSalesChannelId',
        'sales_channel_domain_id' => 'setSalesChannelDomainId',
        'currency_id' => 'setCurrencyId',
        'file_name' => 'setFileName',
        'access_key' => 'setAccessKey',
        'encoding' => 'setEncoding',
        'file_format' => 'setFileFormat',
        'include_variants' => 'setIncludeVariants',
        'generate_by_cronjob' => 'setGenerateByCronjob',
        'generated_at' => 'setGeneratedAt',
        'interval' => 'setInterval',
        'header_template' => 'setHeaderTemplate',
        'body_template' => 'setBodyTemplate',
        'footer_template' => 'setFooterTemplate',
        'paused_schedule' => 'setPausedSchedule',
        'is_running' => 'setIsRunning',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'product_stream' => 'setProductStream',
        'storefront_sales_channel' => 'setStorefrontSalesChannel',
        'sales_channel' => 'setSalesChannel',
        'sales_channel_domain' => 'setSalesChannelDomain',
        'currency' => 'setCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'product_stream_id' => 'getProductStreamId',
        'storefront_sales_channel_id' => 'getStorefrontSalesChannelId',
        'sales_channel_id' => 'getSalesChannelId',
        'sales_channel_domain_id' => 'getSalesChannelDomainId',
        'currency_id' => 'getCurrencyId',
        'file_name' => 'getFileName',
        'access_key' => 'getAccessKey',
        'encoding' => 'getEncoding',
        'file_format' => 'getFileFormat',
        'include_variants' => 'getIncludeVariants',
        'generate_by_cronjob' => 'getGenerateByCronjob',
        'generated_at' => 'getGeneratedAt',
        'interval' => 'getInterval',
        'header_template' => 'getHeaderTemplate',
        'body_template' => 'getBodyTemplate',
        'footer_template' => 'getFooterTemplate',
        'paused_schedule' => 'getPausedSchedule',
        'is_running' => 'getIsRunning',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'product_stream' => 'getProductStream',
        'storefront_sales_channel' => 'getStorefrontSalesChannel',
        'sales_channel' => 'getSalesChannel',
        'sales_channel_domain' => 'getSalesChannelDomain',
        'currency' => 'getCurrency'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['product_stream_id'] = $data['product_stream_id'] ?? null;
        $this->container['storefront_sales_channel_id'] = $data['storefront_sales_channel_id'] ?? null;
        $this->container['sales_channel_id'] = $data['sales_channel_id'] ?? null;
        $this->container['sales_channel_domain_id'] = $data['sales_channel_domain_id'] ?? null;
        $this->container['currency_id'] = $data['currency_id'] ?? null;
        $this->container['file_name'] = $data['file_name'] ?? null;
        $this->container['access_key'] = $data['access_key'] ?? null;
        $this->container['encoding'] = $data['encoding'] ?? null;
        $this->container['file_format'] = $data['file_format'] ?? null;
        $this->container['include_variants'] = $data['include_variants'] ?? null;
        $this->container['generate_by_cronjob'] = $data['generate_by_cronjob'] ?? null;
        $this->container['generated_at'] = $data['generated_at'] ?? null;
        $this->container['interval'] = $data['interval'] ?? null;
        $this->container['header_template'] = $data['header_template'] ?? null;
        $this->container['body_template'] = $data['body_template'] ?? null;
        $this->container['footer_template'] = $data['footer_template'] ?? null;
        $this->container['paused_schedule'] = $data['paused_schedule'] ?? null;
        $this->container['is_running'] = $data['is_running'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['product_stream'] = $data['product_stream'] ?? null;
        $this->container['storefront_sales_channel'] = $data['storefront_sales_channel'] ?? null;
        $this->container['sales_channel'] = $data['sales_channel'] ?? null;
        $this->container['sales_channel_domain'] = $data['sales_channel_domain'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['product_stream_id'] === null) {
            $invalidProperties[] = "'product_stream_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['product_stream_id'])) {
            $invalidProperties[] = "invalid value for 'product_stream_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['storefront_sales_channel_id'] === null) {
            $invalidProperties[] = "'storefront_sales_channel_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['storefront_sales_channel_id'])) {
            $invalidProperties[] = "invalid value for 'storefront_sales_channel_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['sales_channel_id'] === null) {
            $invalidProperties[] = "'sales_channel_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['sales_channel_id'])) {
            $invalidProperties[] = "invalid value for 'sales_channel_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['sales_channel_domain_id'] === null) {
            $invalidProperties[] = "'sales_channel_domain_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['sales_channel_domain_id'])) {
            $invalidProperties[] = "invalid value for 'sales_channel_domain_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['currency_id'] === null) {
            $invalidProperties[] = "'currency_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['currency_id'])) {
            $invalidProperties[] = "invalid value for 'currency_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['file_name'] === null) {
            $invalidProperties[] = "'file_name' can't be null";
        }
        if ($this->container['access_key'] === null) {
            $invalidProperties[] = "'access_key' can't be null";
        }
        if ($this->container['encoding'] === null) {
            $invalidProperties[] = "'encoding' can't be null";
        }
        if ($this->container['file_format'] === null) {
            $invalidProperties[] = "'file_format' can't be null";
        }
        if ($this->container['generate_by_cronjob'] === null) {
            $invalidProperties[] = "'generate_by_cronjob' can't be null";
        }
        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (!is_null($id) && (!preg_match("/^[0-9a-f]{32}$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling ProductExport., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets product_stream_id
     *
     * @return string
     */
    public function getProductStreamId()
    {
        return $this->container['product_stream_id'];
    }

    /**
     * Sets product_stream_id
     *
     * @param string $product_stream_id product_stream_id
     *
     * @return self
     */
    public function setProductStreamId($product_stream_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $product_stream_id))) {
            throw new \InvalidArgumentException("invalid value for $product_stream_id when calling ProductExport., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['product_stream_id'] = $product_stream_id;

        return $this;
    }

    /**
     * Gets storefront_sales_channel_id
     *
     * @return string
     */
    public function getStorefrontSalesChannelId()
    {
        return $this->container['storefront_sales_channel_id'];
    }

    /**
     * Sets storefront_sales_channel_id
     *
     * @param string $storefront_sales_channel_id storefront_sales_channel_id
     *
     * @return self
     */
    public function setStorefrontSalesChannelId($storefront_sales_channel_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $storefront_sales_channel_id))) {
            throw new \InvalidArgumentException("invalid value for $storefront_sales_channel_id when calling ProductExport., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['storefront_sales_channel_id'] = $storefront_sales_channel_id;

        return $this;
    }

    /**
     * Gets sales_channel_id
     *
     * @return string
     */
    public function getSalesChannelId()
    {
        return $this->container['sales_channel_id'];
    }

    /**
     * Sets sales_channel_id
     *
     * @param string $sales_channel_id sales_channel_id
     *
     * @return self
     */
    public function setSalesChannelId($sales_channel_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $sales_channel_id))) {
            throw new \InvalidArgumentException("invalid value for $sales_channel_id when calling ProductExport., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['sales_channel_id'] = $sales_channel_id;

        return $this;
    }

    /**
     * Gets sales_channel_domain_id
     *
     * @return string
     */
    public function getSalesChannelDomainId()
    {
        return $this->container['sales_channel_domain_id'];
    }

    /**
     * Sets sales_channel_domain_id
     *
     * @param string $sales_channel_domain_id sales_channel_domain_id
     *
     * @return self
     */
    public function setSalesChannelDomainId($sales_channel_domain_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $sales_channel_domain_id))) {
            throw new \InvalidArgumentException("invalid value for $sales_channel_domain_id when calling ProductExport., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['sales_channel_domain_id'] = $sales_channel_domain_id;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string $currency_id currency_id
     *
     * @return self
     */
    public function setCurrencyId($currency_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $currency_id))) {
            throw new \InvalidArgumentException("invalid value for $currency_id when calling ProductExport., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name file_name
     *
     * @return self
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets access_key
     *
     * @return string
     */
    public function getAccessKey()
    {
        return $this->container['access_key'];
    }

    /**
     * Sets access_key
     *
     * @param string $access_key access_key
     *
     * @return self
     */
    public function setAccessKey($access_key)
    {
        $this->container['access_key'] = $access_key;

        return $this;
    }

    /**
     * Gets encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     * @param string $encoding encoding
     *
     * @return self
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /**
     * Gets file_format
     *
     * @return string
     */
    public function getFileFormat()
    {
        return $this->container['file_format'];
    }

    /**
     * Sets file_format
     *
     * @param string $file_format file_format
     *
     * @return self
     */
    public function setFileFormat($file_format)
    {
        $this->container['file_format'] = $file_format;

        return $this;
    }

    /**
     * Gets include_variants
     *
     * @return bool|null
     */
    public function getIncludeVariants()
    {
        return $this->container['include_variants'];
    }

    /**
     * Sets include_variants
     *
     * @param bool|null $include_variants include_variants
     *
     * @return self
     */
    public function setIncludeVariants($include_variants)
    {
        $this->container['include_variants'] = $include_variants;

        return $this;
    }

    /**
     * Gets generate_by_cronjob
     *
     * @return bool
     */
    public function getGenerateByCronjob()
    {
        return $this->container['generate_by_cronjob'];
    }

    /**
     * Sets generate_by_cronjob
     *
     * @param bool $generate_by_cronjob generate_by_cronjob
     *
     * @return self
     */
    public function setGenerateByCronjob($generate_by_cronjob)
    {
        $this->container['generate_by_cronjob'] = $generate_by_cronjob;

        return $this;
    }

    /**
     * Gets generated_at
     *
     * @return \DateTime|null
     */
    public function getGeneratedAt()
    {
        return $this->container['generated_at'];
    }

    /**
     * Sets generated_at
     *
     * @param \DateTime|null $generated_at generated_at
     *
     * @return self
     */
    public function setGeneratedAt($generated_at)
    {
        $this->container['generated_at'] = $generated_at;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return int
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param int $interval interval
     *
     * @return self
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets header_template
     *
     * @return string|null
     */
    public function getHeaderTemplate()
    {
        return $this->container['header_template'];
    }

    /**
     * Sets header_template
     *
     * @param string|null $header_template header_template
     *
     * @return self
     */
    public function setHeaderTemplate($header_template)
    {
        $this->container['header_template'] = $header_template;

        return $this;
    }

    /**
     * Gets body_template
     *
     * @return string|null
     */
    public function getBodyTemplate()
    {
        return $this->container['body_template'];
    }

    /**
     * Sets body_template
     *
     * @param string|null $body_template body_template
     *
     * @return self
     */
    public function setBodyTemplate($body_template)
    {
        $this->container['body_template'] = $body_template;

        return $this;
    }

    /**
     * Gets footer_template
     *
     * @return string|null
     */
    public function getFooterTemplate()
    {
        return $this->container['footer_template'];
    }

    /**
     * Sets footer_template
     *
     * @param string|null $footer_template footer_template
     *
     * @return self
     */
    public function setFooterTemplate($footer_template)
    {
        $this->container['footer_template'] = $footer_template;

        return $this;
    }

    /**
     * Gets paused_schedule
     *
     * @return bool|null
     */
    public function getPausedSchedule()
    {
        return $this->container['paused_schedule'];
    }

    /**
     * Sets paused_schedule
     *
     * @param bool|null $paused_schedule paused_schedule
     *
     * @return self
     */
    public function setPausedSchedule($paused_schedule)
    {
        $this->container['paused_schedule'] = $paused_schedule;

        return $this;
    }

    /**
     * Gets is_running
     *
     * @return bool|null
     */
    public function getIsRunning()
    {
        return $this->container['is_running'];
    }

    /**
     * Sets is_running
     *
     * @param bool|null $is_running is_running
     *
     * @return self
     */
    public function setIsRunning($is_running)
    {
        $this->container['is_running'] = $is_running;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets product_stream
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductStream|null
     */
    public function getProductStream()
    {
        return $this->container['product_stream'];
    }

    /**
     * Sets product_stream
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductStream|null $product_stream product_stream
     *
     * @return self
     */
    public function setProductStream($product_stream)
    {
        $this->container['product_stream'] = $product_stream;

        return $this;
    }

    /**
     * Gets storefront_sales_channel
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\SalesChannel|null
     */
    public function getStorefrontSalesChannel()
    {
        return $this->container['storefront_sales_channel'];
    }

    /**
     * Sets storefront_sales_channel
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\SalesChannel|null $storefront_sales_channel storefront_sales_channel
     *
     * @return self
     */
    public function setStorefrontSalesChannel($storefront_sales_channel)
    {
        $this->container['storefront_sales_channel'] = $storefront_sales_channel;

        return $this;
    }

    /**
     * Gets sales_channel
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\SalesChannel|null
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\SalesChannel|null $sales_channel sales_channel
     *
     * @return self
     */
    public function setSalesChannel($sales_channel)
    {
        $this->container['sales_channel'] = $sales_channel;

        return $this;
    }

    /**
     * Gets sales_channel_domain
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\SalesChannelDomain|null
     */
    public function getSalesChannelDomain()
    {
        return $this->container['sales_channel_domain'];
    }

    /**
     * Sets sales_channel_domain
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\SalesChannelDomain|null $sales_channel_domain sales_channel_domain
     *
     * @return self
     */
    public function setSalesChannelDomain($sales_channel_domain)
    {
        $this->container['sales_channel_domain'] = $sales_channel_domain;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Currency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Currency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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


