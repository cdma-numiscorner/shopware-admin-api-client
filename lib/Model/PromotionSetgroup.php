<?php
/**
 * PromotionSetgroup
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
 * PromotionSetgroup Class Doc Comment
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
class PromotionSetgroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PromotionSetgroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'promotion_id' => 'string',
        'packager_key' => 'string',
        'sorter_key' => 'string',
        'value' => 'float',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'promotion' => '\OpenAPI\ShopwareAdminApiClient\Model\Promotion',
        'set_group_rules' => '\OpenAPI\ShopwareAdminApiClient\Model\Rule[]'
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
        'promotion_id' => null,
        'packager_key' => null,
        'sorter_key' => null,
        'value' => 'float',
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'promotion' => null,
        'set_group_rules' => null
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
        'promotion_id' => 'promotionId',
        'packager_key' => 'packagerKey',
        'sorter_key' => 'sorterKey',
        'value' => 'value',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'promotion' => 'promotion',
        'set_group_rules' => 'setGroupRules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'promotion_id' => 'setPromotionId',
        'packager_key' => 'setPackagerKey',
        'sorter_key' => 'setSorterKey',
        'value' => 'setValue',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'promotion' => 'setPromotion',
        'set_group_rules' => 'setSetGroupRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'promotion_id' => 'getPromotionId',
        'packager_key' => 'getPackagerKey',
        'sorter_key' => 'getSorterKey',
        'value' => 'getValue',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'promotion' => 'getPromotion',
        'set_group_rules' => 'getSetGroupRules'
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
        $this->container['promotion_id'] = $data['promotion_id'] ?? null;
        $this->container['packager_key'] = $data['packager_key'] ?? null;
        $this->container['sorter_key'] = $data['sorter_key'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['promotion'] = $data['promotion'] ?? null;
        $this->container['set_group_rules'] = $data['set_group_rules'] ?? null;
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

        if ($this->container['promotion_id'] === null) {
            $invalidProperties[] = "'promotion_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['promotion_id'])) {
            $invalidProperties[] = "invalid value for 'promotion_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['packager_key'] === null) {
            $invalidProperties[] = "'packager_key' can't be null";
        }
        if ($this->container['sorter_key'] === null) {
            $invalidProperties[] = "'sorter_key' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling PromotionSetgroup., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets promotion_id
     *
     * @return string
     */
    public function getPromotionId()
    {
        return $this->container['promotion_id'];
    }

    /**
     * Sets promotion_id
     *
     * @param string $promotion_id promotion_id
     *
     * @return self
     */
    public function setPromotionId($promotion_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $promotion_id))) {
            throw new \InvalidArgumentException("invalid value for $promotion_id when calling PromotionSetgroup., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['promotion_id'] = $promotion_id;

        return $this;
    }

    /**
     * Gets packager_key
     *
     * @return string
     */
    public function getPackagerKey()
    {
        return $this->container['packager_key'];
    }

    /**
     * Sets packager_key
     *
     * @param string $packager_key packager_key
     *
     * @return self
     */
    public function setPackagerKey($packager_key)
    {
        $this->container['packager_key'] = $packager_key;

        return $this;
    }

    /**
     * Gets sorter_key
     *
     * @return string
     */
    public function getSorterKey()
    {
        return $this->container['sorter_key'];
    }

    /**
     * Sets sorter_key
     *
     * @param string $sorter_key sorter_key
     *
     * @return self
     */
    public function setSorterKey($sorter_key)
    {
        $this->container['sorter_key'] = $sorter_key;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
     * Gets promotion
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Promotion|null
     */
    public function getPromotion()
    {
        return $this->container['promotion'];
    }

    /**
     * Sets promotion
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Promotion|null $promotion promotion
     *
     * @return self
     */
    public function setPromotion($promotion)
    {
        $this->container['promotion'] = $promotion;

        return $this;
    }

    /**
     * Gets set_group_rules
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Rule[]|null
     */
    public function getSetGroupRules()
    {
        return $this->container['set_group_rules'];
    }

    /**
     * Sets set_group_rules
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Rule[]|null $set_group_rules set_group_rules
     *
     * @return self
     */
    public function setSetGroupRules($set_group_rules)
    {
        $this->container['set_group_rules'] = $set_group_rules;

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

