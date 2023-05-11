<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream.proto

namespace GPBMetadata\Google\Cloud\Datastream\V1;

class Datastream
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�[
+google/cloud/datastream/v1/datastream.protogoogle.cloud.datastream.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto5google/cloud/datastream/v1/datastream_resources.proto#google/longrunning/operations.protogoogle/protobuf/empty.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
 DiscoverConnectionProfileRequestC
parent (	B3�A�A-+datastream.googleapis.com/ConnectionProfileL
connection_profile� (2-.google.cloud.datastream.v1.ConnectionProfileH "
connection_profile_name� (	H 
full_hierarchy (H
hierarchy_depth (H?
oracle_rdbmsd (2\'.google.cloud.datastream.v1.OracleRdbmsH=
mysql_rdbmse (2&.google.cloud.datastream.v1.MysqlRdbmsHG
postgresql_rdbmsf (2+.google.cloud.datastream.v1.PostgresqlRdbmsHB
targetB
	hierarchyB
data_object"�
!DiscoverConnectionProfileResponse?
oracle_rdbmsd (2\'.google.cloud.datastream.v1.OracleRdbmsH =
mysql_rdbmse (2&.google.cloud.datastream.v1.MysqlRdbmsH G
postgresql_rdbmsf (2+.google.cloud.datastream.v1.PostgresqlRdbmsH B
data_object"w
FetchStaticIpsRequest7
name (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	"E
FetchStaticIpsResponse

static_ips (	
next_page_token (	"�
ListConnectionProfilesRequestC
parent (	B3�A�A-+datastream.googleapis.com/ConnectionProfile
	page_size (

page_token (	
filter (	
order_by (	"�
ListConnectionProfilesResponseJ
connection_profiles (2-.google.cloud.datastream.v1.ConnectionProfile
next_page_token (	
unreachable (	"`
GetConnectionProfileRequestA
name (	B3�A�A-
+datastream.googleapis.com/ConnectionProfile"�
CreateConnectionProfileRequestC
parent (	B3�A�A-+datastream.googleapis.com/ConnectionProfile"
connection_profile_id (	B�AN
connection_profile (2-.google.cloud.datastream.v1.ConnectionProfileB�A

request_id (	B�A
validate_only (B�A
force (B�A"�
UpdateConnectionProfileRequest4
update_mask (2.google.protobuf.FieldMaskB�AN
connection_profile (2-.google.cloud.datastream.v1.ConnectionProfileB�A

request_id (	B�A
validate_only (B�A
force (B�A"|
DeleteConnectionProfileRequestA
name (	B3�A�A-
+datastream.googleapis.com/ConnectionProfile

request_id (	B�A"�
ListStreamsRequest8
parent (	B(�A�A" datastream.googleapis.com/Stream
	page_size (

page_token (	
filter (	
order_by (	"x
ListStreamsResponse3
streams (2".google.cloud.datastream.v1.Stream
next_page_token (	
unreachable (	"J
GetStreamRequest6
name (	B(�A�A"
 datastream.googleapis.com/Stream"�
CreateStreamRequest8
parent (	B(�A�A" datastream.googleapis.com/Stream
	stream_id (	B�A7
stream (2".google.cloud.datastream.v1.StreamB�A

request_id (	B�A
validate_only (B�A
force (B�A"�
UpdateStreamRequest4
update_mask (2.google.protobuf.FieldMaskB�A7
stream (2".google.cloud.datastream.v1.StreamB�A

request_id (	B�A
validate_only (B�A
force (B�A"f
DeleteStreamRequest6
name (	B(�A�A"
 datastream.googleapis.com/Stream

request_id (	B�A"V
GetStreamObjectRequest<
name (	B.�A�A(
&datastream.googleapis.com/StreamObject"�
LookupStreamObjectRequest8
parent (	B(�A�A"
 datastream.googleapis.com/StreamY
source_object_identifier (22.google.cloud.datastream.v1.SourceObjectIdentifierB�A"Y
StartBackfillJobRequest>
object (	B.�A�A(
&datastream.googleapis.com/StreamObject"T
StartBackfillJobResponse8
object (2(.google.cloud.datastream.v1.StreamObject"X
StopBackfillJobRequest>
object (	B.�A�A(
&datastream.googleapis.com/StreamObject"S
StopBackfillJobResponse8
object (2(.google.cloud.datastream.v1.StreamObject"�
ListStreamObjectsRequest>
parent (	B.�A�A(&datastream.googleapis.com/StreamObject
	page_size (

page_token (	"v
ListStreamObjectsResponse@
stream_objects (2(.google.cloud.datastream.v1.StreamObject
next_page_token (	"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�AL
validation_result (2,.google.cloud.datastream.v1.ValidationResultB�A"�
CreatePrivateConnectionRequestC
parent (	B3�A�A-+datastream.googleapis.com/PrivateConnection"
private_connection_id (	B�AN
private_connection (2-.google.cloud.datastream.v1.PrivateConnectionB�A

request_id (	B�A
force (B�A"�
ListPrivateConnectionsRequestC
parent (	B3�A�A-+datastream.googleapis.com/PrivateConnection
	page_size (

page_token (	
filter (	
order_by (	"�
ListPrivateConnectionsResponseJ
private_connections (2-.google.cloud.datastream.v1.PrivateConnection
next_page_token (	
unreachable (	"�
DeletePrivateConnectionRequestA
name (	B3�A�A-
+datastream.googleapis.com/PrivateConnection

request_id (	B�A
force (B�A"`
GetPrivateConnectionRequestA
name (	B3�A�A-
+datastream.googleapis.com/PrivateConnection"�
CreateRouteRequest7
parent (	B\'�A�A!datastream.googleapis.com/Route
route_id (	B�A5
route (2!.google.cloud.datastream.v1.RouteB�A

request_id (	B�A"�
ListRoutesRequest7
parent (	B\'�A�A!datastream.googleapis.com/Route
	page_size (

page_token (	
filter (	
order_by (	"u
ListRoutesResponse1
routes (2!.google.cloud.datastream.v1.Route
next_page_token (	
unreachable (	"d
DeleteRouteRequest5
name (	B\'�A�A!
datastream.googleapis.com/Route

request_id (	B�A"H
GetRouteRequest5
name (	B\'�A�A!
datastream.googleapis.com/Route2�*

Datastream�
ListConnectionProfiles9.google.cloud.datastream.v1.ListConnectionProfilesRequest:.google.cloud.datastream.v1.ListConnectionProfilesResponse"G���86/v1/{parent=projects/*/locations/*}/connectionProfiles�Aparent�
GetConnectionProfile7.google.cloud.datastream.v1.GetConnectionProfileRequest-.google.cloud.datastream.v1.ConnectionProfile"E���86/v1/{name=projects/*/locations/*/connectionProfiles/*}�Aname�
CreateConnectionProfile:.google.cloud.datastream.v1.CreateConnectionProfileRequest.google.longrunning.Operation"����L"6/v1/{parent=projects/*/locations/*}/connectionProfiles:connection_profile�A/parent,connection_profile,connection_profile_id�A&
ConnectionProfileOperationMetadata�
UpdateConnectionProfile:.google.cloud.datastream.v1.UpdateConnectionProfileRequest.google.longrunning.Operation"����_2I/v1/{connection_profile.name=projects/*/locations/*/connectionProfiles/*}:connection_profile�Aconnection_profile,update_mask�A&
ConnectionProfileOperationMetadata�
DeleteConnectionProfile:.google.cloud.datastream.v1.DeleteConnectionProfileRequest.google.longrunning.Operation"r���8*6/v1/{name=projects/*/locations/*/connectionProfiles/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
DiscoverConnectionProfile<.google.cloud.datastream.v1.DiscoverConnectionProfileRequest=.google.cloud.datastream.v1.DiscoverConnectionProfileResponse"J���D"?/v1/{parent=projects/*/locations/*}/connectionProfiles:discover:*�
ListStreams..google.cloud.datastream.v1.ListStreamsRequest/.google.cloud.datastream.v1.ListStreamsResponse"<���-+/v1/{parent=projects/*/locations/*}/streams�Aparent�
	GetStream,.google.cloud.datastream.v1.GetStreamRequest".google.cloud.datastream.v1.Stream":���-+/v1/{name=projects/*/locations/*/streams/*}�Aname�
CreateStream/.google.cloud.datastream.v1.CreateStreamRequest.google.longrunning.Operation"s���5"+/v1/{parent=projects/*/locations/*}/streams:stream�Aparent,stream,stream_id�A
StreamOperationMetadata�
UpdateStream/.google.cloud.datastream.v1.UpdateStreamRequest.google.longrunning.Operation"u���<22/v1/{stream.name=projects/*/locations/*/streams/*}:stream�Astream,update_mask�A
StreamOperationMetadata�
DeleteStream/.google.cloud.datastream.v1.DeleteStreamRequest.google.longrunning.Operation"g���-*+/v1/{name=projects/*/locations/*/streams/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
GetStreamObject2.google.cloud.datastream.v1.GetStreamObjectRequest(.google.cloud.datastream.v1.StreamObject"D���75/v1/{name=projects/*/locations/*/streams/*/objects/*}�Aname�
LookupStreamObject5.google.cloud.datastream.v1.LookupStreamObjectRequest(.google.cloud.datastream.v1.StreamObject"G���A"</v1/{parent=projects/*/locations/*/streams/*}/objects:lookup:*�
ListStreamObjects4.google.cloud.datastream.v1.ListStreamObjectsRequest5.google.cloud.datastream.v1.ListStreamObjectsResponse"F���75/v1/{parent=projects/*/locations/*/streams/*}/objects�Aparent�
StartBackfillJob3.google.cloud.datastream.v1.StartBackfillJobRequest4.google.cloud.datastream.v1.StartBackfillJobResponse"\\���M"H/v1/{object=projects/*/locations/*/streams/*/objects/*}:startBackfillJob:*�Aobject�
StopBackfillJob2.google.cloud.datastream.v1.StopBackfillJobRequest3.google.cloud.datastream.v1.StopBackfillJobResponse"[���L"G/v1/{object=projects/*/locations/*/streams/*/objects/*}:stopBackfillJob:*�Aobject�
FetchStaticIps1.google.cloud.datastream.v1.FetchStaticIpsRequest2.google.cloud.datastream.v1.FetchStaticIpsResponse"?���20/v1/{name=projects/*/locations/*}:fetchStaticIps�Aname�
CreatePrivateConnection:.google.cloud.datastream.v1.CreatePrivateConnectionRequest.google.longrunning.Operation"����L"6/v1/{parent=projects/*/locations/*}/privateConnections:private_connection�A/parent,private_connection,private_connection_id�A&
PrivateConnectionOperationMetadata�
GetPrivateConnection7.google.cloud.datastream.v1.GetPrivateConnectionRequest-.google.cloud.datastream.v1.PrivateConnection"E���86/v1/{name=projects/*/locations/*/privateConnections/*}�Aname�
ListPrivateConnections9.google.cloud.datastream.v1.ListPrivateConnectionsRequest:.google.cloud.datastream.v1.ListPrivateConnectionsResponse"G���86/v1/{parent=projects/*/locations/*}/privateConnections�Aparent�
DeletePrivateConnection:.google.cloud.datastream.v1.DeletePrivateConnectionRequest.google.longrunning.Operation"r���8*6/v1/{name=projects/*/locations/*/privateConnections/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
CreateRoute..google.cloud.datastream.v1.CreateRouteRequest.google.longrunning.Operation"����H"?/v1/{parent=projects/*/locations/*/privateConnections/*}/routes:route�Aparent,route,route_id�A
RouteOperationMetadata�
GetRoute+.google.cloud.datastream.v1.GetRouteRequest!.google.cloud.datastream.v1.Route"N���A?/v1/{name=projects/*/locations/*/privateConnections/*/routes/*}�Aname�

ListRoutes-.google.cloud.datastream.v1.ListRoutesRequest..google.cloud.datastream.v1.ListRoutesResponse"P���A?/v1/{parent=projects/*/locations/*/privateConnections/*}/routes�Aparent�
DeleteRoute..google.cloud.datastream.v1.DeleteRouteRequest.google.longrunning.Operation"{���A*?/v1/{name=projects/*/locations/*/privateConnections/*/routes/*}�Aname�A*
google.protobuf.EmptyOperationMetadataM�Adatastream.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.datastream.v1BDatastreamProtoPZ>cloud.google.com/go/datastream/apiv1/datastreampb;datastreampb�Google.Cloud.Datastream.V1�Google\\Cloud\\Datastream\\V1�Google::Cloud::Datastream::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

