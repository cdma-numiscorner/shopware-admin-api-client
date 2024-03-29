<?php
/**
 * DocumentJsonApiAllOfRelationships
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
 * DocumentJsonApiAllOfRelationships Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class DocumentJsonApiAllOfRelationships implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentJsonApi_allOf_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'document_type' => '\OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationshipsDocumentType',
        'order' => '\OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationshipsOrder',
        'referenced_document' => '\OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationshipsReferencedDocument',
        'dependent_documents' => '\OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationshipsDependentDocuments',
        'document_media_file' => '\OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationshipsDocumentMediaFile'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'document_type' => null,
        'order' => null,
        'referenced_document' => null,
        'dependent_documents' => null,
        'document_media_file' => null
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
        'document_type' => 'documentType',
        'order' => 'order',
        'referenced_document' => 'referencedDocument',
        'dependent_documents' => 'dependentDocuments',
        'document_media_file' => 'documentMediaFile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_type' => 'setDocumentType',
        'order' => 'setOrder',
        'referenced_document' => 'setReferencedDocument',
        'dependent_documents' => 'setDependentDocuments',
        'document_media_file' => 'setDocumentMediaFile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_type' => 'getDocumentType',
        'order' => 'getOrder',
        'referenced_document' => 'getReferencedDocument',
        'dependent_documents' => 'getDependentDocuments',
        'document_media_file' => 'getDocumentMediaFile'
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
        $this->container['document_type'] = $data['document_type'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
        $this->container['referenced_document'] = $data['referenced_document'] ?? null;
        $this->container['dependent_documents'] = $data['dependent_documents'] ?? null;
        $this->container['document_media_file'] = $data['document_media_file'] ?? null;
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
     * Gets document_type
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationshipsDocumentType|null
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationshipsDocumentType|null $document_type document_type
     *
     * @return self
     */
    public function setDocumentType($document_type)
    {
        $this->container['document_type'] = $document_type;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationshipsOrder|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationshipsOrder|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets referenced_document
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationshipsReferencedDocument|null
     */
    public function getReferencedDocument()
    {
        return $this->container['referenced_document'];
    }

    /**
     * Sets referenced_document
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationshipsReferencedDocument|null $referenced_document referenced_document
     *
     * @return self
     */
    public function setReferencedDocument($referenced_document)
    {
        $this->container['referenced_document'] = $referenced_document;

        return $this;
    }

    /**
     * Gets dependent_documents
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationshipsDependentDocuments|null
     */
    public function getDependentDocuments()
    {
        return $this->container['dependent_documents'];
    }

    /**
     * Sets dependent_documents
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationshipsDependentDocuments|null $dependent_documents dependent_documents
     *
     * @return self
     */
    public function setDependentDocuments($dependent_documents)
    {
        $this->container['dependent_documents'] = $dependent_documents;

        return $this;
    }

    /**
     * Gets document_media_file
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationshipsDocumentMediaFile|null
     */
    public function getDocumentMediaFile()
    {
        return $this->container['document_media_file'];
    }

    /**
     * Sets document_media_file
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\DocumentJsonApiAllOfRelationshipsDocumentMediaFile|null $document_media_file document_media_file
     *
     * @return self
     */
    public function setDocumentMediaFile($document_media_file)
    {
        $this->container['document_media_file'] = $document_media_file;

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


