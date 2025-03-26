<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SQLServer database profile.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.SqlServerProfile</code>
 */
class SqlServerProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Hostname for the SQLServer connection.
     *
     * Generated from protobuf field <code>string hostname = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $hostname = '';
    /**
     * Port for the SQLServer connection, default value is 1433.
     *
     * Generated from protobuf field <code>int32 port = 2;</code>
     */
    protected $port = 0;
    /**
     * Required. Username for the SQLServer connection.
     *
     * Generated from protobuf field <code>string username = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $username = '';
    /**
     * Optional. Password for the SQLServer connection. Mutually exclusive with
     * the `secret_manager_stored_password` field.
     *
     * Generated from protobuf field <code>string password = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $password = '';
    /**
     * Required. Database for the SQLServer connection.
     *
     * Generated from protobuf field <code>string database = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $database = '';
    /**
     * Optional. A reference to a Secret Manager resource name storing the
     * SQLServer connection password. Mutually exclusive with the `password`
     * field.
     *
     * Generated from protobuf field <code>string secret_manager_stored_password = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $secret_manager_stored_password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $hostname
     *           Required. Hostname for the SQLServer connection.
     *     @type int $port
     *           Port for the SQLServer connection, default value is 1433.
     *     @type string $username
     *           Required. Username for the SQLServer connection.
     *     @type string $password
     *           Optional. Password for the SQLServer connection. Mutually exclusive with
     *           the `secret_manager_stored_password` field.
     *     @type string $database
     *           Required. Database for the SQLServer connection.
     *     @type string $secret_manager_stored_password
     *           Optional. A reference to a Secret Manager resource name storing the
     *           SQLServer connection password. Mutually exclusive with the `password`
     *           field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Hostname for the SQLServer connection.
     *
     * Generated from protobuf field <code>string hostname = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * Required. Hostname for the SQLServer connection.
     *
     * Generated from protobuf field <code>string hostname = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setHostname($var)
    {
        GPBUtil::checkString($var, True);
        $this->hostname = $var;

        return $this;
    }

    /**
     * Port for the SQLServer connection, default value is 1433.
     *
     * Generated from protobuf field <code>int32 port = 2;</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Port for the SQLServer connection, default value is 1433.
     *
     * Generated from protobuf field <code>int32 port = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Required. Username for the SQLServer connection.
     *
     * Generated from protobuf field <code>string username = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Required. Username for the SQLServer connection.
     *
     * Generated from protobuf field <code>string username = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * Optional. Password for the SQLServer connection. Mutually exclusive with
     * the `secret_manager_stored_password` field.
     *
     * Generated from protobuf field <code>string password = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Optional. Password for the SQLServer connection. Mutually exclusive with
     * the `secret_manager_stored_password` field.
     *
     * Generated from protobuf field <code>string password = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Required. Database for the SQLServer connection.
     *
     * Generated from protobuf field <code>string database = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * Required. Database for the SQLServer connection.
     *
     * Generated from protobuf field <code>string database = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDatabase($var)
    {
        GPBUtil::checkString($var, True);
        $this->database = $var;

        return $this;
    }

    /**
     * Optional. A reference to a Secret Manager resource name storing the
     * SQLServer connection password. Mutually exclusive with the `password`
     * field.
     *
     * Generated from protobuf field <code>string secret_manager_stored_password = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSecretManagerStoredPassword()
    {
        return $this->secret_manager_stored_password;
    }

    /**
     * Optional. A reference to a Secret Manager resource name storing the
     * SQLServer connection password. Mutually exclusive with the `password`
     * field.
     *
     * Generated from protobuf field <code>string secret_manager_stored_password = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSecretManagerStoredPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret_manager_stored_password = $var;

        return $this;
    }

}

