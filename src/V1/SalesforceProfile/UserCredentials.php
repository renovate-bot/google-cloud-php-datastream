<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream_resources.proto

namespace Google\Cloud\Datastream\V1\SalesforceProfile;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Username-password credentials.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.SalesforceProfile.UserCredentials</code>
 */
class UserCredentials extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Username for the Salesforce connection.
     *
     * Generated from protobuf field <code>string username = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $username = '';
    /**
     * Optional. Password for the Salesforce connection.
     * Mutually exclusive with the `secret_manager_stored_password` field.
     *
     * Generated from protobuf field <code>string password = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $password = '';
    /**
     * Optional. Security token for the Salesforce connection.
     * Mutually exclusive with the `secret_manager_stored_security_token` field.
     *
     * Generated from protobuf field <code>string security_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $security_token = '';
    /**
     * Optional. A reference to a Secret Manager resource name storing the
     * Salesforce connection's password. Mutually exclusive with the `password`
     * field.
     *
     * Generated from protobuf field <code>string secret_manager_stored_password = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $secret_manager_stored_password = '';
    /**
     * Optional. A reference to a Secret Manager resource name storing the
     * Salesforce connection's security token. Mutually exclusive with the
     * `security_token` field.
     *
     * Generated from protobuf field <code>string secret_manager_stored_security_token = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $secret_manager_stored_security_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $username
     *           Required. Username for the Salesforce connection.
     *     @type string $password
     *           Optional. Password for the Salesforce connection.
     *           Mutually exclusive with the `secret_manager_stored_password` field.
     *     @type string $security_token
     *           Optional. Security token for the Salesforce connection.
     *           Mutually exclusive with the `secret_manager_stored_security_token` field.
     *     @type string $secret_manager_stored_password
     *           Optional. A reference to a Secret Manager resource name storing the
     *           Salesforce connection's password. Mutually exclusive with the `password`
     *           field.
     *     @type string $secret_manager_stored_security_token
     *           Optional. A reference to a Secret Manager resource name storing the
     *           Salesforce connection's security token. Mutually exclusive with the
     *           `security_token` field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\DatastreamResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Username for the Salesforce connection.
     *
     * Generated from protobuf field <code>string username = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Required. Username for the Salesforce connection.
     *
     * Generated from protobuf field <code>string username = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Optional. Password for the Salesforce connection.
     * Mutually exclusive with the `secret_manager_stored_password` field.
     *
     * Generated from protobuf field <code>string password = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Optional. Password for the Salesforce connection.
     * Mutually exclusive with the `secret_manager_stored_password` field.
     *
     * Generated from protobuf field <code>string password = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Security token for the Salesforce connection.
     * Mutually exclusive with the `secret_manager_stored_security_token` field.
     *
     * Generated from protobuf field <code>string security_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSecurityToken()
    {
        return $this->security_token;
    }

    /**
     * Optional. Security token for the Salesforce connection.
     * Mutually exclusive with the `secret_manager_stored_security_token` field.
     *
     * Generated from protobuf field <code>string security_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSecurityToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->security_token = $var;

        return $this;
    }

    /**
     * Optional. A reference to a Secret Manager resource name storing the
     * Salesforce connection's password. Mutually exclusive with the `password`
     * field.
     *
     * Generated from protobuf field <code>string secret_manager_stored_password = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSecretManagerStoredPassword()
    {
        return $this->secret_manager_stored_password;
    }

    /**
     * Optional. A reference to a Secret Manager resource name storing the
     * Salesforce connection's password. Mutually exclusive with the `password`
     * field.
     *
     * Generated from protobuf field <code>string secret_manager_stored_password = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSecretManagerStoredPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret_manager_stored_password = $var;

        return $this;
    }

    /**
     * Optional. A reference to a Secret Manager resource name storing the
     * Salesforce connection's security token. Mutually exclusive with the
     * `security_token` field.
     *
     * Generated from protobuf field <code>string secret_manager_stored_security_token = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSecretManagerStoredSecurityToken()
    {
        return $this->secret_manager_stored_security_token;
    }

    /**
     * Optional. A reference to a Secret Manager resource name storing the
     * Salesforce connection's security token. Mutually exclusive with the
     * `security_token` field.
     *
     * Generated from protobuf field <code>string secret_manager_stored_security_token = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSecretManagerStoredSecurityToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret_manager_stored_security_token = $var;

        return $this;
    }

}


