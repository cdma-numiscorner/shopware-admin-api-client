<?php
/**
 * AppJsonApiAllOfRelationships
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
 * AppJsonApiAllOfRelationships Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class AppJsonApiAllOfRelationships implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppJsonApi_allOf_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'integration' => '\OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsIntegration',
        'acl_role' => '\OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsAclRole',
        'custom_field_sets' => '\OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsCustomFieldSets',
        'action_buttons' => '\OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsActionButtons',
        'templates' => '\OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsTemplates',
        'webhooks' => '\OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsWebhooks',
        'payment_methods' => '\OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsPaymentMethods',
        'tax_providers' => '\OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsTaxProviders',
        'cms_blocks' => '\OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsCmsBlocks',
        'flow_actions' => '\OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsFlowActions',
        'flow_events' => '\OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsFlowEvents',
        'app_shipping_methods' => '\OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsAppShippingMethods'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'integration' => null,
        'acl_role' => null,
        'custom_field_sets' => null,
        'action_buttons' => null,
        'templates' => null,
        'webhooks' => null,
        'payment_methods' => null,
        'tax_providers' => null,
        'cms_blocks' => null,
        'flow_actions' => null,
        'flow_events' => null,
        'app_shipping_methods' => null
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
        'integration' => 'integration',
        'acl_role' => 'aclRole',
        'custom_field_sets' => 'customFieldSets',
        'action_buttons' => 'actionButtons',
        'templates' => 'templates',
        'webhooks' => 'webhooks',
        'payment_methods' => 'paymentMethods',
        'tax_providers' => 'taxProviders',
        'cms_blocks' => 'cmsBlocks',
        'flow_actions' => 'flowActions',
        'flow_events' => 'flowEvents',
        'app_shipping_methods' => 'appShippingMethods'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integration' => 'setIntegration',
        'acl_role' => 'setAclRole',
        'custom_field_sets' => 'setCustomFieldSets',
        'action_buttons' => 'setActionButtons',
        'templates' => 'setTemplates',
        'webhooks' => 'setWebhooks',
        'payment_methods' => 'setPaymentMethods',
        'tax_providers' => 'setTaxProviders',
        'cms_blocks' => 'setCmsBlocks',
        'flow_actions' => 'setFlowActions',
        'flow_events' => 'setFlowEvents',
        'app_shipping_methods' => 'setAppShippingMethods'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integration' => 'getIntegration',
        'acl_role' => 'getAclRole',
        'custom_field_sets' => 'getCustomFieldSets',
        'action_buttons' => 'getActionButtons',
        'templates' => 'getTemplates',
        'webhooks' => 'getWebhooks',
        'payment_methods' => 'getPaymentMethods',
        'tax_providers' => 'getTaxProviders',
        'cms_blocks' => 'getCmsBlocks',
        'flow_actions' => 'getFlowActions',
        'flow_events' => 'getFlowEvents',
        'app_shipping_methods' => 'getAppShippingMethods'
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
        $this->container['integration'] = $data['integration'] ?? null;
        $this->container['acl_role'] = $data['acl_role'] ?? null;
        $this->container['custom_field_sets'] = $data['custom_field_sets'] ?? null;
        $this->container['action_buttons'] = $data['action_buttons'] ?? null;
        $this->container['templates'] = $data['templates'] ?? null;
        $this->container['webhooks'] = $data['webhooks'] ?? null;
        $this->container['payment_methods'] = $data['payment_methods'] ?? null;
        $this->container['tax_providers'] = $data['tax_providers'] ?? null;
        $this->container['cms_blocks'] = $data['cms_blocks'] ?? null;
        $this->container['flow_actions'] = $data['flow_actions'] ?? null;
        $this->container['flow_events'] = $data['flow_events'] ?? null;
        $this->container['app_shipping_methods'] = $data['app_shipping_methods'] ?? null;
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
     * Gets integration
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsIntegration|null
     */
    public function getIntegration()
    {
        return $this->container['integration'];
    }

    /**
     * Sets integration
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsIntegration|null $integration integration
     *
     * @return self
     */
    public function setIntegration($integration)
    {
        $this->container['integration'] = $integration;

        return $this;
    }

    /**
     * Gets acl_role
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsAclRole|null
     */
    public function getAclRole()
    {
        return $this->container['acl_role'];
    }

    /**
     * Sets acl_role
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsAclRole|null $acl_role acl_role
     *
     * @return self
     */
    public function setAclRole($acl_role)
    {
        $this->container['acl_role'] = $acl_role;

        return $this;
    }

    /**
     * Gets custom_field_sets
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsCustomFieldSets|null
     */
    public function getCustomFieldSets()
    {
        return $this->container['custom_field_sets'];
    }

    /**
     * Sets custom_field_sets
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsCustomFieldSets|null $custom_field_sets custom_field_sets
     *
     * @return self
     */
    public function setCustomFieldSets($custom_field_sets)
    {
        $this->container['custom_field_sets'] = $custom_field_sets;

        return $this;
    }

    /**
     * Gets action_buttons
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsActionButtons|null
     */
    public function getActionButtons()
    {
        return $this->container['action_buttons'];
    }

    /**
     * Sets action_buttons
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsActionButtons|null $action_buttons action_buttons
     *
     * @return self
     */
    public function setActionButtons($action_buttons)
    {
        $this->container['action_buttons'] = $action_buttons;

        return $this;
    }

    /**
     * Gets templates
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsTemplates|null
     */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
     * Sets templates
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsTemplates|null $templates templates
     *
     * @return self
     */
    public function setTemplates($templates)
    {
        $this->container['templates'] = $templates;

        return $this;
    }

    /**
     * Gets webhooks
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsWebhooks|null
     */
    public function getWebhooks()
    {
        return $this->container['webhooks'];
    }

    /**
     * Sets webhooks
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsWebhooks|null $webhooks webhooks
     *
     * @return self
     */
    public function setWebhooks($webhooks)
    {
        $this->container['webhooks'] = $webhooks;

        return $this;
    }

    /**
     * Gets payment_methods
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsPaymentMethods|null
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsPaymentMethods|null $payment_methods payment_methods
     *
     * @return self
     */
    public function setPaymentMethods($payment_methods)
    {
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets tax_providers
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsTaxProviders|null
     */
    public function getTaxProviders()
    {
        return $this->container['tax_providers'];
    }

    /**
     * Sets tax_providers
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsTaxProviders|null $tax_providers tax_providers
     *
     * @return self
     */
    public function setTaxProviders($tax_providers)
    {
        $this->container['tax_providers'] = $tax_providers;

        return $this;
    }

    /**
     * Gets cms_blocks
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsCmsBlocks|null
     */
    public function getCmsBlocks()
    {
        return $this->container['cms_blocks'];
    }

    /**
     * Sets cms_blocks
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsCmsBlocks|null $cms_blocks cms_blocks
     *
     * @return self
     */
    public function setCmsBlocks($cms_blocks)
    {
        $this->container['cms_blocks'] = $cms_blocks;

        return $this;
    }

    /**
     * Gets flow_actions
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsFlowActions|null
     */
    public function getFlowActions()
    {
        return $this->container['flow_actions'];
    }

    /**
     * Sets flow_actions
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsFlowActions|null $flow_actions flow_actions
     *
     * @return self
     */
    public function setFlowActions($flow_actions)
    {
        $this->container['flow_actions'] = $flow_actions;

        return $this;
    }

    /**
     * Gets flow_events
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsFlowEvents|null
     */
    public function getFlowEvents()
    {
        return $this->container['flow_events'];
    }

    /**
     * Sets flow_events
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsFlowEvents|null $flow_events flow_events
     *
     * @return self
     */
    public function setFlowEvents($flow_events)
    {
        $this->container['flow_events'] = $flow_events;

        return $this;
    }

    /**
     * Gets app_shipping_methods
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsAppShippingMethods|null
     */
    public function getAppShippingMethods()
    {
        return $this->container['app_shipping_methods'];
    }

    /**
     * Sets app_shipping_methods
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppJsonApiAllOfRelationshipsAppShippingMethods|null $app_shipping_methods app_shipping_methods
     *
     * @return self
     */
    public function setAppShippingMethods($app_shipping_methods)
    {
        $this->container['app_shipping_methods'] = $app_shipping_methods;

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

