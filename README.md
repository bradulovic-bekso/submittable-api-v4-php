# OpenAPIClient-php


This page contains the documentation on how to use Submittable through API calls.

### Breaking changes 

* All v3/requests and v3/responses endpoints merged into v4/entries endpoints
    * Entries are a combination of both the request and response from v3
* All endpoints returning a page now use a continuation token instead of page number and page size
    * Endpoints no longer return a count of how many items there are
    * Endpoints no longer return how many pages there are
    * Filters and size are made on the first request only, subsequent requests can only use the continuation token returned on the response.
* Get a submission now returns formEntries instead of formResponses
    * formEntries does not contain the fieldData property
        * To get a single entry use the \"Get an entry\" endpoint, /v4/entries/{entryId}
        * To get all entries for a submission use the \"Get a submission’s entries\" endpoint, /v4/entries/submissions/{submissionId}
* All submissionId properties are now guids instead of integers
* All labelId properties are now guids instead of integers
* LegacyProjects.Include and LegacyProjects.Exclude on /v3/submissions have been removed
* Update project endpoint /v3/projects/{projectId} now updates everything for a project
* v3/projects/stages endpoints are removed, now review stages are managed by the create and update project endpoints
* Get a list of team members and their assignment counts /v3/organizations/team/assignments has been replaced by /v4/organizations/team to get team members and /v4/submissions/team/assignment to get their assignment counts


### Authentication

To access the API, you must present an API Key provisioned for your organization.

The API Key is sent using a basic authentication header, with the API key as the username and a blank password.
Please ensure that the value is formatted as `{apiKey}`.

```
Authorization: Basic {apiKey}
```

### Request Content Type

All endpoints, unless otherwise noted, accept and produce `application/json`.
Please ensure the `Content-Type` header for POST and PUT requests are set correctly.



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Submittable\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_additional_form_entry_request = new \Submittable\Model\CreateAdditionalFormEntryRequest(); // \Submittable\Model\CreateAdditionalFormEntryRequest

