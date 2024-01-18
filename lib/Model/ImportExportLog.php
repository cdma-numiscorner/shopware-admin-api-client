<?php
/**
 * ImportExportLog
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
 * ImportExportLog Class Doc Comment
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
class ImportExportLog implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImportExportLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'activity' => 'string',
        'state' => 'string',
        'records' => 'int',
        'user_id' => 'string',
        'profile_id' => 'string',
        'file_id' => 'string',
        'invalid_records_log_id' => 'string',
        'username' => 'string',
        'profile_name' => 'string',
        'config' => 'object',
        'result' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'user' => '\OpenAPI\ShopwareAdminApiClient\Model\User',
        'profile' => '\OpenAPI\ShopwareAdminApiClient\Model\ImportExportProfile',
        'file' => '\OpenAPI\ShopwareAdminApiClient\Model\ImportExportFile',
        'invalid_records_log' => '\OpenAPI\ShopwareAdminApiClient\Model\ImportExportLog',
        'failed_import_log' => '\OpenAPI\ShopwareAdminApiClient\Model\ImportExportLog'
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
        'activity' => null,
        'state' => null,
        'records' => 'int64',
        'user_id' => null,
        'profile_id' => null,
        'file_id' => null,
        'invalid_records_log_id' => null,
        'username' => null,
        'profile_name' => null,
        'config' => null,
        'result' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'user' => null,
        'profile' => null,
        'file' => null,
        'invalid_records_log' => null,
        'failed_import_log' => null
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
        'activity' => 'activity',
        'state' => 'state',
        'records' => 'records',
        'user_id' => 'userId',
        'profile_id' => 'profileId',
        'file_id' => 'fileId',
        'invalid_records_log_id' => 'invalidRecordsLogId',
        'username' => 'username',
        'profile_name' => 'profileName',
        'config' => 'config',
        'result' => 'result',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'user' => 'user',
        'profile' => 'profile',
        'file' => 'file',
        'invalid_records_log' => 'invalidRecordsLog',
        'failed_import_log' => 'failedImportLog'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'activity' => 'setActivity',
        'state' => 'setState',
        'records' => 'setRecords',
        'user_id' => 'setUserId',
        'profile_id' => 'setProfileId',
        'file_id' => 'setFileId',
        'invalid_records_log_id' => 'setInvalidRecordsLogId',
        'username' => 'setUsername',
        'profile_name' => 'setProfileName',
        'config' => 'setConfig',
        'result' => 'setResult',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'user' => 'setUser',
        'profile' => 'setProfile',
        'file' => 'setFile',
        'invalid_records_log' => 'setInvalidRecordsLog',
        'failed_import_log' => 'setFailedImportLog'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'activity' => 'getActivity',
        'state' => 'getState',
        'records' => 'getRecords',
        'user_id' => 'getUserId',
        'profile_id' => 'getProfileId',
        'file_id' => 'getFileId',
        'invalid_records_log_id' => 'getInvalidRecordsLogId',
        'username' => 'getUsername',
        'profile_name' => 'getProfileName',
        'config' => 'getConfig',
        'result' => 'getResult',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'user' => 'getUser',
        'profile' => 'getProfile',
        'file' => 'getFile',
        'invalid_records_log' => 'getInvalidRecordsLog',
        'failed_import_log' => 'getFailedImportLog'
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
        $this->container['activity'] = $data['activity'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['records'] = $data['records'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['profile_id'] = $data['profile_id'] ?? null;
        $this->container['file_id'] = $data['file_id'] ?? null;
        $this->container['invalid_records_log_id'] = $data['invalid_records_log_id'] ?? null;
        $this->container['username'] = $data['username'] ?? null;
        $this->container['profile_name'] = $data['profile_name'] ?? null;
        $this->container['config'] = $data['config'] ?? null;
        $this->container['result'] = $data['result'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['user'] = $data['user'] ?? null;
        $this->container['profile'] = $data['profile'] ?? null;
        $this->container['file'] = $data['file'] ?? null;
        $this->container['invalid_records_log'] = $data['invalid_records_log'] ?? null;
        $this->container['failed_import_log'] = $data['failed_import_log'] ?? null;
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

        if ($this->container['activity'] === null) {
            $invalidProperties[] = "'activity' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['records'] === null) {
            $invalidProperties[] = "'records' can't be null";
        }
        if (!is_null($this->container['user_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['user_id'])) {
            $invalidProperties[] = "invalid value for 'user_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['profile_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['profile_id'])) {
            $invalidProperties[] = "invalid value for 'profile_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['file_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['file_id'])) {
            $invalidProperties[] = "invalid value for 'file_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['invalid_records_log_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['invalid_records_log_id'])) {
            $invalidProperties[] = "invalid value for 'invalid_records_log_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['config'] === null) {
            $invalidProperties[] = "'config' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling ImportExportLog., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets activity
     *
     * @return string
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param string $activity activity
     *
     * @return self
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets records
     *
     * @return int
     */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
     * Sets records
     *
     * @param int $records records
     *
     * @return self
     */
    public function setRecords($records)
    {
        $this->container['records'] = $records;

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
            throw new \InvalidArgumentException("invalid value for $user_id when calling ImportExportLog., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets profile_id
     *
     * @return string|null
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param string|null $profile_id profile_id
     *
     * @return self
     */
    public function setProfileId($profile_id)
    {

        if (!is_null($profile_id) && (!preg_match("/^[0-9a-f]{32}$/", $profile_id))) {
            throw new \InvalidArgumentException("invalid value for $profile_id when calling ImportExportLog., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets file_id
     *
     * @return string|null
     */
    public function getFileId()
    {
        return $this->container['file_id'];
    }

    /**
     * Sets file_id
     *
     * @param string|null $file_id file_id
     *
     * @return self
     */
    public function setFileId($file_id)
    {

        if (!is_null($file_id) && (!preg_match("/^[0-9a-f]{32}$/", $file_id))) {
            throw new \InvalidArgumentException("invalid value for $file_id when calling ImportExportLog., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['file_id'] = $file_id;

        return $this;
    }

    /**
     * Gets invalid_records_log_id
     *
     * @return string|null
     */
    public function getInvalidRecordsLogId()
    {
        return $this->container['invalid_records_log_id'];
    }

    /**
     * Sets invalid_records_log_id
     *
     * @param string|null $invalid_records_log_id invalid_records_log_id
     *
     * @return self
     */
    public function setInvalidRecordsLogId($invalid_records_log_id)
    {

        if (!is_null($invalid_records_log_id) && (!preg_match("/^[0-9a-f]{32}$/", $invalid_records_log_id))) {
            throw new \InvalidArgumentException("invalid value for $invalid_records_log_id when calling ImportExportLog., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['invalid_records_log_id'] = $invalid_records_log_id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets profile_name
     *
     * @return string|null
     */
    public function getProfileName()
    {
        return $this->container['profile_name'];
    }

    /**
     * Sets profile_name
     *
     * @param string|null $profile_name profile_name
     *
     * @return self
     */
    public function setProfileName($profile_name)
    {
        $this->container['profile_name'] = $profile_name;

        return $this;
    }

    /**
     * Gets config
     *
     * @return object
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param object $config config
     *
     * @return self
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets result
     *
     * @return object|null
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param object|null $result result
     *
     * @return self
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

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
     * Gets profile
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ImportExportProfile|null
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ImportExportProfile|null $profile profile
     *
     * @return self
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets file
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ImportExportFile|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ImportExportFile|null $file file
     *
     * @return self
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets invalid_records_log
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ImportExportLog|null
     */
    public function getInvalidRecordsLog()
    {
        return $this->container['invalid_records_log'];
    }

    /**
     * Sets invalid_records_log
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ImportExportLog|null $invalid_records_log invalid_records_log
     *
     * @return self
     */
    public function setInvalidRecordsLog($invalid_records_log)
    {
        $this->container['invalid_records_log'] = $invalid_records_log;

        return $this;
    }

    /**
     * Gets failed_import_log
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ImportExportLog|null
     */
    public function getFailedImportLog()
    {
        return $this->container['failed_import_log'];
    }

    /**
     * Sets failed_import_log
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ImportExportLog|null $failed_import_log failed_import_log
     *
     * @return self
     */
    public function setFailedImportLog($failed_import_log)
    {
        $this->container['failed_import_log'] = $failed_import_log;

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


