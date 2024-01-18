<?php
/**
 * PromotionSetgroupRule
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
 * PromotionSetgroupRule Class Doc Comment
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
class PromotionSetgroupRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PromotionSetgroupRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'setgroup_id' => 'string',
        'rule_id' => 'string',
        'setgroup' => '\OpenAPI\ShopwareAdminApiClient\Model\PromotionSetgroup',
        'rule' => '\OpenAPI\ShopwareAdminApiClient\Model\Rule'
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
        'setgroup_id' => null,
        'rule_id' => null,
        'setgroup' => null,
        'rule' => null
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
        'setgroup_id' => 'setgroupId',
        'rule_id' => 'ruleId',
        'setgroup' => 'setgroup',
        'rule' => 'rule'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'setgroup_id' => 'setSetgroupId',
        'rule_id' => 'setRuleId',
        'setgroup' => 'setSetgroup',
        'rule' => 'setRule'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'setgroup_id' => 'getSetgroupId',
        'rule_id' => 'getRuleId',
        'setgroup' => 'getSetgroup',
        'rule' => 'getRule'
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
        $this->container['setgroup_id'] = $data['setgroup_id'] ?? null;
        $this->container['rule_id'] = $data['rule_id'] ?? null;
        $this->container['setgroup'] = $data['setgroup'] ?? null;
        $this->container['rule'] = $data['rule'] ?? null;
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

        if ($this->container['setgroup_id'] === null) {
            $invalidProperties[] = "'setgroup_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['setgroup_id'])) {
            $invalidProperties[] = "invalid value for 'setgroup_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['rule_id'] === null) {
            $invalidProperties[] = "'rule_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['rule_id'])) {
            $invalidProperties[] = "invalid value for 'rule_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling PromotionSetgroupRule., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets setgroup_id
     *
     * @return string
     */
    public function getSetgroupId()
    {
        return $this->container['setgroup_id'];
    }

    /**
     * Sets setgroup_id
     *
     * @param string $setgroup_id setgroup_id
     *
     * @return self
     */
    public function setSetgroupId($setgroup_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $setgroup_id))) {
            throw new \InvalidArgumentException("invalid value for $setgroup_id when calling PromotionSetgroupRule., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['setgroup_id'] = $setgroup_id;

        return $this;
    }

    /**
     * Gets rule_id
     *
     * @return string
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param string $rule_id rule_id
     *
     * @return self
     */
    public function setRuleId($rule_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $rule_id))) {
            throw new \InvalidArgumentException("invalid value for $rule_id when calling PromotionSetgroupRule., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets setgroup
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PromotionSetgroup|null
     */
    public function getSetgroup()
    {
        return $this->container['setgroup'];
    }

    /**
     * Sets setgroup
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PromotionSetgroup|null $setgroup setgroup
     *
     * @return self
     */
    public function setSetgroup($setgroup)
    {
        $this->container['setgroup'] = $setgroup;

        return $this;
    }

    /**
     * Gets rule
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Rule|null
     */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
     * Sets rule
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Rule|null $rule rule
     *
     * @return self
     */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;

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