try {
    $result = $apiInstance->v4EntriesAdditionalPost($create_additional_form_entry_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->v4EntriesAdditionalPost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://submittable-api.submittable.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*FormsApi* | [**v4EntriesAdditionalPost**](docs/Api/FormsApi.md#v4entriesadditionalpost) | **POST** /v4/entries/additional | Create and send an additional form entry
*FormsApi* | [**v4EntriesAdditionalRescindPost**](docs/Api/FormsApi.md#v4entriesadditionalrescindpost) | **POST** /v4/entries/additional/rescind | Rescind additional form requests
*FormsApi* | [**v4EntriesEditingClosePost**](docs/Api/FormsApi.md#v4entrieseditingclosepost) | **POST** /v4/entries/editing/close | Close entries for editing
*FormsApi* | [**v4EntriesEditingOpenPost**](docs/Api/FormsApi.md#v4entrieseditingopenpost) | **POST** /v4/entries/editing/open | Open entries for editing
*FormsApi* | [**v4EntriesEntryIdClosePost**](docs/Api/FormsApi.md#v4entriesentryidclosepost) | **POST** /v4/entries/{entryId}/close | Close editing
*FormsApi* | [**v4EntriesEntryIdDelete**](docs/Api/FormsApi.md#v4entriesentryiddelete) | **DELETE** /v4/entries/{entryId} | Delete an entry
*FormsApi* | [**v4EntriesEntryIdFieldsFieldIdPost**](docs/Api/FormsApi.md#v4entriesentryidfieldsfieldidpost) | **POST** /v4/entries/{entryId}/fields/{fieldId} | Get a file upload url
*FormsApi* | [**v4EntriesEntryIdFilesFileIdGet**](docs/Api/FormsApi.md#v4entriesentryidfilesfileidget) | **GET** /v4/entries/{entryId}/files/{fileId} | Get a url to download the uploaded file
*FormsApi* | [**v4EntriesEntryIdGet**](docs/Api/FormsApi.md#v4entriesentryidget) | **GET** /v4/entries/{entryId} | Get an entry
*FormsApi* | [**v4EntriesEntryIdOpenPost**](docs/Api/FormsApi.md#v4entriesentryidopenpost) | **POST** /v4/entries/{entryId}/open | Open editing
*FormsApi* | [**v4EntriesEntryIdPatch**](docs/Api/FormsApi.md#v4entriesentryidpatch) | **PATCH** /v4/entries/{entryId} | Update a form entry
*FormsApi* | [**v4EntriesEntryIdPut**](docs/Api/FormsApi.md#v4entriesentryidput) | **PUT** /v4/entries/{entryId} | Update a form entry
*FormsApi* | [**v4EntriesEntryIdTablesTableIdGet**](docs/Api/FormsApi.md#v4entriesentryidtablestableidget) | **GET** /v4/entries/{entryId}/tables/{tableId} | Get a url to download the table
*FormsApi* | [**v4EntriesFormsFormIdGet**](docs/Api/FormsApi.md#v4entriesformsformidget) | **GET** /v4/entries/forms/{formId} | Get a page of completed form entries
*FormsApi* | [**v4EntriesInternalPost**](docs/Api/FormsApi.md#v4entriesinternalpost) | **POST** /v4/entries/internal | Create an internal form entry
*FormsApi* | [**v4EntriesMessagePost**](docs/Api/FormsApi.md#v4entriesmessagepost) | **POST** /v4/entries/message | Send message to entries
*FormsApi* | [**v4EntriesMetadataFormsFormIdGet**](docs/Api/FormsApi.md#v4entriesmetadataformsformidget) | **GET** /v4/entries/metadata/forms/{formId} | Get a page of form entry metadata
*FormsApi* | [**v4EntriesRequestFilterEditingClosePut**](docs/Api/FormsApi.md#v4entriesrequestfiltereditingcloseput) | **PUT** /v4/entries/request/filter/editing/close | Close request form entries for editing by filter
*FormsApi* | [**v4EntriesRequestFilterEditingOpenPut**](docs/Api/FormsApi.md#v4entriesrequestfiltereditingopenput) | **PUT** /v4/entries/request/filter/editing/open | Open request form entries for editing by filter
*FormsApi* | [**v4EntriesRequestStatusPut**](docs/Api/FormsApi.md#v4entriesrequeststatusput) | **PUT** /v4/entries/request/status | Update status on request form entries
*FormsApi* | [**v4EntriesReviewsEntryIdDelete**](docs/Api/FormsApi.md#v4entriesreviewsentryiddelete) | **DELETE** /v4/entries/reviews/{entryId} | Delete a review entry by id
*FormsApi* | [**v4EntriesReviewsScorePut**](docs/Api/FormsApi.md#v4entriesreviewsscoreput) | **PUT** /v4/entries/reviews/score | Update a review score
*FormsApi* | [**v4EntriesSubmissionsSubmissionIdGet**](docs/Api/FormsApi.md#v4entriessubmissionssubmissionidget) | **GET** /v4/entries/submissions/{submissionId} | Get a submission&#39;s entries
*FormsApi* | [**v4EntriesSubmissionsSubmissionIdReviewsGet**](docs/Api/FormsApi.md#v4entriessubmissionssubmissionidreviewsget) | **GET** /v4/entries/submissions/{submissionId}/reviews | Get reviews for a Submission
*FormsApi* | [**v4FormsFormIdDelete**](docs/Api/FormsApi.md#v4formsformiddelete) | **DELETE** /v4/forms/{formId} | Delete a form
*FormsApi* | [**v4FormsFormIdGet**](docs/Api/FormsApi.md#v4formsformidget) | **GET** /v4/forms/{formId} | Get a form
*FormsApi* | [**v4FormsFormIdPut**](docs/Api/FormsApi.md#v4formsformidput) | **PUT** /v4/forms/{formId} | Update a form
*FormsApi* | [**v4FormsGet**](docs/Api/FormsApi.md#v4formsget) | **GET** /v4/forms | Get a page of forms
*FormsApi* | [**v4FormsMetadataGet**](docs/Api/FormsApi.md#v4formsmetadataget) | **GET** /v4/forms/metadata | Get a page of form metadata
*FormsApi* | [**v4FormsPost**](docs/Api/FormsApi.md#v4formspost) | **POST** /v4/forms | Create a form
*FormsApi* | [**v4FormsScheduledScheduledAdditionalFormIdDelete**](docs/Api/FormsApi.md#v4formsscheduledscheduledadditionalformiddelete) | **DELETE** /v4/forms/scheduled/{scheduledAdditionalFormId} | Delete scheduled additional form by id
*FormsApi* | [**v4FormsSubmissionIdScheduledGet**](docs/Api/FormsApi.md#v4formssubmissionidscheduledget) | **GET** /v4/forms/{submissionId}/scheduled | Get scheduled additional forms by submission
*FormsApi* | [**v4FormsTemplatesPaymentGet**](docs/Api/FormsApi.md#v4formstemplatespaymentget) | **GET** /v4/forms/templates/payment | Clone payment template
*FormsApi* | [**v4ReviewsReviewResponseIdDelete**](docs/Api/FormsApi.md#v4reviewsreviewresponseiddelete) | **DELETE** /v4/reviews/{reviewResponseId} | Delete a review by id
*FundsApi* | [**v4FundsFundIdDelete**](docs/Api/FundsApi.md#v4fundsfundiddelete) | **DELETE** /v4/funds/{fundId} | Delete a fund
*FundsApi* | [**v4FundsFundIdGet**](docs/Api/FundsApi.md#v4fundsfundidget) | **GET** /v4/funds/{fundId} | Get a fund
*FundsApi* | [**v4FundsFundIdPut**](docs/Api/FundsApi.md#v4fundsfundidput) | **PUT** /v4/funds/{fundId} | Update a fund
*FundsApi* | [**v4FundsGet**](docs/Api/FundsApi.md#v4fundsget) | **GET** /v4/funds | Get a page of funds
*FundsApi* | [**v4FundsPost**](docs/Api/FundsApi.md#v4fundspost) | **POST** /v4/funds | Create a fund
*FundsApi* | [**v4TransactionsGet**](docs/Api/FundsApi.md#v4transactionsget) | **GET** /v4/transactions | Get a page of transactions
*FundsApi* | [**v4TransactionsPost**](docs/Api/FundsApi.md#v4transactionspost) | **POST** /v4/transactions | Create a transaction
*FundsApi* | [**v4TransactionsTransactionIdDelete**](docs/Api/FundsApi.md#v4transactionstransactioniddelete) | **DELETE** /v4/transactions/{transactionId} | Delete a transaction by id
*FundsApi* | [**v4TransactionsTransactionIdGet**](docs/Api/FundsApi.md#v4transactionstransactionidget) | **GET** /v4/transactions/{transactionId} | Get a transaction by id
*FundsApi* | [**v4TransactionsTransactionIdPut**](docs/Api/FundsApi.md#v4transactionstransactionidput) | **PUT** /v4/transactions/{transactionId} | Update a transaction by id
*FundsApi* | [**v4TransactionsTransactionIdSendPost**](docs/Api/FundsApi.md#v4transactionstransactionidsendpost) | **POST** /v4/transactions/{transactionId}/send | Send funds
*IntegrationsDocuSignApi* | [**v4DocusignPlaceholdersPost**](docs/Api/IntegrationsDocuSignApi.md#v4docusignplaceholderspost) | **POST** /v4/docusign/placeholders | Create Placeholders in Docusign
*IntegrationsZapierApi* | [**v4ZapierSubscribePost**](docs/Api/IntegrationsZapierApi.md#v4zapiersubscribepost) | **POST** /v4/zapier/subscribe | Add a Zapier Subscription Entry
*IntegrationsZapierApi* | [**v4ZapierUnsubscribePost**](docs/Api/IntegrationsZapierApi.md#v4zapierunsubscribepost) | **POST** /v4/zapier/unsubscribe | Mark a Zapier Subscription as Deleted
*LabelsApi* | [**v4LabelsGet**](docs/Api/LabelsApi.md#v4labelsget) | **GET** /v4/labels | Get a page of labels
*LabelsApi* | [**v4LabelsLabelIdDelete**](docs/Api/LabelsApi.md#v4labelslabeliddelete) | **DELETE** /v4/labels/{labelId} | Delete a label
*LabelsApi* | [**v4LabelsLabelIdGet**](docs/Api/LabelsApi.md#v4labelslabelidget) | **GET** /v4/labels/{labelId} | Get a label
*LabelsApi* | [**v4LabelsLabelIdPut**](docs/Api/LabelsApi.md#v4labelslabelidput) | **PUT** /v4/labels/{labelId} | Update a label
*LabelsApi* | [**v4LabelsListPost**](docs/Api/LabelsApi.md#v4labelslistpost) | **POST** /v4/labels/list | Get a list of labels
*LabelsApi* | [**v4LabelsMetadataGet**](docs/Api/LabelsApi.md#v4labelsmetadataget) | **GET** /v4/labels/metadata | Get Label MetaData
*LabelsApi* | [**v4LabelsPost**](docs/Api/LabelsApi.md#v4labelspost) | **POST** /v4/labels | Create a label
*LabelsApi* | [**v4LabelsRemoveLabelIdDelete**](docs/Api/LabelsApi.md#v4labelsremovelabeliddelete) | **DELETE** /v4/labels/remove/{labelId} | Remove a label from Submissions
*MessagingApi* | [**v4MessagesMessageIdAttachmentsGet**](docs/Api/MessagingApi.md#v4messagesmessageidattachmentsget) | **GET** /v4/messages/{messageId}/attachments | Get the file attachments associated with a messageId
*MessagingApi* | [**v4MessagesPlaceholdersFormsFormIdGet**](docs/Api/MessagingApi.md#v4messagesplaceholdersformsformidget) | **GET** /v4/messages/placeholders/forms/{formId} | Get a placeholder by id
*MessagingApi* | [**v4MessagesPlaceholdersGet**](docs/Api/MessagingApi.md#v4messagesplaceholdersget) | **GET** /v4/messages/placeholders | Get a list of placeholders
*MessagingApi* | [**v4MessagesPlaceholdersPlaceholderIdGet**](docs/Api/MessagingApi.md#v4messagesplaceholdersplaceholderidget) | **GET** /v4/messages/placeholders/{placeholderId} | Get a placeholder by id
*MessagingApi* | [**v4MessagesPlaceholdersPlaceholderIdPut**](docs/Api/MessagingApi.md#v4messagesplaceholdersplaceholderidput) | **PUT** /v4/messages/placeholders/{placeholderId} | Update a custom placeholder and any of its mappings
*MessagingApi* | [**v4MessagesPlaceholdersPost**](docs/Api/MessagingApi.md#v4messagesplaceholderspost) | **POST** /v4/messages/placeholders | Create a new Custom Placeholder
*MessagingApi* | [**v4MessagesResponsesTemplatesPost**](docs/Api/MessagingApi.md#v4messagesresponsestemplatespost) | **POST** /v4/messages/responses/templates | Create or update a response template
*OrganizationsApi* | [**getOrganizationFeatures**](docs/Api/OrganizationsApi.md#getorganizationfeatures) | **GET** /v4/organizations/features | Get organization&#39;s features
*OrganizationsApi* | [**v4OrganizationsBillingGet**](docs/Api/OrganizationsApi.md#v4organizationsbillingget) | **GET** /v4/organizations/billing | Get billing information for organization
*OrganizationsApi* | [**v4OrganizationsBillingPost**](docs/Api/OrganizationsApi.md#v4organizationsbillingpost) | **POST** /v4/organizations/billing | Create billing information for organization
*OrganizationsApi* | [**v4OrganizationsBillingPut**](docs/Api/OrganizationsApi.md#v4organizationsbillingput) | **PUT** /v4/organizations/billing | Update billing information for organization
*OrganizationsApi* | [**v4OrganizationsCustomdataCustomDataRecordIdPatch**](docs/Api/OrganizationsApi.md#v4organizationscustomdatacustomdatarecordidpatch) | **PATCH** /v4/organizations/customdata/{customDataRecordId} | Update a Organization&#39;s Public Organization Custom Data Record
*OrganizationsApi* | [**v4OrganizationsCustomdataLabelsGet**](docs/Api/OrganizationsApi.md#v4organizationscustomdatalabelsget) | **GET** /v4/organizations/customdata/labels | Get a list of Custom Data Labels
*OrganizationsApi* | [**v4OrganizationsCustomdataPost**](docs/Api/OrganizationsApi.md#v4organizationscustomdatapost) | **POST** /v4/organizations/customdata | Bulk Create an organization&#39;s Public Organizations custom data
*OrganizationsApi* | [**v4OrganizationsCustomdataPublicOrgIdGet**](docs/Api/OrganizationsApi.md#v4organizationscustomdatapublicorgidget) | **GET** /v4/organizations/customdata/{publicOrgId} | Get a Public Organization&#39;s Custom Data Record
*OrganizationsApi* | [**v4OrganizationsGet**](docs/Api/OrganizationsApi.md#v4organizationsget) | **GET** /v4/organizations | Get organization info
*OrganizationsApi* | [**v4OrganizationsGuidGet**](docs/Api/OrganizationsApi.md#v4organizationsguidget) | **GET** /v4/organizations/guid | Get the organization guid
*OrganizationsApi* | [**v4OrganizationsStaffGroupsListGet**](docs/Api/OrganizationsApi.md#v4organizationsstaffgroupslistget) | **GET** /v4/organizations/staffGroups/list | List staff groups
*OrganizationsApi* | [**v4OrganizationsStaffGroupsPost**](docs/Api/OrganizationsApi.md#v4organizationsstaffgroupspost) | **POST** /v4/organizations/staffGroups | Create staff group
*OrganizationsApi* | [**v4OrganizationsStaffGroupsStaffGroupIdDelete**](docs/Api/OrganizationsApi.md#v4organizationsstaffgroupsstaffgroupiddelete) | **DELETE** /v4/organizations/staffGroups/{staffGroupId} | Delete staff group
*OrganizationsApi* | [**v4OrganizationsStaffGroupsStaffGroupIdPut**](docs/Api/OrganizationsApi.md#v4organizationsstaffgroupsstaffgroupidput) | **PUT** /v4/organizations/staffGroups/{staffGroupId} | Update staff group
*OrganizationsApi* | [**v4OrganizationsTeamDelete**](docs/Api/OrganizationsApi.md#v4organizationsteamdelete) | **DELETE** /v4/organizations/team | Remove Team Members from an Organization
*OrganizationsApi* | [**v4OrganizationsTeamGet**](docs/Api/OrganizationsApi.md#v4organizationsteamget) | **GET** /v4/organizations/team | Get team members
*OrganizationsApi* | [**v4OrganizationsTeamInvitesDeletePost**](docs/Api/OrganizationsApi.md#v4organizationsteaminvitesdeletepost) | **POST** /v4/organizations/team/invites/delete | Remove any unaccepted staff invites for the given emails
*OrganizationsApi* | [**v4OrganizationsTeamInvitesGet**](docs/Api/OrganizationsApi.md#v4organizationsteaminvitesget) | **GET** /v4/organizations/team/invites | Get list of team invites
*OrganizationsApi* | [**v4OrganizationsTeamInvitesResendPost**](docs/Api/OrganizationsApi.md#v4organizationsteaminvitesresendpost) | **POST** /v4/organizations/team/invites/resend | Resend any unaccepted staff invites for the ids
*OrganizationsApi* | [**v4OrganizationsTeamListPost**](docs/Api/OrganizationsApi.md#v4organizationsteamlistpost) | **POST** /v4/organizations/team/list | Get a list of team members
*OrganizationsApi* | [**v4OrganizationsTeamPatch**](docs/Api/OrganizationsApi.md#v4organizationsteampatch) | **PATCH** /v4/organizations/team | Updates Team Members
*OrganizationsApi* | [**v4OrganizationsTeamPost**](docs/Api/OrganizationsApi.md#v4organizationsteampost) | **POST** /v4/organizations/team | Add Team Members to Organization
*ProjectsApi* | [**getProject**](docs/Api/ProjectsApi.md#getproject) | **GET** /v4/projects/{projectId} | Get a project
*ProjectsApi* | [**v4ProjectsDuplicatePost**](docs/Api/ProjectsApi.md#v4projectsduplicatepost) | **POST** /v4/projects/duplicate | Duplicate a project
*ProjectsApi* | [**v4ProjectsGet**](docs/Api/ProjectsApi.md#v4projectsget) | **GET** /v4/projects | Get a page of projects
*ProjectsApi* | [**v4ProjectsPost**](docs/Api/ProjectsApi.md#v4projectspost) | **POST** /v4/projects | Create a project
*ProjectsApi* | [**v4ProjectsProjectIdPut**](docs/Api/ProjectsApi.md#v4projectsprojectidput) | **PUT** /v4/projects/{projectId} | Update a project
*PublicOrganizationsApi* | [**v4PublicOrganizationsGet**](docs/Api/PublicOrganizationsApi.md#v4publicorganizationsget) | **GET** /v4/public-organizations | Get a page of Public Organization Profiles for your organization
*PublicOrganizationsApi* | [**v4PublicOrganizationsSearchAgenciesGet**](docs/Api/PublicOrganizationsApi.md#v4publicorganizationssearchagenciesget) | **GET** /v4/public-organizations/search/agencies | Get all organization search agencies
*SubmissionsApi* | [**getSubmission**](docs/Api/SubmissionsApi.md#getsubmission) | **GET** /v4/submissions/{submissionId} | Get a submission
*SubmissionsApi* | [**getSubmissions**](docs/Api/SubmissionsApi.md#getsubmissions) | **POST** /v4/submissions/ids | Get submissions
*SubmissionsApi* | [**v4MySubmissionsExternalPost**](docs/Api/SubmissionsApi.md#v4mysubmissionsexternalpost) | **POST** /v4/my/submissions/external | Create external submission
*SubmissionsApi* | [**v4SubmissionsAssignmentsListPost**](docs/Api/SubmissionsApi.md#v4submissionsassignmentslistpost) | **POST** /v4/submissions/assignments/list | Get submission assignments organized by userId
*SubmissionsApi* | [**v4SubmissionsAssignmentsPut**](docs/Api/SubmissionsApi.md#v4submissionsassignmentsput) | **PUT** /v4/submissions/assignments | Update assignments on submissions
*SubmissionsApi* | [**v4SubmissionsAssignmentsRandomPost**](docs/Api/SubmissionsApi.md#v4submissionsassignmentsrandompost) | **POST** /v4/submissions/assignments/random | Add random assignments to submissions
*SubmissionsApi* | [**v4SubmissionsBulkPost**](docs/Api/SubmissionsApi.md#v4submissionsbulkpost) | **POST** /v4/submissions/bulk | Bulk import submissions
*SubmissionsApi* | [**v4SubmissionsEditingClosePut**](docs/Api/SubmissionsApi.md#v4submissionseditingcloseput) | **PUT** /v4/submissions/editing/close | Close submissions for editing
*SubmissionsApi* | [**v4SubmissionsEditingOpenPut**](docs/Api/SubmissionsApi.md#v4submissionseditingopenput) | **PUT** /v4/submissions/editing/open | Open submissions for editing
*SubmissionsApi* | [**v4SubmissionsGet**](docs/Api/SubmissionsApi.md#v4submissionsget) | **GET** /v4/submissions | Get a page of submissions
*SubmissionsApi* | [**v4SubmissionsHistoryGet**](docs/Api/SubmissionsApi.md#v4submissionshistoryget) | **GET** /v4/submissions/history | Get a page of submission history items
*SubmissionsApi* | [**v4SubmissionsIdConvertIntsPost**](docs/Api/SubmissionsApi.md#v4submissionsidconvertintspost) | **POST** /v4/submissions/id/convert/ints | Convert list of int submission ids to guid submission ids
*SubmissionsApi* | [**v4SubmissionsIdConvertSubmissionIdGet**](docs/Api/SubmissionsApi.md#v4submissionsidconvertsubmissionidget) | **GET** /v4/submissions/id/convert/{submissionId} | Convert integer Submission Id to guid Submission Id
*SubmissionsApi* | [**v4SubmissionsLabelsPut**](docs/Api/SubmissionsApi.md#v4submissionslabelsput) | **PUT** /v4/submissions/labels | Add labels to submissions
*SubmissionsApi* | [**v4SubmissionsMessagePost**](docs/Api/SubmissionsApi.md#v4submissionsmessagepost) | **POST** /v4/submissions/message | Send submitter a message
*SubmissionsApi* | [**v4SubmissionsPost**](docs/Api/SubmissionsApi.md#v4submissionspost) | **POST** /v4/submissions | Import a submission
*SubmissionsApi* | [**v4SubmissionsPublicOrganizationPost**](docs/Api/SubmissionsApi.md#v4submissionspublicorganizationpost) | **POST** /v4/submissions/public-organization | Update a public organization id associated with a submission
*SubmissionsApi* | [**v4SubmissionsReviewStagePut**](docs/Api/SubmissionsApi.md#v4submissionsreviewstageput) | **PUT** /v4/submissions/review_stage | Update review stage on submissions
*SubmissionsApi* | [**v4SubmissionsStatusPut**](docs/Api/SubmissionsApi.md#v4submissionsstatusput) | **PUT** /v4/submissions/status | Update status on submissions
*SubmissionsApi* | [**v4SubmissionsSubmissionIdArchivePut**](docs/Api/SubmissionsApi.md#v4submissionssubmissionidarchiveput) | **PUT** /v4/submissions/{submissionId}/archive | Archive submission
*SubmissionsApi* | [**v4SubmissionsSubmissionIdAssignmentsPut**](docs/Api/SubmissionsApi.md#v4submissionssubmissionidassignmentsput) | **PUT** /v4/submissions/{submissionId}/assignments | Update assignments for submission
*SubmissionsApi* | [**v4SubmissionsSubmissionIdDelete**](docs/Api/SubmissionsApi.md#v4submissionssubmissioniddelete) | **DELETE** /v4/submissions/{submissionId} | Delete a submission
*SubmissionsApi* | [**v4SubmissionsSubmissionIdLabelsLabelIdDelete**](docs/Api/SubmissionsApi.md#v4submissionssubmissionidlabelslabeliddelete) | **DELETE** /v4/submissions/{submissionId}/labels/{labelId} | Remove a label from a submission
*SubmissionsApi* | [**v4SubmissionsSubmissionIdLabelsLabelIdPut**](docs/Api/SubmissionsApi.md#v4submissionssubmissionidlabelslabelidput) | **PUT** /v4/submissions/{submissionId}/labels/{labelId} | Apply a label to a submission
*SubmissionsApi* | [**v4SubmissionsSubmissionIdNotesAttachmentsPost**](docs/Api/SubmissionsApi.md#v4submissionssubmissionidnotesattachmentspost) | **POST** /v4/submissions/{submissionId}/notes/attachments | Upload a note file attachment
*SubmissionsApi* | [**v4SubmissionsSubmissionIdNotesPost**](docs/Api/SubmissionsApi.md#v4submissionssubmissionidnotespost) | **POST** /v4/submissions/{submissionId}/notes | Add a note to a submission
*SubmissionsApi* | [**v4SubmissionsSubmissionIdStageStageIdPut**](docs/Api/SubmissionsApi.md#v4submissionssubmissionidstagestageidput) | **PUT** /v4/submissions/{submissionId}/stage/{stageId} | Move submission between review stages
*SubmissionsApi* | [**v4SubmissionsSubmissionIdStatusPut**](docs/Api/SubmissionsApi.md#v4submissionssubmissionidstatusput) | **PUT** /v4/submissions/{submissionId}/status | Update status of a submission
*SubmissionsApi* | [**v4SubmissionsSubmissionIdTransferPost**](docs/Api/SubmissionsApi.md#v4submissionssubmissionidtransferpost) | **POST** /v4/submissions/{submissionId}/transfer | Create a submission transfer request
*SubmissionsApi* | [**v4SubmissionsSubmissionIdUnarchivePut**](docs/Api/SubmissionsApi.md#v4submissionssubmissionidunarchiveput) | **PUT** /v4/submissions/{submissionId}/unarchive | Unarchive submission
*SubmissionsApi* | [**v4SubmissionsTeamAssignmentsGet**](docs/Api/SubmissionsApi.md#v4submissionsteamassignmentsget) | **GET** /v4/submissions/team/assignments | Get team member assignment counts
*SubmissionsApi* | [**v4SubmissionsTransfersPost**](docs/Api/SubmissionsApi.md#v4submissionstransferspost) | **POST** /v4/submissions/transfers | Get pending submission transfer requests
*SubmissionsApi* | [**v4SubmissionsTransfersTransferIdCancelPost**](docs/Api/SubmissionsApi.md#v4submissionstransferstransferidcancelpost) | **POST** /v4/submissions/transfers/{transferId}/cancel | Cancel a transfer request
*UsersApi* | [**getSubmitters**](docs/Api/UsersApi.md#getsubmitters) | **POST** /v4/users/submissions/submitters | Get submitters for list of submission ids
*UsersApi* | [**v4UsersPermissionsGet**](docs/Api/UsersApi.md#v4userspermissionsget) | **GET** /v4/users/permissions | Get User Permissions
*UsersApi* | [**v4UsersSubmissionsSubmissionIdSubmitterGet**](docs/Api/UsersApi.md#v4userssubmissionssubmissionidsubmitterget) | **GET** /v4/users/submissions/{submissionId}/submitter | Get submitter

## Models

- [AddNoteToSubmissionRequest](docs/Model/AddNoteToSubmissionRequest.md)
- [AddTeamMembersRequest](docs/Model/AddTeamMembersRequest.md)
- [AdditionalFormEntryMetadataResponse](docs/Model/AdditionalFormEntryMetadataResponse.md)
- [AdditionalFormEntryResponse](docs/Model/AdditionalFormEntryResponse.md)
- [AdditionalFormEntryResponseFieldDataInner](docs/Model/AdditionalFormEntryResponseFieldDataInner.md)
- [AdditionalFormRequest](docs/Model/AdditionalFormRequest.md)
- [AdditionalFormResponse](docs/Model/AdditionalFormResponse.md)
- [AdditionalFormsStatus](docs/Model/AdditionalFormsStatus.md)
- [Address](docs/Model/Address.md)
- [AddressFieldRequest](docs/Model/AddressFieldRequest.md)
- [AddressFieldResponse](docs/Model/AddressFieldResponse.md)
- [AddressFieldResponseRequest](docs/Model/AddressFieldResponseRequest.md)
- [AddressFieldResponseResponse](docs/Model/AddressFieldResponseResponse.md)
- [AnyFormTypeAdditionalFormEntryMetadataResponse](docs/Model/AnyFormTypeAdditionalFormEntryMetadataResponse.md)
- [AnyFormTypeAdditionalFormEntryResponse](docs/Model/AnyFormTypeAdditionalFormEntryResponse.md)
- [AnyFormTypeEligibilityFormEntryMetadataResponse](docs/Model/AnyFormTypeEligibilityFormEntryMetadataResponse.md)
- [AnyFormTypeEligibilityFormEntryResponse](docs/Model/AnyFormTypeEligibilityFormEntryResponse.md)
- [AnyFormTypeEntryMetadataResponse](docs/Model/AnyFormTypeEntryMetadataResponse.md)
- [AnyFormTypeEntryResponse](docs/Model/AnyFormTypeEntryResponse.md)
- [AnyFormTypeInitialFormEntryMetadataResponse](docs/Model/AnyFormTypeInitialFormEntryMetadataResponse.md)
- [AnyFormTypeInitialFormEntryResponse](docs/Model/AnyFormTypeInitialFormEntryResponse.md)
- [AnyFormTypeInternalFormEntryMetadataResponse](docs/Model/AnyFormTypeInternalFormEntryMetadataResponse.md)
- [AnyFormTypeInternalFormEntryResponse](docs/Model/AnyFormTypeInternalFormEntryResponse.md)
- [AnyFormTypeReferenceFormEntryMetadataResponse](docs/Model/AnyFormTypeReferenceFormEntryMetadataResponse.md)
- [AnyFormTypeReferenceFormEntryResponse](docs/Model/AnyFormTypeReferenceFormEntryResponse.md)
- [AnyFormTypeRequestFormEntryMetadataResponse](docs/Model/AnyFormTypeRequestFormEntryMetadataResponse.md)
- [AnyFormTypeRequestFormEntryResponse](docs/Model/AnyFormTypeRequestFormEntryResponse.md)
- [AnyFormTypeReviewFormEntryMetadataResponse](docs/Model/AnyFormTypeReviewFormEntryMetadataResponse.md)
- [AnyFormTypeReviewFormEntryResponse](docs/Model/AnyFormTypeReviewFormEntryResponse.md)
- [ApiFieldDataFileUploadValueFileMetadata](docs/Model/ApiFieldDataFileUploadValueFileMetadata.md)
- [ApiFieldDataFileUploadValueFileResponse](docs/Model/ApiFieldDataFileUploadValueFileResponse.md)
- [ApplyLabelToSubmissionsRequest](docs/Model/ApplyLabelToSubmissionsRequest.md)
- [ArchivedStatus](docs/Model/ArchivedStatus.md)
- [BackgroundTaskStatusResponse](docs/Model/BackgroundTaskStatusResponse.md)
- [BadRequestResponse](docs/Model/BadRequestResponse.md)
- [BankDetailsFieldRequest](docs/Model/BankDetailsFieldRequest.md)
- [BankDetailsFieldResponse](docs/Model/BankDetailsFieldResponse.md)
- [BankDetailsFieldResponseRequest](docs/Model/BankDetailsFieldResponseRequest.md)
- [BankDetailsFieldResponseResponse](docs/Model/BankDetailsFieldResponseResponse.md)
- [BillingAddress](docs/Model/BillingAddress.md)
- [BillingAddressRequest](docs/Model/BillingAddressRequest.md)
- [BlockRequest](docs/Model/BlockRequest.md)
- [BlockResponse](docs/Model/BlockResponse.md)
- [BranchRequest](docs/Model/BranchRequest.md)
- [BranchResponse](docs/Model/BranchResponse.md)
- [BulkImportSubmissionsRequest](docs/Model/BulkImportSubmissionsRequest.md)
- [BulkImportSubmissionsRequestSubmissionsInner](docs/Model/BulkImportSubmissionsRequestSubmissionsInner.md)
- [BulkImportSubmissionsResponse](docs/Model/BulkImportSubmissionsResponse.md)
- [BulkSubmissionResponse](docs/Model/BulkSubmissionResponse.md)
- [CharityCheckFieldRequest](docs/Model/CharityCheckFieldRequest.md)
- [CharityCheckFieldResponse](docs/Model/CharityCheckFieldResponse.md)
- [CharityCheckFieldResponseRequest](docs/Model/CharityCheckFieldResponseRequest.md)
- [CharityCheckFieldResponseResponse](docs/Model/CharityCheckFieldResponseResponse.md)
- [ContinuationTokenResponseAnyFormTypeEntryMetadataResponse](docs/Model/ContinuationTokenResponseAnyFormTypeEntryMetadataResponse.md)
- [ContinuationTokenResponseAnyFormTypeEntryMetadataResponseItemsInner](docs/Model/ContinuationTokenResponseAnyFormTypeEntryMetadataResponseItemsInner.md)
- [ContinuationTokenResponseAnyFormTypeEntryResponse](docs/Model/ContinuationTokenResponseAnyFormTypeEntryResponse.md)
- [ContinuationTokenResponseFormMetadataResponse](docs/Model/ContinuationTokenResponseFormMetadataResponse.md)
- [ContinuationTokenResponseFormResponseV4](docs/Model/ContinuationTokenResponseFormResponseV4.md)
- [ContinuationTokenResponseFundResponse](docs/Model/ContinuationTokenResponseFundResponse.md)
- [ContinuationTokenResponseLabelResponse](docs/Model/ContinuationTokenResponseLabelResponse.md)
- [ContinuationTokenResponseListProjectResponse](docs/Model/ContinuationTokenResponseListProjectResponse.md)
- [ContinuationTokenResponsePlaceholderResponse](docs/Model/ContinuationTokenResponsePlaceholderResponse.md)
- [ContinuationTokenResponsePublicOrganizationResponse](docs/Model/ContinuationTokenResponsePublicOrganizationResponse.md)
- [ContinuationTokenResponseStaffGroupResponse](docs/Model/ContinuationTokenResponseStaffGroupResponse.md)
- [ContinuationTokenResponseSubmissionHistoryResponse](docs/Model/ContinuationTokenResponseSubmissionHistoryResponse.md)
- [ContinuationTokenResponseSubmissionListResponse](docs/Model/ContinuationTokenResponseSubmissionListResponse.md)
- [ContinuationTokenResponseTransactionResponse](docs/Model/ContinuationTokenResponseTransactionResponse.md)
- [CoverLetterFieldRequest](docs/Model/CoverLetterFieldRequest.md)
- [CoverLetterFieldResponse](docs/Model/CoverLetterFieldResponse.md)
- [CoverLetterFieldResponseRequest](docs/Model/CoverLetterFieldResponseRequest.md)
- [CoverLetterFieldResponseResponse](docs/Model/CoverLetterFieldResponseResponse.md)
- [CreateAdditionalFormEntryRequest](docs/Model/CreateAdditionalFormEntryRequest.md)
- [CreateAwardedTransactionRequest](docs/Model/CreateAwardedTransactionRequest.md)
- [CreateCustomPlaceholderRequest](docs/Model/CreateCustomPlaceholderRequest.md)
- [CreateFileResult](docs/Model/CreateFileResult.md)
- [CreateFundRequest](docs/Model/CreateFundRequest.md)
- [CreateInternalFormEntryRequest](docs/Model/CreateInternalFormEntryRequest.md)
- [CreateInternalFormEntryRequestFieldDataInner](docs/Model/CreateInternalFormEntryRequestFieldDataInner.md)
- [CreateLabelRequest](docs/Model/CreateLabelRequest.md)
- [CreateOrganizationBillingInfoRequest](docs/Model/CreateOrganizationBillingInfoRequest.md)
- [CreatePaidTransactionRequest](docs/Model/CreatePaidTransactionRequest.md)
- [CreatePendingTransactionRequest](docs/Model/CreatePendingTransactionRequest.md)
- [CreateProcessingTransactionRequest](docs/Model/CreateProcessingTransactionRequest.md)
- [CreateProjectRequest](docs/Model/CreateProjectRequest.md)
- [CreateResponseFileRequest](docs/Model/CreateResponseFileRequest.md)
- [CreateResponseTemplateRequest](docs/Model/CreateResponseTemplateRequest.md)
- [CreateResponseTemplateResponse](docs/Model/CreateResponseTemplateResponse.md)
- [CreateSubmissionByEmailRequest](docs/Model/CreateSubmissionByEmailRequest.md)
- [CreateSubmissionByNameRequest](docs/Model/CreateSubmissionByNameRequest.md)
- [CreateSubmissionBySubmitterIdRequest](docs/Model/CreateSubmissionBySubmitterIdRequest.md)
- [CreateSubmissionMessageBySubmissionIdsRequest](docs/Model/CreateSubmissionMessageBySubmissionIdsRequest.md)
- [CreateSubmissionMessageRequest](docs/Model/CreateSubmissionMessageRequest.md)
- [CreateSubmissionRequest](docs/Model/CreateSubmissionRequest.md)
- [CreateTransactionRequest](docs/Model/CreateTransactionRequest.md)
- [CreateTransferRequest](docs/Model/CreateTransferRequest.md)
- [CreditCardInfo](docs/Model/CreditCardInfo.md)
- [CustomDataField](docs/Model/CustomDataField.md)
- [CustomDataFieldLabelResponse](docs/Model/CustomDataFieldLabelResponse.md)
- [CustomDataLabelsResponse](docs/Model/CustomDataLabelsResponse.md)
- [CustomDataRecordRequest](docs/Model/CustomDataRecordRequest.md)
- [DataExtractionFieldRequest](docs/Model/DataExtractionFieldRequest.md)
- [DataExtractionFieldResponse](docs/Model/DataExtractionFieldResponse.md)
- [DateFieldRequest](docs/Model/DateFieldRequest.md)
- [DateFieldResponse](docs/Model/DateFieldResponse.md)
- [DateFieldResponseRequest](docs/Model/DateFieldResponseRequest.md)
- [DateFieldResponseResponse](docs/Model/DateFieldResponseResponse.md)
- [DeleteTransactionRequest](docs/Model/DeleteTransactionRequest.md)
- [DisclosureFieldRequest](docs/Model/DisclosureFieldRequest.md)
- [DisclosureFieldResponse](docs/Model/DisclosureFieldResponse.md)
- [DisclosureFieldResponseRequest](docs/Model/DisclosureFieldResponseRequest.md)
- [DisclosureFieldResponseResponse](docs/Model/DisclosureFieldResponseResponse.md)
- [DividerFieldRequest](docs/Model/DividerFieldRequest.md)
- [DividerFieldResponse](docs/Model/DividerFieldResponse.md)
- [DividerFieldResponseRequest](docs/Model/DividerFieldResponseRequest.md)
- [DividerFieldResponseResponse](docs/Model/DividerFieldResponseResponse.md)
- [DropdownListFieldRequest](docs/Model/DropdownListFieldRequest.md)
- [DropdownListFieldResponse](docs/Model/DropdownListFieldResponse.md)
- [DropdownListFieldResponseRequest](docs/Model/DropdownListFieldResponseRequest.md)
- [DropdownListFieldResponseResponse](docs/Model/DropdownListFieldResponseResponse.md)
- [DropdownRatingFieldRequest](docs/Model/DropdownRatingFieldRequest.md)
- [DropdownRatingFieldResponse](docs/Model/DropdownRatingFieldResponse.md)
- [DropdownRatingFieldResponseRequest](docs/Model/DropdownRatingFieldResponseRequest.md)
- [DropdownRatingFieldResponseResponse](docs/Model/DropdownRatingFieldResponseResponse.md)
- [DuplicateProjectRequest](docs/Model/DuplicateProjectRequest.md)
- [ESignFieldRequest](docs/Model/ESignFieldRequest.md)
- [ESignFieldResponse](docs/Model/ESignFieldResponse.md)
- [ESignResponseRequest](docs/Model/ESignResponseRequest.md)
- [ESignResponseResponse](docs/Model/ESignResponseResponse.md)
- [EinFieldRequest](docs/Model/EinFieldRequest.md)
- [EinFieldResponse](docs/Model/EinFieldResponse.md)
- [EinFieldResponseRequest](docs/Model/EinFieldResponseRequest.md)
- [EinFieldResponseResponse](docs/Model/EinFieldResponseResponse.md)
- [EligibilityCharityCheckFieldRequest](docs/Model/EligibilityCharityCheckFieldRequest.md)
- [EligibilityCharityCheckFieldResponse](docs/Model/EligibilityCharityCheckFieldResponse.md)
- [EligibilityCharityCheckFieldResponseRequest](docs/Model/EligibilityCharityCheckFieldResponseRequest.md)
- [EligibilityCharityCheckFieldResponseResponse](docs/Model/EligibilityCharityCheckFieldResponseResponse.md)
- [EligibilityDropdownListFieldRequest](docs/Model/EligibilityDropdownListFieldRequest.md)
- [EligibilityDropdownListFieldResponse](docs/Model/EligibilityDropdownListFieldResponse.md)
- [EligibilityDropdownListFieldResponseRequest](docs/Model/EligibilityDropdownListFieldResponseRequest.md)
- [EligibilityDropdownListFieldResponseResponse](docs/Model/EligibilityDropdownListFieldResponseResponse.md)
- [EligibilityFormEntryMetadataResponse](docs/Model/EligibilityFormEntryMetadataResponse.md)
- [EligibilityFormEntryResponse](docs/Model/EligibilityFormEntryResponse.md)
- [EligibilityFormRequest](docs/Model/EligibilityFormRequest.md)
- [EligibilityFormResponse](docs/Model/EligibilityFormResponse.md)
- [EligibilitySingleCheckboxFieldRequest](docs/Model/EligibilitySingleCheckboxFieldRequest.md)
- [EligibilitySingleCheckboxFieldResponse](docs/Model/EligibilitySingleCheckboxFieldResponse.md)
- [EligibilitySingleCheckboxFieldResponseRequest](docs/Model/EligibilitySingleCheckboxFieldResponseRequest.md)
- [EligibilitySingleCheckboxFieldResponseResponse](docs/Model/EligibilitySingleCheckboxFieldResponseResponse.md)
- [EligibilitySingleResponseFieldRequest](docs/Model/EligibilitySingleResponseFieldRequest.md)
- [EligibilitySingleResponseFieldResponse](docs/Model/EligibilitySingleResponseFieldResponse.md)
- [EligibilitySingleResponseFieldResponseRequest](docs/Model/EligibilitySingleResponseFieldResponseRequest.md)
- [EligibilitySingleResponseFieldResponseResponse](docs/Model/EligibilitySingleResponseFieldResponseResponse.md)
- [EmailFieldRequest](docs/Model/EmailFieldRequest.md)
- [EmailFieldResponse](docs/Model/EmailFieldResponse.md)
- [EmailFieldResponseRequest](docs/Model/EmailFieldResponseRequest.md)
- [EmailFieldResponseResponse](docs/Model/EmailFieldResponseResponse.md)
- [ExternalSubmissionRequest](docs/Model/ExternalSubmissionRequest.md)
- [ExternalSubmissionResponse](docs/Model/ExternalSubmissionResponse.md)
- [FieldDataFileUploadValueFileMetadata](docs/Model/FieldDataFileUploadValueFileMetadata.md)
- [FieldDataFileUploadValueFileRequest](docs/Model/FieldDataFileUploadValueFileRequest.md)
- [FieldDataTableValueRequest](docs/Model/FieldDataTableValueRequest.md)
- [FieldDataTableValueResponse](docs/Model/FieldDataTableValueResponse.md)
- [FieldError](docs/Model/FieldError.md)
- [FieldRequest](docs/Model/FieldRequest.md)
- [FieldResponseRequest](docs/Model/FieldResponseRequest.md)
- [FieldResponseResponse](docs/Model/FieldResponseResponse.md)
- [File](docs/Model/File.md)
- [FileRequest](docs/Model/FileRequest.md)
- [FileResponse](docs/Model/FileResponse.md)
- [FileUploadFieldRequest](docs/Model/FileUploadFieldRequest.md)
- [FileUploadFieldResponse](docs/Model/FileUploadFieldResponse.md)
- [FileUploadFieldResponseRequest](docs/Model/FileUploadFieldResponseRequest.md)
- [FileUploadFieldResponseResponse](docs/Model/FileUploadFieldResponseResponse.md)
- [FormEntriesForSubmissionResponse](docs/Model/FormEntriesForSubmissionResponse.md)
- [FormEntrySortField](docs/Model/FormEntrySortField.md)
- [FormEntrySortOrder](docs/Model/FormEntrySortOrder.md)
- [FormMetadataResponse](docs/Model/FormMetadataResponse.md)
- [FormRequest](docs/Model/FormRequest.md)
- [FormRequestFieldsInner](docs/Model/FormRequestFieldsInner.md)
- [FormResponseV4](docs/Model/FormResponseV4.md)
- [FormResponseV4FieldsInner](docs/Model/FormResponseV4FieldsInner.md)
- [FormTemplateResponse](docs/Model/FormTemplateResponse.md)
- [FraudPreventionFieldRequest](docs/Model/FraudPreventionFieldRequest.md)
- [FraudPreventionFieldResponse](docs/Model/FraudPreventionFieldResponse.md)
- [FraudPreventionFieldResponseResponse](docs/Model/FraudPreventionFieldResponseResponse.md)
- [FraudPreventionResponseRequest](docs/Model/FraudPreventionResponseRequest.md)
- [FundResponse](docs/Model/FundResponse.md)
- [GalleryFieldRequest](docs/Model/GalleryFieldRequest.md)
- [GalleryFieldResponse](docs/Model/GalleryFieldResponse.md)
- [GallerySortOrder](docs/Model/GallerySortOrder.md)
- [GalleryVotePeriod](docs/Model/GalleryVotePeriod.md)
- [GetAssignmentCountsResponse](docs/Model/GetAssignmentCountsResponse.md)
- [GetLabelsRequest](docs/Model/GetLabelsRequest.md)
- [GetOrganizationBillingInfoResponse](docs/Model/GetOrganizationBillingInfoResponse.md)
- [GetPendingTransfersRequest](docs/Model/GetPendingTransfersRequest.md)
- [GetSubmissionsRequest](docs/Model/GetSubmissionsRequest.md)
- [GetSubmissionsSubmittersRequest](docs/Model/GetSubmissionsSubmittersRequest.md)
- [GetTeamMemberResponse](docs/Model/GetTeamMemberResponse.md)
- [GetTeamMembersRequest](docs/Model/GetTeamMembersRequest.md)
- [GetTeamMembersResponse](docs/Model/GetTeamMembersResponse.md)
- [GetUrlResponse](docs/Model/GetUrlResponse.md)
- [HttpStatusCode](docs/Model/HttpStatusCode.md)
- [IdVerificationDetails](docs/Model/IdVerificationDetails.md)
- [IdVerificationStatus](docs/Model/IdVerificationStatus.md)
- [IdvDocument](docs/Model/IdvDocument.md)
- [IdvDocumentType](docs/Model/IdvDocumentType.md)
- [IdvPerson](docs/Model/IdvPerson.md)
- [InitialFormEntryMetadataResponse](docs/Model/InitialFormEntryMetadataResponse.md)
- [InitialFormEntryResponse](docs/Model/InitialFormEntryResponse.md)
- [InitialFormRequest](docs/Model/InitialFormRequest.md)
- [InitialFormResponse](docs/Model/InitialFormResponse.md)
- [InternalFormEntryMetadataResponse](docs/Model/InternalFormEntryMetadataResponse.md)
- [InternalFormEntryResponse](docs/Model/InternalFormEntryResponse.md)
- [InternalFormRequest](docs/Model/InternalFormRequest.md)
- [InternalFormResponse](docs/Model/InternalFormResponse.md)
- [LabelResponse](docs/Model/LabelResponse.md)
- [ListProjectResponse](docs/Model/ListProjectResponse.md)
- [ListSubmissionAssignmentsResponse](docs/Model/ListSubmissionAssignmentsResponse.md)
- [LongAnswerFieldRequest](docs/Model/LongAnswerFieldRequest.md)
- [LongAnswerFieldResponse](docs/Model/LongAnswerFieldResponse.md)
- [LongAnswerFieldResponseRequest](docs/Model/LongAnswerFieldResponseRequest.md)
- [LongAnswerFieldResponseResponse](docs/Model/LongAnswerFieldResponseResponse.md)
- [MessageAttachment](docs/Model/MessageAttachment.md)
- [MessageAttachmentResponse](docs/Model/MessageAttachmentResponse.md)
- [MetadataRequest](docs/Model/MetadataRequest.md)
- [MetadataResponse](docs/Model/MetadataResponse.md)
- [MultipleRatingFieldRequest](docs/Model/MultipleRatingFieldRequest.md)
- [MultipleRatingFieldResponse](docs/Model/MultipleRatingFieldResponse.md)
- [MultipleRatingFieldResponseRequest](docs/Model/MultipleRatingFieldResponseRequest.md)
- [MultipleRatingFieldResponseResponse](docs/Model/MultipleRatingFieldResponseResponse.md)
- [MultipleResponseFieldRequest](docs/Model/MultipleResponseFieldRequest.md)
- [MultipleResponseFieldResponse](docs/Model/MultipleResponseFieldResponse.md)
- [MultipleResponseFieldResponseRequest](docs/Model/MultipleResponseFieldResponseRequest.md)
- [MultipleResponseFieldResponseResponse](docs/Model/MultipleResponseFieldResponseResponse.md)
- [Name](docs/Model/Name.md)
- [NameFieldRequest](docs/Model/NameFieldRequest.md)
- [NameFieldResponse](docs/Model/NameFieldResponse.md)
- [NameFieldResponseRequest](docs/Model/NameFieldResponseRequest.md)
- [NameFieldResponseResponse](docs/Model/NameFieldResponseResponse.md)
- [NumberFieldRequest](docs/Model/NumberFieldRequest.md)
- [NumberFieldResponse](docs/Model/NumberFieldResponse.md)
- [NumberFieldResponseRequest](docs/Model/NumberFieldResponseRequest.md)
- [NumberFieldResponseResponse](docs/Model/NumberFieldResponseResponse.md)
- [OptionRequest](docs/Model/OptionRequest.md)
- [OptionResponse](docs/Model/OptionResponse.md)
- [OrganizationBillingInfoResponse](docs/Model/OrganizationBillingInfoResponse.md)
- [OrganizationCustomDataBulk](docs/Model/OrganizationCustomDataBulk.md)
- [OrganizationFeatures](docs/Model/OrganizationFeatures.md)
- [OrganizationResponse](docs/Model/OrganizationResponse.md)
- [OrganizationSearchAgency](docs/Model/OrganizationSearchAgency.md)
- [PaymentInfo](docs/Model/PaymentInfo.md)
- [PaymentInfoGrouping](docs/Model/PaymentInfoGrouping.md)
- [PaymentLine](docs/Model/PaymentLine.md)
- [PaymentReceipt](docs/Model/PaymentReceipt.md)
- [PhoneFieldRequest](docs/Model/PhoneFieldRequest.md)
- [PhoneFieldResponse](docs/Model/PhoneFieldResponse.md)
- [PhoneFieldResponseRequest](docs/Model/PhoneFieldResponseRequest.md)
- [PhoneFieldResponseResponse](docs/Model/PhoneFieldResponseResponse.md)
- [PlaceholderIntegrationSyncResponse](docs/Model/PlaceholderIntegrationSyncResponse.md)
- [PlaceholderMapping](docs/Model/PlaceholderMapping.md)
- [PlaceholderMappingsResponse](docs/Model/PlaceholderMappingsResponse.md)
- [PlaceholderResponse](docs/Model/PlaceholderResponse.md)
- [PlaceholderSortField](docs/Model/PlaceholderSortField.md)
- [PlaceholderSortOrder](docs/Model/PlaceholderSortOrder.md)
- [PostFileDataResponse](docs/Model/PostFileDataResponse.md)
- [ProjectGalleryRequest](docs/Model/ProjectGalleryRequest.md)
- [ProjectGalleryResponse](docs/Model/ProjectGalleryResponse.md)
- [ProjectResponse](docs/Model/ProjectResponse.md)
- [PublicMessageRequest](docs/Model/PublicMessageRequest.md)
- [PublicOrganizationCharityCheck](docs/Model/PublicOrganizationCharityCheck.md)
- [PublicOrganizationCustomData](docs/Model/PublicOrganizationCustomData.md)
- [PublicOrganizationOrganizationType](docs/Model/PublicOrganizationOrganizationType.md)
- [PublicOrganizationResponse](docs/Model/PublicOrganizationResponse.md)
- [PublicOrganizationUei](docs/Model/PublicOrganizationUei.md)
- [RandomSubmissionAssignmentsRequest](docs/Model/RandomSubmissionAssignmentsRequest.md)
- [ReferenceFormEntryMetadataResponse](docs/Model/ReferenceFormEntryMetadataResponse.md)
- [ReferenceFormEntryResponse](docs/Model/ReferenceFormEntryResponse.md)
- [ReferenceFormFieldRequest](docs/Model/ReferenceFormFieldRequest.md)
- [ReferenceFormFieldResponse](docs/Model/ReferenceFormFieldResponse.md)
- [ReferenceFormFieldResponseRequest](docs/Model/ReferenceFormFieldResponseRequest.md)
- [ReferenceFormFieldResponseResponse](docs/Model/ReferenceFormFieldResponseResponse.md)
- [ReferenceFormRequest](docs/Model/ReferenceFormRequest.md)
- [ReferenceFormResponse](docs/Model/ReferenceFormResponse.md)
- [RemoveStaffInviteRequest](docs/Model/RemoveStaffInviteRequest.md)
- [RequestFormCriteriaRequest](docs/Model/RequestFormCriteriaRequest.md)
- [RequestFormCriteriaResponse](docs/Model/RequestFormCriteriaResponse.md)
- [RequestFormEntryMetadataResponse](docs/Model/RequestFormEntryMetadataResponse.md)
- [RequestFormEntryResponse](docs/Model/RequestFormEntryResponse.md)
- [RequestFormRequest](docs/Model/RequestFormRequest.md)
- [RequestFormResponse](docs/Model/RequestFormResponse.md)
- [RequestFormsFilter](docs/Model/RequestFormsFilter.md)
- [RequestFormsStatus](docs/Model/RequestFormsStatus.md)
- [RescindAdditionalFormsRequest](docs/Model/RescindAdditionalFormsRequest.md)
- [ResendStaffInvitesRequest](docs/Model/ResendStaffInvitesRequest.md)
- [ReviewFormEntryMetadataResponse](docs/Model/ReviewFormEntryMetadataResponse.md)
- [ReviewFormEntryResponse](docs/Model/ReviewFormEntryResponse.md)
- [ReviewFormRequest](docs/Model/ReviewFormRequest.md)
- [ReviewFormResponse](docs/Model/ReviewFormResponse.md)
- [ReviewStageRequest](docs/Model/ReviewStageRequest.md)
- [ReviewStageResponse](docs/Model/ReviewStageResponse.md)
- [ReviewStatus](docs/Model/ReviewStatus.md)
- [ScheduledAdditionalFormBySubmissionResponse](docs/Model/ScheduledAdditionalFormBySubmissionResponse.md)
- [ScheduledAdditionalFormsBySubmissionIdResponse](docs/Model/ScheduledAdditionalFormsBySubmissionIdResponse.md)
- [SendFundsRequest](docs/Model/SendFundsRequest.md)
- [SendMessageToEntriesRequest](docs/Model/SendMessageToEntriesRequest.md)
- [ShortAnswerFieldRequest](docs/Model/ShortAnswerFieldRequest.md)
- [ShortAnswerFieldResponse](docs/Model/ShortAnswerFieldResponse.md)
- [ShortAnswerFieldResponseRequest](docs/Model/ShortAnswerFieldResponseRequest.md)
- [ShortAnswerFieldResponseResponse](docs/Model/ShortAnswerFieldResponseResponse.md)
- [SingleCheckboxFieldRequest](docs/Model/SingleCheckboxFieldRequest.md)
- [SingleCheckboxFieldResponse](docs/Model/SingleCheckboxFieldResponse.md)
- [SingleCheckboxFieldResponseRequest](docs/Model/SingleCheckboxFieldResponseRequest.md)
- [SingleCheckboxFieldResponseResponse](docs/Model/SingleCheckboxFieldResponseResponse.md)
- [SingleRatingFieldRequest](docs/Model/SingleRatingFieldRequest.md)
- [SingleRatingFieldResponse](docs/Model/SingleRatingFieldResponse.md)
- [SingleRatingFieldResponseRequest](docs/Model/SingleRatingFieldResponseRequest.md)
- [SingleRatingFieldResponseResponse](docs/Model/SingleRatingFieldResponseResponse.md)
- [SingleResponseFieldRequest](docs/Model/SingleResponseFieldRequest.md)
- [SingleResponseFieldResponse](docs/Model/SingleResponseFieldResponse.md)
- [SingleResponseFieldResponseRequest](docs/Model/SingleResponseFieldResponseRequest.md)
- [SingleResponseFieldResponseResponse](docs/Model/SingleResponseFieldResponseResponse.md)
- [SsnItinFieldRequest](docs/Model/SsnItinFieldRequest.md)
- [SsnItinFieldResponse](docs/Model/SsnItinFieldResponse.md)
- [SsnItinFieldResponseResponse](docs/Model/SsnItinFieldResponseResponse.md)
- [SsnItinResponseRequest](docs/Model/SsnItinResponseRequest.md)
- [StaffGroupRequest](docs/Model/StaffGroupRequest.md)
- [StaffGroupResponse](docs/Model/StaffGroupResponse.md)
- [SubmissionActionResponse](docs/Model/SubmissionActionResponse.md)
- [SubmissionAssignmentResponse](docs/Model/SubmissionAssignmentResponse.md)
- [SubmissionByEmailRequest](docs/Model/SubmissionByEmailRequest.md)
- [SubmissionByNameRequest](docs/Model/SubmissionByNameRequest.md)
- [SubmissionBySubmitterIdRequest](docs/Model/SubmissionBySubmitterIdRequest.md)
- [SubmissionGuidsBaseRequest](docs/Model/SubmissionGuidsBaseRequest.md)
- [SubmissionHistoryResponse](docs/Model/SubmissionHistoryResponse.md)
- [SubmissionListResponse](docs/Model/SubmissionListResponse.md)
- [SubmissionPendingTransfersResponse](docs/Model/SubmissionPendingTransfersResponse.md)
- [SubmissionPublicOrganizationUpdateItem](docs/Model/SubmissionPublicOrganizationUpdateItem.md)
- [SubmissionRequest](docs/Model/SubmissionRequest.md)
- [SubmissionResponse](docs/Model/SubmissionResponse.md)
- [SubmissionSortField](docs/Model/SubmissionSortField.md)
- [SubmissionSortOrder](docs/Model/SubmissionSortOrder.md)
- [SubmissionTransferRequestResponseItem](docs/Model/SubmissionTransferRequestResponseItem.md)
- [SubmitterResponse](docs/Model/SubmitterResponse.md)
- [SubmittersResponse](docs/Model/SubmittersResponse.md)
- [SyncPlaceholdersRequest](docs/Model/SyncPlaceholdersRequest.md)
- [SyncPlaceholdersResponse](docs/Model/SyncPlaceholdersResponse.md)
- [TableCell](docs/Model/TableCell.md)
- [TableCellRequest](docs/Model/TableCellRequest.md)
- [TableFieldRequest](docs/Model/TableFieldRequest.md)
- [TableFieldResponse](docs/Model/TableFieldResponse.md)
- [TableFieldResponseRequest](docs/Model/TableFieldResponseRequest.md)
- [TableFieldResponseResponse](docs/Model/TableFieldResponseResponse.md)
- [TeamInviteResponse](docs/Model/TeamInviteResponse.md)
- [TeamMemberResponse](docs/Model/TeamMemberResponse.md)
- [TextOnlyFieldRequest](docs/Model/TextOnlyFieldRequest.md)
- [TextOnlyFieldResponse](docs/Model/TextOnlyFieldResponse.md)
- [TextOnlyFieldResponseRequest](docs/Model/TextOnlyFieldResponseRequest.md)
- [TextOnlyFieldResponseResponse](docs/Model/TextOnlyFieldResponseResponse.md)
- [TitleFieldRequest](docs/Model/TitleFieldRequest.md)
- [TitleFieldResponse](docs/Model/TitleFieldResponse.md)
- [TitleFieldResponseRequest](docs/Model/TitleFieldResponseRequest.md)
- [TitleFieldResponseResponse](docs/Model/TitleFieldResponseResponse.md)
- [TransactionResponse](docs/Model/TransactionResponse.md)
- [TypedFieldResponse](docs/Model/TypedFieldResponse.md)
- [UeiFieldRequest](docs/Model/UeiFieldRequest.md)
- [UeiFieldResponse](docs/Model/UeiFieldResponse.md)
- [UeiFieldResponseRequest](docs/Model/UeiFieldResponseRequest.md)
- [UeiFieldResponseResponse](docs/Model/UeiFieldResponseResponse.md)
- [UpdateAdditionalFormEntryOrgRequest](docs/Model/UpdateAdditionalFormEntryOrgRequest.md)
- [UpdateCustomPlaceholderRequest](docs/Model/UpdateCustomPlaceholderRequest.md)
- [UpdateEntriesIsOpenForEditingRequest](docs/Model/UpdateEntriesIsOpenForEditingRequest.md)
- [UpdateFormEntryOrgRequest](docs/Model/UpdateFormEntryOrgRequest.md)
- [UpdateFormEntryRequest](docs/Model/UpdateFormEntryRequest.md)
- [UpdateFundRequest](docs/Model/UpdateFundRequest.md)
- [UpdateInitialFormEntryOrgRequest](docs/Model/UpdateInitialFormEntryOrgRequest.md)
- [UpdateInternalFormEntryRequest](docs/Model/UpdateInternalFormEntryRequest.md)
- [UpdateIsOpenForEditingRequest](docs/Model/UpdateIsOpenForEditingRequest.md)
- [UpdateLabelRequest](docs/Model/UpdateLabelRequest.md)
- [UpdateOrganizationBillingInfoRequest](docs/Model/UpdateOrganizationBillingInfoRequest.md)
- [UpdateProjectRequest](docs/Model/UpdateProjectRequest.md)
- [UpdateRequestFormEntryOrgRequest](docs/Model/UpdateRequestFormEntryOrgRequest.md)
- [UpdateRequestFormEntryStatusRequest](docs/Model/UpdateRequestFormEntryStatusRequest.md)
- [UpdateRequestFormIsOpenForEditingByFilterRequest](docs/Model/UpdateRequestFormIsOpenForEditingByFilterRequest.md)
- [UpdateReviewScoreRequest](docs/Model/UpdateReviewScoreRequest.md)
- [UpdateStatusCreateSubmissionMessageRequest](docs/Model/UpdateStatusCreateSubmissionMessageRequest.md)
- [UpdateSubmissionAssignmentsApiResponse](docs/Model/UpdateSubmissionAssignmentsApiResponse.md)
- [UpdateSubmissionAssignmentsRequest](docs/Model/UpdateSubmissionAssignmentsRequest.md)
- [UpdateSubmissionAssignmentsResponse](docs/Model/UpdateSubmissionAssignmentsResponse.md)
- [UpdateSubmissionPublicOrganizationRequest](docs/Model/UpdateSubmissionPublicOrganizationRequest.md)
- [UpdateSubmissionReviewStageResponse](docs/Model/UpdateSubmissionReviewStageResponse.md)
- [UpdateSubmissionStatusAcceptedRequest](docs/Model/UpdateSubmissionStatusAcceptedRequest.md)
- [UpdateSubmissionStatusCompletedRequest](docs/Model/UpdateSubmissionStatusCompletedRequest.md)
- [UpdateSubmissionStatusDeclinedRequest](docs/Model/UpdateSubmissionStatusDeclinedRequest.md)
- [UpdateSubmissionStatusInProgressRequest](docs/Model/UpdateSubmissionStatusInProgressRequest.md)
- [UpdateSubmissionStatusRequest](docs/Model/UpdateSubmissionStatusRequest.md)
- [UpdateSubmissionStatusWithdrawnRequest](docs/Model/UpdateSubmissionStatusWithdrawnRequest.md)
- [UpdateSubmissionsAssignmentsRequest](docs/Model/UpdateSubmissionsAssignmentsRequest.md)
- [UpdateSubmissionsIsOpenForEditingRequest](docs/Model/UpdateSubmissionsIsOpenForEditingRequest.md)
- [UpdateSubmissionsReviewStageRequest](docs/Model/UpdateSubmissionsReviewStageRequest.md)
- [UpdateSubmissionsStatusRequest](docs/Model/UpdateSubmissionsStatusRequest.md)
- [UpdateTeamMembersRequest](docs/Model/UpdateTeamMembersRequest.md)
- [UpdateTransactionRequest](docs/Model/UpdateTransactionRequest.md)
- [UploadNoteFileAttachmentRequest](docs/Model/UploadNoteFileAttachmentRequest.md)
- [V4EntriesEntryIdGet200Response](docs/Model/V4EntriesEntryIdGet200Response.md)
- [V4EntriesEntryIdPatchRequest](docs/Model/V4EntriesEntryIdPatchRequest.md)
- [V4EntriesEntryIdPutRequest](docs/Model/V4EntriesEntryIdPutRequest.md)
- [V4FormsPost201Response](docs/Model/V4FormsPost201Response.md)
- [V4FormsPostRequest](docs/Model/V4FormsPostRequest.md)
- [V4LabelResponse](docs/Model/V4LabelResponse.md)
- [V4SubmissionsPostRequest](docs/Model/V4SubmissionsPostRequest.md)
- [V4SubmissionsSubmissionIdStatusPutRequest](docs/Model/V4SubmissionsSubmissionIdStatusPutRequest.md)
- [V4TransactionsPostRequest](docs/Model/V4TransactionsPostRequest.md)
- [WebsiteFieldRequest](docs/Model/WebsiteFieldRequest.md)
- [WebsiteFieldResponse](docs/Model/WebsiteFieldResponse.md)
- [WebsiteFieldResponseRequest](docs/Model/WebsiteFieldResponseRequest.md)
- [WebsiteFieldResponseResponse](docs/Model/WebsiteFieldResponseResponse.md)
- [ZapierSubscriptionRequest](docs/Model/ZapierSubscriptionRequest.md)
- [ZapierUnsubscribeRequest](docs/Model/ZapierUnsubscribeRequest.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v4`
    - Generator version: `7.11.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
