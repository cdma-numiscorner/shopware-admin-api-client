<?php
/**
 * OrderTransactionCaptureRefundPositionJsonApiAllOf
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
 * OrderTransactionCaptureRefundPositionJsonApiAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderTransactionCaptureRefundPositionJsonApiAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderTransactionCaptureRefundPositionJsonApi_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'version_id' => 'string',
        'refund_id' => 'string',
        'refund_version_id' => 'string',
        'order_line_item_id' => 'string',
        'order_line_item_version_id' => 'string',
        'external_reference' => 'string',
        'reason' => 'string',
        'quantity' => 'int',
        'amount' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfShippingCosts',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'relationships' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderTransactionCaptureRefundPositionJsonApiAllOfRelationships'
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
        'refund_id' => null,
        'refund_version_id' => null,
        'order_line_item_id' => null,
        'order_line_item_version_id' => null,
        'external_reference' => null,
        'reason' => null,
        'quantity' => 'int64',
        'amount' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'relationships' => null
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
        'refund_id' => 'refundId',
        'refund_version_id' => 'refundVersionId',
        'order_line_item_id' => 'orderLineItemId',
        'order_line_item_version_id' => 'orderLineItemVersionId',
        'external_reference' => 'externalReference',
        'reason' => 'reason',
        'quantity' => 'quantity',
        'amount' => 'amount',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'relationships' => 'relationships'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version_id' => 'setVersionId',
        'refund_id' => 'setRefundId',
        'refund_version_id' => 'setRefundVersionId',
        'order_line_item_id' => 'setOrderLineItemId',
        'order_line_item_version_id' => 'setOrderLineItemVersionId',
        'external_reference' => 'setExternalReference',
        'reason' => 'setReason',
        'quantity' => 'setQuantity',
        'amount' => 'setAmount',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'relationships' => 'setRelationships'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version_id' => 'getVersionId',
        'refund_id' => 'getRefundId',
        'refund_version_id' => 'getRefundVersionId',
        'order_line_item_id' => 'getOrderLineItemId',
        'order_line_item_version_id' => 'getOrderLineItemVersionId',
        'external_reference' => 'getExternalReference',
        'reason' => 'getReason',
        'quantity' => 'getQuantity',
        'amount' => 'getAmount',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'relationships' => 'getRelationships'
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
        $this->container['refund_id'] = $data['refund_id'] ?? null;
        $this->container['refund_version_id'] = $data['refund_version_id'] ?? null;
        $this->container['order_line_item_id'] = $data['order_line_item_id'] ?? null;
        $this->container['order_line_item_version_id'] = $data['order_line_item_version_id'] ?? null;
        $this->container['external_reference'] = $data['external_reference'] ?? null;
        $this->container['reason'] = $data['reason'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['relationships'] = $data['relationships'] ?? null;
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

        if ($this->container['refund_id'] === null) {
            $invalidProperties[] = "'refund_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['refund_id'])) {
            $invalidProperties[] = "invalid value for 'refund_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['refund_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['refund_version_id'])) {
            $invalidProperties[] = "invalid value for 'refund_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['order_line_item_id'] === null) {
            $invalidProperties[] = "'order_line_item_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['order_line_item_id'])) {
            $invalidProperties[] = "invalid value for 'order_line_item_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['order_line_item_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['order_line_item_version_id'])) {
            $invalidProperties[] = "invalid value for 'order_line_item_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling OrderTransactionCaptureRefundPositionJsonApiAllOf., must conform to the pattern /^[0-9a-f]{32}$/.");
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
            throw new \InvalidArgumentException("invalid value for $version_id when calling OrderTransactionCaptureRefundPositionJsonApiAllOf., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['version_id'] = $version_id;

        return $this;
    }

    /**
     * Gets refund_id
     *
     * @return string
     */
    public function getRefundId()
    {
        return $this->container['refund_id'];
    }

    /**
     * Sets refund_id
     *
     * @param string $refund_id refund_id
     *
     * @return self
     */
    public function setRefundId($refund_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $refund_id))) {
            throw new \InvalidArgumentException("invalid value for $refund_id when calling OrderTransactionCaptureRefundPositionJsonApiAllOf., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['refund_id'] = $refund_id;

        return $this;
    }

    /**
     * Gets refund_version_id
     *
     * @return string|null
     */
    public function getRefundVersionId()
    {
        return $this->container['refund_version_id'];
    }

    /**
     * Sets refund_version_id
     *
     * @param string|null $refund_version_id refund_version_id
     *
     * @return self
     */
    public function setRefundVersionId($refund_version_id)
    {

        if (!is_null($refund_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $refund_version_id))) {
            throw new \InvalidArgumentException("invalid value for $refund_version_id when calling OrderTransactionCaptureRefundPositionJsonApiAllOf., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['refund_version_id'] = $refund_version_id;

        return $this;
    }

    /**
     * Gets order_line_item_id
     *
     * @return string
     */
    public function getOrderLineItemId()
    {
        return $this->container['order_line_item_id'];
    }

    /**
     * Sets order_line_item_id
     *
     * @param string $order_line_item_id order_line_item_id
     *
     * @return self
     */
    public function setOrderLineItemId($order_line_item_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $order_line_item_id))) {
            throw new \InvalidArgumentException("invalid value for $order_line_item_id when calling OrderTransactionCaptureRefundPositionJsonApiAllOf., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_line_item_id'] = $order_line_item_id;

        return $this;
    }

    /**
     * Gets order_line_item_version_id
     *
     * @return string|null
     */
    public function getOrderLineItemVersionId()
    {
        return $this->container['order_line_item_version_id'];
    }

    /**
     * Sets order_line_item_version_id
     *
     * @param string|null $order_line_item_version_id order_line_item_version_id
     *
     * @return self
     */
    public function setOrderLineItemVersionId($order_line_item_version_id)
    {

        if (!is_null($order_line_item_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $order_line_item_version_id))) {
            throw new \InvalidArgumentException("invalid value for $order_line_item_version_id when calling OrderTransactionCaptureRefundPositionJsonApiAllOf., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_line_item_version_id'] = $order_line_item_version_id;

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
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason reason
     *
     * @return self
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * Gets relationships
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderTransactionCaptureRefundPositionJsonApiAllOfRelationships|null
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderTransactionCaptureRefundPositionJsonApiAllOfRelationships|null $relationships relationships
     *
     * @return self
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

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


