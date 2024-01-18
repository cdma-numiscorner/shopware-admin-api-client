<?php
/**
 * ScheduledTask
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
 * ScheduledTask Class Doc Comment
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
class ScheduledTask implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScheduledTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'scheduled_task_class' => 'string',
        'run_interval' => 'int',
        'status' => 'string',
        'last_execution_time' => '\DateTime',
        'next_execution_time' => '\DateTime',
        'default_run_interval' => 'int',
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
        'scheduled_task_class' => null,
        'run_interval' => 'int64',
        'status' => null,
        'last_execution_time' => 'date-time',
        'next_execution_time' => 'date-time',
        'default_run_interval' => 'int64',
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
        'scheduled_task_class' => 'scheduledTaskClass',
        'run_interval' => 'runInterval',
        'status' => 'status',
        'last_execution_time' => 'lastExecutionTime',
        'next_execution_time' => 'nextExecutionTime',
        'default_run_interval' => 'defaultRunInterval',
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
        'scheduled_task_class' => 'setScheduledTaskClass',
        'run_interval' => 'setRunInterval',
        'status' => 'setStatus',
        'last_execution_time' => 'setLastExecutionTime',
        'next_execution_time' => 'setNextExecutionTime',
        'default_run_interval' => 'setDefaultRunInterval',
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
        'scheduled_task_class' => 'getScheduledTaskClass',
        'run_interval' => 'getRunInterval',
        'status' => 'getStatus',
        'last_execution_time' => 'getLastExecutionTime',
        'next_execution_time' => 'getNextExecutionTime',
        'default_run_interval' => 'getDefaultRunInterval',
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
        $this->container['scheduled_task_class'] = $data['scheduled_task_class'] ?? null;
        $this->container['run_interval'] = $data['run_interval'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['last_execution_time'] = $data['last_execution_time'] ?? null;
        $this->container['next_execution_time'] = $data['next_execution_time'] ?? null;
        $this->container['default_run_interval'] = $data['default_run_interval'] ?? null;
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
        if ($this->container['scheduled_task_class'] === null) {
            $invalidProperties[] = "'scheduled_task_class' can't be null";
        }
        if ($this->container['run_interval'] === null) {
            $invalidProperties[] = "'run_interval' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['next_execution_time'] === null) {
            $invalidProperties[] = "'next_execution_time' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling ScheduledTask., must conform to the pattern /^[0-9a-f]{32}$/.");
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
     * Gets scheduled_task_class
     *
     * @return string
     */
    public function getScheduledTaskClass()
    {
        return $this->container['scheduled_task_class'];
    }

    /**
     * Sets scheduled_task_class
     *
     * @param string $scheduled_task_class scheduled_task_class
     *
     * @return self
     */
    public function setScheduledTaskClass($scheduled_task_class)
    {
        $this->container['scheduled_task_class'] = $scheduled_task_class;

        return $this;
    }

    /**
     * Gets run_interval
     *
     * @return int
     */
    public function getRunInterval()
    {
        return $this->container['run_interval'];
    }

    /**
     * Sets run_interval
     *
     * @param int $run_interval run_interval
     *
     * @return self
     */
    public function setRunInterval($run_interval)
    {
        $this->container['run_interval'] = $run_interval;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets last_execution_time
     *
     * @return \DateTime|null
     */
    public function getLastExecutionTime()
    {
        return $this->container['last_execution_time'];
    }

    /**
     * Sets last_execution_time
     *
     * @param \DateTime|null $last_execution_time last_execution_time
     *
     * @return self
     */
    public function setLastExecutionTime($last_execution_time)
    {
        $this->container['last_execution_time'] = $last_execution_time;

        return $this;
    }

    /**
     * Gets next_execution_time
     *
     * @return \DateTime
     */
    public function getNextExecutionTime()
    {
        return $this->container['next_execution_time'];
    }

    /**
     * Sets next_execution_time
     *
     * @param \DateTime $next_execution_time next_execution_time
     *
     * @return self
     */
    public function setNextExecutionTime($next_execution_time)
    {
        $this->container['next_execution_time'] = $next_execution_time;

        return $this;
    }

    /**
     * Gets default_run_interval
     *
     * @return int|null
     */
    public function getDefaultRunInterval()
    {
        return $this->container['default_run_interval'];
    }

    /**
     * Sets default_run_interval
     *
     * @param int|null $default_run_interval default_run_interval
     *
     * @return self
     */
    public function setDefaultRunInterval($default_run_interval)
    {
        $this->container['default_run_interval'] = $default_run_interval;

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


