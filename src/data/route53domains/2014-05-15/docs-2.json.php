<?php
// This file was auto-generated from sdk-root/src/data/route53domains/2014-05-15/docs-2.json
return [ 'version' => '2.0', 'service' => NULL, 'operations' => [ 'CheckDomainAvailability' => NULL, 'DeleteTagsForDomain' => NULL, 'DisableDomainAutoRenew' => NULL, 'DisableDomainTransferLock' => NULL, 'EnableDomainAutoRenew' => NULL, 'EnableDomainTransferLock' => NULL, 'GetContactReachabilityStatus' => NULL, 'GetDomainDetail' => NULL, 'GetDomainSuggestions' => NULL, 'GetOperationDetail' => NULL, 'ListDomains' => NULL, 'ListOperations' => NULL, 'ListTagsForDomain' => NULL, 'RegisterDomain' => NULL, 'RenewDomain' => NULL, 'ResendContactReachabilityEmail' => NULL, 'RetrieveDomainAuthCode' => NULL, 'TransferDomain' => NULL, 'UpdateDomainContact' => NULL, 'UpdateDomainContactPrivacy' => NULL, 'UpdateDomainNameservers' => NULL, 'UpdateTagsForDomain' => NULL, 'ViewBilling' => NULL, ], 'shapes' => [ 'AddressLine' => [ 'base' => NULL, 'refs' => [ 'ContactDetail$AddressLine1' => NULL, 'ContactDetail$AddressLine2' => NULL, ], ], 'BillingRecord' => [ 'base' => NULL, 'refs' => [ 'BillingRecords$member' => NULL, ], ], 'BillingRecords' => [ 'base' => NULL, 'refs' => [ 'ViewBillingResponse$BillingRecords' => NULL, ], ], 'Boolean' => [ 'base' => NULL, 'refs' => [ 'DomainSummary$AutoRenew' => NULL, 'DomainSummary$TransferLock' => NULL, 'GetDomainDetailResponse$AutoRenew' => NULL, 'GetDomainDetailResponse$AdminPrivacy' => NULL, 'GetDomainDetailResponse$RegistrantPrivacy' => NULL, 'GetDomainDetailResponse$TechPrivacy' => NULL, 'GetDomainSuggestionsRequest$OnlyAvailable' => NULL, 'RegisterDomainRequest$AutoRenew' => NULL, 'RegisterDomainRequest$PrivacyProtectAdminContact' => NULL, 'RegisterDomainRequest$PrivacyProtectRegistrantContact' => NULL, 'RegisterDomainRequest$PrivacyProtectTechContact' => NULL, 'ResendContactReachabilityEmailResponse$isAlreadyVerified' => NULL, 'TransferDomainRequest$AutoRenew' => NULL, 'TransferDomainRequest$PrivacyProtectAdminContact' => NULL, 'TransferDomainRequest$PrivacyProtectRegistrantContact' => NULL, 'TransferDomainRequest$PrivacyProtectTechContact' => NULL, 'UpdateDomainContactPrivacyRequest$AdminPrivacy' => NULL, 'UpdateDomainContactPrivacyRequest$RegistrantPrivacy' => NULL, 'UpdateDomainContactPrivacyRequest$TechPrivacy' => NULL, ], ], 'CheckDomainAvailabilityRequest' => [ 'base' => NULL, 'refs' => [], ], 'CheckDomainAvailabilityResponse' => [ 'base' => NULL, 'refs' => [], ], 'City' => [ 'base' => NULL, 'refs' => [ 'ContactDetail$City' => NULL, ], ], 'ContactDetail' => [ 'base' => NULL, 'refs' => [ 'GetDomainDetailResponse$AdminContact' => NULL, 'GetDomainDetailResponse$RegistrantContact' => NULL, 'GetDomainDetailResponse$TechContact' => NULL, 'RegisterDomainRequest$AdminContact' => NULL, 'RegisterDomainRequest$RegistrantContact' => NULL, 'RegisterDomainRequest$TechContact' => NULL, 'TransferDomainRequest$AdminContact' => NULL, 'TransferDomainRequest$RegistrantContact' => NULL, 'TransferDomainRequest$TechContact' => NULL, 'UpdateDomainContactRequest$AdminContact' => NULL, 'UpdateDomainContactRequest$RegistrantContact' => NULL, 'UpdateDomainContactRequest$TechContact' => NULL, ], ], 'ContactName' => [ 'base' => NULL, 'refs' => [ 'ContactDetail$FirstName' => NULL, 'ContactDetail$LastName' => NULL, 'ContactDetail$OrganizationName' => NULL, ], ], 'ContactNumber' => [ 'base' => NULL, 'refs' => [ 'ContactDetail$PhoneNumber' => NULL, 'ContactDetail$Fax' => NULL, 'GetDomainDetailResponse$AbuseContactPhone' => NULL, ], ], 'ContactType' => [ 'base' => NULL, 'refs' => [ 'ContactDetail$ContactType' => NULL, ], ], 'CountryCode' => [ 'base' => NULL, 'refs' => [ 'ContactDetail$CountryCode' => NULL, ], ], 'CurrentExpiryYear' => [ 'base' => NULL, 'refs' => [ 'RenewDomainRequest$CurrentExpiryYear' => NULL, ], ], 'DNSSec' => [ 'base' => NULL, 'refs' => [ 'GetDomainDetailResponse$DnsSec' => NULL, ], ], 'DeleteTagsForDomainRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteTagsForDomainResponse' => [ 'base' => NULL, 'refs' => [], ], 'DisableDomainAutoRenewRequest' => [ 'base' => NULL, 'refs' => [], ], 'DisableDomainAutoRenewResponse' => [ 'base' => NULL, 'refs' => [], ], 'DisableDomainTransferLockRequest' => [ 'base' => NULL, 'refs' => [], ], 'DisableDomainTransferLockResponse' => [ 'base' => NULL, 'refs' => [], ], 'DomainAuthCode' => [ 'base' => NULL, 'refs' => [ 'RetrieveDomainAuthCodeResponse$AuthCode' => NULL, 'TransferDomainRequest$AuthCode' => NULL, ], ], 'DomainAvailability' => [ 'base' => NULL, 'refs' => [ 'CheckDomainAvailabilityResponse$Availability' => NULL, ], ], 'DomainLimitExceeded' => [ 'base' => NULL, 'refs' => [], ], 'DomainName' => [ 'base' => NULL, 'refs' => [ 'BillingRecord$DomainName' => NULL, 'CheckDomainAvailabilityRequest$DomainName' => NULL, 'DeleteTagsForDomainRequest$DomainName' => NULL, 'DisableDomainAutoRenewRequest$DomainName' => NULL, 'DisableDomainTransferLockRequest$DomainName' => NULL, 'DomainSuggestion$DomainName' => NULL, 'DomainSummary$DomainName' => NULL, 'EnableDomainAutoRenewRequest$DomainName' => NULL, 'EnableDomainTransferLockRequest$DomainName' => NULL, 'GetContactReachabilityStatusRequest$domainName' => NULL, 'GetContactReachabilityStatusResponse$domainName' => NULL, 'GetDomainDetailRequest$DomainName' => NULL, 'GetDomainDetailResponse$DomainName' => NULL, 'GetDomainSuggestionsRequest$DomainName' => NULL, 'GetOperationDetailResponse$DomainName' => NULL, 'ListTagsForDomainRequest$DomainName' => NULL, 'RegisterDomainRequest$DomainName' => NULL, 'RenewDomainRequest$DomainName' => NULL, 'ResendContactReachabilityEmailRequest$domainName' => NULL, 'ResendContactReachabilityEmailResponse$domainName' => NULL, 'RetrieveDomainAuthCodeRequest$DomainName' => NULL, 'TransferDomainRequest$DomainName' => NULL, 'UpdateDomainContactPrivacyRequest$DomainName' => NULL, 'UpdateDomainContactRequest$DomainName' => NULL, 'UpdateDomainNameserversRequest$DomainName' => NULL, 'UpdateTagsForDomainRequest$DomainName' => NULL, ], ], 'DomainStatus' => [ 'base' => NULL, 'refs' => [ 'DomainStatusList$member' => NULL, ], ], 'DomainStatusList' => [ 'base' => NULL, 'refs' => [ 'GetDomainDetailResponse$StatusList' => NULL, ], ], 'DomainSuggestion' => [ 'base' => NULL, 'refs' => [ 'DomainSuggestionsList$member' => NULL, ], ], 'DomainSuggestionsList' => [ 'base' => NULL, 'refs' => [ 'GetDomainSuggestionsResponse$SuggestionsList' => NULL, ], ], 'DomainSummary' => [ 'base' => NULL, 'refs' => [ 'DomainSummaryList$member' => NULL, ], ], 'DomainSummaryList' => [ 'base' => NULL, 'refs' => [ 'ListDomainsResponse$Domains' => NULL, ], ], 'DuplicateRequest' => [ 'base' => NULL, 'refs' => [], ], 'DurationInYears' => [ 'base' => NULL, 'refs' => [ 'RegisterDomainRequest$DurationInYears' => NULL, 'RenewDomainRequest$DurationInYears' => NULL, 'TransferDomainRequest$DurationInYears' => NULL, ], ], 'Email' => [ 'base' => NULL, 'refs' => [ 'ContactDetail$Email' => NULL, 'GetDomainDetailResponse$AbuseContactEmail' => NULL, 'ResendContactReachabilityEmailResponse$emailAddress' => NULL, ], ], 'EnableDomainAutoRenewRequest' => [ 'base' => NULL, 'refs' => [], ], 'EnableDomainAutoRenewResponse' => [ 'base' => NULL, 'refs' => [], ], 'EnableDomainTransferLockRequest' => [ 'base' => NULL, 'refs' => [], ], 'EnableDomainTransferLockResponse' => [ 'base' => NULL, 'refs' => [], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'DomainLimitExceeded$message' => NULL, 'DuplicateRequest$message' => NULL, 'GetOperationDetailResponse$Message' => NULL, 'InvalidInput$message' => NULL, 'OperationLimitExceeded$message' => NULL, 'TLDRulesViolation$message' => NULL, 'UnsupportedTLD$message' => NULL, ], ], 'ExtraParam' => [ 'base' => NULL, 'refs' => [ 'ExtraParamList$member' => NULL, ], ], 'ExtraParamList' => [ 'base' => NULL, 'refs' => [ 'ContactDetail$ExtraParams' => NULL, ], ], 'ExtraParamName' => [ 'base' => NULL, 'refs' => [ 'ExtraParam$Name' => NULL, ], ], 'ExtraParamValue' => [ 'base' => NULL, 'refs' => [ 'ExtraParam$Value' => NULL, ], ], 'FIAuthKey' => [ 'base' => NULL, 'refs' => [ 'UpdateDomainNameserversRequest$FIAuthKey' => NULL, ], ], 'GetContactReachabilityStatusRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetContactReachabilityStatusResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetDomainDetailRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDomainDetailResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetDomainSuggestionsRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDomainSuggestionsResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetOperationDetailRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetOperationDetailResponse' => [ 'base' => NULL, 'refs' => [], ], 'GlueIp' => [ 'base' => NULL, 'refs' => [ 'GlueIpList$member' => NULL, ], ], 'GlueIpList' => [ 'base' => NULL, 'refs' => [ 'Nameserver$GlueIps' => NULL, ], ], 'HostName' => [ 'base' => NULL, 'refs' => [ 'Nameserver$Name' => NULL, ], ], 'Integer' => [ 'base' => NULL, 'refs' => [ 'GetDomainSuggestionsRequest$SuggestionCount' => NULL, ], ], 'InvalidInput' => [ 'base' => NULL, 'refs' => [], ], 'InvoiceId' => [ 'base' => NULL, 'refs' => [ 'BillingRecord$InvoiceId' => NULL, ], ], 'LangCode' => [ 'base' => NULL, 'refs' => [ 'CheckDomainAvailabilityRequest$IdnLangCode' => NULL, 'RegisterDomainRequest$IdnLangCode' => NULL, 'TransferDomainRequest$IdnLangCode' => NULL, ], ], 'ListDomainsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListDomainsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListOperationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListOperationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForDomainRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForDomainResponse' => [ 'base' => NULL, 'refs' => [], ], 'Nameserver' => [ 'base' => NULL, 'refs' => [ 'NameserverList$member' => NULL, ], ], 'NameserverList' => [ 'base' => NULL, 'refs' => [ 'GetDomainDetailResponse$Nameservers' => NULL, 'TransferDomainRequest$Nameservers' => NULL, 'UpdateDomainNameserversRequest$Nameservers' => NULL, ], ], 'OperationId' => [ 'base' => NULL, 'refs' => [ 'DisableDomainTransferLockResponse$OperationId' => NULL, 'EnableDomainTransferLockResponse$OperationId' => NULL, 'GetOperationDetailRequest$OperationId' => NULL, 'GetOperationDetailResponse$OperationId' => NULL, 'OperationSummary$OperationId' => NULL, 'RegisterDomainResponse$OperationId' => NULL, 'RenewDomainResponse$OperationId' => NULL, 'TransferDomainResponse$OperationId' => NULL, 'UpdateDomainContactPrivacyResponse$OperationId' => NULL, 'UpdateDomainContactResponse$OperationId' => NULL, 'UpdateDomainNameserversResponse$OperationId' => NULL, ], ], 'OperationLimitExceeded' => [ 'base' => NULL, 'refs' => [], ], 'OperationStatus' => [ 'base' => NULL, 'refs' => [ 'GetOperationDetailResponse$Status' => NULL, 'OperationSummary$Status' => NULL, ], ], 'OperationSummary' => [ 'base' => NULL, 'refs' => [ 'OperationSummaryList$member' => NULL, ], ], 'OperationSummaryList' => [ 'base' => NULL, 'refs' => [ 'ListOperationsResponse$Operations' => NULL, ], ], 'OperationType' => [ 'base' => NULL, 'refs' => [ 'BillingRecord$Operation' => NULL, 'GetOperationDetailResponse$Type' => NULL, 'OperationSummary$Type' => NULL, ], ], 'PageMarker' => [ 'base' => NULL, 'refs' => [ 'ListDomainsRequest$Marker' => NULL, 'ListDomainsResponse$NextPageMarker' => NULL, 'ListOperationsRequest$Marker' => NULL, 'ListOperationsResponse$NextPageMarker' => NULL, 'ViewBillingRequest$Marker' => NULL, 'ViewBillingResponse$NextPageMarker' => NULL, ], ], 'PageMaxItems' => [ 'base' => NULL, 'refs' => [ 'ListDomainsRequest$MaxItems' => NULL, 'ListOperationsRequest$MaxItems' => NULL, 'ViewBillingRequest$MaxItems' => NULL, ], ], 'Price' => [ 'base' => NULL, 'refs' => [ 'BillingRecord$Price' => NULL, ], ], 'ReachabilityStatus' => [ 'base' => NULL, 'refs' => [ 'GetContactReachabilityStatusResponse$status' => NULL, ], ], 'RegisterDomainRequest' => [ 'base' => NULL, 'refs' => [], ], 'RegisterDomainResponse' => [ 'base' => NULL, 'refs' => [], ], 'RegistrarName' => [ 'base' => NULL, 'refs' => [ 'GetDomainDetailResponse$RegistrarName' => NULL, ], ], 'RegistrarUrl' => [ 'base' => NULL, 'refs' => [ 'GetDomainDetailResponse$RegistrarUrl' => NULL, ], ], 'RegistrarWhoIsServer' => [ 'base' => NULL, 'refs' => [ 'GetDomainDetailResponse$WhoIsServer' => NULL, ], ], 'RegistryDomainId' => [ 'base' => NULL, 'refs' => [ 'GetDomainDetailResponse$RegistryDomainId' => NULL, ], ], 'RenewDomainRequest' => [ 'base' => NULL, 'refs' => [], ], 'RenewDomainResponse' => [ 'base' => NULL, 'refs' => [], ], 'Reseller' => [ 'base' => NULL, 'refs' => [ 'GetDomainDetailResponse$Reseller' => NULL, ], ], 'ResendContactReachabilityEmailRequest' => [ 'base' => NULL, 'refs' => [], ], 'ResendContactReachabilityEmailResponse' => [ 'base' => NULL, 'refs' => [], ], 'RetrieveDomainAuthCodeRequest' => [ 'base' => NULL, 'refs' => [], ], 'RetrieveDomainAuthCodeResponse' => [ 'base' => NULL, 'refs' => [], ], 'State' => [ 'base' => NULL, 'refs' => [ 'ContactDetail$State' => NULL, ], ], 'String' => [ 'base' => NULL, 'refs' => [ 'DomainSuggestion$Availability' => NULL, ], ], 'TLDRulesViolation' => [ 'base' => NULL, 'refs' => [], ], 'Tag' => [ 'base' => NULL, 'refs' => [ 'TagList$member' => NULL, ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'Tag$Key' => NULL, 'TagKeyList$member' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'DeleteTagsForDomainRequest$TagsToDelete' => NULL, ], ], 'TagList' => [ 'base' => NULL, 'refs' => [ 'ListTagsForDomainResponse$TagList' => NULL, 'UpdateTagsForDomainRequest$TagsToUpdate' => NULL, ], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'Tag$Value' => NULL, ], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'BillingRecord$BillDate' => NULL, 'DomainSummary$Expiry' => NULL, 'GetDomainDetailResponse$CreationDate' => NULL, 'GetDomainDetailResponse$UpdatedDate' => NULL, 'GetDomainDetailResponse$ExpirationDate' => NULL, 'GetOperationDetailResponse$SubmittedDate' => NULL, 'OperationSummary$SubmittedDate' => NULL, 'ViewBillingRequest$Start' => NULL, 'ViewBillingRequest$End' => NULL, ], ], 'TransferDomainRequest' => [ 'base' => NULL, 'refs' => [], ], 'TransferDomainResponse' => [ 'base' => NULL, 'refs' => [], ], 'UnsupportedTLD' => [ 'base' => NULL, 'refs' => [], ], 'UpdateDomainContactPrivacyRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateDomainContactPrivacyResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateDomainContactRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateDomainContactResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateDomainNameserversRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateDomainNameserversResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateTagsForDomainRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateTagsForDomainResponse' => [ 'base' => NULL, 'refs' => [], ], 'ViewBillingRequest' => [ 'base' => NULL, 'refs' => [], ], 'ViewBillingResponse' => [ 'base' => NULL, 'refs' => [], ], 'ZipCode' => [ 'base' => NULL, 'refs' => [ 'ContactDetail$ZipCode' => NULL, ], ], ],];
