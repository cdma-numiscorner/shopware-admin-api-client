<?php
/**
 * PromotionJsonApi
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
 * PromotionJsonApi Class Doc Comment
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
class PromotionJsonApi implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PromotionJsonApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'id' => 'string',
        'attributes' => 'map[string,object]',
        'relationships' => '\OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationships',
        'links' => 'map[string,\OpenAPI\ShopwareAdminApiClient\Model\Link]',
        'meta' => 'map[string,object]',
        'name' => 'string',
        'active' => 'bool',
        'valid_from' => '\DateTime',
        'valid_until' => '\DateTime',
        'max_redemptions_global' => 'int',
        'max_redemptions_per_customer' => 'int',
        'priority' => 'int',
        'exclusive' => 'bool',
        'code' => 'string',
        'use_codes' => 'bool',
        'use_individual_codes' => 'bool',
        'individual_code_pattern' => 'string',
        'use_set_groups' => 'bool',
        'customer_restriction' => 'bool',
        'prevent_combination' => 'bool',
        'order_count' => 'int',
        'orders_per_customer_count' => 'object',
        'exclusion_ids' => 'string[]',
        'custom_fields' => 'object',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'translated' => 'object'
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
        'name' => null,
        'active' => null,
        'valid_from' => 'date-time',
        'valid_until' => 'date-time',
        'max_redemptions_global' => 'int64',
        'max_redemptions_per_customer' => 'int64',
        'priority' => 'int64',
        'exclusive' => null,
        'code' => null,
        'use_codes' => null,
        'use_individual_codes' => null,
        'individual_code_pattern' => null,
        'use_set_groups' => null,
        'customer_restriction' => null,
        'prevent_combination' => null,
        'order_count' => 'int64',
        'orders_per_customer_count' => null,
        'exclusion_ids' => null,
        'custom_fields' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'translated' => null
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
        'name' => 'name',
        'active' => 'active',
        'valid_from' => 'validFrom',
        'valid_until' => 'validUntil',
        'max_redemptions_global' => 'maxRedemptionsGlobal',
        'max_redemptions_per_customer' => 'maxRedemptionsPerCustomer',
        'priority' => 'priority',
        'exclusive' => 'exclusive',
        'code' => 'code',
        'use_codes' => 'useCodes',
        'use_individual_codes' => 'useIndividualCodes',
        'individual_code_pattern' => 'individualCodePattern',
        'use_set_groups' => 'useSetGroups',
        'customer_restriction' => 'customerRestriction',
        'prevent_combination' => 'preventCombination',
        'order_count' => 'orderCount',
        'orders_per_customer_count' => 'ordersPerCustomerCount',
        'exclusion_ids' => 'exclusionIds',
        'custom_fields' => 'customFields',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'translated' => 'translated'
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
        'name' => 'setName',
        'active' => 'setActive',
        'valid_from' => 'setValidFrom',
        'valid_until' => 'setValidUntil',
        'max_redemptions_global' => 'setMaxRedemptionsGlobal',
        'max_redemptions_per_customer' => 'setMaxRedemptionsPerCustomer',
        'priority' => 'setPriority',
        'exclusive' => 'setExclusive',
        'code' => 'setCode',
        'use_codes' => 'setUseCodes',
        'use_individual_codes' => 'setUseIndividualCodes',
        'individual_code_pattern' => 'setIndividualCodePattern',
        'use_set_groups' => 'setUseSetGroups',
        'customer_restriction' => 'setCustomerRestriction',
        'prevent_combination' => 'setPreventCombination',
        'order_count' => 'setOrderCount',
        'orders_per_customer_count' => 'setOrdersPerCustomerCount',
        'exclusion_ids' => 'setExclusionIds',
        'custom_fields' => 'setCustomFields',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'translated' => 'setTranslated'
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
        'name' => 'getName',
        'active' => 'getActive',
        'valid_from' => 'getValidFrom',
        'valid_until' => 'getValidUntil',
        'max_redemptions_global' => 'getMaxRedemptionsGlobal',
        'max_redemptions_per_customer' => 'getMaxRedemptionsPerCustomer',
        'priority' => 'getPriority',
        'exclusive' => 'getExclusive',
        'code' => 'getCode',
        'use_codes' => 'getUseCodes',
        'use_individual_codes' => 'getUseIndividualCodes',
        'individual_code_pattern' => 'getIndividualCodePattern',
        'use_set_groups' => 'getUseSetGroups',
        'customer_restriction' => 'getCustomerRestriction',
        'prevent_combination' => 'getPreventCombination',
        'order_count' => 'getOrderCount',
        'orders_per_customer_count' => 'getOrdersPerCustomerCount',
        'exclusion_ids' => 'getExclusionIds',
        'custom_fields' => 'getCustomFields',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'translated' => 'getTranslated'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['active'] = $data['active'] ?? null;
        $this->container['valid_from'] = $data['valid_from'] ?? null;
        $this->container['valid_until'] = $data['valid_until'] ?? null;
        $this->container['max_redemptions_global'] = $data['max_redemptions_global'] ?? null;
        $this->container['max_redemptions_per_customer'] = $data['max_redemptions_per_customer'] ?? null;
        $this->container['priority'] = $data['priority'] ?? null;
        $this->container['exclusive'] = $data['exclusive'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['use_codes'] = $data['use_codes'] ?? null;
        $this->container['use_individual_codes'] = $data['use_individual_codes'] ?? null;
        $this->container['individual_code_pattern'] = $data['individual_code_pattern'] ?? null;
        $this->container['use_set_groups'] = $data['use_set_groups'] ?? null;
        $this->container['customer_restriction'] = $data['customer_restriction'] ?? null;
        $this->container['prevent_combination'] = $data['prevent_combination'] ?? null;
        $this->container['order_count'] = $data['order_count'] ?? null;
        $this->container['orders_per_customer_count'] = $data['orders_per_customer_count'] ?? null;
        $this->container['exclusion_ids'] = $data['exclusion_ids'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['translated'] = $data['translated'] ?? null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalidProperties[] = "'active' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['exclusive'] === null) {
            $invalidProperties[] = "'exclusive' can't be null";
        }
        if ($this->container['use_codes'] === null) {
            $invalidProperties[] = "'use_codes' can't be null";
        }
        if ($this->container['use_individual_codes'] === null) {
            $invalidProperties[] = "'use_individual_codes' can't be null";
        }
        if ($this->container['use_set_groups'] === null) {
            $invalidProperties[] = "'use_set_groups' can't be null";
        }
        if ($this->container['prevent_combination'] === null) {
            $invalidProperties[] = "'prevent_combination' can't be null";
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
            throw new \InvalidArgumentException("invalid value for $id when calling PromotionJsonApi., must conform to the pattern /^[0-9a-f]{32}$/.");
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
     * @return \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationships|null
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \OpenAPI\ShopwareAdminApiClient\Model\PromotionJsonApiAllOfRelationships|null $relationships relationships
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
     * Gets valid_from
     *
     * @return \DateTime|null
     */
    public function getValidFrom()
    {
        return $this->container['valid_from'];
    }

    /**
     * Sets valid_from
     *
     * @param \DateTime|null $valid_from valid_from
     *
     * @return self
     */
    public function setValidFrom($valid_from)
    {
        $this->container['valid_from'] = $valid_from;

        return $this;
    }

    /**
     * Gets valid_until
     *
     * @return \DateTime|null
     */
    public function getValidUntil()
    {
        return $this->container['valid_until'];
    }

    /**
     * Sets valid_until
     *
     * @param \DateTime|null $valid_until valid_until
     *
     * @return self
     */
    public function setValidUntil($valid_until)
    {
        $this->container['valid_until'] = $valid_until;

        return $this;
    }

    /**
     * Gets max_redemptions_global
     *
     * @return int|null
     */
    public function getMaxRedemptionsGlobal()
    {
        return $this->container['max_redemptions_global'];
    }

    /**
     * Sets max_redemptions_global
     *
     * @param int|null $max_redemptions_global max_redemptions_global
     *
     * @return self
     */
    public function setMaxRedemptionsGlobal($max_redemptions_global)
    {
        $this->container['max_redemptions_global'] = $max_redemptions_global;

        return $this;
    }

    /**
     * Gets max_redemptions_per_customer
     *
     * @return int|null
     */
    public function getMaxRedemptionsPerCustomer()
    {
        return $this->container['max_redemptions_per_customer'];
    }

    /**
     * Sets max_redemptions_per_customer
     *
     * @param int|null $max_redemptions_per_customer max_redemptions_per_customer
     *
     * @return self
     */
    public function setMaxRedemptionsPerCustomer($max_redemptions_per_customer)
    {
        $this->container['max_redemptions_per_customer'] = $max_redemptions_per_customer;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets exclusive
     *
     * @return bool
     */
    public function getExclusive()
    {
        return $this->container['exclusive'];
    }

    /**
     * Sets exclusive
     *
     * @param bool $exclusive exclusive
     *
     * @return self
     */
    public function setExclusive($exclusive)
    {
        $this->container['exclusive'] = $exclusive;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets use_codes
     *
     * @return bool
     */
    public function getUseCodes()
    {
        return $this->container['use_codes'];
    }

    /**
     * Sets use_codes
     *
     * @param bool $use_codes use_codes
     *
     * @return self
     */
    public function setUseCodes($use_codes)
    {
        $this->container['use_codes'] = $use_codes;

        return $this;
    }

    /**
     * Gets use_individual_codes
     *
     * @return bool
     */
    public function getUseIndividualCodes()
    {
        return $this->container['use_individual_codes'];
    }

    /**
     * Sets use_individual_codes
     *
     * @param bool $use_individual_codes use_individual_codes
     *
     * @return self
     */
    public function setUseIndividualCodes($use_individual_codes)
    {
        $this->container['use_individual_codes'] = $use_individual_codes;

        return $this;
    }

    /**
     * Gets individual_code_pattern
     *
     * @return string|null
     */
    public function getIndividualCodePattern()
    {
        return $this->container['individual_code_pattern'];
    }

    /**
     * Sets individual_code_pattern
     *
     * @param string|null $individual_code_pattern individual_code_pattern
     *
     * @return self
     */
    public function setIndividualCodePattern($individual_code_pattern)
    {
        $this->container['individual_code_pattern'] = $individual_code_pattern;

        return $this;
    }

    /**
     * Gets use_set_groups
     *
     * @return bool
     */
    public function getUseSetGroups()
    {
        return $this->container['use_set_groups'];
    }

    /**
     * Sets use_set_groups
     *
     * @param bool $use_set_groups use_set_groups
     *
     * @return self
     */
    public function setUseSetGroups($use_set_groups)
    {
        $this->container['use_set_groups'] = $use_set_groups;

        return $this;
    }

    /**
     * Gets customer_restriction
     *
     * @return bool|null
     */
    public function getCustomerRestriction()
    {
        return $this->container['customer_restriction'];
    }

    /**
     * Sets customer_restriction
     *
     * @param bool|null $customer_restriction customer_restriction
     *
     * @return self
     */
    public function setCustomerRestriction($customer_restriction)
    {
        $this->container['customer_restriction'] = $customer_restriction;

        return $this;
    }

    /**
     * Gets prevent_combination
     *
     * @return bool
     */
    public function getPreventCombination()
    {
        return $this->container['prevent_combination'];
    }

    /**
     * Sets prevent_combination
     *
     * @param bool $prevent_combination prevent_combination
     *
     * @return self
     */
    public function setPreventCombination($prevent_combination)
    {
        $this->container['prevent_combination'] = $prevent_combination;

        return $this;
    }

    /**
     * Gets order_count
     *
     * @return int|null
     */
    public function getOrderCount()
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     *
     * @param int|null $order_count order_count
     *
     * @return self
     */
    public function setOrderCount($order_count)
    {
        $this->container['order_count'] = $order_count;

        return $this;
    }

    /**
     * Gets orders_per_customer_count
     *
     * @return object|null
     */
    public function getOrdersPerCustomerCount()
    {
        return $this->container['orders_per_customer_count'];
    }

    /**
     * Sets orders_per_customer_count
     *
     * @param object|null $orders_per_customer_count orders_per_customer_count
     *
     * @return self
     */
    public function setOrdersPerCustomerCount($orders_per_customer_count)
    {
        $this->container['orders_per_customer_count'] = $orders_per_customer_count;

        return $this;
    }

    /**
     * Gets exclusion_ids
     *
     * @return string[]|null
     */
    public function getExclusionIds()
    {
        return $this->container['exclusion_ids'];
    }

    /**
     * Sets exclusion_ids
     *
     * @param string[]|null $exclusion_ids exclusion_ids
     *
     * @return self
     */
    public function setExclusionIds($exclusion_ids)
    {
        $this->container['exclusion_ids'] = $exclusion_ids;

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


