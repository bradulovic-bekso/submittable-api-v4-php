<?php
/**
 * ProjectGalleryResponse
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
 * ProjectGalleryResponse Class Doc Comment
 *
 * @category Class
 * @package  Submittable
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProjectGalleryResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProjectGalleryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enable_gallery' => 'bool',
        'gallery_title' => 'string',
        'gallery_view_display_submitter' => 'bool',
        'gallery_view_label' => 'string',
        'gallery_view_labels' => 'string[]',
        'enable_gallery_label_filter' => 'bool',
        'gallery_sort_order' => '\Submittable\Model\GallerySortOrder',
        'enable_gallery_voting' => 'bool',
        'enable_anonymous_gallery_voting' => 'bool',
        'enable_validated_public_voting' => 'bool',
        'enable_limit_gallery_votes' => 'bool',
        'vote_limit_frequency' => 'int',
        'vote_limit_period' => '\Submittable\Model\GalleryVotePeriod',
        'hide_gallery_votes' => 'bool',
        'enable_automatic_voting' => 'bool',
        'show_submit_button_on_gallery' => 'bool',
        'share_gallery_link' => 'bool',
        'gallery_confirmation_link_text' => 'string',
        'gallery_guidelines' => 'string',
        'gallery_guidelines_json' => 'string',
        'fields' => '\Submittable\Model\GalleryFieldResponse[]',
        'gallery_scores_last_reset_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enable_gallery' => null,
        'gallery_title' => null,
        'gallery_view_display_submitter' => null,
        'gallery_view_label' => null,
        'gallery_view_labels' => null,
        'enable_gallery_label_filter' => null,
        'gallery_sort_order' => null,
        'enable_gallery_voting' => null,
        'enable_anonymous_gallery_voting' => null,
        'enable_validated_public_voting' => null,
        'enable_limit_gallery_votes' => null,
        'vote_limit_frequency' => 'int32',
        'vote_limit_period' => null,
        'hide_gallery_votes' => null,
        'enable_automatic_voting' => null,
        'show_submit_button_on_gallery' => null,
        'share_gallery_link' => null,
        'gallery_confirmation_link_text' => null,
        'gallery_guidelines' => null,
        'gallery_guidelines_json' => null,
        'fields' => null,
        'gallery_scores_last_reset_date' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enable_gallery' => false,
        'gallery_title' => true,
        'gallery_view_display_submitter' => false,
        'gallery_view_label' => true,
        'gallery_view_labels' => true,
        'enable_gallery_label_filter' => false,
        'gallery_sort_order' => false,
        'enable_gallery_voting' => false,
        'enable_anonymous_gallery_voting' => false,
        'enable_validated_public_voting' => false,
        'enable_limit_gallery_votes' => false,
        'vote_limit_frequency' => true,
        'vote_limit_period' => false,
        'hide_gallery_votes' => false,
        'enable_automatic_voting' => false,
        'show_submit_button_on_gallery' => false,
        'share_gallery_link' => false,
        'gallery_confirmation_link_text' => true,
        'gallery_guidelines' => true,
        'gallery_guidelines_json' => true,
        'fields' => true,
        'gallery_scores_last_reset_date' => true
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
        'enable_gallery' => 'enableGallery',
        'gallery_title' => 'galleryTitle',
        'gallery_view_display_submitter' => 'galleryViewDisplaySubmitter',
        'gallery_view_label' => 'galleryViewLabel',
        'gallery_view_labels' => 'galleryViewLabels',
        'enable_gallery_label_filter' => 'enableGalleryLabelFilter',
        'gallery_sort_order' => 'gallerySortOrder',
        'enable_gallery_voting' => 'enableGalleryVoting',
        'enable_anonymous_gallery_voting' => 'enableAnonymousGalleryVoting',
        'enable_validated_public_voting' => 'enableValidatedPublicVoting',
        'enable_limit_gallery_votes' => 'enableLimitGalleryVotes',
        'vote_limit_frequency' => 'voteLimitFrequency',
        'vote_limit_period' => 'voteLimitPeriod',
        'hide_gallery_votes' => 'hideGalleryVotes',
        'enable_automatic_voting' => 'enableAutomaticVoting',
        'show_submit_button_on_gallery' => 'showSubmitButtonOnGallery',
        'share_gallery_link' => 'shareGalleryLink',
        'gallery_confirmation_link_text' => 'galleryConfirmationLinkText',
        'gallery_guidelines' => 'galleryGuidelines',
        'gallery_guidelines_json' => 'galleryGuidelinesJson',
        'fields' => 'fields',
        'gallery_scores_last_reset_date' => 'galleryScoresLastResetDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enable_gallery' => 'setEnableGallery',
        'gallery_title' => 'setGalleryTitle',
        'gallery_view_display_submitter' => 'setGalleryViewDisplaySubmitter',
        'gallery_view_label' => 'setGalleryViewLabel',
        'gallery_view_labels' => 'setGalleryViewLabels',
        'enable_gallery_label_filter' => 'setEnableGalleryLabelFilter',
        'gallery_sort_order' => 'setGallerySortOrder',
        'enable_gallery_voting' => 'setEnableGalleryVoting',
        'enable_anonymous_gallery_voting' => 'setEnableAnonymousGalleryVoting',
        'enable_validated_public_voting' => 'setEnableValidatedPublicVoting',
        'enable_limit_gallery_votes' => 'setEnableLimitGalleryVotes',
        'vote_limit_frequency' => 'setVoteLimitFrequency',
        'vote_limit_period' => 'setVoteLimitPeriod',
        'hide_gallery_votes' => 'setHideGalleryVotes',
        'enable_automatic_voting' => 'setEnableAutomaticVoting',
        'show_submit_button_on_gallery' => 'setShowSubmitButtonOnGallery',
        'share_gallery_link' => 'setShareGalleryLink',
        'gallery_confirmation_link_text' => 'setGalleryConfirmationLinkText',
        'gallery_guidelines' => 'setGalleryGuidelines',
        'gallery_guidelines_json' => 'setGalleryGuidelinesJson',
        'fields' => 'setFields',
        'gallery_scores_last_reset_date' => 'setGalleryScoresLastResetDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enable_gallery' => 'getEnableGallery',
        'gallery_title' => 'getGalleryTitle',
        'gallery_view_display_submitter' => 'getGalleryViewDisplaySubmitter',
        'gallery_view_label' => 'getGalleryViewLabel',
        'gallery_view_labels' => 'getGalleryViewLabels',
        'enable_gallery_label_filter' => 'getEnableGalleryLabelFilter',
        'gallery_sort_order' => 'getGallerySortOrder',
        'enable_gallery_voting' => 'getEnableGalleryVoting',
        'enable_anonymous_gallery_voting' => 'getEnableAnonymousGalleryVoting',
        'enable_validated_public_voting' => 'getEnableValidatedPublicVoting',
        'enable_limit_gallery_votes' => 'getEnableLimitGalleryVotes',
        'vote_limit_frequency' => 'getVoteLimitFrequency',
        'vote_limit_period' => 'getVoteLimitPeriod',
        'hide_gallery_votes' => 'getHideGalleryVotes',
        'enable_automatic_voting' => 'getEnableAutomaticVoting',
        'show_submit_button_on_gallery' => 'getShowSubmitButtonOnGallery',
        'share_gallery_link' => 'getShareGalleryLink',
        'gallery_confirmation_link_text' => 'getGalleryConfirmationLinkText',
        'gallery_guidelines' => 'getGalleryGuidelines',
        'gallery_guidelines_json' => 'getGalleryGuidelinesJson',
        'fields' => 'getFields',
        'gallery_scores_last_reset_date' => 'getGalleryScoresLastResetDate'
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
        $this->setIfExists('enable_gallery', $data ?? [], null);
        $this->setIfExists('gallery_title', $data ?? [], null);
        $this->setIfExists('gallery_view_display_submitter', $data ?? [], null);
        $this->setIfExists('gallery_view_label', $data ?? [], null);
        $this->setIfExists('gallery_view_labels', $data ?? [], null);
        $this->setIfExists('enable_gallery_label_filter', $data ?? [], null);
        $this->setIfExists('gallery_sort_order', $data ?? [], null);
        $this->setIfExists('enable_gallery_voting', $data ?? [], null);
        $this->setIfExists('enable_anonymous_gallery_voting', $data ?? [], null);
        $this->setIfExists('enable_validated_public_voting', $data ?? [], null);
        $this->setIfExists('enable_limit_gallery_votes', $data ?? [], null);
        $this->setIfExists('vote_limit_frequency', $data ?? [], null);
        $this->setIfExists('vote_limit_period', $data ?? [], null);
        $this->setIfExists('hide_gallery_votes', $data ?? [], null);
        $this->setIfExists('enable_automatic_voting', $data ?? [], null);
        $this->setIfExists('show_submit_button_on_gallery', $data ?? [], null);
        $this->setIfExists('share_gallery_link', $data ?? [], null);
        $this->setIfExists('gallery_confirmation_link_text', $data ?? [], null);
        $this->setIfExists('gallery_guidelines', $data ?? [], null);
        $this->setIfExists('gallery_guidelines_json', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('gallery_scores_last_reset_date', $data ?? [], null);
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
     * Gets enable_gallery
     *
     * @return bool|null
     */
    public function getEnableGallery()
    {
        return $this->container['enable_gallery'];
    }

    /**
     * Sets enable_gallery
     *
     * @param bool|null $enable_gallery enable_gallery
     *
     * @return self
     */
    public function setEnableGallery($enable_gallery)
    {
        if (is_null($enable_gallery)) {
            throw new \InvalidArgumentException('non-nullable enable_gallery cannot be null');
        }
        $this->container['enable_gallery'] = $enable_gallery;

        return $this;
    }

    /**
     * Gets gallery_title
     *
     * @return string|null
     */
    public function getGalleryTitle()
    {
        return $this->container['gallery_title'];
    }

    /**
     * Sets gallery_title
     *
     * @param string|null $gallery_title gallery_title
     *
     * @return self
     */
    public function setGalleryTitle($gallery_title)
    {
        if (is_null($gallery_title)) {
            array_push($this->openAPINullablesSetToNull, 'gallery_title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gallery_title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gallery_title'] = $gallery_title;

        return $this;
    }

    /**
     * Gets gallery_view_display_submitter
     *
     * @return bool|null
     */
    public function getGalleryViewDisplaySubmitter()
    {
        return $this->container['gallery_view_display_submitter'];
    }

    /**
     * Sets gallery_view_display_submitter
     *
     * @param bool|null $gallery_view_display_submitter gallery_view_display_submitter
     *
     * @return self
     */
    public function setGalleryViewDisplaySubmitter($gallery_view_display_submitter)
    {
        if (is_null($gallery_view_display_submitter)) {
            throw new \InvalidArgumentException('non-nullable gallery_view_display_submitter cannot be null');
        }
        $this->container['gallery_view_display_submitter'] = $gallery_view_display_submitter;

        return $this;
    }

    /**
     * Gets gallery_view_label
     *
     * @return string|null
     */
    public function getGalleryViewLabel()
    {
        return $this->container['gallery_view_label'];
    }

    /**
     * Sets gallery_view_label
     *
     * @param string|null $gallery_view_label gallery_view_label
     *
     * @return self
     */
    public function setGalleryViewLabel($gallery_view_label)
    {
        if (is_null($gallery_view_label)) {
            array_push($this->openAPINullablesSetToNull, 'gallery_view_label');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gallery_view_label', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gallery_view_label'] = $gallery_view_label;

        return $this;
    }

    /**
     * Gets gallery_view_labels
     *
     * @return string[]|null
     */
    public function getGalleryViewLabels()
    {
        return $this->container['gallery_view_labels'];
    }

    /**
     * Sets gallery_view_labels
     *
     * @param string[]|null $gallery_view_labels gallery_view_labels
     *
     * @return self
     */
    public function setGalleryViewLabels($gallery_view_labels)
    {
        if (is_null($gallery_view_labels)) {
            array_push($this->openAPINullablesSetToNull, 'gallery_view_labels');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gallery_view_labels', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gallery_view_labels'] = $gallery_view_labels;

        return $this;
    }

    /**
     * Gets enable_gallery_label_filter
     *
     * @return bool|null
     */
    public function getEnableGalleryLabelFilter()
    {
        return $this->container['enable_gallery_label_filter'];
    }

    /**
     * Sets enable_gallery_label_filter
     *
     * @param bool|null $enable_gallery_label_filter enable_gallery_label_filter
     *
     * @return self
     */
    public function setEnableGalleryLabelFilter($enable_gallery_label_filter)
    {
        if (is_null($enable_gallery_label_filter)) {
            throw new \InvalidArgumentException('non-nullable enable_gallery_label_filter cannot be null');
        }
        $this->container['enable_gallery_label_filter'] = $enable_gallery_label_filter;

        return $this;
    }

    /**
     * Gets gallery_sort_order
     *
     * @return \Submittable\Model\GallerySortOrder|null
     */
    public function getGallerySortOrder()
    {
        return $this->container['gallery_sort_order'];
    }

    /**
     * Sets gallery_sort_order
     *
     * @param \Submittable\Model\GallerySortOrder|null $gallery_sort_order gallery_sort_order
     *
     * @return self
     */
    public function setGallerySortOrder($gallery_sort_order)
    {
        if (is_null($gallery_sort_order)) {
            throw new \InvalidArgumentException('non-nullable gallery_sort_order cannot be null');
        }
        $this->container['gallery_sort_order'] = $gallery_sort_order;

        return $this;
    }

    /**
     * Gets enable_gallery_voting
     *
     * @return bool|null
     */
    public function getEnableGalleryVoting()
    {
        return $this->container['enable_gallery_voting'];
    }

    /**
     * Sets enable_gallery_voting
     *
     * @param bool|null $enable_gallery_voting enable_gallery_voting
     *
     * @return self
     */
    public function setEnableGalleryVoting($enable_gallery_voting)
    {
        if (is_null($enable_gallery_voting)) {
            throw new \InvalidArgumentException('non-nullable enable_gallery_voting cannot be null');
        }
        $this->container['enable_gallery_voting'] = $enable_gallery_voting;

        return $this;
    }

    /**
     * Gets enable_anonymous_gallery_voting
     *
     * @return bool|null
     */
    public function getEnableAnonymousGalleryVoting()
    {
        return $this->container['enable_anonymous_gallery_voting'];
    }

    /**
     * Sets enable_anonymous_gallery_voting
     *
     * @param bool|null $enable_anonymous_gallery_voting enable_anonymous_gallery_voting
     *
     * @return self
     */
    public function setEnableAnonymousGalleryVoting($enable_anonymous_gallery_voting)
    {
        if (is_null($enable_anonymous_gallery_voting)) {
            throw new \InvalidArgumentException('non-nullable enable_anonymous_gallery_voting cannot be null');
        }
        $this->container['enable_anonymous_gallery_voting'] = $enable_anonymous_gallery_voting;

        return $this;
    }

    /**
     * Gets enable_validated_public_voting
     *
     * @return bool|null
     */
    public function getEnableValidatedPublicVoting()
    {
        return $this->container['enable_validated_public_voting'];
    }

    /**
     * Sets enable_validated_public_voting
     *
     * @param bool|null $enable_validated_public_voting enable_validated_public_voting
     *
     * @return self
     */
    public function setEnableValidatedPublicVoting($enable_validated_public_voting)
    {
        if (is_null($enable_validated_public_voting)) {
            throw new \InvalidArgumentException('non-nullable enable_validated_public_voting cannot be null');
        }
        $this->container['enable_validated_public_voting'] = $enable_validated_public_voting;

        return $this;
    }

    /**
     * Gets enable_limit_gallery_votes
     *
     * @return bool|null
     */
    public function getEnableLimitGalleryVotes()
    {
        return $this->container['enable_limit_gallery_votes'];
    }

    /**
     * Sets enable_limit_gallery_votes
     *
     * @param bool|null $enable_limit_gallery_votes enable_limit_gallery_votes
     *
     * @return self
     */
    public function setEnableLimitGalleryVotes($enable_limit_gallery_votes)
    {
        if (is_null($enable_limit_gallery_votes)) {
            throw new \InvalidArgumentException('non-nullable enable_limit_gallery_votes cannot be null');
        }
        $this->container['enable_limit_gallery_votes'] = $enable_limit_gallery_votes;

        return $this;
    }

    /**
     * Gets vote_limit_frequency
     *
     * @return int|null
     */
    public function getVoteLimitFrequency()
    {
        return $this->container['vote_limit_frequency'];
    }

    /**
     * Sets vote_limit_frequency
     *
     * @param int|null $vote_limit_frequency vote_limit_frequency
     *
     * @return self
     */
    public function setVoteLimitFrequency($vote_limit_frequency)
    {
        if (is_null($vote_limit_frequency)) {
            array_push($this->openAPINullablesSetToNull, 'vote_limit_frequency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vote_limit_frequency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vote_limit_frequency'] = $vote_limit_frequency;

        return $this;
    }

    /**
     * Gets vote_limit_period
     *
     * @return \Submittable\Model\GalleryVotePeriod|null
     */
    public function getVoteLimitPeriod()
    {
        return $this->container['vote_limit_period'];
    }

    /**
     * Sets vote_limit_period
     *
     * @param \Submittable\Model\GalleryVotePeriod|null $vote_limit_period vote_limit_period
     *
     * @return self
     */
    public function setVoteLimitPeriod($vote_limit_period)
    {
        if (is_null($vote_limit_period)) {
            throw new \InvalidArgumentException('non-nullable vote_limit_period cannot be null');
        }
        $this->container['vote_limit_period'] = $vote_limit_period;

        return $this;
    }

    /**
     * Gets hide_gallery_votes
     *
     * @return bool|null
     */
    public function getHideGalleryVotes()
    {
        return $this->container['hide_gallery_votes'];
    }

    /**
     * Sets hide_gallery_votes
     *
     * @param bool|null $hide_gallery_votes hide_gallery_votes
     *
     * @return self
     */
    public function setHideGalleryVotes($hide_gallery_votes)
    {
        if (is_null($hide_gallery_votes)) {
            throw new \InvalidArgumentException('non-nullable hide_gallery_votes cannot be null');
        }
        $this->container['hide_gallery_votes'] = $hide_gallery_votes;

        return $this;
    }

    /**
     * Gets enable_automatic_voting
     *
     * @return bool|null
     */
    public function getEnableAutomaticVoting()
    {
        return $this->container['enable_automatic_voting'];
    }

    /**
     * Sets enable_automatic_voting
     *
     * @param bool|null $enable_automatic_voting enable_automatic_voting
     *
     * @return self
     */
    public function setEnableAutomaticVoting($enable_automatic_voting)
    {
        if (is_null($enable_automatic_voting)) {
            throw new \InvalidArgumentException('non-nullable enable_automatic_voting cannot be null');
        }
        $this->container['enable_automatic_voting'] = $enable_automatic_voting;

        return $this;
    }

    /**
     * Gets show_submit_button_on_gallery
     *
     * @return bool|null
     */
    public function getShowSubmitButtonOnGallery()
    {
        return $this->container['show_submit_button_on_gallery'];
    }

    /**
     * Sets show_submit_button_on_gallery
     *
     * @param bool|null $show_submit_button_on_gallery show_submit_button_on_gallery
     *
     * @return self
     */
    public function setShowSubmitButtonOnGallery($show_submit_button_on_gallery)
    {
        if (is_null($show_submit_button_on_gallery)) {
            throw new \InvalidArgumentException('non-nullable show_submit_button_on_gallery cannot be null');
        }
        $this->container['show_submit_button_on_gallery'] = $show_submit_button_on_gallery;

        return $this;
    }

    /**
     * Gets share_gallery_link
     *
     * @return bool|null
     */
    public function getShareGalleryLink()
    {
        return $this->container['share_gallery_link'];
    }

    /**
     * Sets share_gallery_link
     *
     * @param bool|null $share_gallery_link share_gallery_link
     *
     * @return self
     */
    public function setShareGalleryLink($share_gallery_link)
    {
        if (is_null($share_gallery_link)) {
            throw new \InvalidArgumentException('non-nullable share_gallery_link cannot be null');
        }
        $this->container['share_gallery_link'] = $share_gallery_link;

        return $this;
    }

    /**
     * Gets gallery_confirmation_link_text
     *
     * @return string|null
     */
    public function getGalleryConfirmationLinkText()
    {
        return $this->container['gallery_confirmation_link_text'];
    }

    /**
     * Sets gallery_confirmation_link_text
     *
     * @param string|null $gallery_confirmation_link_text gallery_confirmation_link_text
     *
     * @return self
     */
    public function setGalleryConfirmationLinkText($gallery_confirmation_link_text)
    {
        if (is_null($gallery_confirmation_link_text)) {
            array_push($this->openAPINullablesSetToNull, 'gallery_confirmation_link_text');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gallery_confirmation_link_text', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gallery_confirmation_link_text'] = $gallery_confirmation_link_text;

        return $this;
    }

    /**
     * Gets gallery_guidelines
     *
     * @return string|null
     */
    public function getGalleryGuidelines()
    {
        return $this->container['gallery_guidelines'];
    }

    /**
     * Sets gallery_guidelines
     *
     * @param string|null $gallery_guidelines gallery_guidelines
     *
     * @return self
     */
    public function setGalleryGuidelines($gallery_guidelines)
    {
        if (is_null($gallery_guidelines)) {
            array_push($this->openAPINullablesSetToNull, 'gallery_guidelines');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gallery_guidelines', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gallery_guidelines'] = $gallery_guidelines;

        return $this;
    }

    /**
     * Gets gallery_guidelines_json
     *
     * @return string|null
     */
    public function getGalleryGuidelinesJson()
    {
        return $this->container['gallery_guidelines_json'];
    }

    /**
     * Sets gallery_guidelines_json
     *
     * @param string|null $gallery_guidelines_json gallery_guidelines_json
     *
     * @return self
     */
    public function setGalleryGuidelinesJson($gallery_guidelines_json)
    {
        if (is_null($gallery_guidelines_json)) {
            array_push($this->openAPINullablesSetToNull, 'gallery_guidelines_json');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gallery_guidelines_json', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gallery_guidelines_json'] = $gallery_guidelines_json;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \Submittable\Model\GalleryFieldResponse[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \Submittable\Model\GalleryFieldResponse[]|null $fields fields
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
     * Gets gallery_scores_last_reset_date
     *
     * @return \DateTime|null
     */
    public function getGalleryScoresLastResetDate()
    {
        return $this->container['gallery_scores_last_reset_date'];
    }

    /**
     * Sets gallery_scores_last_reset_date
     *
     * @param \DateTime|null $gallery_scores_last_reset_date gallery_scores_last_reset_date
     *
     * @return self
     */
    public function setGalleryScoresLastResetDate($gallery_scores_last_reset_date)
    {
        if (is_null($gallery_scores_last_reset_date)) {
            array_push($this->openAPINullablesSetToNull, 'gallery_scores_last_reset_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('gallery_scores_last_reset_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['gallery_scores_last_reset_date'] = $gallery_scores_last_reset_date;

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


