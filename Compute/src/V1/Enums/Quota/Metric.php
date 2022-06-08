<?php
/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/compute/v1/compute.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Compute\V1\Enums\Quota;

/**
 * Metric contains string constants that represent the names of each value in the
 * google.cloud.compute.v1.Quota.Metric descriptor.
 */
class Metric
{
    const UNDEFINED_METRIC = 'UNDEFINED_METRIC';

    const A2_CPUS = 'A2_CPUS';

    const AFFINITY_GROUPS = 'AFFINITY_GROUPS';

    const AUTOSCALERS = 'AUTOSCALERS';

    const BACKEND_BUCKETS = 'BACKEND_BUCKETS';

    const BACKEND_SERVICES = 'BACKEND_SERVICES';

    const C2D_CPUS = 'C2D_CPUS';

    const C2_CPUS = 'C2_CPUS';

    const C3_CPUS = 'C3_CPUS';

    const COMMITMENTS = 'COMMITMENTS';

    const COMMITTED_A2_CPUS = 'COMMITTED_A2_CPUS';

    const COMMITTED_C2D_CPUS = 'COMMITTED_C2D_CPUS';

    const COMMITTED_C2_CPUS = 'COMMITTED_C2_CPUS';

    const COMMITTED_C3_CPUS = 'COMMITTED_C3_CPUS';

    const COMMITTED_CPUS = 'COMMITTED_CPUS';

    const COMMITTED_E2_CPUS = 'COMMITTED_E2_CPUS';

    const COMMITTED_LICENSES = 'COMMITTED_LICENSES';

    const COMMITTED_LOCAL_SSD_TOTAL_GB = 'COMMITTED_LOCAL_SSD_TOTAL_GB';

    const COMMITTED_M3_CPUS = 'COMMITTED_M3_CPUS';

    const COMMITTED_MEMORY_OPTIMIZED_CPUS = 'COMMITTED_MEMORY_OPTIMIZED_CPUS';

    const COMMITTED_N2A_CPUS = 'COMMITTED_N2A_CPUS';

    const COMMITTED_N2D_CPUS = 'COMMITTED_N2D_CPUS';

    const COMMITTED_N2_CPUS = 'COMMITTED_N2_CPUS';

    const COMMITTED_NVIDIA_A100_80GB_GPUS = 'COMMITTED_NVIDIA_A100_80GB_GPUS';

    const COMMITTED_NVIDIA_A100_GPUS = 'COMMITTED_NVIDIA_A100_GPUS';

    const COMMITTED_NVIDIA_K80_GPUS = 'COMMITTED_NVIDIA_K80_GPUS';

    const COMMITTED_NVIDIA_P100_GPUS = 'COMMITTED_NVIDIA_P100_GPUS';

    const COMMITTED_NVIDIA_P4_GPUS = 'COMMITTED_NVIDIA_P4_GPUS';

    const COMMITTED_NVIDIA_T4_GPUS = 'COMMITTED_NVIDIA_T4_GPUS';

    const COMMITTED_NVIDIA_V100_GPUS = 'COMMITTED_NVIDIA_V100_GPUS';

    const COMMITTED_T2A_CPUS = 'COMMITTED_T2A_CPUS';

    const COMMITTED_T2D_CPUS = 'COMMITTED_T2D_CPUS';

    const CPUS = 'CPUS';

    const CPUS_ALL_REGIONS = 'CPUS_ALL_REGIONS';

    const DISKS_TOTAL_GB = 'DISKS_TOTAL_GB';

    const E2_CPUS = 'E2_CPUS';

    const EXTERNAL_MANAGED_FORWARDING_RULES = 'EXTERNAL_MANAGED_FORWARDING_RULES';

    const EXTERNAL_NETWORK_LB_FORWARDING_RULES = 'EXTERNAL_NETWORK_LB_FORWARDING_RULES';

    const EXTERNAL_PROTOCOL_FORWARDING_RULES = 'EXTERNAL_PROTOCOL_FORWARDING_RULES';

    const EXTERNAL_VPN_GATEWAYS = 'EXTERNAL_VPN_GATEWAYS';

    const FIREWALLS = 'FIREWALLS';

    const FORWARDING_RULES = 'FORWARDING_RULES';

    const GLOBAL_EXTERNAL_MANAGED_FORWARDING_RULES = 'GLOBAL_EXTERNAL_MANAGED_FORWARDING_RULES';

