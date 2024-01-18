<?php
/**
 * PaymentMethod
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
 * PaymentMethod Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PaymentMethod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'plugin_id' => 'string',
        'handler_identifier' => 'string',
        'name' => 'string',
        'distinguishable_name' => 'string',
        'description' => 'string',
        'position' => 'int',
        'active' => 'bool',
        'after_order_enabled' => 'bool',
        'custom_fields' => 'object',
        'availability_rule_id' => 'string',
        'media_id' => 'string',
        'formatted_handler_identifier' => 'string',
        'synchronous' => 'bool',
        'asynchronous' => 'bool',
        'prepared' => 'bool',
        'refundable' => 'bool',
        'recurring' => 'bool',
        'short_name' => 'string',
        'technical_name' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'translated' => 'object',
        'media' => '\OpenAPI\ShopwareAdminApiClient\Model\Media',
        'availability_rule' => '\OpenAPI\ShopwareAdminApiClient\Model\Rule',
        'sales_channel_default_assignments' => '\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel[]',
        'plugin' => '\OpenAPI\ShopwareAdminApiClient\Model\Plugin',
        'customers' => '\OpenAPI\ShopwareAdminApiClient\Model\Customer[]',
        'order_transactions' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderTransaction[]',
        'sales_channels' => '\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel[]',
        'app_payment_method' => '\OpenAPI\ShopwareAdminApiClient\Model\AppPaymentMethod'
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
        'plugin_id' => null,
        'handler_identifier' => null,
        'name' => null,
        'distinguishable_name' => null,
        'description' => null,
        'position' => 'int64',
        'active' => null,
        'after_order_enabled' => null,
        'custom_fields' => null,
        'availability_rule_id' => null,
        'media_id' => null,
        'formatted_handler_identifier' => null,
        'synchronous' => null,
        'asynchronous' => null,
        'prepared' => null,
        'refundable' => null,
        'recurring' => null,
        'short_name' => null,
        'technical_name' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'translated' => null,
        'media' => null,
        'availability_rule' => null,
        'sales_channel_default_assignments' => null,
        'plugin' => null,
        'customers' => null,
        'order_transactions' => null,
        'sales_channels' => null,
        'app_payment_method' => null
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
        'plugin_id' => 'pluginId',
        'handler_identifier' => 'handlerIdentifier',
        'name' => 'name',
        'distinguishable_name' => 'distinguishableName',
        'description' => 'description',
        'position' => 'position',
        'active' => 'active',
        'after_order_enabled' => 'afterOrderEnabled',
        'custom_fields' => 'customFields',
        'availability_rule_id' => 'availabilityRuleId',
        'media_id' => 'mediaId',
        'formatted_handler_identifier' => 'formattedHandlerIdentifier',
        'synchronous' => 'synchronous',
        'asynchronous' => 'asynchronous',
        'prepared' => 'prepared',
        'refundable' => 'refundable',
        'recurring' => 'recurring',
        'short_name' => 'shortName',
        'technical_name' => 'technicalName',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'translated' => 'translated',
        'media' => 'media',
        'availability_rule' => 'availabilityRule',
        'sales_channel_default_assignments' => 'salesChannelDefaultAssignments',
        'plugin' => 'plugin',
        'customers' => 'customers',
        'order_transactions' => 'orderTransactions',
        'sales_channels' => 'salesChannels',
        'app_payment_method' => 'appPaymentMethod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'plugin_id' => 'setPluginId',
        'handler_identifier' => 'setHandlerIdentifier',
        'name' => 'setName',
        'distinguishable_name' => 'setDistinguishableName',
        'description' => 'setDescription',
        'position' => 'setPosition',
        'active' => 'setActive',
        'after_order_enabled' => 'setAfterOrderEnabled',
        'custom_fields' => 'setCustomFields',
        'availability_rule_id' => 'setAvailabilityRuleId',
        'media_id' => 'setMediaId',
        'formatted_handler_identifier' => 'setFormattedHandlerIdentifier',
        'synchronous' => 'setSynchronous',
        'asynchronous' => 'setAsynchronous',
        'prepared' => 'setPrepared',
        'refundable' => 'setRefundable',
        'recurring' => 'setRecurring',
        'short_name' => 'setShortName',
        'technical_name' => 'setTechnicalName',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'translated' => 'setTranslated',
        'media' => 'setMedia',
        'availability_rule' => 'setAvailabilityRule',
        'sales_channel_default_assignments' => 'setSalesChannelDefaultAssignments',
        'plugin' => 'setPlugin',
        'customers' => 'setCustomers',
        'order_transactions' => 'setOrderTransactions',
        'sales_channels' => 'setSalesChannels',
        'app_payment_method' => 'setAppPaymentMethod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'plugin_id' => 'getPluginId',
        'handler_identifier' => 'getHandlerIdentifier',
        'name' => 'getName',
        'distinguishable_name' => 'getDistinguishableName',
        'description' => 'getDescription',
        'position' => 'getPosition',
        'active' => 'getActive',
        'after_order_enabled' => 'getAfterOrderEnabled',
        'custom_fields' => 'getCustomFields',
        'availability_rule_id' => 'getAvailabilityRuleId',
        'media_id' => 'getMediaId',
        'formatted_handler_identifier' => 'getFormattedHandlerIdentifier',
        'synchronous' => 'getSynchronous',
        'asynchronous' => 'getAsynchronous',
        'prepared' => 'getPrepared',
        'refundable' => 'getRefundable',
        'recurring' => 'getRecurring',
        'short_name' => 'getShortName',
        'technical_name' => 'getTechnicalName',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'translated' => 'getTranslated',
        'media' => 'getMedia',
        'availability_rule' => 'getAvailabilityRule',
        'sales_channel_default_assignments' => 'getSalesChannelDefaultAssignments',
        'plugin' => 'getPlugin',
        'customers' => 'getCustomers',
        'order_transactions' => 'getOrderTransactions',
        'sales_channels' => 'getSalesChannels',
        'app_payment_method' => 'getAppPaymentMethod'
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
        $this->container['plugin_id'] = $data['plugin_id'] ?? null;
        $this->container['handler_identifier'] = $data['handler_identifier'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['distinguishable_name'] = $data['distinguishable_name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['position'] = $data['position'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['after_order_enabled'] = $data['after_order_enabled'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['availability_rule_id'] = $data['availability_rule_id'] ?? null;
        $this->container['media_id'] = $data['media_id'] ?? null;
        $this->container['formatted_handler_identifier'] = $data['formatted_handler_identifier'] ?? null;
        $this->container['synchronous'] = $data['synchronous'] ?? null;
        $this->container['asynchronous'] = $data['asynchronous'] ?? null;
        $this->container['prepared'] = $data['prepared'] ?? null;
        $this->container['refundable'] = $data['refundable'] ?? null;
        $this->container['recurring'] = $data['recurring'] ?? null;
        $this->container['short_name'] = $data['short_name'] ?? null;
        $this->container['technical_name'] = $data['technical_name'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['translated'] = $data['translated'] ?? null;
        $this->container['media'] = $data['media'] ?? null;
        $this->container['availability_rule'] = $data['availability_rule'] ?? null;
        $this->container['sales_channel_default_assignments'] = $data['sales_channel_default_assignments'] ?? null;
        $this->container['plugin'] = $data['plugin'] ?? null;
        $this->container['customers'] = $data['customers'] ?? null;
        $this->container['order_transactions'] = $data['order_transactions'] ?? null;
        $this->container['sales_channels'] = $data['sales_channels'] ?? null;
        $this->container['app_payment_method'] = $data['app_payment_method'] ?? null;
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

        if (!is_null($this->container['plugin_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['plugin_id'])) {
            $invalidProperties[] = "invalid value for 'plugin_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (!is_null($this->container['availability_rule_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['availability_rule_id'])) {
            $invalidProperties[] = "invalid value for 'availability_rule_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['media_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['media_id'])) {
            $invalidProperties[] = "invalid value for 'media_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling PaymentMethod., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets plugin_id
     *
     * @return string|null
     */
    public function getPluginId()
    {
        return $this->container['plugin_id'];
    }

    /**
     * Sets plugin_id
     *
     * @param string|null $plugin_id plugin_id
     *
     * @return self
     */
    public function setPluginId($plugin_id)
    {

        if (!is_null($plugin_id) && (!preg_match("/^[0-9a-f]{32}$/", $plugin_id))) {
            throw new \InvalidArgumentException("invalid value for $plugin_id when calling PaymentMethod., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['plugin_id'] = $plugin_id;

        return $this;
    }

    /**
     * Gets handler_identifier
     *
     * @return string|null
     */
    public function getHandlerIdentifier()
    {
        return $this->container['handler_identifier'];
    }

    /**
     * Sets handler_identifier
     *
     * @param string|null $handler_identifier handler_identifier
     *
     * @return self
     */
    public function setHandlerIdentifier($handler_identifier)
    {
        $this->container['handler_identifier'] = $handler_identifier;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets distinguishable_name
     *
     * @return string|null
     */
    public function getDistinguishableName()
    {
        return $this->container['distinguishable_name'];
    }

    /**
     * Sets distinguishable_name
     *
     * @param string|null $distinguishable_name distinguishable_name
     *
     * @return self
     */
    public function setDistinguishableName($distinguishable_name)
    {
        $this->container['distinguishable_name'] = $distinguishable_name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int|null $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets after_order_enabled
     *
     * @return bool|null
     */
    public function getAfterOrderEnabled()
    {
        return $this->container['after_order_enabled'];
    }

    /**
     * Sets after_order_enabled
     *
     * @param bool|null $after_order_enabled after_order_enabled
     *
     * @return self
     */
    public function setAfterOrderEnabled($after_order_enabled)
    {
        $this->container['after_order_enabled'] = $after_order_enabled;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object|null $custom_fields custom_fields
     *
     * @return self
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets availability_rule_id
     *
     * @return string|null
     */
    public function getAvailabilityRuleId()
    {
        return $this->container['availability_rule_id'];
    }

    /**
     * Sets availability_rule_id
     *
     * @param string|null $availability_rule_id availability_rule_id
     *
     * @return self
     */
    public function setAvailabilityRuleId($availability_rule_id)
    {

        if (!is_null($availability_rule_id) && (!preg_match("/^[0-9a-f]{32}$/", $availability_rule_id))) {
            throw new \InvalidArgumentException("invalid value for $availability_rule_id when calling PaymentMethod., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['availability_rule_id'] = $availability_rule_id;

        return $this;
    }

    /**
     * Gets media_id
     *
     * @return string|null
     */
    public function getMediaId()
    {
        return $this->container['media_id'];
    }

    /**
     * Sets media_id
     *
     * @param string|null $media_id media_id
     *
     * @return self
     */
    public function setMediaId($media_id)
    {

        if (!is_null($media_id) && (!preg_match("/^[0-9a-f]{32}$/", $media_id))) {
            throw new \InvalidArgumentException("invalid value for $media_id when calling PaymentMethod., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['media_id'] = $media_id;

        return $this;
    }

    /**
     * Gets formatted_handler_identifier
     *
     * @return string|null
     */
    public function getFormattedHandlerIdentifier()
    {
        return $this->container['formatted_handler_identifier'];
    }

    /**
     * Sets formatted_handler_identifier
     *
     * @param string|null $formatted_handler_identifier Runtime field, cannot be used as part of the criteria.
     *
     * @return self
     */
    public function setFormattedHandlerIdentifier($formatted_handler_identifier)
    {
        $this->container['formatted_handler_identifier'] = $formatted_handler_identifier;

        return $this;
    }

    /**
     * Gets synchronous
     *
     * @return bool|null
     */
    public function getSynchronous()
    {
        return $this->container['synchronous'];
    }

    /**
     * Sets synchronous
     *
     * @param bool|null $synchronous Runtime field, cannot be used as part of the criteria.
     *
     * @return self
     */
    public function setSynchronous($synchronous)
    {
        $this->container['synchronous'] = $synchronous;

        return $this;
    }

    /**
     * Gets asynchronous
     *
     * @return bool|null
     */
    public function getAsynchronous()
    {
        return $this->container['asynchronous'];
    }

    /**
     * Sets asynchronous
     *
     * @param bool|null $asynchronous Runtime field, cannot be used as part of the criteria.
     *
     * @return self
     */
    public function setAsynchronous($asynchronous)
    {
        $this->container['asynchronous'] = $asynchronous;

        return $this;
    }

    /**
     * Gets prepared
     *
     * @return bool|null
     */
    public function getPrepared()
    {
        return $this->container['prepared'];
    }

    /**
     * Sets prepared
     *
     * @param bool|null $prepared Runtime field, cannot be used as part of the criteria.
     *
     * @return self
     */
    public function setPrepared($prepared)
    {
        $this->container['prepared'] = $prepared;

        return $this;
    }

    /**
     * Gets refundable
     *
     * @return bool|null
     */
    public function getRefundable()
    {
        return $this->container['refundable'];
    }

    /**
     * Sets refundable
     *
     * @param bool|null $refundable Runtime field, cannot be used as part of the criteria.
     *
     * @return self
     */
    public function setRefundable($refundable)
    {
        $this->container['refundable'] = $refundable;

        return $this;
    }

    /**
     * Gets recurring
     *
     * @return bool|null
     */
    public function getRecurring()
    {
        return $this->container['recurring'];
    }

    /**
     * Sets recurring
     *
     * @param bool|null $recurring Runtime field, cannot be used as part of the criteria.
     *
     * @return self
     */
    public function setRecurring($recurring)
    {
        $this->container['recurring'] = $recurring;

        return $this;
    }

    /**
     * Gets short_name
     *
     * @return string|null
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     *
     * @param string|null $short_name Runtime field, cannot be used as part of the criteria.
     *
     * @return self
     */
    public function setShortName($short_name)
    {
        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets technical_name
     *
     * @return string|null
     */
    public function getTechnicalName()
    {
        return $this->container['technical_name'];
    }

    /**
     * Sets technical_name
     *
     * @param string|null $technical_name technical_name
     *
     * @return self
     */
    public function setTechnicalName($technical_name)
    {
        $this->container['technical_name'] = $technical_name;

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
     * Gets translated
     *
     * @return object|null
     */
    public function getTranslated()
    {
        return $this->container['translated'];
    }

    /**
     * Sets translated
     *
     * @param object|null $translated translated
     *
     * @return self
     */
    public function setTranslated($translated)
    {
        $this->container['translated'] = $translated;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Media|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Media|null $media media
     *
     * @return self
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets availability_rule
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Rule|null
     */
    public function getAvailabilityRule()
    {
        return $this->container['availability_rule'];
    }

    /**
     * Sets availability_rule
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Rule|null $availability_rule availability_rule
     *
     * @return self
     */
    public function setAvailabilityRule($availability_rule)
    {
        $this->container['availability_rule'] = $availability_rule;

        return $this;
    }

    /**
     * Gets sales_channel_default_assignments
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\SalesChannel[]|null
     */
    public function getSalesChannelDefaultAssignments()
    {
        return $this->container['sales_channel_default_assignments'];
    }

    /**
     * Sets sales_channel_default_assignments
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\SalesChannel[]|null $sales_channel_default_assignments sales_channel_default_assignments
     *
     * @return self
     */
    public function setSalesChannelDefaultAssignments($sales_channel_default_assignments)
    {
        $this->container['sales_channel_default_assignments'] = $sales_channel_default_assignments;

        return $this;
    }

    /**
     * Gets plugin
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Plugin|null
     */
    public function getPlugin()
    {
        return $this->container['plugin'];
    }

    /**
     * Sets plugin
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Plugin|null $plugin plugin
     *
     * @return self
     */
    public function setPlugin($plugin)
    {
        $this->container['plugin'] = $plugin;

        return $this;
    }

    /**
     * Gets customers
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Customer[]|null
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Customer[]|null $customers customers
     *
     * @return self
     */
    public function setCustomers($customers)
    {
        $this->container['customers'] = $customers;

        return $this;
    }

    /**
     * Gets order_transactions
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderTransaction[]|null
     */
    public function getOrderTransactions()
    {
        return $this->container['order_transactions'];
    }

    /**
     * Sets order_transactions
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderTransaction[]|null $order_transactions order_transactions
     *
     * @return self
     */
    public function setOrderTransactions($order_transactions)
    {
        $this->container['order_transactions'] = $order_transactions;

        return $this;
    }

    /**
     * Gets sales_channels
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\SalesChannel[]|null
     */
    public function getSalesChannels()
    {
        return $this->container['sales_channels'];
    }

    /**
     * Sets sales_channels
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\SalesChannel[]|null $sales_channels sales_channels
     *
     * @return self
     */
    public function setSalesChannels($sales_channels)
    {
        $this->container['sales_channels'] = $sales_channels;

        return $this;
    }

    /**
     * Gets app_payment_method
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppPaymentMethod|null
     */
    public function getAppPaymentMethod()
    {
        return $this->container['app_payment_method'];
    }

    /**
     * Sets app_payment_method
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppPaymentMethod|null $app_payment_method app_payment_method
     *
     * @return self
     */
    public function setAppPaymentMethod($app_payment_method)
    {
        $this->container['app_payment_method'] = $app_payment_method;

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

