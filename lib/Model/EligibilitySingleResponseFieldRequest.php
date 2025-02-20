<?php
/**
 * EligibilitySingleResponseFieldRequest
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
 * EligibilitySingleResponseFieldRequest Class Doc Comment
 *
 * @category Class
 * @package  Submittable
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EligibilitySingleResponseFieldRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EligibilitySingleResponseFieldRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'label' => 'string',
        'options' => '\Submittable\Model\OptionRequest[]',
        'eligible_subsections' => 'string[]',
        'enable_branching' => 'bool',
        'auto_label' => 'bool',
        'is_custom_auto_label' => 'bool',
        'custom_auto_label' => 'string',
        'inline' => 'bool',
        'is_concealed' => 'bool',
        'field_type' => 'string',
        'form_field_id' => 'string',
        'additional_instructions' => 'string',
        'is_required' => 'bool',
        'branch_id' => 'string',
        'block_id' => 'string',
        'tags' => 'string[]',
        'share_feedback' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'label' => null,
        'options' => null,
        'eligible_subsections' => null,
        'enable_branching' => null,
        'auto_label' => null,
        'is_custom_auto_label' => null,
        'custom_auto_label' => null,
        'inline' => null,
        'is_concealed' => null,
        'field_type' => null,
        'form_field_id' => null,
        'additional_instructions' => null,
        'is_required' => null,
        'branch_id' => null,
        'block_id' => null,
        'tags' => null,
        'share_feedback' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'label' => false,
        'options' => true,
        'eligible_subsections' => true,
        'enable_branching' => false,
        'auto_label' => false,
        'is_custom_auto_label' => false,
        'custom_auto_label' => true,
        'inline' => false,
        'is_concealed' => false,
        'field_type' => false,
        'form_field_id' => true,
        'additional_instructions' => true,
        'is_required' => false,
        'branch_id' => true,
        'block_id' => true,
        'tags' => true,
        'share_feedback' => false
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
        'label' => 'label',
        'options' => 'options',
        'eligible_subsections' => 'eligibleSubsections',
        'enable_branching' => 'enableBranching',
        'auto_label' => 'autoLabel',
        'is_custom_auto_label' => 'isCustomAutoLabel',
        'custom_auto_label' => 'customAutoLabel',
        'inline' => 'inline',
        'is_concealed' => 'isConcealed',
        'field_type' => 'fieldType',
        'form_field_id' => 'formFieldId',
        'additional_instructions' => 'additionalInstructions',
        'is_required' => 'isRequired',
        'branch_id' => 'branchId',
        'block_id' => 'blockId',
        'tags' => 'tags',
        'share_feedback' => 'shareFeedback'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'label' => 'setLabel',
        'options' => 'setOptions',
        'eligible_subsections' => 'setEligibleSubsections',
        'enable_branching' => 'setEnableBranching',
        'auto_label' => 'setAutoLabel',
        'is_custom_auto_label' => 'setIsCustomAutoLabel',
        'custom_auto_label' => 'setCustomAutoLabel',
        'inline' => 'setInline',
        'is_concealed' => 'setIsConcealed',
        'field_type' => 'setFieldType',
        'form_field_id' => 'setFormFieldId',
        'additional_instructions' => 'setAdditionalInstructions',
        'is_required' => 'setIsRequired',
        'branch_id' => 'setBranchId',
        'block_id' => 'setBlockId',
        'tags' => 'setTags',
        'share_feedback' => 'setShareFeedback'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'label' => 'getLabel',
        'options' => 'getOptions',
        'eligible_subsections' => 'getEligibleSubsections',
        'enable_branching' => 'getEnableBranching',
        'auto_label' => 'getAutoLabel',
        'is_custom_auto_label' => 'getIsCustomAutoLabel',
        'custom_auto_label' => 'getCustomAutoLabel',
        'inline' => 'getInline',
        'is_concealed' => 'getIsConcealed',
        'field_type' => 'getFieldType',
        'form_field_id' => 'getFormFieldId',
        'additional_instructions' => 'getAdditionalInstructions',
        'is_required' => 'getIsRequired',
        'branch_id' => 'getBranchId',
        'block_id' => 'getBlockId',
        'tags' => 'getTags',
        'share_feedback' => 'getShareFeedback'
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
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('eligible_subsections', $data ?? [], null);
        $this->setIfExists('enable_branching', $data ?? [], null);
        $this->setIfExists('auto_label', $data ?? [], null);
        $this->setIfExists('is_custom_auto_label', $data ?? [], null);
        $this->setIfExists('custom_auto_label', $data ?? [], null);
        $this->setIfExists('inline', $data ?? [], null);
        $this->setIfExists('is_concealed', $data ?? [], null);
        $this->setIfExists('field_type', $data ?? [], null);
        $this->setIfExists('form_field_id', $data ?? [], null);
        $this->setIfExists('additional_instructions', $data ?? [], null);
        $this->setIfExists('is_required', $data ?? [], null);
        $this->setIfExists('branch_id', $data ?? [], null);
        $this->setIfExists('block_id', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('share_feedback', $data ?? [], null);
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

        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ((mb_strlen($this->container['label']) < 1)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['field_type'] === null) {
            $invalidProperties[] = "'field_type' can't be null";
        }
        if ((mb_strlen($this->container['field_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'field_type', the character length must be bigger than or equal to 1.";
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
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }

        if ((mb_strlen($label) < 1)) {
            throw new \InvalidArgumentException('invalid length for $label when calling EligibilitySingleResponseFieldRequest., must be bigger than or equal to 1.');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Submittable\Model\OptionRequest[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Submittable\Model\OptionRequest[]|null $options options
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            array_push($this->openAPINullablesSetToNull, 'options');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('options', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets eligible_subsections
     *
     * @return string[]|null
     */
    public function getEligibleSubsections()
    {
        return $this->container['eligible_subsections'];
    }

    /**
     * Sets eligible_subsections
     *
     * @param string[]|null $eligible_subsections eligible_subsections
     *
     * @return self
     */
    public function setEligibleSubsections($eligible_subsections)
    {
        if (is_null($eligible_subsections)) {
            array_push($this->openAPINullablesSetToNull, 'eligible_subsections');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('eligible_subsections', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['eligible_subsections'] = $eligible_subsections;

        return $this;
    }

    /**
     * Gets enable_branching
     *
     * @return bool|null
     */
    public function getEnableBranching()
    {
        return $this->container['enable_branching'];
    }

    /**
     * Sets enable_branching
     *
     * @param bool|null $enable_branching enable_branching
     *
     * @return self
     */
    public function setEnableBranching($enable_branching)
    {
        if (is_null($enable_branching)) {
            throw new \InvalidArgumentException('non-nullable enable_branching cannot be null');
        }
        $this->container['enable_branching'] = $enable_branching;

        return $this;
    }

    /**
     * Gets auto_label
     *
     * @return bool|null
     */
    public function getAutoLabel()
    {
        return $this->container['auto_label'];
    }

    /**
     * Sets auto_label
     *
     * @param bool|null $auto_label auto_label
     *
     * @return self
     */
    public function setAutoLabel($auto_label)
    {
        if (is_null($auto_label)) {
            throw new \InvalidArgumentException('non-nullable auto_label cannot be null');
        }
        $this->container['auto_label'] = $auto_label;

        return $this;
    }

    /**
     * Gets is_custom_auto_label
     *
     * @return bool|null
     */
    public function getIsCustomAutoLabel()
    {
        return $this->container['is_custom_auto_label'];
    }

    /**
     * Sets is_custom_auto_label
     *
     * @param bool|null $is_custom_auto_label is_custom_auto_label
     *
     * @return self
     */
    public function setIsCustomAutoLabel($is_custom_auto_label)
    {
        if (is_null($is_custom_auto_label)) {
            throw new \InvalidArgumentException('non-nullable is_custom_auto_label cannot be null');
        }
        $this->container['is_custom_auto_label'] = $is_custom_auto_label;

        return $this;
    }

    /**
     * Gets custom_auto_label
     *
     * @return string|null
     */
    public function getCustomAutoLabel()
    {
        return $this->container['custom_auto_label'];
    }

    /**
     * Sets custom_auto_label
     *
     * @param string|null $custom_auto_label custom_auto_label
     *
     * @return self
     */
    public function setCustomAutoLabel($custom_auto_label)
    {
        if (is_null($custom_auto_label)) {
            array_push($this->openAPINullablesSetToNull, 'custom_auto_label');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom_auto_label', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['custom_auto_label'] = $custom_auto_label;

        return $this;
    }

    /**
     * Gets inline
     *
     * @return bool|null
     */
    public function getInline()
    {
        return $this->container['inline'];
    }

    /**
     * Sets inline
     *
     * @param bool|null $inline inline
     *
     * @return self
     */
    public function setInline($inline)
    {
        if (is_null($inline)) {
            throw new \InvalidArgumentException('non-nullable inline cannot be null');
        }
        $this->container['inline'] = $inline;

        return $this;
    }

    /**
     * Gets is_concealed
     *
     * @return bool|null
     */
    public function getIsConcealed()
    {
        return $this->container['is_concealed'];
    }

    /**
     * Sets is_concealed
     *
     * @param bool|null $is_concealed is_concealed
     *
     * @return self
     */
    public function setIsConcealed($is_concealed)
    {
        if (is_null($is_concealed)) {
            throw new \InvalidArgumentException('non-nullable is_concealed cannot be null');
        }
        $this->container['is_concealed'] = $is_concealed;

        return $this;
    }

    /**
     * Gets field_type
     *
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     *
     * @param string $field_type field_type
     *
     * @return self
     */
    public function setFieldType($field_type)
    {
        if (is_null($field_type)) {
            throw new \InvalidArgumentException('non-nullable field_type cannot be null');
        }

        if ((mb_strlen($field_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $field_type when calling EligibilitySingleResponseFieldRequest., must be bigger than or equal to 1.');
        }

        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets form_field_id
     *
     * @return string|null
     */
    public function getFormFieldId()
    {
        return $this->container['form_field_id'];
    }

    /**
     * Sets form_field_id
     *
     * @param string|null $form_field_id form_field_id
     *
     * @return self
     */
    public function setFormFieldId($form_field_id)
    {
        if (is_null($form_field_id)) {
            array_push($this->openAPINullablesSetToNull, 'form_field_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('form_field_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['form_field_id'] = $form_field_id;

        return $this;
    }

    /**
     * Gets additional_instructions
     *
     * @return string|null
     */
    public function getAdditionalInstructions()
    {
        return $this->container['additional_instructions'];
    }

    /**
     * Sets additional_instructions
     *
     * @param string|null $additional_instructions additional_instructions
     *
     * @return self
     */
    public function setAdditionalInstructions($additional_instructions)
    {
        if (is_null($additional_instructions)) {
            array_push($this->openAPINullablesSetToNull, 'additional_instructions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('additional_instructions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['additional_instructions'] = $additional_instructions;

        return $this;
    }

    /**
     * Gets is_required
     *
     * @return bool|null
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     *
     * @param bool|null $is_required is_required
     *
     * @return self
     */
    public function setIsRequired($is_required)
    {
        if (is_null($is_required)) {
            throw new \InvalidArgumentException('non-nullable is_required cannot be null');
        }
        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets branch_id
     *
     * @return string|null
     */
    public function getBranchId()
    {
        return $this->container['branch_id'];
    }

    /**
     * Sets branch_id
     *
     * @param string|null $branch_id branch_id
     *
     * @return self
     */
    public function setBranchId($branch_id)
    {
        if (is_null($branch_id)) {
            array_push($this->openAPINullablesSetToNull, 'branch_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('branch_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['branch_id'] = $branch_id;

        return $this;
    }

    /**
     * Gets block_id
     *
     * @return string|null
     */
    public function getBlockId()
    {
        return $this->container['block_id'];
    }

    /**
     * Sets block_id
     *
     * @param string|null $block_id block_id
     *
     * @return self
     */
    public function setBlockId($block_id)
    {
        if (is_null($block_id)) {
            array_push($this->openAPINullablesSetToNull, 'block_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('block_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['block_id'] = $block_id;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            array_push($this->openAPINullablesSetToNull, 'tags');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tags', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets share_feedback
     *
     * @return bool|null
     */
    public function getShareFeedback()
    {
        return $this->container['share_feedback'];
    }

    /**
     * Sets share_feedback
     *
     * @param bool|null $share_feedback share_feedback
     *
     * @return self
     */
    public function setShareFeedback($share_feedback)
    {
        if (is_null($share_feedback)) {
            throw new \InvalidArgumentException('non-nullable share_feedback cannot be null');
        }
        $this->container['share_feedback'] = $share_feedback;

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


