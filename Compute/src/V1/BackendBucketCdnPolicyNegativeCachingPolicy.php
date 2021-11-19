<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specify CDN TTLs for response error codes.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.BackendBucketCdnPolicyNegativeCachingPolicy</code>
 */
class BackendBucketCdnPolicyNegativeCachingPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * The HTTP status code to define a TTL against. Only HTTP status codes 300, 301, 302, 307, 308, 404, 405, 410, 421, 451 and 501 are can be specified as values, and you cannot specify a status code more than once.
     *
     * Generated from protobuf field <code>optional int32 code = 3059181;</code>
     */
    private $code = null;
    /**
     * The TTL (in seconds) for which to cache responses with the corresponding status code. The maximum allowed value is 1800s (30 minutes), noting that infrequently accessed objects may be evicted from the cache before the defined TTL.
     *
     * Generated from protobuf field <code>optional int32 ttl = 115180;</code>
     */
    private $ttl = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *           The HTTP status code to define a TTL against. Only HTTP status codes 300, 301, 302, 307, 308, 404, 405, 410, 421, 451 and 501 are can be specified as values, and you cannot specify a status code more than once.
     *     @type int $ttl
     *           The TTL (in seconds) for which to cache responses with the corresponding status code. The maximum allowed value is 1800s (30 minutes), noting that infrequently accessed objects may be evicted from the cache before the defined TTL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The HTTP status code to define a TTL against. Only HTTP status codes 300, 301, 302, 307, 308, 404, 405, 410, 421, 451 and 501 are can be specified as values, and you cannot specify a status code more than once.
     *
     * Generated from protobuf field <code>optional int32 code = 3059181;</code>
     * @return int
     */
    public function getCode()
    {
        return isset($this->code) ? $this->code : 0;
    }

    public function hasCode()
    {
        return isset($this->code);
    }

    public function clearCode()
    {
        unset($this->code);
    }

    /**
     * The HTTP status code to define a TTL against. Only HTTP status codes 300, 301, 302, 307, 308, 404, 405, 410, 421, 451 and 501 are can be specified as values, and you cannot specify a status code more than once.
     *
     * Generated from protobuf field <code>optional int32 code = 3059181;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;

        return $this;
    }

    /**
     * The TTL (in seconds) for which to cache responses with the corresponding status code. The maximum allowed value is 1800s (30 minutes), noting that infrequently accessed objects may be evicted from the cache before the defined TTL.
     *
     * Generated from protobuf field <code>optional int32 ttl = 115180;</code>
     * @return int
     */
    public function getTtl()
    {
        return isset($this->ttl) ? $this->ttl : 0;
    }

    public function hasTtl()
    {
        return isset($this->ttl);
    }

    public function clearTtl()
    {
        unset($this->ttl);
    }

    /**
     * The TTL (in seconds) for which to cache responses with the corresponding status code. The maximum allowed value is 1800s (30 minutes), noting that infrequently accessed objects may be evicted from the cache before the defined TTL.
     *
     * Generated from protobuf field <code>optional int32 ttl = 115180;</code>
     * @param int $var
     * @return $this
     */
    public function setTtl($var)
    {
        GPBUtil::checkInt32($var);
        $this->ttl = $var;

        return $this;
    }

}

