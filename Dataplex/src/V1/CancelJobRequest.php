<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/service.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cancel task jobs.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.CancelJobRequest</code>
 */
class CancelJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the job:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/task/{task_id}/job/{job_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the job:
     *           `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/task/{task_id}/job/{job_id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the job:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/task/{task_id}/job/{job_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the job:
     * `projects/{project_number}/locations/{location_id}/lakes/{lake_id}/task/{task_id}/job/{job_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

