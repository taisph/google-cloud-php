<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_jobs.proto

namespace Google\Cloud\OsConfig\V1\PatchRollout;

use UnexpectedValueException;

/**
 * Type of the rollout.
 *
 * Protobuf type <code>google.cloud.osconfig.v1.PatchRollout.Mode</code>
 */
class Mode
{
    /**
     * Mode must be specified.
     *
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * Patches are applied one zone at a time. The patch job begins in the
     * region with the lowest number of targeted VMs. Within the region,
     * patching begins in the zone with the lowest number of targeted VMs. If
     * multiple regions (or zones within a region) have the same number of
     * targeted VMs, a tie-breaker is achieved by sorting the regions or zones
     * in alphabetical order.
     *
     * Generated from protobuf enum <code>ZONE_BY_ZONE = 1;</code>
     */
    const ZONE_BY_ZONE = 1;
    /**
     * Patches are applied to VMs in all zones at the same time.
     *
     * Generated from protobuf enum <code>CONCURRENT_ZONES = 2;</code>
     */
    const CONCURRENT_ZONES = 2;

    private static $valueToName = [
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::ZONE_BY_ZONE => 'ZONE_BY_ZONE',
        self::CONCURRENT_ZONES => 'CONCURRENT_ZONES',
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


