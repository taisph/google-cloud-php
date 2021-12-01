<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.HttpRouteAction</code>
 */
class HttpRouteAction extends \Google\Protobuf\Internal\Message
{
    /**
     * The specification for allowing client side cross-origin requests. Please see W3C Recommendation for Cross Origin Resource Sharing Not supported when the URL map is bound to target gRPC proxy.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.CorsPolicy cors_policy = 398943748;</code>
     */
    private $cors_policy = null;
    /**
     * The specification for fault injection introduced into traffic to test the resiliency of clients to backend service failure. As part of fault injection, when clients send requests to a backend service, delays can be introduced by Loadbalancer on a percentage of requests before sending those request to the backend service. Similarly requests from clients can be aborted by the Loadbalancer for a percentage of requests. For the requests impacted by fault injection, timeout and retry_policy will be ignored by clients that are configured with a fault_injection_policy.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.HttpFaultInjection fault_injection_policy = 412781079;</code>
     */
    private $fault_injection_policy = null;
    /**
     * Specifies the maximum duration (timeout) for streams on the selected route. Unlike the timeout field where the timeout duration starts from the time the request has been fully processed (i.e. end-of-stream), the duration in this field is computed from the beginning of the stream until the response has been completely processed, including all retries. A stream that does not complete in this duration is closed. If not specified, will use the largest maxStreamDuration among all backend services associated with the route. This field is only allowed if the Url map is used with backend services with loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration max_stream_duration = 61428376;</code>
     */
    private $max_stream_duration = null;
    /**
     * Specifies the policy on how requests intended for the route's backends are shadowed to a separate mirrored backend service. Loadbalancer does not wait for responses from the shadow service. Prior to sending traffic to the shadow service, the host / authority header is suffixed with -shadow. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RequestMirrorPolicy request_mirror_policy = 220196866;</code>
     */
    private $request_mirror_policy = null;
    /**
     * Specifies the retry policy associated with this route. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.HttpRetryPolicy retry_policy = 56799913;</code>
     */
    private $retry_policy = null;
    /**
     * Specifies the timeout for the selected route. Timeout is computed from the time the request has been fully processed (i.e. end-of-stream) up until the response has been completely processed. Timeout includes all retries. If not specified, will use the largest timeout among all backend services associated with the route. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration timeout = 296701281;</code>
     */
    private $timeout = null;
    /**
     * The spec to modify the URL of the request, prior to forwarding the request to the matched service. urlRewrite is the only action supported in UrlMaps for external HTTP(S) load balancers. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.UrlRewrite url_rewrite = 273333948;</code>
     */
    private $url_rewrite = null;
    /**
     * A list of weighted backend services to send traffic to when a route match occurs. The weights determine the fraction of traffic that flows to their corresponding backend service. If all traffic needs to go to a single backend service, there must be one weightedBackendService with weight set to a non-zero number. Once a backendService is identified and before forwarding the request to the backend service, advanced routing actions such as URL rewrites and header transformations are applied depending on additional settings specified in this HttpRouteAction.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.WeightedBackendService weighted_backend_services = 337028049;</code>
     */
    private $weighted_backend_services;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\CorsPolicy $cors_policy
     *           The specification for allowing client side cross-origin requests. Please see W3C Recommendation for Cross Origin Resource Sharing Not supported when the URL map is bound to target gRPC proxy.
     *     @type \Google\Cloud\Compute\V1\HttpFaultInjection $fault_injection_policy
     *           The specification for fault injection introduced into traffic to test the resiliency of clients to backend service failure. As part of fault injection, when clients send requests to a backend service, delays can be introduced by Loadbalancer on a percentage of requests before sending those request to the backend service. Similarly requests from clients can be aborted by the Loadbalancer for a percentage of requests. For the requests impacted by fault injection, timeout and retry_policy will be ignored by clients that are configured with a fault_injection_policy.
     *     @type \Google\Cloud\Compute\V1\Duration $max_stream_duration
     *           Specifies the maximum duration (timeout) for streams on the selected route. Unlike the timeout field where the timeout duration starts from the time the request has been fully processed (i.e. end-of-stream), the duration in this field is computed from the beginning of the stream until the response has been completely processed, including all retries. A stream that does not complete in this duration is closed. If not specified, will use the largest maxStreamDuration among all backend services associated with the route. This field is only allowed if the Url map is used with backend services with loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     *     @type \Google\Cloud\Compute\V1\RequestMirrorPolicy $request_mirror_policy
     *           Specifies the policy on how requests intended for the route's backends are shadowed to a separate mirrored backend service. Loadbalancer does not wait for responses from the shadow service. Prior to sending traffic to the shadow service, the host / authority header is suffixed with -shadow. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *     @type \Google\Cloud\Compute\V1\HttpRetryPolicy $retry_policy
     *           Specifies the retry policy associated with this route. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *     @type \Google\Cloud\Compute\V1\Duration $timeout
     *           Specifies the timeout for the selected route. Timeout is computed from the time the request has been fully processed (i.e. end-of-stream) up until the response has been completely processed. Timeout includes all retries. If not specified, will use the largest timeout among all backend services associated with the route. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *     @type \Google\Cloud\Compute\V1\UrlRewrite $url_rewrite
     *           The spec to modify the URL of the request, prior to forwarding the request to the matched service. urlRewrite is the only action supported in UrlMaps for external HTTP(S) load balancers. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *     @type \Google\Cloud\Compute\V1\WeightedBackendService[]|\Google\Protobuf\Internal\RepeatedField $weighted_backend_services
     *           A list of weighted backend services to send traffic to when a route match occurs. The weights determine the fraction of traffic that flows to their corresponding backend service. If all traffic needs to go to a single backend service, there must be one weightedBackendService with weight set to a non-zero number. Once a backendService is identified and before forwarding the request to the backend service, advanced routing actions such as URL rewrites and header transformations are applied depending on additional settings specified in this HttpRouteAction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The specification for allowing client side cross-origin requests. Please see W3C Recommendation for Cross Origin Resource Sharing Not supported when the URL map is bound to target gRPC proxy.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.CorsPolicy cors_policy = 398943748;</code>
     * @return \Google\Cloud\Compute\V1\CorsPolicy|null
     */
    public function getCorsPolicy()
    {
        return isset($this->cors_policy) ? $this->cors_policy : null;
    }

