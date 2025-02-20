<?php
/**
 * TeamMemberResponse
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
 * TeamMemberResponse Class Doc Comment
 *
 * @category Class
 * @package  Submittable
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TeamMemberResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TeamMemberResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_id' => 'string',
        'email' => 'string',
        'title' => 'string',
        'name' => '\Submittable\Model\Name',
        'permission_level' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'user_id' => 'uuid',
        'email' => null,
        'title' => null,
        'name' => null,
        'permission_level' => 'string'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'user_id' => false,
        'email' => true,
        'title' => true,
        'name' => false,
        'permission_level' => false
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
        'user_id' => 'userId',
        'email' => 'email',
        'title' => 'title',
        'name' => 'name',
        'permission_level' => 'permissionLevel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'email' => 'setEmail',
        'title' => 'setTitle',
        'name' => 'setName',
        'permission_level' => 'setPermissionLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'email' => 'getEmail',
        'title' => 'getTitle',
        'name' => 'getName',
        'permission_level' => 'getPermissionLevel'
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

    public const PERMISSION_LEVEL_NONE = 'none';
    public const PERMISSION_LEVEL_LEVEL1 = 'level1';
    public const PERMISSION_LEVEL_LEVEL2 = 'level2';
    public const PERMISSION_LEVEL_LEVEL3 = 'level3';
    public const PERMISSION_LEVEL_LEVEL4 = 'level4';
    public const PERMISSION_LEVEL_LEVEL5 = 'level5';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPermissionLevelAllowableValues()
    {
        return [
            self::PERMISSION_LEVEL_NONE,
            self::PERMISSION_LEVEL_LEVEL1,
            self::PERMISSION_LEVEL_LEVEL2,
            self::PERMISSION_LEVEL_LEVEL3,
            self::PERMISSION_LEVEL_LEVEL4,
            self::PERMISSION_LEVEL_LEVEL5,
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
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('permission_level', $data ?? [], null);
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

        $allowedValues = $this->getPermissionLevelAllowableValues();
        if (!is_null($this->container['permission_level']) && !in_array($this->container['permission_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'permission_level', must be one of '%s'",
                $this->container['permission_level'],
                implode("', '", $allowedValues)
            );
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
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            array_push($this->openAPINullablesSetToNull, 'email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            array_push($this->openAPINullablesSetToNull, 'title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \Submittable\Model\Name|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Submittable\Model\Name|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets permission_level
     *
     * @return string|null
     */
    public function getPermissionLevel()
    {
        return $this->container['permission_level'];
    }

    /**
     * Sets permission_level
     *
     * @param string|null $permission_level permission_level
     *
     * @return self
     */
    public function setPermissionLevel($permission_level)
    {
        if (is_null($permission_level)) {
            throw new \InvalidArgumentException('non-nullable permission_level cannot be null');
        }
        $allowedValues = $this->getPermissionLevelAllowableValues();
        if (!in_array($permission_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'permission_level', must be one of '%s'",
                    $permission_level,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['permission_level'] = $permission_level;

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


