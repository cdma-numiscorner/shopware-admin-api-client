<?php
/**
 * ProductSearchConfig
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
 * ProductSearchConfig Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.3.5.0
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ProductSearchConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductSearchConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'language_id' => 'string',
        'and_logic' => 'bool',
        'min_search_length' => 'int',
        'excluded_terms' => 'string[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'language' => '\OpenAPI\ShopwareAdminApiClient\Model\Language',
        'config_fields' => '\OpenAPI\ShopwareAdminApiClient\Model\ProductSearchConfigField[]'
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
        'language_id' => null,
        'and_logic' => null,
        'min_search_length' => 'int64',
        'excluded_terms' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'language' => null,
        'config_fields' => null
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
        'language_id' => 'languageId',
        'and_logic' => 'andLogic',
        'min_search_length' => 'minSearchLength',
        'excluded_terms' => 'excludedTerms',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'language' => 'language',
        'config_fields' => 'configFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'language_id' => 'setLanguageId',
        'and_logic' => 'setAndLogic',
        'min_search_length' => 'setMinSearchLength',
        'excluded_terms' => 'setExcludedTerms',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'language' => 'setLanguage',
        'config_fields' => 'setConfigFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'language_id' => 'getLanguageId',
        'and_logic' => 'getAndLogic',
        'min_search_length' => 'getMinSearchLength',
        'excluded_terms' => 'getExcludedTerms',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'language' => 'getLanguage',
        'config_fields' => 'getConfigFields'
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
        $this->container['language_id'] = $data['language_id'] ?? null;
        $this->container['and_logic'] = $data['and_logic'] ?? null;
        $this->container['min_search_length'] = $data['min_search_length'] ?? null;
        $this->container['excluded_terms'] = $data['excluded_terms'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['config_fields'] = $data['config_fields'] ?? null;
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

        if ($this->container['language_id'] === null) {
            $invalidProperties[] = "'language_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['language_id'])) {
            $invalidProperties[] = "invalid value for 'language_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['and_logic'] === null) {
            $invalidProperties[] = "'and_logic' can't be null";
        }
        if ($this->container['min_search_length'] === null) {
            $invalidProperties[] = "'min_search_length' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling ProductSearchConfig., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets language_id
     *
     * @return string
     */
    public function getLanguageId()
    {
        return $this->container['language_id'];
    }

    /**
     * Sets language_id
     *
     * @param string $language_id language_id
     *
     * @return self
     */
    public function setLanguageId($language_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $language_id))) {
            throw new \InvalidArgumentException("invalid value for $language_id when calling ProductSearchConfig., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['language_id'] = $language_id;

        return $this;
    }

    /**
     * Gets and_logic
     *
     * @return bool
     */
    public function getAndLogic()
    {
        return $this->container['and_logic'];
    }

    /**
     * Sets and_logic
     *
     * @param bool $and_logic and_logic
     *
     * @return self
     */
    public function setAndLogic($and_logic)
    {
        $this->container['and_logic'] = $and_logic;

        return $this;
    }

    /**
     * Gets min_search_length
     *
     * @return int
     */
    public function getMinSearchLength()
    {
        return $this->container['min_search_length'];
    }

    /**
     * Sets min_search_length
     *
     * @param int $min_search_length min_search_length
     *
     * @return self
     */
    public function setMinSearchLength($min_search_length)
    {
        $this->container['min_search_length'] = $min_search_length;

        return $this;
    }

    /**
     * Gets excluded_terms
     *
     * @return string[]|null
     */
    public function getExcludedTerms()
    {
        return $this->container['excluded_terms'];
    }

    /**
     * Sets excluded_terms
     *
     * @param string[]|null $excluded_terms excluded_terms
     *
     * @return self
     */
    public function setExcludedTerms($excluded_terms)
    {
        $this->container['excluded_terms'] = $excluded_terms;

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
     * Gets language
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Language|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Language|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets config_fields
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\ProductSearchConfigField[]|null
     */
    public function getConfigFields()
    {
        return $this->container['config_fields'];
    }

    /**
     * Sets config_fields
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\ProductSearchConfigField[]|null $config_fields config_fields
     *
     * @return self
     */
    public function setConfigFields($config_fields)
    {
        $this->container['config_fields'] = $config_fields;

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


