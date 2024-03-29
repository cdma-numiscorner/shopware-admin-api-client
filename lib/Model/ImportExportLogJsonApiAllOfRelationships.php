<?php
/**
 * ImportExportLogJsonApiAllOfRelationships
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
 * ImportExportLogJsonApiAllOfRelationships Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ImportExportLogJsonApiAllOfRelationships implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImportExportLogJsonApi_allOf_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user' => '\OpenAPI\ShopwareAdminApiClient\Model\ImportExportLogJsonApiAllOfRelationshipsUser',
        'profile' => '\OpenAPI\ShopwareAdminApiClient\Model\ImportExportLogJsonApiAllOfRelationshipsProfile',
        'file' => '\OpenAPI\ShopwareAdminApiClient\Model\ImportExportLogJsonApiAllOfRelationshipsFile',
        'invalid_records_log' => '\OpenAPI\ShopwareAdminApiClient\Model\ImportExportLogJsonApiAllOfRelationshipsInvalidRecordsLog',
        'failed_import_log' => '\OpenAPI\ShopwareAdminApiClient\Model\ImportExportLogJsonApiAllOfRelationshipsFailedImportLog'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
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
     * Gets user
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ImportExportLogJsonApiAllOfRelationshipsUser|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ImportExportLogJsonApiAllOfRelationshipsUser|null $user user
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ImportExportLogJsonApiAllOfRelationshipsProfile|null
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ImportExportLogJsonApiAllOfRelationshipsProfile|null $profile profile
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ImportExportLogJsonApiAllOfRelationshipsFile|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ImportExportLogJsonApiAllOfRelationshipsFile|null $file file
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ImportExportLogJsonApiAllOfRelationshipsInvalidRecordsLog|null
     */
    public function getInvalidRecordsLog()
    {
        return $this->container['invalid_records_log'];
    }

    /**
     * Sets invalid_records_log
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ImportExportLogJsonApiAllOfRelationshipsInvalidRecordsLog|null $invalid_records_log invalid_records_log
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ImportExportLogJsonApiAllOfRelationshipsFailedImportLog|null
     */
    public function getFailedImportLog()
    {
        return $this->container['failed_import_log'];
    }

    /**
     * Sets failed_import_log
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ImportExportLogJsonApiAllOfRelationshipsFailedImportLog|null $failed_import_log failed_import_log
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


