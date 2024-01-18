<?php
/**
 * MailTemplateMedia
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
 * MailTemplateMedia Class Doc Comment
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
class MailTemplateMedia implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MailTemplateMedia';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'mail_template_id' => 'string',
        'language_id' => 'string',
        'media_id' => 'string',
        'position' => 'int',
        'mail_template' => '\OpenAPI\ShopwareAdminApiClient\Model\MailTemplate',
        'media' => '\OpenAPI\ShopwareAdminApiClient\Model\Media'
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
        'mail_template_id' => null,
        'language_id' => null,
        'media_id' => null,
        'position' => 'int64',
        'mail_template' => null,
        'media' => null
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
        'mail_template_id' => 'mailTemplateId',
        'language_id' => 'languageId',
        'media_id' => 'mediaId',
        'position' => 'position',
        'mail_template' => 'mailTemplate',
        'media' => 'media'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'mail_template_id' => 'setMailTemplateId',
        'language_id' => 'setLanguageId',
        'media_id' => 'setMediaId',
        'position' => 'setPosition',
        'mail_template' => 'setMailTemplate',
        'media' => 'setMedia'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'mail_template_id' => 'getMailTemplateId',
        'language_id' => 'getLanguageId',
        'media_id' => 'getMediaId',
        'position' => 'getPosition',
        'mail_template' => 'getMailTemplate',
        'media' => 'getMedia'
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
        $this->container['mail_template_id'] = $data['mail_template_id'] ?? null;
        $this->container['language_id'] = $data['language_id'] ?? null;
        $this->container['media_id'] = $data['media_id'] ?? null;
        $this->container['position'] = $data['position'] ?? null;
        $this->container['mail_template'] = $data['mail_template'] ?? null;
        $this->container['media'] = $data['media'] ?? null;
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

        if ($this->container['mail_template_id'] === null) {
            $invalidProperties[] = "'mail_template_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['mail_template_id'])) {
            $invalidProperties[] = "invalid value for 'mail_template_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['language_id'] === null) {
            $invalidProperties[] = "'language_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['language_id'])) {
            $invalidProperties[] = "invalid value for 'language_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['media_id'] === null) {
            $invalidProperties[] = "'media_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['media_id'])) {
            $invalidProperties[] = "invalid value for 'media_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling MailTemplateMedia., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets mail_template_id
     *
     * @return string
     */
    public function getMailTemplateId()
    {
        return $this->container['mail_template_id'];
    }

    /**
     * Sets mail_template_id
     *
     * @param string $mail_template_id mail_template_id
     *
     * @return self
     */
    public function setMailTemplateId($mail_template_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $mail_template_id))) {
            throw new \InvalidArgumentException("invalid value for $mail_template_id when calling MailTemplateMedia., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['mail_template_id'] = $mail_template_id;

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
            throw new \InvalidArgumentException("invalid value for $language_id when calling MailTemplateMedia., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['language_id'] = $language_id;

        return $this;
    }

    /**
     * Gets media_id
     *
     * @return string
     */
    public function getMediaId()
    {
        return $this->container['media_id'];
    }

    /**
     * Sets media_id
     *
     * @param string $media_id media_id
     *
     * @return self
     */
    public function setMediaId($media_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $media_id))) {
            throw new \InvalidArgumentException("invalid value for $media_id when calling MailTemplateMedia., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['media_id'] = $media_id;

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
     * Gets mail_template
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\MailTemplate|null
     */
    public function getMailTemplate()
    {
        return $this->container['mail_template'];
    }

    /**
     * Sets mail_template
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\MailTemplate|null $mail_template mail_template
     *
     * @return self
     */
    public function setMailTemplate($mail_template)
    {
        $this->container['mail_template'] = $mail_template;

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


