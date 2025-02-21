<?php
/**
 * HttpStatusCode
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
use \Submittable\ObjectSerializer;

/**
 * HttpStatusCode Class Doc Comment
 *
 * @category Class
 * @package  Submittable
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class HttpStatusCode
{
    /**
     * Possible values of this enum
     */
    public const _CONTINUE = 'continue';

    public const SWITCHING_PROTOCOLS = 'switchingProtocols';

    public const PROCESSING = 'processing';

    public const EARLY_HINTS = 'earlyHints';

    public const OK = 'ok';

    public const CREATED = 'created';

    public const ACCEPTED = 'accepted';

    public const NON_AUTHORITATIVE_INFORMATION = 'nonAuthoritativeInformation';

    public const NO_CONTENT = 'noContent';

    public const RESET_CONTENT = 'resetContent';

    public const PARTIAL_CONTENT = 'partialContent';

    public const MULTI_STATUS = 'multiStatus';

    public const ALREADY_REPORTED = 'alreadyReported';

    public const IM_USED = 'imUsed';

    public const MULTIPLE_CHOICES = 'multipleChoices';

    public const AMBIGUOUS = 'ambiguous';

    public const MOVED_PERMANENTLY = 'movedPermanently';

    public const MOVED = 'moved';

    public const FOUND = 'found';

    public const REDIRECT = 'redirect';

    public const SEE_OTHER = 'seeOther';

    public const REDIRECT_METHOD = 'redirectMethod';

    public const NOT_MODIFIED = 'notModified';

    public const USE_PROXY = 'useProxy';

    public const UNUSED = 'unused';

    public const TEMPORARY_REDIRECT = 'temporaryRedirect';

    public const REDIRECT_KEEP_VERB = 'redirectKeepVerb';

    public const PERMANENT_REDIRECT = 'permanentRedirect';

    public const BAD_REQUEST = 'badRequest';

    public const UNAUTHORIZED = 'unauthorized';

    public const PAYMENT_REQUIRED = 'paymentRequired';

    public const FORBIDDEN = 'forbidden';

    public const NOT_FOUND = 'notFound';

    public const METHOD_NOT_ALLOWED = 'methodNotAllowed';

    public const NOT_ACCEPTABLE = 'notAcceptable';

    public const PROXY_AUTHENTICATION_REQUIRED = 'proxyAuthenticationRequired';

    public const REQUEST_TIMEOUT = 'requestTimeout';

    public const CONFLICT = 'conflict';

    public const GONE = 'gone';

    public const LENGTH_REQUIRED = 'lengthRequired';

    public const PRECONDITION_FAILED = 'preconditionFailed';

    public const REQUEST_ENTITY_TOO_LARGE = 'requestEntityTooLarge';

    public const REQUEST_URI_TOO_LONG = 'requestUriTooLong';

    public const UNSUPPORTED_MEDIA_TYPE = 'unsupportedMediaType';

    public const REQUESTED_RANGE_NOT_SATISFIABLE = 'requestedRangeNotSatisfiable';

    public const EXPECTATION_FAILED = 'expectationFailed';

    public const MISDIRECTED_REQUEST = 'misdirectedRequest';

    public const UNPROCESSABLE_ENTITY = 'unprocessableEntity';

    public const UNPROCESSABLE_CONTENT = 'unprocessableContent';

    public const LOCKED = 'locked';

    public const FAILED_DEPENDENCY = 'failedDependency';

    public const UPGRADE_REQUIRED = 'upgradeRequired';

    public const PRECONDITION_REQUIRED = 'preconditionRequired';

    public const TOO_MANY_REQUESTS = 'tooManyRequests';

    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 'requestHeaderFieldsTooLarge';

    public const UNAVAILABLE_FOR_LEGAL_REASONS = 'unavailableForLegalReasons';

    public const INTERNAL_SERVER_ERROR = 'internalServerError';

    public const NOT_IMPLEMENTED = 'notImplemented';

    public const BAD_GATEWAY = 'badGateway';

    public const SERVICE_UNAVAILABLE = 'serviceUnavailable';

    public const GATEWAY_TIMEOUT = 'gatewayTimeout';

    public const HTTP_VERSION_NOT_SUPPORTED = 'httpVersionNotSupported';

    public const VARIANT_ALSO_NEGOTIATES = 'variantAlsoNegotiates';

    public const INSUFFICIENT_STORAGE = 'insufficientStorage';

    public const LOOP_DETECTED = 'loopDetected';

    public const NOT_EXTENDED = 'notExtended';

    public const NETWORK_AUTHENTICATION_REQUIRED = 'networkAuthenticationRequired';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_CONTINUE,
            self::SWITCHING_PROTOCOLS,
            self::PROCESSING,
            self::EARLY_HINTS,
            self::OK,
            self::CREATED,
            self::ACCEPTED,
            self::NON_AUTHORITATIVE_INFORMATION,
            self::NO_CONTENT,
            self::RESET_CONTENT,
            self::PARTIAL_CONTENT,
            self::MULTI_STATUS,
            self::ALREADY_REPORTED,
            self::IM_USED,
            self::MULTIPLE_CHOICES,
            self::AMBIGUOUS,
            self::MOVED_PERMANENTLY,
            self::MOVED,
            self::FOUND,
            self::REDIRECT,
            self::SEE_OTHER,
            self::REDIRECT_METHOD,
            self::NOT_MODIFIED,
            self::USE_PROXY,
            self::UNUSED,
            self::TEMPORARY_REDIRECT,
            self::REDIRECT_KEEP_VERB,
            self::PERMANENT_REDIRECT,
            self::BAD_REQUEST,
            self::UNAUTHORIZED,
            self::PAYMENT_REQUIRED,
            self::FORBIDDEN,
            self::NOT_FOUND,
            self::METHOD_NOT_ALLOWED,
            self::NOT_ACCEPTABLE,
            self::PROXY_AUTHENTICATION_REQUIRED,
            self::REQUEST_TIMEOUT,
            self::CONFLICT,
            self::GONE,
            self::LENGTH_REQUIRED,
            self::PRECONDITION_FAILED,
            self::REQUEST_ENTITY_TOO_LARGE,
            self::REQUEST_URI_TOO_LONG,
            self::UNSUPPORTED_MEDIA_TYPE,
            self::REQUESTED_RANGE_NOT_SATISFIABLE,
            self::EXPECTATION_FAILED,
            self::MISDIRECTED_REQUEST,
            self::UNPROCESSABLE_ENTITY,
            self::UNPROCESSABLE_CONTENT,
            self::LOCKED,
            self::FAILED_DEPENDENCY,
            self::UPGRADE_REQUIRED,
            self::PRECONDITION_REQUIRED,
            self::TOO_MANY_REQUESTS,
            self::REQUEST_HEADER_FIELDS_TOO_LARGE,
            self::UNAVAILABLE_FOR_LEGAL_REASONS,
            self::INTERNAL_SERVER_ERROR,
            self::NOT_IMPLEMENTED,
            self::BAD_GATEWAY,
            self::SERVICE_UNAVAILABLE,
            self::GATEWAY_TIMEOUT,
            self::HTTP_VERSION_NOT_SUPPORTED,
            self::VARIANT_ALSO_NEGOTIATES,
            self::INSUFFICIENT_STORAGE,
            self::LOOP_DETECTED,
            self::NOT_EXTENDED,
            self::NETWORK_AUTHENTICATION_REQUIRED
        ];
    }
}


