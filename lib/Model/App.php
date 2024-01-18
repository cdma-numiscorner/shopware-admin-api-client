<?php
/**
 * App
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
 * App Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.3.1.0
 * @package  OpenAPI\ShopwareAdminApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class App implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'App';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'path' => 'string',
        'author' => 'string',
        'copyright' => 'string',
        'license' => 'string',
        'active' => 'bool',
        'configurable' => 'bool',
        'privacy' => 'string',
        'version' => 'string',
        'icon' => 'string',
        'modules' => 'object[]',
        'main_module' => 'object',
        'cookies' => 'object[]',
        'allow_disable' => 'bool',
        'base_app_url' => 'string',
        'allowed_hosts' => 'string[]',
        'template_load_priority' => 'int',
        'label' => 'string',
        'description' => 'string',
        'privacy_policy_extensions' => 'string',
        'custom_fields' => 'object',
        'integration_id' => 'string',
        'acl_role_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'translated' => 'object',
        'integration' => '\OpenAPI\ShopwareAdminApiClient\Model\Integration',
        'acl_role' => '\OpenAPI\ShopwareAdminApiClient\Model\AclRole',
        'custom_field_sets' => '\OpenAPI\ShopwareAdminApiClient\Model\CustomFieldSet[]',
        'action_buttons' => '\OpenAPI\ShopwareAdminApiClient\Model\AppActionButton[]',
        'templates' => '\OpenAPI\ShopwareAdminApiClient\Model\AppTemplate[]',
        'webhooks' => '\OpenAPI\ShopwareAdminApiClient\Model\Webhook[]',
        'payment_methods' => '\OpenAPI\ShopwareAdminApiClient\Model\AppPaymentMethod[]',
        'tax_providers' => '\OpenAPI\ShopwareAdminApiClient\Model\TaxProvider[]',
        'cms_blocks' => '\OpenAPI\ShopwareAdminApiClient\Model\AppCmsBlock[]',
        'flow_actions' => '\OpenAPI\ShopwareAdminApiClient\Model\AppFlowAction[]',
        'flow_events' => '\OpenAPI\ShopwareAdminApiClient\Model\AppFlowEvent[]',
        'app_shipping_methods' => '\OpenAPI\ShopwareAdminApiClient\Model\AppShippingMethod[]'
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
        'name' => null,
        'path' => null,
        'author' => null,
        'copyright' => null,
        'license' => null,
        'active' => null,
        'configurable' => null,
        'privacy' => null,
        'version' => null,
        'icon' => null,
        'modules' => null,
        'main_module' => null,
        'cookies' => null,
        'allow_disable' => null,
        'base_app_url' => null,
        'allowed_hosts' => null,
        'template_load_priority' => 'int64',
        'label' => null,
        'description' => null,
        'privacy_policy_extensions' => null,
        'custom_fields' => null,
        'integration_id' => null,
        'acl_role_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'translated' => null,
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
        'id' => 'id',
        'name' => 'name',
        'path' => 'path',
        'author' => 'author',
        'copyright' => 'copyright',
        'license' => 'license',
        'active' => 'active',
        'configurable' => 'configurable',
        'privacy' => 'privacy',
        'version' => 'version',
        'icon' => 'icon',
        'modules' => 'modules',
        'main_module' => 'mainModule',
        'cookies' => 'cookies',
        'allow_disable' => 'allowDisable',
        'base_app_url' => 'baseAppUrl',
        'allowed_hosts' => 'allowedHosts',
        'template_load_priority' => 'templateLoadPriority',
        'label' => 'label',
        'description' => 'description',
        'privacy_policy_extensions' => 'privacyPolicyExtensions',
        'custom_fields' => 'customFields',
        'integration_id' => 'integrationId',
        'acl_role_id' => 'aclRoleId',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'translated' => 'translated',
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
        'id' => 'setId',
        'name' => 'setName',
        'path' => 'setPath',
        'author' => 'setAuthor',
        'copyright' => 'setCopyright',
        'license' => 'setLicense',
        'active' => 'setActive',
        'configurable' => 'setConfigurable',
        'privacy' => 'setPrivacy',
        'version' => 'setVersion',
        'icon' => 'setIcon',
        'modules' => 'setModules',
        'main_module' => 'setMainModule',
        'cookies' => 'setCookies',
        'allow_disable' => 'setAllowDisable',
        'base_app_url' => 'setBaseAppUrl',
        'allowed_hosts' => 'setAllowedHosts',
        'template_load_priority' => 'setTemplateLoadPriority',
        'label' => 'setLabel',
        'description' => 'setDescription',
        'privacy_policy_extensions' => 'setPrivacyPolicyExtensions',
        'custom_fields' => 'setCustomFields',
        'integration_id' => 'setIntegrationId',
        'acl_role_id' => 'setAclRoleId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'translated' => 'setTranslated',
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
        'id' => 'getId',
        'name' => 'getName',
        'path' => 'getPath',
        'author' => 'getAuthor',
        'copyright' => 'getCopyright',
        'license' => 'getLicense',
        'active' => 'getActive',
        'configurable' => 'getConfigurable',
        'privacy' => 'getPrivacy',
        'version' => 'getVersion',
        'icon' => 'getIcon',
        'modules' => 'getModules',
        'main_module' => 'getMainModule',
        'cookies' => 'getCookies',
        'allow_disable' => 'getAllowDisable',
        'base_app_url' => 'getBaseAppUrl',
        'allowed_hosts' => 'getAllowedHosts',
        'template_load_priority' => 'getTemplateLoadPriority',
        'label' => 'getLabel',
        'description' => 'getDescription',
        'privacy_policy_extensions' => 'getPrivacyPolicyExtensions',
        'custom_fields' => 'getCustomFields',
        'integration_id' => 'getIntegrationId',
        'acl_role_id' => 'getAclRoleId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'translated' => 'getTranslated',
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['author'] = $data['author'] ?? null;
        $this->container['copyright'] = $data['copyright'] ?? null;
        $this->container['license'] = $data['license'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['configurable'] = $data['configurable'] ?? null;
        $this->container['privacy'] = $data['privacy'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['icon'] = $data['icon'] ?? null;
        $this->container['modules'] = $data['modules'] ?? null;
        $this->container['main_module'] = $data['main_module'] ?? null;
        $this->container['cookies'] = $data['cookies'] ?? null;
        $this->container['allow_disable'] = $data['allow_disable'] ?? null;
        $this->container['base_app_url'] = $data['base_app_url'] ?? null;
        $this->container['allowed_hosts'] = $data['allowed_hosts'] ?? null;
        $this->container['template_load_priority'] = $data['template_load_priority'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['privacy_policy_extensions'] = $data['privacy_policy_extensions'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['integration_id'] = $data['integration_id'] ?? null;
        $this->container['acl_role_id'] = $data['acl_role_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['translated'] = $data['translated'] ?? null;
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

        if (!is_null($this->container['id']) && !preg_match("/^[0-9a-f]{32}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['configurable'] === null) {
            $invalidProperties[] = "'configurable' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['allow_disable'] === null) {
            $invalidProperties[] = "'allow_disable' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['integration_id'] === null) {
            $invalidProperties[] = "'integration_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['integration_id'])) {
            $invalidProperties[] = "invalid value for 'integration_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
        }

        if ($this->container['acl_role_id'] === null) {
            $invalidProperties[] = "'acl_role_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{32}$/", $this->container['acl_role_id'])) {
            $invalidProperties[] = "invalid value for 'acl_role_id', must be conform to the pattern /^[0-9a-f]{32}$/.";
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
            throw new \InvalidArgumentException("invalid value for $id when calling App., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets author
     *
     * @return string|null
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     *
     * @param string|null $author author
     *
     * @return self
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets copyright
     *
     * @return string|null
     */
    public function getCopyright()
    {
        return $this->container['copyright'];
    }

    /**
     * Sets copyright
     *
     * @param string|null $copyright copyright
     *
     * @return self
     */
    public function setCopyright($copyright)
    {
        $this->container['copyright'] = $copyright;

        return $this;
    }

    /**
     * Gets license
     *
     * @return string|null
     */
    public function getLicense()
    {
        return $this->container['license'];
    }

    /**
     * Sets license
     *
     * @param string|null $license license
     *
     * @return self
     */
    public function setLicense($license)
    {
        $this->container['license'] = $license;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets configurable
     *
     * @return bool
     */
    public function getConfigurable()
    {
        return $this->container['configurable'];
    }

    /**
     * Sets configurable
     *
     * @param bool $configurable configurable
     *
     * @return self
     */
    public function setConfigurable($configurable)
    {
        $this->container['configurable'] = $configurable;

        return $this;
    }

    /**
     * Gets privacy
     *
     * @return string|null
     */
    public function getPrivacy()
    {
        return $this->container['privacy'];
    }

    /**
     * Sets privacy
     *
     * @param string|null $privacy privacy
     *
     * @return self
     */
    public function setPrivacy($privacy)
    {
        $this->container['privacy'] = $privacy;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon Runtime field, cannot be used as part of the criteria.
     *
     * @return self
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets modules
     *
     * @return object[]|null
     */
    public function getModules()
    {
        return $this->container['modules'];
    }

    /**
     * Sets modules
     *
     * @param object[]|null $modules modules
     *
     * @return self
     */
    public function setModules($modules)
    {
        $this->container['modules'] = $modules;

        return $this;
    }

    /**
     * Gets main_module
     *
     * @return object|null
     */
    public function getMainModule()
    {
        return $this->container['main_module'];
    }

    /**
     * Sets main_module
     *
     * @param object|null $main_module main_module
     *
     * @return self
     */
    public function setMainModule($main_module)
    {
        $this->container['main_module'] = $main_module;

        return $this;
    }

    /**
     * Gets cookies
     *
     * @return object[]|null
     */
    public function getCookies()
    {
        return $this->container['cookies'];
    }

    /**
     * Sets cookies
     *
     * @param object[]|null $cookies cookies
     *
     * @return self
     */
    public function setCookies($cookies)
    {
        $this->container['cookies'] = $cookies;

        return $this;
    }

    /**
     * Gets allow_disable
     *
     * @return bool
     */
    public function getAllowDisable()
    {
        return $this->container['allow_disable'];
    }

    /**
     * Sets allow_disable
     *
     * @param bool $allow_disable allow_disable
     *
     * @return self
     */
    public function setAllowDisable($allow_disable)
    {
        $this->container['allow_disable'] = $allow_disable;

        return $this;
    }

    /**
     * Gets base_app_url
     *
     * @return string|null
     */
    public function getBaseAppUrl()
    {
        return $this->container['base_app_url'];
    }

    /**
     * Sets base_app_url
     *
     * @param string|null $base_app_url base_app_url
     *
     * @return self
     */
    public function setBaseAppUrl($base_app_url)
    {
        $this->container['base_app_url'] = $base_app_url;

        return $this;
    }

    /**
     * Gets allowed_hosts
     *
     * @return string[]|null
     */
    public function getAllowedHosts()
    {
        return $this->container['allowed_hosts'];
    }

    /**
     * Sets allowed_hosts
     *
     * @param string[]|null $allowed_hosts allowed_hosts
     *
     * @return self
     */
    public function setAllowedHosts($allowed_hosts)
    {
        $this->container['allowed_hosts'] = $allowed_hosts;

        return $this;
    }

    /**
     * Gets template_load_priority
     *
     * @return int|null
     */
    public function getTemplateLoadPriority()
    {
        return $this->container['template_load_priority'];
    }

    /**
     * Sets template_load_priority
     *
     * @param int|null $template_load_priority template_load_priority
     *
     * @return self
     */
    public function setTemplateLoadPriority($template_load_priority)
    {
        $this->container['template_load_priority'] = $template_load_priority;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets privacy_policy_extensions
     *
     * @return string|null
     */
    public function getPrivacyPolicyExtensions()
    {
        return $this->container['privacy_policy_extensions'];
    }

    /**
     * Sets privacy_policy_extensions
     *
     * @param string|null $privacy_policy_extensions privacy_policy_extensions
     *
     * @return self
     */
    public function setPrivacyPolicyExtensions($privacy_policy_extensions)
    {
        $this->container['privacy_policy_extensions'] = $privacy_policy_extensions;

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
     * Gets integration_id
     *
     * @return string
     */
    public function getIntegrationId()
    {
        return $this->container['integration_id'];
    }

    /**
     * Sets integration_id
     *
     * @param string $integration_id integration_id
     *
     * @return self
     */
    public function setIntegrationId($integration_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $integration_id))) {
            throw new \InvalidArgumentException("invalid value for $integration_id when calling App., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['integration_id'] = $integration_id;

        return $this;
    }

    /**
     * Gets acl_role_id
     *
     * @return string
     */
    public function getAclRoleId()
    {
        return $this->container['acl_role_id'];
    }

    /**
     * Sets acl_role_id
     *
     * @param string $acl_role_id acl_role_id
     *
     * @return self
     */
    public function setAclRoleId($acl_role_id)
    {

        if ((!preg_match("/^[0-9a-f]{32}$/", $acl_role_id))) {
            throw new \InvalidArgumentException("invalid value for $acl_role_id when calling App., must conform to the pattern /^[0-9a-f]{32}$/.");
        }

        $this->container['acl_role_id'] = $acl_role_id;

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
     * Gets translated
     *
     * @return object|null
     */
    public function getTranslated()
    {
        return $this->container['translated'];
    }

    /**
     * Sets translated
     *
     * @param object|null $translated translated
     *
     * @return self
     */
    public function setTranslated($translated)
    {
        $this->container['translated'] = $translated;

        return $this;
    }

    /**
     * Gets integration
     *
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Integration|null
     */
    public function getIntegration()
    {
        return $this->container['integration'];
    }

    /**
     * Sets integration
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Integration|null $integration integration
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AclRole|null
     */
    public function getAclRole()
    {
        return $this->container['acl_role'];
    }

    /**
     * Sets acl_role
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AclRole|null $acl_role acl_role
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\CustomFieldSet[]|null
     */
    public function getCustomFieldSets()
    {
        return $this->container['custom_field_sets'];
    }

    /**
     * Sets custom_field_sets
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\CustomFieldSet[]|null $custom_field_sets custom_field_sets
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppActionButton[]|null
     */
    public function getActionButtons()
    {
        return $this->container['action_buttons'];
    }

    /**
     * Sets action_buttons
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppActionButton[]|null $action_buttons action_buttons
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppTemplate[]|null
     */
    public function getTemplates()
    {
        return $this->container['templates'];
    }

    /**
     * Sets templates
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppTemplate[]|null $templates templates
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\Webhook[]|null
     */
    public function getWebhooks()
    {
        return $this->container['webhooks'];
    }

    /**
     * Sets webhooks
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\Webhook[]|null $webhooks webhooks
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppPaymentMethod[]|null
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppPaymentMethod[]|null $payment_methods payment_methods
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\TaxProvider[]|null
     */
    public function getTaxProviders()
    {
        return $this->container['tax_providers'];
    }

    /**
     * Sets tax_providers
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\TaxProvider[]|null $tax_providers tax_providers
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppCmsBlock[]|null
     */
    public function getCmsBlocks()
    {
        return $this->container['cms_blocks'];
    }

    /**
     * Sets cms_blocks
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppCmsBlock[]|null $cms_blocks cms_blocks
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppFlowAction[]|null
     */
    public function getFlowActions()
    {
        return $this->container['flow_actions'];
    }

    /**
     * Sets flow_actions
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppFlowAction[]|null $flow_actions flow_actions
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppFlowEvent[]|null
     */
    public function getFlowEvents()
    {
        return $this->container['flow_events'];
    }

    /**
     * Sets flow_events
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppFlowEvent[]|null $flow_events flow_events
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\AppShippingMethod[]|null
     */
    public function getAppShippingMethods()
    {
        return $this->container['app_shipping_methods'];
    }

    /**
     * Sets app_shipping_methods
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\AppShippingMethod[]|null $app_shipping_methods app_shipping_methods
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

