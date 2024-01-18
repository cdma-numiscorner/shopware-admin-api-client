<?php
/**
 * OrderLineItemJsonApiAllOfRelationships
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
 * OrderLineItemJsonApiAllOfRelationships Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderLineItemJsonApiAllOfRelationships implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderLineItemJsonApi_allOf_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cover' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsCover',
        'order' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsOrder',
        'product' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsProduct',
        'promotion' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsPromotion',
        'order_delivery_positions' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsOrderDeliveryPositions',
        'order_transaction_capture_refund_positions' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsOrderTransactionCaptureRefundPositions',
        'downloads' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsDownloads',
        'parent' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsParent',
        'children' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsChildren'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cover' => null,
        'order' => null,
        'product' => null,
        'promotion' => null,
        'order_delivery_positions' => null,
        'order_transaction_capture_refund_positions' => null,
        'downloads' => null,
        'parent' => null,
        'children' => null
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
        'cover' => 'cover',
        'order' => 'order',
        'product' => 'product',
        'promotion' => 'promotion',
        'order_delivery_positions' => 'orderDeliveryPositions',
        'order_transaction_capture_refund_positions' => 'orderTransactionCaptureRefundPositions',
        'downloads' => 'downloads',
        'parent' => 'parent',
        'children' => 'children'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cover' => 'setCover',
        'order' => 'setOrder',
        'product' => 'setProduct',
        'promotion' => 'setPromotion',
        'order_delivery_positions' => 'setOrderDeliveryPositions',
        'order_transaction_capture_refund_positions' => 'setOrderTransactionCaptureRefundPositions',
        'downloads' => 'setDownloads',
        'parent' => 'setParent',
        'children' => 'setChildren'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cover' => 'getCover',
        'order' => 'getOrder',
        'product' => 'getProduct',
        'promotion' => 'getPromotion',
        'order_delivery_positions' => 'getOrderDeliveryPositions',
        'order_transaction_capture_refund_positions' => 'getOrderTransactionCaptureRefundPositions',
        'downloads' => 'getDownloads',
        'parent' => 'getParent',
        'children' => 'getChildren'
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
        $this->container['cover'] = $data['cover'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
        $this->container['product'] = $data['product'] ?? null;
        $this->container['promotion'] = $data['promotion'] ?? null;
        $this->container['order_delivery_positions'] = $data['order_delivery_positions'] ?? null;
        $this->container['order_transaction_capture_refund_positions'] = $data['order_transaction_capture_refund_positions'] ?? null;
        $this->container['downloads'] = $data['downloads'] ?? null;
        $this->container['parent'] = $data['parent'] ?? null;
        $this->container['children'] = $data['children'] ?? null;
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
     * Gets cover
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsCover|null
     */
    public function getCover()
    {
        return $this->container['cover'];
    }

    /**
     * Sets cover
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsCover|null $cover cover
     *
     * @return self
     */
    public function setCover($cover)
    {
        $this->container['cover'] = $cover;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsOrder|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsOrder|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsProduct|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsProduct|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets promotion
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsPromotion|null
     */
    public function getPromotion()
    {
        return $this->container['promotion'];
    }

    /**
     * Sets promotion
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsPromotion|null $promotion promotion
     *
     * @return self
     */
    public function setPromotion($promotion)
    {
        $this->container['promotion'] = $promotion;

        return $this;
    }

    /**
     * Gets order_delivery_positions
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsOrderDeliveryPositions|null
     */
    public function getOrderDeliveryPositions()
    {
        return $this->container['order_delivery_positions'];
    }

    /**
     * Sets order_delivery_positions
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsOrderDeliveryPositions|null $order_delivery_positions order_delivery_positions
     *
     * @return self
     */
    public function setOrderDeliveryPositions($order_delivery_positions)
    {
        $this->container['order_delivery_positions'] = $order_delivery_positions;

        return $this;
    }

    /**
     * Gets order_transaction_capture_refund_positions
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsOrderTransactionCaptureRefundPositions|null
     */
    public function getOrderTransactionCaptureRefundPositions()
    {
        return $this->container['order_transaction_capture_refund_positions'];
    }

    /**
     * Sets order_transaction_capture_refund_positions
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsOrderTransactionCaptureRefundPositions|null $order_transaction_capture_refund_positions order_transaction_capture_refund_positions
     *
     * @return self
     */
    public function setOrderTransactionCaptureRefundPositions($order_transaction_capture_refund_positions)
    {
        $this->container['order_transaction_capture_refund_positions'] = $order_transaction_capture_refund_positions;

        return $this;
    }

    /**
     * Gets downloads
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsDownloads|null
     */
    public function getDownloads()
    {
        return $this->container['downloads'];
    }

    /**
     * Sets downloads
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsDownloads|null $downloads downloads
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsParent|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsParent|null $parent parent
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsChildren|null
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderLineItemJsonApiAllOfRelationshipsChildren|null $children children
     *
     * @return self
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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


