<?php
/**
 * DocumentJsonApi
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
 * DocumentJsonApi Class Doc Comment
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
class DocumentJsonApi implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentJsonApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'id' => 'string',
        'attributes' => 'map[string,object]',
        'relationships' => '\OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationships',
        'links' => 'map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]',
        'meta' => 'map[string,object]',
        'document_type_id' => 'string',
        'file_type' => 'string',
        'referenced_document_id' => 'string',
        'order_id' => 'string',
        'document_media_file_id' => 'string',
        'order_version_id' => 'string',
        'config' => 'object',
        'sent' => 'bool',
        'static' => 'bool',
        'deep_link_code' => 'string',
        'document_number' => 'string',
        'custom_fields' => 'object',
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
        'type' => null,
        'id' => null,
        'attributes' => null,
        'relationships' => null,
        'links' => null,
        'meta' => null,
        'document_type_id' => null,
        'file_type' => null,
        'referenced_document_id' => null,
        'order_id' => null,
        'document_media_file_id' => null,
        'order_version_id' => null,
        'config' => null,
        'sent' => null,
        'static' => null,
        'deep_link_code' => null,
        'document_number' => null,
        'custom_fields' => null,
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
        'type' => 'type',
        'id' => 'id',
        'attributes' => 'attributes',
        'relationships' => 'relationships',
        'links' => 'links',
        'meta' => 'meta',
        'document_type_id' => 'documentTypeId',
        'file_type' => 'fileType',
        'referenced_document_id' => 'referencedDocumentId',
        'order_id' => 'orderId',
        'document_media_file_id' => 'documentMediaFileId',
        'order_version_id' => 'orderVersionId',
        'config' => 'config',
        'sent' => 'sent',
        'static' => 'static',
        'deep_link_code' => 'deepLinkCode',
        'document_number' => 'documentNumber',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'attributes' => 'setAttributes',
        'relationships' => 'setRelationships',
        'links' => 'setLinks',
        'meta' => 'setMeta',
        'document_type_id' => 'setDocumentTypeId',
        'file_type' => 'setFileType',
        'referenced_document_id' => 'setReferencedDocumentId',
        'order_id' => 'setOrderId',
        'document_media_file_id' => 'setDocumentMediaFileId',
        'order_version_id' => 'setOrderVersionId',
        'config' => 'setConfig',
        'sent' => 'setSent',
        'static' => 'setStatic',
        'deep_link_code' => 'setDeepLinkCode',
        'document_number' => 'setDocumentNumber',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'attributes' => 'getAttributes',
        'relationships' => 'getRelationships',
        'links' => 'getLinks',
        'meta' => 'getMeta',
        'document_type_id' => 'getDocumentTypeId',
        'file_type' => 'getFileType',
        'referenced_document_id' => 'getReferencedDocumentId',
        'order_id' => 'getOrderId',
        'document_media_file_id' => 'getDocumentMediaFileId',
        'order_version_id' => 'getOrderVersionId',
        'config' => 'getConfig',
        'sent' => 'getSent',
        'static' => 'getStatic',
        'deep_link_code' => 'getDeepLinkCode',
        'document_number' => 'getDocumentNumber',
        'custom_fields' => 'getCustomFields',
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['relationships'] = $data['relationships'] ?? null;
        $this->container['links'] = $data['links'] ?? null;
        $this->container['meta'] = $data['meta'] ?? null;
        $this->container['document_type_id'] = $data['document_type_id'] ?? null;
        $this->container['file_type'] = $data['file_type'] ?? null;
        $this->container['referenced_document_id'] = $data['referenced_document_id'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['document_media_file_id'] = $data['document_media_file_id'] ?? null;
        $this->container['order_version_id'] = $data['order_version_id'] ?? null;
        $this->container['config'] = $data['config'] ?? null;
        $this->container['sent'] = $data['sent'] ?? null;
        $this->container['static'] = $data['static'] ?? null;
        $this->container['deep_link_code'] = $data['deep_link_code'] ?? null;
        $this->container['document_number'] = $data['document_number'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['document_type_id'] === null) {
            $invalidProperties[] = "'document_type_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['document_type_id'])) {
            $invalidProperties[] = "invalid value for 'document_type_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['file_type'] === null) {
            $invalidProperties[] = "'file_type' can't be null";
        }
        if (!is_null($this->container['referenced_document_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['referenced_document_id'])) {
            $invalidProperties[] = "invalid value for 'referenced_document_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['order_id'])) {
            $invalidProperties[] = "invalid value for 'order_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['document_media_file_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['document_media_file_id'])) {
            $invalidProperties[] = "invalid value for 'document_media_file_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['order_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['order_version_id'])) {
            $invalidProperties[] = "invalid value for 'order_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['config'] === null) {
            $invalidProperties[] = "'config' can't be null";
        }
        if ($this->container['deep_link_code'] === null) {
            $invalidProperties[] = "'deep_link_code' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling DocumentJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return map[string,object]|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param map[string,object]|null $attributes Members of the attributes object (\"attributes\") represent information about the resource object in which it's defined.
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets relationships
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationships|null
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationships|null $relationships relationships
     *
     * @return self
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

        return $this;
    }

    /**
     * Gets links
     *
     * @return map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]|null $links links
     *
     * @return self
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return map[string,object]|null
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param map[string,object]|null $meta Non-standard meta-information that can not be represented as an attribute or relationship.
     *
     * @return self
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets document_type_id
     *
     * @return string
     */
    public function getDocumentTypeId()
    {
        return $this->container['document_type_id'];
    }

    /**
     * Sets document_type_id
     *
     * @param string $document_type_id document_type_id
     *
     * @return self
     */
    public function setDocumentTypeId($document_type_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $document_type_id))) {
            throw new \InvalidArgumentException("invalid value for $document_type_id when calling DocumentJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['document_type_id'] = $document_type_id;

        return $this;
    }

    /**
     * Gets file_type
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->container['file_type'];
    }

    /**
     * Sets file_type
     *
     * @param string $file_type file_type
     *
     * @return self
     */
    public function setFileType($file_type)
    {
        $this->container['file_type'] = $file_type;

        return $this;
    }

    /**
     * Gets referenced_document_id
     *
     * @return string|null
     */
    public function getReferencedDocumentId()
    {
        return $this->container['referenced_document_id'];
    }

    /**
     * Sets referenced_document_id
     *
     * @param string|null $referenced_document_id referenced_document_id
     *
     * @return self
     */
    public function setReferencedDocumentId($referenced_document_id)
    {

        if (!is_null($referenced_document_id) && (!preg_match("/^[0-9a-f]{32}$/", $referenced_document_id))) {
            throw new \InvalidArgumentException("invalid value for $referenced_document_id when calling DocumentJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['referenced_document_id'] = $referenced_document_id;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
     *
     * @return self
     */
    public function setOrderId($order_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $order_id))) {
            throw new \InvalidArgumentException("invalid value for $order_id when calling DocumentJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets document_media_file_id
     *
     * @return string|null
     */
    public function getDocumentMediaFileId()
    {
        return $this->container['document_media_file_id'];
    }

    /**
     * Sets document_media_file_id
     *
     * @param string|null $document_media_file_id document_media_file_id
     *
     * @return self
     */
    public function setDocumentMediaFileId($document_media_file_id)
    {

        if (!is_null($document_media_file_id) && (!preg_match("/^[0-9a-f]{32}$/", $document_media_file_id))) {
            throw new \InvalidArgumentException("invalid value for $document_media_file_id when calling DocumentJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['document_media_file_id'] = $document_media_file_id;

        return $this;
    }

    /**
     * Gets order_version_id
     *
     * @return string|null
     */
    public function getOrderVersionId()
    {
        return $this->container['order_version_id'];
    }

    /**
     * Sets order_version_id
     *
     * @param string|null $order_version_id order_version_id
     *
     * @return self
     */
    public function setOrderVersionId($order_version_id)
    {

        if (!is_null($order_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $order_version_id))) {
            throw new \InvalidArgumentException("invalid value for $order_version_id when calling DocumentJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_version_id'] = $order_version_id;

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
     * Gets sent
     *
     * @return bool|null
     */
    public function getSent()
    {
        return $this->container['sent'];
    }

    /**
     * Sets sent
     *
     * @param bool|null $sent sent
     *
     * @return self
     */
    public function setSent($sent)
    {
        $this->container['sent'] = $sent;

        return $this;
    }

    /**
     * Gets static
     *
     * @return bool|null
     */
    public function getStatic()
    {
        return $this->container['static'];
    }

    /**
     * Sets static
     *
     * @param bool|null $static static
     *
     * @return self
     */
    public function setStatic($static)
    {
        $this->container['static'] = $static;

        return $this;
    }

    /**
     * Gets deep_link_code
     *
     * @return string
     */
    public function getDeepLinkCode()
    {
        return $this->container['deep_link_code'];
    }

    /**
     * Sets deep_link_code
     *
     * @param string $deep_link_code deep_link_code
     *
     * @return self
     */
    public function setDeepLinkCode($deep_link_code)
    {
        $this->container['deep_link_code'] = $deep_link_code;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string|null $document_number document_number
     *
     * @return self
     */
    public function setDocumentNumber($document_number)
    {
        $this->container['document_number'] = $document_number;

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


