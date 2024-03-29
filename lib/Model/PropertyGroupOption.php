<?php
/**
 * PropertyGroupOption
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
 * PropertyGroupOption Class Doc Comment
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
class PropertyGroupOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PropertyGroupOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'group_id' => 'string',
        'name' => 'string',
        'position' => 'int',
        'color_hex_code' => 'string',
        'media_id' => 'string',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'translated' => 'object',
        'media' => '\OpenAPI\ShopwareAdminApiClient\Model\Media',
        'group' => '\OpenAPI\ShopwareAdminApiClient\Model\PropertyGroup',
        'product_configurator_settings' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductConfiguratorSetting[]',
        'product_properties' => '\OpenAPI\ShopwareAdminApiClient\Model\Product[]',
        'product_options' => '\OpenAPI\ShopwareAdminApiClient\Model\Product[]'
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
        'group_id' => null,
        'name' => null,
        'position' => 'int64',
        'color_hex_code' => null,
        'media_id' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'translated' => null,
        'media' => null,
        'group' => null,
        'product_configurator_settings' => null,
        'product_properties' => null,
        'product_options' => null
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
        'group_id' => 'groupId',
        'name' => 'name',
        'position' => 'position',
        'color_hex_code' => 'colorHexCode',
        'media_id' => 'mediaId',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'translated' => 'translated',
        'media' => 'media',
        'group' => 'group',
        'product_configurator_settings' => 'productConfiguratorSettings',
        'product_properties' => 'productProperties',
        'product_options' => 'productOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'group_id' => 'setGroupId',
        'name' => 'setName',
        'position' => 'setPosition',
        'color_hex_code' => 'setColorHexCode',
        'media_id' => 'setMediaId',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'translated' => 'setTranslated',
        'media' => 'setMedia',
        'group' => 'setGroup',
        'product_configurator_settings' => 'setProductConfiguratorSettings',
        'product_properties' => 'setProductProperties',
        'product_options' => 'setProductOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'group_id' => 'getGroupId',
        'name' => 'getName',
        'position' => 'getPosition',
        'color_hex_code' => 'getColorHexCode',
        'media_id' => 'getMediaId',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'translated' => 'getTranslated',
        'media' => 'getMedia',
        'group' => 'getGroup',
        'product_configurator_settings' => 'getProductConfiguratorSettings',
        'product_properties' => 'getProductProperties',
        'product_options' => 'getProductOptions'
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
        $this->container['group_id'] = $data['group_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['position'] = $data['position'] ?? null;
        $this->container['color_hex_code'] = $data['color_hex_code'] ?? null;
        $this->container['media_id'] = $data['media_id'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['translated'] = $data['translated'] ?? null;
        $this->container['media'] = $data['media'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
        $this->container['product_configurator_settings'] = $data['product_configurator_settings'] ?? null;
        $this->container['product_properties'] = $data['product_properties'] ?? null;
        $this->container['product_options'] = $data['product_options'] ?? null;
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

        if ($this->container['group_id'] === null) {
            $invalidProperties[] = "'group_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['group_id'])) {
            $invalidProperties[] = "invalid value for 'group_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (!is_null($this->container['media_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['media_id'])) {
            $invalidProperties[] = "invalid value for 'media_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling PropertyGroupOption., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param string $group_id group_id
     *
     * @return self
     */
    public function setGroupId($group_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $group_id))) {
            throw new \InvalidArgumentException("invalid value for $group_id when calling PropertyGroupOption., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['group_id'] = $group_id;

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
     * Gets position
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int|null $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets color_hex_code
     *
     * @return string|null
     */
    public function getColorHexCode()
    {
        return $this->container['color_hex_code'];
    }

    /**
     * Sets color_hex_code
     *
     * @param string|null $color_hex_code color_hex_code
     *
     * @return self
     */
    public function setColorHexCode($color_hex_code)
    {
        $this->container['color_hex_code'] = $color_hex_code;

        return $this;
    }

    /**
     * Gets media_id
     *
     * @return string|null
     */
    public function getMediaId()
    {
        return $this->container['media_id'];
    }

    /**
     * Sets media_id
     *
     * @param string|null $media_id media_id
     *
     * @return self
     */
    public function setMediaId($media_id)
    {

        if (!is_null($media_id) && (!preg_match("/^[0-9a-f]{32}$/", $media_id))) {
            throw new \InvalidArgumentException("invalid value for $media_id when calling PropertyGroupOption., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['media_id'] = $media_id;

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
     * Gets media
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Media|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Media|null $media media
     *
     * @return self
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PropertyGroup|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PropertyGroup|null $group group
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets product_configurator_settings
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductConfiguratorSetting[]|null
     */
    public function getProductConfiguratorSettings()
    {
        return $this->container['product_configurator_settings'];
    }

    /**
     * Sets product_configurator_settings
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductConfiguratorSetting[]|null $product_configurator_settings product_configurator_settings
     *
     * @return self
     */
    public function setProductConfiguratorSettings($product_configurator_settings)
    {
        $this->container['product_configurator_settings'] = $product_configurator_settings;

        return $this;
    }

    /**
     * Gets product_properties
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Product[]|null
     */
    public function getProductProperties()
    {
        return $this->container['product_properties'];
    }

    /**
     * Sets product_properties
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Product[]|null $product_properties product_properties
     *
     * @return self
     */
    public function setProductProperties($product_properties)
    {
        $this->container['product_properties'] = $product_properties;

        return $this;
    }

    /**
     * Gets product_options
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Product[]|null
     */
    public function getProductOptions()
    {
        return $this->container['product_options'];
    }

    /**
     * Sets product_options
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Product[]|null $product_options product_options
     *
     * @return self
     */
    public function setProductOptions($product_options)
    {
        $this->container['product_options'] = $product_options;

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


