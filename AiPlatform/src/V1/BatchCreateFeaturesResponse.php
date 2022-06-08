<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [FeaturestoreService.BatchCreateFeatures][google.cloud.aiplatform.v1.FeaturestoreService.BatchCreateFeatures].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.BatchCreateFeaturesResponse</code>
 */
class BatchCreateFeaturesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The Features created.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Feature features = 1;</code>
     */
    private $features;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\Feature[]|\Google\Protobuf\Internal\RepeatedField $features
     *           The Features created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * The Features created.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Feature features = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * The Features created.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Feature features = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\Feature[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\Feature::class);
        $this->features = $arr;

        return $this;
    }

}

