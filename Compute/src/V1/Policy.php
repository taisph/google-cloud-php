<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An Identity and Access Management (IAM) policy, which specifies access controls for Google Cloud resources. A `Policy` is a collection of `bindings`. A `binding` binds one or more `members` to a single `role`. Members can be user accounts, service accounts, Google groups, and domains (such as G Suite). A `role` is a named list of permissions; each `role` can be an IAM predefined role or a user-created custom role. For some types of Google Cloud resources, a `binding` can also specify a `condition`, which is a logical expression that allows access to a resource only if the expression evaluates to `true`. A condition can add constraints based on attributes of the request, the resource, or both. To learn which resources support conditions in their IAM policies, see the [IAM documentation](https://cloud.google.com/iam/help/conditions/resource-policies). **JSON example:** { "bindings": [ { "role": "roles/resourcemanager.organizationAdmin", "members": [ "user:mike&#64;example.com", "group:admins&#64;example.com", "domain:google.com", "serviceAccount:my-project-id&#64;appspot.gserviceaccount.com" ] }, { "role": "roles/resourcemanager.organizationViewer", "members": [ "user:eve&#64;example.com" ], "condition": { "title": "expirable access", "description": "Does not grant access after Sep 2020", "expression": "request.time < timestamp('2020-10-01T00:00:00.000Z')", } } ], "etag": "BwWWja0YfJA=", "version": 3 } **YAML example:** bindings: - members: - user:mike&#64;example.com - group:admins&#64;example.com - domain:google.com - serviceAccount:my-project-id&#64;appspot.gserviceaccount.com role: roles/resourcemanager.organizationAdmin - members: - user:eve&#64;example.com role: roles/resourcemanager.organizationViewer condition: title: expirable access description: Does not grant access after Sep 2020 expression: request.time < timestamp('2020-10-01T00:00:00.000Z') etag: BwWWja0YfJA= version: 3 For a description of IAM and its features, see the [IAM documentation](https://cloud.google.com/iam/docs/).
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Policy</code>
 */
class Policy extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies cloud audit logging configuration for this policy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AuditConfig audit_configs = 328080653;</code>
     */
    private $audit_configs;
    /**
     * Associates a list of `members` to a `role`. Optionally, may specify a `condition` that determines how and when the `bindings` are applied. Each of the `bindings` must contain at least one member.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Binding bindings = 403251854;</code>
     */
    private $bindings;
    /**
     * `etag` is used for optimistic concurrency control as a way to help prevent simultaneous updates of a policy from overwriting each other. It is strongly suggested that systems make use of the `etag` in the read-modify-write cycle to perform policy updates in order to avoid race conditions: An `etag` is returned in the response to `getIamPolicy`, and systems are expected to put that etag in the request to `setIamPolicy` to ensure that their change will be applied to the same version of the policy. **Important:** If you use IAM Conditions, you must include the `etag` field whenever you call `setIamPolicy`. If you omit this field, then IAM allows you to overwrite a version `3` policy with a version `1` policy, and all of the conditions in the version `3` policy are lost.
     *
     * Generated from protobuf field <code>string etag = 3123477;</code>
     */
    private $etag = null;
    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf field <code>bool iam_owned = 450566203;</code>
     */
    private $iam_owned = null;
    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Rule rules = 108873975;</code>
     */
    private $rules;
    /**
     * Specifies the format of the policy. Valid values are `0`, `1`, and `3`. Requests that specify an invalid value are rejected. Any operation that affects conditional role bindings must specify version `3`. This requirement applies to the following operations: * Getting a policy that includes a conditional role binding * Adding a conditional role binding to a policy * Changing a conditional role binding in a policy * Removing any role binding, with or without a condition, from a policy that includes conditions **Important:** If you use IAM Conditions, you must include the `etag` field whenever you call `setIamPolicy`. If you omit this field, then IAM allows you to overwrite a version `3` policy with a version `1` policy, and all of the conditions in the version `3` policy are lost. If a policy does not include any conditions, operations on that policy may specify any valid version or leave the field unset. To learn which resources support conditions in their IAM policies, see the [IAM documentation](https://cloud.google.com/iam/help/conditions/resource-policies).
     *
     * Generated from protobuf field <code>int32 version = 351608024;</code>
     */
    private $version = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\AuditConfig[]|\Google\Protobuf\Internal\RepeatedField $audit_configs
     *           Specifies cloud audit logging configuration for this policy.
     *     @type \Google\Cloud\Compute\V1\Binding[]|\Google\Protobuf\Internal\RepeatedField $bindings
     *           Associates a list of `members` to a `role`. Optionally, may specify a `condition` that determines how and when the `bindings` are applied. Each of the `bindings` must contain at least one member.
     *     @type string $etag
     *           `etag` is used for optimistic concurrency control as a way to help prevent simultaneous updates of a policy from overwriting each other. It is strongly suggested that systems make use of the `etag` in the read-modify-write cycle to perform policy updates in order to avoid race conditions: An `etag` is returned in the response to `getIamPolicy`, and systems are expected to put that etag in the request to `setIamPolicy` to ensure that their change will be applied to the same version of the policy. **Important:** If you use IAM Conditions, you must include the `etag` field whenever you call `setIamPolicy`. If you omit this field, then IAM allows you to overwrite a version `3` policy with a version `1` policy, and all of the conditions in the version `3` policy are lost.
     *     @type bool $iam_owned
     *           This is deprecated and has no effect. Do not use.
     *     @type \Google\Cloud\Compute\V1\Rule[]|\Google\Protobuf\Internal\RepeatedField $rules
     *           This is deprecated and has no effect. Do not use.
     *     @type int $version
     *           Specifies the format of the policy. Valid values are `0`, `1`, and `3`. Requests that specify an invalid value are rejected. Any operation that affects conditional role bindings must specify version `3`. This requirement applies to the following operations: * Getting a policy that includes a conditional role binding * Adding a conditional role binding to a policy * Changing a conditional role binding in a policy * Removing any role binding, with or without a condition, from a policy that includes conditions **Important:** If you use IAM Conditions, you must include the `etag` field whenever you call `setIamPolicy`. If you omit this field, then IAM allows you to overwrite a version `3` policy with a version `1` policy, and all of the conditions in the version `3` policy are lost. If a policy does not include any conditions, operations on that policy may specify any valid version or leave the field unset. To learn which resources support conditions in their IAM policies, see the [IAM documentation](https://cloud.google.com/iam/help/conditions/resource-policies).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies cloud audit logging configuration for this policy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AuditConfig audit_configs = 328080653;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAuditConfigs()
    {
        return $this->audit_configs;
    }

    /**
     * Specifies cloud audit logging configuration for this policy.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.AuditConfig audit_configs = 328080653;</code>
     * @param \Google\Cloud\Compute\V1\AuditConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAuditConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\AuditConfig::class);
        $this->audit_configs = $arr;

        return $this;
    }

    /**
     * Associates a list of `members` to a `role`. Optionally, may specify a `condition` that determines how and when the `bindings` are applied. Each of the `bindings` must contain at least one member.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Binding bindings = 403251854;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBindings()
    {
        return $this->bindings;
    }

    /**
     * Associates a list of `members` to a `role`. Optionally, may specify a `condition` that determines how and when the `bindings` are applied. Each of the `bindings` must contain at least one member.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Binding bindings = 403251854;</code>
     * @param \Google\Cloud\Compute\V1\Binding[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBindings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\Binding::class);
        $this->bindings = $arr;

        return $this;
    }

    /**
     * `etag` is used for optimistic concurrency control as a way to help prevent simultaneous updates of a policy from overwriting each other. It is strongly suggested that systems make use of the `etag` in the read-modify-write cycle to perform policy updates in order to avoid race conditions: An `etag` is returned in the response to `getIamPolicy`, and systems are expected to put that etag in the request to `setIamPolicy` to ensure that their change will be applied to the same version of the policy. **Important:** If you use IAM Conditions, you must include the `etag` field whenever you call `setIamPolicy`. If you omit this field, then IAM allows you to overwrite a version `3` policy with a version `1` policy, and all of the conditions in the version `3` policy are lost.
     *
     * Generated from protobuf field <code>string etag = 3123477;</code>
     * @return string
     */
    public function getEtag()
    {
        return isset($this->etag) ? $this->etag : '';
    }

    public function hasEtag()
    {
        return isset($this->etag);
    }

    public function clearEtag()
    {
        unset($this->etag);
    }

    /**
     * `etag` is used for optimistic concurrency control as a way to help prevent simultaneous updates of a policy from overwriting each other. It is strongly suggested that systems make use of the `etag` in the read-modify-write cycle to perform policy updates in order to avoid race conditions: An `etag` is returned in the response to `getIamPolicy`, and systems are expected to put that etag in the request to `setIamPolicy` to ensure that their change will be applied to the same version of the policy. **Important:** If you use IAM Conditions, you must include the `etag` field whenever you call `setIamPolicy`. If you omit this field, then IAM allows you to overwrite a version `3` policy with a version `1` policy, and all of the conditions in the version `3` policy are lost.
     *
     * Generated from protobuf field <code>string etag = 3123477;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf field <code>bool iam_owned = 450566203;</code>
     * @return bool
     */
    public function getIamOwned()
    {
        return isset($this->iam_owned) ? $this->iam_owned : false;
    }

    public function hasIamOwned()
    {
        return isset($this->iam_owned);
    }

    public function clearIamOwned()
    {
        unset($this->iam_owned);
    }

    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf field <code>bool iam_owned = 450566203;</code>
     * @param bool $var
     * @return $this
     */
    public function setIamOwned($var)
    {
        GPBUtil::checkBool($var);
        $this->iam_owned = $var;

        return $this;
    }

    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Rule rules = 108873975;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * This is deprecated and has no effect. Do not use.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Rule rules = 108873975;</code>
     * @param \Google\Cloud\Compute\V1\Rule[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\Rule::class);
        $this->rules = $arr;

        return $this;
    }

    /**
     * Specifies the format of the policy. Valid values are `0`, `1`, and `3`. Requests that specify an invalid value are rejected. Any operation that affects conditional role bindings must specify version `3`. This requirement applies to the following operations: * Getting a policy that includes a conditional role binding * Adding a conditional role binding to a policy * Changing a conditional role binding in a policy * Removing any role binding, with or without a condition, from a policy that includes conditions **Important:** If you use IAM Conditions, you must include the `etag` field whenever you call `setIamPolicy`. If you omit this field, then IAM allows you to overwrite a version `3` policy with a version `1` policy, and all of the conditions in the version `3` policy are lost. If a policy does not include any conditions, operations on that policy may specify any valid version or leave the field unset. To learn which resources support conditions in their IAM policies, see the [IAM documentation](https://cloud.google.com/iam/help/conditions/resource-policies).
     *
     * Generated from protobuf field <code>int32 version = 351608024;</code>
     * @return int
     */
    public function getVersion()
    {
        return isset($this->version) ? $this->version : 0;
    }

    public function hasVersion()
    {
        return isset($this->version);
    }

    public function clearVersion()
    {
        unset($this->version);
    }

    /**
     * Specifies the format of the policy. Valid values are `0`, `1`, and `3`. Requests that specify an invalid value are rejected. Any operation that affects conditional role bindings must specify version `3`. This requirement applies to the following operations: * Getting a policy that includes a conditional role binding * Adding a conditional role binding to a policy * Changing a conditional role binding in a policy * Removing any role binding, with or without a condition, from a policy that includes conditions **Important:** If you use IAM Conditions, you must include the `etag` field whenever you call `setIamPolicy`. If you omit this field, then IAM allows you to overwrite a version `3` policy with a version `1` policy, and all of the conditions in the version `3` policy are lost. If a policy does not include any conditions, operations on that policy may specify any valid version or leave the field unset. To learn which resources support conditions in their IAM policies, see the [IAM documentation](https://cloud.google.com/iam/help/conditions/resource-policies).
     *
     * Generated from protobuf field <code>int32 version = 351608024;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt32($var);
        $this->version = $var;

        return $this;
    }

}