    public function hasCorsPolicy()
    {
        return isset($this->cors_policy);
    }

    public function clearCorsPolicy()
    {
        unset($this->cors_policy);
    }

    /**
     * The specification for allowing client side cross-origin requests. Please see W3C Recommendation for Cross Origin Resource Sharing Not supported when the URL map is bound to target gRPC proxy.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.CorsPolicy cors_policy = 398943748;</code>
     * @param \Google\Cloud\Compute\V1\CorsPolicy $var
     * @return $this
     */
    public function setCorsPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\CorsPolicy::class);
        $this->cors_policy = $var;

        return $this;
    }

    /**
     * The specification for fault injection introduced into traffic to test the resiliency of clients to backend service failure. As part of fault injection, when clients send requests to a backend service, delays can be introduced by Loadbalancer on a percentage of requests before sending those request to the backend service. Similarly requests from clients can be aborted by the Loadbalancer for a percentage of requests. For the requests impacted by fault injection, timeout and retry_policy will be ignored by clients that are configured with a fault_injection_policy.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.HttpFaultInjection fault_injection_policy = 412781079;</code>
     * @return \Google\Cloud\Compute\V1\HttpFaultInjection|null
     */
    public function getFaultInjectionPolicy()
    {
        return isset($this->fault_injection_policy) ? $this->fault_injection_policy : null;
    }

    public function hasFaultInjectionPolicy()
    {
        return isset($this->fault_injection_policy);
    }

    public function clearFaultInjectionPolicy()
    {
        unset($this->fault_injection_policy);
    }

    /**
     * The specification for fault injection introduced into traffic to test the resiliency of clients to backend service failure. As part of fault injection, when clients send requests to a backend service, delays can be introduced by Loadbalancer on a percentage of requests before sending those request to the backend service. Similarly requests from clients can be aborted by the Loadbalancer for a percentage of requests. For the requests impacted by fault injection, timeout and retry_policy will be ignored by clients that are configured with a fault_injection_policy.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.HttpFaultInjection fault_injection_policy = 412781079;</code>
     * @param \Google\Cloud\Compute\V1\HttpFaultInjection $var
     * @return $this
     */
    public function setFaultInjectionPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HttpFaultInjection::class);
        $this->fault_injection_policy = $var;

        return $this;
    }

    /**
     * Specifies the maximum duration (timeout) for streams on the selected route. Unlike the timeout field where the timeout duration starts from the time the request has been fully processed (i.e. end-of-stream), the duration in this field is computed from the beginning of the stream until the response has been completely processed, including all retries. A stream that does not complete in this duration is closed. If not specified, will use the largest maxStreamDuration among all backend services associated with the route. This field is only allowed if the Url map is used with backend services with loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration max_stream_duration = 61428376;</code>
     * @return \Google\Cloud\Compute\V1\Duration|null
     */
    public function getMaxStreamDuration()
    {
        return isset($this->max_stream_duration) ? $this->max_stream_duration : null;
    }

    public function hasMaxStreamDuration()
    {
        return isset($this->max_stream_duration);
    }

    public function clearMaxStreamDuration()
    {
        unset($this->max_stream_duration);
    }

    /**
     * Specifies the maximum duration (timeout) for streams on the selected route. Unlike the timeout field where the timeout duration starts from the time the request has been fully processed (i.e. end-of-stream), the duration in this field is computed from the beginning of the stream until the response has been completely processed, including all retries. A stream that does not complete in this duration is closed. If not specified, will use the largest maxStreamDuration among all backend services associated with the route. This field is only allowed if the Url map is used with backend services with loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration max_stream_duration = 61428376;</code>
     * @param \Google\Cloud\Compute\V1\Duration $var
     * @return $this
     */
    public function setMaxStreamDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Duration::class);
        $this->max_stream_duration = $var;

        return $this;
    }

    /**
     * Specifies the policy on how requests intended for the route's backends are shadowed to a separate mirrored backend service. Loadbalancer does not wait for responses from the shadow service. Prior to sending traffic to the shadow service, the host / authority header is suffixed with -shadow. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RequestMirrorPolicy request_mirror_policy = 220196866;</code>
     * @return \Google\Cloud\Compute\V1\RequestMirrorPolicy|null
     */
    public function getRequestMirrorPolicy()
    {
        return isset($this->request_mirror_policy) ? $this->request_mirror_policy : null;
    }

    public function hasRequestMirrorPolicy()
    {
        return isset($this->request_mirror_policy);
    }

    public function clearRequestMirrorPolicy()
    {
        unset($this->request_mirror_policy);
    }

    /**
     * Specifies the policy on how requests intended for the route's backends are shadowed to a separate mirrored backend service. Loadbalancer does not wait for responses from the shadow service. Prior to sending traffic to the shadow service, the host / authority header is suffixed with -shadow. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.RequestMirrorPolicy request_mirror_policy = 220196866;</code>
     * @param \Google\Cloud\Compute\V1\RequestMirrorPolicy $var
     * @return $this
     */
    public function setRequestMirrorPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\RequestMirrorPolicy::class);
        $this->request_mirror_policy = $var;

        return $this;
    }

    /**
     * Specifies the retry policy associated with this route. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.HttpRetryPolicy retry_policy = 56799913;</code>
     * @return \Google\Cloud\Compute\V1\HttpRetryPolicy|null
     */
    public function getRetryPolicy()
    {
        return isset($this->retry_policy) ? $this->retry_policy : null;
    }

    public function hasRetryPolicy()
    {
        return isset($this->retry_policy);
    }

    public function clearRetryPolicy()
    {
        unset($this->retry_policy);
    }

    /**
     * Specifies the retry policy associated with this route. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.HttpRetryPolicy retry_policy = 56799913;</code>
     * @param \Google\Cloud\Compute\V1\HttpRetryPolicy $var
     * @return $this
     */
    public function setRetryPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\HttpRetryPolicy::class);
        $this->retry_policy = $var;

        return $this;
    }

    /**
     * Specifies the timeout for the selected route. Timeout is computed from the time the request has been fully processed (i.e. end-of-stream) up until the response has been completely processed. Timeout includes all retries. If not specified, will use the largest timeout among all backend services associated with the route. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration timeout = 296701281;</code>
     * @return \Google\Cloud\Compute\V1\Duration|null
     */
    public function getTimeout()
    {
        return isset($this->timeout) ? $this->timeout : null;
    }

    public function hasTimeout()
    {
        return isset($this->timeout);
    }

    public function clearTimeout()
    {
        unset($this->timeout);
    }

    /**
     * Specifies the timeout for the selected route. Timeout is computed from the time the request has been fully processed (i.e. end-of-stream) up until the response has been completely processed. Timeout includes all retries. If not specified, will use the largest timeout among all backend services associated with the route. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Duration timeout = 296701281;</code>
     * @param \Google\Cloud\Compute\V1\Duration $var
     * @return $this
     */
    public function setTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Duration::class);
        $this->timeout = $var;

        return $this;
    }

    /**
     * The spec to modify the URL of the request, prior to forwarding the request to the matched service. urlRewrite is the only action supported in UrlMaps for external HTTP(S) load balancers. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.UrlRewrite url_rewrite = 273333948;</code>
     * @return \Google\Cloud\Compute\V1\UrlRewrite|null
     */
    public function getUrlRewrite()
    {
        return isset($this->url_rewrite) ? $this->url_rewrite : null;
    }

    public function hasUrlRewrite()
    {
        return isset($this->url_rewrite);
    }

    public function clearUrlRewrite()
    {
        unset($this->url_rewrite);
    }

    /**
     * The spec to modify the URL of the request, prior to forwarding the request to the matched service. urlRewrite is the only action supported in UrlMaps for external HTTP(S) load balancers. Not supported when the URL map is bound to target gRPC proxy that has validateForProxyless field set to true.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.UrlRewrite url_rewrite = 273333948;</code>
     * @param \Google\Cloud\Compute\V1\UrlRewrite $var
     * @return $this
     */
    public function setUrlRewrite($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\UrlRewrite::class);
        $this->url_rewrite = $var;

        return $this;
    }

    /**
     * A list of weighted backend services to send traffic to when a route match occurs. The weights determine the fraction of traffic that flows to their corresponding backend service. If all traffic needs to go to a single backend service, there must be one weightedBackendService with weight set to a non-zero number. Once a backendService is identified and before forwarding the request to the backend service, advanced routing actions such as URL rewrites and header transformations are applied depending on additional settings specified in this HttpRouteAction.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.WeightedBackendService weighted_backend_services = 337028049;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWeightedBackendServices()
    {
        return $this->weighted_backend_services;
    }

    /**
     * A list of weighted backend services to send traffic to when a route match occurs. The weights determine the fraction of traffic that flows to their corresponding backend service. If all traffic needs to go to a single backend service, there must be one weightedBackendService with weight set to a non-zero number. Once a backendService is identified and before forwarding the request to the backend service, advanced routing actions such as URL rewrites and header transformations are applied depending on additional settings specified in this HttpRouteAction.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.WeightedBackendService weighted_backend_services = 337028049;</code>
     * @param \Google\Cloud\Compute\V1\WeightedBackendService[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWeightedBackendServices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\WeightedBackendService::class);
        $this->weighted_backend_services = $arr;

        return $this;
    }

}

