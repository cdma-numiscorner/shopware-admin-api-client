<?php
/**
 * PaymentMethodJsonApiAllOfRelationships
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
 * PaymentMethodJsonApiAllOfRelationships Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PaymentMethodJsonApiAllOfRelationships implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentMethodJsonApi_allOf_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'media' => '\OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsMedia',
        'availability_rule' => '\OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsAvailabilityRule',
        'sales_channel_default_assignments' => '\OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsSalesChannelDefaultAssignments',
        'plugin' => '\OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsPlugin',
        'customers' => '\OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsCustomers',
        'order_transactions' => '\OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsOrderTransactions',
        'sales_channels' => '\OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsSalesChannels',
        'app_payment_method' => '\OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsAppPaymentMethod'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
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
     * Gets media
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsMedia|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsMedia|null $media media
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsAvailabilityRule|null
     */
    public function getAvailabilityRule()
    {
        return $this->container['availability_rule'];
    }

    /**
     * Sets availability_rule
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsAvailabilityRule|null $availability_rule availability_rule
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsSalesChannelDefaultAssignments|null
     */
    public function getSalesChannelDefaultAssignments()
    {
        return $this->container['sales_channel_default_assignments'];
    }

    /**
     * Sets sales_channel_default_assignments
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsSalesChannelDefaultAssignments|null $sales_channel_default_assignments sales_channel_default_assignments
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsPlugin|null
     */
    public function getPlugin()
    {
        return $this->container['plugin'];
    }

    /**
     * Sets plugin
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsPlugin|null $plugin plugin
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsCustomers|null
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsCustomers|null $customers customers
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsOrderTransactions|null
     */
    public function getOrderTransactions()
    {
        return $this->container['order_transactions'];
    }

    /**
     * Sets order_transactions
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsOrderTransactions|null $order_transactions order_transactions
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsSalesChannels|null
     */
    public function getSalesChannels()
    {
        return $this->container['sales_channels'];
    }

    /**
     * Sets sales_channels
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsSalesChannels|null $sales_channels sales_channels
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsAppPaymentMethod|null
     */
    public function getAppPaymentMethod()
    {
        return $this->container['app_payment_method'];
    }

    /**
     * Sets app_payment_method
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PaymentMethodJsonApiAllOfRelationshipsAppPaymentMethod|null $app_payment_method app_payment_method
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


