<?php
/**
 * PromotionJsonApiAllOfRelationships
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
 * PromotionJsonApiAllOfRelationships Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PromotionJsonApiAllOfRelationships implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PromotionJsonApi_allOf_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'setgroups' => '\OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsSetgroups',
        'sales_channels' => '\OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsSalesChannels',
        'discounts' => '\OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsDiscounts',
        'individual_codes' => '\OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsIndividualCodes',
        'persona_rules' => '\OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsPersonaRules',
        'persona_customers' => '\OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsPersonaCustomers',
        'order_rules' => '\OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsOrderRules',
        'cart_rules' => '\OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsCartRules',
        'order_line_items' => '\OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsOrderLineItems'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'setgroups' => null,
        'sales_channels' => null,
        'discounts' => null,
        'individual_codes' => null,
        'persona_rules' => null,
        'persona_customers' => null,
        'order_rules' => null,
        'cart_rules' => null,
        'order_line_items' => null
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
        'setgroups' => 'setgroups',
        'sales_channels' => 'salesChannels',
        'discounts' => 'discounts',
        'individual_codes' => 'individualCodes',
        'persona_rules' => 'personaRules',
        'persona_customers' => 'personaCustomers',
        'order_rules' => 'orderRules',
        'cart_rules' => 'cartRules',
        'order_line_items' => 'orderLineItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'setgroups' => 'setSetgroups',
        'sales_channels' => 'setSalesChannels',
        'discounts' => 'setDiscounts',
        'individual_codes' => 'setIndividualCodes',
        'persona_rules' => 'setPersonaRules',
        'persona_customers' => 'setPersonaCustomers',
        'order_rules' => 'setOrderRules',
        'cart_rules' => 'setCartRules',
        'order_line_items' => 'setOrderLineItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'setgroups' => 'getSetgroups',
        'sales_channels' => 'getSalesChannels',
        'discounts' => 'getDiscounts',
        'individual_codes' => 'getIndividualCodes',
        'persona_rules' => 'getPersonaRules',
        'persona_customers' => 'getPersonaCustomers',
        'order_rules' => 'getOrderRules',
        'cart_rules' => 'getCartRules',
        'order_line_items' => 'getOrderLineItems'
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
        $this->container['setgroups'] = $data['setgroups'] ?? null;
        $this->container['sales_channels'] = $data['sales_channels'] ?? null;
        $this->container['discounts'] = $data['discounts'] ?? null;
        $this->container['individual_codes'] = $data['individual_codes'] ?? null;
        $this->container['persona_rules'] = $data['persona_rules'] ?? null;
        $this->container['persona_customers'] = $data['persona_customers'] ?? null;
        $this->container['order_rules'] = $data['order_rules'] ?? null;
        $this->container['cart_rules'] = $data['cart_rules'] ?? null;
        $this->container['order_line_items'] = $data['order_line_items'] ?? null;
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
     * Gets setgroups
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsSetgroups|null
     */
    public function getSetgroups()
    {
        return $this->container['setgroups'];
    }

    /**
     * Sets setgroups
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsSetgroups|null $setgroups setgroups
     *
     * @return self
     */
    public function setSetgroups($setgroups)
    {
        $this->container['setgroups'] = $setgroups;

        return $this;
    }

    /**
     * Gets sales_channels
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsSalesChannels|null
     */
    public function getSalesChannels()
    {
        return $this->container['sales_channels'];
    }

    /**
     * Sets sales_channels
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsSalesChannels|null $sales_channels sales_channels
     *
     * @return self
     */
    public function setSalesChannels($sales_channels)
    {
        $this->container['sales_channels'] = $sales_channels;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsDiscounts|null
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsDiscounts|null $discounts discounts
     *
     * @return self
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets individual_codes
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsIndividualCodes|null
     */
    public function getIndividualCodes()
    {
        return $this->container['individual_codes'];
    }

    /**
     * Sets individual_codes
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsIndividualCodes|null $individual_codes individual_codes
     *
     * @return self
     */
    public function setIndividualCodes($individual_codes)
    {
        $this->container['individual_codes'] = $individual_codes;

        return $this;
    }

    /**
     * Gets persona_rules
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsPersonaRules|null
     */
    public function getPersonaRules()
    {
        return $this->container['persona_rules'];
    }

    /**
     * Sets persona_rules
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsPersonaRules|null $persona_rules persona_rules
     *
     * @return self
     */
    public function setPersonaRules($persona_rules)
    {
        $this->container['persona_rules'] = $persona_rules;

        return $this;
    }

    /**
     * Gets persona_customers
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsPersonaCustomers|null
     */
    public function getPersonaCustomers()
    {
        return $this->container['persona_customers'];
    }

    /**
     * Sets persona_customers
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsPersonaCustomers|null $persona_customers persona_customers
     *
     * @return self
     */
    public function setPersonaCustomers($persona_customers)
    {
        $this->container['persona_customers'] = $persona_customers;

        return $this;
    }

    /**
     * Gets order_rules
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsOrderRules|null
     */
    public function getOrderRules()
    {
        return $this->container['order_rules'];
    }

    /**
     * Sets order_rules
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsOrderRules|null $order_rules order_rules
     *
     * @return self
     */
    public function setOrderRules($order_rules)
    {
        $this->container['order_rules'] = $order_rules;

        return $this;
    }

    /**
     * Gets cart_rules
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsCartRules|null
     */
    public function getCartRules()
    {
        return $this->container['cart_rules'];
    }

    /**
     * Sets cart_rules
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsCartRules|null $cart_rules cart_rules
     *
     * @return self
     */
    public function setCartRules($cart_rules)
    {
        $this->container['cart_rules'] = $cart_rules;

        return $this;
    }

    /**
     * Gets order_line_items
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsOrderLineItems|null
     */
    public function getOrderLineItems()
    {
        return $this->container['order_line_items'];
    }

    /**
     * Sets order_line_items
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationshipsOrderLineItems|null $order_line_items order_line_items
     *
     * @return self
     */
    public function setOrderLineItems($order_line_items)
    {
        $this->container['order_line_items'] = $order_line_items;

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

