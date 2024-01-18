<?php
/**
 * OrderJsonApiAllOfRelationships
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
 * OrderJsonApiAllOfRelationships Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderJsonApiAllOfRelationships implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderJsonApi_allOf_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'state_machine_state' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsStateMachineState',
        'order_customer' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsOrderCustomer',
        'currency' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsCurrency',
        'language' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsLanguage',
        'sales_channel' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsSalesChannel',
        'addresses' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsAddresses',
        'billing_address' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsBillingAddress',
        'deliveries' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsDeliveries',
        'line_items' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsLineItems',
        'transactions' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsTransactions',
        'documents' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsDocuments',
        'tags' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsTags',
        'created_by' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsCreatedBy',
        'updated_by' => '\OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsUpdatedBy'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'state_machine_state' => null,
        'order_customer' => null,
        'currency' => null,
        'language' => null,
        'sales_channel' => null,
        'addresses' => null,
        'billing_address' => null,
        'deliveries' => null,
        'line_items' => null,
        'transactions' => null,
        'documents' => null,
        'tags' => null,
        'created_by' => null,
        'updated_by' => null
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
        'state_machine_state' => 'stateMachineState',
        'order_customer' => 'orderCustomer',
        'currency' => 'currency',
        'language' => 'language',
        'sales_channel' => 'salesChannel',
        'addresses' => 'addresses',
        'billing_address' => 'billingAddress',
        'deliveries' => 'deliveries',
        'line_items' => 'lineItems',
        'transactions' => 'transactions',
        'documents' => 'documents',
        'tags' => 'tags',
        'created_by' => 'createdBy',
        'updated_by' => 'updatedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'state_machine_state' => 'setStateMachineState',
        'order_customer' => 'setOrderCustomer',
        'currency' => 'setCurrency',
        'language' => 'setLanguage',
        'sales_channel' => 'setSalesChannel',
        'addresses' => 'setAddresses',
        'billing_address' => 'setBillingAddress',
        'deliveries' => 'setDeliveries',
        'line_items' => 'setLineItems',
        'transactions' => 'setTransactions',
        'documents' => 'setDocuments',
        'tags' => 'setTags',
        'created_by' => 'setCreatedBy',
        'updated_by' => 'setUpdatedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'state_machine_state' => 'getStateMachineState',
        'order_customer' => 'getOrderCustomer',
        'currency' => 'getCurrency',
        'language' => 'getLanguage',
        'sales_channel' => 'getSalesChannel',
        'addresses' => 'getAddresses',
        'billing_address' => 'getBillingAddress',
        'deliveries' => 'getDeliveries',
        'line_items' => 'getLineItems',
        'transactions' => 'getTransactions',
        'documents' => 'getDocuments',
        'tags' => 'getTags',
        'created_by' => 'getCreatedBy',
        'updated_by' => 'getUpdatedBy'
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
        $this->container['state_machine_state'] = $data['state_machine_state'] ?? null;
        $this->container['order_customer'] = $data['order_customer'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['sales_channel'] = $data['sales_channel'] ?? null;
        $this->container['addresses'] = $data['addresses'] ?? null;
        $this->container['billing_address'] = $data['billing_address'] ?? null;
        $this->container['deliveries'] = $data['deliveries'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['transactions'] = $data['transactions'] ?? null;
        $this->container['documents'] = $data['documents'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['updated_by'] = $data['updated_by'] ?? null;
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
     * Gets state_machine_state
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsStateMachineState|null
     */
    public function getStateMachineState()
    {
        return $this->container['state_machine_state'];
    }

    /**
     * Sets state_machine_state
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsStateMachineState|null $state_machine_state state_machine_state
     *
     * @return self
     */
    public function setStateMachineState($state_machine_state)
    {
        $this->container['state_machine_state'] = $state_machine_state;

        return $this;
    }

    /**
     * Gets order_customer
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsOrderCustomer|null
     */
    public function getOrderCustomer()
    {
        return $this->container['order_customer'];
    }

    /**
     * Sets order_customer
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsOrderCustomer|null $order_customer order_customer
     *
     * @return self
     */
    public function setOrderCustomer($order_customer)
    {
        $this->container['order_customer'] = $order_customer;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsCurrency|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsCurrency|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets language
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsLanguage|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsLanguage|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets sales_channel
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsSalesChannel|null
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsSalesChannel|null $sales_channel sales_channel
     *
     * @return self
     */
    public function setSalesChannel($sales_channel)
    {
        $this->container['sales_channel'] = $sales_channel;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsAddresses|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsAddresses|null $addresses addresses
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsBillingAddress|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsBillingAddress|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets deliveries
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsDeliveries|null
     */
    public function getDeliveries()
    {
        return $this->container['deliveries'];
    }

    /**
     * Sets deliveries
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsDeliveries|null $deliveries deliveries
     *
     * @return self
     */
    public function setDeliveries($deliveries)
    {
        $this->container['deliveries'] = $deliveries;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsLineItems|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsLineItems|null $line_items line_items
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsTransactions|null
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsTransactions|null $transactions transactions
     *
     * @return self
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsDocuments|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsDocuments|null $documents documents
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsTags|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsTags|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsCreatedBy|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsCreatedBy|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets updated_by
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsUpdatedBy|null
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\OrderJsonApiAllOfRelationshipsUpdatedBy|null $updated_by updated_by
     *
     * @return self
     */
    public function setUpdatedBy($updated_by)
    {
        $this->container['updated_by'] = $updated_by;

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


