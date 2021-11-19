<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\RouterBgpPeer;

use UnexpectedValueException;

/**
 * [Output Only] The resource that configures and manages this BGP peer. - MANAGED_BY_USER is the default value and can be managed by you or other users - MANAGED_BY_ATTACHMENT is a BGP peer that is configured and managed by Cloud Interconnect, specifically by an InterconnectAttachment of type PARTNER. Google automatically creates, updates, and deletes this type of BGP peer when the PARTNER InterconnectAttachment is created, updated, or deleted. 
 *
 * Protobuf type <code>google.cloud.compute.v1.RouterBgpPeer.ManagementType</code>
 */
class ManagementType
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_MANAGEMENT_TYPE = 0;</code>
     */
    const UNDEFINED_MANAGEMENT_TYPE = 0;
    /**
     * The BGP peer is automatically created for PARTNER type InterconnectAttachment; Google will automatically create/delete this BGP peer when the PARTNER InterconnectAttachment is created/deleted, and Google will update the ipAddress and peerIpAddress when the PARTNER InterconnectAttachment is provisioned. This type of BGP peer cannot be created or deleted, but can be modified for all fields except for name, ipAddress and peerIpAddress.
     *
     * Generated from protobuf enum <code>MANAGED_BY_ATTACHMENT = 458926411;</code>
     */
    const MANAGED_BY_ATTACHMENT = 458926411;
    /**
     * Default value, the BGP peer is manually created and managed by user.
     *
     * Generated from protobuf enum <code>MANAGED_BY_USER = 317294067;</code>
     */
    const MANAGED_BY_USER = 317294067;

    private static $valueToName = [
        self::UNDEFINED_MANAGEMENT_TYPE => 'UNDEFINED_MANAGEMENT_TYPE',
        self::MANAGED_BY_ATTACHMENT => 'MANAGED_BY_ATTACHMENT',
        self::MANAGED_BY_USER => 'MANAGED_BY_USER',
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


