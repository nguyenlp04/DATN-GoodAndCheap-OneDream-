<?php
// This file was auto-generated from sdk-root/src/data/directory-service-data/2023-05-31/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2023-05-31', 'endpointPrefix' => 'ds-data', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'protocols' => [ 'rest-json', ], 'serviceFullName' => 'AWS Directory Service Data', 'serviceId' => 'Directory Service Data', 'signatureVersion' => 'v4', 'signingName' => 'ds-data', 'uid' => 'directory-service-data-2023-05-31', ], 'operations' => [ 'AddGroupMember' => [ 'name' => 'AddGroupMember', 'http' => [ 'method' => 'POST', 'requestUri' => '/GroupMemberships/AddGroupMember', 'responseCode' => 200, ], 'input' => [ 'shape' => 'AddGroupMemberRequest', ], 'output' => [ 'shape' => 'AddGroupMemberResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'CreateGroup' => [ 'name' => 'CreateGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/Groups/CreateGroup', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateGroupRequest', ], 'output' => [ 'shape' => 'CreateGroupResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'CreateUser' => [ 'name' => 'CreateUser', 'http' => [ 'method' => 'POST', 'requestUri' => '/Users/CreateUser', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateUserRequest', ], 'output' => [ 'shape' => 'CreateUserResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'DeleteGroup' => [ 'name' => 'DeleteGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/Groups/DeleteGroup', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteGroupRequest', ], 'output' => [ 'shape' => 'DeleteGroupResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'DeleteUser' => [ 'name' => 'DeleteUser', 'http' => [ 'method' => 'POST', 'requestUri' => '/Users/DeleteUser', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteUserRequest', ], 'output' => [ 'shape' => 'DeleteUserResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'DescribeGroup' => [ 'name' => 'DescribeGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/Groups/DescribeGroup', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeGroupRequest', ], 'output' => [ 'shape' => 'DescribeGroupResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'DescribeUser' => [ 'name' => 'DescribeUser', 'http' => [ 'method' => 'POST', 'requestUri' => '/Users/DescribeUser', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeUserRequest', ], 'output' => [ 'shape' => 'DescribeUserResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'DisableUser' => [ 'name' => 'DisableUser', 'http' => [ 'method' => 'POST', 'requestUri' => '/Users/DisableUser', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DisableUserRequest', ], 'output' => [ 'shape' => 'DisableUserResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListGroupMembers' => [ 'name' => 'ListGroupMembers', 'http' => [ 'method' => 'POST', 'requestUri' => '/GroupMemberships/ListGroupMembers', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListGroupMembersRequest', ], 'output' => [ 'shape' => 'ListGroupMembersResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListGroups' => [ 'name' => 'ListGroups', 'http' => [ 'method' => 'POST', 'requestUri' => '/Groups/ListGroups', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListGroupsRequest', ], 'output' => [ 'shape' => 'ListGroupsResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListGroupsForMember' => [ 'name' => 'ListGroupsForMember', 'http' => [ 'method' => 'POST', 'requestUri' => '/GroupMemberships/ListGroupsForMember', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListGroupsForMemberRequest', ], 'output' => [ 'shape' => 'ListGroupsForMemberResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'ListUsers' => [ 'name' => 'ListUsers', 'http' => [ 'method' => 'POST', 'requestUri' => '/Users/ListUsers', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListUsersRequest', ], 'output' => [ 'shape' => 'ListUsersResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'RemoveGroupMember' => [ 'name' => 'RemoveGroupMember', 'http' => [ 'method' => 'POST', 'requestUri' => '/GroupMemberships/RemoveGroupMember', 'responseCode' => 200, ], 'input' => [ 'shape' => 'RemoveGroupMemberRequest', ], 'output' => [ 'shape' => 'RemoveGroupMemberResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'SearchGroups' => [ 'name' => 'SearchGroups', 'http' => [ 'method' => 'POST', 'requestUri' => '/Groups/SearchGroups', 'responseCode' => 200, ], 'input' => [ 'shape' => 'SearchGroupsRequest', ], 'output' => [ 'shape' => 'SearchGroupsResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'SearchUsers' => [ 'name' => 'SearchUsers', 'http' => [ 'method' => 'POST', 'requestUri' => '/Users/SearchUsers', 'responseCode' => 200, ], 'input' => [ 'shape' => 'SearchUsersRequest', ], 'output' => [ 'shape' => 'SearchUsersResult', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'UpdateGroup' => [ 'name' => 'UpdateGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/Groups/UpdateGroup', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateGroupRequest', ], 'output' => [ 'shape' => 'UpdateGroupResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'UpdateUser' => [ 'name' => 'UpdateUser', 'http' => [ 'method' => 'POST', 'requestUri' => '/Users/UpdateUser', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateUserRequest', ], 'output' => [ 'shape' => 'UpdateUserResult', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'DirectoryUnavailableException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ThrottlingException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], 'Reason' => [ 'shape' => 'AccessDeniedReason', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'AccessDeniedReason' => [ 'type' => 'string', 'enum' => [ 'IAM_AUTH', 'DIRECTORY_AUTH', 'DATA_DISABLED', ], ], 'AddGroupMemberRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'GroupName', 'MemberName', ], 'members' => [ 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'GroupName' => [ 'shape' => 'GroupName', ], 'MemberName' => [ 'shape' => 'MemberName', ], 'MemberRealm' => [ 'shape' => 'Realm', ], ], ], 'AddGroupMemberResult' => [ 'type' => 'structure', 'members' => [], ], 'AttributeValue' => [ 'type' => 'structure', 'members' => [ 'BOOL' => [ 'shape' => 'BooleanAttributeValue', ], 'N' => [ 'shape' => 'NumberAttributeValue', ], 'S' => [ 'shape' => 'StringAttributeValue', ], 'SS' => [ 'shape' => 'StringSetAttributeValue', ], ], 'union' => true, ], 'Attributes' => [ 'type' => 'map', 'key' => [ 'shape' => 'LdapDisplayName', ], 'value' => [ 'shape' => 'AttributeValue', ], 'max' => 25, 'min' => 1, ], 'Boolean' => [ 'type' => 'boolean', 'box' => true, ], 'BooleanAttributeValue' => [ 'type' => 'boolean', 'box' => true, 'sensitive' => true, ], 'ClientToken' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^[\\x00-\\x7F]+$', ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'CreateGroupRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'SAMAccountName', ], 'members' => [ 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'GroupScope' => [ 'shape' => 'GroupScope', ], 'GroupType' => [ 'shape' => 'GroupType', ], 'OtherAttributes' => [ 'shape' => 'Attributes', ], 'SAMAccountName' => [ 'shape' => 'GroupName', ], ], ], 'CreateGroupResult' => [ 'type' => 'structure', 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', ], 'SAMAccountName' => [ 'shape' => 'GroupName', ], 'SID' => [ 'shape' => 'SID', ], ], ], 'CreateUserRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'SAMAccountName', ], 'members' => [ 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'EmailAddress' => [ 'shape' => 'EmailAddress', ], 'GivenName' => [ 'shape' => 'GivenName', ], 'OtherAttributes' => [ 'shape' => 'Attributes', ], 'SAMAccountName' => [ 'shape' => 'UserName', ], 'Surname' => [ 'shape' => 'Surname', ], ], ], 'CreateUserResult' => [ 'type' => 'structure', 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', ], 'SAMAccountName' => [ 'shape' => 'UserName', ], 'SID' => [ 'shape' => 'SID', ], ], ], 'DeleteGroupRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'SAMAccountName', ], 'members' => [ 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'SAMAccountName' => [ 'shape' => 'GroupName', ], ], ], 'DeleteGroupResult' => [ 'type' => 'structure', 'members' => [], ], 'DeleteUserRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'SAMAccountName', ], 'members' => [ 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'SAMAccountName' => [ 'shape' => 'UserName', ], ], ], 'DeleteUserResult' => [ 'type' => 'structure', 'members' => [], ], 'DescribeGroupRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'SAMAccountName', ], 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'OtherAttributes' => [ 'shape' => 'LdapDisplayNameList', ], 'Realm' => [ 'shape' => 'Realm', ], 'SAMAccountName' => [ 'shape' => 'GroupName', ], ], ], 'DescribeGroupResult' => [ 'type' => 'structure', 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', ], 'DistinguishedName' => [ 'shape' => 'DistinguishedName', ], 'GroupScope' => [ 'shape' => 'GroupScope', ], 'GroupType' => [ 'shape' => 'GroupType', ], 'OtherAttributes' => [ 'shape' => 'Attributes', ], 'Realm' => [ 'shape' => 'Realm', ], 'SAMAccountName' => [ 'shape' => 'GroupName', ], 'SID' => [ 'shape' => 'SID', ], ], ], 'DescribeUserRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'SAMAccountName', ], 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'OtherAttributes' => [ 'shape' => 'LdapDisplayNameList', ], 'Realm' => [ 'shape' => 'Realm', ], 'SAMAccountName' => [ 'shape' => 'UserName', ], ], ], 'DescribeUserResult' => [ 'type' => 'structure', 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', ], 'DistinguishedName' => [ 'shape' => 'DistinguishedName', ], 'EmailAddress' => [ 'shape' => 'EmailAddress', ], 'Enabled' => [ 'shape' => 'Boolean', ], 'GivenName' => [ 'shape' => 'GivenName', ], 'OtherAttributes' => [ 'shape' => 'Attributes', ], 'Realm' => [ 'shape' => 'Realm', ], 'SAMAccountName' => [ 'shape' => 'UserName', ], 'SID' => [ 'shape' => 'SID', ], 'Surname' => [ 'shape' => 'Surname', ], 'UserPrincipalName' => [ 'shape' => 'UserPrincipalName', ], ], ], 'DirectoryId' => [ 'type' => 'string', 'pattern' => '^d-[0-9a-f]{10}$', ], 'DirectoryUnavailableException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], 'Reason' => [ 'shape' => 'DirectoryUnavailableReason', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, 'retryable' => [ 'throttling' => false, ], ], 'DirectoryUnavailableReason' => [ 'type' => 'string', 'enum' => [ 'INVALID_DIRECTORY_STATE', 'DIRECTORY_TIMEOUT', 'DIRECTORY_RESOURCES_EXCEEDED', 'NO_DISK_SPACE', 'TRUST_AUTH_FAILURE', ], ], 'DisableUserRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'SAMAccountName', ], 'members' => [ 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'SAMAccountName' => [ 'shape' => 'UserName', ], ], ], 'DisableUserResult' => [ 'type' => 'structure', 'members' => [], ], 'DistinguishedName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'sensitive' => true, ], 'EmailAddress' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'sensitive' => true, ], 'ExceptionMessage' => [ 'type' => 'string', ], 'GivenName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'sensitive' => true, ], 'Group' => [ 'type' => 'structure', 'required' => [ 'SAMAccountName', ], 'members' => [ 'DistinguishedName' => [ 'shape' => 'DistinguishedName', ], 'GroupScope' => [ 'shape' => 'GroupScope', ], 'GroupType' => [ 'shape' => 'GroupType', ], 'OtherAttributes' => [ 'shape' => 'Attributes', ], 'SAMAccountName' => [ 'shape' => 'GroupName', ], 'SID' => [ 'shape' => 'SID', ], ], ], 'GroupList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Group', ], ], 'GroupName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[^:;|=+"*?<>/\\\\,\\[\\]@]+$', ], 'GroupScope' => [ 'type' => 'string', 'enum' => [ 'DomainLocal', 'Global', 'Universal', 'BuiltinLocal', ], ], 'GroupSummary' => [ 'type' => 'structure', 'required' => [ 'GroupScope', 'GroupType', 'SAMAccountName', 'SID', ], 'members' => [ 'GroupScope' => [ 'shape' => 'GroupScope', ], 'GroupType' => [ 'shape' => 'GroupType', ], 'SAMAccountName' => [ 'shape' => 'GroupName', ], 'SID' => [ 'shape' => 'SID', ], ], ], 'GroupSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'GroupSummary', ], ], 'GroupType' => [ 'type' => 'string', 'enum' => [ 'Distribution', 'Security', ], ], 'Integer' => [ 'type' => 'integer', 'box' => true, ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, 'retryable' => [ 'throttling' => false, ], ], 'LdapDisplayName' => [ 'type' => 'string', 'max' => 63, 'min' => 1, 'pattern' => '^[A-Za-z*][A-Za-z-*]*$', ], 'LdapDisplayNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LdapDisplayName', ], 'max' => 25, 'min' => 1, ], 'ListGroupMembersRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'SAMAccountName', ], 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'MemberRealm' => [ 'shape' => 'Realm', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Realm' => [ 'shape' => 'Realm', ], 'SAMAccountName' => [ 'shape' => 'GroupName', ], ], ], 'ListGroupMembersResult' => [ 'type' => 'structure', 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', ], 'MemberRealm' => [ 'shape' => 'Realm', ], 'Members' => [ 'shape' => 'MemberList', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Realm' => [ 'shape' => 'Realm', ], ], ], 'ListGroupsForMemberRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'SAMAccountName', ], 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'MemberRealm' => [ 'shape' => 'Realm', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Realm' => [ 'shape' => 'Realm', ], 'SAMAccountName' => [ 'shape' => 'MemberName', ], ], ], 'ListGroupsForMemberResult' => [ 'type' => 'structure', 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', ], 'Groups' => [ 'shape' => 'GroupSummaryList', ], 'MemberRealm' => [ 'shape' => 'Realm', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Realm' => [ 'shape' => 'Realm', ], ], ], 'ListGroupsRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', ], 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Realm' => [ 'shape' => 'Realm', ], ], ], 'ListGroupsResult' => [ 'type' => 'structure', 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', ], 'Groups' => [ 'shape' => 'GroupSummaryList', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Realm' => [ 'shape' => 'Realm', ], ], ], 'ListUsersRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', ], 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Realm' => [ 'shape' => 'Realm', ], ], ], 'ListUsersResult' => [ 'type' => 'structure', 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Realm' => [ 'shape' => 'Realm', ], 'Users' => [ 'shape' => 'UserSummaryList', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 250, 'min' => 1, ], 'Member' => [ 'type' => 'structure', 'required' => [ 'MemberType', 'SAMAccountName', 'SID', ], 'members' => [ 'MemberType' => [ 'shape' => 'MemberType', ], 'SAMAccountName' => [ 'shape' => 'MemberName', ], 'SID' => [ 'shape' => 'SID', ], ], ], 'MemberList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Member', ], ], 'MemberName' => [ 'type' => 'string', 'max' => 63, 'min' => 1, 'pattern' => '^[^:;|=+"*?<>/\\\\,\\[\\]@]+$', ], 'MemberType' => [ 'type' => 'string', 'enum' => [ 'USER', 'GROUP', 'COMPUTER', ], ], 'NextToken' => [ 'type' => 'string', 'max' => 6144, 'min' => 1, 'sensitive' => true, ], 'NumberAttributeValue' => [ 'type' => 'long', 'box' => true, 'sensitive' => true, ], 'Realm' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '^([a-zA-Z0-9]+[\\\\.-])+([a-zA-Z0-9])+[.]?$', ], 'RemoveGroupMemberRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'GroupName', 'MemberName', ], 'members' => [ 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'GroupName' => [ 'shape' => 'GroupName', ], 'MemberName' => [ 'shape' => 'MemberName', ], 'MemberRealm' => [ 'shape' => 'Realm', ], ], ], 'RemoveGroupMemberResult' => [ 'type' => 'structure', 'members' => [], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'SID' => [ 'type' => 'string', 'max' => 256, 'min' => 1, ], 'SearchGroupsRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'SearchAttributes', 'SearchString', ], 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Realm' => [ 'shape' => 'Realm', ], 'SearchAttributes' => [ 'shape' => 'LdapDisplayNameList', ], 'SearchString' => [ 'shape' => 'SearchString', ], ], ], 'SearchGroupsResult' => [ 'type' => 'structure', 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', ], 'Groups' => [ 'shape' => 'GroupList', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Realm' => [ 'shape' => 'Realm', ], ], ], 'SearchString' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'sensitive' => true, ], 'SearchUsersRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'SearchAttributes', 'SearchString', ], 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Realm' => [ 'shape' => 'Realm', ], 'SearchAttributes' => [ 'shape' => 'LdapDisplayNameList', ], 'SearchString' => [ 'shape' => 'SearchString', ], ], ], 'SearchUsersResult' => [ 'type' => 'structure', 'members' => [ 'DirectoryId' => [ 'shape' => 'DirectoryId', ], 'NextToken' => [ 'shape' => 'NextToken', ], 'Realm' => [ 'shape' => 'Realm', ], 'Users' => [ 'shape' => 'UserList', ], ], ], 'StringAttributeValue' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, 'sensitive' => true, ], 'StringSetAttributeValue' => [ 'type' => 'list', 'member' => [ 'shape' => 'StringAttributeValue', ], 'max' => 25, 'min' => 0, 'sensitive' => true, ], 'Surname' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'sensitive' => true, ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], 'RetryAfterSeconds' => [ 'shape' => 'Integer', 'location' => 'header', 'locationName' => 'Retry-After', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, 'retryable' => [ 'throttling' => true, ], ], 'UpdateGroupRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'SAMAccountName', ], 'members' => [ 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'GroupScope' => [ 'shape' => 'GroupScope', ], 'GroupType' => [ 'shape' => 'GroupType', ], 'OtherAttributes' => [ 'shape' => 'Attributes', ], 'SAMAccountName' => [ 'shape' => 'GroupName', ], 'UpdateType' => [ 'shape' => 'UpdateType', ], ], ], 'UpdateGroupResult' => [ 'type' => 'structure', 'members' => [], ], 'UpdateType' => [ 'type' => 'string', 'enum' => [ 'ADD', 'REPLACE', 'REMOVE', ], ], 'UpdateUserRequest' => [ 'type' => 'structure', 'required' => [ 'DirectoryId', 'SAMAccountName', ], 'members' => [ 'ClientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, ], 'DirectoryId' => [ 'shape' => 'DirectoryId', 'location' => 'querystring', 'locationName' => 'DirectoryId', ], 'EmailAddress' => [ 'shape' => 'EmailAddress', ], 'GivenName' => [ 'shape' => 'GivenName', ], 'OtherAttributes' => [ 'shape' => 'Attributes', ], 'SAMAccountName' => [ 'shape' => 'UserName', ], 'Surname' => [ 'shape' => 'Surname', ], 'UpdateType' => [ 'shape' => 'UpdateType', ], ], ], 'UpdateUserResult' => [ 'type' => 'structure', 'members' => [], ], 'User' => [ 'type' => 'structure', 'required' => [ 'SAMAccountName', ], 'members' => [ 'DistinguishedName' => [ 'shape' => 'DistinguishedName', ], 'EmailAddress' => [ 'shape' => 'EmailAddress', ], 'Enabled' => [ 'shape' => 'Boolean', ], 'GivenName' => [ 'shape' => 'GivenName', ], 'OtherAttributes' => [ 'shape' => 'Attributes', ], 'SAMAccountName' => [ 'shape' => 'UserName', ], 'SID' => [ 'shape' => 'SID', ], 'Surname' => [ 'shape' => 'Surname', ], 'UserPrincipalName' => [ 'shape' => 'UserPrincipalName', ], ], ], 'UserList' => [ 'type' => 'list', 'member' => [ 'shape' => 'User', ], ], 'UserName' => [ 'type' => 'string', 'max' => 20, 'min' => 1, 'pattern' => '^[\\w\\-.]+$', ], 'UserPrincipalName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'sensitive' => true, ], 'UserSummary' => [ 'type' => 'structure', 'required' => [ 'Enabled', 'SAMAccountName', 'SID', ], 'members' => [ 'Enabled' => [ 'shape' => 'Boolean', ], 'GivenName' => [ 'shape' => 'GivenName', ], 'SAMAccountName' => [ 'shape' => 'UserName', ], 'SID' => [ 'shape' => 'SID', ], 'Surname' => [ 'shape' => 'Surname', ], ], ], 'UserSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'UserSummary', ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ExceptionMessage', ], 'Reason' => [ 'shape' => 'ValidationExceptionReason', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ValidationExceptionReason' => [ 'type' => 'string', 'enum' => [ 'INVALID_REALM', 'INVALID_DIRECTORY_TYPE', 'INVALID_SECONDARY_REGION', 'INVALID_NEXT_TOKEN', 'INVALID_ATTRIBUTE_VALUE', 'INVALID_ATTRIBUTE_NAME', 'INVALID_ATTRIBUTE_FOR_USER', 'INVALID_ATTRIBUTE_FOR_GROUP', 'INVALID_ATTRIBUTE_FOR_SEARCH', 'INVALID_ATTRIBUTE_FOR_MODIFY', 'DUPLICATE_ATTRIBUTE', 'MISSING_ATTRIBUTE', 'ATTRIBUTE_EXISTS', 'LDAP_SIZE_LIMIT_EXCEEDED', 'LDAP_UNSUPPORTED_OPERATION', ], ], ],];