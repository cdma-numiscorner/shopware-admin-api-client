<?php
/**
 * OrderDelivery
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
 * OrderDelivery Class Doc Comment
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
class OrderDelivery implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDelivery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'version_id' => 'string',
        'order_id' => 'string',
        'order_version_id' => 'string',
        'shipping_order_address_id' => 'string',
        'shipping_order_address_version_id' => 'string',
        'shipping_method_id' => 'string',
        'state_id' => 'string',
        'tracking_codes' => 'string[]',
        'shipping_date_earliest' => '\DateTime',
        'shipping_date_latest' => '\DateTime',
        'shipping_costs' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfShippingCosts',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'state_machine_state' => '\OpenAPI\ShopwareAdminApiClient\Model\StateMachineState',
        'order' => '\OpenAPI\ShopwareAdminApiClient\Model\Order',
        'shipping_order_address' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderAddress',
        'shipping_method' => '\OpenAPI\ShopwareAdminApiClient\Model\ShippingMethod',
        'positions' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryPosition[]'
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
        'version_id' => null,
        'order_id' => null,
        'order_version_id' => null,
        'shipping_order_address_id' => null,
        'shipping_order_address_version_id' => null,
        'shipping_method_id' => null,
        'state_id' => null,
        'tracking_codes' => null,
        'shipping_date_earliest' => 'date-time',
        'shipping_date_latest' => 'date-time',
        'shipping_costs' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
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
        'id' => 'id',
        'version_id' => 'versionId',
        'order_id' => 'orderId',
        'order_version_id' => 'orderVersionId',
        'shipping_order_address_id' => 'shippingOrderAddressId',
        'shipping_order_address_version_id' => 'shippingOrderAddressVersionId',
        'shipping_method_id' => 'shippingMethodId',
        'state_id' => 'stateId',
        'tracking_codes' => 'trackingCodes',
        'shipping_date_earliest' => 'shippingDateEarliest',
        'shipping_date_latest' => 'shippingDateLatest',
        'shipping_costs' => 'shippingCosts',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
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
        'id' => 'setId',
        'version_id' => 'setVersionId',
        'order_id' => 'setOrderId',
        'order_version_id' => 'setOrderVersionId',
        'shipping_order_address_id' => 'setShippingOrderAddressId',
        'shipping_order_address_version_id' => 'setShippingOrderAddressVersionId',
        'shipping_method_id' => 'setShippingMethodId',
        'state_id' => 'setStateId',
        'tracking_codes' => 'setTrackingCodes',
        'shipping_date_earliest' => 'setShippingDateEarliest',
        'shipping_date_latest' => 'setShippingDateLatest',
        'shipping_costs' => 'setShippingCosts',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
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
        'id' => 'getId',
        'version_id' => 'getVersionId',
        'order_id' => 'getOrderId',
        'order_version_id' => 'getOrderVersionId',
        'shipping_order_address_id' => 'getShippingOrderAddressId',
        'shipping_order_address_version_id' => 'getShippingOrderAddressVersionId',
        'shipping_method_id' => 'getShippingMethodId',
        'state_id' => 'getStateId',
        'tracking_codes' => 'getTrackingCodes',
        'shipping_date_earliest' => 'getShippingDateEarliest',
        'shipping_date_latest' => 'getShippingDateLatest',
        'shipping_costs' => 'getShippingCosts',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['version_id'] = $data['version_id'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['order_version_id'] = $data['order_version_id'] ?? null;
        $this->container['shipping_order_address_id'] = $data['shipping_order_address_id'] ?? null;
        $this->container['shipping_order_address_version_id'] = $data['shipping_order_address_version_id'] ?? null;
        $this->container['shipping_method_id'] = $data['shipping_method_id'] ?? null;
        $this->container['state_id'] = $data['state_id'] ?? null;
        $this->container['tracking_codes'] = $data['tracking_codes'] ?? null;
        $this->container['shipping_date_earliest'] = $data['shipping_date_earliest'] ?? null;
        $this->container['shipping_date_latest'] = $data['shipping_date_latest'] ?? null;
        $this->container['shipping_costs'] = $data['shipping_costs'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
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

        if (!is_null($this->container['id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['version_id'])) {
            $invalidProperties[] = "invalid value for 'version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['order_id'])) {
            $invalidProperties[] = "invalid value for 'order_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['order_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['order_version_id'])) {
            $invalidProperties[] = "invalid value for 'order_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['shipping_order_address_id'] === null) {
            $invalidProperties[] = "'shipping_order_address_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['shipping_order_address_id'])) {
            $invalidProperties[] = "invalid value for 'shipping_order_address_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['shipping_order_address_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['shipping_order_address_version_id'])) {
            $invalidProperties[] = "invalid value for 'shipping_order_address_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['shipping_method_id'] === null) {
            $invalidProperties[] = "'shipping_method_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['shipping_method_id'])) {
            $invalidProperties[] = "invalid value for 'shipping_method_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['state_id'] === null) {
            $invalidProperties[] = "'state_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['state_id'])) {
            $invalidProperties[] = "invalid value for 'state_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['tracking_codes'] === null) {
            $invalidProperties[] = "'tracking_codes' can't be null";
        }
        if ($this->container['shipping_date_earliest'] === null) {
            $invalidProperties[] = "'shipping_date_earliest' can't be null";
        }
        if ($this->container['shipping_date_latest'] === null) {
            $invalidProperties[] = "'shipping_date_latest' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling OrderDelivery., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets version_id
     *
     * @return string|null
     */
    public function getVersionId()
    {
        return $this->container['version_id'];
    }

    /**
     * Sets version_id
     *
     * @param string|null $version_id version_id
     *
     * @return self
     */
    public function setVersionId($version_id)
    {

        if (!is_null($version_id) && (!preg_match("/^[0-9a-f]{32}$/", $version_id))) {
            throw new \InvalidArgumentException("invalid value for $version_id when calling OrderDelivery., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['version_id'] = $version_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
     *
     * @return self
     */
    public function setOrderId($order_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $order_id))) {
            throw new \InvalidArgumentException("invalid value for $order_id when calling OrderDelivery., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets order_version_id
     *
     * @return string|null
     */
    public function getOrderVersionId()
    {
        return $this->container['order_version_id'];
    }

    /**
     * Sets order_version_id
     *
     * @param string|null $order_version_id order_version_id
     *
     * @return self
     */
    public function setOrderVersionId($order_version_id)
    {

        if (!is_null($order_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $order_version_id))) {
            throw new \InvalidArgumentException("invalid value for $order_version_id when calling OrderDelivery., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_version_id'] = $order_version_id;

        return $this;
    }

    /**
     * Gets shipping_order_address_id
     *
     * @return string
     */
    public function getShippingOrderAddressId()
    {
        return $this->container['shipping_order_address_id'];
    }

    /**
     * Sets shipping_order_address_id
     *
     * @param string $shipping_order_address_id shipping_order_address_id
     *
     * @return self
     */
    public function setShippingOrderAddressId($shipping_order_address_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $shipping_order_address_id))) {
            throw new \InvalidArgumentException("invalid value for $shipping_order_address_id when calling OrderDelivery., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['shipping_order_address_id'] = $shipping_order_address_id;

        return $this;
    }

    /**
     * Gets shipping_order_address_version_id
     *
     * @return string|null
     */
    public function getShippingOrderAddressVersionId()
    {
        return $this->container['shipping_order_address_version_id'];
    }

    /**
     * Sets shipping_order_address_version_id
     *
     * @param string|null $shipping_order_address_version_id shipping_order_address_version_id
     *
     * @return self
     */
    public function setShippingOrderAddressVersionId($shipping_order_address_version_id)
    {

        if (!is_null($shipping_order_address_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $shipping_order_address_version_id))) {
            throw new \InvalidArgumentException("invalid value for $shipping_order_address_version_id when calling OrderDelivery., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['shipping_order_address_version_id'] = $shipping_order_address_version_id;

        return $this;
    }

    /**
     * Gets shipping_method_id
     *
     * @return string
     */
    public function getShippingMethodId()
    {
        return $this->container['shipping_method_id'];
    }

    /**
     * Sets shipping_method_id
     *
     * @param string $shipping_method_id shipping_method_id
     *
     * @return self
     */
    public function setShippingMethodId($shipping_method_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $shipping_method_id))) {
            throw new \InvalidArgumentException("invalid value for $shipping_method_id when calling OrderDelivery., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['shipping_method_id'] = $shipping_method_id;

        return $this;
    }

    /**
     * Gets state_id
     *
     * @return string
     */
    public function getStateId()
    {
        return $this->container['state_id'];
    }

    /**
     * Sets state_id
     *
     * @param string $state_id state_id
     *
     * @return self
     */
    public function setStateId($state_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $state_id))) {
            throw new \InvalidArgumentException("invalid value for $state_id when calling OrderDelivery., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['state_id'] = $state_id;

        return $this;
    }

    /**
     * Gets tracking_codes
     *
     * @return string[]
     */
    public function getTrackingCodes()
    {
        return $this->container['tracking_codes'];
    }

    /**
     * Sets tracking_codes
     *
     * @param string[] $tracking_codes tracking_codes
     *
     * @return self
     */
    public function setTrackingCodes($tracking_codes)
    {
        $this->container['tracking_codes'] = $tracking_codes;

        return $this;
    }

    /**
     * Gets shipping_date_earliest
     *
     * @return \DateTime
     */
    public function getShippingDateEarliest()
    {
        return $this->container['shipping_date_earliest'];
    }

    /**
     * Sets shipping_date_earliest
     *
     * @param \DateTime $shipping_date_earliest shipping_date_earliest
     *
     * @return self
     */
    public function setShippingDateEarliest($shipping_date_earliest)
    {
        $this->container['shipping_date_earliest'] = $shipping_date_earliest;

        return $this;
    }

    /**
     * Gets shipping_date_latest
     *
     * @return \DateTime
     */
    public function getShippingDateLatest()
    {
        return $this->container['shipping_date_latest'];
    }

    /**
     * Sets shipping_date_latest
     *
     * @param \DateTime $shipping_date_latest shipping_date_latest
     *
     * @return self
     */
    public function setShippingDateLatest($shipping_date_latest)
    {
        $this->container['shipping_date_latest'] = $shipping_date_latest;

        return $this;
    }

    /**
     * Gets shipping_costs
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfShippingCosts|null
     */
    public function getShippingCosts()
    {
        return $this->container['shipping_costs'];
    }

    /**
     * Sets shipping_costs
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfShippingCosts|null $shipping_costs shipping_costs
     *
     * @return self
     */
    public function setShippingCosts($shipping_costs)
    {
        $this->container['shipping_costs'] = $shipping_costs;

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
     * Gets state_machine_state
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\StateMachineState|null
     */
    public function getStateMachineState()
    {
        return $this->container['state_machine_state'];
    }

    /**
     * Sets state_machine_state
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\StateMachineState|null $state_machine_state state_machine_state
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Order|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Order|null $order order
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderAddress|null
     */
    public function getShippingOrderAddress()
    {
        return $this->container['shipping_order_address'];
    }

    /**
     * Sets shipping_order_address
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderAddress|null $shipping_order_address shipping_order_address
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ShippingMethod|null
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ShippingMethod|null $shipping_method shipping_method
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryPosition[]|null
     */
    public function getPositions()
    {
        return $this->container['positions'];
    }

    /**
     * Sets positions
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderDeliveryPosition[]|null $positions positions
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


