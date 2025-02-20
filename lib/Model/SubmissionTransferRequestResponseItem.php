<?php
/**
 * SubmissionTransferRequestResponseItem
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
 * SubmissionTransferRequestResponseItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SubmissionTransferRequestResponseItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubmissionTransferRequestResponseItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transfer_id' => 'string',
        'submission_id' => 'string',
        'created_at' => '\DateTime',
        'created_by' => 'string',
        'transfer_from_user_id' => 'string',
        'transfer_from_user_name' => 'string',
        'transfer_from_user_email' => 'string',
        'transfer_to_user_id' => 'string',
        'transfer_to_user_name' => 'string',
        'transfer_to_user_email' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transfer_id' => null,
        'submission_id' => 'uuid',
        'created_at' => 'date-time',
        'created_by' => 'uuid',
        'transfer_from_user_id' => 'uuid',
        'transfer_from_user_name' => null,
        'transfer_from_user_email' => null,
        'transfer_to_user_id' => 'uuid',
        'transfer_to_user_name' => null,
        'transfer_to_user_email' => null,
        'status' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'transfer_id' => true,
        'submission_id' => true,
        'created_at' => true,
        'created_by' => true,
        'transfer_from_user_id' => true,
        'transfer_from_user_name' => true,
        'transfer_from_user_email' => true,
        'transfer_to_user_id' => true,
        'transfer_to_user_name' => true,
        'transfer_to_user_email' => true,
        'status' => true
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
        'transfer_id' => 'transferId',
        'submission_id' => 'submissionId',
        'created_at' => 'createdAt',
        'created_by' => 'createdBy',
        'transfer_from_user_id' => 'transferFromUserId',
        'transfer_from_user_name' => 'transferFromUserName',
        'transfer_from_user_email' => 'transferFromUserEmail',
        'transfer_to_user_id' => 'transferToUserId',
        'transfer_to_user_name' => 'transferToUserName',
        'transfer_to_user_email' => 'transferToUserEmail',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transfer_id' => 'setTransferId',
        'submission_id' => 'setSubmissionId',
        'created_at' => 'setCreatedAt',
        'created_by' => 'setCreatedBy',
        'transfer_from_user_id' => 'setTransferFromUserId',
        'transfer_from_user_name' => 'setTransferFromUserName',
        'transfer_from_user_email' => 'setTransferFromUserEmail',
        'transfer_to_user_id' => 'setTransferToUserId',
        'transfer_to_user_name' => 'setTransferToUserName',
        'transfer_to_user_email' => 'setTransferToUserEmail',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transfer_id' => 'getTransferId',
        'submission_id' => 'getSubmissionId',
        'created_at' => 'getCreatedAt',
        'created_by' => 'getCreatedBy',
        'transfer_from_user_id' => 'getTransferFromUserId',
        'transfer_from_user_name' => 'getTransferFromUserName',
        'transfer_from_user_email' => 'getTransferFromUserEmail',
        'transfer_to_user_id' => 'getTransferToUserId',
        'transfer_to_user_name' => 'getTransferToUserName',
        'transfer_to_user_email' => 'getTransferToUserEmail',
        'status' => 'getStatus'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('transfer_id', $data ?? [], null);
        $this->setIfExists('submission_id', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('transfer_from_user_id', $data ?? [], null);
        $this->setIfExists('transfer_from_user_name', $data ?? [], null);
        $this->setIfExists('transfer_from_user_email', $data ?? [], null);
        $this->setIfExists('transfer_to_user_id', $data ?? [], null);
        $this->setIfExists('transfer_to_user_name', $data ?? [], null);
        $this->setIfExists('transfer_to_user_email', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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
     * Gets transfer_id
     *
     * @return string|null
     */
    public function getTransferId()
    {
        return $this->container['transfer_id'];
    }

    /**
     * Sets transfer_id
     *
     * @param string|null $transfer_id transfer_id
     *
     * @return self
     */
    public function setTransferId($transfer_id)
    {
        if (is_null($transfer_id)) {
            array_push($this->openAPINullablesSetToNull, 'transfer_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transfer_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transfer_id'] = $transfer_id;

        return $this;
    }

    /**
     * Gets submission_id
     *
     * @return string|null
     */
    public function getSubmissionId()
    {
        return $this->container['submission_id'];
    }

    /**
     * Sets submission_id
     *
     * @param string|null $submission_id submission_id
     *
     * @return self
     */
    public function setSubmissionId($submission_id)
    {
        if (is_null($submission_id)) {
            array_push($this->openAPINullablesSetToNull, 'submission_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('submission_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['submission_id'] = $submission_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            array_push($this->openAPINullablesSetToNull, 'created_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        if (is_null($created_by)) {
            array_push($this->openAPINullablesSetToNull, 'created_by');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created_by', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets transfer_from_user_id
     *
     * @return string|null
     */
    public function getTransferFromUserId()
    {
        return $this->container['transfer_from_user_id'];
    }

    /**
     * Sets transfer_from_user_id
     *
     * @param string|null $transfer_from_user_id transfer_from_user_id
     *
     * @return self
     */
    public function setTransferFromUserId($transfer_from_user_id)
    {
        if (is_null($transfer_from_user_id)) {
            array_push($this->openAPINullablesSetToNull, 'transfer_from_user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transfer_from_user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transfer_from_user_id'] = $transfer_from_user_id;

        return $this;
    }

    /**
     * Gets transfer_from_user_name
     *
     * @return string|null
     */
    public function getTransferFromUserName()
    {
        return $this->container['transfer_from_user_name'];
    }

    /**
     * Sets transfer_from_user_name
     *
     * @param string|null $transfer_from_user_name transfer_from_user_name
     *
     * @return self
     */
    public function setTransferFromUserName($transfer_from_user_name)
    {
        if (is_null($transfer_from_user_name)) {
            array_push($this->openAPINullablesSetToNull, 'transfer_from_user_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transfer_from_user_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transfer_from_user_name'] = $transfer_from_user_name;

        return $this;
    }

    /**
     * Gets transfer_from_user_email
     *
     * @return string|null
     */
    public function getTransferFromUserEmail()
    {
        return $this->container['transfer_from_user_email'];
    }

    /**
     * Sets transfer_from_user_email
     *
     * @param string|null $transfer_from_user_email transfer_from_user_email
     *
     * @return self
     */
    public function setTransferFromUserEmail($transfer_from_user_email)
    {
        if (is_null($transfer_from_user_email)) {
            array_push($this->openAPINullablesSetToNull, 'transfer_from_user_email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transfer_from_user_email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transfer_from_user_email'] = $transfer_from_user_email;

        return $this;
    }

    /**
     * Gets transfer_to_user_id
     *
     * @return string|null
     */
    public function getTransferToUserId()
    {
        return $this->container['transfer_to_user_id'];
    }

    /**
     * Sets transfer_to_user_id
     *
     * @param string|null $transfer_to_user_id transfer_to_user_id
     *
     * @return self
     */
    public function setTransferToUserId($transfer_to_user_id)
    {
        if (is_null($transfer_to_user_id)) {
            array_push($this->openAPINullablesSetToNull, 'transfer_to_user_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transfer_to_user_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transfer_to_user_id'] = $transfer_to_user_id;

        return $this;
    }

    /**
     * Gets transfer_to_user_name
     *
     * @return string|null
     */
    public function getTransferToUserName()
    {
        return $this->container['transfer_to_user_name'];
    }

    /**
     * Sets transfer_to_user_name
     *
     * @param string|null $transfer_to_user_name transfer_to_user_name
     *
     * @return self
     */
    public function setTransferToUserName($transfer_to_user_name)
    {
        if (is_null($transfer_to_user_name)) {
            array_push($this->openAPINullablesSetToNull, 'transfer_to_user_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transfer_to_user_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transfer_to_user_name'] = $transfer_to_user_name;

        return $this;
    }

    /**
     * Gets transfer_to_user_email
     *
     * @return string|null
     */
    public function getTransferToUserEmail()
    {
        return $this->container['transfer_to_user_email'];
    }

    /**
     * Sets transfer_to_user_email
     *
     * @param string|null $transfer_to_user_email transfer_to_user_email
     *
     * @return self
     */
    public function setTransferToUserEmail($transfer_to_user_email)
    {
        if (is_null($transfer_to_user_email)) {
            array_push($this->openAPINullablesSetToNull, 'transfer_to_user_email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transfer_to_user_email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['transfer_to_user_email'] = $transfer_to_user_email;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status'] = $status;

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


