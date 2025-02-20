<?php
/**
 * InitialFormEntryResponse
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
 * InitialFormEntryResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InitialFormEntryResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InitialFormEntryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'submission_id' => 'string',
        'project_id' => 'string',
        'payment_receipt' => '\OpenAPI\Client\Model\PaymentReceipt',
        'collaboration_session_id' => 'string',
        'is_old_form_version' => 'bool',
        'is_transferred_submission' => 'bool',
        'last_transfer_date' => '\DateTime',
        'entry_id' => 'string',
        'form_id' => 'string',
        'status' => 'string',
        'completed_at' => '\DateTime',
        'created_by' => 'string',
        'created_at' => '\DateTime',
        'opened_for_editing_at' => '\DateTime',
        'field_data' => '\OpenAPI\Client\Model\AdditionalFormEntryResponseFieldDataInner[]',
        'score' => 'int',
        'entry_version_id' => 'string'
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
        'project_id' => 'uuid',
        'payment_receipt' => null,
        'collaboration_session_id' => 'uuid',
        'is_old_form_version' => null,
        'is_transferred_submission' => null,
        'last_transfer_date' => 'date-time',
        'entry_id' => null,
        'form_id' => 'uuid',
        'status' => null,
        'completed_at' => 'date-time',
        'created_by' => 'uuid',
        'created_at' => 'date-time',
        'opened_for_editing_at' => 'date-time',
        'field_data' => null,
        'score' => 'int32',
        'entry_version_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'submission_id' => true,
        'project_id' => true,
        'payment_receipt' => false,
        'collaboration_session_id' => true,
        'is_old_form_version' => false,
        'is_transferred_submission' => false,
        'last_transfer_date' => true,
        'entry_id' => true,
        'form_id' => true,
        'status' => true,
        'completed_at' => true,
        'created_by' => true,
        'created_at' => true,
        'opened_for_editing_at' => true,
        'field_data' => true,
        'score' => true,
        'entry_version_id' => true
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
        'project_id' => 'projectId',
        'payment_receipt' => 'paymentReceipt',
        'collaboration_session_id' => 'collaborationSessionId',
        'is_old_form_version' => 'isOldFormVersion',
        'is_transferred_submission' => 'isTransferredSubmission',
        'last_transfer_date' => 'lastTransferDate',
        'entry_id' => 'entryId',
        'form_id' => 'formId',
        'status' => 'status',
        'completed_at' => 'completedAt',
        'created_by' => 'createdBy',
        'created_at' => 'createdAt',
        'opened_for_editing_at' => 'openedForEditingAt',
        'field_data' => 'fieldData',
        'score' => 'score',
        'entry_version_id' => 'entryVersionId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'submission_id' => 'setSubmissionId',
        'project_id' => 'setProjectId',
        'payment_receipt' => 'setPaymentReceipt',
        'collaboration_session_id' => 'setCollaborationSessionId',
        'is_old_form_version' => 'setIsOldFormVersion',
        'is_transferred_submission' => 'setIsTransferredSubmission',
        'last_transfer_date' => 'setLastTransferDate',
        'entry_id' => 'setEntryId',
        'form_id' => 'setFormId',
        'status' => 'setStatus',
        'completed_at' => 'setCompletedAt',
        'created_by' => 'setCreatedBy',
        'created_at' => 'setCreatedAt',
        'opened_for_editing_at' => 'setOpenedForEditingAt',
        'field_data' => 'setFieldData',
        'score' => 'setScore',
        'entry_version_id' => 'setEntryVersionId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'submission_id' => 'getSubmissionId',
        'project_id' => 'getProjectId',
        'payment_receipt' => 'getPaymentReceipt',
        'collaboration_session_id' => 'getCollaborationSessionId',
        'is_old_form_version' => 'getIsOldFormVersion',
        'is_transferred_submission' => 'getIsTransferredSubmission',
        'last_transfer_date' => 'getLastTransferDate',
        'entry_id' => 'getEntryId',
        'form_id' => 'getFormId',
        'status' => 'getStatus',
        'completed_at' => 'getCompletedAt',
        'created_by' => 'getCreatedBy',
        'created_at' => 'getCreatedAt',
        'opened_for_editing_at' => 'getOpenedForEditingAt',
        'field_data' => 'getFieldData',
        'score' => 'getScore',
        'entry_version_id' => 'getEntryVersionId'
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
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('payment_receipt', $data ?? [], null);
        $this->setIfExists('collaboration_session_id', $data ?? [], null);
        $this->setIfExists('is_old_form_version', $data ?? [], null);
        $this->setIfExists('is_transferred_submission', $data ?? [], null);
        $this->setIfExists('last_transfer_date', $data ?? [], null);
        $this->setIfExists('entry_id', $data ?? [], null);
        $this->setIfExists('form_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('completed_at', $data ?? [], null);
        $this->setIfExists('created_by', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('opened_for_editing_at', $data ?? [], null);
        $this->setIfExists('field_data', $data ?? [], null);
        $this->setIfExists('score', $data ?? [], null);
        $this->setIfExists('entry_version_id', $data ?? [], null);
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
     * Gets payment_receipt
     *
     * @return \OpenAPI\Client\Model\PaymentReceipt|null
     */
    public function getPaymentReceipt()
    {
        return $this->container['payment_receipt'];
    }

    /**
     * Sets payment_receipt
     *
     * @param \OpenAPI\Client\Model\PaymentReceipt|null $payment_receipt payment_receipt
     *
     * @return self
     */
    public function setPaymentReceipt($payment_receipt)
    {
        if (is_null($payment_receipt)) {
            throw new \InvalidArgumentException('non-nullable payment_receipt cannot be null');
        }
        $this->container['payment_receipt'] = $payment_receipt;

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
     * Gets is_old_form_version
     *
     * @return bool|null
     */
    public function getIsOldFormVersion()
    {
        return $this->container['is_old_form_version'];
    }

    /**
     * Sets is_old_form_version
     *
     * @param bool|null $is_old_form_version is_old_form_version
     *
     * @return self
     */
    public function setIsOldFormVersion($is_old_form_version)
    {
        if (is_null($is_old_form_version)) {
            throw new \InvalidArgumentException('non-nullable is_old_form_version cannot be null');
        }
        $this->container['is_old_form_version'] = $is_old_form_version;

        return $this;
    }

    /**
     * Gets is_transferred_submission
     *
     * @return bool|null
     */
    public function getIsTransferredSubmission()
    {
        return $this->container['is_transferred_submission'];
    }

    /**
     * Sets is_transferred_submission
     *
     * @param bool|null $is_transferred_submission is_transferred_submission
     *
     * @return self
     */
    public function setIsTransferredSubmission($is_transferred_submission)
    {
        if (is_null($is_transferred_submission)) {
            throw new \InvalidArgumentException('non-nullable is_transferred_submission cannot be null');
        }
        $this->container['is_transferred_submission'] = $is_transferred_submission;

        return $this;
    }

    /**
     * Gets last_transfer_date
     *
     * @return \DateTime|null
     */
    public function getLastTransferDate()
    {
        return $this->container['last_transfer_date'];
    }

    /**
     * Sets last_transfer_date
     *
     * @param \DateTime|null $last_transfer_date last_transfer_date
     *
     * @return self
     */
    public function setLastTransferDate($last_transfer_date)
    {
        if (is_null($last_transfer_date)) {
            array_push($this->openAPINullablesSetToNull, 'last_transfer_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('last_transfer_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['last_transfer_date'] = $last_transfer_date;

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
     * Gets field_data
     *
     * @return \OpenAPI\Client\Model\AdditionalFormEntryResponseFieldDataInner[]|null
     */
    public function getFieldData()
    {
        return $this->container['field_data'];
    }

    /**
     * Sets field_data
     *
     * @param \OpenAPI\Client\Model\AdditionalFormEntryResponseFieldDataInner[]|null $field_data field_data
     *
     * @return self
     */
    public function setFieldData($field_data)
    {
        if (is_null($field_data)) {
            array_push($this->openAPINullablesSetToNull, 'field_data');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('field_data', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['field_data'] = $field_data;

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
     * Gets entry_version_id
     *
     * @return string|null
     */
    public function getEntryVersionId()
    {
        return $this->container['entry_version_id'];
    }

    /**
     * Sets entry_version_id
     *
     * @param string|null $entry_version_id entry_version_id
     *
     * @return self
     */
    public function setEntryVersionId($entry_version_id)
    {
        if (is_null($entry_version_id)) {
            array_push($this->openAPINullablesSetToNull, 'entry_version_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entry_version_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['entry_version_id'] = $entry_version_id;

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


