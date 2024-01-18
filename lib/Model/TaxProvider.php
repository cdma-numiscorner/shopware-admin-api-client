<?php
/**
 * TaxProvider
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
 * TaxProvider Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.5.0.0
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class TaxProvider implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TaxProvider';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'identifier' => 'string',
        'active' => 'bool',
        'name' => 'string',
        'priority' => 'int',
        'process_url' => 'string',
        'availability_rule_id' => 'string',
        'app_id' => 'string',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'translated' => 'object',
        'availability_rule' => '\OpenAPI\ShopwareAdminApiClient\Model\Rule',
        'app' => '\OpenAPI\ShopwareAdminApiClient\Model\App'
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
        'identifier' => null,
        'active' => null,
        'name' => null,
        'priority' => 'int64',
        'process_url' => null,
        'availability_rule_id' => null,
        'app_id' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'translated' => null,
        'availability_rule' => null,
        'app' => null
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
        'identifier' => 'identifier',
        'active' => 'active',
        'name' => 'name',
        'priority' => 'priority',
        'process_url' => 'processUrl',
        'availability_rule_id' => 'availabilityRuleId',
        'app_id' => 'appId',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'translated' => 'translated',
        'availability_rule' => 'availabilityRule',
        'app' => 'app'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'identifier' => 'setIdentifier',
        'active' => 'setActive',
        'name' => 'setName',
        'priority' => 'setPriority',
        'process_url' => 'setProcessUrl',
        'availability_rule_id' => 'setAvailabilityRuleId',
        'app_id' => 'setAppId',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'translated' => 'setTranslated',
        'availability_rule' => 'setAvailabilityRule',
        'app' => 'setApp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'identifier' => 'getIdentifier',
        'active' => 'getActive',
        'name' => 'getName',
        'priority' => 'getPriority',
        'process_url' => 'getProcessUrl',
        'availability_rule_id' => 'getAvailabilityRuleId',
        'app_id' => 'getAppId',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'translated' => 'getTranslated',
        'availability_rule' => 'getAvailabilityRule',
        'app' => 'getApp'
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
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['priority'] = $data['priority'] ?? null;
        $this->container['process_url'] = $data['process_url'] ?? null;
        $this->container['availability_rule_id'] = $data['availability_rule_id'] ?? null;
        $this->container['app_id'] = $data['app_id'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['translated'] = $data['translated'] ?? null;
        $this->container['availability_rule'] = $data['availability_rule'] ?? null;
        $this->container['app'] = $data['app'] ?? null;
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

        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if (!is_null($this->container['availability_rule_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['availability_rule_id'])) {
            $invalidProperties[] = "invalid value for 'availability_rule_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['app_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['app_id'])) {
            $invalidProperties[] = "invalid value for 'app_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling TaxProvider., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier identifier
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets process_url
     *
     * @return string|null
     */
    public function getProcessUrl()
    {
        return $this->container['process_url'];
    }

    /**
     * Sets process_url
     *
     * @param string|null $process_url process_url
     *
     * @return self
     */
    public function setProcessUrl($process_url)
    {
        $this->container['process_url'] = $process_url;

        return $this;
    }

    /**
     * Gets availability_rule_id
     *
     * @return string|null
     */
    public function getAvailabilityRuleId()
    {
        return $this->container['availability_rule_id'];
    }

    /**
     * Sets availability_rule_id
     *
     * @param string|null $availability_rule_id availability_rule_id
     *
     * @return self
     */
    public function setAvailabilityRuleId($availability_rule_id)
    {

        if (!is_null($availability_rule_id) && (!preg_match("/^[0-9a-f]{32}$/", $availability_rule_id))) {
            throw new \InvalidArgumentException("invalid value for $availability_rule_id when calling TaxProvider., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['availability_rule_id'] = $availability_rule_id;

        return $this;
    }

    /**
     * Gets app_id
     *
     * @return string|null
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string|null $app_id app_id
     *
     * @return self
     */
    public function setAppId($app_id)
    {

        if (!is_null($app_id) && (!preg_match("/^[0-9a-f]{32}$/", $app_id))) {
            throw new \InvalidArgumentException("invalid value for $app_id when calling TaxProvider., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['app_id'] = $app_id;

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
     * Gets translated
     *
     * @return object|null
     */
    public function getTranslated()
    {
        return $this->container['translated'];
    }

    /**
     * Sets translated
     *
     * @param object|null $translated translated
     *
     * @return self
     */
    public function setTranslated($translated)
    {
        $this->container['translated'] = $translated;

        return $this;
    }

    /**
     * Gets availability_rule
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Rule|null
     */
    public function getAvailabilityRule()
    {
        return $this->container['availability_rule'];
    }

    /**
     * Sets availability_rule
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Rule|null $availability_rule availability_rule
     *
     * @return self
     */
    public function setAvailabilityRule($availability_rule)
    {
        $this->container['availability_rule'] = $availability_rule;

        return $this;
    }

    /**
     * Gets app
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\App|null
     */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
     * Sets app
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\App|null $app app
     *
     * @return self
     */
    public function setApp($app)
    {
        $this->container['app'] = $app;

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

