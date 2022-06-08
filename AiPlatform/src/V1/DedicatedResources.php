<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/machine_resources.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A description of resources that are dedicated to a DeployedModel, and
 * that need a higher degree of manual configuration.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.DedicatedResources</code>
 */
class DedicatedResources extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Immutable. The specification of a single machine used by the prediction.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MachineSpec machine_spec = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $machine_spec = null;
    /**
     * Required. Immutable. The minimum number of machine replicas this DeployedModel will be always
     * deployed on. This value must be greater than or equal to 1.
     * If traffic against the DeployedModel increases, it may dynamically be
     * deployed onto more replicas, and as traffic decreases, some of these extra
     * replicas may be freed.
     *
     * Generated from protobuf field <code>int32 min_replica_count = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $min_replica_count = 0;
    /**
     * Immutable. The maximum number of replicas this DeployedModel may be deployed on when
     * the traffic against it increases. If the requested value is too large,
     * the deployment will error, but if deployment succeeds then the ability
     * to scale the model to that many replicas is guaranteed (barring service
     * outages). If traffic against the DeployedModel increases beyond what its
     * replicas at maximum may handle, a portion of the traffic will be dropped.
     * If this value is not provided, will use [min_replica_count][google.cloud.aiplatform.v1.DedicatedResources.min_replica_count] as the
     * default value.
     * The value of this field impacts the charge against Vertex CPU and GPU
     * quotas. Specifically, you will be charged for (max_replica_count *
     * number of cores in the selected machine type) and (max_replica_count *
     * number of GPUs per replica in the selected machine type).
     *
     * Generated from protobuf field <code>int32 max_replica_count = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $max_replica_count = 0;
    /**
     * Immutable. The metric specifications that overrides a resource
     * utilization metric (CPU utilization, accelerator's duty cycle, and so on)
     * target value (default to 60 if not set). At most one entry is allowed per
     * metric.
     * If [machine_spec.accelerator_count][google.cloud.aiplatform.v1.MachineSpec.accelerator_count] is
     * above 0, the autoscaling will be based on both CPU utilization and
     * accelerator's duty cycle metrics and scale up when either metrics exceeds
     * its target value while scale down if both metrics are under their target
     * value. The default target value is 60 for both metrics.
     * If [machine_spec.accelerator_count][google.cloud.aiplatform.v1.MachineSpec.accelerator_count] is
     * 0, the autoscaling will be based on CPU utilization metric only with
     * default target value 60 if not explicitly set.
     * For example, in the case of Online Prediction, if you want to override
     * target CPU utilization to 80, you should set
     * [autoscaling_metric_specs.metric_name][google.cloud.aiplatform.v1.AutoscalingMetricSpec.metric_name]
     * to `aiplatform.googleapis.com/prediction/online/cpu/utilization` and
     * [autoscaling_metric_specs.target][google.cloud.aiplatform.v1.AutoscalingMetricSpec.target] to `80`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.AutoscalingMetricSpec autoscaling_metric_specs = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $autoscaling_metric_specs;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\MachineSpec $machine_spec
     *           Required. Immutable. The specification of a single machine used by the prediction.
     *     @type int $min_replica_count
     *           Required. Immutable. The minimum number of machine replicas this DeployedModel will be always
     *           deployed on. This value must be greater than or equal to 1.
     *           If traffic against the DeployedModel increases, it may dynamically be
     *           deployed onto more replicas, and as traffic decreases, some of these extra
     *           replicas may be freed.
     *     @type int $max_replica_count
     *           Immutable. The maximum number of replicas this DeployedModel may be deployed on when
     *           the traffic against it increases. If the requested value is too large,
     *           the deployment will error, but if deployment succeeds then the ability
     *           to scale the model to that many replicas is guaranteed (barring service
     *           outages). If traffic against the DeployedModel increases beyond what its
     *           replicas at maximum may handle, a portion of the traffic will be dropped.
     *           If this value is not provided, will use [min_replica_count][google.cloud.aiplatform.v1.DedicatedResources.min_replica_count] as the
     *           default value.
     *           The value of this field impacts the charge against Vertex CPU and GPU
     *           quotas. Specifically, you will be charged for (max_replica_count *
     *           number of cores in the selected machine type) and (max_replica_count *
     *           number of GPUs per replica in the selected machine type).
     *     @type \Google\Cloud\AIPlatform\V1\AutoscalingMetricSpec[]|\Google\Protobuf\Internal\RepeatedField $autoscaling_metric_specs
     *           Immutable. The metric specifications that overrides a resource
     *           utilization metric (CPU utilization, accelerator's duty cycle, and so on)
     *           target value (default to 60 if not set). At most one entry is allowed per
     *           metric.
     *           If [machine_spec.accelerator_count][google.cloud.aiplatform.v1.MachineSpec.accelerator_count] is
     *           above 0, the autoscaling will be based on both CPU utilization and
     *           accelerator's duty cycle metrics and scale up when either metrics exceeds
     *           its target value while scale down if both metrics are under their target
     *           value. The default target value is 60 for both metrics.
     *           If [machine_spec.accelerator_count][google.cloud.aiplatform.v1.MachineSpec.accelerator_count] is
     *           0, the autoscaling will be based on CPU utilization metric only with
     *           default target value 60 if not explicitly set.
     *           For example, in the case of Online Prediction, if you want to override
     *           target CPU utilization to 80, you should set
     *           [autoscaling_metric_specs.metric_name][google.cloud.aiplatform.v1.AutoscalingMetricSpec.metric_name]
     *           to `aiplatform.googleapis.com/prediction/online/cpu/utilization` and
     *           [autoscaling_metric_specs.target][google.cloud.aiplatform.v1.AutoscalingMetricSpec.target] to `80`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MachineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Immutable. The specification of a single machine used by the prediction.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MachineSpec machine_spec = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\AIPlatform\V1\MachineSpec|null
     */
    public function getMachineSpec()
    {
        return $this->machine_spec;
    }

    public function hasMachineSpec()
    {
        return isset($this->machine_spec);
    }

    public function clearMachineSpec()
    {
        unset($this->machine_spec);
    }

    /**
     * Required. Immutable. The specification of a single machine used by the prediction.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.MachineSpec machine_spec = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\AIPlatform\V1\MachineSpec $var
     * @return $this
     */
    public function setMachineSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\MachineSpec::class);
        $this->machine_spec = $var;

        return $this;
    }

    /**
     * Required. Immutable. The minimum number of machine replicas this DeployedModel will be always
     * deployed on. This value must be greater than or equal to 1.
     * If traffic against the DeployedModel increases, it may dynamically be
     * deployed onto more replicas, and as traffic decreases, some of these extra
     * replicas may be freed.
     *
     * Generated from protobuf field <code>int32 min_replica_count = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getMinReplicaCount()
    {
        return $this->min_replica_count;
    }

    /**
     * Required. Immutable. The minimum number of machine replicas this DeployedModel will be always
     * deployed on. This value must be greater than or equal to 1.
     * If traffic against the DeployedModel increases, it may dynamically be
     * deployed onto more replicas, and as traffic decreases, some of these extra
     * replicas may be freed.
     *
     * Generated from protobuf field <code>int32 min_replica_count = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setMinReplicaCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_replica_count = $var;

        return $this;
    }

    /**
     * Immutable. The maximum number of replicas this DeployedModel may be deployed on when
     * the traffic against it increases. If the requested value is too large,
     * the deployment will error, but if deployment succeeds then the ability
     * to scale the model to that many replicas is guaranteed (barring service
     * outages). If traffic against the DeployedModel increases beyond what its
     * replicas at maximum may handle, a portion of the traffic will be dropped.
     * If this value is not provided, will use [min_replica_count][google.cloud.aiplatform.v1.DedicatedResources.min_replica_count] as the
     * default value.
     * The value of this field impacts the charge against Vertex CPU and GPU
     * quotas. Specifically, you will be charged for (max_replica_count *
     * number of cores in the selected machine type) and (max_replica_count *
     * number of GPUs per replica in the selected machine type).
     *
     * Generated from protobuf field <code>int32 max_replica_count = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getMaxReplicaCount()
    {
        return $this->max_replica_count;
    }

    /**
     * Immutable. The maximum number of replicas this DeployedModel may be deployed on when
     * the traffic against it increases. If the requested value is too large,
     * the deployment will error, but if deployment succeeds then the ability
     * to scale the model to that many replicas is guaranteed (barring service
     * outages). If traffic against the DeployedModel increases beyond what its
     * replicas at maximum may handle, a portion of the traffic will be dropped.
     * If this value is not provided, will use [min_replica_count][google.cloud.aiplatform.v1.DedicatedResources.min_replica_count] as the
     * default value.
     * The value of this field impacts the charge against Vertex CPU and GPU
     * quotas. Specifically, you will be charged for (max_replica_count *
     * number of cores in the selected machine type) and (max_replica_count *
     * number of GPUs per replica in the selected machine type).
     *
     * Generated from protobuf field <code>int32 max_replica_count = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxReplicaCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_replica_count = $var;

        return $this;
    }

    /**
     * Immutable. The metric specifications that overrides a resource
     * utilization metric (CPU utilization, accelerator's duty cycle, and so on)
     * target value (default to 60 if not set). At most one entry is allowed per
     * metric.
     * If [machine_spec.accelerator_count][google.cloud.aiplatform.v1.MachineSpec.accelerator_count] is
     * above 0, the autoscaling will be based on both CPU utilization and
     * accelerator's duty cycle metrics and scale up when either metrics exceeds
     * its target value while scale down if both metrics are under their target
     * value. The default target value is 60 for both metrics.
     * If [machine_spec.accelerator_count][google.cloud.aiplatform.v1.MachineSpec.accelerator_count] is
     * 0, the autoscaling will be based on CPU utilization metric only with
     * default target value 60 if not explicitly set.
     * For example, in the case of Online Prediction, if you want to override
     * target CPU utilization to 80, you should set
     * [autoscaling_metric_specs.metric_name][google.cloud.aiplatform.v1.AutoscalingMetricSpec.metric_name]
     * to `aiplatform.googleapis.com/prediction/online/cpu/utilization` and
     * [autoscaling_metric_specs.target][google.cloud.aiplatform.v1.AutoscalingMetricSpec.target] to `80`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.AutoscalingMetricSpec autoscaling_metric_specs = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAutoscalingMetricSpecs()
    {
        return $this->autoscaling_metric_specs;
    }

    /**
     * Immutable. The metric specifications that overrides a resource
     * utilization metric (CPU utilization, accelerator's duty cycle, and so on)
     * target value (default to 60 if not set). At most one entry is allowed per
     * metric.
     * If [machine_spec.accelerator_count][google.cloud.aiplatform.v1.MachineSpec.accelerator_count] is
     * above 0, the autoscaling will be based on both CPU utilization and
     * accelerator's duty cycle metrics and scale up when either metrics exceeds
     * its target value while scale down if both metrics are under their target
     * value. The default target value is 60 for both metrics.
     * If [machine_spec.accelerator_count][google.cloud.aiplatform.v1.MachineSpec.accelerator_count] is
     * 0, the autoscaling will be based on CPU utilization metric only with
     * default target value 60 if not explicitly set.
     * For example, in the case of Online Prediction, if you want to override
     * target CPU utilization to 80, you should set
     * [autoscaling_metric_specs.metric_name][google.cloud.aiplatform.v1.AutoscalingMetricSpec.metric_name]
     * to `aiplatform.googleapis.com/prediction/online/cpu/utilization` and
     * [autoscaling_metric_specs.target][google.cloud.aiplatform.v1.AutoscalingMetricSpec.target] to `80`.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.AutoscalingMetricSpec autoscaling_metric_specs = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\AIPlatform\V1\AutoscalingMetricSpec[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAutoscalingMetricSpecs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\AutoscalingMetricSpec::class);
        $this->autoscaling_metric_specs = $arr;

        return $this;
    }

}

