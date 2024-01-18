<?php
/**
 * CustomerAddress
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
 * CustomerAddress Class Doc Comment
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
class CustomerAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'customer_id' => 'string',
        'country_id' => 'string',
        'country_state_id' => 'string',
        'salutation_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'zipcode' => 'string',
        'city' => 'string',
        'company' => 'string',
        'street' => 'string',
        'department' => 'string',
        'title' => 'string',
        'phone_number' => 'string',
        'additional_address_line1' => 'string',
        'additional_address_line2' => 'string',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'customer' => '\OpenAPI\ShopwareAdminApiClient\Model\Customer',
        'country' => '\OpenAPI\ShopwareAdminApiClient\Model\Country',
        'country_state' => '\OpenAPI\ShopwareAdminApiClient\Model\CountryState',
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
        'customer_id' => null,
        'country_id' => null,
        'country_state_id' => null,
        'salutation_id' => null,
        'first_name' => null,
        'last_name' => null,
        'zipcode' => null,
        'city' => null,
        'company' => null,
        'street' => null,
        'department' => null,
        'title' => null,
        'phone_number' => null,
        'additional_address_line1' => null,
        'additional_address_line2' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'customer' => null,
        'country' => null,
        'country_state' => null,
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
        'customer_id' => 'customerId',
        'country_id' => 'countryId',
        'country_state_id' => 'countryStateId',
        'salutation_id' => 'salutationId',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'zipcode' => 'zipcode',
        'city' => 'city',
        'company' => 'company',
        'street' => 'street',
        'department' => 'department',
        'title' => 'title',
        'phone_number' => 'phoneNumber',
        'additional_address_line1' => 'additionalAddressLine1',
        'additional_address_line2' => 'additionalAddressLine2',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'customer' => 'customer',
        'country' => 'country',
        'country_state' => 'countryState',
        'salutation' => 'salutation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'customer_id' => 'setCustomerId',
        'country_id' => 'setCountryId',
        'country_state_id' => 'setCountryStateId',
        'salutation_id' => 'setSalutationId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'zipcode' => 'setZipcode',
        'city' => 'setCity',
        'company' => 'setCompany',
        'street' => 'setStreet',
        'department' => 'setDepartment',
        'title' => 'setTitle',
        'phone_number' => 'setPhoneNumber',
        'additional_address_line1' => 'setAdditionalAddressLine1',
        'additional_address_line2' => 'setAdditionalAddressLine2',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'customer' => 'setCustomer',
        'country' => 'setCountry',
        'country_state' => 'setCountryState',
        'salutation' => 'setSalutation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'customer_id' => 'getCustomerId',
        'country_id' => 'getCountryId',
        'country_state_id' => 'getCountryStateId',
        'salutation_id' => 'getSalutationId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'zipcode' => 'getZipcode',
        'city' => 'getCity',
        'company' => 'getCompany',
        'street' => 'getStreet',
        'department' => 'getDepartment',
        'title' => 'getTitle',
        'phone_number' => 'getPhoneNumber',
        'additional_address_line1' => 'getAdditionalAddressLine1',
        'additional_address_line2' => 'getAdditionalAddressLine2',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'customer' => 'getCustomer',
        'country' => 'getCountry',
        'country_state' => 'getCountryState',
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
        $this->container['customer_id'] = $data['customer_id'] ?? null;
        $this->container['country_id'] = $data['country_id'] ?? null;
        $this->container['country_state_id'] = $data['country_state_id'] ?? null;
        $this->container['salutation_id'] = $data['salutation_id'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['zipcode'] = $data['zipcode'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['company'] = $data['company'] ?? null;
        $this->container['street'] = $data['street'] ?? null;
        $this->container['department'] = $data['department'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['phone_number'] = $data['phone_number'] ?? null;
        $this->container['additional_address_line1'] = $data['additional_address_line1'] ?? null;
        $this->container['additional_address_line2'] = $data['additional_address_line2'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['country_state'] = $data['country_state'] ?? null;
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

        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['customer_id'])) {
            $invalidProperties[] = "invalid value for 'customer_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['country_id'] === null) {
            $invalidProperties[] = "'country_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['country_id'])) {
            $invalidProperties[] = "invalid value for 'country_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if (!is_null($this->container['country_state_id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['country_state_id'])) {
            $invalidProperties[] = "invalid value for 'country_state_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling CustomerAddress., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param string $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $customer_id))) {
            throw new \InvalidArgumentException("invalid value for $customer_id when calling CustomerAddress., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets country_id
     *
     * @return string
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param string $country_id country_id
     *
     * @return self
     */
    public function setCountryId($country_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $country_id))) {
            throw new \InvalidArgumentException("invalid value for $country_id when calling CustomerAddress., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets country_state_id
     *
     * @return string|null
     */
    public function getCountryStateId()
    {
        return $this->container['country_state_id'];
    }

    /**
     * Sets country_state_id
     *
     * @param string|null $country_state_id country_state_id
     *
     * @return self
     */
    public function setCountryStateId($country_state_id)
    {

        if (!is_null($country_state_id) && (!preg_match("/^[0-9a-f]{32}$/", $country_state_id))) {
            throw new \InvalidArgumentException("invalid value for $country_state_id when calling CustomerAddress., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['country_state_id'] = $country_state_id;

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
            throw new \InvalidArgumentException("invalid value for $salutation_id when calling CustomerAddress., must conform to the pattern /^[0-9a-f]{32}$/.");
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
     * Gets zipcode
     *
     * @return string|null
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string|null $zipcode zipcode
     *
     * @return self
     */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

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
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return self
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string|null
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string|null $department department
     *
     * @return self
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

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
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets additional_address_line1
     *
     * @return string|null
     */
    public function getAdditionalAddressLine1()
    {
        return $this->container['additional_address_line1'];
    }

    /**
     * Sets additional_address_line1
     *
     * @param string|null $additional_address_line1 additional_address_line1
     *
     * @return self
     */
    public function setAdditionalAddressLine1($additional_address_line1)
    {
        $this->container['additional_address_line1'] = $additional_address_line1;

        return $this;
    }

    /**
     * Gets additional_address_line2
     *
     * @return string|null
     */
    public function getAdditionalAddressLine2()
    {
        return $this->container['additional_address_line2'];
    }

    /**
     * Sets additional_address_line2
     *
     * @param string|null $additional_address_line2 additional_address_line2
     *
     * @return self
     */
    public function setAdditionalAddressLine2($additional_address_line2)
    {
        $this->container['additional_address_line2'] = $additional_address_line2;

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
     * Gets country
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Country|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Country|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_state
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\CountryState|null
     */
    public function getCountryState()
    {
        return $this->container['country_state'];
    }

    /**
     * Sets country_state
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\CountryState|null $country_state country_state
     *
     * @return self
     */
    public function setCountryState($country_state)
    {
        $this->container['country_state'] = $country_state;

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


