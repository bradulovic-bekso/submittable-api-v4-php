<?php
/**
 * AdditionalFormEntryMetadataResponse
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
 * AdditionalFormEntryMetadataResponse Class Doc Comment
 *
 * @category Class
 * @package  Submittable
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AdditionalFormEntryMetadataResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalFormEntryMetadataResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'submission_id' => 'string',
        'deadline' => '\DateTime',
        'is_strict_deadline' => 'bool',
        'project_id' => 'string',
        'deleted_at' => '\DateTime',
        'status' => 'string',
        'collaboration_session_id' => 'string',
        'has_been_opened_for_editing' => 'bool',
        'entry_id' => 'string',
        'form_id' => 'string',
        'completed_at' => '\DateTime',
        'created_by' => 'string',
        'created_at' => '\DateTime',
        'opened_for_editing_at' => '\DateTime',
        'score' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'submission_id' => 'uuid',
        'deadline' => 'date-time',
        'is_strict_deadline' => null,
        'project_id' => 'uuid',
        'deleted_at' => 'date-time',
        'status' => null,
        'collaboration_session_id' => 'uuid',
        'has_been_opened_for_editing' => null,
        'entry_id' => null,
        'form_id' => 'uuid',
        'completed_at' => 'date-time',
        'created_by' => 'uuid',
        'created_at' => 'date-time',
        'opened_for_editing_at' => 'date-time',
        'score' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'submission_id' => true,
        'deadline' => true,
        'is_strict_deadline' => false,
        'project_id' => true,
        'deleted_at' => true,
        'status' => true,
        'collaboration_session_id' => true,
        'has_been_opened_for_editing' => false,
        'entry_id' => true,
        'form_id' => true,
        'completed_at' => true,
        'created_by' => true,
        'created_at' => true,
        'opened_for_editing_at' => true,
        'score' => true
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
        'submission_id' => 'submissionId',
        'deadline' => 'deadline',
        'is_strict_deadline' => 'isStrictDeadline',
        'project_id' => 'projectId',
        'deleted_at' => 'deletedAt',
        'status' => 'status',
        'collaboration_session_id' => 'collaborationSessionId',
        'has_been_opened_for_editing' => 'hasBeenOpenedForEditing',
        'entry_id' => 'entryId',
        'form_id' => 'formId',
        'completed_at' => 'completedAt',
        'created_by' => 'createdBy',
        'created_at' => 'createdAt',
        'opened_for_editing_at' => 'openedForEditingAt',
        'score' => 'score'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'submission_id' => 'setSubmissionId',
        'deadline' => 'setDeadline',
        'is_strict_deadline' => 'setIsStrictDeadline',
        'project_id' => 'setProjectId',
        'deleted_at' => 'setDeletedAt',
        'status' => 'setStatus',
        'collaboration_session_id' => 'setCollaborationSessionId',
        'has_been_opened_for_editing' => 'setHasBeenOpenedForEditing',
        'entry_id' => 'setEntryId',
        'form_id' => 'setFormId',
        'completed_at' => 'setCompletedAt',
        'created_by' => 'setCreatedBy',
        'created_at' => 'setCreatedAt',
        'opened_for_editing_at' => 'setOpenedForEditingAt',
        'score' => 'setScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'submission_id' => 'getSubmissionId',
        'deadline' => 'getDeadline',
        'is_strict_deadline' => 'getIsStrictDeadline',
        'project_id' => 'getProjectId',
        'deleted_at' => 'getDeletedAt',
        'status' => 'getStatus',
        'collaboration_session_id' => 'getCollaborationSessionId',
        'has_been_opened_for_editing' => 'getHasBeenOpenedForEditing',
        'entry_id' => 'getEntryId',
        'form_id' => 'getFormId',
        'completed_at' => 'getCompletedAt',
        'created_by' => 'getCreatedBy',
        'created_at' => 'getCreatedAt',
        'opened_for_editing_at' => 'getOpenedForEditingAt',
        'score' => 'getScore'
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
        $this->setIfExists('submission_id', $data ?? [], null);
        $this->setIfExists('deadline', $data ?? [], null);
        $this->setIfExists('is_strict_deadline', $data ?? [], null);
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('deleted_at', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('collaboration_session_id', $data ?? [], null);
        $this->setIfExists('has_been_opened_for_editing', $data ?? [], null);
        $this->setIfExists('entry_id', $data ?? [], null);
        $this->setIfExists('form_id', $data ?? [], null);
        $this->setIfExists('completed_at', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('opened_for_editing_at', $data ?? [], null);
        $this->setIfExists('score', $data ?? [], null);
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
     * Gets deadline
     *
     * @return \DateTime|null
     */
    public function getDeadline()
    {
        return $this->container['deadline'];
    }

    /**
     * Sets deadline
     *
     * @param \DateTime|null $deadline deadline
     *
     * @return self
     */
    public function setDeadline($deadline)
    {
        if (is_null($deadline)) {
            array_push($this->openAPINullablesSetToNull, 'deadline');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deadline', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deadline'] = $deadline;

        return $this;
    }

    /**
     * Gets is_strict_deadline
     *
     * @return bool|null
     */
    public function getIsStrictDeadline()
    {
        return $this->container['is_strict_deadline'];
    }

    /**
     * Sets is_strict_deadline
     *
     * @param bool|null $is_strict_deadline is_strict_deadline
     *
     * @return self
     */
    public function setIsStrictDeadline($is_strict_deadline)
    {
        if (is_null($is_strict_deadline)) {
            throw new \InvalidArgumentException('non-nullable is_strict_deadline cannot be null');
        }
        $this->container['is_strict_deadline'] = $is_strict_deadline;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param string|null $project_id project_id
     *
     * @return self
     */
    public function setProjectId($project_id)
    {
        if (is_null($project_id)) {
            array_push($this->openAPINullablesSetToNull, 'project_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('project_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime|null $deleted_at deleted_at
     *
     * @return self
     */
    public function setDeletedAt($deleted_at)
    {
        if (is_null($deleted_at)) {
            array_push($this->openAPINullablesSetToNull, 'deleted_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deleted_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deleted_at'] = $deleted_at;

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
     * Gets collaboration_session_id
     *
     * @return string|null
     */
    public function getCollaborationSessionId()
    {
        return $this->container['collaboration_session_id'];
    }

    /**
     * Sets collaboration_session_id
     *
     * @param string|null $collaboration_session_id collaboration_session_id
     *
     * @return self
     */
    public function setCollaborationSessionId($collaboration_session_id)
    {
        if (is_null($collaboration_session_id)) {
            array_push($this->openAPINullablesSetToNull, 'collaboration_session_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('collaboration_session_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['collaboration_session_id'] = $collaboration_session_id;

        return $this;
    }

    /**
     * Gets has_been_opened_for_editing
     *
     * @return bool|null
     */
    public function getHasBeenOpenedForEditing()
    {
        return $this->container['has_been_opened_for_editing'];
    }

    /**
     * Sets has_been_opened_for_editing
     *
     * @param bool|null $has_been_opened_for_editing has_been_opened_for_editing
     *
     * @return self
     */
    public function setHasBeenOpenedForEditing($has_been_opened_for_editing)
    {
        if (is_null($has_been_opened_for_editing)) {
            throw new \InvalidArgumentException('non-nullable has_been_opened_for_editing cannot be null');
        }
        $this->container['has_been_opened_for_editing'] = $has_been_opened_for_editing;

        return $this;
    }

    /**
     * Gets entry_id
     *
     * @return string|null
     */
    public function getEntryId()
    {
        return $this->container['entry_id'];
    }

    /**
     * Sets entry_id
     *
     * @param string|null $entry_id entry_id
     *
     * @return self
     */
    public function setEntryId($entry_id)
    {
        if (is_null($entry_id)) {
            array_push($this->openAPINullablesSetToNull, 'entry_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entry_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['entry_id'] = $entry_id;

        return $this;
    }

    /**
     * Gets form_id
     *
     * @return string|null
     */
    public function getFormId()
    {
        return $this->container['form_id'];
    }

    /**
     * Sets form_id
     *
     * @param string|null $form_id form_id
     *
     * @return self
     */
    public function setFormId($form_id)
    {
        if (is_null($form_id)) {
            array_push($this->openAPINullablesSetToNull, 'form_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('form_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['form_id'] = $form_id;

        return $this;
    }

    /**
     * Gets completed_at
     *
     * @return \DateTime|null
     */
    public function getCompletedAt()
    {
        return $this->container['completed_at'];
    }

    /**
     * Sets completed_at
     *
     * @param \DateTime|null $completed_at completed_at
     *
     * @return self
     */
    public function setCompletedAt($completed_at)
    {
        if (is_null($completed_at)) {
            array_push($this->openAPINullablesSetToNull, 'completed_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('completed_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['completed_at'] = $completed_at;

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
     * Gets opened_for_editing_at
     *
     * @return \DateTime|null
     */
    public function getOpenedForEditingAt()
    {
        return $this->container['opened_for_editing_at'];
    }

    /**
     * Sets opened_for_editing_at
     *
     * @param \DateTime|null $opened_for_editing_at opened_for_editing_at
     *
     * @return self
     */
    public function setOpenedForEditingAt($opened_for_editing_at)
    {
        if (is_null($opened_for_editing_at)) {
            array_push($this->openAPINullablesSetToNull, 'opened_for_editing_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('opened_for_editing_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['opened_for_editing_at'] = $opened_for_editing_at;

        return $this;
    }

    /**
     * Gets score
     *
     * @return int|null
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param int|null $score score
     *
     * @return self
     */
    public function setScore($score)
    {
        if (is_null($score)) {
            array_push($this->openAPINullablesSetToNull, 'score');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('score', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['score'] = $score;

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


