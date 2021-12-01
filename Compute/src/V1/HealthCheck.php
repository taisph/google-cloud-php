<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Health Check resource. Google Compute Engine has two Health Check resources: * [Global](/compute/docs/reference/rest/v1/healthChecks) * [Regional](https://cloud.google.com/compute/docs/reference/rest/v1/regionHealthChecks) Internal HTTP(S) load balancers must use regional health checks (`compute.v1.regionHealthChecks`). Traffic Director must use global health checks (`compute.v1.HealthChecks`). Internal TCP/UDP load balancers can use either regional or global health checks (`compute.v1.regionHealthChecks` or `compute.v1.HealthChecks`). External HTTP(S), TCP proxy, and SSL proxy load balancers as well as managed instance group auto-healing must use global health checks (`compute.v1.HealthChecks`). Backend service-based network load balancers must use regional health checks (`compute.v1.regionHealthChecks`). Target pool-based network load balancers must use legacy HTTP health checks (`compute.v1.httpHealthChecks`). For more information, see Health checks overview.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.HealthCheck</code>
 */
class HealthCheck extends \Google\Protobuf\Internal\Message
{
    /**
     * How often (in seconds) to send a health check. The default value is 5 seconds.
     *
     * Generated from protobuf field <code>int32 check_interval_sec = 345561006;</code>
     */
    private $check_interval_sec = null;
    /**
     * [Output Only] Creation timestamp in 3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.GRPCHealthCheck grpc_health_check = 85529574;</code>
     */
    private $grpc_health_check = null;
    /**
     * A so-far unhealthy instance will be marked healthy after this many consecutive successes. The default value is 2.
     *
     * Generated from protobuf field <code>int32 healthy_threshold = 403212361;</code>
     */
    private $healthy_threshold = null;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HTTP2HealthCheck http2_health_check = 11360986;</code>
     */
    private $http2_health_check = null;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HTTPHealthCheck http_health_check = 412586940;</code>
     */
    private $http_health_check = null;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HTTPSHealthCheck https_health_check = 436046905;</code>
     */
    private $https_health_check = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * Type of the resource.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * Configure logging on this health check.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.HealthCheckLogConfig log_config = 351299741;</code>
     */
    private $log_config = null;
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. For example, a name that is 1-63 characters long, matches the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`, and otherwise complies with RFC1035. This regular expression describes a name where the first character is a lowercase letter, and all following characters are a dash, lowercase letter, or digit, except the last character, which isn't a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = null;
    /**
     * [Output Only] Region where the health check resides. Not applicable to global health checks.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     */
    private $region = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.SSLHealthCheck ssl_health_check = 280032440;</code>
     */
    private $ssl_health_check = null;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.TCPHealthCheck tcp_health_check = 469980419;</code>
     */
    private $tcp_health_check = null;
    /**
     * How long (in seconds) to wait before claiming failure. The default value is 5 seconds. It is invalid for timeoutSec to have greater value than checkIntervalSec.
     *
     * Generated from protobuf field <code>int32 timeout_sec = 79994995;</code>
     */
    private $timeout_sec = null;
    /**
     * Specifies the type of the healthCheck, either TCP, SSL, HTTP, HTTPS or HTTP2. If not specified, the default is TCP. Exactly one of the protocol-specific health check field must be specified, which must match type field.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.HealthCheck.Type type = 3575610;</code>
     */
    private $type = null;
    /**
     * A so-far healthy instance will be marked unhealthy after this many consecutive failures. The default value is 2.
     *
     * Generated from protobuf field <code>int32 unhealthy_threshold = 227958480;</code>
     */
    private $unhealthy_threshold = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $check_interval_sec
     *           How often (in seconds) to send a health check. The default value is 5 seconds.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in 3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type \Google\Cloud\Compute\V1\GRPCHealthCheck $grpc_health_check
     *     @type int $healthy_threshold
     *           A so-far unhealthy instance will be marked healthy after this many consecutive successes. The default value is 2.
     *     @type \Google\Cloud\Compute\V1\HTTP2HealthCheck $http2_health_check
     *     @type \Google\Cloud\Compute\V1\HTTPHealthCheck $http_health_check
     *     @type \Google\Cloud\Compute\V1\HTTPSHealthCheck $https_health_check
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           Type of the resource.
     *     @type \Google\Cloud\Compute\V1\HealthCheckLogConfig $log_config
     *           Configure logging on this health check.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. For example, a name that is 1-63 characters long, matches the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`, and otherwise complies with RFC1035. This regular expression describes a name where the first character is a lowercase letter, and all following characters are a dash, lowercase letter, or digit, except the last character, which isn't a dash.
     *     @type string $region
     *           [Output Only] Region where the health check resides. Not applicable to global health checks.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type \Google\Cloud\Compute\V1\SSLHealthCheck $ssl_health_check
     *     @type \Google\Cloud\Compute\V1\TCPHealthCheck $tcp_health_check
     *     @type int $timeout_sec
     *           How long (in seconds) to wait before claiming failure. The default value is 5 seconds. It is invalid for timeoutSec to have greater value than checkIntervalSec.
     *     @type int $type
     *           Specifies the type of the healthCheck, either TCP, SSL, HTTP, HTTPS or HTTP2. If not specified, the default is TCP. Exactly one of the protocol-specific health check field must be specified, which must match type field.
     *     @type int $unhealthy_threshold
     *           A so-far healthy instance will be marked unhealthy after this many consecutive failures. The default value is 2.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * How often (in seconds) to send a health check. The default value is 5 seconds.
     *
     * Generated from protobuf field <code>int32 check_interval_sec = 345561006;</code>
     * @return int
     */
    public function getCheckIntervalSec()
    {
        return isset($this->check_interval_sec) ? $this->check_interval_sec : 0;
    }

    public function hasCheckIntervalSec()
    {
        return isset($this->check_interval_sec);
    }

    public function clearCheckIntervalSec()
    {
        unset($this->check_interval_sec);
    }

    /**
     * How often (in seconds) to send a health check. The default value is 5 seconds.
     *
     * Generated from protobuf field <code>int32 check_interval_sec = 345561006;</code>
     * @param int $var
     * @return $this
     */
    public function setCheckIntervalSec($var)
    {
        GPBUtil::checkInt32($var);
        $this->check_interval_sec = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in 3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in 3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.GRPCHealthCheck grpc_health_check = 85529574;</code>
     * @return \Google\Cloud\Compute\V1\GRPCHealthCheck|null
     */
    public function getGrpcHealthCheck()
    {
        return isset($this->grpc_health_check) ? $this->grpc_health_check : null;
    }

    public function hasGrpcHealthCheck()
    {
        return isset($this->grpc_health_check);
    }

    public function clearGrpcHealthCheck()
    {
        unset($this->grpc_health_check);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.GRPCHealthCheck grpc_health_check = 85529574;</code>
     * @param \Google\Cloud\Compute\V1\GRPCHealthCheck $var
     * @return $this
     */
    public function setGrpcHealthCheck($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\GRPCHealthCheck::class);
        $this->grpc_health_check = $var;

        return $this;
    }

    /**
     * A so-far unhealthy instance will be marked healthy after this many consecutive successes. The default value is 2.
     *
     * Generated from protobuf field <code>int32 healthy_threshold = 403212361;</code>
     * @return int
     */
    public function getHealthyThreshold()
    {
        return isset($this->healthy_threshold) ? $this->healthy_threshold : 0;
    }

    public function hasHealthyThreshold()
    {
        return isset($this->healthy_threshold);
    }

    public function clearHealthyThreshold()
    {
        unset($this->healthy_threshold);
    }

    /**
     * A so-far unhealthy instance will be marked healthy after this many consecutive successes. The default value is 2.
     *
     * Generated from protobuf field <code>int32 healthy_threshold = 403212361;</code>
     * @param int $var
     * @return $this
     */
    public function setHealthyThreshold($var)
    {
        GPBUtil::checkInt32($var);
        $this->healthy_threshold = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HTTP2HealthCheck http2_health_check = 11360986;</code>
     * @return \Google\Cloud\Compute\V1\HTTP2HealthCheck|null
     */
    public function getHttp2HealthCheck()
    {
        return isset($this->http2_health_check) ? $this->http2_health_check : null;
    }

    public function hasHttp2HealthCheck()
    {
        return isset($this->http2_health_check);
    }

    public function clearHttp2HealthCheck()
    {
        unset($this->http2_health_check);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HTTP2HealthCheck http2_health_check = 11360986;</code>
     * @param \Google\Cloud\Compute\V1\HTTP2HealthCheck $var
     * @return $this
     */
    public function setHttp2HealthCheck($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HTTP2HealthCheck::class);
        $this->http2_health_check = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HTTPHealthCheck http_health_check = 412586940;</code>
     * @return \Google\Cloud\Compute\V1\HTTPHealthCheck|null
     */
    public function getHttpHealthCheck()
    {
        return isset($this->http_health_check) ? $this->http_health_check : null;
    }

    public function hasHttpHealthCheck()
    {
        return isset($this->http_health_check);
    }

    public function clearHttpHealthCheck()
    {
        unset($this->http_health_check);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HTTPHealthCheck http_health_check = 412586940;</code>
     * @param \Google\Cloud\Compute\V1\HTTPHealthCheck $var
     * @return $this
     */
    public function setHttpHealthCheck($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HTTPHealthCheck::class);
        $this->http_health_check = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HTTPSHealthCheck https_health_check = 436046905;</code>
     * @return \Google\Cloud\Compute\V1\HTTPSHealthCheck|null
     */
    public function getHttpsHealthCheck()
    {
        return isset($this->https_health_check) ? $this->https_health_check : null;
    }

    public function hasHttpsHealthCheck()
    {
        return isset($this->https_health_check);
    }

    public function clearHttpsHealthCheck()
    {
        unset($this->https_health_check);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.HTTPSHealthCheck https_health_check = 436046905;</code>
     * @param \Google\Cloud\Compute\V1\HTTPSHealthCheck $var
     * @return $this
     */
    public function setHttpsHealthCheck($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HTTPSHealthCheck::class);
        $this->https_health_check = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Type of the resource.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * Type of the resource.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * Configure logging on this health check.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.HealthCheckLogConfig log_config = 351299741;</code>
     * @return \Google\Cloud\Compute\V1\HealthCheckLogConfig|null
     */
    public function getLogConfig()
    {
        return isset($this->log_config) ? $this->log_config : null;
    }

    public function hasLogConfig()
    {
        return isset($this->log_config);
    }

    public function clearLogConfig()
    {
        unset($this->log_config);
    }

    /**
     * Configure logging on this health check.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.HealthCheckLogConfig log_config = 351299741;</code>
     * @param \Google\Cloud\Compute\V1\HealthCheckLogConfig $var
     * @return $this
     */
    public function setLogConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HealthCheckLogConfig::class);
        $this->log_config = $var;

        return $this;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. For example, a name that is 1-63 characters long, matches the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`, and otherwise complies with RFC1035. This regular expression describes a name where the first character is a lowercase letter, and all following characters are a dash, lowercase letter, or digit, except the last character, which isn't a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. For example, a name that is 1-63 characters long, matches the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?`, and otherwise complies with RFC1035. This regular expression describes a name where the first character is a lowercase letter, and all following characters are a dash, lowercase letter, or digit, except the last character, which isn't a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
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
     * [Output Only] Region where the health check resides. Not applicable to global health checks.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * [Output Only] Region where the health check resides. Not applicable to global health checks.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.SSLHealthCheck ssl_health_check = 280032440;</code>
     * @return \Google\Cloud\Compute\V1\SSLHealthCheck|null
     */
    public function getSslHealthCheck()
    {
        return isset($this->ssl_health_check) ? $this->ssl_health_check : null;
    }

    public function hasSslHealthCheck()
    {
        return isset($this->ssl_health_check);
    }

    public function clearSslHealthCheck()
    {
        unset($this->ssl_health_check);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.SSLHealthCheck ssl_health_check = 280032440;</code>
     * @param \Google\Cloud\Compute\V1\SSLHealthCheck $var
     * @return $this
     */
    public function setSslHealthCheck($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SSLHealthCheck::class);
        $this->ssl_health_check = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.TCPHealthCheck tcp_health_check = 469980419;</code>
     * @return \Google\Cloud\Compute\V1\TCPHealthCheck|null
     */
    public function getTcpHealthCheck()
    {
        return isset($this->tcp_health_check) ? $this->tcp_health_check : null;
    }

    public function hasTcpHealthCheck()
    {
        return isset($this->tcp_health_check);
    }

    public function clearTcpHealthCheck()
    {
        unset($this->tcp_health_check);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.TCPHealthCheck tcp_health_check = 469980419;</code>
     * @param \Google\Cloud\Compute\V1\TCPHealthCheck $var
     * @return $this
     */
    public function setTcpHealthCheck($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\TCPHealthCheck::class);
        $this->tcp_health_check = $var;

        return $this;
    }

    /**
     * How long (in seconds) to wait before claiming failure. The default value is 5 seconds. It is invalid for timeoutSec to have greater value than checkIntervalSec.
     *
     * Generated from protobuf field <code>int32 timeout_sec = 79994995;</code>
     * @return int
     */
    public function getTimeoutSec()
    {
        return isset($this->timeout_sec) ? $this->timeout_sec : 0;
    }

    public function hasTimeoutSec()
    {
        return isset($this->timeout_sec);
    }

    public function clearTimeoutSec()
    {
        unset($this->timeout_sec);
    }

    /**
     * How long (in seconds) to wait before claiming failure. The default value is 5 seconds. It is invalid for timeoutSec to have greater value than checkIntervalSec.
     *
     * Generated from protobuf field <code>int32 timeout_sec = 79994995;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeoutSec($var)
    {
        GPBUtil::checkInt32($var);
        $this->timeout_sec = $var;

        return $this;
    }

    /**
     * Specifies the type of the healthCheck, either TCP, SSL, HTTP, HTTPS or HTTP2. If not specified, the default is TCP. Exactly one of the protocol-specific health check field must be specified, which must match type field.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.HealthCheck.Type type = 3575610;</code>
     * @return int
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : 0;
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * Specifies the type of the healthCheck, either TCP, SSL, HTTP, HTTPS or HTTP2. If not specified, the default is TCP. Exactly one of the protocol-specific health check field must be specified, which must match type field.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.HealthCheck.Type type = 3575610;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\HealthCheck\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * A so-far healthy instance will be marked unhealthy after this many consecutive failures. The default value is 2.
     *
     * Generated from protobuf field <code>int32 unhealthy_threshold = 227958480;</code>
     * @return int
     */
    public function getUnhealthyThreshold()
    {
        return isset($this->unhealthy_threshold) ? $this->unhealthy_threshold : 0;
    }

    public function hasUnhealthyThreshold()
    {
        return isset($this->unhealthy_threshold);
    }

    public function clearUnhealthyThreshold()
    {
        unset($this->unhealthy_threshold);
    }

    /**
     * A so-far healthy instance will be marked unhealthy after this many consecutive failures. The default value is 2.
     *
     * Generated from protobuf field <code>int32 unhealthy_threshold = 227958480;</code>
     * @param int $var
     * @return $this
     */
    public function setUnhealthyThreshold($var)
    {
        GPBUtil::checkInt32($var);
        $this->unhealthy_threshold = $var;

        return $this;
    }

}

