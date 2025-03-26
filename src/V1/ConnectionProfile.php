<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A set of reusable connection configurations to be used as a source or
 * destination for a stream.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.ConnectionProfile</code>
 */
class ConnectionProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Identifier. The resource's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. The create time of the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The update time of the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;
    /**
     * Required. Display name.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzs = null;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzi = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzi = null;
    protected $profile;
    protected $connectivity;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Identifier. The resource's name.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The create time of the resource.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The update time of the resource.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels.
     *     @type string $display_name
     *           Required. Display name.
     *     @type bool $satisfies_pzs
     *           Output only. Reserved for future use.
     *     @type bool $satisfies_pzi
     *           Output only. Reserved for future use.
     *     @type \Google\Cloud\Datastream\V1\OracleProfile $oracle_profile
     *           Oracle ConnectionProfile configuration.
     *     @type \Google\Cloud\Datastream\V1\GcsProfile $gcs_profile
     *           Cloud Storage ConnectionProfile configuration.
     *     @type \Google\Cloud\Datastream\V1\MysqlProfile $mysql_profile
     *           MySQL ConnectionProfile configuration.
     *     @type \Google\Cloud\Datastream\V1\BigQueryProfile $bigquery_profile
     *           BigQuery Connection Profile configuration.
     *     @type \Google\Cloud\Datastream\V1\PostgresqlProfile $postgresql_profile
     *           PostgreSQL Connection Profile configuration.
     *     @type \Google\Cloud\Datastream\V1\SqlServerProfile $sql_server_profile
     *           SQLServer Connection Profile configuration.
     *     @type \Google\Cloud\Datastream\V1\SalesforceProfile $salesforce_profile
     *           Salesforce Connection Profile configuration.
     *     @type \Google\Cloud\Datastream\V1\StaticServiceIpConnectivity $static_service_ip_connectivity
     *           Static Service IP connectivity.
     *     @type \Google\Cloud\Datastream\V1\ForwardSshTunnelConnectivity $forward_ssh_connectivity
     *           Forward SSH tunnel connectivity.
     *     @type \Google\Cloud\Datastream\V1\PrivateConnectivity $private_connectivity
     *           Private connectivity.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Identifier. The resource's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Identifier. The resource's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The create time of the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The create time of the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The update time of the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The update time of the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Required. Display name.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. Display name.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzs()
    {
        return isset($this->satisfies_pzs) ? $this->satisfies_pzs : false;
    }

    public function hasSatisfiesPzs()
    {
        return isset($this->satisfies_pzs);
    }

    public function clearSatisfiesPzs()
    {
        unset($this->satisfies_pzs);
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzs($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzs = $var;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzi = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getSatisfiesPzi()
    {
        return isset($this->satisfies_pzi) ? $this->satisfies_pzi : false;
    }

    public function hasSatisfiesPzi()
    {
        return isset($this->satisfies_pzi);
    }

    public function clearSatisfiesPzi()
    {
        unset($this->satisfies_pzi);
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzi = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setSatisfiesPzi($var)
    {
        GPBUtil::checkBool($var);
        $this->satisfies_pzi = $var;

        return $this;
    }

    /**
     * Oracle ConnectionProfile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.OracleProfile oracle_profile = 100;</code>
     * @return \Google\Cloud\Datastream\V1\OracleProfile|null
     */
    public function getOracleProfile()
    {
        return $this->readOneof(100);
    }

    public function hasOracleProfile()
    {
        return $this->hasOneof(100);
    }

    /**
     * Oracle ConnectionProfile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.OracleProfile oracle_profile = 100;</code>
     * @param \Google\Cloud\Datastream\V1\OracleProfile $var
     * @return $this
     */
    public function setOracleProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\OracleProfile::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * Cloud Storage ConnectionProfile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.GcsProfile gcs_profile = 101;</code>
     * @return \Google\Cloud\Datastream\V1\GcsProfile|null
     */
    public function getGcsProfile()
    {
        return $this->readOneof(101);
    }

    public function hasGcsProfile()
    {
        return $this->hasOneof(101);
    }

    /**
     * Cloud Storage ConnectionProfile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.GcsProfile gcs_profile = 101;</code>
     * @param \Google\Cloud\Datastream\V1\GcsProfile $var
     * @return $this
     */
    public function setGcsProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\GcsProfile::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * MySQL ConnectionProfile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.MysqlProfile mysql_profile = 102;</code>
     * @return \Google\Cloud\Datastream\V1\MysqlProfile|null
     */
    public function getMysqlProfile()
    {
        return $this->readOneof(102);
    }

    public function hasMysqlProfile()
    {
        return $this->hasOneof(102);
    }

    /**
     * MySQL ConnectionProfile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.MysqlProfile mysql_profile = 102;</code>
     * @param \Google\Cloud\Datastream\V1\MysqlProfile $var
     * @return $this
     */
    public function setMysqlProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\MysqlProfile::class);
        $this->writeOneof(102, $var);

        return $this;
    }

    /**
     * BigQuery Connection Profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.BigQueryProfile bigquery_profile = 103;</code>
     * @return \Google\Cloud\Datastream\V1\BigQueryProfile|null
     */
    public function getBigqueryProfile()
    {
        return $this->readOneof(103);
    }

    public function hasBigqueryProfile()
    {
        return $this->hasOneof(103);
    }

    /**
     * BigQuery Connection Profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.BigQueryProfile bigquery_profile = 103;</code>
     * @param \Google\Cloud\Datastream\V1\BigQueryProfile $var
     * @return $this
     */
    public function setBigqueryProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\BigQueryProfile::class);
        $this->writeOneof(103, $var);

        return $this;
    }

    /**
     * PostgreSQL Connection Profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.PostgresqlProfile postgresql_profile = 104;</code>
     * @return \Google\Cloud\Datastream\V1\PostgresqlProfile|null
     */
    public function getPostgresqlProfile()
    {
        return $this->readOneof(104);
    }

    public function hasPostgresqlProfile()
    {
        return $this->hasOneof(104);
    }

    /**
     * PostgreSQL Connection Profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.PostgresqlProfile postgresql_profile = 104;</code>
     * @param \Google\Cloud\Datastream\V1\PostgresqlProfile $var
     * @return $this
     */
    public function setPostgresqlProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\PostgresqlProfile::class);
        $this->writeOneof(104, $var);

        return $this;
    }

    /**
     * SQLServer Connection Profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SqlServerProfile sql_server_profile = 105;</code>
     * @return \Google\Cloud\Datastream\V1\SqlServerProfile|null
     */
    public function getSqlServerProfile()
    {
        return $this->readOneof(105);
    }

    public function hasSqlServerProfile()
    {
        return $this->hasOneof(105);
    }

    /**
     * SQLServer Connection Profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SqlServerProfile sql_server_profile = 105;</code>
     * @param \Google\Cloud\Datastream\V1\SqlServerProfile $var
     * @return $this
     */
    public function setSqlServerProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\SqlServerProfile::class);
        $this->writeOneof(105, $var);

        return $this;
    }

    /**
     * Salesforce Connection Profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SalesforceProfile salesforce_profile = 107;</code>
     * @return \Google\Cloud\Datastream\V1\SalesforceProfile|null
     */
    public function getSalesforceProfile()
    {
        return $this->readOneof(107);
    }

    public function hasSalesforceProfile()
    {
        return $this->hasOneof(107);
    }

    /**
     * Salesforce Connection Profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SalesforceProfile salesforce_profile = 107;</code>
     * @param \Google\Cloud\Datastream\V1\SalesforceProfile $var
     * @return $this
     */
    public function setSalesforceProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\SalesforceProfile::class);
        $this->writeOneof(107, $var);

        return $this;
    }

    /**
     * Static Service IP connectivity.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.StaticServiceIpConnectivity static_service_ip_connectivity = 200;</code>
     * @return \Google\Cloud\Datastream\V1\StaticServiceIpConnectivity|null
     */
    public function getStaticServiceIpConnectivity()
    {
        return $this->readOneof(200);
    }

    public function hasStaticServiceIpConnectivity()
    {
        return $this->hasOneof(200);
    }

    /**
     * Static Service IP connectivity.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.StaticServiceIpConnectivity static_service_ip_connectivity = 200;</code>
     * @param \Google\Cloud\Datastream\V1\StaticServiceIpConnectivity $var
     * @return $this
     */
    public function setStaticServiceIpConnectivity($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\StaticServiceIpConnectivity::class);
        $this->writeOneof(200, $var);

        return $this;
    }

    /**
     * Forward SSH tunnel connectivity.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.ForwardSshTunnelConnectivity forward_ssh_connectivity = 201;</code>
     * @return \Google\Cloud\Datastream\V1\ForwardSshTunnelConnectivity|null
     */
    public function getForwardSshConnectivity()
    {
        return $this->readOneof(201);
    }

    public function hasForwardSshConnectivity()
    {
        return $this->hasOneof(201);
    }

    /**
     * Forward SSH tunnel connectivity.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.ForwardSshTunnelConnectivity forward_ssh_connectivity = 201;</code>
     * @param \Google\Cloud\Datastream\V1\ForwardSshTunnelConnectivity $var
     * @return $this
     */
    public function setForwardSshConnectivity($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\ForwardSshTunnelConnectivity::class);
        $this->writeOneof(201, $var);

        return $this;
    }

    /**
     * Private connectivity.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.PrivateConnectivity private_connectivity = 202;</code>
     * @return \Google\Cloud\Datastream\V1\PrivateConnectivity|null
     */
    public function getPrivateConnectivity()
    {
        return $this->readOneof(202);
    }

    public function hasPrivateConnectivity()
    {
        return $this->hasOneof(202);
    }

    /**
     * Private connectivity.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.PrivateConnectivity private_connectivity = 202;</code>
     * @param \Google\Cloud\Datastream\V1\PrivateConnectivity $var
     * @return $this
     */
    public function setPrivateConnectivity($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\PrivateConnectivity::class);
        $this->writeOneof(202, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getProfile()
    {
        return $this->whichOneof("profile");
    }

    /**
     * @return string
     */
    public function getConnectivity()
    {
        return $this->whichOneof("connectivity");
    }

}

