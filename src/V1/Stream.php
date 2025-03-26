<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource representing streaming data from a source to a destination.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.Stream</code>
 */
class Stream extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Identifier. The stream's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. The creation time of the stream.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The last update time of the stream.
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
     * Required. Source connection profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SourceConfig source_config = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $source_config = null;
    /**
     * Required. Destination connection profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.DestinationConfig destination_config = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $destination_config = null;
    /**
     * The state of the stream.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.Stream.State state = 8;</code>
     */
    protected $state = 0;
    /**
     * Output only. Errors on the Stream.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.Error errors = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $errors;
    /**
     * Immutable. A reference to a KMS encryption key.
     * If provided, it will be used to encrypt the data.
     * If left blank, data will be encrypted using an internal Stream-specific
     * encryption key provisioned through KMS.
     *
     * Generated from protobuf field <code>optional string customer_managed_encryption_key = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $customer_managed_encryption_key = null;
    /**
     * Output only. If the stream was recovered, the time of the last recovery.
     * Note: This field is currently experimental.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_recovery_time = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $last_recovery_time = null;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzs = null;
    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzi = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $satisfies_pzi = null;
    protected $backfill_strategy;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Identifier. The stream's name.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The creation time of the stream.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The last update time of the stream.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels.
     *     @type string $display_name
     *           Required. Display name.
     *     @type \Google\Cloud\Datastream\V1\SourceConfig $source_config
     *           Required. Source connection profile configuration.
     *     @type \Google\Cloud\Datastream\V1\DestinationConfig $destination_config
     *           Required. Destination connection profile configuration.
     *     @type int $state
     *           The state of the stream.
     *     @type \Google\Cloud\Datastream\V1\Stream\BackfillAllStrategy $backfill_all
     *           Automatically backfill objects included in the stream source
     *           configuration. Specific objects can be excluded.
     *     @type \Google\Cloud\Datastream\V1\Stream\BackfillNoneStrategy $backfill_none
     *           Do not automatically backfill any objects.
     *     @type array<\Google\Cloud\Datastream\V1\Error>|\Google\Protobuf\Internal\RepeatedField $errors
     *           Output only. Errors on the Stream.
     *     @type string $customer_managed_encryption_key
     *           Immutable. A reference to a KMS encryption key.
     *           If provided, it will be used to encrypt the data.
     *           If left blank, data will be encrypted using an internal Stream-specific
     *           encryption key provisioned through KMS.
     *     @type \Google\Protobuf\Timestamp $last_recovery_time
     *           Output only. If the stream was recovered, the time of the last recovery.
     *           Note: This field is currently experimental.
     *     @type bool $satisfies_pzs
     *           Output only. Reserved for future use.
     *     @type bool $satisfies_pzi
     *           Output only. Reserved for future use.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Identifier. The stream's name.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Identifier. The stream's name.
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
     * Output only. The creation time of the stream.
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
     * Output only. The creation time of the stream.
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
     * Output only. The last update time of the stream.
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
     * Output only. The last update time of the stream.
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
     * Required. Source connection profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SourceConfig source_config = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Datastream\V1\SourceConfig|null
     */
    public function getSourceConfig()
    {
        return $this->source_config;
    }

    public function hasSourceConfig()
    {
        return isset($this->source_config);
    }

    public function clearSourceConfig()
    {
        unset($this->source_config);
    }

    /**
     * Required. Source connection profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.SourceConfig source_config = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Datastream\V1\SourceConfig $var
     * @return $this
     */
    public function setSourceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\SourceConfig::class);
        $this->source_config = $var;

        return $this;
    }

    /**
     * Required. Destination connection profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.DestinationConfig destination_config = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Datastream\V1\DestinationConfig|null
     */
    public function getDestinationConfig()
    {
        return $this->destination_config;
    }

    public function hasDestinationConfig()
    {
        return isset($this->destination_config);
    }

    public function clearDestinationConfig()
    {
        unset($this->destination_config);
    }

    /**
     * Required. Destination connection profile configuration.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.DestinationConfig destination_config = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Datastream\V1\DestinationConfig $var
     * @return $this
     */
    public function setDestinationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\DestinationConfig::class);
        $this->destination_config = $var;

        return $this;
    }

    /**
     * The state of the stream.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.Stream.State state = 8;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The state of the stream.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.Stream.State state = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastream\V1\Stream\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Automatically backfill objects included in the stream source
     * configuration. Specific objects can be excluded.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.Stream.BackfillAllStrategy backfill_all = 101;</code>
     * @return \Google\Cloud\Datastream\V1\Stream\BackfillAllStrategy|null
     */
    public function getBackfillAll()
    {
        return $this->readOneof(101);
    }

    public function hasBackfillAll()
    {
        return $this->hasOneof(101);
    }

    /**
     * Automatically backfill objects included in the stream source
     * configuration. Specific objects can be excluded.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.Stream.BackfillAllStrategy backfill_all = 101;</code>
     * @param \Google\Cloud\Datastream\V1\Stream\BackfillAllStrategy $var
     * @return $this
     */
    public function setBackfillAll($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\Stream\BackfillAllStrategy::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * Do not automatically backfill any objects.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.Stream.BackfillNoneStrategy backfill_none = 102;</code>
     * @return \Google\Cloud\Datastream\V1\Stream\BackfillNoneStrategy|null
     */
    public function getBackfillNone()
    {
        return $this->readOneof(102);
    }

    public function hasBackfillNone()
    {
        return $this->hasOneof(102);
    }

    /**
     * Do not automatically backfill any objects.
     *
     * Generated from protobuf field <code>.google.cloud.datastream.v1.Stream.BackfillNoneStrategy backfill_none = 102;</code>
     * @param \Google\Cloud\Datastream\V1\Stream\BackfillNoneStrategy $var
     * @return $this
     */
    public function setBackfillNone($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastream\V1\Stream\BackfillNoneStrategy::class);
        $this->writeOneof(102, $var);

        return $this;
    }

    /**
     * Output only. Errors on the Stream.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.Error errors = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Output only. Errors on the Stream.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datastream.v1.Error errors = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Datastream\V1\Error>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Datastream\V1\Error::class);
        $this->errors = $arr;

        return $this;
    }

    /**
     * Immutable. A reference to a KMS encryption key.
     * If provided, it will be used to encrypt the data.
     * If left blank, data will be encrypted using an internal Stream-specific
     * encryption key provisioned through KMS.
     *
     * Generated from protobuf field <code>optional string customer_managed_encryption_key = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getCustomerManagedEncryptionKey()
    {
        return isset($this->customer_managed_encryption_key) ? $this->customer_managed_encryption_key : '';
    }

    public function hasCustomerManagedEncryptionKey()
    {
        return isset($this->customer_managed_encryption_key);
    }

    public function clearCustomerManagedEncryptionKey()
    {
        unset($this->customer_managed_encryption_key);
    }

    /**
     * Immutable. A reference to a KMS encryption key.
     * If provided, it will be used to encrypt the data.
     * If left blank, data will be encrypted using an internal Stream-specific
     * encryption key provisioned through KMS.
     *
     * Generated from protobuf field <code>optional string customer_managed_encryption_key = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerManagedEncryptionKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_managed_encryption_key = $var;

        return $this;
    }

    /**
     * Output only. If the stream was recovered, the time of the last recovery.
     * Note: This field is currently experimental.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_recovery_time = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastRecoveryTime()
    {
        return $this->last_recovery_time;
    }

    public function hasLastRecoveryTime()
    {
        return isset($this->last_recovery_time);
    }

    public function clearLastRecoveryTime()
    {
        unset($this->last_recovery_time);
    }

    /**
     * Output only. If the stream was recovered, the time of the last recovery.
     * Note: This field is currently experimental.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_recovery_time = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastRecoveryTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_recovery_time = $var;

        return $this;
    }

    /**
     * Output only. Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool satisfies_pzs = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Generated from protobuf field <code>optional bool satisfies_pzs = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Generated from protobuf field <code>optional bool satisfies_pzi = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Generated from protobuf field <code>optional bool satisfies_pzi = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * @return string
     */
    public function getBackfillStrategy()
    {
        return $this->whichOneof("backfill_strategy");
    }

}

