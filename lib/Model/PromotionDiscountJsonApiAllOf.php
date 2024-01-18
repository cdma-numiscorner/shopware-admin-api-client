<?php
/**
 * PromotionDiscountJsonApiAllOf
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
 * PromotionDiscountJsonApiAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PromotionDiscountJsonApiAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PromotionDiscountJsonApi_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'promotion_id' => 'string',
        'scope' => 'string',
        'type' => 'string',
        'value' => 'float',
        'consider_advanced_rules' => 'bool',
        'max_value' => 'float',
        'sorter_key' => 'string',
        'applier_key' => 'string',
        'usage_key' => 'string',
        'picker_key' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'relationships' => '\OpenAPI\ShopwareAdminApiClient\Model\PromotionDiscountJsonApiAllOfRelationships'
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
        'scope' => null,
        'type' => null,
        'value' => 'float',
        'consider_advanced_rules' => null,
        'max_value' => 'float',
        'sorter_key' => null,
        'applier_key' => null,
        'usage_key' => null,
        'picker_key' => null,
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
        'promotion_id' => 'promotionId',
        'scope' => 'scope',
        'type' => 'type',
        'value' => 'value',
        'consider_advanced_rules' => 'considerAdvancedRules',
        'max_value' => 'maxValue',
        'sorter_key' => 'sorterKey',
        'applier_key' => 'applierKey',
        'usage_key' => 'usageKey',
        'picker_key' => 'pickerKey',
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
        'promotion_id' => 'setPromotionId',
        'scope' => 'setScope',
        'type' => 'setType',
        'value' => 'setValue',
        'consider_advanced_rules' => 'setConsiderAdvancedRules',
        'max_value' => 'setMaxValue',
        'sorter_key' => 'setSorterKey',
        'applier_key' => 'setApplierKey',
        'usage_key' => 'setUsageKey',
        'picker_key' => 'setPickerKey',
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
        'promotion_id' => 'getPromotionId',
        'scope' => 'getScope',
        'type' => 'getType',
        'value' => 'getValue',
        'consider_advanced_rules' => 'getConsiderAdvancedRules',
        'max_value' => 'getMaxValue',
        'sorter_key' => 'getSorterKey',
        'applier_key' => 'getApplierKey',
        'usage_key' => 'getUsageKey',
        'picker_key' => 'getPickerKey',
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
        $this->container['promotion_id'] = $data['promotion_id'] ?? null;
        $this->container['scope'] = $data['scope'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['consider_advanced_rules'] = $data['consider_advanced_rules'] ?? null;
        $this->container['max_value'] = $data['max_value'] ?? null;
        $this->container['sorter_key'] = $data['sorter_key'] ?? null;
        $this->container['applier_key'] = $data['applier_key'] ?? null;
        $this->container['usage_key'] = $data['usage_key'] ?? null;
        $this->container['picker_key'] = $data['picker_key'] ?? null;
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

        if ($this->container['promotion_id'] === null) {
            $invalidProperties[] = "'promotion_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['promotion_id'])) {
            $invalidProperties[] = "invalid value for 'promotion_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['scope'] === null) {
            $invalidProperties[] = "'scope' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['consider_advanced_rules'] === null) {
            $invalidProperties[] = "'consider_advanced_rules' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling PromotionDiscountJsonApiAllOf., must conform to the pattern /^[0-9a-f]{32}$/.");
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
            throw new \InvalidArgumentException("invalid value for $promotion_id when calling PromotionDiscountJsonApiAllOf., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['promotion_id'] = $promotion_id;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string $scope scope
     *
     * @return self
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * Gets consider_advanced_rules
     *
     * @return bool
     */
    public function getConsiderAdvancedRules()
    {
        return $this->container['consider_advanced_rules'];
    }

    /**
     * Sets consider_advanced_rules
     *
     * @param bool $consider_advanced_rules consider_advanced_rules
     *
     * @return self
     */
    public function setConsiderAdvancedRules($consider_advanced_rules)
    {
        $this->container['consider_advanced_rules'] = $consider_advanced_rules;

        return $this;
    }

    /**
     * Gets max_value
     *
     * @return float|null
     */
    public function getMaxValue()
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     *
     * @param float|null $max_value max_value
     *
     * @return self
     */
    public function setMaxValue($max_value)
    {
        $this->container['max_value'] = $max_value;

        return $this;
    }

    /**
     * Gets sorter_key
     *
     * @return string|null
     */
    public function getSorterKey()
    {
        return $this->container['sorter_key'];
    }

    /**
     * Sets sorter_key
     *
     * @param string|null $sorter_key sorter_key
     *
     * @return self
     */
    public function setSorterKey($sorter_key)
    {
        $this->container['sorter_key'] = $sorter_key;

        return $this;
    }

    /**
     * Gets applier_key
     *
     * @return string|null
     */
    public function getApplierKey()
    {
        return $this->container['applier_key'];
    }

    /**
     * Sets applier_key
     *
     * @param string|null $applier_key applier_key
     *
     * @return self
     */
    public function setApplierKey($applier_key)
    {
        $this->container['applier_key'] = $applier_key;

        return $this;
    }

    /**
     * Gets usage_key
     *
     * @return string|null
     */
    public function getUsageKey()
    {
        return $this->container['usage_key'];
    }

    /**
     * Sets usage_key
     *
     * @param string|null $usage_key usage_key
     *
     * @return self
     */
    public function setUsageKey($usage_key)
    {
        $this->container['usage_key'] = $usage_key;

        return $this;
    }

    /**
     * Gets picker_key
     *
     * @return string|null
     */
    public function getPickerKey()
    {
        return $this->container['picker_key'];
    }

    /**
     * Sets picker_key
     *
     * @param string|null $picker_key picker_key
     *
     * @return self
     */
    public function setPickerKey($picker_key)
    {
        $this->container['picker_key'] = $picker_key;

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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PromotionDiscountJsonApiAllOfRelationships|null
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PromotionDiscountJsonApiAllOfRelationships|null $relationships relationships
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


