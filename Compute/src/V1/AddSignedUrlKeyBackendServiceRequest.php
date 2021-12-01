<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for BackendServices.AddSignedUrlKey. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.AddSignedUrlKeyBackendServiceRequest</code>
 */
class AddSignedUrlKeyBackendServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the BackendService resource to which the Signed URL Key should be added. The name should conform to RFC1035.
     *
     * Generated from protobuf field <code>string backend_service = 306946058 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $backend_service = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     */
    private $project = '';
    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 37109963;</code>
     */
    private $request_id = null;
    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SignedUrlKey signed_url_key_resource = 457625985 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $signed_url_key_resource = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $backend_service
     *           Name of the BackendService resource to which the Signed URL Key should be added. The name should conform to RFC1035.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *     @type \Google\Cloud\Compute\V1\SignedUrlKey $signed_url_key_resource
     *           The body resource for this request
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the BackendService resource to which the Signed URL Key should be added. The name should conform to RFC1035.
     *
     * Generated from protobuf field <code>string backend_service = 306946058 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getBackendService()
    {
        return $this->backend_service;
    }

    /**
     * Name of the BackendService resource to which the Signed URL Key should be added. The name should conform to RFC1035.
     *
     * Generated from protobuf field <code>string backend_service = 306946058 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setBackendService($var)
    {
        GPBUtil::checkString($var, True);
        $this->backend_service = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED, (.google.cloud.operation_request_field) = "project"];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 37109963;</code>
     * @return string
     */
    public function getRequestId()
    {
        return isset($this->request_id) ? $this->request_id : '';
    }

    public function hasRequestId()
    {
        return isset($this->request_id);
    }

    public function clearRequestId()
    {
        unset($this->request_id);
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed. For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments. The request ID must be a valid UUID with the exception that zero UUID is not supported ( 00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 37109963;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SignedUrlKey signed_url_key_resource = 457625985 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Compute\V1\SignedUrlKey|null
     */
    public function getSignedUrlKeyResource()
    {
        return isset($this->signed_url_key_resource) ? $this->signed_url_key_resource : null;
    }

    public function hasSignedUrlKeyResource()
    {
        return isset($this->signed_url_key_resource);
    }

    public function clearSignedUrlKeyResource()
    {
        unset($this->signed_url_key_resource);
    }

    /**
     * The body resource for this request
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SignedUrlKey signed_url_key_resource = 457625985 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Compute\V1\SignedUrlKey $var
     * @return $this
     */
    public function setSignedUrlKeyResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SignedUrlKey::class);
        $this->signed_url_key_resource = $var;

        return $this;
    }

}

