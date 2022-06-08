<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1\AgentPool;

use UnexpectedValueException;

/**
 * The state of an AgentPool.
 *
 * Protobuf type <code>google.storagetransfer.v1.AgentPool.State</code>
 */
class State
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * This is an initialization state. During this stage, the resources such as
     * Pub/Sub topics are allocated for the AgentPool.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * Determines that the AgentPool is created for use. At this state, Agents
     * can join the AgentPool and participate in the transfer jobs in that pool.
     *
     * Generated from protobuf enum <code>CREATED = 2;</code>
     */
    const CREATED = 2;
    /**
     * Determines that the AgentPool deletion has been initiated, and all the
     * resources are scheduled to be cleaned up and freed.
     *
     * Generated from protobuf enum <code>DELETING = 3;</code>
     */
    const DELETING = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::CREATED => 'CREATED',
        self::DELETING => 'DELETING',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


