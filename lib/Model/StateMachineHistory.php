<?php
/**
 * StateMachineHistory
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
 * StateMachineHistory Class Doc Comment
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
class StateMachineHistory implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StateMachineHistory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'state_machine_id' => 'string',
        'entity_name' => 'string',
        'from_state_id' => 'string',
        'to_state_id' => 'string',
        'transition_action_name' => 'string',
        'user_id' => 'string',
        'entity_id' => 'object',
        'referenced_id' => 'string',
        'referenced_version_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'state_machine' => '\OpenAPI\ShopwareAdminApiClient\Model\StateMachine',
        'from_state_machine_state' => '\OpenAPI\ShopwareAdminApiClient\Model\StateMachineState',
        'to_state_machine_state' => '\OpenAPI\ShopwareAdminApiClient\Model\StateMachineState',
        'user' => '\OpenAPI\ShopwareAdminApiClient\Model\User'
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
        'state_machine_id' => null,
        'entity_name' => null,
        'from_state_id' => null,
        'to_state_id' => null,
        'transition_action_name' => null,
        'user_id' => null,
        'entity_id' => null,
        'referenced_id' => null,
        'referenced_version_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'state_machine' => null,
        'from_state_machine_state' => null,
        'to_state_machine_state' => null,
        'user' => null
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
        'state_machine_id' => 'stateMachineId',
        'entity_name' => 'entityName',
        'from_state_id' => 'fromStateId',
        'to_state_id' => 'toStateId',
        'transition_action_name' => 'transitionActionName',
        'user_id' => 'userId',
        'entity_id' => 'entityId',
        'referenced_id' => 'referencedId',
        'referenced_version_id' => 'referencedVersionId',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'state_machine' => 'stateMachine',
        'from_state_machine_state' => 'fromStateMachineState',
        'to_state_machine_state' => 'toStateMachineState',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'state_machine_id' => 'setStateMachineId',
        'entity_name' => 'setEntityName',
        'from_state_id' => 'setFromStateId',
        'to_state_id' => 'setToStateId',
        'transition_action_name' => 'setTransitionActionName',
        'user_id' => 'setUserId',
        'entity_id' => 'setEntityId',
        'referenced_id' => 'setReferencedId',
        'referenced_version_id' => 'setReferencedVersionId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'state_machine' => 'setStateMachine',
        'from_state_machine_state' => 'setFromStateMachineState',
        'to_state_machine_state' => 'setToStateMachineState',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'state_machine_id' => 'getStateMachineId',
        'entity_name' => 'getEntityName',
        'from_state_id' => 'getFromStateId',
        'to_state_id' => 'getToStateId',
        'transition_action_name' => 'getTransitionActionName',
        'user_id' => 'getUserId',
        'entity_id' => 'getEntityId',
        'referenced_id' => 'getReferencedId',
        'referenced_version_id' => 'getReferencedVersionId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'state_machine' => 'getStateMachine',
        'from_state_machine_state' => 'getFromStateMachineState',
        'to_state_machine_state' => 'getToStateMachineState',
        'user' => 'getUser'
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
        $this->container['state_machine_id'] = $data['state_machine_id'] ?? null;
        $this->container['entity_name'] = $data['entity_name'] ?? null;
        $this->container['from_state_id'] = $data['from_state_id'] ?? null;
        $this->container['to_state_id'] = $data['to_state_id'] ?? null;
        $this->container['transition_action_name'] = $data['transition_action_name'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['entity_id'] = $data['entity_id'] ?? null;
        $this->container['referenced_id'] = $data['referenced_id'] ?? null;
        $this->container['referenced_version_id'] = $data['referenced_version_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['state_machine'] = $data['state_machine'] ?? null;
        $this->container['from_state_machine_state'] = $data['from_state_machine_state'] ?? null;
        $this->container['to_state_machine_state'] = $data['to_state_machine_state'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
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

        if ($this->container['state_machine_id'] === null) {
            $invalidProperties[] = "'state_machine_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['state_machine_id'])) {
            $invalidProperties[] = "invalid value for 'state_machine_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['entity_name'] === null) {
            $invalidProperties[] = "'entity_name' can't be null";
        }
        if ($this->container['from_state_id'] === null) {
            $invalidProperties[] = "'from_state_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['from_state_id'])) {
            $invalidProperties[] = "invalid value for 'from_state_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['to_state_id'] === null) {
            $invalidProperties[] = "'to_state_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['to_state_id'])) {
            $invalidProperties[] = "invalid value for 'to_state_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['user_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['user_id'])) {
            $invalidProperties[] = "invalid value for 'user_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['entity_id'] === null) {
            $invalidProperties[] = "'entity_id' can't be null";
        }
        if (!is_null($this->container['referenced_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['referenced_id'])) {
            $invalidProperties[] = "invalid value for 'referenced_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['referenced_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['referenced_version_id'])) {
            $invalidProperties[] = "invalid value for 'referenced_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling StateMachineHistory., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets state_machine_id
     *
     * @return string
     */
    public function getStateMachineId()
    {
        return $this->container['state_machine_id'];
    }

    /**
     * Sets state_machine_id
     *
     * @param string $state_machine_id state_machine_id
     *
     * @return self
     */
    public function setStateMachineId($state_machine_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $state_machine_id))) {
            throw new \InvalidArgumentException("invalid value for $state_machine_id when calling StateMachineHistory., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['state_machine_id'] = $state_machine_id;

        return $this;
    }

    /**
     * Gets entity_name
     *
     * @return string
     */
    public function getEntityName()
    {
        return $this->container['entity_name'];
    }

    /**
     * Sets entity_name
     *
     * @param string $entity_name entity_name
     *
     * @return self
     */
    public function setEntityName($entity_name)
    {
        $this->container['entity_name'] = $entity_name;

        return $this;
    }

    /**
     * Gets from_state_id
     *
     * @return string
     */
    public function getFromStateId()
    {
        return $this->container['from_state_id'];
    }

    /**
     * Sets from_state_id
     *
     * @param string $from_state_id from_state_id
     *
     * @return self
     */
    public function setFromStateId($from_state_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $from_state_id))) {
            throw new \InvalidArgumentException("invalid value for $from_state_id when calling StateMachineHistory., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['from_state_id'] = $from_state_id;

        return $this;
    }

    /**
     * Gets to_state_id
     *
     * @return string
     */
    public function getToStateId()
    {
        return $this->container['to_state_id'];
    }

    /**
     * Sets to_state_id
     *
     * @param string $to_state_id to_state_id
     *
     * @return self
     */
    public function setToStateId($to_state_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $to_state_id))) {
            throw new \InvalidArgumentException("invalid value for $to_state_id when calling StateMachineHistory., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['to_state_id'] = $to_state_id;

        return $this;
    }

    /**
     * Gets transition_action_name
     *
     * @return string|null
     */
    public function getTransitionActionName()
    {
        return $this->container['transition_action_name'];
    }

    /**
     * Sets transition_action_name
     *
     * @param string|null $transition_action_name transition_action_name
     *
     * @return self
     */
    public function setTransitionActionName($transition_action_name)
    {
        $this->container['transition_action_name'] = $transition_action_name;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {

        if (!is_null($user_id) && (!preg_match("/^[0-9a-f]{32}$/", $user_id))) {
            throw new \InvalidArgumentException("invalid value for $user_id when calling StateMachineHistory., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets entity_id
     *
     * @return object
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     *
     * @param object $entity_id entity_id
     *
     * @return self
     */
    public function setEntityId($entity_id)
    {
        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets referenced_id
     *
     * @return string|null
     */
    public function getReferencedId()
    {
        return $this->container['referenced_id'];
    }

    /**
     * Sets referenced_id
     *
     * @param string|null $referenced_id referenced_id
     *
     * @return self
     */
    public function setReferencedId($referenced_id)
    {

        if (!is_null($referenced_id) && (!preg_match("/^[0-9a-f]{32}$/", $referenced_id))) {
            throw new \InvalidArgumentException("invalid value for $referenced_id when calling StateMachineHistory., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['referenced_id'] = $referenced_id;

        return $this;
    }

    /**
     * Gets referenced_version_id
     *
     * @return string|null
     */
    public function getReferencedVersionId()
    {
        return $this->container['referenced_version_id'];
    }

    /**
     * Sets referenced_version_id
     *
     * @param string|null $referenced_version_id referenced_version_id
     *
     * @return self
     */
    public function setReferencedVersionId($referenced_version_id)
    {

        if (!is_null($referenced_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $referenced_version_id))) {
            throw new \InvalidArgumentException("invalid value for $referenced_version_id when calling StateMachineHistory., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['referenced_version_id'] = $referenced_version_id;

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
     * Gets state_machine
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\StateMachine|null
     */
    public function getStateMachine()
    {
        return $this->container['state_machine'];
    }

    /**
     * Sets state_machine
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\StateMachine|null $state_machine state_machine
     *
     * @return self
     */
    public function setStateMachine($state_machine)
    {
        $this->container['state_machine'] = $state_machine;

        return $this;
    }

    /**
     * Gets from_state_machine_state
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\StateMachineState|null
     */
    public function getFromStateMachineState()
    {
        return $this->container['from_state_machine_state'];
    }

    /**
     * Sets from_state_machine_state
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\StateMachineState|null $from_state_machine_state from_state_machine_state
     *
     * @return self
     */
    public function setFromStateMachineState($from_state_machine_state)
    {
        $this->container['from_state_machine_state'] = $from_state_machine_state;

        return $this;
    }

    /**
     * Gets to_state_machine_state
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\StateMachineState|null
     */
    public function getToStateMachineState()
    {
        return $this->container['to_state_machine_state'];
    }

    /**
     * Sets to_state_machine_state
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\StateMachineState|null $to_state_machine_state to_state_machine_state
     *
     * @return self
     */
    public function setToStateMachineState($to_state_machine_state)
    {
        $this->container['to_state_machine_state'] = $to_state_machine_state;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\User|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\User|null $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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


