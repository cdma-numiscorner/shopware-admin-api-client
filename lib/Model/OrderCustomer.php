<?php
/**
 * OrderCustomer
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
 * OrderCustomer Class Doc Comment
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
class OrderCustomer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderCustomer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'version_id' => 'string',
        'customer_id' => 'string',
        'order_id' => 'string',
        'order_version_id' => 'string',
        'email' => 'string',
        'salutation_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'company' => 'string',
        'title' => 'string',
        'vat_ids' => 'string[]',
        'customer_number' => 'string',
        'custom_fields' => 'object',
        'remote_address' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'order' => '\OpenAPI\ShopwareAdminApiClient\Model\Order',
        'customer' => '\OpenAPI\ShopwareAdminApiClient\Model\Customer',
        'salutation' => '\OpenAPI\ShopwareAdminApiClient\Model\Salutation'
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
        'version_id' => null,
        'customer_id' => null,
        'order_id' => null,
        'order_version_id' => null,
        'email' => null,
        'salutation_id' => null,
        'first_name' => null,
        'last_name' => null,
        'company' => null,
        'title' => null,
        'vat_ids' => null,
        'customer_number' => null,
        'custom_fields' => null,
        'remote_address' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'order' => null,
        'customer' => null,
        'salutation' => null
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
        'version_id' => 'versionId',
        'customer_id' => 'customerId',
        'order_id' => 'orderId',
        'order_version_id' => 'orderVersionId',
        'email' => 'email',
        'salutation_id' => 'salutationId',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'company' => 'company',
        'title' => 'title',
        'vat_ids' => 'vatIds',
        'customer_number' => 'customerNumber',
        'custom_fields' => 'customFields',
        'remote_address' => 'remoteAddress',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'order' => 'order',
        'customer' => 'customer',
        'salutation' => 'salutation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'version_id' => 'setVersionId',
        'customer_id' => 'setCustomerId',
        'order_id' => 'setOrderId',
        'order_version_id' => 'setOrderVersionId',
        'email' => 'setEmail',
        'salutation_id' => 'setSalutationId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'company' => 'setCompany',
        'title' => 'setTitle',
        'vat_ids' => 'setVatIds',
        'customer_number' => 'setCustomerNumber',
        'custom_fields' => 'setCustomFields',
        'remote_address' => 'setRemoteAddress',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'order' => 'setOrder',
        'customer' => 'setCustomer',
        'salutation' => 'setSalutation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'version_id' => 'getVersionId',
        'customer_id' => 'getCustomerId',
        'order_id' => 'getOrderId',
        'order_version_id' => 'getOrderVersionId',
        'email' => 'getEmail',
        'salutation_id' => 'getSalutationId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'company' => 'getCompany',
        'title' => 'getTitle',
        'vat_ids' => 'getVatIds',
        'customer_number' => 'getCustomerNumber',
        'custom_fields' => 'getCustomFields',
        'remote_address' => 'getRemoteAddress',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'order' => 'getOrder',
        'customer' => 'getCustomer',
        'salutation' => 'getSalutation'
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
        $this->container['version_id'] = $data['version_id'] ?? null;
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['order_version_id'] = $data['order_version_id'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['salutation_id'] = $data['salutation_id'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['company'] = $data['company'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['vat_ids'] = $data['vat_ids'] ?? null;
        $this->container['customer_number'] = $data['customer_number'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['remote_address'] = $data['remote_address'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['order'] = $data['order'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['salutation'] = $data['salutation'] ?? null;
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

        if (!is_null($this->container['version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['version_id'])) {
            $invalidProperties[] = "invalid value for 'version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['customer_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['customer_id'])) {
            $invalidProperties[] = "invalid value for 'customer_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['order_id'])) {
            $invalidProperties[] = "invalid value for 'order_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['order_version_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['order_version_id'])) {
            $invalidProperties[] = "invalid value for 'order_version_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if (!is_null($this->container['salutation_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['salutation_id'])) {
            $invalidProperties[] = "invalid value for 'salutation_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling OrderCustomer., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

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
            throw new \InvalidArgumentException("invalid value for $version_id when calling OrderCustomer., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['version_id'] = $version_id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string|null $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {

        if (!is_null($customer_id) && (!preg_match("/^[0-9a-f]{32}$/", $customer_id))) {
            throw new \InvalidArgumentException("invalid value for $customer_id when calling OrderCustomer., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['customer_id'] = $customer_id;

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
            throw new \InvalidArgumentException("invalid value for $order_id when calling OrderCustomer., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_id'] = $order_id;

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
            throw new \InvalidArgumentException("invalid value for $order_version_id when calling OrderCustomer., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['order_version_id'] = $order_version_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets salutation_id
     *
     * @return string|null
     */
    public function getSalutationId()
    {
        return $this->container['salutation_id'];
    }

    /**
     * Sets salutation_id
     *
     * @param string|null $salutation_id salutation_id
     *
     * @return self
     */
    public function setSalutationId($salutation_id)
    {

        if (!is_null($salutation_id) && (!preg_match("/^[0-9a-f]{32}$/", $salutation_id))) {
            throw new \InvalidArgumentException("invalid value for $salutation_id when calling OrderCustomer., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['salutation_id'] = $salutation_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets vat_ids
     *
     * @return string[]|null
     */
    public function getVatIds()
    {
        return $this->container['vat_ids'];
    }

    /**
     * Sets vat_ids
     *
     * @param string[]|null $vat_ids vat_ids
     *
     * @return self
     */
    public function setVatIds($vat_ids)
    {
        $this->container['vat_ids'] = $vat_ids;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return string|null
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param string|null $customer_number customer_number
     *
     * @return self
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

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
     * Gets remote_address
     *
     * @return string|null
     */
    public function getRemoteAddress()
    {
        return $this->container['remote_address'];
    }

    /**
     * Sets remote_address
     *
     * @param string|null $remote_address remote_address
     *
     * @return self
     */
    public function setRemoteAddress($remote_address)
    {
        $this->container['remote_address'] = $remote_address;

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
     * Gets order
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Order|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Order|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Customer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Customer|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Salutation|null
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Salutation|null $salutation salutation
     *
     * @return self
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

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


