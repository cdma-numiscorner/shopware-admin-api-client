<?php
/**
 * CustomEntity
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
 * CustomEntity Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.4.9.0
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CustomEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'fields' => 'object',
        'flags' => 'object',
        'app_id' => 'string',
        'plugin_id' => 'string',
        'cms_aware' => 'bool',
        'store_api_aware' => 'bool',
        'custom_fields_aware' => 'bool',
        'label_property' => 'string',
        'deleted_at' => '\DateTime',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
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
        'name' => null,
        'fields' => null,
        'flags' => null,
        'app_id' => null,
        'plugin_id' => null,
        'cms_aware' => null,
        'store_api_aware' => null,
        'custom_fields_aware' => null,
        'label_property' => null,
        'deleted_at' => 'date-time',
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
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
        'name' => 'name',
        'fields' => 'fields',
        'flags' => 'flags',
        'app_id' => 'appId',
        'plugin_id' => 'pluginId',
        'cms_aware' => 'cmsAware',
        'store_api_aware' => 'storeApiAware',
        'custom_fields_aware' => 'customFieldsAware',
        'label_property' => 'labelProperty',
        'deleted_at' => 'deletedAt',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'fields' => 'setFields',
        'flags' => 'setFlags',
        'app_id' => 'setAppId',
        'plugin_id' => 'setPluginId',
        'cms_aware' => 'setCmsAware',
        'store_api_aware' => 'setStoreApiAware',
        'custom_fields_aware' => 'setCustomFieldsAware',
        'label_property' => 'setLabelProperty',
        'deleted_at' => 'setDeletedAt',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'fields' => 'getFields',
        'flags' => 'getFlags',
        'app_id' => 'getAppId',
        'plugin_id' => 'getPluginId',
        'cms_aware' => 'getCmsAware',
        'store_api_aware' => 'getStoreApiAware',
        'custom_fields_aware' => 'getCustomFieldsAware',
        'label_property' => 'getLabelProperty',
        'deleted_at' => 'getDeletedAt',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['fields'] = $data['fields'] ?? null;
        $this->container['flags'] = $data['flags'] ?? null;
        $this->container['app_id'] = $data['app_id'] ?? null;
        $this->container['plugin_id'] = $data['plugin_id'] ?? null;
        $this->container['cms_aware'] = $data['cms_aware'] ?? null;
        $this->container['store_api_aware'] = $data['store_api_aware'] ?? null;
        $this->container['custom_fields_aware'] = $data['custom_fields_aware'] ?? null;
        $this->container['label_property'] = $data['label_property'] ?? null;
        $this->container['deleted_at'] = $data['deleted_at'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['fields'] === null) {
            $invalidProperties[] = "'fields' can't be null";
        }
        if (!is_null($this->container['app_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['app_id'])) {
            $invalidProperties[] = "invalid value for 'app_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['plugin_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['plugin_id'])) {
            $invalidProperties[] = "invalid value for 'plugin_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling CustomEntity., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

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
     * Gets fields
     *
     * @return object
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param object $fields fields
     *
     * @return self
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return object|null
     */
    public function getFlags()
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param object|null $flags flags
     *
     * @return self
     */
    public function setFlags($flags)
    {
        $this->container['flags'] = $flags;

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
            throw new \InvalidArgumentException("invalid value for $app_id when calling CustomEntity., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets plugin_id
     *
     * @return string|null
     */
    public function getPluginId()
    {
        return $this->container['plugin_id'];
    }

    /**
     * Sets plugin_id
     *
     * @param string|null $plugin_id plugin_id
     *
     * @return self
     */
    public function setPluginId($plugin_id)
    {

        if (!is_null($plugin_id) && (!preg_match("/^[0-9a-f]{32}$/", $plugin_id))) {
            throw new \InvalidArgumentException("invalid value for $plugin_id when calling CustomEntity., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['plugin_id'] = $plugin_id;

        return $this;
    }

    /**
     * Gets cms_aware
     *
     * @return bool|null
     */
    public function getCmsAware()
    {
        return $this->container['cms_aware'];
    }

    /**
     * Sets cms_aware
     *
     * @param bool|null $cms_aware Runtime field, cannot be used as part of the criteria.
     *
     * @return self
     */
    public function setCmsAware($cms_aware)
    {
        $this->container['cms_aware'] = $cms_aware;

        return $this;
    }

    /**
     * Gets store_api_aware
     *
     * @return bool|null
     */
    public function getStoreApiAware()
    {
        return $this->container['store_api_aware'];
    }

    /**
     * Sets store_api_aware
     *
     * @param bool|null $store_api_aware Runtime field, cannot be used as part of the criteria.
     *
     * @return self
     */
    public function setStoreApiAware($store_api_aware)
    {
        $this->container['store_api_aware'] = $store_api_aware;

        return $this;
    }

    /**
     * Gets custom_fields_aware
     *
     * @return bool|null
     */
    public function getCustomFieldsAware()
    {
        return $this->container['custom_fields_aware'];
    }

    /**
     * Sets custom_fields_aware
     *
     * @param bool|null $custom_fields_aware custom_fields_aware
     *
     * @return self
     */
    public function setCustomFieldsAware($custom_fields_aware)
    {
        $this->container['custom_fields_aware'] = $custom_fields_aware;

        return $this;
    }

    /**
     * Gets label_property
     *
     * @return string|null
     */
    public function getLabelProperty()
    {
        return $this->container['label_property'];
    }

    /**
     * Sets label_property
     *
     * @param string|null $label_property label_property
     *
     * @return self
     */
    public function setLabelProperty($label_property)
    {
        $this->container['label_property'] = $label_property;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime|null $deleted_at deleted_at
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

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


