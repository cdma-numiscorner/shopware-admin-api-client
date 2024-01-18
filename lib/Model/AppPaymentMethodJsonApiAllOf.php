<?php
/**
 * AppPaymentMethodJsonApiAllOf
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
 * AppPaymentMethodJsonApiAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AppPaymentMethodJsonApiAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppPaymentMethodJsonApi_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'app_name' => 'string',
        'identifier' => 'string',
        'pay_url' => 'string',
        'finalize_url' => 'string',
        'validate_url' => 'string',
        'capture_url' => 'string',
        'refund_url' => 'string',
        'recurring_url' => 'string',
        'app_id' => 'string',
        'original_media_id' => 'string',
        'payment_method_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'relationships' => '\OpenAPI\ShopwareAdminApiClient\Model\AppPaymentMethodJsonApiAllOfRelationships'
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
        'app_name' => null,
        'identifier' => null,
        'pay_url' => null,
        'finalize_url' => null,
        'validate_url' => null,
        'capture_url' => null,
        'refund_url' => null,
        'recurring_url' => null,
        'app_id' => null,
        'original_media_id' => null,
        'payment_method_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'relationships' => null
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
        'app_name' => 'appName',
        'identifier' => 'identifier',
        'pay_url' => 'payUrl',
        'finalize_url' => 'finalizeUrl',
        'validate_url' => 'validateUrl',
        'capture_url' => 'captureUrl',
        'refund_url' => 'refundUrl',
        'recurring_url' => 'recurringUrl',
        'app_id' => 'appId',
        'original_media_id' => 'originalMediaId',
        'payment_method_id' => 'paymentMethodId',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'relationships' => 'relationships'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'app_name' => 'setAppName',
        'identifier' => 'setIdentifier',
        'pay_url' => 'setPayUrl',
        'finalize_url' => 'setFinalizeUrl',
        'validate_url' => 'setValidateUrl',
        'capture_url' => 'setCaptureUrl',
        'refund_url' => 'setRefundUrl',
        'recurring_url' => 'setRecurringUrl',
        'app_id' => 'setAppId',
        'original_media_id' => 'setOriginalMediaId',
        'payment_method_id' => 'setPaymentMethodId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'relationships' => 'setRelationships'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'app_name' => 'getAppName',
        'identifier' => 'getIdentifier',
        'pay_url' => 'getPayUrl',
        'finalize_url' => 'getFinalizeUrl',
        'validate_url' => 'getValidateUrl',
        'capture_url' => 'getCaptureUrl',
        'refund_url' => 'getRefundUrl',
        'recurring_url' => 'getRecurringUrl',
        'app_id' => 'getAppId',
        'original_media_id' => 'getOriginalMediaId',
        'payment_method_id' => 'getPaymentMethodId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'relationships' => 'getRelationships'
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
        $this->container['app_name'] = $data['app_name'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['pay_url'] = $data['pay_url'] ?? null;
        $this->container['finalize_url'] = $data['finalize_url'] ?? null;
        $this->container['validate_url'] = $data['validate_url'] ?? null;
        $this->container['capture_url'] = $data['capture_url'] ?? null;
        $this->container['refund_url'] = $data['refund_url'] ?? null;
        $this->container['recurring_url'] = $data['recurring_url'] ?? null;
        $this->container['app_id'] = $data['app_id'] ?? null;
        $this->container['original_media_id'] = $data['original_media_id'] ?? null;
        $this->container['payment_method_id'] = $data['payment_method_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['relationships'] = $data['relationships'] ?? null;
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

        if ($this->container['app_name'] === null) {
            $invalidProperties[] = "'app_name' can't be null";
        }
        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if (!is_null($this->container['app_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['app_id'])) {
            $invalidProperties[] = "invalid value for 'app_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['original_media_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['original_media_id'])) {
            $invalidProperties[] = "invalid value for 'original_media_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['payment_method_id'] === null) {
            $invalidProperties[] = "'payment_method_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['payment_method_id'])) {
            $invalidProperties[] = "invalid value for 'payment_method_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling AppPaymentMethodJsonApiAllOf., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets app_name
     *
     * @return string
     */
    public function getAppName()
    {
        return $this->container['app_name'];
    }

    /**
     * Sets app_name
     *
     * @param string $app_name app_name
     *
     * @return self
     */
    public function setAppName($app_name)
    {
        $this->container['app_name'] = $app_name;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier identifier
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets pay_url
     *
     * @return string|null
     */
    public function getPayUrl()
    {
        return $this->container['pay_url'];
    }

    /**
     * Sets pay_url
     *
     * @param string|null $pay_url pay_url
     *
     * @return self
     */
    public function setPayUrl($pay_url)
    {
        $this->container['pay_url'] = $pay_url;

        return $this;
    }

    /**
     * Gets finalize_url
     *
     * @return string|null
     */
    public function getFinalizeUrl()
    {
        return $this->container['finalize_url'];
    }

    /**
     * Sets finalize_url
     *
     * @param string|null $finalize_url finalize_url
     *
     * @return self
     */
    public function setFinalizeUrl($finalize_url)
    {
        $this->container['finalize_url'] = $finalize_url;

        return $this;
    }

    /**
     * Gets validate_url
     *
     * @return string|null
     */
    public function getValidateUrl()
    {
        return $this->container['validate_url'];
    }

    /**
     * Sets validate_url
     *
     * @param string|null $validate_url validate_url
     *
     * @return self
     */
    public function setValidateUrl($validate_url)
    {
        $this->container['validate_url'] = $validate_url;

        return $this;
    }

    /**
     * Gets capture_url
     *
     * @return string|null
     */
    public function getCaptureUrl()
    {
        return $this->container['capture_url'];
    }

    /**
     * Sets capture_url
     *
     * @param string|null $capture_url capture_url
     *
     * @return self
     */
    public function setCaptureUrl($capture_url)
    {
        $this->container['capture_url'] = $capture_url;

        return $this;
    }

    /**
     * Gets refund_url
     *
     * @return string|null
     */
    public function getRefundUrl()
    {
        return $this->container['refund_url'];
    }

    /**
     * Sets refund_url
     *
     * @param string|null $refund_url refund_url
     *
     * @return self
     */
    public function setRefundUrl($refund_url)
    {
        $this->container['refund_url'] = $refund_url;

        return $this;
    }

    /**
     * Gets recurring_url
     *
     * @return string|null
     */
    public function getRecurringUrl()
    {
        return $this->container['recurring_url'];
    }

    /**
     * Sets recurring_url
     *
     * @param string|null $recurring_url recurring_url
     *
     * @return self
     */
    public function setRecurringUrl($recurring_url)
    {
        $this->container['recurring_url'] = $recurring_url;

        return $this;
    }

    /**
     * Gets app_id
     *
     * @return string|null
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string|null $app_id app_id
     *
     * @return self
     */
    public function setAppId($app_id)
    {

        if (!is_null($app_id) && (!preg_match("/^[0-9a-f]{32}$/", $app_id))) {
            throw new \InvalidArgumentException("invalid value for $app_id when calling AppPaymentMethodJsonApiAllOf., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets original_media_id
     *
     * @return string|null
     */
    public function getOriginalMediaId()
    {
        return $this->container['original_media_id'];
    }

    /**
     * Sets original_media_id
     *
     * @param string|null $original_media_id original_media_id
     *
     * @return self
     */
    public function setOriginalMediaId($original_media_id)
    {

        if (!is_null($original_media_id) && (!preg_match("/^[0-9a-f]{32}$/", $original_media_id))) {
            throw new \InvalidArgumentException("invalid value for $original_media_id when calling AppPaymentMethodJsonApiAllOf., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['original_media_id'] = $original_media_id;

        return $this;
    }

    /**
     * Gets payment_method_id
     *
     * @return string
     */
    public function getPaymentMethodId()
    {
        return $this->container['payment_method_id'];
    }

    /**
     * Sets payment_method_id
     *
     * @param string $payment_method_id payment_method_id
     *
     * @return self
     */
    public function setPaymentMethodId($payment_method_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $payment_method_id))) {
            throw new \InvalidArgumentException("invalid value for $payment_method_id when calling AppPaymentMethodJsonApiAllOf., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['payment_method_id'] = $payment_method_id;

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
     * Gets relationships
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppPaymentMethodJsonApiAllOfRelationships|null
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppPaymentMethodJsonApiAllOfRelationships|null $relationships relationships
     *
     * @return self
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

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

