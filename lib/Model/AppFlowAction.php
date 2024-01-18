<?php
/**
 * AppFlowAction
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
 * AppFlowAction Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.4.10.0
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AppFlowAction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppFlowAction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'app_id' => 'string',
        'name' => 'string',
        'badge' => 'string',
        'parameters' => 'object',
        'config' => 'object',
        'headers' => 'object',
        'requirements' => 'string[]',
        'icon_raw' => 'string',
        'icon' => 'string',
        'sw_icon' => 'string',
        'url' => 'string',
        'delayable' => 'bool',
        'label' => 'string',
        'description' => 'string',
        'headline' => 'string',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'translated' => 'object',
        'app' => '\OpenAPI\ShopwareAdminApiClient\Model\App',
        'flow_sequences' => '\OpenAPI\ShopwareAdminApiClient\Model\FlowSequence[]'
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
        'app_id' => null,
        'name' => null,
        'badge' => null,
        'parameters' => null,
        'config' => null,
        'headers' => null,
        'requirements' => null,
        'icon_raw' => null,
        'icon' => null,
        'sw_icon' => null,
        'url' => null,
        'delayable' => null,
        'label' => null,
        'description' => null,
        'headline' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'translated' => null,
        'app' => null,
        'flow_sequences' => null
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
        'app_id' => 'appId',
        'name' => 'name',
        'badge' => 'badge',
        'parameters' => 'parameters',
        'config' => 'config',
        'headers' => 'headers',
        'requirements' => 'requirements',
        'icon_raw' => 'iconRaw',
        'icon' => 'icon',
        'sw_icon' => 'swIcon',
        'url' => 'url',
        'delayable' => 'delayable',
        'label' => 'label',
        'description' => 'description',
        'headline' => 'headline',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'translated' => 'translated',
        'app' => 'app',
        'flow_sequences' => 'flowSequences'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'app_id' => 'setAppId',
        'name' => 'setName',
        'badge' => 'setBadge',
        'parameters' => 'setParameters',
        'config' => 'setConfig',
        'headers' => 'setHeaders',
        'requirements' => 'setRequirements',
        'icon_raw' => 'setIconRaw',
        'icon' => 'setIcon',
        'sw_icon' => 'setSwIcon',
        'url' => 'setUrl',
        'delayable' => 'setDelayable',
        'label' => 'setLabel',
        'description' => 'setDescription',
        'headline' => 'setHeadline',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'translated' => 'setTranslated',
        'app' => 'setApp',
        'flow_sequences' => 'setFlowSequences'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'app_id' => 'getAppId',
        'name' => 'getName',
        'badge' => 'getBadge',
        'parameters' => 'getParameters',
        'config' => 'getConfig',
        'headers' => 'getHeaders',
        'requirements' => 'getRequirements',
        'icon_raw' => 'getIconRaw',
        'icon' => 'getIcon',
        'sw_icon' => 'getSwIcon',
        'url' => 'getUrl',
        'delayable' => 'getDelayable',
        'label' => 'getLabel',
        'description' => 'getDescription',
        'headline' => 'getHeadline',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'translated' => 'getTranslated',
        'app' => 'getApp',
        'flow_sequences' => 'getFlowSequences'
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
        $this->container['app_id'] = $data['app_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['badge'] = $data['badge'] ?? null;
        $this->container['parameters'] = $data['parameters'] ?? null;
        $this->container['config'] = $data['config'] ?? null;
        $this->container['headers'] = $data['headers'] ?? null;
        $this->container['requirements'] = $data['requirements'] ?? null;
        $this->container['icon_raw'] = $data['icon_raw'] ?? null;
        $this->container['icon'] = $data['icon'] ?? null;
        $this->container['sw_icon'] = $data['sw_icon'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['delayable'] = $data['delayable'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['headline'] = $data['headline'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['translated'] = $data['translated'] ?? null;
        $this->container['app'] = $data['app'] ?? null;
        $this->container['flow_sequences'] = $data['flow_sequences'] ?? null;
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

        if ($this->container['app_id'] === null) {
            $invalidProperties[] = "'app_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['app_id'])) {
            $invalidProperties[] = "invalid value for 'app_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling AppFlowAction., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets app_id
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string $app_id app_id
     *
     * @return self
     */
    public function setAppId($app_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $app_id))) {
            throw new \InvalidArgumentException("invalid value for $app_id when calling AppFlowAction., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['app_id'] = $app_id;

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
     * Gets badge
     *
     * @return string|null
     */
    public function getBadge()
    {
        return $this->container['badge'];
    }

    /**
     * Sets badge
     *
     * @param string|null $badge badge
     *
     * @return self
     */
    public function setBadge($badge)
    {
        $this->container['badge'] = $badge;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return object|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param object|null $parameters parameters
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets config
     *
     * @return object|null
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param object|null $config config
     *
     * @return self
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return object|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param object|null $headers headers
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets requirements
     *
     * @return string[]|null
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     *
     * @param string[]|null $requirements requirements
     *
     * @return self
     */
    public function setRequirements($requirements)
    {
        $this->container['requirements'] = $requirements;

        return $this;
    }

    /**
     * Gets icon_raw
     *
     * @return string|null
     */
    public function getIconRaw()
    {
        return $this->container['icon_raw'];
    }

    /**
     * Sets icon_raw
     *
     * @param string|null $icon_raw icon_raw
     *
     * @return self
     */
    public function setIconRaw($icon_raw)
    {
        $this->container['icon_raw'] = $icon_raw;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon Runtime field, cannot be used as part of the criteria.
     *
     * @return self
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets sw_icon
     *
     * @return string|null
     */
    public function getSwIcon()
    {
        return $this->container['sw_icon'];
    }

    /**
     * Sets sw_icon
     *
     * @param string|null $sw_icon sw_icon
     *
     * @return self
     */
    public function setSwIcon($sw_icon)
    {
        $this->container['sw_icon'] = $sw_icon;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets delayable
     *
     * @return bool|null
     */
    public function getDelayable()
    {
        return $this->container['delayable'];
    }

    /**
     * Sets delayable
     *
     * @param bool|null $delayable delayable
     *
     * @return self
     */
    public function setDelayable($delayable)
    {
        $this->container['delayable'] = $delayable;

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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets headline
     *
     * @return string|null
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param string|null $headline headline
     *
     * @return self
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

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
     * Gets flow_sequences
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\FlowSequence[]|null
     */
    public function getFlowSequences()
    {
        return $this->container['flow_sequences'];
    }

    /**
     * Sets flow_sequences
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\FlowSequence[]|null $flow_sequences flow_sequences
     *
     * @return self
     */
    public function setFlowSequences($flow_sequences)
    {
        $this->container['flow_sequences'] = $flow_sequences;

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


