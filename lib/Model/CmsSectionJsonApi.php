<?php
/**
 * CmsSectionJsonApi
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
 * CmsSectionJsonApi Class Doc Comment
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
class CmsSectionJsonApi implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CmsSectionJsonApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'id' => 'string',
        'attributes' => 'map[string,object]',
        'relationships' => '\OpenAPI\ShopwareAdminApiClient\Model\CmsSectionJsonApiAllOfRelationships',
        'links' => 'map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]',
        'meta' => 'map[string,object]',
        'position' => 'int',
        'locked' => 'bool',
        'name' => 'string',
        'sizing_mode' => 'string',
        'mobile_behavior' => 'string',
        'background_color' => 'string',
        'background_media_id' => 'string',
        'background_media_mode' => 'string',
        'css_class' => 'string',
        'page_id' => 'string',
        'visibility' => '\OpenAPI\ShopwareAdminApiClient\Model\CmsBlockJsonApiAllOfVisibility',
        'custom_fields' => 'object',
        'version_id' => 'string',
        'cms_page_version_id' => 'string',
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
        'position' => 'int64',
        'locked' => null,
        'name' => null,
        'sizing_mode' => null,
        'mobile_behavior' => null,
        'background_color' => null,
        'background_media_id' => null,
        'background_media_mode' => null,
        'css_class' => null,
        'page_id' => null,
        'visibility' => null,
        'custom_fields' => null,
        'version_id' => null,
        'cms_page_version_id' => null,
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
        'position' => 'position',
        'locked' => 'locked',
        'name' => 'name',
        'sizing_mode' => 'sizingMode',
        'mobile_behavior' => 'mobileBehavior',
        'background_color' => 'backgroundColor',
        'background_media_id' => 'backgroundMediaId',
        'background_media_mode' => 'backgroundMediaMode',
        'css_class' => 'cssClass',
        'page_id' => 'pageId',
        'visibility' => 'visibility',
        'custom_fields' => 'customFields',
        'version_id' => 'versionId',
        'cms_page_version_id' => 'cmsPageVersionId',
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
        'position' => 'setPosition',
        'locked' => 'setLocked',
        'name' => 'setName',
        'sizing_mode' => 'setSizingMode',
        'mobile_behavior' => 'setMobileBehavior',
        'background_color' => 'setBackgroundColor',
        'background_media_id' => 'setBackgroundMediaId',
        'background_media_mode' => 'setBackgroundMediaMode',
        'css_class' => 'setCssClass',
        'page_id' => 'setPageId',
        'visibility' => 'setVisibility',
        'custom_fields' => 'setCustomFields',
        'version_id' => 'setVersionId',
        'cms_page_version_id' => 'setCmsPageVersionId',
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
        'position' => 'getPosition',
        'locked' => 'getLocked',
        'name' => 'getName',
        'sizing_mode' => 'getSizingMode',
        'mobile_behavior' => 'getMobileBehavior',
        'background_color' => 'getBackgroundColor',
        'background_media_id' => 'getBackgroundMediaId',
        'background_media_mode' => 'getBackgroundMediaMode',
        'css_class' => 'getCssClass',
        'page_id' => 'getPageId',
        'visibility' => 'getVisibility',
        'custom_fields' => 'getCustomFields',
        'version_id' => 'getVersionId',
        'cms_page_version_id' => 'getCmsPageVersionId',
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
        $this->container['position'] = $data['position'] ?? null;
        $this->container['locked'] = $data['locked'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['sizing_mode'] = $data['sizing_mode'] ?? null;
        $this->container['mobile_behavior'] = $data['mobile_behavior'] ?? null;
        $this->container['background_color'] = $data['background_color'] ?? null;
        $this->container['background_media_id'] = $data['background_media_id'] ?? null;
        $this->container['background_media_mode'] = $data['background_media_mode'] ?? null;
        $this->container['css_class'] = $data['css_class'] ?? null;
        $this->container['page_id'] = $data['page_id'] ?? null;
        $this->container['visibility'] = $data['visibility'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['version_id'] = $data['version_id'] ?? null;
        $this->container['cms_page_version_id'] = $data['cms_page_version_id'] ?? null;
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

        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if (!is_null($this->container['background_media_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['background_media_id'])) {
            $invalidProperties[] = "invalid value for 'background_media_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['page_id'] === null) {
            $invalidProperties[] = "'page_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['page_id'])) {
            $invalidProperties[] = "invalid value for 'page_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['version_id'])) {
            $invalidProperties[] = "invalid value for 'version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['cms_page_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['cms_page_version_id'])) {
            $invalidProperties[] = "invalid value for 'cms_page_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling CmsSectionJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\CmsSectionJsonApiAllOfRelationships|null
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\CmsSectionJsonApiAllOfRelationships|null $relationships relationships
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
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position position
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets locked
     *
     * @return bool|null
     */
    public function getLocked()
    {
        return $this->container['locked'];
    }

    /**
     * Sets locked
     *
     * @param bool|null $locked locked
     *
     * @return self
     */
    public function setLocked($locked)
    {
        $this->container['locked'] = $locked;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets sizing_mode
     *
     * @return string|null
     */
    public function getSizingMode()
    {
        return $this->container['sizing_mode'];
    }

    /**
     * Sets sizing_mode
     *
     * @param string|null $sizing_mode sizing_mode
     *
     * @return self
     */
    public function setSizingMode($sizing_mode)
    {
        $this->container['sizing_mode'] = $sizing_mode;

        return $this;
    }

    /**
     * Gets mobile_behavior
     *
     * @return string|null
     */
    public function getMobileBehavior()
    {
        return $this->container['mobile_behavior'];
    }

    /**
     * Sets mobile_behavior
     *
     * @param string|null $mobile_behavior mobile_behavior
     *
     * @return self
     */
    public function setMobileBehavior($mobile_behavior)
    {
        $this->container['mobile_behavior'] = $mobile_behavior;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return string|null
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string|null $background_color background_color
     *
     * @return self
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets background_media_id
     *
     * @return string|null
     */
    public function getBackgroundMediaId()
    {
        return $this->container['background_media_id'];
    }

    /**
     * Sets background_media_id
     *
     * @param string|null $background_media_id background_media_id
     *
     * @return self
     */
    public function setBackgroundMediaId($background_media_id)
    {

        if (!is_null($background_media_id) && (!preg_match("/^[0-9a-f]{32}$/", $background_media_id))) {
            throw new \InvalidArgumentException("invalid value for $background_media_id when calling CmsSectionJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['background_media_id'] = $background_media_id;

        return $this;
    }

    /**
     * Gets background_media_mode
     *
     * @return string|null
     */
    public function getBackgroundMediaMode()
    {
        return $this->container['background_media_mode'];
    }

    /**
     * Sets background_media_mode
     *
     * @param string|null $background_media_mode background_media_mode
     *
     * @return self
     */
    public function setBackgroundMediaMode($background_media_mode)
    {
        $this->container['background_media_mode'] = $background_media_mode;

        return $this;
    }

    /**
     * Gets css_class
     *
     * @return string|null
     */
    public function getCssClass()
    {
        return $this->container['css_class'];
    }

    /**
     * Sets css_class
     *
     * @param string|null $css_class css_class
     *
     * @return self
     */
    public function setCssClass($css_class)
    {
        $this->container['css_class'] = $css_class;

        return $this;
    }

    /**
     * Gets page_id
     *
     * @return string
     */
    public function getPageId()
    {
        return $this->container['page_id'];
    }

    /**
     * Sets page_id
     *
     * @param string $page_id page_id
     *
     * @return self
     */
    public function setPageId($page_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $page_id))) {
            throw new \InvalidArgumentException("invalid value for $page_id when calling CmsSectionJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['page_id'] = $page_id;

        return $this;
    }

    /**
     * Gets visibility
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\CmsBlockJsonApiAllOfVisibility|null
     */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\CmsBlockJsonApiAllOfVisibility|null $visibility visibility
     *
     * @return self
     */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;

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
     * Gets version_id
     *
     * @return string|null
     */
    public function getVersionId()
    {
        return $this->container['version_id'];
    }

    /**
     * Sets version_id
     *
     * @param string|null $version_id version_id
     *
     * @return self
     */
    public function setVersionId($version_id)
    {

        if (!is_null($version_id) && (!preg_match("/^[0-9a-f]{32}$/", $version_id))) {
            throw new \InvalidArgumentException("invalid value for $version_id when calling CmsSectionJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['version_id'] = $version_id;

        return $this;
    }

    /**
     * Gets cms_page_version_id
     *
     * @return string|null
     */
    public function getCmsPageVersionId()
    {
        return $this->container['cms_page_version_id'];
    }

    /**
     * Sets cms_page_version_id
     *
     * @param string|null $cms_page_version_id cms_page_version_id
     *
     * @return self
     */
    public function setCmsPageVersionId($cms_page_version_id)
    {

        if (!is_null($cms_page_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $cms_page_version_id))) {
            throw new \InvalidArgumentException("invalid value for $cms_page_version_id when calling CmsSectionJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['cms_page_version_id'] = $cms_page_version_id;

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