    const GLOBAL_INTERNAL_ADDRESSES = 'GLOBAL_INTERNAL_ADDRESSES';

    const GPUS_ALL_REGIONS = 'GPUS_ALL_REGIONS';

    const HEALTH_CHECKS = 'HEALTH_CHECKS';

    const IMAGES = 'IMAGES';

    const INSTANCES = 'INSTANCES';

    const INSTANCE_GROUPS = 'INSTANCE_GROUPS';

    const INSTANCE_GROUP_MANAGERS = 'INSTANCE_GROUP_MANAGERS';

    const INSTANCE_TEMPLATES = 'INSTANCE_TEMPLATES';

    const INTERCONNECTS = 'INTERCONNECTS';

    const INTERCONNECT_ATTACHMENTS_PER_REGION = 'INTERCONNECT_ATTACHMENTS_PER_REGION';

    const INTERCONNECT_ATTACHMENTS_TOTAL_MBPS = 'INTERCONNECT_ATTACHMENTS_TOTAL_MBPS';

    const INTERCONNECT_TOTAL_GBPS = 'INTERCONNECT_TOTAL_GBPS';

    const INTERNAL_ADDRESSES = 'INTERNAL_ADDRESSES';

    const INTERNAL_TRAFFIC_DIRECTOR_FORWARDING_RULES = 'INTERNAL_TRAFFIC_DIRECTOR_FORWARDING_RULES';

    const IN_PLACE_SNAPSHOTS = 'IN_PLACE_SNAPSHOTS';

    const IN_USE_ADDRESSES = 'IN_USE_ADDRESSES';

    const IN_USE_BACKUP_SCHEDULES = 'IN_USE_BACKUP_SCHEDULES';

    const IN_USE_SNAPSHOT_SCHEDULES = 'IN_USE_SNAPSHOT_SCHEDULES';

    const LOCAL_SSD_TOTAL_GB = 'LOCAL_SSD_TOTAL_GB';

    const M1_CPUS = 'M1_CPUS';

    const M2_CPUS = 'M2_CPUS';

    const M3_CPUS = 'M3_CPUS';

    const MACHINE_IMAGES = 'MACHINE_IMAGES';

    const N2A_CPUS = 'N2A_CPUS';

    const N2D_CPUS = 'N2D_CPUS';

    const N2_CPUS = 'N2_CPUS';

    const NETWORKS = 'NETWORKS';

    const NETWORK_ENDPOINT_GROUPS = 'NETWORK_ENDPOINT_GROUPS';

    const NETWORK_FIREWALL_POLICIES = 'NETWORK_FIREWALL_POLICIES';

    const NODE_GROUPS = 'NODE_GROUPS';

    const NODE_TEMPLATES = 'NODE_TEMPLATES';

    const NVIDIA_A100_80GB_GPUS = 'NVIDIA_A100_80GB_GPUS';

    const NVIDIA_A100_GPUS = 'NVIDIA_A100_GPUS';

    const NVIDIA_K80_GPUS = 'NVIDIA_K80_GPUS';

    const NVIDIA_P100_GPUS = 'NVIDIA_P100_GPUS';

    const NVIDIA_P100_VWS_GPUS = 'NVIDIA_P100_VWS_GPUS';

    const NVIDIA_P4_GPUS = 'NVIDIA_P4_GPUS';

    const NVIDIA_P4_VWS_GPUS = 'NVIDIA_P4_VWS_GPUS';

    const NVIDIA_T4_GPUS = 'NVIDIA_T4_GPUS';

    const NVIDIA_T4_VWS_GPUS = 'NVIDIA_T4_VWS_GPUS';

    const NVIDIA_V100_GPUS = 'NVIDIA_V100_GPUS';

    const PACKET_MIRRORINGS = 'PACKET_MIRRORINGS';

    const PD_EXTREME_TOTAL_PROVISIONED_IOPS = 'PD_EXTREME_TOTAL_PROVISIONED_IOPS';

    const PREEMPTIBLE_CPUS = 'PREEMPTIBLE_CPUS';

    const PREEMPTIBLE_LOCAL_SSD_GB = 'PREEMPTIBLE_LOCAL_SSD_GB';

    const PREEMPTIBLE_NVIDIA_A100_80GB_GPUS = 'PREEMPTIBLE_NVIDIA_A100_80GB_GPUS';

    const PREEMPTIBLE_NVIDIA_A100_GPUS = 'PREEMPTIBLE_NVIDIA_A100_GPUS';

