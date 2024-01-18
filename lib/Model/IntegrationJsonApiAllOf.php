<?php
/**
 * IntegrationJsonApiAllOf
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
 * IntegrationJsonApiAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class IntegrationJsonApiAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IntegrationJsonApi_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'label' => 'string',
        'access_key' => 'string',
        'secret_access_key' => 'string',
        'last_usage_at' => '\DateTime',
        'admin' => 'bool',
        'custom_fields' => 'object',
        'deleted_at' => '\DateTime',
        'write_access' => 'bool',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'extensions' => '\OpenAPI\ShopwareAdminApiClient\Model\IntegrationJsonApiAllOfExtensions',
        'relationships' => '\OpenAPI\ShopwareAdminApiClient\Model\IntegrationJsonApiAllOfRelationships'
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
        'label' => null,
        'access_key' => null,
        'secret_access_key' => null,
        'last_usage_at' => 'date-time',
        'admin' => null,
        'custom_fields' => null,
        'deleted_at' => 'date-time',
        'write_access' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'extensions' => null,
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
        'label' => 'label',
        'access_key' => 'accessKey',
        'secret_access_key' => 'secretAccessKey',
        'last_usage_at' => 'lastUsageAt',
        'admin' => 'admin',
        'custom_fields' => 'customFields',
        'deleted_at' => 'deletedAt',
        'write_access' => 'writeAccess',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'extensions' => 'extensions',
        'relationships' => 'relationships'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'label' => 'setLabel',
        'access_key' => 'setAccessKey',
        'secret_access_key' => 'setSecretAccessKey',
        'last_usage_at' => 'setLastUsageAt',
        'admin' => 'setAdmin',
        'custom_fields' => 'setCustomFields',
        'deleted_at' => 'setDeletedAt',
        'write_access' => 'setWriteAccess',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'extensions' => 'setExtensions',
        'relationships' => 'setRelationships'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'label' => 'getLabel',
        'access_key' => 'getAccessKey',
        'secret_access_key' => 'getSecretAccessKey',
        'last_usage_at' => 'getLastUsageAt',
        'admin' => 'getAdmin',
        'custom_fields' => 'getCustomFields',
        'deleted_at' => 'getDeletedAt',
        'write_access' => 'getWriteAccess',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'extensions' => 'getExtensions',
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
        $this->container['label'] = $data['label'] ?? null;
        $this->container['access_key'] = $data['access_key'] ?? null;
        $this->container['secret_access_key'] = $data['secret_access_key'] ?? null;
        $this->container['last_usage_at'] = $data['last_usage_at'] ?? null;
        $this->container['admin'] = $data['admin'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['deleted_at'] = $data['deleted_at'] ?? null;
        $this->container['write_access'] = $data['write_access'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['extensions'] = $data['extensions'] ?? null;
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

        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['access_key'] === null) {
            $invalidProperties[] = "'access_key' can't be null";
        }
        if ($this->container['secret_access_key'] === null) {
            $invalidProperties[] = "'secret_access_key' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling IntegrationJsonApiAllOf., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets access_key
     *
     * @return string
     */
    public function getAccessKey()
    {
        return $this->container['access_key'];
    }

    /**
     * Sets access_key
     *
     * @param string $access_key access_key
     *
     * @return self
     */
    public function setAccessKey($access_key)
    {
        $this->container['access_key'] = $access_key;

        return $this;
    }

    /**
     * Gets secret_access_key
     *
     * @return string
     */
    public function getSecretAccessKey()
    {
        return $this->container['secret_access_key'];
    }

    /**
     * Sets secret_access_key
     *
     * @param string $secret_access_key secret_access_key
     *
     * @return self
     */
    public function setSecretAccessKey($secret_access_key)
    {
        $this->container['secret_access_key'] = $secret_access_key;

        return $this;
    }

    /**
     * Gets last_usage_at
     *
     * @return \DateTime|null
     */
    public function getLastUsageAt()
    {
        return $this->container['last_usage_at'];
    }

    /**
     * Sets last_usage_at
     *
     * @param \DateTime|null $last_usage_at last_usage_at
     *
     * @return self
     */
    public function setLastUsageAt($last_usage_at)
    {
        $this->container['last_usage_at'] = $last_usage_at;

        return $this;
    }

    /**
     * Gets admin
     *
     * @return bool|null
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin
     *
     * @param bool|null $admin admin
     *
     * @return self
     */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;

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
     * Gets write_access
     *
     * @return bool|null
     */
    public function getWriteAccess()
    {
        return $this->container['write_access'];
    }

    /**
     * Sets write_access
     *
     * @param bool|null $write_access write_access
     *
     * @return self
     */
    public function setWriteAccess($write_access)
    {
        $this->container['write_access'] = $write_access;

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
     * Gets extensions
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\IntegrationJsonApiAllOfExtensions|null
     */
    public function getExtensions()
    {
        return $this->container['extensions'];
    }

    /**
     * Sets extensions
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\IntegrationJsonApiAllOfExtensions|null $extensions extensions
     *
     * @return self
     */
    public function setExtensions($extensions)
    {
        $this->container['extensions'] = $extensions;

        return $this;
    }

    /**
     * Gets relationships
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\IntegrationJsonApiAllOfRelationships|null
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\IntegrationJsonApiAllOfRelationships|null $relationships relationships
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


