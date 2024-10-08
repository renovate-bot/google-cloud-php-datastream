<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PostgreSQL data source configuration
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.PostgresqlSourceConfig</code>
 */
class PostgresqlSourceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * PostgreSQL objects to include in the stream.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.PostgresqlRdbms include_objects = 1;</code>
     */
    protected $include_objects = null;
    /**
     * PostgreSQL objects to exclude from the stream.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.PostgresqlRdbms exclude_objects = 2;</code>
     */
    protected $exclude_objects = null;
    /**
     * Required. Immutable. The name of the logical replication slot that's
     * configured with the pgoutput plugin.
     *
     * Generated from protobuf field <code>string replication_slot = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $replication_slot = '';
    /**
     * Required. The name of the publication that includes the set of all tables
     * that are defined in the stream's include_objects.
     *
     * Generated from protobuf field <code>string publication = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $publication = '';
    /**
     * Maximum number of concurrent backfill tasks. The number should be non
     * negative. If not set (or set to 0), the system's default value will be
     * used.
     *
     * Generated from protobuf field <code>int32 max_concurrent_backfill_tasks = 5;</code>
     */
    protected $max_concurrent_backfill_tasks = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Datastream\V1\PostgresqlRdbms $include_objects
     *           PostgreSQL objects to include in the stream.
     *     @type \Google\Cloud\Datastream\V1\PostgresqlRdbms $exclude_objects
     *           PostgreSQL objects to exclude from the stream.
     *     @type string $replication_slot
     *           Required. Immutable. The name of the logical replication slot that's
     *           configured with the pgoutput plugin.
     *     @type string $publication
     *           Required. The name of the publication that includes the set of all tables
     *           that are defined in the stream's include_objects.
     *     @type int $max_concurrent_backfill_tasks
     *           Maximum number of concurrent backfill tasks. The number should be non
     *           negative. If not set (or set to 0), the system's default value will be
     *           used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * PostgreSQL objects to include in the stream.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.PostgresqlRdbms include_objects = 1;</code>
     * @return \Google\Cloud\Datastream\V1\PostgresqlRdbms|null
     */
    public function getIncludeObjects()
    {
        return $this->include_objects;
    }

    public function hasIncludeObjects()
    {
        return isset($this->include_objects);
    }

    public function clearIncludeObjects()
    {
        unset($this->include_objects);
    }

    /**
     * PostgreSQL objects to include in the stream.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.PostgresqlRdbms include_objects = 1;</code>
     * @param \Google\Cloud\Datastream\V1\PostgresqlRdbms $var
     * @return $this
     */
    public function setIncludeObjects($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\PostgresqlRdbms::class);
        $this->include_objects = $var;

        return $this;
    }

    /**
     * PostgreSQL objects to exclude from the stream.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.PostgresqlRdbms exclude_objects = 2;</code>
     * @return \Google\Cloud\Datastream\V1\PostgresqlRdbms|null
     */
    public function getExcludeObjects()
    {
        return $this->exclude_objects;
    }

    public function hasExcludeObjects()
    {
        return isset($this->exclude_objects);
    }

    public function clearExcludeObjects()
    {
        unset($this->exclude_objects);
    }

    /**
     * PostgreSQL objects to exclude from the stream.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.PostgresqlRdbms exclude_objects = 2;</code>
     * @param \Google\Cloud\Datastream\V1\PostgresqlRdbms $var
     * @return $this
     */
    public function setExcludeObjects($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\PostgresqlRdbms::class);
        $this->exclude_objects = $var;

        return $this;
    }

    /**
     * Required. Immutable. The name of the logical replication slot that's
     * configured with the pgoutput plugin.
     *
     * Generated from protobuf field <code>string replication_slot = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getReplicationSlot()
    {
        return $this->replication_slot;
    }

    /**
     * Required. Immutable. The name of the logical replication slot that's
     * configured with the pgoutput plugin.
     *
     * Generated from protobuf field <code>string replication_slot = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setReplicationSlot($var)
    {
        GPBUtil::checkString($var, True);
        $this->replication_slot = $var;

        return $this;
    }

    /**
     * Required. The name of the publication that includes the set of all tables
     * that are defined in the stream's include_objects.
     *
     * Generated from protobuf field <code>string publication = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Required. The name of the publication that includes the set of all tables
     * that are defined in the stream's include_objects.
     *
     * Generated from protobuf field <code>string publication = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setPublication($var)
    {
        GPBUtil::checkString($var, True);
        $this->publication = $var;

        return $this;
    }

    /**
     * Maximum number of concurrent backfill tasks. The number should be non
     * negative. If not set (or set to 0), the system's default value will be
     * used.
     *
     * Generated from protobuf field <code>int32 max_concurrent_backfill_tasks = 5;</code>
     * @return int
     */
    public function getMaxConcurrentBackfillTasks()
    {
        return $this->max_concurrent_backfill_tasks;
    }

    /**
     * Maximum number of concurrent backfill tasks. The number should be non
     * negative. If not set (or set to 0), the system's default value will be
     * used.
     *
     * Generated from protobuf field <code>int32 max_concurrent_backfill_tasks = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxConcurrentBackfillTasks($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_concurrent_backfill_tasks = $var;

        return $this;
    }

}