    const PREEMPTIBLE_NVIDIA_K80_GPUS = 'PREEMPTIBLE_NVIDIA_K80_GPUS';

    const PREEMPTIBLE_NVIDIA_P100_GPUS = 'PREEMPTIBLE_NVIDIA_P100_GPUS';

    const PREEMPTIBLE_NVIDIA_P100_VWS_GPUS = 'PREEMPTIBLE_NVIDIA_P100_VWS_GPUS';

    const PREEMPTIBLE_NVIDIA_P4_GPUS = 'PREEMPTIBLE_NVIDIA_P4_GPUS';

    const PREEMPTIBLE_NVIDIA_P4_VWS_GPUS = 'PREEMPTIBLE_NVIDIA_P4_VWS_GPUS';

    const PREEMPTIBLE_NVIDIA_T4_GPUS = 'PREEMPTIBLE_NVIDIA_T4_GPUS';

    const PREEMPTIBLE_NVIDIA_T4_VWS_GPUS = 'PREEMPTIBLE_NVIDIA_T4_VWS_GPUS';

    const PREEMPTIBLE_NVIDIA_V100_GPUS = 'PREEMPTIBLE_NVIDIA_V100_GPUS';

    const PSC_ILB_CONSUMER_FORWARDING_RULES_PER_PRODUCER_NETWORK = 'PSC_ILB_CONSUMER_FORWARDING_RULES_PER_PRODUCER_NETWORK';

    const PSC_INTERNAL_LB_FORWARDING_RULES = 'PSC_INTERNAL_LB_FORWARDING_RULES';

    const PUBLIC_ADVERTISED_PREFIXES = 'PUBLIC_ADVERTISED_PREFIXES';

    const PUBLIC_DELEGATED_PREFIXES = 'PUBLIC_DELEGATED_PREFIXES';

    const REGIONAL_AUTOSCALERS = 'REGIONAL_AUTOSCALERS';

    const REGIONAL_INSTANCE_GROUP_MANAGERS = 'REGIONAL_INSTANCE_GROUP_MANAGERS';

    const RESERVATIONS = 'RESERVATIONS';

    const RESOURCE_POLICIES = 'RESOURCE_POLICIES';

    const ROUTERS = 'ROUTERS';

    const ROUTES = 'ROUTES';

    const SECURITY_POLICIES = 'SECURITY_POLICIES';

    const SECURITY_POLICIES_PER_REGION = 'SECURITY_POLICIES_PER_REGION';

    const SECURITY_POLICY_CEVAL_RULES = 'SECURITY_POLICY_CEVAL_RULES';

    const SECURITY_POLICY_RULES = 'SECURITY_POLICY_RULES';

    const SECURITY_POLICY_RULES_PER_REGION = 'SECURITY_POLICY_RULES_PER_REGION';

    const SERVICE_ATTACHMENTS = 'SERVICE_ATTACHMENTS';

    const SNAPSHOTS = 'SNAPSHOTS';

    const SSD_TOTAL_GB = 'SSD_TOTAL_GB';

    const SSL_CERTIFICATES = 'SSL_CERTIFICATES';

    const STATIC_ADDRESSES = 'STATIC_ADDRESSES';

    const STATIC_BYOIP_ADDRESSES = 'STATIC_BYOIP_ADDRESSES';

    const SUBNETWORKS = 'SUBNETWORKS';

    const T2A_CPUS = 'T2A_CPUS';

    const T2D_CPUS = 'T2D_CPUS';

    const TARGET_HTTPS_PROXIES = 'TARGET_HTTPS_PROXIES';

    const TARGET_HTTP_PROXIES = 'TARGET_HTTP_PROXIES';

    const TARGET_INSTANCES = 'TARGET_INSTANCES';

    const TARGET_POOLS = 'TARGET_POOLS';

    const TARGET_SSL_PROXIES = 'TARGET_SSL_PROXIES';

    const TARGET_TCP_PROXIES = 'TARGET_TCP_PROXIES';

    const TARGET_VPN_GATEWAYS = 'TARGET_VPN_GATEWAYS';

    const URL_MAPS = 'URL_MAPS';

    const VPN_GATEWAYS = 'VPN_GATEWAYS';

    const VPN_TUNNELS = 'VPN_TUNNELS';

    const XPN_SERVICE_PROJECTS = 'XPN_SERVICE_PROJECTS';
}
