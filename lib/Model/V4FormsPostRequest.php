<?php
/**
 * V4FormsPostRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Submittable API Documentation
 *
 * This page contains the documentation on how to use Submittable through API calls.  ### Breaking changes   * All v3/requests and v3/responses endpoints merged into v4/entries endpoints     * Entries are a combination of both the request and response from v3 * All endpoints returning a page now use a continuation token instead of page number and page size     * Endpoints no longer return a count of how many items there are     * Endpoints no longer return how many pages there are     * Filters and size are made on the first request only, subsequent requests can only use the continuation token returned on the response. * Get a submission now returns formEntries instead of formResponses     * formEntries does not contain the fieldData property         * To get a single entry use the \"Get an entry\" endpoint, /v4/entries/{entryId}         * To get all entries for a submission use the \"Get a submission’s entries\" endpoint, /v4/entries/submissions/{submissionId} * All submissionId properties are now guids instead of integers * All labelId properties are now guids instead of integers * LegacyProjects.Include and LegacyProjects.Exclude on /v3/submissions have been removed * Update project endpoint /v3/projects/{projectId} now updates everything for a project * v3/projects/stages endpoints are removed, now review stages are managed by the create and update project endpoints * Get a list of team members and their assignment counts /v3/organizations/team/assignments has been replaced by /v4/organizations/team to get team members and /v4/submissions/team/assignment to get their assignment counts   ### Authentication  To access the API, you must present an API Key provisioned for your organization.  The API Key is sent using a basic authentication header, with the API key as the username and a blank password. Please ensure that the value is formatted as `{apiKey}`.  ``` Authorization: Basic {apiKey} ```  ### Request Content Type  All endpoints, unless otherwise noted, accept and produce `application/json`. Please ensure the `Content-Type` header for POST and PUT requests are set correctly.
 *
 * The version of the OpenAPI document: v4
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.11.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * V4FormsPostRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V4FormsPostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'form_type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_v4_forms_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'price' => 'float',
        'payment_description' => 'string',
        'enable_payment' => 'bool',
        'currency_code' => 'string',
        'form_type' => 'string',
        'name' => 'string',
        'fields' => '\OpenAPI\Client\Model\FormRequestFieldsInner[]',
        'branches' => '\OpenAPI\Client\Model\BranchRequest[]',
        'blocks' => '\OpenAPI\Client\Model\BlockRequest[]',
        'enable_collaboration' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'price' => 'double',
        'payment_description' => null,
        'enable_payment' => null,
        'currency_code' => null,
        'form_type' => null,
        'name' => null,
        'fields' => null,
        'branches' => null,
        'blocks' => null,
        'enable_collaboration' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'price' => true,
        'payment_description' => true,
        'enable_payment' => false,
        'currency_code' => true,
        'form_type' => false,
        'name' => false,
        'fields' => true,
        'branches' => true,
        'blocks' => true,
        'enable_collaboration' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'price' => 'price',
        'payment_description' => 'paymentDescription',
        'enable_payment' => 'enablePayment',
        'currency_code' => 'currencyCode',
        'form_type' => 'formType',
        'name' => 'name',
        'fields' => 'fields',
        'branches' => 'branches',
        'blocks' => 'blocks',
        'enable_collaboration' => 'enableCollaboration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'price' => 'setPrice',
        'payment_description' => 'setPaymentDescription',
        'enable_payment' => 'setEnablePayment',
        'currency_code' => 'setCurrencyCode',
        'form_type' => 'setFormType',
        'name' => 'setName',
        'fields' => 'setFields',
        'branches' => 'setBranches',
        'blocks' => 'setBlocks',
        'enable_collaboration' => 'setEnableCollaboration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'price' => 'getPrice',
        'payment_description' => 'getPaymentDescription',
        'enable_payment' => 'getEnablePayment',
        'currency_code' => 'getCurrencyCode',
        'form_type' => 'getFormType',
        'name' => 'getName',
        'fields' => 'getFields',
        'branches' => 'getBranches',
        'blocks' => 'getBlocks',
        'enable_collaboration' => 'getEnableCollaboration'
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

    public const FORM_TYPE_ADDITIONAL = 'additional';
    public const FORM_TYPE_INITIAL = 'initial';
    public const FORM_TYPE_REFERENCE = 'reference';
    public const FORM_TYPE_REVIEW = 'review';
    public const FORM_TYPE_INTERNAL = 'internal';
    public const FORM_TYPE_ELIGIBILITY = 'eligibility';
    public const FORM_TYPE_REQUEST = 'request';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormTypeAllowableValues()
    {
        return [
            self::FORM_TYPE_ADDITIONAL,
            self::FORM_TYPE_INITIAL,
            self::FORM_TYPE_REFERENCE,
            self::FORM_TYPE_REVIEW,
            self::FORM_TYPE_INTERNAL,
            self::FORM_TYPE_ELIGIBILITY,
            self::FORM_TYPE_REQUEST,
        ];
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('payment_description', $data ?? [], null);
        $this->setIfExists('enable_payment', $data ?? [], null);
        $this->setIfExists('currency_code', $data ?? [], null);
        $this->setIfExists('form_type', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('branches', $data ?? [], null);
        $this->setIfExists('blocks', $data ?? [], null);
        $this->setIfExists('enable_collaboration', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['form_type'] = static::$openAPIModelName;
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['form_type'] === null) {
            $invalidProperties[] = "'form_type' can't be null";
        }
        $allowedValues = $this->getFormTypeAllowableValues();
        if (!is_null($this->container['form_type']) && !in_array($this->container['form_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'form_type', must be one of '%s'",
                $this->container['form_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            array_push($this->openAPINullablesSetToNull, 'price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets payment_description
     *
     * @return string|null
     */
    public function getPaymentDescription()
    {
        return $this->container['payment_description'];
    }

    /**
     * Sets payment_description
     *
     * @param string|null $payment_description payment_description
     *
     * @return self
     */
    public function setPaymentDescription($payment_description)
    {
        if (is_null($payment_description)) {
            array_push($this->openAPINullablesSetToNull, 'payment_description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_description'] = $payment_description;

        return $this;
    }

    /**
     * Gets enable_payment
     *
     * @return bool|null
     */
    public function getEnablePayment()
    {
        return $this->container['enable_payment'];
    }

    /**
     * Sets enable_payment
     *
     * @param bool|null $enable_payment enable_payment
     *
     * @return self
     */
    public function setEnablePayment($enable_payment)
    {
        if (is_null($enable_payment)) {
            throw new \InvalidArgumentException('non-nullable enable_payment cannot be null');
        }
        $this->container['enable_payment'] = $enable_payment;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code currency_code
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        if (is_null($currency_code)) {
            array_push($this->openAPINullablesSetToNull, 'currency_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets form_type
     *
     * @return string
     */
    public function getFormType()
    {
        return $this->container['form_type'];
    }

    /**
     * Sets form_type
     *
     * @param string $form_type form_type
     *
     * @return self
     */
    public function setFormType($form_type)
    {
        if (is_null($form_type)) {
            throw new \InvalidArgumentException('non-nullable form_type cannot be null');
        }
        $allowedValues = $this->getFormTypeAllowableValues();
        if (!in_array($form_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'form_type', must be one of '%s'",
                    $form_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['form_type'] = $form_type;

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
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling V4FormsPostRequest., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \OpenAPI\Client\Model\FormRequestFieldsInner[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \OpenAPI\Client\Model\FormRequestFieldsInner[]|null $fields fields
     *
     * @return self
     */
    public function setFields($fields)
    {
        if (is_null($fields)) {
            array_push($this->openAPINullablesSetToNull, 'fields');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fields', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets branches
     *
     * @return \OpenAPI\Client\Model\BranchRequest[]|null
     */
    public function getBranches()
    {
        return $this->container['branches'];
    }

    /**
     * Sets branches
     *
     * @param \OpenAPI\Client\Model\BranchRequest[]|null $branches branches
     *
     * @return self
     */
    public function setBranches($branches)
    {
        if (is_null($branches)) {
            array_push($this->openAPINullablesSetToNull, 'branches');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('branches', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['branches'] = $branches;

        return $this;
    }

    /**
     * Gets blocks
     *
     * @return \OpenAPI\Client\Model\BlockRequest[]|null
     */
    public function getBlocks()
    {
        return $this->container['blocks'];
    }

    /**
     * Sets blocks
     *
     * @param \OpenAPI\Client\Model\BlockRequest[]|null $blocks blocks
     *
     * @return self
     */
    public function setBlocks($blocks)
    {
        if (is_null($blocks)) {
            array_push($this->openAPINullablesSetToNull, 'blocks');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('blocks', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['blocks'] = $blocks;

        return $this;
    }

    /**
     * Gets enable_collaboration
     *
     * @return bool|null
     */
    public function getEnableCollaboration()
    {
        return $this->container['enable_collaboration'];
    }

    /**
     * Sets enable_collaboration
     *
     * @param bool|null $enable_collaboration enable_collaboration
     *
     * @return self
     */
    public function setEnableCollaboration($enable_collaboration)
    {
        if (is_null($enable_collaboration)) {
            throw new \InvalidArgumentException('non-nullable enable_collaboration cannot be null');
        }
        $this->container['enable_collaboration'] = $enable_collaboration;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


