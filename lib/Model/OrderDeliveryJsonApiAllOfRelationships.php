<?php
/**
 * OrderDeliveryJsonApiAllOfRelationships
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
 * OrderDeliveryJsonApiAllOfRelationships Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderDeliveryJsonApiAllOfRelationships implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDeliveryJsonApi_allOf_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'state_machine_state' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationshipsStateMachineState',
        'order' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationshipsOrder',
        'shipping_order_address' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationshipsShippingOrderAddress',
        'shipping_method' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationshipsShippingMethod',
        'positions' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationshipsPositions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'state_machine_state' => null,
        'order' => null,
        'shipping_order_address' => null,
        'shipping_method' => null,
        'positions' => null
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
        'state_machine_state' => 'stateMachineState',
        'order' => 'order',
        'shipping_order_address' => 'shippingOrderAddress',
        'shipping_method' => 'shippingMethod',
        'positions' => 'positions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state_machine_state' => 'setStateMachineState',
        'order' => 'setOrder',
        'shipping_order_address' => 'setShippingOrderAddress',
        'shipping_method' => 'setShippingMethod',
        'positions' => 'setPositions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state_machine_state' => 'getStateMachineState',
        'order' => 'getOrder',
        'shipping_order_address' => 'getShippingOrderAddress',
        'shipping_method' => 'getShippingMethod',
        'positions' => 'getPositions'
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
        $this->container['state_machine_state'] = $data['state_machine_state'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
        $this->container['shipping_order_address'] = $data['shipping_order_address'] ?? null;
        $this->container['shipping_method'] = $data['shipping_method'] ?? null;
        $this->container['positions'] = $data['positions'] ?? null;
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
     * Gets state_machine_state
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationshipsStateMachineState|null
     */
    public function getStateMachineState()
    {
        return $this->container['state_machine_state'];
    }

    /**
     * Sets state_machine_state
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationshipsStateMachineState|null $state_machine_state state_machine_state
     *
     * @return self
     */
    public function setStateMachineState($state_machine_state)
    {
        $this->container['state_machine_state'] = $state_machine_state;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationshipsOrder|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationshipsOrder|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets shipping_order_address
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationshipsShippingOrderAddress|null
     */
    public function getShippingOrderAddress()
    {
        return $this->container['shipping_order_address'];
    }

    /**
     * Sets shipping_order_address
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationshipsShippingOrderAddress|null $shipping_order_address shipping_order_address
     *
     * @return self
     */
    public function setShippingOrderAddress($shipping_order_address)
    {
        $this->container['shipping_order_address'] = $shipping_order_address;

        return $this;
    }

    /**
     * Gets shipping_method
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationshipsShippingMethod|null
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationshipsShippingMethod|null $shipping_method shipping_method
     *
     * @return self
     */
    public function setShippingMethod($shipping_method)
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets positions
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationshipsPositions|null
     */
    public function getPositions()
    {
        return $this->container['positions'];
    }

    /**
     * Sets positions
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryJsonApiAllOfRelationshipsPositions|null $positions positions
     *
     * @return self
     */
    public function setPositions($positions)
    {
        $this->container['positions'] = $positions;

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


