<?php
/**
 * StateMachineStateJsonApiAllOfRelationships
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
 * StateMachineStateJsonApiAllOfRelationships Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class StateMachineStateJsonApiAllOfRelationships implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StateMachineStateJsonApi_allOf_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'state_machine' => '\OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsStateMachine',
        'from_state_machine_transitions' => '\OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsFromStateMachineTransitions',
        'to_state_machine_transitions' => '\OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsToStateMachineTransitions',
        'order_transactions' => '\OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsOrderTransactions',
        'order_deliveries' => '\OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsOrderDeliveries',
        'orders' => '\OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsOrders',
        'order_transaction_captures' => '\OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCaptures',
        'order_transaction_capture_refunds' => '\OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCaptureRefunds',
        'to_state_machine_history_entries' => '\OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsToStateMachineHistoryEntries',
        'from_state_machine_history_entries' => '\OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsFromStateMachineHistoryEntries'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'state_machine' => null,
        'from_state_machine_transitions' => null,
        'to_state_machine_transitions' => null,
        'order_transactions' => null,
        'order_deliveries' => null,
        'orders' => null,
        'order_transaction_captures' => null,
        'order_transaction_capture_refunds' => null,
        'to_state_machine_history_entries' => null,
        'from_state_machine_history_entries' => null
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
        'state_machine' => 'stateMachine',
        'from_state_machine_transitions' => 'fromStateMachineTransitions',
        'to_state_machine_transitions' => 'toStateMachineTransitions',
        'order_transactions' => 'orderTransactions',
        'order_deliveries' => 'orderDeliveries',
        'orders' => 'orders',
        'order_transaction_captures' => 'orderTransactionCaptures',
        'order_transaction_capture_refunds' => 'orderTransactionCaptureRefunds',
        'to_state_machine_history_entries' => 'toStateMachineHistoryEntries',
        'from_state_machine_history_entries' => 'fromStateMachineHistoryEntries'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state_machine' => 'setStateMachine',
        'from_state_machine_transitions' => 'setFromStateMachineTransitions',
        'to_state_machine_transitions' => 'setToStateMachineTransitions',
        'order_transactions' => 'setOrderTransactions',
        'order_deliveries' => 'setOrderDeliveries',
        'orders' => 'setOrders',
        'order_transaction_captures' => 'setOrderTransactionCaptures',
        'order_transaction_capture_refunds' => 'setOrderTransactionCaptureRefunds',
        'to_state_machine_history_entries' => 'setToStateMachineHistoryEntries',
        'from_state_machine_history_entries' => 'setFromStateMachineHistoryEntries'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state_machine' => 'getStateMachine',
        'from_state_machine_transitions' => 'getFromStateMachineTransitions',
        'to_state_machine_transitions' => 'getToStateMachineTransitions',
        'order_transactions' => 'getOrderTransactions',
        'order_deliveries' => 'getOrderDeliveries',
        'orders' => 'getOrders',
        'order_transaction_captures' => 'getOrderTransactionCaptures',
        'order_transaction_capture_refunds' => 'getOrderTransactionCaptureRefunds',
        'to_state_machine_history_entries' => 'getToStateMachineHistoryEntries',
        'from_state_machine_history_entries' => 'getFromStateMachineHistoryEntries'
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
        $this->container['state_machine'] = $data['state_machine'] ?? null;
        $this->container['from_state_machine_transitions'] = $data['from_state_machine_transitions'] ?? null;
        $this->container['to_state_machine_transitions'] = $data['to_state_machine_transitions'] ?? null;
        $this->container['order_transactions'] = $data['order_transactions'] ?? null;
        $this->container['order_deliveries'] = $data['order_deliveries'] ?? null;
        $this->container['orders'] = $data['orders'] ?? null;
        $this->container['order_transaction_captures'] = $data['order_transaction_captures'] ?? null;
        $this->container['order_transaction_capture_refunds'] = $data['order_transaction_capture_refunds'] ?? null;
        $this->container['to_state_machine_history_entries'] = $data['to_state_machine_history_entries'] ?? null;
        $this->container['from_state_machine_history_entries'] = $data['from_state_machine_history_entries'] ?? null;
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
     * Gets state_machine
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsStateMachine|null
     */
    public function getStateMachine()
    {
        return $this->container['state_machine'];
    }

    /**
     * Sets state_machine
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsStateMachine|null $state_machine state_machine
     *
     * @return self
     */
    public function setStateMachine($state_machine)
    {
        $this->container['state_machine'] = $state_machine;

        return $this;
    }

    /**
     * Gets from_state_machine_transitions
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsFromStateMachineTransitions|null
     */
    public function getFromStateMachineTransitions()
    {
        return $this->container['from_state_machine_transitions'];
    }

    /**
     * Sets from_state_machine_transitions
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsFromStateMachineTransitions|null $from_state_machine_transitions from_state_machine_transitions
     *
     * @return self
     */
    public function setFromStateMachineTransitions($from_state_machine_transitions)
    {
        $this->container['from_state_machine_transitions'] = $from_state_machine_transitions;

        return $this;
    }

    /**
     * Gets to_state_machine_transitions
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsToStateMachineTransitions|null
     */
    public function getToStateMachineTransitions()
    {
        return $this->container['to_state_machine_transitions'];
    }

    /**
     * Sets to_state_machine_transitions
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsToStateMachineTransitions|null $to_state_machine_transitions to_state_machine_transitions
     *
     * @return self
     */
    public function setToStateMachineTransitions($to_state_machine_transitions)
    {
        $this->container['to_state_machine_transitions'] = $to_state_machine_transitions;

        return $this;
    }

    /**
     * Gets order_transactions
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsOrderTransactions|null
     */
    public function getOrderTransactions()
    {
        return $this->container['order_transactions'];
    }

    /**
     * Sets order_transactions
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsOrderTransactions|null $order_transactions order_transactions
     *
     * @return self
     */
    public function setOrderTransactions($order_transactions)
    {
        $this->container['order_transactions'] = $order_transactions;

        return $this;
    }

    /**
     * Gets order_deliveries
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsOrderDeliveries|null
     */
    public function getOrderDeliveries()
    {
        return $this->container['order_deliveries'];
    }

    /**
     * Sets order_deliveries
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsOrderDeliveries|null $order_deliveries order_deliveries
     *
     * @return self
     */
    public function setOrderDeliveries($order_deliveries)
    {
        $this->container['order_deliveries'] = $order_deliveries;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsOrders|null
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsOrders|null $orders orders
     *
     * @return self
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets order_transaction_captures
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCaptures|null
     */
    public function getOrderTransactionCaptures()
    {
        return $this->container['order_transaction_captures'];
    }

    /**
     * Sets order_transaction_captures
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCaptures|null $order_transaction_captures order_transaction_captures
     *
     * @return self
     */
    public function setOrderTransactionCaptures($order_transaction_captures)
    {
        $this->container['order_transaction_captures'] = $order_transaction_captures;

        return $this;
    }

    /**
     * Gets order_transaction_capture_refunds
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCaptureRefunds|null
     */
    public function getOrderTransactionCaptureRefunds()
    {
        return $this->container['order_transaction_capture_refunds'];
    }

    /**
     * Sets order_transaction_capture_refunds
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsOrderTransactionCaptureRefunds|null $order_transaction_capture_refunds order_transaction_capture_refunds
     *
     * @return self
     */
    public function setOrderTransactionCaptureRefunds($order_transaction_capture_refunds)
    {
        $this->container['order_transaction_capture_refunds'] = $order_transaction_capture_refunds;

        return $this;
    }

    /**
     * Gets to_state_machine_history_entries
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsToStateMachineHistoryEntries|null
     */
    public function getToStateMachineHistoryEntries()
    {
        return $this->container['to_state_machine_history_entries'];
    }

    /**
     * Sets to_state_machine_history_entries
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsToStateMachineHistoryEntries|null $to_state_machine_history_entries to_state_machine_history_entries
     *
     * @return self
     */
    public function setToStateMachineHistoryEntries($to_state_machine_history_entries)
    {
        $this->container['to_state_machine_history_entries'] = $to_state_machine_history_entries;

        return $this;
    }

    /**
     * Gets from_state_machine_history_entries
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsFromStateMachineHistoryEntries|null
     */
    public function getFromStateMachineHistoryEntries()
    {
        return $this->container['from_state_machine_history_entries'];
    }

    /**
     * Sets from_state_machine_history_entries
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\StateMachineStateJsonApiAllOfRelationshipsFromStateMachineHistoryEntries|null $from_state_machine_history_entries from_state_machine_history_entries
     *
     * @return self
     */
    public function setFromStateMachineHistoryEntries($from_state_machine_history_entries)
    {
        $this->container['from_state_machine_history_entries'] = $from_state_machine_history_entries;

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

