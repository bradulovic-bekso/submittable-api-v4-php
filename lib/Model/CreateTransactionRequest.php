<?php
/**
 * CreateTransactionRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Submittable
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

namespace Submittable\Model;

use \ArrayAccess;
use \Submittable\ObjectSerializer;

/**
 * CreateTransactionRequest Class Doc Comment
 *
 * @category Class
 * @package  Submittable
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateTransactionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateTransactionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_status' => 'string',
        'amount' => 'float',
        'description' => 'string',
        'applicant_memo' => 'string',
        'public_organization_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transaction_status' => null,
        'amount' => 'double',
        'description' => null,
        'applicant_memo' => null,
        'public_organization_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'transaction_status' => false,
        'amount' => false,
        'description' => true,
        'applicant_memo' => true,
        'public_organization_id' => true
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
        'transaction_status' => 'transactionStatus',
        'amount' => 'amount',
        'description' => 'description',
        'applicant_memo' => 'applicantMemo',
        'public_organization_id' => 'publicOrganizationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_status' => 'setTransactionStatus',
        'amount' => 'setAmount',
        'description' => 'setDescription',
        'applicant_memo' => 'setApplicantMemo',
        'public_organization_id' => 'setPublicOrganizationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_status' => 'getTransactionStatus',
        'amount' => 'getAmount',
        'description' => 'getDescription',
        'applicant_memo' => 'getApplicantMemo',
        'public_organization_id' => 'getPublicOrganizationId'
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

    public const TRANSACTION_STATUS_AWARDED = 'awarded';
    public const TRANSACTION_STATUS_PAID = 'paid';
    public const TRANSACTION_STATUS_PROCESSING = 'processing';
    public const TRANSACTION_STATUS_CANCELLED = 'cancelled';
    public const TRANSACTION_STATUS_PENDING = 'pending';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionStatusAllowableValues()
    {
        return [
            self::TRANSACTION_STATUS_AWARDED,
            self::TRANSACTION_STATUS_PAID,
            self::TRANSACTION_STATUS_PROCESSING,
            self::TRANSACTION_STATUS_CANCELLED,
            self::TRANSACTION_STATUS_PENDING,
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
        $this->setIfExists('transaction_status', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('applicant_memo', $data ?? [], null);
        $this->setIfExists('public_organization_id', $data ?? [], null);
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

        if ($this->container['transaction_status'] === null) {
            $invalidProperties[] = "'transaction_status' can't be null";
        }
        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (!is_null($this->container['transaction_status']) && !in_array($this->container['transaction_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transaction_status', must be one of '%s'",
                $this->container['transaction_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (($this->container['amount'] > 9999999999.99)) {
            $invalidProperties[] = "invalid value for 'amount', must be smaller than or equal to 9999999999.99.";
        }

        if (($this->container['amount'] < 0.01)) {
            $invalidProperties[] = "invalid value for 'amount', must be bigger than or equal to 0.01.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 500)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['applicant_memo']) && (mb_strlen($this->container['applicant_memo']) > 500)) {
            $invalidProperties[] = "invalid value for 'applicant_memo', the character length must be smaller than or equal to 500.";
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
     * Gets transaction_status
     *
     * @return string
     */
    public function getTransactionStatus()
    {
        return $this->container['transaction_status'];
    }

    /**
     * Sets transaction_status
     *
     * @param string $transaction_status transaction_status
     *
     * @return self
     */
    public function setTransactionStatus($transaction_status)
    {
        if (is_null($transaction_status)) {
            throw new \InvalidArgumentException('non-nullable transaction_status cannot be null');
        }
        $allowedValues = $this->getTransactionStatusAllowableValues();
        if (!in_array($transaction_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transaction_status', must be one of '%s'",
                    $transaction_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_status'] = $transaction_status;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        if (($amount > 9999999999.99)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling CreateTransactionRequest., must be smaller than or equal to 9999999999.99.');
        }
        if (($amount < 0.01)) {
            throw new \InvalidArgumentException('invalid value for $amount when calling CreateTransactionRequest., must be bigger than or equal to 0.01.');
        }

        $this->container['amount'] = $amount;

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
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($description) && (mb_strlen($description) > 500)) {
            throw new \InvalidArgumentException('invalid length for $description when calling CreateTransactionRequest., must be smaller than or equal to 500.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets applicant_memo
     *
     * @return string|null
     */
    public function getApplicantMemo()
    {
        return $this->container['applicant_memo'];
    }

    /**
     * Sets applicant_memo
     *
     * @param string|null $applicant_memo applicant_memo
     *
     * @return self
     */
    public function setApplicantMemo($applicant_memo)
    {
        if (is_null($applicant_memo)) {
            array_push($this->openAPINullablesSetToNull, 'applicant_memo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('applicant_memo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($applicant_memo) && (mb_strlen($applicant_memo) > 500)) {
            throw new \InvalidArgumentException('invalid length for $applicant_memo when calling CreateTransactionRequest., must be smaller than or equal to 500.');
        }

        $this->container['applicant_memo'] = $applicant_memo;

        return $this;
    }

    /**
     * Gets public_organization_id
     *
     * @return string|null
     */
    public function getPublicOrganizationId()
    {
        return $this->container['public_organization_id'];
    }

    /**
     * Sets public_organization_id
     *
     * @param string|null $public_organization_id public_organization_id
     *
     * @return self
     */
    public function setPublicOrganizationId($public_organization_id)
    {
        if (is_null($public_organization_id)) {
            array_push($this->openAPINullablesSetToNull, 'public_organization_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('public_organization_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['public_organization_id'] = $public_organization_id;

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


