<?php
/**
 * UpdateAdditionalFormEntryOrgRequest
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
 * UpdateAdditionalFormEntryOrgRequest Class Doc Comment
 *
 * @category Class
 * @package  Submittable
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateAdditionalFormEntryOrgRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateAdditionalFormEntryOrgRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'form_type' => 'string',
        'field_data' => '\Submittable\Model\CreateInternalFormEntryRequestFieldDataInner[]',
        'entry_version_id' => 'string',
        'change_reason' => 'string',
        'change_description' => 'string',
        'email_subject' => 'string',
        'email_body' => 'string',
        'should_use_organization_email' => 'bool',
        'internal_note' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'form_type' => null,
        'field_data' => null,
        'entry_version_id' => null,
        'change_reason' => null,
        'change_description' => null,
        'email_subject' => null,
        'email_body' => null,
        'should_use_organization_email' => null,
        'internal_note' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'form_type' => false,
        'field_data' => false,
        'entry_version_id' => false,
        'change_reason' => false,
        'change_description' => true,
        'email_subject' => true,
        'email_body' => true,
        'should_use_organization_email' => false,
        'internal_note' => true
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
        'form_type' => 'formType',
        'field_data' => 'fieldData',
        'entry_version_id' => 'entryVersionId',
        'change_reason' => 'changeReason',
        'change_description' => 'changeDescription',
        'email_subject' => 'emailSubject',
        'email_body' => 'emailBody',
        'should_use_organization_email' => 'shouldUseOrganizationEmail',
        'internal_note' => 'internalNote'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'form_type' => 'setFormType',
        'field_data' => 'setFieldData',
        'entry_version_id' => 'setEntryVersionId',
        'change_reason' => 'setChangeReason',
        'change_description' => 'setChangeDescription',
        'email_subject' => 'setEmailSubject',
        'email_body' => 'setEmailBody',
        'should_use_organization_email' => 'setShouldUseOrganizationEmail',
        'internal_note' => 'setInternalNote'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'form_type' => 'getFormType',
        'field_data' => 'getFieldData',
        'entry_version_id' => 'getEntryVersionId',
        'change_reason' => 'getChangeReason',
        'change_description' => 'getChangeDescription',
        'email_subject' => 'getEmailSubject',
        'email_body' => 'getEmailBody',
        'should_use_organization_email' => 'getShouldUseOrganizationEmail',
        'internal_note' => 'getInternalNote'
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
        $this->setIfExists('form_type', $data ?? [], null);
        $this->setIfExists('field_data', $data ?? [], null);
        $this->setIfExists('entry_version_id', $data ?? [], null);
        $this->setIfExists('change_reason', $data ?? [], null);
        $this->setIfExists('change_description', $data ?? [], null);
        $this->setIfExists('email_subject', $data ?? [], null);
        $this->setIfExists('email_body', $data ?? [], null);
        $this->setIfExists('should_use_organization_email', $data ?? [], null);
        $this->setIfExists('internal_note', $data ?? [], null);
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

        if ($this->container['field_data'] === null) {
            $invalidProperties[] = "'field_data' can't be null";
        }
        if ($this->container['entry_version_id'] === null) {
            $invalidProperties[] = "'entry_version_id' can't be null";
        }
        if ($this->container['change_reason'] === null) {
            $invalidProperties[] = "'change_reason' can't be null";
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
     * Gets field_data
     *
     * @return \Submittable\Model\CreateInternalFormEntryRequestFieldDataInner[]
     */
    public function getFieldData()
    {
        return $this->container['field_data'];
    }

    /**
     * Sets field_data
     *
     * @param \Submittable\Model\CreateInternalFormEntryRequestFieldDataInner[] $field_data field_data
     *
     * @return self
     */
    public function setFieldData($field_data)
    {
        if (is_null($field_data)) {
            throw new \InvalidArgumentException('non-nullable field_data cannot be null');
        }
        $this->container['field_data'] = $field_data;

        return $this;
    }

    /**
     * Gets entry_version_id
     *
     * @return string
     */
    public function getEntryVersionId()
    {
        return $this->container['entry_version_id'];
    }

    /**
     * Sets entry_version_id
     *
     * @param string $entry_version_id entry_version_id
     *
     * @return self
     */
    public function setEntryVersionId($entry_version_id)
    {
        if (is_null($entry_version_id)) {
            throw new \InvalidArgumentException('non-nullable entry_version_id cannot be null');
        }
        $this->container['entry_version_id'] = $entry_version_id;

        return $this;
    }

    /**
     * Gets change_reason
     *
     * @return string
     */
    public function getChangeReason()
    {
        return $this->container['change_reason'];
    }

    /**
     * Sets change_reason
     *
     * @param string $change_reason change_reason
     *
     * @return self
     */
    public function setChangeReason($change_reason)
    {
        if (is_null($change_reason)) {
            throw new \InvalidArgumentException('non-nullable change_reason cannot be null');
        }
        $this->container['change_reason'] = $change_reason;

        return $this;
    }

    /**
     * Gets change_description
     *
     * @return string|null
     */
    public function getChangeDescription()
    {
        return $this->container['change_description'];
    }

    /**
     * Sets change_description
     *
     * @param string|null $change_description change_description
     *
     * @return self
     */
    public function setChangeDescription($change_description)
    {
        if (is_null($change_description)) {
            array_push($this->openAPINullablesSetToNull, 'change_description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('change_description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['change_description'] = $change_description;

        return $this;
    }

    /**
     * Gets email_subject
     *
     * @return string|null
     */
    public function getEmailSubject()
    {
        return $this->container['email_subject'];
    }

    /**
     * Sets email_subject
     *
     * @param string|null $email_subject email_subject
     *
     * @return self
     */
    public function setEmailSubject($email_subject)
    {
        if (is_null($email_subject)) {
            array_push($this->openAPINullablesSetToNull, 'email_subject');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email_subject', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['email_subject'] = $email_subject;

        return $this;
    }

    /**
     * Gets email_body
     *
     * @return string|null
     */
    public function getEmailBody()
    {
        return $this->container['email_body'];
    }

    /**
     * Sets email_body
     *
     * @param string|null $email_body email_body
     *
     * @return self
     */
    public function setEmailBody($email_body)
    {
        if (is_null($email_body)) {
            array_push($this->openAPINullablesSetToNull, 'email_body');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email_body', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['email_body'] = $email_body;

        return $this;
    }

    /**
     * Gets should_use_organization_email
     *
     * @return bool|null
     */
    public function getShouldUseOrganizationEmail()
    {
        return $this->container['should_use_organization_email'];
    }

    /**
     * Sets should_use_organization_email
     *
     * @param bool|null $should_use_organization_email should_use_organization_email
     *
     * @return self
     */
    public function setShouldUseOrganizationEmail($should_use_organization_email)
    {
        if (is_null($should_use_organization_email)) {
            throw new \InvalidArgumentException('non-nullable should_use_organization_email cannot be null');
        }
        $this->container['should_use_organization_email'] = $should_use_organization_email;

        return $this;
    }

    /**
     * Gets internal_note
     *
     * @return string|null
     */
    public function getInternalNote()
    {
        return $this->container['internal_note'];
    }

    /**
     * Sets internal_note
     *
     * @param string|null $internal_note internal_note
     *
     * @return self
     */
    public function setInternalNote($internal_note)
    {
        if (is_null($internal_note)) {
            array_push($this->openAPINullablesSetToNull, 'internal_note');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('internal_note', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['internal_note'] = $internal_note;

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


