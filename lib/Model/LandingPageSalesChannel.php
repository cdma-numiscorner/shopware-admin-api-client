<?php
/**
 * LandingPageSalesChannel
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
 * LandingPageSalesChannel Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.4.0.0
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class LandingPageSalesChannel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LandingPageSalesChannel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'landing_page_id' => 'string',
        'landing_page_version_id' => 'string',
        'sales_channel_id' => 'string',
        'landing_page' => '\OpenAPI\ShopwareAdminApiClient\Model\LandingPage',
        'sales_channel' => '\OpenAPI\ShopwareAdminApiClient\Model\SalesChannel'
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
        'landing_page_id' => null,
        'landing_page_version_id' => null,
        'sales_channel_id' => null,
        'landing_page' => null,
        'sales_channel' => null
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
        'landing_page_id' => 'landingPageId',
        'landing_page_version_id' => 'landingPageVersionId',
        'sales_channel_id' => 'salesChannelId',
        'landing_page' => 'landingPage',
        'sales_channel' => 'salesChannel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'landing_page_id' => 'setLandingPageId',
        'landing_page_version_id' => 'setLandingPageVersionId',
        'sales_channel_id' => 'setSalesChannelId',
        'landing_page' => 'setLandingPage',
        'sales_channel' => 'setSalesChannel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'landing_page_id' => 'getLandingPageId',
        'landing_page_version_id' => 'getLandingPageVersionId',
        'sales_channel_id' => 'getSalesChannelId',
        'landing_page' => 'getLandingPage',
        'sales_channel' => 'getSalesChannel'
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
        $this->container['landing_page_id'] = $data['landing_page_id'] ?? null;
        $this->container['landing_page_version_id'] = $data['landing_page_version_id'] ?? null;
        $this->container['sales_channel_id'] = $data['sales_channel_id'] ?? null;
        $this->container['landing_page'] = $data['landing_page'] ?? null;
        $this->container['sales_channel'] = $data['sales_channel'] ?? null;
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

        if ($this->container['landing_page_id'] === null) {
            $invalidProperties[] = "'landing_page_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['landing_page_id'])) {
            $invalidProperties[] = "invalid value for 'landing_page_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['landing_page_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['landing_page_version_id'])) {
            $invalidProperties[] = "invalid value for 'landing_page_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['sales_channel_id'] === null) {
            $invalidProperties[] = "'sales_channel_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['sales_channel_id'])) {
            $invalidProperties[] = "invalid value for 'sales_channel_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling LandingPageSalesChannel., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets landing_page_id
     *
     * @return string
     */
    public function getLandingPageId()
    {
        return $this->container['landing_page_id'];
    }

    /**
     * Sets landing_page_id
     *
     * @param string $landing_page_id landing_page_id
     *
     * @return self
     */
    public function setLandingPageId($landing_page_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $landing_page_id))) {
            throw new \InvalidArgumentException("invalid value for $landing_page_id when calling LandingPageSalesChannel., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['landing_page_id'] = $landing_page_id;

        return $this;
    }

    /**
     * Gets landing_page_version_id
     *
     * @return string|null
     */
    public function getLandingPageVersionId()
    {
        return $this->container['landing_page_version_id'];
    }

    /**
     * Sets landing_page_version_id
     *
     * @param string|null $landing_page_version_id landing_page_version_id
     *
     * @return self
     */
    public function setLandingPageVersionId($landing_page_version_id)
    {

        if (!is_null($landing_page_version_id) && (!preg_match("/^[0-9a-f]{32}$/", $landing_page_version_id))) {
            throw new \InvalidArgumentException("invalid value for $landing_page_version_id when calling LandingPageSalesChannel., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['landing_page_version_id'] = $landing_page_version_id;

        return $this;
    }

    /**
     * Gets sales_channel_id
     *
     * @return string
     */
    public function getSalesChannelId()
    {
        return $this->container['sales_channel_id'];
    }

    /**
     * Sets sales_channel_id
     *
     * @param string $sales_channel_id sales_channel_id
     *
     * @return self
     */
    public function setSalesChannelId($sales_channel_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $sales_channel_id))) {
            throw new \InvalidArgumentException("invalid value for $sales_channel_id when calling LandingPageSalesChannel., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['sales_channel_id'] = $sales_channel_id;

        return $this;
    }

    /**
     * Gets landing_page
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\LandingPage|null
     */
    public function getLandingPage()
    {
        return $this->container['landing_page'];
    }

    /**
     * Sets landing_page
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\LandingPage|null $landing_page landing_page
     *
     * @return self
     */
    public function setLandingPage($landing_page)
    {
        $this->container['landing_page'] = $landing_page;

        return $this;
    }

    /**
     * Gets sales_channel
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\SalesChannel|null
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\SalesChannel|null $sales_channel sales_channel
     *
     * @return self
     */
    public function setSalesChannel($sales_channel)
    {
        $this->container['sales_channel'] = $sales_channel;

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


