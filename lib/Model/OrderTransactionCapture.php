<?php
/**
 * OrderTransactionCapture
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
 * OrderTransactionCapture Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.4.12.0
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderTransactionCapture implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderTransactionCapture';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'version_id' => 'string',
        'order_transaction_id' => 'string',
        'order_transaction_version_id' => 'string',
        'state_id' => 'string',
        'external_reference' => 'string',
        'amount' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfShippingCosts',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'state_machine_state' => '\OpenAPI\ShopwareAdminApiClient\Model\StateMachineState',
        'transaction' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderTransaction',
        'refunds' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderTransactionCaptureRefund[]'
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
        'order_transaction_id' => null,
        'order_transaction_version_id' => null,
        'state_id' => null,
        'external_reference' => null,
        'amount' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'state_machine_state' => null,
        'transaction' => null,
        'refunds' => null
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
        'order_transaction_id' => 'orderTransactionId',
        'order_transaction_version_id' => 'orderTransactionVersionId',
        'state_id' => 'stateId',
        'external_reference' => 'externalReference',
        'amount' => 'amount',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'state_machine_state' => 'stateMachineState',
        'transaction' => 'transaction',
        'refunds' => 'refunds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version_id' => 'setVersionId',
        'order_transaction_id' => 'setOrderTransactionId',
        'order_transaction_version_id' => 'setOrderTransactionVersionId',
        'state_id' => 'setStateId',
        'external_reference' => 'setExternalReference',
        'amount' => 'setAmount',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'state_machine_state' => 'setStateMachineState',
        'transaction' => 'setTransaction',
        'refunds' => 'setRefunds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version_id' => 'getVersionId',
        'order_transaction_id' => 'getOrderTransactionId',
        'order_transaction_version_id' => 'getOrderTransactionVersionId',
        'state_id' => 'getStateId',
        'external_reference' => 'getExternalReference',
        'amount' => 'getAmount',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'state_machine_state' => 'getStateMachineState',
        'transaction' => 'getTransaction',
        'refunds' => 'getRefunds'
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
        $this->container['order_transaction_id'] = $data['order_transaction_id'] ?? null;
        $this->container['order_transaction_version_id'] = $data['order_transaction_version_id'] ?? null;
        $this->container['state_id'] = $data['state_id'] ?? null;
        $this->container['external_reference'] = $data['external_reference'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['state_machine_state'] = $data['state_machine_state'] ?? null;
        $this->container['transaction'] = $data['transaction'] ?? null;
        $this->container['refunds'] = $data['refunds'] ?? null;
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

        if ($this->container['order_transaction_id'] === null) {
            $invalidProperties[] = "'order_transaction_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['order_transaction_id'])) {
            $invalidProperties[] = "invalid value for 'order_transaction_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['order_transaction_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['order_transaction_version_id'])) {
            $invalidProperties[] = "invalid value for 'order_transaction_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['state_id'] === null) {
            $invalidProperties[] = "'state_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['state_id'])) {
            $invalidProperties[] = "invalid value for 'state_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling OrderTransactionCapture., must conform to the pattern /^[0-9a-f]{32}$/.");
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
            throw new \InvalidArgumentException("invalid value for $version_id when calling OrderTransactionCapture., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['version_id'] = $version_id;

        return $this;
    }

    /**
     * Gets order_transaction_id
     *
     * @return string
     */
    public function getOrderTransactionId()
    {
        return $this->container['order_transaction_id'];
    }

    /**
     * Sets order_transaction_id
     *
     * @param string $order_transaction_id order_transaction_id
     *
     * @return self
     */
    public function setOrderTransactionId($order_transaction_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $order_transaction_id))) {
            throw new \InvalidArgumentException("invalid value for $order_transaction_id when calling OrderTransactionCapture., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_transaction_id'] = $order_transaction_id;

        return $this;
    }

    /**
     * Gets order_transaction_version_id
     *
     * @return string|null
     */
    public function getOrderTransactionVersionId()
    {
        return $this->container['order_transaction_version_id'];
    }

    /**
     * Sets order_transaction_version_id
     *
     * @param string|null $order_transaction_version_id order_transaction_version_id
     *
     * @return self
     */
    public function setOrderTransactionVersionId($order_transaction_version_id)
    {

        if (!is_null($order_transaction_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $order_transaction_version_id))) {
            throw new \InvalidArgumentException("invalid value for $order_transaction_version_id when calling OrderTransactionCapture., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_transaction_version_id'] = $order_transaction_version_id;

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
            throw new \InvalidArgumentException("invalid value for $state_id when calling OrderTransactionCapture., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['state_id'] = $state_id;

        return $this;
    }

    /**
     * Gets external_reference
     *
     * @return string|null
     */
    public function getExternalReference()
    {
        return $this->container['external_reference'];
    }

    /**
     * Sets external_reference
     *
     * @param string|null $external_reference external_reference
     *
     * @return self
     */
    public function setExternalReference($external_reference)
    {
        $this->container['external_reference'] = $external_reference;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfShippingCosts
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfShippingCosts $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * Gets transaction
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderTransaction|null
     */
    public function getTransaction()
    {
        return $this->container['transaction'];
    }

    /**
     * Sets transaction
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderTransaction|null $transaction transaction
     *
     * @return self
     */
    public function setTransaction($transaction)
    {
        $this->container['transaction'] = $transaction;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderTransactionCaptureRefund[]|null
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderTransactionCaptureRefund[]|null $refunds refunds
     *
     * @return self
     */
    public function setRefunds($refunds)
    {
        $this->container['refunds'] = $refunds;

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

