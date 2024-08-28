<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datastream/v1/datastream.proto

namespace Google\Cloud\Datastream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for listing all objects for a specific stream.
 *
 * Generated from protobuf message <code>google.cloud.datastream.v1.ListStreamObjectsRequest</code>
 */
class ListStreamObjectsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent stream that owns the collection of objects.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Maximum number of objects to return. Default is 50.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * Page token received from a previous `ListStreamObjectsRequest` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListStreamObjectsRequest` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The parent stream that owns the collection of objects. Please see
     *                       {@see DatastreamClient::streamName()} for help formatting this field.
     *
     * @return \Google\Cloud\Datastream\V1\ListStreamObjectsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent stream that owns the collection of objects.
     *     @type int $page_size
     *           Maximum number of objects to return. Default is 50.
     *           The maximum value is 1000; values above 1000 will be coerced to 1000.
     *     @type string $page_token
     *           Page token received from a previous `ListStreamObjectsRequest` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to
     *           `ListStreamObjectsRequest` must match the call that provided the page
     *           token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datastream\V1\Datastream::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent stream that owns the collection of objects.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent stream that owns the collection of objects.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Maximum number of objects to return. Default is 50.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of objects to return. Default is 50.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Page token received from a previous `ListStreamObjectsRequest` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListStreamObjectsRequest` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Page token received from a previous `ListStreamObjectsRequest` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListStreamObjectsRequest` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

